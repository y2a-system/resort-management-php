<?php 
$from = isset($_GET['from']) ? date("Y-m-d", strtotime($_GET['from'])) : "";
$to = isset($_GET['to']) ? date("Y-m-d", strtotime($_GET['to'])) : "";
?>
<style>
    /* Grid container */
    .room-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    /* Room card */
    .room-item {
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-decoration: none;
        color: inherit;
    }

    .room-item:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    /* Room image with gradient overlay */
    .room-img-container {
        position: relative;
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .room-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s ease;
        display: block;
    }

    .room-item:hover .room-img {
        transform: scale(1.1);
    }

    .room-img-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50%;
        background: linear-gradient(to top, rgba(0,0,0,0.4), rgba(0,0,0,0));
        pointer-events: none;
    }

    /* Badge label */
    .room-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #ff5b5b;
        color: #fff;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.25rem 0.6rem;
        border-radius: 5px;
        text-transform: uppercase;
        box-shadow: 0 3px 6px rgba(0,0,0,0.15);
    }

    /* Content section */
    .room-content {
        padding: 1rem 1.2rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .room-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1a3d7c;
        margin-bottom: 0.25rem;
    }

    .room-type {
        font-size: 0.95rem;
        color: #6c757d;
    }

    .room-description {
        font-size: 0.9rem;
        color: #495057;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0.5rem 0;
    }

    .room-price {
        font-size: 1rem;
        font-weight: 600;
        color: #28a745;
        margin-top: auto;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .room-price small {
        font-weight: 400;
        color: #6c757d;
    }

    @media (max-width: 768px) {
        .room-img-container {
            height: 150px;
        }
    }
    
</style>

<div class="content py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Page Title -->
            <div class="mb-4">
                <h2 class="mb-1">Our Rooms</h2>
                    <p class="text-muted mb-0">Choose the perfect room for your stay</p>
            </div>
            <div class="room-list">
                <?php 
                $rooms = $conn->query("SELECT * FROM `room_list` WHERE delete_flag = 0 AND `status` = 1 ORDER BY `name` ASC");
                while($row = $rooms->fetch_assoc()):
                    $row['description'] = strip_tags(html_entity_decode($row['description']));
                ?>
                <a href="./view_room&id=<?= $row['id'] ?>" class="room-item">
                    <div class="room-img-container">
                        <img src="<?= validate_image($row['image_path']) ?>" class="room-img" alt="<?= $row['name'] ?> Image">
                        <div class="room-img-overlay"></div>
                        <?php if($row['is_new'] ?? false): ?>
                            <div class="room-badge">New</div>
                        <?php elseif($row['is_featured'] ?? false): ?>
                            <div class="room-badge">Best Seller</div>
                        <?php endif; ?>
                    </div>
                    <div class="room-content">
                        <h3 class="room-title"><?= $row['name'] ?></h3>
                        <div class="room-type"><i class="fa fa-bed me-1"></i><?= $row['type'] ?></div>
                        <div class="room-description"><?= html_entity_decode($row['description']) ?></div>
                        <div class="room-price"><i class="fa fa-tag text-muted"></i><?= number_format($row['price'],2) ?>/ <small>day</small></div>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#filter-schedule').submit(function(e){
            e.preventDefault();
            location.href = "./?page=schedules&"+$(this).serialize();
        });
    });
</script>