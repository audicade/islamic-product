<!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row" style="">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="<?= base_url(''); ?>/assets/images/footer-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                        
                        <!-- <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About Us</h2>
                        <p>Ayo bergabung sekarang!! jangan sia-siakan kesempatan ini. Jika anda sekarang tidak segera bergabung mungkin tetangga anda atau sanak saudara anda akan mendahului anda.
                            jangan sampai ketinggalan!!</p>
                            <div style="text-align:center; margin-top:64px;">
                                    <a href="<?php echo $api ?>" target="_blank" class="main-button">Hubungi Kami!!</a>
                            </div>    
                        <!-- <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Islamic Business Landing Page

                        | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo And FA-Bro</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SweetAlert 2 -->
    <script src="<?= base_url()?>assets/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- jQuery -->
    <script src="<?= base_url(''); ?>/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url(''); ?>/assets/js/popper.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url(''); ?>/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/scrollreveal.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="<?= base_url(''); ?>/assets/js/custom.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/script.js"></script>


    <script>
        const flashData = $('.flash-data').data('flashdata');

        if(flashData){
            if(flashData == 'Password Salah!' || flashData == 'Akun Tidak Terdaftar!' || flashData == 'Form belum lengkap!' 
            || flashData == 'Requirement Terlampaui!'){
                Swal.fire({
                    title: '',
                    text: flashData,
                    icon: 'warning'
                });
            } else{
                Swal.fire({
                    title: '',
                    text: flashData,
                    icon: 'success'
                });
            }; 
        };
    </script>

</body>
</html>