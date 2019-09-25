<div class="container">

    <div class="row mt-3 text-sm">
        <div class="col-md-10">
            <h5><?= $title; ?></h5>
        </div>
    </div>

    <!-- button -->
    <div class="row mt-2 text-sm">
        <div class="col">
            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#target"><i class="fa fa-plus-circle"> add</i></button>
        </div>
    </div>
    <!-- /.button -->

    <!-- table -->
    <div class="row mt-3 text-sm">
        <div class="col-md-10">

            <table class="table table-sm table-striped table-bordered">
                <thead class="table-info">
                    <tr>
                        <td scope="col" class="text-center">Id</td>
                        <td scope="col" class="text-center" colspan="1">Action</td>
                        <td scope="col" class="text-center">Username</td>
                        <td scope="col" class="text-center">Password</td>
                        <td scope="col" class="text-center">Fullname</td>
                        <td scope="col" class="text-center">Gender</td>
                        <td scope="col" class="text-center">Address</td>
                        <td scope="col" class="text-center">Religion</td>
                        <td scope="col" class="text-center">Is Active</td>
                        <td scope="col" class="text-center">Img Upload</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $key) : ?>
                        <tr>
                            <td scope="col" class="text-center"><?= $no++; ?></td>
                            <!-- button -->
                            <td scope="col" class="text-center">
                                <a href="<?= base_url('mahasiswa/hapus_data/' . $key->id); ?>" onclick="return confirm('apakah anda yakin!!')" class="badge badge-danger"><i class="fa fa-trash-o"></i></a>
                                <a href="<?= base_url('mahasiswa/edit_data/' . $key->id); ?>" class="badge badge-success"><i class="fa fa-edit"></i></a>
                            </td>
                            <!-- /.button -->
                            <td scope="col" class="text-center"><?= $key->username; ?></td>
                            <td scope="col" class="text-center"><?= $key->password; ?></td>
                            <td scope="col" class="text-center"><?= $key->fullname; ?></td>
                            <td scope="col" class="text-center"><?= $key->gender; ?></td>
                            <td scope="col" class="text-center"><?= $key->address; ?></td>
                            <td scope="col" class="text-center"><?= $key->religion; ?></td>
                            <td scope="col" class="text-center"><?= $key->is_active; ?></td>
                            <td scope="col" class="text-center"><img src="<?= base_url("assets/images/" . $key->img_upload); ?>"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.table -->

    <!-- Modal -->
    <div class="modal fade" id="target" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <!-- form -->
                    <form action="<?= base_url('mahasiswa/tambah_data'); ?>" method="post" enctype="multipart/form-data">

                        <!-- hidden -->
                        <input type="hidden" name="id" id="id" value="<?= $key->id; ?>">
                        <input type="hidden" name="img_upload" id="img_upload" value="<?= $key->img_upload; ?>">
                        <!-- /.hidden -->

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-sm" id="username" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control form-control-sm" id="fullname" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender :</label><br>
                            <input type="radio" name="gender" id="gender1" value="L" placeholder=""> Laki-Laki <br>
                            <input type="radio" name="gender" id="gender2" value="P" placeholder=""> Perempuan
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" name="address" class="form-control form-control-sm" id="address" rows="2"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select name="religion" class="form-control form-control-sm" id="religion">
                                <option selected disabled>Pilih..</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Katholik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="is_active" id="is_active" value="1" placeholder="">
                            <label for="is_active">Active</label>
                        </div>

                        <div class="form-group">
                            <label for="img_upload">Img Upload</label>
                            <input type="file" name="img_upload" class="form-control form-control-sm" id="img_upload" placeholder="">
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-sm btn-danger" data-dismiss="modal">reset</button>
                            <button type="submit" id="btn_tambah" class="btn btn-sm btn-info">save</button>
                        </div>

                    </form>
                    <!-- /.form -->

                </div>

            </div>
        </div>
    </div>
    <!-- /.modal -->

</div>