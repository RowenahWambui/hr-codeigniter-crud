<?= $this->extend("layout/header") ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mg-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h1>Login</h1>
                <hr>
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <?= form_open() ?>
                <!-- <form action="/login" method="post"> -->
                    <div class="form-group">
                        <label for="Email address">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass">
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
                            <input type="Submit" class="btn btn-primary" value="Login">
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/ci-hr-crud/register">Don't have an account yet?</a>
                        </div>
                    </div>
                </form>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>
