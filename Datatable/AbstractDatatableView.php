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
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Twig_Environment;
use Symfony\Component\Routing\RouterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Sg\DatatablesBundle\Datatable\View\Style;



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
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $securityToken
     * @param Twig_Environment              $twig
     * @param TranslatorInterface           $translator
     * @param RouterInterface               $router
     * @param EntityManagerInterface        $em
     * @param array                         $defaultLayoutOptions
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $securityToken,
        Twig_Environment $twig,
        TranslatorInterface $translator,
        RouterInterface $router,
        EntityManagerInterface $em,
        array $defaultLayoutOptions)
    {
        parent::__construct($authorizationChecker, $securityToken, $twig, $translator, $router, $em, $defaultLayoutOptions);
        
        $this->options->setOptions(array(
            'class' => self::BOOTSTRAP_OLIX_STYLE,
            'paging_type' => Style::SIMPLE_NUMBERS_PAGINATION,
            'use_integration_options' => true,
        ));
    }


}