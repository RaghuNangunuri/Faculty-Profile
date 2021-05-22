
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Faculty Profile - KITS(S)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/clg.png" rel="icon">
  <link href="assets/img/clg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.0.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  
 
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?echo 'https://kitssingapuram.ac.in/facultyp/'.$image_path;?>" alt="" class="img-fluid rounded-circle">
        
        <h6 class="text-light text-center"><?echo $personalrow[21]." ".$personalrow[1]." ".$personalrow[2];?></h6>
        <p class="text-light text-center"><? echo $uid;?></p>
        <div class="social-links mt-3 text-center">
          <a href="<?echo $socialrow[1];?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="<?echo $socialrow[2];?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?echo $socialrow[3];?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?echo $socialrow[4];?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          
          
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#publication" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Publications</span></a></li>
          <li><a href="#attended" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Attended</span></a></li>
          <li><a href="#other" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Other</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <div class="row">
            <div class="col-lg-2" data-aos="fade-in">
                </div>
          <div class="col-lg-8" data-aos="fade-in">
      <h1><?echo "  ".$personalrow[21]." ".$personalrow[1]." ".$personalrow[2];?></h1>
      <p><span class="typed" data-typed-items="<?echo "  ".$personalrow[5];?>, in Department of <?echo "  ".$personalrow[6];?>"></span></p>
          </div>
          <div class="col-lg-2" data-aos="fade-in">
                </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
          

        <div class="section-title">
          <h2>About</h2>
          <h1><?echo $personalrow[21]." ".$personalrow[1]." ".$personalrow[2];?></h1>
           
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?echo 'https://kitssingapuram.ac.in/facultyp/'.$image_path;?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?echo $personalrow[5];?> in Department of <?echo $personalrow[6];?></h3>
            <!--<p class="font-italic">
              Dept. of CSE
            </p> -->
            
            
            
            
            <div class="row">
              <div class="col-lg-6">
                  
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Qualification:</strong> <span><?echo $personalrow[4];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><i class="fa fa-envelope fa-fw"></i>Email:</strong> <span><?echo $personalrow[9];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><i class="fa fa-phone fa-fw"></i>Phone:</strong> <span>+91-<?echo $personalrow[7];?></span></li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong> <span><? echo(funexp($personalrow[25])); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>JNTU ID:</strong> <span><?echo $personalrow[13];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>AICTE ID:</strong> <span><?echo $personalrow[14];?></span></li>
                  
                </ul>
              </div>
            </div>
            <p>
              </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        

        <div class="row no-gutters">

          <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <div class="table-responsive">
              
             <?
                $sql="select * from education where emailid='$uid' order by yearof desc";
                if($res=mysqli_query($conn,$sql))
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Educational Details</h2></div>';

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Qualification</th><th align='left'>Specialization</th><th align='left'>University</th><th align='left'>Year</th></tr></thead>";
                while($row = mysqli_fetch_array($res))
                {
                $a=$row[2];
                $b=$row[3];
                $c=$row[4];
                $d=$row[5];
                $x="click here";
                echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td></tr>";
                }
                echo "</table>";
                }
                ?>
 
          </div>
            </div>
          </div>


        </div>
        <!-- End education -->
        
        

        <div class="row no-gutters">

          <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <div class="table-responsive">
              
             <?
                $sql="select * from profession where emailid='$uid' order by fromyear desc";
                if($res=mysqli_query($conn,$sql))
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Professional Details</h2></div>';

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>From</th><th align='left'>To</th><th align='left'>Designation</th><th align='left'>Department</th><th align='left'>Organisation</th></tr></thead>";
                while($row = mysqli_fetch_array($res))
                {
                $a=$row[2];
                $b=$row[3];
                
                if($b=="0000-00-00")
                $b="Till Date";
                $c=$row[4];
                $d=$row[5];
                $e=$row[6];
                $x="click here";
                echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$e."</td></tr>";
                }
                echo "</table>";
                }
                ?>
 
          </div>
            </div>
          </div>


        </div><!-- End Professional -->
        <div class="row no-gutters">

          <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <div class="table-responsive">
              
             <?
                $sql="select * from administrative where emailid='$uid' order by fromyr desc";
                if($res=mysqli_query($conn,$sql))
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Administrative Background</h2></div>';

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>From</th><th align='left'>To</th><th align='left'>Designation</th><th align='left'>Organisation</th><th></th></tr></thead>";
                while($row = mysqli_fetch_array($res))
                {
                $a=$row[2];
                $b=$row[3];
                if($b=="select")
                $b="Till Date";
                $c=$row[4];
                $d=$row[5];

                echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td></tr>";
                }
                echo "</table>";
                }
                ?>
 
          </div>
            </div>
          </div>


        </div><!-- End administrative -->
         <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
              <div class="table-responsive">
              
             <?
                $sql="select * from membership where emailid='$uid'";
                if($res=mysqli_query($conn,$sql))
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Professional Memberships</h2></div>';

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Membership id</th><th align='left'>Membership name</th><th align='left'>validity</th></tr></thead>";
                while($row = mysqli_fetch_array($res))
                {
                $a=$row[2];
                $b=$row[3];
                $c=$row[4];
                $x="click here";
                echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td></tr>";
                }
                echo "</table>";
                }
                ?>
 
          
            </div>
            </div>
          </div>

          
               </div><!-- End teaching -->
        <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
              <div class="table-responsive">
              
             <?
                $sql="select * from teaching where emailid='$uid'";
                if($res=mysqli_query($conn,$sql))
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Teaching Engagements</h2></div>';

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Regulation</th><th align='left'>Course name</th><th align='left'>Course Code</th><th align='left'>Class Name</th><th align='left'>Branch</th><th align='left'>Section</th><th align='left'>Semester</th><th align='left'>Academic Year</th></tr></thead>";
                while($row = mysqli_fetch_array($res))
                {
                $a=$row[2];
                $b=$row[3];
                $c=$row[4];
                $d=$row[5];
                $e=$row[6];
                $f=$row[7];
                $g=$row[8];
                $h=$row[9];
                $i=$row[10];

                $x="click here";
                echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$e."</td><td>".$f."</td><td>".$g."</td><td>".$h."</td></tr>";
                $i++;
                }
                echo "</table>";
                }
                ?>
 
          
            </div>
            </div>
          </div>

          
               </div><!-- End teaching -->
         </div>
    </section><!-- End Facts Section -->
    
   
        

     

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        

         

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
              <div class="table-responsive">
                  <?
                $sql="select * from interests where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Areas of Interest</h2></div>';
                while($row = mysqli_fetch_row($res))
                {
                
                echo '<i class="bi bi-chevron-right">'.$row[2].'</i><br>';
                }
               
                }
                ?>
                  
              </div>
          </div>

      </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="publication" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Research & Publications</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
                $sql="select * from papers where emailid='$smailidv' order by year desc";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);
                
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Journals</h2></div>';
                    
                    echo "<p>No. of Journals Published:".$n."</p>";
                    
                //echo '<div class="d-none d-sm-block">';
                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Title</th><th align='left'>Journal Name</th><th align='left'>Month & Year</th><th align='left'>Volume No</th><th align='left'>Issue No</th><th align='left'>Page No</th><th align='left'>ISBN/ISSN No</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $y=$row[10];
                    $cc=$c."-".$y;
                    //$cc=date("F Y",strtotime($c));

                    $d=$row[5];
                    $e=$row[6];
                    $f=$row[7];
                    $g=$row[8];

                    $x="click here";
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$cc."</td><td>".$d."</td><td>".$e."</td><td>".$f."</td><td>".$g."</td></tr>";
                    }
                    echo "</table>";
                    //echo '</div>';
                }
                
            ?>
 
          </div>
            </div>
          </div>

          </div>
          
          <!-- End Journals -->
          <div class="row" data-aos="fade-up"><br><br><br></div>
          
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from patent where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Patents</h2></div>';
                    echo "<p>No. of Patents Published:".$n."</p>";
                    

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Patent id</th><th align='left'>Patent name</th><th align='left'>title</th><th align='left'>status</th><th align='left'>year</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $d=$row[5];
                    $e=$row[6];
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$e."</td></tr>";
                    }
                    echo "</table>";
                    echo '</div>';
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End patents Section -->
             
        </div>

      
    </section><!-- End Publications1 Section -->
          
          <section id="publication" class="resume">
      <div class="container">
          <div class="row" data-aos="fade-up"><br><br><br></div>
          
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from bookpublisher where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Books</h2></div>';
                    echo "<p>No. of Books Published:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Name of the book</th><th align='left'>Author name</th><th align='left'>Publisher name</th><th align='left'>Year of publication</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $d=$row[5];
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End books Section -->
          <div class="row" data-aos="fade-up"><br><br><br></div>
          
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from awards where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Awards</h2></div>';
                    echo "<p>No. of Awards Received:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Award Name</th><th align='left'>Given by</th><th align='left'>On the occasion </th><th align='left'>Date</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $x="click here";

                    $y="click here";
                    $d=$row[5];
                    $s=date("d F Y",strtotime($d));
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$s."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End awards Section -->
          
          
          
          
        </div>

      
    </section><!-- End Publications2 Section -->

    <!-- ======= Attended Section ======= -->
    <section id="attended" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Training Programs Attended</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
                $sql="select * from fdp where emailid='$smailidv' order by fromdate desc";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);
                
                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Faculty Develoment Programs</h2></div>';
                    echo "<p>No. of FDPs attended:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Title of Fdp</th><th align='left'>Organized by</th><th align='left'>Organized at</th><th align='left'>From</th><th align='left'>To</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];


                    $e=$row[5];
                    $ee=date("d F Y",strtotime($e));
                    $f=$row[6];
                    $ff=date("d F Y",strtotime($f));

                    $x="click here";
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$ee."</td><td>".$ff."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          
          <!-- End Journals -->
          <div class="row" data-aos="fade-up"><br><br><br></div>
          
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from workshops where emailid='$smailidv' order by fromdate desc";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Workshops</h2></div>';
                    echo "<p>No. of Workshops attended:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Title of Workshop</th><th align='left'>Organized by</th><th align='left'>Organized at</th><th align='left'>Period</th><th align='left'>From</th><th align='left'>To</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                   $b=$row[3];
                   $c=$row[4];
                   $d=$row[5];

                   $e=$row[6];
                   $ee=date("d F Y",strtotime($e));
                   $f=$row[7];
                   $ff=date("d F Y",strtotime($f));

                   $x="click here";
                   echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$ee."</td><td>".$ff."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End patents Section -->
          <div class="row" data-aos="fade-up"><br><br><br></div>
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from conferences where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Confernces</h2></div>';
                    echo "<p>No. of Conferences attended:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Title of Conference</th><th align='left'>Organized by</th><th align='left'>Organized at</th><th align='left'>Period</th><th align='left'>From</th><th align='left'>To</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $d=$row[5];

                    $e=$row[6];
                    $ee=date("d F Y",strtotime($e));
                    $f=$row[7];
                    $ff=date("d F Y",strtotime($f));

                    $x="click here";
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$d."</td><td>".$ee."</td><td>".$ff."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End conference Section -->
          <div class="row" data-aos="fade-up"><br><br><br></div>
          <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from seminar where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Seminars</h2></div>';
                    echo "<p>No. of Seminars attended:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Title of Seminar</th><th align='left'>Organized by</th><th align='left'>Organized at</th><th align='left'>From</th><th align='left'>To</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                   $b=$row[3];
                   $c=$row[4];


                   $e=$row[5];
                   $ee=date("d F Y",strtotime($e));
                   $f=$row[6];
                   $ff=date("d F Y",strtotime($f));

                   $x="click here";
                   echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td><td>".$ee."</td><td>".$ff."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End seminars Section -->
           </div>

    </section><!-- End attended Section -->
          
         
          
          
           
          
          
          
          
        

    <!-- ======= Services Section ======= -->
    <section id="other" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Others</h2>
          <p></p>
        </div>
        
         <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from guestlectures where emailid='$smailidv' order by date desc";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Guest Lectures</h2></div>';
                    echo "<p>No. of Guest Lectures:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Topic</th><th align='left'>College Name</th><th align='left'>date</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];

                    $c=$row[4];
                    $cc=date("d F Y",strtotime($c));
                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$cc."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <br>
          <!-- Endguest lectures Section -->
           <div class="row" data-aos="fade-up">
        <div class="col-12 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
            
            
              <div class="table-responsive">
              
             <?
               $sql="select * from events where emailid='$smailidv'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);

                if ( $n != 0)
                {
                    echo '<div class="section-title"><h2>Events Organized</h2></div>';
                    echo "<p>No. of Events Organized:".$n."</p>";

                echo "<table class='table table-striped table-bordered'><thead class='thead-dark'><tr><th align='left'>Event name</th><th align='left'>As a</th><th align='left'>From</th><th align='left'>To</th></tr></thead>";
                    while($row = mysqli_fetch_array($res))
                    {
                    $a=$row[2];
                    $b=$row[3];
                    $c=$row[4];
                    $cc=date("d F Y",strtotime($c));
                    $d=$row[5];
                    $dd=date("d F Y",strtotime($d));
                    $x="click here";

                    echo "<tr><td>".$a."</td><td>".$b."</td><td>".$cc."</td><td>".$dd."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
 
          </div>
            </div>
          </div>

          </div>
          <!-- End organized Section -->
        
<!--
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div> -->

      </div>
    </section><!-- End Services Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Singapur, Huzurabad</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?echo $personalrow[9];?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?echo $personalrow[7];?></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d30315.061799795447!2d79.3629837465702!3d18.23826852571329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x3bcccca4db5ea9bb%3A0x7deae0122f06c7ea!2sKamala+Institute+of+Technology+and+Science%2C+Huzarabad(M)%2C+Singapuram%2C+Telangana+505468!3m2!1d18.236264!2d79.365916!5e0!3m2!1sen!2sin!4v1404190966772" width="100%" height="400" frameborder="0" style="border:0"></iframe>
            </div>

          </div>
<!--
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                  <input type="hidden" id="remail" name="remail" value="<?echo $uid?>">
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KITS, Singapur</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by RAGHU NANGUNURI
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>