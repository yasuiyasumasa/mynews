<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // 以下を追加（更新2022/1/4）
    public function add()
    {
      return view('admin.profile.create');
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
      return redirect('admin/proflile/edit');
    }
}
