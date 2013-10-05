<?
header('Content-Type:text/html;charset=utf-8');
session_start();
if(!isset( $_SESSION['name'] ) ){

 echo '<script>alert("請先登入 !" ); location.href="signin.php";</script>';
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>ZapChat</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ZapChat</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signout.php">登出</a></li>
            <!--<li class="active"><a href="./">Fixed top</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <h2>Chat Room 1</h2>
      <div class="jumbotron" id="msg_block">
        

      </div>

    </div> <!-- /container -->




<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
<br>
 <div class="container">
<form  role="form">

  <div class="form-group">
    <input type="text" class="form-control" id="msg" name="msg" placeholder="輸入訊息..." onkeydown="testForEnter();">
  </div>
 
</form>




  
    </div>
</nav>





    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.timer.js"></script>
    <script>
    function testForEnter(){if (event.keyCode == 13){event.cancelBubble=true;event.returnValue=false;}}
    function check_null(){
      if(document.getElementById('msg').value=="")return false;
      else return true;      
    }


    $(function(){

      



      $('#msg').keydown(function(e) {
        if (e.keyCode == 13 && $('#msg').val()!="") { 
       
       var m = $('#msg').val();

      var request = $.ajax({
      type:"POST",
      url:"insert.php",
      data:{msg:m},
       success: function(){
      $('#msg').val("");
      $('body').scrollTop($('body').height());
       }
      });
      request.fail(function( jqXHR, textStatus ) {
      $('#msg_block').append( "Request failed: " + textStatus );
      });
    

        
      }

      });


      var timeout = 1000;
      var timer;

      timer = $.timer(timeout, function() {
        //  $('#msg_block').append(timeout++);

        aja_sel();

       
    
      });


 function aja_sel(){
         $.ajax({
      type:"POST",
      url:"select.php",
       success: function(data){
          $('#msg_block').html(data);
       }
        });

$('body').scrollTop($('body').height());

     }
    

    });

    </script>
  </body>
</html>
