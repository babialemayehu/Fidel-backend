<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Custom\Helper;
use App\User_group;

class userGroupController extends Controller
{
    public function membersCount($id){
        return User_group::where('group_id',$id)->count();
    }
    public function membersList($id){
        $groups = User_group::where('group_id',$id)->get();
        $i = 0;
        foreach($groups as $g)
            $data[$i++] = $g->user()->first()->regId;
        return $data;
    }
    public function edit(Request $request,$id){
        $removes = json_decode($request->input('remove'));
        $adds = json_decode($request->input('add'));

        foreach($removes as $remove){
            $remove_user_id = Helper::userByRegId($remove)->id;
            User_group::where('group_id',$id)->where('user_id', $remove_user_id)->delete();
        }
        foreach($adds as $add){
            $group = new User_group;
            $group->user_id = Helper::userByRegId($add)->id;
            $group->group_id = $id;
            $group->save();
        }
        return $request->input('add');
    }
}
