<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

abstract class AbstractSetting implements ComponentInterface
{
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
