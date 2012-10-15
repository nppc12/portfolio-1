<?php
class Screen extends Eloquent {
	public function project(){
		return $this->belongs_to('Project');
	}
}