<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
//$obj=new Login();
//$this->view->form;
//      $form=new Application_form_Login();
//$this->view->form=$form();
//$email_id=$this->getRequest()->getPost('email');
//$password=$this->getRequest()->getPost('password');
//
// $Userdetails = new Application_Models_LoginDetails();
//             
//                $Userdetails->userData($username,$password);
    
     $form = new Twitter_Forms_Logup();

    $request = $this->getRequest();

    if ($request->isPost()) {

      if ($form->isValid($request->getPost())) {
          $username=$_POST['username']; 
         $password=$_POST['password'];
          $obj=new Twitter_Models_DbTable_User();
         $obj->selectRow($username, $password);

           // do something here to log in

       }

    } 

        $this->view->form = $form;
    }




}

