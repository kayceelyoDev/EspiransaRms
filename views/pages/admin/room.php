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
            
           <h1>hello rooms</h1>
        </div>
    </div>
</div>



<?php
include __DIR__ . "/../../modals/reservationModals.php";
// Bottom of the file
include __DIR__ . "/../../layouts/footer.php";
?>