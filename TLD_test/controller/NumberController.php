<?php
	class NumberController {
		
		private $_number;
		
		public function __construct(Number $number) {
			$this->_number = $number;
		}
		
		public function calc() {
			if(is_integer($this->_number->get() / 3))
				return 'TLD';
			elseif(is_integer($this->_number->get() / 5)) {
				return 'PHP';
			}
			if(is_integer($this->_number->get() / 3) or is_integer($this->_number->get() / 5)) {
				return 'TLD_PHP';
			}
			else {
				return $this->_number->get();
			}
		}
	}
?>