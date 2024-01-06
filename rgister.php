<?php include('header.php'); ?>
<?php include('db_connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $address = $_POST['address'];

    try {
        // Prepare SQL statement to insert user details into the 'users' table
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, username, password, address) VALUES (:firstName, :lastName, :email, :username, :password, :address)");

        // Bind parameters
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':address', $address);

        // Execute the query
        $stmt->execute();
        echo '<script>window.location.href = "profile.php";</script>';

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<div class="registration-card">
  <div class="card-content">
    <h2>User Registration Form</h2>

    <form id="registrationForm" action="rgister.php" method="post">
      
      <!-- First Name and Last Name in the same row -->
      <div class="row">
        <div class="col-md-6">
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" class="form-control" required>
          <span id="firstNameError" class="error"></span>
        </div>
        <div class="col-md-6">
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" class="form-control" required>
          <span id="lastNameError" class="error"></span>
        </div>
      </div>
      
      <!-- Email and Username in the same row -->
      <div class="row">
        <div class="col-md-6">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
          <span id="emailError" class="error"></span>
        </div>
        <div class="col-md-6">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" class="form-control" required>
          <span id="usernameError" class="error"></span>
        </div>
      </div>
      
      <!-- Password in a single row -->
      <div class="row">
        <div class="col-md-12">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" class="form-control" required>
          <span id="passwordError" class="error"></span>
        </div>
      </div>
      
      <!-- Address in a single row -->
      <div class="row">
        <div class="col-md-12">
          <label for="address">Address:</label>
          <textarea id="address" name="address" class="form-control" required></textarea>
          <span id="addressError" class="error"></span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="Register" class="btn btn-primary">
        </div>
      </div>
      
    </form>
  </div>
</div>



<script>
document.getElementById('registrationForm').addEventListener('submit', function(e) {
  let isValid = true;

  // Validation for First Name
  const firstName = document.getElementById('firstName').value.trim();
  if (firstName === '') {
    document.getElementById('firstNameError').textContent = 'First Name is required.';
    isValid = false;
  } else {
    document.getElementById('firstNameError').textContent = '';
  }

  // Validation for Last Name
  const lastName = document.getElementById('lastName').value.trim();
  if (lastName === '') {
    document.getElementById('lastNameError').textContent = 'Last Name is required.';
    isValid = false;
  } else {
    document.getElementById('lastNameError').textContent = '';
  }

  // Validation for Username
  const username = document.getElementById('username').value.trim();
  if (username === '') {
    document.getElementById('usernameError').textContent = 'Username is required.';
    isValid = false;
  } else {
    document.getElementById('usernameError').textContent = '';
  }

  // Validation for Email
  const email = document.getElementById('email').value.trim();
  if (email === '') {
    document.getElementById('emailError').textContent = 'Email is required.';
    isValid = false;
  } else if (!/\S+@\S+\.\S+/.test(email)) {
    document.getElementById('emailError').textContent = 'Invalid email format.';
    isValid = false;
  } else {
    document.getElementById('emailError').textContent = '';
  }

  // Validation for Address
  const address = document.getElementById('address').value.trim();
  if (address === '') {
    document.getElementById('addressError').textContent = 'Address is required.';
    isValid = false;
  } else {
    document.getElementById('addressError').textContent = '';
  }

  // Validation for Password
  const password = document.getElementById('password').value.trim();
  if (password === '') {
    document.getElementById('passwordError').textContent = 'Password is required.';
    isValid = false;
  } else if (password.length < 6) {
    document.getElementById('passwordError').textContent = 'Password should be at least 6 characters.';
    isValid = false;
  } else {
    document.getElementById('passwordError').textContent = '';
  }

  if (!isValid) {
    e.preventDefault(); // Prevent form submission if validation fails
  }
});
</script>


<?php include('footer.php'); ?>