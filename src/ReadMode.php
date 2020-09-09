<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

/**
 *
 */
interface ReadMode
{
    /**
     *
     * @var string
     */
    public const MODE_READ = 'r';

    /**
     *
     * @var string
     */
    public const MODE_READ_BINARY = 'rb';

    /**
     * @var string
     */
    public const MODE_READ_WINDOWS_TRANSLATION = 'rf';
}
