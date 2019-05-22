<?php
namespace SharpWorker\Models {
	class DriveHealth
	{
		/**
		 * @var int
		 */
		public $FreeSpaceBytes = -1;

		/**
		 * @var int
		 */
		public $TotalSpaceBytes = -1;

		/**
		 * @var string
		 */
		public $Name = "";

		/**
		 * @var string
		 */
		public $Path = "";
	}
}