<h1><?php echo $model['RevitModel']['name']?></h1>

<p><?php echo $model['RevitModel']['creation']?></p>
<p><?php echo $model['RevitModel']['modification']?></p>

<h1>Families</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Creation Date</th>
        <th>Modification Date</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($model['families'] as $family): ?>
    <tr>
        <td> <?php echo $this->Html->link($family['name'],
		array('controller' => 'families', 'action' => 'view', $family['id'])); ?></td>
        <td><?php echo $family['Category']; ?></td>
        <td><?php echo $family['creation']; ?></td>
        <td><?php echo $family['modification']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($family); ?>
    <?php unset($model); ?>
</table>