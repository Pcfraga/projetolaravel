<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitrine Store Login usuário</title>

    <link rel="stylesheet" href="css/styles.css" />
    <style>
        .form-container {
            display: none;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="content">
        <nav>
            <p class="brand">Vitrine<strong>Store</strong></p>
            <ul>
                <li><a href="{{route('paginaInicial')}}">Inicio</a></li>
                <li><a href="{{route('catalogo')}}">Catálogo</a></li>
                <li><a href="{{route('sobre')}}">Sobre</a></li>
                <li><a href="{{route('recomendados')}}">Recomendados</a></li>

            </ul>
        </nav>
        <div class="header-block">
            <div class="text">
                <h2 style="font-size: 30px;">A melhor loja da sua Região</h2>
                <p style="font-size: 20px;">
                    As últimas inovações em tecnologia no nosso site de vendas.
                </p>
            </div>
            <img src="images/logovitrine.png" alt="Car" />
        </div>

    </div>
</header>

<script>
    function mostrarFormulario() {
        var formulario = document.getElementById("formulario");
        formulario.style.display = "block";
    }
</script>

      <section class="about" id="about">
        <div class="content">
          <div class="title-wrapper-about">
            <p></p>                                                                                     <!--deixei aberto para ver o que podemos colocar aqui-->
            <h3>Sobre Nós</h3>
          </div>
          <div class="about-content">
            <div class="left">
              <img src="images/about.png" alt="About" />
            </div>
            <div class="right">
              <h3>Vitrine Store</h3>
              <p>
                Bem-vindo à nossa loja de eletrônicos, onde a paixão pela tecnologia encontra um lar. <br>
                <br>
                Desde a nossa fundação, temos sido apaixonados por proporcionar aos nossos clientes uma experiência única de compra, oferecendo os mais recentes e melhores produtos eletrônicos. <br>
                <br>
                Nosso compromisso vai além de apenas vender produtos - buscamos inspirar e capacitar pessoas através da inovação tecnológica.<Br>
                <Br>
                Cada gadget, dispositivo ou acessório em nossa seleção é cuidadosamente escolhido para garantir qualidade, desempenho e confiabilidade. <Br>
                <Br>
                Além disso, acreditamos firmemente no atendimento ao cliente excepcional. <br>
                <br>
                Nossa equipe dedicada está sempre disponível para ajudar, oferecendo orientação e suporte para garantir que você faça a melhor escolha para suas necessidades tecnológicas. <br>
                <br>
                Como parte de nossa missão, também nos esforçamos para manter práticas sustentáveis, minimizando nosso impacto ambiental sempre que possível. <br>
                <br>
                Junte-se a nós nesta jornada emocionante pela fronteira da tecnologia. <br>
                <br>
                Explore nossa loja online e descubra como a inovação pode transformar sua vida hoje e no futuro. <br>
                <br>
              </p>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="main">
          <div class="content footer-links">
            <div class="footer-company">
              <h3>Empresa</h3>
              <h3>Sobre</h3>
              <h3>Contato</h3>
            </div>
            <div class="footer-rental">
              <h3>Help</h3>
            </div>
            <div class="footer-social">
              <h4>Redes Sociais</h4>
              <div class="social-icons">
                <img src="images/instragram.png" alt="Instagram" />
                <img src="images/facebook.png" alt="Facebook" />
              </div>
            </div>
            <div class="footer-contact">
              <br>
              <h3>Fale Conosco</h3>
              <h3>+55 51 9xxxx-xx79</h3>
              <h3>Vitrinetore@store.com.br</h3>
              <h3>Cidade Vitrine, Bairro Store, RS</h3>
            </div>
          </div>
        </div>
        <div class="last">Vitrine Store - 2024</div>
      </footer>
    </body>
  </html>
