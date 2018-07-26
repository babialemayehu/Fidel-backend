<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class today{
    
}
class calenderController extends Controller
{   
    private $weeks = ['sunday','monday','tusday','wednesday','tursday','firday','saterday'];
    public function index($month = 'm',$year= 'y'){
        $month = ($month == 'm')?date('m'):$month;
        $year = ($year == 'y')?date('y'):$year;
        
        $timestamp = mktime(0,0,0,$month,1,$year);
        $date = strtotime('first day of', $timestamp);
        $weekOfFirstDay = getdate($date)['wday'];

        $monthLength = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $previousMonth = (($month - 1) < 1)?12:($month-1);

        $year = (($month - 1) < 1)?($year-1):$year;
        $previousMonthLength = cal_days_in_month(CAL_GREGORIAN, $previousMonth ,$year);
        return $this->calender($previousMonthLength,$monthLength,$weekOfFirstDay);
    }
    protected function calender($pml, $tml, $wfd){
        /*
        pml = privious month length
        tml = this month length
        wfd = week of first day
        */
        $last = false;
        $day = $pml - ($wfd - 1);
        if(($tml + $wfd)>35)
            $row = 6; 
        else if($tml == 28 && $wfd == 0)
            $row = 4;
        else
            $row = 5;
        
        $cal = [[],[]];
        for($r=0; $r < $row; $r++){
            for($c = 0;$c < 7; $c++){
                if($day > $pml && !$last){
                    $day = 1;
                    $last = true;
                }
                $cal[$r][$c] = $day;
                $day++;

                if($last && $day>$tml)
                    $day = 1;
            }
        }
        return $cal;
    }
   
    public function view(){
         return view("pages.c");
    }
}
