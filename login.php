<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header class="cabecalho">
        <h1>my recordspace</h1>
            <nav class="cabecalho-menu">
                <a href="home.php" class="cabecalho-menu-item">home</a>
                <a href="form.php" class="cabecalho-menu-item">register</a>
            </nav>
    </header>

    <section>
        <div class="login">
            <h1>login</h1>
            <form action="testLogin.php" method="POST">
                <input type="email" name="email" id="email" placeholder="email" required>
                <br><br>
                <input type="password" name="password" id="password" placeholder="password" required>
                <br><br>
                <input type="submit" class="InputSubmit" name="submit" value="send">
            </form>
        </div>
    </section>
</body>
</html>