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
     $linkedThing = anchor("Travel/showme/$value->id","want to see more?");
     $table->addRow([$linkedThing, $value->name, $value->description,$value->link]);
}
     $view = \Config\Services::renderer();
     $output = $view->render('top') .
             
     $table->generate().
     $view->render('bottom');

       return $output;
    }
    public function showme($id)
    {
        helper('form');
      $open = form_open('', 'id="open"');
      $open .= form_submit('mySubmit','submit');
        // connect to the model
      $places = new \App\Models\Places();
        // retrieve all the records
      $record = $places->find($id);
      // get a template parser
      $open .= form_close('', 'id="close"');
      return $open;
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('oneplace');
      
      
    }
}