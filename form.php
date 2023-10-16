<?php

    if(isset($_POST['submit']))
    {
        //print_r('Name: ' . $_POST['name']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Password: ' . $_POST['password']);
        //print_r('<br>');
        //print_r('Gender: ' . $_POST['gender']);
        //print_r('<br>');
        //print_r('Date: ' . $_POST['nasciment_date']);
        //print_r('<br>');
        //print_r('City: ' . $_POST['city']);
        //print_r('<br>');
        //print_r('State: ' . $_POST['state']);
        //print_r('<br>');
        //print_r('Addres: ' . $_POST['addres']);

        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $nasciment_date = $_POST['nasciment_date'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $addres = $_POST['addres'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(name,email,password,gender,nasciment_date,city,state,addres) VALUES ('$name','$email','$password','$gender','$nasciment_date','$city','$state','$addres')");

        header('Location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section>
        <div class="box">
            <form action="form.php" method="POST">
                <fieldset>
                    <legend><b>register</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" class="inputUser" required>
                        <label for="name" class="labelInput">name</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="inputUser" required>
                        <label for="password" class="labelInput">password</label>
                    </div>
                    <br>
                    <!--gender-->
                    <p>gender</p>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">female</label>
                    <br>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">male</label>
                    <br>
                    <input type="radio" id="other" name="gender" value="other" required>
                    <label for="other">other</label>
                    <br><br>
                    <!--nasciment_date-->
                    <div class="inputBox">
                        <label for="nasciment_date"><b>birth</b></label>
                        <input type="date" name="nasciment_date" id="nasciment_date" required>
                    </div>

                    <br><br>
                    <!--location-->
                    <div class="inputBox">
                        <input type="text" name="city" id="city" class="inputUser" required>
                        <label for="city" class="labelInput">city</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="state" name="state" id="state" class="inputUser" required>
                        <label for="state" class="labelInput">state</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="addres" name="addres" id="addres" class="inputUser" required>
                        <label for="addres" class="labelInput">addres</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="send">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>

