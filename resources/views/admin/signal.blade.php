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

<body id="pg_index" class="pg_index signal">
  
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
        <li class="active">シグナル管理</li>
      </ol>
    </section>
    <section class="content margin">
      <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="thead-dark">
              <tr>
                <th>受信日</th>
                <th>銘柄</th>
                <th>建て</th>
                <th>エントリーmin</th>
                <th>エントリーmax</th>
                <th>第1</th>
                <th>第2</th>
                <th>第3</th>
                <th>損切り</th>
                <th>モード</th>
              </tr>
            </thead>
            <tbody>
            @foreach($signals as $signal)
              <tr>
                <th>{{ $signal->receivetime }}</th>
                <td>{{ $signal->mark }}</td>
                <td>{{ $signal->mode }}</td>
                <td>{{ $signal->entrymin }}</td>
                <td>{{ $signal->entrymax }}</td>
                <td>{{ $signal->firstprofit }}</td>
                <td>{{ $signal->secondprofit }}</td>
                <td>{{ $signal->thirdprofit }}</td>
                <th>{{ $signal->lossprofit }}</th>
                <td>ー</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{-- Pagination --}}
          <div class="d-flex justify-content-center">
              {!! $signals->links() !!}
          </div>
        </div>
    </section>
  </aside><!-- /.right-side -->
  </div>
@endsection