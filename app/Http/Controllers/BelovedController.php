<?php

namespace App\Http\Controllers;

use App\Beloved;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class BelovedController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $user = Beloved::where('userId',$id)->get();
        if(!$user->isEmpty())
        {
             return $this->edit(\Auth::user()->id); 
        }
        else
        {
          return view('dashboard.create'); 
           
        }
    }
    
    public function formValidation(Request $request)
    {
        $this->validate($request,[
                'description' => 'required',
                'topicId' => 'required|integer|min:1',
                'scriptures' => 'required',
                'prayerdate' => 'required',
                'starttime' => 'required',
            ],[
                'description.required' => 'Brief of prayer is required',
                'scriptures.required' => 'Add scriptures for prayer',
                'topicId.required' => ' Please select your prayer topic',
                'categoryId.min' => ' Please select your prayer topic from dropdown list',
                'prayerdate.required' => ' Please add date for prayer',
                'starttime.required' => ' Please add prayer start time',
               
            ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         return view('dashboard.create');
    }

    public function getUimage(Request $request, $upImage)
    {     
        $image = $request->file($upImage);
        $bkgrdImage = 'bp'.\Auth::user()->id.'_'.$image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();
        $image->move(base_path('banners'),$bkgrdImage);
        return $bkgrdImage;  
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $this->formValidation($request);
        $beloveds = new \App\Beloved;
        $beloveds->userId = \Auth::user()->id;
        $beloveds->slug = $request->slug;
        $beloveds->bride = $request->bride;
        $beloveds->groom = $request->groom;
        $beloveds->wVenue = $request->wVenue;
        $beloveds->venue = $request->venue;
        $beloveds->wPcode = $request->wPcode;
        $beloveds->rVenue = $request->rVenue;
        $beloveds->reception = $request->reception;
        $beloveds->rPcode = $request->rPcode;
        if(Input::hasFile('bimage'))
        {
          $beloveds->bkgrdImage = $this->getUimage($request,'bimage');
        }
        $beloveds->weddingDate =  Carbon::parse($request->weddingDate);
        $beloveds->receptionTime =  Carbon::parse($request->receptionTime);
        
        $beloveds->herStory = $request->herStory;
         if(Input::hasFile('hrimage'))
        {
        $beloveds->herImage = $this->getUimage($request,'hrimage');
        }
        $beloveds->hisStory = $request->hisStory ;
         if(Input::hasFile('hsimage'))
        {
         $beloveds->hisImage = $this->getUimage($request,'hsimage');
     }
        $beloveds->proposalStory = $request->proposalStory;
          if(Input::hasFile('primage'))
        {
        $beloveds->proposalImage = $this->getUimage($request,'primage');
        }

        $beloveds->fbProfile = $request->fbProfile;
        $beloveds->twProfile = $request->twProfile;
        $beloveds->igProfile = $request->igProfile;
        $beloveds->save();
       
        return $this->edit(\Auth::user()->id); 
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beloved  $beloved
     * @return \Illuminate\Http\Response.
     */
    public function show(Beloved $beloved)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function edit($userid)
    {
        $beloved = Beloved::where('userId', $userid)->get();
        return view('dashboard.edit', ['beloved' => $beloved]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $beloveds = \App\Beloved::find($id);
        $beloveds->userId = \Auth::user()->id;
        $beloveds->bride = $request->bride;
        $beloveds->groom = $request->groom;
        $beloveds->venue = $request->venue;
        $beloveds->reception = $request->reception ;
        if(Input::hasFile('bimage'))
        {
          $beloveds->bkgrdImage = $this->getUimage($request,'bimage');
        }
        $beloveds->weddingDate =  Carbon::parse($request->weddingDate);
        $beloveds->receptionTime =  Carbon::parse($request->receptionTime);
        
        $beloveds->herStory = $request->herStory;
          if(Input::hasFile('hrimage'))
        {
        $beloveds->herImage = $this->getUimage($request,'hrimage');
     }
        $beloveds->hisStory = $request->hisStory ;
          if(Input::hasFile('hsimage'))
        {
         $beloveds->hisImage = $this->getUimage($request,'hsimage');
     }
        $beloveds->proposalStory = $request->proposalStory;
           if(Input::hasFile('primage'))
        {
        $beloveds->proposalImage = $this->getUimage($request,'primage');
     }

        $beloveds->fbProfile = $request->fbProfile;
        $beloveds->twProfile = $request->twProfile;
        $beloveds->igProfile = $request->igProfile;
        
        $beloveds->save();
        
        return back()->with('success', 'Page updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beloved $beloved)
    {
        //
    }
}
