<?php
    include 'conexao.php';
    echo '
        <header class="header">
            <nav>
                <a href="home.php"><img src="././assets/images/logo.svg" alt="logo" class="logo"></a>
                <button id="js-open-menu" class="menu-button">
                    <i class="menu-icon"></i>
                </button>
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                ';
                if($_SESSION["permissao"] == 2){
                    echo '<li><a href="dados_usuarios.php">Meus Dados</a></li>';
                    $selectNomeRede = "SELECT rede.nome as nome, rede.id_rede as id_rede FROM rede INNER JOIN inscricao ON inscricao.email_usuario = '".$_SESSION["email"]."' AND inscricao.cod_rede = rede.id_rede";
                    $resultadoNomeRede = mysqli_query($conexao,$selectNomeRede);
                    if(mysqli_num_rows($resultadoNomeRede) != 0){
                         echo '
                            <li><a href="rede.php">Rede</a></li>
                            <li><a href="posts.php">Meus Posts</a></li>
                        ';
                    }
                    echo '<li><a href="areas.php">Áreas</a></li>';
                }
                if($_SESSION["permissao"] == 3){
                    if($_SESSION["situacao"] != 1)
                    echo '<li><a href="dados_psicologos.php">Meus Dados</a></li>';
                }
                echo '
                    
                    <li class="logout"><a href="logout.php" class="icon-logout"><img src="././assets/images/log-out.svg" alt="Sair"/></a></li>
                </ul>
            </nav>
        </header>
    ';
?>