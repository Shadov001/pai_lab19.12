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

<div class ="container cos">
    <h2> CALKA </h2>
  <form>
   <div class = "form-group">
    <label for="poczatek"> Poczatek </label>
    <input id="p1" type="text" placeholder="poczatek" name="pocz">
   </div>

   <div class="form-group">
     <label for="koniec"> Koniec przedzialu </label>
     <input id="p2" type="text" placeholder="koniec" name="koniec">
    </div>

    <div>
        <button id="p3" type="submit" class="btn przycisk mb-3"> LICZ </button>
    </div>
   </form>
</div>

<script>

$("#p3").click(function(){//wywołuje funkcję po kliknięciu

  var pocz = $("#p1").val();
  var koniec = $("#p2").val();

  var jqxhr = $.post('licz.php', {pocz: pocz, koniec: koniec}, function(data){alert(data);});

  return(false);
  
  });
</script>

</body>
</html>