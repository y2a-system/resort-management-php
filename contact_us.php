<section class="container py-5">
    <div class="row justify-content-center">

        <div class="col-xl-11">
            <div class="row g-5 align-items-stretch">

                <!-- LEFT : Company Info -->
                 <div class="col-lg-7">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 p-lg-5">

                            <h4 class="fw-bold mb-1">Send us a message</h4>
                            <p class="text-muted mb-4">
                                Fill in the form and we’ll get back to you shortly.
                            </p>

                            <?php if($_settings->chk_flashdata('pop_msg')): ?>
                                <div class="alert alert-success">
                                    <i class="fa fa-check-circle me-2"></i>
                                    <?= $_settings->flashdata('pop_msg') ?>
                                </div>
                            <?php endif; ?>

                            <form id="message-form">
                                <input type="hidden" name="id">

                                <div class="row g-4">

                                    <div class="col-md-6">
                                        <label class="form-label small fw-semibold">
                                            Full Name
                                        </label>
                                        <input type="text" class="form-control form-control-lg" name="fullname" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label small fw-semibold">
                                            Contact Number
                                        </label>
                                        <input type="text" class="form-control form-control-lg" name="contact" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label small fw-semibold">
                                            Email Address
                                        </label>
                                        <input type="email" class="form-control form-control-lg" name="email" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label small fw-semibold">
                                            Message
                                        </label>
                                        <textarea name="message" rows="4"
                                                  class="form-control form-control-lg"
                                                  placeholder="Tell us how we can help you"
                                                  required></textarea>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <button class="btn btn-secondary bg-navy btn-lg rounded-pill px-5">
                                            <i class="fa fa-paper-plane me-2"></i>
                                            Send Message
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                

                <!-- RIGHT : Contact Form -->
               <div class="col-lg-5">
                    <div class="h-100 p-4 p-lg-5 bg-light rounded-3 border">

                        <span class="badge bg-navy mb-3 px-3 py-2">
                            Contact Us
                        </span>

                        <h3 class="fw-bold mb-3">Let’s start a conversation</h3>
                        <p class="text-muted mb-4">
                            Reach out to our support or business team. We usually reply within one business day.
                        </p>
                        <div class="d-flex align-items-start mb-4">
                            <i class="fa fa-envelope text-navy fa-lg me-3 mt-1"></i>
                            <div>
                                <div class="fw-semibold">Email</div>
                                <div class="text-muted"><?= $_settings->info('email') ?></div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="fa fa-phone text-navy fa-lg me-3 mt-1"></i>
                            <div>
                                <div class="fw-semibold">Phone</div>
                                <div class="text-muted"><?= $_settings->info('contact') ?></div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="fa fa-map-marker-alt text-navy fa-lg me-3 mt-1"></i>
                            <div>
                                <div class="fw-semibold">Office</div>
                                <div class="text-muted"><?= $_settings->info('address') ?></div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Trust Signals -->
                        <div class="d-flex flex-wrap gap-3 small text-muted">
                            <span><i class="fa fa-shield-alt me-1"></i> Secure communication</span>
                            <span><i class="fa fa-clock me-1"></i> 24h response time</span>
                            <span><i class="fa fa-user-tie me-1"></i> Dedicated support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function(){
        $('#message-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_message",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html, body').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>