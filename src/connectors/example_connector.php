<?php
require_once __DIR__.'/GSFileManager.php';

set_time_limit(0);
error_reporting(E_ALL);
ini_set('display_errors', true);
mb_internal_encoding("UTF-8");

$options = array();
$options['max_upload_filesize'] = '2000'; //(the size in Kbytes)
$options[GSFileManager::ROOT_PARAM] = array(array('name' => 'Ablage', 'path' => 'C:/temp'));
$manager = new GSFileManager(new GSFileSystemFileStorage(), $options);
try {
    $result = $manager->process($_REQUEST);
} catch (Exception $e) {
    $result = '{result: \'0\', gserror: \''.addslashes($e->getMessage()).'\', code: \''.$e->getCode().'\'}';
}
echo $result;
