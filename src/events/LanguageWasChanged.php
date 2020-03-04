<?php

namespace hiqdev\yii2\language\events;

use yii\base\Event;

/**
 * Class LanguageWasChanged
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
class LanguageWasChanged extends Event
{
    public const EVENT_NAME = 'languageWasChanged';

    /**
     * @var string ISO 639-2 Language Code
     */
    private $oldLanguage;

    /**
     * @var string ISO 639-2 Language Code
     */
    private $language;

    /**
     * @return string ISO 639-2 Language Code
     */
    public function getOldLanguage(): string
    {
        return $this->oldLanguage;
    }

    /**
     * @return string ISO 639-2 Language Code
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    public static function betweenLanguages(string $from, string $to): self
    {
        $self = new self();
        $self->oldLanguage = $from;
        $self->language = $to;

        return $self;
    }

    public function changedToTheSameLanguage(): bool
    {
        return $this->getOldLanguage() === $this->getLanguage();
    }
}
