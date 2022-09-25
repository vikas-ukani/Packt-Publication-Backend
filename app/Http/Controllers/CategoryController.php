<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoeryCollection;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cacheKey = 'categories:';
        $ttl = now()->addMinutes(10); // Store Cache for an 10 Minutes
        // $ttl = now()->addSeconds(2);

        $data = Cache::remember($cacheKey, $ttl, function () {
            return Category::all();;
        });
        return new CategoeryCollection($data);
    }

    /**
     * Return Category with books by it's slug value
     */
    public function get($slug = null)
    {
        $cacheKey = "category:{$slug}";
        $ttl = now()->addMinutes(1); // Store Cache for an 1 Minutes
        // $ttl = now()->addSeconds(5); // Store Cache for an 10 Minutes

        /** Storing Data In Cache memory. */
        $data = Cache::remember($cacheKey, $ttl, function () use ($slug) {
            return Category::where('slug', $slug)->with('books')->first();;
        });
        if (!$data) return response()->json(['success' => false, 'data' => null], 400);
        return response()->json(['success' => true, 'data' => $data], 200);
    }
}
