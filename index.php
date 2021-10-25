<?php
$insert=false;
if(isset($_POST['name'])){

// $server ="localhost";
// $username="root";
// $password="";
$server ="remotemysql.com";// remote database
$username="im0jNabE1F";
$password="SmduDhNMIe";


$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to ".mysqli_connect_error());

}


$name=$_POST['name'];
$gender =$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql ="INSERT INTO `im0jNabE1F`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());
";
// echo $sql;
if($con->query($sql)==true)
{
    $insert=true;
    // echo " succesfully inserted";
}
else
{
    echo "error $sql<br> $con->error";
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
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA14XET8pf1_SWHimm9PbzyGmaMusnnDdA",
    authDomain: "trip-form-390e6.firebaseapp.com",
    projectId: "trip-form-390e6",
    storageBucket: "trip-form-390e6.appspot.com",
    messagingSenderId: "395315168748",
    appId: "1:395315168748:web:2bc4a342ff53a922cf2cc9",
    measurementId: "G-10SMP73XD6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
     <img class="bg" src="beach.jfif" alt="pec-chandihgarh">
 
    <div class="container">
        <h1>welcome to trip form</h1>
        <p>enter your details of trip for confiramtion</p>
        <?php
        if($insert==true)
        {
           echo  "thanks for submitting form";
        }
        ?>
        
        <form action="index.php" method="post">
            
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="age" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea type="desc" name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
            <button style="background-color: rgb(197, 141, 197);" class="btn1">submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>