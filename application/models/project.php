<?php
class Project extends Eloquent {
	public function screens(){
		return $this->has_many('Screen');
	}
}