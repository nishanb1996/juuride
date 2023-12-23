<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 mb-5 rounded sticky-top">
        <div class="container-fluid px-5">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#"><img height="60px" src="assets/images/JUU RIDE Logo-Latest.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  px-4">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="services.php">Services</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript to handle active class on click
  $('.navbar-nav .nav-link').on('click', function(){
    $('.navbar-nav').find('.active').removeClass('active');
    $(this).addClass('active').closest('.nav-item').addClass('active');
  });
</script>
</body>
</html>


 -->



<!-- 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Navbar</title>
   Add Bootstrap CSS 
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for active tab */
    .navbar .nav-item.active a {
      /* background-color: #007bff !important; */
      color:#F27405 !important; 
      /* color: #fff !important; */

    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 


  <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#"><img height="60px" src="assets/images/JUU RIDE Logo-Latest.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active px-4">
        <a class="nav-link " aria-current="page" href="#home">Home</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link " href="#about">About</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link " href="#services">Services</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link " href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript to handle active class on click
  $('.navbar-nav .nav-link').on('click', function(){
    $('.navbar-nav').find('.active').removeClass('active');
    $(this).addClass('active').closest('.nav-item').addClass('active');
  });
</script>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Navbar</title>
  <!-- Add Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for active tab */
    .navbar .nav-item .nav-link.active {
      color: #F27405 !important;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="d-flex align-items-center">
    <a class="navbar-brand" href="#"><img height="60px" src="assets/images/JUU RIDE Logo-Latest.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item px-4">
        <a class="nav-link" href="index.php" onclick="changeColor(this)">Home</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="about.php" onclick="changeColor(this)">About</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="services.php" onclick="changeColor(this)">Services</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="contact-us.php" onclick="changeColor(this)">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<script>
  function changeColor(link) {
    var links = document.querySelectorAll('.navbar-nav .nav-link');
    links.forEach(function(item) {
      item.classList.remove('active');
      item.style.color = ''; // Reset color for all links
    });

    link.classList.add('active');
    link.style.color = '#F27405'; // Change color for the clicked link
  }
</script>

</body>
</html>












