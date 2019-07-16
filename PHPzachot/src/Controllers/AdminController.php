<?php
require_once __DIR__.'/../../src/Core/Controller.php';

class AdminController extends Controller {
  public function addAction(){
        var_dump($services); die;

        $services = new ServicesModel();


        $data=[
            'services' => $services->addArticles($_POST['section_id'], $_POST['article']),
        ];
          echo $this->renderPage($content,$template, $data);
      }
      public function indexAction(){
          $content='Admin.php';
          $template='template.php';
          $data=[


          ];
          //вывели страничку $page
          echo $this->renderPage($content,$template, $data);
      }
  }


 ?>
