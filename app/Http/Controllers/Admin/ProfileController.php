<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでprofile Modelが扱えるようになる（2022/01/05）
use App\Profile;

class ProfileController extends Controller
{
   public function add()
   {
    return view('admin.profile.create');
   }
  
  public function create(Request $request)
  {
    
    // 以下を追記（2022/01/05）
    // Varidationを行う
    $this->validate($request, Profile::$rules);
    
    $profile = new Profile;
    $form = $request->all();
    
     // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    
     // データベースに保存する
    $profile->fill($form);
    $profile->save();
      
    return redirect('admin/profile/create');
  }
    
    public function edit()
    {
      return view('admin.profile.edit');
    }
    
    public function update()
    {
      return redirect('admin/proflile/edit');
    }
}
