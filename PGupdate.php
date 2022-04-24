<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $c_name = $_POST['c_name'];
    $c_nid = $_POST['c_nid'];
    $phone = $_POST['contact'];
    $p_address = $_POST['p_address'];
    $no_of_spot = $_POST['no_of_spot'];
    $rent_hour = $_POST['rent_hour'];
    $PS_time = $_POST['PS_time'];
    $PE_time = $_POST['PE_time'];
    $cctv = $_POST['cctv'];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- fonts -->
 <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
       rel="stylesheet">
 <!-- bootstrap cdn -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <!-- font awsome cdn  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
       integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
       crossorigin="anonymous"></script>
 <!-- custom css -->
 <link rel="stylesheet" href="css/signup.css">
 <link rel="stylesheet" href="css/responsive.css">
 <title>Sign up as a parking owner</title>
</head>
<body>
          <!-- animations -->
          <header class="header">
            <nav class=" fixed-top ">
                <div class="container">
                    <div class="wrapper d-flex align-items-center justify-content-between">
                        <div class="logo d-flex align-items-center mb-0 mb-md-3">
                            <img style="width:100px; height: 50px;margin-left: -10px;" src="img/carlogo.png" alt="">
                            <span class="mt-2 text-uppercase">Garir Bari</span>
                        </div>
                        <input type="radio" name="slide" id="menu-btn">
                        <input type="radio" name="slide" id="cancel-btn">
                        <ul class="nav-links">
                            <label for="cancel-btn" class="btn cancel-btn"> <i class="fas fa-times"></i>
                                        </label>
                            <li><a href="POHome.php" class="active">Home</a></li>
                        </ul>
                        <label for="menu-btn" class="btn menu-btn"> <i class="fas fa-bars"></i> </label>
                    </div>
                </div>
            </nav>
        </header>



    <!-- news latter section -->
    <section class="news-latter ">
      <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6 row d-flex justify-content-center card">
                    <h3>Update Garage information</h3>

                    <!-- form area -->

                    <form action="POgarageAddProcess.php", method="POST">
                          <div class="row d-flex justify-content-center">
                              
                                  <div class="col-xl-6	col-lg-12 col-md-12 inputBox">

                                        <!-- <input type="hidden"  name="PO_id" value="<?php echo $PO_id; ?> >  -->
                                        <input type="text" placeholder="Caretaker/Owner name", name='c_name'>
                                 
                                  </div>
                                  <div class="col-xl-6	col-lg-12 col-md-12  inputBox">
                                  
                                  <input type="text" placeholder="Caretaker NID", name='c_nid'>
                                   
                                  </div>
                               </div>
       
                               <div class="row d-flex justify-content-center">
                                     <div class="col-xl-6	col-lg-12 col-md-12 inputBox">
                                        
                                           <input type="text" placeholder="Caretaker Contact number", name='phone'>
                                    
                                     </div>
                                     <div class="col-xl-6	col-lg-12 col-md-12  inputBox">
                                     
                                           <input type="text" placeholder="Parking Address", name='p_address'>
                                      
                                     </div>
                                  </div>

                                  

                                  <div class="row d-flex justify-content-center">
                                     <div class="col-xl-6	col-lg-12 col-md-12 inputBox">
                                        
                                           <input type="number" placeholder="Number of parking spot", name='no_of_spot' min="1" max="1000">
                                    
                                     </div>
                                     <div class="col-xl-6	col-lg-12 col-md-12  inputBox">
                                     
                                           <input type="number" placeholder="Rent per hour", name='rent_hour' min="10" max="1000">
                                      
                                     </div>
                                  </div>


                             
                               <div class="row">
                                  

                                  <div class="col-xl-6	col-lg-12 col-md-12 ">
                                     <div class="inputBox">
                                        <input type="text" placeholder="Parking start time" step="900" onfocus="this.type='time'" name="PS_time">
                                        <!-- <input type="time" placeholder="Parking start time", name="PS_time"> -->
                                     </div>
                                  </div>



                   
                                  <div class="col-xl-6	col-lg-12 col-md-12 ">
                                     <div class="inputBox">
                                         <input type="text" placeholder="Parking end time" step="900" onfocus="this.type='time'" name="PE_time">
                                     </div>
                                  </div>

                               </div>

                               <div class="row">
                                  

                                  <div class="col-xl-6	col-lg-12 col-md-12 inputBox">
                                              <select class="cs-select cs-skin-elastic ", name="cctv">
                                                 <option value="" disabled selected>CCTV available</option>
                                                 <option class="option" value="yes" data-class="element_1">Yes</option>
                                                 <option value="no" data-class="element_2">No</option>
                                              </select>
                                      
                                  
                                  </div>



                   
                                  <!-- <div class="col-xl-6	col-lg-12 col-md-12 ">
                                     <div class="inputBox">
                                        <input type="file" placeholder="Add a garage picture", name="picture">
                                     </div>
                                  </div> -->

                               </div>
                              
                                    <div class="row mt-4">
                                        <div class="text-center col-12">
                                           <button class="btn-login" type=submit>Submit</button>
                                        </div>
                                    </div>
                            </form>      
                      </div>
                  <div class="col-6 img fluid text-center">
                        <img class="img-fluid" src="img/parkingcar.png" alt="">
                  </div>
                 
                  </div>
            </div>
      
      
            </section>



     <!-- footer area -->


     <section class="footer">
      <div class="container">
        <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">services</h4>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>website Design </p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Wordpress Development</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Mobile App Development</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Graphic design</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Seo Optimization</p></a>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">company</h4>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>about us </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>How it works  </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>packages </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>Graphic design </p></a>
                    <a class="text-center text-capitalize text-decoration-none" href=""> <p>Seo Optimization </p></a>
             
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                  <h4 class="text-center text-uppercase">about</h4>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>info.romaxdev@gmail.com</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Address Dhaka United City Madani Avenue</p></a>
                  <a class="text-center text-capitalize text-decoration-none" href=""> <p>Dhaka 1212 </p></a>
                  <h4 class="text-center text-uppercase">Follow Us</h4>
                  <div class="text-center p-2">
                        <a href="">  <i class="fab fa-facebook"></i></a>
                        <a href="">  <i class="fab fa-instagram"></i></a>
                        <a href="">  <i class="fab fa-dribbble"></i></a>
                        <a href="">  <i class="fab fa-twitter"></i></a>
                      
                  </div>
                 
              </div>
        </div>
      <hr>
      
          <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <h4 class="text-start text-uppercase mt-5">we accept</h4>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/bekash.png" alt="">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/nogod.png" alt="">
                  <img class="img-fluid" style="width: 100px; height: 100px; margin-top: 10px; padding-right:10px" src="img/payonner.png" alt="">
                </div>
          </div>
          <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary row d-flex align-items-end">
                  <p>all @copyright reserved to Romaxdev</p>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary text-end">
                  <p>made by <a class="text-capitalize text-decoration-none" href="https://www.facebook.com/rownokmahbub/">Mehbubur Rahman Rownok</a> </p>
                </div>
          </div>
      </div>
      
            </section>
</body>
</html>