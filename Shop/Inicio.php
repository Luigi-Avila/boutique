<?php
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="homestile.css" rel="stylesheet" type="text/css">

    <title>Home</title>
    
</head>

<body >
  <nav class="navbar navbar-expand-lg  navbar-scrollmax-height">
    <div class="container-fluid">
       <span class="navbar-brand mb-0 h1 fw-bold fs-3">Boutique Online</span>
      <div class="container-fluid  navbar-light" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item fs-6 ">
                <a class="nav-link active" aria-current="page" href="Inicio.php">Inicio</a>
              </li>
             <li class="nav-item fs-6">
              <a class="nav-link " href="shop.php">Tienda</a>
           </li> 

            <li class="nav-item fs-6">
              <a class="nav-link  disabled "href="" ><?php echo '<h4>'.$_SESSION['nombre'].'</h4>';?></a>
            </li>
            <li class="nav-item fs-6">
                                   </a>
                <a class="nav-link" href="../Login/cerrarsesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                    <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                  </svg></a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
    

    
      <br/><br/>
          
        <div class="container"> 
          <div class="jumbotron">
            <h1 class="display-6">Conocenos!</h1>
            <strong><h4>Misión:</h4></strong>
            <p class="lead">* Marcar la diferencia a través de nuestra Boutique y estar a la Vanaguardia en las tendencias de moda. </p>
            <p class="lead">* Garantizar que nuestros clientes tengan la mejor experiencia de compra. </p>
            <hr class="my-4">
            <strong><h4>Visión:</h4></strong>
            <p class="lead">* Ser una empresa líder en el mundo de la moda, que le proporcione a la mujer los elementos necesarios para resaltar su belleza. </p>
            <hr class="my-4">
          </div>
          
          <br/><br/>

    <div class="container">
        <div class="card-group">
                <div class="card">
                  <img src="../Login/IMG/2-600x800.jpg" class="card-img-top" width="200"
                  height="200">
                    <div class="card-body">
                      <h5 class="card-title">Vestido Baby Blue</h5>
                    
                        
                </div>

                </div>

                <div class="card">
                  <img src="../Login/IMG/1-600x800.jpg" class="card-img-top" width="200"
                  height="200">
                  <div class="card-body">
                      <h5 class="card-title">Blusa Flores </h5>
                       
                </div>
                
                  </div>

                <div class="card">
                    <img src="../Login/IMG/3-600x800.jpg" class="card-img-top" width="200"
                    height="200">
                    <div class="card-body">
                        <h5 class="card-title">Camisa Flores</h5>
      
                </div>
                    </div>
    
                  <div class="card">
                    <img src="../Login/IMG/4.jpg" class="card-img-top" width="200"
                    height="200">
                    <div class="card-body">
                        <h5 class="card-title">Top</h5>

                        
                </div>
                    </div>
                
                    <div class="card">
                    <img src="../Login/IMG/a1.jpg" class="card-img-top" width="200"
                    height="200">
                    <div class="card-body">
                        <h5 class="card-title">Playera Logo</h5>

                        
                </div>
                    </div>
        </div>   
    </div>
    <br/>
    <br/>
    <br/>
       
    <div class="container a">
      <hr class="my-4">
        <footer>
          <h4>Boutique Online</h4>
          <p>Autor: Johana M Ramírez</p>
          <p>Para mayor información: <a href="mailto:zs19016033@estudiantes.uv.mx">
          zs19016033@estudiantes.uv.mx</a>.</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>      <a href="mailto:BoutiqueOnline"> BoutiqueOnline </a>  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>       <a href="mailto:2281799640"> 2281799640  </a>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>       <a href="mailto:Boutique_Online"> Boutique_Online </a></p>
        </footer>
      <hr/>
    </div>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>