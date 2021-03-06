@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">修改资料</h3>
      </div>
      <div class="panel-body">
        {{ Form::open(['url' => 'user/' . $user->id, 'method' => 'post',  'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) }}
          {{ method_field('PUT') }}
          <div class="form-group form-group-sm">
            {{ Form::label('', '邮箱', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              <p class="form-control-static">{{ $user->email }}</p>
            </div>
            <span class="help-block"></span>
          </div>
          <!-- <div class="form-group form-group-sm">
            {{ Form::label('', '原密码', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::password('password', ['class' => 'form-control input-sm']) }}
            </div>
          </div> -->
          <div class="form-group form-group-sm">
            {{ Form::label('', '头像', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::file('avatar') }}
            </div>
            <!-- <span class="help-block">修改后不会马上显示的啦</span> -->
          </div>
          <div class="form-group form-group-sm">
            {{ Form::label('', '昵称', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('name', $user->name, ['class' => 'input-sm form-control']) }}
            </div>
            <div class="col-md-4">
              <span class="help-block">网站中显示的名称</span>
            </div>
          </div>
          <div class="form-group form-group-sm">
            {{ Form::label('', '真实姓名', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('realname', $user->realname, ['class' => 'input-sm form-control']) }}
            </div>
            <div class="col-md-4">
              <span class="help-block">你的名字</span>
            </div>
          </div>
          <div class="form-group form-group-sm">
            {{ Form::label('', '学校', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('location1', $user->location1, ['class' => 'input-sm form-control']) }}
            </div>
            <div class="col-md-4">
              <span class="help-block">学校全名，比如 北京交通大学</span>
            </div>
          </div>
          <div class="form-group form-group-sm">
            {{ Form::label('', '学院', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('location2', $user->location2, ['class' => 'input-sm form-control']) }}
            </div>
            <div class="col-md-4">
              <span class="help-block">学院名称，比如 计算机与信息技术学院</span>
            </div>
          </div>
          <div class="form-group form-group-sm">
            {{ Form::label('', 'Codeforces handle', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('handle', $user->handle, ['class' => 'input-sm form-control']) }}
            </div>
            <div class="col-md-4">
              <span class="help-block">显示Codeforces rating！</span>
            </div>
          </div>
          <!-- <div class="form-group form-group-sm">
            {{ Form::label('', '手机', ['class' => 'col-md-3 control-label']) }}
            <div class="col-md-4">
              {{ Form::text('phone', $user->phone, ['class' => 'input-sm form-control']) }}
            </div>
            <span class="help-block">用来发送短信通知</span>
          </div> -->
          <div class="form-group">
            <div class="col-md-offset-3 col-md-4">
              <button type="submit" class="btn btn-sm btn-primary">@icon('send')提交</button>
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection
