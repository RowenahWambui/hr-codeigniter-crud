<h3>Employee Details</h3>
<a href="<?= site_url('employees/create') ?>" >Add new Employee Details </a>
<table border="1" >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone Number</th>
        <th>Residence</th>
        <th>Action</th>
    </tr>
    <?php if ($employees) : ?>
        <?php foreach($employees as $employee): ?>
            <tr>
                <td><?= $employee['id'] ?></td>
                <td><?=$employee['Name'] ?></td>
                <td><?= $employee['Email'] ?></td>
                <td><?=$employee['Tel_Number'] ?></td>
                <td><?=$employee['Residence'] ?></td>
                <td>
                    <a href="<?php echo base_url("edit/".$employee['id']); ?>">Edit </a> | 
                    <a href="<?php echo base_url("delete/".$employee['id']); ?>">Delete</a></td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
</table>