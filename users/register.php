<?php
include '../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if email already exists
    $check_sql = "SELECT id FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();
    if ($check_stmt->num_rows > 0) {
        // Email already registered
        echo "Email already registered!";
    } else {
        // Insert new user
        $insert_sql = "INSERT INTO users (full_name, email, address, phone, dob, password) VALUES (?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("ssssss", $full_name, $email, $address, $phone, $dob, $password);
        if ($insert_stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $insert_stmt->error;
        }
        // Close the insert statement
        $insert_stmt->close();
    }
    // Close the check statement
    $check_stmt->close();

    // Close the database connection
    $conn->close();
}
?>
