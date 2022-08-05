<?php



/**
 * This class defines the structure of the 'service' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class ServiceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ServiceTableMap';

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
        $this->setName('service');
        $this->setPhpName('Service');
        $this->setClassname('Service');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', true, null, null);
        $this->addColumn('NOM_SERVICE_FR', 'NomServiceFr', 'VARCHAR', false, 255, null);
        $this->addColumn('ETAT_SERVICE', 'EtatService', 'CHAR', false, null, '0');
        $this->getColumn('ETAT_SERVICE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('NOM_SERVICE_AR', 'NomServiceAr', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ServiceTableMap
