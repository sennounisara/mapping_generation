<?php


/**
 * Base static class for performing query and update operations on the 'ProcedureEquivalence' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonProcedureEquivalencePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ProcedureEquivalence';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonProcedureEquivalence';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonProcedureEquivalenceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 67;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 67;

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'ProcedureEquivalence.id_type_procedure';

    /** the column name for the organisme field */
    const ORGANISME = 'ProcedureEquivalence.organisme';

    /** the column name for the elec_resp field */
    const ELEC_RESP = 'ProcedureEquivalence.elec_resp';

    /** the column name for the no_elec_resp field */
    const NO_ELEC_RESP = 'ProcedureEquivalence.no_elec_resp';

    /** the column name for the cipher_enabled field */
    const CIPHER_ENABLED = 'ProcedureEquivalence.cipher_enabled';

    /** the column name for the cipher_disabled field */
    const CIPHER_DISABLED = 'ProcedureEquivalence.cipher_disabled';

    /** the column name for the signature_enabled field */
    const SIGNATURE_ENABLED = 'ProcedureEquivalence.signature_enabled';

    /** the column name for the signature_disabled field */
    const SIGNATURE_DISABLED = 'ProcedureEquivalence.signature_disabled';

    /** the column name for the env_candidature field */
    const ENV_CANDIDATURE = 'ProcedureEquivalence.env_candidature';

    /** the column name for the env_offre field */
    const ENV_OFFRE = 'ProcedureEquivalence.env_offre';

    /** the column name for the env_anonymat field */
    const ENV_ANONYMAT = 'ProcedureEquivalence.env_anonymat';

    /** the column name for the envoi_complet field */
    const ENVOI_COMPLET = 'ProcedureEquivalence.envoi_complet';

    /** the column name for the envoi_differe field */
    const ENVOI_DIFFERE = 'ProcedureEquivalence.envoi_differe';

    /** the column name for the procedure_publicite field */
    const PROCEDURE_PUBLICITE = 'ProcedureEquivalence.procedure_publicite';

    /** the column name for the procedure_restreinte_candidature field */
    const PROCEDURE_RESTREINTE_CANDIDATURE = 'ProcedureEquivalence.procedure_restreinte_candidature';

    /** the column name for the procedure_restreinte_offre field */
    const PROCEDURE_RESTREINTE_OFFRE = 'ProcedureEquivalence.procedure_restreinte_offre';

    /** the column name for the envoi_mail_par_mpe field */
    const ENVOI_MAIL_PAR_MPE = 'ProcedureEquivalence.envoi_mail_par_mpe';

    /** the column name for the no_envoi_mail_par_mpe field */
    const NO_ENVOI_MAIL_PAR_MPE = 'ProcedureEquivalence.no_envoi_mail_par_mpe';

    /** the column name for the mise_en_ligne1 field */
    const MISE_EN_LIGNE1 = 'ProcedureEquivalence.mise_en_ligne1';

    /** the column name for the mise_en_ligne2 field */
    const MISE_EN_LIGNE2 = 'ProcedureEquivalence.mise_en_ligne2';

    /** the column name for the mise_en_ligne3 field */
    const MISE_EN_LIGNE3 = 'ProcedureEquivalence.mise_en_ligne3';

    /** the column name for the mise_en_ligne4 field */
    const MISE_EN_LIGNE4 = 'ProcedureEquivalence.mise_en_ligne4';

    /** the column name for the env_offre_type_unique field */
    const ENV_OFFRE_TYPE_UNIQUE = 'ProcedureEquivalence.env_offre_type_unique';

    /** the column name for the env_offre_type_multiple field */
    const ENV_OFFRE_TYPE_MULTIPLE = 'ProcedureEquivalence.env_offre_type_multiple';

    /** the column name for the no_fichier_annonce field */
    const NO_FICHIER_ANNONCE = 'ProcedureEquivalence.no_fichier_annonce';

    /** the column name for the fichier_importe field */
    const FICHIER_IMPORTE = 'ProcedureEquivalence.fichier_importe';

    /** the column name for the fichier_boamp field */
    const FICHIER_BOAMP = 'ProcedureEquivalence.fichier_boamp';

    /** the column name for the reglement_cons field */
    const REGLEMENT_CONS = 'ProcedureEquivalence.reglement_cons';

    /** the column name for the dossier_dce field */
    const DOSSIER_DCE = 'ProcedureEquivalence.dossier_dce';

    /** the column name for the partial_dce_download field */
    const PARTIAL_DCE_DOWNLOAD = 'ProcedureEquivalence.partial_dce_download';

    /** the column name for the service field */
    const SERVICE = 'ProcedureEquivalence.service';

    /** the column name for the constitution_dossier_reponse field */
    const CONSTITUTION_DOSSIER_REPONSE = 'ProcedureEquivalence.constitution_dossier_reponse';

    /** the column name for the env_offre_type_unique2 field */
    const ENV_OFFRE_TYPE_UNIQUE2 = 'ProcedureEquivalence.env_offre_type_unique2';

    /** the column name for the env_offre_type_multiple2 field */
    const ENV_OFFRE_TYPE_MULTIPLE2 = 'ProcedureEquivalence.env_offre_type_multiple2';

    /** the column name for the gestion_envois_postaux field */
    const GESTION_ENVOIS_POSTAUX = 'ProcedureEquivalence.gestion_envois_postaux';

    /** the column name for the tireur_plan_non field */
    const TIREUR_PLAN_NON = 'ProcedureEquivalence.tireur_plan_non';

    /** the column name for the tireur_plan_oui field */
    const TIREUR_PLAN_OUI = 'ProcedureEquivalence.tireur_plan_oui';

    /** the column name for the tireur_plan_papier field */
    const TIREUR_PLAN_PAPIER = 'ProcedureEquivalence.tireur_plan_papier';

    /** the column name for the tireur_plan_cdrom field */
    const TIREUR_PLAN_CDROM = 'ProcedureEquivalence.tireur_plan_cdrom';

    /** the column name for the tireur_plan_nom field */
    const TIREUR_PLAN_NOM = 'ProcedureEquivalence.tireur_plan_nom';

    /** the column name for the tirage_descriptif field */
    const TIRAGE_DESCRIPTIF = 'ProcedureEquivalence.tirage_descriptif';

    /** the column name for the delai_date_limite_remise_pli field */
    const DELAI_DATE_LIMITE_REMISE_PLI = 'ProcedureEquivalence.delai_date_limite_remise_pli';

    /** the column name for the signature_propre field */
    const SIGNATURE_PROPRE = 'ProcedureEquivalence.signature_propre';

    /** the column name for the procedure_restreinte field */
    const PROCEDURE_RESTREINTE = 'ProcedureEquivalence.procedure_restreinte';

    /** the column name for the ouverture_simultanee field */
    const OUVERTURE_SIMULTANEE = 'ProcedureEquivalence.ouverture_simultanee';

    /** the column name for the type_decision_a_renseigner field */
    const TYPE_DECISION_A_RENSEIGNER = 'ProcedureEquivalence.type_decision_a_renseigner';

    /** the column name for the type_decision_attribution_marche field */
    const TYPE_DECISION_ATTRIBUTION_MARCHE = 'ProcedureEquivalence.type_decision_attribution_marche';

    /** the column name for the type_decision_declaration_sans_suite field */
    const TYPE_DECISION_DECLARATION_SANS_SUITE = 'ProcedureEquivalence.type_decision_declaration_sans_suite';

    /** the column name for the type_decision_declaration_infructueux field */
    const TYPE_DECISION_DECLARATION_INFRUCTUEUX = 'ProcedureEquivalence.type_decision_declaration_infructueux';

    /** the column name for the type_decision_selection_entreprise field */
    const TYPE_DECISION_SELECTION_ENTREPRISE = 'ProcedureEquivalence.type_decision_selection_entreprise';

    /** the column name for the type_decision_attribution_accord_cadre field */
    const TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE = 'ProcedureEquivalence.type_decision_attribution_accord_cadre';

    /** the column name for the type_decision_admission_sad field */
    const TYPE_DECISION_ADMISSION_SAD = 'ProcedureEquivalence.type_decision_admission_sad';

    /** the column name for the type_decision_autre field */
    const TYPE_DECISION_AUTRE = 'ProcedureEquivalence.type_decision_autre';

    /** the column name for the env_offre_technique field */
    const ENV_OFFRE_TECHNIQUE = 'ProcedureEquivalence.env_offre_technique';

    /** the column name for the env_offre_technique_type_unique field */
    const ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE = 'ProcedureEquivalence.env_offre_technique_type_unique';

    /** the column name for the env_offre_technique_type_multiple field */
    const ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE = 'ProcedureEquivalence.env_offre_technique_type_multiple';

    /** the column name for the rep_obligatoire field */
    const REP_OBLIGATOIRE = 'ProcedureEquivalence.rep_obligatoire';

    /** the column name for the no_rep_obligatoire field */
    const NO_REP_OBLIGATOIRE = 'ProcedureEquivalence.no_rep_obligatoire';

    /** the column name for the autre_piece_cons field */
    const AUTRE_PIECE_CONS = 'ProcedureEquivalence.autre_piece_cons';

    /** the column name for the resp_elec_autre_plateforme field */
    const RESP_ELEC_AUTRE_PLATEFORME = 'ProcedureEquivalence.resp_elec_autre_plateforme';

    /** the column name for the mise_en_ligne_entite_coordinatrice field */
    const MISE_EN_LIGNE_ENTITE_COORDINATRICE = 'ProcedureEquivalence.mise_en_ligne_entite_coordinatrice';

    /** the column name for the autoriser_publicite field */
    const AUTORISER_PUBLICITE = 'ProcedureEquivalence.autoriser_publicite';

    /** the column name for the poursuite_date_limite_remise_pli field */
    const POURSUITE_DATE_LIMITE_REMISE_PLI = 'ProcedureEquivalence.poursuite_date_limite_remise_pli';

    /** the column name for the delai_poursuite_affichage field */
    const DELAI_POURSUITE_AFFICHAGE = 'ProcedureEquivalence.delai_poursuite_affichage';

    /** the column name for the mode_ouverture_dossier field */
    const MODE_OUVERTURE_DOSSIER = 'ProcedureEquivalence.mode_ouverture_dossier';

    /** the column name for the mode_ouverture_reponse field */
    const MODE_OUVERTURE_REPONSE = 'ProcedureEquivalence.mode_ouverture_reponse';

    /** the column name for the marche_public_simplifie field */
    const MARCHE_PUBLIC_SIMPLIFIE = 'ProcedureEquivalence.marche_public_simplifie';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonProcedureEquivalence objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonProcedureEquivalence[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonProcedureEquivalencePeer::$fieldNames[CommonProcedureEquivalencePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure', 'Organisme', 'ElecResp', 'NoElecResp', 'CipherEnabled', 'CipherDisabled', 'SignatureEnabled', 'SignatureDisabled', 'EnvCandidature', 'EnvOffre', 'EnvAnonymat', 'EnvoiComplet', 'EnvoiDiffere', 'ProcedurePublicite', 'ProcedureRestreinteCandidature', 'ProcedureRestreinteOffre', 'EnvoiMailParMpe', 'NoEnvoiMailParMpe', 'MiseEnLigne1', 'MiseEnLigne2', 'MiseEnLigne3', 'MiseEnLigne4', 'EnvOffreTypeUnique', 'EnvOffreTypeMultiple', 'NoFichierAnnonce', 'FichierImporte', 'FichierBoamp', 'ReglementCons', 'DossierDce', 'PartialDceDownload', 'Service', 'ConstitutionDossierReponse', 'EnvOffreTypeUnique2', 'EnvOffreTypeMultiple2', 'GestionEnvoisPostaux', 'TireurPlanNon', 'TireurPlanOui', 'TireurPlanPapier', 'TireurPlanCdrom', 'TireurPlanNom', 'TirageDescriptif', 'DelaiDateLimiteRemisePli', 'SignaturePropre', 'ProcedureRestreinte', 'OuvertureSimultanee', 'TypeDecisionARenseigner', 'TypeDecisionAttributionMarche', 'TypeDecisionDeclarationSansSuite', 'TypeDecisionDeclarationInfructueux', 'TypeDecisionSelectionEntreprise', 'TypeDecisionAttributionAccordCadre', 'TypeDecisionAdmissionSad', 'TypeDecisionAutre', 'EnvOffreTechnique', 'EnvOffreTechniqueTypeUnique', 'EnvOffreTechniqueTypeMultiple', 'RepObligatoire', 'NoRepObligatoire', 'AutrePieceCons', 'RespElecAutrePlateforme', 'MiseEnLigneEntiteCoordinatrice', 'AutoriserPublicite', 'PoursuiteDateLimiteRemisePli', 'DelaiPoursuiteAffichage', 'ModeOuvertureDossier', 'ModeOuvertureReponse', 'MarchePublicSimplifie', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure', 'organisme', 'elecResp', 'noElecResp', 'cipherEnabled', 'cipherDisabled', 'signatureEnabled', 'signatureDisabled', 'envCandidature', 'envOffre', 'envAnonymat', 'envoiComplet', 'envoiDiffere', 'procedurePublicite', 'procedureRestreinteCandidature', 'procedureRestreinteOffre', 'envoiMailParMpe', 'noEnvoiMailParMpe', 'miseEnLigne1', 'miseEnLigne2', 'miseEnLigne3', 'miseEnLigne4', 'envOffreTypeUnique', 'envOffreTypeMultiple', 'noFichierAnnonce', 'fichierImporte', 'fichierBoamp', 'reglementCons', 'dossierDce', 'partialDceDownload', 'service', 'constitutionDossierReponse', 'envOffreTypeUnique2', 'envOffreTypeMultiple2', 'gestionEnvoisPostaux', 'tireurPlanNon', 'tireurPlanOui', 'tireurPlanPapier', 'tireurPlanCdrom', 'tireurPlanNom', 'tirageDescriptif', 'delaiDateLimiteRemisePli', 'signaturePropre', 'procedureRestreinte', 'ouvertureSimultanee', 'typeDecisionARenseigner', 'typeDecisionAttributionMarche', 'typeDecisionDeclarationSansSuite', 'typeDecisionDeclarationInfructueux', 'typeDecisionSelectionEntreprise', 'typeDecisionAttributionAccordCadre', 'typeDecisionAdmissionSad', 'typeDecisionAutre', 'envOffreTechnique', 'envOffreTechniqueTypeUnique', 'envOffreTechniqueTypeMultiple', 'repObligatoire', 'noRepObligatoire', 'autrePieceCons', 'respElecAutrePlateforme', 'miseEnLigneEntiteCoordinatrice', 'autoriserPublicite', 'poursuiteDateLimiteRemisePli', 'delaiPoursuiteAffichage', 'modeOuvertureDossier', 'modeOuvertureReponse', 'marchePublicSimplifie', ),
        BasePeer::TYPE_COLNAME => array (CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, CommonProcedureEquivalencePeer::ORGANISME, CommonProcedureEquivalencePeer::ELEC_RESP, CommonProcedureEquivalencePeer::NO_ELEC_RESP, CommonProcedureEquivalencePeer::CIPHER_ENABLED, CommonProcedureEquivalencePeer::CIPHER_DISABLED, CommonProcedureEquivalencePeer::SIGNATURE_ENABLED, CommonProcedureEquivalencePeer::SIGNATURE_DISABLED, CommonProcedureEquivalencePeer::ENV_CANDIDATURE, CommonProcedureEquivalencePeer::ENV_OFFRE, CommonProcedureEquivalencePeer::ENV_ANONYMAT, CommonProcedureEquivalencePeer::ENVOI_COMPLET, CommonProcedureEquivalencePeer::ENVOI_DIFFERE, CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE, CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE, CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE, CommonProcedureEquivalencePeer::MISE_EN_LIGNE1, CommonProcedureEquivalencePeer::MISE_EN_LIGNE2, CommonProcedureEquivalencePeer::MISE_EN_LIGNE3, CommonProcedureEquivalencePeer::MISE_EN_LIGNE4, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE, CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE, CommonProcedureEquivalencePeer::FICHIER_IMPORTE, CommonProcedureEquivalencePeer::FICHIER_BOAMP, CommonProcedureEquivalencePeer::REGLEMENT_CONS, CommonProcedureEquivalencePeer::DOSSIER_DCE, CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD, CommonProcedureEquivalencePeer::SERVICE, CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2, CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX, CommonProcedureEquivalencePeer::TIREUR_PLAN_NON, CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI, CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER, CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM, CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM, CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF, CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI, CommonProcedureEquivalencePeer::SIGNATURE_PROPRE, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE, CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE, CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER, CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE, CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE, CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX, CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE, CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE, CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD, CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE, CommonProcedureEquivalencePeer::REP_OBLIGATOIRE, CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE, CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS, CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME, CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE, CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE, CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI, CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE, CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER, CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE, CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE', 'ORGANISME', 'ELEC_RESP', 'NO_ELEC_RESP', 'CIPHER_ENABLED', 'CIPHER_DISABLED', 'SIGNATURE_ENABLED', 'SIGNATURE_DISABLED', 'ENV_CANDIDATURE', 'ENV_OFFRE', 'ENV_ANONYMAT', 'ENVOI_COMPLET', 'ENVOI_DIFFERE', 'PROCEDURE_PUBLICITE', 'PROCEDURE_RESTREINTE_CANDIDATURE', 'PROCEDURE_RESTREINTE_OFFRE', 'ENVOI_MAIL_PAR_MPE', 'NO_ENVOI_MAIL_PAR_MPE', 'MISE_EN_LIGNE1', 'MISE_EN_LIGNE2', 'MISE_EN_LIGNE3', 'MISE_EN_LIGNE4', 'ENV_OFFRE_TYPE_UNIQUE', 'ENV_OFFRE_TYPE_MULTIPLE', 'NO_FICHIER_ANNONCE', 'FICHIER_IMPORTE', 'FICHIER_BOAMP', 'REGLEMENT_CONS', 'DOSSIER_DCE', 'PARTIAL_DCE_DOWNLOAD', 'SERVICE', 'CONSTITUTION_DOSSIER_REPONSE', 'ENV_OFFRE_TYPE_UNIQUE2', 'ENV_OFFRE_TYPE_MULTIPLE2', 'GESTION_ENVOIS_POSTAUX', 'TIREUR_PLAN_NON', 'TIREUR_PLAN_OUI', 'TIREUR_PLAN_PAPIER', 'TIREUR_PLAN_CDROM', 'TIREUR_PLAN_NOM', 'TIRAGE_DESCRIPTIF', 'DELAI_DATE_LIMITE_REMISE_PLI', 'SIGNATURE_PROPRE', 'PROCEDURE_RESTREINTE', 'OUVERTURE_SIMULTANEE', 'TYPE_DECISION_A_RENSEIGNER', 'TYPE_DECISION_ATTRIBUTION_MARCHE', 'TYPE_DECISION_DECLARATION_SANS_SUITE', 'TYPE_DECISION_DECLARATION_INFRUCTUEUX', 'TYPE_DECISION_SELECTION_ENTREPRISE', 'TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE', 'TYPE_DECISION_ADMISSION_SAD', 'TYPE_DECISION_AUTRE', 'ENV_OFFRE_TECHNIQUE', 'ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE', 'ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE', 'REP_OBLIGATOIRE', 'NO_REP_OBLIGATOIRE', 'AUTRE_PIECE_CONS', 'RESP_ELEC_AUTRE_PLATEFORME', 'MISE_EN_LIGNE_ENTITE_COORDINATRICE', 'AUTORISER_PUBLICITE', 'POURSUITE_DATE_LIMITE_REMISE_PLI', 'DELAI_POURSUITE_AFFICHAGE', 'MODE_OUVERTURE_DOSSIER', 'MODE_OUVERTURE_REPONSE', 'MARCHE_PUBLIC_SIMPLIFIE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure', 'organisme', 'elec_resp', 'no_elec_resp', 'cipher_enabled', 'cipher_disabled', 'signature_enabled', 'signature_disabled', 'env_candidature', 'env_offre', 'env_anonymat', 'envoi_complet', 'envoi_differe', 'procedure_publicite', 'procedure_restreinte_candidature', 'procedure_restreinte_offre', 'envoi_mail_par_mpe', 'no_envoi_mail_par_mpe', 'mise_en_ligne1', 'mise_en_ligne2', 'mise_en_ligne3', 'mise_en_ligne4', 'env_offre_type_unique', 'env_offre_type_multiple', 'no_fichier_annonce', 'fichier_importe', 'fichier_boamp', 'reglement_cons', 'dossier_dce', 'partial_dce_download', 'service', 'constitution_dossier_reponse', 'env_offre_type_unique2', 'env_offre_type_multiple2', 'gestion_envois_postaux', 'tireur_plan_non', 'tireur_plan_oui', 'tireur_plan_papier', 'tireur_plan_cdrom', 'tireur_plan_nom', 'tirage_descriptif', 'delai_date_limite_remise_pli', 'signature_propre', 'procedure_restreinte', 'ouverture_simultanee', 'type_decision_a_renseigner', 'type_decision_attribution_marche', 'type_decision_declaration_sans_suite', 'type_decision_declaration_infructueux', 'type_decision_selection_entreprise', 'type_decision_attribution_accord_cadre', 'type_decision_admission_sad', 'type_decision_autre', 'env_offre_technique', 'env_offre_technique_type_unique', 'env_offre_technique_type_multiple', 'rep_obligatoire', 'no_rep_obligatoire', 'autre_piece_cons', 'resp_elec_autre_plateforme', 'mise_en_ligne_entite_coordinatrice', 'autoriser_publicite', 'poursuite_date_limite_remise_pli', 'delai_poursuite_affichage', 'mode_ouverture_dossier', 'mode_ouverture_reponse', 'marche_public_simplifie', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonProcedureEquivalencePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure' => 0, 'Organisme' => 1, 'ElecResp' => 2, 'NoElecResp' => 3, 'CipherEnabled' => 4, 'CipherDisabled' => 5, 'SignatureEnabled' => 6, 'SignatureDisabled' => 7, 'EnvCandidature' => 8, 'EnvOffre' => 9, 'EnvAnonymat' => 10, 'EnvoiComplet' => 11, 'EnvoiDiffere' => 12, 'ProcedurePublicite' => 13, 'ProcedureRestreinteCandidature' => 14, 'ProcedureRestreinteOffre' => 15, 'EnvoiMailParMpe' => 16, 'NoEnvoiMailParMpe' => 17, 'MiseEnLigne1' => 18, 'MiseEnLigne2' => 19, 'MiseEnLigne3' => 20, 'MiseEnLigne4' => 21, 'EnvOffreTypeUnique' => 22, 'EnvOffreTypeMultiple' => 23, 'NoFichierAnnonce' => 24, 'FichierImporte' => 25, 'FichierBoamp' => 26, 'ReglementCons' => 27, 'DossierDce' => 28, 'PartialDceDownload' => 29, 'Service' => 30, 'ConstitutionDossierReponse' => 31, 'EnvOffreTypeUnique2' => 32, 'EnvOffreTypeMultiple2' => 33, 'GestionEnvoisPostaux' => 34, 'TireurPlanNon' => 35, 'TireurPlanOui' => 36, 'TireurPlanPapier' => 37, 'TireurPlanCdrom' => 38, 'TireurPlanNom' => 39, 'TirageDescriptif' => 40, 'DelaiDateLimiteRemisePli' => 41, 'SignaturePropre' => 42, 'ProcedureRestreinte' => 43, 'OuvertureSimultanee' => 44, 'TypeDecisionARenseigner' => 45, 'TypeDecisionAttributionMarche' => 46, 'TypeDecisionDeclarationSansSuite' => 47, 'TypeDecisionDeclarationInfructueux' => 48, 'TypeDecisionSelectionEntreprise' => 49, 'TypeDecisionAttributionAccordCadre' => 50, 'TypeDecisionAdmissionSad' => 51, 'TypeDecisionAutre' => 52, 'EnvOffreTechnique' => 53, 'EnvOffreTechniqueTypeUnique' => 54, 'EnvOffreTechniqueTypeMultiple' => 55, 'RepObligatoire' => 56, 'NoRepObligatoire' => 57, 'AutrePieceCons' => 58, 'RespElecAutrePlateforme' => 59, 'MiseEnLigneEntiteCoordinatrice' => 60, 'AutoriserPublicite' => 61, 'PoursuiteDateLimiteRemisePli' => 62, 'DelaiPoursuiteAffichage' => 63, 'ModeOuvertureDossier' => 64, 'ModeOuvertureReponse' => 65, 'MarchePublicSimplifie' => 66, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure' => 0, 'organisme' => 1, 'elecResp' => 2, 'noElecResp' => 3, 'cipherEnabled' => 4, 'cipherDisabled' => 5, 'signatureEnabled' => 6, 'signatureDisabled' => 7, 'envCandidature' => 8, 'envOffre' => 9, 'envAnonymat' => 10, 'envoiComplet' => 11, 'envoiDiffere' => 12, 'procedurePublicite' => 13, 'procedureRestreinteCandidature' => 14, 'procedureRestreinteOffre' => 15, 'envoiMailParMpe' => 16, 'noEnvoiMailParMpe' => 17, 'miseEnLigne1' => 18, 'miseEnLigne2' => 19, 'miseEnLigne3' => 20, 'miseEnLigne4' => 21, 'envOffreTypeUnique' => 22, 'envOffreTypeMultiple' => 23, 'noFichierAnnonce' => 24, 'fichierImporte' => 25, 'fichierBoamp' => 26, 'reglementCons' => 27, 'dossierDce' => 28, 'partialDceDownload' => 29, 'service' => 30, 'constitutionDossierReponse' => 31, 'envOffreTypeUnique2' => 32, 'envOffreTypeMultiple2' => 33, 'gestionEnvoisPostaux' => 34, 'tireurPlanNon' => 35, 'tireurPlanOui' => 36, 'tireurPlanPapier' => 37, 'tireurPlanCdrom' => 38, 'tireurPlanNom' => 39, 'tirageDescriptif' => 40, 'delaiDateLimiteRemisePli' => 41, 'signaturePropre' => 42, 'procedureRestreinte' => 43, 'ouvertureSimultanee' => 44, 'typeDecisionARenseigner' => 45, 'typeDecisionAttributionMarche' => 46, 'typeDecisionDeclarationSansSuite' => 47, 'typeDecisionDeclarationInfructueux' => 48, 'typeDecisionSelectionEntreprise' => 49, 'typeDecisionAttributionAccordCadre' => 50, 'typeDecisionAdmissionSad' => 51, 'typeDecisionAutre' => 52, 'envOffreTechnique' => 53, 'envOffreTechniqueTypeUnique' => 54, 'envOffreTechniqueTypeMultiple' => 55, 'repObligatoire' => 56, 'noRepObligatoire' => 57, 'autrePieceCons' => 58, 'respElecAutrePlateforme' => 59, 'miseEnLigneEntiteCoordinatrice' => 60, 'autoriserPublicite' => 61, 'poursuiteDateLimiteRemisePli' => 62, 'delaiPoursuiteAffichage' => 63, 'modeOuvertureDossier' => 64, 'modeOuvertureReponse' => 65, 'marchePublicSimplifie' => 66, ),
        BasePeer::TYPE_COLNAME => array (CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE => 0, CommonProcedureEquivalencePeer::ORGANISME => 1, CommonProcedureEquivalencePeer::ELEC_RESP => 2, CommonProcedureEquivalencePeer::NO_ELEC_RESP => 3, CommonProcedureEquivalencePeer::CIPHER_ENABLED => 4, CommonProcedureEquivalencePeer::CIPHER_DISABLED => 5, CommonProcedureEquivalencePeer::SIGNATURE_ENABLED => 6, CommonProcedureEquivalencePeer::SIGNATURE_DISABLED => 7, CommonProcedureEquivalencePeer::ENV_CANDIDATURE => 8, CommonProcedureEquivalencePeer::ENV_OFFRE => 9, CommonProcedureEquivalencePeer::ENV_ANONYMAT => 10, CommonProcedureEquivalencePeer::ENVOI_COMPLET => 11, CommonProcedureEquivalencePeer::ENVOI_DIFFERE => 12, CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE => 13, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE => 14, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE => 15, CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE => 16, CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE => 17, CommonProcedureEquivalencePeer::MISE_EN_LIGNE1 => 18, CommonProcedureEquivalencePeer::MISE_EN_LIGNE2 => 19, CommonProcedureEquivalencePeer::MISE_EN_LIGNE3 => 20, CommonProcedureEquivalencePeer::MISE_EN_LIGNE4 => 21, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE => 22, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE => 23, CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE => 24, CommonProcedureEquivalencePeer::FICHIER_IMPORTE => 25, CommonProcedureEquivalencePeer::FICHIER_BOAMP => 26, CommonProcedureEquivalencePeer::REGLEMENT_CONS => 27, CommonProcedureEquivalencePeer::DOSSIER_DCE => 28, CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD => 29, CommonProcedureEquivalencePeer::SERVICE => 30, CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE => 31, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2 => 32, CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2 => 33, CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX => 34, CommonProcedureEquivalencePeer::TIREUR_PLAN_NON => 35, CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI => 36, CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER => 37, CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM => 38, CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM => 39, CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF => 40, CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI => 41, CommonProcedureEquivalencePeer::SIGNATURE_PROPRE => 42, CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE => 43, CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE => 44, CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER => 45, CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE => 46, CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE => 47, CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX => 48, CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE => 49, CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE => 50, CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD => 51, CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE => 52, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE => 53, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE => 54, CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE => 55, CommonProcedureEquivalencePeer::REP_OBLIGATOIRE => 56, CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE => 57, CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS => 58, CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME => 59, CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE => 60, CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE => 61, CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI => 62, CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE => 63, CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER => 64, CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE => 65, CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE => 66, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE' => 0, 'ORGANISME' => 1, 'ELEC_RESP' => 2, 'NO_ELEC_RESP' => 3, 'CIPHER_ENABLED' => 4, 'CIPHER_DISABLED' => 5, 'SIGNATURE_ENABLED' => 6, 'SIGNATURE_DISABLED' => 7, 'ENV_CANDIDATURE' => 8, 'ENV_OFFRE' => 9, 'ENV_ANONYMAT' => 10, 'ENVOI_COMPLET' => 11, 'ENVOI_DIFFERE' => 12, 'PROCEDURE_PUBLICITE' => 13, 'PROCEDURE_RESTREINTE_CANDIDATURE' => 14, 'PROCEDURE_RESTREINTE_OFFRE' => 15, 'ENVOI_MAIL_PAR_MPE' => 16, 'NO_ENVOI_MAIL_PAR_MPE' => 17, 'MISE_EN_LIGNE1' => 18, 'MISE_EN_LIGNE2' => 19, 'MISE_EN_LIGNE3' => 20, 'MISE_EN_LIGNE4' => 21, 'ENV_OFFRE_TYPE_UNIQUE' => 22, 'ENV_OFFRE_TYPE_MULTIPLE' => 23, 'NO_FICHIER_ANNONCE' => 24, 'FICHIER_IMPORTE' => 25, 'FICHIER_BOAMP' => 26, 'REGLEMENT_CONS' => 27, 'DOSSIER_DCE' => 28, 'PARTIAL_DCE_DOWNLOAD' => 29, 'SERVICE' => 30, 'CONSTITUTION_DOSSIER_REPONSE' => 31, 'ENV_OFFRE_TYPE_UNIQUE2' => 32, 'ENV_OFFRE_TYPE_MULTIPLE2' => 33, 'GESTION_ENVOIS_POSTAUX' => 34, 'TIREUR_PLAN_NON' => 35, 'TIREUR_PLAN_OUI' => 36, 'TIREUR_PLAN_PAPIER' => 37, 'TIREUR_PLAN_CDROM' => 38, 'TIREUR_PLAN_NOM' => 39, 'TIRAGE_DESCRIPTIF' => 40, 'DELAI_DATE_LIMITE_REMISE_PLI' => 41, 'SIGNATURE_PROPRE' => 42, 'PROCEDURE_RESTREINTE' => 43, 'OUVERTURE_SIMULTANEE' => 44, 'TYPE_DECISION_A_RENSEIGNER' => 45, 'TYPE_DECISION_ATTRIBUTION_MARCHE' => 46, 'TYPE_DECISION_DECLARATION_SANS_SUITE' => 47, 'TYPE_DECISION_DECLARATION_INFRUCTUEUX' => 48, 'TYPE_DECISION_SELECTION_ENTREPRISE' => 49, 'TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE' => 50, 'TYPE_DECISION_ADMISSION_SAD' => 51, 'TYPE_DECISION_AUTRE' => 52, 'ENV_OFFRE_TECHNIQUE' => 53, 'ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE' => 54, 'ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE' => 55, 'REP_OBLIGATOIRE' => 56, 'NO_REP_OBLIGATOIRE' => 57, 'AUTRE_PIECE_CONS' => 58, 'RESP_ELEC_AUTRE_PLATEFORME' => 59, 'MISE_EN_LIGNE_ENTITE_COORDINATRICE' => 60, 'AUTORISER_PUBLICITE' => 61, 'POURSUITE_DATE_LIMITE_REMISE_PLI' => 62, 'DELAI_POURSUITE_AFFICHAGE' => 63, 'MODE_OUVERTURE_DOSSIER' => 64, 'MODE_OUVERTURE_REPONSE' => 65, 'MARCHE_PUBLIC_SIMPLIFIE' => 66, ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure' => 0, 'organisme' => 1, 'elec_resp' => 2, 'no_elec_resp' => 3, 'cipher_enabled' => 4, 'cipher_disabled' => 5, 'signature_enabled' => 6, 'signature_disabled' => 7, 'env_candidature' => 8, 'env_offre' => 9, 'env_anonymat' => 10, 'envoi_complet' => 11, 'envoi_differe' => 12, 'procedure_publicite' => 13, 'procedure_restreinte_candidature' => 14, 'procedure_restreinte_offre' => 15, 'envoi_mail_par_mpe' => 16, 'no_envoi_mail_par_mpe' => 17, 'mise_en_ligne1' => 18, 'mise_en_ligne2' => 19, 'mise_en_ligne3' => 20, 'mise_en_ligne4' => 21, 'env_offre_type_unique' => 22, 'env_offre_type_multiple' => 23, 'no_fichier_annonce' => 24, 'fichier_importe' => 25, 'fichier_boamp' => 26, 'reglement_cons' => 27, 'dossier_dce' => 28, 'partial_dce_download' => 29, 'service' => 30, 'constitution_dossier_reponse' => 31, 'env_offre_type_unique2' => 32, 'env_offre_type_multiple2' => 33, 'gestion_envois_postaux' => 34, 'tireur_plan_non' => 35, 'tireur_plan_oui' => 36, 'tireur_plan_papier' => 37, 'tireur_plan_cdrom' => 38, 'tireur_plan_nom' => 39, 'tirage_descriptif' => 40, 'delai_date_limite_remise_pli' => 41, 'signature_propre' => 42, 'procedure_restreinte' => 43, 'ouverture_simultanee' => 44, 'type_decision_a_renseigner' => 45, 'type_decision_attribution_marche' => 46, 'type_decision_declaration_sans_suite' => 47, 'type_decision_declaration_infructueux' => 48, 'type_decision_selection_entreprise' => 49, 'type_decision_attribution_accord_cadre' => 50, 'type_decision_admission_sad' => 51, 'type_decision_autre' => 52, 'env_offre_technique' => 53, 'env_offre_technique_type_unique' => 54, 'env_offre_technique_type_multiple' => 55, 'rep_obligatoire' => 56, 'no_rep_obligatoire' => 57, 'autre_piece_cons' => 58, 'resp_elec_autre_plateforme' => 59, 'mise_en_ligne_entite_coordinatrice' => 60, 'autoriser_publicite' => 61, 'poursuite_date_limite_remise_pli' => 62, 'delai_poursuite_affichage' => 63, 'mode_ouverture_dossier' => 64, 'mode_ouverture_reponse' => 65, 'marche_public_simplifie' => 66, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, )
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
        $toNames = CommonProcedureEquivalencePeer::getFieldNames($toType);
        $key = isset(CommonProcedureEquivalencePeer::$fieldKeys[$fromType][$name]) ? CommonProcedureEquivalencePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonProcedureEquivalencePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonProcedureEquivalencePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonProcedureEquivalencePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonProcedureEquivalencePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonProcedureEquivalencePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ORGANISME);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ELEC_RESP);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::NO_ELEC_RESP);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::CIPHER_ENABLED);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::CIPHER_DISABLED);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::SIGNATURE_ENABLED);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::SIGNATURE_DISABLED);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_CANDIDATURE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_ANONYMAT);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENVOI_COMPLET);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENVOI_DIFFERE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::PROCEDURE_PUBLICITE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_CANDIDATURE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE_OFFRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENVOI_MAIL_PAR_MPE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::NO_ENVOI_MAIL_PAR_MPE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MISE_EN_LIGNE1);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MISE_EN_LIGNE2);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MISE_EN_LIGNE3);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MISE_EN_LIGNE4);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::NO_FICHIER_ANNONCE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::FICHIER_IMPORTE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::FICHIER_BOAMP);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::REGLEMENT_CONS);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::DOSSIER_DCE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::PARTIAL_DCE_DOWNLOAD);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::SERVICE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::CONSTITUTION_DOSSIER_REPONSE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_UNIQUE2);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TYPE_MULTIPLE2);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::GESTION_ENVOIS_POSTAUX);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIREUR_PLAN_NON);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIREUR_PLAN_OUI);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIREUR_PLAN_PAPIER);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIREUR_PLAN_CDROM);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIREUR_PLAN_NOM);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TIRAGE_DESCRIPTIF);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::DELAI_DATE_LIMITE_REMISE_PLI);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::SIGNATURE_PROPRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::PROCEDURE_RESTREINTE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::OUVERTURE_SIMULTANEE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_A_RENSEIGNER);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_MARCHE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_SANS_SUITE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_SELECTION_ENTREPRISE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_ADMISSION_SAD);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::TYPE_DECISION_AUTRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_UNIQUE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::ENV_OFFRE_TECHNIQUE_TYPE_MULTIPLE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::REP_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::NO_REP_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::AUTRE_PIECE_CONS);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::RESP_ELEC_AUTRE_PLATEFORME);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MISE_EN_LIGNE_ENTITE_COORDINATRICE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::AUTORISER_PUBLICITE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::POURSUITE_DATE_LIMITE_REMISE_PLI);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::DELAI_POURSUITE_AFFICHAGE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MODE_OUVERTURE_DOSSIER);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MODE_OUVERTURE_REPONSE);
            $criteria->addSelectColumn(CommonProcedureEquivalencePeer::MARCHE_PUBLIC_SIMPLIFIE);
        } else {
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.elec_resp');
            $criteria->addSelectColumn($alias . '.no_elec_resp');
            $criteria->addSelectColumn($alias . '.cipher_enabled');
            $criteria->addSelectColumn($alias . '.cipher_disabled');
            $criteria->addSelectColumn($alias . '.signature_enabled');
            $criteria->addSelectColumn($alias . '.signature_disabled');
            $criteria->addSelectColumn($alias . '.env_candidature');
            $criteria->addSelectColumn($alias . '.env_offre');
            $criteria->addSelectColumn($alias . '.env_anonymat');
            $criteria->addSelectColumn($alias . '.envoi_complet');
            $criteria->addSelectColumn($alias . '.envoi_differe');
            $criteria->addSelectColumn($alias . '.procedure_publicite');
            $criteria->addSelectColumn($alias . '.procedure_restreinte_candidature');
            $criteria->addSelectColumn($alias . '.procedure_restreinte_offre');
            $criteria->addSelectColumn($alias . '.envoi_mail_par_mpe');
            $criteria->addSelectColumn($alias . '.no_envoi_mail_par_mpe');
            $criteria->addSelectColumn($alias . '.mise_en_ligne1');
            $criteria->addSelectColumn($alias . '.mise_en_ligne2');
            $criteria->addSelectColumn($alias . '.mise_en_ligne3');
            $criteria->addSelectColumn($alias . '.mise_en_ligne4');
            $criteria->addSelectColumn($alias . '.env_offre_type_unique');
            $criteria->addSelectColumn($alias . '.env_offre_type_multiple');
            $criteria->addSelectColumn($alias . '.no_fichier_annonce');
            $criteria->addSelectColumn($alias . '.fichier_importe');
            $criteria->addSelectColumn($alias . '.fichier_boamp');
            $criteria->addSelectColumn($alias . '.reglement_cons');
            $criteria->addSelectColumn($alias . '.dossier_dce');
            $criteria->addSelectColumn($alias . '.partial_dce_download');
            $criteria->addSelectColumn($alias . '.service');
            $criteria->addSelectColumn($alias . '.constitution_dossier_reponse');
            $criteria->addSelectColumn($alias . '.env_offre_type_unique2');
            $criteria->addSelectColumn($alias . '.env_offre_type_multiple2');
            $criteria->addSelectColumn($alias . '.gestion_envois_postaux');
            $criteria->addSelectColumn($alias . '.tireur_plan_non');
            $criteria->addSelectColumn($alias . '.tireur_plan_oui');
            $criteria->addSelectColumn($alias . '.tireur_plan_papier');
            $criteria->addSelectColumn($alias . '.tireur_plan_cdrom');
            $criteria->addSelectColumn($alias . '.tireur_plan_nom');
            $criteria->addSelectColumn($alias . '.tirage_descriptif');
            $criteria->addSelectColumn($alias . '.delai_date_limite_remise_pli');
            $criteria->addSelectColumn($alias . '.signature_propre');
            $criteria->addSelectColumn($alias . '.procedure_restreinte');
            $criteria->addSelectColumn($alias . '.ouverture_simultanee');
            $criteria->addSelectColumn($alias . '.type_decision_a_renseigner');
            $criteria->addSelectColumn($alias . '.type_decision_attribution_marche');
            $criteria->addSelectColumn($alias . '.type_decision_declaration_sans_suite');
            $criteria->addSelectColumn($alias . '.type_decision_declaration_infructueux');
            $criteria->addSelectColumn($alias . '.type_decision_selection_entreprise');
            $criteria->addSelectColumn($alias . '.type_decision_attribution_accord_cadre');
            $criteria->addSelectColumn($alias . '.type_decision_admission_sad');
            $criteria->addSelectColumn($alias . '.type_decision_autre');
            $criteria->addSelectColumn($alias . '.env_offre_technique');
            $criteria->addSelectColumn($alias . '.env_offre_technique_type_unique');
            $criteria->addSelectColumn($alias . '.env_offre_technique_type_multiple');
            $criteria->addSelectColumn($alias . '.rep_obligatoire');
            $criteria->addSelectColumn($alias . '.no_rep_obligatoire');
            $criteria->addSelectColumn($alias . '.autre_piece_cons');
            $criteria->addSelectColumn($alias . '.resp_elec_autre_plateforme');
            $criteria->addSelectColumn($alias . '.mise_en_ligne_entite_coordinatrice');
            $criteria->addSelectColumn($alias . '.autoriser_publicite');
            $criteria->addSelectColumn($alias . '.poursuite_date_limite_remise_pli');
            $criteria->addSelectColumn($alias . '.delai_poursuite_affichage');
            $criteria->addSelectColumn($alias . '.mode_ouverture_dossier');
            $criteria->addSelectColumn($alias . '.mode_ouverture_reponse');
            $criteria->addSelectColumn($alias . '.marche_public_simplifie');
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
        $criteria->setPrimaryTableName(CommonProcedureEquivalencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonProcedureEquivalencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonProcedureEquivalencePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonProcedureEquivalence
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonProcedureEquivalencePeer::doSelect($critcopy, $con);
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
        return CommonProcedureEquivalencePeer::populateObjects(CommonProcedureEquivalencePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonProcedureEquivalencePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonProcedureEquivalencePeer::DATABASE_NAME);

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
     * @param      CommonProcedureEquivalence $obj A CommonProcedureEquivalence object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdTypeProcedure(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonProcedureEquivalencePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonProcedureEquivalence object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonProcedureEquivalence) {
                $key = serialize(array((string) $value->getIdTypeProcedure(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonProcedureEquivalence object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonProcedureEquivalencePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonProcedureEquivalence Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonProcedureEquivalencePeer::$instances[$key])) {
                return CommonProcedureEquivalencePeer::$instances[$key];
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
        foreach (CommonProcedureEquivalencePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonProcedureEquivalencePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ProcedureEquivalence
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
        $cls = CommonProcedureEquivalencePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonProcedureEquivalencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonProcedureEquivalencePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonProcedureEquivalencePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonProcedureEquivalence object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonProcedureEquivalencePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonProcedureEquivalencePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonProcedureEquivalencePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonProcedureEquivalencePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonProcedureEquivalencePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonProcedureEquivalencePeer::DATABASE_NAME)->getTable(CommonProcedureEquivalencePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonProcedureEquivalencePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonProcedureEquivalencePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonProcedureEquivalenceTableMap());
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
        return CommonProcedureEquivalencePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonProcedureEquivalence or Criteria object.
     *
     * @param      mixed $values Criteria or CommonProcedureEquivalence object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonProcedureEquivalence object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonProcedureEquivalencePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonProcedureEquivalence or Criteria object.
     *
     * @param      mixed $values Criteria or CommonProcedureEquivalence object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonProcedureEquivalencePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE);
            $value = $criteria->remove(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE);
            if ($value) {
                $selectCriteria->add(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonProcedureEquivalencePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonProcedureEquivalencePeer::ORGANISME);
            $value = $criteria->remove(CommonProcedureEquivalencePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonProcedureEquivalencePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonProcedureEquivalencePeer::TABLE_NAME);
            }

        } else { // $values is CommonProcedureEquivalence object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonProcedureEquivalencePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ProcedureEquivalence table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonProcedureEquivalencePeer::TABLE_NAME, $con, CommonProcedureEquivalencePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonProcedureEquivalencePeer::clearInstancePool();
            CommonProcedureEquivalencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonProcedureEquivalence or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonProcedureEquivalence object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonProcedureEquivalencePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonProcedureEquivalence) { // it's a model object
            // invalidate the cache for this single object
            CommonProcedureEquivalencePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonProcedureEquivalencePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonProcedureEquivalencePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonProcedureEquivalencePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonProcedureEquivalencePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonProcedureEquivalencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonProcedureEquivalence object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonProcedureEquivalence $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonProcedureEquivalencePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonProcedureEquivalencePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonProcedureEquivalencePeer::DATABASE_NAME, CommonProcedureEquivalencePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_type_procedure
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonProcedureEquivalence
     */
    public static function retrieveByPK($id_type_procedure, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_type_procedure, (string) $organisme));
         if (null !== ($obj = CommonProcedureEquivalencePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonProcedureEquivalencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonProcedureEquivalencePeer::DATABASE_NAME);
        $criteria->add(CommonProcedureEquivalencePeer::ID_TYPE_PROCEDURE, $id_type_procedure);
        $criteria->add(CommonProcedureEquivalencePeer::ORGANISME, $organisme);
        $v = CommonProcedureEquivalencePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonProcedureEquivalencePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonProcedureEquivalencePeer::buildTableMap();

