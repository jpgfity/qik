<?php 

namespace Tests\Controllers;

use Qik\Core\{APIController};
use Qik\Exceptions\{APIException};
use Qik\Database\{DBQuery, DBResult};
use Qik\Utility\Utility;

use Tests\Objects\{Object, Related, Related2};

class DefaultController extends APIController
{
	public function GET()
	{
		$object = new Object();
		$user = DBQuery::Build()->from($object->GetTable())->select(['id', 'col1'])->asObject(get_class($object))->Fetch();

		throw new APIException('throw a 400!');
		//Utility::Dump($user);
		//exit;
	}
}