<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Twitter_Forms_Logup extends Zend_Form
{
   public function init()
    {
       
//          $this->setName("login");

        $this->setMethod('post');

             

        $this->addElement('text', 'username', array(

            'filters'    => array('StringTrim', 'StringToLower'),

            'validators' => array(

                array('StringLength', false, array(0, 50)),

            ),

            'required'   => true,

            'label'      => 'UserName:',

        ));



        $this->addElement('password', 'password', array(

            'filters'    => array('StringTrim'),

            'validators' => array(

                array('StringLength', false, array(0, 50)),

            ),

            'required'   => true,

            'label'      => 'Password:',

        ));



        $this->addElement('submit', 'login', array(

            'required' => false,

            'ignore'   => true,

            'label'    => 'Login',

        ));        

    }
}
