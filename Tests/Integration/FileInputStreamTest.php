<?php

declare(strict_types=1);

namespace Hschulz\IOStreams\Tests\Integration;

use function file_put_contents;
use Hschulz\IOStreams\FileInputStream;
use Hschulz\IOStreams\ReadMode;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class FileInputStreamTest extends TestCase
{
    /**
     * @var string
     */
    private const TEST_TEXT = "this is an integration test\ncontaining a line feed";

    /**
     *
     * @var string
     */
    protected string $file = '';

    protected function setUp(): void
    {
        vfsStream::setup('integration');

        $this->file = vfsStream::url('integration/config.json');

        file_put_contents($this->file, self::TEST_TEXT);
    }

    protected function tearDown(): void
    {
        $this->file = '';
    }

    public function testCanReadFile(): void
    {
        $file = new FileInputStream($this->file, ReadMode::MODE_READ);

        $this->assertTrue($file->open());
        $this->assertEquals(self::TEST_TEXT, $file->read());
        $this->assertTrue($file->close());
    }

    public function testCanReadFileBinaryMode(): void
    {
        $file = new FileInputStream($this->file, ReadMode::MODE_READ_BINARY);

        $this->assertTrue($file->open());
        $this->assertEquals(self::TEST_TEXT, $file->read());
        $this->assertTrue($file->close());
    }

    public function testCanReadFileWindowsTranslateMode(): void
    {
        $self = file_get_contents(__FILE__);

        $file = new FileInputStream(__FILE__, ReadMode::MODE_READ_WINDOWS_TRANSLATION);

        $this->assertTrue($file->open());
        $this->assertEquals($self, $file->read());
        $this->assertTrue($file->close());
    }

    public function testDoesNotErrorOnInvalidFile(): void
    {
        $file = new FileInputStream('');

        $this->assertFalse($file->open());
        $this->assertEmpty($file->read());
        $this->assertTrue($file->close());
    }
}
