<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class StockAppController extends Controller
{
    public function register(Request $request)
    {
        $baseUrl = rtrim($request->input('base_url', ''), '/');

        $fields = [
            'base_url'       => ['value' => $baseUrl,                          'type' => 'url'],
            'admin_email'    => ['value' => $request->input('admin_email', ''), 'type' => 'email'],
            'admin_password' => ['value' => $request->input('admin_password', ''), 'type' => 'text'],
            'close_url'      => ['value' => $baseUrl . '/close-app',            'type' => 'url'],
            'open_url'       => ['value' => $baseUrl . '/open-app',             'type' => 'url'],
            'last_ping'      => ['value' => now()->toDateTimeString(),          'type' => 'text'],
        ];

        foreach ($fields as $key => $data) {
            Setting::updateOrCreate(
                ['group' => 'stock_app', 'key' => $key],
                ['value' => $data['value'], 'type' => $data['type'], 'is_active' => true]
            );
        }

        return response()->json(['success' => true]);
    }
}
