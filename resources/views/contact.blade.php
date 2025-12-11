@extends('layouts.app')

@section('content')
    <div class="contact-page" style="background:linear-gradient(135deg, #e8eaf6 0%, #c5cae9 100%);min-height:100vh;padding:120px 0;">
        <div class="container" style="max-width:1600px;width:100%;margin:0 auto;padding:0 60px;">
            
            <!-- Header Section -->
            <div style="text-align:center;margin-bottom:100px;">
               
                <h1 style="color:#1f2937;font-size:80px;font-weight:700;margin-bottom:60px;">Grateful to talk to you!</h1>
            </div>

            <!-- Contact Info Cards -->
            <div style="display:flex;gap:30px;margin-bottom:80px;justify-content:center;">
                <!-- Call Us Card -->
                <div style="background:#fff;border-radius:20px;padding:35px 45px;text-align:center;flex:1;max-width:320px;box-shadow:0 6px 15px rgba(0,0,0,0.08);">
                    <div style="color:#5e72e4;font-size:50px;margin-bottom:15px;">📞</div>
                    <p style="color:#9ca3af;font-size:14px;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;">CALL ME</p>
                    <p style="color:#1f2937;font-size:20px;font-weight:600;">0995 613 9821</p>
                </div>

                <!-- Email Us Card -->
                <div style="background:#fff;border-radius:20px;padding:35px 45px;text-align:center;flex:1;max-width:320px;box-shadow:0 6px 15px rgba(0,0,0,0.08);">
                    <div style="color:#5e72e4;font-size:50px;margin-bottom:15px;">✉️</div>
                    <p style="color:#9ca3af;font-size:14px;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;">EMAIL ME</p>
                    <p style="color:#1f2937;font-size:20px;font-weight:600;">lotarinoryan@gmail.com</p>
                </div>

                <!-- Location Card -->
                <div style="background:#fff;border-radius:20px;padding:35px 45px;text-align:center;flex:1;max-width:320px;box-shadow:0 6px 15px rgba(0,0,0,0.08);">
                    <div style="color:#5e72e4;font-size:50px;margin-bottom:15px;">📍</div>
                    <p style="color:#9ca3af;font-size:14px;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;">LOCATION</p>
                    <p style="color:#1f2937;font-size:20px;font-weight:600;">Gallarde St. Digos City</p>
                </div>
            </div>

            <!-- Form Section -->
            <div style="display:flex;gap:100px;align-items:flex-start;">
                <!-- Left Side - Text -->
                <div style="flex:1;">
                    <h2 style="color:#1f2937;font-size:64px;font-weight:700;margin-bottom:30px;line-height:1.2;">Let's Work Together</h2>
                    <p style="color:#6b7280;font-size:26px;line-height:1.6;">Share your vision for your next projects with me now. Please contact me for basic questions, here to help!</p>
                </div>

                <!-- Right Side - Form -->
                <div style="flex:1;">
                    <form action="{{ url('/contact/submit') }}" method="POST" style="display:flex;flex-direction:column;gap:30px;">
                        @csrf
                        <div style="display:flex;gap:30px;">
                            <input type="text" name="first_name" placeholder="First Name" required style="flex:1;padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;">
                            <input type="text" name="last_name" placeholder="Last Name" required style="flex:1;padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;">
                        </div>
                        
                        <input type="email" name="email" placeholder="Email Address" required style="padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;">
                        
                        <div style="display:flex;gap:30px;">
                            <input type="text" name="service" placeholder="Service Interested In" style="flex:1;padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;">
                            <input type="text" name="subject" placeholder="Subject" style="flex:1;padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;">
                        </div>
                        
                        <textarea name="message" placeholder="Tell Us About Your Projects" required rows="7" style="padding:22px 28px;border:none;border-radius:15px;background:#e5e7eb;font-size:20px;outline:none;resize:vertical;"></textarea>
                        
                        <button type="submit" style="background:#5e72e4;color:#fff;padding:25px;border:none;border-radius:15px;font-size:24px;font-weight:600;cursor:pointer;transition:background 0.3s;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:9999;align-items:center;justify-content:center;">
        <div style="background:#fff;border-radius:20px;padding:60px;text-align:center;max-width:500px;box-shadow:0 20px 60px rgba(0,0,0,0.3);animation:slideIn 0.3s ease;">
            <div style="width:80px;height:80px;background:#10b981;border-radius:50%;margin:0 auto 30px;display:flex;align-items:center;justify-content:center;">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <h2 style="color:#1f2937;font-size:32px;font-weight:700;margin-bottom:15px;">Successfully Sent!</h2>
            <p style="color:#6b7280;font-size:18px;margin-bottom:30px;">Thank you for reaching out! I'll get back to you as soon as possible.</p>
            <button onclick="closeSuccessModal()" style="background:#5e72e4;color:#fff;padding:15px 40px;border:none;border-radius:10px;font-size:18px;font-weight:600;cursor:pointer;">Close</button>
        </div>
    </div>

    <style>
        button:hover {
            background:#4c63d2 !important;
        }
        input:focus, textarea:focus {
            background:#d1d5db !important;
        }
        
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        @if(session('success'))
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('successModal').style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        @endif

        function closeSuccessModal() {
            document.getElementById('successModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    </script>
@endsection
