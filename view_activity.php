<?php
require_once('./config.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
if($id){
    $stmt = $conn->prepare("SELECT * FROM `activity_list` WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();
    if($res){
        foreach($res as $k => $v){
            $$k = $v;
        }
    }
    $stmt->close();
}
?>
<style>
    /* Modal fade-in animation */
    #uni_modal .modal-content {
        animation: fadeIn 0.4s ease-in-out;
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(-10px);}
        to {opacity: 1; transform: translateY(0);}
    }

    /* Activity Image */
    #banner-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center center;
        border-radius: 8px;
        margin-bottom: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    #banner-img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }

    /* General styling */
    #uni_modal .modal-footer {
        display: none;
    }
    dt {
        font-size: 0.9rem;
        color: #6c757d;
    }
    dd {
        margin-left: 0;
    }
    .activity-badge {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
    }
    .description-box {
        background-color: #f8f9fa;
        padding: 1rem;
        border-radius: 6px;
        margin-top: 0.5rem;
        line-height: 1.5;
    }
</style>

<div class="container-fluid">
    <!-- Image -->
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 col-sm-12">
            <img src="<?= validate_image(isset($image_path) ? $image_path : "") ?>" alt="Activity Image" class="img-thumbnail" id="banner-img">
        </div>
    </div>

    <!-- Activity Info -->
    <div class="row mb-3">
        <div class="col-md-6 col-sm-12 mb-2">
            <dl>
                <dt>Activity Name</dt>
                <dd class="fs-5 fw-bold"><?= isset($name) ? $name : 'N/A' ?></dd>
            </dl>
        </div>
        <div class="col-md-6 col-sm-12 mb-2">
            <dl>
                <dt>Status</dt>
                <dd>
                    <?php 
                    if(isset($status)){
                        if($status == '1'){
                            echo '<span class="badge bg-success rounded-pill activity-badge">Active</span>';
                        } elseif($status == '0'){
                            echo '<span class="badge bg-danger rounded-pill activity-badge">Inactive</span>';
                        }
                    } else {
                        echo '<span class="badge bg-secondary rounded-pill activity-badge">Unknown</span>';
                    }
                    ?>
                </dd>
            </dl>
        </div>
    </div>

    <!-- Description -->
    <div class="row mb-3">
        <div class="col-12">
            <dt class="text-muted">Description</dt>
            <div class="description-box">
                <?= isset($description) ? html_entity_decode($description) : "N/A" ?>
            </div>
        </div>
    </div>

    <!-- Close Button -->
    <div class="text-end">
        <button class="btn btn-dark btn-sm btn-flat" type="button" data-dismiss="modal">
            <i class="fa fa-times"></i> Close
        </button>
    </div>
</div>
