<?php


/**
 * Base static class for performing query and update operations on the 't_donnee_complementaire' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTDonneeComplementairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_donnee_complementaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDonneeComplementaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDonneeComplementaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 68;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 68;

    /** the column name for the id_donnee_complementaire field */
    const ID_DONNEE_COMPLEMENTAIRE = 't_donnee_complementaire.id_donnee_complementaire';

    /** the column name for the id_tranche_type_prix field */
    const ID_TRANCHE_TYPE_PRIX = 't_donnee_complementaire.id_tranche_type_prix';

    /** the column name for the id_forme_prix field */
    const ID_FORME_PRIX = 't_donnee_complementaire.id_forme_prix';

    /** the column name for the id_ccag_reference field */
    const ID_CCAG_REFERENCE = 't_donnee_complementaire.id_ccag_reference';

    /** the column name for the reconductible field */
    const RECONDUCTIBLE = 't_donnee_complementaire.reconductible';

    /** the column name for the nombre_reconductions field */
    const NOMBRE_RECONDUCTIONS = 't_donnee_complementaire.nombre_reconductions';

    /** the column name for the modalites_reconduction field */
    const MODALITES_RECONDUCTION = 't_donnee_complementaire.modalites_reconduction';

    /** the column name for the variantes_autorisees field */
    const VARIANTES_AUTORISEES = 't_donnee_complementaire.variantes_autorisees';

    /** the column name for the variantes_techniques_obligatoires field */
    const VARIANTES_TECHNIQUES_OBLIGATOIRES = 't_donnee_complementaire.variantes_techniques_obligatoires';

    /** the column name for the variantes_techniques_description field */
    const VARIANTES_TECHNIQUES_DESCRIPTION = 't_donnee_complementaire.variantes_techniques_description';

    /** the column name for the decomposition_lots_techniques field */
    const DECOMPOSITION_LOTS_TECHNIQUES = 't_donnee_complementaire.decomposition_lots_techniques';

    /** the column name for the id_duree_delai_description field */
    const ID_DUREE_DELAI_DESCRIPTION = 't_donnee_complementaire.id_duree_delai_description';

    /** the column name for the estimation_pf_att_pressenti field */
    const ESTIMATION_PF_ATT_PRESSENTI = 't_donnee_complementaire.estimation_pf_att_pressenti';

    /** the column name for the estimation_bc_min_att_pressenti field */
    const ESTIMATION_BC_MIN_ATT_PRESSENTI = 't_donnee_complementaire.estimation_bc_min_att_pressenti';

    /** the column name for the estimation_bc_max_att_pressenti field */
    const ESTIMATION_BC_MAX_ATT_PRESSENTI = 't_donnee_complementaire.estimation_bc_max_att_pressenti';

    /** the column name for the estimation_pf_tab_ouv_offre field */
    const ESTIMATION_PF_TAB_OUV_OFFRE = 't_donnee_complementaire.estimation_pf_tab_ouv_offre';

    /** the column name for the estimation_dqe_tab_ouv_offre field */
    const ESTIMATION_DQE_TAB_OUV_OFFRE = 't_donnee_complementaire.estimation_dqe_tab_ouv_offre';

    /** the column name for the avis_attribution_present field */
    const AVIS_ATTRIBUTION_PRESENT = 't_donnee_complementaire.avis_attribution_present';

    /** the column name for the estimation_pf_preinscription field */
    const ESTIMATION_PF_PREINSCRIPTION = 't_donnee_complementaire.estimation_pf_preinscription';

    /** the column name for the estimation_bc_min_preinscription field */
    const ESTIMATION_BC_MIN_PREINSCRIPTION = 't_donnee_complementaire.estimation_bc_min_preinscription';

    /** the column name for the estimation_bc_max_preinscription field */
    const ESTIMATION_BC_MAX_PREINSCRIPTION = 't_donnee_complementaire.estimation_bc_max_preinscription';

    /** the column name for the estimation_date_valeur_preinscription field */
    const ESTIMATION_DATE_VALEUR_PREINSCRIPTION = 't_donnee_complementaire.estimation_date_valeur_preinscription';

    /** the column name for the lieu_execution field */
    const LIEU_EXECUTION = 't_donnee_complementaire.lieu_execution';

    /** the column name for the duree_marche field */
    const DUREE_MARCHE = 't_donnee_complementaire.duree_marche';

    /** the column name for the duree_date_debut field */
    const DUREE_DATE_DEBUT = 't_donnee_complementaire.duree_date_debut';

    /** the column name for the duree_date_fin field */
    const DUREE_DATE_FIN = 't_donnee_complementaire.duree_date_fin';

    /** the column name for the duree_description field */
    const DUREE_DESCRIPTION = 't_donnee_complementaire.duree_description';

    /** the column name for the id_choix_mois_jour field */
    const ID_CHOIX_MOIS_JOUR = 't_donnee_complementaire.id_choix_mois_jour';

    /** the column name for the id_unite field */
    const ID_UNITE = 't_donnee_complementaire.id_unite';

    /** the column name for the id_nb_candidats_admis field */
    const ID_NB_CANDIDATS_ADMIS = 't_donnee_complementaire.id_nb_candidats_admis';

    /** the column name for the nombre_candidats_fixe field */
    const NOMBRE_CANDIDATS_FIXE = 't_donnee_complementaire.nombre_candidats_fixe';

    /** the column name for the nombre_candidats_min field */
    const NOMBRE_CANDIDATS_MIN = 't_donnee_complementaire.nombre_candidats_min';

    /** the column name for the nombre_candidats_max field */
    const NOMBRE_CANDIDATS_MAX = 't_donnee_complementaire.nombre_candidats_max';

    /** the column name for the delai_validite_offres field */
    const DELAI_VALIDITE_OFFRES = 't_donnee_complementaire.delai_validite_offres';

    /** the column name for the phase_successive field */
    const PHASE_SUCCESSIVE = 't_donnee_complementaire.phase_successive';

    /** the column name for the id_groupement_attributaire field */
    const ID_GROUPEMENT_ATTRIBUTAIRE = 't_donnee_complementaire.id_groupement_attributaire';

    /** the column name for the id_critere_attribution field */
    const ID_CRITERE_ATTRIBUTION = 't_donnee_complementaire.id_critere_attribution';

    /** the column name for the type_prestation field */
    const TYPE_PRESTATION = 't_donnee_complementaire.type_prestation';

    /** the column name for the delai_partiel field */
    const DELAI_PARTIEL = 't_donnee_complementaire.delai_partiel';

    /** the column name for the adresse_retrais_dossiers field */
    const ADRESSE_RETRAIS_DOSSIERS = 't_donnee_complementaire.adresse_retrais_dossiers';

    /** the column name for the adresse_depot_offres field */
    const ADRESSE_DEPOT_OFFRES = 't_donnee_complementaire.adresse_depot_offres';

    /** the column name for the lieu_ouverture_plis field */
    const LIEU_OUVERTURE_PLIS = 't_donnee_complementaire.lieu_ouverture_plis';

    /** the column name for the pieces_dossier_admin field */
    const PIECES_DOSSIER_ADMIN = 't_donnee_complementaire.pieces_dossier_admin';

    /** the column name for the id_tr_pieces_dossier_admin field */
    const ID_TR_PIECES_DOSSIER_ADMIN = 't_donnee_complementaire.id_tr_pieces_dossier_admin';

    /** the column name for the pieces_dossier_tech field */
    const PIECES_DOSSIER_TECH = 't_donnee_complementaire.pieces_dossier_tech';

    /** the column name for the id_tr_pieces_dossier_tech field */
    const ID_TR_PIECES_DOSSIER_TECH = 't_donnee_complementaire.id_tr_pieces_dossier_tech';

    /** the column name for the pieces_dossier_additif field */
    const PIECES_DOSSIER_ADDITIF = 't_donnee_complementaire.pieces_dossier_additif';

    /** the column name for the id_tr_pieces_dossier_additif field */
    const ID_TR_PIECES_DOSSIER_ADDITIF = 't_donnee_complementaire.id_tr_pieces_dossier_additif';

    /** the column name for the id_tr_adresse_retrais_dossiers field */
    const ID_TR_ADRESSE_RETRAIS_DOSSIERS = 't_donnee_complementaire.id_tr_adresse_retrais_dossiers';

    /** the column name for the id_tr_adresse_depot_offres field */
    const ID_TR_ADRESSE_DEPOT_OFFRES = 't_donnee_complementaire.id_tr_adresse_depot_offres';

    /** the column name for the id_tr_lieu_ouverture_plis field */
    const ID_TR_LIEU_OUVERTURE_PLIS = 't_donnee_complementaire.id_tr_lieu_ouverture_plis';

    /** the column name for the caution_provisoire field */
    const CAUTION_PROVISOIRE = 't_donnee_complementaire.caution_provisoire';

    /** the column name for the prix_aquisition_plans field */
    const PRIX_AQUISITION_PLANS = 't_donnee_complementaire.prix_aquisition_plans';

    /** the column name for the add_echantillon field */
    const ADD_ECHANTILLON = 't_donnee_complementaire.add_echantillon';

    /** the column name for the id_tr_add_echantillon field */
    const ID_TR_ADD_ECHANTILLON = 't_donnee_complementaire.id_tr_add_echantillon';

    /** the column name for the date_limite_echantillon field */
    const DATE_LIMITE_ECHANTILLON = 't_donnee_complementaire.date_limite_echantillon';

    /** the column name for the add_reunion field */
    const ADD_REUNION = 't_donnee_complementaire.add_reunion';

    /** the column name for the id_tr_add_reunion field */
    const ID_TR_ADD_REUNION = 't_donnee_complementaire.id_tr_add_reunion';

    /** the column name for the date_reunion field */
    const DATE_REUNION = 't_donnee_complementaire.date_reunion';

    /** the column name for the reunion field */
    const REUNION = 't_donnee_complementaire.reunion';

    /** the column name for the visites_lieux field */
    const VISITES_LIEUX = 't_donnee_complementaire.visites_lieux';

    /** the column name for the echantillon field */
    const ECHANTILLON = 't_donnee_complementaire.echantillon';

    /** the column name for the variantes field */
    const VARIANTES = 't_donnee_complementaire.variantes';

    /** the column name for the variante_calcule field */
    const VARIANTE_CALCULE = 't_donnee_complementaire.variante_calcule';

    /** the column name for the criteres_identiques field */
    const CRITERES_IDENTIQUES = 't_donnee_complementaire.criteres_identiques';

    /** the column name for the date_expression_besoin field */
    const DATE_EXPRESSION_BESOIN = 't_donnee_complementaire.date_expression_besoin';

    /** the column name for the id_ref_contact_1 field */
    const ID_REF_CONTACT_1 = 't_donnee_complementaire.id_ref_contact_1';

    /** the column name for the id_ref_contact_2 field */
    const ID_REF_CONTACT_2 = 't_donnee_complementaire.id_ref_contact_2';

    /** The enumerated values for the delai_partiel field */
    const DELAI_PARTIEL_0 = '0';
    const DELAI_PARTIEL_1 = '1';

    /** The enumerated values for the reunion field */
    const REUNION_0 = '0';
    const REUNION_1 = '1';

    /** The enumerated values for the visites_lieux field */
    const VISITES_LIEUX_0 = '0';
    const VISITES_LIEUX_1 = '1';

    /** The enumerated values for the echantillon field */
    const ECHANTILLON_0 = '0';
    const ECHANTILLON_1 = '1';

    /** The enumerated values for the variante_calcule field */
    const VARIANTE_CALCULE_0 = '0';
    const VARIANTE_CALCULE_1 = '1';

    /** The enumerated values for the criteres_identiques field */
    const CRITERES_IDENTIQUES_0 = '0';
    const CRITERES_IDENTIQUES_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDonneeComplementaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDonneeComplementaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDonneeComplementairePeer::$fieldNames[CommonTDonneeComplementairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDonneeComplementaire', 'IdTrancheTypePrix', 'IdFormePrix', 'IdCcagReference', 'Reconductible', 'NombreReconductions', 'ModalitesReconduction', 'VariantesAutorisees', 'VariantesTechniquesObligatoires', 'VariantesTechniquesDescription', 'DecompositionLotsTechniques', 'IdDureeDelaiDescription', 'EstimationPfAttPressenti', 'EstimationBcMinAttPressenti', 'EstimationBcMaxAttPressenti', 'EstimationPfTabOuvOffre', 'EstimationDqeTabOuvOffre', 'AvisAttributionPresent', 'EstimationPfPreinscription', 'EstimationBcMinPreinscription', 'EstimationBcMaxPreinscription', 'EstimationDateValeurPreinscription', 'LieuExecution', 'DureeMarche', 'DureeDateDebut', 'DureeDateFin', 'DureeDescription', 'IdChoixMoisJour', 'IdUnite', 'IdNbCandidatsAdmis', 'NombreCandidatsFixe', 'NombreCandidatsMin', 'NombreCandidatsMax', 'DelaiValiditeOffres', 'PhaseSuccessive', 'IdGroupementAttributaire', 'IdCritereAttribution', 'TypePrestation', 'DelaiPartiel', 'AdresseRetraisDossiers', 'AdresseDepotOffres', 'LieuOuverturePlis', 'PiecesDossierAdmin', 'IdTrPiecesDossierAdmin', 'PiecesDossierTech', 'IdTrPiecesDossierTech', 'PiecesDossierAdditif', 'IdTrPiecesDossierAdditif', 'IdTrAdresseRetraisDossiers', 'IdTrAdresseDepotOffres', 'IdTrLieuOuverturePlis', 'CautionProvisoire', 'PrixAquisitionPlans', 'AddEchantillon', 'IdTrAddEchantillon', 'DateLimiteEchantillon', 'AddReunion', 'IdTrAddReunion', 'DateReunion', 'Reunion', 'VisitesLieux', 'Echantillon', 'Variantes', 'VarianteCalcule', 'CriteresIdentiques', 'DateExpressionBesoin', 'IdRefContact1', 'IdRefContact2', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDonneeComplementaire', 'idTrancheTypePrix', 'idFormePrix', 'idCcagReference', 'reconductible', 'nombreReconductions', 'modalitesReconduction', 'variantesAutorisees', 'variantesTechniquesObligatoires', 'variantesTechniquesDescription', 'decompositionLotsTechniques', 'idDureeDelaiDescription', 'estimationPfAttPressenti', 'estimationBcMinAttPressenti', 'estimationBcMaxAttPressenti', 'estimationPfTabOuvOffre', 'estimationDqeTabOuvOffre', 'avisAttributionPresent', 'estimationPfPreinscription', 'estimationBcMinPreinscription', 'estimationBcMaxPreinscription', 'estimationDateValeurPreinscription', 'lieuExecution', 'dureeMarche', 'dureeDateDebut', 'dureeDateFin', 'dureeDescription', 'idChoixMoisJour', 'idUnite', 'idNbCandidatsAdmis', 'nombreCandidatsFixe', 'nombreCandidatsMin', 'nombreCandidatsMax', 'delaiValiditeOffres', 'phaseSuccessive', 'idGroupementAttributaire', 'idCritereAttribution', 'typePrestation', 'delaiPartiel', 'adresseRetraisDossiers', 'adresseDepotOffres', 'lieuOuverturePlis', 'piecesDossierAdmin', 'idTrPiecesDossierAdmin', 'piecesDossierTech', 'idTrPiecesDossierTech', 'piecesDossierAdditif', 'idTrPiecesDossierAdditif', 'idTrAdresseRetraisDossiers', 'idTrAdresseDepotOffres', 'idTrLieuOuverturePlis', 'cautionProvisoire', 'prixAquisitionPlans', 'addEchantillon', 'idTrAddEchantillon', 'dateLimiteEchantillon', 'addReunion', 'idTrAddReunion', 'dateReunion', 'reunion', 'visitesLieux', 'echantillon', 'variantes', 'varianteCalcule', 'criteresIdentiques', 'dateExpressionBesoin', 'idRefContact1', 'idRefContact2', ),
        BasePeer::TYPE_COLNAME => array (CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX, CommonTDonneeComplementairePeer::ID_FORME_PRIX, CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE, CommonTDonneeComplementairePeer::RECONDUCTIBLE, CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS, CommonTDonneeComplementairePeer::MODALITES_RECONDUCTION, CommonTDonneeComplementairePeer::VARIANTES_AUTORISEES, CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_OBLIGATOIRES, CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_DESCRIPTION, CommonTDonneeComplementairePeer::DECOMPOSITION_LOTS_TECHNIQUES, CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION, CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI, CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE, CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE, CommonTDonneeComplementairePeer::AVIS_ATTRIBUTION_PRESENT, CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION, CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION, CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION, CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, CommonTDonneeComplementairePeer::LIEU_EXECUTION, CommonTDonneeComplementairePeer::DUREE_MARCHE, CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT, CommonTDonneeComplementairePeer::DUREE_DATE_FIN, CommonTDonneeComplementairePeer::DUREE_DESCRIPTION, CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR, CommonTDonneeComplementairePeer::ID_UNITE, CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX, CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES, CommonTDonneeComplementairePeer::PHASE_SUCCESSIVE, CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE, CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION, CommonTDonneeComplementairePeer::TYPE_PRESTATION, CommonTDonneeComplementairePeer::DELAI_PARTIEL, CommonTDonneeComplementairePeer::ADRESSE_RETRAIS_DOSSIERS, CommonTDonneeComplementairePeer::ADRESSE_DEPOT_OFFRES, CommonTDonneeComplementairePeer::LIEU_OUVERTURE_PLIS, CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADMIN, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN, CommonTDonneeComplementairePeer::PIECES_DOSSIER_TECH, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH, CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADDITIF, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF, CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES, CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS, CommonTDonneeComplementairePeer::CAUTION_PROVISOIRE, CommonTDonneeComplementairePeer::PRIX_AQUISITION_PLANS, CommonTDonneeComplementairePeer::ADD_ECHANTILLON, CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON, CommonTDonneeComplementairePeer::DATE_LIMITE_ECHANTILLON, CommonTDonneeComplementairePeer::ADD_REUNION, CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION, CommonTDonneeComplementairePeer::DATE_REUNION, CommonTDonneeComplementairePeer::REUNION, CommonTDonneeComplementairePeer::VISITES_LIEUX, CommonTDonneeComplementairePeer::ECHANTILLON, CommonTDonneeComplementairePeer::VARIANTES, CommonTDonneeComplementairePeer::VARIANTE_CALCULE, CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES, CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN, CommonTDonneeComplementairePeer::ID_REF_CONTACT_1, CommonTDonneeComplementairePeer::ID_REF_CONTACT_2, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DONNEE_COMPLEMENTAIRE', 'ID_TRANCHE_TYPE_PRIX', 'ID_FORME_PRIX', 'ID_CCAG_REFERENCE', 'RECONDUCTIBLE', 'NOMBRE_RECONDUCTIONS', 'MODALITES_RECONDUCTION', 'VARIANTES_AUTORISEES', 'VARIANTES_TECHNIQUES_OBLIGATOIRES', 'VARIANTES_TECHNIQUES_DESCRIPTION', 'DECOMPOSITION_LOTS_TECHNIQUES', 'ID_DUREE_DELAI_DESCRIPTION', 'ESTIMATION_PF_ATT_PRESSENTI', 'ESTIMATION_BC_MIN_ATT_PRESSENTI', 'ESTIMATION_BC_MAX_ATT_PRESSENTI', 'ESTIMATION_PF_TAB_OUV_OFFRE', 'ESTIMATION_DQE_TAB_OUV_OFFRE', 'AVIS_ATTRIBUTION_PRESENT', 'ESTIMATION_PF_PREINSCRIPTION', 'ESTIMATION_BC_MIN_PREINSCRIPTION', 'ESTIMATION_BC_MAX_PREINSCRIPTION', 'ESTIMATION_DATE_VALEUR_PREINSCRIPTION', 'LIEU_EXECUTION', 'DUREE_MARCHE', 'DUREE_DATE_DEBUT', 'DUREE_DATE_FIN', 'DUREE_DESCRIPTION', 'ID_CHOIX_MOIS_JOUR', 'ID_UNITE', 'ID_NB_CANDIDATS_ADMIS', 'NOMBRE_CANDIDATS_FIXE', 'NOMBRE_CANDIDATS_MIN', 'NOMBRE_CANDIDATS_MAX', 'DELAI_VALIDITE_OFFRES', 'PHASE_SUCCESSIVE', 'ID_GROUPEMENT_ATTRIBUTAIRE', 'ID_CRITERE_ATTRIBUTION', 'TYPE_PRESTATION', 'DELAI_PARTIEL', 'ADRESSE_RETRAIS_DOSSIERS', 'ADRESSE_DEPOT_OFFRES', 'LIEU_OUVERTURE_PLIS', 'PIECES_DOSSIER_ADMIN', 'ID_TR_PIECES_DOSSIER_ADMIN', 'PIECES_DOSSIER_TECH', 'ID_TR_PIECES_DOSSIER_TECH', 'PIECES_DOSSIER_ADDITIF', 'ID_TR_PIECES_DOSSIER_ADDITIF', 'ID_TR_ADRESSE_RETRAIS_DOSSIERS', 'ID_TR_ADRESSE_DEPOT_OFFRES', 'ID_TR_LIEU_OUVERTURE_PLIS', 'CAUTION_PROVISOIRE', 'PRIX_AQUISITION_PLANS', 'ADD_ECHANTILLON', 'ID_TR_ADD_ECHANTILLON', 'DATE_LIMITE_ECHANTILLON', 'ADD_REUNION', 'ID_TR_ADD_REUNION', 'DATE_REUNION', 'REUNION', 'VISITES_LIEUX', 'ECHANTILLON', 'VARIANTES', 'VARIANTE_CALCULE', 'CRITERES_IDENTIQUES', 'DATE_EXPRESSION_BESOIN', 'ID_REF_CONTACT_1', 'ID_REF_CONTACT_2', ),
        BasePeer::TYPE_FIELDNAME => array ('id_donnee_complementaire', 'id_tranche_type_prix', 'id_forme_prix', 'id_ccag_reference', 'reconductible', 'nombre_reconductions', 'modalites_reconduction', 'variantes_autorisees', 'variantes_techniques_obligatoires', 'variantes_techniques_description', 'decomposition_lots_techniques', 'id_duree_delai_description', 'estimation_pf_att_pressenti', 'estimation_bc_min_att_pressenti', 'estimation_bc_max_att_pressenti', 'estimation_pf_tab_ouv_offre', 'estimation_dqe_tab_ouv_offre', 'avis_attribution_present', 'estimation_pf_preinscription', 'estimation_bc_min_preinscription', 'estimation_bc_max_preinscription', 'estimation_date_valeur_preinscription', 'lieu_execution', 'duree_marche', 'duree_date_debut', 'duree_date_fin', 'duree_description', 'id_choix_mois_jour', 'id_unite', 'id_nb_candidats_admis', 'nombre_candidats_fixe', 'nombre_candidats_min', 'nombre_candidats_max', 'delai_validite_offres', 'phase_successive', 'id_groupement_attributaire', 'id_critere_attribution', 'type_prestation', 'delai_partiel', 'adresse_retrais_dossiers', 'adresse_depot_offres', 'lieu_ouverture_plis', 'pieces_dossier_admin', 'id_tr_pieces_dossier_admin', 'pieces_dossier_tech', 'id_tr_pieces_dossier_tech', 'pieces_dossier_additif', 'id_tr_pieces_dossier_additif', 'id_tr_adresse_retrais_dossiers', 'id_tr_adresse_depot_offres', 'id_tr_lieu_ouverture_plis', 'caution_provisoire', 'prix_aquisition_plans', 'add_echantillon', 'id_tr_add_echantillon', 'date_limite_echantillon', 'add_reunion', 'id_tr_add_reunion', 'date_reunion', 'reunion', 'visites_lieux', 'echantillon', 'variantes', 'variante_calcule', 'criteres_identiques', 'date_expression_besoin', 'id_ref_contact_1', 'id_ref_contact_2', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDonneeComplementairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDonneeComplementaire' => 0, 'IdTrancheTypePrix' => 1, 'IdFormePrix' => 2, 'IdCcagReference' => 3, 'Reconductible' => 4, 'NombreReconductions' => 5, 'ModalitesReconduction' => 6, 'VariantesAutorisees' => 7, 'VariantesTechniquesObligatoires' => 8, 'VariantesTechniquesDescription' => 9, 'DecompositionLotsTechniques' => 10, 'IdDureeDelaiDescription' => 11, 'EstimationPfAttPressenti' => 12, 'EstimationBcMinAttPressenti' => 13, 'EstimationBcMaxAttPressenti' => 14, 'EstimationPfTabOuvOffre' => 15, 'EstimationDqeTabOuvOffre' => 16, 'AvisAttributionPresent' => 17, 'EstimationPfPreinscription' => 18, 'EstimationBcMinPreinscription' => 19, 'EstimationBcMaxPreinscription' => 20, 'EstimationDateValeurPreinscription' => 21, 'LieuExecution' => 22, 'DureeMarche' => 23, 'DureeDateDebut' => 24, 'DureeDateFin' => 25, 'DureeDescription' => 26, 'IdChoixMoisJour' => 27, 'IdUnite' => 28, 'IdNbCandidatsAdmis' => 29, 'NombreCandidatsFixe' => 30, 'NombreCandidatsMin' => 31, 'NombreCandidatsMax' => 32, 'DelaiValiditeOffres' => 33, 'PhaseSuccessive' => 34, 'IdGroupementAttributaire' => 35, 'IdCritereAttribution' => 36, 'TypePrestation' => 37, 'DelaiPartiel' => 38, 'AdresseRetraisDossiers' => 39, 'AdresseDepotOffres' => 40, 'LieuOuverturePlis' => 41, 'PiecesDossierAdmin' => 42, 'IdTrPiecesDossierAdmin' => 43, 'PiecesDossierTech' => 44, 'IdTrPiecesDossierTech' => 45, 'PiecesDossierAdditif' => 46, 'IdTrPiecesDossierAdditif' => 47, 'IdTrAdresseRetraisDossiers' => 48, 'IdTrAdresseDepotOffres' => 49, 'IdTrLieuOuverturePlis' => 50, 'CautionProvisoire' => 51, 'PrixAquisitionPlans' => 52, 'AddEchantillon' => 53, 'IdTrAddEchantillon' => 54, 'DateLimiteEchantillon' => 55, 'AddReunion' => 56, 'IdTrAddReunion' => 57, 'DateReunion' => 58, 'Reunion' => 59, 'VisitesLieux' => 60, 'Echantillon' => 61, 'Variantes' => 62, 'VarianteCalcule' => 63, 'CriteresIdentiques' => 64, 'DateExpressionBesoin' => 65, 'IdRefContact1' => 66, 'IdRefContact2' => 67, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDonneeComplementaire' => 0, 'idTrancheTypePrix' => 1, 'idFormePrix' => 2, 'idCcagReference' => 3, 'reconductible' => 4, 'nombreReconductions' => 5, 'modalitesReconduction' => 6, 'variantesAutorisees' => 7, 'variantesTechniquesObligatoires' => 8, 'variantesTechniquesDescription' => 9, 'decompositionLotsTechniques' => 10, 'idDureeDelaiDescription' => 11, 'estimationPfAttPressenti' => 12, 'estimationBcMinAttPressenti' => 13, 'estimationBcMaxAttPressenti' => 14, 'estimationPfTabOuvOffre' => 15, 'estimationDqeTabOuvOffre' => 16, 'avisAttributionPresent' => 17, 'estimationPfPreinscription' => 18, 'estimationBcMinPreinscription' => 19, 'estimationBcMaxPreinscription' => 20, 'estimationDateValeurPreinscription' => 21, 'lieuExecution' => 22, 'dureeMarche' => 23, 'dureeDateDebut' => 24, 'dureeDateFin' => 25, 'dureeDescription' => 26, 'idChoixMoisJour' => 27, 'idUnite' => 28, 'idNbCandidatsAdmis' => 29, 'nombreCandidatsFixe' => 30, 'nombreCandidatsMin' => 31, 'nombreCandidatsMax' => 32, 'delaiValiditeOffres' => 33, 'phaseSuccessive' => 34, 'idGroupementAttributaire' => 35, 'idCritereAttribution' => 36, 'typePrestation' => 37, 'delaiPartiel' => 38, 'adresseRetraisDossiers' => 39, 'adresseDepotOffres' => 40, 'lieuOuverturePlis' => 41, 'piecesDossierAdmin' => 42, 'idTrPiecesDossierAdmin' => 43, 'piecesDossierTech' => 44, 'idTrPiecesDossierTech' => 45, 'piecesDossierAdditif' => 46, 'idTrPiecesDossierAdditif' => 47, 'idTrAdresseRetraisDossiers' => 48, 'idTrAdresseDepotOffres' => 49, 'idTrLieuOuverturePlis' => 50, 'cautionProvisoire' => 51, 'prixAquisitionPlans' => 52, 'addEchantillon' => 53, 'idTrAddEchantillon' => 54, 'dateLimiteEchantillon' => 55, 'addReunion' => 56, 'idTrAddReunion' => 57, 'dateReunion' => 58, 'reunion' => 59, 'visitesLieux' => 60, 'echantillon' => 61, 'variantes' => 62, 'varianteCalcule' => 63, 'criteresIdentiques' => 64, 'dateExpressionBesoin' => 65, 'idRefContact1' => 66, 'idRefContact2' => 67, ),
        BasePeer::TYPE_COLNAME => array (CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE => 0, CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX => 1, CommonTDonneeComplementairePeer::ID_FORME_PRIX => 2, CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE => 3, CommonTDonneeComplementairePeer::RECONDUCTIBLE => 4, CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS => 5, CommonTDonneeComplementairePeer::MODALITES_RECONDUCTION => 6, CommonTDonneeComplementairePeer::VARIANTES_AUTORISEES => 7, CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_OBLIGATOIRES => 8, CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_DESCRIPTION => 9, CommonTDonneeComplementairePeer::DECOMPOSITION_LOTS_TECHNIQUES => 10, CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION => 11, CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI => 12, CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI => 13, CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI => 14, CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE => 15, CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE => 16, CommonTDonneeComplementairePeer::AVIS_ATTRIBUTION_PRESENT => 17, CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION => 18, CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION => 19, CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION => 20, CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION => 21, CommonTDonneeComplementairePeer::LIEU_EXECUTION => 22, CommonTDonneeComplementairePeer::DUREE_MARCHE => 23, CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT => 24, CommonTDonneeComplementairePeer::DUREE_DATE_FIN => 25, CommonTDonneeComplementairePeer::DUREE_DESCRIPTION => 26, CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR => 27, CommonTDonneeComplementairePeer::ID_UNITE => 28, CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS => 29, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE => 30, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN => 31, CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX => 32, CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES => 33, CommonTDonneeComplementairePeer::PHASE_SUCCESSIVE => 34, CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE => 35, CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION => 36, CommonTDonneeComplementairePeer::TYPE_PRESTATION => 37, CommonTDonneeComplementairePeer::DELAI_PARTIEL => 38, CommonTDonneeComplementairePeer::ADRESSE_RETRAIS_DOSSIERS => 39, CommonTDonneeComplementairePeer::ADRESSE_DEPOT_OFFRES => 40, CommonTDonneeComplementairePeer::LIEU_OUVERTURE_PLIS => 41, CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADMIN => 42, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN => 43, CommonTDonneeComplementairePeer::PIECES_DOSSIER_TECH => 44, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH => 45, CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADDITIF => 46, CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF => 47, CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS => 48, CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES => 49, CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS => 50, CommonTDonneeComplementairePeer::CAUTION_PROVISOIRE => 51, CommonTDonneeComplementairePeer::PRIX_AQUISITION_PLANS => 52, CommonTDonneeComplementairePeer::ADD_ECHANTILLON => 53, CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON => 54, CommonTDonneeComplementairePeer::DATE_LIMITE_ECHANTILLON => 55, CommonTDonneeComplementairePeer::ADD_REUNION => 56, CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION => 57, CommonTDonneeComplementairePeer::DATE_REUNION => 58, CommonTDonneeComplementairePeer::REUNION => 59, CommonTDonneeComplementairePeer::VISITES_LIEUX => 60, CommonTDonneeComplementairePeer::ECHANTILLON => 61, CommonTDonneeComplementairePeer::VARIANTES => 62, CommonTDonneeComplementairePeer::VARIANTE_CALCULE => 63, CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES => 64, CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN => 65, CommonTDonneeComplementairePeer::ID_REF_CONTACT_1 => 66, CommonTDonneeComplementairePeer::ID_REF_CONTACT_2 => 67, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DONNEE_COMPLEMENTAIRE' => 0, 'ID_TRANCHE_TYPE_PRIX' => 1, 'ID_FORME_PRIX' => 2, 'ID_CCAG_REFERENCE' => 3, 'RECONDUCTIBLE' => 4, 'NOMBRE_RECONDUCTIONS' => 5, 'MODALITES_RECONDUCTION' => 6, 'VARIANTES_AUTORISEES' => 7, 'VARIANTES_TECHNIQUES_OBLIGATOIRES' => 8, 'VARIANTES_TECHNIQUES_DESCRIPTION' => 9, 'DECOMPOSITION_LOTS_TECHNIQUES' => 10, 'ID_DUREE_DELAI_DESCRIPTION' => 11, 'ESTIMATION_PF_ATT_PRESSENTI' => 12, 'ESTIMATION_BC_MIN_ATT_PRESSENTI' => 13, 'ESTIMATION_BC_MAX_ATT_PRESSENTI' => 14, 'ESTIMATION_PF_TAB_OUV_OFFRE' => 15, 'ESTIMATION_DQE_TAB_OUV_OFFRE' => 16, 'AVIS_ATTRIBUTION_PRESENT' => 17, 'ESTIMATION_PF_PREINSCRIPTION' => 18, 'ESTIMATION_BC_MIN_PREINSCRIPTION' => 19, 'ESTIMATION_BC_MAX_PREINSCRIPTION' => 20, 'ESTIMATION_DATE_VALEUR_PREINSCRIPTION' => 21, 'LIEU_EXECUTION' => 22, 'DUREE_MARCHE' => 23, 'DUREE_DATE_DEBUT' => 24, 'DUREE_DATE_FIN' => 25, 'DUREE_DESCRIPTION' => 26, 'ID_CHOIX_MOIS_JOUR' => 27, 'ID_UNITE' => 28, 'ID_NB_CANDIDATS_ADMIS' => 29, 'NOMBRE_CANDIDATS_FIXE' => 30, 'NOMBRE_CANDIDATS_MIN' => 31, 'NOMBRE_CANDIDATS_MAX' => 32, 'DELAI_VALIDITE_OFFRES' => 33, 'PHASE_SUCCESSIVE' => 34, 'ID_GROUPEMENT_ATTRIBUTAIRE' => 35, 'ID_CRITERE_ATTRIBUTION' => 36, 'TYPE_PRESTATION' => 37, 'DELAI_PARTIEL' => 38, 'ADRESSE_RETRAIS_DOSSIERS' => 39, 'ADRESSE_DEPOT_OFFRES' => 40, 'LIEU_OUVERTURE_PLIS' => 41, 'PIECES_DOSSIER_ADMIN' => 42, 'ID_TR_PIECES_DOSSIER_ADMIN' => 43, 'PIECES_DOSSIER_TECH' => 44, 'ID_TR_PIECES_DOSSIER_TECH' => 45, 'PIECES_DOSSIER_ADDITIF' => 46, 'ID_TR_PIECES_DOSSIER_ADDITIF' => 47, 'ID_TR_ADRESSE_RETRAIS_DOSSIERS' => 48, 'ID_TR_ADRESSE_DEPOT_OFFRES' => 49, 'ID_TR_LIEU_OUVERTURE_PLIS' => 50, 'CAUTION_PROVISOIRE' => 51, 'PRIX_AQUISITION_PLANS' => 52, 'ADD_ECHANTILLON' => 53, 'ID_TR_ADD_ECHANTILLON' => 54, 'DATE_LIMITE_ECHANTILLON' => 55, 'ADD_REUNION' => 56, 'ID_TR_ADD_REUNION' => 57, 'DATE_REUNION' => 58, 'REUNION' => 59, 'VISITES_LIEUX' => 60, 'ECHANTILLON' => 61, 'VARIANTES' => 62, 'VARIANTE_CALCULE' => 63, 'CRITERES_IDENTIQUES' => 64, 'DATE_EXPRESSION_BESOIN' => 65, 'ID_REF_CONTACT_1' => 66, 'ID_REF_CONTACT_2' => 67, ),
        BasePeer::TYPE_FIELDNAME => array ('id_donnee_complementaire' => 0, 'id_tranche_type_prix' => 1, 'id_forme_prix' => 2, 'id_ccag_reference' => 3, 'reconductible' => 4, 'nombre_reconductions' => 5, 'modalites_reconduction' => 6, 'variantes_autorisees' => 7, 'variantes_techniques_obligatoires' => 8, 'variantes_techniques_description' => 9, 'decomposition_lots_techniques' => 10, 'id_duree_delai_description' => 11, 'estimation_pf_att_pressenti' => 12, 'estimation_bc_min_att_pressenti' => 13, 'estimation_bc_max_att_pressenti' => 14, 'estimation_pf_tab_ouv_offre' => 15, 'estimation_dqe_tab_ouv_offre' => 16, 'avis_attribution_present' => 17, 'estimation_pf_preinscription' => 18, 'estimation_bc_min_preinscription' => 19, 'estimation_bc_max_preinscription' => 20, 'estimation_date_valeur_preinscription' => 21, 'lieu_execution' => 22, 'duree_marche' => 23, 'duree_date_debut' => 24, 'duree_date_fin' => 25, 'duree_description' => 26, 'id_choix_mois_jour' => 27, 'id_unite' => 28, 'id_nb_candidats_admis' => 29, 'nombre_candidats_fixe' => 30, 'nombre_candidats_min' => 31, 'nombre_candidats_max' => 32, 'delai_validite_offres' => 33, 'phase_successive' => 34, 'id_groupement_attributaire' => 35, 'id_critere_attribution' => 36, 'type_prestation' => 37, 'delai_partiel' => 38, 'adresse_retrais_dossiers' => 39, 'adresse_depot_offres' => 40, 'lieu_ouverture_plis' => 41, 'pieces_dossier_admin' => 42, 'id_tr_pieces_dossier_admin' => 43, 'pieces_dossier_tech' => 44, 'id_tr_pieces_dossier_tech' => 45, 'pieces_dossier_additif' => 46, 'id_tr_pieces_dossier_additif' => 47, 'id_tr_adresse_retrais_dossiers' => 48, 'id_tr_adresse_depot_offres' => 49, 'id_tr_lieu_ouverture_plis' => 50, 'caution_provisoire' => 51, 'prix_aquisition_plans' => 52, 'add_echantillon' => 53, 'id_tr_add_echantillon' => 54, 'date_limite_echantillon' => 55, 'add_reunion' => 56, 'id_tr_add_reunion' => 57, 'date_reunion' => 58, 'reunion' => 59, 'visites_lieux' => 60, 'echantillon' => 61, 'variantes' => 62, 'variante_calcule' => 63, 'criteres_identiques' => 64, 'date_expression_besoin' => 65, 'id_ref_contact_1' => 66, 'id_ref_contact_2' => 67, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTDonneeComplementairePeer::DELAI_PARTIEL => array(
            CommonTDonneeComplementairePeer::DELAI_PARTIEL_0,
            CommonTDonneeComplementairePeer::DELAI_PARTIEL_1,
        ),
        CommonTDonneeComplementairePeer::REUNION => array(
            CommonTDonneeComplementairePeer::REUNION_0,
            CommonTDonneeComplementairePeer::REUNION_1,
        ),
        CommonTDonneeComplementairePeer::VISITES_LIEUX => array(
            CommonTDonneeComplementairePeer::VISITES_LIEUX_0,
            CommonTDonneeComplementairePeer::VISITES_LIEUX_1,
        ),
        CommonTDonneeComplementairePeer::ECHANTILLON => array(
            CommonTDonneeComplementairePeer::ECHANTILLON_0,
            CommonTDonneeComplementairePeer::ECHANTILLON_1,
        ),
        CommonTDonneeComplementairePeer::VARIANTE_CALCULE => array(
            CommonTDonneeComplementairePeer::VARIANTE_CALCULE_0,
            CommonTDonneeComplementairePeer::VARIANTE_CALCULE_1,
        ),
        CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES => array(
            CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES_0,
            CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonTDonneeComplementairePeer::getFieldNames($toType);
        $key = isset(CommonTDonneeComplementairePeer::$fieldKeys[$fromType][$name]) ? CommonTDonneeComplementairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDonneeComplementairePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonTDonneeComplementairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDonneeComplementairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTDonneeComplementairePeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonTDonneeComplementairePeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonTDonneeComplementairePeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonTDonneeComplementairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDonneeComplementairePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TRANCHE_TYPE_PRIX);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_FORME_PRIX);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_CCAG_REFERENCE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::RECONDUCTIBLE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::NOMBRE_RECONDUCTIONS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::MODALITES_RECONDUCTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VARIANTES_AUTORISEES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_OBLIGATOIRES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VARIANTES_TECHNIQUES_DESCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DECOMPOSITION_LOTS_TECHNIQUES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_DUREE_DELAI_DESCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_PF_ATT_PRESSENTI);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_ATT_PRESSENTI);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_ATT_PRESSENTI);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_PF_TAB_OUV_OFFRE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_DQE_TAB_OUV_OFFRE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::AVIS_ATTRIBUTION_PRESENT);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_PF_PREINSCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_BC_MIN_PREINSCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_BC_MAX_PREINSCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::LIEU_EXECUTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DUREE_MARCHE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DUREE_DATE_DEBUT);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DUREE_DATE_FIN);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DUREE_DESCRIPTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_CHOIX_MOIS_JOUR);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_UNITE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_NB_CANDIDATS_ADMIS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_FIXE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MIN);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::NOMBRE_CANDIDATS_MAX);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DELAI_VALIDITE_OFFRES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::PHASE_SUCCESSIVE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_GROUPEMENT_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_CRITERE_ATTRIBUTION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::TYPE_PRESTATION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DELAI_PARTIEL);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ADRESSE_RETRAIS_DOSSIERS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ADRESSE_DEPOT_OFFRES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::LIEU_OUVERTURE_PLIS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADMIN);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADMIN);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::PIECES_DOSSIER_TECH);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_TECH);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::PIECES_DOSSIER_ADDITIF);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_PIECES_DOSSIER_ADDITIF);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_ADRESSE_DEPOT_OFFRES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_LIEU_OUVERTURE_PLIS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::PRIX_AQUISITION_PLANS);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ADD_ECHANTILLON);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_ADD_ECHANTILLON);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DATE_LIMITE_ECHANTILLON);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ADD_REUNION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_TR_ADD_REUNION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DATE_REUNION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::REUNION);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VISITES_LIEUX);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ECHANTILLON);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VARIANTES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::VARIANTE_CALCULE);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::CRITERES_IDENTIQUES);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::DATE_EXPRESSION_BESOIN);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_REF_CONTACT_1);
            $criteria->addSelectColumn(CommonTDonneeComplementairePeer::ID_REF_CONTACT_2);
        } else {
            $criteria->addSelectColumn($alias . '.id_donnee_complementaire');
            $criteria->addSelectColumn($alias . '.id_tranche_type_prix');
            $criteria->addSelectColumn($alias . '.id_forme_prix');
            $criteria->addSelectColumn($alias . '.id_ccag_reference');
            $criteria->addSelectColumn($alias . '.reconductible');
            $criteria->addSelectColumn($alias . '.nombre_reconductions');
            $criteria->addSelectColumn($alias . '.modalites_reconduction');
            $criteria->addSelectColumn($alias . '.variantes_autorisees');
            $criteria->addSelectColumn($alias . '.variantes_techniques_obligatoires');
            $criteria->addSelectColumn($alias . '.variantes_techniques_description');
            $criteria->addSelectColumn($alias . '.decomposition_lots_techniques');
            $criteria->addSelectColumn($alias . '.id_duree_delai_description');
            $criteria->addSelectColumn($alias . '.estimation_pf_att_pressenti');
            $criteria->addSelectColumn($alias . '.estimation_bc_min_att_pressenti');
            $criteria->addSelectColumn($alias . '.estimation_bc_max_att_pressenti');
            $criteria->addSelectColumn($alias . '.estimation_pf_tab_ouv_offre');
            $criteria->addSelectColumn($alias . '.estimation_dqe_tab_ouv_offre');
            $criteria->addSelectColumn($alias . '.avis_attribution_present');
            $criteria->addSelectColumn($alias . '.estimation_pf_preinscription');
            $criteria->addSelectColumn($alias . '.estimation_bc_min_preinscription');
            $criteria->addSelectColumn($alias . '.estimation_bc_max_preinscription');
            $criteria->addSelectColumn($alias . '.estimation_date_valeur_preinscription');
            $criteria->addSelectColumn($alias . '.lieu_execution');
            $criteria->addSelectColumn($alias . '.duree_marche');
            $criteria->addSelectColumn($alias . '.duree_date_debut');
            $criteria->addSelectColumn($alias . '.duree_date_fin');
            $criteria->addSelectColumn($alias . '.duree_description');
            $criteria->addSelectColumn($alias . '.id_choix_mois_jour');
            $criteria->addSelectColumn($alias . '.id_unite');
            $criteria->addSelectColumn($alias . '.id_nb_candidats_admis');
            $criteria->addSelectColumn($alias . '.nombre_candidats_fixe');
            $criteria->addSelectColumn($alias . '.nombre_candidats_min');
            $criteria->addSelectColumn($alias . '.nombre_candidats_max');
            $criteria->addSelectColumn($alias . '.delai_validite_offres');
            $criteria->addSelectColumn($alias . '.phase_successive');
            $criteria->addSelectColumn($alias . '.id_groupement_attributaire');
            $criteria->addSelectColumn($alias . '.id_critere_attribution');
            $criteria->addSelectColumn($alias . '.type_prestation');
            $criteria->addSelectColumn($alias . '.delai_partiel');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin');
            $criteria->addSelectColumn($alias . '.id_tr_pieces_dossier_admin');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech');
            $criteria->addSelectColumn($alias . '.id_tr_pieces_dossier_tech');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif');
            $criteria->addSelectColumn($alias . '.id_tr_pieces_dossier_additif');
            $criteria->addSelectColumn($alias . '.id_tr_adresse_retrais_dossiers');
            $criteria->addSelectColumn($alias . '.id_tr_adresse_depot_offres');
            $criteria->addSelectColumn($alias . '.id_tr_lieu_ouverture_plis');
            $criteria->addSelectColumn($alias . '.caution_provisoire');
            $criteria->addSelectColumn($alias . '.prix_aquisition_plans');
            $criteria->addSelectColumn($alias . '.add_echantillon');
            $criteria->addSelectColumn($alias . '.id_tr_add_echantillon');
            $criteria->addSelectColumn($alias . '.date_limite_echantillon');
            $criteria->addSelectColumn($alias . '.add_reunion');
            $criteria->addSelectColumn($alias . '.id_tr_add_reunion');
            $criteria->addSelectColumn($alias . '.date_reunion');
            $criteria->addSelectColumn($alias . '.reunion');
            $criteria->addSelectColumn($alias . '.visites_lieux');
            $criteria->addSelectColumn($alias . '.echantillon');
            $criteria->addSelectColumn($alias . '.variantes');
            $criteria->addSelectColumn($alias . '.variante_calcule');
            $criteria->addSelectColumn($alias . '.criteres_identiques');
            $criteria->addSelectColumn($alias . '.date_expression_besoin');
            $criteria->addSelectColumn($alias . '.id_ref_contact_1');
            $criteria->addSelectColumn($alias . '.id_ref_contact_2');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTDonneeComplementairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDonneeComplementairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDonneeComplementairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonTDonneeComplementaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDonneeComplementairePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonTDonneeComplementairePeer::populateObjects(CommonTDonneeComplementairePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDonneeComplementairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDonneeComplementairePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonTDonneeComplementaire $obj A CommonTDonneeComplementaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDonneeComplementaire();
            } // if key === null
            CommonTDonneeComplementairePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonTDonneeComplementaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDonneeComplementaire) {
                $key = (string) $value->getIdDonneeComplementaire();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDonneeComplementaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDonneeComplementairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDonneeComplementaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDonneeComplementairePeer::$instances[$key])) {
                return CommonTDonneeComplementairePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonTDonneeComplementairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDonneeComplementairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_donnee_complementaire
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonTDonneeComplementairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDonneeComplementairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDonneeComplementairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDonneeComplementairePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonTDonneeComplementaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDonneeComplementairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDonneeComplementairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDonneeComplementairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDonneeComplementairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDonneeComplementairePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonTDonneeComplementairePeer::DATABASE_NAME)->getTable(CommonTDonneeComplementairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDonneeComplementairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDonneeComplementairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDonneeComplementaireTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonTDonneeComplementairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDonneeComplementaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDonneeComplementaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDonneeComplementaire object
        }

        if ($criteria->containsKey(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE) && $criteria->keyContainsValue(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDonneeComplementairePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonTDonneeComplementaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDonneeComplementaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDonneeComplementairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE);
            $value = $criteria->remove(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE);
            if ($value) {
                $selectCriteria->add(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDonneeComplementairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTDonneeComplementaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDonneeComplementairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_donnee_complementaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDonneeComplementairePeer::TABLE_NAME, $con, CommonTDonneeComplementairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDonneeComplementairePeer::clearInstancePool();
            CommonTDonneeComplementairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDonneeComplementaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDonneeComplementaire object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDonneeComplementairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDonneeComplementaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTDonneeComplementairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDonneeComplementairePeer::DATABASE_NAME);
            $criteria->add(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDonneeComplementairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDonneeComplementairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDonneeComplementairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDonneeComplementaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDonneeComplementaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDonneeComplementairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDonneeComplementairePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonTDonneeComplementairePeer::DATABASE_NAME, CommonTDonneeComplementairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDonneeComplementaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDonneeComplementairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDonneeComplementairePeer::DATABASE_NAME);
        $criteria->add(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $pk);

        $v = CommonTDonneeComplementairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDonneeComplementaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDonneeComplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDonneeComplementairePeer::DATABASE_NAME);
            $criteria->add(CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $pks, Criteria::IN);
            $objs = CommonTDonneeComplementairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDonneeComplementairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDonneeComplementairePeer::buildTableMap();

