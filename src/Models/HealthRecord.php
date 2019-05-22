<?php
namespace SharpWorker\Models {
	class HealthRecord extends DataRecord {
		/**
		 * @var int
		 */
		public $DatabaseSize = -1;

		/**
		 * @var DriveHealth[]
		 */
		public $Drives = [];

		/**
		 * @var bool
		 */
		public $IsBackingUp = false;

		/**
		 * @var DriveHealth
		 */
		public $MainDrive = "";

		/**
		 * @var MemoryHealth
		 */
		public $Memory = "";

		/**
		 * @var ProcessHealth
		 */
		public $Process = "";
	}
}