<?php

namespace App\Http\Controllers;

use App\Bookmassage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

class BookmassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmassages = Bookmassage::orderBy('id')->get();
        return view('bookmassages.index', ['bookmassages' => $bookmassages]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        

        return view('bookmassages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bookmasage = $request->all();
        $data = $request->validate([
           'fullname' => 'required',
       ]);
       Bookmassage::create($data);

       Session::flash('success', ' Added successfully');
       return redirect()->back()->with('success','Added successfuly');
        $bookmassage = $request->all();
         $data = $request->validate([
            'fullname' => 'required',
            'contactno' => 'required',
            'noofreservation' => 'required',
            'datetime' => 'required',
            'package' => 'required',
            
        ]);
        Bookmassage::create($data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
