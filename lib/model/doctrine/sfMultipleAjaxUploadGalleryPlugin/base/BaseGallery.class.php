<?php

/**
 * BaseGallery
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $description
 * @property boolean $dans_gallerie
 * @property Doctrine_Collection $Photos
 * 
 * @method string              getTitle()         Returns the current record's "title" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method boolean             getDansGallerie()  Returns the current record's "dans_gallerie" value
 * @method Doctrine_Collection getPhotos()        Returns the current record's "Photos" collection
 * @method Gallery             setTitle()         Sets the current record's "title" value
 * @method Gallery             setDescription()   Sets the current record's "description" value
 * @method Gallery             setDansGallerie()  Sets the current record's "dans_gallerie" value
 * @method Gallery             setPhotos()        Sets the current record's "Photos" collection
 * 
 * @package    eventos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGallery extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gallery');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('dans_gallerie', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Photos', array(
             'local' => 'id',
             'foreign' => 'gallery_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             'unique' => true,
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}