<?php
include __DIR__ . "/../layouts/header.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="#">
            Espiransa<span class="text-primary">.</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMinimal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMinimal">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-medium">
                <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3 text-secondary" href="#">Villas</a></li>
                <li class="nav-item"><a class="nav-link px-3 text-secondary" href="#">Dining</a></li>
                <li class="nav-item"><a class="nav-link px-3 text-secondary" href="#">Experiences</a></li>
            </ul>

            <div class="d-flex gap-2">
                <a href="/login" class="btn btn-link text-decoration-none text-dark fw-bold">Log in</a>
                <a href="#book" class="btn btn-dark rounded-pill px-4">Book Stay</a>
            </div>
        </div>
    </div>
</nav>

<section class="py-5 bg-white overflow-hidden">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6 order-2 order-lg-1">
                <div class="pe-lg-5">
                    <span class="d-inline-block py-1 px-3 rounded-pill bg-light text-primary fw-bold small mb-4">
                        <i class="bi bi-star-fill me-1"></i> 5-Star Luxury Resort
                    </span>

                    <h1 class="display-3 fw-bold text-dark mb-4" style="letter-spacing: -1px;">
                        Find your peace <br>
                        <span class="text-secondary opacity-50">in paradise.</span>
                    </h1>

                    <p class="lead text-muted mb-5" style="max-width: 450px;">
                        Escape the ordinary. Experience world-class comfort, pristine beaches, and nature-inspired
                        architecture.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#check-availability"
                            class="btn btn-dark btn-lg rounded-pill px-5 py-3 fs-6 fw-bold shadow-sm">
                            Check Availability
                        </a>
                        <a href="#video-tour"
                            class="btn btn-outline-light text-dark btn-lg rounded-pill px-4 py-3 fs-6 fw-bold border-2">
                            <i class="bi bi-play-circle me-2"></i> View Resort
                        </a>
                    </div>

                    <div class="mt-5 pt-4 border-top d-flex align-items-center gap-3">
                        <div class="d-flex">
                            <i class="bi bi-star-fill text-warning small"></i>
                            <i class="bi bi-star-fill text-warning small"></i>
                            <i class="bi bi-star-fill text-warning small"></i>
                            <i class="bi bi-star-fill text-warning small"></i>
                            <i class="bi bi-star-fill text-warning small"></i>
                        </div>
                        <span class="text-muted small fw-medium">4.9/5 from 200+ Reviews</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <div class="position-relative">
                    <div class="position-relative w-100 rounded-5 overflow-hidden shadow-lg" style="min-height: 600px;">

                        <img src="assets/images/picture1.png" alt="Resort Hero View"
                            class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">

                        <div class="position-absolute bottom-0 start-0 m-4 bg-white p-3 rounded-4 shadow-sm d-none d-md-block"
                            style="max-width: 200px; z-index: 2;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                </div>
                                <div>
                                    <small class="d-block text-muted" style="font-size: 10px;">Location</small>
                                    <span class="fw-bold small">Palawan, PH</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="position-absolute bottom-0 start-0 m-4 bg-white p-3 rounded-4 shadow-lg d-none d-md-block"
                        style="max-width: 200px;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-geo-alt-fill text-primary"></i>
                            </div>
                            <div>
                                <small class="d-block text-muted" style="font-size: 10px;">Location</small>
                                <span class="fw-bold small">Palawan, PH</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php
include __DIR__ . "/../layouts/header.php";
?>