<html>
    <head>
    <link rel="stylesheet" type="text/css" href="site.css">
    </head>
        
        <div class="login_geral">

            <div>
                <img src="imagens/warrior.png">
            </div>

            <div class="formulario_login">
                <form method="POST" action="login_acao.php" class="login">
                    <h2>Acessar minha conta</h2>
                    <h3>Preencha seus dados para fazer login</h3>
                    <h4>Qual o seu e-mail?</h4>
                    <input id="email" type="email" require name="email" placeholder="Informe o seu email" size="60">
                    <h4>Qual sua senha?</h4>
                    <input id="senha" type="password" require name="senha" placeholder="Digite a sua senha" size="60">
                    
                    <button type="submit" id="login_btn_logar">LOGAR</button>
                    <button type="reset">LIMPAR</button><br><br>       
                </form>
            </div>

        </div>

</html>