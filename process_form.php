<?php
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "applicantsInfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit;
}

// Validate form data
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$applyingFor = filter_input(INPUT_POST, 'applyingFor', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Debugging: Check if the resume file input is present
if (!isset($_FILES['resume'])) {
    echo json_encode(['success' => false, 'message' => 'Resume file input not found.']);
    exit;
}

// Handle file upload
if ($_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = $_FILES['resume']['name'];
    $fileSize = $_FILES['resume']['size'];
    $fileType = $_FILES['resume']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
    $allowedfileExtensions = array('pdf', 'doc', 'docx');
    
    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Directory where files will be saved
        $uploadFileDir = './uploaded_files/';
        $dest_path = $uploadFileDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $resume = $dest_path;
        } else {
            echo json_encode(['success' => false, 'message' => 'Error moving the file to upload directory.']);
            exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions)]);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Error uploading the file. Error code: ' . $_FILES['resume']['error']]);
    exit;
}

// If all form data and file upload are valid, proceed with database insertion and email sending
if ($firstName && $lastName && $email && $phone && $message && isset($resume)) {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO info (first_name, last_name, email, phone, applying_for, message, resume) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $applyingFor, $message, $resume);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Send emails
        $mail_sent_to_applicant = mail($email, "Application Received", "Dear $firstName $lastName,\n\nThank you for applying for the $applyingFor position. We will review your application and contact you shortly.\n\nBest regards,\nHR Team");
        $mail_sent_to_hr = mail("hr@example.com", "New Application Received", "New application received:\n\nFirst Name: $firstName\nLast Name: $lastName\nEmail: $email\nPhone: $phone\nApplying For: $applyingFor\nMessage: $message\nResume: $resume");

        if ($mail_sent_to_applicant && $mail_sent_to_hr) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send emails.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    // Close statement
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
}

// Close connection
$conn->close();
?>
