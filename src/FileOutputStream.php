<?php

namespace hschulz\IOStreams;

use \fclose;
use \fopen;
use \fwrite;

/**
 *
 */
class FileOutputStream extends AbstractOutputStream
{

    /**
     *
     * @var string
     */
    protected $file = '';

    /**
     *
     * @var string
     */
    protected $handle = null;

    /**
     *
     * @var string
     */
    protected $mode = WriteModes::MODE_OVERWRITE_CREATE;

    /**
     *
     * @param string $file
     * @param string $mode
     */
    public function __construct(string $file, string $mode = WriteModes::MODE_OVERWRITE_CREATE)
    {
        parent::__construct();
        $this->file   = $file;
        $this->mode   = $mode;
        $this->handle = null;
    }

    /**
     *
     * @return bool
     */
    public function close(): bool
    {
        return fclose($this->handle);
    }

    /**
     *
     * @return bool
     */
    public function open(): bool
    {
        if (($handle = fopen($this->file, $this->mode)) !== false) {
            $this->handle = $handle;
        }

        return (bool) $this->handle;
    }

    /**
     *
     * @param mixed $data
     * @return int
     */
    public function write($data): int
    {
        return fwrite($this->handle, $data);
    }
}
