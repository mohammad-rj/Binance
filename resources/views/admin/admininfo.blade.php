@extends('layouts.app')

@section('header')

<body id="pg_index" class="pg_index admininfo">
  
  <div class="pg-header flexlyr">
      <!-- <a href="home.php" class="logo-icon"> -->
      <a href="" class="logo">
          <!-- <img src="./img/asset_01.png" alt=""> -->
          <span>CRIPTシステム</span>
      </a>
      <div class="user-infor flexlyr">
          <!-- <a href="page5.php" class="user-comment"><img src="./img/asset_08.png" alt=""><p>19</p></a> -->
          <a href="{{route('auth.logout')}}" class="user-name"><img src="{{asset('img/asset_02.png')}}" alt=""><span>Javelin</span></a>
      </div>
  </div>
  <div class="wrapper">
  @endsection   
  @section('content')
      <!-- Sidebar  -->
      <!-- Page Content  -->
      <aside class="right-side">
    <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="{{route('admin.top')}}"><i class="fa fa-dashboard"></i> TOP</a></li>
        <li class="active">管理者情報</li>
      </ol>
    </section>
    @if(Session::has('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ Session::get('message') }}</li>
        </ul>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <section class="content margin">
      <form class="form-horizontal" method="POST" action="{{ route('admin.admininfo.register') }}">
      @csrf
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">管理者ー名</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="name" required autofocus> 
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">管理者メール</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" name="email" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">パスワード</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" name="password" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">パスワード確証</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" name="password_confirmation" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="btn btn-primary">保存</button>
          </div>
        </div>
      </form>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection