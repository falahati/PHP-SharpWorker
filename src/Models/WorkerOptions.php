<?php
namespace SharpWorker\Models {
	class WorkerOptions
	{
		use TMultiChildBaseClass;

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
		public $Options = null;

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