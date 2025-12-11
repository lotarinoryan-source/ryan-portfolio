@extends('layouts.app')

@section('content')
    <div class="services-page" style="background:linear-gradient(135deg, #e8eaf6 0%, #c5cae9 100%);min-height:100vh;padding:100px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            <div style="text-align:center;margin-bottom:80px;">
                <h1 style="color:#222;font-size:64px;font-weight:700;margin-bottom:20px;">My Design Services</h1>
                <p style="color:#6b7280;font-size:20px;line-height:1.6;max-width:700px;margin:0 auto;">Crafting visually engaging interfaces that are both intuitive and user-centered, ensuring a seamless experience</p>
            </div>

            <div style="display:flex;gap:40px;max-width:1600px;margin:0 auto;justify-content:center;">
                <!-- Graphic Design Card -->
                <div class="service-card" onclick="window.location.href='{{ url('/graphic-design') }}'" style="background:#f5f5f5;border-radius:20px;padding:30px;text-align:center;cursor:pointer;transition:all 0.3s ease;position:relative;">
                    <div style="width:70px;height:70px;margin:0 auto 20px;color:#5e72e4;font-size:50px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <path d="M21 15l-5-5L5 21"/>
                        </svg>
                    </div>
                    <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Graphic Design</h3>
                    <a href="{{ url('/graphic-design') }}" style="color:#5e72e4;text-decoration:none;font-weight:600;font-size:14px;">View Projects...</a>
                </div>

                <!-- UI/UX Design Card -->
                <div class="service-card" onclick="window.location.href='{{ url('/uiux-design') }}'" style="background:#f5f5f5;border-radius:20px;padding:30px;text-align:center;cursor:pointer;transition:all 0.3s ease;position:relative;">
                    <div style="width:70px;height:70px;margin:0 auto 20px;color:#5e72e4;font-size:50px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">UI/UX Design</h3>
                    <a href="{{ url('/uiux-design') }}" style="color:#5e72e4;text-decoration:none;font-weight:600;font-size:14px;">View Projects...</a>
                </div>

                <!-- Web Design Card -->
                <div class="service-card" onclick="window.location.href='{{ url('/web-design') }}'" style="background:#f5f5f5;border-radius:20px;padding:30px;text-align:center;cursor:pointer;transition:all 0.3s ease;position:relative;">
                    <div style="width:70px;height:70px;margin:0 auto 20px;color:#5e72e4;font-size:50px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Web Design</h3>
                    <a href="{{ url('/web-design') }}" style="color:#5e72e4;text-decoration:none;font-weight:600;font-size:14px;">View Projects...</a>
                </div>

                <!-- App Design Card -->
                <div class="service-card" onclick="window.location.href='{{ url('/app-design') }}'" style="background:#f5f5f5;border-radius:20px;padding:30px;text-align:center;cursor:pointer;transition:all 0.3s ease;position:relative;">
                    <div style="width:70px;height:70px;margin:0 auto 20px;color:#5e72e4;font-size:50px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">App Design</h3>
                    <a href="{{ url('/app-design') }}" style="color:#5e72e4;text-decoration:none;font-weight:600;font-size:14px;">View Projects...</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .service-card {
            transform: scale(1);
        }
        .service-card:hover {
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
            background: #fff !important;
        }
        .service-card:active {
            transform: scale(0.98);
        }
    </style>
@endsection
