<?php



/**
 * This class defines the structure of the 't_version_details' table.
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
class TVersionDetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TVersionDetailsTableMap';

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
        $this->setName('t_version_details');
        $this->setPhpName('TVersionDetails');
        $this->setClassname('TVersionDetails');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_VERSION_DETAIL', 'IdVersionDetail', 'INTEGER', true, null, null);
        $this->addColumn('ID_VERSION', 'IdVersion', 'INTEGER', true, null, null);
        $this->addColumn('TITRE_FR', 'TitreFr', 'VARCHAR', false, 500, null);
        $this->addColumn('TITRE_AR', 'TitreAr', 'VARCHAR', false, 500, null);
        $this->addColumn('DESCRIPTION_FR', 'DescriptionFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DESCRIPTION_AR', 'DescriptionAr', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TVersionDetailsTableMap
