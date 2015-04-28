<?php

class UserModel extends BaseModel
{

	protected $tableName = "users";

	public function create($email, $password) {

		$statement = self::$db->prepare("INSERT INTO $this->tableName (email, password) VALUES ('$email', '$password')");
        $statement->execute();
	}
}