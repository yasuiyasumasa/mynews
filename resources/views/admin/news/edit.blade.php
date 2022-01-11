  {{-- layouts/admin.blade.phpを読み込む --}}
  @extends('layouts.admin')
  
  {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
  @section('title', 'ニュースの編集')
  
  {{-- admin.blade.phpの@yeld('content')に以下のタグを埋め込む --}}
  @section('content')
      <div class="conteiner">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2>ニュースの編集</h2>
            <form action="{{ action('Admin\NewsController@update') }}" method="post" enctype="multipart/form-data">
              @if (count($errors) > 0)
               <ul>
                 @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                 @endforeach  
               </ul>
              @endif
              <div class="form-group row">
                <label class="col-md-2">タイトル</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="title" value="{{ old('title', $news->title) }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">本文</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="body" rows="20">{{ old('body', $news->body) }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">画像</label>
                 <div class="col-md-10">
                  <input type="file" class="form-control-file" name="image">
                  <div class="form-text text-info">
                    設定中: {{ $news->image_path }}
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                    </label>
                  </div>
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
  