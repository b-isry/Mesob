<?php

session_start();
require_once('connect.php');

$selectQuery = "SELECT * FROM menu WHERE R_id = '".$_SESSION['id']."'";

$response = mysqli_query($con, $selectQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mesob</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

    <section class="sample-page">
    <div class="container text-center" data-aos="fade-up">
        <div class="section-header">
            <h2>Menu</h2>
        </div>
        <table class="table tabled-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php


                function updateId($id)
                {
                    return "edit.php?id=" .$id;
                }

                function addId($id)
                {
                    return "add_menu_form.php?id=" .$id;
                }

                function deleteId($id)
                {
                    return "delete.php?id=" .$id;
                }




                while ($row = mysqli_fetch_assoc($response)) {
                ?>
                    <tr>
                        <td> <?php echo $row['id'];  ?> </td>
                        <td> <?php echo $row['name'];  ?> </td>
                        <td> <?php echo $row['type'];  ?> </td>
                        <td> <?php echo $row['price'];  ?> </td>
                        <td> <?php echo $row['description'];  ?> </td>
                        <td>
                        
                            <a class="btn btn-primary btn-sm" href='<?php echo  addId($row['id']);  ?>'>Add</a>
                            <a class="btn btn-primary btn-sm" href='<?php echo  updateId($row['id']);  ?>'>Edit</a>
                            <a class="btn btn-danger btn-sm" href='<?php echo  deleteId($row['id']);  ?>'>Delete</a>
                        </td>
                    </tr>
                <?php };  ?>
            </tbody>
        </table>
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