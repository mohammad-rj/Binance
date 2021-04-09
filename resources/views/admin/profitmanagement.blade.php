@extends('layouts.app')

@section('header')
<style>
		
  .pagination {
    display: inline-block;
  }
  .pagination a, .pagination strong {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    text-decoration: none;
    border-style: none;
    border-radius: 4px;
    margin: 1px;
    display: inline-block;
    color: white;
    font-weight: 600;
  }
  .pagination a {
    background-color: #5a6268;
  }
  .pagination a:hover {
    background-color: #6c757d;
  }
  .pagination strong {
    background-color: #6c757dbd;
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
    <section class="content margin">
        <div class="box-header row">
            <div class="col-md-10 box-title col-xs-8">
                <span class="box-title1">買い下がり設定</span>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="license" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center ">ID</th>
                        <th class="text-center ">ユーザー</th>
                        <th class="text-center ">メールアドレス</th>
                        <th class="text-center ">数</th>
                        <th class="text-center"> サイトのURL </th>
                        <th class="text-center"> ライセンス</th>
                        <th class="text-center ">行動</th>
                    </tr>
                </thead>
                <tbody>
              
                </tbody>
            </table>
        </div><!-- /.table-responsive -->
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection
