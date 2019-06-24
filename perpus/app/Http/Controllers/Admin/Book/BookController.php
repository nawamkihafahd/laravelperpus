<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;
use App\Models\Bookcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
			'required' => ':atrribute Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'judul' => 'required|max:50',
			'pengarang' => 'required|max:50',
			'coverurl' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
			'fileurl' => 'required|file|mimes:pdf',
		], $messages);
		$coverpath = $request->file('coverurl')->store('coverurls');
		$filepath = $request->file('fileurl')->store('fileurls');
		//return $coverpath;
		//$request->coverpath = $coverpath;
		//$request->fielpath = $filepath;
		//return $request->coverpath;
		$this->book->create($request->except('coverurl', 'fileurl') + ['coverurl' => $coverpath, 'fileurl' => $filepath]);
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
		$coverpath = $book->coverurl; 
		$filepath = $book->fileurl;
		if ($request->hasFile('coverurl')) {
			//return 'file is in';
			$coverpath = $request->file('coverurl')->store('coverurls');
			if (Storage::exists($book->coverurl)) {
				Storage::delete($book->coverurl);
			}
		}
		if ($request->hasFile('fileurl')) {
			//return 'file is in';
			$filepath = $request->file('fileurl')->store('fileurls');
			if (Storage::exists($book->fileurl)) {
				Storage::delete($book->fileurl);
			}
		}
		//return 'file is not in';
		$book->update($request->except('coverurl', 'fileurl') + ['coverurl' => $coverpath, 'fileurl' => $filepath]);
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
		if (Storage::exists($book->coverurl)) {
            Storage::delete($book->coverurl);
        }
		if (Storage::exists($book->fileurl)) {
            Storage::delete($book->fileurl);
        }
        $book->delete();
		return redirect()->route('admin.book.index');
    }
	
	public function addCategory(Request $request)
    {
		$messages = [
			'required' => ':Atribut Wajib Diisi',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute Wajib Diisi maximal :max karakter!'
		];
        //
		$this->validate($request,[
			'id' => 'required',
			'categoryid' => 'required'
		], $messages);
		$book = Book::find($request->id);
		$categories = [$request->categoryid];
		if(! $book->bookcategories->contains($request->categoryid))
		{
			$book->bookcategories()->attach($categories);
		}
		return redirect()->route('admin.book.show', $request->id);
    }
	
	public function destroyCategory(Request $request)
    {
        $book = Book::find($request->id);
		$book->bookcategories()->detach($request->categoryid);
		return redirect()->route('admin.book.show', $request->id);
    }
}
