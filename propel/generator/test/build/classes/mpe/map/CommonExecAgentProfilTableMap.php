<?php



/**
 * This class defines the structure of the 'exec_agent_profil' table.
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
class CommonExecAgentProfilTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecAgentProfilTableMap';

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
        $this->setName('exec_agent_profil');
        $this->setPhpName('CommonExecAgentProfil');
        $this->setClassname('CommonExecAgentProfil');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_profil', 'IdProfil', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('role', 'Role', 'VARCHAR', true, 255, null);
        $this->addColumn('actif', 'Actif', 'CHAR', true, null, '0');
        $this->getColumn('actif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonExecAgentProfilTableMap
