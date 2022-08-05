<?php



/**
 * This class defines the structure of the 'service_associe' table.
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
class CommonServiceAssocieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonServiceAssocieTableMap';

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
        $this->setName('service_associe');
        $this->setPhpName('CommonServiceAssocie');
        $this->setClassname('CommonServiceAssocie');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_service_gerant', 'IdServiceGerant', 'INTEGER', true, null, null);
        $this->addColumn('id_service_gere', 'IdServiceGere', 'INTEGER', true, null, null);
        $this->addColumn('organisme_gerant', 'OrganismeGerant', 'VARCHAR', true, 255, null);
        $this->addColumn('organisme_gere', 'OrganismeGere', 'VARCHAR', true, 255, null);
        $this->addColumn('actif', 'Actif', 'INTEGER', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonServiceAssocieTableMap
