<!doctype html>
<html lang="en">
  <head>
    <title>Gaming Club</title>
    <link rel="icon" href="img/logo-48.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registrar.css" media="screen" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="content">

        <h1 class="display-4">Register Gaming Club</h1>

        <div class="row">

                <div class="col-md-12" id="ab">
                        
                        <form action="php/valida.php" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">User</label>
                                    <input name="usuario" required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome de usuário">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input name="email" required type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                                </div>
            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Enter a password</label>
                                    <input name="senha" required type="password" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                                </div>   
                                
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">confirm password</label>
                                    <input required name="confirmarSenha" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirmar senha">
                                </div>   
            
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Sex</label>
                                    <select name="sexo" required class="form-control">
                                        <option>Select...</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                    </select> <br><br>   
                                  <button type="submit" name="btn" value="inserir" class="btn btn-primary" id="register">Register</button></a>
                            </form>
                            <br><br>   
                      <a href="#">
                </div>
        </div>
    </div>    
    <a href="index.php"><button class="btn btn-danger">index</button></a>

    <footer class="page-footer font-small special-color-dark pt-4 footer">

        <div class="container">
    
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1" target="_blank" href="https://www.facebook.com/matheus.destefani.3">
                <img src="img/fb.png">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1" target="_blank" href="https://github.com/HarderVoices">
                <img src="img/git.png">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1" target="_blank" href="https://www.linkedin.com/in/matheus-destefani-836a58185/">
                <img src="img/link.png">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-copyright text-center py-3 footer2 desc">© 2019 :
          <a class="link" href="https://github.com/HarderVoices"> Projects </a>
        </div>
      </footer>
  </body>
</html>
