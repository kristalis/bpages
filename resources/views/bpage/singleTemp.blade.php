@extends('layouts.mainhome')

@section('content')

    <header class="masthead text-center text-black " style="background-image: url(/img/{{$blpage->bkgrdImage}});" > 
      <div class="masthead-custom" > 
      <div class="masthead-content">
        <div class="container">
        <h1 class="masthead-heading mb-0 text-white" >{{$blpage->groom}} & {{$blpage->bride}}</h1>
          <h2 class="masthead-subheading mb-0 text-white">{{ \Carbon\Carbon::parse($blpage->weddingDate)->format('l jS F Y')}}</h2>
           <!--{{ \Carbon\Carbon::parse($blpage->weddingDate)->format('g:ia \o\n l jS F Y')}}-->
         
          <h3 class="masthead-subheading mb-0 text-white">MSCI, Milton Keynes</h3> 
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
               <p style="white-space: pre-wrap;"> {{ $blpage->venue }}
            </div>

          </div>
          <div class="col-lg-6 ">
            <div class="p-5">
              <h2 class="display-4">Reception...</h2>
           		<p style="white-space: pre-wrap;"> {{ $blpage->reception }}</p>
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
    <section class="bg-bpages text-center">
      <div class="container ">
        <div class="row align-items-top">
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">RSVP...</h2>
              <h2 class="section-heading ">Hope you can join us</h2>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">I am coming, Thanks</button>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 text-center">
            <div class="p-5">
              <h2 class="display-4">Gift Ideas...</h2>
              <p>A small envelope for our future will be a blessing</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a name="photos"></a>
<section class="p-0 " id="portfolio">
      <div class="container-fluid space-40">
        <h1 class="text-center">Our Photos</h1>
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/1.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/2.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/3.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/4.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/5.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="/img/portfolio/fullsize/6.jpg">
              <img class="/img-fluid" src="/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <a name="rooms"></a>
    <section class=" bg-black text-center">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Acommodation..</h2>
                     <p>Bed & Breakfast</p>   
                              
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 text-center">
            <div class="p-5">
              <h2 class="display-4">Travel...</h2>
              <li>Amazon affiliate</li>
            </div>
          </div>
        </div>
      </div>
    </section>

 
     @endsection