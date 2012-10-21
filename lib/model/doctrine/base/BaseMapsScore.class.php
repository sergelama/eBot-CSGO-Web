<?php

/**
 * BaseMapsScore
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $map_id
 * @property enum $type_score
 * @property integer $score1_side1
 * @property integer $score1_side2
 * @property integer $score2_side1
 * @property integer $score2_side2
 * @property Maps $Map
 * 
 * @method integer   getId()           Returns the current record's "id" value
 * @method integer   getMapId()        Returns the current record's "map_id" value
 * @method enum      getTypeScore()    Returns the current record's "type_score" value
 * @method integer   getScore1Side1()  Returns the current record's "score1_side1" value
 * @method integer   getScore1Side2()  Returns the current record's "score1_side2" value
 * @method integer   getScore2Side1()  Returns the current record's "score2_side1" value
 * @method integer   getScore2Side2()  Returns the current record's "score2_side2" value
 * @method Maps      getMap()          Returns the current record's "Map" value
 * @method MapsScore setId()           Sets the current record's "id" value
 * @method MapsScore setMapId()        Sets the current record's "map_id" value
 * @method MapsScore setTypeScore()    Sets the current record's "type_score" value
 * @method MapsScore setScore1Side1()  Sets the current record's "score1_side1" value
 * @method MapsScore setScore1Side2()  Sets the current record's "score1_side2" value
 * @method MapsScore setScore2Side1()  Sets the current record's "score2_side1" value
 * @method MapsScore setScore2Side2()  Sets the current record's "score2_side2" value
 * @method MapsScore setMap()          Sets the current record's "Map" value
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMapsScore extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('maps_score');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('map_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('type_score', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'normal',
              1 => 'ot',
             ),
             ));
        $this->hasColumn('score1_side1', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('score1_side2', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('score2_side1', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('score2_side2', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Maps as Map', array(
             'local' => 'map_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}