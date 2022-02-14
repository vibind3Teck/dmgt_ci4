<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <!-- <img src="layout/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">DMGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url('admin');?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DMGT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Brands');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Brand</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url('admin/Category');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Category</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Products');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Product</p>
                </a>
              </li> 
             
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Brands');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Users</p>
                </a>
              </li> 
 
            </ul>
          </li> 
<br>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Order Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="./productView.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All-Orders</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="./brandView.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today-Orders</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="./categoryView.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivered-Orders</p>
                </a>
              </li>    
            </ul>
          </li>
          
        </ul>
      </nav> 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


