<?php

namespace App\Http\Controllers;

use App\Jobs\prosesSendInformation;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\sendInformation;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class sendInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Mail::to('user@gmail.com')->send(new sendInformation);
        return 'Email Terkirim';
    }

    public function sendEmailInformation()
    {
        $emails = User::pluck('email');
        foreach ($emails as $email) {
            // Mail::to($email)->send(new sendInformation());
            prosesSendInformation::dispatch($email);
        }

        return redirect()->route('dashboard')->with('success', 'Email Berhasil Dikirim');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
