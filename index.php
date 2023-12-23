

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Sastah</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="herobanner">
        <img src="./assests/Rectangle 1.svg" alt="" class="bg-img">
        <nav class="navbar navbar-expand-md navbar-light slider fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)"><img src="./assests/logo-black 1.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                      <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around " id="mynavbar">
                <ul class="navbar-nav m-auto text-primary">
                    <li class="nav-item">
                       <a class="nav-link active" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="javascript:void(0)">About us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="javascript:void(0)">Statergy</a>
                    </li>
                    <li class="nav-item">
                        
                       <a class="nav-link" href="javascript:void(0)">Technology</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="javascript:void(0)">Service</a>
                    </li>
                </ul>
                <div class="d-flex" id="contact">
                    <a href="" class="contact" id="contact">Contact Us</a>
                </div>
                </div>
            </div>
            </nav>

            <!--Slider -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class=" slider-page">
                            <div class="main">
                                <div class="slider slider-for">
                                  <div class="main">
                                    <div class="slider slider-nav">
                                      <div><h5 class="hero-banner-tittle">Sastah</h5><p class="hero-banner-describtion">is a leading global technology services company</p></div>
                                      <div><h5 class="hero-banner-tittle">Sastah</h5><p class="hero-banner-describtion">is a leading global technology services company</p></div>
                                      <div><h5 class="hero-banner-tittle">Sastah</h5><p class="hero-banner-describtion">is a leading global technology services company</p></div>
                                      <div><h5 class="hero-banner-tittle">Sastah</h5><p class="hero-banner-describtion">is a leading global technology services company</p></div>
                                      <div><h5 class="hero-banner-tittle">Sastah</h5><p class="hero-banner-describtion">is a leading global technology services company</p></div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                    </div>

                </div>
        </div>
    </section>
<?php 
include('../includes/database.php');

              $sql="SELECT * FROM `body` where id=1";
              $result=mysqli_query($connect,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){

?>
    <!-- Our Service -->
    <section  class="card-title service">
        <div class="container ">
        <div class="card-tittle-image"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <p class="service-card"><span class="our-card">Our</span> Services</p>
            </div>
            <div class="row">
                <div class="col-md-5 none our-service " >
                        <div class="card-position  zoom" >
                            <ul class="hover-container d-flex justify-content-start p-0 list-unstyled">
                                <li class="position-relative"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup"><img src="./assests/Group 9.svg" alt="" height="50" width="50" ></a>
                                </li>
                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content "  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
<?php
        }
    }
?>

<?php 
include('../includes/database.php');

              $sql="SELECT * FROM `body` where id=2";
              $result=mysqli_query($connect,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){

?>
                <div class="col-md-7 none  list-unstyled our-service card-top">
                        <div class="card-position zoom">
                            <ul class="hover-container d-flex justify-content-start p-0 list-unstyled">
                                <li class="position-relative"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" >
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup"><img src="./assests/Group 9.svg" alt="" height="50" width="50" ></a>
                                </li>
                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
            </div>
  <?php
        }
    }
  ?>

            <div class="row">
             <?php 
            include('../includes/database.php');

                        $sql="SELECT * FROM `body` where id=3";
                        $result=mysqli_query($connect,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){

            ?>
                <div class="col-md-2 none  list-unstyled our-service card-top"></div>
                <div class="col-md-5 none our-service list-unstyled ">
                        <div class="card-position zoom">
                            <ul class="hover-container d-flex justify-content-end p-0 list-unstyled">
                                <li class="position-relative "  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup" ><img src="./assests/Group 9.svg" alt="" height="50" width="50" ></a>
                                </li>
                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
                <?php
                    }
                }
                ?>

             <?php 
            include('../includes/database.php');

                        $sql="SELECT * FROM `body` where id=4";
                        $result=mysqli_query($connect,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
            ?>
                <div class="col-md-5 none  our-service card-top">
                        <div class="card-position zoom">
                            <ul class="hover-container d-flex justify-content-start p-0 list-unstyled ">
                                <li class="position-relative"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup"><img src="./assests/Group 9.svg" alt="" height="50" width="50" ></a>
                                </li>                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="row">
             <?php 
            include('../includes/database.php');

                        $sql="SELECT * FROM `body` where id=5";
                        $result=mysqli_query($connect,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
            ?>
                <div class="col-md-5 none our-service">
                        <div class="card-position zoom">
                            <ul class="hover-container d-flex justify-content-start p-0 list-unstyled ">
                                <li class="position-relative zoom "  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup"><img src="./assests/Group 9.svg" alt="" height="50" width="50" ></a>
                                </li>                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
                <?php
                    }
                }
                ?>

             <?php 
            include('../includes/database.php');

                        $sql="SELECT * FROM `body` where id=6";
                        $result=mysqli_query($connect,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){

            ?>
                <div class="col-md-7 none  our-service card-top mobile">
                        <div class="card-position zoom ">
                            <ul class="hover-container d-flex justify-content-start p-0 list-unstyled">
                                <li class="position-relative"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <img src="./assests/<?php echo $row['card_image'];?>" alt="Data Center service"   class="zoom-card-img">
                                    <a href="" class="popup"><img src="./assests/Group 9.svg" alt="" height="50" width="50"></a>
                                </li>                            </ul>
                            <h5 class="card-heading"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"><?php echo $row['card_title'];?></h5>
                            <p class="card-content"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2250"><?php echo $row['card_content'];?></p>
                        </div>                
                </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </section>

    <!-- about sastah -->
    <section class="about ">
        <div class="container " >
            <div class="row map-space">
                <div class="col-md-4"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <div class="card-tittle-image our-card ">
                        <p class="service-card "><span class="our-card">About</span> Sastah</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-content ">
                        <p  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Sastah is a leading global professional services company, providing a broad range of services and solutions in strategy, consulting, technology, and operations.</p>
                        <p  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">We are dedicated to help businesses grow and sustain its position in the market through technology solutions that helps organizations to overcome complexity and ignite innovation. Sastah takes pride in building strategic long-term relationships with customers. Sastah collaborates with clients to help them maximize their IT investments.</p>
                        <p  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">We value dedication to every customer's success and trust and accountability in all customer relationships.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Companies -->
    <section class="companies">
        <div class="container">
            <div class="row map-space">
                <div class="col-md-12">
                    <div class="splide slider">
                        <div class="splide__track  " id="splide-track"  >
                          <ul class="splide__list d-flex flex-direction-column list-unstyled">
                            <li class="splide__slide">
                              <img src="./assests/amazonws 1.svg" alt="Amazon" >
                            </li>
                            <li class="splide__slide">
                              <img src="./assests/Group 20.svg" alt="Google cloud" >
                            </li>
                            <li class="splide__slide">
                              <img src="./assests/Group 21.svg" alt="A" >
                            </li>
                            <li class="splide__slide">
                              <img src="./assests/Group 22.svg" alt="Dev Oops" >
                            </li>
                            <li class="splide__slide">
                              <img src="./assests/Group 23.svg" alt="Big Data" >
                            </li>
                          </ul> 
                        </div> 
                      </div> 
                </div>
            </div> 
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer">Copyrights © 2023-2038 - www.sastah.com</p>
                </div>
            </div>
        </div>
    </footer> 

    <!-- Scripts, bootstrap and jquery -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>

</body>
</html>