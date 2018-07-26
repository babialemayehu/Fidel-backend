<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Question;

class questionController extends Controller
{
    
    public function index($id)
    {
        return view('pages.questions')->with('id', $id); 
    }
 
    public function getQuestions($id)
    {
        $questions = Question::where('session_id', $id)->orderBy('updated_at','desc')->paginate(15);
    
        return view('pages.questionsList')->with('questions',$questions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::create([
            'student_id' => Auth::id(),
            'session_id' => $request->input('session_id'),
            'question' => $request->input('question'),
            'is_answerd' => false,
            'seen' => false
        ]);
        return 'stored';
    }

    public function answer(Request $request){
        Question::find($request->id)->update(["answer"=>trim($request->answer),"is_answerd"=>1]);
        return $request->all(); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Question::where('session_id',$id)->paginate();
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
