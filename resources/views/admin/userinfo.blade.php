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
  .content{
    font-size:22px;
  }
  /* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.switch {
  position: relative;
  display: inline-block;
  float: left;
  margin-left:20px;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #286090;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.slider.round:before {
  border-radius: 50%;
}
.form-horizontal{
  margin:5vw;
  margin-bottom:2vw;
 
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
          <label for="inputEmail3" class="col-sm-2 control-label">顧客名：</label>
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
          <label for="inputPassword3" class="col-sm-2 control-label">請求設定：</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" required>
          </div>
          <label for="" class="col-sm-1 control-label" style=" text-align: left;">円請求</label>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">手動設定：</label>
          <label class="switch ">
            <input type="checkbox" checked>
            <span class="slider round"></span>
          </label>
          <label for="inputPassword3" class="col-sm-1 control-label" style=" text-align: left;">にする</label>
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