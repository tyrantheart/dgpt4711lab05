<?php
namespace App\Controllers;

class Travel extends BaseController
{
    public function index()
    {
        // connect to the model
    $model = new \App\Models\Places();
    $headings = $model->fields;
    $data = $model->findAll();
   
     $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     foreach ($data as $key => $value) {
     $table->addRow([$value->id, $value->name, $value->description,$value->link]);
}
     $view = \Config\Services::renderer();
     $output = $view->render('top') .
             
     $table->generate().
     $view->render('bottom');

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