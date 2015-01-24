<script type="text/javascript">
$("tr:gt(0)").click(function(event)
{
  //显示项目详细信息
  var opid = $(event.target).parent().children().first().html();
  var data = {
          id: opid
        };
  $.post("<?=site_url('admin/detail')?>",data,function(res,status)
  {
    $("#msg").html(res);
  });
});
</script>
<table class="table table-hover">
  <tr>
    <td hidden>编号</td>
    <td>项目名称</td>
    <td>发布时间</td>
    <td>项目周期</td>
  </tr>
  <?php foreach($project as $item): ?>
  <tr>
    <td hidden><?=$item->id?></td>
    <td><?=$item->title?></td>
    <td><?=$item->distime?></td>
    <td><?=$item->period?></td>
  </tr>
  <?php endforeach; ?>
</table>