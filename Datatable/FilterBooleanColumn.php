<?php
/**
 * Classe d'une colonne de type booléen qui permet le filtrage
 * 
 * @author Olivier <sabinus52@gmail.com>
 * 
 * @package Olix
 * @subpackage FormsExtBootstrapBundle
 */

namespace Olix\DatatablesBootstrapBundle\Datatable;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\Exception\InvalidArgumentException;
use Sg\DatatablesBundle\Datatable\Column\BooleanColumn;


/**
 * Class FilterBooleanColumn
 * 
 * @package Sg\DatatablesBundle\Datatable\BooleanColumn
 */
class FilterBooleanColumn extends BooleanColumn
{

    /**
     * Liste des items de la listbox
     * 
     * @var array
     */
    protected $items = array();


    /**
     * @see \Sg\DatatablesBundle\Datatable\Column\BooleanColumn::configureOptions()
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        
        $resolver->setDefault("items", array(true => "Oui", false => "Non"));
        
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
