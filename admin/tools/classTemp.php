<?php
    
	class Temp{
        
		public $inclusions = array();
		public $tCode;
		private $reg = '/%([a-zA-Z0-9_-]+)%/i';
        
		private function parse($text){
			preg_match_all($this->reg, $text, $res);
			return $res[1];
		}
        
		public function t($text){
			$this->tCode = $text;
			$this->inclusions = $this->inclusions + $this->parse($text);
			foreach($this->inclusions as $value){
				$this->$value = new self();
			}
			return $this->tCode;
		}
        
		public function f($file_link){
			return $this->t(file_get_contents($file_link));
		}
        
		public function at($text){
			$this->tCode .= $text;
			$this->inclusions = $this->inclusions + $this->parse($text);
			foreach($this->inclusions as $key => $value){
				$this->$value = new self();
			}
			return $this->tCode;
		}
        
		public function af($link){
			if(file_exists($link)){
				return $this->at(file_get_contents($link));
			}
			else return false;
		}
        
		public function map(){
			$res = '<ol>';
			foreach($this->inclusions as $value){
				$res .= '<li>'.$value.$this->$value->map().'</li>';
			}
			$res .= '</ol>';
			return $res;
		}
        
		public function modt($text, $data){
			foreach($data as $value){
				$text = preg_replace($this->reg, $value, $text, 1);
			}
			$this->tCode = $text;
		}
        
		public function amodt($text, $data){
			foreach($data as $value){
				$text = preg_replace($this->reg, $value, $text, 1);
			}
			$this->tCode .= $text;
		}
        
		public function modf($link, $data){
			if(!file_exists($link)) return false;
			else $text = file_get_contents($link);
			foreach($data as $value){
				$text = preg_replace($this->reg, $value, $text, 1);
			}
			$this->tCode = $text;
		}
        
		public function amodf($link, $data){
			if(!file_exists($link)) return false;
			else $text = file_get_contents($link);
			foreach($data as $value){
				$text = preg_replace($this->reg, $value, $text, 1);
			}
			$this->tCode .= $text;
		}
        
		public function build(){
			foreach($this->inclusions as $value){
				$this->$value->build();
				$this->tCode = str_replace('%'.$value.'%', $this->$value->tCode, $this->tCode);
			}
			return $this->tCode;
		}
        
	}
?>