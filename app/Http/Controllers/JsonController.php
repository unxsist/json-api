<?php

namespace App\Http\Controllers;

use App\Http\Requests\JsonUpdateRequest;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function index()
    {
        $json = new \App\Json();
        $json->save();

        return redirect()->action('JsonController@edit', ['json' => $json]);
    }

    public function edit(\App\Json $json)
    {
        return view('json.edit', compact('json'));
    }

    public function update(JsonUpdateRequest $request, \App\Json $json)
    {
        $json->json_data = $request->get('json_data');
        $json->save();

        return redirect()->action('JsonController@edit', ['json' => $json]);
    }

    public function serve(\App\Json $json)
    {
        return response()->json(json_decode($json->json_data, true));
    }
}
