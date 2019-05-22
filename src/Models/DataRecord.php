<?php
namespace SharpWorker\Models {
    class DataRecord
    {
		use TMultiChildBaseClass;

		/**
		 * @var string
		 */
		public $CreatedDateTime = "";

		/**
		 * @var int
		 */
		public $CreatedTimestamp = -1;

		/**
		 * @var string
		 */
		public $DataTopicId = "";

		/**
		 * @var string
		 */
		public $DataTopicSubject = "";

		/**
		 * @var string
		 */
		public $LastUpdateDateTime = "";

		/**
		 * @var int
		 */
		public $LastUpdateTimestamp = -1;
		
		/**
		 * @var string
		 */
		public $Id = "";
    }
}