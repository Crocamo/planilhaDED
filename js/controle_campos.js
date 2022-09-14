
function calcula(atri, vAt) {
    /*atri= atributo *vAt= valor do atributo. ex:at0*/

    //Val recebe o valor do input. ex: at0=12
    var val = document.getElementById(atri + vAt).value;
    var mod, ma, compara;

    // confere de qual campo de atributo veio o dado.
    switch (atri) {
        case "at":/**atributo */
            mod = calcMod(val)//calcula modificador
            ma = 'ma' + vAt;
            document.getElementById(ma).value = mod;// att modificador
            compara = document.getElementById('ta' + vAt).value;
            if (compara == "") {
                attAtributos(ma, mod);
            }
            break;

        case "ma":/**modificador de atributo */
            ma = atri + vAt;
            attAtributos(ma, val);
            break;

        case "ta":/**atributo temporario */
            mod = calcMod(val)//calcula modificador
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
            ma = atri + vAt;
            attAtributos(ma, val);
            break;

        case "bA":/**bonus base de ataque */
            document.getElementById('aB').value = document.getElementById('bA').value;
            calcula_totais('aA','')
            break;
    }
}

function calcMod(val) {
    var total = "";
    if (val <= 0) {
        total = "-5";
    } else if (val <= 9) {
        total = parseInt((val - 10) / 2 - 0.5);
    } else {
        total = parseInt((val - 10) / 2);
    }
    return total;
}

function attAtributos(atributo, mod) {
    var temp = '';

    var atrib = atributo.charAt(2);

    /* atrib 0~5 */
    switch (atrib) {
        case "0":
            /*força */
            for (let i = 0; i < document.getElementsByName('FOR').length; i++) {
                document.getElementsByName('FOR')[i].value = mod;
                temp = document.getElementsByName('FOR')[i].id;
                separaIdNum(temp);
            }
            break;
        case "1":
            /*des */
            for (let i = 0; i < document.getElementsByName('DES').length; i++) {
                document.getElementsByName('DES')[i].value = mod;
                temp = document.getElementsByName('DES')[i].id;
                separaIdNum(temp);
            }
            break;
        case "2":
            /*con */
            for (let i = 0; i < document.getElementsByName('CON').length; i++) {
                document.getElementsByName('CON')[i].value = mod;
                temp = document.getElementsByName('CON')[i].id;
                separaIdNum(temp);
            }
            break;
        case "3":
            /*int */
            for (let i = 0; i < document.getElementsByName('INT').length; i++) {
                document.getElementsByName('INT')[i].value = mod;
                temp = document.getElementsByName('INT')[i].id;
                separaIdNum(temp);
            }
            break;
        case "4":
            /*sab */
            for (let i = 0; i < document.getElementsByName('SAB').length; i++) {
                document.getElementsByName('SAB')[i].value = mod;
                temp = document.getElementsByName('SAB')[i].id;
                separaIdNum(temp);
            }
            break;
        case "5":
            /*car */
            for (let i = 0; i < document.getElementsByName('CAR').length; i++) {
                document.getElementsByName('CAR')[i].value = mod;
                temp = document.getElementsByName('CAR')[i].id;
                separaIdNum(temp);
            }
            break;
    }
}

function separaIdNum(idPericia) {
    //separa inicial do numero do id. ex h=at. t=4.
    var a, b, t, h;

    a = idPericia.charAt(0);
    b = idPericia.charAt(1);
    h = a + b;
    a = idPericia.charAt(2);
    b = idPericia.charAt(3);
    t = a + b;
    calcula_totais(h, t);
}

function calcula_totais(base, valor) {
    var aux1="", somasArray=[""];

    //pvs
    if (base.charAt(0) == 'p') {
        if (base.charAt(1) == 'C') {
            somasArray = ['pV', 'pC', 'pT']
            totais(somasArray.length-1, somasArray, 'pM')
        }
    }

    //pericias
    if (base.charAt(0) == 'p') {
        if (base.charAt(1) == 'H') {
            aux1= 'pM' + valor;
            somasArray = ['pH', 'pG', 'pO'];
            for (let i = 0; i < somasArray.length; i++){
            somasArray[i] += valor;
            }
            totais(somasArray.length-1, somasArray, aux1)
        }
    }
    
    //agarrar
    if (base.charAt(0) == 'a') {
        if (base.charAt(1) == 'A') {
            somasArray = ['aB', 'aA', 'aT', 'aO']
            totais(somasArray.length-1, somasArray, 'aG')
        }
    }

    //Classe de armadura
    if (base.charAt(0) == 'd') {
        somasArray = ['dA', 'dS', 'dD', 'dT', 'dN', 'dF', 'dO']
        totais(somasArray.length-1, somasArray, 'dTot')
    }

    //resistencias
    if (base.charAt(0) == 'r') {
        if (base.charAt(1) == 'A') {
            aux1= 'rT' + valor;
            somasArray = ['rB', 'rA', 'rM', 'rO', 'rt'];
            for (let i = 0; i < somasArray.length; i++){
            somasArray[i] += valor;
            }
            totais(somasArray.length-1, somasArray, aux1)
        }
    }

    //iniciativa
    if (base.charAt(0) == 'i') {
        totais(somasArray.length, somasArray = ['iD', 'iO'], 'iT')
    }
}

function totais(ciclo, valor, retorno) {
   var val = [''], total = 0, totToque = 10, totSurpre = 10;
    for (let i = 0; i <= ciclo; i++) {
        if (document.getElementById(valor[i]).value==''){
        val[i] = 0;
        }else{
            val[i] = document.getElementById(valor[i]).value;
        }
        total += parseInt(val[i]);

        if (retorno == 'dTot'){
            if (i >= 2) {
                totToque += parseInt(val[i]); 
            }
            if (i != 2) {
                totSurpre += parseInt(val[i]);    
            }
        }
    }
    if (retorno == 'dTot'){
        total += 10;
        document.getElementById('cT').value = totToque;
        document.getElementById('cS').value = totSurpre;
    }    
    document.getElementById(retorno).value = total;
}
