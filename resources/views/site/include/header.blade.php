<!-- header html start -->

<header id="masthead" class="site-header site-header-transparent">
    <div class="top-header">
        <div class="">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 d-lg-block">

                    <div class="header-contact-info">

                      <h4 style="color: white;margin-right:88px" >{{$setting->title}}</h4 >
                    </div>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-3  ">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <a href="https://wa.me/+972{{$setting->phone}}" target="_blank"> <i class="fas fa-phone-alt"></i>
                                    {{$setting->phone}} </a>
                            </li>
                            <li>
                                <a href="mailto:{{$setting->email}}" target="_blank">
                                    <i class="fas fa-envelope"></i>
                                    {{$setting->email}}

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="main-navigation">
                <nav id="navigation" class="navigation  d-lg-inline-block">
                    <ul class="nav">
                        <li style="font-size: 25px !import" class="current-menu-item">
                            <a href="{{ route('index') }}">{{trans('main_trans.Home')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">{{trans('initiatives_tran.initiatives')}}</a>

                        </li>

                        <li>
                            <a href="{{ route('index') }}#age">{{trans('serves_tran.serves')}}</a>

                        </li>

                        <li>
                            <a href="{{ route('index') }}#goal">{{trans('targets_tran.targets')}}</a>

                        </li>
                        <li>
                            <a href="{{ route('index') }}#team">{{ trans('site_trans.About') }}</a>

                        </li>
                        <li>
                            <a href="{{ route('index') }}#connect">{{ trans('site_trans.Communication_us') }}</a>

                        </li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </nav>

            </div>

            <div class="site-identity">
                <h1 class="site-title">
                    <a href="{{ route('donte') }}">
                        <a href="{{ route('donte') }}" class="button-round">{{trans('general_tran.Donate_Now')}}</a>
                    </a>
                </h1>
            </div>

        </div>
    </div>
    <div class="mobile-menu-container">

    </div>

</header>
