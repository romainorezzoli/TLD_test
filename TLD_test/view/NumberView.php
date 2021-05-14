<?php
	class NumberView {
		
		private $_number;
		
		public function __construct(Number $number) {
			$this->_number = $number;
		}
		
		public function printOut($in) {
			$out = '<div>' . $in . '</div>';
			
			return $out;
		}
	}
?>