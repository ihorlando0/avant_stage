<!DOCTYPE html>
<html>
<head>
    
    <title>haha</title>
   
</head>
<body>
<input id="note" cols="40" rows="10">
<div id="preview" class="gray"></div>




    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="./jquery.min.js"></script>
   <script type="text/javascript" language="javascript">

$(document).ready(function () {
   
    $('#note').keyup(function () {
       
     var count = $('#note').val().length;
     if(count<=10){
        document.getElementById("preview").innerHTML = "trop petit";
  }
  else if(count>=10){
    document.getElementById("preview").innerHTML = "trop grand";
  }
    });
    
});
       
       
    </script>
</body>
</html>
