
<?php
// Include the database connection file
require_once './db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $first = $_POST['first'];
    $last = $_POST['last'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    if (isset($_FILES['profile_image'])) {
        $file = $_FILES['profile_image'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_destination = '../src/images/profiles/' . $file_name;
    
        // Move the uploaded file to the destination folder
        move_uploaded_file($file_tmp, $file_destination);
    }

    // Prepare the insert query
    $query = "INSERT INTO profile (username, firstname, lastname, email, phonenumber, address, city, country, zip, gender, dob, profileimage) 
              VALUES ((SELECT MAX(uid) FROM profile) + 1, '$first', '$last', '$email', $phone, '$address', '$city', '$country', $zip, '$gender', '$birthday', '$profileimage')";

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Redirect to dashboard.php
        header("Location: dashboard.php");
        exit;
    } else {
        // Handle the error
        echo "Error: " . mysqli_error($connection);
    }

}
?>
