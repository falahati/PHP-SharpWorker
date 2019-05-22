<?php
namespace SharpWorker {
	class Coordinator
	{
		/**
		 * @return Models\CoordinatedWorker[]
		 */
		static function GetWorkers(SharpWorkerClient $client) : array {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->get("api/Coordinator/Workers");
				if ($response->info->http_code == 200) {
					$result = $response->decode_response();
					return $result;
				}
			}
			return null;
		}

		static function DeleteWorker(SharpWorkerClient $client, string $workerId) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->delete("api/Coordinator/Workers/" . $workerId);
				return $response->info->http_code == 200;
			}
			return false;
		}

		static function AddWorker(SharpWorkerClient $client, Models\WorkerConfiguration $configuration) : string {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->post("api/Coordinator/Workers", json_encode($configuration), ['Content-Type' => 'application/json']);
				if ($response->info->http_code == 200) {
					return $response->response;
				}
			}
			return null;
		}

		static function ModifyWorkerConfigurations(SharpWorkerClient $client, string $workerId, Models\WorkerConfiguration $configuration) : string {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->put("api/Coordinator/Workers/" . $workerId, json_encode($configuration), ['Content-Type' => 'application/json']);
				if ($response->info->http_code == 200) {
					return $response->response;
				}
			}
			return null;
		}

		static function Kill(SharpWorkerClient $client) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->delete("api/Coordinator");
				return $response->info->http_code == 200;
			}
			return false;
		}

		static function RestartWorker(SharpWorkerClient $client, string $workerId) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->post("api/Coordinator/Workers/" . $workerId . "/Restart");
				return $response->info->http_code == 200;
			}
			return false;
		}

		static function StartWorker(SharpWorkerClient $client, string $workerId) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->post("api/Coordinator/Workers/" . $workerId . "/Start");
				return $response->info->http_code == 200;
			}
			return false;
		}

		static function StopWorker(SharpWorkerClient $client, string $workerId) : bool {
			$api = $client->GetAPI();
			if ($api) {
				$response = $api->post("api/Coordinator/Workers/" . $workerId . "/Stop");
				return $response->info->http_code == 200;
			}
			return false;
		}
	}
}