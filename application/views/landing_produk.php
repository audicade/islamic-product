    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area bg-prod" id="welcome">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('bisnis');?>" nilai="0">
        </div>
        <?php 
            if(isset($_SESSION['bisnis'])){
                unset($_SESSION['bisnis']);
            }

            //preparing whatsapp message generator
            
        ?>
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1 style="font-size:49px">Produk <em>Halal</em> Dan <em>Bermanfaat</em></h1>
                        <p style="text-align: justify"><b style="font-size:28px"> British Propolis </b>adalah produk <b style="font-size:22px">herbal</b> yang memiliki beragam manfaat. 
                           <b style="font-size:28px"> British Propolis </b> yang merupakan salah satu produk hasil dari lebah sang serangga ajaib, sehingga aman dan halal untuk dikonsumsi.</b>.</p> 
                        <a href="<?php echo $api ?>" class="main-button-slider">Pesan Sekarang!!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Product Benefits Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="center-heading">
                <h2>Manfaat <em>British Propolis</em></h2>
            </div>
            <!-- List of benefits -->
            <div class="right-text offset-lg-1 mobile-bottom-fix">
                <ul style="list-style: circle !important">
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" style="padding:16px">
                        <div class="text">
                            <h4><em>Mengandung Ragam Mineral</em></h4>
                            <p>British Propolis mengandung beragam nutrisi yang sangat bermanfaat bagi tubuh. 
                                Ragam nutrisi yang terkandung antara lain adalah karbohidrat, protein, magnesium, kalium zat besi kandungan nutrisi tersebut sangatlah bagus untuk memenuhi kebutuhan mineral dalam tubuh.</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s" style="padding:16px">
                        <div class="text">
                            <h4><em>Mengandung Ragam Vitamin</em></h4>
                            <p>Selain Mineral yang berguna bagi tubuh, British Propolis juga mengandung beragam vitamin. 
                                Ragam vitamin yang terkandung antara lain adalah vitamin B yang baik untuk kesehatan syaraf, Vitamin C yang berfungsi untuk meningkatkan imun tubuh, dan Vitamin E yang baik untuk kesehatan kulit.</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" style="padding:16px">
                        <div class="text">
                            <h4><em>Menyembuhkan Luka di Kulit</em></h4>
                            <p>Manfaat propolis dalam menyembuhkan luka pada kulit sudah dilakukan sejak zaman dahulu. Propolis umumnya digunakan untuk menyembuhkan luka di kulit, termasuk luka bakar ringan.</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" style="padding:16px">
                        <div class="text">
                            <h4><em>Mengontrol Kadar Gula dan Kolesterol</em></h4>
                            <p>Bukan menjadi rahasia umum, alasan masyarakat untuk mengkonsumsi propolis adalah untuk mengurangi kadar gula dan kolesterol dalam darah dan itu sudah terbukti secara klinis!!</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" style="padding:16px">
                        <div class="text">
                            <h4><em>Menghambat Pertumbuhan Sel Kanker</em></h4>
                            <p>Propolis juga dapat mencegah tumbuhnya sel kanker. Hal ini dikarenakan propolis mengandung senyawa antioksidan yang membantu tubuh untuk menangkal radikal bebas.</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" style="padding:16px">
                        <div class="text">
                            <h4><em>Menyembuhkan Luka di Kulit</em></h4>
                            <p>Manfaat propolis dalam menyembuhkan luka pada kulit sudah dilakukan sejak zaman dahulu. Propolis umumnya digunakan untuk menyembuhkan luka di kulit, termasuk luka bakar ringan.</p>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" style="padding:16px">
                        <div class="text">
                            <h4><em>Menjaga Otak Tetap Sehat</em></h4>
                            <p>Propolis mengandung zat anti radang yang bersama dengan senyawa antioksidan dapat membantu tubuh untuk memperbaiki jaringan syaraf otak yang rusak, sehingga dapat memberikan efek meningkatkan daya ingat penggunanya!!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ***** Product Benefits End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Product Inroduction start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="center-heading">
                <h2>Mengapa Memilih <em>British Propolis</em>?</h2>
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
                                <p style="text-align:justify">British propolis sudah <a rel="nofollow" href="http://www.halalmui.org/mui14/searchproduk/search?kategori=nama_produk&katakunci=british+propolis" target="_blank">lulus LPPOM Majelis Ulama Indonesia</a>. Sehingga British Propolis dapat dengan nyaman dikonsumsi oleh konsumen muslim.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img style="margin-left:8px; margin-top:12px" width=85px height=85px src="<?= base_url(''); ?>/assets/images/benefit-icon-02.png" alt="">
                            <div class="text">
                                <h4>TERUJI KLINIS</h4>
                                <p style="text-align:justify">British Propolis sudah teruji klinis sebagai produk herbal yang ampuh mengatasi berbagai masalah kesehatan. Cek
                                <a rel="nofollow" href="https://www.alodokter.com/kenyataan-mengenai-propolis" target="_blank">Disini</a> untuk tahu lebih banyak</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img width=100px height=100px src="<?= base_url(''); ?>/assets/images/benefit-icon-03.png" alt="">
                            <div class="text">
                                <h4>NYAMAN DIKONSUMSI</h4>
                                <p style="text-align:justify"   >British Propolis merupakan produk herbal hasil dari lebah. Selain memiliki banyak manfaat British Propolis tentu nyaman dan aman untuk dikonsumsi.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Introduction End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials" style="margin-top:128px; margin-left:-48px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Pengalaman <b>Sehat</b> Bersama <em>British Propolis</em></h2>
                        <p>Inilah testimoni dari beberapa konsumen yang telah menggunakan <b>British Propolis</b>.</p> &nbsp;
                        
                            <?php
                                if($this->session->userdata('admin_id')) :
                            ?>
                            <div class="centre">
                                <a href="" data-toggle="modal" data-target="#testimoniP">
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
                            foreach ($testi['data'] as $row){
                        ?>
                                <div class='item service-item'>
                                    <div class='testimonial-content'>
                                        <i><img src="<?= base_url('/assets/uploads/'); ?><?php echo($row->url_testimoni)?>" alt='Author images' style="width: 100%"></i>
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
    <div class="modal fade" id="testimoniP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Testimoni</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" method="post" action="<?= base_url('produk/tambahTesti'); ?>" enctype="multipart/form-data">
                    <div class="form-group" style="text-align:center">
                        <img src="<?= base_url()?>assets/uploads/blank.png" alt="..." id="outputTestimoni2" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 250px; "><br>
                        <label for="exampleFormControlFile1">Upload Foto Testimoni</label><br>    
                        <small class="form-text text-danger">Ukuran maksimal Foto 1920x1080 pixel, Berformat JPG atau PNG, 10MB</small>
                        <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control " id="idTP" name="idTP" placeholder="Deskripsi" required>
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control " id="namaTP" name="namaTP" placeholder="Deskripsi" required>
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
        var output = document.getElementById('outputTestimoni2');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    </script>