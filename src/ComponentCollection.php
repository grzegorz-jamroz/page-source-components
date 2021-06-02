<?php

declare(strict_types=1);

namespace Ifrost\PageSourceComponents;

use Doctrine\Common\Collections\ArrayCollection;
use Ifrost\PageSourceComponents\Exception\ComponentNotExist;

/**
 * @extends ArrayCollection<string,string>
 */
class ComponentCollection extends ArrayCollection
{
    public function getComponent(
        string $typename,
        array $data = []
    ): ComponentInterface {
        if (!$this->containsKey($typename)) {
            throw new ComponentNotExist(sprintf('Component %s not exists.', $typename));
        }

        $componentClass = $this->get($typename) ?? '';

        return $componentClass::createFromArray($data);
    }
}
