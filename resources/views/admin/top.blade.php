@extends('layouts.app')

@section('header')
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
        <select class="custom-select">
          <option selected><?php echo date("Y");?></option>
          <option value="1"><?php echo date("Y");?></option>
          <option value="2"><?php echo date("Y");?></option>
        </select>
        <select class="custom-select">
          <option selected><?php echo date("m");?>月</option>
        </select>
        </div>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection
