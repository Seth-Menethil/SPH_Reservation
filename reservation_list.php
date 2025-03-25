<?php
include "connection/dbconn.php";

// 2. Fetch the records
$sql = "SELECT * FROM sph_reservation";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/img/Logo.png" type="image/x-icon">
  <title>Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/CSS/adminlte.min.css">
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link rel="shortcut icon" href="assets/img/address-book-solid.svg" type="image/x-icon">
  <script src="function/logout.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <style>
    .form-container {
      display: inline-block;
      vertical-align: top;
      /* Align forms at the top */
    }

    .row {
      display: flex;
      justify-content: center;
      /* Center horizontally */
      align-items: center;
      /* Center vertically */
      height: 100%;
      /* Ensure the row takes the full height of its container */
    }

    table {
      width: auto;
      max-width: 1000px;
      margin: 0 auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      padding: 20px;
      text-align: center;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 20px;
      text-align: center;
      font-size: 1.2rem;
    }

    th {
      background-color: #f4f4f4;
    }

    .room-button {
      width: 150px;
      /* Fixed width */
      height: 75px;
      /* Fixed height */
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      text-overflow: ellipsis;
      /* Handle long text gracefully */
      white-space: wrap;
      /* Prevent wrapping */
      overflow: auto;
      /* Hide overflow if text is too long */
    }

    .room-button:disabled {
      background-color: #4CAF50;
      cursor: default;
    }

    @media (max-width: 768px) {
      .room-button {
        width: 120px;
        /* Adjust size for smaller screens */
        height: 45px;
        font-size: 0.9rem;
      }
    }

    @media (max-width: 480px) {
      .room-button {
        width: 100px;
        /* Adjust size for mobile phones */
        height: 40px;
        font-size: 0.8rem;
      }
    }
  </style>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" onclick="logout()" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">St. Paul Home</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <br>
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
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Personal Information</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="reservation.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reservation Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reservation List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Page 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a onclick="logout()" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row ml-4 mr-4 pt-4">
          <div class="table-container table table-responsive ">
            <!-- 3. Build the HTML table -->
            <table id="reservationTable" class="">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Arrival</th>
                  <th>Date Filed</th>
                  <th>Print</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($result->num_rows > 0): ?>
                  <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                      <td><?php echo htmlspecialchars($row['address']); ?></td>
                      <td><?php echo htmlspecialchars($row['email_id']); ?></td>
                      <td><?php echo htmlspecialchars($row['contact_no']); ?></td>
                      <td><?php echo htmlspecialchars($row['date_time_arrival']); ?></td>
                      <td><?php echo htmlspecialchars($row['date_filed']); ?></td>
                      <td>
                        <form action="reservation_print.php" method="POST">
                          <input type="hidden" value="<?php echo htmlspecialchars($row['reservation_id']); ?>" name="reservation_id">
                          <button class="btn btn-info" id="printBtn" name="reservation_list">Print Form</button>
                        </form>

                      </td>
                    </tr>
                  <?php endwhile; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="17">No records found.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2025 St. Paul University Philippines.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="assets/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.min.js"></script>


  <!-- 4. Include JS libraries at the bottom -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
  <!-- Bootstrap (Optional, if you use AdminLTE or Bootstrap styling) -->
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App (Optional) -->
  <script src="../assets/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
      // 5. Initialize DataTables
      $('#reservationTable').DataTable({
        "pageLength": 10, // default rows per page
        "lengthMenu": [5, 10, 25, 50, 100],
        // Additional DataTables options as needed
      });
    });
  </script>


</body>

</html>