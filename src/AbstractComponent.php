<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

abstract class AbstractComponent implements ComponentInterface
{
    /**
     * @return array<int, string>
     */
    public function getFields(): array
    {
        return array_keys($this->jsonSerialize());
    }
}
