<!DOCTYPE html>
<head>
    <meta charset="UTF_8">
    <title>signup form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="center">
        <h1>signup</h1>
        <form method="post">
            <div class="txt_field">
                <input type="email" required>
                <span></span>
                <label>email</label>
            </div>
            <div class="txt_field">
                <input type="name" required>
                <span></span>
                <label>name</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>password</label>
            
            </div>
            
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>password confirmation</label>
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