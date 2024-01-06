<!-- Footer -->
<footer style="background-color: black;" class="text-white py-4" id="contact">
        
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="first-item">
                    <div class="logo">
                        <img src="assets/images/ShopMe-black.png" alt="ShopMe ecommerce">
                    </div>
                    <ul>
                        <li><a href="#">12, Rajendra Nagar, Indore, India</a></li>
                        <li><a href="#">shopme@gmail.com</a></li>
                        <li><a href="#">9992299928</a></li>
                    </ul>
                </div>
            </div>
    <div class="col-lg-4 text-center">
        <h4>Shopping &amp; Categories</h4>
        <ul>
            <li><a href="menCategory.php">Men’s Shopping</a></li>
            <li><a href="womenCategory.php">Women’s Shopping</a></li>
            <li><a href="kidsCategory.php">Kid's Shopping</a></li>
        </ul>
    </div>
    <div class="col-lg-4 text-center">
        <h4>Useful Links</h4>
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    
    
        </div>
        <div class="container text-center">
            <p>&copy; 2024 ShopMe Ecommerce. All Rights Reserved.</p>
        </div>
</footer>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

  
  function toggleTheme() {
    const body = document.body;
    if (body.classList.contains('dark-theme')) {
      body.classList.remove('dark-theme');
      localStorage.setItem('theme', 'light');
    } else {
      body.classList.add('dark-theme');
      localStorage.setItem('theme', 'dark');
    }
  }

  // Check for stored theme preference on page load
  document.addEventListener('DOMContentLoaded', function() {
    const theme = localStorage.getItem('theme');
    if (theme === 'dark') {
      document.body.classList.add('dark-theme');
    }
  });
</script>

</body>

</html>
