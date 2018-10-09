@extends('layouts.main')
  @section('content')   
    <form method="post" action="{{url('belovedpages')}}" enctype="multipart/form-data">
        {{csrf_field()}}
      <header class="masthead text-center text-black " style="background-image: url(img/belovedpages_couple.jpg);" > 
        <div class="masthead-custom" > 
          <div class="masthead-content">
            <div class="container pt-50">
              @if (\Session::has('success'))
              <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
              </div><br />
              @endif                    
              <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,bimage,my_footerfile,bkgrdImage);">Upload your background profile image here >></div>
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
                <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">  
              </div>                      
            </div>
            <div class="col-lg-8 order-lg-1">
              <div class="p-5">
                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> Belovedpage Web address </label>
                    <div class="col-md-8">
                      <input id="text" type="text" class="form-control{{ $errors->has('bride') ? ' is-invalid' : '' }}" name="slug"  required>
                        @if ($errors->has('bride'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('bride') }}</strong>
                              </span>
                          @endif
                    </div>
                </div>
                <h2 class="display-5">Details...</h2>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> Bride </label>
                    <div class="col-md-8">
                      <input id="text" type="text" class="form-control{{ $errors->has('bride') ? ' is-invalid' : '' }}" name="bride"  required>
                      @if ($errors->has('bride'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('bride') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> Groom   </label>

                  <div class="col-md-8">
                      <input id="text" type="text" class="form-control" name="groom"   required>
                  
                  </div>
                </div>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> Wedding date time </label>
                  <div class="col-md-8">
                    <div class="input-group date form_datetime" data-date="" >
                      <input class="form-control" size="16" type="text"   name="weddingDate" readonly>
                      <span class="input-group-addon"><span class="fa fa-times"></span></span>
                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    </div>        
                  </div>
                </div>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> Reception date time </label>

                    <div class="col-md-8">
                      <div class="input-group date form_datetime" data-date="" >
                        <input class="form-control" size="16" type="text"    name="receptionTime" readonly>
                        <span class="input-group-addon"><span class="fa fa-times"></span></span>
                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                      </div>
                 
                    </div>
                </div>

                <div class="form-group row">
                  <label for="bridename" class="col-sm-4 col-form-label "> BackgroundImage </label>
                    <div class="col-md-8">
                      <div id="my_footerfile"> </div> 
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
                  <input id="text" type="text" class="form-control" name="rVenue" placeholder="Reception Venue"  required>
                  <textarea id="text" type="text" class="form-control" name="reception" rows="4"  placeholder="Reception Address" required autofocus>Reception address </textarea>
                  <input id="text" type="text" class="form-control" name="rPcode" placeholder="Postcode or Zipcode"  required>   
                </div>
              </div>                      
            </div>
           
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <h2 class="display-5">Venue...</h2>
                  <div class="col-md-12">
                      <input id="text" type="text" class="form-control" name="wVenue" placeholder="Wedding Venue"  required>
                        <textarea id="text" type="text" class="form-control" name="venue" rows="4"  required autofocus>Venue address </textarea>
                      <input id="text" type="text" class="form-control" name="wPcode" placeholder="Postcode or Zipcode"  required>
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
                <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">
                <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,hrimage,my_hrimage,hrhidden);">Select a file</div>
                  <input class='file' type="file" style="display: none" class="form-control" name="hrimage" id="hrimage" placeholder="Please choose your image">
                  <input id="hrhidden" type="hidden" name="hrhidden" class="form-control"   >
                <div id="my_hrimage"> </div> 
              </div>
            </div>
            <div class="col-lg-8 order-lg-1">
              <div class="p-5">
                <h2 class="display-5">Her Story...</h2>
                <div class="col-md-12">
                  <textarea id="text" type="text" class="form-control" name="herStory" rows="8"  required > Tell your story  </textarea>
                </div>
              </div>
            </div>               
          </div> 
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 order-lg-2">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">
                <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,hsimage,my_hsimage,hshidden);">Select a file</div>
                <input class='file' type="file" style="display: none" class="form-control" name="hsimage" id="hsimage" placeholder="Please choose your image">
                <input id="hshidden" type="hidden" name="hshidden" class="form-control"   >
                <div id="my_hsimage"> </div> 
              </div>
            </div>
            <div class="col-lg-8 order-lg-1">
              <div class="p-5">
                <h2 class="display-5">His Story</h2>
                <div class="col-md-12">
                  <textarea id="text" type="text" class="form-control" name="hisStory" rows="8"   required autofocus> Tell your story </textarea>
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
                <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">
                <div id="select_footer" class="btn btn-primary btn-xl rounded-pill " data-toggle="tooltip" data-placement="bottom" title="Click here to Upload your logo here" OnClick="display(this,primage,my_primage,prhidden);">Select a file</div>
                  <input class='file' type="file" style="display: none" class="form-control" name="primage" id="primage" placeholder="Please choose your image">
                  <input id="prhidden" type="hidden" name="prhidden" class="form-control"   >
                  <div id="my_primage"></div> 
              </div>
            </div>
            <div class="col-lg-8 order-lg-1">
              <div class="p-5">
                <h2 class="display-5">The Proposal...</h2>
                <div class="col-md-12">
                  <textarea id="text" type="text" class="form-control" name="proposalStory" rows="8"  required autofocus>Tell your story </textarea>
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
                <img class="img-fluid rounded-circle" src="img/married-girl.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-7 order-lg-1">
              <div class="p-5">
                <h2 class="display-5">Social Profile...</h2>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-3 col-form-label"> Facebook </label>
                    <div class="col-md-9">
                      <input id="text" type="text" class="form-control" name="fbProfile" >
                    </div>
                </div>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-3 col-form-label"> Twitter </label>
                  <div class="col-md-9">
                    <input id="text" type="text" class="form-control" name="twProfile"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="bridename" class="col-sm-3 col-form-label "> Instagram </label>
                    <div class="col-md-9">
                        <input id="text" type="text" class="form-control" name="igProfile"  >
                    </div>
                </div>
              </div>  
              <div class="form-group row">
                <button type="submit" class="btn btn-success btn-xl rounded-pill text-right" style="margin-left:38px">Create BelovedPage</button>
              </div>
            </div>
          </div>        
        </div>
      </section>
    </form>
  @endsection