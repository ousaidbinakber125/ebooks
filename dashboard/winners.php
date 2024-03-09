<?php
include "conn.php";
include 'adminsession.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Winners</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap");

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    nav {
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
    }

    nav ul,
    nav ul li {
      outline: 0;
    }

    nav ul li a {
      text-decoration: none;
    }

    body {
      font-family: "Nunito", sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-image: url(images/);
      background-repeat: no-repeat;
      background-size: cover;
      /* background: rgb(254, 254, 254); */
    }

    /* MAIN MENU */

    main {
      display: grid;
      grid-template-columns: 13% 87%;
      min-height: 100vh;
      width: 100%;
      margin: 40px;
      background: rgb(254, 254, 254);
      box-shadow: 0 0.5px 0 1px rgba(255, 255, 255, 0.23) inset,
        0 1px 0 0 rgba(255, 255, 255, 0.66) inset, 0 4px 16px rgba(0, 0, 0, 0.12);
      border-radius: 15px;
      z-index: 10;
    }

    .main-menu {
      overflow: hidden;
      background: rgb(73, 57, 113);
      padding-top: 10px;
      border-radius: 15px 0 0 15px;
      font-family: "Roboto", sans-serif;
    }

    .main-menu h1 {
      display: block;
      font-size: 1.5rem;
      font-weight: 500;
      text-align: center;
      margin: 20px 0 30px;
      color: #fff;
      font-family: "Nunito", sans-serif;
    }

    .sidelogo {
      display: none;
    }

    .nav-item {
      position: relative;
      display: block;
    }

    .nav-item a {
      position: relative;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 1rem;
      padding: 15px 0;
      margin-left: 10px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }

    .nav-item b:nth-child(1) {
      position: absolute;
      top: -15px;
      height: 15px;
      width: 100%;
      background: #fff;
      display: none;
    }

    .nav-item b:nth-child(1)::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-bottom-right-radius: 20px;
      background: rgb(73, 57, 113);
    }

    .nav-item b:nth-child(2) {
      position: absolute;
      bottom: -15px;
      height: 15px;
      width: 100%;
      background: #fff;
      display: none;
    }

    .nav-item b:nth-child(2)::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-top-right-radius: 20px;
      background: rgb(73, 57, 113);
    }

    .nav-item.active b:nth-child(1),
    .nav-item.active b:nth-child(2) {
      display: block;
    }

    .nav-item.active a {
      text-decoration: none;
      color: #000;
      background: rgb(254, 254, 254);
    }

    .nav-icon {
      width: 60px;
      height: 20px;
      font-size: 20px;
      text-align: center;
    }

    .nav-text {
      display: block;
      width: 120px;
      height: 20px;
      font-family: "Mulish", sans-serif;
    }

    @media (max-width: 1500px) {
      main {
        grid-template-columns: 6% 94%;
      }

      .main-menu h1 {
        display: none;
      }

      .sidelogo {
        display: block;
        width: 30px;
        margin: 20px auto;
      }

      .nav-text {
        display: none;
      }
    }

    @media (max-width: 1310px) {
      main {
        grid-template-columns: 8% 92%;
        margin: 30px;
      }
    }

    @media (max-width: 1150px) {
      .content {
        grid-template-columns: 60% 40%;
      }

      .left-content {
        grid-template-rows: 50% 50%;
        margin: 15px;
        padding: 20px;
      }
    }

    @media (max-width: 910px) {
      main {
        grid-template-columns: 10% 90%;
        margin: 20px;
      }

      .content {
        grid-template-columns: 55% 45%;
      }

      .left-content {
        grid-template-rows: 50% 50%;
        padding: 30px 20px 20px;
      }
    }

    @media (max-width: 800px) {
      .content {
        grid-template-columns: 52% 48%;
      }
    }

    @media (max-width: 700px) {
      main {
        grid-template-columns: 15% 85%;
      }

      .content {
        grid-template-columns: 100%;
        grid-template-rows: 45% 55%;
        grid-template-areas:
          "rightContent"
          "leftContent";
      }

      .left-content {
        grid-area: leftContent;
        grid-template-rows: 45% 55%;
        padding: 10px 20px 10px;
      }
    }

    /* header css */

    h1 {
      margin: 20px 0;
      color: #fff;
    }

    .center {
      text-align: center;
    }

    .nav-wrapper {
      display: flex;
      position: relative;
      flex-direction: row;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: space-between;
      margin: auto;
      width: 90%;
      height: 80px;
      border-radius: 0 0 15px 15px;
      padding: 0 25px;
      z-index: 2;
      background: #fff;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo {
      height: 60px;
    }

    a {
      text-decoration: none;
      color: black;
    }

    .btncolor {
      background: rgb(73, 57, 113);
      color: white;
    }

    .content {
      width: 100%;
      background-color: #fff;
      box-shadow: 0 0 5rem rgba(0, 0, 0, .4);
      border-radius: 2rem;
      z-index: 5;
      padding: 4rem 6rem;
      display: flex;
    }

    section {
      padding: 1rem 2rem;
      background-color: #fff;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      border-radius: .8rem;
    }

    section>h2 {
      font-size: 2rem;
      letter-spacing: .2rem;
      font-weight: 400;
      color: var(--color-primary);
    }

    .greeting {
      margin-bottom: 4rem;
      font-size: 1.4rem;
    }

    section {
      margin: 20px;
    }
  </style>
