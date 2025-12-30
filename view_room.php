<?php
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * FROM `room_list` WHERE id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k))
                $$k = $v;
        }
    }
}
?>
<style>
/* Container */
.room-detail-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 2rem 1rem;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

/* Left column (Images + Features) */
.left-column {
    flex: 1 1 45%;
}

.carousel {
    position: relative;
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.carousel img {
    width: 100%;
    height: 275px; /* half height */
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 12px;
}

.carousel img:hover {
    transform: scale(1.05);
}

.carousel-thumbs {
    display: flex;
    gap: 0.5rem;
    margin-top: 0.5rem;
}

.carousel-thumbs img {
    width: 70px;
    height: 50px;
    object-fit: cover;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
    opacity: 0.8;
    border: 2px solid transparent;
}

.carousel-thumbs img.active,
.carousel-thumbs img:hover {
    opacity: 1;
    border-color: #007bff;
    transform: scale(1.05);
}

/* Badge */
.room-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background-color: #ff5b5b;
    color: #fff;
    font-weight: 600;
    font-size: 0.8rem;
    padding: 0.4rem 0.7rem;
    border-radius: 6px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.15);
}

/* Room Features under image carousel */
.room-features {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 1rem;
}

.room-feature {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: #e9f0ff;
    padding: 0.5rem 0.8rem;
    border-radius: 8px;
    font-weight: 600;
    color: #1a3d7c;
    font-size: 0.85rem;
}

.room-feature i {
    color: #007bff;
}

/* Right column (Text Content) */
.right-column {
    flex: 1 1 50%;
    display: flex;
    flex-direction: column;
}

.room-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a3d7c;
    margin-bottom: 0.5rem;
}

.room-type {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 1rem;
}

.room-description {
    font-size: 1rem;
    line-height: 1.6;
    color: #495057;
    margin-bottom: 1.5rem;
}

/* Booking Panel */
.booking-panel {
    background: linear-gradient(135deg, #1d976c, #93f9b9);
    border-radius: 16px;
    padding: 1rem 1.5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: row; /* horizontal layout */
    align-items: center; /* vertical center */
    justify-content: space-between; /* space between price and button */
    gap: 1rem;
    color: #fff;
}

.booking-price {
    font-size: 1.6rem;
    font-weight: 700;
}

.booking-btn {
    padding: 0.6rem 1.2rem;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 12px;
    background-color: #fff;
    color: #1d976c;
    border: none;
    cursor: pointer;
    transition: all 0.25s ease;
}

.booking-btn:hover {
    transform: translateY(-3px);
    background-color: #f0f0f0;
    color: #1d976c;
}

.badge {
    font-size: 0.9rem;
    font-weight: 600;
    padding: 0.4rem 1rem;
    border-radius: 50px;
}

.badge-success {
    background-color: #28a745;
    color: #fff;
}

.badge-danger {
    background-color: #dc3545;
    color: #fff;
}

/* Responsive */
@media (max-width: 992px) {
    .room-detail-container {
        flex-direction: column;
    }
    .carousel img { height: 180px; }
}
</style>

<div class="room-detail-container">
    <!-- Left Column: Images + Features -->
    <div class="left-column">
        <div class="carousel position-relative">
            <img id="main-carousel-img" src="<?= validate_image(isset($image_path) ? $image_path : "") ?>" alt="<?= isset($name) ? $name : 'Room Image' ?>">
            <?php if(isset($is_new) && $is_new): ?>
                <div class="room-badge">New</div>
            <?php elseif(isset($is_featured) && $is_featured): ?>
                <div class="room-badge">Best Seller</div>
            <?php endif; ?>
        </div>
        <div class="carousel-thumbs mt-2">
            <img src="<?= validate_image(isset($image_path) ? $image_path : "") ?>" class="active" onclick="changeCarousel(this)">
            <!-- Add more thumbnails here if available -->
        </div>

        <!-- Room Features under carousel -->
        <div class="room-features">
            <div class="room-feature"><i class="fa fa-bed"></i> <?= isset($type) ? $type : 'N/A' ?> Beds</div>
            <div class="room-feature"><i class="fa fa-wifi"></i> <?= isset($wifi) && $wifi ? 'Wi-Fi' : 'Wi-Fi' ?></div>
            <div class="room-feature"><i class="fa fa-snowflake"></i> <?= isset($ac) && $ac ? 'AC' : 'AC' ?></div>
            <div class="room-feature"><i class="fa fa-shower"></i> <?= isset($bathroom) ? $bathroom : '1' ?> Bathroom(s)</div>
        </div>
    </div>

    <!-- Right Column: Text Content -->
    <div class="right-column">
        <h2 class="room-title"><?= isset($name) ? $name : 'N/A' ?></h2> 
        <div class="mt-2">
                <span>Status: </span>
                <?php 
                    if(isset($status)){
                        switch($status){
                            case '1': echo '<span class="badge badge-success">Available</span>'; break;
                            case '0': echo '<span class="badge badge-danger">Unvailable</span>'; break;
                        }
                    }
                ?>
            </div>
        <div class="room-description"><?= isset($description) ? html_entity_decode($description) : 'N/A' ?></div>
        <div class="booking-panel d-flex align-items-center justify-content-between">
    <div class="booking-price"><?= isset($price) ? number_format($price,2) : '0.00' ?>/day</div>
    <button class="booking-btn" id="reserve_room"><i class="fa fa-edit"></i> Reserve Now</button>
</div>
    </div>
</div>

<script>
function changeCarousel(el){
    document.getElementById('main-carousel-img').src = el.src;
    document.querySelectorAll('.carousel-thumbs img').forEach(img => img.classList.remove('active'));
    el.classList.add('active');
}

$(function(){
    $('#reserve_room').click(function(){
        uni_modal("Reservation for <?= $name ?>","reserve.php?rid=<?= isset($id) ? $id : '' ?>",'mid-large');
    });
});
</script>