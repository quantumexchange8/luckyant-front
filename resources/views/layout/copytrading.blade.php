@extends('master.master')

@section('content')

<!-------------------Copy trading description-------------------->
<div class="uk-section uk-section-secondary uk-padding-large uk-background-cover uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="{{asset('img/copytrading-02.png')}}" data-uk-img>
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid-large" data-uk-grid>
            <div class="uk-width-3-5@m">
                <h2>What is Copy Trading?</h2>
                <p class="uk-text-justify uk-text-default uk-text-white">Copy Trading is an efficient way to enter and participate in trading activities in the financial markets by leveraging the wisdom of experienced traders. This advanced strategy allows you to benefit from the experiences of successful traders by copying their proven trading strategies, accumulating personal trading experience, and aiming for substantial profits. Copy Trading provides you with a simple and effective path to explore and succeed in the financial markets with confidence. By adopting this approach, you can not only accelerate your learning curve but also adapt more flexibly to the evolving market environment, achieving more robust trading results.</p>
                <p class="uk-text-justify uk-text-default uk-text-white">Whether you're a beginner seeking simplicity or a busy professional, Copy Trading offers you an efficient, intelligent investment option. It allows you to replicate the successful strategies of others while ensuring the fulfillment of personalized needs.</p>
            
            </div>
      
        </div>
    </div>
</div>
<!-------------------End of Copy trading description----------->
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

<!-------------------Copy trading advantages-------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-1-1@m uk-text-center">
                    <h2>Outstanding Advantages of Copy Trading:</h2>
                </div>
            </div>
            <!-- ... (other cards) ... -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-funnel-dollar fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">Time Efficiency:</a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">
                            Effortlessly copy trades with just one click, suitable for both beginners and busy investors.
                        </p>
                        <p class="hidden uk-text-justify">No market experience is required, eliminating the need for cumbersome monitoring, allowing you to invest with ease while saving valuable time.</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)" title="Show more"></i>
                    </div>
                   
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <ifa-lg class="fas fa-solid fa-clock fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">Flexibility: </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">The automatic copy trading mechanism gives you flexible choices. As soon as a trader achieves profit, you can share in the dividends.  </p>
                        <p class="hidden uk-text-justify">Additionally, you can customize take-profit and stop-loss numbers based on personal preferences, maintaining flexible control over the copy trading process and maximizing investment security.</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)" title="Show more"></i>
                    </div>
                  
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chart-bar fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">Efficient Execution:  </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">Through customized search functions, you can accurately filter out outstanding traders based on product categories, indicators, data, and other requirements.  </p>
                        <p class="hidden uk-text-justify">This not only enhances your trading efficiency but also ensures clearer, more efficient investment decisions.</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                    </div>
                  
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chalkboard-teacher fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">Accurate High-Quality Strategies:  </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">Based on detailed data views, profit/loss ratios, net worth, and balance, you can easily filter out outstanding traders that best suit your needs.  </p>
                        <p class="hidden  uk-text-justify">This precise stock-picking mechanism ensures that your investments are always based on reliable, data-supported decisions.</p>
                    </div>
                    <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                </div>
            </div>
            <div> <!--class="uk-width-1-2@m uk-flex uk-flex-center"-->
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chart-pie fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">Applicable to All Account Types:  </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class="uk-text-justify">Copy trading is available for standard, STP/ECN accounts, with the minimum trading volume proportional to the account balance, starting from 0.001 lots.  </p>
                        <p class="hidden uk-text-justify">Partners have the opportunity to earn performance fees.</p>
                    </div>
                    <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                </div>
            </div>
    
        </div>
    </div>
</div>

<script>
    function toggleVisibility(icon) {
      const card = icon.closest('.uk-card');
      const toggleText = card.querySelector('.toggle-text');
      const hiddenParagraph = toggleText.querySelector('p:nth-child(2)');

      if (hiddenParagraph) {
        hiddenParagraph.classList.toggle('hidden');
      }

      icon.classList.toggle('fa-chevron-right');
      icon.classList.toggle('fa-chevron-left');

      const tooltipText = icon.classList.contains('fa-chevron-right') ? 'Show more' : 'Hide content';
        icon.title = tooltipText;
    }
