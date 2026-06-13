<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\StockApp;
use Illuminate\Http\Request;

class StockAppController extends Controller
{
    public function register(Request $request)
    {
        $baseUrl = rtrim($request->input('base_url', ''), '/');

        StockApp::updateOrCreate(
            ['base_url' => $baseUrl],
            [
                'admin_email'    => $request->input('admin_email', ''),
                'admin_password' => $request->input('admin_password', ''),
                'close_url'      => $baseUrl . '/close-app',
                'open_url'       => $baseUrl . '/open-app',
                'last_ping'      => now(),
            ]
        );

        return response()->json(['success' => true]);
    }
}
