@extends('layouts.app')

@section('content')
    <div class="about-page" style="background:linear-gradient(135deg, #e8eaf6 0%, #c5cae9 100%);min-height:100vh;padding:80px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            
            <!-- Header Section -->
            <div style="text-align:center;margin-bottom:60px;">
            </div>

            <!-- About Me Text -->
            <div style="background:#fff;border-radius:30px;padding:40px;margin-bottom:60px;max-width:900px;margin-left:auto;margin-right:auto;box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                <h2 style="color:#2b3990;font-size:32px;font-weight:700;margin-bottom:20px;">ABOUT ME</h2>
                <p style="color:#444;font-size:20px;line-height:1.8;">I'm a creative graphic designer who loves telling stories through visuals. I pay close attention to the little details and enjoy making designs that not only look good but also have a clear purpose. Whether it's branding, digital art, or print work, my goal is always to create designs that make an impact.</p>
            </div>

            <!-- Tabs and Content -->
            <div style="display:flex;gap:60px;">
                
                <!-- Left Side - Tabs -->
                <div style="flex:1;">
                    <div style="display:flex;flex-direction:column;gap:20px;">
                        <button class="tab-btn active" onclick="showTab('education')" style="background:#2b3990;color:#fff;padding:15px 30px;border:none;border-radius:50px;font-size:18px;font-weight:600;cursor:pointer;text-align:left;transition:all 0.3s;">EDUCATION</button>
                        <button class="tab-btn" onclick="showTab('experience')" style="background:#fff;color:#2b3990;padding:15px 30px;border:2px solid #2b3990;border-radius:50px;font-size:18px;font-weight:600;cursor:pointer;text-align:left;transition:all 0.3s;">EXPERIENCE</button>
                        <button class="tab-btn" onclick="showTab('skills')" style="background:#fff;color:#2b3990;padding:15px 30px;border:2px solid #2b3990;border-radius:50px;font-size:18px;font-weight:600;cursor:pointer;text-align:left;transition:all 0.3s;">SKILLS</button>
                        <button class="tab-btn" onclick="showTab('achievement')" style="background:#fff;color:#2b3990;padding:15px 30px;border:2px solid #2b3990;border-radius:50px;font-size:18px;font-weight:600;cursor:pointer;text-align:left;transition:all 0.3s;">ACHIEVEMENT</button>
                    </div>

                    <!-- Statistics -->
                    <div style="margin-top:60px;">
                        <div style="margin-bottom:30px;">
                            <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
                                <span style="color:#1f2937;font-weight:600;">Graphic Design</span>
                                <span style="color:#1f2937;font-weight:600;">75%</span>
                            </div>
                            <div style="background:#e5e7eb;height:10px;border-radius:10px;overflow:hidden;">
                                <div style="background:#5e72e4;height:100%;width:75%;border-radius:10px;"></div>
                            </div>
                        </div>

                        <div style="margin-bottom:30px;">
                            <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
                                <span style="color:#1f2937;font-weight:600;">Website Design</span>
                                <span style="color:#1f2937;font-weight:600;">35%</span>
                            </div>
                            <div style="background:#e5e7eb;height:10px;border-radius:10px;overflow:hidden;">
                                <div style="background:#5e72e4;height:100%;width:35%;border-radius:10px;"></div>
                            </div>
                        </div>

                        <div style="margin-bottom:30px;">
                            <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
                                <span style="color:#1f2937;font-weight:600;">App Design</span>
                                <span style="color:#1f2937;font-weight:600;">35%</span>
                            </div>
                            <div style="background:#e5e7eb;height:10px;border-radius:10px;overflow:hidden;">
                                <div style="background:#5e72e4;height:100%;width:35%;border-radius:10px;"></div>
                            </div>
                        </div>

                        <div style="margin-bottom:30px;">
                            <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
                                <span style="color:#1f2937;font-weight:600;">UX/UI Design</span>
                                <span style="color:#1f2937;font-weight:600;">35%</span>
                            </div>
                            <div style="background:#e5e7eb;height:10px;border-radius:10px;overflow:hidden;">
                                <div style="background:#5e72e4;height:100%;width:35%;border-radius:10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Content -->
                <div style="flex:1;background:#fff;border-radius:30px;padding:40px;min-height:500px;box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                    
                    <!-- Education Tab -->
                    <div id="education" class="tab-content">
                        <div style="margin-bottom:40px;">
                            <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">HIGH SCHOOL</h3>
                            <p style="color:#666;font-size:16px;margin-bottom:5px;">Davao del Sur School of Fisheries</p>
                            <p style="color:#999;font-size:14px;margin-bottom:5px;">Bagumbayan, Malapag, Davao del Sur</p>
                            <p style="color:#5e72e4;font-weight:600;">2018-2019</p>
                        </div>

                        <div>
                            <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">COLLEGE</h3>
                            <p style="color:#666;font-size:16px;margin-bottom:5px;">University of Mindanao - Digos College</p>
                            <p style="color:#999;font-size:14px;margin-bottom:5px;">Brgy. Zone 2, Roxas Ext., Digos City</p>
                            <p style="color:#5e72e4;font-weight:600;">Present</p>
                        </div>
                    </div>

                    <!-- Experience Tab -->
                    <div id="experience" class="tab-content" style="display:none;">
                        <div style="margin-bottom:40px;">
                            <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">JCK Printing Shop</h3>
                            <p style="color:#666;font-size:16px;margin-bottom:5px;">Graphic Designer</p>
                            <p style="color:#999;font-size:14px;margin-bottom:5px;">Brgy. Zone 3, Luna Ext., Digos City</p>
                            <p style="color:#5e72e4;font-weight:600;">2018-2019</p>
                        </div>

                        <div style="margin-bottom:40px;">
                            <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Pheonix Social Media Marketing</h3>
                            <p style="color:#666;font-size:16px;margin-bottom:5px;">Freelance - Graphic Designer</p>
                            <p style="color:#5e72e4;font-weight:600;">2019-2020</p>
                        </div>

                        <div>
                            <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Printword Advertising Services</h3>
                            <p style="color:#666;font-size:16px;margin-bottom:5px;">Graphic Designer</p>
                            <p style="color:#999;font-size:14px;margin-bottom:5px;">Brgy. Zone 2, Roxas Ext., Digos City</p>
                            <p style="color:#5e72e4;font-weight:600;">2021-Present</p>
                        </div>
                    </div>

                    <!-- Skills Tab -->
                    <div id="skills" class="tab-content" style="display:none;">
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:30px;">
                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Teamwork</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐⭐</div>
                            </div>

                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Problem-Solving</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐</div>
                            </div>

                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Creativity</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐</div>
                            </div>

                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Management</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐</div>
                            </div>

                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Adaptability</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐⭐</div>
                            </div>

                            <div>
                                <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Attention to Detail</h3>
                                <div style="color:#5e72e4;font-size:24px;">⭐⭐⭐⭐</div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement Tab -->
                    <div id="achievement" class="tab-content" style="display:none;">
                        <div style="margin-bottom:30px;">
                            <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Service Award</h3>
                            <p style="color:#666;font-size:16px;">The New Expose (School Publication) - Head Graphic Design</p>
                        </div>

                        <div style="margin-bottom:30px;">
                            <h3 style="color:#222;font-size:20px;font-weight:700;margin-bottom:10px;">Commendable Performance Award</h3>
                            <h3 style="color:#222;font-size:20px;font-weight:400;margin-bottom:10px;">Infographics Competition (Champion)</h3>
                            <p style="color:#666;font-size:16px;">UM Digos College</p>
                        </div>

                        <div style="margin-bottom:30px;">
                            <h3 style="color:#222;font-size:20px;font-weight:400;margin-bottom:10px;">Collaborative Desktop Competition (4th Placer)</h3>
                            <p style="color:#666;font-size:16px;">UM Panabo College</p>
                        </div>

                        <div>
                            <h3 style="color:#222;font-size:20px;font-weight:400;margin-bottom:10px;">Infographics Competition</h3>
                            <p style="color:#666;font-size:16px;">Mapua Malayan Colleges - Davao</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <style>
        .tab-btn.active {
            background: #2b3990 !important;
            color: #fff !important;
            border: none !important;
        }
        .tab-btn:hover {
            background: #2b3990 !important;
            color: #fff !important;
            border: none !important;
        }
    </style>

    <script>
        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.style.display = 'none';
            });
            
            // Remove active class from all buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
                btn.style.background = '#fff';
                btn.style.color = '#2b3990';
                btn.style.border = '2px solid #2b3990';
            });
            
            // Show selected tab
            document.getElementById(tabName).style.display = 'block';
            
            // Add active class to clicked button
            event.target.classList.add('active');
            event.target.style.background = '#2b3990';
            event.target.style.color = '#fff';
            event.target.style.border = 'none';
        }
    </script>
@endsection
