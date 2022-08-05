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
 * @package    propel.generator.lt_parapheur.map
 */
class CommonExecContratTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecContratTableMap';

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
        $this->setPhpName('CommonExecContrat');
        $this->setClassname('CommonExecContrat');
        $this->setPackage('lt_parapheur');
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
        $this->addRelation('CommonExecTypeContrat', 'CommonExecTypeContrat', RelationMap::MANY_TO_ONE, array('id_type_contrat' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeStructure', 'CommonExecTypeStructure', RelationMap::MANY_TO_ONE, array('id_type_structure' => 'id', ), null, null);
        $this->addRelation('CommonExecAgentContrat', 'CommonExecAgentContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecAgentContrats');
        $this->addRelation('CommonExecAvenant', 'CommonExecAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecAvenants');
        $this->addRelation('CommonExecContact', 'CommonExecContact', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecContacts');
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecContractants');
        $this->addRelation('CommonExecDossierPaiement', 'CommonExecDossierPaiement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecDossierPaiements');
        $this->addRelation('CommonExecEvenement', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecEvenements');
        $this->addRelation('CommonExecFacture', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecFactures');
        $this->addRelation('CommonExecHistoriquePrix', 'CommonExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecHistoriquePrixs');
        $this->addRelation('CommonExecInscritContrat', 'CommonExecInscritContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecInscritContrats');
        $this->addRelation('CommonExecLivrableContrat', 'CommonExecLivrableContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecLivrableContrats');
        $this->addRelation('CommonExecPhase', 'CommonExecPhase', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPhases');
        $this->addRelation('CommonExecPiece', 'CommonExecPiece', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieces');
        $this->addRelation('CommonExecPieceAvenant', 'CommonExecPieceAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieceAvenants');
        $this->addRelation('CommonExecPieceContrat', 'CommonExecPieceContrat', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieceContrats');
        $this->addRelation('CommonExecPieceDossierpaiement', 'CommonExecPieceDossierpaiement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieceDossierpaiements');
        $this->addRelation('CommonExecPieceEvenement', 'CommonExecPieceEvenement', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieceEvenements');
        $this->addRelation('CommonExecPieceFacture', 'CommonExecPieceFacture', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPieceFactures');
        $this->addRelation('CommonExecPrix', 'CommonExecPrix', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPrixs');
        $this->addRelation('CommonExecPrixAvenant', 'CommonExecPrixAvenant', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecPrixAvenants');
        $this->addRelation('CommonExecRepartition', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id_contrat' => 'id_contrat', ), null, null, 'CommonExecRepartitions');
    } // buildRelations()

} // CommonExecContratTableMap
