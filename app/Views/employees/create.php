<h3>Add new</h3>
<form action="<?= site_url('/save') ?>" method="post">
    <label for="">Full Name :</label>
    <input type="text"  name="fullName" placeholder="Name">
    <br>
    <label for="">Email Address :</label>
    <input type="email" name="emailAddress" placeholder="Email address">
    <br>
    <label for="">Telephone :</label>
    <input type="text" name="telNumber" placeholder="Telephone Number">
    <br>
    <label for="">Residence:</label>
    <input type="text" name="residence" placeholder="Residence">
    <br>
    <input type="submit" value="Save">
</form>