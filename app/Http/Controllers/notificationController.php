<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\ViewComposers\NavbarComposer;
use App\Notification;
use App\User;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newNoti= Notification::create([
                    'user_id' => Auth::id(),
                    'type' => $request->input('type'),
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                    'session_id' => $request->input('target')
                ]);
        
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
