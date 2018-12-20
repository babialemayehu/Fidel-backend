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
    public static function saveFile($fileInstance,$session_id='', $type= 0){
        $file_catagorys = [
            'txt'   => 'file-alt',
            'pdf'   => 'file-pdf',
            'docx'  => 'file-word',
            'doc'   => 'file-word',
            'mp4'   => 'video',
            'mov'   => 'video',
            'avi'   => 'video',
            'flv'   => 'video',
            'wmv'   => 'video',
            'mp3'   => 'itunes-note',
            'm4a'   => 'itunes-note',
            'ogg'   => 'itunes-note',
            'html'  => 'file-code',
            'css'   => 'file-code',
            'js'    => 'file-code',
            'cpp'   => 'file-code',
            'java'  => 'file-code',
            'sql'   => 'database',
            'xlsx'  => 'file-excel',
            'csv'   => 'file-excel',
            'ppt'   => 'file-powerpoint',
            'pptx'  => 'file-powerpoint',
            'jpg'   => 'image',
            'png'   => 'image',
            'gif'   => 'image', 
            'jpeg'  => 'image', 
            'zip'   => 'file-archive', 
            'rar'   => 'file-archive',
            '7z'    => 'file-archive',
            'gz'    => 'file-archive',
            'tar'   => 'file-archive',
            'bz'    => 'file-archive',
            'jar'   => 'java',
            'iso'   => 'compact-disc',
            'apk'   =>  'android', 
            'exe'   => 'windows'
        ];
        $file = new File;
        $file->size = $fileInstance->getClientSize();
        $file->type = $fileInstance->Extension();
        $file->catagory = isset($file_catagorys[$file->type])?$file_catagorys[$file->type]:"file";
        $file->location = $fileInstance->path();
        $file->user_id = Auth::id();
        $file->course_session_id = $session_id;
        $file->name = $fileInstance->getClientOriginalName();
        $file->loc = $type; 
        $file->save();
        $file->location = $fileInstance->storeAs('public/'.$session_id,$file->id.'_'.$fileInstance->getClientOriginalName());
        $file->save();
        return $file;
    }

}