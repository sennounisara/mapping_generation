<?php



/**
 * This class defines the structure of the 'exec_contrat' table.
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
class ExecContratTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.ExecContratTableMap';

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
        $this->setName('exec_contrat');
        $this->setPhpName('ExecContrat');
        $this->setClassname('ExecContrat');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_contrat', 'IdContrat', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', false, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('id_decision_enveloppe', 'IdDecisionEnveloppe', 'INTEGER', false, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, 1, null);
        $this->addForeignKey('id_type_contrat', 'IdTypeContrat', 'INTEGER', 'exec_type_contrat', 'id', true, null, null);
        $this->addForeignKey('id_type_structure', 'IdTypeStructure', 'INTEGER', 'exec_type_structure', 'id', false, null, null);
        $this->addColumn('objet', 'Objet', 'LONGVARCHAR', true, null, null);
        $this->addColumn('num_consultation', 'NumConsultation', 'VARCHAR', true, 255, null);
        $this->addColumn('id_nature_prestation', 'IdNaturePrestation', 'VARCHAR', true, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', false, null, null);
        $this->addColumn('id_service_gerant', 'IdServiceGerant', 'INTEGER', false, null, null);
        $this->addColumn('id_agent_gestion', 'IdAgentGestion', 'INTEGER', false, null, null);
        $this->addColumn('reconductible', 'Reconductible', 'INTEGER', false, 1, null);
        $this->addColumn('nombre_reconduction', 'NombreReconduction', 'INTEGER', false, null, null);
        $this->addColumn('montant_ht', 'MontantHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_ttc', 'MontantTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_min', 'MontantMin', 'DOUBLE', false, null, null);
        $this->addColumn('montant_max', 'MontantMax', 'DOUBLE', false, null, null);
        $this->addColumn('montant_min_ttc', 'MontantMinTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_max_ttc', 'MontantMaxTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_facture_ht', 'MontantFactureHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_facture_ttc', 'MontantFactureTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_paye_ht', 'MontantPayeHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_paye_ttc', 'MontantPayeTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_caution', 'MontantCaution', 'DOUBLE', false, null, null);
        $this->addColumn('pourcentage_caution', 'PourcentageCaution', 'DOUBLE', false, null, null);
        $this->addColumn('retenue_garantie', 'RetenueGarantie', 'CHAR', true, null, '0');
        $this->getColumn('retenue_garantie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('pourcentage_retenue_garantie', 'PourcentageRetenueGarantie', 'DOUBLE', false, null, null);
        $this->addColumn('montant_retenu_garantie', 'MontantRetenuGarantie', 'DOUBLE', false, null, null);
        $this->addColumn('pourcentage_prelevement_garantie', 'PourcentagePrelevementGarantie', 'DOUBLE', false, null, null);
        $this->addColumn('montant_avance', 'MontantAvance', 'DOUBLE', false, null, null);
        $this->addColumn('delai_partiel', 'DelaiPartiel', 'INTEGER', false, 1, null);
        $this->addColumn('delai_contrat', 'DelaiContrat', 'DOUBLE', false, null, null);
        $this->addColumn('unite_delai_contrat', 'UniteDelaiContrat', 'INTEGER', false, null, null);
        $this->addColumn('date_approbation', 'DateApprobation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_notification_approbation', 'DateNotificationApprobation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_fin', 'DateFin', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_modif', 'IdAgentModif', 'INTEGER', false, null, null);
        $this->addColumn('delai_reel', 'DelaiReel', 'DOUBLE', false, null, null);
        $this->addColumn('depassement', 'Depassement', 'DOUBLE', false, null, null);
        $this->addColumn('date_maj_delai_reel', 'DateMajDelaiReel', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', false, null, null);
        $this->addColumn('statut_parapheur', 'StatutParapheur', 'INTEGER', false, null, null);
        $this->addColumn('date_cloture_parapheur', 'DateClotureParapheur', 'TIMESTAMP', false, null, null);
        $this->addColumn('garantie', 'Garantie', 'CHAR', false, null, '0');
        $this->getColumn('garantie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('duree_garantie', 'DureeGarantie', 'DOUBLE', false, null, null);
        $this->addColumn('unite_garantie', 'UniteGarantie', 'INTEGER', false, null, null);
        $this->addColumn('type_penalite', 'TypePenalite', 'CHAR', true, null, '0');
        $this->getColumn('type_penalite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('pourcentage_penalite', 'PourcentagePenalite', 'DOUBLE', false, null, null);
        $this->addColumn('montant_penalite', 'MontantPenalite', 'DOUBLE', false, null, null);
        $this->addColumn('plafond_penalite', 'PlafondPenalite', 'DOUBLE', false, null, null);
        $this->addColumn('mode_passation', 'ModePassation', 'INTEGER', false, null, null);
        $this->addColumn('lie_marche', 'LieMarche', 'CHAR', false, null, '0');
        $this->getColumn('lie_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('num_chapeau', 'NumChapeau', 'INTEGER', false, null, null);
        $this->addColumn('os_phase', 'OsPhase', 'CHAR', false, null, '0');
        $this->getColumn('os_phase', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('prestation_demande', 'PrestationDemande', 'CHAR', false, null, '0');
        $this->getColumn('prestation_demande', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('forfait_jh', 'ForfaitJh', 'CHAR', false, null, '0');
        $this->getColumn('forfait_jh', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('quantite_jh', 'QuantiteJh', 'DOUBLE', false, null, null);
        $this->addColumn('nature_marche', 'NatureMarche', 'INTEGER', false, null, 0);
        $this->addColumn('date_debut', 'DateDebut', 'TIMESTAMP', false, null, null);
        $this->addColumn('plurianuelle', 'Plurianuelle', 'CHAR', false, null, null);
        $this->getColumn('plurianuelle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('trancheconditionnelle', 'Trancheconditionnelle', 'CHAR', false, null, null);
        $this->getColumn('trancheconditionnelle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_agent_cr', 'IdAgentCr', 'INTEGER', false, null, null);
        $this->addColumn('devise', 'Devise', 'VARCHAR', false, 20, null);
        $this->addColumn('id_contrat_source', 'IdContratSource', 'INTEGER', true, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ExecTypeContrat', 'ExecTypeContrat', RelationMap::MANY_TO_ONE, array('id_type_contrat' => 'id', ), null, null);
        $this->addRelation('ExecTypeStructure', 'ExecTypeStructure', RelationMap::MANY_TO_ONE, array('id_type_structure' => 'id', ), null, null);
        $this->addRelation('ExecAgentContrat', 'ExecAgentContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecAgentContrats');
        $this->addRelation('ExecAvenant', 'ExecAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecAvenants');
        $this->addRelation('ExecContact', 'ExecContact', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecContacts');
        $this->addRelation('ExecContractant', 'ExecContractant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecContractants');
        $this->addRelation('ExecDossierPaiement', 'ExecDossierPaiement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecDossierPaiements');
        $this->addRelation('ExecEvenement', 'ExecEvenement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecEvenements');
        $this->addRelation('ExecFacture', 'ExecFacture', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecFactures');
        $this->addRelation('ExecHistoriquePrix', 'ExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecHistoriquePrixs');
        $this->addRelation('ExecInscritContrat', 'ExecInscritContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecInscritContrats');
        $this->addRelation('ExecLivrableContrat', 'ExecLivrableContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecLivrableContrats');
        $this->addRelation('ExecPhase', 'ExecPhase', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPhases');
        $this->addRelation('ExecPiece', 'ExecPiece', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieces');
        $this->addRelation('ExecPieceAvenant', 'ExecPieceAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieceAvenants');
        $this->addRelation('ExecPieceContrat', 'ExecPieceContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieceContrats');
        $this->addRelation('ExecPieceDossierpaiement', 'ExecPieceDossierpaiement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieceDossierpaiements');
        $this->addRelation('ExecPieceEvenement', 'ExecPieceEvenement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieceEvenements');
        $this->addRelation('ExecPieceFacture', 'ExecPieceFacture', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPieceFactures');
        $this->addRelation('ExecPrix', 'ExecPrix', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPrixs');
        $this->addRelation('ExecPrixAvenant', 'ExecPrixAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecPrixAvenants');
        $this->addRelation('ExecRepartition', 'ExecRepartition', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'ExecRepartitions');
    } // buildRelations()

} // ExecContratTableMap
