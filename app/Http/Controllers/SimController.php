<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sim;
use App\Apple;
use App\Android;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SimRequest;

class SimController extends Controller
{
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
        $sims = Sim::all();

        return view('sims.index', compact('sims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sims.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimRequest $request)
    {
        Sim::create($request->all());

        return redirect('sim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sim = Sim::find($id);

        $apple = Sim::find($id)->apple;
        $android = Sim::find($id)->android;
        $employee = Sim::find($id)->employee;

        return view('sims.show', compact('sim', 'apple', 'android', 'employee'));
    }

    public function assignApple($id)
    {
        $apple = Apple::find($id);

        \Session::flash('apple', $apple);

        return redirect('sim');
    }

    public function assignAppleSim($simId, $appleId)
    {
        $sim = Sim::find($simId);

        $sim->apple_id = $appleId;
        $sim->android_id = null;
        $sim->save();

        \Session::flash('simsuccess', 'SIM successfully assigned');

        return redirect('apple/' . $appleId);
    }

    public function assignAndroid($id)
    {
        $android = Android::find($id);

        \Session::flash('android', $android);

        return redirect('sim');
    }

    public function assignAndroidSim($simId, $androidId)
    {
        $sim = Sim::find($simId);

        $sim->android_id = $androidId;
        $sim->apple_id = null;
        $sim->save();

        \Session::flash('simsuccess', 'SIM successfully assigned');

        return redirect('android/' . $androidId);
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
