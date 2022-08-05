<?php



/**
 * This class defines the structure of the 'Agent_Service_Metier' table.
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
class CommonAgentServiceMetierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAgentServiceMetierTableMap';

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
        $this->setName('Agent_Service_Metier');
        $this->setPhpName('CommonAgentServiceMetier');
        $this->setClassname('CommonAgentServiceMetier');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_agent', 'IdAgent', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('id_service_metier', 'IdServiceMetier', 'INTEGER', true, null, 0);
        $this->addColumn('id_profil_service', 'IdProfilService', 'INTEGER', true, null, 0);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAgentServiceMetierTableMap
