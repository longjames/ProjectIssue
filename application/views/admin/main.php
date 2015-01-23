<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>项目发布平台后台管理</title>
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      //添加记录
      $("#addRecord").click(function()
      {
        var data = {
          title: $("#inputTitle").val(),
          money: $("#inputMoney").val(),
          period: $("#inputPeriod").val(),
          description: $("#inputDescription").val()
        };
        $.post("<?=site_url('admin/add')?>",data,function(res,status)
        {
          alert(res);
        });
        return true;
      });
    });
    </script>
  </head>
  <body>
  <a class="btn btn-default" data-toggle="modal" id="addForm" data-target="#addModal">添加信息</a>

  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">添加项目</h4>
        </div>
        <div class="modal-body">
              <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputTitle" class="col-sm-3 control-label">项目名称</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputTitle">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMoney" class="col-sm-3 control-label">项目金额</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputMoney">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPeriod" class="col-sm-3 control-label">项目周期</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputPeriod">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputDescription" class="col-sm-3 control-label">描述</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputDescription">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-2">
                      <button type="submit" id="addRecord" class="btn btn-default">添加</button>
                    </div>
                  </div>
              </form>
        </div>
      </div>
    </div>
  </div>

  <?php foreach($project as $item): ?>
    <li><?=$item->title?></li>
  <?php endforeach; ?>
  </ul>

  <form action="<?=site_url('admin/remove')?>" method="post">
  <input type="text" name="id">
  <input type="submit">
  </form>

  <form action="<?=site_url('admin/modify')?>" method="post">
  <input type="text" name="id">
  <input type="text" name="which">
  <input type="text" name="record">
  <input type="submit">
  </form>
  </body>
</html>