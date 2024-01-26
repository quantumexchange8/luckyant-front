@extends('master.master')


@section('content')
<main>
{{--
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-1-1 uk-width-1-2@m">
                <div class="uk-overlay">
                    <h1>Leading the digital era of financial revolution, <span class="in-highlight">pioneering new attempts</span> to empower the future of the financial industry.</h1>
                    <p class="uk-text-meta">Partner with the world's leading online brokers and choose Lucky Ant Trading as your ideal companion. We are committed to providing fast, competitively priced global market trading, coupled with excellent customer service, to create an unparalleled trading environment for you.</p>
                    <!-- For Medium and Larger Screens -->
                    <div class="in-slideshow-button uk-visible@m">
                        <a href="#" class="uk-button uk-button-primary uk-border-rounded">Open Real Account</a>
                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left">Open Demo Account</a>
                    </div>
                    <!-- For Smaller Screens (Mobile) -->
                    <div class="in-slideshow-button uk-hidden@m uk-flex uk-flex-column uk-margin-top">
                        <a href="#" class="uk-button uk-button-primary uk-border-rounded">Open Real Account</a>
                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-margin-small-top">Open Demo Account</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-1-2@m uk-flex uk-flex-center uk-margin-top">
                <img class="uk-animation-slide-top-small" src="img/user/in-slideshow-1.png" data-src="img/user/in-slideshow-1.png" alt="slideshow-image" width="862" height="540" data-uk-img>
            </div>
        </div>
    </div>
--}}


<!-----------------------Main Header------------------------------->
<div class="uk-section uk-padding-remove-vertical ">
    <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
            <ul class="uk-slideshow-items">
              
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-3-5@l uk-width-4-5@m">
                                <div class="uk-overlay">
                                    <h1>Leading the digital era of financial revolution, pioneering new attempts to empower the future of the financial industry</h1>
                                    <p class="uk-text-darkblue uk-text-meta1 uk-text-justify uk-visible">Partner with the world's leading online brokers and choose Lucky Ant Trading as your ideal companion. We are committed to providing fast, competitively priced global market trading, coupled with excellent customer service, to create an unparalleled trading environment for you.</p>
                                    <div class="in-slideshow-button uk-margin-top">
                                        <a href="#" class="uk-button uk-button-primary uk-border-rounded">Open Real Account</a>
                                        <a href="#" class="uk-button uk-button-first uk-border-rounded uk-visible">Open Demo Account</a>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="uk-position-center">
                                <img class="uk-animation-slide-top-small" src="{{asset('img/in-slideshow-image-5-01.png')}}" data-src="{{asset('img/in-slideshow-image-5-01.png')}}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="uk-container" >
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>One-click copy trading, sharing success, freeing up your hands</h1>
                                    <p class="uk-text-darkblue uk-text-meta1 uk-visible uk-text-justify">Copy trading is officially launched, allowing you to automatically replicate the operations of excellent traders, injecting more possibilities into your investments. This convenient feature not only frees up your hands but also allows you to easily participate in the market, experiencing a more colorful trading journey.
                                    </p>
                                    <div class="in-slideshow-button">
                                        <a href="#" class="uk-button uk-button-primary uk-border-rounded">Open Real Account </a>
                                        <a href="#" class="uk-button uk-button-first uk-border-rounded uk-visible">Open Demo Account</a>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="uk-position-center">
                                <img class="uk-animation-slide-top-small" src="{{asset('img/in-slideshow-image-6-01.png')}}" data-src="{{asset('img/in-slideshow-image-6-01.png')}}" alt="slideshow-image" width="862" height="600" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
             
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
   
    </div>
</div>
<!-----------------------End of Main Header----------------------->

<!-----------------------4 tools------------------------------->
<div class="uk-section uk-padding-remove-vertical">
    <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
        <div class="uk-section uk-section-secondary in-padding-large-vertical@s in-profit-9">
            <div class="uk-container">
                <div class="uk-grid-divider" data-uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" data-uk-grid>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-drafting-compass"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">Trading Tools  </p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">Swift Execution   </p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-chart-area"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">Ultra-Low Spreads     </p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-percentage"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">Commission Rebates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-----------------------End of 4 tools----------------------->

<!-----------------------Preferred Partner------------------------------->

