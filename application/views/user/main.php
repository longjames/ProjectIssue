<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=base_url()?>icon.png" rel="shortcut icon">
    <title>项目展示</title>
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $("#refresh_list").click(function()
    	{
        $.get("<?=site_url('welcome/show')?>",function(data, status)
        {
          $("#msg").html(data);
        });
    	});

      $("#refresh_list").click();

      $("#search_btn").click(function() 
      {
        var data = {
          content: $("#search_content").val(),
        };
        $.post("<?=site_url('welcome/search')?>", data, function(ret, status)
        {
          $("#msg").html(ret);
        });
      });
    });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1 class="text-center">项目展示</h1>
      </div>
      <div>
        <div class="col-sm-1">
          <a class="btn btn-default" id="refresh_list">项目列表</a>
        </div>
        <div class="col-sm-2 col-sm-offset-9">
          <div class="input-group">
            <input type="text" class="form-control" id="search_content" placeholder="search">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
  	  <div id="msg">
      </div>
    </div>
  </body>
</html>