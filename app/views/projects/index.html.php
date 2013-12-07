<?php
$this->title('Home');
?>

<table border="1" width="80%" align="center">
	<tr>
		<td width="15%">Project ID</td>
		<td>Project Name</td>
		<td width="20%">Status</td>
		<td>&nbsp;</td>
	</tr>
	<?php
	foreach($projects AS $project)
	{
		echo '<tr>';
			echo '<td>' . $project->projectid . '</td>';
			echo '<td>' . $project->projectname . '</td>';
			echo '<td>' . $project->getStatusText() . '</td>';
			echo '<td>
				' . $this->html->link('View', array('Projects::view', 'id' => $project->projectid)) . '
				|
				' . $this->html->link('Log', array('Projects::log', 'id' => $project->projectid)) . '
			</td>';
		echo '</tr>';
	}
	?>
</table>
