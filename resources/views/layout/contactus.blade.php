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
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center in-contact-6">
            <div class="uk-width-4-5">
                <iframe class="uk-width-1-1 uk-height-large uk-border-rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10600.5248164368!2d144.95966577016594!3d-37.81707816290683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1645280096951!5m2!1sen!2sid">
                </iframe>
            </div>
            <div class="uk-width-4-5@m">
                <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                    <div>
                        <h5 class="uk-margin-remove-bottom">Address</h5>
                        <p class="uk-margin-small-top">Satrio Tower 16th, Jl. Dr Satrio Kuningan, Jakarta</p>
                    </div>
                    <div>   
                        <h5 class="uk-margin-remove-bottom">Email</h5>
                        <p class="uk-margin-small-top uk-margin-remove-bottom">support@luckyantfxasia.com</p>
                    </div>
                </div>
                <hr class="uk-margin-medium">
                <h1 class="uk-margin-small-top uk-text-center">Contact Us</h1>
                <p class="uk-margin-remove-bottom uk-text-muted uk-text-center uk-text-justify uk-text-default">Thank you for choosing to get in touch with us. Please use the registration information form below to provide your details, or you can contact us via email at support@luckyantfxasia.com. This will help us better understand your needs and provide you with professional assistance. Your information will be kept confidential and used to handle your inquiries.</p>
                <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="" action="{{ route('contact.store') }}" method="post">
                    @csrf
                <div class="uk-width-1-1@s uk-inline">
                    <span class="uk-form-icon fas fa-user fa-sm"></span>
                    <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                </div>
                <div class="uk-width-1-2@s uk-inline">
                    <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                    <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                </div>
                <div class="uk-width-1-2@s uk-inline">
                    <span class="uk-form-icon fas fa-pen fa-sm"></span>
                    <input class="uk-input uk-border-rounded" id="phone" name="phone" type="text" placeholder="Phone Number">
                </div>
                <div class="uk-width-1-2@s uk-inline">
                    <span class="uk-form-icon fa fa-angle-down fa-sm"></span>
                    <select class="uk-input uk-border-rounded" name="country_id">
                        <option value="" disabled selected class="uk-text-muted">Select a Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="uk-width-1-2@s uk-inline">
                    <span class="uk-form-icon fa fa-users fa-sm"></span>
                    <input class="uk-input uk-border-rounded" id="interest" name="interest" type="text" placeholder="Cooperation Plan of Interest">
                </div>
                <div class="uk-width-1-1">
                    <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Additional Comments"></textarea>
                </div>
                <div class="uk-width-1-1">
                    <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="submit" type="submit" name="submit">Submit</button>
                </div>
                @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000 // Set the timer for how long you want the message to be displayed
                    });
                </script>
            @endif
            
            @if(session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: '{{ session('error') }}',
                        showConfirmButton: false,
                        timer: 3000 // Set the timer for how long you want the message to be displayed
                    });
                </script>
            @endif
            </form>
            <p class="uk-margin-remove-bottom uk-text-muted uk-text-center uk-text-default">We look forward to establishing a close partnership with you and providing excellent service and support. If you have any questions or need assistance, feel free to reach out to our customer service team.</p>

            </div>
        </div>
    </div>
</div>


@endsection