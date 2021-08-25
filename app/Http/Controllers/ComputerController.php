<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();

        return view('computers.index', [
            'computers' => $computers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();

        return view('computers.create', [
            'employees' => $employees,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {

        $date1 = $computer->purchased;
        $date2 = date('Y-m-d');
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        if ($computer->os=="Windows" && $years>=4){

            Session::flash('error', 'The Computer will be replacing in the current financial year');
        }elseif ($computer->os=="MacOS" && $years>=6){
                Session::flash('error', 'The Computer will be replacing in the current financial year');
            }
        return view('computers.show', [
            'computer' => $computer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
    }
}
