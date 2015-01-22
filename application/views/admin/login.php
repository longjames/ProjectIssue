<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(
    	function()
    	{
    		// alert("heh");
    	});
    </script>
  </head>
  <body>
   <form class="form-horizontal" action="<?=base_url()?>index.php/backend/login" method="post">
    <div class="form-group">
      <label for="inputName" class="col-sm-3 control-label">邮箱</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="inputName" name="user" placeholder="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-sm-3 control-label">密码</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="password">
      </div>
    </div>
    <div class="form-group">
    <label class="col-sm-3 control-label"></label>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-default">登录</button>
      </div>
    </div>
  </form>
  </body>
</html>