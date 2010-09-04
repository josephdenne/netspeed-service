<?php

	Class extension_netspeed_service extends Extension {

		public function about() {

			return array('name' => 'Netspeed Service',
						 'version' => '1.0',
						 'release-date' => '2010-09-04',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'me@josephdenne.com')
				 		);
		}

		public static function lookup($ip=NULL) {

			require_once('lib/class.netspeed_service.php');

			if(is_null($ip)) $ip = $_SERVER['REMOTE_ADDR'];

			return _netspeed::lookup($ip);
		}
	}

