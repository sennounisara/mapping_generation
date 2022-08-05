<?php


/**
 * Base static class for performing query and update operations on the 'CategorieLot' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonCategorieLotPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'CategorieLot';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCategorieLot';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCategorieLotTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 64;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 64;

    /** the column name for the organisme field */
    const ORGANISME = 'CategorieLot.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'CategorieLot.consultation_ref';

    /** the column name for the lot field */
    const LOT = 'CategorieLot.lot';

    /** the column name for the description field */
    const DESCRIPTION = 'CategorieLot.description';

    /** the column name for the id_tr_description field */
    const ID_TR_DESCRIPTION = 'CategorieLot.id_tr_description';

    /** the column name for the categorie field */
    const CATEGORIE = 'CategorieLot.categorie';

    /** the column name for the description_detail field */
    const DESCRIPTION_DETAIL = 'CategorieLot.description_detail';

    /** the column name for the id_tr_description_detail field */
    const ID_TR_DESCRIPTION_DETAIL = 'CategorieLot.id_tr_description_detail';

    /** the column name for the code_cpv_1 field */
    const CODE_CPV_1 = 'CategorieLot.code_cpv_1';

    /** the column name for the code_cpv_2 field */
    const CODE_CPV_2 = 'CategorieLot.code_cpv_2';

    /** the column name for the description_fr field */
    const DESCRIPTION_FR = 'CategorieLot.description_fr';

    /** the column name for the description_en field */
    const DESCRIPTION_EN = 'CategorieLot.description_en';

    /** the column name for the description_es field */
    const DESCRIPTION_ES = 'CategorieLot.description_es';

    /** the column name for the description_su field */
    const DESCRIPTION_SU = 'CategorieLot.description_su';

    /** the column name for the description_du field */
    const DESCRIPTION_DU = 'CategorieLot.description_du';

    /** the column name for the description_cz field */
    const DESCRIPTION_CZ = 'CategorieLot.description_cz';

    /** the column name for the description_ar field */
    const DESCRIPTION_AR = 'CategorieLot.description_ar';

    /** the column name for the description_detail_fr field */
    const DESCRIPTION_DETAIL_FR = 'CategorieLot.description_detail_fr';

    /** the column name for the description_detail_en field */
    const DESCRIPTION_DETAIL_EN = 'CategorieLot.description_detail_en';

    /** the column name for the description_detail_es field */
    const DESCRIPTION_DETAIL_ES = 'CategorieLot.description_detail_es';

    /** the column name for the description_detail_su field */
    const DESCRIPTION_DETAIL_SU = 'CategorieLot.description_detail_su';

    /** the column name for the description_detail_du field */
    const DESCRIPTION_DETAIL_DU = 'CategorieLot.description_detail_du';

    /** the column name for the description_detail_cz field */
    const DESCRIPTION_DETAIL_CZ = 'CategorieLot.description_detail_cz';

    /** the column name for the description_detail_ar field */
    const DESCRIPTION_DETAIL_AR = 'CategorieLot.description_detail_ar';

    /** the column name for the id_lot_externe field */
    const ID_LOT_EXTERNE = 'CategorieLot.id_lot_externe';

    /** the column name for the caution_provisoire field */
    const CAUTION_PROVISOIRE = 'CategorieLot.caution_provisoire';

    /** the column name for the qualification field */
    const QUALIFICATION = 'CategorieLot.qualification';

    /** the column name for the agrements field */
    const AGREMENTS = 'CategorieLot.agrements';

    /** the column name for the add_echantillion field */
    const ADD_ECHANTILLION = 'CategorieLot.add_echantillion';

    /** the column name for the date_limite_echantillion field */
    const DATE_LIMITE_ECHANTILLION = 'CategorieLot.date_limite_echantillion';

    /** the column name for the add_reunion field */
    const ADD_REUNION = 'CategorieLot.add_reunion';

    /** the column name for the date_reunion field */
    const DATE_REUNION = 'CategorieLot.date_reunion';

    /** the column name for the variantes field */
    const VARIANTES = 'CategorieLot.variantes';

    /** the column name for the echantillon field */
    const ECHANTILLON = 'CategorieLot.echantillon';

    /** the column name for the reunion field */
    const REUNION = 'CategorieLot.reunion';

    /** the column name for the visites_lieux field */
    const VISITES_LIEUX = 'CategorieLot.visites_lieux';

    /** the column name for the add_echantillion_fr field */
    const ADD_ECHANTILLION_FR = 'CategorieLot.add_echantillion_fr';

    /** the column name for the add_echantillion_en field */
    const ADD_ECHANTILLION_EN = 'CategorieLot.add_echantillion_en';

    /** the column name for the add_echantillion_es field */
    const ADD_ECHANTILLION_ES = 'CategorieLot.add_echantillion_es';

    /** the column name for the add_echantillion_su field */
    const ADD_ECHANTILLION_SU = 'CategorieLot.add_echantillion_su';

    /** the column name for the add_echantillion_du field */
    const ADD_ECHANTILLION_DU = 'CategorieLot.add_echantillion_du';

    /** the column name for the add_echantillion_cz field */
    const ADD_ECHANTILLION_CZ = 'CategorieLot.add_echantillion_cz';

    /** the column name for the add_echantillion_ar field */
    const ADD_ECHANTILLION_AR = 'CategorieLot.add_echantillion_ar';

    /** the column name for the add_reunion_fr field */
    const ADD_REUNION_FR = 'CategorieLot.add_reunion_fr';

    /** the column name for the add_reunion_en field */
    const ADD_REUNION_EN = 'CategorieLot.add_reunion_en';

    /** the column name for the add_reunion_es field */
    const ADD_REUNION_ES = 'CategorieLot.add_reunion_es';

    /** the column name for the add_reunion_su field */
    const ADD_REUNION_SU = 'CategorieLot.add_reunion_su';

    /** the column name for the add_reunion_du field */
    const ADD_REUNION_DU = 'CategorieLot.add_reunion_du';

    /** the column name for the add_reunion_cz field */
    const ADD_REUNION_CZ = 'CategorieLot.add_reunion_cz';

    /** the column name for the add_reunion_ar field */
    const ADD_REUNION_AR = 'CategorieLot.add_reunion_ar';

    /** the column name for the description_detail_it field */
    const DESCRIPTION_DETAIL_IT = 'CategorieLot.description_detail_it';

    /** the column name for the description_it field */
    const DESCRIPTION_IT = 'CategorieLot.description_it';

    /** the column name for the add_echantillion_it field */
    const ADD_ECHANTILLION_IT = 'CategorieLot.add_echantillion_it';

    /** the column name for the add_reunion_it field */
    const ADD_REUNION_IT = 'CategorieLot.add_reunion_it';

    /** the column name for the clause_sociale field */
    const CLAUSE_SOCIALE = 'CategorieLot.clause_sociale';

    /** the column name for the clause_environnementale field */
    const CLAUSE_ENVIRONNEMENTALE = 'CategorieLot.clause_environnementale';

    /** the column name for the decision field */
    const DECISION = 'CategorieLot.decision';

    /** the column name for the clause_sociale_condition_execution field */
    const CLAUSE_SOCIALE_CONDITION_EXECUTION = 'CategorieLot.clause_sociale_condition_execution';

    /** the column name for the clause_sociale_insertion field */
    const CLAUSE_SOCIALE_INSERTION = 'CategorieLot.clause_sociale_insertion';

    /** the column name for the clause_sociale_ateliers_proteges field */
    const CLAUSE_SOCIALE_ATELIERS_PROTEGES = 'CategorieLot.clause_sociale_ateliers_proteges';

    /** the column name for the clause_env_specs_techniques field */
    const CLAUSE_ENV_SPECS_TECHNIQUES = 'CategorieLot.clause_env_specs_techniques';

    /** the column name for the clause_env_cond_execution field */
    const CLAUSE_ENV_COND_EXECUTION = 'CategorieLot.clause_env_cond_execution';

    /** the column name for the clause_env_criteres_select field */
    const CLAUSE_ENV_CRITERES_SELECT = 'CategorieLot.clause_env_criteres_select';

    /** the column name for the id_donnee_complementaire field */
    const ID_DONNEE_COMPLEMENTAIRE = 'CategorieLot.id_donnee_complementaire';

    /** The enumerated values for the echantillon field */
    const ECHANTILLON_0 = '0';
    const ECHANTILLON_1 = '1';

    /** The enumerated values for the reunion field */
    const REUNION_0 = '0';
    const REUNION_1 = '1';

    /** The enumerated values for the visites_lieux field */
    const VISITES_LIEUX_0 = '0';
    const VISITES_LIEUX_1 = '1';

    /** The enumerated values for the clause_sociale field */
    const CLAUSE_SOCIALE_0 = '0';
    const CLAUSE_SOCIALE_1 = '1';
    const CLAUSE_SOCIALE_2 = '2';

    /** The enumerated values for the clause_environnementale field */
    const CLAUSE_ENVIRONNEMENTALE_0 = '0';
    const CLAUSE_ENVIRONNEMENTALE_1 = '1';
    const CLAUSE_ENVIRONNEMENTALE_2 = '2';

    /** The enumerated values for the decision field */
    const DECISION_0 = '0';
    const DECISION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCategorieLot objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCategorieLot[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCategorieLotPeer::$fieldNames[CommonCategorieLotPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme', 'ConsultationRef', 'Lot', 'Description', 'IdTrDescription', 'Categorie', 'DescriptionDetail', 'IdTrDescriptionDetail', 'CodeCpv1', 'CodeCpv2', 'DescriptionFr', 'DescriptionEn', 'DescriptionEs', 'DescriptionSu', 'DescriptionDu', 'DescriptionCz', 'DescriptionAr', 'DescriptionDetailFr', 'DescriptionDetailEn', 'DescriptionDetailEs', 'DescriptionDetailSu', 'DescriptionDetailDu', 'DescriptionDetailCz', 'DescriptionDetailAr', 'IdLotExterne', 'CautionProvisoire', 'Qualification', 'Agrements', 'AddEchantillion', 'DateLimiteEchantillion', 'AddReunion', 'DateReunion', 'Variantes', 'Echantillon', 'Reunion', 'VisitesLieux', 'AddEchantillionFr', 'AddEchantillionEn', 'AddEchantillionEs', 'AddEchantillionSu', 'AddEchantillionDu', 'AddEchantillionCz', 'AddEchantillionAr', 'AddReunionFr', 'AddReunionEn', 'AddReunionEs', 'AddReunionSu', 'AddReunionDu', 'AddReunionCz', 'AddReunionAr', 'DescriptionDetailIt', 'DescriptionIt', 'AddEchantillionIt', 'AddReunionIt', 'ClauseSociale', 'ClauseEnvironnementale', 'Decision', 'ClauseSocialeConditionExecution', 'ClauseSocialeInsertion', 'ClauseSocialeAteliersProteges', 'ClauseEnvSpecsTechniques', 'ClauseEnvCondExecution', 'ClauseEnvCriteresSelect', 'IdDonneeComplementaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme', 'consultationRef', 'lot', 'description', 'idTrDescription', 'categorie', 'descriptionDetail', 'idTrDescriptionDetail', 'codeCpv1', 'codeCpv2', 'descriptionFr', 'descriptionEn', 'descriptionEs', 'descriptionSu', 'descriptionDu', 'descriptionCz', 'descriptionAr', 'descriptionDetailFr', 'descriptionDetailEn', 'descriptionDetailEs', 'descriptionDetailSu', 'descriptionDetailDu', 'descriptionDetailCz', 'descriptionDetailAr', 'idLotExterne', 'cautionProvisoire', 'qualification', 'agrements', 'addEchantillion', 'dateLimiteEchantillion', 'addReunion', 'dateReunion', 'variantes', 'echantillon', 'reunion', 'visitesLieux', 'addEchantillionFr', 'addEchantillionEn', 'addEchantillionEs', 'addEchantillionSu', 'addEchantillionDu', 'addEchantillionCz', 'addEchantillionAr', 'addReunionFr', 'addReunionEn', 'addReunionEs', 'addReunionSu', 'addReunionDu', 'addReunionCz', 'addReunionAr', 'descriptionDetailIt', 'descriptionIt', 'addEchantillionIt', 'addReunionIt', 'clauseSociale', 'clauseEnvironnementale', 'decision', 'clauseSocialeConditionExecution', 'clauseSocialeInsertion', 'clauseSocialeAteliersProteges', 'clauseEnvSpecsTechniques', 'clauseEnvCondExecution', 'clauseEnvCriteresSelect', 'idDonneeComplementaire', ),
        BasePeer::TYPE_COLNAME => array (CommonCategorieLotPeer::ORGANISME, CommonCategorieLotPeer::CONSULTATION_REF, CommonCategorieLotPeer::LOT, CommonCategorieLotPeer::DESCRIPTION, CommonCategorieLotPeer::ID_TR_DESCRIPTION, CommonCategorieLotPeer::CATEGORIE, CommonCategorieLotPeer::DESCRIPTION_DETAIL, CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL, CommonCategorieLotPeer::CODE_CPV_1, CommonCategorieLotPeer::CODE_CPV_2, CommonCategorieLotPeer::DESCRIPTION_FR, CommonCategorieLotPeer::DESCRIPTION_EN, CommonCategorieLotPeer::DESCRIPTION_ES, CommonCategorieLotPeer::DESCRIPTION_SU, CommonCategorieLotPeer::DESCRIPTION_DU, CommonCategorieLotPeer::DESCRIPTION_CZ, CommonCategorieLotPeer::DESCRIPTION_AR, CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR, CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN, CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES, CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU, CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU, CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ, CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR, CommonCategorieLotPeer::ID_LOT_EXTERNE, CommonCategorieLotPeer::CAUTION_PROVISOIRE, CommonCategorieLotPeer::QUALIFICATION, CommonCategorieLotPeer::AGREMENTS, CommonCategorieLotPeer::ADD_ECHANTILLION, CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION, CommonCategorieLotPeer::ADD_REUNION, CommonCategorieLotPeer::DATE_REUNION, CommonCategorieLotPeer::VARIANTES, CommonCategorieLotPeer::ECHANTILLON, CommonCategorieLotPeer::REUNION, CommonCategorieLotPeer::VISITES_LIEUX, CommonCategorieLotPeer::ADD_ECHANTILLION_FR, CommonCategorieLotPeer::ADD_ECHANTILLION_EN, CommonCategorieLotPeer::ADD_ECHANTILLION_ES, CommonCategorieLotPeer::ADD_ECHANTILLION_SU, CommonCategorieLotPeer::ADD_ECHANTILLION_DU, CommonCategorieLotPeer::ADD_ECHANTILLION_CZ, CommonCategorieLotPeer::ADD_ECHANTILLION_AR, CommonCategorieLotPeer::ADD_REUNION_FR, CommonCategorieLotPeer::ADD_REUNION_EN, CommonCategorieLotPeer::ADD_REUNION_ES, CommonCategorieLotPeer::ADD_REUNION_SU, CommonCategorieLotPeer::ADD_REUNION_DU, CommonCategorieLotPeer::ADD_REUNION_CZ, CommonCategorieLotPeer::ADD_REUNION_AR, CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT, CommonCategorieLotPeer::DESCRIPTION_IT, CommonCategorieLotPeer::ADD_ECHANTILLION_IT, CommonCategorieLotPeer::ADD_REUNION_IT, CommonCategorieLotPeer::CLAUSE_SOCIALE, CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE, CommonCategorieLotPeer::DECISION, CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION, CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION, CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES, CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES, CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION, CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT, CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME', 'CONSULTATION_REF', 'LOT', 'DESCRIPTION', 'ID_TR_DESCRIPTION', 'CATEGORIE', 'DESCRIPTION_DETAIL', 'ID_TR_DESCRIPTION_DETAIL', 'CODE_CPV_1', 'CODE_CPV_2', 'DESCRIPTION_FR', 'DESCRIPTION_EN', 'DESCRIPTION_ES', 'DESCRIPTION_SU', 'DESCRIPTION_DU', 'DESCRIPTION_CZ', 'DESCRIPTION_AR', 'DESCRIPTION_DETAIL_FR', 'DESCRIPTION_DETAIL_EN', 'DESCRIPTION_DETAIL_ES', 'DESCRIPTION_DETAIL_SU', 'DESCRIPTION_DETAIL_DU', 'DESCRIPTION_DETAIL_CZ', 'DESCRIPTION_DETAIL_AR', 'ID_LOT_EXTERNE', 'CAUTION_PROVISOIRE', 'QUALIFICATION', 'AGREMENTS', 'ADD_ECHANTILLION', 'DATE_LIMITE_ECHANTILLION', 'ADD_REUNION', 'DATE_REUNION', 'VARIANTES', 'ECHANTILLON', 'REUNION', 'VISITES_LIEUX', 'ADD_ECHANTILLION_FR', 'ADD_ECHANTILLION_EN', 'ADD_ECHANTILLION_ES', 'ADD_ECHANTILLION_SU', 'ADD_ECHANTILLION_DU', 'ADD_ECHANTILLION_CZ', 'ADD_ECHANTILLION_AR', 'ADD_REUNION_FR', 'ADD_REUNION_EN', 'ADD_REUNION_ES', 'ADD_REUNION_SU', 'ADD_REUNION_DU', 'ADD_REUNION_CZ', 'ADD_REUNION_AR', 'DESCRIPTION_DETAIL_IT', 'DESCRIPTION_IT', 'ADD_ECHANTILLION_IT', 'ADD_REUNION_IT', 'CLAUSE_SOCIALE', 'CLAUSE_ENVIRONNEMENTALE', 'DECISION', 'CLAUSE_SOCIALE_CONDITION_EXECUTION', 'CLAUSE_SOCIALE_INSERTION', 'CLAUSE_SOCIALE_ATELIERS_PROTEGES', 'CLAUSE_ENV_SPECS_TECHNIQUES', 'CLAUSE_ENV_COND_EXECUTION', 'CLAUSE_ENV_CRITERES_SELECT', 'ID_DONNEE_COMPLEMENTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('organisme', 'consultation_ref', 'lot', 'description', 'id_tr_description', 'categorie', 'description_detail', 'id_tr_description_detail', 'code_cpv_1', 'code_cpv_2', 'description_fr', 'description_en', 'description_es', 'description_su', 'description_du', 'description_cz', 'description_ar', 'description_detail_fr', 'description_detail_en', 'description_detail_es', 'description_detail_su', 'description_detail_du', 'description_detail_cz', 'description_detail_ar', 'id_lot_externe', 'caution_provisoire', 'qualification', 'agrements', 'add_echantillion', 'date_limite_echantillion', 'add_reunion', 'date_reunion', 'variantes', 'echantillon', 'reunion', 'visites_lieux', 'add_echantillion_fr', 'add_echantillion_en', 'add_echantillion_es', 'add_echantillion_su', 'add_echantillion_du', 'add_echantillion_cz', 'add_echantillion_ar', 'add_reunion_fr', 'add_reunion_en', 'add_reunion_es', 'add_reunion_su', 'add_reunion_du', 'add_reunion_cz', 'add_reunion_ar', 'description_detail_it', 'description_it', 'add_echantillion_it', 'add_reunion_it', 'clause_sociale', 'clause_environnementale', 'decision', 'clause_sociale_condition_execution', 'clause_sociale_insertion', 'clause_sociale_ateliers_proteges', 'clause_env_specs_techniques', 'clause_env_cond_execution', 'clause_env_criteres_select', 'id_donnee_complementaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCategorieLotPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme' => 0, 'ConsultationRef' => 1, 'Lot' => 2, 'Description' => 3, 'IdTrDescription' => 4, 'Categorie' => 5, 'DescriptionDetail' => 6, 'IdTrDescriptionDetail' => 7, 'CodeCpv1' => 8, 'CodeCpv2' => 9, 'DescriptionFr' => 10, 'DescriptionEn' => 11, 'DescriptionEs' => 12, 'DescriptionSu' => 13, 'DescriptionDu' => 14, 'DescriptionCz' => 15, 'DescriptionAr' => 16, 'DescriptionDetailFr' => 17, 'DescriptionDetailEn' => 18, 'DescriptionDetailEs' => 19, 'DescriptionDetailSu' => 20, 'DescriptionDetailDu' => 21, 'DescriptionDetailCz' => 22, 'DescriptionDetailAr' => 23, 'IdLotExterne' => 24, 'CautionProvisoire' => 25, 'Qualification' => 26, 'Agrements' => 27, 'AddEchantillion' => 28, 'DateLimiteEchantillion' => 29, 'AddReunion' => 30, 'DateReunion' => 31, 'Variantes' => 32, 'Echantillon' => 33, 'Reunion' => 34, 'VisitesLieux' => 35, 'AddEchantillionFr' => 36, 'AddEchantillionEn' => 37, 'AddEchantillionEs' => 38, 'AddEchantillionSu' => 39, 'AddEchantillionDu' => 40, 'AddEchantillionCz' => 41, 'AddEchantillionAr' => 42, 'AddReunionFr' => 43, 'AddReunionEn' => 44, 'AddReunionEs' => 45, 'AddReunionSu' => 46, 'AddReunionDu' => 47, 'AddReunionCz' => 48, 'AddReunionAr' => 49, 'DescriptionDetailIt' => 50, 'DescriptionIt' => 51, 'AddEchantillionIt' => 52, 'AddReunionIt' => 53, 'ClauseSociale' => 54, 'ClauseEnvironnementale' => 55, 'Decision' => 56, 'ClauseSocialeConditionExecution' => 57, 'ClauseSocialeInsertion' => 58, 'ClauseSocialeAteliersProteges' => 59, 'ClauseEnvSpecsTechniques' => 60, 'ClauseEnvCondExecution' => 61, 'ClauseEnvCriteresSelect' => 62, 'IdDonneeComplementaire' => 63, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme' => 0, 'consultationRef' => 1, 'lot' => 2, 'description' => 3, 'idTrDescription' => 4, 'categorie' => 5, 'descriptionDetail' => 6, 'idTrDescriptionDetail' => 7, 'codeCpv1' => 8, 'codeCpv2' => 9, 'descriptionFr' => 10, 'descriptionEn' => 11, 'descriptionEs' => 12, 'descriptionSu' => 13, 'descriptionDu' => 14, 'descriptionCz' => 15, 'descriptionAr' => 16, 'descriptionDetailFr' => 17, 'descriptionDetailEn' => 18, 'descriptionDetailEs' => 19, 'descriptionDetailSu' => 20, 'descriptionDetailDu' => 21, 'descriptionDetailCz' => 22, 'descriptionDetailAr' => 23, 'idLotExterne' => 24, 'cautionProvisoire' => 25, 'qualification' => 26, 'agrements' => 27, 'addEchantillion' => 28, 'dateLimiteEchantillion' => 29, 'addReunion' => 30, 'dateReunion' => 31, 'variantes' => 32, 'echantillon' => 33, 'reunion' => 34, 'visitesLieux' => 35, 'addEchantillionFr' => 36, 'addEchantillionEn' => 37, 'addEchantillionEs' => 38, 'addEchantillionSu' => 39, 'addEchantillionDu' => 40, 'addEchantillionCz' => 41, 'addEchantillionAr' => 42, 'addReunionFr' => 43, 'addReunionEn' => 44, 'addReunionEs' => 45, 'addReunionSu' => 46, 'addReunionDu' => 47, 'addReunionCz' => 48, 'addReunionAr' => 49, 'descriptionDetailIt' => 50, 'descriptionIt' => 51, 'addEchantillionIt' => 52, 'addReunionIt' => 53, 'clauseSociale' => 54, 'clauseEnvironnementale' => 55, 'decision' => 56, 'clauseSocialeConditionExecution' => 57, 'clauseSocialeInsertion' => 58, 'clauseSocialeAteliersProteges' => 59, 'clauseEnvSpecsTechniques' => 60, 'clauseEnvCondExecution' => 61, 'clauseEnvCriteresSelect' => 62, 'idDonneeComplementaire' => 63, ),
        BasePeer::TYPE_COLNAME => array (CommonCategorieLotPeer::ORGANISME => 0, CommonCategorieLotPeer::CONSULTATION_REF => 1, CommonCategorieLotPeer::LOT => 2, CommonCategorieLotPeer::DESCRIPTION => 3, CommonCategorieLotPeer::ID_TR_DESCRIPTION => 4, CommonCategorieLotPeer::CATEGORIE => 5, CommonCategorieLotPeer::DESCRIPTION_DETAIL => 6, CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL => 7, CommonCategorieLotPeer::CODE_CPV_1 => 8, CommonCategorieLotPeer::CODE_CPV_2 => 9, CommonCategorieLotPeer::DESCRIPTION_FR => 10, CommonCategorieLotPeer::DESCRIPTION_EN => 11, CommonCategorieLotPeer::DESCRIPTION_ES => 12, CommonCategorieLotPeer::DESCRIPTION_SU => 13, CommonCategorieLotPeer::DESCRIPTION_DU => 14, CommonCategorieLotPeer::DESCRIPTION_CZ => 15, CommonCategorieLotPeer::DESCRIPTION_AR => 16, CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR => 17, CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN => 18, CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES => 19, CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU => 20, CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU => 21, CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ => 22, CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR => 23, CommonCategorieLotPeer::ID_LOT_EXTERNE => 24, CommonCategorieLotPeer::CAUTION_PROVISOIRE => 25, CommonCategorieLotPeer::QUALIFICATION => 26, CommonCategorieLotPeer::AGREMENTS => 27, CommonCategorieLotPeer::ADD_ECHANTILLION => 28, CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION => 29, CommonCategorieLotPeer::ADD_REUNION => 30, CommonCategorieLotPeer::DATE_REUNION => 31, CommonCategorieLotPeer::VARIANTES => 32, CommonCategorieLotPeer::ECHANTILLON => 33, CommonCategorieLotPeer::REUNION => 34, CommonCategorieLotPeer::VISITES_LIEUX => 35, CommonCategorieLotPeer::ADD_ECHANTILLION_FR => 36, CommonCategorieLotPeer::ADD_ECHANTILLION_EN => 37, CommonCategorieLotPeer::ADD_ECHANTILLION_ES => 38, CommonCategorieLotPeer::ADD_ECHANTILLION_SU => 39, CommonCategorieLotPeer::ADD_ECHANTILLION_DU => 40, CommonCategorieLotPeer::ADD_ECHANTILLION_CZ => 41, CommonCategorieLotPeer::ADD_ECHANTILLION_AR => 42, CommonCategorieLotPeer::ADD_REUNION_FR => 43, CommonCategorieLotPeer::ADD_REUNION_EN => 44, CommonCategorieLotPeer::ADD_REUNION_ES => 45, CommonCategorieLotPeer::ADD_REUNION_SU => 46, CommonCategorieLotPeer::ADD_REUNION_DU => 47, CommonCategorieLotPeer::ADD_REUNION_CZ => 48, CommonCategorieLotPeer::ADD_REUNION_AR => 49, CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT => 50, CommonCategorieLotPeer::DESCRIPTION_IT => 51, CommonCategorieLotPeer::ADD_ECHANTILLION_IT => 52, CommonCategorieLotPeer::ADD_REUNION_IT => 53, CommonCategorieLotPeer::CLAUSE_SOCIALE => 54, CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE => 55, CommonCategorieLotPeer::DECISION => 56, CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION => 57, CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION => 58, CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES => 59, CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES => 60, CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION => 61, CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT => 62, CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE => 63, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME' => 0, 'CONSULTATION_REF' => 1, 'LOT' => 2, 'DESCRIPTION' => 3, 'ID_TR_DESCRIPTION' => 4, 'CATEGORIE' => 5, 'DESCRIPTION_DETAIL' => 6, 'ID_TR_DESCRIPTION_DETAIL' => 7, 'CODE_CPV_1' => 8, 'CODE_CPV_2' => 9, 'DESCRIPTION_FR' => 10, 'DESCRIPTION_EN' => 11, 'DESCRIPTION_ES' => 12, 'DESCRIPTION_SU' => 13, 'DESCRIPTION_DU' => 14, 'DESCRIPTION_CZ' => 15, 'DESCRIPTION_AR' => 16, 'DESCRIPTION_DETAIL_FR' => 17, 'DESCRIPTION_DETAIL_EN' => 18, 'DESCRIPTION_DETAIL_ES' => 19, 'DESCRIPTION_DETAIL_SU' => 20, 'DESCRIPTION_DETAIL_DU' => 21, 'DESCRIPTION_DETAIL_CZ' => 22, 'DESCRIPTION_DETAIL_AR' => 23, 'ID_LOT_EXTERNE' => 24, 'CAUTION_PROVISOIRE' => 25, 'QUALIFICATION' => 26, 'AGREMENTS' => 27, 'ADD_ECHANTILLION' => 28, 'DATE_LIMITE_ECHANTILLION' => 29, 'ADD_REUNION' => 30, 'DATE_REUNION' => 31, 'VARIANTES' => 32, 'ECHANTILLON' => 33, 'REUNION' => 34, 'VISITES_LIEUX' => 35, 'ADD_ECHANTILLION_FR' => 36, 'ADD_ECHANTILLION_EN' => 37, 'ADD_ECHANTILLION_ES' => 38, 'ADD_ECHANTILLION_SU' => 39, 'ADD_ECHANTILLION_DU' => 40, 'ADD_ECHANTILLION_CZ' => 41, 'ADD_ECHANTILLION_AR' => 42, 'ADD_REUNION_FR' => 43, 'ADD_REUNION_EN' => 44, 'ADD_REUNION_ES' => 45, 'ADD_REUNION_SU' => 46, 'ADD_REUNION_DU' => 47, 'ADD_REUNION_CZ' => 48, 'ADD_REUNION_AR' => 49, 'DESCRIPTION_DETAIL_IT' => 50, 'DESCRIPTION_IT' => 51, 'ADD_ECHANTILLION_IT' => 52, 'ADD_REUNION_IT' => 53, 'CLAUSE_SOCIALE' => 54, 'CLAUSE_ENVIRONNEMENTALE' => 55, 'DECISION' => 56, 'CLAUSE_SOCIALE_CONDITION_EXECUTION' => 57, 'CLAUSE_SOCIALE_INSERTION' => 58, 'CLAUSE_SOCIALE_ATELIERS_PROTEGES' => 59, 'CLAUSE_ENV_SPECS_TECHNIQUES' => 60, 'CLAUSE_ENV_COND_EXECUTION' => 61, 'CLAUSE_ENV_CRITERES_SELECT' => 62, 'ID_DONNEE_COMPLEMENTAIRE' => 63, ),
        BasePeer::TYPE_FIELDNAME => array ('organisme' => 0, 'consultation_ref' => 1, 'lot' => 2, 'description' => 3, 'id_tr_description' => 4, 'categorie' => 5, 'description_detail' => 6, 'id_tr_description_detail' => 7, 'code_cpv_1' => 8, 'code_cpv_2' => 9, 'description_fr' => 10, 'description_en' => 11, 'description_es' => 12, 'description_su' => 13, 'description_du' => 14, 'description_cz' => 15, 'description_ar' => 16, 'description_detail_fr' => 17, 'description_detail_en' => 18, 'description_detail_es' => 19, 'description_detail_su' => 20, 'description_detail_du' => 21, 'description_detail_cz' => 22, 'description_detail_ar' => 23, 'id_lot_externe' => 24, 'caution_provisoire' => 25, 'qualification' => 26, 'agrements' => 27, 'add_echantillion' => 28, 'date_limite_echantillion' => 29, 'add_reunion' => 30, 'date_reunion' => 31, 'variantes' => 32, 'echantillon' => 33, 'reunion' => 34, 'visites_lieux' => 35, 'add_echantillion_fr' => 36, 'add_echantillion_en' => 37, 'add_echantillion_es' => 38, 'add_echantillion_su' => 39, 'add_echantillion_du' => 40, 'add_echantillion_cz' => 41, 'add_echantillion_ar' => 42, 'add_reunion_fr' => 43, 'add_reunion_en' => 44, 'add_reunion_es' => 45, 'add_reunion_su' => 46, 'add_reunion_du' => 47, 'add_reunion_cz' => 48, 'add_reunion_ar' => 49, 'description_detail_it' => 50, 'description_it' => 51, 'add_echantillion_it' => 52, 'add_reunion_it' => 53, 'clause_sociale' => 54, 'clause_environnementale' => 55, 'decision' => 56, 'clause_sociale_condition_execution' => 57, 'clause_sociale_insertion' => 58, 'clause_sociale_ateliers_proteges' => 59, 'clause_env_specs_techniques' => 60, 'clause_env_cond_execution' => 61, 'clause_env_criteres_select' => 62, 'id_donnee_complementaire' => 63, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCategorieLotPeer::ECHANTILLON => array(
            CommonCategorieLotPeer::ECHANTILLON_0,
            CommonCategorieLotPeer::ECHANTILLON_1,
        ),
        CommonCategorieLotPeer::REUNION => array(
            CommonCategorieLotPeer::REUNION_0,
            CommonCategorieLotPeer::REUNION_1,
        ),
        CommonCategorieLotPeer::VISITES_LIEUX => array(
            CommonCategorieLotPeer::VISITES_LIEUX_0,
            CommonCategorieLotPeer::VISITES_LIEUX_1,
        ),
        CommonCategorieLotPeer::CLAUSE_SOCIALE => array(
            CommonCategorieLotPeer::CLAUSE_SOCIALE_0,
            CommonCategorieLotPeer::CLAUSE_SOCIALE_1,
            CommonCategorieLotPeer::CLAUSE_SOCIALE_2,
        ),
        CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE => array(
            CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE_0,
            CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE_1,
            CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE_2,
        ),
        CommonCategorieLotPeer::DECISION => array(
            CommonCategorieLotPeer::DECISION_0,
            CommonCategorieLotPeer::DECISION_1,
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
        $toNames = CommonCategorieLotPeer::getFieldNames($toType);
        $key = isset(CommonCategorieLotPeer::$fieldKeys[$fromType][$name]) ? CommonCategorieLotPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCategorieLotPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCategorieLotPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCategorieLotPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCategorieLotPeer::$enumValueSets;
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
        $valueSets = CommonCategorieLotPeer::getValueSets();

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
        $values = CommonCategorieLotPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCategorieLotPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCategorieLotPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCategorieLotPeer::ORGANISME);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonCategorieLotPeer::LOT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ID_TR_DESCRIPTION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CATEGORIE);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CODE_CPV_1);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CODE_CPV_2);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_FR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_EN);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_ES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_SU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_CZ);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_AR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ID_LOT_EXTERNE);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonCategorieLotPeer::QUALIFICATION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::AGREMENTS);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DATE_REUNION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::VARIANTES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ECHANTILLON);
            $criteria->addSelectColumn(CommonCategorieLotPeer::REUNION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::VISITES_LIEUX);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_FR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_EN);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_ES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_SU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_DU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_CZ);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_AR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_FR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_EN);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_ES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_SU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_DU);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_CZ);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_AR);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DESCRIPTION_IT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_ECHANTILLION_IT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ADD_REUNION_IT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_SOCIALE);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE);
            $criteria->addSelectColumn(CommonCategorieLotPeer::DECISION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION);
            $criteria->addSelectColumn(CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT);
            $criteria->addSelectColumn(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.id_tr_description');
            $criteria->addSelectColumn($alias . '.categorie');
            $criteria->addSelectColumn($alias . '.description_detail');
            $criteria->addSelectColumn($alias . '.id_tr_description_detail');
            $criteria->addSelectColumn($alias . '.code_cpv_1');
            $criteria->addSelectColumn($alias . '.code_cpv_2');
            $criteria->addSelectColumn($alias . '.description_fr');
            $criteria->addSelectColumn($alias . '.description_en');
            $criteria->addSelectColumn($alias . '.description_es');
            $criteria->addSelectColumn($alias . '.description_su');
            $criteria->addSelectColumn($alias . '.description_du');
            $criteria->addSelectColumn($alias . '.description_cz');
            $criteria->addSelectColumn($alias . '.description_ar');
            $criteria->addSelectColumn($alias . '.description_detail_fr');
            $criteria->addSelectColumn($alias . '.description_detail_en');
            $criteria->addSelectColumn($alias . '.description_detail_es');
            $criteria->addSelectColumn($alias . '.description_detail_su');
            $criteria->addSelectColumn($alias . '.description_detail_du');
            $criteria->addSelectColumn($alias . '.description_detail_cz');
            $criteria->addSelectColumn($alias . '.description_detail_ar');
            $criteria->addSelectColumn($alias . '.id_lot_externe');
            $criteria->addSelectColumn($alias . '.caution_provisoire');
            $criteria->addSelectColumn($alias . '.qualification');
            $criteria->addSelectColumn($alias . '.agrements');
            $criteria->addSelectColumn($alias . '.add_echantillion');
            $criteria->addSelectColumn($alias . '.date_limite_echantillion');
            $criteria->addSelectColumn($alias . '.add_reunion');
            $criteria->addSelectColumn($alias . '.date_reunion');
            $criteria->addSelectColumn($alias . '.variantes');
            $criteria->addSelectColumn($alias . '.echantillon');
            $criteria->addSelectColumn($alias . '.reunion');
            $criteria->addSelectColumn($alias . '.visites_lieux');
            $criteria->addSelectColumn($alias . '.add_echantillion_fr');
            $criteria->addSelectColumn($alias . '.add_echantillion_en');
            $criteria->addSelectColumn($alias . '.add_echantillion_es');
            $criteria->addSelectColumn($alias . '.add_echantillion_su');
            $criteria->addSelectColumn($alias . '.add_echantillion_du');
            $criteria->addSelectColumn($alias . '.add_echantillion_cz');
            $criteria->addSelectColumn($alias . '.add_echantillion_ar');
            $criteria->addSelectColumn($alias . '.add_reunion_fr');
            $criteria->addSelectColumn($alias . '.add_reunion_en');
            $criteria->addSelectColumn($alias . '.add_reunion_es');
            $criteria->addSelectColumn($alias . '.add_reunion_su');
            $criteria->addSelectColumn($alias . '.add_reunion_du');
            $criteria->addSelectColumn($alias . '.add_reunion_cz');
            $criteria->addSelectColumn($alias . '.add_reunion_ar');
            $criteria->addSelectColumn($alias . '.description_detail_it');
            $criteria->addSelectColumn($alias . '.description_it');
            $criteria->addSelectColumn($alias . '.add_echantillion_it');
            $criteria->addSelectColumn($alias . '.add_reunion_it');
            $criteria->addSelectColumn($alias . '.clause_sociale');
            $criteria->addSelectColumn($alias . '.clause_environnementale');
            $criteria->addSelectColumn($alias . '.decision');
            $criteria->addSelectColumn($alias . '.clause_sociale_condition_execution');
            $criteria->addSelectColumn($alias . '.clause_sociale_insertion');
            $criteria->addSelectColumn($alias . '.clause_sociale_ateliers_proteges');
            $criteria->addSelectColumn($alias . '.clause_env_specs_techniques');
            $criteria->addSelectColumn($alias . '.clause_env_cond_execution');
            $criteria->addSelectColumn($alias . '.clause_env_criteres_select');
            $criteria->addSelectColumn($alias . '.id_donnee_complementaire');
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
        $criteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCategorieLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCategorieLot
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCategorieLotPeer::doSelect($critcopy, $con);
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
        return CommonCategorieLotPeer::populateObjects(CommonCategorieLotPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCategorieLotPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

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
     * @param      CommonCategorieLot $obj A CommonCategorieLot object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getOrganisme(), (string) $obj->getConsultationRef(), (string) $obj->getLot()));
            } // if key === null
            CommonCategorieLotPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCategorieLot object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCategorieLot) {
                $key = serialize(array((string) $value->getOrganisme(), (string) $value->getConsultationRef(), (string) $value->getLot()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCategorieLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCategorieLotPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCategorieLot Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCategorieLotPeer::$instances[$key])) {
                return CommonCategorieLotPeer::$instances[$key];
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
        foreach (CommonCategorieLotPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCategorieLotPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to CategorieLot
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((string) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = CommonCategorieLotPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCategorieLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCategorieLotPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCategorieLotPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCategorieLot object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCategorieLotPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCategorieLotPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCategorieLotPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCategorieLotPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCategorieLotPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCategorieLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonCategorieLotPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonCategorieLotPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonCategorieLot objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCategorieLot objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);
        }

        CommonCategorieLotPeer::addSelectColumns($criteria);
        $startcol = CommonCategorieLotPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonCategorieLotPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonCategorieLotPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCategorieLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCategorieLotPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCategorieLotPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCategorieLotPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCategorieLot) to $obj2 (CommonConsultation)
                $obj2->addCommonCategorieLot($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCategorieLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonCategorieLotPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonCategorieLotPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonCategorieLot objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCategorieLot objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);
        }

        CommonCategorieLotPeer::addSelectColumns($criteria);
        $startcol2 = CommonCategorieLotPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonCategorieLotPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonCategorieLotPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCategorieLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCategorieLotPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCategorieLotPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCategorieLotPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonCategorieLot) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonCategorieLot($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(CommonCategorieLotPeer::DATABASE_NAME)->getTable(CommonCategorieLotPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCategorieLotPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCategorieLotPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCategorieLotTableMap());
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
        return CommonCategorieLotPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCategorieLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCategorieLot object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCategorieLot object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCategorieLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCategorieLot object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCategorieLotPeer::ORGANISME);
            $value = $criteria->remove(CommonCategorieLotPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonCategorieLotPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCategorieLotPeer::CONSULTATION_REF);
            $value = $criteria->remove(CommonCategorieLotPeer::CONSULTATION_REF);
            if ($value) {
                $selectCriteria->add(CommonCategorieLotPeer::CONSULTATION_REF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCategorieLotPeer::LOT);
            $value = $criteria->remove(CommonCategorieLotPeer::LOT);
            if ($value) {
                $selectCriteria->add(CommonCategorieLotPeer::LOT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCategorieLotPeer::TABLE_NAME);
            }

        } else { // $values is CommonCategorieLot object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CategorieLot table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCategorieLotPeer::TABLE_NAME, $con, CommonCategorieLotPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCategorieLotPeer::clearInstancePool();
            CommonCategorieLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCategorieLot or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCategorieLot object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCategorieLotPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCategorieLot) { // it's a model object
            // invalidate the cache for this single object
            CommonCategorieLotPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonCategorieLotPeer::ORGANISME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonCategorieLotPeer::CONSULTATION_REF, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonCategorieLotPeer::LOT, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonCategorieLotPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCategorieLotPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCategorieLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCategorieLot object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCategorieLot $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCategorieLotPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCategorieLotPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCategorieLotPeer::DATABASE_NAME, CommonCategorieLotPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $organisme
     * @param   int $consultation_ref
     * @param   int $lot
     * @param      PropelPDO $con
     * @return   CommonCategorieLot
     */
    public static function retrieveByPK($organisme, $consultation_ref, $lot, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $organisme, (string) $consultation_ref, (string) $lot));
         if (null !== ($obj = CommonCategorieLotPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);
        $criteria->add(CommonCategorieLotPeer::ORGANISME, $organisme);
        $criteria->add(CommonCategorieLotPeer::CONSULTATION_REF, $consultation_ref);
        $criteria->add(CommonCategorieLotPeer::LOT, $lot);
        $v = CommonCategorieLotPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonCategorieLotPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCategorieLotPeer::buildTableMap();

