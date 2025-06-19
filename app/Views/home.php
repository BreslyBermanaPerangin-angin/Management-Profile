<!-- Team Section -->
<div class="bg-light py-4 py-md-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-md-5">
            <div class="d-inline-block position-relative">
                <h2 class="fw-bold text-dark mb-3" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">
                    <span class="text-primary">Our</span> <span class="text-info">Dream</span> <span class="text-success">Team</span>
                </h2>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                    <div style="height: 3px; width: 80px; background: linear-gradient(90deg, #0d6efd, #20c997); border-radius: 2px;"></div>
                </div>
            </div>
            <p class="text-muted mt-4 mx-auto" style="max-width: 600px; font-size: clamp(0.9rem, 2.5vw, 1.1rem); line-height: 1.6;">
                Meet the brilliant minds behind our innovation. Each member brings unique expertise and passion to drive excellence.
            </p>
        </div><?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Custom Animations -->
<style>
@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.hero-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.particle:nth-child(1) { width: 4px; height: 4px; left: 10%; animation-delay: 0s; }
.particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; }
.particle:nth-child(3) { width: 3px; height: 3px; left: 30%; animation-delay: 1s; }
.particle:nth-child(4) { width: 5px; height: 5px; left: 40%; animation-delay: 3s; }
.particle:nth-child(5) { width: 4px; height: 4px; left: 50%; animation-delay: 1.5s; }
.particle:nth-child(6) { width: 6px; height: 6px; left: 60%; animation-delay: 2.5s; }
.particle:nth-child(7) { width: 3px; height: 3px; left: 70%; animation-delay: 0.5s; }
.particle:nth-child(8) { width: 5px; height: 5px; left: 80%; animation-delay: 1.8s; }
.particle:nth-child(9) { width: 4px; height: 4px; left: 90%; animation-delay: 2.8s; }

@media (max-width: 768px) {
    .display-4 { font-size: 2.2rem !important; }
    .lead { font-size: 1.1rem !important; }
}
</style>

