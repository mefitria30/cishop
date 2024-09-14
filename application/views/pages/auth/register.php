<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulis Registrasi
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']); ?>
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
                            'placeholder'   => 'Masukkan password minimal 8 karakter',
                            'required'      => true
                        ]);?>
                        <!-- <small class="form-text text-danger">Password harus diisi</small> -->
                        <?= form_error('password'); ?>
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi-password">Konfirmasi Password</label>
                        <!-- <input type="password" name="konfirmasi-password" id="konfirmasi-password" class="form-control"
                            required> -->
                        <?= form_password('password_confirmation', '', [
                            'class'         => 'form-control',
                            'placeholder'   => 'Masukkan password yang sama',
                            'required'      => true,
                        ]);?>
                        <!-- <small class="form-text text-danger">Password harus sama</small> -->
                        <?= form_error('password_confirmation'); ?>
                    </div>

                    <button type="submit" class="btn btn-dark">Register</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>