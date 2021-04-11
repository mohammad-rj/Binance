@extends('layouts.userapp')

@section('header')
<style>
		
  .form-style {
    display: flex;
    justify-content: center;
  }
  .form-group{
    margin-left: 5vw;;
  }
  .save{
    float: right;
  }
  .box-body{
    margin:3vw;
  }
  .d-flex{
    display: flex;
    justify-content:flex-end;
  }
 
</style>
<body id="pg_index" class="pg_index profitmanagement">
  
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
        <li class="active">利確ポイント設定</li>
      </ol>
    </section>
    <section class="content" style="margin-left:0px;margin-right:0px;">
        <div class="box-header row">
            <div class="col-md-10 box-title col-xs-8">
                <span class="box-title1">買い下がり設定</span>
            </div>
            
        </div>
        <div class="box-body row">
          
          <form method="POST" action="{{ route('admin.profitmanagement.buy') }}">
						@csrf
              <div ><label for="">現保有BTCのエントリー</label></div>
							<div class="form-style">
                <div class="form-group" style="margin-left:0px;">
                  <label for="entrymax"></label>
                    <div class="d-flex">
                      <label for="">BTC</label>
                  </div>
                  <div class="d-flex">
                      <label for="">アルトシーズン</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="entrymax">上部</label>
                  <div class="d-flex">
                    <input id="btcentrymax" type="btcentrymax"  class="form-control" name="btcentrymax"  required  autofocus>
                    <label for="">%</label>
                  </div>
                  <div class="d-flex">
                    <input id="altoentrymax" type="altoentrymax"  class="form-control" name="altoentrymax"  required  autofocus>
                    <label for="">%</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="entrymedium">中間</label>
                  <div class="d-flex">
                    <input id="btcentrymedium" type="btcentrymedium"  class="form-control" name="btcentrymedium" required autofocus>
                    <label for="">%</label>
                  </div>
                  <div class="d-flex">
                    <input id="altoentrymedium" type="altoentrymedium"  class="form-control" name="altoentrymedium" required autofocus>
                    <label for="">%</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="entrymin">下部</label>
                  <div class="d-flex">
                    <input id="btcentrymin" type="btcentrymin"  class="form-control" name="btcentrymin" required autofocus>
                    <label for="">%</label>
                  </div>
                  <div class="d-flex">
                    <input id="altoentrymin" type="altoentrymin"  class="form-control" name="altoentrymin" required autofocus>
                    <label for="">%</label>
                  </div>
                </div>
              </div>
            
              <div class="save">
                <button type="submit" class="btn btn-primary float-right">
                  保存
                </button>
              </div>
          </form>
        </div><!-- /.table-responsive -->
        <div class="box-header row">
          <div class="col-md-10 box-title col-xs-8">
              <span class="box-title1">売り利確ポイント配分設定</span>
          </div>
          
      </div>
      <div class="box-body row">
        <form method="POST" action="{{ route('admin.profitmanagement.sell') }}">
          @csrf
            <div class="form-style">
              <div class="form-group" style="margin-left:0px;">
                  <label for="entrymax"></label>
                    <div class="d-flex">
                      <label for="">BTC</label>
                  </div>
                  <div class="d-flex">
                      <label for="">アルトシーズン</label>
                  </div>
                </div>
              <div class="form-group">
                <label for="entrymax">第１利確ポイント</label>
                <div class="d-flex">
                  <input id="btcentrymax" type="btcentrymax"  class="form-control" name="btcentrymax"  required  autofocus>
                  <label for="">%</label>
                </div>
                <div class="d-flex">
                  <input id="altoentrymax" type="entrymax"  class="form-control" name="entrymax"  required  autofocus>
                  <label for="">%</label>
                </div>
              </div>
              <div class="form-group">
                <label for="entrymedium">第２利確ポイント</label>
                <div class="d-flex">
                  <input id="btcentrymedium" type="btcentrymedium"  class="form-control" name="btcentrymedium" required autofocus>
                  <label for="">%</label>
                </div>
                <div class="d-flex">
                  <input id="altoentrymedium" type="altoentrymedium"  class="form-control" name="altoentrymedium" required autofocus>
                  <label for="">%</label>
                </div>
              </div>
              <div class="form-group">
                <label for="entrymin">第３利確ポイント</label>
                <div class="d-flex">
                  <input id="btcentrymin" type="btcentrymin"  class="form-control" name="btcentrymin" required autofocus>
                  <label for="">%</label>
                </div>
                <div class="d-flex">
                  <input id="altoentrymin" type="altoentrymin"  class="form-control" name="altoentrymin" required autofocus>
                  <label for="">%</label>
                </div>
              </div>
            </div>
            <div class="save">
              <button type="submit" class="btn btn-primary float-right">
                保存
              </button>
            </div>
        </form>
      </div><!-- /.table-responsive -->
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection
