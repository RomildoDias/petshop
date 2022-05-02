<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Animais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="principal">
        <header class="cabecalho">
            <img class="logo" src="imgs/logo.png" alt="logo da empresa umaca com umgato e um cachoro dentro">
            <h1 class="marca">Love Animais</h1>
            <nav class="mmenu">
                <ul class="lista-menu">
                    <li><a href="#home">Home</a> </li>
                    <li><a href="#produtos">Nossos Produtos</a> </li>
                    <li><a href="#servicos">Nossos Serviços</a> </li>
                    <li><a href="#pets">Pets</a> </li>
                    <li><a href="#contato">contato</a> </li>    
                    
                </ul>
            </nav>
            
        </header>
        <section id="home">
            <div id="content">
                <div id="items">
                  <div class="item">
                      <img src="imgs/slide/cachorroSlide2.jpg" />
                    </div>
                  <div class="item">
                      <img src="imgs/slide/gatoSlide.jpg" />
                    </div>
                  <div class="item">
                      <img src="imgs/slide/cavaloSlid.jpg" />
                    </div>
                  
                </div>
              </div>
            <h1 class="titulo">
                Sobre Nós
            </h1>
            <p>
                Somos uma empresa ,que amamos cuidar dos animais ,os tratamos com muito amor e carinho ,já são 10 anos cuidado dos nossos amigos pets,venham conhecer nossos serviços.
            </p>
        </section>
        <section id="produtos">
            <h1 class="titulo">
                Conheça nosso produtos
            </h1>
            <div class="colecao">
          <div class="produto-itens">
            <img src="imgs/prod/1.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Pedigree Adulto </h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/2.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Pedigree Filhote</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/3.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Pedigree Biscrok</h3> 
              <h3 class="desc">R$ 00,00</h3> 
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/4.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Golden Formula/h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/5.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Golden Special</h3> 
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/6.jpg" alt="" />
            <div class="descricao">
            <h3 class="desc">Premier Golden</h3>
              <h3 class="desc">R$ 00,00</h3>  
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/7.jpg" alt="" />
            <div class="descricao">
            <h3 class="desc">Coleira</h3>
              <h3 class="desc">R$ 00,00</h3>  
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/8.jpg" alt="" />
            <div class="descricao">
            <h3 class="desc">Shampoo para Cães</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/9.jpg" alt="" />
            <div class="descricao">
            <h3 class="desc">Shampoo para Gatos</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/10.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Comedouro Para Gatos</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/11.jpg" alt="" />
            <div class="descricao">
            <h3 class="desc">Comedouro Para Cães</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="imgs/prod/12.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Bebedouro</h3>
              <h3 class="desc">R$ 00,00</h3>
            </div>
          </div>
            <div class="produto-itens">
              <img src="imgs/prod/13.jpg" alt="" />
              <div class="descricao">
              <h3 class="desc">Brinquedos para Cães</h3>
              <h3 class="desc">R$ 00,00</h3>
               
              </div>
            </div>
              <div class="produto-itens">
                <img src="imgs/prod/14.jpg" alt="" />
                <div class="descricao">
                <h3 class="desc">Brinquedos para Gatos</h3>
              <h3 class="desc">R$ 00,00</h3>
                 
                </div>
              </div>
                
          
        </div>
      </section>
        </section>
        <section id="servicos">
            <h1 class="titulo">
                Nossos serviços
            </h1>
        </section>
        <section id="pets">
            <h1 class="titulo">
                Mais pets 
            </h1>
        </section>
        <section id="contato">
            <h1 class="titulo">
                Nossos Contatos

            </h1>
            <div class="contato">
                <div class="formulario"></div>
            <form action="php/envia-email.php" method="post">
                <label for="nome">Nome:</label></br>
                <input type="text" name="nome" placeholder="Seu nome."></br>
                <label for="email">Email:</label></br>
                <input type="email" name="email" ></br>
                <label for="mensagem">Sua Mensagem:</label></br>
                <textarea name="mensagem" id="" cols="21" rows="6"></textarea></br>
                <input type="submit" value="Enviar" class="enviar">

                
            </form>
            </div>
            </div>
            <div class="rede-social">
                <div class="redes">
                    <div class="social">
                       <a href=""> <img src="imgs/icones/whatsapp.png" alt="" width="100px" height="100px"></a>
                    </div>
                    <div class="social">
                    <a href=""> <img src="imgs/icones/instagram.png" alt="" width="100px" height="100px"></a>
                    </div>
                    <div class="social">
                    <a href=""><img src="imgs/icones/facebook.png" alt="" width="100px" height="100px"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
</body>
</html>