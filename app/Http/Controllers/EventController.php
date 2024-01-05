<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    public function index()
    {   
        try {
            // Fetch posts from the fake JSON placeholder API
            $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

            // Send the posts data to the 'events' view
            return view('events.index', ['events' => $posts]);
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the API request
            return 'An error occurred: ' . $e->getMessage();
        }
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
        try {
            // Fetch the specific post from the fake JSON placeholder API
            $post = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}")->json();

            // Send the post data to the 'events.show' view
            return view('events.show', ['event' => $post]);
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the API request
            return 'An error occurred: ' . $e->getMessage();
        }
        
    }

    public function edit($id)
    {
        // Fetch the event data for editing
        $post = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}")->json();

        // Show the form for editing the specified event
        return view('events.edit', ['event' => $post]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            // Add other fields as necessary
        ]);
        
        try {
            // Send the updated event data to the fake JSON placeholder API
            $response = Http::put("https://jsonplaceholder.typicode.com/posts/{$id}", $validatedData);

            if ($response->successful()) {
                // Decode the updated post data
                $updatedPost = $response->json();
                
                // Redirect to the event's page with a success message
                return redirect()->route('events.show', $updatedPost['id'])->with('success', 'Event updated successfully.');
                                 
            } else {
                // Handle if the API response is not successful
                return response()->json(['error' => 'Failed to update the event.'], 500);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Return an error response if the event is not found
            return response()->json(['error' => 'Event not found.'], 404);
        } catch (\Exception $e) {
            // Return a general error response for any other exceptions
            return response()->json(['error' => 'An error occurred while updating the event.'], 500);
        }
    }

    public function destroy($id)
    {
        // Remove the specified event from storage
        return 'DESTROY';
    }
}
