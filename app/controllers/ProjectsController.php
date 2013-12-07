<?php
namespace app\controllers;

use app\models\Projects;
use app\models\ProjectLogs;

class ProjectsController extends \lithium\action\Controller
{
	public function add()
	{
		//code her for add
		$saved = false;
		if($this->request->data)
		{
			$project = Projects::create($this->request->data);
			$project->status = 1;

			$currenttime = new \DateTime();
			$project->projectstart = $currenttime->format('Y-m-d H:i:s');
			$project->projectend = $currenttime->format('Y-m-d H:i:s');

			$saved = $project->save();

			$project->projectname = 'Computer ' . $project->projectid;
			$project->save();
		}
		else
		{
			$project = '';
		}

		if($saved == true)
		{
			return $this->redirect('Projects::index');
		}
		else
		{
			return compact('project');
		}
	}

	private function getProjectInfo($projectid)
	{
		$project = Projects::first($projectid);

		if(!$project)
		{
			return false;
		}
		else
		{
			return $project;
		}
	}

	public function edit()
	{
		$project = $this->getProjectInfo($this->request->args[0]);

		return compact('project');
	}

	public function view()
	{
		$project = $this->getProjectInfo($this->request->params['id']);

		$logs = ProjectLogs::find('all', array (
			'conditions'	=>	array (
				'projectid'	=>	$project->projectid,
			),
			'order'			=>	array (
				'timestamp'	=>	'DESC',
			),
		));

		if(!$logs)
		{
			$logs = array();
		}

		return compact('project', 'logs');
	}

	public function log()
	{
		$project = $this->getProjectInfo($this->request->params['id']);

		if($this->request->data)
		{
			$log = ProjectLogs::create($this->request->data);
			$currenttime = new \DateTime();
			$log->timestamp = $currenttime->format('Y-m-d H:i:s');

			$log->save();

			$project->status = $this->request->data['status'];
			$project->save();

			$this->redirect(array('Projects::view', 'id' => $project->projectid));
		}

		return compact('project');
	}

	public function index()
	{
		$projects = Projects::find('all', array(
			'limit'	=>	20,
			'order'	=>	array (
				'status'		=>	'ASC',
				'projectstart'	=>	'DESC',
			)
		));

		return compact('projects');
	}

	public function delete()
	{

	}
}
?>
