<?php



/**
 * This class defines the structure of the 'commune' table.
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
class CommuneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommuneTableMap';

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
        $this->setName('commune');
        $this->setPhpName('Commune');
        $this->setClassname('Commune');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_PROVINCE', 'IdProvince', 'INTEGER', false, null, null);
        $this->addColumn('NOM_COMMUNE_FR', 'NomCommuneFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_COMMUNE_AR', 'NomCommuneAr', 'VARCHAR', false, 255, null);
        $this->addColumn('LATITUDE_COMMUNE', 'LatitudeCommune', 'VARCHAR', false, 255, null);
        $this->addColumn('LOGITUDE_COMMUNE', 'LogitudeCommune', 'VARCHAR', false, 255, null);
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

} // CommuneTableMap