</head>

<body>
  <main>
    <nav class="main-menu">
      <h1>E BOOK</h1>
      <a href="../index.php"> <img class="sidelogo" src="images/book.png" alt="" /></a>
      <br><br><br>
      <div class="row">
        <ul class="col">
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="dashboard.php">
              <i class="bi bi-house nav-icon"></i>
              <span class="nav-text">Category</span>
            </a>
          </li>
          <br>

          <li class="nav-item  ">
            <b></b>
            <b></b>
            <a href="book.php">
              <i class="bi bi-person nav-icon"></i>
              <span class="nav-text">Book Detail</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="publishbk.php">
              <i class="bi bi-book nav-icon"></i>
              <span class="nav-text">Publishing Book</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="complist.php">
              <i class="bi bi-award-fill nav-icon"></i>
              <span class="nav-text">Competition List</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="customer.php">
              <i class="bi bi-people-fill nav-icon"></i>
              <span class="nav-text">Customer</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="dealer.php">
              <i class="bi bi-headset nav-icon"></i>
              <span class="nav-text">Dealer</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="orders.php">
              <i class="bi bi-card-checklist nav-icon"></i>
              <span class="nav-text">Orders</span>
            </a>
          </li>
          <br>
          <li class="nav-item active">
            <b></b>
            <b></b>
            <a href="winners.php">
              <i class="bi bi-trophy nav-icon"></i>
              <span class="nav-text">Winners</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- header -->
    <header>
      <div class="nav-wrapper">
        <div class="logo-container">
          <img class="rounded-circle mt-1" src="<?php echo "images/" . $rows['a_img'] ?>" width="53">

          <h5 class="text-center text-dark mt-4 mx-2 fw-bolder">
            <?php echo $user; ?>
          </h5>
        </div>
        <nav>

          <a href="adminlogout.php" class="btn btncolor" tabindex="-1" role="button" aria-disabled="true">Logout</a>
        </nav>
      </div>
      <br><br>
      <section>
        <h1 class="text-center fw-bold" style="color: rgb(73, 57, 113);">Winners</h1>
        <div class="container mt-5">
          <a class="btn btncolor" data-bs-theme="dark" href="winnerdetail.php">ADD WINNERS </a>
          <!-- Data display In table -->
          <table class="table mt-5 text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Customer Name</th>
                <th>Competition</th>
                <th>Discription</th>
                <th>Prize</th>
                <th>Submission Date</th>
                <th>Submission File</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // $sql = "SELECT winners.*, customer.*, competition_list.*, competition_submissions.*
              // FROM winners
              // INNER JOIN customer ON winners.w_id = customer.c_id
              // INNER JOIN competition_submissions ON winners.w_id = competition_submissions.customer_id
              // INNER JOIN competition_list ON competition_submissions.competition_id = competition_list.comp_id
              // WHERE winners.w_id = customer.c_id;";
              $query = "SELECT winner.* , customer.c_img , customer.c_email , competition_list.comp_name , competition_list.comp_description , competition_list.comp_prize_amount , competition_submissions.sub_date , competition_submissions.sub_file  from winner INNER JOIN customer ON winner.customer_id = customer.c_id INNER JOIN competition_list ON winner.competition_id = competition_list.comp_id INNER JOIN competition_submissions ON winner.submissions_id = competition_submissions.sub_id";
              $execute = mysqli_query($conn, $query);

              if (mysqli_num_rows($execute)) {
                while ($row = mysqli_fetch_array($execute)) {
                  ?>
                  <tr>
                    <td>
                      <?php echo $row['w_id'] ?>
                    </td>
                    <td><img src="<?php echo "images/" . $row['c_img'] ?>" alt="" width="50" height="50"></td>
                    <td>
                      <?php echo $row['c_email'] ?>
                    </td>
                    <td>
                      <?php echo $row['comp_name'] ?>
                    </td>
                    <td>
                      <?php echo $row['comp_description'] ?>
                    </td>
                    <td>
                      <?php echo $row['comp_prize_amount'] ?>
                    </td>


                    <td>
                      <?php echo $row['sub_date'] ?>
                    </td>
                    <td>
                      <?php echo $row['sub_file'] ?>
                    </td>

                    <?php

                }
              }

              ?>

                <!-- <td><a class="btn btn-primary w-75" href="bookdetail_edit.php?id=<?php echo $row['b_id'] ?>">Edit</a>
                    <a class="btn btn-danger w-75 mt-2" href="bookdetail_delete.php?id=<?php echo $row['b_id'] ?>">Delete</a></td> -->
              </tr>
              <?php

              ?>
            </tbody>
          </table>
          <!-- Data display In table End -->
        </div>
        </div>
      </section>


    </header>
  </main>
  <!-- header end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const navItems = document.querySelectorAll(".nav-item");

    navItems.forEach((navItem, i) => {
      navItem.addEventListener("click", () => {
        navItems.forEach((item, j) => {
          item.className = "nav-item";
        });
        navItem.className = "nav-item active";
      });
    });
  </script>


</body>

</html>