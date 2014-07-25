<h1><?php echo $project['Project']['name']?></h1>

<p><small>NumeroProyecto: <?php echo $project['Project']['num']?></small></p>

<p><?php echo $project['Project']['creation']?></p>
<p><?php echo $project['Project']['modification']?></p>

<h1>Models</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Creation Date</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($project['models'] as $model): ?>
    <tr>
        <td> <?php echo $this->Html->link($model['name'],
		array('controller' => 'revitModels', 'action' => 'view', $model['id'])); ?></td>
        <td><?php echo $model['creation']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($model); ?>
    <?php unset($project); ?>
</table>
