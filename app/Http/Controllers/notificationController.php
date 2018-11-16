<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\ViewComposers\NavbarComposer;
use App\Notification;
use App\User;
use App\Http\Controllers\Sms\SendSms; 
use App\Course_session; 

class notificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRecentNotification(){
        $sessions = new NavbarComposer(); 
        $sessions = $sessions->user_sessions();
        $sessionIds = []; 
        foreach($sessions as $session){
            array_push($sessionIds, $session->id); 
        }
        $noti = Notification::whereIn('session_id', $sessionIds)->orderBy('created_at','desc')->take(6)->get();
        foreach($noti as $n){
            $n->created = $n->created_at->diffForHumans();
       }
        return $noti;
    }
    public function getNotificaion(){
        $noti = Notification::orderBy('created_at','desc')->paginate(15);
        return $noti;
    }
    public function index()
    {
        return view('pages.notification');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        SendSms::sendToSession($noti->session_id, $noti->type."\n".$noti->title."\n".$noti->content);
        return $noti;

    }

    public function test(){
        
        return SendSms::send("910867889", "form my pc"); ; 
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
