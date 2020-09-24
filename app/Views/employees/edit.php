<h3>Edit </h3>
<form action="<?= site_url('/update') ?>" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $employee_data['id']; ?>">
    <label for="">Full Name :</label>
    <input type="text" name="fullName" placeholder="Name" value="<?php echo $employee_data['Name'] ?>">
    <br>
    <label for="">Email Address :</label>
    <input type="email" name="emailAddress" placeholder="Email address" value="<?php echo $employee_data['Email'] ?>">
    <br>
    <label for="">Telephone :</label>
    <input type="text" name="telNumber" placeholder="Telephone Number" value="<?php echo $employee_data['Tel_Number'] ?>">
    <br>
    <label for="">Residence:</label>
    <input type="text" name="residence" placeholder="Residence"  value="<?php echo $employee_data['Residence'] ?> ">
    <input type="submit" value="Save">
</form>