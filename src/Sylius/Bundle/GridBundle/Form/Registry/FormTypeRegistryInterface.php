<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\GridBundle\Form\Registry;

/**
 * @author Kamil Kokot <kamil.kokot@lakion.com>
 */
interface FormTypeRegistryInterface
{
    /**
     * @param string $identifier
     * @param string $typeIdentifier
     * @param string $formType
     */
    public function add($identifier, $typeIdentifier, $formType);

    /**
     * @param string $identifier
     * @param string $typeIdentifier
     *
     * @return string
     */
    public function get($identifier, $typeIdentifier);

    /**
     * @param string $identifier
     * @param string $typeIdentifier
     *
     * @return bool
     */
    public function has($identifier, $typeIdentifier);
}
