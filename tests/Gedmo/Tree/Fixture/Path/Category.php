<?php

namespace Tree\Fixture\Path;

use Gedmo\Tree\Node as NodeInterface;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @author Michael Williams <michael.williams@funsational.com>
 * 
 * @ODM\Document(repositoryClass="Gedmo\Tree\Document\Repository\PathRepository")
 * @Gedmo\Tree(type="path")
 */
class Category implements NodeInterface
{
    /** @ODM\Id */
    private $id;

    /**
     * @Gedmo\TreePathSource
     * @ODM\String
     */
    private $title;

    /**
     * @Gedmo\TreePath
     * @ODM\String
     */
    private $path = '';

    /**
     * @Gedmo\TreeParent
     * @ODM\ReferenceOne(targetDocument="Category")
     */
    private $parent = null;
    
    /**
     * @Gedmo\TreeSort
     * @ODM\Increment
     */
    private $sortOrder = 0;
    
    /**
     * @Gedmo\TreeChildCount
     * @ODM\Increment
     */
    private $childCount = 0;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }
    
    public function setParent(Category $parent)
    {
        $this->parent = $parent;
    }
    
    public function getParent()
    {
        return $this->parent;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    
    public function getChildCount()
    {
        return $this->childCount;
    }
}
