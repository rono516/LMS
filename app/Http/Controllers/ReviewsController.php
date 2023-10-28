<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewsResource;
use App\Models\Review;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Review::all();
        return ReviewsResource::collection(
            Review::where('user_id', Auth::user()->id)->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        $request->validated($request->all());
        $review = Review::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return new ReviewsResource($review);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        // if (Auth::user()->id != $review->user->id) {
        //     return $this->error('', 'You are not authorized to request', 401);
        // }

        return $this->isNotAuthorized($review) ? $this->isNotAuthorized($review) : new ReviewsResource($review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        if (Auth::user()->id != $review->user->id) {
            return $this->error('', 'You are not authorized to request', 401);
        }
        $review->update($request->all());
        return new ReviewsResource($review);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        // $review->delete();
        // return response(null, 204);

        return $this->isNotAuthorized($review) ? $this->isNotAuthorized($review) : $review->delete();
    }

    private function isNotAuthorized($review)
    {
        if (Auth::user()->id != $review->user->id) {
            return $this->error('', 'You are not authorized to request', 401);
        }
    }
}
