<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

abstract class AbstractComponent implements ComponentInterface
{
    public const NOT_EDITABLE_FIELDS = [
        'uuid',
        '__typename',
        'language',
        'label',
    ];

    public const FIELDS_NOT_FOR_RENDER = [
        'internalTitle',
        'relations',
        'label',
    ];

    public function __construct(
        private string $uuid,
        private string $language,
        private string $internalTitle,
    ) {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getInternalTitle(): string
    {
        return $this->internalTitle;
    }

    /**
     * @return array<int, string>
     */
    public function getFields(): array
    {
        return array_keys($this->jsonSerialize());
    }

    public function getCreateCommands(array $data = []): array
    {
        return [];
    }

    public function getUpdateCommands(array $data = []): array
    {
        return [];
    }
}
