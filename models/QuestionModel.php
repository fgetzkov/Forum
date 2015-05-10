<?php
class QuestionModel extends BaseModel
{

	protected $tableName = "posts";

	public function add($title, $text,$category,$tags, $author) {
		self::$db->query("INSERT INTO $this->tableName (title,`text`, category,tags, user_id) VALUES ('$title', '$text','$category','$tags', '$author')");
	}
	public function getAll() {
        $statement = self::$db->query("SELECT p.*, u.email as author FROM posts p LEFT JOIN users u ON (p.user_id = u.id) ORDER BY p.id DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);

    }

    public function getById($id) {
    	$this->updateCounter($id);
        $statement = self::$db->prepare("SELECT p.*, u.email as author FROM posts p LEFT JOIN users u ON (p.user_id = u.id) WHERE ? = p.id LIMIT 1");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->get_result()->fetch_assoc();
        //return $statement->fetch_assoc();

    }
    public function findAnswers($id){
        $statement = self::$db->prepare("
         SELECT answers.userName, answers.date, answers.text
         FROM answers
         WHERE question_id = ?
         ORDER BY answers.date ASC
       ");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    public function addAnswer($text, $id, $date, $username) {
        $statement = self::$db->prepare("INSERT INTO answers (`text`, `question_id`, `date`, `userName`) VALUES (?,?,?,?)");
    	$statement->bind_param("siss", $text, $id, $date, $username);
        $statement->execute();
        return $statement->affected_rows > 0;
    }
    public function updateCounter($id)
    {
        $stmt = self::$db->query("UPDATE posts SET visits = visits+1 WHERE id = '$id'");
    }
}
