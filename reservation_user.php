<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>St. Paul Homes</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
  
  <style>
    /* Reset & base styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    html,
    body {
      height: 100%;
      font-family: sans-serif;
    }
    /* Utility Classes */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 16px;
    }
    .flex {
      display: flex;
    }
    .flex-col {
      flex-direction: column;
    }
    .justify-between {
      justify-content: space-between;
    }
    .items-center {
      align-items: center;
    }
    .min-h-screen {
      min-height: 100vh;
    }
    .text-white {
      color: #fff;
    }
    /* Header */
    header {
      background-color: #065f46; /* green-800 */
      color: #fff;
    }
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px;
    }
    .header-logo {
      display: flex;
      align-items: center;
    }
    .header-logo img {
      height: 48px;
      margin-right: 12px;
    }
    .header-logo h1 {
      font-size: 24px;
      font-weight: bold;
    }
    header nav ul {
      list-style: none;
      display: flex;
      gap: 24px;
    }
    header nav ul li a {
      text-decoration: none;
      color: inherit;
      transition: color 0.3s ease;
    }
    header nav ul li a:hover {
      color: #fcd34d; /* yellow-300 */
    }
    /* Main Content */
    main {
      position: relative;
      flex-grow: 1;
    }
    .background-image {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-size: cover;
      background-position: center;
      filter: brightness(50%);
      z-index: 1;
    }
    .main-content {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      align-items: center;
    }
    .grid-two-columns {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      width: 100%;
    }
    .main-text {
      color: #fff;
    }
    .main-text h2 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 16px;
    }
    .main-text p {
      font-size: 20px;
      margin-bottom: 24px;
    }
    .button-group {
      display: flex;
      gap: 16px;
    }
    .btn-reserve {
      background-color: #eab308; /* yellow-500 */
      color: #065f46; /* green-800 */
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-reserve:hover {
      background-color: #facc15; /* yellow-400 */
    }
    .btn-learn {
      background-color: transparent;
      color: #fff;
      padding: 12px 24px;
      border: 2px solid #fff;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-learn:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }
    .image-container {
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 24px;
      border-radius: 16px;
    }
    .image-container img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    /* Feature Icons */
    .features {
      background-color: #f0fdf4; /* green-50 */
      padding: 64px 0;
    }
    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      text-align: center;
    }
    .feature {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .feature-icon {
      background-color: #d1fae5; /* green-100 */
      padding: 16px;
      border-radius: 50%;
      margin-bottom: 8px;
    }
    .feature-icon svg {
      width: 32px;
      height: 32px;
      color: #065f46; /* green-800 */
    }
    .feature-text {
      color: #065f46;
    }
    /* Footer */
    footer {
      background-color: #065f46;
      color: #fff;
      padding: 32px 0;
      text-align: center;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col">
  <!-- Header -->
  <header>
    <div class="container header-container">
      <div class="header-logo">
        <img src="logo.png" alt="St. Paul Homes Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="landing.html">Home</a></li>
          <li><a href="reservation_user.html">Reservation</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

<main>
  <div class="card">
    <div class="card-body">
      <!-- Form remains unchanged. It posts to the PHP function -->
      <form id="reservationForm" method="POST" action="functions/save_reservation.php">
        <!-- Form Header (visible in web view) -->
        <div class="row">
          <div class="col-md-10">
            <h4>PERSONAL INFORMATION & RESERVATION FORM</h4>  
            <p>St. Paul University Philippines - Tuguegarao City, Cagayan 3500</p>
          </div>
        </div>

        <hr>

        <!-- Personal Information Section -->
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="name">NAME:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>GENDER:</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                <label class="form-check-label" for="female">Female</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                <label class="form-check-label" for="male">Male</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="address">ADDRESS:</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter complete address" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="degree">DEGREE/PROFESSION:</label>
              <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter degree/profession" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">EMAIL ID:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="dob">DATE OF BIRTH:</label>
              <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="contactNo">CONTACT NO.:</label>
              <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="religion">RELIGION:</label>
              <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter religion" required>
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
                    <input class="form-check-input" type="radio" name="civilStatus" id="single" value="Single" required>
                    <label class="form-check-label" for="single">Single</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilStatus" id="married" value="Married" required>
                    <label class="form-check-label" for="married">Married</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilStatus" id="widowed" value="Widowed" required>
                    <label class="form-check-label" for="widowed">Widowed</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="civilStatus" id="others" value="Others" required>
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
              <input type="datetime-local" class="form-control" id="arrivalDate" name="arrivalDate" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="departureDate">DATE & TIME OF DEPARTURE:</label>
              <input type="datetime-local" class="form-control" id="departureDate" name="departureDate" required>
            </div>
          </div>
        </div>

        <!-- Work Information Section -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nickname">NICKNAME:</label>
              <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Enter nickname" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="workPlace">WORK PLACE:</label>
              <input type="text" class="form-control" id="workPlace" name="workPlace" placeholder="Enter workplace" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="profession">PROFESSION:</label>
              <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter profession" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="department">DEPARTMENT RESPONSIBLE:</label>
              <input type="text" class="form-control" id="department" name="department" placeholder="Enter department" required>
            </div>
          </div>
        </div>

        <!-- Terms and Conditions Section -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="termsCheck" name="termsCheck" required>
                <label for="termsCheck" class="custom-control-label">
                  I certify that all information entered in St. Paul University Philippines - St. Paul Home (SPH) / SPH forms by me are true and complete. I acknowledge to abide by the rules and regulations of the SPH - SPH. Finally, I understand to enter and conduct myself during my stay in the dormitory responsibly and absolve SPUP - SPH of any liability for injuries or mistakes occurring within.
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Signature Section -->
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="signature">Signature Over Printed Name</label>
              <input type="text" class="form-control" id="signature" name="signature" placeholder="Type your full name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="date">Date Filed</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>
          </div>
        </div>

        <!-- Form Actions -->
        <div class="row mt-4">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="submitBtn">Submit Form</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 St. Paul Homes. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
