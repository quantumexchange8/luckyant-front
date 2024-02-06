<header>

    
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
        
                <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between uk-flex-nowrap">
                    <a class="uk-navbar-item uk-logo" href="{{route('index')}}">
                        <img src="{{asset('img/Logo/logo.svg')}}" data-src="{{asset('img/Logo/logo.svg')}}" alt="logo" width="130" height="36" data-uk-img>
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="{{ request()->is('/') ? 'uk-active' : '' }}"><a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="{{ request()->is('about') ? 'uk-active' : '' }}"><a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="{{ request()->is('market/*') ? 'uk-active' : '' }}"><a href="#">Market<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="{{ request()->is('forex') ? 'uk-active' : '' }}"><a href="{{ route('forex') }}">Forex</a></li>
                                    <li class="{{ request()->is('stock') ? 'uk-active' : '' }}"><a href="{{ route('stock') }}">Stock</a></li>
                                    <li class="{{ request()->is('cfd') ? 'uk-active' : '' }}"><a href="{{ route('cfd') }}">Cryptocurrency CFDs</a></li>
                                    <li class="{{ request()->is('indices') ? 'uk-active' : '' }}"><a href="{{ route('indices') }}">Indices</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="{{ request()->is('trading') ? 'uk-active' : '' }}"><a href="{{ route('trading') }}">Trading Platform</a>
                        </li>
                        <li class="{{ request()->is('copytrading') ? 'uk-active' : '' }}"><a href="{{ route('copytrading') }}">Copy Trading</a>
                        <li class="{{ request()->is('contact') ? 'uk-active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
             
                </div>
                <div class="uk-navbar-right uk-width-auto">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <div>
                            <a href="{{route('error')}}" class="uk-button uk-button-link">Login</a>
                            <a href="{{route('error')}}" class="uk-button uk-button-link">Sign up</a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>