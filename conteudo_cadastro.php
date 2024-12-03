<html>
    <head>
    <link rel="stylesheet" type="text/css" href="site.css">
    </head>

    <div class="cadastro_geral">

            <div>
                <img src="imagens/warrior.png">
            </div>

        <form method="POST" action="cad_cadastro.php" class="cadastro_form">
            <h2>Criar minha conta</h2>
            <h4>Qual seu nome?</h4>
            <input type="text" name="nome" placeholder="NOME" size="60">
            <h4>Qual seu email?</h4>
            <input type="email" name="email" placeholder="EMAIL" size="60">
            <h4>Crie uma senha</h4>
            <input type="text" name="senha" placeholder="SENHA" size="60">
            <h4>Repita sua senha</h4>
            <input type="text" name="repetir_senha" placeholder="REPETIR SENHA" size="60">
            <h4>Crie uma frase de lembrete</h4>
            <input type="text" name="lembrete" placeholder="LEMBRETE" size="60">
            
            <button type="submit">CADASTRATAR</button>
            <button type="reset">LIMPAR</button>
        </form>
        <div class="info_final_cadastro">
            <a href="index.php"><p>&larr; Voltar para a página principal</p></a>
            <span>Já possui cadastro ? Então click no link <a href="login.php">Logar</a> para entrar</span>
            
        </div>
    </div>

</html>