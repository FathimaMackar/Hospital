

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alphonsa Hospital - Staff Home </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


   <table border = "1">
<tr>

<td>Name</td>
<td>Email Id</td>
<td>Phone</td>
<!-- <td>City Name</td>
<td>Email</td> -->
</tr>
@foreach ($data as $item)
<tr>

<td>{{ $item->user_name }}</td>
<td>{{ $item->user_email }}</td>
<td>{{ $item->user_phone }}</td>

</tr>
@endforeach
</table>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
       <i class="icofont-exclamation"></i> We're committed to a clean and safe facility
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now at 0426-8263245
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.jpg" alt=""></a>
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Home</a></li>

          <li class="active"> <a href="#viewappointments">View Appointments</a>
          <!-- <ul>
            <li><a href="#viewappointments">View By Date</a></li> -->
          <!--   <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li> -->
           <!--  <li><a href="#doctors">View By Doctors</a></li>
            <li><a href="#departments">View By Department</a></li> -->
            <!-- <li><a href="#">Drop Down 4</a></li> -->
          <!-- </ul> -->
        </li> 
         <!--  <li><a href="#contact">Contact</a></li> -->
        </ul>
      </nav>

      <a href="#Home" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</span> </a>


    </div>
  </header><!-- End Header -->


  <main id="main">
   
    <!-- ======= Appointment Section ======= -->
    <section id="viewappointments" class="appointment section-bg">
      <div class="container" data-aos="fade-up">
          <h2 id="messagedisplay"></h2>
        <div class="section-title">
          <h2>View Appointments</h2>
          <p></p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
             <!--  <input type="datetime" name="date" class="form-control datepicker" id="datepicker" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"> -->
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">     
             
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
           
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
           <!--  <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea> -->
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <!-- <div class="loading">Loading</div> -->
          <!--   <div class="error-message"></div> -->
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"> <input type="submit" name="viewappointment" id="viewappointment" value="ViewAppointment"></button></div>

<div id="viewappointment"> </div>

        </form>

      </div>
    </section><!-- End Appointment Section -->

   


  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/jquery/jquery-ui.js"></script>

  <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
 


<script>

  $(document).ready(function(){

    $('select[name="department"]').on('change',function(){

  
  var dept_id = $(this).val();

    if(dept_id){
    
    $.ajax({

    url: '/getdoctor/'+ dept_id,
    type: 'GET',
    dataType:'json',
    success: function(data){

      console.log(data);


    $('select[name="doctor"]').empty();
      $.each(data, function(key, value){

      $('select[name="doctor"]')
        .append('<option value="'+key+'">'+value+'</option>');

      });

    }

    });
    
    }else {
    $('select[name="doctor"]').empty();

    }

  });
  
    });

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

</script>
<!-- 
<?php
// include('ajax.js'); ?>  -->

<script type="text/javascript">
  
$(document).ready(function(){

    $('#viewappointment').click(function(e){
      e.preventDefault();

    $.ajax({

    method: "post",  
    url: "Frontend.fetchdata.php",
    data: $('#viewappointment').serialize(),
    dataType:"html",
    success: function(response){

          $('#messagedisplay').text(response);
         }
      });
    })
  });
</script>
</body>

</html>