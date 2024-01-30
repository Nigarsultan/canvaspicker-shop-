<?php
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'alhamdulillah';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO signin(firstname,lastname,email) value('$firstname','$lastname','$email')";


mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>signup</title>
    <style>
        .color{
            color: black;
        }
        .width{
            width:130px;
        }
        </style>
</head>
<body>
    <section class="bg-white">

        <div class="text-lg-center p-4 m-5 bg-black">
        
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            
    <form action="" method="POST">
        <h1 class="fst-italic fs-1 color my-2">sign up </h1>
<p class="fst-italic fs-1 color ">First Name:<input type="text" name="firstname" class="bg-white fs-4 rounded-pill"id="firstname"></p><br>
<p class="fst-italic fs-1 color">Last name:<input type="text" name="lastname"class="bg-white fs-4 rounded-pill"></p><br>
<p class="fst-italic fs-1 color">Email:<input type="text" name="email"class="bg-white fs-4 rounded-pill"></p><br>

<input type="submit" name="submit"class="fs-3 border rounded-pill my-2 ms-5 width" value="Submit">
</form><br><br>



</div>
</div>

<section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
