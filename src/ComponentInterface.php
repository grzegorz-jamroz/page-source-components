<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

use Ifrost\Common\ArrayConstructable;

interface ComponentInterface extends \JsonSerializable, ArrayConstructable
{
    public static function getTypename(): string;

    public static function getLabel(): string;

    /**
     * @return array<int,string>
     */
    public static function getRelations(): array;

    public function getUuid(): string;

    public function getLanguage(): string;

    public function getInternalTitle(): string;

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

    public function getHtmlClass(): string;

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array;
}
