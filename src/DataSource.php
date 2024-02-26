<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

namespace Proginow\Db;


interface DataSource {

	/**
	 * Converts this instance to a DSN
	 *
	 * @return Dsn
	 */
	public function toDsn();

}

?>