<div class="uk-section uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-offset-top-40 in-profit-14" data-src="img/in-section-profit-14.jpg" data-uk-img>
    <div class="uk-container uk-margin-bottom">
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" data-uk-grid>
            <div class="uk-width-1-1">
                <h2>As Your Preferred Partner</h2>
                <p class="uk-text-grey">Superior market liquidity, ultra-low spreads, and rapid order execution allow you to enjoy an outstanding trading experience.</p>
            </div>
          
            <div>
                <img src="#" data-src="{{asset('img/in-profit-icon-2.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Diverse trading tools</h4>
            </div>
            <div>
                <img src="#" data-src="{{asset('img/in-profit-icon-8.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Unparalleled trading conditions</h4>
            </div>
            <div>
                <img src="#" data-src="{{asset('img/in-profit-icon-10.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Globally licensed and authoritative regulatory compliance</h4>
            </div>
            <div>
                <img src="#" data-src="{{asset('img/in-profit-icon-9.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Committed to forex education</h4>
            </div>
        </div>
    </div>
</div>
<!-----------------------End of Preferred Partner------------------------>

<!----------------------Download apps-------------------------------------->
<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-12">
    <div class="uk-container">
        <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-2@m uk-text-center">
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                    <div class="uk-card-body">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-red">Track all markets on TradingView</span></a></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                            {
                                                "colorTheme": "light",
                                                "dateRange": "12M",
                                                "showChart": true,
                                                "locale": "en",
                                                "width": "100%",
                                                "height": "500",
                                                "largeChartUrl": "",
                                                "isTransparent": false,
                                                "showSymbolLogo": true,
                                                "showFloatingTooltip": false,
                                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                "tabs": [
                                                {
                                                    "title": "Indices",
                                                    "symbols": [
                                                    {
                                                        "s": "FOREXCOM:SPXUSD",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:NSXUSD",
                                                        "d": "US 100"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:DJI",
                                                        "d": "Dow 30"
                                                    },
                                                    {
                                                        "s": "INDEX:NKY",
                                                        "d": "Nikkei 225"
                                                    },
                                                    {
                                                        "s": "INDEX:DEU40",
                                                        "d": "DAX Index"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:UKXGBP",
                                                        "d": "UK 100"
                                                    }
                                                    ],
                                                    "originalTitle": "Indices"
                                                },
                                                {
                                                    "title": "Futures",
                                                    "symbols": [
                                                    {
                                                        "s": "CME_MINI:ES1!",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "CME:6E1!",
                                                        "d": "Euro"
                                                    },
                                                    {
                                                        "s": "COMEX:GC1!",
                                                        "d": "Gold"
                                                    },
                                                    {
                                                        "s": "NYMEX:CL1!",
                                                        "d": "WTI Crude Oil"
                                                    },
                                                    {
                                                        "s": "NYMEX:NG1!",
                                                        "d": "Gas"
                                                    },
                                                    {
                                                        "s": "CBOT:ZC1!",
                                                        "d": "Corn"
                                                    }
                                                    ],
                                                    "originalTitle": "Futures"
                                                },
                                                {
                                                    "title": "Bonds",
                                                    "symbols": [
                                                    {
                                                        "s": "CBOT:ZB1!",
                                                        "d": "T-Bond"
                                                    },
                                                    {
                                                        "s": "CBOT:UB1!",
                                                        "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBL1!",
                                                        "d": "Euro Bund"
                                                    },
                                                    {
                                                        "s": "EUREX:FBTP1!",
                                                        "d": "Euro BTP"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBM1!",
                                                        "d": "Euro BOBL"
                                                    }
                                                    ],
                                                    "originalTitle": "Bonds"
                                                },
                                                {
                                                    "title": "Forex",
                                                    "symbols": [
                                                    {
                                                        "s": "FX:EURUSD",
                                                        "d": "EUR to USD"
                                                    },
                                                    {
                                                        "s": "FX:GBPUSD",
                                                        "d": "GBP to USD"
                                                    },
                                                    {
                                                        "s": "FX:USDJPY",
                                                        "d": "USD to JPY"
                                                    },
                                                    {
                                                        "s": "FX:USDCHF",
                                                        "d": "USD to CHF"
                                                    },
                                                    {
                                                        "s": "FX:AUDUSD",
                                                        "d": "AUD to USD"
                                                    },
                                                    {
                                                        "s": "FX:USDCAD",
                                                        "d": "USD to CAD"
                                                    }
                                                    ],
                                                    "originalTitle": "Forex"
                                                }
                                                ]
                                            }
                                        </script>
                            </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>  
            </div>
            <div class="uk-width-1-3@l uk-width-1-2@m">
                <h2>MetaTrader 5: A Unified Platform for Multiple Markets</h2>
                <p class="uk-text-justify uk-text-meta uk-text-grey">As the most powerful trading platform for forex and financial markets, MetaTrader 5 is not only suitable for the forex market but also supports stocks, futures, 
                    commodities markets, as well as various financial markets such as digital cryptocurrencies.
                </p>
                <p class="uk-text-justify uk-text-meta uk-text-grey">This means traders can easily access and trade various assets on the same platform, 
                    providing a broader range of investment choices and flexibility. This comprehensive platform allows traders to flexibly navigate multiple markets, offering unlimited expansion to 
                    their investment scope.
                </p> 
                <div class="uk-flex" data-uk-margin>
                    <a href="#" class="uk-button in-button-app uk-margin-small-right">
                        <i class="fab fa-google-play fa-2x"></i>
                        <span class="wrapper">Download <br><span>Android Version</span></span>
                    </a>
                    <a href="#" class="uk-button in-button-app">
                        <i class="fa-brands fa-windows fa-2x"></i>
                        <span class="wrapper">Download <br><span>Desktop Version</span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------------------End of Download apps------------------------------->

