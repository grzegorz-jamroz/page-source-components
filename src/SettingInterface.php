<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

use Ifrost\Common\ArrayConstructable;

interface SettingInterface extends \JsonSerializable, ArrayConstructable
{
    public static function getTypename(): string;

    /**
     * @return array<int, string>
     */
    public function getFields(): array;

    /**
     * @param array<string, mixed> $data
     *
     * @return array<int, ArrayConstructable>
     */
    public function getCreateCommands(array $data = []): array;

    /**
     * @param array<string, mixed> $data
     *
     * @return array<int, ArrayConstructable>
     */
    public function getUpdateCommands(array $data = []): array;

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array;
}
