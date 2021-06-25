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
 
       if(isset($_POST['ok']))
            {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
               
                $result = mysqli_query($mysqli,"insert into user values('','$email','$pass','$cpass')");
                if($result)
                {
                    echo "Registration Successfully";
                }
                else{
                    echo "failed:";
                }
                //echo "Registration";
            }

       
    ?>
   <div class="container">
      <h1 class=" text-center"> Welcome In Adarsh Marragi Beruo Signup </h1>
      <form action="/adarshmarriage/signup.php" method="post">
        <div class="form-group">
            <label for="email " >Full Name</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="email " >Last Name</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="email " >Mother Name</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="email " >Address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>City</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        </select>

        <div class="form-group">
            <label for="email " >Mobile No</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="email " >Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            
        </div>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>Select Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        </select>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>Marital Status</option>
        <option value="1">Married</option>
        <option value="2">Non-Married</option>
        <option value="2">Divorced</option>
        </select>

        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Select Blood Group</option>
        <option value="1">O</option>
        <option value="2">A</option>
        <option value="3">AB</option>
        <option value="3">B</option>
        </select>


        <div class="form-group">
            <label for="pass">Hight</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>

         <div class="form-group">
            <label for="pass">Pincode</label>
            <input type="text" class="form-control" id="pass" name="pass">
        </div>

         <div class="form-group">
            <label for="pass">Birth Date</label>
            <input type="Date" class="form-control" id="pass" name="pass">
        </div>

         <div class="form-group">
            <label for="pass">Mother Tingue</label>
            <input type="text" class="form-control" id="pass" name="pass">
        </div>

         <div class="form-group">
            <label for="pass">Religion</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>


        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <div class="form-group">
            <label for="cpass">Confirm Password</label>
            <input type="password" class="form-control" id="cpass" name="cpass">
            <small id="emailHelp" class="form-text text-muted">Make Password and Confirm Password is Same</small>
        </div>
        
           <button type="submit" class="btn btn-primary" name="ok">Submit</button>
     </form>
   </div>

</body>
</html>
