<?php



/**
 * This class defines the structure of the 'interfacage_exec_parapheur_organisme' table.
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
class CommonInterfacageExecParapheurOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInterfacageExecParapheurOrganismeTableMap';

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
        $this->setName('interfacage_exec_parapheur_organisme');
        $this->setPhpName('CommonInterfacageExecParapheurOrganisme');
        $this->setClassname('CommonInterfacageExecParapheurOrganisme');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('org', 'Org', 'VARCHAR', true, 20, null);
        $this->addColumn('id_entite_parapheur', 'IdEntiteParapheur', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInterfacageExecParapheurOrganismeTableMap
