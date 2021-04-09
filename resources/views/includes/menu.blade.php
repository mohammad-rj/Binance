<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <div class="hambugar-icon">
            <img src="{{asset('img/asset_09.png')}}" alt="" id="sidebarCollapse">
        </div>
        
    </div>

    <ul class="list-unstyled components">
        <li class="f-layer menu0">
            <a href="{{asset('home')}}">
                <img src="{{asset('img/asset_03.png')}}" alt=""><p>ホーム</p>
            </a>
        </li>
        <li class="f-layer menu1 collapseItem">
            <!-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a> -->
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <img src="{{asset('img/manage.png')}}" alt=""><p>プラグイン管理</p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="menu1_1">
                    <a href="{{asset('licenseManage')}}">ライセンス管理</a>
                </li>
                <li class="menu1_3">
                    <a href="{{asset('plugin')}}">プラグイン設定</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>