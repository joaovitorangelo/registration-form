<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or name LIKE '%data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else 
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
    <link rel="stylesheet" href="sistema.css">
    <link rel="stylesheet" href="sis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="cabecalho">
        <h1>my recordspace</h1>
            <nav class="cabecalho-menu">
                <a href="login.php" class="cabecalho-menu-item">login</a>
                <a href="form.php" class="cabecalho-menu-item">register</a>
                <a href="sair.php" class="exit">EXIT</a>
            </nav>
    </header>

    <section class="title">
        <?php
            echo "<h1>Bem vindo <u>$logado</ul></h1>"
        ?>
        <br>

        <div class="box-search">
            <input type="search" class="form-control v-25" placeholder="Search" id="search">
            <button onclick="searchData()" class="btn btn-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>

     <section>

    <section class="principal-content">
          <!--<img src="cat.jpg" alt="cat">-->
    <div class="m-5">
    <table class="table table-bg">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Addres</th>
            <th scope="col">...</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['password']."</td>";
                echo "<td>".$user_data['gender']."</td>";
                echo "<td>".$user_data['nasciment_date']."</td>";
                echo "<td>".$user_data['city']."</td>";
                echo "<td>".$user_data['state']."</td>";
                echo "<td>".$user_data['addres']."</td>";
                echo "<td>
                
                <a class='btn btn-sm btn-primary' href='edit.php?id={$user_data['id']}' title='Editar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a> 
    
                <a class='btn btn-sm btn-danger' href='delete.php?id={$user_data['id']}' title='Deletar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                
                </td>";
                echo "</tr>";

            }
        ?>
    </tbody>
    </table>
    </div>
    </section>

    <script src="script.js"></script>
</body>
</html>