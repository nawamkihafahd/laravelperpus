<?php

namespace App\Http\Controllers\Admin\Pustakawan;

use App\Models\Pustakawan;
use App\Models\Jobdesc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PustakawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $pustakawan;
	
	public function __construct()
    {
        $this->pustakawan = new Pustakawan();
    }
	
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
		return view('admin.pustakawan.create');
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
			'nama' => 'required',
			'alamat' => 'required',
			'notelp' => 'required',
			'jobdesc_id' => 'required'
		], $messages);
		
		$jobdesc = Jobdesc::find($request->jobdesc_id);
		if($jobdesc)
		{
			$this->pustakawan->create($request->all());
			return redirect()->route('admin.pustakawan.index');
		}
		return redirect()->route('admin.pustakawan.create');
		
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
		return view('admin.pustakawan.show', ['model' => $pustakawan]);
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
		return view('admin.pustakawan.edit', ['model' => $pustakawan]);
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
		$messages = [
			'required' => ':atrribute Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required',
			'notelp' => 'required',
			'jobdesc_id' => 'required'
		], $messages);
		
		$jobdesc = Jobdesc::find($request->jobdesc_id);
		if($jobdesc)
		{
			$pustakawan->update($request->all());
			return view('admin.pustakawan.show', ['model' => $pustakawan]);
		}
		return redirect()->route('admin.pustakawan.create');
		
		
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
		$pustakawan->delete();
		return redirect()->route('admin.pustakawan.index');
    }
}
