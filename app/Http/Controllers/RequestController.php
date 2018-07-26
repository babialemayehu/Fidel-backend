<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Vote; 
use App\Req; 
use App\Course_session; 

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.request');
    }
    public function request($id){
        return view('pages.request')->with('id', $id);
    }
    public function getRequests($id){
        $r = Req::where("session_id", $id)->orderBy('updated_at','desc')->paginate(15); 
        $numberOfStudents = Course_session::find($id)->group()->count(); 
        foreach($r as $request){
            $request->numberOfStudents = $numberOfStudents;
            $request->currentVotePersent = $request->vote()->count()/$numberOfStudents;
            $request->isVoted = $request->vote()->get()->contains(function($value, $key){
                return $value->user_id == Auth::id(); 
            }); 
        }
        return view('pages.requestList')->with('requests',$r); 
    }
    public function vote($id){
        Vote::create([
            'request_id' => $id,
            'user_id' => Auth::id()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Req::create([
            "session_id" =>$request->id,
            "request" => $request->input('request'), 
            "responce" => null, 
            "min_vote" => $request->minVote
        ]);
        // $newNoti= Notification::create([
        //     'user_id' => Auth::id(),
        //     'type' => 'class',
        //     'title' => 'You have arequest',
        //     'content' => 'lkjadslfkjeijfasd',
        //     'session_id' => 1
        // ]);
        
        return $request->input('request'); 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
