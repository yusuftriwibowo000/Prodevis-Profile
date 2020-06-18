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
            <th>User</th>
            <th>Package</th>
            <th>Total Price</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>User</th>
            <th>Package</th>
            <th>Total Price</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1; foreach ($dataTransaction as $row): ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $row->user; ?></td>
            <td><?= $row->name_package; ?></td>
            <td><?= $row->total_price; ?></td>
            <td><?= $row->date; ?></td>
            <td><?= $row->status; ?></td>
          </tr>
          <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>