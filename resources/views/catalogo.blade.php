<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitrine Store Catálogo</title>

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

<section class="catalog" id="catalog">
    <div class="content">
        <div class="title-wrapper-catalog">
            <p></p>
            <h3>Catálogo</h3>
        </div>
        <div class="filter-card">
            <input
                type="text"
                class="search-input"
                placeholder="Pesquisar"
            />
            <button class="search-button">Pesquisar</button>
        </div>
        <div class="card-wrapper">
            <div class="card-item">
              <img src="images/iphone15promax.png" alt="Car" />
              <div class="card-content">
                <h3>Iphone 15 Pro Max</h3>
                <p>
                  256GB Titânio Azul, Tela de 6.7", Câmera Dupla de 48MP, iOS
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/iphone15pro.png" alt="Car" />
              <div class="card-content">
                <h3>Iphone 15 Pro</h3>
                <p>
                  128GB, Preto, Tela de 6.1", Câmera Dupla de 48MP, ios
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/iphone15.png" alt="Car" />
              <div class="card-content">
                <h3>iPhone 15 </h3>
                <p>
                  128GB, Preto, Tela de 6.1", Câmera Dupla de 48MP, IOS
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/galaxy24ultra.png" alt="Car" />
              <div class="card-content">
                <h3>Galaxy S24 Ultra</h3>
                <p>
                  Galaxy AI, Câmera Quádrupla 200MP, Tela de 6.8", 512GB, 12GB de RAM, Titânio Creme
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/galaxys24+.png" alt="Car" />
              <div class="card-content">
                <h3>Galaxy S24+</h3>
                <p>
                  Galaxy AI, Câmera Tripla 50MP, Tela de 6.7" 1-120Hz, 512GB, 12GB de RAM, eSIM, Preto
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/galaxys24.png" alt="Car" />
              <div class="card-content">
                <h3>Galaxy S24</h3>
                <p>
                  Galaxy AI, Câmera Tripla 50MP, Tela de 6.2" 1-120Hz, 256GB, 8GB de RAM, eSIM, Preto
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/macbook.png" alt="Car" />
              <div class="card-content">
                <h3>Notebook Macbook Pro</h3>
                <p>
                  Tela Retina 14", Chip M3, 8GB RAM, CPU 8 Núcleos, GPU 10 Núcleos, SSD 512GB, Cinza-espacial
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/fonebeats.png" alt="Car" />
              <div class="card-content">
                <h3>Fone de Ouvido Beats Studio3 Wireless</h3>
                <p>
                  Apple, The Beats Skyline Collection - Cinza Chumbo - MXJ92LL/A
                </p>
                <button type="button">Comprar</button>
              </div>
            </div>
            <div class="card-item">
              <img src="images/fonesamsung.png" alt="Car" />
              <div class="card-content">
                <h3>Fone Samsung Galaxy Buds 2 Pro</h3>
                <p>
                  Cancelamento de Ruído Inteligente, Violeta - SM-R510NLVPZTO
                </p>
                <button type="button">Comprar</button>
              </div>
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
    </html>
