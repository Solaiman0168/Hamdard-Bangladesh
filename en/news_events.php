<?php include('config/db_connection.php');?>
<!DOCTYPE html>
<html>
<head>

<style>

body{
  background: url(assets/image/bodyImage.png);
  background-repeat:repeat;
  margin: 0px;
  padding: 0px;


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

.font{
  color: #000;
}
.table{
  background: #ffffffb9 !important;
  font-family:  Helvetica, Arial, sans-serif;
}
</style>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>

<div id="title">

    <h4>
      <span style="left: 0;margin-left: 10px;position: absolute; "><a href="home.html" style="text-decoration: none; color: #fff; font-size: 14px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a></span>
       <span style=" font-size: 14px;"> News & Events</span>
   </h4>

<?php
    $sql = "SELECT * FROM `notice_setup` WHERE is_deleted = 0 ";
    $result = mysqli_query($con,$sql);
 
?>
  <div class="">
    <div class="">
        <table border="" style="border-color: #ccc"  class="col-sm-12 col-xs-12  table  table-hover">
            
            <tbody>
                <?php while($row = mysqli_fetch_array($result)):
                             
                ?>
                <tr>
                    <td class="font" >2017-12-06</td>
                    <td class="font"><?=$row['en_title']?></td>
                    <td class="font"><a href="<?='notice_details.php'.'?view='.$row['notice_id']?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>
                </tr>

                <?php endwhile;  ?> 
               
            </tbody>
        </table>    
    </div>
  </div>

</body>
</html>
