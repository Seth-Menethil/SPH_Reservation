<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident's Personal Information Sheet</title>
  <!-- jsPDF library from CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <style>
      @page {
          size: 8.5in 13in;
          margin: 0.5in;
      }
      body {
          font-family: Arial, sans-serif;
          width: 7.5in;
          height: 12in;
          margin: 0 auto;
          padding: 0;
          font-size: 11px; /* Smaller base font size to fit legal paper */
      }
      .header {
          text-align: center;
          margin-bottom: 10px;
      }
      .header img {
          max-width: 60px;
      }
      .header h2 {
          margin: 5px 0;
          font-size: 16px;
      }
      .header p {
          margin: 3px 0;
          font-size: 12px;
      }
      .header h3 {
          margin: 5px 0;
          font-size: 14px;
      }
      .form-title {
          font-weight: bold;
          text-align: center;
          font-size: 14px;
          margin: 10px 0;
      }
      .form-container {
          border: 1px solid #000;
      }
      .form-row {
          display: flex;
          border-bottom: 1px solid #ddd;
      }
      .form-group {
          padding: 3px 5px;
          flex: 1;
          border-right: 1px solid #ddd;
      }
      .form-group:last-child {
          border-right: none;
      }
      .form-label {
          font-weight: bold;
          font-size: 10px;
          margin-bottom: 2px;
      }
      .form-value {
          min-height: 15px;
          border-bottom: 1px dotted #999;
          margin-bottom: 3px;
          font-size: 11px;
      }
      .sub-label {
          font-style: italic;
          font-size: 8px;
          color: #666;
      }
      .section-title {
          font-weight: bold;
          text-align: center;
          background-color: #f5f5f5;
          padding: 3px;
          border-bottom: 1px solid #ddd;
          border-top: 1px solid #ddd;
          font-size: 12px;
      }
      .checkbox-group {
          display: flex;
          align-items: center;
          margin: 3px 0;
      }
      .checkbox {
          width: 12px;
          height: 12px;
          border: 1px solid #000;
          display: inline-block;
          margin-right: 3px;
      }
      .checkbox.checked::after {
          content: "✓";
          position: relative;
          top: -3px;
          left: 1px;
          font-size: 10px;
      }
      .photo-area {
          border: 1px solid #000;
          width: 80px;
          height: 90px;
          text-align: center;
          padding-top: 8px;
          font-size: 8px;
      }
      .siblings-table {
          width: 100%;
          border-collapse: collapse;
      }
      .siblings-table th {
          font-size: 9px;
          border-bottom: 1px solid #ddd;
          padding: 2px;
          text-align: left;
      }
      .siblings-table td {
          padding: 2px;
          border-bottom: 1px dotted #ddd;
          font-size: 10px;
          height: 15px;
      }
      .expectations {
          font-size: 10px;
      }
      .signature-area {
          display: flex;
          justify-content: space-between;
          padding: 5px 0;
          border-top: 1px solid #ddd;
      }
      .signature-box {
          flex: 1;
          text-align: center;
          border-right: 1px solid #ddd;
          padding: 0 5px;
      }
      .signature-box:last-child {
          border-right: none;
      }
      .signature-line {
          border-bottom: 1px solid #000;
          margin-bottom: 3px;
          height: 25px;
      }
      .signature-label {
          font-size: 8px;
          font-style: italic;
      }
      .form-id {
          position: absolute;
          top: 20px;
          left: 20px;
          border: 1px solid #000;
          padding: 1px 3px;
          font-size: 8px;
      }
      .health-section {
          display: flex;
      }
      .health-item {
          flex: 1;
          padding: 3px;
      }
      @media print {
          body {
              width: 7.5in;
              height: 12in;
              padding: 0;
              margin: 0 auto;
          }
          .page-break {
              page-break-before: always;
          }
          .no-print {
              display: none;
          }
      }
  </style>
