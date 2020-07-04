<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">GIVEWAY</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?php if($title == "Data User") {echo 'active';} ?>">
  <a class="nav-link" href="<?= base_url("Admin/Datauser"); ?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Data User</span></a>
</li>
<li class="nav-item <?php if($title == "Transaction") {echo 'active';} ?>">
  <a class="nav-link" href="<?= base_url("Admin/Transaction"); ?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Transaction</span></a>
</li>
<li class="nav-item <?php if($title == "List Package") {echo 'active';} ?>">
  <a class="nav-link" href="<?= base_url("Admin/Package"); ?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Package</span></a>
</li>
<li class="nav-item <?php if($title == "Message") {echo 'active';} ?>">
  <a class="nav-link" href="<?= base_url("Admin/Message"); ?>">
    <i class="fas fa-fw fa-envelope"></i>
    <span>Message</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>