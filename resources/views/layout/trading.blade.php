@extends('master.master')
@section('content')

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

<!----Description------------------>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-3-5@m">
              <h1 class="uk-margin-small-bottom"><span class="in-highlight">MetaTrader 5</span> Trading Platform</h1>
                <p class="uk-text-lead uk-margin-remove-top uk-margin-bottom uk-text-blue">One Platform, Multiple Markets</p>
                <p class="uk-text-justify uk-text-grey uk-text-default">MetaTrader 5 (MT5) is the leading forex trading platform, with MT5 being the abbreviation for MetaTrade 5 in English. 
                    Developed by MetaQuotes Platform, it is a financial trading software designed to provide financial intermediaries with a platform for trading various financial products, 
                    including forex, contracts for difference (CFDs), stocks, and futures for their clients. The MT5 platform includes various trading execution features, unlimited charts, 
                    numerous technical indicators and tools, custom indicators and scripts. Additionally, the MT5 platform offers a built-in marketplace for automated trading, a database for freelance 
                    strategy developers, copy trading, and virtual private server (Forex VPS) services!
                </p>
                <p class="uk-text-grey">Features of MetaTrader 5 :</p>
                <ul class="uk-list in-list-check">
                    <li>Programming Language: MQL5</li>
                    <li>Provides 21 Timeframes</li>
                    <li>Built-in Global Economic Calendar</li>
                    <li>Offers 38 Built-in Indicators, 22 Analysis Tools, and 46 Charting Tools</li>
                    <li>Supports Trading in Forex, Futures, Stocks, Bonds, and CFDs</li>
                    <li>Enhanced Transparency and Market Intuitiveness</li>
                </ul>
            </div>
            <div class="uk-width-2-5@m" >
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain in-padding-large-vertical@s in-offset-bottom-80 in-profit-16"  data-src="{{asset('img/in-profit-decor-3.svg')}}" data-uk-img>                    
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-expand">
                            <h3 class="uk-margin-remove-bottom ">Diverse Order Types and Execution Modes</h3>
                            <h6 class=" uk-text-blue">Traders can employ any applicable trading strategy to achieve success in financial markets.
                            </h6>
                            <p class="uk-text-md uk-margin-small-top uk-text-justify">The MetaTrader 5 mobile trading app is user-friendly, allowing users to view real-time prices, trade all order types, and access trading history. 
                                This app serves as a complement to the desktop client, enabling users to receive push notifications, alerts, news, and engage in chat with other traders.
                            </p>
                            <p class="uk-text-small uk-text-meta uk-text-red"><span class="uk-text-primary">*</span>Supports Both Mobile MT5 and Desktop MT5</p>

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
                        <div class="uk-width-auto@m uk-visible@m">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----End of Description---------->

<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-13">
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid-divider" data-uk-grid>
            <div class="uk-width-auto@m">
                <h4 class="uk-margin-remove-bottom uk-margin-right">Metatrader Account </h4>
                <p class="uk-text-muted uk-margin-remove-top">Metatrader 5 Trading Account</p>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-1@m uk-text-center in-client-logo-3" data-uk-grid>
                    <p class="uk-margin-bottom-small">
                    Lucky Ant in collaboration with MetaTrader 5, integrates an extensive range of tools with user-friendly 
                    market search, tight spreads, and superior execution to deliver an exceptional trading experience.
                    </p>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@s uk-grid-large uk-child-width-1-3@m uk-text-center" data-uk-grid>
           
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">Apply</h4>
                <p>for a trading account</p>
            </div>
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">Fund</h4>
                <p>easily and securely</p>
            </div>
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">Trade</h4>
                <p>our full range of markets</p>
            </div>
          
        </div>
    </div>
</div>

<!----------Open an Account----------->
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
<!---------End of Open an Account----->
@endsection