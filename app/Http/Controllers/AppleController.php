<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sim;
use App\Apple;
use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppleRequest;

class AppleController extends Controller
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
        $apples = Apple::all();

        return view('apples.index', compact('apples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppleRequest $request)
    {
        Apple::create($request->all());

        return redirect('apple');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apple = Apple::find($id);

        $sim = Apple::find($id)->sim;

        return view('apples.show', compact('apple', 'sim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assign($id)
    {
        $employee = Employee::find($id);

        \Session::flash('employee', $employee);

        return redirect('apple');
    }

    public function assignApple($appleId, $employeeId)
    {
        $apple = Apple::find($appleId);
        $sim = Apple::find($appleId)->sim;

        $apple->employee_id = $employeeId;
        $apple->save();

        $sim->employee_id = $employeeId;
        $sim->save();

        \Session::flash('applesuccess', 'Apple device successfully assigned');

        return redirect('employee/' . $employeeId);
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
