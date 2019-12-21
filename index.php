<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">
            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <div class="rslides" id="slider1">
                                                        <h4>Students Login</h4>
                                                         <h5 align="center"><img src="images/hexco.png" alt=""> </h5>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                <div class="section-title">
                <p class="sub-title">Higher Education Examination Council (HEXCO)</p>
                 </div>

                 <form class="form-horizontal" method="post">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-6 control-label">SEARCH RESULTS</label>
                                                            <div class="col-sm-6">
                                                               <a href="find-result.php"><div style="color:green;">click here</div>
                                                            </div>
                                                        </div>
                                                       
                                                    </form>

                                            

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                       <p class="text-muted text-center"><small>Copyrights © HEXCO RESULTS 2019</small></p>
                                        </div>
                                        <!-- /.col-md-11 -->
                                    
                                    
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                    
                    </div>
                   
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
