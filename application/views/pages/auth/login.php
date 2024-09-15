    <main role="main" class="container">
        <?php $this->load->view('layouts/_alert') ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Formulir Login
                    </div>
                    <div class="card-body">
                        <?= form_open('login', ['method' => 'POST']);?>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <!-- <input type="email" name="label" id="email" class="form-control" required> -->
                            <?= form_input([
                                'type'          => 'email', 
                                'name'          => 'email', 
                                'value'         => $input->email,
                                'class'         => 'form-control',
                                'placeholder'   => 'Masukkan alamat email',
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
                            'placeholder'   => 'Masukkan password',
                            'required'      => true
                        ]);?>
                            <!-- <small class="form-text text-danger">Password harus diisi</small> -->
                            <?= form_error('password'); ?>
                        </div>

                        <button type="submit" class="btn btn-dark">Login</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>