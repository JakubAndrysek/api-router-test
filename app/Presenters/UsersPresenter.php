<?php

namespace App\ResourcesModule\Presenters;

use Nette;
use Ublaboo\ApiRouter\ApiRoute;

/**
 * API for managing users
 * 
 * @ApiRoute(
 * 	"/api-router/api/users[/<id>]",
 * 	parameters={
 * 		"id"={
 * 			"requirement": "\d+",
 * 			"type": "integer",
 * 			"description": "User ID",
 * 			"default": 10
 * 		}
 * 	},
 *  priority=1,
 *  format="json",
 *  section="Users",
 *  presenter="Resources:Users"
 * )
 */
class UsersPresenter extends Nette\Application\UI\Presenter
{

	/**
	 * Get user detail
	 *
	 * You **can** also write example json in the description
	 *
	 * <json>
	 * {
	 * 	"name": "John",
	 * 	"surname": "Doe",
	 * 	"age": 23,
	 * 	"hairCount": 123456,
	 * 	"parents": {{
	 * 		"name": "John",
	 * 		"surname": "Doe",
	 *     	"age": 53,
	 * 	    "hairCount": 456
	 * 	}}
	 * }
	 * </json>
	 * 
	 * @ApiRoute(
	 * 	"/api-router/api/users/<id>[/<foo>-<bar>]",
	 * 	parameters={
	 * 		"id"={
	 * 			"requirement": "\d+",
	 * 			"type": "integer",
	 * 			"description": "User ID",
	 * 			"default": 10
	 * 		}
	 * 	},
	 * 	method="GET",
	 * 	format="json",
	 * 	example={
	 * 		"name": "John",
	 * 		"surname": "Doe",
	 * 		"age": 23,
	 * 		"hairCount": 123456,
	 * 		"parents": {{
	 * 			"name": "John",
	 *    		"surname": "Doe",
	 * 	    	"age": 53,
	 * 		    "hairCount": 456
	 * 		}}
	 * 	},
	 * 	tags={
	 * 		"public",
	 * 		"secured": "#e74c3c"
	 * 	},
	 * 	response_codes={
	 *  	200="Success",
	 *  	400="Error in authentication process",
	 *  	401="Invalid authentication"
	 *  }
	 * )
	 */
	public function actionRead($id, $foo = NULL, $bar = NULL)
	{
		$this->sendJson(['id' => $id, 'foo' => $foo, 'bar' => $bar]);
	}


	public function actionUpdate($id)
	{
		$this->sendJson(['id' => $id]);
	}


	public function actionDelete($id)
	{
		$this->sendJson(['id' => $id]);
	}

}