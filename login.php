<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       include("config.php");
       include("navb.php");
       if(isset($_POST['signin']))
       {

       $email=$_POST['email'];
       $pass=$_POST['pass'];
      
       /* $res = mysqli_query($mysqli,"select * from user where email='$email' and pass='$pass'");
       $result=mysqli_fetch_array($res);           
                if($result)
                    {
                       
                        header ("location:/phpbot/wel.php");
                    }
                    else
                    {
                       echo "Faild";

                    } */
                    header ("location:/adarshmarriage/wel.php");
       }
       
    ?>

      <div class="container">
      <h1 class=" text-center"> Adarsh Marriage Bureau</h1>
      <form action="/phpbot/login.php" method="post">
        <div class="form-group">
            <label for="email " >Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>  
           
        <button type="submit" class="btn btn-primary" name="signin">Signin</button><br><br>
        <hr >

        <a href="signup.php" style="text-decoration: none;">New Registration</a>
        
     </form>
   </div>
</body>
</html>