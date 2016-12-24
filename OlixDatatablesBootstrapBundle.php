<?php

namespace Olix\DatatablesBootstrapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class OlixDatatablesBootstrapBundle extends Bundle
{

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getParent()
     */
    public function getParent()
    {
        return 'SgDatatablesBundle';
    }

}
