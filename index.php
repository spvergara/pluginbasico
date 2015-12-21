<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package local
 * @subpackage modulo basico
 * @copyright 2015 Santiago Vergara Solar (contacto@santiagovergara.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


require_once (dirname ( __FILE__ ) . '../../../config.php'); // Require
require_once 'form.php'; //require

/*	If i like login require in this page  */
// require_login ();




#necessary
$baseurl = new moodle_url ( '/local/pluginbasico/index.php' );
$context = context_system::instance ();
$PAGE->set_context ( $context );
$PAGE->set_url ( $baseurl );
$PAGE->set_pagelayout ( 'standard' );

echo $OUTPUT->header ();

#code here {{


$form = new simplehtml_form();

$form -> display(); 



#}}

/* Standar form */
echo $OUTPUT->footer ();



