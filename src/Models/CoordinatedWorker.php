<?php
namespace SharpWorker\Models {
    class CoordinatedWorker
    {
		const Status_Stopped = 0;
		const Status_Starting = 1;
		const Status_Running = 2;
		const Status_Stopping = 3;

		/**
		 * @var string
		 */
		public $Id = "";

		/**
		 * @var bool
		 */
		public $IsCustomizable = false;

		/**
		 * @var bool
		 */
		public $DoesProvideWebApi = false;

		/**
		 * @var bool
		 */
		public $IsMissing = false;

		/**
		 * @var WorkerScheduledAction[]
		 */
		public $ScheduledActions = [];

		/**
		 * @var int
		 */
		public $Status = -1;
    }
}