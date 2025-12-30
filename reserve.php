<style>
    /* Hide modal footer */
    #uni_modal .modal-footer {
        display: none;
    }

    /* Custom fieldset styling */
    fieldset {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
        background-color: #f9f9f9;
    }

    legend {
        width: auto;
        padding: 0 10px;
        font-weight: 600;
        font-size: 1rem;
        color: #495057;
    }

    /* Input spacing */
    .form-control-border {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 0.4rem 0.6rem;
    }

    /* Small labels below inputs */
    .input-label {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
        display: block;
    }

    /* Buttons styling */
    .btn-flat {
        border-radius: 5px;
        padding: 0.35rem 0.75rem;
    }

    /* Form container */
    .container-fluid {
        padding: 1rem 2rem;
    }
</style>

<div class="container-fluid">
    <form action="" id="reserve-form" class="needs-validation" novalidate>
        <input type="hidden" name="id">
        <input type="hidden" name="room_id" value="<?= isset($_GET['rid']) ? $_GET['rid'] : '' ?>">

        <!-- Reservation Dates -->
        <fieldset>
            <legend>Reservation Date</legend>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="date" name="check_in" min="<?= date('Y-m-d',strtotime(date('Y-m-d')." +1 day")) ?>" class="form-control form-control-sm form-control-border" required>
                    <span class="input-label">Check-in Date</span>
                </div>
                <div class="col-md-6">
                    <input type="date" name="check_out" class="form-control form-control-sm form-control-border" min="<?= date('Y-m-d',strtotime(date('Y-m-d')." +2 days")) ?>" required>
                    <span class="input-label">Check-out Date</span>
                </div>
            </div>
        </fieldset>

        <!-- Reservor Details -->
        <fieldset>
            <legend>Reservor Details</legend>
            <div class="row g-3 mb-2">
                <div class="col-md-8">
                    <input type="text" name="fullname" class="form-control form-control-sm form-control-border" placeholder="John D Smith" required>
                    <span class="input-label">Fullname</span>
                </div>
            </div>
            <div class="row g-3 mb-2">
                <div class="col-md-6">
                    <input type="text" name="contact" class="form-control form-control-sm form-control-border" placeholder="09xxxxxxxxxxx" required>
                    <span class="input-label">Contact #</span>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control form-control-sm form-control-border" placeholder="jsmith@sample.com" required>
                    <span class="input-label">Email</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea rows="3" name="address" class="form-control form-control-sm form-control-border" placeholder="Block 23 Lot 6, Her Subd., Down There City, Anywhere, 2306" required></textarea>
                    <span class="input-label">Address</span>
                </div>
            </div>
        </fieldset>

        <hr>

        <!-- Form Actions -->
        <div class="d-flex justify-content-end gap-2">
            <button class="btn btn-primary btn-flat btn-sm">Submit Reservation</button>
            <button class="btn btn-dark btn-flat btn-sm" type="button" data-dismiss='modal'><i class="fa fa-times"></i> Close</button>
        </div>
    </form>
</div>

<script>
    $(function(){
        $('#reserve-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
            el.addClass("pop-msg alert")
            el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_reservation",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert_toast("An error occurred",'error');
                    end_loader();
                },
                success: function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    } else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    } else {
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>