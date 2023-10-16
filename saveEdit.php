<?php 

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $nasciment_date = $_POST['nasciment_date'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $addres = $_POST['addres'];

        $sqlUpdate = "UPDATE usuarios SET name='$name',email='$email',password='$password',gender='$gender',nasciment_date='$nasciment_date',city='$city',state='$state',addres='$addres'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');
?>