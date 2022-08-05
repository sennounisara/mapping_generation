<?php



/**
 * This class defines the structure of the 'AffiliationService' table.
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
class CommonAffiliationServiceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAffiliationServiceTableMap';

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
        $this->setName('AffiliationService');
        $this->setPhpName('CommonAffiliationService');
        $this->setClassname('CommonAffiliationService');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Service', 'organisme', true, 30, '');
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Service', 'organisme', true, 30, '');
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, '');
        $this->addForeignPrimaryKey('id_pole', 'IdPole', 'INTEGER' , 'Service', 'id', true, null, 0);
        $this->addForeignPrimaryKey('id_service', 'IdService', 'INTEGER' , 'Service', 'id', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonServiceRelatedByIdPoleOrganisme', 'CommonService', RelationMap::MANY_TO_ONE, array('id_pole' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonServiceRelatedByIdServiceOrganisme', 'CommonService', RelationMap::MANY_TO_ONE, array('id_service' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonAffiliationServiceTableMap
