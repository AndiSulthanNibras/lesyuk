<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = Review::all();

        if($review->count()){
            return response()->json($review);
        }else {
            return response()->json(['error' => 'No Reviews Data'], 404);
        }

    }

    public function home()
    {
        $response = Http::get('http://127.0.0.1:8000/api/reviews');
        return view('admin.Review.review',compact($response));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('admin.Review.create-review');
    }

    public function store(Request $request)
    {
        Review::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'rating' => $request->rating,
        ]);

        return redirect('review');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
