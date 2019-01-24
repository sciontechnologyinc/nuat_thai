<?php

namespace App\Http\Controllers;
use App\Bookmassage;
use App\Packages;
use Calendar;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Packages::orderBy('id')->get();
        return view('packages.packages', ['packages' => $packages]);
        
    }

    public function services()
    {
        $packages = Packages::orderBy('id')->get();
        return view('website.pages.services', ['packages' => $packages]);
        
    }


    public function packagesdropdown()
    {
        $events = Bookmassage::where("status", "=", "Pending")->get();
        $event_list = [];
        foreach($events as $key => $event) {
            $date = date_format(date_create($event->datetime),"Y/m/d H:i:s");
            $event_list[] = Calendar::event(
                'Not Available',
                false,
                $date,
                $date.' +1 hour'
            );
        }
        $bookmassages = Calendar::addEvents($event_list);
        $bookmassages->setOptions([
            "defaultView" => 'agendaWeek',
            "allDaySlot" => false,
            "selectable" => true,
            "height"=> "auto",
            "minTime" =>  "00:00:00",
            "hiddenDays"=> [ 6, 0 ],
            "maxTime" => "24:00:00",
            "header"=> [
                "left"=> 'prev,next',
                "center"=> 'title',
                "right"=> ''
            ]
        ])
        ->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            "dayClick" => "function(date, jsEvent, view) {
                $('#reserve').modal('show'); 
                $('[name=resvdate]').val(date.format('YYYY-MM-DD'));
                $('[name=resvtime]').val(date.format('HH:mm:ss'));
            }"
        ]);
	    $packages = Packages::orderBy('id')->get();
        return view('bookmassages/create', ['bookmassages' => $bookmassages, 'packages' => $packages]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.addpackage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = $request->all();
        $data = $request->validate([
           'packagecode' => 'required',
           'packagedescription' => 'required',
           'price' => 'required',
           'photo' => 'image|nullable|max:1999'
           
       ]);
       
       if($request->hasFile('photo')){
            
        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('photo')->getClientOriginalExtension();

        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        
        $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
    }else{
        $fileNameToStore = 'user_icon.png';
    }

    
        $package = new Packages;
        $package->packagecode = $request->input('packagecode');
        $package->packagedescription = $request->input('packagedescription');
        $package->price = $request->input('price');
        $package->photo = $fileNameToStore;
        $package->save();
    


         return redirect()->back()->with('success','Added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Packages::find($id);
        return view('packages.editpackage', ['package' => $package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = Packages::find($id);
        $data = $request->all();
        $package->update($data);


        return redirect('/packages')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages = Packages::find($id);
	    $packages->destroy($id);


	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
