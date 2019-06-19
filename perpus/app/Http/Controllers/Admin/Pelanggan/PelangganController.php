<?php

namespace App\Http\Controllers\Admin\Pelanggan;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
	 
     * @return \Illuminate\Http\Response
     */
	 
	protected $pelanggan;
	
	public function __construct()
    {
        $this->pelanggan = new Pelanggan();
    }
	 
    public function index()
    {
        //
		$data['pelanggans'] = Pelanggan::latest()->get();
		return view('admin.pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$messages = [
			'required' => ':Atribut Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'nama' => 'required|max:50',
			'alamat' => 'required|max:50',
			'notelp' => array('required', 'regex:/(^\d{1,15}$)/u')
		], $messages);
		
		$this->pelanggan->create($request->all());
		return redirect()->route('admin.pelanggan.index');
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
		return view('admin.pelanggan.show', ['model' => $pelanggan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
		return view('admin.pelanggan.edit', ['model' => $pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        //
		$messages = [
			'required' => ':Atribut Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'nama' => 'required|max:50',
			'alamat' => 'required|max:50',
			'notelp' => array('required', 'regex:/(^\d{1,15}$)/u')
		], $messages);
		
		$pelanggan->update($request->all());
		return view('admin.pelanggan.show', ['model' => $pelanggan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
		$pelanggan->delete();
		return redirect()->route('admin.pelanggan.index');
    }
}
