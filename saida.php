<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      TABUADA GERADA
    </title>
    <?php    
      foreach ($_POST as $chave => $valor)$$chave = $valor;    
    ?>
  </head>
  <body>
    <?php      
      for ($i = $numeroA; $i <= $numeroAB; $i++) {
        echo "<div class='tabuada'>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroB; $j <= $numeroBA; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " x " . $j . "</td>" .
               "  <td>" . ($i * $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>";
      }
      
    ?>
  </body>
</html>