</script>
<!------------End of Copy trading advantages-------------------->

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

<!------------------------------------Steps Copying Trades------------------------------->
<div class="uk-section uk-section-default uk-padding in-padding-vertical@s in-profit-15">
    <div class="uk-container">
        <div class="uk-card uk-card-default1 uk-card-body uk-box-shadow-small uk-border-rounded background-cover">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
            <h2 class="uk-margin-small-top uk-text-center uk-text-darkblue uk-margin-medium-bottom">Choose Your Perfect Way</h2>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10">Become a Successful Follower~Copy Successful Strategies: </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top uk-text-grey uk-text-justify">Copy Trading offers you a shortcut to the road of financial prosperity. 
                Through our seamless automated system, you can embark on a journey of unlimited profits without the need to formulate your trading strategies or deal with cumbersome 
                decision-making processes. Choose a strategy from our carefully selected portfolio and take the first step towards wealth instantly! Seize the opportunity and open an 
                account with Lucky Ant Trading now! 
            </p>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top">Steps for Copying Trades </p>
            <p class="uk-text-meta uk-text-grey uk-margin-remove-bottom in-offset-top-10 uk-margin-top uk-text-center">How to Start Copy Trading?  </p>
                <div class="uk-grid-large uk-child-width-1-4@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                        <p class=" uk-text-darkblue uk-margin-top">Open a trading account and fund it</p>
                        
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                        <p class="uk-text-darkblue uk-margin-top">Enter the copy trading environment
                        </p>
                       
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                        <p class="uk-text-darkblue uk-margin-top">Select the trading strategy you want to copy
                        </p>
                   
                    </div>
                    <div>
                        <span class="in-icon-wrap without-image circle large uk-margin-auto">4</span>
                        <p class="uk-text-darkblue uk-margin-top">Enjoy the success of copying the strategy</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-flex uk-flex-center uk-margin-top" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
 
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top10">Become an Outstanding Provider~Share Your Successful Strategies: </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top uk-text-grey">Copy Trading allows traders to share successful trading strategies, enabling other 
                investors to profit from your expertise when copying your methods. This innovative platform fosters a community of knowledge-sharing, empowering every trader to leverage their 
                skills for mutual success! Share your successful trading strategy now and co-create success!
            </p>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top">  Steps for Sharing Strategies</p>
            <p class="uk-text-meta uk-text-grey uk-margin-remove-bottom in-offset-top-10 uk-margin-top uk-text-center">How to Start Sharing?  </p>
                <div class="uk-grid-large uk-child-width-1-4@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                        <p class="uk-text-darkblue uk-margin-top">Open a trading account and fund it</p>
                        
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                        <p class="uk-text-darkblue uk-margin-top">Enter the copy trading environment
                        </p>
                       
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                        <p class="uk-text-darkblue uk-margin-top">Submit information about the strategy you want to share and wait for approval
                        </p>
                   
                    </div>
                    <div>
                        <span class="in-icon-wrap without-image circle large uk-margin-auto">4</span>
                        <p class="uk-text-darkblue uk-margin-top">As more people choose your strategy, your earnings will increase day by day</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-----------------------------End of Steps Copying Trades------------------------------->

<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-16">
    <div class="uk-container ">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-3-4@m">
                <div class="in-create-account uk-text-center uk-margin-top uk-box-shadow-small">
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-rounded uk-margin-small-bottom">Open your account</span>
                    <p class="uk-text-lead uk-text-darkblue uk-margin-remove-top uk-visible">Let Lucky Ant Trading Copy Trading be your powerful assistant in achieving financial freedom. Whether you're a follower or a provider, there are more possibilities for success waiting for you here!
                    </p>
                    <p class="uk-text-default uk-text-red uk-margin-remove-top uk-visible">(Create an account now, log in, and explore successful trading strategies!)
                    </p>
                    <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-top10" style="margin-right:8px" href="#">Open Real Account</a>
                    <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-top10 " href="#">Open Demo Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection

