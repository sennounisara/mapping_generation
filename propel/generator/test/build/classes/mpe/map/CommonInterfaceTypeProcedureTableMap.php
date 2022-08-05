<?php



/**
 * This class defines the structure of the 'InterfaceTypeProcedure' table.
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
class CommonInterfaceTypeProcedureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInterfaceTypeProcedureTableMap';

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
        $this->setName('InterfaceTypeProcedure');
        $this->setPhpName('CommonInterfaceTypeProcedure');
        $this->setClassname('CommonInterfaceTypeProcedure');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('type_procedure_sis', 'TypeProcedureSis', 'VARCHAR', false, 10, null);
        $this->addColumn('type_procedure_marco', 'TypeProcedureMarco', 'VARCHAR', false, 10, null);
        $this->addColumn('type_procedure', 'TypeProcedure', 'VARCHAR', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInterfaceTypeProcedureTableMap
