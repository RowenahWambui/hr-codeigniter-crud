<?= $this->extend("layout/admin-template"); ?>
<?= $this->section('content') ?>
<div class="container">
    <h3>Employee Details</h3>
    <button type="button" class="float-right btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new Employee Details</button>

    <table class="table" >
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
                      <a href="<?php echo base_url("edit/".$employee['id']); ?>" ><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal">Edit</button> </a> | 
                      <a href="<?php echo base_url("delete/".$employee['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </table>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Employee Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= site_url('/save') ?>" method="post">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text"  name="fullName" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="emailAddress" class="form-control"  >
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="telNumber" class="form-control"  />
                </div>
                <div class="form-group">
                    <label for="">Residence</label>
                    <input type="text" name="residence" class="form-control" />
                </div>

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Save" >
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

           
              <!-- End of Modal -->

        
  </div>
<?= $this->endSection('content') ?>