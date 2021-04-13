@extends('layouts.userapp')

@section('header')
<style>
		
  .box-header{
    margin-bottom:30px;
  }
</style>
<body id="pg_index" class="pg_index setting">
  
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
        <li class="active">設定</li>
      </ol>
    </section>
    <section class="content margin">
        <div class="box-header row">
            <div class="col-md-10 box-title col-xs-8">
                <span class="box-title1">カード情報登録</span>
            </div>
        </div>
      <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">カード番号</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">月/年</label>
          <div class="col-sm-2">
            <input type="email" class="form-control" id="inputPassword3" required>
          </div>
          <div class="col-sm-2">
            <input type="email" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">名前</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">セキュリティコード</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" required>
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
