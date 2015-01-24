<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=base_url()?>icon.png" rel="shortcut icon">
    <title>登陆</title>
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/signin.css" rel="stylesheet">
    <script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
     <form class="form-signin" action="<?=base_url()?>index.php/backend/login" method="post">
        <h2 class="form-signin-heading">请登录：</h2>
        <label for="inputName" class="sr-only">用户名</label>
        <input type="text" id="inputName" class="form-control" name="user" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
      </form>
  </div>
  </body>
</html>