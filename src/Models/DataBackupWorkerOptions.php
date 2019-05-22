<?php
namespace SharpWorker\Models {
	class DataBackupWorkerOptions extends WorkerOptions
	{
		/**
		 * @var string
		 */
		public $Directory = "";

		/**
		 * @var int
		 */
		public $HourlyCleanup = -1;

		/**
		 * @var int
		 */
		public $HourlyInterval = -1;

		/**
		 * @var bool
		 */
		public $OnStart = false;
	}
}