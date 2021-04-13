@extends('layouts.userapp')

@section('header')
<style>
  .header{
    display:flex;
    justify-content:space-around;
    font-size:22px;
  }
  .title{
    display:flex;
    font-size:22px;
    margin:25px;
    /* justify-content:start-end; */
  }
  .unit{
    margin-right:3vw;
  }
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
<body id="pg_index" class="pg_index home">
  
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
      </ol>
    </section>
    <section class="content margin">
      <div class="header">
          <div class="unit">
            <select class="custom-select">
              <option selected><?php echo date("Y");?>年</option>
            </select>
          </div>
         <div class="unit">
            <select class="custom-select">
              <option selected><?php echo date("m");?>月</option>
            </select>
         </div>
          <div class="unit">
            <label class="form-label">ご請求額</label>&nbsp;&nbsp;
            <input type="text" value="120,000" style="text-align:center;width:100px;font-size:25px" disabled/>
            <label class="form-label">円</label>
          </div>
        </div>
        <div class="title">
          <div class="unit">山田太郎様</div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="thead-dark">
              <tr>
                <th>金額</th>
                <th>請求</th>
                <th>メニュー</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>40,000円</td>
                <td>失敗</td>
                <td>設定　請求書　領収書</td>
              </tr>
            </tbody>
          </table>
        </div>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection
