<?php

    if(!empty($_GET['id']))
    {

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            $name = $user_data['name'];
            $email = $user_data['email'];
            $password = $user_data['password'];
            $gender = $user_data['gender'];
            $nasciment_date = $user_data['nasciment_date'];
            $city = $user_data['city'];
            $state = $user_data['state'];
            $addres = $user_data['addres'];
            }
            
        }
        else 
        {
            header('Location: sistema.php');
        }
    }
    else 
    {
        header('Location: sistema.php');
    }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mycard</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <header>
        <img class="cabecalho-image" src="blackcatlogo.png">
            <nav class="cabecalho-menu">
                <a href="home.php" class="cabecalho-menu-item">home</a>
                <a href="form.php" class="cabecalho-menu-item">register</a>
            </nav>
    </header>
    
    <section>
        <div class="box">
            <form action="saveEdit.php" method="POST">
                <fieldset>
                    <legend><b>register</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" class="inputUser" value="<?php echo $name ?>" required>
                        <label for="name" class="labelInput">name</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                        <label for="email" class="labelInput">email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="inputUser" value="<?php echo $password ?>" required>
                        <label for="password" class="labelInput">password</label>
                    </div>
                    <br>
                    <!--gender-->
                    <p>gender</p>
                    <input type="radio" id="female" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : '' ?> required>
                    <label for="female">female</label>
                    <br>
                    <input type="radio" id="male" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : '' ?> required>
                    <label for="male">male</label>
                    <br>
                    <input type="radio" id="other" name="gender" value="other" <?php echo ($gender == 'other') ? 'checked' : '' ?> required>
                    <label for="other">other</label>
                    <br><br>
                    <!--nasciment_date-->
                    <div class="inputBox">
                        <label for="nasciment_date"><b>birth</b></label>
                        <input type="date" name="nasciment_date" id="nasciment_date" value="<?php echo $nasciment_date ?>" required>
                    </div>

                    <br><br>
                    <!--location-->
                    <div class="inputBox">
                        <input type="text" name="city" id="city" class="inputUser" value="<?php echo $city ?>" required>
                        <label for="city" class="labelInput">city</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="state" name="state" id="state" class="inputUser" value="<?php echo $state ?>" required>
                        <label for="state" class="labelInput">state</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="addres" name="addres" id="addres" class="inputUser" value="<?php echo $addres ?>" required>
                        <label for="addres" class="labelInput">addres</label>
                    </div>
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update" value="send">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>

