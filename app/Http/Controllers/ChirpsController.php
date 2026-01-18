<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = [
            [
                'author' => 'Alice',
                'message' => 'Hello, world!',
                'timestamp' => '2024-06-01 10:00:00'
            ],
            [
                'author' => 'Bob',
                'message' => 'Just had a great lunch!',
                'timestamp' => '2024-06-01 12:30:00'
            ],
            [
                'author' => 'Charlie',
                'message' => 'Looking forward to the weekend.',
                'timestamp' => '2024-06-01 15:45:00'
            ],
        ];

        return view('home', ['chirps' => $chirps]);
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
