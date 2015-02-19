<?php
/**
 * Chargement dans la configuration des templates pour les pages de listing avec DataTables
 * 
 * @author Olivier <sabinus52@gmail.com>
 * 
 * @package Olix
 * @subpackage FormsExtBootstrapBundle
 */

namespace Olix\DatatablesBootstrapBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class TemplatePass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        $configs = $container->getParameter('sg_datatables.default.layout.options');
        $configs['templates']['html'] = 'OlixDatatablesBootstrapBundle::datatable_html.html.twig';
        $configs['templates']['js'] = 'OlixDatatablesBootstrapBundle::datatable_js.html.twig';
        
        $container->setParameter('sg_datatables.default.layout.options', $configs);
    }

}