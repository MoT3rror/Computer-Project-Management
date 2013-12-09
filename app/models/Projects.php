<?php
namespace app\models;

class Projects extends \lithium\data\Model {
	protected $_scheme = array (
		'projectid'	=>	array (
			'type'		=>	'id',
			'length'	=>	'11',
			'null'		=>	false,
			'default'	=>	null,
		),
		'projectname'	=>	array (
			'type'		=>	'string',
			'length'	=>	45,
			'null'		=>	false,
			'default'	=>	null,
		),
		'description'	=>	array (
			'type'		=>	'text',
			'null'		=>	true,
		),
		'projectstart'	=>	array (
			'type'		=>	'datetime',
			'null'		=>	false,
		),
		'projectend'	=>	array (
			'type'		=>	'datetime',
			'null'		=>	false,
		),
		'client'		=>	array (
			'type'		=>	'string',
			'null'		=>	false,
			'length'	=>	45,
			'default'	=>	null,
		),
		'phone'			=>	array (
			'type'		=>	'string',
			'null'		=>	false,
			'length'	=>	45,
			'default'	=>	null,
		),
		'model'			=>	array (
			'type'		=>	'string',
			'null'		=>	false,
			'length'	=>	45,
			'default'	=>	null,
		),
		'serialnumber'	=>	array (
			'type'		=>	'string',
			'null'		=>	false,
			'length'	=>	45,
			'default'	=>	null,
		),
		'recommend'		=>	array (
			'type'		=>	'text',
			'null'		=>	false,
		),
		'viruses'		=>	array (
			'type'		=>	'integer',
			'length'	=>	20,
			'default'	=>	0,
			'null'		=>	true,
		),
	);

	public $_meta = array('key' => 'projectid');

	static public $statuses = array(
		1	=>	'Open',
		2	=>	'In Progress',
		3	=>	'Complete',
	);

	public $hasMany = array('ProjectLogs');

	public $validates = array (
		'client'		=>	array (
			array(
				'notEmpty',
				'message'	=>	'You must include a client.'
			),
		),
		'phone'			=>	array (
        	array (
        		'notEmpty',
        		'message'	=>	'You must include a phone number.'
        	),
		),
		'description'	=>	array (
			array (
				'notEmpty',
				'message'	=>	'You must include a description',
			),
		),
		'model'			=>	array (
			array (
				'notEmpty',
				'message'	=>	'You must include the model of the computer',
			),
		),
		'serialnumber'	=>	array (
			array (
				'notEmpty',
				'message'	=>	'You must include the serial number of the computer',
			),
		),
	);

	public function getStatusText($entity)
	{
		return self::$statuses[$entity->status];
	}

	static public function getStatus()
	{
		return self::$statuses;
	}
}
?>
