<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //　以下を追加しました。
    public function add()
    {
      return view('admin.profil.create');
    }
    
    public function create()
    {
      return redirect('admin/profile/create');
    }
    
    public function edit()
    {
      return view('admin.profile.edit');
    }
    
    public function update()
    {
      return redirect('admin/profile/edit');
    }
    
}
