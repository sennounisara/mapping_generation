<?php



/**
 * This class defines the structure of the 'exec_dossier_paiement' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonExecDossierPaiementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecDossierPaiementTableMap';

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
        $this->setName('exec_dossier_paiement');
        $this->setPhpName('CommonExecDossierPaiement');
        $this->setClassname('CommonExecDossierPaiement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nume_ordre_paiement', 'NumeOrdrePaiement', 'VARCHAR', false, 255, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', false, null, null);
        $this->addColumn('id_agent_creat', 'IdAgentCreat', 'INTEGER', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, null, null);
        $this->addColumn('date_depot', 'DateDepot', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addColumn('montant_a_paye_ttc', 'MontantAPayeTtc', 'DOUBLE', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_modi', 'IdAgentModi', 'INTEGER', false, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', false, null, null);
        $this->addColumn('date_cloture_parapheur', 'DateClotureParapheur', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_validation', 'IdAgentValidation', 'INTEGER', false, null, null);
        $this->addColumn('montant_penalite', 'MontantPenalite', 'DOUBLE', false, null, null);
        $this->addColumn('montant_facture', 'MontantFacture', 'DOUBLE', false, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('date_derniere_synchronisation', 'DateDerniereSynchronisation', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecDpFacture', 'CommonExecDpFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_dp', ), null, null, 'CommonExecDpFactures');
        $this->addRelation('CommonExecPenalite', 'CommonExecPenalite', RelationMap::ONE_TO_MANY, array('id' => 'id_dossier_paiement', ), null, null, 'CommonExecPenalites');
        $this->addRelation('CommonExecPieceDossierpaiement', 'CommonExecPieceDossierpaiement', RelationMap::ONE_TO_MANY, array('id' => 'id_dossier_paiement', ), null, null, 'CommonExecPieceDossierpaiements');
    } // buildRelations()

} // CommonExecDossierPaiementTableMap
