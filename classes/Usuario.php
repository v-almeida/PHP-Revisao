<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    
        session_start();
        echo session_id();

        require_once "usuarios.php";

        // $usuario = $_SESSION['usr'] ?? null;
        // if(is_null($usuario)){}

        if(isset($_SESSION['usr'])){
            echo "Bem vindo" . $_SESSION['usr'];
        }else{
            $usuario = $_POST['usuario'] ?? null;
            $senha = $_POST['senha'] ?? null;

            // echo "$usuario -- $senha";

            if(is_null($usuario) && is_null($senha)){
                echo "<br>Fazer Login";
                require_once "formulario.php";
            }else{

                if(verUsuarios($usuario, $senha)){
                    echo "<br>Bem vindo...";
                    $_SESSION['usr'] = $usuario;
                }else{
                    echo "<br>Tentar novamente...";
                    require_once "formulario.php";
                }

            }
        }

        
    ?>


</body>

</html>