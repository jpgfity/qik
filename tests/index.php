<?php 
error_reporting(E_ALL);
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Qik\Core\APIServer;
use Qik\Debug\Debugger;
use Qik\Database\{DBManager, DBQuery};
use Tests\Controllers;

$server = new APIServer();
$server->RegisterDeveloper('172.19.0.1', 'Mike Stevens');
$server->RegisterController(new Controllers\DefaultController);

$server->RegisterPostCache(function() {
	$connection = DBManager::CreateConnection('mysql', 'local', 'local', 'local');
	DBQuery::Connect($connection, true);
	//DBQuery::EnableDebug();
	//DBManager::SetDefaultTablePrefix('qik_');
});

Debugger::SetTimestamp('init');

$server->Configure();
$server->Serve();

Debugger::SetTimestamp('denit');
?>