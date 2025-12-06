<?php include __DIR__ . "/../layouts/header.php" ?>
    <link rel="stylesheet" href="assets\css\reservationModal.css">
<div class="modal fade" id="addReservationModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header border-bottom-0 pb-0">
        <div>
            <h4 class="modal-title fw-bold">Add New Reservation</h4>
            <p class="text-secondary small mb-0">Select a room and check availability</p>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4">
        <form action="process_reservation.php" method="POST">
            <div class="row g-4">
                
                <div class="col-lg-7">
                    
                    <div class="mb-4">
                        <h6 class="text-white fw-bold mb-3">Select Room</h6>
                        <div class="room-list" style="max-height: 280px; overflow-y: auto; padding-right: 5px;">
                            
                            <div class="room-card" style="opacity: 0.7; cursor: not-allowed;">
                                <div class="d-flex align-items-center">
                                    <div class="room-icon"><i class="bi bi-house-door"></i></div>
                                    <div>
                                        <div class="fw-bold">281 | Room delux</div>
                                        <small class="text-secondary">3 Guests · ₱3500/night</small>
                                    </div>
                                </div>
                                <span class="badge-status badge-occupied">Occupied</span>
                            </div>

                            <div class="room-card selected" onclick="selectRoom(this)">
                                <div class="d-flex align-items-center">
                                    <div class="room-icon"><i class="bi bi-house-door"></i></div>
                                    <div>
                                        <div class="fw-bold text-white">321 | Regular Room</div>
                                        <small class="text-secondary">2 Guests · <span class="text-info">₱2500</span>/night</small>
                                    </div>
                                </div>
                                <span class="badge-status badge-available">Available</span>
                                <input type="radio" name="room_id" value="321" checked hidden>
                            </div>

                            <div class="room-card" onclick="selectRoom(this)">
                                <div class="d-flex align-items-center">
                                    <div class="room-icon"><i class="bi bi-house-door"></i></div>
                                    <div>
                                        <div class="fw-bold text-white">239 | Fan Room</div>
                                        <small class="text-secondary">2 Guests · <span class="text-info">₱1500</span>/night</small>
                                    </div>
                                </div>
                                <span class="badge-status badge-available">Available</span>
                                <input type="radio" name="room_id" value="239" hidden>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="text-white fw-bold mb-3">Guest Information</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <label class="small text-secondary mb-1">Full Name</label>
                                <input type="text" class="form-control" name="guest_name" placeholder="Enter guest name">
                            </div>
                            <div class="col-md-6">
                                <label class="small text-secondary mb-1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="+63 912 345 6789">
                            </div>
                             <div class="col-md-6">
                                <label class="small text-secondary mb-1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="guest@example.com">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small text-secondary mb-1">Check-in Date</label>
                                <input type="date" class="form-control" name="check_in" id="inputCheckIn" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-secondary mb-1">Check-in Time</label>
                                <input type="time" class="form-control" name="check_in_time" value="14:00">
                            </div>
                            <div class="col-md-6">
                                <label class="small text-secondary mb-1">Check-out Date</label>
                                <input type="date" class="form-control" name="check_out" id="inputCheckOut" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-secondary mb-1">Guests</label>
                                <input type="number" class="form-control" name="guests" value="1">
                            </div>
                        </div>

                        <button type="submit" class="btn-create">Create Reservation</button>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="calendar-wrapper">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold mb-0">December 2025</h6>
                            <div>
                                <button type="button" class="btn btn-sm btn-link text-white text-decoration-none"><i class="bi bi-chevron-left"></i></button>
                                <button type="button" class="btn btn-sm btn-link text-white text-decoration-none"><i class="bi bi-chevron-right"></i></button>
                            </div>
                        </div>

                        <div class="calendar-grid mb-2">
                            <div class="calendar-header-day">Sun</div>
                            <div class="calendar-header-day">Mon</div>
                            <div class="calendar-header-day">Tue</div>
                            <div class="calendar-header-day">Wed</div>
                            <div class="calendar-header-day">Thu</div>
                            <div class="calendar-header-day">Fri</div>
                            <div class="calendar-header-day">Sat</div>
                        </div>

                        <div class="calendar-grid mb-4">
                             <div class="calendar-day empty"></div> <?php for($i=1; $i<=31; $i++): ?>
                                <div class="calendar-day" 
                                     data-day="<?php echo $i; ?>" 
                                     onclick="handleDateClick(<?php echo $i; ?>)">
                                    <?php echo $i; ?>
                                </div>
                             <?php endfor; ?>
                        </div>

                        <div class="d-flex gap-3 small mt-auto">
                            <div class="d-flex align-items-center gap-2 text-secondary">
                                <span class="rounded-circle bg-primary" style="width:8px; height:8px;"></span> Selected
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary">
                                <span class="rounded-circle bg-warning" style="width:8px; height:8px;"></span> Pending
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="assets\js\reservationModal.js"></script>

<?php include __DIR__ . "/../layouts/footer.php" ?>