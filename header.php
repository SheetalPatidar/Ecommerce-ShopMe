<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopMe Ecommerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        footer ul {
    list-style-type: none;
    padding-left: 0; /* Optional: removes any default padding */
}

body {
        padding-top: 70px; /* Adjust the value accordingly based on your navbar height */
    }

    /* Add this CSS to your stylesheet or within a <style> tag in your header.php file */

.full-width-image-section {
    width: 100%;
    overflow: hidden; /* To ensure the image doesn't overflow */
}

.full-width-image-section img {
    width: 100%;
    height: auto;
}

.about-section {
    padding: 50px 0; /* Add some padding for spacing */
}

.about-section .container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-section h2, 
.about-section p {
    margin-bottom: 20px;
}

.registration-card {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
  }

  .card-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
  }

  .error {
    color: red;
  }

  .card-content label {
    display: block;
    margin-bottom: 8px;
  }

  .card-content input[type="text"],
  .card-content input[type="email"],
  .card-content input[type="password"],
  .card-content textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .card-content input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .card-content input[type="submit"]:hover {
    background-color: #0056b3;
  }
  /* Centering the login-card */
.login-container {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100vh; /* Full viewport height */
    padding: 20px; /* Add padding from all sides */
    background-color: #f4f4f4;
}
.profile-container {
    padding: 20px;
}

.user-list {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f5f5f5;
}

tr:hover {
    background-color: #f5f5f5;
}

/* Optional: Style for responsiveness */
@media screen and (max-width: 600px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    tr {
        margin-bottom: 15px;
    }

    td {
        border: none;
        position: relative;
        padding-left: 50%;
    }

    td:before {
        position: absolute;
        top: 0;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
    }

    td:nth-of-type(1):before { content: "First Name:"; }
    td:nth-of-type(2):before { content: "Last Name:"; }
    td:nth-of-type(3):before { content: "Email:"; }
    td:nth-of-type(4):before { content: "Username:"; }
    td:nth-of-type(5):before { content: "Password:"; }
    td:nth-of-type(6):before { content: "Address:"; }
}
/* Dark Theme Styles */



/* Dark Theme Styles */
body.dark-theme {
  background-color: #2D6E7E;
  
}


.theme-switch {
    display: inline-block;
    position: relative;
    margin-left: 20px;
    margin-right: 20px;
    width: 80px; /* Increased width for a larger toggle */
    height: 44px; /* Increased height for a larger toggle */
    vertical-align: middle;
}

/* Hide the default checkbox */
.theme-switch input[type="checkbox"] {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
    right: 0;
    height: 34px; /* Adjusted height */
    background: linear-gradient(to right, #1F6E8C, #3A99D9);
    border-radius: 50px; /* More rounded shape for a smoother appearance */
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2); /* Enhanced shadow for depth */
    transition: background 0.3s ease, transform 0.3s ease; /* Added transform for smoother animation */
}

.slider:before {
    content: "";
    position: absolute;
    height: 34px; /* Adjusted height */
    width: 34px; /* Adjusted width */
    left: 4px;
    background-color: #ffffff;
    border-radius: 50%; 
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

/* Dark Theme Styles */
.theme-switch input:checked + .slider {
    background: linear-gradient(to right, #555555, #333333);
}

.theme-switch input:checked + .slider:before {
    transform: translateX(calc(100% - 38px)); /* Adjusted movement for a larger toggle */
}








  </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/images/ShopMe-white.png" width="180" alt="ShopMe Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="womenCategory.php">Womens</a>
                          <a class="dropdown-item" href="menCategory.php">Men</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="kidsCategory.php">Kids</a>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                    <li>
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" onchange="toggleTheme()">
        <div class="slider"></div>
    </label>
</li>
                    
        

<!-- Display profile dropdown if user is logged in -->
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><?php echo  $_SESSION['username']; ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php?logout=true">Logout</a>
        </div>
    </li>
<?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark text-white ml-2" href="rgister.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-white ml-2" href="profile.php">Users</a>
                    </li>

                    <!-- Implement Chnage theme toggle here -->

                    <?php endif; ?>

                   
                    

                </ul>
            </div>
        </div>
    </nav>