<?php
namespace SharpWorker {
	class DataBackup
	{
		/**
		 * @return Models\DataBackupStatus[]
		 */
		static function GetBackups(SharpWorkerClient $client) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/DataBackup");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}

		/**
		 * @return bool
		 */
		static function IsBackingUp(SharpWorkerClient $client) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/DataBackup/IsBackingUp");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result == true;
				}
			}
			return false;
		}

		/**
		 * @return bool
		 */
		static function StartBackup(SharpWorkerClient $client) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->post("api/DataBackup/StartBackup");
				return $response->info->http_code == 200;
			}
			return false;
		}
	}
}