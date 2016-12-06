<?php
/**
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\tests\unit;

use hiqdev\yii2\language\Module;
use yii\web\Application;

/**
 * Module test suite.
 */
class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Module
     */
    protected $object;

    protected function setUp()
    {
        $application = new Application([
            'id'       => 'mock',
            'basePath' => dirname(dirname(__DIR__)),
            'modules'  => [
                'language' => [
                    'class' => Module::class,
                ],
            ],
            'components' => [
                'urlManager' => [
                    'enablePrettyUrl' => true,
                    'showScriptName'  => false,
                ],
            ],
        ]);
        $this->object = Module::getInstance();
    }

    protected function tearDown()
    {
    }

    public function testGetInstance()
    {
        $module = Module::getInstance();
        $this->assertInstanceOf(Module::class, $module);
        $this->assertSame($this->object, $module);
    }
}
