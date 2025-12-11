@extends('layouts.app')

@section('content')
    <div style="background:#000;min-height:100vh;padding:100px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            <div style="text-align:center;margin-bottom:60px;">
                <h1 style="color:#fff;font-size:64px;font-weight:700;margin-bottom:20px;">Web Design Portfolio</h1>
                <p style="color:#999;font-size:20px;line-height:1.6;">A collection of my creative works</p>
            </div>

            <!-- Projects Grid -->
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:30px;">
                
                <!-- Project 1 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #667eea 0%, #764ba2 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">E-Commerce Website</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Modern online shopping platform with responsive design and smooth user experience</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #f093fb 0%, #f5576c 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Corporate Website</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Professional business website with clean layout and corporate branding</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Portfolio Website</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Creative portfolio showcase for designers and artists with stunning visuals</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Restaurant Website</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Elegant restaurant website with menu showcase and online reservation system</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #fa709a 0%, #fee140 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Blog Website</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">Modern blog platform with clean typography and easy content management</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div style="background:#1a1a1a;border-radius:15px;overflow:hidden;transition:transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="height:250px;background:linear-gradient(135deg, #30cfd0 0%, #330867 100%);display:flex;align-items:center;justify-content:center;">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div style="padding:25px;">
                        <h3 style="color:#fff;font-size:22px;font-weight:700;margin-bottom:10px;">Landing Page</h3>
                        <p style="color:#999;font-size:14px;margin-bottom:15px;">Web Design • 2024</p>
                        <p style="color:#ccc;font-size:15px;line-height:1.6;">High-converting landing page with compelling call-to-action and animations</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
