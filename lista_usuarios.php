<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <link rel="icon" href="./assets/favicon.png" type="image/png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dados | TesteFeed</title>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>

    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css" />
    <script src="./Bootstrap/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/dados.css">
    <link rel="stylesheet" href="./style/menu_mobile.css">

    
</head>
<body>
  <?php
    include 'conexao.php';
    include 'menu.inc';

    echo '<main>';
              $select = 'SELECT * FROM usuario';

              if($_SESSION["permissao"] == 1){
                  //painel do adm
              }
              else{
                $select .= " WHERE id_usuario='".$_SESSION["usuario"]."'";

                $resultado = mysqli_query($conexao,$select);

                echo '
                  <div class="data-user-title">
                    <img src="assets/dados.svg" Alt="user" class="icon-user"/>
                    <h1>Dados Pessoais</h1>
                  </div>
                  <div class="data-user-details">
                    <div class="data-user-details-items">
                      <h3>Nome</h3>
                ';
                while($linha = mysqli_fetch_assoc($resultado)){
                  echo '
                      <p>'.$linha["nome"].' </p>
                    </div>

                    <div class="data-user-details-items">
                      <h3>Nome de Usuário</h3>
                      <p>'.$linha["nome_usuario"].' </p>
                    </div>

                    <div class="data-user-details-items">
                      <h3>Endereço de E-mail</h3>
                      <p>'.$linha["email"].'</p>
                    </div>
                  ';
                }
              } 
            ?>
          </div>  
        <div class="buttons-action">
            <button class="data-user-action" data-toggle="modal" data-target="#alterarDados">Alterar Dados</button>
            <button class="data-user-delete" data-toggle="modal" data-target="#excluirConta">Excluir Conta</button>
        </div>     
    </main>

    <footer>
        <span> Site desenvolvido por: Carol, Julia Costa e Leandro</span>
    </footer>

    <!-- Modal Alterar Dados -->
    <div class="modal fade " id="alterarDados" tabindex="-1" role="dialog" aria-labelledby="important-msg-label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Alterar Dados</h4>
            </div>
            <div class="modal-body modal-form">
              <input type="text" name="nome" placeholder="Nome Completo" />
              <input type="text" name="nome" placeholder="Nome Completo" />
              <input type="text" name="nome" placeholder="Nome Completo" />
            </div>
            <div class="modal-footer">
              <button class="data-user-action-cancel" data-dismiss="modal">Cancelar</button>
              <button class="data-user-action-save">Salvar</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal Excluir Conta -->
    <div class="modal fade " id="excluirConta" tabindex="-1" role="dialog" aria-labelledby="important-msg-label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Excluir Conta</h4>
            </div>
            <div class="modal-body">
              <p class="modal-text">Tem certeza que deseja excluir sua conta?</p>
            </div>
            <div class="modal-footer">
              <button class="data-user-action-cancel" data-dismiss="modal">Não</button>
              <button class="data-user-action-save">Sim</button>
            </div>
          </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>
</body>
</html>