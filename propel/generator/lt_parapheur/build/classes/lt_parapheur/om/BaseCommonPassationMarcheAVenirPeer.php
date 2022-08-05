<?php


/**
 * Base static class for performing query and update operations on the 'passation_marche_a_venir' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPassationMarcheAVenirPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'passation_marche_a_venir';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonPassationMarcheAVenir';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonPassationMarcheAVenirTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the id field */
    const ID = 'passation_marche_a_venir.id';

    /** the column name for the organisme field */
    const ORGANISME = 'passation_marche_a_venir.organisme';

    /** the column name for the id_passation_consultation field */
    const ID_PASSATION_CONSULTATION = 'passation_marche_a_venir.id_passation_consultation';

    /** the column name for the lot field */
    const LOT = 'passation_marche_a_venir.lot';

    /** the column name for the montant_estime field */
    const MONTANT_ESTIME = 'passation_marche_a_venir.montant_estime';

    /** the column name for the id_nature_acte_juridique field */
    const ID_NATURE_ACTE_JURIDIQUE = 'passation_marche_a_venir.id_nature_acte_juridique';

    /** the column name for the forme_groupement field */
    const FORME_GROUPEMENT = 'passation_marche_a_venir.forme_groupement';

    /** the column name for the variante_autorisee field */
    const VARIANTE_AUTORISEE = 'passation_marche_a_venir.variante_autorisee';

    /** the column name for the variante_technique_obligatoire field */
    const VARIANTE_TECHNIQUE_OBLIGATOIRE = 'passation_marche_a_venir.variante_technique_obligatoire';

    /** the column name for the nombre_variante_technique field */
    const NOMBRE_VARIANTE_TECHNIQUE = 'passation_marche_a_venir.nombre_variante_technique';

    /** the column name for the description_variante_technique field */
    const DESCRIPTION_VARIANTE_TECHNIQUE = 'passation_marche_a_venir.description_variante_technique';

    /** the column name for the mode_execution_contrat field */
    const MODE_EXECUTION_CONTRAT = 'passation_marche_a_venir.mode_execution_contrat';

    /** the column name for the type_bon_commande field */
    const TYPE_BON_COMMANDE = 'passation_marche_a_venir.type_bon_commande';

    /** the column name for the min_bon_commande field */
    const MIN_BON_COMMANDE = 'passation_marche_a_venir.min_bon_commande';

    /** the column name for the max_bon_commande field */
    const MAX_BON_COMMANDE = 'passation_marche_a_venir.max_bon_commande';

    /** the column name for the duree_execution_marche_hors_reconduction field */
    const DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION = 'passation_marche_a_venir.duree_execution_marche_hors_reconduction';

    /** the column name for the nombre_reconduction field */
    const NOMBRE_RECONDUCTION = 'passation_marche_a_venir.nombre_reconduction';

    /** the column name for the duree_total_marche field */
    const DUREE_TOTAL_MARCHE = 'passation_marche_a_venir.duree_total_marche';

    /** the column name for the ccag_applicable field */
    const CCAG_APPLICABLE = 'passation_marche_a_venir.ccag_applicable';

    /** the column name for the marche_transversal field */
    const MARCHE_TRANSVERSAL = 'passation_marche_a_venir.marche_transversal';

    /** the column name for the date_reception_analyse_offre field */
    const DATE_RECEPTION_ANALYSE_OFFRE = 'passation_marche_a_venir.date_reception_analyse_offre';

    /** the column name for the date_formulation_observation_projet_rapport field */
    const DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT = 'passation_marche_a_venir.date_formulation_observation_projet_rapport';

    /** the column name for the date_retour_projet_rapport_finalise field */
    const DATE_RETOUR_PROJET_RAPPORT_FINALISE = 'passation_marche_a_venir.date_retour_projet_rapport_finalise';

    /** the column name for the date_validation_projet_rapport field */
    const DATE_VALIDATION_PROJET_RAPPORT = 'passation_marche_a_venir.date_validation_projet_rapport';

    /** the column name for the projet_rapport_vu_par field */
    const PROJET_RAPPORT_VU_PAR = 'passation_marche_a_venir.projet_rapport_vu_par';

    /** the column name for the date_reunion_attribution field */
    const DATE_REUNION_ATTRIBUTION = 'passation_marche_a_venir.date_reunion_attribution';

    /** the column name for the decision field */
    const DECISION = 'passation_marche_a_venir.decision';

    /** the column name for the date_envoi_courrier_condidat_non_retenu field */
    const DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU = 'passation_marche_a_venir.date_envoi_courrier_condidat_non_retenu';

    /** the column name for the date_signature_marche_pa field */
    const DATE_SIGNATURE_MARCHE_PA = 'passation_marche_a_venir.date_signature_marche_pa';

    /** the column name for the date_reception_controle_legalite field */
    const DATE_RECEPTION_CONTROLE_LEGALITE = 'passation_marche_a_venir.date_reception_controle_legalite';

    /** the column name for the date_formulation_observation_dossier field */
    const DATE_FORMULATION_OBSERVATION_DOSSIER = 'passation_marche_a_venir.date_formulation_observation_dossier';

    /** the column name for the date_retour_dossier_finalise field */
    const DATE_RETOUR_DOSSIER_FINALISE = 'passation_marche_a_venir.date_retour_dossier_finalise';

    /** the column name for the date_transmission_prefecture field */
    const DATE_TRANSMISSION_PREFECTURE = 'passation_marche_a_venir.date_transmission_prefecture';

    /** the column name for the dossier_vu_par field */
    const DOSSIER_VU_PAR = 'passation_marche_a_venir.dossier_vu_par';

    /** the column name for the date_validation_rapport_information field */
    const DATE_VALIDATION_RAPPORT_INFORMATION = 'passation_marche_a_venir.date_validation_rapport_information';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'passation_marche_a_venir.commentaire';

    /** The enumerated values for the variante_autorisee field */
    const VARIANTE_AUTORISEE_0 = '0';
    const VARIANTE_AUTORISEE_1 = '1';

    /** The enumerated values for the variante_technique_obligatoire field */
    const VARIANTE_TECHNIQUE_OBLIGATOIRE_0 = '0';
    const VARIANTE_TECHNIQUE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the marche_transversal field */
    const MARCHE_TRANSVERSAL_0 = '0';
    const MARCHE_TRANSVERSAL_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonPassationMarcheAVenir objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonPassationMarcheAVenir[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonPassationMarcheAVenirPeer::$fieldNames[CommonPassationMarcheAVenirPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdPassationConsultation', 'Lot', 'MontantEstime', 'IdNatureActeJuridique', 'FormeGroupement', 'VarianteAutorisee', 'VarianteTechniqueObligatoire', 'NombreVarianteTechnique', 'DescriptionVarianteTechnique', 'ModeExecutionContrat', 'TypeBonCommande', 'MinBonCommande', 'MaxBonCommande', 'DureeExecutionMarcheHorsReconduction', 'NombreReconduction', 'DureeTotalMarche', 'CcagApplicable', 'MarcheTransversal', 'DateReceptionAnalyseOffre', 'DateFormulationObservationProjetRapport', 'DateRetourProjetRapportFinalise', 'DateValidationProjetRapport', 'ProjetRapportVuPar', 'DateReunionAttribution', 'Decision', 'DateEnvoiCourrierCondidatNonRetenu', 'DateSignatureMarchePa', 'DateReceptionControleLegalite', 'DateFormulationObservationDossier', 'DateRetourDossierFinalise', 'DateTransmissionPrefecture', 'DossierVuPar', 'DateValidationRapportInformation', 'Commentaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idPassationConsultation', 'lot', 'montantEstime', 'idNatureActeJuridique', 'formeGroupement', 'varianteAutorisee', 'varianteTechniqueObligatoire', 'nombreVarianteTechnique', 'descriptionVarianteTechnique', 'modeExecutionContrat', 'typeBonCommande', 'minBonCommande', 'maxBonCommande', 'dureeExecutionMarcheHorsReconduction', 'nombreReconduction', 'dureeTotalMarche', 'ccagApplicable', 'marcheTransversal', 'dateReceptionAnalyseOffre', 'dateFormulationObservationProjetRapport', 'dateRetourProjetRapportFinalise', 'dateValidationProjetRapport', 'projetRapportVuPar', 'dateReunionAttribution', 'decision', 'dateEnvoiCourrierCondidatNonRetenu', 'dateSignatureMarchePa', 'dateReceptionControleLegalite', 'dateFormulationObservationDossier', 'dateRetourDossierFinalise', 'dateTransmissionPrefecture', 'dossierVuPar', 'dateValidationRapportInformation', 'commentaire', ),
        BasePeer::TYPE_COLNAME => array (CommonPassationMarcheAVenirPeer::ID, CommonPassationMarcheAVenirPeer::ORGANISME, CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, CommonPassationMarcheAVenirPeer::LOT, CommonPassationMarcheAVenirPeer::MONTANT_ESTIME, CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE, CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT, CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE, CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE, CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE, CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE, CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT, CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE, CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE, CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE, CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION, CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION, CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE, CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE, CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL, CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE, CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT, CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE, CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT, CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR, CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION, CommonPassationMarcheAVenirPeer::DECISION, CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU, CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA, CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE, CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER, CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE, CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE, CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR, CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION, CommonPassationMarcheAVenirPeer::COMMENTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_PASSATION_CONSULTATION', 'LOT', 'MONTANT_ESTIME', 'ID_NATURE_ACTE_JURIDIQUE', 'FORME_GROUPEMENT', 'VARIANTE_AUTORISEE', 'VARIANTE_TECHNIQUE_OBLIGATOIRE', 'NOMBRE_VARIANTE_TECHNIQUE', 'DESCRIPTION_VARIANTE_TECHNIQUE', 'MODE_EXECUTION_CONTRAT', 'TYPE_BON_COMMANDE', 'MIN_BON_COMMANDE', 'MAX_BON_COMMANDE', 'DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION', 'NOMBRE_RECONDUCTION', 'DUREE_TOTAL_MARCHE', 'CCAG_APPLICABLE', 'MARCHE_TRANSVERSAL', 'DATE_RECEPTION_ANALYSE_OFFRE', 'DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT', 'DATE_RETOUR_PROJET_RAPPORT_FINALISE', 'DATE_VALIDATION_PROJET_RAPPORT', 'PROJET_RAPPORT_VU_PAR', 'DATE_REUNION_ATTRIBUTION', 'DECISION', 'DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU', 'DATE_SIGNATURE_MARCHE_PA', 'DATE_RECEPTION_CONTROLE_LEGALITE', 'DATE_FORMULATION_OBSERVATION_DOSSIER', 'DATE_RETOUR_DOSSIER_FINALISE', 'DATE_TRANSMISSION_PREFECTURE', 'DOSSIER_VU_PAR', 'DATE_VALIDATION_RAPPORT_INFORMATION', 'COMMENTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_passation_consultation', 'lot', 'montant_estime', 'id_nature_acte_juridique', 'forme_groupement', 'variante_autorisee', 'variante_technique_obligatoire', 'nombre_variante_technique', 'description_variante_technique', 'mode_execution_contrat', 'type_bon_commande', 'min_bon_commande', 'max_bon_commande', 'duree_execution_marche_hors_reconduction', 'nombre_reconduction', 'duree_total_marche', 'ccag_applicable', 'marche_transversal', 'date_reception_analyse_offre', 'date_formulation_observation_projet_rapport', 'date_retour_projet_rapport_finalise', 'date_validation_projet_rapport', 'projet_rapport_vu_par', 'date_reunion_attribution', 'decision', 'date_envoi_courrier_condidat_non_retenu', 'date_signature_marche_pa', 'date_reception_controle_legalite', 'date_formulation_observation_dossier', 'date_retour_dossier_finalise', 'date_transmission_prefecture', 'dossier_vu_par', 'date_validation_rapport_information', 'commentaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonPassationMarcheAVenirPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdPassationConsultation' => 2, 'Lot' => 3, 'MontantEstime' => 4, 'IdNatureActeJuridique' => 5, 'FormeGroupement' => 6, 'VarianteAutorisee' => 7, 'VarianteTechniqueObligatoire' => 8, 'NombreVarianteTechnique' => 9, 'DescriptionVarianteTechnique' => 10, 'ModeExecutionContrat' => 11, 'TypeBonCommande' => 12, 'MinBonCommande' => 13, 'MaxBonCommande' => 14, 'DureeExecutionMarcheHorsReconduction' => 15, 'NombreReconduction' => 16, 'DureeTotalMarche' => 17, 'CcagApplicable' => 18, 'MarcheTransversal' => 19, 'DateReceptionAnalyseOffre' => 20, 'DateFormulationObservationProjetRapport' => 21, 'DateRetourProjetRapportFinalise' => 22, 'DateValidationProjetRapport' => 23, 'ProjetRapportVuPar' => 24, 'DateReunionAttribution' => 25, 'Decision' => 26, 'DateEnvoiCourrierCondidatNonRetenu' => 27, 'DateSignatureMarchePa' => 28, 'DateReceptionControleLegalite' => 29, 'DateFormulationObservationDossier' => 30, 'DateRetourDossierFinalise' => 31, 'DateTransmissionPrefecture' => 32, 'DossierVuPar' => 33, 'DateValidationRapportInformation' => 34, 'Commentaire' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idPassationConsultation' => 2, 'lot' => 3, 'montantEstime' => 4, 'idNatureActeJuridique' => 5, 'formeGroupement' => 6, 'varianteAutorisee' => 7, 'varianteTechniqueObligatoire' => 8, 'nombreVarianteTechnique' => 9, 'descriptionVarianteTechnique' => 10, 'modeExecutionContrat' => 11, 'typeBonCommande' => 12, 'minBonCommande' => 13, 'maxBonCommande' => 14, 'dureeExecutionMarcheHorsReconduction' => 15, 'nombreReconduction' => 16, 'dureeTotalMarche' => 17, 'ccagApplicable' => 18, 'marcheTransversal' => 19, 'dateReceptionAnalyseOffre' => 20, 'dateFormulationObservationProjetRapport' => 21, 'dateRetourProjetRapportFinalise' => 22, 'dateValidationProjetRapport' => 23, 'projetRapportVuPar' => 24, 'dateReunionAttribution' => 25, 'decision' => 26, 'dateEnvoiCourrierCondidatNonRetenu' => 27, 'dateSignatureMarchePa' => 28, 'dateReceptionControleLegalite' => 29, 'dateFormulationObservationDossier' => 30, 'dateRetourDossierFinalise' => 31, 'dateTransmissionPrefecture' => 32, 'dossierVuPar' => 33, 'dateValidationRapportInformation' => 34, 'commentaire' => 35, ),
        BasePeer::TYPE_COLNAME => array (CommonPassationMarcheAVenirPeer::ID => 0, CommonPassationMarcheAVenirPeer::ORGANISME => 1, CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION => 2, CommonPassationMarcheAVenirPeer::LOT => 3, CommonPassationMarcheAVenirPeer::MONTANT_ESTIME => 4, CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE => 5, CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT => 6, CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE => 7, CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE => 8, CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE => 9, CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE => 10, CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT => 11, CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE => 12, CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE => 13, CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE => 14, CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION => 15, CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION => 16, CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE => 17, CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE => 18, CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL => 19, CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE => 20, CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT => 21, CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE => 22, CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT => 23, CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR => 24, CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION => 25, CommonPassationMarcheAVenirPeer::DECISION => 26, CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU => 27, CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA => 28, CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE => 29, CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER => 30, CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE => 31, CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE => 32, CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR => 33, CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION => 34, CommonPassationMarcheAVenirPeer::COMMENTAIRE => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_PASSATION_CONSULTATION' => 2, 'LOT' => 3, 'MONTANT_ESTIME' => 4, 'ID_NATURE_ACTE_JURIDIQUE' => 5, 'FORME_GROUPEMENT' => 6, 'VARIANTE_AUTORISEE' => 7, 'VARIANTE_TECHNIQUE_OBLIGATOIRE' => 8, 'NOMBRE_VARIANTE_TECHNIQUE' => 9, 'DESCRIPTION_VARIANTE_TECHNIQUE' => 10, 'MODE_EXECUTION_CONTRAT' => 11, 'TYPE_BON_COMMANDE' => 12, 'MIN_BON_COMMANDE' => 13, 'MAX_BON_COMMANDE' => 14, 'DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION' => 15, 'NOMBRE_RECONDUCTION' => 16, 'DUREE_TOTAL_MARCHE' => 17, 'CCAG_APPLICABLE' => 18, 'MARCHE_TRANSVERSAL' => 19, 'DATE_RECEPTION_ANALYSE_OFFRE' => 20, 'DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT' => 21, 'DATE_RETOUR_PROJET_RAPPORT_FINALISE' => 22, 'DATE_VALIDATION_PROJET_RAPPORT' => 23, 'PROJET_RAPPORT_VU_PAR' => 24, 'DATE_REUNION_ATTRIBUTION' => 25, 'DECISION' => 26, 'DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU' => 27, 'DATE_SIGNATURE_MARCHE_PA' => 28, 'DATE_RECEPTION_CONTROLE_LEGALITE' => 29, 'DATE_FORMULATION_OBSERVATION_DOSSIER' => 30, 'DATE_RETOUR_DOSSIER_FINALISE' => 31, 'DATE_TRANSMISSION_PREFECTURE' => 32, 'DOSSIER_VU_PAR' => 33, 'DATE_VALIDATION_RAPPORT_INFORMATION' => 34, 'COMMENTAIRE' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_passation_consultation' => 2, 'lot' => 3, 'montant_estime' => 4, 'id_nature_acte_juridique' => 5, 'forme_groupement' => 6, 'variante_autorisee' => 7, 'variante_technique_obligatoire' => 8, 'nombre_variante_technique' => 9, 'description_variante_technique' => 10, 'mode_execution_contrat' => 11, 'type_bon_commande' => 12, 'min_bon_commande' => 13, 'max_bon_commande' => 14, 'duree_execution_marche_hors_reconduction' => 15, 'nombre_reconduction' => 16, 'duree_total_marche' => 17, 'ccag_applicable' => 18, 'marche_transversal' => 19, 'date_reception_analyse_offre' => 20, 'date_formulation_observation_projet_rapport' => 21, 'date_retour_projet_rapport_finalise' => 22, 'date_validation_projet_rapport' => 23, 'projet_rapport_vu_par' => 24, 'date_reunion_attribution' => 25, 'decision' => 26, 'date_envoi_courrier_condidat_non_retenu' => 27, 'date_signature_marche_pa' => 28, 'date_reception_controle_legalite' => 29, 'date_formulation_observation_dossier' => 30, 'date_retour_dossier_finalise' => 31, 'date_transmission_prefecture' => 32, 'dossier_vu_par' => 33, 'date_validation_rapport_information' => 34, 'commentaire' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE => array(
            CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE_0,
            CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE_1,
        ),
        CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE => array(
            CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE_0,
            CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE_1,
        ),
        CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL => array(
            CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL_0,
            CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL_1,
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
        $toNames = CommonPassationMarcheAVenirPeer::getFieldNames($toType);
        $key = isset(CommonPassationMarcheAVenirPeer::$fieldKeys[$fromType][$name]) ? CommonPassationMarcheAVenirPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonPassationMarcheAVenirPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonPassationMarcheAVenirPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonPassationMarcheAVenirPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonPassationMarcheAVenirPeer::$enumValueSets;
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
        $valueSets = CommonPassationMarcheAVenirPeer::getValueSets();

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
        $values = CommonPassationMarcheAVenirPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonPassationMarcheAVenirPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonPassationMarcheAVenirPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::ID);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::ORGANISME);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::LOT);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::MONTANT_ESTIME);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DECISION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION);
            $criteria->addSelectColumn(CommonPassationMarcheAVenirPeer::COMMENTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_passation_consultation');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.montant_estime');
            $criteria->addSelectColumn($alias . '.id_nature_acte_juridique');
            $criteria->addSelectColumn($alias . '.forme_groupement');
            $criteria->addSelectColumn($alias . '.variante_autorisee');
            $criteria->addSelectColumn($alias . '.variante_technique_obligatoire');
            $criteria->addSelectColumn($alias . '.nombre_variante_technique');
            $criteria->addSelectColumn($alias . '.description_variante_technique');
            $criteria->addSelectColumn($alias . '.mode_execution_contrat');
            $criteria->addSelectColumn($alias . '.type_bon_commande');
            $criteria->addSelectColumn($alias . '.min_bon_commande');
            $criteria->addSelectColumn($alias . '.max_bon_commande');
            $criteria->addSelectColumn($alias . '.duree_execution_marche_hors_reconduction');
            $criteria->addSelectColumn($alias . '.nombre_reconduction');
            $criteria->addSelectColumn($alias . '.duree_total_marche');
            $criteria->addSelectColumn($alias . '.ccag_applicable');
            $criteria->addSelectColumn($alias . '.marche_transversal');
            $criteria->addSelectColumn($alias . '.date_reception_analyse_offre');
            $criteria->addSelectColumn($alias . '.date_formulation_observation_projet_rapport');
            $criteria->addSelectColumn($alias . '.date_retour_projet_rapport_finalise');
            $criteria->addSelectColumn($alias . '.date_validation_projet_rapport');
            $criteria->addSelectColumn($alias . '.projet_rapport_vu_par');
            $criteria->addSelectColumn($alias . '.date_reunion_attribution');
            $criteria->addSelectColumn($alias . '.decision');
            $criteria->addSelectColumn($alias . '.date_envoi_courrier_condidat_non_retenu');
            $criteria->addSelectColumn($alias . '.date_signature_marche_pa');
            $criteria->addSelectColumn($alias . '.date_reception_controle_legalite');
            $criteria->addSelectColumn($alias . '.date_formulation_observation_dossier');
            $criteria->addSelectColumn($alias . '.date_retour_dossier_finalise');
            $criteria->addSelectColumn($alias . '.date_transmission_prefecture');
            $criteria->addSelectColumn($alias . '.dossier_vu_par');
            $criteria->addSelectColumn($alias . '.date_validation_rapport_information');
            $criteria->addSelectColumn($alias . '.commentaire');
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
        $criteria->setPrimaryTableName(CommonPassationMarcheAVenirPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPassationMarcheAVenirPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonPassationMarcheAVenirPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPassationMarcheAVenir
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonPassationMarcheAVenirPeer::doSelect($critcopy, $con);
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
        return CommonPassationMarcheAVenirPeer::populateObjects(CommonPassationMarcheAVenirPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonPassationMarcheAVenirPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

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
     * @param      CommonPassationMarcheAVenir $obj A CommonPassationMarcheAVenir object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonPassationMarcheAVenirPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonPassationMarcheAVenir object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonPassationMarcheAVenir) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonPassationMarcheAVenir object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonPassationMarcheAVenirPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonPassationMarcheAVenir Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonPassationMarcheAVenirPeer::$instances[$key])) {
                return CommonPassationMarcheAVenirPeer::$instances[$key];
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
        foreach (CommonPassationMarcheAVenirPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonPassationMarcheAVenirPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to passation_marche_a_venir
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
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
        $cls = CommonPassationMarcheAVenirPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonPassationMarcheAVenirPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonPassationMarcheAVenirPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonPassationMarcheAVenirPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonPassationMarcheAVenir object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonPassationMarcheAVenirPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonPassationMarcheAVenirPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonPassationMarcheAVenirPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonPassationMarcheAVenirPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonPassationMarcheAVenirPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonPassationMarcheAVenirPeer::DATABASE_NAME)->getTable(CommonPassationMarcheAVenirPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonPassationMarcheAVenirPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonPassationMarcheAVenirPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonPassationMarcheAVenirTableMap());
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
        return CommonPassationMarcheAVenirPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonPassationMarcheAVenir or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPassationMarcheAVenir object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonPassationMarcheAVenir object
        }

        if ($criteria->containsKey(CommonPassationMarcheAVenirPeer::ID) && $criteria->keyContainsValue(CommonPassationMarcheAVenirPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonPassationMarcheAVenirPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonPassationMarcheAVenir or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPassationMarcheAVenir object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonPassationMarcheAVenirPeer::ID);
            $value = $criteria->remove(CommonPassationMarcheAVenirPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonPassationMarcheAVenirPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPassationMarcheAVenirPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPassationMarcheAVenirPeer::ORGANISME);
            $value = $criteria->remove(CommonPassationMarcheAVenirPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonPassationMarcheAVenirPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPassationMarcheAVenirPeer::TABLE_NAME);
            }

        } else { // $values is CommonPassationMarcheAVenir object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the passation_marche_a_venir table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonPassationMarcheAVenirPeer::TABLE_NAME, $con, CommonPassationMarcheAVenirPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonPassationMarcheAVenirPeer::clearInstancePool();
            CommonPassationMarcheAVenirPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonPassationMarcheAVenir or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonPassationMarcheAVenir object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonPassationMarcheAVenirPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonPassationMarcheAVenir) { // it's a model object
            // invalidate the cache for this single object
            CommonPassationMarcheAVenirPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonPassationMarcheAVenirPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonPassationMarcheAVenirPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonPassationMarcheAVenirPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonPassationMarcheAVenirPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonPassationMarcheAVenir object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonPassationMarcheAVenir $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonPassationMarcheAVenirPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonPassationMarcheAVenirPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonPassationMarcheAVenirPeer::DATABASE_NAME, CommonPassationMarcheAVenirPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonPassationMarcheAVenir
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonPassationMarcheAVenirPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);
        $criteria->add(CommonPassationMarcheAVenirPeer::ID, $id);
        $criteria->add(CommonPassationMarcheAVenirPeer::ORGANISME, $organisme);
        $v = CommonPassationMarcheAVenirPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonPassationMarcheAVenirPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonPassationMarcheAVenirPeer::buildTableMap();

