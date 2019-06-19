<?php

namespace App\Http\Controllers\Admin\Pustakawan;

use App\Models\Pustakawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PustakawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data['pustakawans'] = Pustakawan::latest()->get();
		return view('admin.pustakawan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pustakawan  $pustakawan
     * @return \Illuminate\Http\Response
     */
    public function show(Pustakawan $pustakawan)
    {
        //
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pustakawan  $pustakawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pustakawan $pustakawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pustakawan  $pustakawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pustakawan $pustakawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pustakawan  $pustakawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pustakawan $pustakawan)
    {
        //
    }
}
