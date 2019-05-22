<?php
namespace SharpWorker\Models {
	class WorkerScheduledAction
	{
		const Status_Stopped = 0;
		const Status_Starting = 1;
		const Status_Sleeping = 2;
		const Status_Running = 3;
		const Status_Stopping = 4;

		/**
		 * @var int
		 */
		public $Executions = -1;

		/**
		 * @var string
		 */
		public $Interval = "";

		/**
		 * @var string
		 */
		public $LastRun = "";

		/**
		 * @var string
		 */
		public $NextRun = "";

		/**
		 * @var int
		 */
		public $Status = -1;

		/**
		 * @var string
		 */
		public $Name = "";
	}
}