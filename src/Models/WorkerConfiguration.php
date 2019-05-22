<?php
namespace SharpWorker\Models {
	class WorkerConfiguration
	{
		/**
		 * @var string
		 */
		public $Alias = "";

		/**
		 * @var bool
		 */
		public $AutoStart = false;

		/**
		 * @var WorkerOptions
		 */
		public $Options = "";

		/**
		 * @var int
		 */
		public $StartDelay = 0;

		/**
		 * @var string
		 */
		public $WorkerType = "";
	}
}