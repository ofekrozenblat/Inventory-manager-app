<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data = [
      'isEditing' => false,
      'categories' => Category::all(),
    ];
    return view('item.form', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|unique:item',
      'quantity' => 'required|integer|min:1',
      'category' => 'required',
    ]);

    $item = Item::make([
      'name' => $request->input('name'),
      'quantity' => $request->input('quantity'),
      'category_id' => $request->input('category'),
    ]);
    $item->save();
    return redirect('/');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function show(Item $item)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function edit(Item $item)
  {
    $data = [
      'item' => $item,
      'categories' => Category::all(),
      'isEditing' => true,
    ];
    return view('item.form', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Item $item)
  {
    $request->validate([
      'quantity' => 'required|integer|min:1',
      'category' => 'required',
    ]);

    $item->quantity = $request->input('quantity');
    $item->category_id = $request->input('category');
    $item->save();
    return redirect('/');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function destroy(Item $item)
  {
    $item->delete();
    return redirect('/');
  }
}
