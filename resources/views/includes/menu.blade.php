<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <div class="hambugar-icon">
            <img src="{{asset('img/asset_09.png')}}" alt="" id="sidebarCollapse">
        </div>
        
    </div>

    <ul class="list-unstyled components">
        <li class="f-layer menu0">
            <a href="{{route('admin.top')}}">
                <img src="{{asset('img/asset_03.png')}}" alt=""><p>&nbsp;&nbsp;TOP</p>
            </a>
        </li>
        <li class="f-layer menu1 collapseItem">
            <!-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a> -->
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <img src="{{asset('img/manage.png')}}" alt=""><p>プラグイン管理</p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="menu1_1">
                    <a href="{{route('admin.userinfo')}}">請求者情報</a>
                </li>
                <li class="menu1_2">
                    <a href="{{route('admin.signal')}}">シグナル管理</a>
                </li>
                <li class="menu1_3">
                    <a href="{{route('admin.logmanagement')}}">ログ管理</a>
                </li>
                <li class="menu1_4">
                    <a href="{{route('admin.profitmanagement')}}">利確ポイント設定</a>
                </li>
                <li class="menu1_5">
                    <a href="{{route('admin.mail')}}">メール送信設定</a>
                </li>
                <li class="menu1_6">
                    <a href="{{route('admin.telegram')}}">Telegram連動設定</a>
                </li>
                <li class="menu1_7">
                    <a href="{{route('admin.admininfo')}}">管理者情報</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>