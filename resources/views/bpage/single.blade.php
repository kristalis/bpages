@extends('layouts.mainhome')

@section('content')

    <header class="masthead text-center text-black " style="background-image: url(/img/{{$blpage->bkgrdImage}});" > 
      <div class="masthead-custom" > 
      <div class="masthead-content">
        <div class="container">
        <h1 class="masthead-heading mb-0 text-white" >{{$blpage->groom}} & {{$blpage->bride}}</h1>
          <h2 class="masthead-subheading mb-0 text-white">{{ \Carbon\Carbon::parse($blpage->weddingDate)->format('l jS F Y')}}</h2>
           <!--{{ \Carbon\Carbon::parse($blpage->weddingDate)->format('g:ia \o\n l jS F Y')}}-->
         
          <h3 class="masthead-subheading mb-0 text-white">{{ $blpage->wVenue }}</h3> 
          <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">{{\Carbon\Carbon::parse($blpage->weddingDate)->diffInDays(\Carbon\Carbon::now())}} days to go</a>

        </div>
           <a href="#story" class="btn btn-circle ">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
      </div>
       <div class="bg-circle-3 bg-circle"></div>
</div>
    </header>
    <a name="story"></a>
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/{{ $blpage->herImage }}" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Her story...</h2>
              <p>{{ $blpage->herStory }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/{{ $blpage->hisImage }}" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">His story</h2>
              <p>{{ $blpage->hisStory }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/{{ $blpage->proposalImage }}" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">The Proposal...</h2>
              <p>{{ $blpage->proposalStory }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<a name="ceremony"></a>
    <section class="bg-bpages">
      <div class="container ">
        <div class="row align-items-top">
          <div class="col-lg-6 ">
            <div class="p-5">
              <h2 class="display-4">Ceremony...</h2>
               <p style="white-space: pre-line;"> 
               	{{ $blpage->wVenue }}
               	{{ $blpage->venue }}
               	{{ $blpage->wPcode }}
            </div>

          </div>
          <div class="col-lg-6 ">
            <div class="p-5">
              <h2 class="display-4">Reception...</h2>
           		<p style="white-space: pre-line;"> 
           			{{ $blpage->rVenue }}
           			{{ $blpage->reception }}
           			{{ $blpage->rPcode }}
           		</p>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>
    <a name="rsvp"></a>
    <section class="features-icons bg-light text-center">
      <div class="container">
         <div class="row">
          <div class="col-lg-6">
             <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-envelope-letter m-auto text-primary"></i>
              </div>
              <h3>RSVP</h3>
              <p class="lead mb-0">We Pray You can Join US</p>
              <form method="post" action="{{action('ContactController@sendRSVP', \Auth::user()->id)}}" enctype="multipart/form-data">
       {{csrf_field()}}
            	        <div class="form-group">
                                    <input type="text"  name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">I am coming, Thanks</button>
           </form>
            </div>
          </div>
        
          <div class="col-lg-6">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-present m-auto text-primary"></i>
              </div>
              <h3>Gift ideas</h3>
              <p class="lead mb-5 text-primary"><a href="https://amzn.to/2GPrnXR">A small envelope for our future will be a blessing</a></p>
              <p class="lead mb-0 text-bold"><a href="https://amzn.to/2GPrnXR">OR You can also Check out the online shop for gift ideas >></a></p>

            </div>
          </div>
      </div>
         
    </section>
 
     @endsection