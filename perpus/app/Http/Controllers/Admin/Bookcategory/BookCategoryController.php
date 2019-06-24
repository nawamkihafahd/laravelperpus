<?php

namespace App\Http\Controllers\Admin\Bookcategory;

use App\Models\Bookcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $bookcategory;
	
	public function __construct()
    {
        $this->bookcategory = new Bookcategory();
    } 

	public function index()
    {
        //
		$data['categories'] = Bookcategory::latest()->get();
		return view('admin.kategoribuku.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin.kategoribuku.create');
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
			'nama' => 'required|max:30',
		], $messages);
		$this->bookcategory->create($request->all());
		return redirect()->route('admin.bookcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookcategory  $bookcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Bookcategory $bookcategory)
    {
        //
		//$bookcategory = Bookcategory::find(1);
		//return $bookcategory;
		return view('admin.kategoribuku.show', ['model' => $bookcategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookcategory  $bookcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookcategory $bookcategory)
    {
        //
		return view('admin.kategoribuku.edit', ['model' => $bookcategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookcategory  $bookcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookcategory $bookcategory)
    {
        //
		$messages = [
			'required' => ':atrribute Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'nama' => 'required|max:30',
		], $messages);
		
		$bookcategory->update($request->all());
		return view('admin.kategoribuku.show', ['model' => $bookcategory]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookcategory  $bookcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookcategory $bookcategory)
    {
        //
		$bookcategory->delete();
		return redirect()->route('admin.bookcategory.index');
    }
}
