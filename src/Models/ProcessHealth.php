<?php
namespace SharpWorker\Models {
	class ProcessHealth
	{
		/**
		 * @var float
		 */
		public $AverageProcessorUsagePercentage = 0.0;

		/**
		 * @var int
		 */
		public $MemoryUsageBytes = -1;

		/**
		 * @var int
		 */
		public $PeakMemoryUsageBytes = -1;

		/**
		 * @var float
		 */
		public $ProcessorUsagePercentage = 0.0;

		/**
		 * @var string
		 */
		public $Started = "";
	}
}