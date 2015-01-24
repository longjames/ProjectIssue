<table class="table table-striped table-hover">
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