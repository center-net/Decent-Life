<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="pull-center"> <img src="{{asset('Upload/'.$setting->logo)}}" class="img-thumbnail"  alt="" style="height: 150px"></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}">
                            <div class="pull-left"><i class="ti-user"></i><span class="right-nav-text">{{trans('users_tran.Admin')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.initiatives') }}">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text">{{trans('initiatives_tran.initiatives')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.serves') }}">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text">{{trans('serves_tran.serves')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.targets') }}">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text">{{trans('targets_tran.targets')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.setting.show') }}">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text">{{trans('setting_tran.setting')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu item Dashboard-->

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
