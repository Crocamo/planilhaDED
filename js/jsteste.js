function calcula(atri, vAt) {
    /*atri= atributo *vAt= valor do atributo*/

    //Val recebe o valor do input
    var val = document.getElementById(atri + vAt).value;
    var mod, ma;

    switch (atri) {
        case "at":/**atributo */
            mod = calculaAtributo(val)//calcula modificador
            ma = 'ma' + vAt;
            document.getElementById(ma).value = mod;// att modificador
            var compara = document.getElementById('ta' + vAt).value;
            if (compara == "") {
                attAtributos(ma, mod);
            }
            break;

        case "ma":/**modificador de atributo */
            break;

        case "ta":/**atributo temporario */
            mod = calculaAtributo(val)//calcula modificador
            ma = 'mt' + vAt;
            document.getElementById(ma).value = mod;// att modificador
            var compara = document.getElementById('ta' + vAt).value;
            if (compara != "") {
                attAtributos(ma, mod);
            } else {
                attAtributos('at' + vAt, mod);
            }

            break;

        case "mt":/**Modificador de atributo temporario */


            break;
    }
}

function calculaAtributo(val) {
    if (val <= 0) {
        var total = "-5";
    } else if (val <= 9) {
        var total = parseInt((val - 10) / 2 - 0.5);
    } else {
        var total = parseInt((val - 10) / 2);
    }
    return total;
}

function attAtributos(atributo, modif) {

    var atrib = atributo.charAt(2);

    /* atrib 0~5 */
    switch (atrib) {
        case "0":
            /*força */
            for (let i = 0; i < document.getElementsByName('FOR').length; i++) {
                document.getElementsByName('FOR')[i].value = modif;
                var temp = document.getElementsByName('FOR')[i].id;
                attpericia(temp);
                console.log(temp);
            }
            break;
        case "1":
            /*des */
            for (let i = 0; i < document.getElementsByName('DES').length; i++) {
                document.getElementsByName('DES')[i].value = modif;
                var temp = document.getElementsByName('DES')[i].id;
                attpericia(temp);
                console.log(temp);
            }
            break;
        case "2":
            /*con */
            for (let i = 0; i < document.getElementsByName('CON').length; i++) {
                document.getElementsByName('CON')[i].value = modif;
                var temp = document.getElementsByName('CON')[i].id;
                attpericia(temp);console.log(temp);
            }
            break;
        case "3":
            /*int */
            for (let i = 0; i < document.getElementsByName('INT').length; i++) {
                document.getElementsByName('INT')[i].value = modif;
                var temp = document.getElementsByName('INT')[i].id;
                attpericia(temp);
            }
            break;
        case "4":
            /*sab */
            for (let i = 0; i < document.getElementsByName('SAB').length; i++) {
                document.getElementsByName('SAB')[i].value = modif;
                var temp = document.getElementsByName('SAB')[i].id;
                attpericia(temp);console.log(temp);
            }
            break;
        case "5":
            /*car */
            for (let i = 0; i < document.getElementsByName('CAR').length; i++) {
                document.getElementsByName('CAR')[i].value = modif;
                var temp = document.getElementsByName('CAR')[i].id;
                attpericia(temp);
            }
            break;
    }
}

function attpericia(idPericia) {
    var numPe, a, b, t;

    if (idPericia.charAt(0) == 'm') {
        if (idPericia.charAt(1) == 'H') {
            a = idPericia.charAt(2);
            b = idPericia.charAt(3);
            t = a + b;
            calcula_pericia(t);
        }
    }
    if (idPericia.charAt(0) == 'r') {
        if (idPericia.charAt(1) == 'A') {
            a = idPericia.charAt(2);
            b = idPericia.charAt(3);
            t = a + b;
            calcula_resist(t);
        }
    }
}

function calcula_pericia(i) {
    var p1 = document.getElementById('mH' + i).value;
    var p2 = document.getElementById('gP' + i).value;
    var p3 = document.getElementById('pO' + i).value;
    if (p1 == '') {
        p1 = 0
    };
    if (p2 == '') {
        p2 = 0
    };
    if (p3 == '') {
        p3 = 0
    };
    var tot = parseInt(p1) + parseInt(p2) + parseInt(p3);
    document.getElementById('mP' + i).value = tot;

}

function calcula_resist(i){
    var r1 = document.getElementById('rB' + i).value;
    var r2 = document.getElementById('rA' + i).value;
    var r3 = document.getElementById('rM' + i).value;
    var r4 = document.getElementById('rA' + i).value;
    var r5 = document.getElementById('rM' + i).value;
    if (r1 == '') {
        r1 = 0
    };
    if (r2 == '') {
        r2 = 0
    };
    if (r3 == '') {
        r3 = 0
    };

}

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