<!----------------------Why Choose Us-------------------------------------->
<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-9">
    <div class="uk-container uk-background-contain uk-background-bottom-right" data-uk-img><!-- data-src="img/in-profit-mockup-2.png"  -->
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-1-1 in-offset-bottom-20">
                <h2 class="uk-margin-medium-bottom text-align-center">Why Choose Us?</h2>
            </div>
        </div>
        <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-5.svg')}}" data-src="{{asset('img/in-profit-icon-5.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue ">Swift Execution and Deep Liquidity </h4>
                <p class="uk-text-grey uk-text-justify">Experience a rapid trading process and ample market liquidity with ultra-low spreads and high-speed order execution, optimizing your trading experience.
                </p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-6.svg')}}" data-src="{{asset('img/in-profit-icon-6.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Diverse Payment Methods </h4>
                <p class="uk-text-grey uk-text-justify">Easily deposit and withdraw funds using various payment methods, providing you with flexible financial management options.</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-3.svg')}}" data-src="{{asset('img/in-profit-icon-3.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Industry-Leading Trading Platform </h4>
                <p class="uk-text-grey uk-text-justify">Millions of traders choose MetaTrader 5 as their preferred platform, trading anytime, anywhere through desktop, smartphones, or tablets, and enjoying exceptional trading tools and features.</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-2.svg')}}" data-src="{{asset('img/in-profit-icon-2.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Copy Trading </h4>
                <p class="uk-text-grey uk-text-justify">By selecting and replicating the best-performing trading strategies, you can gain additional passive income, achieving more comprehensive trading success.</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-1.svg')}}" data-src="{{asset('img/in-profit-icon-1.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">24/7 Professional Customer Service </h4>
                <p class="uk-text-grey uk-text-justify">Our professional multilingual customer service team is ready to answer your questions, ensuring timely support and excellent service.</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-4.svg')}}" data-src="{{asset('img/in-profit-icon-4.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">Trading Mode  </h4>
                <p class="uk-text-grey uk-text-justify">Choose to trade with a regulated STP/ECN broker, fully understanding your rights and safeguarding your asset security. We are committed to providing you with a transparent, reliable trading environment, ensuring your investments are fully protected.                    .</p>
            </div>
        </div>
    </div>
</div>
<!----------------------End of Why Choose Us------------------------------->

<!---------------Contact Us---------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default1 uk-card-body uk-box-shadow-medium uk-border-rounded background-cover" style="background-image: url('{{ asset('img/in-profit-decor-3.svg') }}'); background-size: cover; background-position: center;">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <h3 class="uk-text-blue">Turn Your Dream into Realities - Connect with Us Now!</h3>
                        </div>
                        <div class="uk-width-auto">
                            <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------End of Contact Us-------------------------->

</main>
@endsection