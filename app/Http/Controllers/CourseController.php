<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cources = Course::all();
        return view ('cources.index')->with('cources', $cources);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('cources')->with('flash_message', 'cources Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cources = Course::find($id);
        return view('cources.show')->with('cources', $cources);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cources = Course::find($id);
        return view('cources.edit')->with('cources', $cources);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cources = Course::find($id);
        $input = $request->all();
        $cources->update($input);
        return redirect('cources')->with('flash_message', 'Cources Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('cources')->with('flash_message', 'Cources deleted!');
    }
}
