    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome"">
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
                        <p>Perusahaan kami menggunakan basis pemasaran <b style="font-size:24px">terpusat</b>, yaitu adanya agen pada daerah masing-masing dengan produk yang dipasok dari <b style="font-size:20px">pusat</b> 
                        sehingga kami bukanlah perusahaan berbasis <b style=><del>Multi Level Marketing</del></b>.</p> 
                        <a href="http://api.whatsapp.com/send?phone=6281230425724&text=Test%20auto%20chat%20web%20Islamic" target="_blank" class="main-button-slider"><strong>Mulai berbisnis!</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Business Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="center-heading">
                <h2><em>Keuntungan</em> Berbisnis Bersama Kami</h2>
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
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="center-heading">
                <h2><em>Produk</em> Kami</h2>
            </div>
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?= base_url(''); ?>/assets/images/left-image-new.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?= base_url(''); ?>/assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Vestibulum pulvinar rhoncus</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> us for
                            additional licensing of our template or to get a PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?= base_url(''); ?>/assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Sed blandit quam in velit</h4>
                                <p>You can <a rel="nofollow"
                                        href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                    magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?= base_url(''); ?>/assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Aenean faucibus venenatis</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                    maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Testimoni</h2>
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
                                            <h4 class="author" style="padding-bottom:16px"><?php echo $row->nama_pelanggan ?></h4>
                                            <i><img src="<?= base_url(''); ?><?php echo($row->url_testimoni)?>" alt='Author images'></i>
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

    <!-- Modal Tambah Testimoni-->
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
                        <input type="text" class="form-control " id="namaP" name="namaP" placeholder="Nama Pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_user">Tipe User</label>
                        <select id="tipeUser" name="tipe_user" data-placeholder="Tipe User ..." require>
                            <option value="">Tipe user</option>
                            <option value="1">Dosen</option>
                            <option value="2">Mahasiswa</option>
                        </select>
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