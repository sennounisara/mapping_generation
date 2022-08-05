<?php


/**
 * Base static class for performing query and update operations on the 'GeolocalisationN0' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGeolocalisationN0Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'GeolocalisationN0';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonGeolocalisationN0';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonGeolocalisationN0TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 38;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 38;

    /** the column name for the id field */
    const ID = 'GeolocalisationN0.id';

    /** the column name for the denomination field */
    const DENOMINATION = 'GeolocalisationN0.denomination';

    /** the column name for the denomination_fr field */
    const DENOMINATION_FR = 'GeolocalisationN0.denomination_fr';

    /** the column name for the denomination_en field */
    const DENOMINATION_EN = 'GeolocalisationN0.denomination_en';

    /** the column name for the denomination_es field */
    const DENOMINATION_ES = 'GeolocalisationN0.denomination_es';

    /** the column name for the type field */
    const TYPE = 'GeolocalisationN0.type';

    /** the column name for the libelle_selectionner field */
    const LIBELLE_SELECTIONNER = 'GeolocalisationN0.libelle_selectionner';

    /** the column name for the libelle_selectionner_fr field */
    const LIBELLE_SELECTIONNER_FR = 'GeolocalisationN0.libelle_selectionner_fr';

    /** the column name for the libelle_selectionner_en field */
    const LIBELLE_SELECTIONNER_EN = 'GeolocalisationN0.libelle_selectionner_en';

    /** the column name for the libelle_selectionner_es field */
    const LIBELLE_SELECTIONNER_ES = 'GeolocalisationN0.libelle_selectionner_es';

    /** the column name for the libelle_tous field */
    const LIBELLE_TOUS = 'GeolocalisationN0.libelle_tous';

    /** the column name for the libelle_tous_fr field */
    const LIBELLE_TOUS_FR = 'GeolocalisationN0.libelle_tous_fr';

    /** the column name for the libelle_tous_en field */
    const LIBELLE_TOUS_EN = 'GeolocalisationN0.libelle_tous_en';

    /** the column name for the libelle_tous_es field */
    const LIBELLE_TOUS_ES = 'GeolocalisationN0.libelle_tous_es';

    /** the column name for the libelle_Aucun field */
    const LIBELLE_AUCUN = 'GeolocalisationN0.libelle_Aucun';

    /** the column name for the libelle_Aucun_fr field */
    const LIBELLE_AUCUN_FR = 'GeolocalisationN0.libelle_Aucun_fr';

    /** the column name for the libelle_Aucun_en field */
    const LIBELLE_AUCUN_EN = 'GeolocalisationN0.libelle_Aucun_en';

    /** the column name for the libelle_Aucun_es field */
    const LIBELLE_AUCUN_ES = 'GeolocalisationN0.libelle_Aucun_es';

    /** the column name for the denomination_ar field */
    const DENOMINATION_AR = 'GeolocalisationN0.denomination_ar';

    /** the column name for the libelle_selectionner_ar field */
    const LIBELLE_SELECTIONNER_AR = 'GeolocalisationN0.libelle_selectionner_ar';

    /** the column name for the libelle_tous_ar field */
    const LIBELLE_TOUS_AR = 'GeolocalisationN0.libelle_tous_ar';

    /** the column name for the libelle_Aucun_ar field */
    const LIBELLE_AUCUN_AR = 'GeolocalisationN0.libelle_Aucun_ar';

    /** the column name for the denomination_su field */
    const DENOMINATION_SU = 'GeolocalisationN0.denomination_su';

    /** the column name for the libelle_selectionner_su field */
    const LIBELLE_SELECTIONNER_SU = 'GeolocalisationN0.libelle_selectionner_su';

    /** the column name for the libelle_tous_su field */
    const LIBELLE_TOUS_SU = 'GeolocalisationN0.libelle_tous_su';

    /** the column name for the libelle_Aucun_su field */
    const LIBELLE_AUCUN_SU = 'GeolocalisationN0.libelle_Aucun_su';

    /** the column name for the denomination_du field */
    const DENOMINATION_DU = 'GeolocalisationN0.denomination_du';

    /** the column name for the libelle_selectionner_du field */
    const LIBELLE_SELECTIONNER_DU = 'GeolocalisationN0.libelle_selectionner_du';

    /** the column name for the libelle_tous_du field */
    const LIBELLE_TOUS_DU = 'GeolocalisationN0.libelle_tous_du';

    /** the column name for the libelle_Aucun_du field */
    const LIBELLE_AUCUN_DU = 'GeolocalisationN0.libelle_Aucun_du';

    /** the column name for the denomination_cz field */
    const DENOMINATION_CZ = 'GeolocalisationN0.denomination_cz';

    /** the column name for the libelle_selectionner_cz field */
    const LIBELLE_SELECTIONNER_CZ = 'GeolocalisationN0.libelle_selectionner_cz';

    /** the column name for the libelle_tous_cz field */
    const LIBELLE_TOUS_CZ = 'GeolocalisationN0.libelle_tous_cz';

    /** the column name for the libelle_Aucun_cz field */
    const LIBELLE_AUCUN_CZ = 'GeolocalisationN0.libelle_Aucun_cz';

    /** the column name for the denomination_it field */
    const DENOMINATION_IT = 'GeolocalisationN0.denomination_it';

    /** the column name for the libelle_selectionner_it field */
    const LIBELLE_SELECTIONNER_IT = 'GeolocalisationN0.libelle_selectionner_it';

    /** the column name for the libelle_tous_it field */
    const LIBELLE_TOUS_IT = 'GeolocalisationN0.libelle_tous_it';

    /** the column name for the libelle_Aucun_it field */
    const LIBELLE_AUCUN_IT = 'GeolocalisationN0.libelle_Aucun_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonGeolocalisationN0 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonGeolocalisationN0[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN0Peer::$fieldNames[CommonGeolocalisationN0Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Denomination', 'DenominationFr', 'DenominationEn', 'DenominationEs', 'Type', 'LibelleSelectionner', 'LibelleSelectionnerFr', 'LibelleSelectionnerEn', 'LibelleSelectionnerEs', 'LibelleTous', 'LibelleTousFr', 'LibelleTousEn', 'LibelleTousEs', 'LibelleAucun', 'LibelleAucunFr', 'LibelleAucunEn', 'LibelleAucunEs', 'DenominationAr', 'LibelleSelectionnerAr', 'LibelleTousAr', 'LibelleAucunAr', 'DenominationSu', 'LibelleSelectionnerSu', 'LibelleTousSu', 'LibelleAucunSu', 'DenominationDu', 'LibelleSelectionnerDu', 'LibelleTousDu', 'LibelleAucunDu', 'DenominationCz', 'LibelleSelectionnerCz', 'LibelleTousCz', 'LibelleAucunCz', 'DenominationIt', 'LibelleSelectionnerIt', 'LibelleTousIt', 'LibelleAucunIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'denomination', 'denominationFr', 'denominationEn', 'denominationEs', 'type', 'libelleSelectionner', 'libelleSelectionnerFr', 'libelleSelectionnerEn', 'libelleSelectionnerEs', 'libelleTous', 'libelleTousFr', 'libelleTousEn', 'libelleTousEs', 'libelleAucun', 'libelleAucunFr', 'libelleAucunEn', 'libelleAucunEs', 'denominationAr', 'libelleSelectionnerAr', 'libelleTousAr', 'libelleAucunAr', 'denominationSu', 'libelleSelectionnerSu', 'libelleTousSu', 'libelleAucunSu', 'denominationDu', 'libelleSelectionnerDu', 'libelleTousDu', 'libelleAucunDu', 'denominationCz', 'libelleSelectionnerCz', 'libelleTousCz', 'libelleAucunCz', 'denominationIt', 'libelleSelectionnerIt', 'libelleTousIt', 'libelleAucunIt', ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN0Peer::ID, CommonGeolocalisationN0Peer::DENOMINATION, CommonGeolocalisationN0Peer::DENOMINATION_FR, CommonGeolocalisationN0Peer::DENOMINATION_EN, CommonGeolocalisationN0Peer::DENOMINATION_ES, CommonGeolocalisationN0Peer::TYPE, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES, CommonGeolocalisationN0Peer::LIBELLE_TOUS, CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR, CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN, CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES, CommonGeolocalisationN0Peer::LIBELLE_AUCUN, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES, CommonGeolocalisationN0Peer::DENOMINATION_AR, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR, CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR, CommonGeolocalisationN0Peer::DENOMINATION_SU, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU, CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU, CommonGeolocalisationN0Peer::DENOMINATION_DU, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU, CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU, CommonGeolocalisationN0Peer::DENOMINATION_CZ, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ, CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ, CommonGeolocalisationN0Peer::DENOMINATION_IT, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT, CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DENOMINATION', 'DENOMINATION_FR', 'DENOMINATION_EN', 'DENOMINATION_ES', 'TYPE', 'LIBELLE_SELECTIONNER', 'LIBELLE_SELECTIONNER_FR', 'LIBELLE_SELECTIONNER_EN', 'LIBELLE_SELECTIONNER_ES', 'LIBELLE_TOUS', 'LIBELLE_TOUS_FR', 'LIBELLE_TOUS_EN', 'LIBELLE_TOUS_ES', 'LIBELLE_AUCUN', 'LIBELLE_AUCUN_FR', 'LIBELLE_AUCUN_EN', 'LIBELLE_AUCUN_ES', 'DENOMINATION_AR', 'LIBELLE_SELECTIONNER_AR', 'LIBELLE_TOUS_AR', 'LIBELLE_AUCUN_AR', 'DENOMINATION_SU', 'LIBELLE_SELECTIONNER_SU', 'LIBELLE_TOUS_SU', 'LIBELLE_AUCUN_SU', 'DENOMINATION_DU', 'LIBELLE_SELECTIONNER_DU', 'LIBELLE_TOUS_DU', 'LIBELLE_AUCUN_DU', 'DENOMINATION_CZ', 'LIBELLE_SELECTIONNER_CZ', 'LIBELLE_TOUS_CZ', 'LIBELLE_AUCUN_CZ', 'DENOMINATION_IT', 'LIBELLE_SELECTIONNER_IT', 'LIBELLE_TOUS_IT', 'LIBELLE_AUCUN_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'denomination', 'denomination_fr', 'denomination_en', 'denomination_es', 'type', 'libelle_selectionner', 'libelle_selectionner_fr', 'libelle_selectionner_en', 'libelle_selectionner_es', 'libelle_tous', 'libelle_tous_fr', 'libelle_tous_en', 'libelle_tous_es', 'libelle_Aucun', 'libelle_Aucun_fr', 'libelle_Aucun_en', 'libelle_Aucun_es', 'denomination_ar', 'libelle_selectionner_ar', 'libelle_tous_ar', 'libelle_Aucun_ar', 'denomination_su', 'libelle_selectionner_su', 'libelle_tous_su', 'libelle_Aucun_su', 'denomination_du', 'libelle_selectionner_du', 'libelle_tous_du', 'libelle_Aucun_du', 'denomination_cz', 'libelle_selectionner_cz', 'libelle_tous_cz', 'libelle_Aucun_cz', 'denomination_it', 'libelle_selectionner_it', 'libelle_tous_it', 'libelle_Aucun_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN0Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Denomination' => 1, 'DenominationFr' => 2, 'DenominationEn' => 3, 'DenominationEs' => 4, 'Type' => 5, 'LibelleSelectionner' => 6, 'LibelleSelectionnerFr' => 7, 'LibelleSelectionnerEn' => 8, 'LibelleSelectionnerEs' => 9, 'LibelleTous' => 10, 'LibelleTousFr' => 11, 'LibelleTousEn' => 12, 'LibelleTousEs' => 13, 'LibelleAucun' => 14, 'LibelleAucunFr' => 15, 'LibelleAucunEn' => 16, 'LibelleAucunEs' => 17, 'DenominationAr' => 18, 'LibelleSelectionnerAr' => 19, 'LibelleTousAr' => 20, 'LibelleAucunAr' => 21, 'DenominationSu' => 22, 'LibelleSelectionnerSu' => 23, 'LibelleTousSu' => 24, 'LibelleAucunSu' => 25, 'DenominationDu' => 26, 'LibelleSelectionnerDu' => 27, 'LibelleTousDu' => 28, 'LibelleAucunDu' => 29, 'DenominationCz' => 30, 'LibelleSelectionnerCz' => 31, 'LibelleTousCz' => 32, 'LibelleAucunCz' => 33, 'DenominationIt' => 34, 'LibelleSelectionnerIt' => 35, 'LibelleTousIt' => 36, 'LibelleAucunIt' => 37, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'denomination' => 1, 'denominationFr' => 2, 'denominationEn' => 3, 'denominationEs' => 4, 'type' => 5, 'libelleSelectionner' => 6, 'libelleSelectionnerFr' => 7, 'libelleSelectionnerEn' => 8, 'libelleSelectionnerEs' => 9, 'libelleTous' => 10, 'libelleTousFr' => 11, 'libelleTousEn' => 12, 'libelleTousEs' => 13, 'libelleAucun' => 14, 'libelleAucunFr' => 15, 'libelleAucunEn' => 16, 'libelleAucunEs' => 17, 'denominationAr' => 18, 'libelleSelectionnerAr' => 19, 'libelleTousAr' => 20, 'libelleAucunAr' => 21, 'denominationSu' => 22, 'libelleSelectionnerSu' => 23, 'libelleTousSu' => 24, 'libelleAucunSu' => 25, 'denominationDu' => 26, 'libelleSelectionnerDu' => 27, 'libelleTousDu' => 28, 'libelleAucunDu' => 29, 'denominationCz' => 30, 'libelleSelectionnerCz' => 31, 'libelleTousCz' => 32, 'libelleAucunCz' => 33, 'denominationIt' => 34, 'libelleSelectionnerIt' => 35, 'libelleTousIt' => 36, 'libelleAucunIt' => 37, ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN0Peer::ID => 0, CommonGeolocalisationN0Peer::DENOMINATION => 1, CommonGeolocalisationN0Peer::DENOMINATION_FR => 2, CommonGeolocalisationN0Peer::DENOMINATION_EN => 3, CommonGeolocalisationN0Peer::DENOMINATION_ES => 4, CommonGeolocalisationN0Peer::TYPE => 5, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER => 6, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR => 7, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN => 8, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES => 9, CommonGeolocalisationN0Peer::LIBELLE_TOUS => 10, CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR => 11, CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN => 12, CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES => 13, CommonGeolocalisationN0Peer::LIBELLE_AUCUN => 14, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR => 15, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN => 16, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES => 17, CommonGeolocalisationN0Peer::DENOMINATION_AR => 18, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR => 19, CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR => 20, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR => 21, CommonGeolocalisationN0Peer::DENOMINATION_SU => 22, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU => 23, CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU => 24, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU => 25, CommonGeolocalisationN0Peer::DENOMINATION_DU => 26, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU => 27, CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU => 28, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU => 29, CommonGeolocalisationN0Peer::DENOMINATION_CZ => 30, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ => 31, CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ => 32, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ => 33, CommonGeolocalisationN0Peer::DENOMINATION_IT => 34, CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT => 35, CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT => 36, CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT => 37, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DENOMINATION' => 1, 'DENOMINATION_FR' => 2, 'DENOMINATION_EN' => 3, 'DENOMINATION_ES' => 4, 'TYPE' => 5, 'LIBELLE_SELECTIONNER' => 6, 'LIBELLE_SELECTIONNER_FR' => 7, 'LIBELLE_SELECTIONNER_EN' => 8, 'LIBELLE_SELECTIONNER_ES' => 9, 'LIBELLE_TOUS' => 10, 'LIBELLE_TOUS_FR' => 11, 'LIBELLE_TOUS_EN' => 12, 'LIBELLE_TOUS_ES' => 13, 'LIBELLE_AUCUN' => 14, 'LIBELLE_AUCUN_FR' => 15, 'LIBELLE_AUCUN_EN' => 16, 'LIBELLE_AUCUN_ES' => 17, 'DENOMINATION_AR' => 18, 'LIBELLE_SELECTIONNER_AR' => 19, 'LIBELLE_TOUS_AR' => 20, 'LIBELLE_AUCUN_AR' => 21, 'DENOMINATION_SU' => 22, 'LIBELLE_SELECTIONNER_SU' => 23, 'LIBELLE_TOUS_SU' => 24, 'LIBELLE_AUCUN_SU' => 25, 'DENOMINATION_DU' => 26, 'LIBELLE_SELECTIONNER_DU' => 27, 'LIBELLE_TOUS_DU' => 28, 'LIBELLE_AUCUN_DU' => 29, 'DENOMINATION_CZ' => 30, 'LIBELLE_SELECTIONNER_CZ' => 31, 'LIBELLE_TOUS_CZ' => 32, 'LIBELLE_AUCUN_CZ' => 33, 'DENOMINATION_IT' => 34, 'LIBELLE_SELECTIONNER_IT' => 35, 'LIBELLE_TOUS_IT' => 36, 'LIBELLE_AUCUN_IT' => 37, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'denomination' => 1, 'denomination_fr' => 2, 'denomination_en' => 3, 'denomination_es' => 4, 'type' => 5, 'libelle_selectionner' => 6, 'libelle_selectionner_fr' => 7, 'libelle_selectionner_en' => 8, 'libelle_selectionner_es' => 9, 'libelle_tous' => 10, 'libelle_tous_fr' => 11, 'libelle_tous_en' => 12, 'libelle_tous_es' => 13, 'libelle_Aucun' => 14, 'libelle_Aucun_fr' => 15, 'libelle_Aucun_en' => 16, 'libelle_Aucun_es' => 17, 'denomination_ar' => 18, 'libelle_selectionner_ar' => 19, 'libelle_tous_ar' => 20, 'libelle_Aucun_ar' => 21, 'denomination_su' => 22, 'libelle_selectionner_su' => 23, 'libelle_tous_su' => 24, 'libelle_Aucun_su' => 25, 'denomination_du' => 26, 'libelle_selectionner_du' => 27, 'libelle_tous_du' => 28, 'libelle_Aucun_du' => 29, 'denomination_cz' => 30, 'libelle_selectionner_cz' => 31, 'libelle_tous_cz' => 32, 'libelle_Aucun_cz' => 33, 'denomination_it' => 34, 'libelle_selectionner_it' => 35, 'libelle_tous_it' => 36, 'libelle_Aucun_it' => 37, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
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
        $toNames = CommonGeolocalisationN0Peer::getFieldNames($toType);
        $key = isset(CommonGeolocalisationN0Peer::$fieldKeys[$fromType][$name]) ? CommonGeolocalisationN0Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonGeolocalisationN0Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonGeolocalisationN0Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonGeolocalisationN0Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonGeolocalisationN0Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonGeolocalisationN0Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::ID);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::TYPE);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::DENOMINATION_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.denomination');
            $criteria->addSelectColumn($alias . '.denomination_fr');
            $criteria->addSelectColumn($alias . '.denomination_en');
            $criteria->addSelectColumn($alias . '.denomination_es');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.libelle_selectionner');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_fr');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_en');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_es');
            $criteria->addSelectColumn($alias . '.libelle_tous');
            $criteria->addSelectColumn($alias . '.libelle_tous_fr');
            $criteria->addSelectColumn($alias . '.libelle_tous_en');
            $criteria->addSelectColumn($alias . '.libelle_tous_es');
            $criteria->addSelectColumn($alias . '.libelle_Aucun');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_fr');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_en');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_es');
            $criteria->addSelectColumn($alias . '.denomination_ar');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_ar');
            $criteria->addSelectColumn($alias . '.libelle_tous_ar');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_ar');
            $criteria->addSelectColumn($alias . '.denomination_su');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_su');
            $criteria->addSelectColumn($alias . '.libelle_tous_su');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_su');
            $criteria->addSelectColumn($alias . '.denomination_du');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_du');
            $criteria->addSelectColumn($alias . '.libelle_tous_du');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_du');
            $criteria->addSelectColumn($alias . '.denomination_cz');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_cz');
            $criteria->addSelectColumn($alias . '.libelle_tous_cz');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_cz');
            $criteria->addSelectColumn($alias . '.denomination_it');
            $criteria->addSelectColumn($alias . '.libelle_selectionner_it');
            $criteria->addSelectColumn($alias . '.libelle_tous_it');
            $criteria->addSelectColumn($alias . '.libelle_Aucun_it');
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
        $criteria->setPrimaryTableName(CommonGeolocalisationN0Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonGeolocalisationN0Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonGeolocalisationN0Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGeolocalisationN0
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonGeolocalisationN0Peer::doSelect($critcopy, $con);
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
        return CommonGeolocalisationN0Peer::populateObjects(CommonGeolocalisationN0Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonGeolocalisationN0Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN0Peer::DATABASE_NAME);

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
     * @param      CommonGeolocalisationN0 $obj A CommonGeolocalisationN0 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonGeolocalisationN0Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonGeolocalisationN0 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonGeolocalisationN0) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonGeolocalisationN0 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonGeolocalisationN0Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonGeolocalisationN0 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonGeolocalisationN0Peer::$instances[$key])) {
                return CommonGeolocalisationN0Peer::$instances[$key];
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
        foreach (CommonGeolocalisationN0Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonGeolocalisationN0Peer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to GeolocalisationN0
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
        $cls = CommonGeolocalisationN0Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonGeolocalisationN0Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonGeolocalisationN0Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonGeolocalisationN0Peer::addInstanceToPool($obj, $key);
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
     * @return array (CommonGeolocalisationN0 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonGeolocalisationN0Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonGeolocalisationN0Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonGeolocalisationN0Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonGeolocalisationN0Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonGeolocalisationN0Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonGeolocalisationN0Peer::DATABASE_NAME)->getTable(CommonGeolocalisationN0Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonGeolocalisationN0Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonGeolocalisationN0Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonGeolocalisationN0TableMap());
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
        return CommonGeolocalisationN0Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonGeolocalisationN0 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN0 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonGeolocalisationN0 object
        }

        if ($criteria->containsKey(CommonGeolocalisationN0Peer::ID) && $criteria->keyContainsValue(CommonGeolocalisationN0Peer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonGeolocalisationN0Peer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN0Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonGeolocalisationN0 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN0 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonGeolocalisationN0Peer::ID);
            $value = $criteria->remove(CommonGeolocalisationN0Peer::ID);
            if ($value) {
                $selectCriteria->add(CommonGeolocalisationN0Peer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonGeolocalisationN0Peer::TABLE_NAME);
            }

        } else { // $values is CommonGeolocalisationN0 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN0Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the GeolocalisationN0 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonGeolocalisationN0Peer::TABLE_NAME, $con, CommonGeolocalisationN0Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonGeolocalisationN0Peer::clearInstancePool();
            CommonGeolocalisationN0Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonGeolocalisationN0 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN0 object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonGeolocalisationN0Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonGeolocalisationN0) { // it's a model object
            // invalidate the cache for this single object
            CommonGeolocalisationN0Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN0Peer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonGeolocalisationN0Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN0Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonGeolocalisationN0Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonGeolocalisationN0 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonGeolocalisationN0 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonGeolocalisationN0Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonGeolocalisationN0Peer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonGeolocalisationN0Peer::DATABASE_NAME, CommonGeolocalisationN0Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN0
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonGeolocalisationN0Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);
        $criteria->add(CommonGeolocalisationN0Peer::ID, $pk);

        $v = CommonGeolocalisationN0Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN0[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN0Peer::ID, $pks, Criteria::IN);
            $objs = CommonGeolocalisationN0Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonGeolocalisationN0Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonGeolocalisationN0Peer::buildTableMap();

