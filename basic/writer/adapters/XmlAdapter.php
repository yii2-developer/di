<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 11:11
 */

namespace app\writer\adapters;

use yii\di\Instance;
use yii\web\Response;
use yii\web\XmlResponseFormatter;

/**
 * Class XmlAdapter
 *
 * @package app\writer\adapters
 */
class XmlAdapter implements AdapterInterface
{
    /**
     * @var string
     */
    public $formatter = XmlResponseFormatter::class;

    /**
     * @param array $data
     *
     * @return string
     */
    public function convert(array $data): string
    {
        $response = new Response([
            'data' => $data,
        ]);

        /** @var XmlResponseFormatter $xml */
        $xml = Instance::ensure($this->formatter, XmlResponseFormatter::class);

        $xml->format($response);

        return $response->content;
    }
}
