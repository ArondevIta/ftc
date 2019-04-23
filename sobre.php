<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

 </head>

<body> 
<div class="container">
<h3>A Demo of Modal</h3>
<!-- Modal Trigger -->
  <a class="" href="#demo-modal">Launch Modal</a>

  <!-- Modal Structure -->
  <div id="demo-modal" class="modal">
    <div class="modal-content">
      <h4>A Demo of Simple Modal</h4>
      <p>Content of the modal goes here. Place marketing text or other information here.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Close</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>
</body>   
</html>