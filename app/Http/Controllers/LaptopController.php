<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Laptop;
use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LaptopRequest;

class LaptopController extends Controller
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
        $laptops = Laptop::all();

        return view('laptops.index', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaptopRequest $request)
    {
        Laptop::create($request->all());

        return redirect('laptop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laptop = Laptop::find($id);

        $employee = Laptop::find($id)->employee;

        return view('laptops.show', compact('laptop', 'employee'));
    }


    public function assign($id)
    {
        $employee = Employee::find($id);

        \Session::flash('employee', $employee);

        return redirect('laptop');
    }

    public function assignLaptop($laptop, $employee)
    {
        $laptop = Laptop::find($laptop);

        $laptop->employee_id = $employee;
        $laptop->save();

        \Session::flash('laptopsuccess', 'Laptop successfully assigned');

        return redirect('employee/' . $employee);
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
