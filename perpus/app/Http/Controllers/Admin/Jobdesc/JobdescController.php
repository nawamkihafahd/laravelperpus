<?php

namespace App\Http\Controllers\Admin\Jobdesc;

use App\Models\Jobdesc;
use App\Models\Pustakawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobdescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $jobdesc;
	
	public function __construct()
    {
        $this->jobdesc = new Jobdesc();
    }
	
    public function index()
    {
        //
		$data['jobdescs'] = Jobdesc::latest()->get();
		return view('admin.jobdesc.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin.jobdesc.create');
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
		$messages = [
			'required' => ':atrribute Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'salary' => 'required',
			'name' => 'required',
		], $messages);
		
		$this->jobdesc->create($request->all());
		return redirect()->route('admin.jobdesc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobdesc  $jobdesc
     * @return \Illuminate\Http\Response
     */
    public function show(Jobdesc $jobdesc)
    {
        //
		//$pustakawans = Jobdesc::find($jobdesc->id)->pustakawans;
		//$data['model'] = $jobdesc;
		//$data['pustakawans'] = $pustakawans;
		return view('admin.jobdesc.show', ['model' => $jobdesc]);
		//return view('admin.jobdesc.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobdesc  $jobdesc
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobdesc $jobdesc)
    {
        //
		return view('admin.jobdesc.edit', ['model' => $jobdesc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobdesc  $jobdesc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobdesc $jobdesc)
    {
        //
		$messages = [
			'required' => ':atrribute Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'salary' => 'required',
			'name' => 'required',
		], $messages);
		
		$jobdesc->update($request->all());
		return view('admin.jobdesc.show', ['model' => $jobdesc]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobdesc  $jobdesc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobdesc $jobdesc)
    {
        //
		//Pustakawan::where('jobdesc_id', $jobdesc->id)->update(['jobdesc_id' =>1])
		$jobdesc->delete();
		return redirect()->route('admin.jobdesc.index');
    }
}
