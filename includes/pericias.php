
        <?php  
          $pericias = array("ABRIR FECHADURAS", "ACROBACIA", "ADESTRAR ANIMAIS", "ARTE DA FUGA",
          "ATUAÇÃO","ATUAÇÃO", "ATUAÇÃO", "AVALIAÇÃO", "BLEFAR","CAVALGAR(____)", "CONCENTRAÇÃO",
           "CONHECIMENTO (___)", "CONHECIMENTO (___)","CONHECIMENTO (___)", "CONHECIMENTO (___)",
            "CURA", "DECIFRAR ESCRITA","DIPLOMACIA", "DISFARCE", "EQULIBRIO", "ESCALAR","ESCONDER-SE",
             "FALSIFICAÇÃO", "FURTIVIDADE", "IDENTIFICAR MAGIA","INTIMIDAR", "NATAÇÃO", "OBSERVAR",
              "OBTER INFORMAÇÃO","OFÍCIOS (____)", "OFÍCIOS (____)", "OFÍCIOS (____)","OPERAR MECANISMOS",
              "OUVIR", "PROCURAR", "PROFISSÃO (___)", "PROFISSÃO (___)", "PRESTIDIGITAÇÃO","SALTAR",
               "SENTIR MOTIVAÇÃO", "SOBREVIVÊNCIA", "USAR CORDAS","USAR INSTRUMENTO MÁGICO"); 
          $habPeri = array("DES", "DES*", "CAR", "DES*","CAR","CAR", "CAR", "INT", "CAR","DES",
           "CON", "INT", "INT", "INT", "INT", "SAB", "INT","CAR", "CAR", "DES*", "FOR*","DES*", "INT",
            "DES*", "INT","CAR", "FOR*", "SAB", "CAR","INT", "INT", "INT", "INT","SAB", "INT", "SAB",
             "SAB","DES*", "FOR*", "SAB", "SAB","DES","CAR"); 

        for ($i = 0; $i <= 42; $i++) {
          echo "<tr>
          <td><input type='checkbox'></td>
          <td>$pericias[$i]</td> 
          <td>$habPeri[$i]</td> 
          <td><input type='number'></td>
          <td><input type='number'></td>
          <td><input type='number'></td>
          <td><input type='number'></td>
          <br>
          
         </tr> ";
        }
        ?>

          
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
        <tr>
          <td><input type="checkbox"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>