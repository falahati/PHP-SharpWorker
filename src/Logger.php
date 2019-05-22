<?php
namespace SharpWorker {
	class Logger
	{
		/**
		 * @return Models\LogRecord[]
		 */
		static function GetLogRecords(SharpWorkerClient $client) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Logger");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}

		/**
		 * @return Models\LogRecord[]
		 */
		static function GetWorkerLogHistoryRecords(SharpWorkerClient $client, string $worker) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Logger/Workers/" . rawurlencode($worker) . "/History");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}

		/**
		 * @return Models\LogRecord[]
		 */
		static function GetWorkerLogRecords(SharpWorkerClient $client, string $worker) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Logger/Workers/" . rawurlencode($worker) . "/Records");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}

		/**
		 * @return string[]
		 */
		static function GetWorkers(SharpWorkerClient $client) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Logger/Workers");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}
	}
}