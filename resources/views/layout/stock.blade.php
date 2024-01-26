@extends('master.master')

@section('content')
<!---------------Title Header-------------------------->
<div class="uk-section  uk-background-cover"  style="background-image: url({{asset('img/blockit/bg-01.png')}});">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge uk-padding uk-text-white">Stock</h1>
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
<!---------------Stock Description-------------------------->
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
                        <h2>Stock</h2>
                        <p class="uk-text-justify">The stock market is the gathering place for securities traders. To engage in buying and selling stocks, futures, bonds, and options, all you need is a trading account. Therefore, traders can participate in the most successful publicly-listed companies in various industries, using derivative financial instruments and futures contracts to mitigate capital risks.</p>
                        <p class="uk-text-justify">U.S. stock exchanges are highly popular (such as the New York Stock Exchange, NASDAQ, New York Mercantile Exchange, Global Futures Trading System, etc.), and other prominent exchanges include the Tokyo Stock Exchange, London Stock Exchange (LSE), and Hong Kong Stock Exchange (HKEX).</p>
                        <p class="uk-text-justify"> With the development of modern technology and the internet, traders can use versatile computer software for securities trading, known as trading platforms. On such software, traders can place orders to buy or sell securities, and then brokers execute the trades on behalf of the traders at the stock exchange. The MetaTrader 5 trading platform provides advanced features for global trading, supporting technical analysis, algorithmic trading, and group trading.</p>
                        <p class="read-more-content uk-text-justify">
                            How is Contract for Difference (CFD) Trading Different from Stock Trading? The primary difference between Contract for Difference (CFD) trading and stock trading is that you don't actually own the underlying asset, i.e., the actual stock. As the name suggests, in CFD trading, you don't physically hold the asset or instrument you're trading. However, if the market moves in your direction, you still have the potential to profit; conversely, if the market moves in the opposite direction, you may incur losses.
                        </p>
                        <p class="read-more-content uk-text-justify">
                            CFDs are also a form of leveraged product, and margin requirements mean you only need to deposit a fraction of the total trade value as margin to open a CFD position. In stock trading, you typically need to buy the entire required shares. Leverage comes with potential risks, so understanding the risks of leverage is crucial before trading.
                        </p>
                        <p class="read-more-content uk-text-justify">Commodities Trading Contracts for Difference (CFDs) in commodities is an ideal choice for diversifying portfolios and hedging risks. We offer a broad portfolio of financial products, combined with real-time technology and commodity prices, to help you gain an edge. Choosing to trade commodity CFDs provides you with global commodity prices, enjoying advantages such as high-speed execution, low slippage, deep liquidity, and narrow spreads.</p>
                        <p class="read-more-content uk-text-justify">As a regulated brokerage service provider, we support you in trading commodity CFDs, covering various global commodities such as gold (XAU), silver (XAG), and crude oil (CL, WTI). Meanwhile, we offer diverse asset categories and comprehensive risk management tools, enabling you to navigate the markets with ease.</p>
                        <a class="read-more-button uk-button uk-button-text " href="#">Read More..</a>
                        @section('scripts')
                        <script>
                            $(document).ready(function() {
                                $('.read-more-content').hide();
                        
                                $('.read-more-button').click(function() {
                                    var content = $(this).siblings('.read-more-content');
                                    content.toggle();
                        
                                    // Update the link text based on content visibility
                                    var link = $(this);
                                    if (content.is(':visible')) {
                                        link.text('Read Less');
                                    } else {
                                        link.text('Read More..');
                                    }
                                });
                            });
                        </script>
                        @endsection
                        <p class="uk-text-grey">Advantages of commodity trading:</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> Leverage up to 500:1</li>
                                    <li>Choose from a wide range of commodities, including energy, metals, and agricultural products</li>
                                    <li>24/5 freely enter and exit trades</li>
                                    <li>Trade in any market direction - go short or long, maximizing trading opportunities while minimizing risks</li>
                              
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>No price manipulation and no requotes</li>
                                    <li>Hedge risks - use high-value assets for investment risk hedging, such as gold (XAU), silver (XAG), and crude oil (WTI/CL)</li>
                                    <li>Low margin, low-cost trading, ensuring execution efficiency. </li>
                                
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!---------------End of Stock Description------------------->

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

<!---------------Stock Widget------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>Stock Market</h1>

                <div class="uk-flex uk-flex-center">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-small uk-text-meta uk-text-red">Track all markets on TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "exchange": "US",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": false,
                                "showFloatingTooltip": false,
                                "width": "900",
                                "height": "600",
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                            }
                        </script>
                </div>
                <!-- TradingView Widget END -->
  
                </div>
            </div>
        </div>
        
    </div>
</div>
<!---------------End of Stock Widget------------>

<!---------------Open Account-------------------------->
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