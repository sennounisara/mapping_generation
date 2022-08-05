<?php



/**
 * This class defines the structure of the 'ccag_applicable' table.
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
class CommonCcagApplicableTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCcagApplicableTableMap';

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
        $this->setName('ccag_applicable');
        $this->setPhpName('CommonCcagApplicable');
        $this->setClassname('CommonCcagApplicable');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_auto', 'IdAuto', 'INTEGER', true, null, null);
        $this->addColumn('id', 'Id', 'INTEGER', true, null, 0);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 5, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCcagApplicableTableMap
