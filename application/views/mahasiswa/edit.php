<div class="container">

    <div class="row mt-3 text-sm">
        <div class="col-md-6">

            <form action="<?= base_url('mahasiswa/update_data'); ?>" method="post" enctype="multipart/form-data">

                <?php foreach ($mahasiswa as $key) : ?>

                    <!-- hidden -->
                    <input type="hidden" name="id" id="id" value="<?= $key->id; ?>">
                    <input type="hidden" name="img_upload" id="img_upload" value="<?= $key->img_upload; ?>">
                    <!-- /.hidden -->

                    <!-- form -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= $key->username; ?>" class="form-control form-control-sm" id="username" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?= $key->password; ?>" class="form-control form-control-sm" id="password" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" value="<?= $key->fullname; ?>" class="form-control form-control-sm" id="fullname" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender :</label><br>
                        <?php if ($key->gender == "L") : ?>
                            <input type="radio" name="gender" id="gender1" value="L" placeholder="" checked> Laki-Laki <br>
                            <input type="radio" name="gender" id="gender2" value="P" placeholder=""> Perempuan
                        <?php else : ?>
                            <input type="radio" name="gender" id="gender1" value="L" placeholder=""> Laki-Laki <br>
                            <input type="radio" name="gender" id="gender2" value="P" placeholder="" checked> Perempuan
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea type="text" name="address" class="form-control form-control-sm" id="address" rows="2"><?= $key->address; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <?php if ($key->religion == "1") : ?>
                            <select name="religion" class="form-control form-control-sm" id="religion">
                                <option selected disabled>Pilih..</option>
                                <option value="1" selected>Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Katholik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                            <?php elseif ($key->religion == "2") : ?>
                                <select name="religion" class="form-control form-control-sm" id="religion">
                                    <option selected disabled>Pilih..</option>
                                    <option value="1">Islam</option>
                                    <option value="2" selected>Kristen</option>
                                    <option value="3">Katholik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Budha</option>
                                <?php elseif ($key->religion == "3") : ?>
                                    <select name="religion" class="form-control form-control-sm" id="religion">
                                        <option selected disabled>Pilih..</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Kristen</option>
                                        <option value="3" selected>Katholik</option>
                                        <option value="4">Hindu</option>
                                        <option value="5">Budha</option>
                                    <?php elseif ($key->religion == "4") : ?>
                                        <select name="religion" class="form-control form-control-sm" id="religion">
                                            <option selected disabled>Pilih..</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen</option>
                                            <option value="3">Katholik</option>
                                            <option value="4" selected>Hindu</option>
                                            <option value="5">Budha</option>
                                        <?php else : ?>
                                            <select name="religion" class="form-control form-control-sm" id="religion">
                                                <option selected disabled>Pilih..</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Katholik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5" selected>Budha</option>
                                            <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <?php if ($key->is_active != "0") : ?>
                            <input type="checkbox" name="is_active" id="is_active" value="1" placeholder="" checked>
                            <label for="is_active">Active</label>
                        <?php else : ?>
                            <input type="checkbox" name="is_active" id="is_active" value="1" placeholder="">
                            <label for="is_active">Active</label>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="img_upload">Img Upload</label>
                        <input type="file" name="img_upload" class="form-control form-control-sm mb-2" id="img_upload" placeholder="">
                        <?php if ($key->img_upload != "") : ?>
                            <img src="<?= base_url('assets/images/' . $key->img_upload); ?>" alt="" height="100" width="100">
                            <small class="text-success"><?= $key->img_upload; ?></small>
                        <?php endif; ?>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-sm btn-danger" data-dismiss="modal">reset</button>
                        <button type="submit" id="btn_tambah" class="btn btn-sm btn-info">save</button>
                    </div>

            </form>
            <!-- /.form -->

        <?php endforeach; ?>

        </div>
    </div>

</div>