@extends('layouts.app')

@section('content')
    <div class="hero-section" style="background:#f7faff;min-height:100vh;padding:40px 0;display:flex;align-items:center;justify-content:center;">
        <div class="container" style="max-width:1200px;width:100%;display:flex;align-items:center;justify-content:space-between;gap:80px;">
            <div class="hero-content" style="max-width:540px;">
                <h4 style="color:#6b7280;font-weight:400;margin-bottom:5px;font-size:48px;">Hi I am</h4>
                <div style="font-size:72px;font-weight:700;color:#222;margin-bottom:5px;line-height:1;">RYAN MARK</div>
                <h1 style="color:#2b3990;font-size:72px;font-weight:700;margin-bottom:30px;line-height:1;">GRAPHIC<br>DESIGNER</h1>
                <p style="color:#6b7280;font-size:18px;line-height:1.8;margin-bottom:40px;">With a passion for clean, intuitive, and effective design, I create digital products that enhance user engagement. Delivering aesthetic and interactive designs that make a lasting impact.</p>
                <div style="display:flex;gap:20px;margin-bottom:40px;">
                    <a href="{{ url('/contact') }}" class="btn" style="background:#2b3990;color:#fff;padding:15px 40px;border-radius:30px;font-weight:600;text-decoration:none;font-size:22.5px;">Contact Me</a>
                    
                </div>
                <div style="display:flex;align-items:center;gap:15px;">
                    <div onclick="openReviewsModal()" style="background:#fff;border-radius:15px;padding:10px 20px;box-shadow:0 2px 8px rgba(0,0,0,0.08);display:flex;align-items:center;gap:10px;font-size:22.5px;cursor:pointer;transition:all 0.3s;" onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 4px 16px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 2px 8px rgba(0,0,0,0.08)'">
                        <span style="font-size:22.5px;color:#f5b400;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span style="color:#222;font-size:20px;">20k+ Customer Review</span>
                    </div>
                </div>
            </div>
            <div class="hero-image" style="position:relative;">
                <img src="{{ asset('assets/profile1.png') }}" alt="Profile" style="width:1100px;max-width:100%;border-radius:40px;box-shadow:0 8px 32px rgba(43,57,144,0.12);">
                <div style="position:absolute;bottom:30px;left:-40px;background:#fff;border-radius:15px;padding:10px 20px;box-shadow:0 2px 8px rgba(0,0,0,0.08);display:flex;align-items:center;gap:10px;">
                    <a href="https://www.instagram.com/mr_ryannnn/" target="_blank" style="display:flex;align-items:center;transition:transform 0.3s;">
                        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" width="30" style="filter:grayscale(100%);">
                    </a>
                    <a href="https://www.linkedin.com/in/ryan-mark-lotarino-7a0166377/" target="_blank" style="display:flex;align-items:center;transition:transform 0.3s;">
                        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" alt="LinkedIn" width="30" style="filter:grayscale(100%);">
                    </a>
                    <a href="https://www.facebook.com/weakbabo" target="_blank" style="display:flex;align-items:center;transition:transform 0.3s;">
                        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" width="30" style="filter:grayscale(100%);">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Modal -->
    <div id="reviewsModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:9999;align-items:center;justify-content:center;overflow-y:auto;padding:40px 20px;">
        <div style="background:#fff;border-radius:30px;padding:50px;max-width:900px;width:100%;box-shadow:0 20px 60px rgba(0,0,0,0.3);position:relative;max-height:90vh;overflow-y:auto;">
            <button onclick="closeReviewsModal()" style="position:absolute;top:20px;right:20px;background:transparent;border:none;font-size:32px;color:#6b7280;cursor:pointer;width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:50%;transition:all 0.3s;" onmouseover="this.style.background='#f3f4f6'" onmouseout="this.style.background='transparent'">&times;</button>
            
            <h2 style="color:#1f2937;font-size:36px;font-weight:700;margin-bottom:10px;text-align:center;">Customer Reviews</h2>
            <div style="text-align:center;margin-bottom:30px;">
                <span id="avgStars" style="font-size:32px;color:#f5b400;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <p style="color:#6b7280;font-size:18px;margin-top:10px;"><span id="totalReviews">0</span> reviews</p>
            </div>

            <!-- Action Buttons -->
            <div style="display:flex;gap:15px;justify-content:center;margin-bottom:30px;">
                <button onclick="showReviewsList()" id="btnSeeReviews" style="background:#5e72e4;color:#fff;padding:12px 30px;border:none;border-radius:25px;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">See Reviews</button>
                <button onclick="showPostReview()" id="btnPostReview" style="background:#fff;color:#5e72e4;padding:12px 30px;border:2px solid #5e72e4;border-radius:25px;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;">Post Review</button>
            </div>

            <!-- Reviews List Section -->
            <div id="reviewsList" style="display:grid;gap:25px;">
                <!-- Review 1 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #5e72e4;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #667eea 0%, #764ba2 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">JD</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">John Dela Cruz</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Ryan's design work is exceptional! He transformed our brand identity with creative and professional graphics. Highly recommended for anyone looking for quality design work."</p>
                </div>

                <!-- Review 2 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #10b981;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #f093fb 0%, #f5576c 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">MS</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">Maria Santos</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Working with Ryan was a pleasure! His attention to detail and creativity brought our vision to life. The final designs exceeded our expectations. Will definitely work with him again!"</p>
                </div>

                <!-- Review 3 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #f59e0b;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">AR</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">Alex Reyes</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Outstanding graphic designer! Ryan delivered high-quality work on time and was very responsive to feedback. His designs helped elevate our marketing materials significantly."</p>
                </div>

                <!-- Review 4 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #ec4899;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #fa709a 0%, #fee140 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">LG</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">Lisa Garcia</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Ryan is incredibly talented! His creative approach and professional execution made our project a success. The designs are beautiful and perfectly capture our brand essence."</p>
                </div>

                <!-- Review 5 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #8b5cf6;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);display:flex;align-items:center;justify-content:center;color:#333;font-weight:700;font-size:20px;">CT</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">Carlos Torres</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Fantastic experience working with Ryan! His designs are modern, clean, and exactly what we needed. Great communication throughout the project. Highly professional!"</p>
                </div>

                <!-- Review 6 -->
                <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid #06b6d4;">
                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg, #30cfd0 0%, #330867 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">SL</div>
                        <div>
                            <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">Sarah Lopez</h4>
                            <span style="color:#f5b400;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                    <p style="color:#4b5563;font-size:16px;line-height:1.6;">"Ryan's creativity and professionalism are top-notch! He understood our requirements perfectly and delivered stunning designs. Would absolutely recommend his services to anyone!"</p>
                </div>
            </div>

            <!-- Post Review Form Section -->
            <div id="postReviewForm" style="display:none;">
                <form id="reviewForm" style="display:flex;flex-direction:column;gap:20px;">
                    <input type="text" name="name" id="reviewName" placeholder="Your Name *" required style="padding:15px 20px;border:2px solid #e5e7eb;border-radius:10px;font-size:16px;outline:none;transition:border 0.3s;" onfocus="this.style.borderColor='#5e72e4'" onblur="this.style.borderColor='#e5e7eb'">
                    
                    <input type="email" name="email" id="reviewEmail" placeholder="Your Email (optional)" style="padding:15px 20px;border:2px solid #e5e7eb;border-radius:10px;font-size:16px;outline:none;transition:border 0.3s;" onfocus="this.style.borderColor='#5e72e4'" onblur="this.style.borderColor='#e5e7eb'">
                    
                    <div>
                        <label style="color:#1f2937;font-weight:600;margin-bottom:10px;display:block;">Rating *</label>
                        <div style="display:flex;gap:10px;font-size:32px;">
                            <span class="star-rating" data-rating="1" onclick="setRating(1)" style="cursor:pointer;color:#d1d5db;">&#9733;</span>
                            <span class="star-rating" data-rating="2" onclick="setRating(2)" style="cursor:pointer;color:#d1d5db;">&#9733;</span>
                            <span class="star-rating" data-rating="3" onclick="setRating(3)" style="cursor:pointer;color:#d1d5db;">&#9733;</span>
                            <span class="star-rating" data-rating="4" onclick="setRating(4)" style="cursor:pointer;color:#d1d5db;">&#9733;</span>
                            <span class="star-rating" data-rating="5" onclick="setRating(5)" style="cursor:pointer;color:#d1d5db;">&#9733;</span>
                        </div>
                        <input type="hidden" name="rating" id="reviewRating" required>
                    </div>
                    
                    <textarea name="comment" id="reviewComment" placeholder="Your Review *" required rows="5" style="padding:15px 20px;border:2px solid #e5e7eb;border-radius:10px;font-size:16px;outline:none;resize:vertical;transition:border 0.3s;" onfocus="this.style.borderColor='#5e72e4'" onblur="this.style.borderColor='#e5e7eb'"></textarea>
                    
                    <button type="submit" style="background:#5e72e4;color:#fff;padding:15px;border:none;border-radius:10px;font-size:18px;font-weight:600;cursor:pointer;transition:background 0.3s;" onmouseover="this.style.background='#4c63d2'" onmouseout="this.style.background='#5e72e4'">Submit Review</button>
                </form>
                
                <div id="reviewSuccess" style="display:none;text-align:center;padding:40px;">
                    <div style="width:80px;height:80px;background:#10b981;border-radius:50%;margin:0 auto 20px;display:flex;align-items:center;justify-content:center;">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <h3 style="color:#1f2937;font-size:24px;font-weight:700;margin-bottom:10px;">Thank You!</h3>
                    <p style="color:#6b7280;font-size:16px;">Your review has been published successfully!</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hero-image a:hover {
            transform: scale(1.2);
        }
        .hero-image a:hover img {
            filter: grayscale(0%) !important;
        }
    </style>

    <script>
        let selectedRating = 0;

        function openReviewsModal() {
            document.getElementById('reviewsModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            showReviewsList();
            loadReviews();
        }

        function closeReviewsModal() {
            document.getElementById('reviewsModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function showReviewsList() {
            document.getElementById('reviewsList').style.display = 'grid';
            document.getElementById('postReviewForm').style.display = 'none';
            document.getElementById('btnSeeReviews').style.background = '#5e72e4';
            document.getElementById('btnSeeReviews').style.color = '#fff';
            document.getElementById('btnPostReview').style.background = '#fff';
            document.getElementById('btnPostReview').style.color = '#5e72e4';
        }

        function showPostReview() {
            document.getElementById('reviewsList').style.display = 'none';
            document.getElementById('postReviewForm').style.display = 'block';
            document.getElementById('reviewSuccess').style.display = 'none';
            document.getElementById('btnSeeReviews').style.background = '#fff';
            document.getElementById('btnSeeReviews').style.color = '#5e72e4';
            document.getElementById('btnPostReview').style.background = '#5e72e4';
            document.getElementById('btnPostReview').style.color = '#fff';
        }

        function setRating(rating) {
            selectedRating = rating;
            document.getElementById('reviewRating').value = rating;
            
            document.querySelectorAll('.star-rating').forEach((star, index) => {
                if (index < rating) {
                    star.style.color = '#f5b400';
                } else {
                    star.style.color = '#d1d5db';
                }
            });
        }

        function loadReviews() {
            fetch('/reviews')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('totalReviews').textContent = data.total;
                    displayReviews(data.reviews);
                })
                .catch(error => console.error('Error loading reviews:', error));
        }

        function displayReviews(reviews) {
            const reviewsList = document.getElementById('reviewsList');
            const colors = ['#5e72e4', '#10b981', '#f59e0b', '#ec4899', '#8b5cf6', '#06b6d4'];
            const gradients = [
                'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
                'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
                'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
                'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)',
                'linear-gradient(135deg, #30cfd0 0%, #330867 100%)'
            ];

            if (reviews.length === 0) {
                reviewsList.innerHTML = '<p style="text-align:center;color:#6b7280;padding:40px;">No reviews yet. Be the first to leave a review!</p>';
                return;
            }

            reviewsList.innerHTML = reviews.map((review, index) => {
                const initials = review.name.split(' ').map(n => n[0]).join('').toUpperCase().substring(0, 2);
                const stars = '&#9733;'.repeat(review.rating);
                const colorIndex = index % colors.length;
                
                return `
                    <div style="background:#f9fafb;border-radius:15px;padding:25px;border-left:4px solid ${colors[colorIndex]};">
                        <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                            <div style="width:50px;height:50px;border-radius:50%;background:${gradients[colorIndex]};display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:20px;">${initials}</div>
                            <div>
                                <h4 style="color:#1f2937;font-size:18px;font-weight:600;margin-bottom:3px;">${review.name}</h4>
                                <span style="color:#f5b400;font-size:16px;">${stars}</span>
                            </div>
                        </div>
                        <p style="color:#4b5563;font-size:16px;line-height:1.6;">"${review.comment}"</p>
                    </div>
                `;
            }).join('');
        }

        document.getElementById('reviewForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('reviewName').value,
                email: document.getElementById('reviewEmail').value,
                rating: document.getElementById('reviewRating').value,
                comment: document.getElementById('reviewComment').value
            };

            fetch('/reviews', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('reviewForm').style.display = 'none';
                    document.getElementById('reviewSuccess').style.display = 'block';
                    setTimeout(() => {
                        showReviewsList();
                        loadReviews();
                    }, 3000);
                }
            })
            .catch(error => console.error('Error submitting review:', error));
        });

        // Close modal when clicking outside
        document.getElementById('reviewsModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeReviewsModal();
            }
        });
    </script>
@endsection
