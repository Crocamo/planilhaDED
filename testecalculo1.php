<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"/>
    
    <title>Planilha 3.5 D&D</title>
    <script>
        function soma(valor){
            var val = document.getElementById(valor).value;
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
            }
        }
    </script>
</head>
<body>
  <form action="" method="post">
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
                <td><input type="number" id="val" value="10" onblur="soma('val')"></td>
                <td><input type="number" id="mod" value="0"></td> 
                <td><input type="number" id="valT" onblur="soma('valT')"></td> 
                <td><input type="number" id="modT"></td> 
            </tr> 
        </table>
    </fieldset>
  </form>
</body>
</html>