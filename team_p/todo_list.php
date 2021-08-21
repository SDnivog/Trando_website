<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>



<?php

if (isset($_POST['add_today_work'])) {
  
    $user_id = "G456789";
    $p_desc  = $_POST['p_desc'];

 if (empty($p_desc)) {
    $_SESSION["ErrorMessage"] = " add today work !";
    Redirect_to("#");
  } 
  else{
    global $ConnectingDB; 
    $sql = "INSERT INTO  team_todo_list(user,task)";
    $sql .= "VALUES(:FNamE,:LnAmE)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':FNamE', $user_id);
    $stmt->bindValue(':LnAmE', $p_desc);    
        $Execute = $stmt->execute();
        if ($Execute) {
          $_SESSION["SuccessMessage"] = "Work added successfully";
          Redirect_to("#"); 
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
        Redirect_to("#");
        }
  }
}


 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>To do list</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       <?php include('header_mobile.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include('left.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include('navbar.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       


                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong>
                                        <small>Today work</small>
                                    </div>
                                    <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
                                    <div class="card-body card-block">
                         <form action="#" method="post">
                                
                                   <div class="row">
                                       <div class="col-md-12">
                                       <div class="form-group">
                                            <label for="p_desc" class=" form-control-label">Today work <span class="text-danger">*</span></label>
                                            <textarea name="p_desc" id="p_desc" class="form-control" placeholder="I have done following work by today..." cols="5" rows="5"></textarea>
                                        </div>  
                                       </div>
                                   </div> 
                                    <button type="submit" name="add_today_work" id="add_today_work" class="btn btn-primary float-right">Add work</button>

                                    </form>

                                     
                                    </div>
                                </div>
                            </div>


                    
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    
</body>

</html>
<!-- end document-->
