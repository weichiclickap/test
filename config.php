<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'tcbbank';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'jack5899';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://192.168.1.250/tcbbankbranch';
$CFG->dataroot  = '/var/www/tcbbankdata';
$CFG->admin     = 'admin';
@error_reporting(E_ALL | E_STRICT); @ini_set('display_errors', '1'); 
$CFG->debugdisplay = 1;
$CFG->debug = 32767;
$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
