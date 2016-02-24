<?php
namespace common\helpers;

use yii;
use common\models\User;
use common\models\Role;
use common\models\Status;
use common\models\UserType;

class ValueHelpers
{
	// ----- ^ ----- Role ----- ^ ----- //

	public static function roleMatch($name)
	{
		$userHasRoleName = Yii::$app->user->identity->role->name;
		return $userHasRoleName == $name ? true : false;
	}

	public static function getUsersRoleValue($userId = null)
	{
		if ($userId == null){
			$usersRoleValue = Yii::$app->user->identity->role->value;
			return isset($usersRoleValue) ? $usersRoleValue : false;
		}

		$user = User::findOne($userId);
		$usersRoleValue = $user->role->value;
		return isset($usersRoleValue) ? $usersRoleValue : false;
	}

	public static function getRoleValue($name)
	{
		$role = Role::find('value')->where(['name' => $name])->one();
		return isset($role->value) ? $role->value : false;
	}

	public static function isRoleNameValid($name)
	{
		$role = Role::find('name')->where(['name' => $name])->one();
		return isset($role->name) ? true : false;
	}

	// ----- ^ ----- Status ----- ^ ----- //

	public static function statusMatch($name)
	{
		$userHasStatusName = Yii::$app->user->identity->status->name;
		return $userHasStatusName == $name ? true : false;
	}

	public static function getStatusId($name)
	{
		$status = Status::find('id')->where(['name' => $name])->one();
		return isset($status->id) ? $status->id : false;
	}

	// ----- ^ ----- UserType ----- ^ ----- //

	public static function userTypeMatch($name)
	{
		$userHasUserTypeName = Yii::$app->user->identity->userType->name;
		return $userHasUserTypeName == $name ? true : false;
	}

	// ----- ^ ----- ^ ----- ^ ----- ^ ----- //
/*
	public static function getStatusValue($name)
	{
		$status = Status::find('value')->where(['name' => $name])->one();
		return isset($status->value) ? $status->value : false;
	}

	public static function getUserTypeValue($name)
	{
		$user_type = UserType::find('value')->where(['name' => $name])->one();
		return isset($user_type->value) ? $user_type->value : false;
	}
*/
}
