<?php
class Twitter_Forms_Login extends Zend_Form
{
   public function init()
    {
       
     $this->setName('login')
           ->setAction('/user/login')
           ->setMethod('post');

      /*$name = $this->createElement('text', 'name');
                      
      
      $email  = $this->createElement('text', 'email');
                          
     $username  = $this->createElement('text', 'username');
      $password  = $this->createElement('password', 'password');
     
      $submit  = $this->createElement('submit', 'submit');*/
                                                   
              //$submit->class = "login-submit-btn";
         //$this->addElements(array($name,$email,$username,$password,$submit));
         //$this->addElements(array($name,$username,$email,$password,$submit));
       //$this->setAttrib('action','save');
       // $this->setMethod('post');
 	/*$this->addElement('text','fullname',
                array(
                        'label'=>'FullName'
                        ) 
                );
	 $this->addElement('text','email',
                array(
                        'label'=>'EmailId'
                        ) 
                 );
        $this->addElement('text','username',
                array(
                        'label'=>'Username'
                        )
        );
        $this->addElement('password','password',
                array(
                        'label'=>'Password'
                        )        
        );
        $this->addElement('Submit','Submit');*/
           $name = $this->createElement('text', 'name')
                       ->removeDecorator('label')
                       ->removeDecorator('HtmlTag')
                       ->addFilter('stringTrim')
                       ->setOptions(array('placeholder'=>'name'))
                       ->setRequired(true)
                      ->setErrorMessages(array("name field must not be empty"));
           $email = $this->createElement('text', 'email')
                       ->removeDecorator('label')
                       ->removeDecorator('HtmlTag')
                       ->addFilter('stringTrim')
                       ->setOptions(array('placeholder'=>'email'))
                       //->addValidator('EmailAddress')
                       ->addValidator('notEmpty',true,array('messages'=>'Email must not be empty'))
                       ->setRequired(true)
                       ->setErrorMessages(array("Please enter a valid email address"));
                       
      $username = $this->createElement('text', 'username')
                       ->removeDecorator('label')
                       ->removeDecorator('HtmlTag')
                       ->addFilter('stringTrim')
                       ->setOptions(array('placeholder'=>'username'))
                       ->setRequired(true)
                       ->addValidator('notEmpty',true,array('messages'=>'Username must not be empty'));
      $password= $this->createElement('password', 'password')
                       ->removeDecorator('label')
                       ->removeDecorator('HtmlTag')
                       ->addFilter('stringTrim')
                       ->setOptions(array('placeholder'=>'password'))
                       ->setRequired(true)
                       ->addValidator('notEmpty',true,array('messages'=>'Password must not be empty'));
      
      $this->addElements(array($name,$username,$email,$password));
      $this->addElement('Submit','Submit');

    }
   
}



