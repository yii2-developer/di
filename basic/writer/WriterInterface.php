<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 10:51
 */

namespace app\writer;

/**
 * Interface WriterInterface
 *
 * @package app\writer
 */
interface WriterInterface
{
    /**
     * @param string $path
     * @param array $data
     *
     * @return bool
     */
    public function write(string $path, array $data): bool;
}
