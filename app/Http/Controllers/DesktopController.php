<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Desktop;
use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesktopRequest;

class DesktopController extends Controller
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
        $desktops = Desktop::all();

        return view('desktops.index', compact('desktops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desktops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesktopRequest $request)
    {
        Desktop::create($request->all());

        return redirect('desktop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desktop = Desktop::find($id);

        $employee = Desktop::find($id)->employee;

        return view('desktops.show', compact('desktop', 'employee'));
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

        return redirect('desktop');
    }

    public function assignDesktop($desktop, $employee)
    {
        $desktop = Desktop::find($desktop);

        $desktop->employee_id = $employee;
        $desktop->save();

        \Session::flash('laptopsuccess', 'Desktop successfully assigned');

        return redirect('employee/' . $employee);
    }

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
