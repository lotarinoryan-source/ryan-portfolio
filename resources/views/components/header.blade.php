<nav id="mainNav" style="background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.04);padding:15px 20px;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:1000;">
    <!-- Logo -->
    <a href="{{ url('/') }}" style="display:flex;align-items:center;">
        <img src="{{ asset('assets/rylogo.png') }}" alt="Ryan Mark Logo" style="height:40px;width:auto;">
    </a>
    
    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn" onclick="toggleMobileMenu()" style="display:none;background:transparent;border:none;cursor:pointer;padding:5px;">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#2b3990" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
    
    <!-- Navigation Links -->
    <div id="navLinks" style="display:flex;align-items:center;gap:30px;">
        <a href="{{ url('/') }}" style="color:#6b7280;font-weight:500;text-decoration:none;font-size:16px;transition:color 0.3s;">Home</a>
        <a href="{{ url('/services') }}" style="color:#6b7280;font-weight:500;text-decoration:none;font-size:16px;transition:color 0.3s;">Services</a>
        <a href="{{ url('/about') }}" style="color:#6b7280;font-weight:500;text-decoration:none;font-size:16px;transition:color 0.3s;">About Me</a>
        <a href="{{ url('/contact') }}" class="btn" style="background:#2b3990;color:#fff;padding:10px 24px;border-radius:24px;font-weight:600;text-decoration:none;font-size:16px;transition:background 0.3s;">Let's Talk</a>
    </div>
</nav>

<style>
    @media (max-width: 768px) {
        #mainNav {
            padding: 15px 20px !important;
        }
        
        #mobileMenuBtn {
            display: block !important;
        }
        
        #navLinks {
            display: none !important;
            position: fixed;
            top: 70px;
            left: 0;
            right: 0;
            background: #fff;
            flex-direction: column !important;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            gap: 20px !important;
        }
        
        #navLinks.active {
            display: flex !important;
        }
        
        #navLinks a {
            width: 100%;
            text-align: center;
            padding: 12px;
            font-size: 18px !important;
        }
    }
</style>

<script>
    function toggleMobileMenu() {
        const navLinks = document.getElementById('navLinks');
        navLinks.classList.toggle('active');
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.getElementById('mainNav');
        const navLinks = document.getElementById('navLinks');
        const menuBtn = document.getElementById('mobileMenuBtn');
        
        if (!nav.contains(event.target) && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
        }
    });
</script>
