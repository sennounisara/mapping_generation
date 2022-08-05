<?php



/**
 * This class defines the structure of the 'region' table.
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
class RegionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.RegionTableMap';

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
        $this->setName('region');
        $this->setPhpName('Region');
        $this->setClassname('Region');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_PAYS', 'IdPays', 'INTEGER', false, null, null);
        $this->addColumn('NOM_REGION_AR', 'NomRegionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_REGION_FR', 'NomRegionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // RegionTableMap
