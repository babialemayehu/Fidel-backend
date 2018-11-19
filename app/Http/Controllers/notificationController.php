<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\ViewComposers\NavbarComposer;
use App\Notification;
use App\User;
use App\Jobs\SendSms; 
use App\Jobs\SendSessionSms; 
use App\Course_session; 
use App\User_notification; 
use Carbon\Carbon; 

class notificationController extends Controller
{
    public static function userNotifications($limit =  -1){
        $noti = Auth::user()->notifications()->orderBy('created_at','desc'); 

        if($limit != -1){ $noti = $noti->take($limit)->get(); }
        else{ $noti = $noti->get(); }

        foreach($noti as $n){
            $n->created = $n->created_at->diffForHumans();
            $user_noti = Auth::user()->user_notification()->where("notification_id", $n->id); 
            $n->seen = $user_noti->first()->seen; 
            $user_noti->update(['seen' => 1]); 
        }
    
        return $noti; 
    }
    public function getRecentNotification(){  
        return notificationController::userNotifications(6);
    }
    public function getNotificaion(){
        return  Auth::user()->notifications()->orderBy('created_at','desc')->paginate(15);
    }
    public function index()
    {
        return view('pages.notification');
    }

    public function create()
    {
           return 'create';
    }

    public static function notify($type, $title, $content, $session_id){
        $noti = Notification::create([
            'user_id' => Auth::id(),
            'type' => $type, 
            'title' => $title, 
            'content' => $content, 
            'session_id' => $session_id
        ]);
        
        $group = $noti->session()->first()->group()->first();
        $users = $group->users()->get(); 
        foreach($users as $user){
            User_notification::create([
                'notification_id' => $noti->id, 
                'user_id' => $user->id
            ]); 
        }
        User_notification::create([
            'notification_id' => $noti->id, 
            'user_id' => Auth::id()
        ]); 

        $job = (new SendSessionSms( 
                    $noti->session_id, 
                    $noti->type."\n".$noti->title."\n".$noti->content, 
                    Auth::id()
                    ))
            ->delay(Carbon::now()->addSecond(1));

        dispatch($job);
        return $noti;

    }

    public function test(){
     SendSms::dispatch("910867889", "form my pc queue debug")->delay(
            Carbon::now()->addSecond(5)
        ); 
        return "Hellow "; 
        
    }

    public function store(Request $request)
    {
         $newNoti = notificationController::notify(
                $request->input('type'),
                $request->input('title'),
                $request->input('content'),
                $request->input('target')); 
                
        return $newNoti->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noti = Notification::find($id);
        $noti->type = $request->input('type');
        $noti->title = $request->input('title');
        $noti->content = $request->input('content');
        $noti->target = $request->input('target');
        $noti->save();
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notification::find($id)->delete();
        return 'delete';
    }
}
