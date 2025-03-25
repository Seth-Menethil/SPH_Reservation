<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>St. Paul Homes</title>
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
        <img src="assets/img/pics/logo.png" alt="St. Paul Homes Logo" />
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

  <!-- Main Content -->
  <main>
    <div class="background-image" style="background-image: url('assets/img/pics/bg.png');"></div>
    <div class="container main-content">
      <div class="grid-two-columns">
        <!-- Left Side - Content -->
        <div class="main-text">
          <h2>Dormitory Reservation</h2>
          <p>Discover comfortable and convenient living spaces tailored for students and guest at St. Paul Homes.</p>
          <div class="button-group">
            <a class="btn-reserve" href="reservation_user.html">Reserve Now</a>
            <button class="btn-learn">Learn More</button>
          </div>
        </div>
        <!-- Right Side - Image -->
      </div>
    </div>
  </main>

  <!-- Feature Icons -->
  <section class="features">
    <div class="container">
      <div class="features-grid">
        <!-- Feature 1: Modern Facilities (Home Icon) -->
        <div class="feature">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M3 9L12 2l9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V12H9v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9z"/>
            </svg>
          </div>
          <p class="feature-text">Modern Facilities</p>
        </div>
        <!-- Feature 2: Caring Environment (Heart Icon) -->
        <div class="feature">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <p class="feature-text">Caring Environment</p>
        </div>
        <!-- Feature 3: Safe & Secure (Shield Icon) -->
        <div class="feature">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <p class="feature-text">Safe & Secure</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 St. Paul Homes. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
