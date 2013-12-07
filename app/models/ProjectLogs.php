<?php
namespace app\models;

class ProjectLogs extends \lithium\data\Model {
    protected $_scheme = array (
        'projectlogid'  =>  array (
            'type'      =>  'id',
            'length'    =>  '11',
            'null'      =>  false,
            'default'   =>  null,
        ),
        'timestamp'     =>  array (
            'type'      =>  'datetime',
            'null'      =>  false,
        ),
        'description'   =>  array (
            'type'      =>  'text',
            'null'      =>  true,
        ),
        'worker'        =>  array (
            'type'      =>  'string',
            'length'    =>  45,
            'null'      =>  true,
            'default'   =>  null,
        ),
        'esttime'       =>  array (
            'type'      =>  'double',
            'null'      =>  true,
            'default'   =>  0,
        ),
        'projectid'     =>  array (
            'type'      =>  'id',
            'length'    =>  11,
        ),
    );

    public $belongsTo = array(
        "Projects",
    );

    public $_meta = array(
        'key'   => 'projectlogid',
    );
}
?>
