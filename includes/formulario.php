  <!-- ID'S 
      -------------------------------------------------------------------
      atributos

      at0 = for, at1 = des, at2 = con, at3 = int, at4 = sab, at5 = car.
      atributo base = at0, at1, at2, at3, at4, at5.
      mod de atr = ma0, ma1, ma2, ma3, ma4, ma5.
      atri temporario = ta0,ta1,ta2,ta3, ta4, ta5.
      mod temporario = mt1, mt2, mt3, mt4, mt5.

      -------------------------------------------------------------------
      PVs
      
      pv max = pM
      pv dado = pV
      pv con = pC
      pv temp = pT
      pv atual = pA
      pv contu = pP (pancada)

      -------------------------------------------------------------------
      Classe de armadura

      def total = dTot
      def base = dB
      def armor =  dA
      def shield =  dS 
      def Des = dD
      def tamanho = dT
      def natural = dN
      def deflex = dF
      def outros = dO

      def toque =cT
      def surpr = cS

      -------------------------------------------------------------------
      iniciativa

      ini total = iT
      ini des = iD
      ini outros = iO

      -------------------------------------------------------------------
      resistencias

      res total = rT
      res base = rB
      res atrib = rA
      res magic = rM
      res outro = rO
      res temp = rT
      -------------------------------------------------------------------
      bba e agarrar 

      bba = bA

      agarrar total = aG
      agarras bba = aB
      Mod força = aA
      mod tamanho = aT
      agarrar outros = aO

      -------------------------------------------------------------------
      weapon

      arma = we0, we1, we2, we4.
      atk arma = wA0, wA1, wA2, wA4.
      dano arma = wD0, wD1, wD2, wD4.
      critico = wC0, wC1, wC2, wC4.
      alcance = alc0, alc1, alc2, alc4.
      arma tipo = wT0, wT1, wT2, wT4.
      arma obs = wO0, wO1, wO2, wO4.
      arma fisico = wF.
      arma longo alcance = wL.

      -------------------------------------------------------------------
      Pericias

      mod pericia total = pM0, pM1....pM42
      mod atributo = pH0, pH1....pH42
      graduação pericia = pG0, pG1....pG42
      pericia outros = pO0, pO1....pO42

      0 ABRIR FECHADURAS, 1 ACROBACIA, 2 ADESTRAR ANIMAIS, 3 ARTE DA FUGA, 4 ATUAÇÃO, 5 ATUAÇÃO,
      6 ATUAÇÃO, 7 AVALIAÇÃO, 8 BLEFAR, 9 CAVALGAR, 10 CONCENTRAÇÃO, 11 CONHECIMENTO, 12 CONHECIMENTO,
      13 CONHECIMENTO, 14 CONHECIMENTO, 15 CURA, 16 DECIFRAR ESCRITA, 17 DIPLOMACIA, 18 DISFARCE,
      19 EQULIBRIO, 20 ESCALAR, 21 ESCONDER-SE, 22 FALSIFICAÇÃO, 23 FURTIVIDADE, 24 IDENTIFICAR MAGIA,
      25 INTIMIDAR, 26 NATAÇÃO, 27 OBSERVAR, 28 OBTER INFORMAÇÃO, 29 OFÍCIOS, 30 OFÍCIOS, 31 OFÍCIOS,
      32 OPERAR MECANISMOS, 33 OUVIR, 34PROCURAR, 35 PROFISSÃO, 36 PROFISSÃO, 37 PRESTIDIGITAÇÃO,
      38 SALTAR, 39 SENTIR MOTIVAÇÃO, 40 SOBREVIVÊNCIA, 41 USAR CORDAS, 42 USAR INSTRUMENTO MÁGICO.

      -----------------------------------------------------------------
  -->
