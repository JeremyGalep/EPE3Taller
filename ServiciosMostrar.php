<?php
require ("conexion.php");
$status = "";
$con=conectar();
$query="select * from servicios";
$cierto=mysql_query($query,$con);

if(!$cierto){
    echo "No se ha mostrado el dato";
}
else {
    echo "<!DOCTYPE html>
          <html>
          <head>
            <title>Mostrar datos</title>
            <link href='login.css' rel='stylesheet' type='text/css'>    
              </head>
              
        <body>";

    echo "	<header style=' background:royalblue'>
    <div class='container'>
  <div class='row'>
      <div class='col-sm-2' style='text-align: center'>
    <br>
          <i class='fas fa-phone' style='font-size:35px;color:white'><h5 style='color: white'> 
          3115988953 – 3112641818.
          </h5></i>            
      </div>
  <div class='col-sm-8' style='text-align: center'>
    <h1 style='font-family:'Impact'; color: white'><img src='https://i.dlpng.com/static/png/5345504-business-logo-png-images-vector-and-psd-files-free-download-on-png-logos-360_360_preview.png' style='width: 90px'>Turisteatelo</h1>
    <h3 style='color: white'>Encuentra el viaje que siempre has querido</h3>
  </div>

      <div class='col-sm-2' style='padding-left: 20px '>
          <h3 style='color: white'>Siguenos</h3>
          <div class='redes-footer' style='padding-left: 30px'>
            <a href='https://www.facebook.com/'><button style='font-size:24px; background: white'><i class='fab fa-facebook' style='color: royalblue'></i></button></a>
            <a href='https://twitter.com/'><button style='font-size:24px; background: white'> <i class='fab fa-twitter' style='color: #00B3FF'></i></button></a>
            <a href='https://www.youtube.com/'><button style='font-size:24px; background: white'><i class='fab fa-youtube' style='color: red'></i></button></a>
          </div>				
      </div>	       
       </div>		
<div> <!--Inicio seccion de botones-->		
  <div class='dropdown'>
    <a href='Foro.html' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Foro</h5></a>
    <a href='ServiciosMostrar.php' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Ver Servicios</h5></a>
    <a href='ServiciosIndex.html' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Nuevo servicio</h5></a>
    
    <button class='btn dropdown-toggle' type='button' data-toggle='dropdown' style='background: white'><h5 style='color: royalblue'>¿Quienes somos?</h5></button>
    <a href='ServiciosMostrarTabla.php' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Ver Servicios (Admin)</h5></a>
 
    <a href='Contacto.html' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Contactanos</h5></a>
    <a href='acceso.html' class='btn' style='background: white; padding-left: 20px; padding-right: 20px; height: 49px; text-align: center'><h5>Acceso</h5></a>

    <ul class='dropdown-menu'>
   
<li>

  <div class='row'>
    <div class='col-sm-5' style='background: royalblue'>
     
      <p><iframe style='padding-top: 10px' width='430' height='200' src='https://www.youtube.com/embed/8fR8NztLkMk' ></iframe > </p>
    </div>
   <div class='col-xs-1'>
         <h1></h1>
    <p></p>
  <br>
  <br>
  <br>		
  <a ></a>		 
    </div>
      <div class='col-sm-6' style='background: royalblue; height: 220px'>
      <h3 style='color: white' align='center'>¿Quienes somos?</h3> 
  <p><h4 style='color: white; ' >Somos una pagina encargada de dar visibilidad a las empresas de turismo <br><br> Fundada el dia 21-11-2020</h4></p>
  <br>		
  <a href='Galeria.html' class='btn' style='background: white; padding-left: 180px; padding-right: 270px'>Visitar galeria</a>	
  <br>
    </div>
  </div>	
</li>
</ul>
</div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>	
<br>
</div>
</header>";

        echo "<style>
        .card{
          margin-top:10px;
          margin-left:10px;
          
           }
          
             .card  {
              text-align:center; 
              margin-bottom: 5px;  
            }
                
             
           footer{
             margin-top:10px;
           }
         

        </style>";
        echo "    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>";
        echo "<link href='./assets/dist/css/bootstrap.min.css' rel='stylesheet'>";
        while ($row=mysql_fetch_array($cierto)){
        echo "<div class='card' style='width: 32rem;'>
        <img class='card-img-top' src='https://us.123rf.com/450wm/lumut/lumut1806/lumut180600483/103593378-.jpg?ver=6' alt='Card image cap'>
        <div  class='card-body'>
          <h5 class='card-title'>Titulo:".$row['titulo']."</h5>
          <p class='card-text'>Descripcion:".$row['descripcion']."</p>
          <p class='card-text'>Precio:".$row['precio']."</p>
          <p class='card-text'>Cupos:".$row['cupos']."</p>
          <p class='card-text'>Direccion:".$row['direccion']."</p>
          
          <a href='ServiciosPrecios.html' class='btn btn-primary'>Ver precios</a>
          <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.873949379825!2d-70.63673047765057!3d-33.452590410715395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDI3JzA3LjgiUyA3MMKwMzgnMTYuMyJX!5e0!3m2!1ses-419!2scl!4v1606535250888!5m2!1ses-419!2scl' width='300' height='225' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>
                 
          </div>
      </div>"
          ;
        }
        echo "</body></html>";

        echo "
        <footer>
          <div class='container' style='background:royalblue '>
            <div class='row'>
                <div class='col-sm-5'>
                    <h3 style='color: white'>CONTACTO:</h3>
                    <h4 style='color: white'> 
                    Av. Apoquindo 6282, Las Condes, Santiago
                <br>
                <br>
                    Teléfonos: 3115988953 – 3112641818.<br>
                    </h4>
                </div>
            <div class='col-sm-2'>
            </div>
        
                <div class='col-sm-5'>
                    <h3 style='color: white'>Nuestras Redes Sociales</h3>
                    <div class='redes-footer' style='padding-left: 300px'>
                      <a href='https://www.facebook.com/'><button style='font-size:24px; background: white'><i class='fab fa-facebook' style='color: royalblue'></i></button></a>
                      <a href='https://twitter.com/'><button style='font-size:24px; background: white'> <i class='fab fa-twitter' style='color: #00B3FF'></i></button></a>
                      <a href='https://www.youtube.com/'><button style='font-size:24px; background: white'><i class='fab fa-youtube' style='color: red'></i></button></a>
                      </div>
              <br>
               <div>				 
                    <p style='color: white; text-align: right'>Jeremy Galep- Fernanda Muñoz - Héctor González .<br> Todos los derechos reservados.</p>
                </div>
                </div>	          
          
          
            </div>
            </div>
         </footer>";

    }


?>
