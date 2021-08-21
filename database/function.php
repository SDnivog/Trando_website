<?php include("config.php"); ?>

<?php 


function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}



// Total added cart product by user
function TotalProductAddCart(){ 
      global $ConnectingDB;
                       $sql = "SELECT COUNT(*) FROM   product_cart  ";
                       $stmt = $ConnectingDB->query($sql);
                       $TotalRows = $stmt->fetch();
                       $TotalCart = array_shift($TotalRows);
                       echo $TotalCart;
}

//To check arena competion validation registration id at giftstore website
function CheckValidatePartiRegId($reg_id){
      global $ConnectingDB;
     $sql = "SELECT r_id FROM arena_comp WHERE r_id = :EmaIl";
     $stmt = $ConnectingDB->prepare($sql);
     $stmt->bindValue(':EmaIl',$reg_id);
     $stmt->execute();
     $Result = $stmt->rowCount();
     if ($Result==1) {
           return true;
     }else{
           return false;
         }
     }

//To check exisiting arena competion registration id at giftstore website
function CheckExistPartiRegId($reg_id){
      global $ConnectingDB;
     $sql = "SELECT reg_id FROM entry_upload WHERE reg_id = :EmaIl";
     $stmt = $ConnectingDB->prepare($sql);
     $stmt->bindValue(':EmaIl',$reg_id);
     $stmt->execute();
     $Result = $stmt->rowCount();
     if ($Result==1) {
           return true;
     }else{
           return false;
         }
     }

//To check exisiting arena competion email at giftstore website
function CheckExistParti($email){
      global $ConnectingDB;
     $sql = "SELECT email FROM arena_comp WHERE email = :EmaIl";
     $stmt = $ConnectingDB->prepare($sql);
     $stmt->bindValue(':EmaIl',$email);
     $stmt->execute();
     $Result = $stmt->rowCount();
     if ($Result==1) {
           return true;
     }else{
           return false;
         }
     }

//To check email exist for forgot password
function Email_OTP_Attempt($Email){

      global $ConnectingDB;
      $sql = "SELECT * FROM  gifty_users WHERE email=:UserName LIMIT 1";
      $stmt = $ConnectingDB->prepare($sql);
      $stmt->bindValue(':UserName',$Email);
      // $stmt->bindValue(':Password',$Pass);
      $stmt->execute();
      $Result = $stmt->rowcount();
      if ($Result==1) {
            return $Found_Account=$stmt->fetch();
      }else{
            return null;
      }
}




//To check exisiting user's/costomers email at gifty website
function CheckExistUsersEmailAccount($Email){
 global $ConnectingDB;
$sql = "SELECT email FROM gifty_users WHERE email = :EmaIl";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':EmaIl',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
      return true;
}else{
      return false;
    }
}

//To check valid coupon code
function CheckValidCoupon($coupon){
      global $ConnectingDB;
     $sql = "SELECT coupon FROM gifty_users WHERE coupon = :EmaIl";
     $stmt = $ConnectingDB->prepare($sql);
     $stmt->bindValue(':EmaIl',$coupon);
     $stmt->execute();
     $Result = $stmt->rowCount();
     if ($Result==1) {
           return true;
     }else{
           return false;
         }
     }

// FOR DATA COLLLECTION PURPOSE START HERE.....

//To check exisiting user's/costomers email at gifty website
function CheckExistUsersEmailAccount1($Email){
 global $ConnectingDB;
$sql = "SELECT email FROM email_ids WHERE email = :EmaIl";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':EmaIl',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
      return true;
}else{
      return false;
    }
}
//To check exisiting user's/costomers mobile no at gifty website
function CheckExistUsersMobile($Mobile){
 global $ConnectingDB;
$sql = "SELECT mobile FROM mobile_numbers WHERE mobile = :EmaIl";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':EmaIl',$Mobile);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
      return true;
}else{
      return false;
    }
}


// Function for User Login from gift store  team members
function Login_AttamptT($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM   gifty_team WHERE email=:UserName AND mobile =:Password LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$User);
            $stmt->bindValue(':Password',$Pass);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}


