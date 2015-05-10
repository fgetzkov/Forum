<?php

class QuestionController extends BaseController {
    protected $post;
    protected $answers;
    public function add()
    {
        $this->authorize();

    	$question = new QuestionModel();
    	if(isset($_POST['Submit'])) {
    		$Title = htmlentities(trim($_POST['title']));
    		$Text = htmlentities(trim($_POST['text']));
    		$Category = htmlentities(trim($_POST['category']));
    		$Tags = htmlentities(trim($_POST['tags']));
            if ($Title == '' || $Text == '' || $Category == '' || $Tags == '') {
            return false;
        }
    		$question->add($Title, $Text, $Category, $Tags, $_SESSION['user']['id']);
    		//TODO : Add validation
            $this->redirect("home", "index");
    	}
    }

    public function preview($id)
    {
        $question = new QuestionModel();
        //$this->authorize();
        $post_id = htmlentities((int)$id);
        if(!$post_id) {
            $this->redirect("home", "index");
        }
        $this->post = $question->getById($post_id);

        $this->answers = $question->findAnswers($post_id);
        $this->renderView(__FUNCTION__);
    }

    public function addAnswer($id) {

        $question = new QuestionModel();
        if(isset($_POST['Submit'])) {
            if($this->isLoggedIn()){
                 $username = $_SESSION['user']['email'];
             }
             else{
                 $username = htmlentities( $_POST['userName']);
             }
            $post_id = (int) $id;
            $Text = htmlentities(trim($_POST['textArea']));
            $dateTime = (new DateTime())->format('Y-m-d H:i:s');
            $question->addAnswer($Text, $post_id, $dateTime, $username);
            $this->redirect("question", "preview", array($post_id));
    }
  }
}