<form action="" method="post">
  <!--dados do personagem-->
  <fieldset>
    <legend>DnD 3.5</legend>
    <table id="personalidade">
      <tr>
        <td>
          <input type="text" id="charName">
        </td>
        <td>
          <label for="charName">NOME DO PERSONAGEM</label>
        </td>
        <td>
          <input type="text" id="player">
        </td>
        <td>
          <label for="player">NOME DO JOGADOR</label>
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" id="classe">
        </td>
        <td>
          <input type="text" id="nivel">
        </td>
        <td>
          <input type="text" id="raca">
        </td>
        <td>
          <select id="tendencia">
            <option value="lb">LEAL E BOM</option>
            <option value="cb">CAÓTICO E BOM</option>
            <option value="nb">NEUTRO E BOM</option>
            <option value="ln">LEAL E NEUTRO</option>
            <option value="cn">CAÓTICO E NEUTRO</option>
            <option value="nm">NEUTRO E MAL</option>
            <option value="lm">LEAL E MAL</option>
            <option value="cm">CAÓTICO E MAL</option>
            <option value="nn" selected>NEUTRO</option>
          </select>
        </td>
        <td><input type="text" id="divindade"></td>
      </tr>

      <tr>
        <td><label for="classe">CLASSE</label></td>
        <td><label for="nivel">NIVEL</label></td>
        <td><label for="raca">RACA</label></td>
        <td><label for="tendencia">TENDENCIA</label></td>
        <td><label for="">DIVINDADE</label></td>
      </tr>

      <tr>
        <td>
          <select id="tamanho">
            <option value="min">MÍNIMO</option>
            <option value="dim">DIMINUTO</option>
            <option value="miu">MIÚDO</option>
            <option value="peq">PEQUENO</option>
            <option value="med" selected>MÉDIO</option>
            <option value="gra">GRANDE</option>
            <option value="eno">ENORME</option>
            <option value="ime">IMENSO</option>
            <option value="col">COLOSSAL</option>
          </select>

        </td>
        <td>
          <input type="text" id="idade">
        </td>
        <td>
          <input type="text" id="sexo">
        </td>
        <td>
          <input type="text" id="altura">
        </td>
        <td>
          <input type="text" id="peso">
        </td>
        <td>
          <input type="text" id="olhos">
        </td>
        <td>
          <input type="text" id="cabelo">
        </td>
        <td>
          <input type="text" id="pele">
        </td>
      </tr>
      <tr>
        <td><label for="tamanho">TAMANHO</label></td>
        <td><label for="idade">IDADE</label></td>
        <td><label for="sexo">SEXO</label></td>
        <td><label for="altura">ALTURA</label></td>
        <td><label for="peso">PESO</label></td>
        <td><label for="olhos">OLHOS</label></td>
        <td><label for="cabelo">CABELO</label></td>
        <td><label for="pele">PELE</label></td>
      </tr>
    </table>
  </fieldset>

  <!--valor de atributos-->
  <fieldset>
    <legend>atributos</legend>
    <table id="habilidade">
      <tr id="topics">
        <td>HABILIDADE</td>
        <td>VALOR</td>
        <td>MOD. DE<br>HABILIDADE</td>
        <td>VALOR<br>TEMPORARIO</td>
        <td>MOD.<br>TEMPORARIO</td>
      </tr>

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
        <td></td>
        <td>TOTAL</td>
        <td>PV</td>
        <td>MOD.<br>CON</td>
        <td>PV<br>TEMP</td>
        <td>FERIMENTOS/PV<br> ATUAIS</td>
        <td>DANO POR<br> CONTUSÃO</td>
        <td>DESLOCAMENTO</td>
      </tr>

      <tr>
        <td><strong>PV:</strong><br> PONTOS DE VIDA</td>
        <td><input type="number" readonly id="pM"></td>
        <td><input type="number" id="pV" onchange="calcula_totais('pC','')"></td>
        <td><input type="number" name="CON" readonly id="pC" onchange="calcula_totais('pC','')"></td>
        <td><input type="number" id="pT" onchange="calcula_totais('pC','')"></td>
        <td><input type="number" id="pA"></td>
        <td><input type="number" id="pP"></td>
        <td><input type="text" id="deslocamento"></td>
      </tr>
      <!--<td><input type='number' name='$atrib_nome[$i]' id='rA$i' onchange=calcula_totais('rA',$i)></td> --><!--mod atrib-->
 
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
        } elseif ($i == '3') {
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
      <tr>
        <td></td>
        <td>total</td>
        <td>MOD. DE DESTREZA</td>
        <td>OUTROS</td>
      </tr>
    </table>
  </fieldset>

  <!--RESISTENCIAS-->
  <fieldset>
    <table id="resist">
      <tr>
        <td>TESTE DE<br> RESISTÊNCIA</td>
        <td>TOTAL</td>
        <td>BONUS <br>BASE</td>
        <td>MOD. <br>HABILIDADE</td>
        <td>MOD. <br>MÁGICO</td>
        <td>OUTROS</td>
        <td>MOD. <br>TEMPORÁRIO</td>
        <td><textarea id="CONDICIO" name="CONDICIO" rows="3" cols="30">MOD. CONDICIONAIS</textarea></td>
      </tr>

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


  <!--BBA RM E AGARRAR-->
  <fieldset>
    <table>
      <tr>
        <td>BÔNUS BASE DE ATAQUE</td>
        <td><input type="number" id="bA" onchange="calcula('bA','')"></td>
        <td>RESISTÊNCIA À MAGIA</td>
        <td><input type="number"></td>
      </tr>
      <tr>
        <td>AGARRAR</td>
        <td><input type="number" id="aG" onchange="calcula_totais('aA','')"></td>
        <td><input type="number" id="aB" onchange="calcula_totais('aA','')"></td>
        <td><input type="number" name='FOR' id="aA" onchange="calcula_totais('aA','')"></td>
        <td><input type="number" id="aT" onchange="calcula_totais('aA','')"></td>
        <td><input type="number" id="aO" onchange="calcula_totais('aA','')"></td>
      </tr>
      <tr>
        <td></td>
        <td>TOTAL</td>
        <td>BONUS BASE</td>
        <td>MOD. FORÇA</td>
        <td>MOD. TAMANHO</td>
        <td>OUTROS</td>
      </tr>
    </table>
  </fieldset>

  <!--armas-->
  <?php
  for ($i = 0; $i <= 3; $i++) {
    echo "         
         <fieldset>
      <table>
        <tr>
          <td>ATAQUE</td>
          <td>BÔNUS DE ATAQUE</td>
          <td>DANO</td>
          <td>SUCESSO DECISIVO</td>
        </tr>
        <tr>
        
          <td><input type='text' id='we$i'></td>
          <td><input type='text' id='wA$i'></td>
          <td><input type='text' id='wD$i'></td>
          <td><input type='text' id='wC$i'></td>
        </tr>
        <tr>
          <td>ALCANCE</td>
          <td>TIPO</td>
          <td>OBSERVAÇÕES</td>
        </tr>
        <tr>
          <td><input type='text' id='alc$i'></td>
          <td><input type='text' id='wT$i'></td>
          <td><input type='text' id='wO$i'></td>
          
        <label>FISICO</label> 
        <input type='radio' id='wF$i' name='wB' value='for'>
        <label>DISTANCIA</label>
        <input type='radio' id='wL$i' name='wB' value='des'>

        </tr>
        <tr>
          <td>MUNIÇÔES</td>";
    for ($m = 0; $m <= 3; $m++) {
      echo "
          <td>
            <input type='checkbox'>
            <input type='checkbox'>
            <input type='checkbox'>
            <input type='checkbox'>
            <input type='checkbox'>
          </td>";
    }
    echo "        
          </tr>
          </table>  
        </fieldset>";
  }
  ?>

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
        "SENTIR MOTIVAÇÃO", "SOBREVIVÊNCIA", "USAR CORDAS", "USAR INSTRUMENTO MÁGICO"
      );
      $habPeri = array(
        "DES", "DES", "CAR", "DES", "CAR", "CAR", "CAR", "INT", "CAR", "DES",
        "CON", "INT", "INT", "INT", "INT", "SAB", "INT", "CAR", "CAR", "DES", "FOR", "DES", "INT",
        "DES", "INT", "CAR", "FOR", "SAB", "CAR", "INT", "INT", "INT", "INT", "SAB", "INT", "SAB",
        "SAB", "DES", "FOR", "SAB", "SAB", "DES", "CAR"
      );
      $hesht = array(
        "", "*", "", "*", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "*", "*", "*", "",
        "*", "", "", "*", "", "", "", "", "", "", "", "", "", "", "*", "*", "", "", "", ""
      );


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