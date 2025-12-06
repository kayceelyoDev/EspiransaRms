<?php 
include __DIR__ . "/../layouts/header.php";

// 1. Get the current URL path (e.g., "/dashboard" or "/rooms")
$current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 2. Helper function to determine the class
function getLinkClass($route, $link_path) {
    // If the current URL matches the link path
    if ($route === $link_path) {
        return 'active text-white'; // Highlighted style
    } else {
        return 'text-white-50 hover-text-white'; // Dimmed/Inactive style
    }
}
?>

<div class="d-flex flex-column">
    
    <div class="d-lg-none p-3 bg-dark text-white w-100 d-flex justify-content-between align-items-center border-bottom border-secondary">
        <span class="fs-3 fw-bold tracking-tight">MyApp</span>
        <button class="btn btn-outline-secondary text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <i class="bi bi-list fs-2"></i>
        </button>
    </div>

    <div class="offcanvas-lg offcanvas-start bg-dark text-white d-flex flex-column flex-shrink-0" 
         tabindex="-1" 
         id="sidebarMenu" 
         aria-labelledby="sidebarMenuLabel" 
         style="width: 300px; min-height: 100vh;">
         
        <div class="offcanvas-header d-lg-none border-bottom border-secondary">
            <h5 class="offcanvas-title fs-3 fw-bold" id="sidebarMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <div class="d-none d-lg-flex p-4 align-items-center border-bottom border-secondary mb-2">
            <i class="bi bi-buildings-fill fs-2 me-3 text-primary"></i>
            <span class="fs-3 fw-bold">ResortApp</span>
        </div>
        
        <ul class="nav nav-pills flex-column mb-auto p-3 gap-2">
            
            <li class="nav-item">
                <a href="/dashboard" class="nav-link <?php echo getLinkClass($current_route, '/dashboard'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-speedometer2 me-3 fs-4"></i>
                    Dashboard
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/rooms" class="nav-link <?php echo getLinkClass($current_route, '/rooms'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-door-open-fill me-3 fs-4"></i>
                    Rooms
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/reservation" class="nav-link <?php echo getLinkClass($current_route, '/reservation'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-calendar-check-fill me-3 fs-4"></i>
                    Reservation
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/checkin" class="nav-link <?php echo getLinkClass($current_route, '/checkin'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-box-arrow-in-right me-3 fs-4"></i>
                    Check In
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/checkout" class="nav-link <?php echo getLinkClass($current_route, '/checkout'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-box-arrow-right me-3 fs-4"></i>
                    Check Out
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/logs" class="nav-link <?php echo getLinkClass($current_route, '/logs'); ?> d-flex align-items-center fs-5 py-3 fw-semibold">
                    <i class="bi bi-file-earmark-text-fill me-3 fs-4"></i>
                    Logs
                </a>
            </li>

            <hr class="text-secondary my-3">

            <li class="nav-item">
                <a href="/logout" class="nav-link text-danger d-flex align-items-center fs-5 py-3 fw-semibold bg-danger bg-opacity-10">
                    <i class="bi bi-power me-3 fs-4"></i>
                    Log Out
                </a>
            </li>
        </ul>
        
        <div class="p-3 mt-auto border-top border-secondary">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle p-2 rounded hover-bg-secondary" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center me-3" style="width: 45px; height: 45px;">
                        <span class="fs-4 fw-bold">JD</span>
                    </div>
                    <div>
                        <div class="fs-5 fw-bold">John Doe</div>
                        <div class="fs-7 text-white-50" style="font-size: 0.85rem;">Admin Manager</div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<style>
    .nav-link.text-white-50:hover {
        color: #fff !important;
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<?php include __DIR__ . "/../layouts/footer.php"?>