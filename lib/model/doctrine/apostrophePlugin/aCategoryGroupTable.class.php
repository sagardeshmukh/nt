<?php

/**
 * aCategoryGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class aCategoryGroupTable extends PluginaCategoryGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object aCategoryGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('aCategoryGroup');
    }
}