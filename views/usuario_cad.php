<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar $usuario</title>
</head>
<body>
    <h1>Cadastre-se</h1>
    <form action="" method="post">
        <label name="lbl_nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome">
<br>
        <label name="lbl_sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome ">
<br>
        <label name="lbl_email">Email</label>
        <input type="text" name="email" placeholder="Digite seu Email">
<br>
        <label name="lbl_senha">Senha</label>
        <input type="text" name="senha" placeholder="Digite sua Senha">
<br>
        <label name="lbl_tel">Telefone</label>
        <input type="text" name="tel" placeholder="Digite seu Telefone">
<br>
        <input type="submit" value="Cadastrar">


    </form>
    
    <?php
    include("../bd/conexao.php");
    include("../controls/usuario.php");
        if($_POST)
        {
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $telefone=$_POST['tel'];
            if(inserir_usuario($conexao,$nome,$sobrenome,$email,$senha,$telefone)){
                echo("Cadastrado com sucesso. <a href = 'skins_lista.php'>Entrar na Loja</a> ");
            }else{
                $msg=mysqli_error($conexao);
                echo($msg);
            }

            
        }


    ?>

</body>
</html>