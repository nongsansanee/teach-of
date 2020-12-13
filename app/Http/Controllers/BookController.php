<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\book;

class BookController extends Controller
{
    public function checkUser(Request $request)
    {
        \Log::info($request->all());
        return $request->input('password');
        return $request->input('username');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "show book";
        return view('store_book');
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
       \Log::info("store book");
        $aaa = new book;

        $aaa->book_name = $request->input('book_name');
        $aaa->price = $request->input('price');

        $aaa->save();

         return 'save success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$a = book::find($id)->get();
        $a = book::where('id', $id)->get();
        //\Log::info($a);
        

        //return view(show_book)->with('bookDetails',$a);
        return view('show_books', ['bookDetails' => $a]);
    }

    public function showAll()
    {

        $a = book::all();
        //\Log::info($a);
        return view('show_books', ['bookDetails' => $a]);

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
