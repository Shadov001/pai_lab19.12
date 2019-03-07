
<!DOCTYPE html>
<html lang="pl-PL">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="jquery.dataTables.min.css" />
    <script src="jquery-3.3.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Calka</title>

</head>
<body>


  <div class="container cos">
    <h2>Calka</h2>
    <form >

     <div class="form-group">
        <label for="login"> Poczatek przedzialu:</label>
        <input id="p1" type="text"  placeholder="Poczatek" name="login">
     </div>
     <div class="form-group">
       <label for="pswd">Koniec przedzialu</label>
       <input type="text" id="p2" placeholder="Koniec" name="pswd">
     </div>
     <!-- <div class="form-group">
       <label for="cos">Parametr h</label>
       <input type="text" id="p3" placeholder="parametr" name="pswd">
     </div> -->
     <div>
            <button id="prz" type="submit" class="btn przycisk mb-3">licz</button>
     </div>

     </form>
 </div>

<script>
    
$("#prz").click(function(){

var pocz = $("#p1").val();
var kon = $("#p2").val();
// var h = $("#p3").val();

// alert(pocz);
// alert(kon);

var jqxhr = $.post('licz.php', 
{
  pocz: pocz,
  kon: kon
//   h: h
},
function(data)
{
   alert(data);
});

return false;
});

  </script>
</body>
</html>