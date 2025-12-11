@extends('layouts.app')

@section('content')
    <div style="background:#000;min-height:100vh;padding:100px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            <div style="text-align:center;margin-bottom:60px;">
                <h1 style="color:#fff;font-size:64px;font-weight:700;margin-bottom:20px;">App Design Portfolio</h1>
                <p style="color:#999;font-size:20px;line-height:1.6;">A collection of my creative works</p>
            </div>

            <!-- Projects Grid -->
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:30px;">
                
                <!-- Project 1 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/fitness-tracker') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #667eea 0%, #764ba2 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Fitness Tracker App 💪</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Mobile fitness app for tracking workouts, calories, and health metrics</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

                <!-- Project 2 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/food-delivery') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #f093fb 0%, #f5576c 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Food Delivery App 🍔</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Intuitive food ordering app with real-time tracking and easy checkout</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

                <!-- Project 3 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/music-player') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Music Streaming App 🎵</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Modern music player with personalized playlists and discovery features</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

                <!-- Project 4 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/task-manager') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Task Manager App 🚀</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Productivity app for managing tasks, projects, and team collaboration</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

                <!-- Project 5 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/weather') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #fa709a 0%, #fee140 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Weather App 🌤️</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Beautiful weather forecast app with detailed hourly and weekly predictions</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

                <!-- Project 6 - WORKING APP -->
                <div onclick="window.location.href='{{ url('/apps/chat-messenger') }}'" style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;cursor:pointer;position:relative;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="position:absolute;top:10px;right:10px;background:#10b981;color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;z-index:1;">✨ LIVE DEMO</div>
                    <div style="height:250px;background:linear-gradient(135deg, #30cfd0 0%, #330867 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Chat Messenger App 💬</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">App Design • 2024 • Working Demo</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Secure messaging app with group chats, media sharing, and voice calls</p>
                        <p style="color:#10b981;font-size:13px;margin-top:10px;font-weight:600;">Click to try the live app →</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
