<?php



/**
 * This class defines the structure of the 't_donnee_complementaire' table.
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
class CommonTDonneeComplementaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDonneeComplementaireTableMap';

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
        $this->setName('t_donnee_complementaire');
        $this->setPhpName('CommonTDonneeComplementaire');
        $this->setClassname('CommonTDonneeComplementaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', true, null, null);
        $this->addColumn('id_tranche_type_prix', 'IdTrancheTypePrix', 'INTEGER', false, null, null);
        $this->addColumn('id_forme_prix', 'IdFormePrix', 'INTEGER', false, null, null);
        $this->addColumn('id_ccag_reference', 'IdCcagReference', 'INTEGER', false, null, null);
        $this->addColumn('reconductible', 'Reconductible', 'BOOLEAN', false, 1, null);
        $this->addColumn('nombre_reconductions', 'NombreReconductions', 'INTEGER', false, null, null);
        $this->addColumn('modalites_reconduction', 'ModalitesReconduction', 'VARCHAR', false, 1000, null);
        $this->addColumn('variantes_autorisees', 'VariantesAutorisees', 'BOOLEAN', false, 1, null);
        $this->addColumn('variantes_techniques_obligatoires', 'VariantesTechniquesObligatoires', 'BOOLEAN', false, 1, null);
        $this->addColumn('variantes_techniques_description', 'VariantesTechniquesDescription', 'VARCHAR', false, 100, null);
        $this->addColumn('decomposition_lots_techniques', 'DecompositionLotsTechniques', 'BOOLEAN', false, 1, null);
        $this->addColumn('id_duree_delai_description', 'IdDureeDelaiDescription', 'INTEGER', false, null, null);
        $this->addColumn('estimation_pf_att_pressenti', 'EstimationPfAttPressenti', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_bc_min_att_pressenti', 'EstimationBcMinAttPressenti', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_bc_max_att_pressenti', 'EstimationBcMaxAttPressenti', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_pf_tab_ouv_offre', 'EstimationPfTabOuvOffre', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_dqe_tab_ouv_offre', 'EstimationDqeTabOuvOffre', 'DECIMAL', false, 30, null);
        $this->addColumn('avis_attribution_present', 'AvisAttributionPresent', 'BOOLEAN', false, 1, false);
        $this->addColumn('estimation_pf_preinscription', 'EstimationPfPreinscription', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_bc_min_preinscription', 'EstimationBcMinPreinscription', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_bc_max_preinscription', 'EstimationBcMaxPreinscription', 'DECIMAL', false, 30, null);
        $this->addColumn('estimation_date_valeur_preinscription', 'EstimationDateValeurPreinscription', 'DATE', false, null, null);
        $this->addColumn('lieu_execution', 'LieuExecution', 'VARCHAR', false, 40, null);
        $this->addColumn('duree_marche', 'DureeMarche', 'INTEGER', false, null, null);
        $this->addColumn('duree_date_debut', 'DureeDateDebut', 'DATE', false, null, null);
        $this->addColumn('duree_date_fin', 'DureeDateFin', 'DATE', false, null, null);
        $this->addColumn('duree_description', 'DureeDescription', 'VARCHAR', false, 200, null);
        $this->addColumn('id_choix_mois_jour', 'IdChoixMoisJour', 'INTEGER', false, null, null);
        $this->addColumn('id_unite', 'IdUnite', 'INTEGER', false, null, null);
        $this->addColumn('id_nb_candidats_admis', 'IdNbCandidatsAdmis', 'INTEGER', false, null, null);
        $this->addColumn('nombre_candidats_fixe', 'NombreCandidatsFixe', 'INTEGER', false, null, null);
        $this->addColumn('nombre_candidats_min', 'NombreCandidatsMin', 'INTEGER', false, null, null);
        $this->addColumn('nombre_candidats_max', 'NombreCandidatsMax', 'INTEGER', false, null, null);
        $this->addColumn('delai_validite_offres', 'DelaiValiditeOffres', 'INTEGER', false, null, null);
        $this->addColumn('phase_successive', 'PhaseSuccessive', 'BOOLEAN', false, 1, null);
        $this->addColumn('id_groupement_attributaire', 'IdGroupementAttributaire', 'INTEGER', false, null, null);
        $this->addColumn('id_critere_attribution', 'IdCritereAttribution', 'INTEGER', false, null, null);
        $this->addColumn('type_prestation', 'TypePrestation', 'INTEGER', true, null, 1);
        $this->addColumn('delai_partiel', 'DelaiPartiel', 'CHAR', true, null, '0');
        $this->getColumn('delai_partiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('adresse_retrais_dossiers', 'AdresseRetraisDossiers', 'CLOB', false, null, null);
        $this->addColumn('adresse_depot_offres', 'AdresseDepotOffres', 'CLOB', false, null, null);
        $this->addColumn('lieu_ouverture_plis', 'LieuOuverturePlis', 'CLOB', false, null, null);
        $this->addColumn('pieces_dossier_admin', 'PiecesDossierAdmin', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_tr_pieces_dossier_admin', 'IdTrPiecesDossierAdmin', 'INTEGER', false, null, null);
        $this->addColumn('pieces_dossier_tech', 'PiecesDossierTech', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_tr_pieces_dossier_tech', 'IdTrPiecesDossierTech', 'INTEGER', false, null, null);
        $this->addColumn('pieces_dossier_additif', 'PiecesDossierAdditif', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_tr_pieces_dossier_additif', 'IdTrPiecesDossierAdditif', 'INTEGER', false, null, null);
        $this->addColumn('id_tr_adresse_retrais_dossiers', 'IdTrAdresseRetraisDossiers', 'INTEGER', false, null, null);
        $this->addColumn('id_tr_adresse_depot_offres', 'IdTrAdresseDepotOffres', 'INTEGER', false, null, null);
        $this->addColumn('id_tr_lieu_ouverture_plis', 'IdTrLieuOuverturePlis', 'INTEGER', false, null, null);
        $this->addColumn('caution_provisoire', 'CautionProvisoire', 'VARCHAR', false, 255, null);
        $this->addColumn('prix_aquisition_plans', 'PrixAquisitionPlans', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillon', 'AddEchantillon', 'VARCHAR', false, 255, null);
        $this->addColumn('id_tr_add_echantillon', 'IdTrAddEchantillon', 'INTEGER', false, null, null);
        $this->addColumn('date_limite_echantillon', 'DateLimiteEchantillon', 'VARCHAR', false, 50, null);
        $this->addColumn('add_reunion', 'AddReunion', 'VARCHAR', false, 255, null);
        $this->addColumn('id_tr_add_reunion', 'IdTrAddReunion', 'INTEGER', false, null, null);
        $this->addColumn('date_reunion', 'DateReunion', 'VARCHAR', false, 50, null);
        $this->addColumn('reunion', 'Reunion', 'CHAR', true, null, '0');
        $this->getColumn('reunion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visites_lieux', 'VisitesLieux', 'CHAR', true, null, '0');
        $this->getColumn('visites_lieux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('echantillon', 'Echantillon', 'CHAR', true, null, '0');
        $this->getColumn('echantillon', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('variantes', 'Variantes', 'CHAR', false, null, null);
        $this->addColumn('variante_calcule', 'VarianteCalcule', 'CHAR', true, null, '0');
        $this->getColumn('variante_calcule', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('criteres_identiques', 'CriteresIdentiques', 'CHAR', true, null, '0');
        $this->getColumn('criteres_identiques', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_expression_besoin', 'DateExpressionBesoin', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_ref_contact_1', 'IdRefContact1', 'INTEGER', false, null, null);
        $this->addColumn('id_ref_contact_2', 'IdRefContact2', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTLotTechnique', 'CommonTLotTechnique', RelationMap::ONE_TO_MANY, array('id_donnee_complementaire' => 'id_donnee_complementaire', ), null, null, 'CommonTLotTechniques');
        $this->addRelation('CommonTTranche', 'CommonTTranche', RelationMap::ONE_TO_MANY, array('id_donnee_complementaire' => 'id_donnee_complementaire', ), null, null, 'CommonTTranches');
    } // buildRelations()

} // CommonTDonneeComplementaireTableMap
