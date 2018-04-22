<?php

namespace hschulz\IOStreams;

use \hschulz\IOStreams\FileOutputStream;

/**
 *
 */
class ErrorOutputStream extends FileOutputStream {

    /**
     *
     */
    public function __construct() {
        parent::__construct('php://stderr');
    }
}
