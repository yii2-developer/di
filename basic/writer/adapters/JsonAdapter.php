<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 10:57
 */

namespace app\writer\adapters;

use yii\helpers\Json;

/**
 * Class JsonAdapter
 *
 * @package app\writer\adapters
 */
class JsonAdapter implements AdapterInterface
{
    /**
     * @param array $data
     *
     * @return string
     */
    public function convert(array $data): string
    {
        return Json::encode($data);
    }
}
