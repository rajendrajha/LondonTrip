<?php
if(isset($_POST['name'])){
  $server= "localhost";
  $username= "root";
  $password= "";
  $con=mysqli_connect($server,$username,$password);
  if(!$con){
      die("Failed to login" . mysqli_connect_error());
  }
 
  $name= $_POST['name'];
  $age= $_POST['age'];
  $gender= $_POST['gender'];
  $details= $_POST['details'];
 

  $sql= "INSERT INTO `london_trip`.`trip` (`name`, `age`, `gender`, `details`, `dt`) VALUES ('$name','$age', '$gender', '$details', current_timestamp())";
  if ($con->query($sql)==true){
        echo "googg";
  }
  else{
      echo "Error: $sql <br> $con->error";
  }
  $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Trip Registration</title>
    <style>
        body{
            background: url('R.jfif');
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .class-container p{
            color: white;
            font-size: 40px;
            padding: 0px 200px;
            font-family:'Courier New', Courier, monospace;
        }
        .header-container{
           width: 100px;
           height: 90px;
           background-color: black;
           padding: 0px 100px;
           margin-left: 500px;
        }
        .header-container p{
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
            padding: 28px 15px;
            color: white;
        }
        .error{
            color: red;
        }
        #btn{
            width: 200px;
            height: 50px;
            background-color: rgb(55, 171, 248);
            border-radius: 50px;
            font-size: 20px;
            font-family: 'Courier New', Courier, monospace;
            position: absolute;
            top: 500px;
            left: 545px;
        }
        #box{
            width: 500px;
            height: 30px;
            border-radius: 200px;
            position: absolute;
            top: 300px;
            left: 400px;
        }
        #box::placeholder{
            font-size: 15px;
            font-family: 'Courier New', Courier, monospace;
        }
        #box1{
            width: 500px;
            height: 30px;
            border-radius: 200px;
            position: absolute;
            top: 350px;
            left: 400px;
        }
        #box2{
            width: 500px;
            height: 30px;
            border-radius: 200px;
            position: absolute;
            top: 400px;
            left: 400px;
        }
        #textbox{
            width: 500px;
            height: 30px;
            border-radius: 200px;
            position: absolute;
            top: 450px;
            left: 400px;
        }
    </style>
</head>
<body>
    <div class="class-container">
        <p>
            Welcome! To London Trip Registration 
        </p>
    </div>
    ]
    <form action="index.php" method="post">
        <input type="text" id="box" name='name' id="name" placeholder="Enter your name">
        <input type="text" id="box1" name='age' id="age" placeholder="Enter your age">
        <input type="text" id="box2" name='gender' id="gender" placeholder="Enter your gender">
        <input type="text" id="textbox" name='details' id="details" placeholder="Enter your details">
        <button id="btn">
            Submit
        </button>
    </form>
    
    
    <script src="script.js"></script>
</body>
</html>
<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `details`, `dt`) VALUES ('1', 'ayush', '11', 'male', 'I am a coder', current_timestamp()); -->