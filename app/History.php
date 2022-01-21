<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    // 追記(2022/01/12)
    protected $guarded = array('id');
    public static $roules = array(
      'news_id' => 'required',
      'edited_at' => 'requied',
    );
}
