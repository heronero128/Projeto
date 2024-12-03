<?php
session_start();
error_reporting(0);
if($_SESSION['nome'] != '')
{
    echo "<div style='color:white;font-size:20px;text-transforms:uppercase;' Seja bem vindo, >".
    $_SESSION['nome']."</div>";
    echo '<a href="acao_logoff.php" class="link_top"> LOGOFF</a>';
}
?>
<div class="topo_conteudo_geral">
    <a href="index.php"><img src="imagens/logoalien.png" class="logo"></a>
    <h2>Astro Pizza</h2>

    <button class="menu-toggle" id="menu-toggle">
                    ☰ <!-- Ícone do menu -->
    </button>

    <ul class="link_menu" id="link_menu">
        <li><img src="imagens/casa.png"><a href="index.php">HOME</a></li>
        <li><img src="imagens/cardapio.png"><a href="cardapio.php">CARDÁPIO</a></li>
        <li><img src="imagens/cupons.png"><a href="cupons.php">CUPONS</a></li>
    </ul>

    <div class="login_topo">
        <a href="login.php" class="link_top">LOGAR</a>
        <a href="cadastro.php" class="link_top">CADASTRE</a>
    </div>
</div>

<body>
    <script>
        document.addEventListener('DOMContentLoaded', () => 
        {
            const menuToggle = document.getElementById('menu-toggle');
            const menu = document.querySelector('.link_menu'); // Seleciona pelo seletor de classe

            menuToggle.addEventListener('click', () => {
                menu.classList.toggle('show'); // Alterna a exibição do menu
            });
        });
    </script>
</body>

