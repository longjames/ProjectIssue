<script type="text/javascript">
  $("table").hide();

  $("#indiv_show").click(function()
  {
    $("#table_entity").hide();
    $("#indiv_entity").show();
  });

  $("#table_show").click(function()
  {
    $("#table_entity").show();
    $("#indiv_entity").hide();
  });
</script>

<table id="table_entity" class="table table-striped table-hover">
    <tr>
        <td>项目名称</td>
        <td>发布时间</td>
        <td>项目周期</td>
        <td>项目金额</td>
        <td>项目描述</td>
      </tr>
    <?php foreach($projects as $item):?>
      <tr>
        <td><?=$item->title?></td>
        <td><?=$item->distime?></td>
        <td><?=$item->period?></td>
        <td><?=$item->money?></td>
        <td><?=$item->description?></td>
      </tr>
    <?php endforeach; ?>
</table>

<ul id="indiv_entity">
  <?php foreach($projects as $item): ?>
  <li class="post-item">
    <h4>
      <?=$item->title?>
    </h4>
    <div class="project_tag">
      <span>发布时间：<?=$item->distime?></span>
      <span>项目周期：<?=$item->period?></span>
      <span>项目金额：<?=$item->money?></span>
    </div>
    <div class="description">
      <?=$item->description?>
    </div>
  </li>
  <?php endforeach; ?>
</ul>