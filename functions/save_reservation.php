<?php
// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid request method.");
}

// Database configuration – adjust these settings as needed
$host = "localhost";
$user = "root";        // Your DB username
$password = "";        // Your DB password
$database = "sph_db";

// Create a new MySQLi connection
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize POST data
$full_name              = isset($_POST['name']) ? trim($_POST['name']) : "";
$gender                 = isset($_POST['gender']) ? trim($_POST['gender']) : "";
$address                = isset($_POST['address']) ? trim($_POST['address']) : "";
$degree_profession      = isset($_POST['degree']) ? trim($_POST['degree']) : "";
$email_id               = isset($_POST['email']) ? trim($_POST['email']) : "";
$date_of_birth          = isset($_POST['dob']) ? trim($_POST['dob']) : "";
$contact_no             = isset($_POST['contactNo']) ? trim($_POST['contactNo']) : "";
$religion               = isset($_POST['religion']) ? trim($_POST['religion']) : "";
$civil_status           = isset($_POST['civilStatus']) ? trim($_POST['civilStatus']) : "";
$date_time_arrival      = isset($_POST['arrivalDate']) ? trim($_POST['arrivalDate']) : "";
$date_time_departure    = isset($_POST['departureDate']) ? trim($_POST['departureDate']) : "";
$nickname               = isset($_POST['nickname']) ? trim($_POST['nickname']) : "";
$work_place             = isset($_POST['workPlace']) ? trim($_POST['workPlace']) : "";
$profession             = isset($_POST['profession']) ? trim($_POST['profession']) : "";
$department_responsible = isset($_POST['department']) ? trim($_POST['department']) : "";
$signature_printed_name = isset($_POST['signature']) ? trim($_POST['signature']) : "";
$date_filed             = isset($_POST['date']) ? trim($_POST['date']) : "";

// Convert datetime-local values ("YYYY-MM-DDTHH:MM") into MySQL DATETIME format ("YYYY-MM-DD HH:MM:SS")
if (!empty($date_time_arrival)) {
    $date_time_arrival = str_replace("T", " ", $date_time_arrival);
    if (strlen($date_time_arrival) == 16) {
        $date_time_arrival .= ":00";
    }
}

if (!empty($date_time_departure)) {
    $date_time_departure = str_replace("T", " ", $date_time_departure);
    if (strlen($date_time_departure) == 16) {
        $date_time_departure .= ":00";
    }
}

// Prepare the SQL insert statement
$sql = "INSERT INTO sph_reservation (
            full_name, gender, address, degree_profession, email_id, date_of_birth,
            contact_no, religion, civil_status, date_time_arrival, date_time_departure,
            nickname, work_place, profession, department_responsible,
            signature_printed_name, date_filed
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind the parameters (all values are bound as strings in this example)
$stmt->bind_param(
    "sssssssssssssssss",
    $full_name,
    $gender,
    $address,
    $degree_profession,
    $email_id,
    $date_of_birth,
    $contact_no,
    $religion,
    $civil_status,
    $date_time_arrival,
    $date_time_departure,
    $nickname,
    $work_place,
    $profession,
    $department_responsible,
    $signature_printed_name,
    $date_filed
);

if ($stmt->execute()) {
    echo "<script>alert('Reservation Success')</script>";
    echo "<script>window.location.href = '../reservation.php'</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
