<?php

class QuestionController extends BaseController {

    public function add()
    {
    	$question = new QuestionModel();
    	if(isset($_POST['Submit'])) {
    		$Title = htmlentities(trim($_POST['title']));
    		$Text = htmlentities(trim($_POST['text']));
    		$Category = htmlentities(trim($_POST['category']));
    		$Tags = htmlentities(trim($_POST['tags']));
    		$question->add($Title, $Text, $Category, $Tags);
    		//TODO : Add validation
    	}
    }
}