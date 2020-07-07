<div class="container-fluid">

<!-- Page Heading -->
<div class="row my-4">
    <div class="col-sm-12">
    <h1 class="h3 mb-2 text-gray-800"><?=$title; ?></h1>
      <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus"></span> Add <?= $title; ?></a>
    </div>
  </div>
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
            <th>Name Package</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Name Package</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1; foreach ($dataPackage as $row): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $row->name_package; ?></td>
            <td><?= $row->description; ?></td>
            <td><?= $row->price; ?></td>
            <td>
                <a href="" data-toggle="modal" data-target="#editModal<?php echo $row->id_package;?>" class="btn btn-outline-info"><span class="fa fa-edit"></span></a>
                <button class="btn btn-outline-danger mx-2" onclick="deleteData('<?= base_url('Admin/Package/delete/' . $row->id_package) ?>','Hapus')"><span class="fa fa-trash"></span></button>
            </td>
          </tr>
          <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- Add Modal -->
          <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="judulModal">Add <?=$title; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                          <form action="<?php echo base_url() . 'Admin/Package/add'; ?>" method="post">
                              <?php validation_errors(); ?>
                              <div class="form-group">
                                  <label for="name_package">Package Name</label>
                                  <input class="form-control" id="name_package" name="name_package">
                              </div>
                              <div class="form-group">
                                  <label for="description">description</label>
                                  <input class="form-control" id="description" name="description">
                              </div>
                              <div class="form-group">
                                  <label for="price">Price</label>
                                  <input class="form-control" id="price" name="price">
                              </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="add" class="btn btn-primary">Add Data</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

<!-- Edit Modal -->
<?php
        foreach ($dataPackage as $row) :
          ?>
          <div class="modal fade" id="editModal<?php echo $row->id_package; ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="judulModal">Edit <?=$title; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                          <form action="<?php echo base_url() . 'Admin/Package/edit'; ?>" method="post">
                              <?php validation_errors(); ?>
                              <div class="form-group">
                                  <input class="form-control" id="id_package" name="id_package" value="<?php echo $row->id_package; ?>" readonly type="hidden">
                              </div>
                              <div class="form-group">
                                  <label for="name_package">Package Name</label>
                                  <input class="form-control" id="name_package" name="name_package" value="<?php echo $row->name_package; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="description">description</label>
                                  <input class="form-control" id="description" name="description" value="<?php echo $row->description; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="price">Package Name</label>
                                  <input class="form-control" id="price" name="price" value="<?php echo $row->price; ?>">
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