<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    // 以下を追記(2022/01/05,12)
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    // 以下を追記(2022/01/05,12)
    // News Modelに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}    
