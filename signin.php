<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>Zap Chat</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script>
    function check(){
      if(document.getElementById('in_id').value==""  || document.getElementById('in_psd').value=="" )  return false; 
      else return true;
    }
    $(function(){
      $('#btn_signin').bind('click',function(){
        var s ="";
        if($('#in_id').val()=="")s+="使用者名稱不可為空</br>";
        if($('#in_psd').val()=="")s+=" 密碼不可為空";

        $('#hint').html(s);
      });
    });
    </script>
  </head>

  <body>

    <div class="container">
    <a class="btn btn-large" >回首頁</a>
      <form class="form-signin" onSubmit="return check();" method="post" action="in.php" >
        <h2 class="form-signin-heading">Sign in <small>  Beta v0.1</small></h2>
        </br>
        <input type="text" class="form-control" placeholder="User Name" autofocus id="in_id" name="in_id">
        <input type="password" class="form-control" placeholder="Password" id="in_psd" name="in_psd">
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_signin">Sign in</button>
        <small id="hint"></small>
      </form>
    </div>
  </body>
</html>
