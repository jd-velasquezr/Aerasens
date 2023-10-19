
<?php
/*ENLAZA LA SESIÓN CON ESTE ARCHIVO.*/
error_reporting(0);
session_start();
/*EN CASO QUE LA SESIÓN NO ESTÉ ACTIVA, DEVOLVERÁ A LA PÁGINA DE INICIO DE SESIÓN.*/
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<html>
<head>

<meta charset="utf-8">
<meta http-equiv="refresh" content="375">
<title>
Graficas del GAS
</title>

<style>
/*DISEÑO DE FONDO Y AJUSTE DE CENTRADO Y ALTURA.*/
body {
  height: 1700px;
    background-image: url("https://www.teahub.io/photos/full/79-795180_fresh-flower-wallpaper-hd.jpg");
    background-size: cover;
    background-repeat:no-repeat;
    background-position: center center;
    font-family: Bahnschrift;
   }

</style>
<!--DISEÑO DEL BOTON DE CIERRE DE SESION.-->
<style type="text/css">
  .boton_1{
    text-decoration: none;
    padding: 3px;
    margin-right: 20;
    padding-left: 10px;
    padding-right: 20px;
    font-family: Bahnschrift;
    font-weight: 300;
    font-size: 25px;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 10px double #006505;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style>

<style type="text/css">
  .boton_2{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: Bahnschrift;
    font-weight: 300;
    font-size: 25px;
    color: ##f44336;
    background-color: #f44336;
    border-radius: 15px;
    border: 10px double #006505;
  }
  .boton_2:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style>


</head>


<body>
  <!--AJUSTE DE LA TABLA DE ENCABEZADO O DE TÍTULO.-->
  <table width="100%" align="center" border="10" cellspacing="0" cellpadding="0" background="https://image.freepik.com/free-vector/elegant-white-wallpaper-with-golden-details_23-2149095007.jpg">
  <tr>
  <td>
  <fieldset>
    <center>
      <!--SE ESCRIBE UN MENSAJE DE BIENVENIDA JUNTO CON EL NOMBRE DEL USUARIO INGRESADO.-->
    <?php echo "<h1>BIENVENIDO!</h1>"; ?>
  </center>
  <center><img src="http://aerasens.125mb.com/Images/LOGO.svg" width="1000" height="50"></center>
    <center> <b> <p style = "font-family:Bahnschrift;font-size:25px"> GRÁFICAS DE LA VARIACIÓN DE LA CONCENTRACIÓN DE GASES EN EL AMBIENTE <br>(Debe esperar 15 seg en cada click de botón de programación del atomizador).<br><b> </p></center>
  </fieldset>
  </td>
  </tr>
  </table>

  <!--AQUÍ SE INCLUYEN LAS GRÁFICAS DE LÍNEAS DE LA MEDICIÓN DE LOS SENSORES.-->
  <iframe width="488" height="260" style="border: 5px solid #C6E2FF;" src="https://thingspeak.com/channels/1486425/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Gas+Metano&type=line&xaxis=Hora+de+Medici%C3%B3n&yaxis=PPM+de+Concentraci%C3%B3n+del+Gas"></iframe>
  <iframe width="488" height="260" style="border: 5px solid #C6E2FF;" src="https://thingspeak.com/channels/1486425/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Gas+Natural&type=line&xaxis=Hora+de+Medici%C3%B3n&yaxis=PPM+de+Concentraci%C3%B3n+del+Gas"></iframe>
  <iframe width="488" height="260" style="border: 5px solid #C6E2FF;" src="https://thingspeak.com/channels/1486425/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Gas+de+Mon%C3%B3xido+de+Carbono&type=line&xaxis=Hora+de+Medici%C3%B3n&yaxis=PPM+de+Concentraci%C3%B3n+del+Gas"></iframe>

  <!--AQUÍ SE INCLUYEN LOS CUADROS DE LOS ULTIMOS DATOS REGISTRADOS DE LA MEDICIÓN DE LOS SENSORES.-->
  <iframe width="480" height="110" style="border: 9px solid #03083C;" src="https://thingspeak.com/channels/1486425/widgets/359441"></iframe>
  <iframe width="480" height="110" style="border: 9px solid #03083C;" src="https://thingspeak.com/channels/1486425/widgets/359443"></iframe>
  <iframe width="480" height="110" style="border: 9px solid #03083C;" src="https://thingspeak.com/channels/1486425/widgets/359457"></iframe>

  <!--AQUÍ SE INCLUYEN LOS MEDIDORES DE GAS DE PPM DE LOS DATOS DE LOS SENSORES.-->
  <iframe width="475" height="250" style="border: 11px solid #00CED1;" src="https://thingspeak.com/channels/1486425/widgets/359858"></iframe>
  <iframe width="475" height="250" style="border: 11px solid #00CED1;" src="https://thingspeak.com/channels/1486425/widgets/359859"></iframe>
  <iframe width="475" height="250" style="border: 11px solid #00CED1;" src="https://thingspeak.com/channels/1486425/widgets/359860"></iframe>

  <!--AQUÍ SE INCLUYEN LAS GRÁFICAS DE ANALÍTICA DE DATOS DE PPM DE LOS DATOS DE LOS SENSORES.-->
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/426931"></iframe>
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/432939"></iframe>
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/432940"></iframe>

  <!--AQUÍ SE INCLUYEN LAS GRÁFICAS DE ANALÍTICA DE DATOS DE PPM DE LOS DATOS DE LOS SENSORES.-->
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/434575"></iframe>
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/434579"></iframe>
  <iframe width="475" height="300" style="border: 11px solid #2A7C5C;" src="https://thingspeak.com/apps/matlab_visualizations/434580"></iframe>

  <!--SE INCLUYE EL BOTÓN DE CIERRE DE SESIÓN EN LA SECCIÓN INFERIOR DE LA PÁGINA Y EL DE ACTIVACION DE ATOMIZADOR.-->
  <center>
  <a href="logout.php" class="boton_1">CERRAR SESIÓN</a>
    <a class="boton_2" onclick=" window.open('https://api.thingspeak.com/update?api_key=NT5YPTNDCVGCY58S&field1=5','_blank')">ACTIVAR ATOMIZADOR 5 SEG</a>
    <a class="boton_2" onclick=" window.open('https://api.thingspeak.com/update?api_key=NT5YPTNDCVGCY58S&field1=10','_blank')">ACTIVAR ATOMIZADOR 10 SEG</a>
    <a class="boton_2" onclick=" window.open('https://api.thingspeak.com/update?api_key=NT5YPTNDCVGCY58S&field1=15','_blank')">ACTIVAR ATOMIZADOR 15 SEG</a>
</center>

</body>

</html>
