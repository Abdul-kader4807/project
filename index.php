<?php session_start();  
  require_once("configs/db_config.php");
  $base_url="cpanel";
  //require_once("library/classes/system_log.class.php");
  
  if(isset($_POST["btnSignIn"])){
    
     $username=trim($_POST["txtUsername"]);
     $password=trim($_POST["txtPassword"]);
     //echo $username," ",$password;
     //$result=$db->query("select u.id,u.username,r.name from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.username='$username' and u.password='$password'");
     $result=$db->query("select u.id,u.full_name,u.password,u.email,u.photo,u.mobile,u.role_id,r.name role from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.name='$username' and u.inactive=0");
      
         
      $user=$result->fetch_object();

      if($user && password_verify($password,$user->password)){
        
        $_SESSION["uid"]=$user->id;
        $_SESSION["uname"]=$user->full_name;
        $_SESSION["uphoto"]=$user->photo;
        $_SESSION["email"]=$user->email;
        $_SESSION["mobile"]=$user->mobile; 
        $_SESSION["role_id"]=$user->role_id;
        $_SESSION["urole"]=$user->role;

        header("location:home");
      }else{
        echo "Incorrect username or password";
      }
        
        
        
         //  $now=date("Y-m-d H:i:s");
        //  $log=new System_log("","LOGIN","Successfully logged in user : $uid-$_username",$now);
        //  $log->save();

               
  
    }

?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 04:18:05 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Pos Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/pos_new_logo.png">

        <!-- Layout Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                    <div class="text-center mb-4">
                                        <a href="index.html" class="">
                                             <img src="assets/images/pos_new_logo.png" alt="" height="60" class="auth-logo logo-dark mx-auto"> 
                                             <img src="assets/images/logo-light.png" alt="" height="22" class="auth-logo logo-light mx-auto"> 
                                        </a>
                                        <h4 class="text-muted mt-2">Login to Your Retail Management Dashboard</h4>
                                    </div>
    
                                    <div class="card my-auto overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                    <img src="assets/images/pos.png" alt="" width="460" height="573">
                                                    <!-- <div class="bg-overlay bg-primary"></div> -->
                                                    <div class="h-100 bg-auth align-items-end"> 
                                                    </div>
                                                </div>

                                                <div class="col-lg-6" > 
                                                    <div class="p-lg-5 p-4">

                                                        
                                                        
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Welcome Back !</h4>
                                                                <p class="text-muted">Sign in to continue to Pos</p>
                                                            </div>
            
                                                            <form action="#" class="auth-input" method="post">
                                                                <div class="mb-2">
                                                                    <label for="username" class="form-label">Username</label>
                                                                    <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Enter username">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="password-input">Password</label>
                                                                    <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Enter password">
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button class="btn btn-primary w-100" name="btnSignIn" type="submit">Sign In</button>
                                                                </div>
                                                                <div class="mt-4 pt-2 text-center">
                                                                    <div class="signin-other-title">
                                                                        <h5 class="font-size-14 mb-4 title">Sign In with</h5>
                                                                    </div>
                                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-primary btn-sm"><i class="ri-facebook-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-danger btn-sm"><i class="ri-google-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-dark btn-sm"><i class="ri-github-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-info btn-sm"><i class="ri-twitter-fill font-size-16"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    
                                                        <div class="mt-4 text-center">
                                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
                                                        </div>
                                                    </div>
                                                </div>  
                                        </div>
                                    </div>
                                    <!-- end card -->
                                    
                                    <div class="mt-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Mahir's IT. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pos Management System</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 04:18:05 GMT -->
</html>

