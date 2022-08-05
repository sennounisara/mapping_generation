<?php



/**
 * This class defines the structure of the 'seance_lot' table.
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
class CommonSeanceLotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSeanceLotTableMap';

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
        $this->setName('seance_lot');
        $this->setPhpName('CommonSeanceLot');
        $this->setClassname('CommonSeanceLot');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'INTEGER', true, null, null);
        $this->addColumn('type_env', 'TypeEnv', 'CHAR', true, 2, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSeanceLotTableMap
