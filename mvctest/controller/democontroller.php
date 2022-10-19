<?php 
 // controller/democontroller.php

 class DemoController

 {

     // private $data = 'Hello furzoom!';

     function index($param)

     {

     // echo 'hello world';

     require('view/view.php');

     require('model/model.php');

     $model = new Model();

     $view = new Index();

     $data = $model->getData($param);

     $view->display($data);

     }

 }// End of the class DemoController

 // End of file democontroller.php

?>