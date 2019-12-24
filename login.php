<?php 
    include_once 'inc/header.php';
    Session::checkLogin();
?>
<?php 
    $user = new User();

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
        $userLogin = $user->userLogin($_POST);                                     
    }
?>


<section id="Login_page">
<div class="container">
<div class="row">
<div class="col">
    <h2 class="mt-3 text-center">Login system</h2>

    
    <?php 
            if(isset($userLogin)){
                echo $userLogin; 
            }
    ?>

</div>
</div>
<div class="row">

<div class="col">
<div class="login_box">
<form action="" method="POST">
        <div class="form-group">
            <div class="col-sm-8">
            <input type="text" name='loginemail' placeholder='type your email'class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8">
            <div class="py-3"></div>
            <input type="password" name='loginpassword' placeholder='type your password' class="form-control">
            </div>
        </div>
        
        <div class="col-sm-5">
            <div class="py-3"></div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <!-- <button type="submit" name="registration" class="btn btn-danger">  <a class="text-light" href="registration.php">Registration</a> </button> -->
        </div>
    </form>
</div>
    
</div>

</div>
</div>
</section>
<?php
    include_once"inc/footer.php";

?>