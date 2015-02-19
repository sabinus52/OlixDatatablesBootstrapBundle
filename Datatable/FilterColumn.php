<?php
/**
 * Classe d'une colonne standard qui permet le filtrage 
 * 
 * @author Olivier <sabinus52@gmail.com>
 * 
 * @package Olix
 * @subpackage FormsExtBootstrapBundle
 */

namespace Olix\DatatablesBootstrapBundle\Datatable;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\Exception\InvalidArgumentException;
use Sg\DatatablesBundle\Datatable\Column\Column;


/**
 * Class FilterColumn
 * 
 * @package Sg\DatatablesBundle\Datatable\Column
 */
class FilterColumn extends Column
{

    /**
     * Liste des items de la listbox
     * 
     * @var array
     */
    protected $items = array();


    /**
     * @see \Sg\DatatablesBundle\Datatable\Column\Column::configureOptions()
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        
        $resolver->setDefault("items", array());
        
        $resolver->addAllowedTypes(array(
            "items" => "array",
        ));
        
        return $this;
    }


    /**
     * Affecte une liste d'item
     *
     * @param array $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Retourne la liste des items
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

}
