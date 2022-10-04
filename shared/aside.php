  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="/instant/admin-panel/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>admin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/instant/admin-panel/admin/add.php">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/admin/list.php">
              <i class="bi bi-circle"></i><span>list</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/role/add.php">
              <i class="bi bi-circle"></i><span>role</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>instractor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/instant/admin-panel/instractor/add.php">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/instractor/list.php">
              <i class="bi bi-circle"></i><span>list</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/track/add.php">
              <i class="bi bi-circle"></i><span>track</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Diploma</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/instant/admin-panel/diploma/add.php">
              <i class="bi bi-circle"></i><span>Add Diploma</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/diploma/list.php">
              <i class="bi bi-circle"></i><span>List Diploma</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/groups/add.php">
              <i class="bi bi-circle"></i><span>groups</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel/dip_with_instractor/add.php">
              <i class="bi bi-circle"></i><span>dip with instractor</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>content</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/instant/admin-panel/content/add.php">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
          <!-- <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li> -->
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>tasks</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/instant/admin-panel//tasks/add.php">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="/instant/admin-panel//tasks/list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Icons Nav -->
      <!-- End Tables Nav -->
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/instant/admin-panel/massages/list.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
      <!-- End Contact Page Nav -->
      <li class="nav-item">
        <?php
          if(isset($_SESSION['admin']) || isset($_SESSION['instractor'])):
        ?>
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
        <?php else : ?>
          <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
        <?php endif; ?>
      </li>
      <!-- End Login Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->