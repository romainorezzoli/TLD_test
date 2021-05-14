<?php
	class NumberView {
		
		private $_number;
		
		public function __construct(Number $number) {
			$this->_number = $number;
		}
		
		public function printOut() {
			$out = '<div>' . $this->_number->get() . '</div>';
			
			return $out;
		}
	}
?>