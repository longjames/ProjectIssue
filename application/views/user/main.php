<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    });
    </script>
  </head>
  <body>
    <h1>项目展示</h1>
    <a class="btn btn-default" id="refresh_list">刷新列表</a>
	   <div id="msg">
     </div>
    
  </body>
</html>