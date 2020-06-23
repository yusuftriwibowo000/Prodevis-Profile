<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('modul_admin/head'); ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('modul_admin/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('modul_admin/topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php $this->load->view($content); ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php $this->load->view('modul_admin/footer'); ?>

</body>

</html>