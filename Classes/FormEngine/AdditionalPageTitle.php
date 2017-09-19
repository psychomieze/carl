<?php
declare(strict_types=1);
namespace Psychomieze\Carl\FormEngine;


use TYPO3\CMS\Backend\Form\AbstractNode;

class AdditionalPageTitle extends AbstractNode
{

    /**
     * Handler for single nodes
     *
     * @return array As defined in initializeResultArray() of AbstractNode
     */
    public function render()
    {
        $result = $this->initializeResultArray();
        return $result;
    }
}