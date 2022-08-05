<?php



/**
 * This class defines the structure of the 'sso_agent' table.
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
class CommonSsoAgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSsoAgentTableMap';

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
        $this->setName('sso_agent');
        $this->setPhpName('CommonSsoAgent');
        $this->setClassname('CommonSsoAgent');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_sso', 'IdSso', 'VARCHAR', true, 40, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, 20, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 20, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, 20, null);
        $this->addColumn('date_connexion', 'DateConnexion', 'VARCHAR', true, 20, null);
        $this->addColumn('date_last_request', 'DateLastRequest', 'VARCHAR', true, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSsoAgentTableMap
