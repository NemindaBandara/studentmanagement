<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batch::all();
        return view ('batches.index') -> with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // return view ('batches.create');

        $courses=Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request -> all();
        Batch::create($input);
        return redirect('batches') -> with('flash_message', 'Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batch::find($id);
        return view ('batches.show') -> with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batches = Batch::find($id);
        return view ('batches.edit') -> with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batchs Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch Deleted!');
    }
}
