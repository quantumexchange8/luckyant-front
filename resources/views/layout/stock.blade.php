@extends('master.master')

@section('content')
<!---------------Title Header-------------------------->
<div class="uk-section  uk-background-cover"  style="background-image: url({{asset('img/blockit/bg-01.png')}});">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge uk-padding uk-text-white">@lang('messages.stock')</h1>
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
                    <li><a href="{{ route('index') }}">@lang('messages.home')</a></li>
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
                        <h2>@lang('messages.stock')</h2>
                        <p class="uk-text-justify">@lang('messages.stock_caption1')</p>
                        <p class="uk-text-justify">@lang('messages.stock_caption2')</p>
                        <p class="uk-text-justify">@lang('messages.stock_caption3')</p>
                        <p class="read-more-content uk-text-justify">@lang('messages.stock_caption4')</p>
                        <p class="read-more-content uk-text-justify">@lang('messages.stock_caption5')</p>
                        <p class="read-more-content uk-text-justify">@lang('messages.stock_caption6')</p>
                        <p class="read-more-content uk-text-justify">@lang('messages.stock_caption7')</p>
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
                        <p class="uk-text-grey">@lang('messages.advantage_commodity')</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> @lang('messages.advantage_commodity1')</li>
                                    <li>@lang('messages.advantage_commodity2')</li>
                                    <li>@lang('messages.advantage_commodity3')</li>
                                    <li>@lang('messages.advantage_commodity4')</li>
                              
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>@lang('messages.advantage_commodity5')</li>
                                    <li>@lang('messages.advantage_commodity6')</li>
                                    <li>@lang('messages.advantage_commodity7')</li>
                                
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
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 uk-margin-right" href="{{}}">@lang('messages.real_account')</a>
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 " href="#">@lang('messages.demo_account')</a>
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