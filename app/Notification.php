<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;
class Notification extends Model
{
    protected $fillable = ['user_id', 'type','title','content','target','session_id'];
}
