<script type="text/javascript">
//控制同时只能有一个textarea
flag = true;
$("td:odd").click(function(event)
{
  if(flag)
  {
    //原来内容
    var old = $(event.target).html();

    $(event.target).html("<textarea row=5></textarea>");
    $(event.target).children().first().focus();
    flag = false;
    $("textarea").blur(function(src)
    {
      var res = confirm("是否保存？");
      //确定保存
      //Ajax修改，修改失败保留原来内容
      if(res == true && $(src.target).val() != " " && $(src.target).val()!="")
      {
        var data = {
          id: $("#number").text(),
          record: $(src.target).val(),
          which: $(src.target).parent().attr('id')
        };
        $.post("<?=site_url('admin/modify')?>",data,function(ret,status)
        {
          if(ret=="修改失败")
            $(event.target).html(old);
          else
            $(event.target).html($(src.target).val());
        });
      } else
      {
        //放弃修改
        $(event.target).html(old);
      }
      flag = true;
      $("textarea").blur(function(){});
    });
  }
});

$("#del").click(function()
{
  var data = {
    id: $("#number").text(),
  };
  $.post("<?=site_url('admin/remove')?>",data,function(ret,status)
  {
    alert(ret);
  });
  window.location="<?=site_url('admin/index')?>";
});

$("#nav_tip").text("返回");
</script>

<div class="panel panel-success">
  <div class="panel-heading"><h4>项目详细信息 <small>点击修改</small></h4></div>
  <table class="table table-striped table-bordered table-hover">
    <tr hidden>
      <td>项目编号</td>
      <td id="number"><?=$project->id?></td>
    </tr>
    <tr>
      <td>项目名称</td>
      <td id="title"><?=$project->title?></td>
    </tr>
    <tr>
      <td>发布时间</td>
      <td id="distime"><?=$project->distime?></td>
    </tr>
    <tr>
      <td>项目周期</td>
      <td id="peroid"><?=$project->period?></td>
    </tr>
    <tr>
      <td>项目金额</td>
      <td id="money"><?=$project->money?></td>
    </tr>
    <tr>
      <td>项目描述</td>
      <td id="description"><?=$project->description?></td>
    </tr>
  </table>
  <div class="panel-footer"><a id="del">删除记录</a></div>
</div>
