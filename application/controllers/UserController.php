<?php
class UserController extends Zend_Controller_Action
{
 function loginAction(){
     
   $twitter = new Twitter_Forms_Login(); 
 $this->view->login = $twitter;
 
     $formData = $this->getRequest()->getPost();
     
     if($this->getRequest()->isPost() && $twitter->isValid($formData))
     {

         $name=$_POST['name'];
         $email=$_POST['email']; 
    $username=$_POST['username']; 
    $password=$_POST['password'];
    $data = array();
    $data['name'] = $name;
    $data['user_id'] = 5;
    //Twitter_Models_DbTable_User::getInstance()
    //
           $user=Twitter_Models_DbTable_User::getInstance();
                $newrow =$user->createRow();
                $newrow->name = $name;
                $newrow->email = $email;
                $newrow->username = $username;
                $newrow->password = $password;
              // $newRow->password=sha1($formData['password']);

                $newrow->save();
                //echo "you are login successfully";
                //return true;
                //$this->_helper->redirector('index', 'index');
               
                $this->_redirect('/');
           
                //echo "<pre>"; print_R($_SERVER);die;
                
           }
           
           
       function logupAction(){
           $twitter = new Twitter_Forms_Logup();
           $this->view->logup = $twitter;
           $formData = $this->getRequest()->getPost();
     
     if($this->getRequest()->isPost() && $twitter->isValid($formData))
           {
         $username=$_POST['username']; 
         $password=$_POST['password'];
         $obj=new Twitter_Models_DbTable_User();
         $obj->selectRow($username, $password);
           }
     }
 
       }    

     
    
     
     
     
     
     
     
     
     
     
     
     
 }
 
 