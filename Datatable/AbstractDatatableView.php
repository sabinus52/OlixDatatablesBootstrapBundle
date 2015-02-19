<?php
/**
 * Surchage de la classe pour la déclaration d'une DataTable
 *
 * @author Olivier <sabinus52@gmail.com>
 *
 * @package Olix
 * @subpackage FormsExtBootstrapBundle
 */

namespace Olix\DatatablesBootstrapBundle\Datatable;

use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView as BaseAbstractDatatableView;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;


/**
 * Class AbstractDatatableView
 *
 * @package Sg\DatatablesBundle\Datatable\View\AbstractDatatableView
 */
abstract class AbstractDatatableView extends BaseAbstractDatatableView
{

    /**
     * Bootstrap's table styling options.
     *
     * @var string
     */
    const BOOTSTRAP_OLIX_STYLE = "table table-striped";


    /**
     * Ctor.
     *
     * @param TwigEngine          $templating           The templating service
     * @param TranslatorInterface $translator           The translator service
     * @param RouterInterface     $router               The router service
     * @param array               $defaultLayoutOptions The default layout options
     */
    public function __construct(TwigEngine $templating, TranslatorInterface $translator, RouterInterface $router, array $defaultLayoutOptions)
    {
        parent::__construct($templating, $translator, $router, $defaultLayoutOptions);
        
        $this->getOptions()->setPagingType('simple_numbers');
        $this->setStyle(self::BOOTSTRAP_OLIX_STYLE);
        $this->setUseIntegrationOptions(true);
    }


}