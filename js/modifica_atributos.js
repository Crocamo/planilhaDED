function somaMod(valor) {
    var val = document.getElementById(valor).value;

    if (val <= 0) {
        var total = "-5";
    } else if (val <= 9) {
        var total = parseInt((val - 10) / 2 - 0.5);
    } else {
        var total = parseInt((val - 10) / 2);
    }
    var teste = valor.charAt(0);
    if (teste == "t") {
        var resp = ('mod' + valor);

    } else {
        var resp = ('mod' + valor);
        attAtributos(valor, total);
    }
    document.getElementById(resp).value = total;
}

function attAtributos(atributo, modif) {

    var atrib = atributo.charAt(5);
    
    /* atrib 0~5 */
    switch (atrib) {
        case "0":
            /*força */
            for (let i = 0; i < document.getElementsByName('FOR').length; i++) {
                document.getElementsByName('FOR')[i].value = modif;
            }
            break;
        case "1":
            /*des */
            for (let i = 0; i < document.getElementsByName('DES').length; i++) {
                document.getElementsByName('DES')[i].value = modif;
                
            }
            break;
        case "2":
            /*con */
            for (let i = 0; i < document.getElementsByName('CON').length; i++) {
                document.getElementsByName('CON')[i].value = modif;
            }
            break;
        case "3":
            /*int */
            for (let i = 0; i < document.getElementsByName('INT').length; i++) {
                document.getElementsByName('INT')[i].value = modif;
            }
            break;
        case "4":
            /*sab */
            for (let i = 0; i < document.getElementsByName('SAB').length; i++) {
                document.getElementsByName('SAB')[i].value = modif;
            }
            break;
        case "5":
            /*car */
            for (let i = 0; i < document.getElementsByName('CAR').length; i++) {
                document.getElementsByName('CAR')[i].value = modif;
            }
            break;
    }


    
}