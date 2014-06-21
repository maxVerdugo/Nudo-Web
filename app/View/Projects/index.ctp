<!-- File: /app/View/Projects/index.ctp -->

<h1>Projects</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Number</th>
        <th>Creation Date</th>
        <th>Modification Date</th>
        <th>N° Models</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($project['Project']['name'],
array('controller' => 'projects', 'action' => 'view', $project['Project']['id'])); ?>
        </td>
        <td><?php echo $project['Project']['num']?></td>
        <td><?php echo $project['Project']['creation']; ?></td>
        <td><?php echo $project['Project']['modification']; ?></td>
       <td><?php echo count($project['RevitModel']); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($project); ?>
</table>