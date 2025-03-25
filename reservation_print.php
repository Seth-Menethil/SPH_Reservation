<?php
include "connection/dbconn.php";

// Initialize $row to an empty array in case no data is returned.
$row = array();

if (isset($_POST['reservation_list'])) {
    $reservation_id = $_POST['reservation_id'];

    $sql = "SELECT * FROM sph_reservation WHERE reservation_id = $reservation_id;";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $row = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. Paul University Philippines - Personal Information & Reservation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        /* Print Button Container */
        .print-button-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .print-button-container button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        /* Container to hold both copies */
        .print-wrapper {
            display: flex;
            flex-direction: column;
            gap: 20px; /* space between copies */
        }
        .form-container {
            background-color: white;
            width: 29.7cm; /* Landscape A4 width */
            height: 21cm;  /* Landscape A4 height */
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Avoid page break inside each form container */
            page-break-inside: avoid;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            height: 80px;
            display: inline-block;
            vertical-align: middle;
            padding-left: 75px;
        }
        .university-name {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
            vertical-align: middle;
            font-family: "Times New Roman", Times, serif;
        }
        .address {
            font-size: 14px;
            margin-top: 5px;
        }
        .form-title {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .form-subtitle {
            text-align: center;
            font-style: italic;
            margin-bottom: 20px;
        }
        .form-section {
            margin-bottom: 15px;
        }
        .form-row {
            display: flex;
            margin-bottom: 10px;
        }
        .form-label {
            width: 200px;
            font-weight: bold;
        }
        .form-value {
            flex: 1;
            border-bottom: 1px solid #999;
            min-height: 20px;
        }
        .civil-status-container {
            display: flex;
            margin-top: 10px;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .cert-text {
            margin-top: 20px;
            font-size: 12px;
            text-align: justify;
            font-style: italic;
            line-height: 1.5;
        }
        .residence-name {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
            font-family: "Times New Roman", Times, serif;
        }
        .main-form-row {
            display: flex;
            justify-content: space-between;
        }
        .form-column {
            flex: 1;
            padding-right: 20px;
        }
        .signature-line {
            border-top: 1px solid #333;
            margin-top: 30px;
            width: 250px;
            text-align: center;
            font-style: italic;
            font-size: 12px;
        }
        .form-id {
            border: 1px solid #333;
            padding: 5px 10px;
            display: inline-block;
        }
        .form-note {
            border: 1px solid #333;
            padding: 5px 10px;
            display: inline-block;
            float: right;
        }
        @media print {
            @page {
                /* Define folio size: adjust dimensions as needed.
                   Folio size is often 8.5in x 13in */
                size: 8.5in 13in;
                margin: 0;
            }
            body {
                padding: 0;
                background-color: white;
            }
            .form-container {
                box-shadow: none;
            }
            .print-button-container {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Print Button -->
    <div class="print-button-container">
        <button onclick="window.print()">Print Form</button>
    </div>
    <!-- Form Copies Wrapper -->
    <div class="print-wrapper">
        <!-- First Copy -->
        <div class="form-container">
            <div class="clearfix">
                <div class="form-id">SPH Form 001b</div>
                <div class="form-note">Pls. prepare in duplicate</div>
            </div>
            <div class="header">
                <img src="logo2.png" class="logo" alt="SPUP Logo">
            </div>

            <div class="form-title">PERSONAL INFORMATION & RESERVATION FORM</div>
            <div class="form-subtitle">(for Transient Residents)</div>
            <div class="form-section">
                <div class="form-row">
                    <div class="form-label">NAME:</div>
                    <div class="form-value">
                        <span id="familyName"><?= htmlspecialchars($row['full_name'] ?? '') ?></span>
                    </div>
                </div>
            </div>
            <div class="main-form-row">
                <div class="form-column">
                    <div class="form-row">
                        <div class="form-label">GENDER:</div>
                        <div class="form-value">
                            <span id="gender"><?= htmlspecialchars($row['gender'] ?? '') ?></span>
                        </div>
                    </div>
                    <div class="civil-status-container">
                        <div class="form-label">CIVIL STATUS:</div>
                        <div class="form-value" id="civilStatus"><?= htmlspecialchars($row['civil_status'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">ADDRESS:</div>
                        <div class="form-value" id="address"><?= htmlspecialchars($row['address'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DEGREE/PROFESSION:</div>
                        <div class="form-value" id="degreeProfession"><?= htmlspecialchars($row['profession'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">E-MAIL AD:</div>
                        <div class="form-value" id="email"><?= htmlspecialchars($row['email_id'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE & TIME OF ARRIVAL:</div>
                        <div class="form-value" id="arrivalDateTime"><?= htmlspecialchars($row['date_time_arrival'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE & TIME OF DEPARTURE:</div>
                        <div class="form-value" id="departureDateTime"><?= htmlspecialchars($row['date_time_departure'] ?? '') ?></div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-row">
                        <div class="form-label">NICKNAME:</div>
                        <div class="form-value" id="nickname"><?= htmlspecialchars($row['nickname'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">RELIGION:</div>
                        <div class="form-value" id="religion"><?= htmlspecialchars($row['religion'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE OF BIRTH:</div>
                        <div class="form-value" id="dateOfBirth"><?= htmlspecialchars($row['date_of_birth'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">CONTACT NO./s:</div>
                        <div class="form-value" id="contactNumbers"><?= htmlspecialchars($row['contact_no'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">WORK PLACE:</div>
                        <div class="form-value" id="workPlace"><?= htmlspecialchars($row['work_place'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">PROFESSION:</div>
                        <div class="form-value" id="profession"><?= htmlspecialchars($row['profession'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DEPARTMENT RESPONSIBLE:</div>
                        <div class="form-value" id="departmentResponsible"><?= htmlspecialchars($row['department_responsible'] ?? '') ?></div>
                    </div>
                </div>
            </div>
            <div class="cert-text">
                I certify that all information entered in St. Paul University Philippines – St. Paul Home (SPUP – SPH) forms by me are true and correct. I also agree with the NO REBATE policy set forth by the SPUP – SPH. I hereby acknowledge the guidelines for residents and agree to abide by the rules and regulations of the University Dormitory. I am aware that FAILURE to do this will mean separation from the dormitory. Finally, I undertake to enter and conduct myself during my stay in the dormitory under my own cognizance or responsibility and absolve SPUP – SPH of any liability for injuries or mishaps occurring within the premises.
            </div>
            <div class="form-section">
                <div class="form-row">
                    <div class="form-label">Conforme:</div>
                    <div class="form-value">
                        <div class="signature-line">Signature Over Printed Name</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Date Filed:</div>
                    <div class="form-value" id="dateFiled"><?= htmlspecialchars($row['date_filed'] ?? '') ?></div>
                </div>
            </div>
        </div>
        <!-- Second Copy (duplicate of the first copy with unique IDs for clarity) -->
        <div class="form-container">
            <div class="clearfix">
                <div class="form-id">SPH Form 001b</div>
                <div class="form-note">Pls. prepare in duplicate</div>
            </div>
            <div class="header">
            <div class="header">
                <img src="logo2.png" class="logo" alt="SPUP Logo">
            </div>
            </div>
            <div class="residence-name">St. Paul Home</div>
            <div class="form-title">PERSONAL INFORMATION & RESERVATION FORM</div>
            <div class="form-subtitle">(for Transient Residents)</div>
            <div class="form-section">
                <div class="form-row">
                    <div class="form-label">NAME:</div>
                    <div class="form-value">
                        <span id="familyName2"><?= htmlspecialchars($row['full_name'] ?? '') ?></span>
                    </div>
                </div>
            </div>
            <div class="main-form-row">
                <div class="form-column">
                    <div class="form-row">
                        <div class="form-label">GENDER:</div>
                        <div class="form-value">
                            <span id="gender2"><?= htmlspecialchars($row['gender'] ?? '') ?></span>
                        </div>
                    </div>
                    <div class="civil-status-container">
                        <div class="form-label">CIVIL STATUS:</div>
                        <div class="form-value" id="civilStatus2"><?= htmlspecialchars($row['civil_status'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">ADDRESS:</div>
                        <div class="form-value" id="address2"><?= htmlspecialchars($row['address'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DEGREE/PROFESSION:</div>
                        <div class="form-value" id="degreeProfession2"><?= htmlspecialchars($row['profession'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">E-MAIL AD:</div>
                        <div class="form-value" id="email2"><?= htmlspecialchars($row['email_id'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE & TIME OF ARRIVAL:</div>
                        <div class="form-value" id="arrivalDateTime2"><?= htmlspecialchars($row['date_time_arrival'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE & TIME OF DEPARTURE:</div>
                        <div class="form-value" id="departureDateTime2"><?= htmlspecialchars($row['date_time_departure'] ?? '') ?></div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-row">
                        <div class="form-label">NICKNAME:</div>
                        <div class="form-value" id="nickname2"><?= htmlspecialchars($row['nickname'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">RELIGION:</div>
                        <div class="form-value" id="religion2"><?= htmlspecialchars($row['religion'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DATE OF BIRTH:</div>
                        <div class="form-value" id="dateOfBirth2"><?= htmlspecialchars($row['date_of_birth'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">CONTACT NO./s:</div>
                        <div class="form-value" id="contactNumbers2"><?= htmlspecialchars($row['contact_no'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">WORK PLACE:</div>
                        <div class="form-value" id="workPlace2"><?= htmlspecialchars($row['work_place'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">PROFESSION:</div>
                        <div class="form-value" id="profession2"><?= htmlspecialchars($row['profession'] ?? '') ?></div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">DEPARTMENT RESPONSIBLE:</div>
                        <div class="form-value" id="departmentResponsible2"><?= htmlspecialchars($row['department_responsible'] ?? '') ?></div>
                    </div>
                </div>
            </div>
            <div class="cert-text">
                I certify that all information entered in St. Paul University Philippines – St. Paul Home (SPUP – SPH) forms by me are true and correct. I also agree with the NO REBATE policy set forth by the SPUP – SPH. I hereby acknowledge the guidelines for residents and agree to abide by the rules and regulations of the University Dormitory. I am aware that FAILURE to do this will mean separation from the dormitory. Finally, I undertake to enter and conduct myself during my stay in the dormitory under my own cognizance or responsibility and absolve SPUP – SPH of any liability for injuries or mishaps occurring within the premises.
            </div>
            <div class="form-section">
                <div class="form-row">
                    <div class="form-label">Conforme:</div>
                    <div class="form-value">
                        <div class="signature-line">Signature Over Printed Name</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Date Filed:</div>
                    <div class="form-value" id="dateFiled2"><?= htmlspecialchars($row['date_filed'] ?? '') ?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