// Function for User order tracking
function FindOrder($OrderId){

            global $ConnectingDB;
            $sql = "SELECT * FROM   gifty_oders WHERE order_id=:UserName LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$OrderId);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}


// Total added emails by team members
function TotalProductEmails(){ 
       $Admin = $_SESSION["Temail"];
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   email_ids where admin = '$Admin' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total added mobile by team numbers
function TotalProductMobiles(){ 
       $Admin = $_SESSION["Temail"];
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   mobile_numbers where admin = '$Admin' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added emails members
function TotalProductEmails1(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   email_ids ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total added mobile numbers
function TotalProductMobile1(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   mobile_numbers  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// FOR DATA COLLLECTION PURPOSE ENDING HERE.....


// Function for User Login for buyer user
function Login_AttamptU($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM   gifty_users WHERE email=:UserName AND pass =:Password LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$User);
            $stmt->bindValue(':Password',$Pass);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}

// Function for User Login from gift store admin Main
function Login_AttamptA($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM   admin_login WHERE username=:UserName AND password =:Password LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$User);
            $stmt->bindValue(':Password',$Pass);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}

// Function for User Login from gift store  saler
function Login_AttamptS($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM   gifty_saler WHERE s_id=:UserName AND email =:Password LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$User);
            $stmt->bindValue(':Password',$Pass);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}


// Confim password for teacher
function Confirm_password(){
      if (isset($_SESSION["Id"])) {
            return true;
      }else{
            $_SESSION["ErrorMessage"] = "Login Required";
            Redirect_to("login/");
      }
}

// Total added products in cart by buyer
function TotalProductCart(){ 
       $UserId = $_SESSION["UC_id"];
	   global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   product_cart where status ='ON' && user_id = '$UserId' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added products in cart total price
function TotalProductCart1(){ 
       $UserId = $_SESSION["UC_id"];
      global $ConnectingDB;
                        $sql = "SELECT SUM(price) FROM   product_cart where status ='ON' && user_id = '$UserId' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;

}

// Total gifty Users(Buyer)
function TotalGiftyBuyer(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_users ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Feedback / Suggestions
function TotalGiftyFeedback(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM leavemsg";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Team Members
function TotalGiftyTeam(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_team ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Salers
function TotalGiftySaler(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_saler ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Product Categories 
function TotalCategories(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   pro_cat ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total gifty product(Allcateries)
function TotalGiftyProduct(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_product ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total gifty orders 
function Totalorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total gifty Recent orders 
function TotalRecentorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='recent' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Proccessing orders  
function TotalProccesingorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='0' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Accepted orders 
function TotalAccepetorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='ON' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Packed orders 
function TotalPackedorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='packed' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total gifty Shipped orders 
function TotalShippedorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='shipped' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Ariving Soon orders 
function TotalArrivingorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='arrive' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Deliveed orders 
function TotalDeliveredorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='delivered' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Rejected orders Decline by Saler
function TotalDeclineSaler(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='OFF' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Rejected orders by Admin 
function TotalRejectedorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='reject' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total gifty Cancelled orders by User 
function TotalCancelledorders(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   gifty_oders where s_satus ='cancel' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

//PRODUCT COUNT WITH CATEGORIES STARTING

// Total product in Acrylic Products  category
function TotalProductAcrylic(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Acrylic Products' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total product in Bed Sheets  category
function TotalProductBedSheet(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Bed Sheets' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Choclates category
function TotalProductChoclates(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Choclates' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Curtains category
function TotalProductCurtains(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Curtains' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// Total product in Fridge Magnet category
function TotalProductFridgeMagnet(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Fridge Magnet' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Fun Stands category
function TotalProductFunStands(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Fun Stands' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Key Chains category
function TotalProductKeyChains(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Key Chains' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Kids Zone category
function TotalProductKidsZone(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Kids Zone' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Led Products category
function TotalProductLedProducts(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Led Products' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Magic Mirrors  category
function TotalProductMagicMirrors(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Magic Mirrors' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Photos Insert Items category
function TotalProductPhotosInsertItems(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Photos Insert Items' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Photo Rocks category
function TotalProductPhotoRocks(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Photo Rocks' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Pillows category
function TotalProductPillows(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Pillows' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Puzzles category
function TotalProductPuzzles(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Puzzles' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Magnet Rakhi category
function TotalProductMagnetRakhi(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Magnet Rakhi' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Teddy Bear category
function TotalProductTeddyBear(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Teddy Bear' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Wooden Clocks category
function TotalProductWoodenClocks(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Wooden Clocks' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Wooden Table Tops category
function TotalProductWoodenTableTops(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Wooden Table Tops' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Wooden Wall Handle category
function TotalProductWoodenWallHandle(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Wooden Wall Handle' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Wrist Watch category
function TotalProductWristWatch(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Wrist Watch' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in Cups category
function TotalProductCups(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Cups' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
// Total product in T-Shirt category
function TotalProductTShirt(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='T-Shirt' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}


// Total product in Slide Images category
function TotalProductSliderImages(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  gifty_product where p_cat ='Slider Images' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}

// // Total product in  category
// function TotalProduct(){ 
//          global $ConnectingDB;
//                         $sql = "SELECT COUNT(*) FROM  gifty_product where pro_cat ='' ";
//                         $stmt = $ConnectingDB->query($sql);
//                         $TotalRows = $stmt->fetch();
//                         $TotalServises = array_shift($TotalRows);
//                         echo $TotalServises;
// }
// // Total product in  category
// function TotalProduct(){ 
//          global $ConnectingDB;
//                         $sql = "SELECT COUNT(*) FROM  gifty_product where pro_cat ='' ";
//                         $stmt = $ConnectingDB->query($sql);
//                         $TotalRows = $stmt->fetch();
//                         $TotalServises = array_shift($TotalRows);
//                         echo $TotalServises;
// }

// Total servises
function Totalservises(){ 
         global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   servises ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalServises = array_shift($TotalRows);
                        echo $TotalServises;
}
?>