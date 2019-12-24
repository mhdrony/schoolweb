<?php 
    include_once 'inc/header.php';
    
    $user = new User();
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['registration'])){
        $userReg = $user->userRegistration($_POST); 
    }

?>
<section id="Registration_page">
<div class="container">
<div class="row">
<div class="col">
    <h2 class="mt-3 text-center">Registration system</h2> 
    <?php 
            if(isset($userReg)){
                echo $userReg;
            }
    ?>
</div>
</div>
<div class="row">

<div class="col">
<div class="registration_box">
<form action="" method="POST"> 
        <div class="form-group">
            <input type="text" name='name' placeholder='type your name'class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name='useremail' placeholder='type your email'class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name='userpassword' placeholder='type your password'class="form-control">
        </div>
        <button type="submit" name="registration" class="btn btn-primary">Registration</button> 
        <button type="submit" name="registration" class="btn btn-danger">  <a class="text-light" href="login.php">Login</a> </button>
    </form>
</div>
</div>
</div>
</div>
</section>