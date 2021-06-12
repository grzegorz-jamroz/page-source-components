<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

use Doctrine\Common\Collections\ArrayCollection;
use Ifrost\PageSourceComponents\Exception\SettingNotExist;

/**
 * @extends ArrayCollection<string,string>
 */
class SettingCollection extends ArrayCollection
{
    public function getComponent(
        string $typename,
        array $data = []
    ): SettingInterface {
        if (!$this->containsKey($typename)) {
            throw new SettingNotExist(sprintf('Setting %s not exists.', $typename));
        }

        $componentClass = $this->get($typename) ?? '';

        return $componentClass::createFromArray($data);
    }
}
