  {{-- layouts/admin.blade.phpを読み込む --}}
  @extends('layouts.admin')
  
  {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
  @section('title', 'プロフィールの新規作成')
  
  {{-- admin.blade.phpの@yeld('content')に以下のだ具を埋め込む --}}
  @section('content')
      <div class="conteiner">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2>プロフィールの新規作成</h2>
          </div>
        </div>
      </div>
  @endsection
  