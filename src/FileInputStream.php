<?php

namespace hschulz\IOStreams;

use function \fclose;
use function \fopen;
use function \fread;

/**
 *
 */
class FileInputStream extends AbstractInputStream
{

    /**
     *
     * @var string
     */
    protected $mode = ReadModes::MODE_READ;

    /**
     *
     * @var string
     */
    protected $file = '';

    /**
     *
     * @var ressource
     */
    protected $handle = null;

    /**
     *
     * @param string $file
     * @param string $mode
     */
    public function __construct(string $file, string $mode = ReadModes::MODE_READ)
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
     * @return mixed
     */
    public function read()
    {
        return fread($this->handle, filesize($this->file));
    }
}
