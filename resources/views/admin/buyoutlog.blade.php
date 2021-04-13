@extends('layouts.app')
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
</style>
@section('header')

<body id="pg_index" class="pg_index buyout">
  
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
        <li class="active">買い下がりログ管理</li>
      </ol>
    </section>
    <section class="content margin">
    <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="thead-dark">
              <tr>
                <th>処理日</th>
                <th>銘柄</th>
                <th>建て</th>
                <th>3段階<br>第1</th>
                <th>3段階<br>第2</th>
                <th>3段階<br>第3</th>
                <th>4段階<br>第1</th>
                <th>4段階<br>第2</th>
                <th>4段階<br>第3</th>
                <th>モード</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>20/2/2　18:30</th>
                <th>WABI</th>
                <th>BTC</th>
                <th>0.0000052</th>
                <th>0.00000550</th>
                <th>0.00000594</th>
                <th>0.00000525</th>
                <th>0.0000055</th>
                <th>0.00000594</th>
                <th>ー</th>
              </tr>
              <tr>
                <th>20/2/1　17:30</th>
                <th>WABI</th>
                <th>BTC</th>
                <th>0.0000052</th>
                <th>0.00000550</th>
                <th>0.00000594</th>
                <th>0.00000525</th>
                <th>0.0000055</th>
                <th>0.00000594</th>
                <th>BTC</th>
              </tr>
              <tr>
                <th>20/2/1　17:30</th>
                <th>WABI</th>
                <th>BTC</th>
                <th>0.0000052</th>
                <th>0.00000550</th>
                <th>0.00000594</th>
                <th>0.00000525</th>
                <th>0.0000055</th>
                <th>0.00000594</th>
                <th>アルト</th>
              </tr>
            </tbody>
          </table>
        </div>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection