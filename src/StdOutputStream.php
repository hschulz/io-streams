<?php


namespace hschulz\IOStreams;

use \hschulz\IOStreams\FileOutputStream;

/**
 *
 */
class StdOutputStream extends FileOutputStream {

    /**
     *
     */
    public function __construct() {
        parent::__construct('php://stdout');
    }
}
