<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourceNetspeed extends Datasource {

		public $dsParamROOTELEMENT = 'netspeed_service';

		public function about() {
			return array('name' => 'Netspeed Service',
						 'version' => '1.0',
						 'release-date' => '2010-09-04',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'me@josephdenne.com'),
						 'description' => 'Provides connection speed information from the Symphony services API'
				 		);
		}

		public function grab(&$param_pool) {

			$result = new XMLElement($this->dsParamROOTELEMENT);

			$driver = Frontend::instance()->ExtensionManager->create('netspeed_service');

			$speed = extension_netspeed_service::lookup();

			if(is_null($speed)) {

				$result->appendChild(new XMLElement('error', 'Unknown'));
			}
			else {

				$result = $speed;
			}

			return $result;
		}
	}

