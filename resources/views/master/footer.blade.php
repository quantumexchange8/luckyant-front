
<footer>
    <div class="uk-section uk-section-secondary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-flex uk-margin-small-top" data-uk-grid="">
                
                <div class="uk-flex-first d-flex flex-column">
                    <div class="footer-logo">
                        <img class=" uk-display-block" src="{{asset('img/Logo/logo-white-01.svg')}}" alt="footer-logo" width="130" height="36" data-uk-img="">
                    </div>
                    <ul class="uk-list uk-link-text uk-margin-remove-top">
                        <li>
                            <div><i class="fa fa-registered uk-margin-small-right"></i>@lang('messages.registration_number') </div>
                            <div> <p>31000262677236</p> </div>
                        </li>
                        <li>
                            <div><i class="fas fa-envelope uk-margin-small-right"></i>@lang('messages.email')  </div>
                            <div> <a href="mailto:support@luckyantfxasia.com">support@luckyantfxasia.com</a> </div>
                        </li>
                        <li>
                            <div><i class="fas fa-map-marker-alt uk-margin-small-right"></i>@lang('messages.address') </div>
                            <div> <p>1312 17TH ST UNIT NUM 2955</p> </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Overview</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('index')}}">@lang('messages.home')</a></li>
                        <li><a href="{{route('about')}}">@lang('messages.about_us')</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Market</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('forex')}}">Forex</a></li>
                        <li><a href="{{route('stock')}}">Stock</a></li>
                        <li><a href="{{route('cfd')}}">CFDs</a></li>
                        <li><a href="{{route('indices')}}">Indices</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Trading</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('trading')}}">Trading Platform</a></li>
                        <li><a href="{{route('copytrading')}}">@lang('messages.copy_trading')</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top uk-margin-small-bottom" data-uk-grid="">
                <div class="uk-width-1-1@xl uk-margin-bottom">
                    <p class="uk-text-small">© 2017 - 2024 Lucky Ant Corporation. All rights reserved. "FX Asia" and the Lucky Ant "Fx" series trademarks are owned by Lucky Ant Corporation. All other trademarks appearing on this website are the property of their respective owners.
                    </p>
                </div>
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                        <p class="uk-text-small">@lang('messages.risk_warning') 
                        </p>
                        <p class="uk-text-small">
                            @lang('messages.risk_warning2') 
                        </p>
                        <p class="uk-text-small">
                            @lang('messages.risk_warning3') 
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-2@m custom-small-screen">
                    <p class="copyright-text">© Lucky Ant 2024</p>
                </div>
                <div class="uk-width-1-2@m uk-flex uk-flex-right@m custom-small-screen">
                    <a class="uk-text-small" href="{{route('terms')}}">
                        @lang('messages.terms_policies')  </a>
                </div>
              
         
            <div class="uk-width-1-1@m  uk-flex uk-flex-right@m custom-small-screen uk-margin-remove-top">
                <!-- social media begin -->
                <div class="uk-flex social-media-list">
                            <div><a href="#" class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i> Facebook</a></div>
                            <div><a href="#" class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></div>
                            <div><a href="#" class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></div>
                            <div><a href="#" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i> Youtube</a></div>
                </div>
                <!-- social media end -->
            </div>
            
            </div>
        
           
        </div>        
    </div>
</footer>
