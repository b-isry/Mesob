<?php

session_start();
require_once("connect.php");

$id = $_GET['id'];

$get_info = "SELECT name , type , price, description FROM menu WHERE id = '$id'";
$result = mysqli_query($con, $get_info);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$type = $row['type'];
$price = $row["price"];
$description = $row["description"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mesob</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- <link href="../assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Mesob<span>.</span></h1>
      </a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Admin Panel</h2>
          <ol>
            <li><a href="../index.html">Home</a></li>
            <li>Admin Panel</li>
          </ol>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section class="book-a-table">
      <div class="container text-center" data-aos="fade-up">
        <div class="section-header">
          <h2>Menu</h2>
          <p>Update <span>Your</span> Menu</p>
        </div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="./update_menu.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
            Dish's name: <input type="text" name="name" value="<?php echo $name ?>">
          <br><br>
            </div>
            <div class="col-lg-4 col-md-6">
            Price: <input type="number" name="price" value="<?php echo $price ?>">
          <br><br>
            </div>
          </div>
          
         

          Type:<select name="Ftype" id="Ftype" data-msg="Please select one">
            <option value="" placeholder>Select the type of your dish</option>
            <option value="Appetizer" <?php echo ($type == 'Appetizer') ? 'selected' : '' ?>>Appetizer</option>
            <option value="Main Course" <?php echo ($type == 'Main Course') ? 'selected' : '' ?>>Main Course</option>
            <option value="Dessert" <?php echo ($type == 'Dessert') ? 'selected' : '' ?>>Dessert</option>
            <option value="Drinks" <?php echo ($type == 'Drinks') ? 'selected' : '' ?>>Drinks</option>
          </select>
          <br><br>
          Description:<textarea name="description" rows="5" value="<?php echo $description ?>"></textarea>
          <br><br>
          <input type="submit" value="submit" class="text-center btn-book-a-table" name="submit">


        </form>
        </div>

      </div>


    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mesob</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../assets/vendor/aos/aos.js"></script> -->
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>