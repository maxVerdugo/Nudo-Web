<!-- File: /app/View/Projects/index.ctp -->

<h1>Projects</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Number</th>
        <th>Creation Date</th>
        <th>Modification Date</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td>
            <?php echo $project['Project']['namevalue']?>
        </td>
        <td><?php echo $project['Project']['num']?></td>
        <td><?php echo $project['Project']['creationdate']; ?></td>
        <td><?php echo $project['Project']['modificationdate']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($project); ?>
</table>