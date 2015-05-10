<?php

class HomeController extends BaseController {
	protected $categories;
	private $questionModel;
    protected $posts;

    public function index()
    {
    	global $categories;
    	$this->categories = $categories;
    	$this->questionModel = new QuestionModel();
        $this->posts = $this->questionModel->getAll();
    }
}
