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

    <!--PV, deslocamento e CA-->
    <fieldset>
    <legend>sobrevivencias</legend>
    <table id="sobrevi">
      <tr>
        <td><strong>PV:</strong><br> PONTOS DE VIDA</td>
        <td><input type="number" id="pvtotal"></td>
        <td><input type="number" id="pvatual"></td>
        <td><input type="number" id="pvcontusao"></td>
        <td><input type="text" id="deslocamento"></td>
      </tr>

      <?php
      //dTot=def total, dB=base, dA=armor, dS=shield, dD=Des, dT=tamanho, dN= natural, dF= deflex, dO= outros.
      $CAarray = array("dB", "dA", "dS", "dD", "dT", "dN", "dF", "dO");

      echo "<tr>
          <td><strong>CA:</strong><br> CLASSE DE ARMADURA</td>
          <td><input type='number' readonly id='dTot'></td>";
      for ($i = 0; $i <= 7; $i++) {
        if ($i == '0') {
          echo "
          <td><input type='number' value='10' readonly id='$CAarray[$i]'></td>";
        }elseif ($i == '3') {
          echo "
          <td><input type='number' name='DES' id='$CAarray[$i]' onchange=calcula_totais('dD',$i)></td>";
        } else {
          echo "
          <td><input type='number' id='$CAarray[$i]' onchange=calcula_totais('dD',$i)></td>";
        }
      };
      echo "
          <td><input type='text' id='RD'></td>
        </tr>
          ";
      ?>

      <tr>
        <td></td>
        <td>TOTAL</td>
        <td></td>
        <td>BONUS DE<br> ARMADURA</td>
        <td>BONUS DE<br> ESCUDO</td>
        <td>MOD. DE<br> DESTREZA</td>
        <td>MOD. <br>TAMANHO</td>
        <td>ARMADURA <br>NATURAL</td>
        <td>MOD. DE<br> DEFLEXÃO</td>
        <td>OUTROS</td>
        <td>REDUÇÃO <br>DE DANO</td>
      </tr>
      <tr>
        <td><strong>TOQUE:</strong><br> CLASSE DE ARMADURA</td>
        <td><input type="number" id="cT"></td>
        <td><strong>SURPRESA:</strong><br> CLASSE DE ARMADURA</td>
        <td><input type="number" id="cS"></td>
      </tr>
      <tr>
        <td><strong>INICIATIVA:</strong><br> MODIFICADOR</td>
        <td><input type="number" id="iT"></td>
        <td><input type="number" name="DES" id="iD" onchange=calcula_totais('iD','0')></td>
        <td><input type="number" id="iO" onchange=calcula_totais('iO','0')></td>
      </tr>
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
          <td><input type='number' readonly id='rT$i'></td> <!--total-->
          <td><input type='number' id='rB$i' onchange=calcula_totais('rA',$i)></td> <!--resistencia base-->
          <td><input type='number' name='$atrib_nome[$i]' id='rA$i' onchange=calcula_totais('rA',$i)></td> <!--mod atrib-->
          <td><input type='number' id='rM$i' onchange=calcula_totais('rA',$i)></td> <!--mod magic-->
          <td><input type='number' id='rO$i' onchange=calcula_totais('rA',$i)></td> <!--outros bonus-->
          <td><input type='number' id='rt$i' onchange=calcula_totais('rA',$i)></td> <!-- mod temp-->
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
          <td><input type='number' readonly id='pM$i'></td>
          <td><input type='number' name='$habPeri[$i]' id='pH$i' onchange=calcula_totais('pH',$i)></td>
          <td><input type='number' id='pG$i' onchange=calcula_totais('pH',$i)></td>
          <td><input type='number' id='pO$i' onchange=calcula_totais('pH',$i)></td>        
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