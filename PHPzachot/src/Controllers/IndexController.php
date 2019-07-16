<?php
require_once __DIR__.'/../../src/Core/Controller.php';

class IndexController extends Controller
{
    public function indexAction(){
        $content='indexPage.php';
        $template='template.php';
        // $pictures = $this->pictureRepository->getAll();
        $data=[
            'title'=>'Главная',

        ];
        //вывели страничку $page
        echo $this->renderPage($content,$template, $data);
    }
}
