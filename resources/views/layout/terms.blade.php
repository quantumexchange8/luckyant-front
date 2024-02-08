@extends('master.master')
@section('content')
<main>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                <h1>Terms and <span class="in-highlight">Policies</span></h1>
            </div>
            <ul class="uk-list uk-list-divider">
              <li>
                <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-file fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">Customer Agreement</h3>
                      <p class="uk-text-justify">Read our Customer Agreement in detail to learn about your obligations, rights, and the unmatched trading experience we provide. </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('customer')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>Customer Agreement</a></li>
                      </ul>
                  </div>
                  
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-globe fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">Privacy Policy</h3>
                      <p class="uk-text-justify">Discover how we prioritize and protect your personal information by reading our privacy policy. </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('privacy')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>Privacy Policy</a></li>
                      </ul>
                  </div>
              </div>
              </li>
              <li class=" uk-margin-top20">
                <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
    
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-globe fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">Disclosures and Risk Warning</h3>
                      <p class="uk-text-justify">To learn more about important information and possible risks, browse our Disclosures and Risk Warning section.</p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('disclosure')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>Disclosures and Risk Warning</a></li>
                      </ul>
                  </div>
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-shield-alt fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">Copy Trading Terms and Conditions</h3>
                      <p class="uk-text-justify">For a thorough explanation of how our platform guarantees a safe and profitable trading experience, explore our Copy Trading Terms & Conditions. </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('copytradepolicy')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>Copy Trading Terms and Conditions</a></li>
                      </ul>
                  </div>
              </div>
              </li>
        
          </ul>
        </div>
    </div>
</div>
@endsection