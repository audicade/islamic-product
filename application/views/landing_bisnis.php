    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('bisnis');?>" nilai="0">
        </div>
        <?php 
            if(isset($_SESSION['bisnis'])){
                unset($_SESSION['bisnis']);
            }
        ?>
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Bisnis <em>MUDAH</em> & <em>HALAL</em></h1>
                        <p>Assalamu'alaikum Warahmatullahi Wabarakatuh.<br>
                        Nama Saya Ilham dan dalam sepuluh menit kedepan saya akan menunjukkan kepada anda cara berbisnis dengan mudah dan halal, tanpa menggunakan sistem <del>Multi-level Marketing</del></p>
                        <!-- <p>Perusahaan kami menggunakan basis pemasaran <b style="font-size:24px">terpusat</b>, yaitu adanya agen pada daerah masing-masing dengan produk yang dipasok dari <b style="font-size:20px">pusat</b> 
                        sehingga kami bukanlah perusahaan berbasis <b style=><del>Multi Level Marketing</del></b>.</p>  -->
                        <a href="http://api.whatsapp.com/send?phone=6281230425724&text=Test%20auto%20chat%20web%20Islamic" target="_blank" class="main-button-slider"><strong>Mulai berbisnis!</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Business Benefits Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="center-heading">
                <h2>Mengapa Berbisnis <em>Bersama Kami</em>?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-1.png" alt="">
                            <h4>Pelatihan Usaha</h4>
                            <p>Kami akan membantu anda untuk bersama-sama berkembang dalam bisnis dan pemasaran.</p>
                            <a href="#testimonials" class="main-button">
                                Baca Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-2.png" alt="">
                            <h4>Mudah Dilakukan</h4>
                            <p>Berbisnis dapat dilakukan dengan mudah. Dapat disesuaikan dengan kemampuan anda</p>
                            <a href="#testimonials" class="main-button">
                                Pahami Lebih Banyak
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-3.png" alt="">
                            <h4>Tanpa Resiko</h4>
                            <p>Kami garansi gagal uang kembali, Barang bisa ditukar uang kembali sesuai syarat yang berlaku.</p>
                            <a href="#testimonials" class="main-button">
                                Simak Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Business Benefits Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Product Inroduction start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="center-heading">
                <h2><em>Produk</em> Kami</h2>
            </div>
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?= base_url(''); ?>/assets/images/left-image-new.png" class="rounded img-fluid d-block mx-auto" alt="App">
                    <h4 style="text-align:center; padding-top:18px"><b><strong>BRITISH PROPOLIS</strong></b></h4>
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img width=100px height=100px src="<?= base_url(''); ?>/assets/images/benefit-icon-01.png" alt="">
                            <div class="text">
                                <h4>LULUS UJI LPPOM MUI</h4>
                                <p>British propolis sudah <a rel="nofollow" href="http://www.halalmui.org/mui14/searchproduk/search?kategori=nama_produk&katakunci=british+propolis" target="_blank">lulus LPPOM Majelis Ulama Indonesia</a>. Sehingga British Propolis dapat dengan nyaman dikonsumsi oleh konsumen muslim.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?= base_url(''); ?>/assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>TERUJI KLINIS</h4>
                                <p>British Propolis sudah teruji klinis sebagai produk herbal yang ampuh mengatasi berbagai masalah kesehatan. Cek
                                <a rel="nofollow" href="https://templatemo.com/tm-540-lava-landing-page" target="_blank">Disini</a> untuk tahu lebih banyak</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?= base_url(''); ?>/assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>PELUANG PASAR YANG LUAS</h4>
                                <p>Peluang pasar British Propolis sebagai produk kesehatan sangatlah luas. Masyarakat saat ini lebih sadar akan manfaat produk herbal.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Introduction End ***** -->


    <!-- ***** Seminar Info start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="center-heading">
                <h2>Seputar <em>Pelatihan Usaha</em></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-1.png" alt="">
                            <h4>Pelatihan Usaha</h4>
                            <p>Kami akan membantu anda untuk bersama-sama berkembang dalam bisnis dan pemasaran.</p>
                            <a href="#testimonials" class="main-button">
                                Baca Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-2.png" alt="">
                            <h4>Mudah Dilakukan</h4>
                            <p>Berbisnis dapat dilakukan dengan mudah. Dapat disesuaikan dengan kemampuan anda</p>
                            <a href="#testimonials" class="main-button">
                                Pahami Lebih Banyak
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="<?= base_url(''); ?>/assets/images/features-icon-3.png" alt="">
                            <h4>Tanpa Resiko</h4>
                            <p>Kami garansi gagal uang kembali, Barang bisa ditukar uang kembali sesuai syarat yang berlaku.</p>
                            <a href="#testimonials" class="main-button">
                                Simak Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Introduction End ***** -->
       
    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Pengalaman <em>Sukses</em> Bersama Kami</h2>
                        <p>Inilah testimoni dari beberapa rekan yang bekerja sama dengan kami.</p> &nbsp;
                        
                            <?php
                                if($this->session->userdata('admin_id')) :
                            ?>
                            <div class="centre">
                                <a href="" data-toggle="modal" data-target="#testimoni">
                                    <i class="fa fa-plus-circle" style="color: green; font-size: 50px;"></i>
                                </a>
                            </div>
                            <?php
                                else :
                            ?>
                            
                            <?php
                                endif;
                            ?>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <?php
                            foreach ($data as $row){
                        ?>
                                    <div class='item service-item'>
                                        <div class='testimonial-content'>
                                            <i><img src="<?= base_url('/assets/uploads/'); ?><?php echo($row->url_testimoni)?>" alt='Author images' style="width: 325px; height: 480px;"></i>
                                            <p style="text-align;justify"><strong><?php echo($row->highlights)?>.</strong></p>
                                        </div>
                                    </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- Modal Tambah Testimoni Start -->
    <div class="modal fade" id="testimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Testimoni</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" method="post" action="<?= base_url('main/tambahTesti'); ?>" enctype="multipart/form-data">
                    <div class="form-group" style="text-align:center">
                        <img src="<?= base_url()?>assets/uploads/blank.png" alt="..." id="outputTestimoni" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 250px; "><br>
                        <label for="exampleFormControlFile1">Upload Foto Testimoni</label><br>    
                        <small class="form-text text-danger">Ukuran maksimal Foto 1920x1080 pixel, Berformat JPG atau PNG, 10MB</small>
                        <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control " id="namaP" name="namaP" placeholder="Deskripsi" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>    
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Testimoni End-->


    <script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('outputTestimoni');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    </script>