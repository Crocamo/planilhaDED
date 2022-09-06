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
         <td><input type="text" id="pele"></td>
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
         <td>MOD. DE HABILIDADE</td> 
         <td>VALOR TEMPORARIO</td> 
         <td>MOD. TEMPORARIO</td> 
        </tr>

        <tr>
         <td>FOR: FORÇA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr> 
        
        <tr>
         <td>DES: DESTREZA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr>   
        
        <tr>
         <td>CON: CONSTITUIÇÃO</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr> 
        
       <tr>
         <td>INT: INTELIGENCIA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr>
        
      <tr>
         <td>SAB: SABEDORIA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr> 
        
        <tr>
         <td>CAR: CARISMA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
        </tr>
      </table>
    </fieldset>
        <!--PV, deslocamento e CA-->
    <fieldset>
      <legend>sobrevivencias</legend>
      <table>
        <tr>
         <td></td> 
         <td>TOTAL</td>
         <td>FERIMENTOS/PV ATUAIS</td> 
         <td>DANO POR CONTUSÃO</td> 
         <td>DESLOCAMENTO</td>
        </tr>
        
        <tr>
         <td>PV: PONTOS DE VIDA</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td>
         <td><input type="text"></td>
        </tr> 
          
         <tr>
         <td>CA: CLASSE DE ARMADURA</td> 
         <td><input type="number"></td>
         <td><input type="number" value="10"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td>
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td>
         <td><input type="number"></td>
         <td><input type="number"></td>
         <td><input type="text"></td>
        </tr> 
        <tr>
          <td></td>
          <td>TOTAL</td>
          <td></td>
          <td>BONUS DE ARMADURA</td>
          <td>BONUS DE ESCUDO</td>
          <td>MOD. DE DESTREZA</td> 
          <td>MOD. TAMANHO</td>
          <td>ARMADURA NATURAL</td>
          <td>MOD. DE DEFLEXÃO</td>
          <td>OUTROS</td>
          <td>REDUÇÃO DE DANO</td>
        </tr>
        <tr>
          <td>TOQUE: CLASSE DE ARMADURA</td>
          <td><input type="number"></td> 
          <td>SURPRESA: CLASSE DE ARMADURA</td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td>INICIATIVA: MODIFICADOR</td>
          <td><input type="number"></td> 
          <td><input type="number"></td>
          <td><input type="number"></td>
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
      <table>
        <tr>
         <td>TESTE DE RESISTÊNCIA</td> 
         <td>TOTAL</td>
         <td>BONUS BASE</td> 
         <td>MOD. HABILIDADE</td> 
         <td>MOD. MÁGICO</td> 
         <td>OUTROS</td>
         <td>MOD. TEMPORÁRIO</td>
         <td><input type="text" value="MOD. CONDICIONAIS"></td>
        </tr>

        <tr>
         <td>FORTITUDE (CONSTITUIÇÃO)</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td>
        </tr> 
        
        <tr>
         <td>REFLEXOS (DESTREZA)</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td>
        </tr>   
        
        <tr>
         <td>VONTADE (SABEDORIA)</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td>
        </tr> 
      </table>
    </fieldset>
    <!--BBA RM E AGARRAR-->
    <fieldset>
      <table>
       <tr>
          <td>BÔNUS BASE DE ATAQUE</td>
          <td><input type="number"></td> 
          <td>RESISTÊNCIA À MAGIA</td>
          <td><input type="number"></td>
        </tr>
        <tr>
         <td>AGARRAR</td> 
         <td><input type="number"></td>
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
         <td><input type="number"></td> 
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
    <fieldset>
      <table>
        <tr>
          <td>ATAQUE</td>
          <td>BÔNUS DE ATAQUE</td>
          <td>DANO</td>
          <td>SUCESSO DECISIVO</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>ALCANCE</td>
          <td>TIPO</td>
          <td>OBSERVAÇÕES</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>MUNIÇÔES</td></tr>
      </table>  
    </fieldset>
    <fieldset>
      <table>
        <tr>
          <td>ATAQUE</td>
          <td>BÔNUS DE ATAQUE</td>
          <td>DANO</td>
          <td>SUCESSO DECISIVO</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>ALCANCE</td>
          <td>TIPO</td>
          <td>OBSERVAÇÕES</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>MUNIÇÔES</td></tr>
      </table>  
    </fieldset>
    <fieldset>
      <table>
        <tr>
          <td>ATAQUE</td>
          <td>BÔNUS DE ATAQUE</td>
          <td>DANO</td>
          <td>SUCESSO DECISIVO</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>ALCANCE</td>
          <td>TIPO</td>
          <td>OBSERVAÇÕES</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>MUNIÇÔES</td></tr>
      </table>  
    </fieldset>
    <fieldset>
      <table>
        <tr>
          <td>ATAQUE</td>
          <td>BÔNUS DE ATAQUE</td>
          <td>DANO</td>
          <td>SUCESSO DECISIVO</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>ALCANCE</td>
          <td>TIPO</td>
          <td>OBSERVAÇÕES</td>
        </tr>
        <tr>
          <td><input type="text"></td>
          <td><input type="text"></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <td>MUNIÇÔES</td></tr>
      </table>  
    </fieldset>
    <!--Pericias-->
    <fieldset>
      <table>
        <tr>
          <td>PERÍCIAS</td>
          <td>GRADUAÇÃO MÁXIMA (CLASSE/OUTRA CLASSE)</td>
          <td>_/_</td>
        </tr>
        <tr>
          <td></td>
          <td>NOME DA PERÍCIA</td>
          <td>HABILIDADE CHAVE</td>
          <td>MOD. DE PERÍCIA</td>
          <td>MOD. DE HABILIDADE</td>
          <td>GRADUAÇÃO</td>
          <td>OUTROS</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ABRIR FECHADURAS</td>
          <td>DES</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ACROBACIA</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ADESTRAR ANIMAIS</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ARTE DA FUGA</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>ATUAÇÃO</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ATUAÇÃO</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>ATUAÇÃO</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        
        <tr>
          <td><input type="checkbox"></td>
          <td>AVALIAÇÃO</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>BLEFAR</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>CAVALGAR(____)</td>
          <td>DES</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>CONCENTRAÇÃO</td>
          <td>CON</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CONHECIMENTO (___)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CONHECIMENTO (___)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CONHECIMENTO (___)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CONHECIMENTO (___)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CONHECIMENTO (___)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>CURA</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>DECIFRAR ESCRITA</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>DIPLOMACIA</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>DISFARCE</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>EQULIBRIO</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>   
        <tr>
          <td><input type="checkbox"></td>
          <td>ESCALAR</td>
          <td>FOR*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>ESCONDER-SE</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>FALSIFICAÇÃO</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>FURTIVIDADE</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>   
        <tr>
          <td><input type="checkbox"></td>
          <td>IDENTIFICAR MAGIA</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>   
        <tr>
          <td><input type="checkbox"></td>
          <td>INTIMIDAR</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>NATAÇÃO</td>
          <td>FOR*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OBSERVAR</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OBTER INFORMAÇÃO</td>
          <td>CAR</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>   
        <tr>
          <td><input type="checkbox"></td>
          <td>OFÍCIOS (____)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OFÍCIOS (____)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OFÍCIOS (____)</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OPERAR MECANISMOS</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>OUVIR</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>PROCURAR</td>
          <td>INT</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>PROFISSÃO (___)</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>PROFISSÃO (___)</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>PRESTIDIGITAÇÃO</td>
          <td>DES*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>SALTAR</td>
          <td>FOR*</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>SENTIR MOTIVAÇÃO</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr>  
        <tr>
          <td><input type="checkbox"></td>
          <td>SOBREVIVÊNCIA</td>
          <td>SAB</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>USAR CORDAS</td>
          <td>DES</td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
          <td><input type="number"></td>
        </tr> 
        <tr>
          <td><input type="checkbox"></td>
          <td>USAR INSTRUMENTO MÁGICO</td>
          <td>CAR</td>
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