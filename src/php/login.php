
<?php
// Start the session
@session_start();
// MySQL server credentials
require 'db.php';

if (isset($_POST["username"])) {
  $username = $_POST["username"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the username and password from the form
  $username = $_POST["username"];
  $password = $_POST["password"];
  // Query to check if the user exists in the "users" table
  $query = "SELECT * FROM users WHERE username = ? AND password = ?";
  if ($conn instanceof mysqli) {
    $stmt = $conn->prepare($query);
  } else {
    echo "Connection error.";
    exit;
  }
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if (!$result) {
    echo "Error executing the query.";
    exit;
  }

  $row = $result->fetch_assoc();
  $id = $row['uid'];

  // Check if the user exists
  if ($result->num_rows > 0) {
    // Store the username in the session
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    
    // Set a cookie with the user's id
    setcookie("user_id", $id, time() + (86400 * 30), "/"); // Cookie expires in 30 days
    
    echo "<script>
      window.location.href = '../dashboard.php';
    </script>";
  } else {
    echo "<script>window.location.href = '../login.html'; 
    </script>";
  }
}

?>
