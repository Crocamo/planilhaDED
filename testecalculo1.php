<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"/>
    
    <title>Planilha 3.5 D&D</title>
    <script>
        function calcula(valor){


          /*  var val = document.getElementById(valor).value;
            if (val <=0){
                var total = "-5";
            }else if(val<=9){
                var total = parseInt((val-10)/2-0.5);
            }else{
                var total = parseInt((val-10)/2);
            }
            if(valor=="valT"){
                document.getElementById('modT').value = total;
            }else{
                document.getElementById('mod').value = total; 
            }*/
        }
    </script>
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
          <td><input type='number' id='atrib$i' value='10' onChange=calcula(atrib$i)></td>
          <td><input type='number' id='modatrib$i' value='0'></td> 
          <td><input type='number' id='tatrib$i' onChange=calcula(valor)></td> 
          <td><input type='number' id='modtatrib$i'></td> 
         </tr> ";
      }
      ?>
    </table>
  </fieldset>

  <!--PV, deslocamento e CA-->
  <fieldset>
    <legend>sobrevivencias</legend>
    <table id="sobrevi">
       <?php
      $CAarray = array("caBase", "caArmor", "caShield", "caDes", "caTam", "caNat", "caDefle", "caOutros");

      echo "<tr>
          <td><strong>CA:</strong><br> CLASSE DE ARMADURA</td>
          <td><input type='number' id='totalCA'></td>";
      for ($i = 0; $i <= 7; $i++) {
        if ($i == '0') {
          echo "
          <td><input type='number' value='10' readonly id='$CAarray[$i]'></td>";
        }elseif ($i == '3') {
          echo "
          <td><input type='number' name='DES' id='$CAarray[$i]' onChange=calcula_ca()></td>";
        } else {
          echo "
          <td><input type='number' id='$CAarray[$i]' onChange=calcula_ca()></td>";
        }
      };
      echo "
        </tr>
          ";
      ?>
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
          <td><input type='number' id='resTotal$i'></td>
          <td><input type='number' id='resBase$i'></td> 
          <td><input type='number' name='$atrib_nome[$i]' id='resModHabi$i'></td> 
          <td><input type='number' id='resModMag$i'></td> 
          <td><input type='number' id='resOutros$i'></td> 
          <td><input type='number' id='resModMag$i'></td> 
        </tr> ";
      }
      ?>
    </table>
  </fieldset>
  <!--Pericias-->
  <fieldset>
  <legend>pericias</legend>
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
          <td><input type='number'id='modPericia$i'></td>
          <td><input type='number' name='$habPeri[$i]' id='modHab$i' onchange=calcula_pericia($i)></td>
          <td><input type='number' id='graduaPericia$i' onchange=calcula_pericia($i)></td>
          <td><input type='number' id='periciaOutros$i' onchange=calcula_pericia($i)></td>        
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
</body>
</html>