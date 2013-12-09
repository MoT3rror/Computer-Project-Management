<span><?php echo $this->html->link('Add Log', array(
    'Projects::log',
    'id'   =>  $project->projectid)
) ?></span> | 
<span><?= $this->html->link('Recommendation', array (
    'Projects::recommend',
    'id'    =>  $project->projectid,
)) ?></span> |
<span><?= $this->html->link('Viruses', array (
    'Projects::virus',
    'id'    =>  $project->projectid,
)) ?></span>
<br /><br />
<table align="center" width="75%">
    <tr>
        <td width="25%">
            Project ID: 
        </td>
        <td>
            <?php echo $project->projectid ?>
        </td>
    </tr>
    <tr>
        <td>
            Project Name:
        </td>
        <td>
            <?php echo $project->projectname; ?>
        </td>
    </tr>
    <tr>
        <td>Client Name: </td>
        <td><?php echo $project->client ?></td>
    </tr>
    <tr>
        <td>Phone: </td>
        <td><?php echo $project->phone ?></td>
    </tr>
    <tr>
        <td>Model: </td>
        <td><?= $project->model ?></td>
    </tr>
    <tr>
        <td>Serial Number: </td>
        <td><?= $project->serialnumber ?></td>
    </tr>
    <tr>
        <td valign="top">Description:</td>
        <td><?php echo nl2br($project->description) ?></td>
    </tr>
    <tr>
        <td>Recommendation: </td>
        <td><?= $project->recommend ?></td>
    </tr>
    <tr>
        <td>Viruses: </td>
        <td><?= $project->viruses ?></td>
</table>
<br /><br />
<table align="center" border="1" width="100%">
    <tr>
        <td width="15%">
            Date Time
        </td>
        <td width="10%">
            Worker
        </td>
        <td width="15%">
            Time Worked
        </td>
        <td width="70%">
            Description
        </td>
    </tr>
    <?php
    foreach($logs AS $log):
    ?>
    <tr>
        <td><?php echo $log->timestamp ?></td>
        <td><?php echo $log->worker ?></td>
        <td><?php echo $log->esttime ?></td>
        <td><?php echo $log->description ?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>