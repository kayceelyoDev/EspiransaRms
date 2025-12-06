<?php
// Top of the file
include __DIR__ . "/../../layouts/header.php";
?>

<div class="d-flex flex-column flex-lg-row" style="min-height: 100vh;">
    
    <div class="flex-shrink-0">
        <?php include __DIR__ . "/../../components/sidebar.php"?>
    </div>

    <div class="d-flex flex-column flex-grow-1 bg-light">
        
        <div>
            <?php include __DIR__ . "/../../components/header.php";?>
        </div>

        <div class="container-fluid p-4">
            
            <div class="row g-3 mb-4">
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-primary h-100">
                        <div class="card-body">
                            <h6 class="card-title opacity-75">Total Reservations</h6>
                            <h2 class="display-6 fw-bold">124</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-success h-100">
                        <div class="card-body">
                            <h6 class="card-title opacity-75">Available Rooms</h6>
                            <h2 class="display-6 fw-bold">8</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm text-white bg-warning h-100">
                        <div class="card-body">
                            <h6 class="card-title opacity-75">Pending Check-ins</h6>
                            <h2 class="display-6 fw-bold">3</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <h5 class="mb-0 text-secondary">Reservation List</h5>
                    <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addReservationModal">
                        <i class="bi bi-plus-lg"></i> Add Reservation
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 align-middle text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="ps-4">ID</th>
                                    <th scope="col">Guest Name</th>
                                    <th scope="col">Room Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-end pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">#1023</td>
                                    <td class="fw-bold">Juan Dela Cruz</td>
                                    <td>Deluxe Suite</td>
                                    <td>Dec 10, 2025</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">Confirmed</span></td>
                                    <td class="text-end pe-4">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">#1024</td>
                                    <td class="fw-bold">Maria Clara</td>
                                    <td>Single Room</td>
                                    <td>Dec 12, 2025</td>
                                    <td><span class="badge bg-warning bg-opacity-10 text-warning">Pending</span></td>
                                    <td class="text-end pe-4">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>



<?php
include __DIR__ . "/../../modals/reservationModals.php";
// Bottom of the file
include __DIR__ . "/../../layouts/footer.php";
?>