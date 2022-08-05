<?php


/**
 * Base static class for performing query and update operations on the 'Chorus_echange' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonChorusEchangePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Chorus_echange';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonChorusEchange';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonChorusEchangeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 68;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 68;

    /** the column name for the id field */
    const ID = 'Chorus_echange.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Chorus_echange.organisme';

    /** the column name for the id_decision field */
    const ID_DECISION = 'Chorus_echange.id_decision';

    /** the column name for the num_ordre field */
    const NUM_ORDRE = 'Chorus_echange.num_ordre';

    /** the column name for the nom_createur field */
    const NOM_CREATEUR = 'Chorus_echange.nom_createur';

    /** the column name for the prenom_createur field */
    const PRENOM_CREATEUR = 'Chorus_echange.prenom_createur';

    /** the column name for the id_createur field */
    const ID_CREATEUR = 'Chorus_echange.id_createur';

    /** the column name for the statutEchange field */
    const STATUTECHANGE = 'Chorus_echange.statutEchange';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Chorus_echange.date_creation';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'Chorus_echange.date_envoi';

    /** the column name for the retour_chorus field */
    const RETOUR_CHORUS = 'Chorus_echange.retour_chorus';

    /** the column name for the id_ej_appli_ext field */
    const ID_EJ_APPLI_EXT = 'Chorus_echange.id_ej_appli_ext';

    /** the column name for the id_oa field */
    const ID_OA = 'Chorus_echange.id_oa';

    /** the column name for the id_ga field */
    const ID_GA = 'Chorus_echange.id_ga';

    /** the column name for the id_type_marche field */
    const ID_TYPE_MARCHE = 'Chorus_echange.id_type_marche';

    /** the column name for the id_type_groupement field */
    const ID_TYPE_GROUPEMENT = 'Chorus_echange.id_type_groupement';

    /** the column name for the id_regroupement_comptable field */
    const ID_REGROUPEMENT_COMPTABLE = 'Chorus_echange.id_regroupement_comptable';

    /** the column name for the dce_items field */
    const DCE_ITEMS = 'Chorus_echange.dce_items';

    /** the column name for the ids_env_ae field */
    const IDS_ENV_AE = 'Chorus_echange.ids_env_ae';

    /** the column name for the ids_env_items field */
    const IDS_ENV_ITEMS = 'Chorus_echange.ids_env_items';

    /** the column name for the ids_pieces_externes field */
    const IDS_PIECES_EXTERNES = 'Chorus_echange.ids_pieces_externes';

    /** the column name for the id_agent_envoi field */
    const ID_AGENT_ENVOI = 'Chorus_echange.id_agent_envoi';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 'Chorus_echange.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 'Chorus_echange.prenom_agent';

    /** the column name for the signACE field */
    const SIGNACE = 'Chorus_echange.signACE';

    /** the column name for the siren field */
    const SIREN = 'Chorus_echange.siren';

    /** the column name for the siret field */
    const SIRET = 'Chorus_echange.siret';

    /** the column name for the date_notification field */
    const DATE_NOTIFICATION = 'Chorus_echange.date_notification';

    /** the column name for the date_fin_marche field */
    const DATE_FIN_MARCHE = 'Chorus_echange.date_fin_marche';

    /** the column name for the id_acte_juridique field */
    const ID_ACTE_JURIDIQUE = 'Chorus_echange.id_acte_juridique';

    /** the column name for the cpv_1 field */
    const CPV_1 = 'Chorus_echange.cpv_1';

    /** the column name for the cpv_2 field */
    const CPV_2 = 'Chorus_echange.cpv_2';

    /** the column name for the cpv_3 field */
    const CPV_3 = 'Chorus_echange.cpv_3';

    /** the column name for the cpv_4 field */
    const CPV_4 = 'Chorus_echange.cpv_4';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'Chorus_echange.id_type_procedure';

    /** the column name for the id_forme_prix field */
    const ID_FORME_PRIX = 'Chorus_echange.id_forme_prix';

    /** the column name for the Nbr_entreprises_cotraitantes field */
    const NBR_ENTREPRISES_COTRAITANTES = 'Chorus_echange.Nbr_entreprises_cotraitantes';

    /** the column name for the sous_traitance_declaree field */
    const SOUS_TRAITANCE_DECLAREE = 'Chorus_echange.sous_traitance_declaree';

    /** the column name for the carte_achat field */
    const CARTE_ACHAT = 'Chorus_echange.carte_achat';

    /** the column name for the clause_sociale field */
    const CLAUSE_SOCIALE = 'Chorus_echange.clause_sociale';

    /** the column name for the clause_environnementale field */
    const CLAUSE_ENVIRONNEMENTALE = 'Chorus_echange.clause_environnementale';

    /** the column name for the Nbr_proposition_recues field */
    const NBR_PROPOSITION_RECUES = 'Chorus_echange.Nbr_proposition_recues';

    /** the column name for the Nbr_proposition_dematerialisees field */
    const NBR_PROPOSITION_DEMATERIALISEES = 'Chorus_echange.Nbr_proposition_dematerialisees';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'Chorus_echange.nom_fichier';

    /** the column name for the erreur_rejet field */
    const ERREUR_REJET = 'Chorus_echange.erreur_rejet';

    /** the column name for the code_cpv_libelle1 field */
    const CODE_CPV_LIBELLE1 = 'Chorus_echange.code_cpv_libelle1';

    /** the column name for the code_cpv_libelle2 field */
    const CODE_CPV_LIBELLE2 = 'Chorus_echange.code_cpv_libelle2';

    /** the column name for the code_cpv_libelle3 field */
    const CODE_CPV_LIBELLE3 = 'Chorus_echange.code_cpv_libelle3';

    /** the column name for the code_cpv_libelle4 field */
    const CODE_CPV_LIBELLE4 = 'Chorus_echange.code_cpv_libelle4';

    /** the column name for the pieces_notif_items field */
    const PIECES_NOTIF_ITEMS = 'Chorus_echange.pieces_notif_items';

    /** the column name for the ids_blob_env field */
    const IDS_BLOB_ENV = 'Chorus_echange.ids_blob_env';

    /** the column name for the ids_env_sign_items field */
    const IDS_ENV_SIGN_ITEMS = 'Chorus_echange.ids_env_sign_items';

    /** the column name for the ids_blob_sign_env field */
    const IDS_BLOB_SIGN_ENV = 'Chorus_echange.ids_blob_sign_env';

    /** the column name for the montant_ht field */
    const MONTANT_HT = 'Chorus_echange.montant_ht';

    /** the column name for the code_pays_titulaire field */
    const CODE_PAYS_TITULAIRE = 'Chorus_echange.code_pays_titulaire';

    /** the column name for the numero_siret_titulaire field */
    const NUMERO_SIRET_TITULAIRE = 'Chorus_echange.numero_siret_titulaire';

    /** the column name for the numero_siren_titulaire field */
    const NUMERO_SIREN_TITULAIRE = 'Chorus_echange.numero_siren_titulaire';

    /** the column name for the Codes_pays_co_titulaire field */
    const CODES_PAYS_CO_TITULAIRE = 'Chorus_echange.Codes_pays_co_titulaire';

    /** the column name for the numero_siret_co_titulaire field */
    const NUMERO_SIRET_CO_TITULAIRE = 'Chorus_echange.numero_siret_co_titulaire';

    /** the column name for the numero_siren_co_titulaire field */
    const NUMERO_SIREN_CO_TITULAIRE = 'Chorus_echange.numero_siren_co_titulaire';

    /** the column name for the CCAG_reference field */
    const CCAG_REFERENCE = 'Chorus_echange.CCAG_reference';

    /** the column name for the pourcentage_avance field */
    const POURCENTAGE_AVANCE = 'Chorus_echange.pourcentage_avance';

    /** the column name for the type_avance field */
    const TYPE_AVANCE = 'Chorus_echange.type_avance';

    /** the column name for the conditions_paiement field */
    const CONDITIONS_PAIEMENT = 'Chorus_echange.conditions_paiement';

    /** the column name for the identifiant_accord_cadre field */
    const IDENTIFIANT_ACCORD_CADRE = 'Chorus_echange.identifiant_accord_cadre';

    /** the column name for the date_notification_reelle field */
    const DATE_NOTIFICATION_REELLE = 'Chorus_echange.date_notification_reelle';

    /** the column name for the date_fin_marche_reelle field */
    const DATE_FIN_MARCHE_REELLE = 'Chorus_echange.date_fin_marche_reelle';

    /** the column name for the ids_rapport_signature field */
    const IDS_RAPPORT_SIGNATURE = 'Chorus_echange.ids_rapport_signature';

    /** The enumerated values for the signACE field */
    const SIGNACE_0 = '0';
    const SIGNACE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonChorusEchange objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonChorusEchange[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusEchangePeer::$fieldNames[CommonChorusEchangePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdDecision', 'NumOrdre', 'NomCreateur', 'PrenomCreateur', 'IdCreateur', 'Statutechange', 'DateCreation', 'DateEnvoi', 'RetourChorus', 'IdEjAppliExt', 'IdOa', 'IdGa', 'IdTypeMarche', 'IdTypeGroupement', 'IdRegroupementComptable', 'DceItems', 'IdsEnvAe', 'IdsEnvItems', 'IdsPiecesExternes', 'IdAgentEnvoi', 'NomAgent', 'PrenomAgent', 'Signace', 'Siren', 'Siret', 'DateNotification', 'DateFinMarche', 'IdActeJuridique', 'Cpv1', 'Cpv2', 'Cpv3', 'Cpv4', 'IdTypeProcedure', 'IdFormePrix', 'NbrEntreprisesCotraitantes', 'SousTraitanceDeclaree', 'CarteAchat', 'ClauseSociale', 'ClauseEnvironnementale', 'NbrPropositionRecues', 'NbrPropositionDematerialisees', 'NomFichier', 'ErreurRejet', 'CodeCpvLibelle1', 'CodeCpvLibelle2', 'CodeCpvLibelle3', 'CodeCpvLibelle4', 'PiecesNotifItems', 'IdsBlobEnv', 'IdsEnvSignItems', 'IdsBlobSignEnv', 'MontantHt', 'CodePaysTitulaire', 'NumeroSiretTitulaire', 'NumeroSirenTitulaire', 'CodesPaysCoTitulaire', 'NumeroSiretCoTitulaire', 'NumeroSirenCoTitulaire', 'CcagReference', 'PourcentageAvance', 'TypeAvance', 'ConditionsPaiement', 'IdentifiantAccordCadre', 'DateNotificationReelle', 'DateFinMarcheReelle', 'IdsRapportSignature', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idDecision', 'numOrdre', 'nomCreateur', 'prenomCreateur', 'idCreateur', 'statutechange', 'dateCreation', 'dateEnvoi', 'retourChorus', 'idEjAppliExt', 'idOa', 'idGa', 'idTypeMarche', 'idTypeGroupement', 'idRegroupementComptable', 'dceItems', 'idsEnvAe', 'idsEnvItems', 'idsPiecesExternes', 'idAgentEnvoi', 'nomAgent', 'prenomAgent', 'signace', 'siren', 'siret', 'dateNotification', 'dateFinMarche', 'idActeJuridique', 'cpv1', 'cpv2', 'cpv3', 'cpv4', 'idTypeProcedure', 'idFormePrix', 'nbrEntreprisesCotraitantes', 'sousTraitanceDeclaree', 'carteAchat', 'clauseSociale', 'clauseEnvironnementale', 'nbrPropositionRecues', 'nbrPropositionDematerialisees', 'nomFichier', 'erreurRejet', 'codeCpvLibelle1', 'codeCpvLibelle2', 'codeCpvLibelle3', 'codeCpvLibelle4', 'piecesNotifItems', 'idsBlobEnv', 'idsEnvSignItems', 'idsBlobSignEnv', 'montantHt', 'codePaysTitulaire', 'numeroSiretTitulaire', 'numeroSirenTitulaire', 'codesPaysCoTitulaire', 'numeroSiretCoTitulaire', 'numeroSirenCoTitulaire', 'ccagReference', 'pourcentageAvance', 'typeAvance', 'conditionsPaiement', 'identifiantAccordCadre', 'dateNotificationReelle', 'dateFinMarcheReelle', 'idsRapportSignature', ),
        BasePeer::TYPE_COLNAME => array (CommonChorusEchangePeer::ID, CommonChorusEchangePeer::ORGANISME, CommonChorusEchangePeer::ID_DECISION, CommonChorusEchangePeer::NUM_ORDRE, CommonChorusEchangePeer::NOM_CREATEUR, CommonChorusEchangePeer::PRENOM_CREATEUR, CommonChorusEchangePeer::ID_CREATEUR, CommonChorusEchangePeer::STATUTECHANGE, CommonChorusEchangePeer::DATE_CREATION, CommonChorusEchangePeer::DATE_ENVOI, CommonChorusEchangePeer::RETOUR_CHORUS, CommonChorusEchangePeer::ID_EJ_APPLI_EXT, CommonChorusEchangePeer::ID_OA, CommonChorusEchangePeer::ID_GA, CommonChorusEchangePeer::ID_TYPE_MARCHE, CommonChorusEchangePeer::ID_TYPE_GROUPEMENT, CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE, CommonChorusEchangePeer::DCE_ITEMS, CommonChorusEchangePeer::IDS_ENV_AE, CommonChorusEchangePeer::IDS_ENV_ITEMS, CommonChorusEchangePeer::IDS_PIECES_EXTERNES, CommonChorusEchangePeer::ID_AGENT_ENVOI, CommonChorusEchangePeer::NOM_AGENT, CommonChorusEchangePeer::PRENOM_AGENT, CommonChorusEchangePeer::SIGNACE, CommonChorusEchangePeer::SIREN, CommonChorusEchangePeer::SIRET, CommonChorusEchangePeer::DATE_NOTIFICATION, CommonChorusEchangePeer::DATE_FIN_MARCHE, CommonChorusEchangePeer::ID_ACTE_JURIDIQUE, CommonChorusEchangePeer::CPV_1, CommonChorusEchangePeer::CPV_2, CommonChorusEchangePeer::CPV_3, CommonChorusEchangePeer::CPV_4, CommonChorusEchangePeer::ID_TYPE_PROCEDURE, CommonChorusEchangePeer::ID_FORME_PRIX, CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES, CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE, CommonChorusEchangePeer::CARTE_ACHAT, CommonChorusEchangePeer::CLAUSE_SOCIALE, CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE, CommonChorusEchangePeer::NBR_PROPOSITION_RECUES, CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES, CommonChorusEchangePeer::NOM_FICHIER, CommonChorusEchangePeer::ERREUR_REJET, CommonChorusEchangePeer::CODE_CPV_LIBELLE1, CommonChorusEchangePeer::CODE_CPV_LIBELLE2, CommonChorusEchangePeer::CODE_CPV_LIBELLE3, CommonChorusEchangePeer::CODE_CPV_LIBELLE4, CommonChorusEchangePeer::PIECES_NOTIF_ITEMS, CommonChorusEchangePeer::IDS_BLOB_ENV, CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS, CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV, CommonChorusEchangePeer::MONTANT_HT, CommonChorusEchangePeer::CODE_PAYS_TITULAIRE, CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE, CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE, CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE, CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE, CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE, CommonChorusEchangePeer::CCAG_REFERENCE, CommonChorusEchangePeer::POURCENTAGE_AVANCE, CommonChorusEchangePeer::TYPE_AVANCE, CommonChorusEchangePeer::CONDITIONS_PAIEMENT, CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE, CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE, CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE, CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_DECISION', 'NUM_ORDRE', 'NOM_CREATEUR', 'PRENOM_CREATEUR', 'ID_CREATEUR', 'STATUTECHANGE', 'DATE_CREATION', 'DATE_ENVOI', 'RETOUR_CHORUS', 'ID_EJ_APPLI_EXT', 'ID_OA', 'ID_GA', 'ID_TYPE_MARCHE', 'ID_TYPE_GROUPEMENT', 'ID_REGROUPEMENT_COMPTABLE', 'DCE_ITEMS', 'IDS_ENV_AE', 'IDS_ENV_ITEMS', 'IDS_PIECES_EXTERNES', 'ID_AGENT_ENVOI', 'NOM_AGENT', 'PRENOM_AGENT', 'SIGNACE', 'SIREN', 'SIRET', 'DATE_NOTIFICATION', 'DATE_FIN_MARCHE', 'ID_ACTE_JURIDIQUE', 'CPV_1', 'CPV_2', 'CPV_3', 'CPV_4', 'ID_TYPE_PROCEDURE', 'ID_FORME_PRIX', 'NBR_ENTREPRISES_COTRAITANTES', 'SOUS_TRAITANCE_DECLAREE', 'CARTE_ACHAT', 'CLAUSE_SOCIALE', 'CLAUSE_ENVIRONNEMENTALE', 'NBR_PROPOSITION_RECUES', 'NBR_PROPOSITION_DEMATERIALISEES', 'NOM_FICHIER', 'ERREUR_REJET', 'CODE_CPV_LIBELLE1', 'CODE_CPV_LIBELLE2', 'CODE_CPV_LIBELLE3', 'CODE_CPV_LIBELLE4', 'PIECES_NOTIF_ITEMS', 'IDS_BLOB_ENV', 'IDS_ENV_SIGN_ITEMS', 'IDS_BLOB_SIGN_ENV', 'MONTANT_HT', 'CODE_PAYS_TITULAIRE', 'NUMERO_SIRET_TITULAIRE', 'NUMERO_SIREN_TITULAIRE', 'CODES_PAYS_CO_TITULAIRE', 'NUMERO_SIRET_CO_TITULAIRE', 'NUMERO_SIREN_CO_TITULAIRE', 'CCAG_REFERENCE', 'POURCENTAGE_AVANCE', 'TYPE_AVANCE', 'CONDITIONS_PAIEMENT', 'IDENTIFIANT_ACCORD_CADRE', 'DATE_NOTIFICATION_REELLE', 'DATE_FIN_MARCHE_REELLE', 'IDS_RAPPORT_SIGNATURE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_decision', 'num_ordre', 'nom_createur', 'prenom_createur', 'id_createur', 'statutEchange', 'date_creation', 'date_envoi', 'retour_chorus', 'id_ej_appli_ext', 'id_oa', 'id_ga', 'id_type_marche', 'id_type_groupement', 'id_regroupement_comptable', 'dce_items', 'ids_env_ae', 'ids_env_items', 'ids_pieces_externes', 'id_agent_envoi', 'nom_agent', 'prenom_agent', 'signACE', 'siren', 'siret', 'date_notification', 'date_fin_marche', 'id_acte_juridique', 'cpv_1', 'cpv_2', 'cpv_3', 'cpv_4', 'id_type_procedure', 'id_forme_prix', 'Nbr_entreprises_cotraitantes', 'sous_traitance_declaree', 'carte_achat', 'clause_sociale', 'clause_environnementale', 'Nbr_proposition_recues', 'Nbr_proposition_dematerialisees', 'nom_fichier', 'erreur_rejet', 'code_cpv_libelle1', 'code_cpv_libelle2', 'code_cpv_libelle3', 'code_cpv_libelle4', 'pieces_notif_items', 'ids_blob_env', 'ids_env_sign_items', 'ids_blob_sign_env', 'montant_ht', 'code_pays_titulaire', 'numero_siret_titulaire', 'numero_siren_titulaire', 'Codes_pays_co_titulaire', 'numero_siret_co_titulaire', 'numero_siren_co_titulaire', 'CCAG_reference', 'pourcentage_avance', 'type_avance', 'conditions_paiement', 'identifiant_accord_cadre', 'date_notification_reelle', 'date_fin_marche_reelle', 'ids_rapport_signature', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusEchangePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdDecision' => 2, 'NumOrdre' => 3, 'NomCreateur' => 4, 'PrenomCreateur' => 5, 'IdCreateur' => 6, 'Statutechange' => 7, 'DateCreation' => 8, 'DateEnvoi' => 9, 'RetourChorus' => 10, 'IdEjAppliExt' => 11, 'IdOa' => 12, 'IdGa' => 13, 'IdTypeMarche' => 14, 'IdTypeGroupement' => 15, 'IdRegroupementComptable' => 16, 'DceItems' => 17, 'IdsEnvAe' => 18, 'IdsEnvItems' => 19, 'IdsPiecesExternes' => 20, 'IdAgentEnvoi' => 21, 'NomAgent' => 22, 'PrenomAgent' => 23, 'Signace' => 24, 'Siren' => 25, 'Siret' => 26, 'DateNotification' => 27, 'DateFinMarche' => 28, 'IdActeJuridique' => 29, 'Cpv1' => 30, 'Cpv2' => 31, 'Cpv3' => 32, 'Cpv4' => 33, 'IdTypeProcedure' => 34, 'IdFormePrix' => 35, 'NbrEntreprisesCotraitantes' => 36, 'SousTraitanceDeclaree' => 37, 'CarteAchat' => 38, 'ClauseSociale' => 39, 'ClauseEnvironnementale' => 40, 'NbrPropositionRecues' => 41, 'NbrPropositionDematerialisees' => 42, 'NomFichier' => 43, 'ErreurRejet' => 44, 'CodeCpvLibelle1' => 45, 'CodeCpvLibelle2' => 46, 'CodeCpvLibelle3' => 47, 'CodeCpvLibelle4' => 48, 'PiecesNotifItems' => 49, 'IdsBlobEnv' => 50, 'IdsEnvSignItems' => 51, 'IdsBlobSignEnv' => 52, 'MontantHt' => 53, 'CodePaysTitulaire' => 54, 'NumeroSiretTitulaire' => 55, 'NumeroSirenTitulaire' => 56, 'CodesPaysCoTitulaire' => 57, 'NumeroSiretCoTitulaire' => 58, 'NumeroSirenCoTitulaire' => 59, 'CcagReference' => 60, 'PourcentageAvance' => 61, 'TypeAvance' => 62, 'ConditionsPaiement' => 63, 'IdentifiantAccordCadre' => 64, 'DateNotificationReelle' => 65, 'DateFinMarcheReelle' => 66, 'IdsRapportSignature' => 67, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idDecision' => 2, 'numOrdre' => 3, 'nomCreateur' => 4, 'prenomCreateur' => 5, 'idCreateur' => 6, 'statutechange' => 7, 'dateCreation' => 8, 'dateEnvoi' => 9, 'retourChorus' => 10, 'idEjAppliExt' => 11, 'idOa' => 12, 'idGa' => 13, 'idTypeMarche' => 14, 'idTypeGroupement' => 15, 'idRegroupementComptable' => 16, 'dceItems' => 17, 'idsEnvAe' => 18, 'idsEnvItems' => 19, 'idsPiecesExternes' => 20, 'idAgentEnvoi' => 21, 'nomAgent' => 22, 'prenomAgent' => 23, 'signace' => 24, 'siren' => 25, 'siret' => 26, 'dateNotification' => 27, 'dateFinMarche' => 28, 'idActeJuridique' => 29, 'cpv1' => 30, 'cpv2' => 31, 'cpv3' => 32, 'cpv4' => 33, 'idTypeProcedure' => 34, 'idFormePrix' => 35, 'nbrEntreprisesCotraitantes' => 36, 'sousTraitanceDeclaree' => 37, 'carteAchat' => 38, 'clauseSociale' => 39, 'clauseEnvironnementale' => 40, 'nbrPropositionRecues' => 41, 'nbrPropositionDematerialisees' => 42, 'nomFichier' => 43, 'erreurRejet' => 44, 'codeCpvLibelle1' => 45, 'codeCpvLibelle2' => 46, 'codeCpvLibelle3' => 47, 'codeCpvLibelle4' => 48, 'piecesNotifItems' => 49, 'idsBlobEnv' => 50, 'idsEnvSignItems' => 51, 'idsBlobSignEnv' => 52, 'montantHt' => 53, 'codePaysTitulaire' => 54, 'numeroSiretTitulaire' => 55, 'numeroSirenTitulaire' => 56, 'codesPaysCoTitulaire' => 57, 'numeroSiretCoTitulaire' => 58, 'numeroSirenCoTitulaire' => 59, 'ccagReference' => 60, 'pourcentageAvance' => 61, 'typeAvance' => 62, 'conditionsPaiement' => 63, 'identifiantAccordCadre' => 64, 'dateNotificationReelle' => 65, 'dateFinMarcheReelle' => 66, 'idsRapportSignature' => 67, ),
        BasePeer::TYPE_COLNAME => array (CommonChorusEchangePeer::ID => 0, CommonChorusEchangePeer::ORGANISME => 1, CommonChorusEchangePeer::ID_DECISION => 2, CommonChorusEchangePeer::NUM_ORDRE => 3, CommonChorusEchangePeer::NOM_CREATEUR => 4, CommonChorusEchangePeer::PRENOM_CREATEUR => 5, CommonChorusEchangePeer::ID_CREATEUR => 6, CommonChorusEchangePeer::STATUTECHANGE => 7, CommonChorusEchangePeer::DATE_CREATION => 8, CommonChorusEchangePeer::DATE_ENVOI => 9, CommonChorusEchangePeer::RETOUR_CHORUS => 10, CommonChorusEchangePeer::ID_EJ_APPLI_EXT => 11, CommonChorusEchangePeer::ID_OA => 12, CommonChorusEchangePeer::ID_GA => 13, CommonChorusEchangePeer::ID_TYPE_MARCHE => 14, CommonChorusEchangePeer::ID_TYPE_GROUPEMENT => 15, CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE => 16, CommonChorusEchangePeer::DCE_ITEMS => 17, CommonChorusEchangePeer::IDS_ENV_AE => 18, CommonChorusEchangePeer::IDS_ENV_ITEMS => 19, CommonChorusEchangePeer::IDS_PIECES_EXTERNES => 20, CommonChorusEchangePeer::ID_AGENT_ENVOI => 21, CommonChorusEchangePeer::NOM_AGENT => 22, CommonChorusEchangePeer::PRENOM_AGENT => 23, CommonChorusEchangePeer::SIGNACE => 24, CommonChorusEchangePeer::SIREN => 25, CommonChorusEchangePeer::SIRET => 26, CommonChorusEchangePeer::DATE_NOTIFICATION => 27, CommonChorusEchangePeer::DATE_FIN_MARCHE => 28, CommonChorusEchangePeer::ID_ACTE_JURIDIQUE => 29, CommonChorusEchangePeer::CPV_1 => 30, CommonChorusEchangePeer::CPV_2 => 31, CommonChorusEchangePeer::CPV_3 => 32, CommonChorusEchangePeer::CPV_4 => 33, CommonChorusEchangePeer::ID_TYPE_PROCEDURE => 34, CommonChorusEchangePeer::ID_FORME_PRIX => 35, CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES => 36, CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE => 37, CommonChorusEchangePeer::CARTE_ACHAT => 38, CommonChorusEchangePeer::CLAUSE_SOCIALE => 39, CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE => 40, CommonChorusEchangePeer::NBR_PROPOSITION_RECUES => 41, CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES => 42, CommonChorusEchangePeer::NOM_FICHIER => 43, CommonChorusEchangePeer::ERREUR_REJET => 44, CommonChorusEchangePeer::CODE_CPV_LIBELLE1 => 45, CommonChorusEchangePeer::CODE_CPV_LIBELLE2 => 46, CommonChorusEchangePeer::CODE_CPV_LIBELLE3 => 47, CommonChorusEchangePeer::CODE_CPV_LIBELLE4 => 48, CommonChorusEchangePeer::PIECES_NOTIF_ITEMS => 49, CommonChorusEchangePeer::IDS_BLOB_ENV => 50, CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS => 51, CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV => 52, CommonChorusEchangePeer::MONTANT_HT => 53, CommonChorusEchangePeer::CODE_PAYS_TITULAIRE => 54, CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE => 55, CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE => 56, CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE => 57, CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE => 58, CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE => 59, CommonChorusEchangePeer::CCAG_REFERENCE => 60, CommonChorusEchangePeer::POURCENTAGE_AVANCE => 61, CommonChorusEchangePeer::TYPE_AVANCE => 62, CommonChorusEchangePeer::CONDITIONS_PAIEMENT => 63, CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE => 64, CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE => 65, CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE => 66, CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE => 67, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_DECISION' => 2, 'NUM_ORDRE' => 3, 'NOM_CREATEUR' => 4, 'PRENOM_CREATEUR' => 5, 'ID_CREATEUR' => 6, 'STATUTECHANGE' => 7, 'DATE_CREATION' => 8, 'DATE_ENVOI' => 9, 'RETOUR_CHORUS' => 10, 'ID_EJ_APPLI_EXT' => 11, 'ID_OA' => 12, 'ID_GA' => 13, 'ID_TYPE_MARCHE' => 14, 'ID_TYPE_GROUPEMENT' => 15, 'ID_REGROUPEMENT_COMPTABLE' => 16, 'DCE_ITEMS' => 17, 'IDS_ENV_AE' => 18, 'IDS_ENV_ITEMS' => 19, 'IDS_PIECES_EXTERNES' => 20, 'ID_AGENT_ENVOI' => 21, 'NOM_AGENT' => 22, 'PRENOM_AGENT' => 23, 'SIGNACE' => 24, 'SIREN' => 25, 'SIRET' => 26, 'DATE_NOTIFICATION' => 27, 'DATE_FIN_MARCHE' => 28, 'ID_ACTE_JURIDIQUE' => 29, 'CPV_1' => 30, 'CPV_2' => 31, 'CPV_3' => 32, 'CPV_4' => 33, 'ID_TYPE_PROCEDURE' => 34, 'ID_FORME_PRIX' => 35, 'NBR_ENTREPRISES_COTRAITANTES' => 36, 'SOUS_TRAITANCE_DECLAREE' => 37, 'CARTE_ACHAT' => 38, 'CLAUSE_SOCIALE' => 39, 'CLAUSE_ENVIRONNEMENTALE' => 40, 'NBR_PROPOSITION_RECUES' => 41, 'NBR_PROPOSITION_DEMATERIALISEES' => 42, 'NOM_FICHIER' => 43, 'ERREUR_REJET' => 44, 'CODE_CPV_LIBELLE1' => 45, 'CODE_CPV_LIBELLE2' => 46, 'CODE_CPV_LIBELLE3' => 47, 'CODE_CPV_LIBELLE4' => 48, 'PIECES_NOTIF_ITEMS' => 49, 'IDS_BLOB_ENV' => 50, 'IDS_ENV_SIGN_ITEMS' => 51, 'IDS_BLOB_SIGN_ENV' => 52, 'MONTANT_HT' => 53, 'CODE_PAYS_TITULAIRE' => 54, 'NUMERO_SIRET_TITULAIRE' => 55, 'NUMERO_SIREN_TITULAIRE' => 56, 'CODES_PAYS_CO_TITULAIRE' => 57, 'NUMERO_SIRET_CO_TITULAIRE' => 58, 'NUMERO_SIREN_CO_TITULAIRE' => 59, 'CCAG_REFERENCE' => 60, 'POURCENTAGE_AVANCE' => 61, 'TYPE_AVANCE' => 62, 'CONDITIONS_PAIEMENT' => 63, 'IDENTIFIANT_ACCORD_CADRE' => 64, 'DATE_NOTIFICATION_REELLE' => 65, 'DATE_FIN_MARCHE_REELLE' => 66, 'IDS_RAPPORT_SIGNATURE' => 67, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_decision' => 2, 'num_ordre' => 3, 'nom_createur' => 4, 'prenom_createur' => 5, 'id_createur' => 6, 'statutEchange' => 7, 'date_creation' => 8, 'date_envoi' => 9, 'retour_chorus' => 10, 'id_ej_appli_ext' => 11, 'id_oa' => 12, 'id_ga' => 13, 'id_type_marche' => 14, 'id_type_groupement' => 15, 'id_regroupement_comptable' => 16, 'dce_items' => 17, 'ids_env_ae' => 18, 'ids_env_items' => 19, 'ids_pieces_externes' => 20, 'id_agent_envoi' => 21, 'nom_agent' => 22, 'prenom_agent' => 23, 'signACE' => 24, 'siren' => 25, 'siret' => 26, 'date_notification' => 27, 'date_fin_marche' => 28, 'id_acte_juridique' => 29, 'cpv_1' => 30, 'cpv_2' => 31, 'cpv_3' => 32, 'cpv_4' => 33, 'id_type_procedure' => 34, 'id_forme_prix' => 35, 'Nbr_entreprises_cotraitantes' => 36, 'sous_traitance_declaree' => 37, 'carte_achat' => 38, 'clause_sociale' => 39, 'clause_environnementale' => 40, 'Nbr_proposition_recues' => 41, 'Nbr_proposition_dematerialisees' => 42, 'nom_fichier' => 43, 'erreur_rejet' => 44, 'code_cpv_libelle1' => 45, 'code_cpv_libelle2' => 46, 'code_cpv_libelle3' => 47, 'code_cpv_libelle4' => 48, 'pieces_notif_items' => 49, 'ids_blob_env' => 50, 'ids_env_sign_items' => 51, 'ids_blob_sign_env' => 52, 'montant_ht' => 53, 'code_pays_titulaire' => 54, 'numero_siret_titulaire' => 55, 'numero_siren_titulaire' => 56, 'Codes_pays_co_titulaire' => 57, 'numero_siret_co_titulaire' => 58, 'numero_siren_co_titulaire' => 59, 'CCAG_reference' => 60, 'pourcentage_avance' => 61, 'type_avance' => 62, 'conditions_paiement' => 63, 'identifiant_accord_cadre' => 64, 'date_notification_reelle' => 65, 'date_fin_marche_reelle' => 66, 'ids_rapport_signature' => 67, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonChorusEchangePeer::SIGNACE => array(
            CommonChorusEchangePeer::SIGNACE_0,
            CommonChorusEchangePeer::SIGNACE_1,
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
        $toNames = CommonChorusEchangePeer::getFieldNames($toType);
        $key = isset(CommonChorusEchangePeer::$fieldKeys[$fromType][$name]) ? CommonChorusEchangePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonChorusEchangePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonChorusEchangePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonChorusEchangePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonChorusEchangePeer::$enumValueSets;
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
        $valueSets = CommonChorusEchangePeer::getValueSets();

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
        $values = CommonChorusEchangePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonChorusEchangePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonChorusEchangePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ORGANISME);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_DECISION);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NUM_ORDRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NOM_CREATEUR);
            $criteria->addSelectColumn(CommonChorusEchangePeer::PRENOM_CREATEUR);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_CREATEUR);
            $criteria->addSelectColumn(CommonChorusEchangePeer::STATUTECHANGE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonChorusEchangePeer::RETOUR_CHORUS);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_EJ_APPLI_EXT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_OA);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_GA);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_TYPE_MARCHE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_TYPE_GROUPEMENT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DCE_ITEMS);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_ENV_AE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_ENV_ITEMS);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_PIECES_EXTERNES);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_AGENT_ENVOI);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::SIGNACE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::SIREN);
            $criteria->addSelectColumn(CommonChorusEchangePeer::SIRET);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_FIN_MARCHE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_ACTE_JURIDIQUE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CPV_1);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CPV_2);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CPV_3);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CPV_4);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ID_FORME_PRIX);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES);
            $criteria->addSelectColumn(CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CARTE_ACHAT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CLAUSE_SOCIALE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NBR_PROPOSITION_RECUES);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonChorusEchangePeer::ERREUR_REJET);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODE_CPV_LIBELLE1);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODE_CPV_LIBELLE2);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODE_CPV_LIBELLE3);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODE_CPV_LIBELLE4);
            $criteria->addSelectColumn(CommonChorusEchangePeer::PIECES_NOTIF_ITEMS);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_BLOB_ENV);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV);
            $criteria->addSelectColumn(CommonChorusEchangePeer::MONTANT_HT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODE_PAYS_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CCAG_REFERENCE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::POURCENTAGE_AVANCE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::TYPE_AVANCE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::CONDITIONS_PAIEMENT);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE);
            $criteria->addSelectColumn(CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_decision');
            $criteria->addSelectColumn($alias . '.num_ordre');
            $criteria->addSelectColumn($alias . '.nom_createur');
            $criteria->addSelectColumn($alias . '.prenom_createur');
            $criteria->addSelectColumn($alias . '.id_createur');
            $criteria->addSelectColumn($alias . '.statutEchange');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.retour_chorus');
            $criteria->addSelectColumn($alias . '.id_ej_appli_ext');
            $criteria->addSelectColumn($alias . '.id_oa');
            $criteria->addSelectColumn($alias . '.id_ga');
            $criteria->addSelectColumn($alias . '.id_type_marche');
            $criteria->addSelectColumn($alias . '.id_type_groupement');
            $criteria->addSelectColumn($alias . '.id_regroupement_comptable');
            $criteria->addSelectColumn($alias . '.dce_items');
            $criteria->addSelectColumn($alias . '.ids_env_ae');
            $criteria->addSelectColumn($alias . '.ids_env_items');
            $criteria->addSelectColumn($alias . '.ids_pieces_externes');
            $criteria->addSelectColumn($alias . '.id_agent_envoi');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.signACE');
            $criteria->addSelectColumn($alias . '.siren');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.date_notification');
            $criteria->addSelectColumn($alias . '.date_fin_marche');
            $criteria->addSelectColumn($alias . '.id_acte_juridique');
            $criteria->addSelectColumn($alias . '.cpv_1');
            $criteria->addSelectColumn($alias . '.cpv_2');
            $criteria->addSelectColumn($alias . '.cpv_3');
            $criteria->addSelectColumn($alias . '.cpv_4');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.id_forme_prix');
            $criteria->addSelectColumn($alias . '.Nbr_entreprises_cotraitantes');
            $criteria->addSelectColumn($alias . '.sous_traitance_declaree');
            $criteria->addSelectColumn($alias . '.carte_achat');
            $criteria->addSelectColumn($alias . '.clause_sociale');
            $criteria->addSelectColumn($alias . '.clause_environnementale');
            $criteria->addSelectColumn($alias . '.Nbr_proposition_recues');
            $criteria->addSelectColumn($alias . '.Nbr_proposition_dematerialisees');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.erreur_rejet');
            $criteria->addSelectColumn($alias . '.code_cpv_libelle1');
            $criteria->addSelectColumn($alias . '.code_cpv_libelle2');
            $criteria->addSelectColumn($alias . '.code_cpv_libelle3');
            $criteria->addSelectColumn($alias . '.code_cpv_libelle4');
            $criteria->addSelectColumn($alias . '.pieces_notif_items');
            $criteria->addSelectColumn($alias . '.ids_blob_env');
            $criteria->addSelectColumn($alias . '.ids_env_sign_items');
            $criteria->addSelectColumn($alias . '.ids_blob_sign_env');
            $criteria->addSelectColumn($alias . '.montant_ht');
            $criteria->addSelectColumn($alias . '.code_pays_titulaire');
            $criteria->addSelectColumn($alias . '.numero_siret_titulaire');
            $criteria->addSelectColumn($alias . '.numero_siren_titulaire');
            $criteria->addSelectColumn($alias . '.Codes_pays_co_titulaire');
            $criteria->addSelectColumn($alias . '.numero_siret_co_titulaire');
            $criteria->addSelectColumn($alias . '.numero_siren_co_titulaire');
            $criteria->addSelectColumn($alias . '.CCAG_reference');
            $criteria->addSelectColumn($alias . '.pourcentage_avance');
            $criteria->addSelectColumn($alias . '.type_avance');
            $criteria->addSelectColumn($alias . '.conditions_paiement');
            $criteria->addSelectColumn($alias . '.identifiant_accord_cadre');
            $criteria->addSelectColumn($alias . '.date_notification_reelle');
            $criteria->addSelectColumn($alias . '.date_fin_marche_reelle');
            $criteria->addSelectColumn($alias . '.ids_rapport_signature');
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
        $criteria->setPrimaryTableName(CommonChorusEchangePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonChorusEchangePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonChorusEchangePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusEchange
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonChorusEchangePeer::doSelect($critcopy, $con);
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
        return CommonChorusEchangePeer::populateObjects(CommonChorusEchangePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonChorusEchangePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusEchangePeer::DATABASE_NAME);

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
     * @param      CommonChorusEchange $obj A CommonChorusEchange object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonChorusEchangePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonChorusEchange object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonChorusEchange) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonChorusEchange object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonChorusEchangePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonChorusEchange Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonChorusEchangePeer::$instances[$key])) {
                return CommonChorusEchangePeer::$instances[$key];
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
        foreach (CommonChorusEchangePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonChorusEchangePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Chorus_echange
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
        $cls = CommonChorusEchangePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonChorusEchangePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonChorusEchangePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonChorusEchangePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonChorusEchange object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonChorusEchangePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonChorusEchangePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonChorusEchangePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonChorusEchangePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonChorusEchangePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonChorusEchangePeer::DATABASE_NAME)->getTable(CommonChorusEchangePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonChorusEchangePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonChorusEchangePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonChorusEchangeTableMap());
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
        return CommonChorusEchangePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonChorusEchange or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusEchange object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonChorusEchange object
        }

        if ($criteria->containsKey(CommonChorusEchangePeer::ID) && $criteria->keyContainsValue(CommonChorusEchangePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonChorusEchangePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonChorusEchangePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonChorusEchange or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusEchange object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonChorusEchangePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonChorusEchangePeer::ID);
            $value = $criteria->remove(CommonChorusEchangePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonChorusEchangePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusEchangePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonChorusEchangePeer::ORGANISME);
            $value = $criteria->remove(CommonChorusEchangePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonChorusEchangePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusEchangePeer::TABLE_NAME);
            }

        } else { // $values is CommonChorusEchange object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonChorusEchangePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Chorus_echange table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonChorusEchangePeer::TABLE_NAME, $con, CommonChorusEchangePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonChorusEchangePeer::clearInstancePool();
            CommonChorusEchangePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonChorusEchange or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonChorusEchange object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonChorusEchangePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonChorusEchange) { // it's a model object
            // invalidate the cache for this single object
            CommonChorusEchangePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonChorusEchangePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonChorusEchangePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonChorusEchangePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonChorusEchangePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusEchangePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonChorusEchangePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonChorusEchange object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonChorusEchange $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonChorusEchangePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonChorusEchangePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonChorusEchangePeer::DATABASE_NAME, CommonChorusEchangePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonChorusEchange
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonChorusEchangePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonChorusEchangePeer::DATABASE_NAME);
        $criteria->add(CommonChorusEchangePeer::ID, $id);
        $criteria->add(CommonChorusEchangePeer::ORGANISME, $organisme);
        $v = CommonChorusEchangePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonChorusEchangePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonChorusEchangePeer::buildTableMap();

