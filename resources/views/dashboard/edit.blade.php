@extends('layouts.main')

@section('content')

 @foreach ($beloved as $beloveds)  
 <form method="post" action="{{action('BelovedController@update', $beloveds->id)}}" enctype="multipart/form-data">
       {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
    <header class="masthead text-center text-black" style="background-image: url(img/{{$beloveds->bkgrdImage}})" > 
      <div class="masthead-custom" > 
      <div class="masthead-content">
        <div class="container pt-50">
        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif   
                       
       <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,bimage,null,bkgrdImage);">Upload your background profile image here >></div>
        <input class='file' type="file" style="display: none" class="form-control" name="bimage" id="bimage" placeholder="Please choose your image">
  <input id="bkgrdImage" type="hidden" name="bkgrdImage" class="form-control"   >
   
                  </div>
          
      </div>
       </div>
    </header>
    <section>
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/{{$beloveds->bkgrdImage}}" alt="">

          
                
  </div>                      
                  


            </div>
         
          <div class="col-lg-8 order-lg-1">
            <div class="p-5">
              <div class="form-group row">
                            <label for="bridename" class="col-sm-4 col-form-label "> Belovedpage Web address </label>

                            <div class="col-md-8 input-group">
                                <input id="text" type="text" class="form-control{{ $errors->has('bride') ? ' is-invalid' : '' }}" name="slug" value="/bpage/{{$beloveds->slug}}" readonly>
                              <span class="input-group-addon"><a href="{{ route('bpage.single',$beloveds->slug) }}"><span class="fa fa-home"></span></a></span></a>
                            </div>
                        </div>
              <h2 class="display-5">Details...</h2>
        
                        <div class="form-group row">
                            <label for="bridename" class="col-sm-4 col-form-label "> Bride </label>

                            <div class="col-md-8">
                                <input id="text" type="text" class="form-control{{ $errors->has('bride') ? ' is-invalid' : '' }}" name="bride"  value="{{$beloveds->bride}}" required>
                              @if ($errors->has('bride'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bride') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<div class="form-group row">
                            <label for="bridename" class="col-sm-4 col-form-label "> Groom name </label>

                            <div class="col-md-8">
                                <input id="text" type="text" class="form-control" name="groom" value="{{$beloveds->groom}}"  required>
                            
                            </div>
                        </div>
                
                 
          
                        <div class="form-group row">
                            <label for="bridename" class="col-sm-4 col-form-label "> Wedding date time </label>

                            <div class="col-md-8">
                           <div class="input-group date form_datetime" data-date="" >
                    <input class="form-control" size="16" type="text" value="{{$beloveds->weddingDate}}" name="weddingDate" readonly>
                    <span class="input-group-addon"><span class="fa fa-times"></span></span>
          <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                </div>
               
                            </div>
                        </div>
     <div class="form-group row">
                            <label for="bridename" class="col-sm-4 col-form-label "> Reception date time </label>

                            <div class="col-md-8">
                           <div class="input-group date form_datetime" data-date="" >
                    <input class="form-control" size="16" type="text" value="{{$beloveds->receptionTime}}"  name="receptionTime" readonly>
                    <span class="input-group-addon"><span class="fa fa-times"></span></span>
          <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                </div>
               
                            </div>
                        </div>

            
            </div>
          </div>
        </div>
         
      </div>
    </section>
     <section class="bg-bpages">
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <h2 class="display-5">Reception...</h2>
           <div class="col-md-12">
              <input id="text" type="text" class="form-control" name="receptionVenue" value="{{$beloveds->rVenue}}"  required>
              <textarea id="text" type="text" class="form-control" name="reception" rows="3"  required autofocus> {{$beloveds->reception}} </textarea>
              <input id="text" type="text" class="form-control" name="receptionPcode" value="{{$beloveds->rPcode}}"  required>
                            
            </div>
                
  </div>                      
                  


            </div>
         
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">Venue...</h2>
        
                  <div class="col-md-12">
                    <input id="text" type="text" class="form-control" name="weddingVenue" value="{{$beloveds->wVenue}}"  required>
                    <textarea id="text" type="text" class="form-control" name="venue" rows="3"  required autofocus> {{$beloveds->venue}} </textarea>
                    <input id="text" type="text" class="form-control" name="weddingPcode" value="{{$beloveds->wPcode}}"  required>
               
                        </div>
            </div>
          </div>
        </div>
         
      </div>
    </section>
  <section class="bg-bpages">
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/{{$beloveds->hrimage}}" alt="">
                       <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,hrimage,null,hrhidden);">Select a file</div>
        <input class='file' type="file" style="display: none" class="form-control" name="hrimage" id="hrimage" placeholder="Please choose your image">
  <input id="hrhidden" type="hidden" name="hrhidden" class="form-control"   >
       
                        

            </div>
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">Her Story...</h2>
        <div class="col-md-12">
                                <textarea id="text" type="text" class="form-control" name="herStory" rows="8"  required > {{$beloveds->herStory}} </textarea>
                        </div>
    
            </div>
          </div>
               
        </div>
          
      </div>
    </section>
<section >
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/{{$beloveds->hsimage}}" alt="">
                       <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,hsimage,null,hshidden);">Select a file</div>
        <input class='file' type="file" style="display: none" class="form-control" name="hsimage" id="hsimage" placeholder="Please choose your image">
  <input id="hshidden" type="hidden" name="hshidden" class="form-control"   >
     
                         </div>
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">His Story</h2>
              
                                 
                            <div class="col-md-12">
                                <textarea id="text" type="text" class="form-control" name="hisStory" rows="8"   required autofocus> {{$beloveds->hisStory}} </textarea>
                        </div>          
          </div>
        </div>
      </div>
         
      </div>
    </section>
     <section class="bg-bpages">
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/{{$beloveds->primage}}" alt="">
                       <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,primage,null,prhidden);">Select a file</div>
        <input class='file' type="file" style="display: none" class="form-control" name="primage" id="primage" placeholder="Please choose your image">
  <input id="prhidden" type="hidden" name="prhidden" class="form-control"   >
            
                           </div>
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">The Proposal...</h2>
        <div class="col-md-12">
                                <textarea id="text" type="text" class="form-control" name="proposalStory" rows="8"  required autofocus> {{$beloveds->proposalStory}} </textarea>
                        </div>
            </div>
          </div>
        </div>
          
      </div>
    </section>
     <section>
      <div class="container">
         <div class="row align-items-center">
          <div class="col-lg-5 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/{{$beloveds->bkgrdImage}}" alt="">
            </div>
          </div>
          <div class="col-lg-7 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">Social Profile...</h2>
     
                        <div class="form-group row">
                            <label for="bridename" class="col-sm-3 col-form-label"> Facebook </label>

                            <div class="col-md-9">
                                <input id="text" type="text" class="form-control" name="fbProfile"  value="{{$beloveds->fbProfile}}">

                               
                            </div>
                        </div>
<div class="form-group row">
                            <label for="bridename" class="col-sm-3 col-form-label"> Twitter </label>

                            <div class="col-md-9">
                                <input id="text" type="text" class="form-control" name="twProfile"  value="{{$beloveds->twProfile}}">

                               
                            </div>
                        </div>
                    <div class="form-group row">
                            <label for="bridename" class="col-sm-3 col-form-label "> Instagram </label>

                            <div class="col-md-9">
                                <input id="text" type="text" class="form-control" name="igProfile"  value="{{$beloveds->igProfile}}">
                            </div>
                        </div>
            </div>  
            <div class="form-group row">
                        <button type="submit" class="btn btn-success btn-xl rounded-pill text-right" style="margin-left:38px">Save BelovedPage</button>
            </div>
          </div>
        </div>
         
      </div>
    </section>
</form>
@endforeach
   @endsection