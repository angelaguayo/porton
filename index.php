<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
      function funcion(){
        alert('<?php echo accion(); ?>');
        
        /* Escribir en el Documento*/
        document.write('<?php echo accion(); ?>');
        
      }
    </script>
</head>
<body>
    <button class="button" id="boton1" onclick = "funcion();" style="vertical-align:middle"><span>Hover </span></button>


    <?php
      funcion action{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://maker.ifttt.com/trigger/porton-action/with/key/h8dEcQkIMhCjclCEfqJsOfa-g9UAAj1Bt9HGN2F2sUW'); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $data = curl_exec($ch); 
        curl_close($ch); 
        echo $data; 
      }
    ?>

    <!--curl -X POST https://maker.ifttt.com/trigger/porton-action/with/key/h8dEcQkIMhCjclCEfqJsOfa-g9UAAj1Bt9HGN2F2sUW-->
</body>
</html>