<?php
/**
 * Yii2 module for language switching.
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language;

use Yii;
use yii\base\BootstrapInterface;
use yii\web\Cookie;

/**
 * Language Module.
 *
 * Example application configuration:
 *
 * ```php
 * 'modules' => [
 *     'language' => [
 *         'class' => \hiqdev\yii2\language\Module::class,
 *         'languages' => [
 *             'en' => 'English',
 *             'ru' => 'Русский',
 *         ],
 *     ],
 * ],
 * ```
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * @var array list of available language codes. More specific patterns should come first, e.g. 'en_us' before 'en'.
     * Key is a language code, value is a name of language. For example:
     *
     * ```php
     * [
     *     'ru' => 'Русский',
     *     'en' => 'English',
     * ]
     * ```
     */
    protected $_languages = [];

    public function setLanguages(array $list)
    {
        $this->_languages = array_filter($list);
    }

    public function getLanguages()
    {
        if (!$this->_languages) {
            $this->_languages = [
                Yii::$app->language => Yii::$app->language,
            ];
        }

        return $this->_languages;
    }

    /**
     * @var string name of the cookie
     */
    public $cookieName = 'language';

    /**
     * @var integer expiration date of the cookie storing the language of the site
     */
    public $expireDays = 30;

    public function bootstrap($app)
    {
        $this->initLanguage();
    }

    /**
     * Saving language into cookie and database.
     * @param string $language - The language to save
     * @return static
     */
    public function saveLanguage($language)
    {
        $this->applyLanguage($language);
        $this->saveLanguageIntoCookie($language);
    }

    private function initLanguage()
    {
        if (($language = Yii::$app->request->get('language')) && $this->isValidLanguage($language)) {
            $this->saveLanguage($language);
        } else if ($this->isValidLanguage(Yii::$app->request->cookies->getValue($this->cookieName))) {
            $this->applyLanguage(Yii::$app->request->cookies->getValue($this->cookieName));
        } else {
            Yii::$app->response->cookies->remove($this->cookieName);

            if (($language = $this->detectLanguage()) !== false) {
                $this->saveLanguage($language);
            }
        }
    }

    /**
     * Determine language based on UserAgent.
     */
    public function detectLanguage()
    {
        $acceptableLanguages = Yii::$app->getRequest()->getAcceptableLanguages();
        foreach ($acceptableLanguages as $language) {
            if ($this->isValidLanguage($language)) {
                return $language;
            }
        }
        foreach ($acceptableLanguages as $language) {
            $pattern = preg_quote(substr($language, 0, 2), '/');
            foreach ($this->languages as $key => $value) {
                if (preg_match('/^' . $pattern . '/', $value) || preg_match('/^' . $pattern . '/', $key)) {
                    return $this->isValidLanguage($key) ? $key : $value;
                }
            }
        }

        return false;
    }

    /**
     * Save language into cookie.
     * @param string $language
     */
    private function saveLanguageIntoCookie($language)
    {
        $cookie = new Cookie([
            'name' => $this->cookieName,
            'value' => $language,
            'expire' => time() + 86400 * $this->expireDays,
        ]);
        Yii::$app->response->cookies->add($cookie);
    }

    /**
     * Determines whether the language received as a parameter can be processed.
     * @param string $language
     * @return boolean
     */
    public function isValidLanguage($language)
    {
        return is_string($language) && isset($this->languages[$language]);
    }

    /**
     * @param $language
     * @return bool whether the language is correct and saved
     */
    public function setLanguage($language)
    {
        if ($this->isValidLanguage($language)) {
            $this->saveLanguage($language);

            return true;
        }

        return false;
    }

    /**
     * @param string $language
     */
    private function applyLanguage($language)
    {
        Yii::$app->language = $language;
        Yii::$app->getFormatter()->locale = $language;
    }

    public static $MODULE_ID = 'language';

    public static function getInstance()
    {
        return Yii::$app->getModule(static::$MODULE_ID);
    }
}
