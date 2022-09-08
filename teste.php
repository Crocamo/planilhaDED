<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css" />

    <title>Planilha 3.5 D&D</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="teste">
  <!--valor de atributos-->
  <fieldset>
    <legend>atributos</legend>
    <table id="habilidade">
        <?php
      $atrib = array("FOR: FORÇA", "DES: DESTREZA", "CON: CONSTITUIÇÃO", "INT: INTELIGENCIA", "SAB: SABEDORIA", "CAR: CARISMA");

      for ($i = 0; $i <= 5; $i++) {
        echo "<tr>
          <td>$atrib[$i]</td> 
          <td><input type='number' id='at$i' value='10' onchange=calcula('at',$i)></td>
          <td><input type='number' id='ma$i' value='0' onchange=calcula('ma',$i)></td> 
          <td><input type='number' id='ta$i' onchange=calcula('ta',$i)></td> 
          <td><input type='number' id='mt$i' onchange=calcula('mt',$i)></td> 
         </tr> ";
      }
      ?>
    </table>
  </fieldset>

  
  <!--RESISTENCIAS-->
  <fieldset>
    <table id="resist">
      <?php
      $resists = array("FORTITUDE (CONSTITUIÇÃO)", "REFLEXOS (DESTREZA)", "VONTADE (SABEDORIA)");
      $atrib_nome = array('CON', 'DES', 'SAB');
      for ($i = 0; $i <= 2; $i++) {
        echo
        "<tr>
          <td>$resists[$i]</td> 
          <td><input type='number' id='rT$i'></td> <!--total-->
          <td><input type='number' id='rB$i'></td> <!--resistencia base-->
          <td><input type='number' name='$atrib_nome[$i]' id='rA$i'></td> <!--mod atrib-->
          <td><input type='number' id='rM$i'></td> <!--mod magic-->
          <td><input type='number' id='rO$i'></td> <!--outros bonus-->
          <td><input type='number' id='rt$i'></td> <!-- mod temp-->
        </tr> ";
      }
      ?>
    </table>
  </fieldset>

   <!--Pericias-->
   <fieldset>
    <table id="periciasTab">
      <tr>
        <td>PERÍCIAS</td>
        <td>GRADUAÇÃO MÁXIMA (CLASSE/OUTRA CLASSE)</td>
        <td>_/_</td>
      </tr>
      <tr>
        <td></td>
        <td>NOME DA PERÍCIA</td>
        <td>HABILIDADE<br> CHAVE</td>
        <td>MOD. DE<br> PERÍCIA</td>
        <td>MOD. DE<br> HABILIDADE</td>
        <td>GRADUAÇÃO</td>
        <td>OUTROS</td>
      </tr>
      <?php
      $pericias = array(
        "ABRIR FECHADURAS", "ACROBACIA", "ADESTRAR ANIMAIS", "ARTE DA FUGA",
        "ATUAÇÃO", "ATUAÇÃO", "ATUAÇÃO", "AVALIAÇÃO", "BLEFAR", "CAVALGAR(____)", "CONCENTRAÇÃO",
        "CONHECIMENTO (___)", "CONHECIMENTO (___)", "CONHECIMENTO (___)", "CONHECIMENTO (___)",
        "CURA", "DECIFRAR ESCRITA", "DIPLOMACIA", "DISFARCE", "EQULIBRIO", "ESCALAR", "ESCONDER-SE",
        "FALSIFICAÇÃO", "FURTIVIDADE", "IDENTIFICAR MAGIA", "INTIMIDAR", "NATAÇÃO", "OBSERVAR",
        "OBTER INFORMAÇÃO", "OFÍCIOS (____)", "OFÍCIOS (____)", "OFÍCIOS (____)", "OPERAR MECANISMOS",
        "OUVIR", "PROCURAR", "PROFISSÃO (___)", "PROFISSÃO (___)", "PRESTIDIGITAÇÃO", "SALTAR",
        "SENTIR MOTIVAÇÃO", "SOBREVIVÊNCIA", "USAR CORDAS", "USAR INSTRUMENTO MÁGICO");
      $habPeri = array(
        "DES", "DES", "CAR", "DES", "CAR", "CAR", "CAR", "INT", "CAR", "DES",
        "CON", "INT", "INT", "INT", "INT", "SAB", "INT", "CAR", "CAR", "DES", "FOR", "DES", "INT",
        "DES", "INT", "CAR", "FOR", "SAB", "CAR", "INT", "INT", "INT", "INT", "SAB", "INT", "SAB",
        "SAB", "DES", "FOR", "SAB", "SAB", "DES", "CAR");
      $hesht = array(
        "", "*", "", "*", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "*", "*", "*", "",
        "*", "", "", "*", "", "", "", "", "", "", "", "", "", "", "*", "*", "", "", "", "");


      for ($i = 0; $i <= 42; $i++) {
        echo "<tr>
          <td><input type='checkbox'></td>
          <td>$pericias[$i]</td> 
          <td>$habPeri[$i]$hesht[$i]</td> 
          <td><input type='number'id='mP$i'></td>
          <td><input type='number' name='$habPeri[$i]' id='mH$i' onchange=calcula_pericia($i)></td>
          <td><input type='number' id='gP$i' onchange=calcula_pericia($i)></td>
          <td><input type='number' id='pO$i' onchange=calcula_pericia($i)></td>        
         </tr> ";
      }
      ?>

      <tr>
        <td><input type="checkbox"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
      </tr>
    </table>
  </fieldset>
    </form>
    <script src="js/jsteste.js"></script>
</body>

</html>