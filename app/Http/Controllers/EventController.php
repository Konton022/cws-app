<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events
        return 'POSTS';
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        // Show the form for creating a new event
        return 'CREATE';    
    }

    public function store(Request $request)
    {
        // Store a new event
        return 'STORE';
    }

    public function show($id)
    {
        // Display the specified event
        return 'SHOW';
    }

    public function edit($id)
    {
        // Show the form for editing the specified event
        return 'EDIT';
    }

    public function update(Request $request, $id)
    {
        // Update the specified event
        return 'UPDATE';
    }

    public function destroy($id)
    {
        // Remove the specified event from storage
        return 'DESTROY';
    }
}
