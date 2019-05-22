<?php
namespace SharpWorker\Models {
    class LogRecord extends DataRecord
    {
		const Type_Debug = 0;
		const Type_Info = 1;
		const Type_Warning = 2;
		const Type_Error = 3;
		const Type_Fatal = 4;

		/**
		 * @var string
		 */
		public $Message = "";

		/**
		 * @var string
		 */
		public $Topic = "";

		/**
		 * @var int
		 */
		public $Type = -1;
    }
}