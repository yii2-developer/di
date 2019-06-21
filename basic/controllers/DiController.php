<?php
/**
 * Created by PhpStorm.
 * User: krok
 * Date: 21.06.19
 * Time: 10:48
 */

namespace app\controllers;

use app\writer\WriterInterface;
use Yii;
use yii\base\Module;
use yii\web\Controller;

/**
 * Class DiController
 *
 * @package app\controllers
 */
class DiController extends Controller
{
    /**
     * @var WriterInterface
     */
    protected $writer;

    /**
     * DiController constructor.
     *
     * @param string $id
     * @param Module $module
     * @param WriterInterface $writer
     * @param array $config
     */
    public function __construct(string $id, Module $module, WriterInterface $writer, array $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->writer = $writer;
    }

    /**
     * @return null|string
     */
    public function actionIndex()
    {
        $path = Yii::getAlias('@app/runtime/writer.bin');

        $data = [
            'name' => 'Lessons',
            'description' => 'DI & Adapter',
            'author' => 'Alexandr',
        ];

        if ($this->writer->write($path, $data)) {
            return htmlspecialchars(file_get_contents($path));
        } else {
            return null;
        }
    }
}
