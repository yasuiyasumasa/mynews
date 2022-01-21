  @extends('layouts.profile')
  @section('title', 'プロフィールの編集')
  
  @section('content')
    <div class="container">
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
              <label class="col-md-2" for="name">氏名(name)</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="gender">性別(gender)</label>
              <div class="col-md-10">
                <textarea class="form-control" name="gender" rows="1">{{ $profile->gender }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="hobby">趣味(hobby)</label>
              <div class="col-md-10">
                <textarea class="form-control" name="hobby" rows="2">{{ $profile->hobby }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2" for="introduction">自己紹介(introduction)</label>
              <div class="col-md-10">
                <textarea class="form-control" name="introduction" rows="10">{{ $profile->introduction }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10">
               <input type="hidden" name="id" value="{{ $profile->id }}">
               {{ csrf_field() }}
               <input type="submit" class="btn btn-primary" value="更新">
              </div>
            </div>
          </form>
          <div class="row mt-5">
            <div class="col-md-4 mx-auto">
                <h2>編集履歴</h2>
                <ul class="list-group">
                  @if ($profile->profilehistories !=NULL)
                    @foreach ($profile->profilehistories as $profilehistory)
                      <li class="list-group-item">{{ $profilehistory->edited_at }}</li>
                    @endforeach
                  @endif
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
