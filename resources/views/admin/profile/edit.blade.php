  @extends('layouts.admin')
  
  {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
  @section('title', 'プロフィールの編集')
  
  {{-- admin.blade.phpの@yeld('content')に以下のタグを埋め込む --}}
  @section('content')
      <div class="conteiner">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2>プロフィールの編集</h2>
            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
              @if (count($errors) > 0)
               <ul>
                 @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                 @endforeach  
               </ul>
              @endif
              <div class="form-group row">
                <label class="col-md-2">氏名(name)</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="name" value="{{ old('name', $news->name) }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">性別(gender)</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="gender" rows="1">{{ old('gender', $news->gender) }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">趣味(hobby)</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="hobby" rows="2">{{ old('hobby', $news->hobby) }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">自己紹介(introduction)</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                </div>
              </div>
              <input type="hidden" name="id" value="{{ $news->id }}">
              {{ csrf_field() }}
               <input type="submit" class="btn btn-primary" value="更新">
            </form>
          </div>
        </div>
      </div>
  @endsection
