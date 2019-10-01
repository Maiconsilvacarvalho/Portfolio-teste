<?php
   
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "insert into cadastro1 (nome,email,mensagem) values ('$nome','$email','$mensagem')";
$salvar = mysqli_query($conexao, $sql); 


mysqli_close($conexao);


?>   

<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Portfolio Maicon Carvalho</title>
      <link rel="stylesheet" href="estilo.css">
      <script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript" src="jquery.elevatezoom.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>

<body>

   <header>
      <div>
       <nav>
         <div class="menu-icon">
               <i class="fa fa-bars fa-2x"></i>
         </div>

          <div class="logo">
               <a name="#Home">Maicon Carvalho</a>
          </div>
            <div class="menu">
                   <ul>
                       <li><a href="#Home">Inicio</a></li>
                       <li><a href="#Serviços">Serviços</a></li>
                       <li><a href="#Projetos">Projetos</a></li>
                       <li><a href="sobre.html">Sobre</a></li>
                       <li><a href="index.php" target="_blank">Contatos</a></li>
                    </ul>
            </div>
        </nav>
      </header>
      
                   <h2 class="developer">|DEVELOPER FRONT-END|</h2>
        

      <div class="testimonial-section">
          <div class="inner-width">
            <h1>Serviços</h1>
          <div class="testimonial-pics">
               <img src="https://media.giphy.com/media/6uUohHALXMEaA/source.gif" alt="test-1" class="active">
               <img src="https://media.giphy.com/media/fxKWgoOG9hzPPkE1oc/source.gif" alt="test-2">
               <img src="https://media.giphy.com/media/Vbk6gRbhARSuI/source.gif" alt="test-3">
               <img src="https://media.giphy.com/media/HUM3yAC4sN2Mw/giphy.gif" alt="test-4">
           </div>

           <div class="testimonial-contents">
            <div class="testimonial active" id="test-1">
                 <span class="description"><strong>Design Responsivo</strong></span>
                 <p>Design Responsivo é a otimização estrutural de um Web Site, fazendo com que ele se adapte a diferentes tipos de tela e diferentes dispositivos, ajudando na experiência do usuário com o seu website. Deseja saber mais sobre? <a href="">Clique aqui!</a> </p>
            </div>
            <div class="testimonial" id="test-2">
                  <span class="description"><strong>Criação Sites| Wordpress</strong></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elimet, consectetur adipisicing elit. Ab consequatur et adipisci ut, impedit cumque, similique, eum tenetur, numquam
                  eligendi aliquid. Nulla sit, cupiditate corporis labore, modi natus officiis asperiores!</p>
            </div>

            <div class="testimonial" id="test-3">
                  <span class="description"><strong> SEO|Manuntenção de Site|Atualização de loja virtual</strong></span>
                  <p>SEO ... .... ... .. .. .. </p>

            </div>

            <div class="testimonial" id="test-4">
                  <span class="description"><strong> SEO|</strong></span>
                        <p>Lorem ipsum dolorng elit. Ab consequatur et adipisci ut, impedit cumque, similique, eum
                        tenetur, numquam eligendi aliquid. Nulla sit, cupiditate corporis labore, modi natus officiis asperiores!</p>
            </div>
                  </div>
            </div>
      </div>

      <section class="project-container">
            <h1 class="projetos1">Projetos</h1>
            <div class="container">
                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="Site sobre Receitas saudáveis." class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>

                  <div class="item">
                        <img src="tela-receitas-naturais.png" alt="" class="imagen" />
                  </div>
            </div>

            <script type="text/javascript" src="main.js"></script>
      </section>


      <section class="footer">
            <h4>Maicon Carvalho - Desenvolvedor Front-End | MaiconCarvalho@outlook.com</h4>
      </section>

      <script type="text/javascript">
            // Menu-toggle button

            $(document).ready(function () {
                  $(".menu-icon").on("click", function () {
                        $("nav ul").toggleClass("showing");
                  });
            });
      </script>
            
<script type="text/javascript">
      $('.testimonial-pics img').click(function () {
            $(".testimonial-pics img").removeClass("active");
            $(this).addClass("active");

            $(".testimonial").removeClass("active");
            $("#" + $(this).attr("alt")).addClass("active");
      });
</script>



<script>
            //function typeWriter(elemento) {
             // const textoArray = elemento.innerHTML.split('');
             // elemento.innerHTML = '';
             // textoArray.forEach((letra, i) => {
              //  setTimeout(() => elemento.innerHTML += letra, 75 * i);
              //});
           // }
          
            // Se estiver tendo problemas com performance, utilize o FOR loop como abaixo no local do forEach
            function typeWriter(elemento) {
               const textoArray = elemento.innerHTML.split('');
               elemento.innerHTML = '';
              for(let i = 0; i < textoArray.length; i++) {
                    
                 setTimeout(() => elemento.innerHTML += textoArray[i], 75 * i);
              }
             }
          
            const titulo = document.querySelector('h2');
            typeWriter(titulo);
          </script>
</body>

</html>
