<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\ViewComposers\NavbarComposer;
use App\Event;
use App\User;
use App\Course; 
use App\Course_session;

class EventsController extends Controller
{
    public function getEvents($month = '',$year = ''){
        $month = ($month == '')?date('m'):$month;
        $year = ($year == '')?'20'.date('y'):$year;
        $arr = [];
        $sessionsId = []; 
        $monthLength = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $sessions = new NavbarComposer(); 
        $teachers = $sessions->user_sessions();

        foreach($teachers as $session)
            array_push($sessionsId, $session->id); 
            
        for($i = 1;$i <= $monthLength+1;$i++){
            $data = Event::whereYear('date','=',($month==11)?$year+1:$year)
                        ->whereMonth('date','=',($i > $monthLength)?($month+1)%12:$month);
            
            $events = $data->whereDay('date','=',($i > $monthLength)?1:$i)->whereIn('session_id', $sessionsId)->get();

            foreach($events as $e){
                $to = explode(":",$e->to); 
                $from = explode(":",$e->from);

                $e->to = $to[0].":".$to[1];
                $e->from = $from[0].":".$from[1];
                foreach($teachers as $teacher){
                    if($e->user_id == $teacher->teacher_id){
                        $e->abbr = Course::find($teacher->course_id)->first()->abr; 
                        break; 
                    }                
                }
            }
            $arr[$i-1]=$events; 
        }
        return $arr;
    }
    public function schedule(Request $request){
        $date = date("y-m-d"); 
        $week = date("w");

        $difference = intval($request->week)-intval($week); 

        $eventDate = date("y-m-d", strtotime($date.' + '.(($difference >= 0)?$difference:(8+$difference)).' days')); 
        
        $session = Course_session::findorfail($request->session_id); 

        $session_end = substr($session->end_date, 2); 
        while($eventDate < $session_end){
            $this->newEvent('class', $eventDate, $request->from, $request->to, $request->session_id,"Weekly class"); 
            $eventDate = date ("y-m-d", strtotime($eventDate.' + 7 days')); 
        }
        return $request->all();
    }
    public function index()
    {
       return 'index';
    }


    public function create()
    {
        return 'crasdfeate';
    }

    private function newEvent($type, $date, $from, $to, $session_id, $discription = ""){
        $Event = new Event();
        $Event->user_id = Auth::id();
        $Event->type = $type;
        $Event->discription = $discription;
        $Event->date = $date;
        $Event->from = $from;
        $Event->to = $to;
        $Event->session_id = $session_id;
        $Event->save();
        return $Event;
    }
    public function store(Request $request)
    {
        $this->newEvent( $request->input('type'), 
                    $request->input('date'),
                    $request->input('from'),
                    $request->input('to'),
                    $request->input('session_id'),
                    $request->input('discription'));
   
        return 'store';
    }
    
 
    public function show($id)
    {
        return 'show';
    }


    public function edit($id)
    {
        return 'edi atast';
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
        $Event = Event::find($id);
        $Event->type = $request->input('type');
        $Event->discription = $request->input('discription');
        $Event->date = $request->input('date');
        $Event->from = $request->input('from');
        $Event->to = $request->input('to');
        $Event->save();

        return 'update '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Event = Event::find($id)->delete();
        return 'delete';
    }
}
