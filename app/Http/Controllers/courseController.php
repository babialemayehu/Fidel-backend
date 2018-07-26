<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Chapter;
use App\Sub_chapter;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course_index(){
        $course = Course::paginate(20);
        return $course;
    }
    public function index()
    {
        return view('pages.manege.course');
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
    private function storeCourse($data){
        return Course::create([
                    'name'          => $data->name,
                    'code'          => $data->code,
                    'credit_hr'     => $data->credit_hr,
                    'ECTS'          => $data->ECTS,
                    'weeks'         => $data->weeks,
                    'delivery'      => $data->delivery,
                    'objective'     => $data->objective,
                    'discription'   => $data->discription
                ]);
    }
    private function storeChapterAndSub($data,$course_id){
        $chapters = json_decode($data->chapter);
        $sub_chapters = json_decode($data->subChapter);
        $i = 0;
        foreach($chapters as $chapter){
            if($chapter != ''){
                $ch = new Chapter;
                $ch->cource_id = $course_id;
                $ch->name = $chapter;
                $ch->save();
                foreach($sub_chapters[$i] as $sub){
                    if($sub != '')
                    Sub_chapter::create([
                        'chapter_id' => $ch->id,
                        'name' => $sub,
                    ]);
                }
                $i++;
            }
        }
    }
    public function store(Request $request)
    {
        $courseData = json_decode($request->input('course'));
        $courseOutile = json_decode($request->input('outline'));

        $id = $this->storeCourse($courseData)->id;
        $this->storeChapterAndSub($courseOutile,$id);
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
        Course::findOrFail($id)->delete();
        $chapters = Chapter::where('cource_id',$id);
        $chs = $chapters->get();
        foreach($chs as $chpater){
            $sub = Sub_chapter::where('chapter_id',$chpater->id)->delete();
        }
        $chapters->delete();
    }
}
