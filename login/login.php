


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">   
<title>Login</title>
</head>
<body>

    <div class="container-login">
        <div class="login">
            <div>
                <div class="login-top-container">  
                    <div class="text-login">
                        <h2>FAÇA SEU LOGIN</h2>
                        <h2 class="point">.</h2>
                    </div>
                    <a href=""><img src="img/logo.png" alt="" class="logo"></a>
                </div>

                <form action="teste-login.php" method="post">
                    <div>
                        <label for="">Email</label><br>
                        <input type="text" name="email" required>
                    </div>
                    <div>
                        <label for="">Senha</label><br>
                        <input type="text" name="senha" required>
                        
                    </div>
                   
                    <a href="" class="forgot-password"> Esqueceu a senha?</a>
                    <div class="container-button">
                        
                        <input type="submit" name="submit" class="entry" value="Entrar">

                        
                        <a href="../cadastro/cadastro.php" class="create-acount">Criar conta</a>                    
                    </div>
                </form>


            </div>
            
        </div>
    </div>
</body>
</html>
