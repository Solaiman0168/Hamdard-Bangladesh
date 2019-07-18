<?php include('config/db_connection.php');?>
<!DOCTYPE html>
<html>
<head>

<style>

body{
  background: url(image/bodyImage.png);
  background-repeat:repeat;
  margin: 0px;
  padding: 0px;


}
.notice_details_body{
  background: #ffffffc9;
}
#title{
  margin-top: -15px;
  padding: 0px;
  background-color: #228B22;
  color: #fff;
  height: 35px;
  display: block;
}
h4{
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  
}
.notice_details_head h2{
  color: #227b00;
  text-align: center;
  font-size: 20px;
}
.notice_details_body h4{
  color: #227b00;
  margin: 0px 5px;
  text-align: justify;
}
.font{
  color: #000;
}
.table{
  background: #ffffffc9 !important;
}
</style>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div id="title">

    <h4>
      <span style="left: 0;margin-left: 10px;position: absolute; "><a href="news_events.php" style="text-decoration: none; color: #fff; font-size: 14px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a></span>
       <span style=" font-size: 14px;"> News & Events Details</span>
   </h4>

<?php
        if(isset($_GET['view'])){
        $id = $_GET['view'];
        $sql = "SELECT * FROM `notice_setup` WHERE notice_id = $id";
        $row = mysqli_fetch_array(mysqli_query($con,$sql));

 ?>
<div class="notice_details_body">
  <div class="container">
      <div class="row">
         
          <div class="col-md-8 col-md-offset-2">
              <div class="notice_details_head">
                  <h2><?=$row['en_title']?></h2>
              </div>
          </div>
          <div class="col-md-12">
              <div class="notice_details_body">
                  <h4><?=$row['en_notice_details']?></h4>
              </div>
          </div>
      </div>
  </div>
</div>
  <?php } ?> 
</body>
</html>
