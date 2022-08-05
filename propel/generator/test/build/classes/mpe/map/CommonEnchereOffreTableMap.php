<?php



/**
 * This class defines the structure of the 'EnchereOffre' table.
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
class CommonEnchereOffreTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereOffreTableMap';

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
        $this->setName('EnchereOffre');
        $this->setPhpName('CommonEnchereOffre');
        $this->setClassname('CommonEnchereOffre');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('idEnchere', 'Idenchere', 'INTEGER', true, 10, 0);
        $this->addColumn('idEnchereEntreprise', 'Idenchereentreprise', 'INTEGER', true, 10, 0);
        $this->addColumn('date', 'Date', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('valeurTIC', 'Valeurtic', 'DOUBLE', false, null, null);
        $this->addColumn('valeurTC', 'Valeurtc', 'DOUBLE', false, null, null);
        $this->addColumn('valeurNETC', 'Valeurnetc', 'DOUBLE', false, null, null);
        $this->addColumn('valeurNGC', 'Valeurngc', 'DOUBLE', false, null, null);
        $this->addColumn('rang', 'Rang', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEnchereOffreTableMap
