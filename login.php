<?php include ('head.php')?>
    <?php include ('topo.php')?>
<body>
    <link rel="stylesheet" href="login.css">
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.act.php" method="post" ="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha" />
            </div>
            <input type="submit" value="Logar" class="btn solid" />
            <p class="social-text">Ou entre com suas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="login.act.php" method="post" class="sign-up-form">
            <h2 class="title">Criar Conta</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Ou crie com suas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui ?</h3>
            <p>
              Crie sua conta para facilitar seus futuros corres em 
              nossa loja!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Criar conta
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Já tem cadastro?</h3>
            <p>
              Entre com sua conta para acessar seu histórico de compras
              e acessos a cupons!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
          <script src="scripts/login.js"></script>
        </div>
      </div>
    </div>
  </body>