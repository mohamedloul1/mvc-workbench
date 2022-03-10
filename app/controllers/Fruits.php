<?php
class Fruits extends Controller {
    public function __construct() {
        $this->fruitModel = $this->model('fruit');


    }

    public function index() {
        
        $data = [
            'title' => 'Home page',
            'description' => 'Een extra pagina gemaakt, klik op (fruits.view) knoop om de tapel te kunnen zien '

        ];

        $this->view('Fruits/index', $data);
    }

    public function fruits_view(){
        $fruit = $this->fruitModel->getFruits();
        $data = [
            'fruit' => $fruit,
        ];
    
        $this->view('Fruits/fruits_view', $data);
    }
}