</head>
<body>
<div id="pdfContent">
  <div class="form-id">SPH Form 001a</div>
  
  <div class="header">
      <!-- We'd use a placeholder for the logo -->
      <div style="display:inline-block; width:60px; height:60px; border-radius:50%; background:#f0f0f0; text-align:center; line-height:60px; font-size:10px;">Logo</div>
      <h2>St. Paul University Philippines</h2>
      <p>Tuguegarao City, Cagayan 3500</p>
      <h3>St Paul Home</h3>
  </div>
  
  <div class="form-title">Resident's Personal Information Sheet</div>
  
  <div class="form-container">
      <div class="form-row">
          <div class="form-group" style="flex: 3;">
              <div class="form-label">Name:</div>
              <div class="form-value" id="surname"><span class="sub-label">Surname</span></div>
              <div class="form-value" id="firstname"><span class="sub-label">First Name</span></div>
              <div class="form-value" id="middlename"><span class="sub-label">Middle Name</span></div>
              <div class="form-value" id="nickname"><span class="sub-label">Nickname</span></div>
          </div>
          <div class="form-group" style="flex: 1; display: flex; justify-content: center; align-items: center;">
              <div class="photo-area">
                  Please submit 1pc. Passport size ID Picture
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 2;">
              <div class="form-label">Permanent Home Address:</div>
              <div class="form-value" id="permanent_address"></div>
          </div>
          <div class="form-group" style="flex: 1;">
              <div class="form-label">If Old, No. of Years/Months stayed in the SPH (Date of Entry):</div>
              <div class="form-value" id="years_stayed"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Contact No./s:</div>
              <div class="form-value" id="contact_no"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Gender:</div>
              <div class="form-value" id="gender"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Date of Birth:</div>
              <div class="form-value" id="birth_date"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Place of Birth:</div>
              <div class="form-value" id="birth_place"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Nationality:</div>
              <div class="form-value" id="nationality"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">School of Origin: <span class="sub-label">(Grade School)</span></div>
              <div class="form-value" id="grade_school"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Address:</div>
              <div class="form-value" id="grade_school_address"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">School of Origin: <span class="sub-label">(High School)</span></div>
              <div class="form-value" id="high_school"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Address:</div>
              <div class="form-value" id="high_school_address"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Course you want to pursue:</div>
              <div class="form-value" id="course"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Why?</div>
              <div class="form-value" id="why_course"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">E-Mail Address:</div>
              <div class="form-value" id="email"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Religion:</div>
              <div class="form-value" id="religion"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Baptized?</div>
              <div class="form-value" id="baptized"></div>
          </div>
      </div>
      
      <div class="section-title">Family Background</div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 1;">
              <div style="text-align: center;"><strong>Father</strong></div>
              <div class="checkbox-group">
                  <div class="checkbox" id="father_living_check"></div>
                  <span>Living</span>
              </div>
              <div class="checkbox-group">
                  <div class="checkbox" id="father_deceased_check"></div>
                  <span>Deceased</span>
              </div>
          </div>
          <div class="form-group" style="flex: 1;">
              <div style="text-align: center;"><strong>Mother</strong></div>
              <div class="checkbox-group">
                  <div class="checkbox" id="mother_living_check"></div>
                  <span>Living</span>
              </div>
              <div class="checkbox-group">
                  <div class="checkbox" id="mother_deceased_check"></div>
                  <span>Deceased</span>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Name: (Father)</div>
              <div class="form-value" id="father_name"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Name: (Mother)</div>
              <div class="form-value" id="mother_name"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Address: (Father)</div>
              <div class="form-value" id="father_address"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Address: (Mother)</div>
              <div class="form-value" id="mother_address"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Contact No./s: (Father)</div>
              <div class="form-value" id="father_contact"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Contact No./s: (Mother)</div>
              <div class="form-value" id="mother_contact"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Citizenship/Nationality: (Father)</div>
              <div class="form-value" id="father_nationality"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Citizenship/Nationality: (Mother)</div>
              <div class="form-value" id="mother_nationality"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Educational Attainment: (Father)</div>
              <div class="form-value" id="father_education"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Educational Attainment: (Mother)</div>
              <div class="form-value" id="mother_education"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Occupation/Position: (Father)</div>
              <div class="form-value" id="father_occupation"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Occupation/Position: (Mother)</div>
              <div class="form-value" id="mother_occupation"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Business/Office Address: (Father)</div>
              <div class="form-value" id="father_business_address"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Business/Office Address: (Mother)</div>
              <div class="form-value" id="mother_business_address"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Number of Children in the Family:</div>
              <div class="form-value" id="number_of_children"></div>
          </div>
          <div class="form-group">
              <div class="form-label">Applicant's Birth Order in the Family:</div>
              <div class="form-value" id="birth_order"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 2;">
              <div class="form-label">Are you living with your parents?</div>
              <div class="checkbox-group">
                  <div class="checkbox" id="living_with_parents_yes"></div>
                  <span>Yes</span>
                  <div class="checkbox" id="living_with_parents_no" style="margin-left: 20px;"></div>
                  <span>No – since when (age)?</span>
                  <span id="living_with_parents_since" style="margin-left: 5px;"></span>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Language / Dialects at home:</div>
              <div class="form-value" id="languages"></div>
          </div>
      </div>
      
      <div class="form-row">
          <table class="siblings-table">
              <thead>
                  <tr>
                      <th>Brothers/Sister</th>
                      <th>Age</th>
                      <th>School</th>
                      <th>Educational Attainment</th>
                      <th>Employer</th>
                  </tr>
              </thead>
              <tbody id="siblings_table">
                  <!-- Will be populated from database -->
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>
          </table>
      </div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 1;">
              <div class="form-label">Are you involved in church activities?</div>
              <div class="checkbox-group">
                  <div class="checkbox" id="church_activities_no"></div>
                  <span>No</span>
                  <div class="checkbox" id="church_activities_yes" style="margin-left: 15px;"></div>
                  <span>Yes</span>
              </div>
          </div>
          <div class="form-group" style="flex: 1;">
              <div class="form-label">If Yes, what Organization:</div>
              <div class="form-value" id="church_organization"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 1;">
              <div class="form-label">Are you more of a Leader?</div>
              <div class="checkbox-group">
                  <div class="checkbox" id="leader_yes"></div>
                  <span>Yes</span>
                  <div class="checkbox" id="leader_no" style="margin-left: 15px;"></div>
                  <span>No</span>
              </div>
          </div>
          <div class="form-group" style="flex: 1;">
              <div class="form-label">A Follower?</div>
              <div class="checkbox-group">
                  <div class="checkbox" id="follower_no"></div>
                  <span>No</span>
                  <div class="checkbox" id="follower_yes" style="margin-left: 15px;"></div>
                  <span>Yes</span>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">My Expectations:</div>
              <div class="expectations">Living in the SPH or dormitory means...</div>
              <div class="form-value" id="expectations"></div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="checkbox-group">
                  <div class="checkbox" id="aware_responsibilities"></div>
                  <span>I am aware of the responsibilities that await me as a boarder.</span>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="checkbox-group">
                  <div class="checkbox" id="willing_follow"></div>
                  <span>I am willing to follow all the regulations and participate in all activities.</span>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Health Related Information:</div>
              <div class="health-section">
                  <div class="health-item">
                      <div class="checkbox-group">
                          <div class="checkbox" id="asthma"></div>
                          <span>Asthma</span>
                      </div>
                      <div class="checkbox-group">
                          <div class="checkbox" id="diabetes"></div>
                          <span>Diabetes</span>
                      </div>
                  </div>
                  <div class="health-item">
                      <div class="checkbox-group">
                          <div class="checkbox" id="heart_disease"></div>
                          <span>Heart Disease</span>
                      </div>
                      <div class="checkbox-group">
                          <div class="checkbox" id="epilepsy"></div>
                          <span>Epilepsy</span>
                      </div>
                      <div class="checkbox-group">
                          <div class="checkbox" id="depression"></div>
                          <span>Depression History</span>
                      </div>
                  </div>
                  <div class="health-item">
                      <div class="form-label">Allergies: (Restricted Foods)</div>
                      <div class="form-value" id="allergies" style="height: 30px;"></div>
                  </div>
                  <div class="health-item">
                      <div class="form-label">Remarks:</div>
                      <div class="form-value" id="health_remarks" style="height: 30px;"></div>
                  </div>
              </div>
              <div>
                  <div class="form-label">Others pls. specify</div>
                  <div class="form-value" id="other_health_issues"></div>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Conforme:</div>
              <div style="display: flex; margin-top: 10px;">
                  <div style="flex: 1; text-align: center;">
                      <div class="signature-line"></div>
                      <div class="signature-label" id="student_signature">Student's Signature</div>
                  </div>
                  <div style="flex: 1; text-align: center;">
                      <div class="signature-line"></div>
                      <div class="signature-label" id="parent_name">Parents/Guardian Name</div>
                  </div>
                  <div style="flex: 1; text-align: center;">
                      <div class="signature-line"></div>
                      <div class="signature-label" id="parent_signature">Signature</div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group" style="flex: 1;">
              <div class="form-label">Noted by:</div>
              <div style="text-align: center; margin-top: 10px;">
                  <div class="signature-line"></div>
                  <div class="signature-label">SPH Assistant</div>
              </div>
          </div>
          <div class="form-group" style="flex: 1;">
              <div class="form-label">Approved by:</div>
              <div style="text-align: center; margin-top: 10px;">
                  <div class="signature-line"></div>
                  <div class="signature-label">Head, Residence Services</div>
              </div>
              <div style="text-align: center; margin-top: 5px;">
                  <div class="checkbox-group" style="justify-content: center;">
                      <div class="checkbox" id="first_sem"></div>
                      <span>1<sup>st</sup> Sem</span>
                      <div class="checkbox" id="second_sem" style="margin-left: 10px;"></div>
                      <span>2<sup>nd</sup> Sem</span>
                      <div class="checkbox" id="summer" style="margin-left: 10px;"></div>
                      <span>Summer</span>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group">
              <div class="form-label">Date:</div>
              <div class="form-value" id="date"></div>
              <div style="font-style: italic; font-size: 9px; margin-top: 5px;">
                  (Please fill-out the form COMPLETELY. Do not leave any space unanswered.)
              </div>
          </div>
          <div class="form-group">
              <div class="form-label">S.Y.</div>
              <div class="form-value" id="school_year"></div>
          </div>
      </div>
  </div>
</div>


</body>
</html>
