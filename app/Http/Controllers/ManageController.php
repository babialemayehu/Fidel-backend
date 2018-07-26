<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(){
        $session = new sessionController(); 
        $groupNames = [];
        $groups = $session->groups();
         if($groups !== false){
             foreach($groups as $group)
                 $groupNames[$group->id] = $group->name .' '. 'A';
         }
         return view('pages.manege')->with('groupNames', $groupNames)
                                    ->with('isgroupNamesEmpty',empty($groupNames));
    }
    public function sessionFormView(){
        $session = new sessionController(); 
        $groupNames = [];
        $groups = $session->groups();
         if($groups !== false){
             foreach($groups as $group)
                 $groupNames[$group->id] = $group->name .' '. 'A';
         }
         return view('pages.manege.forms.session')->with('groupNames', $groupNames)
                                    ->with('isgroupNamesEmpty',empty($groupNames));
    }
    public function groupFormView(){
        return view('pages.manege.forms.group'); 
    }
    public function courceFormView(){
        return view('pages.manege.forms.cource');         
    }
}
