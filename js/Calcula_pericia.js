function calcula_pericia(i){
console.log(i);
        var p1 = document.getElementById('modHab'+i).value;
        var p2 = document.getElementById('graduaPericia'+i).value;
        var p3 = document.getElementById('periciaOutros'+i).value;
        if (p1=='') {p1=0};if (p2=='') {p2=0};if (p3=='') {p3=0};
        var tot=parseInt(p1)+parseInt(p2)+parseInt(p3);
        document.getElementById('modPericia'+i).value = tot;

}
