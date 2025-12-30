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
    .room-container {
        display: flex;
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
    }
    .room-left, .room-right {
        flex: 1;
        min-width: 300px;
    }

    /* Room Image */
    #banner-img{
        width: 100%;
        max-height: 450px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        transition: transform 0.4s, box-shadow 0.4s;
    }
    #banner-img:hover{
        transform: scale(1.03);
        box-shadow: 0 12px 32px rgba(0,0,0,0.25);
    }

    /* Room Info Tiles */
    .room-info-row {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 1rem;
    }
    .room-info-item {
        flex: 1 1 45%;
        background: linear-gradient(145deg, #ffffff, #f1f3f6);
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .room-info-item:hover{
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    .room-info-item h6 {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }
    .room-info-item span {
        font-size: 1.2rem;
        font-weight: 700;
        color: #212529;
    }

    /* Status Badge */
    .badge-status{
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        border-radius: 50px;
    }

    /* Description Box */
    .room-description{
        background: #ffffff;
        padding: 1.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.05);
    }
    .room-description h6{
        font-weight: 600;
        color: #6c757d;
        margin-bottom: 0.5rem;
    }

    /* Buttons under description */
    .action-buttons {
        margin-top: 1rem;
        display: flex;
        gap: 0.5rem;
        justify-content: flex-end;
    }

    /* Card header */
    .card-header.bg-primary {
        background: linear-gradient(135deg,#0d6efd,#6610f2);
        color: #fff;
        font-weight: 600;
        font-size: 1.25rem;
        border-bottom: none;
    }

    /* Responsive adjustments */
    @media(max-width: 992px){
        .room-container{
            flex-direction: column-reverse;
        }
        .room-info-item {
            flex: 1 1 100%;
        }
    }
</style>

<div class="card shadow rounded-0 mb-5">
    <!-- Title -->
    <div class="card-header bg-dark text-white">
        <h4 class="card-title mb-0"><b>Room Details</b></h4>
    </div>

    <div class="card-body">
        <div class="room-container">
            <!-- Left Column: Description + Buttons -->
            <div class="room-left">
                <div class="room-description">
                    <h6 class="text-muted">Description</h6>
                    <div><?= isset($description) ? html_entity_decode($description) : "N/A" ?></div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-outline-primary btn-sm btn-flat" type="button" id="edit_room"><i class="fa fa-edit"></i> Edit</button>
                    <button class="btn btn-outline-danger btn-sm btn-flat" type="button" id="delete_room"><i class="fa fa-trash"></i> Delete</button>
                    <a class="btn btn-outline-secondary btn-sm btn-flat" href="./?route=rooms"><i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>

            <!-- Right Column: Image + Info Tiles -->
            <div class="room-right">
                <img src="<?= validate_image(isset($image_path) ? $image_path : "") ?>" alt="Room Image" class="img-fluid mb-3" id="banner-img">

                <div class="room-info-row">
                    <div class="room-info-item">
                        <h6>Room Name</h6>
                        <span><?= isset($name) ? $name : 'N/A' ?></span>
                    </div>
                    <div class="room-info-item">
                        <h6>Room Type</h6>
                        <span><?= isset($type) ? $type : 'N/A' ?></span>
                    </div>
                    <div class="room-info-item">
                        <h6>Price</h6>
                        <span><?= isset($price) ? number_format($price,2) : '0.00' ?></span>
                    </div>
                    <div class="room-info-item">
                        <h6>Status</h6>
                        <span>
                            <?php 
                                if(isset($status)){
                                    switch($status){
                                        case '1':
                                            echo '<span class="badge badge-success badge-status">Active</span>';
                                            break;
                                        case '0':
                                            echo '<span class="badge badge-danger badge-status">Inactive</span>';
                                            break;
                                        default:
                                            echo '<span class="badge badge-secondary badge-status">Unknown</span>';
                                    }
                                }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function delete_room(){
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Master.php?f=delete_room",
            method:"POST",
            data:{id: '<?= isset($id) ? $id :'' ?>'},
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("An error occurred.",'error');
                end_loader();
            },
            success:function(resp){
                if(typeof resp== 'object' && resp.status == 'success'){
                    location.href= './?route=rooms';
                }else{
                    alert_toast("An error occurred.",'error');
                    end_loader();
                }
            }
        })
    }

    $(function(){
        $('#edit_room').click(function(){
            uni_modal("Update Room Details","rooms/manage_room.php?id=<?= isset($id) ? $id : '' ?>",'large')
        })
        $('#delete_room').click(function(){
            _conf("Are you sure to delete this Room permanently?","delete_room",[])
        })
    })
</script>
