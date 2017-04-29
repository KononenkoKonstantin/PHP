<?php
    class Car{
        protected $_color;
        protected $_distance = 0;
        protected $_model;
        protected $_maxSpeed;
        protected $_passengers;
        protected $_gas = 0;
        protected $_tankVolume = 45;
        protected $_engineStatus = false;
        protected $_messenger = null;
        
        /**
        * Car constructor
        *
        *   @param string $model
        *  @param string $color
        *   @param integer $speed
        *   @param integer $passengers
        */
        
        public function __construct($model, $color, $speed, $passengers){
            $this->_color = $color;
            $this->_model = $model;
            $this->_maxSpeed = $speed;
            $this->_passengers = $passengers;
            $this->_messenger = new Messenger();
        }
        /**
         * @param integer $dist
         * @param integer $speed
         */
        public function run($dist, $speed){
            if($this->_engineStatus){
                echo '<br>Start engine first!';
                return;
            }
            if($dist * (6.8/100) > $this->_tankVolume){
                echo '<br>Топлива не хватит!';
            }
            if ($speed < $this->_maxSpeed){
                $this->_distance += $dist;
                $this->_tankVolume -= $dist * (6.8/100);
                echo '<br>Вы проехали'
            }else{
                echo '<br>Max speed is:'.$this->_maxSpeed;
            }
        }
        public function startEngine(){
            if($this->_tankVolume <= 0){
                $this->_messenger->showMessage('Бак пуст');
                //echo '<br>Бак пуст';
                return;
            }
            $this->_engineStatus = true;
        }
        
        public function stopEngine(){
            $this->_engineStatus = false;
        }

        public function addGas($l){
            $this->_gas += $l;
        }
       
    }

class Bus extends Car{
    protected $_tankVolume = 90;
}

$bus = new Bus('VW', 'white', '120', '9');
$bus->startEngine();
$bus->run(dist:50, speed: 90);
