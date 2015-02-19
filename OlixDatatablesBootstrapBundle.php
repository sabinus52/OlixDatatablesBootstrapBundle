<?php

namespace Olix\DatatablesBootstrapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Olix\DatatablesBootstrapBundle\DependencyInjection\Compiler\TemplatePass;

class OlixDatatablesBootstrapBundle extends Bundle
{

    /**
     * Compilation pour le chargement des paramètres de ressources des layouts
     *
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::build()
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new TemplatePass());
    }

}
