<?php
//the basic structure
class basicModel {
	public $text;
	
	public function __construct() {
		$this->text = '<h1>Hello world!</h1>';
	}		
}
//what is shown to the user
class View {
	private $model;
	
	public function __construct(Model $model) {
		$this->model = $model;
}
	
	public function output() {
		return '<a href="mvc.php?action=linkclicked">' . $this->model->text . '</a>';
}
	
}

//updates model, changes the view
class Controller {
	private $model;

	public function __construct(Model $model) {
		$this->model = $model;
}

	public function linkClicked() {
		$this->model->text = 'Hello world: updated';
}
}


$model = new Model();
$controller = new Controller($model);
$view = new View($model);
	if (isset($_GET['action']))
	 	$controller->{$_GET['action']}();
		echo $view->output();
?>
//reference and study material: https://r.je/mvc-in-php.html //