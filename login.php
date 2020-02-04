<form action="login.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
    <p>
        Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
    </p>
         <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
    </p>
        <p><input type="checkbox" name="remember" /> Remember me
    </p>
        <p><input type="submit" value="Login"></span></p>       
</form>

<?php

if(!empty($_POST["remember"])) {
    setcookie ("username",$_POST["username"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Cookies Set Successfuly";
} else {
    setcookie("username","");
    setcookie("password","");
    echo "Cookies Not Set";
}

?>

<p><a href="page1.php"> Go to Login Page </a> </p>