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
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1; foreach ($dataMessage as $row): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $row->name; ?></td>
            <td><?= $row->email; ?></td>
            <td><?= $row->subject; ?></td>
            <td><?= $row->message; ?></td>
            <td>
                
                <button class="btn btn-outline-danger mx-2" onclick="deleteData('<?= base_url('Admin/Message/delete/' . $row->id_contact) ?>','Hapus')"><span class="fa fa-trash"></span></button>
            </td>
          </tr>
          <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

