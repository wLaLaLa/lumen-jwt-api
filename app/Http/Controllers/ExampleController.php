<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Version
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function version(Request $request)
    {
        return $this->error('sdfdsf', 4001);
        $this->validate($request, ['name' => 'required']);
        return response()->json(['version' => app()->version()], 404);
    }
}
