@extends('layouts.userapp')
<style>
   .thead-dark{
    color: white;
    background-color: #3f3f3f;
  }
  .table{
    text-align:center;
  }
  tr th{
    text-align:center;
  }
  .content{
    font-size:22px;
  }
  </style>
@section('header')

<body id="pg_index" class="pg_index userinfo">
  
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
        <li class="active">請求者情報</li>
      </ol>
    </section>
    <section class="content margin">
    <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">お客様名：</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">ユーザー名：</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">パスワード：</label>
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
      <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
              <th>請求月</th>
              <th>保有BTC</th>
              <th>JPY換算</th>
              <th>請求額</th>
              <th>請求</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">2021年１月</th>
              <td>0.2</td>
              <td>1,000,000円</td>
              <td>40,000円</td>
              <td>失敗</td>
            </tr>
            <tr>
              <th scope="row">2020年１2月</th>
              <td>0.1</td>
              <td>1,000,000円</td>
              <td>40,000円</td>
              <td>成功</td>
            </tr>
            <tr>
              <th scope="row">2020年１0月</th>
              <td>0.099</td>
              <td>1,000,000円</td>
              <td>40,000円</td>
              <td>成功</td>
            </tr>
            <tr>
              <th scope="row">2020年9月</th>
              <td>0.099</td>
              <td>1,000,000円</td>
              <td>40,000円</td>
              <td>成功</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection