@extends('layouts.app')

@section('content')
    <div style="background:#000;min-height:100vh;padding:100px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            <div style="text-align:center;margin-bottom:60px;">
                <h1 style="color:#fff;font-size:64px;font-weight:700;margin-bottom:20px;">UI/UX Design Portfolio</h1>
                <p style="color:#999;font-size:20px;line-height:1.6;">A collection of my creative works</p>
            </div>

            <!-- Projects Grid -->
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:30px;">
                
                <!-- Project 1 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #667eea 0%, #764ba2 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Dashboard Interface</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Modern analytics dashboard with intuitive data visualization and user-friendly controls</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #f093fb 0%, #f5576c 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Social Media App</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Engaging social platform with seamless user experience and interactive features</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">E-Learning Platform</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Educational interface designed for optimal learning experience and engagement</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Banking App UI</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Secure and intuitive banking interface with streamlined transaction flows</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #fa709a 0%, #fee140 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Travel Booking</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">User-friendly travel booking system with smooth navigation and search</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #30cfd0 0%, #330867 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Healthcare Portal</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">UI/UX Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Patient-centered healthcare interface with appointment and records management</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
