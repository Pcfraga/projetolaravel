<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Login</title>
</head>
<body>
    <h2>Formulário de Login</h2>
    <form action="validar_login.php" method="post">
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>