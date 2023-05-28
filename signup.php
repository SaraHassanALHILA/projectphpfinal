<?php 
include('conection.php') ;
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}?>
<!DOCTYPE html>
<head>
    <meta charset="UTF_8">
    <title>signup form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="center">
        <h1>signup</h1>
        <form method="post" >
        <?php echo display_error(); ?>
            <div class="txt_field">
                <input type="email" required name="email" value="<?php echo $email; ?>">
                <span></span>
                <label>email</label>
            </div>
            <div class="txt_field">
                <input type="name" required name ="username" value="<?php echo $username; ?>">
                <span></span>
                <label>name</label>
            </div>
            <div class="txt_field">
                <input type="password" required name= "password" value="">
                <span></span>
                <label>password</label>
            
            </div>
            
            <div class="txt_field">
                <input type="password" required name= "password-1" value="">
                <span></span>
                <label>password confirmation</label>
            </div>
            <div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
            <button class="signup_button" type="submit">
                create account
            </button>
         <div class="login_link">
            <a href="login.php "> I already have an account !!</a>
         </div>
       
            </form>
     
        </div>
    </div>
</body>