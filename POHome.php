<?php 
     require_once('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- font awsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Home Parking Owner</title>
</head>
<?php
    session_start();


    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        $email = $_SESSION['email']; 
         
        require_once('db_connect.php');   
        // extract id from email
        $query = "SELECT id FROM parking_owner WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $PO_id = $row['id'];

        ?>
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
                        <ul class="nav-links">
                            <label for="cancel-btn" class="btn cancel-btn"> <i class="fas fa-times"></i>
                                        </label>
                          
                            <li><a href="" class="desktop-item">Profile
                                                    <i class="fas fa-chevron-down" id="arrowDown"
                                                          style=" font-size: 18px;"></i>
                                              </a>
                                <input type="checkbox" id="showMega">
                                <label for="showMega" class="mobile-item">Profile
                                                    <i class="fas fa-chevron-down" style=" font-size: 18px;"></i>
                                              </label>
                                <div class="mega-box">
                                    <div class="content">
                                       
                                       
                                            <ul class="mega-links">
                                                <li><a href="website.html">View</a></li>
                                                <li><a href="wordpress.html">Edit Profile</a></li>
                                            </ul>
                                       
                                       
                                    </div>
                                </div>
                            </li>
                            <li><a href="POlogoutProcess.php">Logout</a></li>
                        </ul>

                    
                     
                        
                       
                    </ul>
                    <label for="menu-btn" class="btn menu-btn"> <i class="fas fa-bars"></i> </label>
                </div>
            </div>
        </nav>
    </header>
    <!-- PHP start -->

    <!-- hero section -->
    <section class="bc">
        <div class="container">
            <div class="ideas-container">
                <div class="ideas-item abtxt">
                    <!-- <div class="hero1-h1">Wellcome <span class="true ">Rownok Mahbub</span>
                        <h1>
                          To  Your Profile
                        </h1>
                    </div> -->

                    <p>Add your parking spot here</p>
                    <!-- <button class="btn-grad1"><a href="POgarageAdd.php" class="hero1-btn mb-4">Add Here</a></button> -->
                    <?php
                        echo "<a href = 'POgarageAdd.php?PO_id=$PO_id'> Add Here </a> </td>";
                    ?>
                    
                </div>
                <!-- <div class="ideas-item bc-img">

                    <img src="img/Rownok.png" style="margin-top: 120px;" alt="">

                </div> -->
            </div>
        </div>

    </section>


    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
                    <p style="color:blue;text-align:center;"> Your Parking Garaga/Spot </p>
						<thead>
                            <tr class="table100-head">
								<th class="column1">Caretaker Name</th>
								<th class="column2">NID</th>
								<th class="column4">Address</th>
								<th class="column5">Contact</th>
								<th class="column6">No. of spot</th>
                                <th class="column6">Rent/hour</th>
                                <th class="column6">Parking start time</th>
                                <th class="column6">Parking end time</th>
                                <th class="column6">CCTV</th>
                                <th class="column6">Status</th>
                                <th class="column6">Edit</th>
                                <th class="column6">Delete</th>
							</tr>
						</thead>
						<?php
                            $query = "SELECT * FROM parking_garage;";
                            $result = mysqli_query($conn,$query); ?>
                            <tbody> <?php
                            if($result->num_rows>0){
                                while($rd = mysqli_fetch_assoc($result)){
                                    $id = $rd['id'];
                                    $c_name = $rd['c_name'];
                                    $c_nid = $rd['c_nid'];
                                    $contact = $rd['contact'];
                                    $p_address = $rd['p_address'];
                                    $no_of_spot = $rd['no_of_spot'];
                                    $rent_hour = $rd['rent_hour'];
                                    $PS_time = $rd['PS_time'];
                                    $PE_time = $rd['PE_time'];
                                    $cctv = $rd['cctv'];
                                    $status = $rd['status']; ?>

<tr>
                                        <td class="column1"><?php echo $c_name; ?></td>
                                        <td class="column2"><?php echo $c_nid; ?></td>
                                        <td class="column3"><?php echo $p_address; ?></td>
                                        <td class="column4"><?php echo $contact; ?></td>
                                        <td class="column5"><?php echo $no_of_spot; ?></td>
                                        <td class="column6"><?php echo $rent_hour; ?></td>
                                        <td class="column6"><?php echo $PS_time; ?></td>
                                        <td class="column6"><?php echo $PE_time; ?></td>
                                        <td class="column6"><?php echo $cctv; ?></td>
                                        <td class="column6"><?php echo $status; ?></td>
                                        <?php
                                            echo "<td> <a href = 'PGupdate.php?id=$id&c_name=$c_name&c_nid=$c_nid&contact=$contact&p_address=$p_address&no_of_spot=$no_of_spot&rent_hour=$rent_hour&PS_time=$PS_time&PE_time=$PE_time&cctv=$cctv'> Update </a> </td>";
                                        ?>
                                        <!-- <td class="column6"><a href="PGedit.php?id=<?php echo $id; ?>"class="btn btn-info" name="Edit">Edit</a></td> -->
                                        <?php
                                            echo "<td> <a href = 'PGdelete.php?id=$id'> Delete </a> </td>";
                                        ?>
                                        <!-- <td class="column6"><a href="PGdelete.php?id=<?php echo $id; ?>"class="btn btn-info" name="Delete">Delete</a></td> -->
								    </tr>
                                    

                                <?php
                                }
                            }?>
                            </tbody> <?php
                        ?>
					</table>
				</div>
			</div>
		</div>
	</div>


 

    <!-- footer area -->


    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="text-center text-uppercase">services</h4>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>website Design </p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Wordpress Development</p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Mobile App Development</p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Graphic design</p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Seo Optimization</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="text-center text-uppercase">company</h4>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>about us </p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>How it works </p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>packages </p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Graphic design </p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Seo Optimization </p>
                    </a>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="text-center text-uppercase">about</h4>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>info.romaxdev@gmail.com</p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Address Dhaka United City Madani Avenue</p>
                    </a>
                    <a class="text-center text-capitalize text-decoration-none" href="">
                        <p>Dhaka 1212 </p>
                    </a>
                    <h4 class="text-center text-uppercase">Follow Us</h4>
                    <div class="text-center p-2">
                        <a href=""> <i class="fab fa-facebook"></i></a>
                        <a href=""> <i class="fab fa-instagram"></i></a>
                        <a href=""> <i class="fab fa-dribbble"></i></a>
                        <a href=""> <i class="fab fa-twitter"></i></a>

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
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary row d-flex align-self-end">
                    <p>all @copyright reserved to Romaxdev</p>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 col-xxl-6 col-sm-12 text-secondary text-end">
                    <p>made by <a class="text-capitalize text-decoration-none" href="https://www.facebook.com/rownokmahbub/">Mehbubur Rahman Rownok</a> </p>
                </div>
            </div>
        </div>

    </section>

    <!-- bootstrap js -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="style.js"></script>

</body>
<?php
    }

    else{
        ///session doesn't contain any valid user email
        ?>
            <script>
                window.location.assign('parkingownerlogin.php');
            </script>
        <?php
    }
?>

</html>