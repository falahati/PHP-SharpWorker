<?php
namespace SharpWorker {
	class SharpWorkerClient
	{
		public $ServerAddress = "";
		public $OAuthToken = "";

		function __construct($address, $token) {
			$this->ServerAddress = $address;
			$this->OAuthToken = $token;
		}

		public function GetAPI()
		{
			if (filter_var($this->ServerAddress, FILTER_VALIDATE_URL) === false) {
				return false;
			}

			if (!trim($this->OAuthToken)) {
				return false;
			}

			return new \RestClient([
				'base_url' => rtrim($this->ServerAddress, '/'),
				'headers'  =>
					[
						'Authorization' => 'Bearer ' . $this->OAuthToken
					]
			]);
		}
	}
}
