<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Internet cafe by Waiwarn</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
  <link rel="icon" href="logo.png" type="image/png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="scoll.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap');

    * {
      font-family: 'Kanit', sans-serif;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /* GLOBAL STYLES
    --------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top border" style="background: lightblue;">
      <div class="container-fluid">
        <img src="../logo.png" alt="" width="5%">
        <a class="navbar-brand" href="#">Waiwarn</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--  -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <!--  -->
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <!--  -->
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>

          <form class="d-flex">

            <?php
            if (!isset($_SESSION['userid'])) {
              ?>
              <a class="btn btn-sm btn-outline-dark" href="loginadmin/login.php" role="button">Login</a>
              &nbsp;
              <a class="btn btn-sm btn-outline-dark" href="loginadmin/register.php" role="button">Sign up</a>
            <?php } else {
              ?>
              <div class="profile-section">
                <style>
                  .circle {
                    border-radius: 50%;
                    background-color: #50241f;
                    display: inline-block;
                    width: 40px;
                    height: 40px;
                    text-align: center;
                    line-height: 40px;
                    color: white;
                    font-size: 24px;
                    margin-right: -20px;
                  }
                </style>

                <a class="navbar-brand" aria-current="page">
                  <span class="circle">
                    <?php echo substr($_SESSION['user'], 0, 1); ?>
                  </span>&nbsp;
                </a>

              </div>
              &nbsp;
              <!-- <button type="button" class="btn btn-primary ml-2" > <?php echo $_SESSION['user']; ?> </button> -->
              <a class="navbar-brand" aria-current="page">
                <?php echo $_SESSION['user']; ?>

                <i class="bi bi-person-check-fill text-success m-3"></i>
              </a>
              &nbsp;
              <div>
                <?php
                  if($_SESSION['userlevel'] != 'm' ){
                ?>
                  <a class="btn btn-outline-primary" href="admin-dashboard/index.php" role="button">Dashboard</a>
                <?php
                  }
                ?>
                <?php
                if($_SESSION['userlevel'] != 'd'){
                ?>    
                <a type="button" class="btn btn-info" href="./loginadmin/books_range.php">Booking</a>
                <?php
                }
                ?>
                <a class="btn btn-outline-danger" href="loginadmin/logout.php" role="button">Logout</a>
              </div>



            <?php } ?>
          </form>
          &nbsp;
        </div>

      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">          
            <img src="1.jpg" alt="Alternative text" width="100%" style="filter: contrast(110%) brightness(95%);">
            
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>ร้านเกมส์ราคาย่อมเยาว์ ราคาประหยัด คุณภาพคุ้มเกินราคา</h1>
              <p>เริ่มต้นเพียงชั่วโมงละ 20 บาทเท่านั้น</p>
              <p><a class="btn btn-lg btn-primary" href="loginadmin/register.php" role="button">สมัครเลย</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          
            <img src="2.jpg" alt="Alternative text" width="100%" style="filter: contrast(110%) brightness(95%);">            
          


          <div class="container">
            <div class="carousel-caption">
              <h1>บริการมากมายภายในร้าน</h1>
              <p>ร้านสะอาด อาหารอร่อย เดินทางสะดวก</p>
              <p><a class="btn btn-lg btn-primary" href="#about" role="button">เพิ่มเติม</a></p>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" id="about">

      <!-- Three columns of text below the carousel -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">ร้านสะอาด
          </h2>
          <p class="lead">ภายในร้านของเรามีอุปกรณ์ให้พร้อมทั้ง เมาส์, หูฟัง, จอ, คีย์บอร์ดและอื่นๆ
            ที่มีคุณภาพเหมาะสำหรับเหล่าเกมเมอร์ที่ต้องการสถานที่ในการความพร้อมในการเล่นเกมส์และมีความสะอาด
            พร้อมร้านค้าสำหรับซื้ออาหาร ครบจบที่นี่ ที่เดียว
          </p>
        </div>
        <div class="col-md-5">
          <img src="3.jpg" class="rounded" alt="" width="100%">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">ความพร้อมด้านการแข่งขัน</h2>
          <p class="lead">เหมาะสำหรับจัดงานแข่งขันที่มีขนาดเล็กโดยมีห้องส่วนตัวสำหรับนักกีฬา</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="4.jpg" class="rounded" alt="" width="100%">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">ทำเลที่ตั้ง</h2>
          <p class="lead">เดินทางสะดวกมาได้ทั้ง รถไฟฟ้าทั้งใต้ดินและบีทีเอส มีรถเมย์ผ่าน มีแท็กซี่จอดหน้าร้านหรือแม้กระทั่งลานจอดสำหรับเฮริคอปเตอร์
          รวมไปถึงท่าเรือส่วนตัวด้านหลังร้าน สามารถสมัครสมาชิกเพื่อรับสิทธิพิเศษต่างๆและกิจกรรมอื่นๆอีกมากมาย
          </p>
        </div>
        <div class="col-md-5">
          <img src="5.jpg" class="rounded" alt="" width="100%">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p><a class="btn btn-sm btn-outline-dark" href="#" role="button">Back to top</a></p>
      <p>&copy; 2023 Project Gaming Cafe by Waiwarn group, Inc.
        <!-- &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> -->
      </p>
    </footer>
  </main>



</body>

</html>