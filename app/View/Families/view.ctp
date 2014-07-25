<h1><?php echo $family['Family']['name']?></h1>

<p><?php echo $family['Family']['creation']?></p>
<p><?php echo $family['Family']['modification']?></p>

<h1>Elements</h1>
<table>
    <tr>
        <th>Id Element</th>
        <th>Id Revit</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($family['elements'] as $element): ?>
    <tr>
        <td> <?php echo $this->Html->link($element['id'],
        array('controller' => 'elements', 'action' => 'view', $element['id_revit'])); ?></td>
        <td><?php echo $element['id_revit']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($element); ?>
    <?php unset($family); ?>
</table>