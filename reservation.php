<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personal Information & Reservation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">

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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Main Sidebar Container (visible only in web view) -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 no-print">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">St. Paul University</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <li class="nav-item">
              <a href="index.php" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>Personal Information Form</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="reservation.php" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>Reservation Form</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <!-- Content Header -->
      <section class="content-header no-print">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Personal Information & Reservation Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Reservation Form</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid print-container">
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
      </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer no-print">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2025 <a href="#">St. Paul University</a>.</strong> All rights reserved.
    </footer>
  </div>

  <!-- Terms and Conditions Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="terms-text">
            <h5>Terms and Conditions for St. Paul University Philippines - St. Paul Home (SPH)</h5>
            <p><strong>1. INFORMATION ACCURACY</strong></p>
            <p>I certify that all information entered in St. Paul University Philippines - St. Paul Home (SPH) / SPH forms by me are true and complete. I acknowledge that providing false information may result in the immediate termination of my stay and possible additional consequences.</p>
            <p><strong>2. RULES AND REGULATIONS</strong></p>
            <p>I acknowledge to abide by the rules and regulations of the SPH - SPH, including but not limited to:</p>
            <ul>
              <li>Observing designated quiet hours</li>
              <li>Respecting common areas and other residents</li>
              <li>Following check-in and check-out procedures</li>
              <li>Adhering to visitor policies</li>
              <li>Maintaining cleanliness of assigned spaces</li>
              <li>Respecting curfew times if applicable</li>
            </ul>
            <p><strong>3. CONDUCT AND RESPONSIBILITY</strong></p>
            <p>I understand to enter and conduct myself during my stay in the dormitory responsibly and absolve SPUP - SPH of any liability for injuries or mistakes occurring within. I take full responsibility for my actions and behavior during my stay.</p>
            <p><strong>4. PROPERTY DAMAGE</strong></p>
            <p>I agree to be financially responsible for any damages caused by me to the property, furniture, or equipment during my stay. I will promptly report any pre-existing damages upon check-in.</p>
            <p><strong>5. PROHIBITED ITEMS AND ACTIVITIES</strong></p>
            <p>I understand that the following items and activities are prohibited:</p>
            <ul>
              <li>Illegal substances and drug paraphernalia</li>
              <li>Weapons of any kind</li>
              <li>Smoking inside the building</li>
              <li>Unauthorized cooking appliances</li>
              <li>Pets (unless specifically authorized)</li>
              <li>Tampering with fire safety equipment</li>
            </ul>
            <p><strong>6. PRIVACY AND SECURITY</strong></p>
            <p>I understand that while SPUP - SPH respects my privacy, they reserve the right to enter my room for maintenance, safety concerns, or suspected rule violations. I will take reasonable precautions to secure my personal belongings, as SPUP - SPH is not responsible for lost or stolen items.</p>
            <p><strong>7. TERMINATION OF STAY</strong></p>
            <p>I acknowledge that SPUP - SPH reserves the right to terminate my stay for violation of these terms and conditions, with or without refund depending on the severity of the violation.</p>
            <p><strong>8. CHANGES TO TERMS</strong></p>
            <p>I understand that SPUP - SPH may modify these terms and conditions at any time and will make reasonable efforts to notify residents of such changes.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="acceptTerms">Accept Terms</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
  <script>
    $(document).ready(function() {
      // Accept terms button click
      $('#acceptTerms').click(function() {
        $('#termsCheck').prop('checked', true);
        $('#termsModal').modal('hide');
      });
      // Print button click
      $('#printBtn').click(function() {
        window.print();
      });
    });
  </script>
</body>

</html>
