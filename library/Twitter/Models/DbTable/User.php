<?php
class Twitter_Models_DbTable_User extends Zend_Db_Table_Abstract
{

    protected $_name = 'twit_login';
    private static $_instance;
    
      /**
     * Function to save a comment
     * @param array $options 
     */
    public function insertRow($options)
    {
        echo "asd";die;
//        $select = $this->select();
//
//        $row = $this->createRow();
//
//        $row->user_id = $options['user_id'];
//        $row->name = $options['name'];
//        $row->username = $options['name'];
//        $row->password = $options['name'];
//       $row->save();
        

        
    }


    public function selectRow($username, $password) 
    {
      $db = Zend_Db_Table::getDefaultAdapter();
      $temp1 = new Zend_Db_Select($db);
     $temp = $db->select()->from( 'twit_login' );
      $t=$temp1->fetchAll($temp);
      
      
      $t[1];
    }
    public function check($email, $username)
    {
        Zend_Db_Table::getDefaultAdapter();
      //$temp1 = new Zend_Db_Select($db);
     $select = $this->select()->from($this->_name)
             ->where('username=?',$username)
             ->where('email=?',$email);

      $t=$this->fetchRow($select);
     

 if (count($t)!= 0)
      return FALSE;
 else 
     return TRUE;

      
    }
    
     /**
     * Fuction to get class instance
     * 
     */
    public static function getInstance()
     {
        
        if( !isset(self::$_instance) ){
            $instance = new self();
            self::$_instance = $instance;
        }
            return self::$_instance;
     }
}

