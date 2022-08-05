<?php


/**
 * Base static class for performing query and update operations on the 'Agent' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Agent';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAgent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 40;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 40;

    /** the column name for the id field */
    const ID = 'Agent.id';

    /** the column name for the login field */
    const LOGIN = 'Agent.login';

    /** the column name for the email field */
    const EMAIL = 'Agent.email';

    /** the column name for the mdp field */
    const MDP = 'Agent.mdp';

    /** the column name for the certificat field */
    const CERTIFICAT = 'Agent.certificat';

    /** the column name for the nom field */
    const NOM = 'Agent.nom';

    /** the column name for the prenom field */
    const PRENOM = 'Agent.prenom';

    /** the column name for the tentatives_mdp field */
    const TENTATIVES_MDP = 'Agent.tentatives_mdp';

    /** the column name for the organisme field */
    const ORGANISME = 'Agent.organisme';

    /** the column name for the service_id field */
    const SERVICE_ID = 'Agent.service_id';

    /** the column name for the RECEVOIR_MAIL field */
    const RECEVOIR_MAIL = 'Agent.RECEVOIR_MAIL';

    /** the column name for the elu field */
    const ELU = 'Agent.elu';

    /** the column name for the nom_fonction field */
    const NOM_FONCTION = 'Agent.nom_fonction';

    /** the column name for the num_tel field */
    const NUM_TEL = 'Agent.num_tel';

    /** the column name for the num_fax field */
    const NUM_FAX = 'Agent.num_fax';

    /** the column name for the type_comm field */
    const TYPE_COMM = 'Agent.type_comm';

    /** the column name for the adr_postale field */
    const ADR_POSTALE = 'Agent.adr_postale';

    /** the column name for the civilite field */
    const CIVILITE = 'Agent.civilite';

    /** the column name for the alerte_reponse_electronique field */
    const ALERTE_REPONSE_ELECTRONIQUE = 'Agent.alerte_reponse_electronique';

    /** the column name for the alerte_reception_mainlevee field */
    const ALERTE_RECEPTION_MAINLEVEE = 'Agent.alerte_reception_mainlevee';

    /** the column name for the alerte_cloture_consultation field */
    const ALERTE_CLOTURE_CONSULTATION = 'Agent.alerte_cloture_consultation';

    /** the column name for the alerte_reception_message field */
    const ALERTE_RECEPTION_MESSAGE = 'Agent.alerte_reception_message';

    /** the column name for the alerte_publication_boamp field */
    const ALERTE_PUBLICATION_BOAMP = 'Agent.alerte_publication_boamp';

    /** the column name for the alerte_echec_publication_boamp field */
    const ALERTE_ECHEC_PUBLICATION_BOAMP = 'Agent.alerte_echec_publication_boamp';

    /** the column name for the alerte_creation_modification_agent field */
    const ALERTE_CREATION_MODIFICATION_AGENT = 'Agent.alerte_creation_modification_agent';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Agent.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'Agent.date_modification';

    /** the column name for the id_initial field */
    const ID_INITIAL = 'Agent.id_initial';

    /** the column name for the id_profil_socle_externe field */
    const ID_PROFIL_SOCLE_EXTERNE = 'Agent.id_profil_socle_externe';

    /** the column name for the lieu_execution field */
    const LIEU_EXECUTION = 'Agent.lieu_execution';

    /** the column name for the alerte_question_entreprise field */
    const ALERTE_QUESTION_ENTREPRISE = 'Agent.alerte_question_entreprise';

    /** the column name for the actif field */
    const ACTIF = 'Agent.actif';

    /** the column name for the codes_nuts field */
    const CODES_NUTS = 'Agent.codes_nuts';

    /** the column name for the num_certificat field */
    const NUM_CERTIFICAT = 'Agent.num_certificat';

    /** the column name for the alerte_validation_consultation field */
    const ALERTE_VALIDATION_CONSULTATION = 'Agent.alerte_validation_consultation';

    /** the column name for the alerte_chorus field */
    const ALERTE_CHORUS = 'Agent.alerte_chorus';

    /** the column name for the password field */
    const PASSWORD = 'Agent.password';

    /** the column name for the code_theme field */
    const CODE_THEME = 'Agent.code_theme';

    /** the column name for the tentative_recup_mdp field */
    const TENTATIVE_RECUP_MDP = 'Agent.tentative_recup_mdp';

    /** the column name for the date_tentative_recup_mdp field */
    const DATE_TENTATIVE_RECUP_MDP = 'Agent.date_tentative_recup_mdp';

    /** The enumerated values for the RECEVOIR_MAIL field */
    const RECEVOIR_MAIL_0 = '0';
    const RECEVOIR_MAIL_1 = '1';

    /** The enumerated values for the alerte_reponse_electronique field */
    const ALERTE_REPONSE_ELECTRONIQUE_0 = '0';
    const ALERTE_REPONSE_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the alerte_reception_mainlevee field */
    const ALERTE_RECEPTION_MAINLEVEE_0 = '0';
    const ALERTE_RECEPTION_MAINLEVEE_1 = '1';

    /** The enumerated values for the alerte_cloture_consultation field */
    const ALERTE_CLOTURE_CONSULTATION_0 = '0';
    const ALERTE_CLOTURE_CONSULTATION_1 = '1';

    /** The enumerated values for the alerte_reception_message field */
    const ALERTE_RECEPTION_MESSAGE_0 = '0';
    const ALERTE_RECEPTION_MESSAGE_1 = '1';

    /** The enumerated values for the alerte_publication_boamp field */
    const ALERTE_PUBLICATION_BOAMP_0 = '0';
    const ALERTE_PUBLICATION_BOAMP_1 = '1';

    /** The enumerated values for the alerte_echec_publication_boamp field */
    const ALERTE_ECHEC_PUBLICATION_BOAMP_0 = '0';
    const ALERTE_ECHEC_PUBLICATION_BOAMP_1 = '1';

    /** The enumerated values for the alerte_creation_modification_agent field */
    const ALERTE_CREATION_MODIFICATION_AGENT_0 = '0';
    const ALERTE_CREATION_MODIFICATION_AGENT_1 = '1';

    /** The enumerated values for the alerte_question_entreprise field */
    const ALERTE_QUESTION_ENTREPRISE_0 = '0';
    const ALERTE_QUESTION_ENTREPRISE_1 = '1';

    /** The enumerated values for the actif field */
    const ACTIF_0 = '0';
    const ACTIF_1 = '1';

    /** The enumerated values for the alerte_validation_consultation field */
    const ALERTE_VALIDATION_CONSULTATION_0 = '0';
    const ALERTE_VALIDATION_CONSULTATION_1 = '1';

    /** The enumerated values for the alerte_chorus field */
    const ALERTE_CHORUS_0 = '0';
    const ALERTE_CHORUS_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAgent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAgent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAgentPeer::$fieldNames[CommonAgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Login', 'Email', 'Mdp', 'Certificat', 'Nom', 'Prenom', 'TentativesMdp', 'Organisme', 'ServiceId', 'RecevoirMail', 'Elu', 'NomFonction', 'NumTel', 'NumFax', 'TypeComm', 'AdrPostale', 'Civilite', 'AlerteReponseElectronique', 'AlerteReceptionMainlevee', 'AlerteClotureConsultation', 'AlerteReceptionMessage', 'AlertePublicationBoamp', 'AlerteEchecPublicationBoamp', 'AlerteCreationModificationAgent', 'DateCreation', 'DateModification', 'IdInitial', 'IdProfilSocleExterne', 'LieuExecution', 'AlerteQuestionEntreprise', 'Actif', 'CodesNuts', 'NumCertificat', 'AlerteValidationConsultation', 'AlerteChorus', 'Password', 'CodeTheme', 'TentativeRecupMdp', 'DateTentativeRecupMdp', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'login', 'email', 'mdp', 'certificat', 'nom', 'prenom', 'tentativesMdp', 'organisme', 'serviceId', 'recevoirMail', 'elu', 'nomFonction', 'numTel', 'numFax', 'typeComm', 'adrPostale', 'civilite', 'alerteReponseElectronique', 'alerteReceptionMainlevee', 'alerteClotureConsultation', 'alerteReceptionMessage', 'alertePublicationBoamp', 'alerteEchecPublicationBoamp', 'alerteCreationModificationAgent', 'dateCreation', 'dateModification', 'idInitial', 'idProfilSocleExterne', 'lieuExecution', 'alerteQuestionEntreprise', 'actif', 'codesNuts', 'numCertificat', 'alerteValidationConsultation', 'alerteChorus', 'password', 'codeTheme', 'tentativeRecupMdp', 'dateTentativeRecupMdp', ),
        BasePeer::TYPE_COLNAME => array (CommonAgentPeer::ID, CommonAgentPeer::LOGIN, CommonAgentPeer::EMAIL, CommonAgentPeer::MDP, CommonAgentPeer::CERTIFICAT, CommonAgentPeer::NOM, CommonAgentPeer::PRENOM, CommonAgentPeer::TENTATIVES_MDP, CommonAgentPeer::ORGANISME, CommonAgentPeer::SERVICE_ID, CommonAgentPeer::RECEVOIR_MAIL, CommonAgentPeer::ELU, CommonAgentPeer::NOM_FONCTION, CommonAgentPeer::NUM_TEL, CommonAgentPeer::NUM_FAX, CommonAgentPeer::TYPE_COMM, CommonAgentPeer::ADR_POSTALE, CommonAgentPeer::CIVILITE, CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE, CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE, CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION, CommonAgentPeer::ALERTE_RECEPTION_MESSAGE, CommonAgentPeer::ALERTE_PUBLICATION_BOAMP, CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP, CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT, CommonAgentPeer::DATE_CREATION, CommonAgentPeer::DATE_MODIFICATION, CommonAgentPeer::ID_INITIAL, CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, CommonAgentPeer::LIEU_EXECUTION, CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE, CommonAgentPeer::ACTIF, CommonAgentPeer::CODES_NUTS, CommonAgentPeer::NUM_CERTIFICAT, CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION, CommonAgentPeer::ALERTE_CHORUS, CommonAgentPeer::PASSWORD, CommonAgentPeer::CODE_THEME, CommonAgentPeer::TENTATIVE_RECUP_MDP, CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LOGIN', 'EMAIL', 'MDP', 'CERTIFICAT', 'NOM', 'PRENOM', 'TENTATIVES_MDP', 'ORGANISME', 'SERVICE_ID', 'RECEVOIR_MAIL', 'ELU', 'NOM_FONCTION', 'NUM_TEL', 'NUM_FAX', 'TYPE_COMM', 'ADR_POSTALE', 'CIVILITE', 'ALERTE_REPONSE_ELECTRONIQUE', 'ALERTE_RECEPTION_MAINLEVEE', 'ALERTE_CLOTURE_CONSULTATION', 'ALERTE_RECEPTION_MESSAGE', 'ALERTE_PUBLICATION_BOAMP', 'ALERTE_ECHEC_PUBLICATION_BOAMP', 'ALERTE_CREATION_MODIFICATION_AGENT', 'DATE_CREATION', 'DATE_MODIFICATION', 'ID_INITIAL', 'ID_PROFIL_SOCLE_EXTERNE', 'LIEU_EXECUTION', 'ALERTE_QUESTION_ENTREPRISE', 'ACTIF', 'CODES_NUTS', 'NUM_CERTIFICAT', 'ALERTE_VALIDATION_CONSULTATION', 'ALERTE_CHORUS', 'PASSWORD', 'CODE_THEME', 'TENTATIVE_RECUP_MDP', 'DATE_TENTATIVE_RECUP_MDP', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'login', 'email', 'mdp', 'certificat', 'nom', 'prenom', 'tentatives_mdp', 'organisme', 'service_id', 'RECEVOIR_MAIL', 'elu', 'nom_fonction', 'num_tel', 'num_fax', 'type_comm', 'adr_postale', 'civilite', 'alerte_reponse_electronique', 'alerte_reception_mainlevee', 'alerte_cloture_consultation', 'alerte_reception_message', 'alerte_publication_boamp', 'alerte_echec_publication_boamp', 'alerte_creation_modification_agent', 'date_creation', 'date_modification', 'id_initial', 'id_profil_socle_externe', 'lieu_execution', 'alerte_question_entreprise', 'actif', 'codes_nuts', 'num_certificat', 'alerte_validation_consultation', 'alerte_chorus', 'password', 'code_theme', 'tentative_recup_mdp', 'date_tentative_recup_mdp', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Login' => 1, 'Email' => 2, 'Mdp' => 3, 'Certificat' => 4, 'Nom' => 5, 'Prenom' => 6, 'TentativesMdp' => 7, 'Organisme' => 8, 'ServiceId' => 9, 'RecevoirMail' => 10, 'Elu' => 11, 'NomFonction' => 12, 'NumTel' => 13, 'NumFax' => 14, 'TypeComm' => 15, 'AdrPostale' => 16, 'Civilite' => 17, 'AlerteReponseElectronique' => 18, 'AlerteReceptionMainlevee' => 19, 'AlerteClotureConsultation' => 20, 'AlerteReceptionMessage' => 21, 'AlertePublicationBoamp' => 22, 'AlerteEchecPublicationBoamp' => 23, 'AlerteCreationModificationAgent' => 24, 'DateCreation' => 25, 'DateModification' => 26, 'IdInitial' => 27, 'IdProfilSocleExterne' => 28, 'LieuExecution' => 29, 'AlerteQuestionEntreprise' => 30, 'Actif' => 31, 'CodesNuts' => 32, 'NumCertificat' => 33, 'AlerteValidationConsultation' => 34, 'AlerteChorus' => 35, 'Password' => 36, 'CodeTheme' => 37, 'TentativeRecupMdp' => 38, 'DateTentativeRecupMdp' => 39, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'login' => 1, 'email' => 2, 'mdp' => 3, 'certificat' => 4, 'nom' => 5, 'prenom' => 6, 'tentativesMdp' => 7, 'organisme' => 8, 'serviceId' => 9, 'recevoirMail' => 10, 'elu' => 11, 'nomFonction' => 12, 'numTel' => 13, 'numFax' => 14, 'typeComm' => 15, 'adrPostale' => 16, 'civilite' => 17, 'alerteReponseElectronique' => 18, 'alerteReceptionMainlevee' => 19, 'alerteClotureConsultation' => 20, 'alerteReceptionMessage' => 21, 'alertePublicationBoamp' => 22, 'alerteEchecPublicationBoamp' => 23, 'alerteCreationModificationAgent' => 24, 'dateCreation' => 25, 'dateModification' => 26, 'idInitial' => 27, 'idProfilSocleExterne' => 28, 'lieuExecution' => 29, 'alerteQuestionEntreprise' => 30, 'actif' => 31, 'codesNuts' => 32, 'numCertificat' => 33, 'alerteValidationConsultation' => 34, 'alerteChorus' => 35, 'password' => 36, 'codeTheme' => 37, 'tentativeRecupMdp' => 38, 'dateTentativeRecupMdp' => 39, ),
        BasePeer::TYPE_COLNAME => array (CommonAgentPeer::ID => 0, CommonAgentPeer::LOGIN => 1, CommonAgentPeer::EMAIL => 2, CommonAgentPeer::MDP => 3, CommonAgentPeer::CERTIFICAT => 4, CommonAgentPeer::NOM => 5, CommonAgentPeer::PRENOM => 6, CommonAgentPeer::TENTATIVES_MDP => 7, CommonAgentPeer::ORGANISME => 8, CommonAgentPeer::SERVICE_ID => 9, CommonAgentPeer::RECEVOIR_MAIL => 10, CommonAgentPeer::ELU => 11, CommonAgentPeer::NOM_FONCTION => 12, CommonAgentPeer::NUM_TEL => 13, CommonAgentPeer::NUM_FAX => 14, CommonAgentPeer::TYPE_COMM => 15, CommonAgentPeer::ADR_POSTALE => 16, CommonAgentPeer::CIVILITE => 17, CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE => 18, CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE => 19, CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION => 20, CommonAgentPeer::ALERTE_RECEPTION_MESSAGE => 21, CommonAgentPeer::ALERTE_PUBLICATION_BOAMP => 22, CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP => 23, CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT => 24, CommonAgentPeer::DATE_CREATION => 25, CommonAgentPeer::DATE_MODIFICATION => 26, CommonAgentPeer::ID_INITIAL => 27, CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE => 28, CommonAgentPeer::LIEU_EXECUTION => 29, CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE => 30, CommonAgentPeer::ACTIF => 31, CommonAgentPeer::CODES_NUTS => 32, CommonAgentPeer::NUM_CERTIFICAT => 33, CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION => 34, CommonAgentPeer::ALERTE_CHORUS => 35, CommonAgentPeer::PASSWORD => 36, CommonAgentPeer::CODE_THEME => 37, CommonAgentPeer::TENTATIVE_RECUP_MDP => 38, CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP => 39, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LOGIN' => 1, 'EMAIL' => 2, 'MDP' => 3, 'CERTIFICAT' => 4, 'NOM' => 5, 'PRENOM' => 6, 'TENTATIVES_MDP' => 7, 'ORGANISME' => 8, 'SERVICE_ID' => 9, 'RECEVOIR_MAIL' => 10, 'ELU' => 11, 'NOM_FONCTION' => 12, 'NUM_TEL' => 13, 'NUM_FAX' => 14, 'TYPE_COMM' => 15, 'ADR_POSTALE' => 16, 'CIVILITE' => 17, 'ALERTE_REPONSE_ELECTRONIQUE' => 18, 'ALERTE_RECEPTION_MAINLEVEE' => 19, 'ALERTE_CLOTURE_CONSULTATION' => 20, 'ALERTE_RECEPTION_MESSAGE' => 21, 'ALERTE_PUBLICATION_BOAMP' => 22, 'ALERTE_ECHEC_PUBLICATION_BOAMP' => 23, 'ALERTE_CREATION_MODIFICATION_AGENT' => 24, 'DATE_CREATION' => 25, 'DATE_MODIFICATION' => 26, 'ID_INITIAL' => 27, 'ID_PROFIL_SOCLE_EXTERNE' => 28, 'LIEU_EXECUTION' => 29, 'ALERTE_QUESTION_ENTREPRISE' => 30, 'ACTIF' => 31, 'CODES_NUTS' => 32, 'NUM_CERTIFICAT' => 33, 'ALERTE_VALIDATION_CONSULTATION' => 34, 'ALERTE_CHORUS' => 35, 'PASSWORD' => 36, 'CODE_THEME' => 37, 'TENTATIVE_RECUP_MDP' => 38, 'DATE_TENTATIVE_RECUP_MDP' => 39, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'login' => 1, 'email' => 2, 'mdp' => 3, 'certificat' => 4, 'nom' => 5, 'prenom' => 6, 'tentatives_mdp' => 7, 'organisme' => 8, 'service_id' => 9, 'RECEVOIR_MAIL' => 10, 'elu' => 11, 'nom_fonction' => 12, 'num_tel' => 13, 'num_fax' => 14, 'type_comm' => 15, 'adr_postale' => 16, 'civilite' => 17, 'alerte_reponse_electronique' => 18, 'alerte_reception_mainlevee' => 19, 'alerte_cloture_consultation' => 20, 'alerte_reception_message' => 21, 'alerte_publication_boamp' => 22, 'alerte_echec_publication_boamp' => 23, 'alerte_creation_modification_agent' => 24, 'date_creation' => 25, 'date_modification' => 26, 'id_initial' => 27, 'id_profil_socle_externe' => 28, 'lieu_execution' => 29, 'alerte_question_entreprise' => 30, 'actif' => 31, 'codes_nuts' => 32, 'num_certificat' => 33, 'alerte_validation_consultation' => 34, 'alerte_chorus' => 35, 'password' => 36, 'code_theme' => 37, 'tentative_recup_mdp' => 38, 'date_tentative_recup_mdp' => 39, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAgentPeer::RECEVOIR_MAIL => array(
            CommonAgentPeer::RECEVOIR_MAIL_0,
            CommonAgentPeer::RECEVOIR_MAIL_1,
        ),
        CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE => array(
            CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE_0,
            CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE_1,
        ),
        CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE => array(
            CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE_0,
            CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE_1,
        ),
        CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION => array(
            CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION_0,
            CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION_1,
        ),
        CommonAgentPeer::ALERTE_RECEPTION_MESSAGE => array(
            CommonAgentPeer::ALERTE_RECEPTION_MESSAGE_0,
            CommonAgentPeer::ALERTE_RECEPTION_MESSAGE_1,
        ),
        CommonAgentPeer::ALERTE_PUBLICATION_BOAMP => array(
            CommonAgentPeer::ALERTE_PUBLICATION_BOAMP_0,
            CommonAgentPeer::ALERTE_PUBLICATION_BOAMP_1,
        ),
        CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP => array(
            CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP_0,
            CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP_1,
        ),
        CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT => array(
            CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT_0,
            CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT_1,
        ),
        CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE => array(
            CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE_0,
            CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE_1,
        ),
        CommonAgentPeer::ACTIF => array(
            CommonAgentPeer::ACTIF_0,
            CommonAgentPeer::ACTIF_1,
        ),
        CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION => array(
            CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION_0,
            CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION_1,
        ),
        CommonAgentPeer::ALERTE_CHORUS => array(
            CommonAgentPeer::ALERTE_CHORUS_0,
            CommonAgentPeer::ALERTE_CHORUS_1,
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
        $toNames = CommonAgentPeer::getFieldNames($toType);
        $key = isset(CommonAgentPeer::$fieldKeys[$fromType][$name]) ? CommonAgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAgentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAgentPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAgentPeer::$enumValueSets;
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
        $valueSets = CommonAgentPeer::getValueSets();

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
        $values = CommonAgentPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAgentPeer::ID);
            $criteria->addSelectColumn(CommonAgentPeer::LOGIN);
            $criteria->addSelectColumn(CommonAgentPeer::EMAIL);
            $criteria->addSelectColumn(CommonAgentPeer::MDP);
            $criteria->addSelectColumn(CommonAgentPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonAgentPeer::NOM);
            $criteria->addSelectColumn(CommonAgentPeer::PRENOM);
            $criteria->addSelectColumn(CommonAgentPeer::TENTATIVES_MDP);
            $criteria->addSelectColumn(CommonAgentPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAgentPeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonAgentPeer::RECEVOIR_MAIL);
            $criteria->addSelectColumn(CommonAgentPeer::ELU);
            $criteria->addSelectColumn(CommonAgentPeer::NOM_FONCTION);
            $criteria->addSelectColumn(CommonAgentPeer::NUM_TEL);
            $criteria->addSelectColumn(CommonAgentPeer::NUM_FAX);
            $criteria->addSelectColumn(CommonAgentPeer::TYPE_COMM);
            $criteria->addSelectColumn(CommonAgentPeer::ADR_POSTALE);
            $criteria->addSelectColumn(CommonAgentPeer::CIVILITE);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT);
            $criteria->addSelectColumn(CommonAgentPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAgentPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonAgentPeer::ID_INITIAL);
            $criteria->addSelectColumn(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE);
            $criteria->addSelectColumn(CommonAgentPeer::LIEU_EXECUTION);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE);
            $criteria->addSelectColumn(CommonAgentPeer::ACTIF);
            $criteria->addSelectColumn(CommonAgentPeer::CODES_NUTS);
            $criteria->addSelectColumn(CommonAgentPeer::NUM_CERTIFICAT);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION);
            $criteria->addSelectColumn(CommonAgentPeer::ALERTE_CHORUS);
            $criteria->addSelectColumn(CommonAgentPeer::PASSWORD);
            $criteria->addSelectColumn(CommonAgentPeer::CODE_THEME);
            $criteria->addSelectColumn(CommonAgentPeer::TENTATIVE_RECUP_MDP);
            $criteria->addSelectColumn(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.login');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.mdp');
            $criteria->addSelectColumn($alias . '.certificat');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.tentatives_mdp');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.RECEVOIR_MAIL');
            $criteria->addSelectColumn($alias . '.elu');
            $criteria->addSelectColumn($alias . '.nom_fonction');
            $criteria->addSelectColumn($alias . '.num_tel');
            $criteria->addSelectColumn($alias . '.num_fax');
            $criteria->addSelectColumn($alias . '.type_comm');
            $criteria->addSelectColumn($alias . '.adr_postale');
            $criteria->addSelectColumn($alias . '.civilite');
            $criteria->addSelectColumn($alias . '.alerte_reponse_electronique');
            $criteria->addSelectColumn($alias . '.alerte_reception_mainlevee');
            $criteria->addSelectColumn($alias . '.alerte_cloture_consultation');
            $criteria->addSelectColumn($alias . '.alerte_reception_message');
            $criteria->addSelectColumn($alias . '.alerte_publication_boamp');
            $criteria->addSelectColumn($alias . '.alerte_echec_publication_boamp');
            $criteria->addSelectColumn($alias . '.alerte_creation_modification_agent');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.id_initial');
            $criteria->addSelectColumn($alias . '.id_profil_socle_externe');
            $criteria->addSelectColumn($alias . '.lieu_execution');
            $criteria->addSelectColumn($alias . '.alerte_question_entreprise');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.codes_nuts');
            $criteria->addSelectColumn($alias . '.num_certificat');
            $criteria->addSelectColumn($alias . '.alerte_validation_consultation');
            $criteria->addSelectColumn($alias . '.alerte_chorus');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.code_theme');
            $criteria->addSelectColumn($alias . '.tentative_recup_mdp');
            $criteria->addSelectColumn($alias . '.date_tentative_recup_mdp');
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
        $criteria->setPrimaryTableName(CommonAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAgent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAgentPeer::doSelect($critcopy, $con);
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
        return CommonAgentPeer::populateObjects(CommonAgentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAgentPeer::DATABASE_NAME);

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
     * @param      CommonAgent $obj A CommonAgent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonAgentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAgent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAgent) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAgent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAgentPeer::$instances[$key])) {
                return CommonAgentPeer::$instances[$key];
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
        foreach (CommonAgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Agent
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
        $cls = CommonAgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAgentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAgent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAgentPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAgentPeer::DATABASE_NAME)->getTable(CommonAgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAgentTableMap());
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
        return CommonAgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAgent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAgent object
        }

        if ($criteria->containsKey(CommonAgentPeer::ID) && $criteria->keyContainsValue(CommonAgentPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAgentPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAgentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAgent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAgentPeer::ID);
            $value = $criteria->remove(CommonAgentPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAgentPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAgentPeer::TABLE_NAME);
            }

        } else { // $values is CommonAgent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Agent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAgentPeer::TABLE_NAME, $con, CommonAgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAgentPeer::clearInstancePool();
            CommonAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAgent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAgent object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAgent) { // it's a model object
            // invalidate the cache for this single object
            CommonAgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);
            $criteria->add(CommonAgentPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonAgentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAgent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAgent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAgentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAgentPeer::DATABASE_NAME, CommonAgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonAgent
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonAgentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);
        $criteria->add(CommonAgentPeer::ID, $pk);

        $v = CommonAgentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonAgent[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);
            $criteria->add(CommonAgentPeer::ID, $pks, Criteria::IN);
            $objs = CommonAgentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAgentPeer::buildTableMap();

