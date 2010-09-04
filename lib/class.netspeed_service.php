<?php

	Class _netspeed {

		public static function lookup($ip) {

			$ch = curl_init();

			// Notice: the request back to the Symphony services API includes your domain name
			// and the version of Symphony that you're using

			$version = Frontend::instance()->Configuration->get('version', 'symphony');
			$domain = $_SERVER[SERVER_NAME];

			curl_setopt($ch, CURLOPT_URL, "http://symphony-cms.net/_netspeed/1.0/?symphony=".$version."&domain=".$domain."&ip=".$ip);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$speedinfo = curl_exec($ch);
			$info = curl_getinfo($ch);

			curl_close($ch);

			if ($speedinfo === false || $info['http_code'] != 200) {

				return;
			}
			else {

				$speedinfo = explode(',', $speedinfo);
			}

			$result = new XMLElement("netspeed");

			$included = array(
				'id',
				'connection',
				'error'
			);

			$i = 0;

			foreach($included as $netspeed) {

				$result->appendChild(new XMLElement($netspeed, $speedinfo[$i]));
				$i++;
			}

			return $result;
		}
	}

