function calcula_ca(){
    var CAarray = ["caBase", "caArmor", "caShield", "caDes", "caTam", "caNat", "caDefle", "caOutros"];
    for (let i = 0; i < CAarray.length; i++) {
        var val,totalCa=[0];
        totalCa[i]=document.getElementById(CAarray[i]).value;
        if (totalCa[i]=='') {
            totalCa[i]=0;
        }
        val =val+totalCa[i];
        
    }
    console.log(totalCa);
}