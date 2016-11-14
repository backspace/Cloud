<?php

namespace Ajax\semantic\components\search;

abstract class AbstractSearchResult {

	public function fromDatabaseObjects($objects, $function) {
		if (isset($objects)) {
			foreach ( $objects as $object ) {
				$this->fromDatabaseObject($object, $function);
			}
		}
		return $this;
	}

	protected abstract function fromDatabaseObject($object, $function);
}