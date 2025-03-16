    <main role="main" class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <span>Formulir Pengguna</span>
                    </div>

                    <div class="card-body">
                        <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                        <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <!-- <input type="text" name="label" id="nama" class="form-control" required autofocus> -->
                            <?= form_input('name', $input->name, [
                                'class'         => 'form-control', 
                                'required'      => true,
                                'autofocus'     => true
                                ])?>
                            <!-- <small class="form-text text-danger">Nama harus diisi</small> -->
                            <?= form_error('name');?>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <!-- <input type="email" name="label" id="email" class="form-control" required> -->
                            <?= form_input([
                                'type'          => 'email', 
                                'name'          => 'email', 
                                'value'         => $input->email,
                                'class'         => 'form-control',
                                'placeholder'   => 'Masukkan alamat email aktif',
                                'required'      => true,
                            ]); ?>
                            <!-- <small class="form-text text-danger">Email harus diisi</small> -->
                            <?= form_error('email'); ?>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <!-- <input type="password" name="password" id="password" class="form-control" required> -->
                            <?= form_password('password', '', [
                            'class'         => 'form-control',
                            'placeholder'   => 'Masukkan password minimal 8 karakter'
                        ]);?>
                            <!-- <small class="form-text text-danger">Password harus diisi</small> -->
                            <?= form_error('password'); ?>
                        </div>

                        <div class="form-group">
                            <label for="role">Role</label>
                            <br>
                            <div class="form-check form-check-inline">

                                <?= form_radio([
                                    'name'=> 'role',
                                    'value'=> 'admin',
                                    'checked'=>$input->role == 'admin' ? true : false,
                                    'class'=>'form-check-input'
                                ])?>

                                <label for="role" class="form-check-label">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <?= form_radio([
                                    'name'=> 'role',
                                    'value'=> 'member',
                                    'checked'=>$input->role == 'member' ? true : false,
                                    'class'=>'form-check-input'
                                ])?>

                                <label for="role" class="form-check-label">Member</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <br>
                            <div class="form-check form-check-inline">

                                <?= form_radio([
                                    'name'=> 'is_active',
                                    'value'=>1,
                                    'checked'=>$input->is_active == 1 ? true : false,
                                    'class'=>'form-check-input'
                                ])?>

                                <label for="status" class="form-check-label">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <?= form_radio([
                                    'name'=> 'is_active',
                                    'value'=>0,
                                    'checked'=>$input->is_active == 0 ? true : false,
                                    'class'=>'form-check-input'
                                ])?>

                                <label for="status" class="form-check-label">Inactive</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Foto</label>
                            <?= form_upload('image')?>
                            <?php if($this->session->flashdata('image_error')) : ?>
                            <small class="form-text text-danger">
                                <?= $this->session->flashdata('image_error') ?>
                            </small>
                            <?php endif ?>

                            <?php if(isset($input->image)) : ?>
                            <img src="<?= base_url("/assets/images/user/$input->image") ?>" alt="" height="150">
                            <?php endif ?>
                        </div>

                        <button type="submit" class="btn btn-dark">Simpan</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </main>