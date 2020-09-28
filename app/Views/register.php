<?= $this->extend("layout/header"); ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mg-5 pt-3 pb-3 bg-white form-wrapper">
        <div class="container">
                <div class="card">
                   <div class="card-header">             
                        <h1 class="text-center">Register</h1>
                    </div>
                <?= form_open() ?>
                <!-- <form action="/ci-hr-crud/register" method="post"> -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="First Name">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="<?= set_value('fname') ?>" >
                        </div>
                        <div class="form-group">
                            <label for="Last Name">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="<?= set_value('lname') ?>">
                        </div>
                        <div class="form-group">
                            <label for="Email address">Email address</label>
                            <input type="email" class="form-control" name="email"id="email" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <div class="form-group">
                            <label for="Password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPass">
                        </div>
                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <input type="Submit" class="btn btn-primary" value="Register">
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a href="/ci-hr-crud/login">Already have an account</a>
                            </div>
                        </div>
                    </div>
                <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>
