<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("location: index.php");
}



if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $confirmpasssword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn,"SELECT * FROM tb_user WHERE username= '$username'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script>alert('username has already taken');  </script>";
    }
    else{
        if($password == $confirmpasssword){
        $query="INSERT INTO tb_user VALUES('','$username','$password')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('registration succesfull'); </script>";
    }
    else{
        echo
        "<script> alert('password does not match )";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
    <link rel="stylesheet" href="stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background: url('images/bck.jpg');
    background-size: cover; */
    
}

.wrapper{
   width: 420px;
   background-color:ghostwhite;
   color: black;
   padding: 30px 40px;
   background-size: cover;
   border-radius: 10px;
   backdrop-filter: blur(20px);
   border: 2px solid rgba(0, 0, 0, .5);
   box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
   
}

.wrapper h1{
    font-size: 36px;
    text-align: center;

}
.wrapper .inputbox{
    position: relative;
    width: 100%;
    height: 50px;
    border: 2px solid rgba(0, 0, 0, 0.23);
    border-radius: 40px;
    margin: 30px 0 ;

}

.inputbox input{
    width: 100%;
    height: 100%;
    background: transparent;
    
    border: 2px solid rgba(0, 0, 0, 0.23);
    outline: none;
    border: 2px solid rgba( 255, 255, 255, .2);
    
    font-size: 16px;
    color: black;
    padding: 20px 45px 20px 20px;

}
.inputbox input::placeholder{
    color: black;

}

.inputbox i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%); 
    /* this is used to rotate at y position */
}

.wrapper .remember{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;

}

.remember label input{
    accent-color: #fff;
    margin-right: 3px;

}

.remember a{
    color: #fff;
    text-decoration: none;

}

.remember a:hover{
    text-decoration: underline;
}

.wrapper .btn {
    width: 100%;
    height: 45px;
    background: #fff;
    border: 2px solid rgba(0, 0, 0, 0.23);
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px  rgba( 0, 0, 0, .1);
    cursor: 16px;
    color: #333;
    font-weight: 900;
}

.wrapper .register{
    font-size: 14.5px;
    text-align: center;
    margin-top: 20px ;
    

}
.register p a{
    color: black;
    text-decoration: none;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}
</style>
<body>
    <div class="wrapper">
        <Form action="" method="post" autocomplete="off">
            <h1> signUp </h1>
            <div class="inputbox">
              
             <input type="text"  name="username" placeholder="username" id="username">
             <i class='bx bxs-user'></i>
            </div>
            <div class="inputbox">
              <input type="password"  name="password" placeholder="new password" id="password">
              <i class='bx bx-lock-alt' ></i>
            </div>

            <div class="inputbox">
              <input type="password"  name="confirmpassword" placeholder="confirm-password" id="confirmpassword">
              <i class='bx bx-lock-alt' ></i>
            </div>
           
             <button type="submit" class="btn" name="submit">signUp</button>
            <div class="register">
                <p> Already have an account? <a href="loginpage.php">click here to login</a></p>
            </div>
        </Form>
    </div>

    
</body>
</html>