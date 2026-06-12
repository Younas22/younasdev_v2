@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Stock Software Linked App Card --}}
<div class="row g-4 mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between py-3">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-box-seam fs-5"></i>
                    <span class="fw-semibold">Stock Software — Linked App</span>
                </div>
                @if(!empty($stockApp['last_ping']))
                    <small class="text-white-50">Last ping: {{ $stockApp['last_ping'] }}</small>
                @endif
            </div>
            <div class="card-body p-4">
                <div class="row g-4 align-items-center">

                    {{-- Base URL --}}
                    <div class="col-md-4">
                        <div class="small text-muted mb-1">Base URL</div>
                        <a href="{{ $stockApp['base_url'] ?? '#' }}" target="_blank" class="fw-semibold text-primary text-decoration-none">
                            <i class="bi bi-link-45deg"></i>
                            {{ $stockApp['base_url'] ?? '—' }}
                        </a>
                    </div>

                    {{-- Admin Email --}}
                    <div class="col-md-2">
                        <div class="small text-muted mb-1">Admin Email</div>
                        <span class="fw-semibold">{{ $stockApp['admin_email'] ?? '—' }}</span>
                    </div>

                    {{-- Admin Password --}}
                    <div class="col-md-2">
                        <div class="small text-muted mb-1">Admin Password</div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="fw-semibold" id="admin-pass-text" style="letter-spacing:2px;">••••••••</span>
                            <button type="button" class="btn btn-sm btn-outline-secondary py-0 px-1"
                                onclick="togglePass('{{ addslashes($stockApp['admin_password'] ?? '') }}')"
                                title="Show/hide">
                                <i class="bi bi-eye" id="admin-pass-icon"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Close App --}}
                    <div class="col-md-2">
                        <div class="small text-muted mb-1">Close App</div>
                        <a href="{{ $stockApp['close_url'] ?? '#' }}" target="_blank"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Stock software band karna chahte hain?')">
                            <i class="bi bi-lock-fill me-1"></i> Close
                        </a>
                    </div>

                    {{-- Open App --}}
                    <div class="col-md-2">
                        <div class="small text-muted mb-1">Open App</div>
                        <a href="{{ $stockApp['open_url'] ?? '#' }}" target="_blank"
                           class="btn btn-sm btn-success"
                           onclick="return confirm('Stock software khholna chahte hain?')">
                            <i class="bi bi-unlock-fill me-1"></i> Open
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePass(plain) {
    var el   = document.getElementById('admin-pass-text');
    var icon = document.getElementById('admin-pass-icon');
    if (el.dataset.visible === '1') {
        el.textContent   = '••••••••';
        el.style.letterSpacing = '2px';
        el.dataset.visible = '0';
        icon.className   = 'bi bi-eye';
    } else {
        el.textContent   = plain || '—';
        el.style.letterSpacing = 'normal';
        el.dataset.visible = '1';
        icon.className   = 'bi bi-eye-slash';
    }
}
</script>
<!-- Content Area -->
<div class="content-area">
    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="d-flex align-items-center">
                    <div class="stats-icon icon-blue">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ms-3">
                        <div class="small text-muted">Total Bookings</div>
                        <div class="h4 mb-0">{{ number_format($stats['total_bookings']) }}</div>
                        <div class="small text-success">
                            <i class="bi bi-arrow-up"></i> {{ number_format(($stats['confirmed_bookings']/$stats['total_bookings'])*100, 1) }}% confirmed
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="d-flex align-items-center">
                    <div class="stats-icon icon-green">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ms-3">
                        <div class="small text-muted">Revenue</div>
                        <div class="h4 mb-0">${{ number_format($stats['total_revenue'], 2) }}</div>
                        <div class="small text-success">
                            <i class="bi bi-arrow-up"></i> ${{ number_format($stats['monthly_revenue'], 2) }} this month
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="d-flex align-items-center">
                    <div class="stats-icon icon-orange">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ms-3">
                        <div class="small text-muted">Active Customers</div>
                        <div class="h4 mb-0">{{ number_format($stats['active_customers']) }}</div>
                        <div class="small text-warning">
                            <i class="bi bi-arrow-right"></i> {{ $stats['new_customers_this_month'] }} new
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="d-flex align-items-center">
                    <div class="stats-icon icon-purple">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="ms-3">
                        <div class="small text-muted">VIP Customers</div>
                        <div class="h4 mb-0">{{ number_format($stats['vip_customers']) }}</div>
                        <div class="small text-success">
                            <i class="bi bi-arrow-up"></i> ${{ number_format($stats['avg_customer_value'], 2) }} avg
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Recent Bookings -->
        <div class="col-xl-8">
            <div class="recent-bookings">
                <div class="table-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Bookings</h5>
                        <a href="#" class="btn btn-outline-primary modern-btn btn-sm">View All</a>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Booking ID</th>
                                <th>Customer</th>
                                <th>Route</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_bookings as $booking)
                            <tr>
                                <td>#{{ $booking->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $booking->user->avatar ?? 'https://via.placeholder.com/32x32/6c757d/ffffff?text='.substr($booking->user->name, 0, 2) }}" 
                                             alt="{{ $booking->user->name }}" 
                                             class="rounded-circle me-2">
                                        <div>
                                            <div class="fw-semibold">{{ $booking->user->name }}</div>
                                            <small class="text-muted">{{ $booking->user->email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $booking->origin }} → {{ $booking->destination }}</td>
                                <td>{{ $booking->created_at->format('M d, Y') }}</td>
                                <td>${{ number_format($booking->total_amount, 2) }}</td>
                                <td><span class="badge-status status-{{ $booking->status }}">{{ ucfirst($booking->status) }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-12 col-12">
            <div class="quick-actions">
                <h5 class="mb-4">Quick Actions</h5>
                
                <div class="d-grid gap-3">
                    <a href="" class="action-btn">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <div class="fw-semibold">Send Newsletter</div>
                            <small class="text-muted">Email to subscribers</small>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.content.blog.create') }}" class="action-btn">
                        <i class="bi bi-file-earmark-text"></i>
                        <div>
                            <div class="fw-semibold">Create Blog Post</div>
                            <small class="text-muted">Write new article</small>
                        </div>
                    </a>
                    
 
                    
                    <a href="{{ route('admin.settings.website') }}" class="action-btn">
                        <i class="bi bi-gear"></i>
                        <div>
                            <div class="fw-semibold">System Settings</div>
                            <small class="text-muted">Configure platform</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection