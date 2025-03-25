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
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header img {
            height: 70px;
            margin-right: 15px;
        }

        .form-header h2 {
            margin-bottom: 0;
        }

        .form-header p {
            margin-top: 0;
        }

        .section-title {
            background-color: #f4f6f9;
            padding: 8px;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .photo-placeholder {
            border: 1px dashed #ccc;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .form-group label {
            font-weight: normal;
        }

        .form-id {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 3px 8px;
            border: 1px solid #000;
            font-size: 12px;
        }

        @media print {
            body {
                padding: 0;
                margin: 0;
            }

            .no-print {
                display: none;
            }

            .content {
                padding: 0 !important;
                margin: 0 !important;
            }

            .card {
                border: none !important;
                box-shadow: none !important;
            }

            .container-fluid {
                padding: 0 !important;
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
                <div class="card mt-4">
                    <div class="card-header no-print">
                        <h3 class="card-title">St. Paul University - Resident's Personal Information Sheet</h3>
                    </div>
                    <div class="card-body">
                        <!-- Form Header -->
                        <div class="form-header row">
                            <div class="col-md-2">
                                <img src="/api/placeholder/100/100" alt="SPU Logo" class="logo">
                            </div>
                            <div class="col-md-8">
                                <h2>St. Paul University Philippines</h2>
                                <p>Tuguegarao City, Cagayan 3500</p>
                                <h4 class="form-title">Resident's Personal Information Sheet</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="photo-placeholder">
                                    <span>Please submit 1pc.<br>Passport size<br>ID Picture</span>
                                </div>
                                <small>SPH Form 001a</small>
                            </div>
                        </div>

                        <!-- Form Content: Posts data to sph_print.php -->
                        <form id="residentForm" method="POST" action="sph_print.php">
                            <!-- Personal Information -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input type="text" class="form-control" name="surname" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="firstName" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" name="middleName">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nickname</label>
                                        <input type="text" class="form-control" name="nickname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Permanent Home Address</label>
                                        <input type="text" class="form-control" name="homeAddress" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Contact No./s</label>
                                        <input type="text" class="form-control" name="contactNumber">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>If Old, No. of Years/Months stayed in the SPH (Date of Entry)</label>
                                        <input type="text" class="form-control" name="stayDuration">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" name="dateOfBirth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Place of Birth</label>
                                        <input type="text" class="form-control" name="placeOfBirth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender" required>
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" class="form-control" name="nationality">
                                    </div>
                                </div>
                            </div>

                            <!-- Educational Background -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>School of Origin (Grade School)</label>
                                        <input type="text" class="form-control" name="gradeSchool">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="gradeSchoolAddress">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>School of Origin (High School)</label>
                                        <input type="text" class="form-control" name="highSchool">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="highSchoolAddress">
                                    </div>
                                </div>
                            </div>

                            <!-- Course Information -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course you want to pursue</label>
                                        <input type="text" class="form-control" name="course">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Why?</label>
                                        <input type="text" class="form-control" name="whyCourse">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>E-Mail Address</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" class="form-control" name="religion">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Baptized?</label>
                                        <select class="form-control" name="baptized">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Family Background -->
                            <div class="section-title">Family Background</div>

                            <!-- Father Information -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Father</h5>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="fatherStatus" id="fatherLiving" value="Living">
                                        <label class="form-check-label" for="fatherLiving">Living</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="fatherStatus" id="fatherDeceased" value="Deceased">
                                        <label class="form-check-label" for="fatherDeceased">Deceased</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="fatherName">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="fatherAddress">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact No./s</label>
                                        <input type="text" class="form-control" name="fatherContact">
                                    </div>
                                    <div class="form-group">
                                        <label>Citizenship/Nationality</label>
                                        <input type="text" class="form-control" name="fatherNationality">
                                    </div>
                                    <div class="form-group">
                                        <label>Educational Attainment</label>
                                        <input type="text" class="form-control" name="fatherEducation">
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation/Position</label>
                                        <input type="text" class="form-control" name="fatherOccupation">
                                    </div>
                                    <div class="form-group">
                                        <label>Business/Office Address</label>
                                        <input type="text" class="form-control" name="fatherOfficeAddress">
                                    </div>
                                </div>

                                <!-- Mother Information -->
                                <div class="col-md-6">
                                    <h5>Mother</h5>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="motherStatus" id="motherLiving" value="Living">
                                        <label class="form-check-label" for="motherLiving">Living</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="motherStatus" id="motherDeceased" value="Deceased">
                                        <label class="form-check-label" for="motherDeceased">Deceased</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="motherName">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="motherAddress">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact No./s</label>
                                        <input type="text" class="form-control" name="motherContact">
                                    </div>
                                    <div class="form-group">
                                        <label>Citizenship/Nationality</label>
                                        <input type="text" class="form-control" name="motherNationality">
                                    </div>
                                    <div class="form-group">
                                        <label>Educational Attainment</label>
                                        <input type="text" class="form-control" name="motherEducation">
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation/Position</label>
                                        <input type="text" class="form-control" name="motherOccupation">
                                    </div>
                                    <div class="form-group">
                                        <label>Business/Office Address</label>
                                        <input type="text" class="form-control" name="motherOfficeAddress">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Number of Children in the Family</label>
                                        <input type="number" class="form-control" name="childrenCount">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Applicant's Birth Order in the Family</label>
                                        <input type="text" class="form-control" name="birthOrder">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Are you living with your parents?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="livingWithParents" id="livingWithParentsYes" value="Yes">
                                            <label class="form-check-label" for="livingWithParentsYes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="livingWithParents" id="livingWithParentsNo" value="No">
                                            <label class="form-check-label" for="livingWithParentsNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>If No - since when (age)?</label>
                                        <input type="text" class="form-control" name="notLivingWithParentsSince">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Language / Dialects at home</label>
                                        <input type="text" class="form-control" name="homeLanguages">
                                    </div>
                                </div>
                            </div>

                            <!-- Siblings Information -->
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered siblings-table">
                                        <thead>
                                            <tr>
                                                <th>Brothers/Sister</th>
                                                <th>Age</th>
                                                <th>School</th>
                                                <th>Educational Attainment</th>
                                                <th>Employer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="sibling1Name"></td>
                                                <td><input type="text" class="form-control" name="sibling1Age"></td>
                                                <td><input type="text" class="form-control" name="sibling1School"></td>
                                                <td><input type="text" class="form-control" name="sibling1Education"></td>
                                                <td><input type="text" class="form-control" name="sibling1Employer"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="sibling2Name"></td>
                                                <td><input type="text" class="form-control" name="sibling2Age"></td>
                                                <td><input type="text" class="form-control" name="sibling2School"></td>
                                                <td><input type="text" class="form-control" name="sibling2Education"></td>
                                                <td><input type="text" class="form-control" name="sibling2Employer"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="sibling3Name"></td>
                                                <td><input type="text" class="form-control" name="sibling3Age"></td>
                                                <td><input type="text" class="form-control" name="sibling3School"></td>
                                                <td><input type="text" class="form-control" name="sibling3Education"></td>
                                                <td><input type="text" class="form-control" name="sibling3Employer"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="sibling4Name"></td>
                                                <td><input type="text" class="form-control" name="sibling4Age"></td>
                                                <td><input type="text" class="form-control" name="sibling4School"></td>
                                                <td><input type="text" class="form-control" name="sibling4Education"></td>
                                                <td><input type="text" class="form-control" name="sibling4Employer"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Church Activities -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Are you involved in church activities?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="churchActivities" id="churchActivitiesNo" value="No">
                                            <label class="form-check-label" for="churchActivitiesNo">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="churchActivities" id="churchActivitiesYes" value="Yes">
                                            <label class="form-check-label" for="churchActivitiesYes">Yes</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>If Yes, what Organization</label>
                                        <input type="text" class="form-control" name="churchOrganization">
                                    </div>
                                </div>
                            </div>

                            <!-- Leadership -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Are you more of a Leader?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="leader" id="leaderYes" value="Yes">
                                            <label class="form-check-label" for="leaderYes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="leader" id="leaderNo" value="No">
                                            <label class="form-check-label" for="leaderNo">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>A Follower?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="follower" id="followerNo" value="No">
                                            <label class="form-check-label" for="followerNo">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="follower" id="followerYes" value="Yes">
                                            <label class="form-check-label" for="followerYes">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Expectations -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>My Expectations: Living in the SPH or dormitory means...</label>
                                        <textarea class="form-control" name="expectations" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Responsibilities -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="awareResponsibilities" id="awareResponsibilities">
                                        <label class="form-check-label" for="awareResponsibilities">
                                            I am aware of the responsibilities that await me as a boarder.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="followRegulations" id="followRegulations">
                                        <label class="form-check-label" for="followRegulations">
                                            I am willing to follow all the regulations and participate in all activities.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Health Information -->
                            <div class="section-title">Health Related Information</div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="asthma" id="asthma">
                                        <label class="form-check-label" for="asthma">Asthma</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="heartDisease" id="heartDisease">
                                        <label class="form-check-label" for="heartDisease">Heart Disease</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="diabetes" id="diabetes">
                                        <label class="form-check-label" for="diabetes">Diabetes</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="epilepsy" id="epilepsy">
                                        <label class="form-check-label" for="epilepsy">Epilepsy</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="depression" id="depression">
                                        <label class="form-check-label" for="depression">Depression History</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Others pls. specify</label>
                                        <input type="text" class="form-control" name="otherHealthIssues">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Allergies (Restricted Foods)</label>
                                        <input type="text" class="form-control" name="allergies">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control" name="remarks" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Signature Section -->
                            <div class="section-title">Signature Section</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Student's Signature</label>
                                        <div class="signature-line">________________________</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Parents/Guardian Name</label>
                                        <div class="signature-line">________________________</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Signature</label>
                                        <div class="signature-line">________________________</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Noted by:</label>
                                        <div class="signature-line">SPH Assistant</div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Date:</label>
                                        <input type="text" class="form-control" name="notedDate">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Approved by:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="signature-line">Head, Residence Services</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>S.Y.</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="firstSem" id="firstSem">
                                            <label class="form-check-label" for="firstSem">1<sup>st</sup> Sem</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="secondSem" id="secondSem">
                                            <label class="form-check-label" for="secondSem">2<sup>nd</sup> Sem</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="summer" id="summer">
                                            <label class="form-check-label" for="summer">Summer</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-print mt-4">
                                <div class="col-md-12">
                                    <p><em>(Please fill-out the form COMPLETELY. Do not leave any space unanswered.)</em></p>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-print"></i> Print Form
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
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