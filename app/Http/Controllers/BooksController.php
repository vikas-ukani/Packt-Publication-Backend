<?php

namespace App\Http\Controllers;

use App\Http\Resources\BooksCollection;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = [];
        $params["limit"] = $request->limit ? $request->limit : 10;
        $params['page'] = $request->page && $request->page > 0 ? $request->page : 1;
        $skip = ($params['page'] - 1) * $params["limit"];

        // Create Cache Key
        $cacheKey = "books:";
        if ($params['page']) $cacheKey = "{$cacheKey}:page:{$params['page']}";
        if ($params['limit']) $cacheKey   = "{$cacheKey}:limit:{$params['limit']}";

        $ttl = now()->addMinutes(60); // Store Cache for an Hour
        // $ttl = now()->addSeconds(5);  // Store Cache for an 5 Second for testing.

        $data = Cache::remember($cacheKey, $ttl, function () use ($params) {
            return Books::paginate($params['limit']);
        });
        return new BooksCollection($data);
    }


    /**
     * Get Book by id
     */
    public function get($id)
    {
        // Create Cache Key
        $cacheKey = "book:{$id}";

        $ttl = now()->addMinutes(60); // Store Cache for an Hour
        // $ttl = now()->addSeconds(5);  // Store Cache for an 5 Second for testing.
        $data = Cache::remember($cacheKey, $ttl, function () use ($id) {
            return Books::with('category')->find($id);
        });
        return response()->json(['success' => true, 'data' => $data]);
    }
}
