<?php



/**
 * This class defines the structure of the 'JAL' table.
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
class CommonJALTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonJALTableMap';

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
        $this->setName('JAL');
        $this->setPhpName('CommonJAL');
        $this->setClassname('CommonJAL');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('email_ar', 'EmailAr', 'VARCHAR', true, 100, '');
        $this->addColumn('telecopie', 'Telecopie', 'VARCHAR', true, 20, '');
        $this->addColumn('information_facturation', 'InformationFacturation', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonDestinataireAnnonceJAL', 'CommonDestinataireAnnonceJAL', RelationMap::ONE_TO_MANY, array('id' => 'idJAL', ), null, null, 'CommonDestinataireAnnonceJALs');
    } // buildRelations()

} // CommonJALTableMap
