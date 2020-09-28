<?= $this->extend("layout/admin-template");
 $this->section('editContent');
 session()->set('isLoggedIn'); 
  ?>
<div class="container">
  <form action="<?= site_url('/update') ?>" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $employee_data['id']; ?>">
      <div class="form-group">
        <label for="">Full Name </label>
        <input type="text" name="fullName" class="form-control" value="<?php echo $employee_data['Name'] ?>">
      </div>
      <div clas="form-group">
          <label for="">Email Address </label>
          <input type="email" name="emailAddress" class="form-control" value="<?php echo $employee_data['Email'] ?>">
      </div>
      <div class="form-group">
          <label for="">Telephone </label>
          <input type="text" name="telNumber" class="form-control" value="<?php echo $employee_data['Tel_Number'] ?>">
      </div>
      <div class="form-group">
        <label for="">Residence</label>
        <input type="text" name="residence" class="form-control"  value="<?php echo $employee_data['Residence'] ?> ">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save Changes"/>
      </div>
  </form>

  <?= $this->endSection('editContent') ?>