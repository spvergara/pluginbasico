<?php
//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");

class simplehtml_form extends moodleform {
	//Add elements to form
	public function definition() {
		global $CFG;

		$mform = $this->_form; // Don't forget the underscore!

		$mform->addElement('text', 'email', get_string('email')); // Add elements to your form
		$mform->setDefault('email', 'Please enter email');        //Default value
		
#next
		
		$mform->addElement('text', 'nombre', get_string('nombre', 'local_pluginbasico')); // standar 
		$mform->addElement('text','apellido', get_string('apellido', 'local_pluginbasico'));
		$mform->addElement('text','rut', get_string('rut', 'local_pluginbasico'));  	
		
#button

		$mform->addElement('button', 'intro', get_string('boton', 'local_pluginbasico'));
		
		
#Quitando todos los errores		
				
	}
	//Custom validation should be added here
	function validation($data, $files) {
		
		$errors =  parent::validation($data, $files);
		
		return array();
	}
}