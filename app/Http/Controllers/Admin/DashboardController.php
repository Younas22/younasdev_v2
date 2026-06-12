<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_customers' => User::customers()->count(),
            'active_customers' => User::customers()->active()->count(),
            'vip_customers' => User::customers()->vip()->count(),
            'avg_customer_value' => User::customers()->avg('total_spent') ?? 0,
            'total_bookings' => Booking::count(),
            'pending_bookings' => Booking::where('status', 'pending')->count(),
            'confirmed_bookings' => Booking::where('status', 'confirmed')->count(),
            'total_revenue' => Booking::where('status', 'confirmed')->sum('total_amount'),
            'monthly_revenue' => Booking::where('status', 'confirmed')
                                     ->whereMonth('created_at', now()->month)
                                     ->sum('total_amount'),
            'new_customers_this_month' => User::customers()
                                            ->whereMonth('created_at', now()->month)
                                            ->count(),
        ];

        // Recent bookings
        $recent_bookings = Booking::with('user')
                                 ->latest()
                                 ->take(5)
                                 ->get();
        
        // Recent customers
        $recent_customers = User::customers()
                               ->latest()
                               ->take(5)
                               ->get();
        $stockApp = Setting::getByGroup('stock_app');

        return view('admin.dashboard.index', compact('stats', 'recent_bookings', 'recent_customers', 'stockApp'));
    }
}