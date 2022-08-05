<?php



/**
 * This class defines the structure of the 'exec_reception' table.
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
class ExecReceptionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.ExecReceptionTableMap';

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
        $this->setName('exec_reception');
        $this->setPhpName('ExecReception');
        $this->setClassname('ExecReception');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('intitule', 'Intitule', 'VARCHAR', true, 255, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('id_contrat', 'IdContrat', 'INTEGER', true, null, null);
        $this->addColumn('id_contractant', 'IdContractant', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, 2, null);
        $this->addColumn('date_reception', 'DateReception', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_validation', 'IdAgentValidation', 'INTEGER', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_rejet', 'IdAgentRejet', 'INTEGER', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('origine_piece', 'OriginePiece', 'INTEGER', true, 1, null);
        $this->addColumn('numero_workflow', 'NumeroWorkflow', 'VARCHAR', false, 255, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('origine', 'Origine', 'BOOLEAN', false, 1, null);
        $this->addForeignKey('id_facture', 'IdFacture', 'INTEGER', 'exec_facture', 'id', true, null, null);
        $this->addColumn('id_pv_reception', 'IdPvReception', 'INTEGER', false, null, null);
        $this->addColumn('accepte', 'Accepte', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ExecFacture', 'ExecFacture', RelationMap::MANY_TO_ONE, array('id_facture' => 'id', ), null, null);
        $this->addRelation('ExecLitigeReceptionRelatedByIdReception', 'ExecLitigeReception', RelationMap::ONE_TO_MANY, array('id' => 'id_reception', ), null, null, 'ExecLitigeReceptionsRelatedByIdReception');
        $this->addRelation('ExecLitigeReceptionRelatedByIdReception', 'ExecLitigeReception', RelationMap::ONE_TO_MANY, array('id' => 'id_reception', ), null, null, 'ExecLitigeReceptionsRelatedByIdReception');
        $this->addRelation('ExecReceptionPrix', 'ExecReceptionPrix', RelationMap::ONE_TO_MANY, array('id' => 'id_reception', ), null, null, 'ExecReceptionPrixs');
    } // buildRelations()

} // ExecReceptionTableMap
