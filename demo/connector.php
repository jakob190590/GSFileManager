<?php
require_once __DIR__.'/../src/connectors/GSFileManager.php';

set_time_limit(0);
error_reporting(E_ALL);
ini_set('display_errors', true);
mb_internal_encoding('UTF-8');

$options = array();
$options['max_upload_filesize'] = '2000'; //(the size in Kbytes)
$options[GSFileManager::ROOT_PARAM] = array(array('name' => 'Ablage', 'path' => 'C:/temp'));
$manager = new GSFileManager(new GSFileSystemFileStorage(), $options);
try {
    $result_json = $manager->process($_REQUEST);
} catch (Exception $e) {
    $result = array(
        'result'  => 0,
        'gserror' => $e->getMessage(),
        'code'    => $e->getCode()
    );
    $result_json = json_encode($result);
}
echo $result_json;
