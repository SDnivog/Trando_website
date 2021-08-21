<?php 
 $ip = $_SERVER['REMOTE_ADDR'];

 // create curl resource
 $ch = curl_init();

 // set url
 curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocation.io/ipgeo?apiKey=6ec44277e00c4e3a9079d5b01a8c8ed0&ip=".$ip);

 //return the transfer as a string
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 // $output contains the output string
 $output = curl_exec($ch);
print_r($output);
 // close curl resource to free up system resources
 curl_close($ch);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Location using Ip Address </title>
  </head>
  <body>
    <h1>Hello, world!</h1>

 
    {"ip":"157.38.232.37","continent_code":"AS","continent_name":"Asia","country_code2":"IN","country_code3":"IND","country_name":"India","country_capital":"New Delhi","state_prov":"Maharashtra","district":"Ghansoli","city":"Navi Mumbai","zipcode":"400701","latitude":"19.12431","longitude":"73.00522","is_eu":false,"calling_code":"+91","country_tld":".in","languages":"en-IN,hi,bn,te,mr,ta,ur,gu,kn,ml,or,pa,as,bh,sat,ks,ne,sd,kok,doi,mni,sit,sa,fr,lus,inc","country_flag":"https://ipgeolocation.io/static/flags/in_64.png","geoname_id":"10128846","isp":"Reliance Jio Infocomm Limited","connection_type":"","organization":"Reliance Jio Infocomm Limited","currency":{"code":"INR","name":"Indian Rupee","symbol":"₹"},"time_zone":{"name":"Asia/Kolkata","offset":5.5,"current_time":"2021-07-07 17:50:19.124+0530","current_time_unix":1625660419.124,"is_dst":false,"dst_savings":0}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




