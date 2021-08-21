<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require 'vendor/autoload.php';

if (isset($_POST['add_project'])) {
  
    $user_id = "G456789";
    $project_id	 = rand(11,99).date('mjYHis');
    $p_type = $_POST['p_type'];
    $client_name = $_POST['client_name'];
    $client_email  = $_POST['client_email'];
    $client_mobile = $_POST['client_mobile'];
    $p_desc  = $_POST['p_desc'];

 if (empty($p_type)) {
    $_SESSION["ErrorMessage"] = " select project category !";
    Redirect_to("#");
  } 
  elseif(empty($p_desc)){
     $_SESSION["ErrorMessage"] = " write project description !";
    Redirect_to("#");
  }
 
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO  add_project(user_id,project_id,p_type,client_name,client_email,client_mobile,p_desc)";
    $sql .= "VALUES(:FNamE,:LnAmE,:MobIlE,:eMaIl,:pASs,:CId,:CouPoN)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':FNamE', $user_id);
    $stmt->bindValue(':LnAmE', $project_id);
    $stmt->bindValue(':MobIlE', $p_type);
    $stmt->bindValue(':eMaIl', $client_name);
    $stmt->bindValue(':pASs', $client_email);
    $stmt->bindValue(':CId', $client_mobile);
    $stmt->bindValue(':CouPoN', $p_desc);
    
        $Execute = $stmt->execute();

        // echo $Execute;
        // die();

        if ($Execute) {

        //   $mail = new PHPMailer;

        //   $htmlversion="<p>Dear ".$Name.",<br>

        //   Thank You for signing up .You are now a member of the most marvellous giftstore ever.<br>
          
        //   We are committed to provide the best quality and most reliable products to our customers. Get the finest customized gifts and offers for your family, friends and loved ones.
        //   Our excellent customer support team is available 24/7 to help you with any questions.<br>
        //   You can contact them at helpdesk@giftstore.org.in <br><br>
          
        //   Your satisfaction is a priority for us, so feel free to share any feedback you have – we take your opinion seriously and will do our best to implement solutions for you.<br><br>
        //   Regards<br>
        //   Team Giftstore <br><br>
        //   https://giftstore.org.in <br>
        //   https://www.instagram.com/giftstore.org.in/'</p>";
        //   $textVersion="Hi ,.\r\n ";
        //   $mail->isSMTP();                                     		 // Set mailer to use SMTP
        //   $mail->Host = 'smtp.hostinger.in';  								// Specify main and backup SMTP servers
        //   $mail->SMTPAuth = true;                                // Enable SMTP authentication
        //   $mail->Username = 'helpdesk@giftstore.org.in';         			  // SMTP username
        //   $mail->Password = 'tE1Y+x|N5';                      // SMTP password
        //   $mail->Port = 587;                                   // TCP port to connect to
        //   $mail->setFrom('helpdesk@giftstore.org.in', 'GIFTSTORE');
        //   $mail->addAddress($Email);               // Name is optional
        //   //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //   //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //   $mail->isHTML(true);                                  // Set email format to HTML
        //   $mail->Subject = 'Welcome to Giftstore';
        //   $mail->Body    = $htmlversion;
        //   $mail->AltBody = $textVersion;
        //   $mail->send();


          $_SESSION["SuccessMessage"] = "New project added successfully";
          Redirect_to("#"); // You Can Send Admin to Any PAge YOU Want
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
    <title>My Projects</title>

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
                                        <small>New Project</small>
                                    </div>
                                    <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
                                    <div class="card-body card-block">
                         <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="p_type" class=" form-control-label">Select project category <span class="text-danger">*</span></label>
                                            <select name="p_type" id="p_type" class="form-control" >
                                                <option >Web development</option>
                                                <option >App development</option>
                                                <option >Content Creation</option>
                                                <option >Digital marketing</option>
                                                <option >Social media handling</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_name" class=" form-control-label">Client Name <span class="text-danger">*</span></label>
                                            <input type="text" id="client_name" name="client_name" placeholder="Enter  client name" class="form-control" required> 
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_email" class=" form-control-label">Client Email <span class="text-danger">*</span></label>
                                            <input type="text" id="client_email" name="client_email" placeholder="Enter  client email" class="form-control">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_mobile" class=" form-control-label">Client Mobile no. <span class="text-danger">*</span></label>
                                            <input type="text" id="client_mobile" name="client_mobile" placeholder="Enter  client mobile no." class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                       <div class="form-group">
                                            <label for="p_desc" class=" form-control-label">Project Description <span class="text-danger">*</span></label>
                                            <textarea name="p_desc" id="p_desc" class="form-control" placeholder="This project containing following features..." cols="5" rows="5"></textarea>
                                        </div>  
                                       </div>
                                   </div> 
                                    <button type="submit" name="add_project" id="add_project" class="btn btn-primary float-right">Add project</button>

                                    </form>

                                     
                                    </div>
                                </div>
                            </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">My projects  </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th>sr.no</th>
                                                <th>datetime</th>
                                                <th>user_id</th>
                                                <th>project_id</th>
                                                <th>type</th>
                                                <th>client_name</th>
                                                <th>client_email</th>
                                                <th>client_mobile</th>
                                                <th>project_desc</th>   
                                                <th>status</th>
                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>

    <?php    
              global $ConnectingDB;
              $sql = "SELECT * FROM add_project order by id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {

                 $id = $DataRows["id"];
                 $datetime = $DataRows["datetime"];
                 $user_id = $DataRows["user_id"];
                 $project_id = $DataRows["project_id"];
                 $p_type = $DataRows['p_type'];
                 $client_name = $DataRows['client_name'];
                 $client_email = $DataRows['client_email'];
                 $client_mobile = $DataRows['client_mobile'];
                 $p_desc = $DataRows['p_desc'];
                 $status = $DataRows['status'];
                
                 $SrNo++;
              
    ?>

                                        <tbody>
                                            <tr>
                                            <th><?php echo $SrNo; ?></th>
                                                <td><?php echo $datetime; ?></td>
                                                <th><?php echo $user_id; ?></th>
                                                <td><?php echo $project_id; ?></td>
                                                <td><?php echo $p_type; ?></td>
                                                <td><?php echo $client_name; ?></td> 
                                                <td><?php echo $client_email; ?></td> 
                                                <td><?php echo $client_mobile; ?></td> 
                                                <td><?php echo $p_desc; ?></td> 
                                                <td><span class="badge badge-warning">Panding</span></td>
                                                <td> <a href="dlt_project?id=<?php echo $id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> </td>
                                                
                                            </tr>
                                          
                                        </tbody>
<?php } ?>
                                    </table>
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
