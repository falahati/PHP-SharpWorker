<?php
namespace SharpWorker\Models {
	class DataBackupStatus
	{
		const State_Done = 0;
		const State_Ongoing = 1;
		const State_Abandoned = 2;
		const State_Failed = 3;
		const State_Archived = 4;

		/**
		 * @var string
		 */
		public $DateTime = "";

		/**
		 * @var string
		 */
		public $FileName = "";

		/**
		 * @var int
		 */
		public $FileSize = -1;

		/**
		 * @var int
		 */
		public $State = -1;
	}
}