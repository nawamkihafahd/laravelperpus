<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    protected $book;
	
	public function __construct()
    {
        $this->book = new Book();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data['books'] = Book::latest()->get();
		return view('admin.book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create');
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
			'judul' => 'required|max:50',
			'pengarang' => 'required|max:50'
		], $messages);
		
		$this->book->create($request->all());
		return redirect()->route('admin.book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin.book.show', ['model' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', ['model' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $messages = [
			'required' => ':Atribut Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'judul' => 'required|max:50',
			'pengarang' => 'required|max:50'
		], $messages);
		
		$book->update($request->all());
		return view('admin.book.show', ['model' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
		return redirect()->route('admin.book.index');
    }
}
