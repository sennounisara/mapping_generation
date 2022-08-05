<?php



/**
 * This class defines the structure of the 't_calendrier' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonTCalendrierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCalendrierTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('t_calendrier');
        $this->setPhpName('CommonTCalendrier');
        $this->setClassname('CommonTCalendrier');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CALENDRIER', 'IdCalendrier', 'INTEGER', true, null, null);
        $this->addForeignKey('REFERENCE', 'Reference', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addForeignKey('ORGANISME', 'Organisme', 'VARCHAR', 'consultation', 'organisme', true, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('ORGANISME' => 'organisme', 'REFERENCE' => 'reference', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonTCalendrierEtape', 'CommonTCalendrierEtape', RelationMap::ONE_TO_MANY, array('ID_CALENDRIER' => 'ID_CALENDRIER', ), 'CASCADE', 'CASCADE', 'CommonTCalendrierEtapes');
    } // buildRelations()

} // CommonTCalendrierTableMap
