@extends('layouts.main')

@section('content')
<header class="masthead text-center text-black " style="background-image: url(img/belovedpages_couple.jpg);" > 
      <div class="masthead-custom" > 
      <div class="masthead-content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                <div class="form-group row">
                            <label for="churcname" class="col-md-4 col-form-label text-md-right">{{ __('Churchname') }}</label>

                            <div class="col-md-6">
                                <input id="churcname" type="text" class="form-control{{ $errors->has('churchname') ? ' is-invalid' : '' }}" name="churchname" value="{{ old('churchname') }}" required autofocus>

                                @if ($errors->has('churchname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('churchname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 </div>
       </div>
    </header>
    <a name="story"></a>
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">About...</h2>
              <p>Dearly beloved, belovedPages.com was established to help take some of the stress of your upcoming big day.
                <br> Our site helps you build your belovedPage to organise items such as invitations online, ceremony venue, dates and time to share with fiends and family.<br>You also get to manage and track RSVPs and share your belovedosing story till your big day, just to name a few thing.<br>
                It is FREE to sign up and get started in 3 easy steps<a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Get Started</a>
           </p>   
            </div>
          </div>
        </div>
      </div>
    </section>
 
<!-- Icons Grid -->
    <section class="features-icons bg-bpages text-center">
      <div class="container">
        <h3 class="masthead-heading mb-0">How IT Works</h3>
        <div class="row">
          
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-login m-auto text-primary"></i>
              </div>
              <h3>Sign Up</h3>
              <p class="lead mb-0">Registering with belovedPages is free, just sign up and login to get started</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-note m-auto text-primary"></i>
              </div>
              <h3>Customise</h3>
              <p class="lead mb-0">Personalize your beloved page with your wedding details, etc.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-share m-auto text-primary"></i>
              </div>
              <h3>Share</h3>
              <p class="lead mb-0">Include your website link on your save-the-date and shower invites.</p>
            </div>
          </div>
        </div>
         
    </section>
      <section class="features-icons bg-light text-center">
      <div class="container">
        <h3 class="masthead-heading mb-0">belovedPages includes these great features </h3>
        <div class="row">

          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-clock m-auto text-primary"></i>
              </div>
              <h3>Countdown</h3>
              <p class="lead mb-0">Automatic countdown to help guest track the big day</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-directions m-auto text-primary"></i>
              </div>
              <h3>Directions</h3>
              <p class="lead mb-0">Embedded map to help your guests find the venue</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-envelope-letter m-auto text-primary"></i>
              </div>
              <h3>RSVP</h3>
              <p class="lead mb-0">Your guest gets to accept your invites online for you to track</p>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-book-open m-auto text-primary"></i>
              </div>
              <h3>Guest book</h3>
              <p class="lead mb-0">Guest can send you well wishes and prayer online for your scrapbook</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-playlist m-auto text-primary"></i>
              </div>
              <h3>Playlist</h3>
              <p class="lead mb-0">Share your favoutite Worship tunes with guest, friends and family</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-present m-auto text-primary"></i>
              </div>
              <h3>Gift ideas for your guest</h3>
              <p class="lead mb-0">A collection of wedding gifts for guest to get ideas on presents</p>
            </div>
          </div>
      </div>
       <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-camera m-auto text-primary"></i>
              </div>
              <h3>Photos</h3>
              <p class="lead mb-0">Share your belovedosing story photos leading to your big day</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-share m-auto text-primary"></i>
              </div>
              <h3>Connect</h3>
              <p class="lead mb-0">Connect your social media pages for guests and friends to browse</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-bulb m-auto text-primary"></i>
              </div>
              <h3>More features</h3>
              <p class="lead mb-0">This is just the beginning. More features to follow</p>
            </div>
          </div>
        </div>
    </section>
     <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Quote Me for Printing</h2>
                    <h3 class="section-subheading">Looking to print your invitation cards, flyers or postcards<br>just send us a message to see how we can help</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

   @endsection
 

