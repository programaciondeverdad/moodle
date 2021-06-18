<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

var_dump(getenv('pgsql'));
$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-52-4-111-46.compute-1.amazonaws.com');
$CFG->dbname    = getenv('df3mkt527m08l5');
$CFG->dbuser    = getenv('cdiluxcefqbjwz');
$CFG->dbpass    = getenv('6b3aca855f7ef43f7be989164bcaae94565ba56447c1ed29306b6c5c6424a286');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('https://sitioweb-programaciondeverdad.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!