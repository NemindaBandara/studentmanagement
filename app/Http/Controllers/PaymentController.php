<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment::all();
        return view ('payments.index') -> with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $enrollments=Enrollment::pluck('name', 'id');
        return view('payments.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request -> all();
        Payment::create($input);
        return redirect('payments') -> with('flash_message', 'Payment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $payments = Payment::find($id);
        return view ('payments.show') -> with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $payments = Payment::find($id);
        return view ('payments.edit') -> with('payments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Payments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy('id');
        return redirect('payments')->with('flash_message', 'Payment Deleted!');
    }
}
