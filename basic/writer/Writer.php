<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 10:52
 */

namespace app\writer;

use app\writer\adapters\AdapterInterface;

/**
 * Class Writer
 *
 * @package app\writer
 */
class Writer implements WriterInterface
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Writer constructor.
     *
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return bool
     */
    public function write(string $path, array $data): bool
    {
        return file_put_contents($path, $this->adapter->convert($data));
    }
}
