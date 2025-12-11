@extends('layouts.app')

@section('content')
    <div class="projects-page" style="background:linear-gradient(135deg, #e8eaf6 0%, #c5cae9 100%);min-height:100vh;padding:100px 0;">
        <div class="container" style="max-width:1400px;width:100%;margin:0 auto;padding:0 40px;">
            <div style="text-align:center;margin-bottom:60px;">
                <h1 style="color:#222;font-size:64px;font-weight:700;margin-bottom:20px;">My Projects</h1>
                <p style="color:#6b7280;font-size:20px;line-height:1.6;max-width:700px;margin:0 auto;">Explore my portfolio of design work across various categories</p>
            </div>

            <!-- Filter Tabs -->
            <div style="display:flex;justify-content:center;gap:20px;margin-bottom:60px;flex-wrap:wrap;">
                <button class="filter-btn active" data-filter="all" style="padding:12px 30px;border-radius:25px;border:2px solid #5e72e4;background:#5e72e4;color:#fff;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">All Projects</button>
                <button class="filter-btn" data-filter="uiux" style="padding:12px 30px;border-radius:25px;border:2px solid #5e72e4;background:transparent;color:#5e72e4;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">UI/UX Design</button>
                <button class="filter-btn" data-filter="web" style="padding:12px 30px;border-radius:25px;border:2px solid #5e72e4;background:transparent;color:#5e72e4;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">Web Design</button>
                <button class="filter-btn" data-filter="app" style="padding:12px 30px;border-radius:25px;border:2px solid #5e72e4;background:transparent;color:#5e72e4;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">App Design</button>
                <button class="filter-btn" data-filter="graphic" style="padding:12px 30px;border-radius:25px;border:2px solid #5e72e4;background:transparent;color:#5e72e4;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">Graphic Design</button>
            </div>

            <!-- Projects Grid -->
            <div id="projects-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:40px;">
                <!-- Only Graphic Design Projects - Add your actual projects here -->
                
                <!-- Graphic Design Projects -->
                <div class="project-card" data-category="graphic" style="background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);transition:all 0.3s;">
                    <div style="height:250px;background:linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);"></div>
                    <div style="padding:30px;">
                        <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Brand Identity</h3>
                        <p style="color:#6b7280;font-size:14px;margin-bottom:15px;">Graphic Design</p>
                        <p style="color:#6b7280;font-size:16px;line-height:1.6;">Complete branding package with logo and guidelines</p>
                    </div>
                </div>

                <div class="project-card" data-category="graphic" style="background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);transition:all 0.3s;">
                    <div style="height:250px;background:linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);"></div>
                    <div style="padding:30px;">
                        <h3 style="color:#222;font-size:24px;font-weight:700;margin-bottom:10px;">Marketing Materials</h3>
                        <p style="color:#6b7280;font-size:14px;margin-bottom:15px;">Graphic Design</p>
                        <p style="color:#6b7280;font-size:16px;line-height:1.6;">Brochures, flyers, and promotional designs</p>
                    </div>
                </div>
            </div>

            <!-- No Projects Message -->
            <div id="no-projects" style="display:none;text-align:center;padding:60px 20px;">
                <div style="font-size:80px;margin-bottom:20px;">📂</div>
                <h3 style="color:#222;font-size:32px;font-weight:700;margin-bottom:15px;">No Portfolio Uploaded</h3>
                <p style="color:#6b7280;font-size:18px;">No projects exist in this category yet. Check back soon!</p>
            </div>
        </div>
    </div>

    <style>
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2) !important;
        }

        .filter-btn:hover {
            background: #5e72e4 !important;
            color: #fff !important;
        }

        .filter-btn.active {
            background: #5e72e4 !important;
            color: #fff !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            const noProjectsMsg = document.getElementById('no-projects');
            const projectsGrid = document.getElementById('projects-grid');

            // Check URL parameter for initial filter
            const urlParams = new URLSearchParams(window.location.search);
            const initialFilter = urlParams.get('filter') || 'all';

            // Apply initial filter
            applyFilter(initialFilter);

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    applyFilter(filter);
                });
            });

            function applyFilter(filter) {
                // Update active button
                filterBtns.forEach(b => {
                    b.classList.remove('active');
                    if (b.getAttribute('data-filter') === filter) {
                        b.classList.add('active');
                    }
                });

                let visibleCount = 0;

                // Filter projects
                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Show/hide no projects message
                if (visibleCount === 0) {
                    projectsGrid.style.display = 'none';
                    noProjectsMsg.style.display = 'block';
                } else {
                    projectsGrid.style.display = 'grid';
                    noProjectsMsg.style.display = 'none';
                }
            }
        });
    </script>
@endsection
