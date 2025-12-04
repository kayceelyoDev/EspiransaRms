<?php
    require_once __DIR__ . '/../../layouts/header.php';
?>

<div class="container-fluid p-0">
    <div class="row g-0" style="min-height: 100vh;">
        
        <div class="col-md-6 d-none d-md-block" style="background-color: #e0e0e0;">
            </div>

        <div class="col-md-6 bg-white d-flex align-items-center justify-content-center">
            <div class="w-100 p-5" style="max-width: 500px;">
                
                <h2 class="fw-bold mb-1">Welcome back</h2>
                <p class="text-muted mb-4">Please enter your details to sign in</p>

                <form action="loginUser" method="POST">
                    
                    <?php if (isset($errors['login'])): ?>
                        <div class="alert alert-danger py-2 mb-3 small">
                            <?= $errors['login']; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address</label>
                        <input type="email" 
                               name="email" 
                               class="form-control bg-light border-0 py-2" 
                               value="<?= htmlspecialchars($old['email'] ?? '') ?>"
                               placeholder="name@example.com">
                        <?php if (isset($errors['email'])): ?>
                            <div class="text-danger small mt-1"><?= $errors['email']; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" 
                               name="password" 
                               class="form-control bg-light border-0 py-2">
                        <?php if (isset($errors['password'])): ?>
                            <div class="text-danger small mt-1"><?= $errors['password']; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="d-flex justify-content-end mb-4">
                        <a href="#" class="text-muted small text-decoration-none">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 py-2 fw-bold" style="background-color: #d3d3d3; border: none; color: #000;">
                        Sign in
                    </button>

                    <div class="text-center mt-3">
                        Don't have an account? <a href="register" class="text-dark fw-bold text-decoration-underline">Create an account</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
    require_once __DIR__ . '/../../layouts/footer.php';
?>