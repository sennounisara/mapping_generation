<?php



/**
 * This class defines the structure of the 'exec_facture' table.
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
class CommonExecFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecFactureTableMap';

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
        $this->setName('exec_facture');
        $this->setPhpName('CommonExecFacture');
        $this->setClassname('CommonExecFacture');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('intitule', 'Intitule', 'VARCHAR', true, 255, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_contractant', 'IdContractant', 'INTEGER', 'exec_contractant', 'id', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, 2, null);
        $this->addColumn('date_depot', 'DateDepot', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_validation', 'IdAgentValidation', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_rejet', 'IdAgentRejet', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('montant_facture_ht', 'MontantFactureHt', 'DOUBLE', true, null, null);
        $this->addColumn('montant_facture_ttc', 'MontantFactureTtc', 'DOUBLE', true, null, null);
        $this->addColumn('montant_a_paye_ht', 'MontantAPayeHt', 'DOUBLE', true, null, null);
        $this->addColumn('montant_a_paye_ttc', 'MontantAPayeTtc', 'DOUBLE', true, null, null);
        $this->addColumn('montant_paye_ht', 'MontantPayeHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_paye_ttc', 'MontantPayeTtc', 'DOUBLE', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('origine_piece', 'OriginePiece', 'INTEGER', true, 1, null);
        $this->addColumn('numero_workflow', 'NumeroWorkflow', 'VARCHAR', false, 255, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addForeignKey('id_entreprise_crea', 'IdEntrepriseCrea', 'INTEGER', 'Entreprise', 'id', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_modif', 'IdAgentModif', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addForeignKey('id_entreprise_modif', 'IdEntrepriseModif', 'INTEGER', 'Entreprise', 'id', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', false, null, null);
        $this->addColumn('date_cloture_parapheur', 'DateClotureParapheur', 'TIMESTAMP', false, null, null);
        $this->addColumn('montant_retenue_garantie', 'MontantRetenueGarantie', 'DOUBLE', false, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('origine', 'Origine', 'BOOLEAN', false, 1, null);
        $this->addColumn('validation_via_exec', 'ValidationViaExec', 'BOOLEAN', false, 1, null);
        $this->addColumn('date_paiement', 'DatePaiement', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_derniere_synchronisation', 'DateDerniereSynchronisation', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgentRelatedByIdAgentCrea', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_crea' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentModif', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_modif' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentRejet', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_rejet' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentValidation', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_validation' => 'id', ), null, null);
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::MANY_TO_ONE, array('id_contractant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonEntrepriseRelatedByIdEntrepriseCrea', 'CommonEntreprise', RelationMap::MANY_TO_ONE, array('id_entreprise_crea' => 'id', ), null, null);
        $this->addRelation('CommonEntrepriseRelatedByIdEntrepriseModif', 'CommonEntreprise', RelationMap::MANY_TO_ONE, array('id_entreprise_modif' => 'id', ), null, null);
        $this->addRelation('CommonExecDpFacture', 'CommonExecDpFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_facture', ), null, null, 'CommonExecDpFactures');
        $this->addRelation('CommonExecPieceFacture', 'CommonExecPieceFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_facture', ), null, null, 'CommonExecPieceFactures');
        $this->addRelation('CommonExecRepartition', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_facture', ), null, null, 'CommonExecRepartitions');
    } // buildRelations()

} // CommonExecFactureTableMap
