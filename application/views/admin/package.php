<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$title; ?></h1>


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
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Name Package</th>
            <th>Description</th>
            <th>Price</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1; foreach ($dataPackage as $row): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $row->name_package; ?></td>
            <td><?= $row->description; ?></td>
            <td><?= $row->price; ?></td>
          </tr>
          <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>