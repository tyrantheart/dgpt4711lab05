<?php
namespace App\Controllers;

class Travel extends BaseController
{
    public function index()
    {
        // connect to the model
    $places = new \App\Models\Places();
        // retrieve all the records
    $records = $places->findAll();

     $view = \Config\Services::renderer();
     $output = $view->render('top') .
     $view->render('content') .
     $view->render('bottom');
     $table = new \CodeIgniter\View\Table();
     $table->setHeading('id', 'name', 'description','link');

     
    foreach ($records as $key=>$id){ 
        $table->addRow(['1', 'Hong Kong', 'A special administrative region on the eastern side of the Pearl River estuary in southern China.','http://www.discoverhongkong.com/eng/index.jsp']);
    }
    foreach ($records as $key=>$name){ 
        
    }
    foreach ($records as $key=>$description){ 
        
    }
    foreach ($records as $key=>$link){ 
        
    }
     $content =  $table->generate(); //??
    return $output;
    }
    public function showme($id)
    {
        // connect to the model
      $places = new \App\Models\Places();
        // retrieve all the records
      $record = $places->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('oneplace');
      
    }
}