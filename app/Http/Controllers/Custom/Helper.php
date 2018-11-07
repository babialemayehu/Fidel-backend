<?php 
namespace App\Http\Controllers\Custom;
use Illuminate\Support\Facades\Auth;
use App\Group;
use App\User;
use App\Teacher;
use App\File;

class Helper{
    public static function teacherId($regId){
        $x = 1 +1; 
        $y = 2; 
        return Helper::userByRegId($regId)
        ->teacher()
        ->first()
        ->id;
    }
    public static function userByRegId($reg_id){
        return User::where('regId',$reg_id)->first();
    }
    public static function userRoles($userId){
        return User::findOrFail($userId)->user_role();
    }
    public static function saveFile($fileInstance,$session_id=''){
        $file_catagorys = [
            'txt'   => 'text',
            'pdf'   => 'pdf',
            'docx'  => 'word',
            'doc'   => 'word',
            'mp4'   => 'video',
            'mov'   => 'video',
            'mp3'   => 'audio',
            'html'  => 'code',
            'css'   => 'code',
            'js'    => 'code',
            'cpp'   => 'code',
            'sql'   => 'code',
            'xlsx'  => 'excel',
            'csv'   => 'excel',
            'ppt'   => 'powerpoint',
            'pptx'  => 'powerpoint',
            'jpg'   => 'photo',
            'png'   => 'picture',
            'gif'   => 'picture', 
            'jpeg'  => 'picture'
        ];
        $file = new File;
        $file->size = $fileInstance->getClientSize();
        $file->type = $fileInstance->Extension();
        $file->catagory = $file_catagorys[$file->type];
        $file->location = $fileInstance->path();
        $file->user_id = Auth::id();
        $file->course_session_id = $session_id;
        $file->name = $fileInstance->getClientOriginalName();
        $file->save();
        $file->location = $fileInstance->storeAs('public/'.$session_id,$file->id.'_'.$fileInstance->getClientOriginalName());
        $file->save();
        return $file;
    }

}