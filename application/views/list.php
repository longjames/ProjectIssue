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
    $(document).ready(
    	function()
    	{
    		// alert("heh");
    	});
    </script>
  </head>
  <body>
    <h1>项目展示</h1>
	<table class="table table-striped table-hover">
        <tr>
            <td>项目名称</td>
            <td>项目来源</td>
            <td>发布时间</td>
          </tr>
        <?php foreach($projects as $item):?>
          <tr>
            <td><?=$item->title?></td>
            <td><?=$item->description?></td>
            <td><?=$item->distime?></td>
          </tr>
        <?php endforeach; ?>
    </table>
    
  </body>
</html>