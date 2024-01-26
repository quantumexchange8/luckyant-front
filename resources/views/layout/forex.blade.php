@extends('master.master')

@section('content')

<!---------------Title Header-------------------------->
<div class="uk-section  uk-background-cover"  style="background-image: url({{asset('img/blockit/bg-01.png')}});">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge uk-padding uk-text-white">Forex</h1>
            </div>
        </div>
    </div>
</div>
<!---------------End of Title Header-------------------------->
<div class="uk-section uk-padding-remove-vertical in-profit-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-right">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('index') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!---------------Forex Description-------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m">
                <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-width-auto@m">
                      <div class="in-icon-wrap circle primary-color uk-margin-right">
                        <i class="fas fa-money-bill-wave fa-2x"></i>
                      </div>
                    </div>
                    <div class="uk-width-expand">
                        <h2>Forex</h2>
                        <p class="uk-text-justify">Forex offering you the fastest, most liquid, and captivating way to invest in the global forex trading market. Forex is an interbank foreign exchange market with trading volumes surpassing all other financial markets. Through the global information network, forex trading allows currency buying and selling operations around the clock, open not only to banks but also to retail traders. Speculation is the core principle of profiting from the forex market – buying low and selling high.</p>
                        <p class="uk-text-justify">The most popular forex currencies include USD (U.S. Dollar), JPY (Japanese Yen), GBP (British Pound), EUR (Euro), CHF (Swiss Franc), CAD (Canadian Dollar), and AUD (Australian Dollar). They form major currency pairs such as EUR/USD, GBP/USD, USD/JPY, and USD/CHF.</p>
                        <p class="uk-text-justify"> Traders can access the forex market through forex brokers. All that's needed is a computer (or smartphone/tablet) with an internet connection and the free-to-download MetaTrader 5 platform. Forex trading orders can be directly sent from the platform. Based on fundamental and technical analysis, traders attempt to predict the trend of currency prices, buying at low prices and selling as prices rise. The trader's profit equals the difference between the buying and selling prices.</p>
                        <p>Unique advantages of forex trading:</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> Slim spreads trading</li>
                                    <li>Leverage up to 500:1</li>
                                    <li>Abundant choices of currency pairs</li>
                                    <li>24/5 market availability</li>
                                    <li>Flexible trading 24/5</li>
                                    <li>Cutting-edge tools for decision support</li>
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>Award-winning multilingual customer support</li>
                                    <li>No price manipulation</li>
                                    <li>Low margin, low-cost convenient trading</li>
                                    <li>High-speed execution on Lucky Ant servers</li>
                                    <li>Adaptive to market trends</li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!---------------End of Forex Description-------------------------->

<!-------------------------Contact Us-------------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default1 uk-box-shadow-medium uk-card-body uk-border-rounded background-cover" style="background-image: url('{{ asset('img/in-profit-decor-3.svg') }}'); background-size: cover; background-position: center;">
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
<!--------------------------End of Open Contact Us------------------------->

<!---------------Trading View Widget-------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>Forex Cross Rates</h1>
                    <!-- Center the TradingView Widget -->
                    <div class="uk-flex uk-flex-center">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                                    <span class="uk-text-meta uk-text-small uk-text-red">Track all markets on TradingView</span>
                                </a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                                {
                                    "width": 900,
                                    "height": 610,
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD"
                                    ],
                                    "isTransparent": false,
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------End of Trading View Widget-------------------------->

<!---------------Open Account---------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-primary uk-box-shadow-large uk-border-rounded uk-background-cover" style="background-image: url({{asset('img/blockit/in-card-background-03.png')}});">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h2 class="uk-text-blue">Open Your Account Now!</h2>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 uk-margin-right" href="{{}}">Open Real Account</a>
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 " href="#">Open Demo Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------End of Open Account-------------------------->
@endsection