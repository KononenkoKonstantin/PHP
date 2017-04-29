<?php
    class Car {
        public $color = 'red';
        private $_engine = '1.6';
        protected $_model = 'vaz';
        protected $_engineStatus = false;
        protected $_data = [];

        public function __construct($data) {
            foreach ($data as $key => $value){
                $this->$key = $value;
            }

 //           $this->color = $data['color'];
 //           $this->_engine = $data['_engine'];

        }
        public  function startEngine(){
            $this->_engineStatus = true;
            echo '<br>Engine start!';
        }
        
        public function __clone(){
            echo 'clone';
        }
        
        public function __destruct(){
            
        }
        
        public function getEngine(){
            
        }
        
        public function __get($key){
            return this->_data['key'];
        }
        
        public function __set($key, $value){
            $this->$key = $value;
        }
    }


    //$a = new Car();

    $a = new Car(['color' => 'red', '_model' => 'toyota', '_engine' => '2.0']);
   // $b = new Car(['color' => 'black', '_model' => 'mazda', '_engine' => '2.3']);
    var_dump($a);
    //var_dump($b);

    //$a->startEngine();

    //$b = $a;
    
    $a->_engine = 'asd';
