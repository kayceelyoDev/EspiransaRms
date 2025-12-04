<?php
// Ensure we are accessing this via the router
use App\Config\Database;
if (!defined('ACCESS_GRANTED')) {
    exit("Access Denied");
}

// Include Header
include '../views/layouts/header.php';

// --- LOGIC BLOCK ---
$database = new Database();
$conn = $database->getConnection();
$isConnected = ($conn != null);

// Gather extra server info for the "Professional" look
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
?>

<style>
    /* Add a subtle pulse animation for the status indicator */
    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(25, 135, 84, 0); }
        100% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0); }
    }
    @keyframes pulse-red {
        0% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0); }
        100% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0); }
    }
    .status-indicator {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }
    .status-success {
        background-color: #198754;
        animation: pulse-green 2s infinite;
    }
    .status-danger {
        background-color: #dc3545;
        animation: pulse-red 2s infinite;
    }
    .tech-card {
        border: none;
        border-radius: 12px;
        transition: transform 0.2s;
    }
    .terminal-box {
        background-color: #1e1e1e;
        color: #00ff00;
        font-family: 'Courier New', Courier, monospace;
        padding: 15px;
        border-radius: 6px;
        text-align: left;
        font-size: 0.9rem;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                
                <div class="card-header bg-white py-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0 fw-bold text-dark">System Diagnostics</h4>
                            <small class="text-muted">Database Connection Check</small>
                        </div>
                        
                        <?php if ($isConnected): ?>
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill border border-success">
                                <span class="status-indicator status-success"></span> Operational
                            </span>
                        <?php else: ?>
                            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill border border-danger">
                                <span class="status-indicator status-danger"></span> Critical Error
                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card-body p-5 text-center">
                    
                    <?php if ($isConnected): ?>
                        <div class="mb-4">
                            <div style="font-size: 4rem;">🎉</div>
                            <h2 class="fw-bold mt-2">Database Connected</h2>
                            <p class="text-muted">Your application is successfully communicating with the MySQL Server.</p>
                        </div>

                        <div class="row g-3 text-start">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border h-100">
                                    <h6 class="text-uppercase text-muted small fw-bold">Configuration</h6>
                                    <ul class="list-unstyled mb-0 mt-2">
                                        <li class="mb-2"><strong>Host:</strong> <span class="font-monospace"><?php echo DB_HOST; ?></span></li>
                                        <li class="mb-2"><strong>Database:</strong> <span class="text-primary fw-bold"><?php echo DB_NAME; ?></span></li>
                                        <li class="mb-0"><strong>User:</strong> <span class="font-monospace"><?php echo DB_USER; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border h-100">
                                    <h6 class="text-uppercase text-muted small fw-bold">Environment</h6>
                                    <ul class="list-unstyled mb-0 mt-2">
                                        <li class="mb-2"><strong>PHP Version:</strong> <?php echo $phpVersion; ?></li>
                                        <li class="mb-0"><strong>Server:</strong> <span class="small text-truncate d-block"><?php echo $serverSoftware; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <a href="roomreservation/public/" class="btn btn-primary px-4 py-2 rounded-pill">
                                &larr; Proceed to Application
                            </a>
                        </div>

                    <?php else: ?>
                        <div class="mb-4">
                            <div style="font-size: 4rem;">🚫</div>
                            <h2 class="fw-bold text-danger mt-2">Connection Refused</h2>
                            <p class="text-muted">The application could not establish a link to the database.</p>
                        </div>

                        <div class="text-start mb-4">
                            <h6 class="fw-bold">Troubleshooting Steps:</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    1. Check your <code>app/Config/config.php</code> file.
                                </li>
                                <li class="list-group-item px-0">
                                    2. Ensure your MySQL server (XAMPP/WAMP) is running.
                                </li>
                                <li class="list-group-item px-0">
                                    3. Verify the database name <strong><?php echo DB_NAME; ?></strong> exists in phpMyAdmin.
                                </li>
                                <li class="list-group-item px-0 text-danger">
                                    4. Common Issue: If using XAMPP, the password should usually be empty.
                                </li>
                            </ul>
                        </div>

                        <div class="terminal-box mb-4">
                            <span class="text-white">root@server:~$</span> connect mysql<br>
                            <span class="text-danger">Error: Access denied for user '<?php echo DB_USER; ?>'@'<?php echo DB_HOST; ?>'</span><br>
                            <span class="text-muted">// Please verify your credentials in config.php</span>
                        </div>

                        <div class="mt-4">
                            <a href="/test" class="btn btn-outline-danger px-4 rounded-pill me-2">Retry Connection</a>
                            <a href="/" class="btn btn-secondary px-4 rounded-pill">Go Home</a>
                        </div>
                    <?php endif; ?>

                </div>
                
                <div class="card-footer bg-light py-3 text-center">
                    <small class="text-muted">Room Reservation System &copy; <?php echo date('Y'); ?></small>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../views/layouts/footer.php'; ?>