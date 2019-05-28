<?php
    
    if(isset($_POST['btn'])){
        if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['sexo'])){
            
            if(!is_numeric($_POST['usuario']) ){

                $nome = $_POST['usuario'];
                $sexo = $_POST['email'];
                $nasc = $_POST['senha'];
                $email = $_POST['sexo'];

                include_once 'conexao.php';

                if($btn == 'inserir') {
                    $sql = "INSERT INTO Registro (usuario, email, senha,sexo) VALUES ('$nome','$sexo','$nasc','$email')";
                    
                    if(mysqli_query($con,$sql)) {
                        echo "<script>window.alert ('Cadastro realizado com sucesso!') </script>";
                        echo '<script language="javascript">';
                        echo 'location.href"../index.php";';
                        echo '</script>';
                    } else {
                        echo "Error".$sql. "<br>" .mysqli_error($con);
                    }
                
                    mysqli_close($con);
                }
            }else {
                echo 'Falha ao realizar cadastro';
            }
            
        }else {
            echo 'Falha ao realizar cadastro';
        }
    }
echo 'deu ruim';
?>