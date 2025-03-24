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

  <style>
    .form-logo {
      max-width: 100px;
      float: right;
    }

    .print-only {
      display: none;
    }

    @media print {
      .no-print {
        display: none !important;
      }

      .print-only {
        display: block !important;
      }

      .print-container {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
      }

      .card {
        border: none !important;
        box-shadow: none !important;
      }

      .form-header {
        text-align: center;
        margin-bottom: 20px;
      }

      .print-logo {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 80px;
      }

      body {
        font-size: 12pt;
      }
    }

    .terms-text {
      height: 300px;
      overflow-y: auto;
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
                  <a href="reservation_list.php" class="nav-link">
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
        <!-- Print header - only visible when printing -->
        <div class="print-only form-header">
          <h3>St. Paul University Philippines</h3>
          <h4>Tuguegarao City, Cagayan 3500</h4>
          <h2>PERSONAL INFORMATION & RESERVATION FORM</h2>
          <img src="/api/placeholder/100/100" alt="University Logo" class="print-logo">
        </div>

        <div class="card">
          <div class="card-header no-print">
            <h3 class="card-title">Fill out all required information</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <!-- Note: The form now uses a submit button so that it automatically posts the data -->
            <form id="reservationForm" method="POST" action="functions/save_reservation.php">
              <!-- Form Header (visible in web view) -->
              <div class="row no-print">
                <div class="col-md-10">
                  <h4>PERSONAL INFORMATION & RESERVATION FORM</h4>
                  <p>St. Paul University Philippines - Tuguegarao City, Cagayan 3500</p>
                </div>
                <div class="col-md-2">
                  <img src="/api/placeholder/100/100" alt="University Logo" class="form-logo">
                </div>
              </div>

              <hr class="no-print">

              <!-- Personal Information Section -->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="name">NAME:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>GENDER:</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                      <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="address">ADDRESS:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter complete address">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="degree">DEGREE/PROFESSION:</label>
                    <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter degree/profession">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">EMAIL ID:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="dob">DATE OF BIRTH:</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="contactNo">CONTACT NO.:</label>
                    <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="religion">RELIGION:</label>
                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter religion">
                  </div>
                </div>
              </div>

              <!-- Civil Status Section -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>CIVIL STATUS:</label>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="civilStatus" id="single" value="Single">
                          <label class="form-check-label" for="single">Single</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="civilStatus" id="married" value="Married">
                          <label class="form-check-label" for="married">Married</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="civilStatus" id="widowed" value="Widowed">
                          <label class="form-check-label" for="widowed">Widowed</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="civilStatus" id="others" value="Others">
                          <label class="form-check-label" for="others">Others</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Arrival/Departure Section -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="arrivalDate">DATE & TIME OF ARRIVAL:</label>
                    <input type="datetime-local" class="form-control" id="arrivalDate" name="arrivalDate">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="departureDate">DATE & TIME OF DEPARTURE:</label>
                    <input type="datetime-local" class="form-control" id="departureDate" name="departureDate">
                  </div>
                </div>
              </div>

              <!-- Work Information Section -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nickname">NICKNAME:</label>
                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Enter nickname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="workPlace">WORK PLACE:</label>
                    <input type="text" class="form-control" id="workPlace" name="workPlace" placeholder="Enter workplace">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="profession">PROFESSION:</label>
                    <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter profession">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="department">DEPARTMENT RESPONSIBLE:</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter department">
                  </div>
                </div>
              </div>

              <!-- Terms and Conditions Section -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="termsCheck" name="termsCheck">
                      <label for="termsCheck" class="custom-control-label">I certify that all information entered in St. Paul University Philippines - St. Paul Home (SPH) / SPH forms by me are true and complete. I acknowledge to abide by the rules and regulations of the SPH - SPH. Finally, I understand to enter and conduct myself during my stay in the dormitory responsibly and absolve SPUP - SPH of any liability for injuries or mistakes occurring within.</label>
                    </div>
                    <button type="button" class="btn btn-link no-print" data-toggle="modal" data-target="#termsModal">
                      View Complete Terms and Conditions
                    </button>
                  </div>
                </div>
              </div>

              <!-- Signature Section -->
              <div class="row mt-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="signature">Signature Over Printed Name</label>
                    <input type="text" class="form-control" id="signature" name="signature" placeholder="Type your full name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date">Date Filed</label>
                    <input type="date" class="form-control" id="date" name="date">
                  </div>
                </div>
              </div>

              <!-- Form Actions -->
              <div class="row mt-4 no-print">
                <div class="col-md-12">
                  <!-- The submit button now has type="submit" so that the form posts to the backend -->
                  <button type="submit" class="btn btn-primary" id="submitBtn">Submit Form</button>
                  <button type="button" class="btn btn-info" id="printBtn">Print Form</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </div>
            </form>
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




</body>

</html>