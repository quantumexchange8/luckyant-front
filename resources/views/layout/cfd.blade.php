@extends('master.master')

@section('content')

<!---------------Title Header-------------------------->
<div class="uk-section uk-background-cover" style="background-image: url({{asset('img/blockit/bg-01.png')}});">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h1 class="uk-text-superlarge uk-padding uk-text-white uk-visible@m">Cryptocurrency CFDs</h1>
                <h1 class="uk-text-superlarge uk-padding uk-text-white uk-hidden@m">CFDs</h1>
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
<!-------------CFDs Description----------------------------->
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
                        <h2>Cryptocurrency CFDs</h2>
                        <p class="uk-text-justify">Cryptocurrency CFDs Through our industry-leading MetaTrader 5 platform, you can easily engage in cryptocurrency CFD trading, and you can also choose from our product range, including U.S. stocks and gold. Please see the complete product table below for average and minimum spreads for cryptocurrency CFDs. What are Cryptocurrency CFDs? Cryptocurrency Contracts for Difference (CFDs) are a way for traders to go long or short on digital assets. It allows traders to use leverage to magnify trades while also increasing risk exposure. By trading cryptocurrency CFDs, traders can increase capital efficiency and have profit opportunities in both rising and falling markets.</p>
                        <p class="uk-text-justify">Metal We offer a leverage ratio of 500:1, allowing you to flexibly trade metal spot prices, including gold or silver against the U.S. Dollar or Australian Dollar currency pairs. Opening a trading account with Lucky Ant grants you access to global market prices for Gold CFDs and Silver CFDs. Trading metal CFDs seamlessly with a globally regulated, award-winning broker.</p>
                        
                        <p>Advantages of trading metals:</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> Conduct long and short trades regardless of market direction, maximizing trading opportunities</li>
                                    <li>Robust trading platforms like MetaTrader 5 (MT5) provide real-time gold and silver news and charts. Trade anytime, anywhere, across multiple devices</li>
                                    <li>Rich educational resources and trading tools to refine your trading strategy</li>
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>Hedge risks - use high-value assets such as gold and silver to hedge your investment risks </li>
                                    <li>  Benefit from low margin, low-cost trading without compromising execution efficiency</li>
                                
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------End of CFDs Description---------------------->

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

<!---------------------Widget------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>Advanced Real-Time Chart Widget</h1>
                <div class="uk-flex uk-flex-center">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-red">Track all markets on TradingView</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                {
                                    "width": "900",
                                    "height": "610",
                                    "symbol": "NASDAQ:AAPL",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "light",
                                    "style": "3",
                                    "locale": "en",
                                    "enable_publishing": false,
                                    "backgroundColor": "rgba(255, 255, 255, 1)",
                                    "gridColor": "rgba(28, 69, 135, 0.06)",
                                    "allow_symbol_change": true,
                                    "support_host": "https://www.tradingview.com"
                                }
                            </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------End of Widget------------------>

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
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 uk-margin-right" href="#">Open Real Account</a>
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