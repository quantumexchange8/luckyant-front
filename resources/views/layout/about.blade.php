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

<!-------------------------Company Overview--------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-3-5@m">
                <p class="uk-text-muted in-offset-bottom-10">Company Overview</p>
              <h1 class="uk-margin-small-bottom"><span class="in-highlight">A globally</span> renowned CFD forex broker with outstanding reputation</h1>
                <p class="uk-text-default uk-text-grey uk-margin-remove-top uk-margin-bottom uk-text-justify">Lucky Ant, an esteemed global CFD forex broker, was established in 2013 by professionals in the financial and e-commerce sectors. 
                    What sets us apart from competitors is our profound understanding of traders' needs. We recognize the critical factors that instill confidence in our customers—ensuring pricing accuracy, 
                    execution speed, advanced trading platforms, a diverse product range, top-notch customer support, and in-depth market analysis. Our unwavering commitment to excellence has positioned us 
                    among the world's leading forex brokers.
                </p>        
            </div>
            <div class="uk-width-2-5@m">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">                    
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-expand@m">
                            <h3 class="uk-margin-remove-bottom">Your Preferred Partner</h3>
                            <p class="uk-margin-small-top uk-text-justify">Our goal is to provide you with an efficient, secure, and innovative trading environment, ensuring our retail and institutional clients receive the best trading conditions, including low spreads, fast execution, and quick deposit/withdrawal options.</p>
                        </div>
                        <div class="uk-width-auto@m uk-visible@m">
                            <div class="in-icon-wrapper transparent uk-margin-top">
                                <i class="fas fa-users fa-5x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------End of Company Overview-------------------->

<!-------------------------Development Milestone--------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-2-4@m uk-margin-medium-bottom">
                    <h2 class="text-align-center">Development Milestone</h2>
                </div>
            </div>
            <div class="uk-width-1-1 in-timeline-1">
                <hr>
                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-4@m">
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fa-solid fa-handshake fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom uk-text-darkblue ">2017</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                               <p class="uk-text-justify uk-text-darkblue">Formed a strategic partnership with technology providers, focusing on hosting infrastructure and offering connectivity services in the Asia-Pacific region.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-cog fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2021</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-justify uk-text-darkblue">Enhanced liquidity services to meet the efficient needs of institutions, asset management companies, and trading groups.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2023</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                         <p class="uk-text-justify uk-text-darkblue">Integrated digital finance with forex trading platforms, shaping the industry ecosystem in the digital era. Pioneering new industry standards, becoming a frontrunner in the digital age.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2024</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-justify uk-text-darkblue">Launched Copy Trading, driving intelligent trading in the digital currency era. Platform features focus on copy trading, strategy trading, and AI-powered robots, empowering users to achieve smarter trading experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------End of Development Milestone-------------------->

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

<!-------------------------Core Value-------------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-width-1-1@m">
                <h2 class="uk-margin-small-bottom text-align-center">Our Core Value</h2>
                </div>
                <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                    <tbody>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fas fa-users fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Innovation Leadership</h4>
                                    </div>
                                </div>
                            </td>
                            <td>Continuously researching, developing, testing, and implementing the latest technological trends to maintain a leading position while ensuring quality and security.</td>
                      
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m uk-width-1-1@s">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fa-solid fa-magnifying-glass-chart fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Transparency</h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Prioritizing transparency, continuously optimizing services, assisting clients and partners in achieving their goals. Open to in-depth discussions, providing all necessary information promptly, relevantly, and accurately.
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-shield fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Security</h4>
                                    </div>
                                </div>
                            </td>
                            <td> Security is our top concern, whether it's investment security, order execution security, or data security. We take personal responsibility for all obligations to ensure your safety is maximally safeguarded.
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-ranking-star fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Quality </h4>
                                    </div>
                                </div>
                            </td>
                            <td> Pursuing excellence based on professional expertise and ethical standards. Upholding the highest quality standards in all business operations, committing to completing every task with the utmost dedication.
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-vault fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Fund Security </h4>
                                    </div>
                                </div>
                            </td>
                            <td> Independent storage of client funds is our fund security measure. We swiftly deposit client funds into accounts opened by central banks, credit institutions, or third-party banks authorized by the national government, clearly labeled as "client" accounts. This measure ensures the security of client funds, strictly isolated from the company's own funds.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!------------------------End of Core Value-------------------------------->

<!--------------------------Open An Account---------------------------------->
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
<!--------------------------End of Open An Account-------------------------->
@endsection

