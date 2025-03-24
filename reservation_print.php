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

        .form-container {
            background-color: white;
            width: 29.7cm;
            /* Landscape A4 width */
            height: 21cm;
            /* Landscape A4 height */
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 80px;
            height: 80px;
            display: inline-block;
            vertical-align: middle;
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

        .form-checkbox {
            margin-right: 5px;
        }

        .form-group {
            display: flex;
        }

        .form-column {
            flex: 1;
            padding-right: 20px;
        }

        .form-footer {
            margin-top: 20px;
            font-size: 12px;
            line-height: 1.5;
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

        .horizontal-line {
            border-bottom: 1px solid #333;
            margin: 5px 0;
        }

        .main-form-row {
            display: flex;
            justify-content: space-between;
        }

        .civil-status-container {
            display: flex;
            margin-top: 10px;
        }

        @media print {
            body {
                padding: 0;
                background-color: white;
            }

            .form-container {
                box-shadow: none;
                padding: 0;
                width: 100%;
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="form-container" id="printableArea">
        <div class="clearfix">
            <div class="form-id">SPH Form 001b</div>
            <div class="form-note">Pls. prepare in duplicate</div>
        </div>

        <div class="header">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSI0NSIgZmlsbD0iI2YwZTY4YyIgc3Ryb2tlPSIjMDA2NjMzIiBzdHJva2Utd2lkdGg9IjIiLz48dGV4dCB4PSI1MCIgeT0iNTUiIGZvbnQtZmFtaWx5PSJUaW1lcyBOZXcgUm9tYW4iIGZvbnQtc2l6ZT0iOCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzAwNjYzMyI+U1BVUDwvdGV4dD48L3N2Zz4=" class="logo" alt="SPUP Logo">
            <div>
                <div class="university-name">St. Paul University Philippines</div>
                <div class="address">Tuguegarao City, Cagayan 3500</div>
            </div>
        </div>

        <div class="residence-name">St. Paul Home</div>

        <div class="form-title">PERSONAL INFORMATION & RESERVATION FORM</div>
        <div class="form-subtitle">(for Transient Residents)</div>

        <div class="form-section">
            <div class="form-row">
                <div class="form-label">NAME:</div>
                <div class="form-value">
                    <span id="familyName"></span> / <span id="givenName"></span> / <span id="middleName"></span>
                </div>
            </div>
            <div class="form-row" style="font-size: 12px;">
                <div style="width: 200px; text-align: center;">Family Name</div>
                <div style="flex: 1; text-align: center;">Given Name</div>
                <div style="flex: 1; text-align: center;">Middle Name</div>
            </div>
        </div>

        <div class="main-form-row">
            <div class="form-column">
                <div class="form-row">
                    <div class="form-label">GENDER:</div>
                    <div class="form-value">
                        <span class="form-checkbox">☐</span> Female
                        <span class="form-checkbox">☐</span> Male
                        <span id="gender"></span>
                    </div>
                </div>

                <div class="civil-status-container">
                    <div class="form-label">CIVIL STATUS:</div>
                    <div class="form-value" id="civilStatus"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">ADDRESS:</div>
                    <div class="form-value" id="address"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">DEGREE/PROFESSION:</div>
                    <div class="form-value" id="degreeProfession"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">E-MAIL AD:</div>
                    <div class="form-value" id="email"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">DATE & TIME OF ARRIVAL:</div>
                    <div class="form-value" id="arrivalDateTime"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">DATE & TIME OF DEPARTURE:</div>
                    <div class="form-value" id="departureDateTime"></div>
                </div>
            </div>

            <div class="form-column">
                <div class="form-row">
                    <div class="form-label">NICKNAME:</div>
                    <div class="form-value" id="nickname"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">RELIGION:</div>
                    <div class="form-value" id="religion"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">DATE OF BIRTH:</div>
                    <div class="form-value" id="dateOfBirth"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">CONTACT NO./s</div>
                    <div class="form-value" id="contactNumbers"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">WORK PLACE:</div>
                    <div class="form-value" id="workPlace"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">PROFESSION</div>
                    <div class="form-value" id="profession"></div>
                </div>

                <div class="form-row">
                    <div class="form-label">DEPARTMENT RESPONSIBLE:</div>
                    <div class="form-value" id="departmentResponsible"></div>
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
                <div class="form-value" id="dateFiled"></div>
            </div>
        </div>
    </div>


    <script>
        // Suppose you have a value stored in a variable:
        var myValue = "I have many wives";

        // Select the div by its ID
        var civilStatus = document.getElementById("civilStatus");

        // Set the div's content
        civilStatus.innerHTML = myValue;

        // Alternatively, you can use textContent if you don't want HTML parsing:
        // displayDiv.textContent = myValue;
    </script>
</body>

</html>