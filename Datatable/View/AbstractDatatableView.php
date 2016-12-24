<?php
/**
 * Surchage de la classe pour la déclaration d'une DataTable
 *
 * @author Olivier <sabinus52@gmail.com>
 *
 * @package Olix
 * @subpackage DatatablesBootstrapBundle
 */

namespace Olix\DatatablesBootstrapBundle\Datatable\View;

use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView as BaseAbstractDatatableView;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
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
     * @param TranslatorInterface           $translator
     * @param RouterInterface               $router
     * @param EntityManagerInterface        $em
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $securityToken,
        TranslatorInterface $translator,
        RouterInterface $router,
        EntityManagerInterface $em
    )
    {
        parent::__construct($authorizationChecker, $securityToken, $translator, $router, $em);
        
        $this->features->set(array(
            'state_save' => true,
        ));
        $this->options->set(array(
            'class' => self::BOOTSTRAP_OLIX_STYLE,
            'paging_type' => Style::SIMPLE_NUMBERS_PAGINATION,
            'use_integration_options' => true,
            'individual_filtering' => true,
        ));
        $this->callbacks->set(array(
            'state_save_params' => array(
                'template' => 'OlixDatatablesBootstrapBundle::state-save-params.js.twig',
                'vars' => array(
                    'tableId' => $this->getName(),
                ),
            ),
            'state_load_params' => array(
                'template' => 'OlixDatatablesBootstrapBundle::state-load-params.js.twig',
                'vars' => array(
                    'tableId' => $this->getName(),
                ),
            ),
            'state_loaded' => array(
                'template' => 'OlixDatatablesBootstrapBundle::state-loaded.js.twig',
                'vars' => array(
                    'tableId' => $this->getName(),
                ),
            ),
        ));
    }

}