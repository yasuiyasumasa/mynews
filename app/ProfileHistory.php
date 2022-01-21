<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    // 追記（2022/01/19）
    protected $guarded = array('id');
    public static $rules = array(
      'profile_id' => 'required',
      'edited_at' => 'required',
    );
}
