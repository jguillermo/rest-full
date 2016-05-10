<?php

namespace AppRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;


use Zend\View\Model\JsonModel;

class AppRestController extends AbstractRestfulController
{
    public $data;
    public function __construct() {
        $this->data=array(
			array('id'=>5,'name'=>'a'),
			array('id'=>6,'name'=>'b'),
			array('id'=>7,'name'=>'c'),
        );
    } 

    public function getList()
    {    
        return new JsonModel(array(
            'data' => $this->data,
        ));
    }

    
    public function get($id)
    {
        $this->response->setStatusCode(200);

        return array(
            'content' => $this->data[$id]
        );
    }

    public function delete($id)
    {
        $this->response->setStatusCode(200);
        unset($this->data[$id]);
        return array(
            'content' => 'ok'
        );
    }

    public function update($id, $data)
    {
        $this->response->setStatusCode(200);
        $this->data[$id]=$data;
        return array(
            'content' => 'ok'
        );
    }
   
}
