<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

/**
 *
 */
interface WriteMode
{
    /**
     * @var string
     */
    public const MODE_OVERWRITE_CREATE = 'w';

    /**
     * @var string
     */
    public const MODE_OVERWRITE_CREATE_BINARY = 'wb';

    /**
     * @var string
     */
    public const MODE_OVERWRITE_NOCREATE = 'x';

    /**
     * @var string
     */
    public const MODE_OVERWRITE_NOCREATE_BINARY = 'xb';

    /**
     * @var string
     */
    public const MODE_APPEND_CREATE = 'a';

    /**
     * @var string
     */
    public const MODE_APPEND_CREATE_BINARY = 'ab';
}
