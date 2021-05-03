<!-- Modal Login -->
    <div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('login'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="emailL" name="emailL" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="passwordL" name="passwordL" placeholder="Password...">
                        </div> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-success" type="submit" >Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login -->

    <!-- Modal Logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan mengakhiri sesi anda ?</p>
                </div>    
                <div class="modal-footer">
                <form method="post" action="<?= base_url('login/logout'); ?>">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-success" type="submit">Yakin</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Logout -->

    <!-- Modal Agen -->
    <div class="modal fade bd-example-modal-xl" id="agen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Agen</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a data-toggle="modal" data-target="#tambahAgen" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm " style="color: #ffff;">
                        <i class="fa fw fa-plus"></i> Tambah Agen</a> <br> <br>
                    <table class="table table-white">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Domisili</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($agent as $gen){
                        ?> 
                            <tr>
                            <th scope="row"><?= $gen['id_agen']; ?></th>
                            <td><?= $gen['kode']; ?></td>
                            <td><?= $gen['nama_agen']; ?></td>
                            <td><?= $gen['no_telp']; ?></td>
                            <td><?= $gen['domisili']; ?></td>
                            <td>
                                <button href=""  class="btn btn-warning ml-1 ModalUbahAgen" data-toggle="modal"
                                    data-target="#formUbahAgen" data-id="<?= $gen['id_agen']; ?>"><i class="fas fa-pen" data-dismiss="modal"></i>Edit</button>
                                <a href="<?=base_url(); ?>main/hapusAgent/<?= $gen['id_agen']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('Apakah anda yakin ingin menghapus data agen ini?');"></i>Hapus</button>
                            </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-success" type="submit" >Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agen -->

    <!-- Modal Ubah Agen -->
    <div class="modal fade" id="formUbahAgen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Agen</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('main/ubahAgent'); ?>">
                        <input type="text" name='idA' id='idA' value="1" hidden>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="kodeA" name="kodeA" placeholder="Kode...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="namaA" name="namaA" placeholder="Nama...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="noTelpA" name="noTelpA" placeholder="No Telp...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="domisiliA" name="domisiliA" placeholder="Domisili...">
                        </div>  
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-success" type="submit" >Ubah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ubah Agen -->

    <!-- Modal Tambah Agen -->
    <div class="modal fade" id="tambahAgen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Agen</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('main/tambahAgent'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="kodeB" name="kodeB" placeholder="Kode...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="namaB" name="namaB" placeholder="Nama...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="noTelpB" name="noTelpB" placeholder="No Telp...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="domisiliB" name="domisiliB" placeholder="Domisili...">
                        </div>  
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-success" type="submit" >Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Agen -->