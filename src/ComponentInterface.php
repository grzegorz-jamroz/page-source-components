<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

interface ComponentInterface extends \JsonSerializable
{
    public static function getTypename(): string;

    /**
     * @return array<int, string>
     */
    public function getFields(): array;

    /**
     * @param array<string, mixed> $data
     *
     * @return array<int, mixed>
     */
    public function getCreateCommands(array $data = []): array;

    /**
     * @param array<string, mixed> $data
     *
     * @return array<int, mixed>
     */
    public function getUpdateCommands(array $data = []): array;

    public function getHtmlClass(): string;

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array;
}
