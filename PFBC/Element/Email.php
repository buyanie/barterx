<?php
namespace PFBC\Element;

class Email extends Textbox {
	protected $_attributes = array("type" => "email", "autocomplete"=> "off");

	public function render() {
		$this->validation[] = new \PFBC\Validation\Email;
		parent::render();
	}
}
