function calcula_ca(){
    const CAarray =["caBase","caArmor","caShield","caDes", 
        "caTam","caNat","caDefle","caOutros"];
    var totalCa=0;
    var base;

    for (let i = 0; i < CAarray.length; i++) {
        base=document.getElementById(CAarray[i]).value;
        totalCa+= parseInt(base);
    }
    console.log(totalCa);

}
