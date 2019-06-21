<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 10:56
 */

namespace app\writer\adapters;

/**
 * Interface AdapterInterface
 *
 * @package app\writer\adapters
 */
interface AdapterInterface
{
    /**
     * @param array $data
     *
     * @return string
     */
    public function convert(array $data): string;
}
