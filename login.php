<?php include('header.php'); ?>
<?php

include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    // Fetch user by username
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}

// Logout functionality
if (isset($_GET['logout'])) {
  session_destroy();
  echo '<script>window.location.href = "index.php";</script>'; // Redirect to index or wherever you want
  exit; // Exit to prevent further execution
}
?>

<div class="login-container">
    <div class="login-card">
        <div class="card-content">
            <h2>User Login</h2>
            <form id="loginForm" action="login.php" method="post">
                <!-- Fields and content as you provided -->
           

      <!-- Username Field -->
      <div class="row">
        <div class="col-md-12">
          <label for="loginUsername">Username:</label>
          <input type="text" id="loginUsername" name="loginUsername" class="form-control" required>
        </div>
      </div>

      <!-- Password Field -->
      <div class="row">
        <div class="col-md-12">
          <label for="loginPassword">Password:</label>
          <input type="password" id="loginPassword" name="loginPassword" class="form-control" required>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="Login" class="btn btn-primary">
        </div>
      </div>

    </form>
    </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>