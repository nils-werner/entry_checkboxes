<?php

	Class extension_entry_checkboxes extends Extension{
	
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initaliseAdminPageHead'
				)
			);
		}
                
		public function initaliseAdminPageHead($context) {
				Administration::instance()->Page->addElementToHead(new XMLElement("style", "table.selectable input {display: inline;}", array("type" => "text/css", "media" => "screen, projection")), 100100);
		}	
	}

?>
