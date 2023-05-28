<?php include('conection.php') ;?>
<!DOCTYPE html>
<head>
    <meta charset="UTF_8">
    <title>login </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="center">
        <h1>login</h1>
        <form method="post" >
            
		<?php echo display_error(); ?>
            <div class="txt_field">
                <input type="email"  name="email">
                <span></span>
                <label>email</label>
            </div>
            <div class="txt_field">
                <input type="password"  name="password">
                <span></span>
                <label>password</label>
            </div>
            <div class="pass">forgot password?</div>
        <input type="submit" value="login">
        <div class="signup">
            not a member<a href="signup.php">signup</a>
        </div>
        </form>
    </div>
</body>