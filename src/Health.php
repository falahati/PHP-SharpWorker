<?php
namespace SharpWorker {
	class Health
	{
		/**
		 * @return Models\HealthRecord
		 */
		static function GetCurrent(SharpWorkerClient $client) : Models\HealthRecord {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Health");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}
	}
}