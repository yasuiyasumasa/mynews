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
     
     
     // データベースに保存する
     $profile->fill($form);
     $profile->save();
      
     return redirect('admin/profile/create');
    }
    
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;$cond_title;
      if ($cond_title != '') {
      // 検索されたら検索結果を取得する
     } else {
      // それ以外は全てのニュースを取得する
      $posts = Profile::all();
     }
     return view('admin.profile.index', ['posts' => $posts,'cond_title' => $cond_title]);
   }
  
    public function edit(Request $request)
    {
      $news = Profile::find($request->id);
      if (empty($news)) {
        abort(404);
      }
      return view('admin.profile.edit', ['news' => $news]);
    }
    
    public function update(Request $request)
    {
      $this->validate($request, Profile::$rules);
      $profile = Profile::find($request->id);
      $profile = $request->all();
      
      unset($profile_form['image']);
      unset($profile_form['remove']);
      unset($profile_form['_token']);
      $profile_form->fill($profile_form)->save();
      
      return redirect('admin/proflile');
    }
    
    public function delete(Request $request)
    {
      // 該当するNews Modelを取得
      $news = News::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/profile/');
   }  
}
