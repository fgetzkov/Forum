<?php
class QuestionModel extends BaseModel
{

	protected $tableName = "posts";

	public function add($title, $text,$category,$tags) {
		self::$db->query("INSERT INTO $this->tableName (title,`text`, category,tags) VALUES ('$title', '$text','$category','$tags')");
	}
}