<!-- Hero Section dengan Gradient Background & Particles -->
<div class="bg-dark position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); 
                background-size: 300% 300%; 
                animation: gradient 8s ease infinite;"></div>
    
    <!-- Floating Particles -->
    <div class="hero-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <div class="container py-4 py-md-5 position-relative">
        <div class="text-center text-white py-3 py-md-4">
            <h1 class="display-4 fw-bold mb-3 position-relative" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                Welcome to <span class="text-warning" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">MyApp</span>
                <div class="position-absolute top-100 start-50 translate-middle-x mt-2 d-none d-md-block">
                    <div class="bg-warning" style="height: 4px; width: 100px; border-radius: 2px; box-shadow: 0 0 10px rgba(255,193,7,0.5);"></div>
                </div>
            </h1>
            <p class="lead mb-4 text-light opacity-90" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.3); 
                                                                font-size: clamp(1rem, 2.5vw, 1.25rem);">
                Experience the future of team collaboration
            </p>
            <div class="d-flex justify-content-center gap-2 gap-md-3 flex-wrap">
                <span class="badge bg-light text-dark px-3 px-md-4 py-2 rounded-pill" 
                      style="font-size: clamp(0.75rem, 2vw, 0.9rem); box-shadow: 0 4px 15px rgba(255,255,255,0.2);">
                    <i class="fas fa-rocket me-1 me-md-2"></i>Innovative
                </span>
                <span class="badge bg-warning text-dark px-3 px-md-4 py-2 rounded-pill" 
                      style="font-size: clamp(0.75rem, 2vw, 0.9rem); box-shadow: 0 4px 15px rgba(255,193,7,0.3);">
                    <i class="fas fa-users me-1 me-md-2"></i>Collaborative
                </span>
                <span class="badge bg-info text-dark px-3 px-md-4 py-2 rounded-pill" 
                      style="font-size: clamp(0.75rem, 2vw, 0.9rem); box-shadow: 0 4px 15px rgba(13,202,240,0.3);">
                    <i class="fas fa-star me-1 me-md-2"></i>Excellence
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-light py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <div class="d-inline-block position-relative">
                <h2 class="display-5 fw-bold text-dark mb-3">
                    <span class="text-primary">Our</span> <span class="text-info">Dream</span> <span class="text-success">Team</span>
                </h2>
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                    <div style="height: 3px; width: 80px; background: linear-gradient(90deg, #0d6efd, #20c997); border-radius: 2px;"></div>
                </div>
            </div>
            <p class="text-muted fs-5 mt-4 mx-auto" style="max-width: 600px;">
                Meet the brilliant minds behind our innovation. Each member brings unique expertise and passion to drive excellence.
            </p>
        </div>

        <?php if (!empty($profiles)): ?>
            <div class="row g-3 g-md-4 justify-content-center">
                <?php foreach ($profiles as $index => $profile): ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="card h-100 border-0 shadow-lg position-relative overflow-hidden" 
                             style="border-radius: 24px; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); transform: translateY(0);"
                             onmouseover="this.style.transform='translateY(-8px) scale(1.02)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow=''">
                            
                            <!-- Animated Gradient Border -->
                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                 style="background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe); 
                                        background-size: 400% 400%; 
                                        animation: gradient 6s ease infinite; 
                                        padding: 3px; 
                                        border-radius: 24px; 
                                        z-index: -1;">
                            </div>
                            
                            <!-- Card Content with Glass Effect -->
                            <div class="bg-white h-100 d-flex flex-column position-relative" 
                                 style="border-radius: 21px; backdrop-filter: blur(10px); z-index: 1;">
                                
                                <!-- Profile Section -->
                                <div class="text-center pt-4 pb-2">
                                    <div class="position-relative d-inline-block mb-3">
                                        <?php if ($profile['photo']): ?>
                                            <img src="<?= base_url('uploads/photos/' . $profile['photo']) ?>" 
                                                 class="rounded-circle border border-4" 
                                                 style="height: 90px; width: 90px; object-fit: cover; 
                                                        border-color: #667eea !important;
                                                        box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
                                                        transition: all 0.3s ease;">
                                        <?php else: ?>
                                            <div class="rounded-circle border border-4 d-flex align-items-center justify-content-center" 
                                                 style="height: 90px; width: 90px; 
                                                        border-color: #667eea !important;
                                                        background: linear-gradient(135deg, #667eea, #764ba2);
                                                        box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);">
                                                <i class="fas fa-user fs-2 text-white"></i>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <!-- Pulsing Online Indicator -->
                                        <div class="position-absolute bottom-0 end-0">
                                            <span class="badge bg-success rounded-circle p-0 d-flex align-items-center justify-content-center" 
                                                  style="width: 24px; height: 24px; animation: pulse 2s infinite;">
                                                <i class="fas fa-check" style="font-size: 10px;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Name with Dynamic Typography -->
                                    <h5 class="fw-bold text-dark mb-2 px-2" style="font-size: clamp(0.9rem, 2.5vw, 1.1rem); line-height: 1.3;">
                                        <?= esc($profile['name']) ?>
                                    </h5>
                                    
                                    <!-- Animated Badge -->
                                    <span class="badge text-white px-3 py-2 rounded-pill" 
                                          style="background: linear-gradient(45deg, #667eea, #764ba2); 
                                                 font-size: 0.75rem; font-weight: 600; 
                                                 box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);">
                                        <i class="fas fa-star me-1 fa-xs"></i>Team Member
                                    </span>
                                </div>

                                <!-- Contact Information Cards -->
                                <div class="px-3 flex-grow-1">
                                    <div class="d-flex flex-column gap-2">
                                        <!-- Email Card -->
                                        <div class="d-flex align-items-center p-2 rounded-4 position-relative overflow-hidden" 
                                             style="background: linear-gradient(135deg, #ff6b6b20, #ff6b6b10); border: 1px solid #ff6b6b30;">
                                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                                 style="background: linear-gradient(45deg, transparent, rgba(255,107,107,0.1)); z-index: 0;"></div>
                                            <div class="flex-shrink-0 position-relative z-index-1">
                                                <div class="text-white rounded-circle d-flex align-items-center justify-content-center" 
                                                     style="width: 32px; height: 32px; background: linear-gradient(135deg, #ff6b6b, #ee5a52);">
                                                    <i class="fas fa-envelope" style="font-size: 11px;"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 position-relative z-index-1">
                                                <div class="text-dark fw-semibold small text-truncate"><?= esc($profile['email']) ?></div>
                                            </div>
                                        </div>

                                        <!-- Phone Card -->
                                        <div class="d-flex align-items-center p-2 rounded-4 position-relative overflow-hidden" 
                                             style="background: linear-gradient(135deg, #4facfe20, #4facfe10); border: 1px solid #4facfe30;">
                                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                                 style="background: linear-gradient(45deg, transparent, rgba(79,172,254,0.1)); z-index: 0;"></div>
                                            <div class="flex-shrink-0 position-relative z-index-1">
                                                <div class="text-white rounded-circle d-flex align-items-center justify-content-center" 
                                                     style="width: 32px; height: 32px; background: linear-gradient(135deg, #4facfe, #00f2fe);">
                                                    <i class="fas fa-phone" style="font-size: 11px;"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 position-relative z-index-1">
                                                <div class="text-dark fw-semibold small"><?= esc($profile['phone']) ?></div>
                                            </div>
                                        </div>

                                        <!-- Address Card -->
                                        <div class="d-flex align-items-center p-2 rounded-4 position-relative overflow-hidden" 
                                             style="background: linear-gradient(135deg, #51cf6620, #51cf6610); border: 1px solid #51cf6630;">
                                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                                 style="background: linear-gradient(45deg, transparent, rgba(81,207,102,0.1)); z-index: 0;"></div>
                                            <div class="flex-shrink-0 position-relative z-index-1">
                                                <div class="text-white rounded-circle d-flex align-items-center justify-content-center" 
                                                     style="width: 32px; height: 32px; background: linear-gradient(135deg, #51cf66, #48bb78);">
                                                    <i class="fas fa-map-marker-alt" style="font-size: 11px;"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 position-relative z-index-1">
                                                <div class="text-dark fw-semibold small text-truncate"><?= esc($profile['address']) ?></div>
                                            </div>
                                        </div>

                                        <!-- Study Program Card -->
                                        <div class="d-flex align-items-center p-2 rounded-4 position-relative overflow-hidden" 
                                             style="background: linear-gradient(135deg, #ffd93d20, #ffd93d10); border: 1px solid #ffd93d30;">
                                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                                 style="background: linear-gradient(45deg, transparent, rgba(255,217,61,0.1)); z-index: 0;"></div>
                                            <div class="flex-shrink-0 position-relative z-index-1">
                                                <div class="text-white rounded-circle d-flex align-items-center justify-content-center" 
                                                     style="width: 32px; height: 32px; background: linear-gradient(135deg, #ffd93d, #f6cc02);">
                                                    <i class="fas fa-graduation-cap" style="font-size: 11px;"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 position-relative z-index-1">
                                                <div class="text-dark fw-semibold small text-truncate"><?= esc($profile['study_program']) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media Section -->
                                <?php if (!empty($profile['instagram']) || !empty($profile['youtube']) || !empty($profile['tiktok'])): ?>
                                    <div class="p-3 mt-2">
                                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                                            <?php if (!empty($profile['instagram'])): ?>
                                                <a href="<?= esc($profile['instagram']) ?>" target="_blank" 
                                                   class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center shadow-sm" 
                                                   style="width: 36px; height: 36px; background: linear-gradient(45deg, #e1306c, #fd1d1d); border: none; transition: all 0.3s ease;"
                                                   onmouseover="this.style.transform='scale(1.1) rotate(5deg)'"
                                                   onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                                    <i class="fab fa-instagram text-white" style="font-size: 14px;"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (!empty($profile['youtube'])): ?>
                                                <a href="<?= esc($profile['youtube']) ?>" target="_blank" 
                                                   class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center shadow-sm" 
                                                   style="width: 36px; height: 36px; background: linear-gradient(45deg, #ff0000, #cc0000); border: none; transition: all 0.3s ease;"
                                                   onmouseover="this.style.transform='scale(1.1) rotate(-5deg)'"
                                                   onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                                    <i class="fab fa-youtube text-white" style="font-size: 14px;"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (!empty($profile['tiktok'])): ?>
                                                <a href="<?= esc($profile['tiktok']) ?>" target="_blank" 
                                                   class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center shadow-sm" 
                                                   style="width: 36px; height: 36px; background: linear-gradient(45deg, #000000, #333333); border: none; transition: all 0.3s ease;"
                                                   onmouseover="this.style.transform='scale(1.1) rotate(5deg)'"
                                                   onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                                    <i class="fab fa-tiktok text-white" style="font-size: 14px;"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-4 py-md-5">
                <div class="mb-4">
                    <i class="fas fa-users-slash display-1 text-muted opacity-50"></i>
                </div>
                <h4 class="text-muted mb-3" style="font-size: clamp(1.2rem, 3vw, 1.5rem);">No Team Members Yet</h4>
                <p class="text-muted mb-4" style="font-size: clamp(0.9rem, 2.5vw, 1rem);">Start building your dream team by adding new members.</p>
                <button class="btn btn-primary btn-lg rounded-pill px-4 px-md-5">
                    <i class="fas fa-plus me-2"></i>Add First Member
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Statistics Section -->
<div class="bg-dark text-white py-4 py-md-5">
    <div class="container">
        <div class="row text-center g-3 g-md-4">
            <div class="col-6 col-md-3">
                <div class="p-2 p-md-3">
                    <div class="fw-bold text-primary mb-2" style="font-size: clamp(2rem, 5vw, 3rem);"><?= count($profiles ?? []) ?></div>
                    <div class="text-light opacity-75" style="font-size: clamp(0.8rem, 2vw, 1rem);">Team Members</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2 p-md-3">
                    <div class="fw-bold text-success mb-2" style="font-size: clamp(2rem, 5vw, 3rem);">100%</div>
                    <div class="text-light opacity-75" style="font-size: clamp(0.8rem, 2vw, 1rem);">Collaboration</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2 p-md-3">
                    <div class="fw-bold text-warning mb-2" style="font-size: clamp(2rem, 5vw, 3rem);">24/7</div>
                    <div class="text-light opacity-75" style="font-size: clamp(0.8rem, 2vw, 1rem);">Availability</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-2 p-md-3">
                    <div class="fw-bold text-info mb-2" style="font-size: clamp(2rem, 5vw, 3rem);">∞</div>
                    <div class="text-light opacity-75" style="font-size: clamp(0.8rem, 2vw, 1rem);">Possibilities</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>