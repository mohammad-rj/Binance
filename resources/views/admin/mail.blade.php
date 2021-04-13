@extends('layouts.app')

@section('header')

<body id="pg_index" class="pg_index mail">
  
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
        <li class="active">メール送信設定</li>
      </ol>
    </section>
    <section class="content margin">
    <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">差出人<br>アドレス</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">件名</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">本文</label>
          <div class="col-sm-5">
            <textarea type="text" class="form-control" id="inputPassword3" style="height:225px;"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">署名</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="btn btn-primary">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">送信</button>
          </div>
        </div>
      </form>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection