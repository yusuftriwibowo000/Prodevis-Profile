<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$title; ?></h1>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Package</th>
            <th>Duration</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Package</th>
            <th>Duration</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1; foreach ($dataUser as $row): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $row->username; ?></td>
            <td><?= $row->email; ?></td>
            <td><?= $row->name_package; ?></td>
            <td><?= $row->duration; ?></td>
            <td>
                <a href="" data-toggle="modal" data-target="#editModal<?php echo $row->id_user;?>" class="btn btn-outline-info"><span class="fa fa-edit"></span></a>
                <button class="btn btn-outline-danger mx-2" onclick="deleteData('<?= base_url('Admin/Datauser/delete/' . $row->id_user) ?>','Hapus')"><span class="fa fa-trash"></span></button>
            </td>
          </tr>
          <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

 <!-- Edit Modal -->
<?php
        foreach ($dataUser as $row) :
          ?>
          <div class="modal fade" id="editModal<?php echo $row->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="judulModal">Edit <?=$title; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                          <form action="<?php echo base_url() . 'Admin/Datauser/edit'; ?>" method="post">
                              <?php validation_errors(); ?>
                              <div class="form-group">
                                  <input class="form-control" id="id_user" name="id_user" value="<?php echo $row->id_user; ?>" readonly type="">
                              </div>
                              <div class="form-group">
                                  <label for="email">Username</label>
                                  <input class="form-control" id="username" name="username" value="<?php echo $row->username; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="email">Package Name</label>
                                  <input class="form-control" id="package" name="package" value="<?php echo $row->name_package; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="email">Duration</label>
                                  <input class="form-control" id="duration" name="duration" value="<?php echo $row->duration; ?>">
                              </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="add" class="btn btn-primary">Update Data</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      <?php endforeach; ?> 