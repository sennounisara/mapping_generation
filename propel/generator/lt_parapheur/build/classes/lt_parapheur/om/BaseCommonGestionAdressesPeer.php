<?php


/**
 * Base static class for performing query and update operations on the 'gestion_adresses' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGestionAdressesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'gestion_adresses';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonGestionAdresses';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonGestionAdressesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 33;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 33;

    /** the column name for the id field */
    const ID = 'gestion_adresses.id';

    /** the column name for the organisme field */
    const ORGANISME = 'gestion_adresses.organisme';

    /** the column name for the id_service field */
    const ID_SERVICE = 'gestion_adresses.id_service';

    /** the column name for the id_agent field */
    const ID_AGENT = 'gestion_adresses.id_agent';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 'gestion_adresses.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 'gestion_adresses.prenom_agent';

    /** the column name for the adresse_depot_offres field */
    const ADRESSE_DEPOT_OFFRES = 'gestion_adresses.adresse_depot_offres';

    /** the column name for the adresse_retrais_dossiers field */
    const ADRESSE_RETRAIS_DOSSIERS = 'gestion_adresses.adresse_retrais_dossiers';

    /** the column name for the lieu_ouverture_plis field */
    const LIEU_OUVERTURE_PLIS = 'gestion_adresses.lieu_ouverture_plis';

    /** the column name for the adresse_depot_offres_fr field */
    const ADRESSE_DEPOT_OFFRES_FR = 'gestion_adresses.adresse_depot_offres_fr';

    /** the column name for the adresse_retrais_dossiers_fr field */
    const ADRESSE_RETRAIS_DOSSIERS_FR = 'gestion_adresses.adresse_retrais_dossiers_fr';

    /** the column name for the lieu_ouverture_plis_fr field */
    const LIEU_OUVERTURE_PLIS_FR = 'gestion_adresses.lieu_ouverture_plis_fr';

    /** the column name for the adresse_depot_offres_ar field */
    const ADRESSE_DEPOT_OFFRES_AR = 'gestion_adresses.adresse_depot_offres_ar';

    /** the column name for the adresse_retrais_dossiers_ar field */
    const ADRESSE_RETRAIS_DOSSIERS_AR = 'gestion_adresses.adresse_retrais_dossiers_ar';

    /** the column name for the lieu_ouverture_plis_ar field */
    const LIEU_OUVERTURE_PLIS_AR = 'gestion_adresses.lieu_ouverture_plis_ar';

    /** the column name for the adresse_depot_offres_en field */
    const ADRESSE_DEPOT_OFFRES_EN = 'gestion_adresses.adresse_depot_offres_en';

    /** the column name for the adresse_depot_offres_es field */
    const ADRESSE_DEPOT_OFFRES_ES = 'gestion_adresses.adresse_depot_offres_es';

    /** the column name for the adresse_depot_offres_su field */
    const ADRESSE_DEPOT_OFFRES_SU = 'gestion_adresses.adresse_depot_offres_su';

    /** the column name for the adresse_depot_offres_du field */
    const ADRESSE_DEPOT_OFFRES_DU = 'gestion_adresses.adresse_depot_offres_du';

    /** the column name for the adresse_depot_offres_cz field */
    const ADRESSE_DEPOT_OFFRES_CZ = 'gestion_adresses.adresse_depot_offres_cz';

    /** the column name for the adresse_retrais_dossiers_en field */
    const ADRESSE_RETRAIS_DOSSIERS_EN = 'gestion_adresses.adresse_retrais_dossiers_en';

    /** the column name for the adresse_retrais_dossiers_es field */
    const ADRESSE_RETRAIS_DOSSIERS_ES = 'gestion_adresses.adresse_retrais_dossiers_es';

    /** the column name for the adresse_retrais_dossiers_su field */
    const ADRESSE_RETRAIS_DOSSIERS_SU = 'gestion_adresses.adresse_retrais_dossiers_su';

    /** the column name for the adresse_retrais_dossiers_du field */
    const ADRESSE_RETRAIS_DOSSIERS_DU = 'gestion_adresses.adresse_retrais_dossiers_du';

    /** the column name for the adresse_retrais_dossiers_cz field */
    const ADRESSE_RETRAIS_DOSSIERS_CZ = 'gestion_adresses.adresse_retrais_dossiers_cz';

    /** the column name for the lieu_ouverture_plis_en field */
    const LIEU_OUVERTURE_PLIS_EN = 'gestion_adresses.lieu_ouverture_plis_en';

    /** the column name for the lieu_ouverture_plis_es field */
    const LIEU_OUVERTURE_PLIS_ES = 'gestion_adresses.lieu_ouverture_plis_es';

    /** the column name for the lieu_ouverture_plis_su field */
    const LIEU_OUVERTURE_PLIS_SU = 'gestion_adresses.lieu_ouverture_plis_su';

    /** the column name for the lieu_ouverture_plis_du field */
    const LIEU_OUVERTURE_PLIS_DU = 'gestion_adresses.lieu_ouverture_plis_du';

    /** the column name for the lieu_ouverture_plis_cz field */
    const LIEU_OUVERTURE_PLIS_CZ = 'gestion_adresses.lieu_ouverture_plis_cz';

    /** the column name for the adresse_depot_offres_it field */
    const ADRESSE_DEPOT_OFFRES_IT = 'gestion_adresses.adresse_depot_offres_it';

    /** the column name for the adresse_retrais_dossiers_it field */
    const ADRESSE_RETRAIS_DOSSIERS_IT = 'gestion_adresses.adresse_retrais_dossiers_it';

    /** the column name for the lieu_ouverture_plis_it field */
    const LIEU_OUVERTURE_PLIS_IT = 'gestion_adresses.lieu_ouverture_plis_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonGestionAdresses objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonGestionAdresses[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonGestionAdressesPeer::$fieldNames[CommonGestionAdressesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdService', 'IdAgent', 'NomAgent', 'PrenomAgent', 'AdresseDepotOffres', 'AdresseRetraisDossiers', 'LieuOuverturePlis', 'AdresseDepotOffresFr', 'AdresseRetraisDossiersFr', 'LieuOuverturePlisFr', 'AdresseDepotOffresAr', 'AdresseRetraisDossiersAr', 'LieuOuverturePlisAr', 'AdresseDepotOffresEn', 'AdresseDepotOffresEs', 'AdresseDepotOffresSu', 'AdresseDepotOffresDu', 'AdresseDepotOffresCz', 'AdresseRetraisDossiersEn', 'AdresseRetraisDossiersEs', 'AdresseRetraisDossiersSu', 'AdresseRetraisDossiersDu', 'AdresseRetraisDossiersCz', 'LieuOuverturePlisEn', 'LieuOuverturePlisEs', 'LieuOuverturePlisSu', 'LieuOuverturePlisDu', 'LieuOuverturePlisCz', 'AdresseDepotOffresIt', 'AdresseRetraisDossiersIt', 'LieuOuverturePlisIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idService', 'idAgent', 'nomAgent', 'prenomAgent', 'adresseDepotOffres', 'adresseRetraisDossiers', 'lieuOuverturePlis', 'adresseDepotOffresFr', 'adresseRetraisDossiersFr', 'lieuOuverturePlisFr', 'adresseDepotOffresAr', 'adresseRetraisDossiersAr', 'lieuOuverturePlisAr', 'adresseDepotOffresEn', 'adresseDepotOffresEs', 'adresseDepotOffresSu', 'adresseDepotOffresDu', 'adresseDepotOffresCz', 'adresseRetraisDossiersEn', 'adresseRetraisDossiersEs', 'adresseRetraisDossiersSu', 'adresseRetraisDossiersDu', 'adresseRetraisDossiersCz', 'lieuOuverturePlisEn', 'lieuOuverturePlisEs', 'lieuOuverturePlisSu', 'lieuOuverturePlisDu', 'lieuOuverturePlisCz', 'adresseDepotOffresIt', 'adresseRetraisDossiersIt', 'lieuOuverturePlisIt', ),
        BasePeer::TYPE_COLNAME => array (CommonGestionAdressesPeer::ID, CommonGestionAdressesPeer::ORGANISME, CommonGestionAdressesPeer::ID_SERVICE, CommonGestionAdressesPeer::ID_AGENT, CommonGestionAdressesPeer::NOM_AGENT, CommonGestionAdressesPeer::PRENOM_AGENT, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_SERVICE', 'ID_AGENT', 'NOM_AGENT', 'PRENOM_AGENT', 'ADRESSE_DEPOT_OFFRES', 'ADRESSE_RETRAIS_DOSSIERS', 'LIEU_OUVERTURE_PLIS', 'ADRESSE_DEPOT_OFFRES_FR', 'ADRESSE_RETRAIS_DOSSIERS_FR', 'LIEU_OUVERTURE_PLIS_FR', 'ADRESSE_DEPOT_OFFRES_AR', 'ADRESSE_RETRAIS_DOSSIERS_AR', 'LIEU_OUVERTURE_PLIS_AR', 'ADRESSE_DEPOT_OFFRES_EN', 'ADRESSE_DEPOT_OFFRES_ES', 'ADRESSE_DEPOT_OFFRES_SU', 'ADRESSE_DEPOT_OFFRES_DU', 'ADRESSE_DEPOT_OFFRES_CZ', 'ADRESSE_RETRAIS_DOSSIERS_EN', 'ADRESSE_RETRAIS_DOSSIERS_ES', 'ADRESSE_RETRAIS_DOSSIERS_SU', 'ADRESSE_RETRAIS_DOSSIERS_DU', 'ADRESSE_RETRAIS_DOSSIERS_CZ', 'LIEU_OUVERTURE_PLIS_EN', 'LIEU_OUVERTURE_PLIS_ES', 'LIEU_OUVERTURE_PLIS_SU', 'LIEU_OUVERTURE_PLIS_DU', 'LIEU_OUVERTURE_PLIS_CZ', 'ADRESSE_DEPOT_OFFRES_IT', 'ADRESSE_RETRAIS_DOSSIERS_IT', 'LIEU_OUVERTURE_PLIS_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_service', 'id_agent', 'nom_agent', 'prenom_agent', 'adresse_depot_offres', 'adresse_retrais_dossiers', 'lieu_ouverture_plis', 'adresse_depot_offres_fr', 'adresse_retrais_dossiers_fr', 'lieu_ouverture_plis_fr', 'adresse_depot_offres_ar', 'adresse_retrais_dossiers_ar', 'lieu_ouverture_plis_ar', 'adresse_depot_offres_en', 'adresse_depot_offres_es', 'adresse_depot_offres_su', 'adresse_depot_offres_du', 'adresse_depot_offres_cz', 'adresse_retrais_dossiers_en', 'adresse_retrais_dossiers_es', 'adresse_retrais_dossiers_su', 'adresse_retrais_dossiers_du', 'adresse_retrais_dossiers_cz', 'lieu_ouverture_plis_en', 'lieu_ouverture_plis_es', 'lieu_ouverture_plis_su', 'lieu_ouverture_plis_du', 'lieu_ouverture_plis_cz', 'adresse_depot_offres_it', 'adresse_retrais_dossiers_it', 'lieu_ouverture_plis_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonGestionAdressesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdService' => 2, 'IdAgent' => 3, 'NomAgent' => 4, 'PrenomAgent' => 5, 'AdresseDepotOffres' => 6, 'AdresseRetraisDossiers' => 7, 'LieuOuverturePlis' => 8, 'AdresseDepotOffresFr' => 9, 'AdresseRetraisDossiersFr' => 10, 'LieuOuverturePlisFr' => 11, 'AdresseDepotOffresAr' => 12, 'AdresseRetraisDossiersAr' => 13, 'LieuOuverturePlisAr' => 14, 'AdresseDepotOffresEn' => 15, 'AdresseDepotOffresEs' => 16, 'AdresseDepotOffresSu' => 17, 'AdresseDepotOffresDu' => 18, 'AdresseDepotOffresCz' => 19, 'AdresseRetraisDossiersEn' => 20, 'AdresseRetraisDossiersEs' => 21, 'AdresseRetraisDossiersSu' => 22, 'AdresseRetraisDossiersDu' => 23, 'AdresseRetraisDossiersCz' => 24, 'LieuOuverturePlisEn' => 25, 'LieuOuverturePlisEs' => 26, 'LieuOuverturePlisSu' => 27, 'LieuOuverturePlisDu' => 28, 'LieuOuverturePlisCz' => 29, 'AdresseDepotOffresIt' => 30, 'AdresseRetraisDossiersIt' => 31, 'LieuOuverturePlisIt' => 32, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idService' => 2, 'idAgent' => 3, 'nomAgent' => 4, 'prenomAgent' => 5, 'adresseDepotOffres' => 6, 'adresseRetraisDossiers' => 7, 'lieuOuverturePlis' => 8, 'adresseDepotOffresFr' => 9, 'adresseRetraisDossiersFr' => 10, 'lieuOuverturePlisFr' => 11, 'adresseDepotOffresAr' => 12, 'adresseRetraisDossiersAr' => 13, 'lieuOuverturePlisAr' => 14, 'adresseDepotOffresEn' => 15, 'adresseDepotOffresEs' => 16, 'adresseDepotOffresSu' => 17, 'adresseDepotOffresDu' => 18, 'adresseDepotOffresCz' => 19, 'adresseRetraisDossiersEn' => 20, 'adresseRetraisDossiersEs' => 21, 'adresseRetraisDossiersSu' => 22, 'adresseRetraisDossiersDu' => 23, 'adresseRetraisDossiersCz' => 24, 'lieuOuverturePlisEn' => 25, 'lieuOuverturePlisEs' => 26, 'lieuOuverturePlisSu' => 27, 'lieuOuverturePlisDu' => 28, 'lieuOuverturePlisCz' => 29, 'adresseDepotOffresIt' => 30, 'adresseRetraisDossiersIt' => 31, 'lieuOuverturePlisIt' => 32, ),
        BasePeer::TYPE_COLNAME => array (CommonGestionAdressesPeer::ID => 0, CommonGestionAdressesPeer::ORGANISME => 1, CommonGestionAdressesPeer::ID_SERVICE => 2, CommonGestionAdressesPeer::ID_AGENT => 3, CommonGestionAdressesPeer::NOM_AGENT => 4, CommonGestionAdressesPeer::PRENOM_AGENT => 5, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES => 6, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS => 7, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS => 8, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR => 9, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR => 10, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR => 11, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR => 12, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR => 13, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR => 14, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN => 15, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES => 16, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU => 17, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU => 18, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ => 19, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN => 20, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES => 21, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU => 22, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU => 23, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ => 24, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN => 25, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES => 26, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU => 27, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU => 28, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ => 29, CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT => 30, CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT => 31, CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT => 32, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_SERVICE' => 2, 'ID_AGENT' => 3, 'NOM_AGENT' => 4, 'PRENOM_AGENT' => 5, 'ADRESSE_DEPOT_OFFRES' => 6, 'ADRESSE_RETRAIS_DOSSIERS' => 7, 'LIEU_OUVERTURE_PLIS' => 8, 'ADRESSE_DEPOT_OFFRES_FR' => 9, 'ADRESSE_RETRAIS_DOSSIERS_FR' => 10, 'LIEU_OUVERTURE_PLIS_FR' => 11, 'ADRESSE_DEPOT_OFFRES_AR' => 12, 'ADRESSE_RETRAIS_DOSSIERS_AR' => 13, 'LIEU_OUVERTURE_PLIS_AR' => 14, 'ADRESSE_DEPOT_OFFRES_EN' => 15, 'ADRESSE_DEPOT_OFFRES_ES' => 16, 'ADRESSE_DEPOT_OFFRES_SU' => 17, 'ADRESSE_DEPOT_OFFRES_DU' => 18, 'ADRESSE_DEPOT_OFFRES_CZ' => 19, 'ADRESSE_RETRAIS_DOSSIERS_EN' => 20, 'ADRESSE_RETRAIS_DOSSIERS_ES' => 21, 'ADRESSE_RETRAIS_DOSSIERS_SU' => 22, 'ADRESSE_RETRAIS_DOSSIERS_DU' => 23, 'ADRESSE_RETRAIS_DOSSIERS_CZ' => 24, 'LIEU_OUVERTURE_PLIS_EN' => 25, 'LIEU_OUVERTURE_PLIS_ES' => 26, 'LIEU_OUVERTURE_PLIS_SU' => 27, 'LIEU_OUVERTURE_PLIS_DU' => 28, 'LIEU_OUVERTURE_PLIS_CZ' => 29, 'ADRESSE_DEPOT_OFFRES_IT' => 30, 'ADRESSE_RETRAIS_DOSSIERS_IT' => 31, 'LIEU_OUVERTURE_PLIS_IT' => 32, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_service' => 2, 'id_agent' => 3, 'nom_agent' => 4, 'prenom_agent' => 5, 'adresse_depot_offres' => 6, 'adresse_retrais_dossiers' => 7, 'lieu_ouverture_plis' => 8, 'adresse_depot_offres_fr' => 9, 'adresse_retrais_dossiers_fr' => 10, 'lieu_ouverture_plis_fr' => 11, 'adresse_depot_offres_ar' => 12, 'adresse_retrais_dossiers_ar' => 13, 'lieu_ouverture_plis_ar' => 14, 'adresse_depot_offres_en' => 15, 'adresse_depot_offres_es' => 16, 'adresse_depot_offres_su' => 17, 'adresse_depot_offres_du' => 18, 'adresse_depot_offres_cz' => 19, 'adresse_retrais_dossiers_en' => 20, 'adresse_retrais_dossiers_es' => 21, 'adresse_retrais_dossiers_su' => 22, 'adresse_retrais_dossiers_du' => 23, 'adresse_retrais_dossiers_cz' => 24, 'lieu_ouverture_plis_en' => 25, 'lieu_ouverture_plis_es' => 26, 'lieu_ouverture_plis_su' => 27, 'lieu_ouverture_plis_du' => 28, 'lieu_ouverture_plis_cz' => 29, 'adresse_depot_offres_it' => 30, 'adresse_retrais_dossiers_it' => 31, 'lieu_ouverture_plis_it' => 32, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
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
        $toNames = CommonGestionAdressesPeer::getFieldNames($toType);
        $key = isset(CommonGestionAdressesPeer::$fieldKeys[$fromType][$name]) ? CommonGestionAdressesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonGestionAdressesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonGestionAdressesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonGestionAdressesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonGestionAdressesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonGestionAdressesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ID);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ORGANISME);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT);
            $criteria->addSelectColumn(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_fr');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_fr');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_fr');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_ar');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_ar');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_ar');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_en');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_es');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_su');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_du');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_cz');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_en');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_es');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_su');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_du');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_cz');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_en');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_es');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_su');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_du');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_cz');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_it');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_it');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_it');
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
        $criteria->setPrimaryTableName(CommonGestionAdressesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonGestionAdressesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonGestionAdressesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGestionAdresses
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonGestionAdressesPeer::doSelect($critcopy, $con);
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
        return CommonGestionAdressesPeer::populateObjects(CommonGestionAdressesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonGestionAdressesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGestionAdressesPeer::DATABASE_NAME);

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
     * @param      CommonGestionAdresses $obj A CommonGestionAdresses object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonGestionAdressesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonGestionAdresses object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonGestionAdresses) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonGestionAdresses object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonGestionAdressesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonGestionAdresses Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonGestionAdressesPeer::$instances[$key])) {
                return CommonGestionAdressesPeer::$instances[$key];
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
        foreach (CommonGestionAdressesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonGestionAdressesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to gestion_adresses
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
        $cls = CommonGestionAdressesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonGestionAdressesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonGestionAdressesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonGestionAdressesPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonGestionAdresses object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonGestionAdressesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonGestionAdressesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonGestionAdressesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonGestionAdressesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonGestionAdressesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonGestionAdressesPeer::DATABASE_NAME)->getTable(CommonGestionAdressesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonGestionAdressesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonGestionAdressesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonGestionAdressesTableMap());
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
        return CommonGestionAdressesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonGestionAdresses or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGestionAdresses object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonGestionAdresses object
        }

        if ($criteria->containsKey(CommonGestionAdressesPeer::ID) && $criteria->keyContainsValue(CommonGestionAdressesPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonGestionAdressesPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonGestionAdressesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonGestionAdresses or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGestionAdresses object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonGestionAdressesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonGestionAdressesPeer::ID);
            $value = $criteria->remove(CommonGestionAdressesPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonGestionAdressesPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonGestionAdressesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonGestionAdressesPeer::ORGANISME);
            $value = $criteria->remove(CommonGestionAdressesPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonGestionAdressesPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonGestionAdressesPeer::TABLE_NAME);
            }

        } else { // $values is CommonGestionAdresses object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonGestionAdressesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gestion_adresses table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonGestionAdressesPeer::TABLE_NAME, $con, CommonGestionAdressesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonGestionAdressesPeer::clearInstancePool();
            CommonGestionAdressesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonGestionAdresses or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonGestionAdresses object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonGestionAdressesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonGestionAdresses) { // it's a model object
            // invalidate the cache for this single object
            CommonGestionAdressesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonGestionAdressesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonGestionAdressesPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonGestionAdressesPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonGestionAdressesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGestionAdressesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonGestionAdressesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonGestionAdresses object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonGestionAdresses $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonGestionAdressesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonGestionAdressesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonGestionAdressesPeer::DATABASE_NAME, CommonGestionAdressesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonGestionAdresses
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonGestionAdressesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonGestionAdressesPeer::DATABASE_NAME);
        $criteria->add(CommonGestionAdressesPeer::ID, $id);
        $criteria->add(CommonGestionAdressesPeer::ORGANISME, $organisme);
        $v = CommonGestionAdressesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonGestionAdressesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonGestionAdressesPeer::buildTableMap();

