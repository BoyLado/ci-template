<!-- Put your sidebar here! -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Arkonor LLC - CRM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Roger Porto Jr.</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" id="nav_marketing" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              MARKETING
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/campaigns" id="nav_campaigns" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Campaigns</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/contacts" id="nav_contacts" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/organizations" id="nav_organizations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Organizations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="nav_thirdParties" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Third Parties</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" id="nav_employees" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              EMPLOYEES
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" id="nav_hired" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hired</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="nav_interns" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Interns</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" id="nav_agenda" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              AGENDA
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" id="nav_calendar" class="nav-link">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
              CALENDAR
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" id="nav_documents" class="nav-link">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>
              DOCUMENTS
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" id="nav_tools" class="nav-link">
            <i class="nav-icon fas fa-tools"></i>
            <p>
              TOOLS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>index.php/email-template" id="nav_emailTemplate" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Email Template</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" id="nav_ourSites" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Our Sites</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>index.php/users" id="nav_users" class="nav-link">
            <i class="nav-icon fas fa-user-check"></i>
            <p>
              USERS
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>index.php/dashboard" id="nav_users" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              DASHBOARD
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>