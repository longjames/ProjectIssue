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