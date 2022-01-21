<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //以下を追記 (2022/01/05)
    protected $guarded = array('id');
    
    public static $rules = array(
      'name' => 'required',
      'gender' => 'required',
      'hobby' => 'required',
      'introduction' => 'required',
    );
    
    public function profilehistories()
    {
      return $this->hasMany('App\ProfileHistory');
    }
}