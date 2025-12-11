@extends('layouts.app')

@section('content')
    <div class="portfolio-page" style="background:#1a1a1a;min-height:100vh;padding:80px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            
            <div style="text-align:center;margin-bottom:60px;">
                <h1 style="color:#fff;font-size:64px;font-weight:700;margin-bottom:20px;">Graphic Design Portfolio</h1>
                <p style="color:#9ca3af;font-size:20px;">A collection of my creative works</p>
            </div>

            <!-- Masonry Grid -->
            <div class="masonry-grid" style="column-count:3;column-gap:20px;">
                
                <!-- Image 1 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/CEPU PACIFIC.jpg') }}')">
                    <img src="{{ asset('assets/photos/CEPU PACIFIC.jpg') }}" alt="Cebu Pacific" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 2 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/CommerceNest Online Store with Sales and Stock Tracker.jpg') }}')">
                    <img src="{{ asset('assets/photos/CommerceNest Online Store with Sales and Stock Tracker.jpg') }}" alt="CommerceNest" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 3 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/dc.jpg') }}')">
                    <img src="{{ asset('assets/photos/dc.jpg') }}" alt="DC" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 4 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/GCASH.jpg') }}')">
                    <img src="{{ asset('assets/photos/GCASH.jpg') }}" alt="GCash" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 6 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/MANDAYA rgb.jpg') }}')">
                    <img src="{{ asset('assets/photos/MANDAYA rgb.jpg') }}" alt="Mandaya" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 7 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/PHOTOSHOP.jpg') }}')">
                    <img src="{{ asset('assets/photos/PHOTOSHOP.jpg') }}" alt="Photoshop" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 8 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/1.jpg') }}')">
                    <img src="{{ asset('assets/photos/1.jpg') }}" alt="Design 1" style="width:100%;display:block;transition :transform 0.3s;">
                </div>

                <!-- Image 9 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/22.jpg') }}')">
                    <img src="{{ asset('assets/photos/22.jpg') }}" alt="Design 22" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 10 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/6x20 DTP.JPG') }}')">
                    <img src="{{ asset('assets/photos/6x20 DTP.JPG') }}" alt="DTP" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 11 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/ARETE.jpg') }}')">
                    <img src="{{ asset('assets/photos/ARETE.jpg') }}" alt="Arete" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 12 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/BLUE LOCK.JPG') }}')">
                    <img src="{{ asset('assets/photos/BLUE LOCK.JPG') }}" alt="Blue Lock" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 13 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/carwash.JPG') }}')">
                    <img src="{{ asset('assets/photos/carwash.JPG') }}" alt="Carwash" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 14 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/Department of Technical Programs.JPG') }}')">
                    <img src="{{ asset('assets/photos/Department of Technical Programs.JPG') }}" alt="Department of Technical Programs" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 15 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/INFOGRAPHICS.JPG') }}')">
                    <img src="{{ asset('assets/photos/INFOGRAPHICS.JPG') }}" alt="Infographics" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 16 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/summer fest.JPG') }}')">
                    <img src="{{ asset('assets/photos/summer fest.JPG') }}" alt="Summer Fest" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 17 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/champ.jpg') }}')">
                    <img src="{{ asset('assets/photos/champ.jpg') }}" alt="Champion" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 18 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/Mutya 2025.jpg') }}')">
                    <img src="{{ asset('assets/photos/Mutya 2025.jpg') }}" alt="Mutya 2025" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

                <!-- Image 19 -->
                <div class="portfolio-item" style="break-inside:avoid;margin-bottom:20px;position:relative;overflow:hidden;border-radius:10px;cursor:pointer;" onclick="openModal('{{ asset('assets/photos/RAGANAS.jpg') }}')">
                    <img src="{{ asset('assets/photos/RAGANAS.jpg') }}" alt="Raganas" style="width:100%;display:block;transition:transform 0.3s;">
                </div>

            </div>
        </div>
    </div>

    <!-- Modal for enlarged image with zoom -->
    <div id="imageModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.95);z-index:9999;align-items:center;justify-content:center;">
        <!-- Close Button -->
        <button onclick="closeModal()" style="position:absolute;top:30px;right:40px;background:transparent;border:none;color:#fff;font-size:50px;cursor:pointer;z-index:10001;">&times;</button>
        
        <!-- Zoom Controls -->
        <div style="position:absolute;bottom:40px;left:50%;transform:translateX(-50%);display:flex;gap:15px;z-index:10001;">
            <button onclick="zoomOut()" style="background:#fff;color:#222;border:none;width:50px;height:50px;border-radius:50%;font-size:24px;cursor:pointer;display:flex;align-items:center;justify-content:center;font-weight:bold;">−</button>
            <button onclick="resetZoom()" style="background:#fff;color:#222;border:none;padding:0 25px;height:50px;border-radius:25px;font-size:16px;cursor:pointer;font-weight:600;">Reset</button>
            <button onclick="zoomIn()" style="background:#fff;color:#222;border:none;width:50px;height:50px;border-radius:50%;font-size:24px;cursor:pointer;display:flex;align-items:center;justify-content:center;font-weight:bold;">+</button>
        </div>
        
        <!-- Image Container -->
        <div id="imageContainer" style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;overflow:hidden;cursor:grab;" onclick="event.stopPropagation()">
            <img id="modalImage" src="" style="max-width:90%;max-height:90%;object-fit:contain;border-radius:10px;transition:transform 0.3s ease;cursor:grab;">
        </div>
    </div>

    <style>
        .portfolio-item:hover img {
            transform: scale(1.05);
        }
        
        #imageContainer:active {
            cursor: grabbing;
        }
        
        #modalImage:active {
            cursor: grabbing;
        }
        
        @media (max-width: 1024px) {
            .masonry-grid {
                column-count: 2 !important;
            }
        }
        
        @media (max-width: 640px) {
            .masonry-grid {
                column-count: 1 !important;
            }
        }
    </style>

    <script>
        let currentZoom = 1;
        let isDragging = false;
        let startX, startY, translateX = 0, translateY = 0;

        function openModal(imageSrc) {
            document.getElementById('imageModal').style.display = 'flex';
            document.getElementById('modalImage').src = imageSrc;
            document.body.style.overflow = 'hidden';
            resetZoom();
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
            document.body.style.overflow = 'auto';
            resetZoom();
        }

        function zoomIn() {
            currentZoom = Math.min(currentZoom + 0.25, 3);
            updateZoom();
        }

        function zoomOut() {
            currentZoom = Math.max(currentZoom - 0.25, 0.5);
            updateZoom();
        }

        function resetZoom() {
            currentZoom = 1;
            translateX = 0;
            translateY = 0;
            updateZoom();
        }

        function updateZoom() {
            const img = document.getElementById('modalImage');
            img.style.transform = `scale(${currentZoom}) translate(${translateX}px, ${translateY}px)`;
        }

        // Mouse wheel zoom
        document.getElementById('imageModal').addEventListener('wheel', function(e) {
            e.preventDefault();
            if (e.deltaY < 0) {
                zoomIn();
            } else {
                zoomOut();
            }
        });

        // Drag to pan when zoomed
        const container = document.getElementById('imageContainer');
        const img = document.getElementById('modalImage');

        img.addEventListener('mousedown', function(e) {
            if (currentZoom > 1) {
                isDragging = true;
                startX = e.clientX - translateX;
                startY = e.clientY - translateY;
                img.style.cursor = 'grabbing';
            }
        });

        document.addEventListener('mousemove', function(e) {
            if (isDragging && currentZoom > 1) {
                translateX = e.clientX - startX;
                translateY = e.clientY - startY;
                updateZoom();
            }
        });

        document.addEventListener('mouseup', function() {
            isDragging = false;
            img.style.cursor = 'grab';
        });

        // Touch support for mobile
        let touchStartX, touchStartY;
        
        img.addEventListener('touchstart', function(e) {
            if (currentZoom > 1) {
                touchStartX = e.touches[0].clientX - translateX;
                touchStartY = e.touches[0].clientY - translateY;
            }
        });

        img.addEventListener('touchmove', function(e) {
            if (currentZoom > 1) {
                e.preventDefault();
                translateX = e.touches[0].clientX - touchStartX;
                translateY = e.touches[0].clientY - touchStartY;
                updateZoom();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Close when clicking outside image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
@endsection
