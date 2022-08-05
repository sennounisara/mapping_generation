<?php



/**
 * This class defines the structure of the 'exec_litige' table.
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
class CommonExecLitigeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecLitigeTableMap';

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
        $this->setName('exec_litige');
        $this->setPhpName('CommonExecLitige');
        $this->setClassname('CommonExecLitige');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('id_contrat', 'IdContrat', 'INTEGER', true, null, null);
        $this->addColumn('id_contractant', 'IdContractant', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, 2, null);
        $this->addColumn('date_declaration', 'DateDeclaration', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_validation', 'IdAgentValidation', 'INTEGER', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_rejet', 'IdAgentRejet', 'INTEGER', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('cloture', 'Cloture', 'BOOLEAN', true, 1, false);
        $this->addColumn('etat', 'Etat', 'BOOLEAN', true, 1, null);
        $this->addColumn('decision', 'Decision', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonExecLitigeTableMap
