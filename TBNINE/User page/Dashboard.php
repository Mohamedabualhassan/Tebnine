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
    <meta name="generator" content="Hugo 0.83.1">
    
    <link rel="icon" href="hh.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TBNINE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
  
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<script>
    function show(){
      //alert("okk");
      document.getElementById("vactype").style.visibility="visible";
    }
    function unshow(){
      //alert("okk");
      document.getElementById("vactype").style.visibility="hidden";
    }

   
    
  </script>
<script>
var siteWidth = 1280;
var scale = screen.width /siteWidth;

document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+'');
</script>
<script> 
      function disableClick(){ 
        document.onclick=function(event){ 
          if (event.button == 2) { 
            alert('Right Click Message'); 
            return false; 
          } 
        }


      } 


      function closevac(){
       // alert('ssss');
        $('#vac').modal('hide');
       }
    </script> 
    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body onLoad="disableClick()">

  <?php
  if(isset($_GET['er'])){
    echo "
    <script>
    $(document).ready(function() {
      $('#logine').modal('show');
    });</script>";
  }
  ?>

   
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="hh.png" width="40px" height="40px" alt=""></a>
      <button class="navbar-toggler" type="button"  style="background-image: url('/TBNINE/imgs/hh.png');" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
       
          <li class="nav-item ">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#bbmc" data-bs-whatever="@mdo">BBMS</button>
            &nbsp;&nbsp;</li>
          
          <li class="nav-item ">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#pcr" data-bs-whatever="@fat">PCR LAB</button>
            &nbsp;&nbsp;

          <li class="nav-item ">
             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#vac" data-bs-whatever="@getbootstrap">VACCINATION</button>
              &nbsp;&nbsp;

          <li class="nav-item ">
             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#news" data-bs-whatever="@getbootstrap">NEWS</button>



        </ul>



<?php


        if(!isset($_COOKIE["uid"]) || $_COOKIE["uid"]==0){
          	
	 echo "
   <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#newp\" data-bs-whatever=\"@getbootstrap\">Create Your File</button>

   &nbsp;&nbsp;


   <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#logine  \" data-bs-whatever=\"@getbootstrap\"> Login </button>

   ";
        }
        if(isset($_COOKIE["uid"]) && $_COOKIE["uid"]!=0){
        
          echo " <a class=\"btn btn-danger\" href=\"logout.php\"  >LogOut</a>";

    
          
               }
               
      

?>
       
       


 <i onclick="" class="bi bi-telephone-outbound-fill" style="margin-left:100px;color:white"> FOR EMERGENCY CALL</i>&nbsp;&nbsp;
        <a   href="tel://71367788">
           <img src="call.png" width="50px" height="50px"/>
        </a>
        
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="mc1.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start" style=" margin-bottom: 150px;" >
            <h1>Don't worry we are near you</h1>
            <p>Hurry up to fill out our blood bank form to save lives</p>
            <p>سارع الى ملئ استمارة بنك الدم الخاصة بنا لتكون سببا في انقاذ الارواح</p>
            
        </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img"  width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
           <div class="row">
           <div class="col-2">
           <img src="hh.png"  width="200px" height="200px" style="margin-top: 100px;" alt="">

           </div>
           <div class="col-8">
           <h1>Tibnin Association for Public Services</h1><br><br>
            <h2>جمعية تبنين للخدمات العامة</h2> 
            <h2>خدمتكم شرف لنا </h2> <br>
            <p><a class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#info" data-bs-whatever="@getbootstrap">Learn more</a></p>
            </div>
            <div class="col-2">
            <img src="hh.png"  width="200px" height="200px" style="margin-top: 100px;" alt="">
           
            </div>
           </div>
             </div>
          </div>
       
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="med7.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-end"  >
            <h1>We work to serve you medically</h1>
            <h1>نعمل لخدمتكم طبيا</h1>
            <p>We seek to secure all medical supplies to be available in your hands when needed.</p>
            <p>نسعى لتأمين جميع المستلزمات الطبية لتكون متوفرة بين يديك عند الحاجة.</p>
            <p><a class="btn btn-lg btn-primary" href="tel://81668903">Call us</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="bb8.jpg" class="img-thumbnail" alt="..." width="370px" height="400px">
        <h2>BBMS</h2>
        <p class="card-text"> Helping the needy in times of distress is one of the best deeds, so we established a blood bank at the village level. We invite you to register your information on our website to benefit from you and to benefit you when needed and to save lives.</p>
        <p class="card-text">مساعدة المحتاج عند الشدة من خيرة الأعمال ، لذلك قمنا بانشاء بنك دم على صعيد القرية . ندعوك لتسجيل معلوماتك على موقعنا للاستفادة منك وافادتك عند الحاجة و تدارك الأرواح </p>
        <p><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bbmc" data-bs-whatever="@mdo">Register &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      
      <div class="col-lg-4">
        <img src="PCRimg.jpg" class="img-thumbnail" alt="..." width="400px" height="400px">
        <h2>PCR LAB</h2>
        <p class="card-text"> If you suffer from any symptoms indicating that you are infected with the Corona virus, or you have had contact with one of the infected people, please inform us for a test.
          PCR for you and to ensure your protection. (The result of the examination will be published on our official website).</p>
        <p class="card-text">اذا كنت تعاني من أية عوارض تدل على أنك مصاب بفايروس كورونا أو كنت قد خالطت أحد المصابين الرجاء أبلاغنا لأجراء فحص 
          PCR لك وضمان حمايتك . </p><br>
        <p><a class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#pcr" data-bs-whatever="@fat">Register &raquo;</a></p>
      </div><!-- /.col-lg-4 -->


      <div class="col-lg-4">
        <img src="bg.jpg" class="img-thumbnail" alt="..." width="400px">
        <h2>VACCINATION</h2>
        <p class="card-text"> With the recent increase in the numbers of Corona and the availability of the vaccine in Lebanon, it has become necessary to work on taking the vaccine to protect you and your family.</p>
        <p class="card-text">مع تفاقم أعداد كورونا في الأونة الأخيرة و توفر اللقاح في لبنان  أصبح من الضروري العمل على أخذ اللقاح لحمايتك و حماية عائلتك</p>
        <br><br>
        <p><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#vac" data-bs-whatever="@getbootstrap">Register &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Our Location. <span class="text-muted">Near you wen you need us.</span></h2>
        <p class="lead"><h3>We cover all the entire geographical area of ​​the village</h3></p>
        <p class="lead"><h3>نحن نغطي كامل المساحة الجغرافية للقرية</h3></p>
      </div>
      <div class="col-md-5">
        <div style="width: 70%"><iframe width="500px" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tebnine+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
  
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Covid Cases Tracker . <span class="text-muted">Check live numbers of covid cases in Lebanon</span></h2>
        <p class="lead"><h3>Stay safe stay protected for your safety and the safety of your family .</h3></p>
        <p class="lead"><h3>ابق آمنًا ومحميًا من أجل سلامتك وسلامة عائلتك.</h3></p>
      </div>
      <div class="col-md-5 order-md-1">
      <br><br>
        <div class="row" style="padding-left: 30px;">
       
          <div class="col">
            <div class="card" style="width: 150px; height: 130px; font-size:large;">
            <div class="card-body">
              <h5 class="card-title" style="font-size:x-large;">Active cases</h5>
              <i class="fa fa-tachometer" ></i>
              <span id="todayCases" ></span>
            </div>
          </div></div>

          <div class="col">
            <div class="card" style="width: 150px; height: 130px; font-size:large;">
            <div class="card-body">
              <h5 class="card-title" style="font-size:x-large"> Cases</h5>
              <br>
              <i class="fa fa-tachometer"></i>
              <span id="cases" ></span>
            </div>
          </div></div>
      

          <div class="col"> 
            <div class="card" style="width: 150px; height: 130px; font-size:large">
            <div class="card-body">
              <h5 class="card-title" style="font-size:x-large;" >Critical</h5>
              <br>
              <i class="fa fa-tachometer" ></i>
              <span id="critical" ></span>
            </div>
          </div></div>
          </div>

          <br>
          <div class="row" style="padding-left: 30px;">
          <div class="col">
             <div class="card" style="width: 150px; height: 130px; font-size:large">
            <div class="card-body">
              <h5 class="card-title" style="font-size:x-large;">Deaths</h5>
              <i class="fa fa-tachometer"></i>
              <span id="deaths" ></span>
            </div>
          </div>
        </div>
       
          <div class="col">
            <div class="card" style="width: 150px; height: 130px;  font-size:large">
              <div class="card-body">
                <h5 class="card-title"  style="font-size:x-large;">Recovered</h5>
                <i class="fa fa-tachometer"></i>
                <span id="recovered" ></span>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 150px; height: 130px;  font-size:large">
              <div class="card-body">
                <h5 class="card-title"  style="font-size:x-large;">Tests</h5>
                <i class="fa fa-tachometer"></i>
                <span id="tests" ></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" style="padding-left: 50px;">
        <h2 class="featurette-heading">We can help . <span class="text-muted">in the medical field</span></h2>
        <p class="lead"><h3>We can  assist you medically. You can request any of the medical equipment available to us, at your service</h3></p>
        <p class="lead"><h3>ايضا نستطيع ان نساعدكم طبيا يمكنكم طلب اي من المعدات الطبية المتوفرة لدينا ، في خدمتكم </h3></p>
      </div>
      <div class="col-md-5">
        <img src="med2.jpg" class="img-thumbnail" alt="..." width="500px" height="500px">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container" style="margin-bottom: 100px;">

  <div class="row">

  <div class="col">
  <div class='social'>
  <h2>Contact Us :</h2>
   <a  href="https://wa.me/96171367788" target="_blank"><i class="fa fa-whatsapp" style="font-size:30px;color:grey"></i></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a  href="https://www.facebook.com/Tebnine-Municipalit%C3%A9-Tibnin-Municipality-%D8%A8%D9%84%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D9%86%D9%8A%D9%86-110360015978097/" target="_blank"><i class="fa fa-facebook" style="font-size:30px;color:grey"></i></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="http://TebnineFund@hotmail.com/" target="_blank" style="font-size:30px ;color:grey"> <i class="fa fa-fw fa-envelope"></i></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
   
   <a  href="tel://71367788" target="_blank"><i class="fa fa-phone" style="font-size:30px;color:grey"></i></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </div>
  </div>

  <div class="col">
  <div class='bank'>
  <h2 style="margin-left: 100px;">(IBAN)الهوية المصرفية</h2>
  <p style="margin-left: 170px;"><b>بنك بيبلوس-فرع بنت جبيل</b></p>
  <p style="margin-left: 120px;"><b>LB20 0039 0000 0004 8022 5817 1005 $</b></p>
  <p style="margin-left: 120px;"><b>LB47 0039 0000 0004 8022 5817 1004 L.L.</b></p>
  </div>
  


  </div>
  </div>
  <br><br>
  <p>&copy; 2021.  Developed by :Mohamad Abou Al Hassan , Mostafa Ayoub&middot;</p>
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <script>
      fetch('https://corona.lmao.ninja/v2/countries/Lebanon')
    .then((respnse)=>{
        return respnse.json();
    
    }).then((data)=>{
           
        
       document.getElementById("todayCases").innerHTML=data.todayCases;
       document.getElementById("cases").innerHTML=data.cases;
       document.getElementById("critical").innerHTML=data.critical;
       document.getElementById("deaths").innerHTML=data.deaths;
       document.getElementById("recovered").innerHTML=data.recovered;
       document.getElementById("tests").innerHTML=data.tests;
       
    
    
       
      
    })
    </script>



<div class="modal fade" id="bbmc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Your Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <?php
          if(isset($_COOKIE["uid"])){

            $a  = $_COOKIE["uid"];
            if($a==0)
            {
              echo '<h3>You need to create a new medical file first</h3>';
           
              
             
            }
            include "connection.php";
$q="Select * from medical_record where id=$a";
$r=mysqli_query($con,$q);
if($r)
{
    
    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
         echo "
         
         <form method=\"POST\" action=\"AddBBMC.php\">
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>First Name:</b></label>
           <input type=\"text\" name=\"firstname\" class=\"form-control\" value=$row[fname]  readonly  id=\"recipient-name\" >
         </div>

         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\col-form-label\"><b>Last Name:</b></label>
           <input type=\"text\" name=\"lastname\" class=\"form-control\"  value=$row[lname]  readonly  ed id=\"recipient-name\" >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Date Of Birth:</b></label>
           <input type=\"date\" name=\"db\" class=\"form-control\" value=$row[dob] readonly  id=\"recipient-name\" >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Address:</b></label>
           <input type=\"tex\" name=\"address\" class=\"form-control\" value=$row[address] readonly  id=\"recipient-name\"  >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Phone Number:</b></label>
           <input type=\"tel\" name=\"phnb\" class=\"form-control\" value=$row[phnb] readonly  id=\"recipient-name\"  >
         </div>
         
         <div class=\"mb-3\">
        
           <label for=\"recipient-name\" class=\"col-form-labe\"><b>Blood Type   </b></label>
           <input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=$row[bloodtype] readonly  id=\"recipient-name\"  >
      
         </div>";

         include('connection.php');

         $uid=$_COOKIE["uid"];
                       $query="SELECT * FROM newdonor where userid=$uid";
              
              $result = mysqli_query($con,$query);
              
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             
             
              $count = mysqli_num_rows($result);
         
            
               if($count == 1) {
              
                  echo "<b style=\"color: red;\">You are already registred for donating...</b>";
                }
         
         
              else {
                echo"
       <input type=\"submit\" name=\"add\" value=\"Submit\" class=\"btn btn-primary\" />";
       
         
         }
         echo"
         </form>
           ";
         }
         
         


     
      
    }
   
    

          }
          else{
            echo '<h3>You need to create a new medical file first</h3>';
                    
          }
      ?>

        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="pcr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Your PCR Result</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><b>Enter Your ID:</b></label>
            <input type="text" name="id" class="form-control" id="recipient-name" placeholder="Enter your PCR ID">
            <br><br>
            <button type="submit" name="getpcr" class="btn btn-primary" >Get Result</button>
          </div>
          <div class="row">
           </div>
         <br><hr>
            <?php
              if(isset($_POST['getpcr'])){
                echo "
                <script>
                $(document).ready(function() {
                  $('#pcr').modal('show');
                });</script>";

                echo"
                <p dir=\"auto\"><b>•ضرورة الألتزام بالعزل التام و الحجر المنزلي،في حال كانت نتيجة الفحص ايجابية</b></p>
                <p dir=\"auto\"><b>•يرجى اتباع إرشادات وزارة الصحة العامة، ومنظمة الصحة العالمية </b></p>
                
                "; 
                include "connection.php";

                $id = $_POST["id"];
                $q = "select * from pcrtest where id=$id";


                $r = mysqli_query($con, $q);
                if ($r) {

                    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                        echo "
<br>                
            <div class=\"card\" style=\"width: 18rem;\">
<div class=\"card-body\">
<h4 class=\"card-title\">Your Result : </h4>
<p class=\"card-text\"><b>First Name : </b> $row[firstname]</p>
<p class=\"card-text\"><b>Last Name : </b> $row[lastname]</p>

<p class=\"card-text\"><b>Date of Birth : </b> $row[dateofbirth]</p>
<p class=\"card-text\"><b>Phone Number : </b> $row[phnb]</p>
 ";
                        if(strcmp($row['results'] , "Positive")==0){
                         echo"<p class=\"card-text\"><b>Result : </b> <b style=\"color:red\" >$row[results]</b></p>
                         ";
                        }
                        else{
                          echo"<p class=\"card-text\"><b>Result : </b> <b style=\"color:green\" >$row[results]</b></p>
                          ";
 
                        }
 echo"


</div>
</div>

            ";
                    }
                }
              }
               ?>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="vac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Your Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <?php
          if(isset($_COOKIE["uid"])){

            $a  = $_COOKIE["uid"];
          if($a==0)
          {
            echo '<h3>You need to create a new medical file first</h3>';
         
          }
            include "connection.php";
$q="Select * from medical_record where id=$a";
$r=mysqli_query($con,$q);
if($r)
{
    
    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
         echo "
         <form method=\"POST\" action=\"AddVac.php\">
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>First Name:</b></label>
           <input type=\"text\" name=\"fname\" class=\"form-control\" value=$row[fname] readonly  id=\"recipient-name\" >
         </div>

         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\col-form-label\"><b>Last Name:</b></label>
           <input type=\"text\" name=\"lname\" class=\"form-control\"  value=$row[lname] readonly id=\"recipient-name\" >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Date Of Birth:</b></label>
           <input type=\"date\" name=\"db\" class=\"form-control\" value=$row[dob] readonly id=\"recipient-name\" >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Address:</b></label>
           <input type=\"tex\" name=\"address\" class=\"form-control\" value=$row[address] readonly  id=\"recipient-name\"  >
         </div>
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-label\"><b>Phone Number:</b></label>
           <input type=\"tel\" name=\"phnb\" class=\"form-control\" value=$row[phnb] readonly  id=\"recipient-name\"  >
         </div>
         
         <div class=\"mb-3\">
           <label for=\"recipient-name\" class=\"col-form-labe\"><b>Blood Type   </b></label>
           <input type=\"text\" name=\"bloodtype\" class=\"form-control\" value=$row[bloodtype] readonly  id=\"recipient-name\"  >
         </div>
        <hr>
         <br>";
         

         

       include('connection.php');

         $uid=$_COOKIE["uid"];
                       $query="SELECT * FROM vaccination where userid=$uid";
              
              $result = mysqli_query($con,$query);
              
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             
             
              $count = mysqli_num_rows($result);
         
            
               if($count == 1) {
              
                  echo "<b  style=\"color: red;\">You are already registred....</b>";
                }
                else{
               
                  echo"
                  <div class=\"form-group\">
                    <label> <b style=\"color:red;\"> Did you get vaccinated?</b> </label>
                    <b>Yes</b><input type=\"radio\" onchange=\"show();\" name=\"vac1\" value=\"yes\"/>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <b>No</b><input type=\"radio\" name=\"vac1\" onchange=\"unshow();\" value=\"no\"/>
                  </div>
                  <br>
                  <div style=\"visibility: hidden;\" id=\"vactype\">
                  <div class=\"form-group\">
                    <label > <b> Vaccine type : </b> </label>
                    <b>Pfizer</b><input type=\"radio\" name=\"vac\" value=\"Pfizer\"/>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <b>Astrazeneca</b><input type=\"radio\" name=\"vac\" value=\"Astrazeneca\"/>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <b>Moderna</b><input type=\"radio\" name=\"vac\" value=\"Moderna\"/>
                  </div>
                  </div>
                <br>
                <input type=\"submit\" name=\"add\" values=\"Submit\" class=\"btn btn-primary\"/>
                ";
                }
echo"
      </form>
         ";
    }
   
    
}
          }
          else{
            echo '<h3>You need to create a new medical file first</h3>';
            
          }
      ?>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
      
</div>






<div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"  style="text-align:right;">
        <form>
        <p><b> علم و خبر رقم ١٥ تاريخ ٥  كانون الثاني ٢٠١٠</b></p>
        <br><b>
        : ان هذه الجمعية هي  خيرية ولا تتوخى الربح و تهدف الى<br><br>
      جمع و توزيع المساعدات المالية و العينية و الدورية للفقراء و الايتام •<br>.و المحتاجين في البلدة	<br><br>
	دعم التربية و الثقافة في البلدة و ذلك من خلال اقامة دورات•<br> .دعم تربوية مجانية (سنويا) لطلاب البلدة المحتاجين. <br><br>
	تقديم المساعدات للمرضى المحتاجين في البلدة  وتامين دواء •<br>....او سرير طبي او ما شابه<br><br>
	توعية و تنشيط حركة الانماء الاجتماعي و نشر الثقافة العامة•<br> .و ضرورة مساعدة الاخرين <br><br>
	.العمل الدؤوب داخل المجتمع في البلدة لتحقيق مبدا التكافل الاجتماعي •<br><br></b>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="news" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Annoucments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php
              include "connection.php";
              $qu = "SELECT * FROM pdf";
              $r = mysqli_query($con, $qu);
              if ($r) {

                  echo "<table style=\"margin-left:60px;\"><tr style=\"padding:15px;\"><td
                  style=\"padding:15px;\"><b>PDF Name &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                  <td style=\"padding:15px;\"><b>&nbsp;&nbsp; PDF Date &nbsp;&nbsp;</b></td>
                  <td style=\"padding:15px;\"><b>&nbsp; &nbsp;Option</b></td></tr>";
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                    echo"
                      <tr style=\"padding:15px;\">

                      <td style=\"padding:15px; \">
                      <img src=\"pdficon.png\" width='20px' hight='20px'>
                      $row[pdfname]</td><td style=\"padding:15px;\">$row[date] &nbsp;&nbsp;&nbsp;</td><td
                      style=\"padding:15px;\">
                      &nbsp; 
                      <a href=\"http://192.168.1.113:8080/TBNINE/Admin%20page/Takarir/$row[pdfname].pdf\" class=\"btn btn-success\">   View</a> 
                      </td>
                    ";
                  }
                  echo"</table>";
                }
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="newp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Your Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="new_patient.php" method="POST">


<div class="form-group">
        <label for=""><b>User Name:</b><b style="color:#FF0000";>(remember it please)</b></label>
        <input type="text" class="form-control" name="username" id="" placeholder="Enter your user name">
    </div>
    <br>
    <div class="form-group">
        <label for=""><b>Password:</b><b style="color:#FF0000";>(remember it please)</b></label>
        <input type="password" class="form-control" name="password" id="" placeholder="Enter your password">
    </div>
    <br>
    <div class="form-group">
        <label for=""><b>First Name:</b></label>
        <input type="text" class="form-control" name="fname" id="" placeholder="Enter your first name">
    </div>
    <br>
    <div class="form-group">
        <label for=""><b>Last Name:</b></label>
        <input type="text" class="form-control" name="lname" id="" placeholder="Enter your last name">
    </div>
    <br>
    <div class="form-group">
        <label for=""> <b>Date of birthday:</b></label>
        <input type="date" class="form-control" name="dob" id="" placeholder="Enter Birthday">
    </div>
    <br>
    <div class="form-group">
        <label for=""> <b>Phone Number:</b></label>
        <input type="tel" class="form-control" name="phnb" id="" placeholder="Enter Your Phone Number">
    </div>
    <br>
    <div class="form-group">
        <label for=""> <b>Address:</b></label>
        <input type="text" class="form-control" name="address" id="" placeholder="Enter Your Address">
    </div>
    <br>
    <div class="form-group">
        <label for=""> <b>Blood Type:</b></label>
        <select class="form-select" name="bloodtype">
             <option value="A+">A+</option>
             <option value="A-">A-</option>
             <option value="B+">B+</option>
             <option value="B-">B-</option>
             <option value="AB+">AB+</option>
             <option value="AB-">AB-</option>
             <option value="O+">O+</option>
             <option value="O-">O-</option>
             
           </select>
   
    </div>

    <br>
    
    <input type="submit" value="Submit" class="btn btn-primary" />
</form>
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
      
</div>




<div class="modal fade" id="logine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <?php
            if(isset($_GET['er'])){
              echo "<b style=\"color:red\">&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbspWrong Username or password</b>";
            }
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="check_login.php" >
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><h4><b>Username :</b></h4></label>
            <input type="text" name="username" class="form-control" id="recipient-name" placeholder="Enter your usename">
            <br><br>
            <label for="recipient-name" class="col-form-label"><h4><b>Password :</b></h4></label>
            <input type="password" name="password" class="form-control" id="recipient-name" placeholder="Enter your password">
            <br><br>
            <button type="submit"  style="margin-left: 190px;" class="btn btn-primary" >Login</button>
          </div>
        </form></div></div></div></div>


  </body>
</html>
