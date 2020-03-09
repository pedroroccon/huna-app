<?php

namespace App\Http\Controllers;

use App\Responsavel;
use Illuminate\Http\Request;

class ResponsavelController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $responsavels = Responsavel::all();
      return view('responsavel.index', compact('responsavels'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('responsavel.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $responsavel = new Responsavel;
      $responsavel->fill($request->all());
      $responsavel->save();

      return redirect('responsavel');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Responsavel  $responsavel
   * @return \Illuminate\Http\Response
   */
  public function show(Responsavel $responsavel)
  {
      return view('responsavel.show', compact('responsavel'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Responsavel  $responsavel
   * @return \Illuminate\Http\Response
   */
  public function edit(Responsavel $responsavel)
  {
      return view('responsavel.edit', compact('responsavel'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Responsavel  $responsavel
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Responsavel $responsavel)
  {
      $responsavel->fill($request->all());
      $responsavel->update();

      return redirect('responsavel');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Responsavel  $responsavel
   * @return \Illuminate\Http\Response
   */
  public function destroy(Responsavel $responsavel)
  {
      $responsavel->delete();
      return back();
  }
}
