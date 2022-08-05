<?php


/**
 * Base static class for performing query and update operations on the 'champ_supplementaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseChampSupplementairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'champ_supplementaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'ChampSupplementaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ChampSupplementaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 69;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 69;

    /** the column name for the ID_CHAMP_SUPPLEMENTAIRE field */
    const ID_CHAMP_SUPPLEMENTAIRE = 'champ_supplementaire.ID_CHAMP_SUPPLEMENTAIRE';

    /** the column name for the ID_ORGANISME field */
    const ID_ORGANISME = 'champ_supplementaire.ID_ORGANISME';

    /** the column name for the ID_THEME field */
    const ID_THEME = 'champ_supplementaire.ID_THEME';

    /** the column name for the ID_ACTION field */
    const ID_ACTION = 'champ_supplementaire.ID_ACTION';

    /** the column name for the LABEL_FR1 field */
    const LABEL_FR1 = 'champ_supplementaire.LABEL_FR1';

    /** the column name for the LABEL_AR1 field */
    const LABEL_AR1 = 'champ_supplementaire.LABEL_AR1';

    /** the column name for the LABEL_COURT1 field */
    const LABEL_COURT1 = 'champ_supplementaire.LABEL_COURT1';

    /** the column name for the TYPE1 field */
    const TYPE1 = 'champ_supplementaire.TYPE1';

    /** the column name for the OBLIGATOIRE1 field */
    const OBLIGATOIRE1 = 'champ_supplementaire.OBLIGATOIRE1';

    /** the column name for the ACTIF1 field */
    const ACTIF1 = 'champ_supplementaire.ACTIF1';

    /** the column name for the VISIBLE1 field */
    const VISIBLE1 = 'champ_supplementaire.VISIBLE1';

    /** the column name for the EMPLACEMENT1 field */
    const EMPLACEMENT1 = 'champ_supplementaire.EMPLACEMENT1';

    /** the column name for the LABEL_FR2 field */
    const LABEL_FR2 = 'champ_supplementaire.LABEL_FR2';

    /** the column name for the LABEL_AR2 field */
    const LABEL_AR2 = 'champ_supplementaire.LABEL_AR2';

    /** the column name for the LABEL_COURT2 field */
    const LABEL_COURT2 = 'champ_supplementaire.LABEL_COURT2';

    /** the column name for the TYPE2 field */
    const TYPE2 = 'champ_supplementaire.TYPE2';

    /** the column name for the OBLIGATOIRE2 field */
    const OBLIGATOIRE2 = 'champ_supplementaire.OBLIGATOIRE2';

    /** the column name for the ACTIF2 field */
    const ACTIF2 = 'champ_supplementaire.ACTIF2';

    /** the column name for the VISIBLE2 field */
    const VISIBLE2 = 'champ_supplementaire.VISIBLE2';

    /** the column name for the EMPLACEMENT2 field */
    const EMPLACEMENT2 = 'champ_supplementaire.EMPLACEMENT2';

    /** the column name for the LABEL_FR3 field */
    const LABEL_FR3 = 'champ_supplementaire.LABEL_FR3';

    /** the column name for the LABEL_AR3 field */
    const LABEL_AR3 = 'champ_supplementaire.LABEL_AR3';

    /** the column name for the LABEL_COURT3 field */
    const LABEL_COURT3 = 'champ_supplementaire.LABEL_COURT3';

    /** the column name for the TYPE3 field */
    const TYPE3 = 'champ_supplementaire.TYPE3';

    /** the column name for the OBLIGATOIRE3 field */
    const OBLIGATOIRE3 = 'champ_supplementaire.OBLIGATOIRE3';

    /** the column name for the ACTIF3 field */
    const ACTIF3 = 'champ_supplementaire.ACTIF3';

    /** the column name for the VISIBLE3 field */
    const VISIBLE3 = 'champ_supplementaire.VISIBLE3';

    /** the column name for the EMPLACEMENT3 field */
    const EMPLACEMENT3 = 'champ_supplementaire.EMPLACEMENT3';

    /** the column name for the LABEL_FR4 field */
    const LABEL_FR4 = 'champ_supplementaire.LABEL_FR4';

    /** the column name for the LABEL_AR4 field */
    const LABEL_AR4 = 'champ_supplementaire.LABEL_AR4';

    /** the column name for the LABEL_COURT4 field */
    const LABEL_COURT4 = 'champ_supplementaire.LABEL_COURT4';

    /** the column name for the TYPE4 field */
    const TYPE4 = 'champ_supplementaire.TYPE4';

    /** the column name for the OBLIGATOIRE4 field */
    const OBLIGATOIRE4 = 'champ_supplementaire.OBLIGATOIRE4';

    /** the column name for the ACTIF4 field */
    const ACTIF4 = 'champ_supplementaire.ACTIF4';

    /** the column name for the VISIBLE4 field */
    const VISIBLE4 = 'champ_supplementaire.VISIBLE4';

    /** the column name for the EMPLACEMENT4 field */
    const EMPLACEMENT4 = 'champ_supplementaire.EMPLACEMENT4';

    /** the column name for the LABEL_FR5 field */
    const LABEL_FR5 = 'champ_supplementaire.LABEL_FR5';

    /** the column name for the LABEL_AR5 field */
    const LABEL_AR5 = 'champ_supplementaire.LABEL_AR5';

    /** the column name for the LABEL_COURT5 field */
    const LABEL_COURT5 = 'champ_supplementaire.LABEL_COURT5';

    /** the column name for the TYPE5 field */
    const TYPE5 = 'champ_supplementaire.TYPE5';

    /** the column name for the OBLIGATOIRE5 field */
    const OBLIGATOIRE5 = 'champ_supplementaire.OBLIGATOIRE5';

    /** the column name for the ACTIF5 field */
    const ACTIF5 = 'champ_supplementaire.ACTIF5';

    /** the column name for the VISIBLE5 field */
    const VISIBLE5 = 'champ_supplementaire.VISIBLE5';

    /** the column name for the EMPLACEMENT5 field */
    const EMPLACEMENT5 = 'champ_supplementaire.EMPLACEMENT5';

    /** the column name for the VALEUR_LISTE_FR_1 field */
    const VALEUR_LISTE_FR_1 = 'champ_supplementaire.VALEUR_LISTE_FR_1';

    /** the column name for the VALEUR_LISTE_AR_1 field */
    const VALEUR_LISTE_AR_1 = 'champ_supplementaire.VALEUR_LISTE_AR_1';

    /** the column name for the VALEUR_LISTE_FR_2 field */
    const VALEUR_LISTE_FR_2 = 'champ_supplementaire.VALEUR_LISTE_FR_2';

    /** the column name for the VALEUR_LISTE_AR_2 field */
    const VALEUR_LISTE_AR_2 = 'champ_supplementaire.VALEUR_LISTE_AR_2';

    /** the column name for the VALEUR_LISTE_FR_3 field */
    const VALEUR_LISTE_FR_3 = 'champ_supplementaire.VALEUR_LISTE_FR_3';

    /** the column name for the VALEUR_LISTE_AR_3 field */
    const VALEUR_LISTE_AR_3 = 'champ_supplementaire.VALEUR_LISTE_AR_3';

    /** the column name for the VALEUR_LISTE_FR_4 field */
    const VALEUR_LISTE_FR_4 = 'champ_supplementaire.VALEUR_LISTE_FR_4';

    /** the column name for the VALEUR_LISTE_AR_4 field */
    const VALEUR_LISTE_AR_4 = 'champ_supplementaire.VALEUR_LISTE_AR_4';

    /** the column name for the VALEUR_LISTE_FR_5 field */
    const VALEUR_LISTE_FR_5 = 'champ_supplementaire.VALEUR_LISTE_FR_5';

    /** the column name for the VALEUR_LISTE_AR_5 field */
    const VALEUR_LISTE_AR_5 = 'champ_supplementaire.VALEUR_LISTE_AR_5';

    /** the column name for the POSITION1 field */
    const POSITION1 = 'champ_supplementaire.POSITION1';

    /** the column name for the POSITION2 field */
    const POSITION2 = 'champ_supplementaire.POSITION2';

    /** the column name for the POSITION3 field */
    const POSITION3 = 'champ_supplementaire.POSITION3';

    /** the column name for the POSITION4 field */
    const POSITION4 = 'champ_supplementaire.POSITION4';

    /** the column name for the POSITION5 field */
    const POSITION5 = 'champ_supplementaire.POSITION5';

    /** the column name for the VISIBLE_BOV1 field */
    const VISIBLE_BOV1 = 'champ_supplementaire.VISIBLE_BOV1';

    /** the column name for the VISIBLE_BOV2 field */
    const VISIBLE_BOV2 = 'champ_supplementaire.VISIBLE_BOV2';

    /** the column name for the VISIBLE_BOV3 field */
    const VISIBLE_BOV3 = 'champ_supplementaire.VISIBLE_BOV3';

    /** the column name for the VISIBLE_BOV4 field */
    const VISIBLE_BOV4 = 'champ_supplementaire.VISIBLE_BOV4';

    /** the column name for the VISIBLE_BOV5 field */
    const VISIBLE_BOV5 = 'champ_supplementaire.VISIBLE_BOV5';

    /** the column name for the VISIBLE_TABLEAU1 field */
    const VISIBLE_TABLEAU1 = 'champ_supplementaire.VISIBLE_TABLEAU1';

    /** the column name for the VISIBLE_TABLEAU2 field */
    const VISIBLE_TABLEAU2 = 'champ_supplementaire.VISIBLE_TABLEAU2';

    /** the column name for the VISIBLE_TABLEAU3 field */
    const VISIBLE_TABLEAU3 = 'champ_supplementaire.VISIBLE_TABLEAU3';

    /** the column name for the VISIBLE_TABLEAU4 field */
    const VISIBLE_TABLEAU4 = 'champ_supplementaire.VISIBLE_TABLEAU4';

    /** the column name for the VISIBLE_TABLEAU5 field */
    const VISIBLE_TABLEAU5 = 'champ_supplementaire.VISIBLE_TABLEAU5';

    /** The enumerated values for the OBLIGATOIRE1 field */
    const OBLIGATOIRE1_0 = '0';
    const OBLIGATOIRE1_1 = '1';

    /** The enumerated values for the ACTIF1 field */
    const ACTIF1_0 = '0';
    const ACTIF1_1 = '1';

    /** The enumerated values for the VISIBLE1 field */
    const VISIBLE1_0 = '0';
    const VISIBLE1_1 = '1';

    /** The enumerated values for the OBLIGATOIRE2 field */
    const OBLIGATOIRE2_0 = '0';
    const OBLIGATOIRE2_1 = '1';

    /** The enumerated values for the ACTIF2 field */
    const ACTIF2_0 = '0';
    const ACTIF2_1 = '1';

    /** The enumerated values for the VISIBLE2 field */
    const VISIBLE2_0 = '0';
    const VISIBLE2_1 = '1';

    /** The enumerated values for the OBLIGATOIRE3 field */
    const OBLIGATOIRE3_0 = '0';
    const OBLIGATOIRE3_1 = '1';

    /** The enumerated values for the ACTIF3 field */
    const ACTIF3_0 = '0';
    const ACTIF3_1 = '1';

    /** The enumerated values for the VISIBLE3 field */
    const VISIBLE3_0 = '0';
    const VISIBLE3_1 = '1';

    /** The enumerated values for the OBLIGATOIRE4 field */
    const OBLIGATOIRE4_0 = '0';
    const OBLIGATOIRE4_1 = '1';

    /** The enumerated values for the ACTIF4 field */
    const ACTIF4_0 = '0';
    const ACTIF4_1 = '1';

    /** The enumerated values for the VISIBLE4 field */
    const VISIBLE4_0 = '0';
    const VISIBLE4_1 = '1';

    /** The enumerated values for the OBLIGATOIRE5 field */
    const OBLIGATOIRE5_0 = '0';
    const OBLIGATOIRE5_1 = '1';

    /** The enumerated values for the ACTIF5 field */
    const ACTIF5_0 = '0';
    const ACTIF5_1 = '1';

    /** The enumerated values for the VISIBLE5 field */
    const VISIBLE5_0 = '0';
    const VISIBLE5_1 = '1';

    /** The enumerated values for the VISIBLE_BOV1 field */
    const VISIBLE_BOV1_0 = '0';
    const VISIBLE_BOV1_1 = '1';

    /** The enumerated values for the VISIBLE_BOV2 field */
    const VISIBLE_BOV2_0 = '0';
    const VISIBLE_BOV2_1 = '1';

    /** The enumerated values for the VISIBLE_BOV3 field */
    const VISIBLE_BOV3_0 = '0';
    const VISIBLE_BOV3_1 = '1';

    /** The enumerated values for the VISIBLE_BOV4 field */
    const VISIBLE_BOV4_0 = '0';
    const VISIBLE_BOV4_1 = '1';

    /** The enumerated values for the VISIBLE_BOV5 field */
    const VISIBLE_BOV5_0 = '0';
    const VISIBLE_BOV5_1 = '1';

    /** The enumerated values for the VISIBLE_TABLEAU1 field */
    const VISIBLE_TABLEAU1_0 = '0';
    const VISIBLE_TABLEAU1_1 = '1';

    /** The enumerated values for the VISIBLE_TABLEAU2 field */
    const VISIBLE_TABLEAU2_0 = '0';
    const VISIBLE_TABLEAU2_1 = '1';

    /** The enumerated values for the VISIBLE_TABLEAU3 field */
    const VISIBLE_TABLEAU3_0 = '0';
    const VISIBLE_TABLEAU3_1 = '1';

    /** The enumerated values for the VISIBLE_TABLEAU4 field */
    const VISIBLE_TABLEAU4_0 = '0';
    const VISIBLE_TABLEAU4_1 = '1';

    /** The enumerated values for the VISIBLE_TABLEAU5 field */
    const VISIBLE_TABLEAU5_0 = '0';
    const VISIBLE_TABLEAU5_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ChampSupplementaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ChampSupplementaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ChampSupplementairePeer::$fieldNames[ChampSupplementairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdChampSupplementaire', 'IdOrganisme', 'IdTheme', 'IdAction', 'LabelFr1', 'LabelAr1', 'LabelCourt1', 'Type1', 'Obligatoire1', 'Actif1', 'Visible1', 'Emplacement1', 'LabelFr2', 'LabelAr2', 'LabelCourt2', 'Type2', 'Obligatoire2', 'Actif2', 'Visible2', 'Emplacement2', 'LabelFr3', 'LabelAr3', 'LabelCourt3', 'Type3', 'Obligatoire3', 'Actif3', 'Visible3', 'Emplacement3', 'LabelFr4', 'LabelAr4', 'LabelCourt4', 'Type4', 'Obligatoire4', 'Actif4', 'Visible4', 'Emplacement4', 'LabelFr5', 'LabelAr5', 'LabelCourt5', 'Type5', 'Obligatoire5', 'Actif5', 'Visible5', 'Emplacement5', 'ValeurListeFr1', 'ValeurListeAr1', 'ValeurListeFr2', 'ValeurListeAr2', 'ValeurListeFr3', 'ValeurListeAr3', 'ValeurListeFr4', 'ValeurListeAr4', 'ValeurListeFr5', 'ValeurListeAr5', 'Position1', 'Position2', 'Position3', 'Position4', 'Position5', 'VisibleBov1', 'VisibleBov2', 'VisibleBov3', 'VisibleBov4', 'VisibleBov5', 'VisibleTableau1', 'VisibleTableau2', 'VisibleTableau3', 'VisibleTableau4', 'VisibleTableau5', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idChampSupplementaire', 'idOrganisme', 'idTheme', 'idAction', 'labelFr1', 'labelAr1', 'labelCourt1', 'type1', 'obligatoire1', 'actif1', 'visible1', 'emplacement1', 'labelFr2', 'labelAr2', 'labelCourt2', 'type2', 'obligatoire2', 'actif2', 'visible2', 'emplacement2', 'labelFr3', 'labelAr3', 'labelCourt3', 'type3', 'obligatoire3', 'actif3', 'visible3', 'emplacement3', 'labelFr4', 'labelAr4', 'labelCourt4', 'type4', 'obligatoire4', 'actif4', 'visible4', 'emplacement4', 'labelFr5', 'labelAr5', 'labelCourt5', 'type5', 'obligatoire5', 'actif5', 'visible5', 'emplacement5', 'valeurListeFr1', 'valeurListeAr1', 'valeurListeFr2', 'valeurListeAr2', 'valeurListeFr3', 'valeurListeAr3', 'valeurListeFr4', 'valeurListeAr4', 'valeurListeFr5', 'valeurListeAr5', 'position1', 'position2', 'position3', 'position4', 'position5', 'visibleBov1', 'visibleBov2', 'visibleBov3', 'visibleBov4', 'visibleBov5', 'visibleTableau1', 'visibleTableau2', 'visibleTableau3', 'visibleTableau4', 'visibleTableau5', ),
        BasePeer::TYPE_COLNAME => array (ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, ChampSupplementairePeer::ID_ORGANISME, ChampSupplementairePeer::ID_THEME, ChampSupplementairePeer::ID_ACTION, ChampSupplementairePeer::LABEL_FR1, ChampSupplementairePeer::LABEL_AR1, ChampSupplementairePeer::LABEL_COURT1, ChampSupplementairePeer::TYPE1, ChampSupplementairePeer::OBLIGATOIRE1, ChampSupplementairePeer::ACTIF1, ChampSupplementairePeer::VISIBLE1, ChampSupplementairePeer::EMPLACEMENT1, ChampSupplementairePeer::LABEL_FR2, ChampSupplementairePeer::LABEL_AR2, ChampSupplementairePeer::LABEL_COURT2, ChampSupplementairePeer::TYPE2, ChampSupplementairePeer::OBLIGATOIRE2, ChampSupplementairePeer::ACTIF2, ChampSupplementairePeer::VISIBLE2, ChampSupplementairePeer::EMPLACEMENT2, ChampSupplementairePeer::LABEL_FR3, ChampSupplementairePeer::LABEL_AR3, ChampSupplementairePeer::LABEL_COURT3, ChampSupplementairePeer::TYPE3, ChampSupplementairePeer::OBLIGATOIRE3, ChampSupplementairePeer::ACTIF3, ChampSupplementairePeer::VISIBLE3, ChampSupplementairePeer::EMPLACEMENT3, ChampSupplementairePeer::LABEL_FR4, ChampSupplementairePeer::LABEL_AR4, ChampSupplementairePeer::LABEL_COURT4, ChampSupplementairePeer::TYPE4, ChampSupplementairePeer::OBLIGATOIRE4, ChampSupplementairePeer::ACTIF4, ChampSupplementairePeer::VISIBLE4, ChampSupplementairePeer::EMPLACEMENT4, ChampSupplementairePeer::LABEL_FR5, ChampSupplementairePeer::LABEL_AR5, ChampSupplementairePeer::LABEL_COURT5, ChampSupplementairePeer::TYPE5, ChampSupplementairePeer::OBLIGATOIRE5, ChampSupplementairePeer::ACTIF5, ChampSupplementairePeer::VISIBLE5, ChampSupplementairePeer::EMPLACEMENT5, ChampSupplementairePeer::VALEUR_LISTE_FR_1, ChampSupplementairePeer::VALEUR_LISTE_AR_1, ChampSupplementairePeer::VALEUR_LISTE_FR_2, ChampSupplementairePeer::VALEUR_LISTE_AR_2, ChampSupplementairePeer::VALEUR_LISTE_FR_3, ChampSupplementairePeer::VALEUR_LISTE_AR_3, ChampSupplementairePeer::VALEUR_LISTE_FR_4, ChampSupplementairePeer::VALEUR_LISTE_AR_4, ChampSupplementairePeer::VALEUR_LISTE_FR_5, ChampSupplementairePeer::VALEUR_LISTE_AR_5, ChampSupplementairePeer::POSITION1, ChampSupplementairePeer::POSITION2, ChampSupplementairePeer::POSITION3, ChampSupplementairePeer::POSITION4, ChampSupplementairePeer::POSITION5, ChampSupplementairePeer::VISIBLE_BOV1, ChampSupplementairePeer::VISIBLE_BOV2, ChampSupplementairePeer::VISIBLE_BOV3, ChampSupplementairePeer::VISIBLE_BOV4, ChampSupplementairePeer::VISIBLE_BOV5, ChampSupplementairePeer::VISIBLE_TABLEAU1, ChampSupplementairePeer::VISIBLE_TABLEAU2, ChampSupplementairePeer::VISIBLE_TABLEAU3, ChampSupplementairePeer::VISIBLE_TABLEAU4, ChampSupplementairePeer::VISIBLE_TABLEAU5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CHAMP_SUPPLEMENTAIRE', 'ID_ORGANISME', 'ID_THEME', 'ID_ACTION', 'LABEL_FR1', 'LABEL_AR1', 'LABEL_COURT1', 'TYPE1', 'OBLIGATOIRE1', 'ACTIF1', 'VISIBLE1', 'EMPLACEMENT1', 'LABEL_FR2', 'LABEL_AR2', 'LABEL_COURT2', 'TYPE2', 'OBLIGATOIRE2', 'ACTIF2', 'VISIBLE2', 'EMPLACEMENT2', 'LABEL_FR3', 'LABEL_AR3', 'LABEL_COURT3', 'TYPE3', 'OBLIGATOIRE3', 'ACTIF3', 'VISIBLE3', 'EMPLACEMENT3', 'LABEL_FR4', 'LABEL_AR4', 'LABEL_COURT4', 'TYPE4', 'OBLIGATOIRE4', 'ACTIF4', 'VISIBLE4', 'EMPLACEMENT4', 'LABEL_FR5', 'LABEL_AR5', 'LABEL_COURT5', 'TYPE5', 'OBLIGATOIRE5', 'ACTIF5', 'VISIBLE5', 'EMPLACEMENT5', 'VALEUR_LISTE_FR_1', 'VALEUR_LISTE_AR_1', 'VALEUR_LISTE_FR_2', 'VALEUR_LISTE_AR_2', 'VALEUR_LISTE_FR_3', 'VALEUR_LISTE_AR_3', 'VALEUR_LISTE_FR_4', 'VALEUR_LISTE_AR_4', 'VALEUR_LISTE_FR_5', 'VALEUR_LISTE_AR_5', 'POSITION1', 'POSITION2', 'POSITION3', 'POSITION4', 'POSITION5', 'VISIBLE_BOV1', 'VISIBLE_BOV2', 'VISIBLE_BOV3', 'VISIBLE_BOV4', 'VISIBLE_BOV5', 'VISIBLE_TABLEAU1', 'VISIBLE_TABLEAU2', 'VISIBLE_TABLEAU3', 'VISIBLE_TABLEAU4', 'VISIBLE_TABLEAU5', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_CHAMP_SUPPLEMENTAIRE', 'ID_ORGANISME', 'ID_THEME', 'ID_ACTION', 'LABEL_FR1', 'LABEL_AR1', 'LABEL_COURT1', 'TYPE1', 'OBLIGATOIRE1', 'ACTIF1', 'VISIBLE1', 'EMPLACEMENT1', 'LABEL_FR2', 'LABEL_AR2', 'LABEL_COURT2', 'TYPE2', 'OBLIGATOIRE2', 'ACTIF2', 'VISIBLE2', 'EMPLACEMENT2', 'LABEL_FR3', 'LABEL_AR3', 'LABEL_COURT3', 'TYPE3', 'OBLIGATOIRE3', 'ACTIF3', 'VISIBLE3', 'EMPLACEMENT3', 'LABEL_FR4', 'LABEL_AR4', 'LABEL_COURT4', 'TYPE4', 'OBLIGATOIRE4', 'ACTIF4', 'VISIBLE4', 'EMPLACEMENT4', 'LABEL_FR5', 'LABEL_AR5', 'LABEL_COURT5', 'TYPE5', 'OBLIGATOIRE5', 'ACTIF5', 'VISIBLE5', 'EMPLACEMENT5', 'VALEUR_LISTE_FR_1', 'VALEUR_LISTE_AR_1', 'VALEUR_LISTE_FR_2', 'VALEUR_LISTE_AR_2', 'VALEUR_LISTE_FR_3', 'VALEUR_LISTE_AR_3', 'VALEUR_LISTE_FR_4', 'VALEUR_LISTE_AR_4', 'VALEUR_LISTE_FR_5', 'VALEUR_LISTE_AR_5', 'POSITION1', 'POSITION2', 'POSITION3', 'POSITION4', 'POSITION5', 'VISIBLE_BOV1', 'VISIBLE_BOV2', 'VISIBLE_BOV3', 'VISIBLE_BOV4', 'VISIBLE_BOV5', 'VISIBLE_TABLEAU1', 'VISIBLE_TABLEAU2', 'VISIBLE_TABLEAU3', 'VISIBLE_TABLEAU4', 'VISIBLE_TABLEAU5', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ChampSupplementairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdChampSupplementaire' => 0, 'IdOrganisme' => 1, 'IdTheme' => 2, 'IdAction' => 3, 'LabelFr1' => 4, 'LabelAr1' => 5, 'LabelCourt1' => 6, 'Type1' => 7, 'Obligatoire1' => 8, 'Actif1' => 9, 'Visible1' => 10, 'Emplacement1' => 11, 'LabelFr2' => 12, 'LabelAr2' => 13, 'LabelCourt2' => 14, 'Type2' => 15, 'Obligatoire2' => 16, 'Actif2' => 17, 'Visible2' => 18, 'Emplacement2' => 19, 'LabelFr3' => 20, 'LabelAr3' => 21, 'LabelCourt3' => 22, 'Type3' => 23, 'Obligatoire3' => 24, 'Actif3' => 25, 'Visible3' => 26, 'Emplacement3' => 27, 'LabelFr4' => 28, 'LabelAr4' => 29, 'LabelCourt4' => 30, 'Type4' => 31, 'Obligatoire4' => 32, 'Actif4' => 33, 'Visible4' => 34, 'Emplacement4' => 35, 'LabelFr5' => 36, 'LabelAr5' => 37, 'LabelCourt5' => 38, 'Type5' => 39, 'Obligatoire5' => 40, 'Actif5' => 41, 'Visible5' => 42, 'Emplacement5' => 43, 'ValeurListeFr1' => 44, 'ValeurListeAr1' => 45, 'ValeurListeFr2' => 46, 'ValeurListeAr2' => 47, 'ValeurListeFr3' => 48, 'ValeurListeAr3' => 49, 'ValeurListeFr4' => 50, 'ValeurListeAr4' => 51, 'ValeurListeFr5' => 52, 'ValeurListeAr5' => 53, 'Position1' => 54, 'Position2' => 55, 'Position3' => 56, 'Position4' => 57, 'Position5' => 58, 'VisibleBov1' => 59, 'VisibleBov2' => 60, 'VisibleBov3' => 61, 'VisibleBov4' => 62, 'VisibleBov5' => 63, 'VisibleTableau1' => 64, 'VisibleTableau2' => 65, 'VisibleTableau3' => 66, 'VisibleTableau4' => 67, 'VisibleTableau5' => 68, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idChampSupplementaire' => 0, 'idOrganisme' => 1, 'idTheme' => 2, 'idAction' => 3, 'labelFr1' => 4, 'labelAr1' => 5, 'labelCourt1' => 6, 'type1' => 7, 'obligatoire1' => 8, 'actif1' => 9, 'visible1' => 10, 'emplacement1' => 11, 'labelFr2' => 12, 'labelAr2' => 13, 'labelCourt2' => 14, 'type2' => 15, 'obligatoire2' => 16, 'actif2' => 17, 'visible2' => 18, 'emplacement2' => 19, 'labelFr3' => 20, 'labelAr3' => 21, 'labelCourt3' => 22, 'type3' => 23, 'obligatoire3' => 24, 'actif3' => 25, 'visible3' => 26, 'emplacement3' => 27, 'labelFr4' => 28, 'labelAr4' => 29, 'labelCourt4' => 30, 'type4' => 31, 'obligatoire4' => 32, 'actif4' => 33, 'visible4' => 34, 'emplacement4' => 35, 'labelFr5' => 36, 'labelAr5' => 37, 'labelCourt5' => 38, 'type5' => 39, 'obligatoire5' => 40, 'actif5' => 41, 'visible5' => 42, 'emplacement5' => 43, 'valeurListeFr1' => 44, 'valeurListeAr1' => 45, 'valeurListeFr2' => 46, 'valeurListeAr2' => 47, 'valeurListeFr3' => 48, 'valeurListeAr3' => 49, 'valeurListeFr4' => 50, 'valeurListeAr4' => 51, 'valeurListeFr5' => 52, 'valeurListeAr5' => 53, 'position1' => 54, 'position2' => 55, 'position3' => 56, 'position4' => 57, 'position5' => 58, 'visibleBov1' => 59, 'visibleBov2' => 60, 'visibleBov3' => 61, 'visibleBov4' => 62, 'visibleBov5' => 63, 'visibleTableau1' => 64, 'visibleTableau2' => 65, 'visibleTableau3' => 66, 'visibleTableau4' => 67, 'visibleTableau5' => 68, ),
        BasePeer::TYPE_COLNAME => array (ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE => 0, ChampSupplementairePeer::ID_ORGANISME => 1, ChampSupplementairePeer::ID_THEME => 2, ChampSupplementairePeer::ID_ACTION => 3, ChampSupplementairePeer::LABEL_FR1 => 4, ChampSupplementairePeer::LABEL_AR1 => 5, ChampSupplementairePeer::LABEL_COURT1 => 6, ChampSupplementairePeer::TYPE1 => 7, ChampSupplementairePeer::OBLIGATOIRE1 => 8, ChampSupplementairePeer::ACTIF1 => 9, ChampSupplementairePeer::VISIBLE1 => 10, ChampSupplementairePeer::EMPLACEMENT1 => 11, ChampSupplementairePeer::LABEL_FR2 => 12, ChampSupplementairePeer::LABEL_AR2 => 13, ChampSupplementairePeer::LABEL_COURT2 => 14, ChampSupplementairePeer::TYPE2 => 15, ChampSupplementairePeer::OBLIGATOIRE2 => 16, ChampSupplementairePeer::ACTIF2 => 17, ChampSupplementairePeer::VISIBLE2 => 18, ChampSupplementairePeer::EMPLACEMENT2 => 19, ChampSupplementairePeer::LABEL_FR3 => 20, ChampSupplementairePeer::LABEL_AR3 => 21, ChampSupplementairePeer::LABEL_COURT3 => 22, ChampSupplementairePeer::TYPE3 => 23, ChampSupplementairePeer::OBLIGATOIRE3 => 24, ChampSupplementairePeer::ACTIF3 => 25, ChampSupplementairePeer::VISIBLE3 => 26, ChampSupplementairePeer::EMPLACEMENT3 => 27, ChampSupplementairePeer::LABEL_FR4 => 28, ChampSupplementairePeer::LABEL_AR4 => 29, ChampSupplementairePeer::LABEL_COURT4 => 30, ChampSupplementairePeer::TYPE4 => 31, ChampSupplementairePeer::OBLIGATOIRE4 => 32, ChampSupplementairePeer::ACTIF4 => 33, ChampSupplementairePeer::VISIBLE4 => 34, ChampSupplementairePeer::EMPLACEMENT4 => 35, ChampSupplementairePeer::LABEL_FR5 => 36, ChampSupplementairePeer::LABEL_AR5 => 37, ChampSupplementairePeer::LABEL_COURT5 => 38, ChampSupplementairePeer::TYPE5 => 39, ChampSupplementairePeer::OBLIGATOIRE5 => 40, ChampSupplementairePeer::ACTIF5 => 41, ChampSupplementairePeer::VISIBLE5 => 42, ChampSupplementairePeer::EMPLACEMENT5 => 43, ChampSupplementairePeer::VALEUR_LISTE_FR_1 => 44, ChampSupplementairePeer::VALEUR_LISTE_AR_1 => 45, ChampSupplementairePeer::VALEUR_LISTE_FR_2 => 46, ChampSupplementairePeer::VALEUR_LISTE_AR_2 => 47, ChampSupplementairePeer::VALEUR_LISTE_FR_3 => 48, ChampSupplementairePeer::VALEUR_LISTE_AR_3 => 49, ChampSupplementairePeer::VALEUR_LISTE_FR_4 => 50, ChampSupplementairePeer::VALEUR_LISTE_AR_4 => 51, ChampSupplementairePeer::VALEUR_LISTE_FR_5 => 52, ChampSupplementairePeer::VALEUR_LISTE_AR_5 => 53, ChampSupplementairePeer::POSITION1 => 54, ChampSupplementairePeer::POSITION2 => 55, ChampSupplementairePeer::POSITION3 => 56, ChampSupplementairePeer::POSITION4 => 57, ChampSupplementairePeer::POSITION5 => 58, ChampSupplementairePeer::VISIBLE_BOV1 => 59, ChampSupplementairePeer::VISIBLE_BOV2 => 60, ChampSupplementairePeer::VISIBLE_BOV3 => 61, ChampSupplementairePeer::VISIBLE_BOV4 => 62, ChampSupplementairePeer::VISIBLE_BOV5 => 63, ChampSupplementairePeer::VISIBLE_TABLEAU1 => 64, ChampSupplementairePeer::VISIBLE_TABLEAU2 => 65, ChampSupplementairePeer::VISIBLE_TABLEAU3 => 66, ChampSupplementairePeer::VISIBLE_TABLEAU4 => 67, ChampSupplementairePeer::VISIBLE_TABLEAU5 => 68, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CHAMP_SUPPLEMENTAIRE' => 0, 'ID_ORGANISME' => 1, 'ID_THEME' => 2, 'ID_ACTION' => 3, 'LABEL_FR1' => 4, 'LABEL_AR1' => 5, 'LABEL_COURT1' => 6, 'TYPE1' => 7, 'OBLIGATOIRE1' => 8, 'ACTIF1' => 9, 'VISIBLE1' => 10, 'EMPLACEMENT1' => 11, 'LABEL_FR2' => 12, 'LABEL_AR2' => 13, 'LABEL_COURT2' => 14, 'TYPE2' => 15, 'OBLIGATOIRE2' => 16, 'ACTIF2' => 17, 'VISIBLE2' => 18, 'EMPLACEMENT2' => 19, 'LABEL_FR3' => 20, 'LABEL_AR3' => 21, 'LABEL_COURT3' => 22, 'TYPE3' => 23, 'OBLIGATOIRE3' => 24, 'ACTIF3' => 25, 'VISIBLE3' => 26, 'EMPLACEMENT3' => 27, 'LABEL_FR4' => 28, 'LABEL_AR4' => 29, 'LABEL_COURT4' => 30, 'TYPE4' => 31, 'OBLIGATOIRE4' => 32, 'ACTIF4' => 33, 'VISIBLE4' => 34, 'EMPLACEMENT4' => 35, 'LABEL_FR5' => 36, 'LABEL_AR5' => 37, 'LABEL_COURT5' => 38, 'TYPE5' => 39, 'OBLIGATOIRE5' => 40, 'ACTIF5' => 41, 'VISIBLE5' => 42, 'EMPLACEMENT5' => 43, 'VALEUR_LISTE_FR_1' => 44, 'VALEUR_LISTE_AR_1' => 45, 'VALEUR_LISTE_FR_2' => 46, 'VALEUR_LISTE_AR_2' => 47, 'VALEUR_LISTE_FR_3' => 48, 'VALEUR_LISTE_AR_3' => 49, 'VALEUR_LISTE_FR_4' => 50, 'VALEUR_LISTE_AR_4' => 51, 'VALEUR_LISTE_FR_5' => 52, 'VALEUR_LISTE_AR_5' => 53, 'POSITION1' => 54, 'POSITION2' => 55, 'POSITION3' => 56, 'POSITION4' => 57, 'POSITION5' => 58, 'VISIBLE_BOV1' => 59, 'VISIBLE_BOV2' => 60, 'VISIBLE_BOV3' => 61, 'VISIBLE_BOV4' => 62, 'VISIBLE_BOV5' => 63, 'VISIBLE_TABLEAU1' => 64, 'VISIBLE_TABLEAU2' => 65, 'VISIBLE_TABLEAU3' => 66, 'VISIBLE_TABLEAU4' => 67, 'VISIBLE_TABLEAU5' => 68, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_CHAMP_SUPPLEMENTAIRE' => 0, 'ID_ORGANISME' => 1, 'ID_THEME' => 2, 'ID_ACTION' => 3, 'LABEL_FR1' => 4, 'LABEL_AR1' => 5, 'LABEL_COURT1' => 6, 'TYPE1' => 7, 'OBLIGATOIRE1' => 8, 'ACTIF1' => 9, 'VISIBLE1' => 10, 'EMPLACEMENT1' => 11, 'LABEL_FR2' => 12, 'LABEL_AR2' => 13, 'LABEL_COURT2' => 14, 'TYPE2' => 15, 'OBLIGATOIRE2' => 16, 'ACTIF2' => 17, 'VISIBLE2' => 18, 'EMPLACEMENT2' => 19, 'LABEL_FR3' => 20, 'LABEL_AR3' => 21, 'LABEL_COURT3' => 22, 'TYPE3' => 23, 'OBLIGATOIRE3' => 24, 'ACTIF3' => 25, 'VISIBLE3' => 26, 'EMPLACEMENT3' => 27, 'LABEL_FR4' => 28, 'LABEL_AR4' => 29, 'LABEL_COURT4' => 30, 'TYPE4' => 31, 'OBLIGATOIRE4' => 32, 'ACTIF4' => 33, 'VISIBLE4' => 34, 'EMPLACEMENT4' => 35, 'LABEL_FR5' => 36, 'LABEL_AR5' => 37, 'LABEL_COURT5' => 38, 'TYPE5' => 39, 'OBLIGATOIRE5' => 40, 'ACTIF5' => 41, 'VISIBLE5' => 42, 'EMPLACEMENT5' => 43, 'VALEUR_LISTE_FR_1' => 44, 'VALEUR_LISTE_AR_1' => 45, 'VALEUR_LISTE_FR_2' => 46, 'VALEUR_LISTE_AR_2' => 47, 'VALEUR_LISTE_FR_3' => 48, 'VALEUR_LISTE_AR_3' => 49, 'VALEUR_LISTE_FR_4' => 50, 'VALEUR_LISTE_AR_4' => 51, 'VALEUR_LISTE_FR_5' => 52, 'VALEUR_LISTE_AR_5' => 53, 'POSITION1' => 54, 'POSITION2' => 55, 'POSITION3' => 56, 'POSITION4' => 57, 'POSITION5' => 58, 'VISIBLE_BOV1' => 59, 'VISIBLE_BOV2' => 60, 'VISIBLE_BOV3' => 61, 'VISIBLE_BOV4' => 62, 'VISIBLE_BOV5' => 63, 'VISIBLE_TABLEAU1' => 64, 'VISIBLE_TABLEAU2' => 65, 'VISIBLE_TABLEAU3' => 66, 'VISIBLE_TABLEAU4' => 67, 'VISIBLE_TABLEAU5' => 68, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ChampSupplementairePeer::OBLIGATOIRE1 => array(
            ChampSupplementairePeer::OBLIGATOIRE1_0,
            ChampSupplementairePeer::OBLIGATOIRE1_1,
        ),
        ChampSupplementairePeer::ACTIF1 => array(
            ChampSupplementairePeer::ACTIF1_0,
            ChampSupplementairePeer::ACTIF1_1,
        ),
        ChampSupplementairePeer::VISIBLE1 => array(
            ChampSupplementairePeer::VISIBLE1_0,
            ChampSupplementairePeer::VISIBLE1_1,
        ),
        ChampSupplementairePeer::OBLIGATOIRE2 => array(
            ChampSupplementairePeer::OBLIGATOIRE2_0,
            ChampSupplementairePeer::OBLIGATOIRE2_1,
        ),
        ChampSupplementairePeer::ACTIF2 => array(
            ChampSupplementairePeer::ACTIF2_0,
            ChampSupplementairePeer::ACTIF2_1,
        ),
        ChampSupplementairePeer::VISIBLE2 => array(
            ChampSupplementairePeer::VISIBLE2_0,
            ChampSupplementairePeer::VISIBLE2_1,
        ),
        ChampSupplementairePeer::OBLIGATOIRE3 => array(
            ChampSupplementairePeer::OBLIGATOIRE3_0,
            ChampSupplementairePeer::OBLIGATOIRE3_1,
        ),
        ChampSupplementairePeer::ACTIF3 => array(
            ChampSupplementairePeer::ACTIF3_0,
            ChampSupplementairePeer::ACTIF3_1,
        ),
        ChampSupplementairePeer::VISIBLE3 => array(
            ChampSupplementairePeer::VISIBLE3_0,
            ChampSupplementairePeer::VISIBLE3_1,
        ),
        ChampSupplementairePeer::OBLIGATOIRE4 => array(
            ChampSupplementairePeer::OBLIGATOIRE4_0,
            ChampSupplementairePeer::OBLIGATOIRE4_1,
        ),
        ChampSupplementairePeer::ACTIF4 => array(
            ChampSupplementairePeer::ACTIF4_0,
            ChampSupplementairePeer::ACTIF4_1,
        ),
        ChampSupplementairePeer::VISIBLE4 => array(
            ChampSupplementairePeer::VISIBLE4_0,
            ChampSupplementairePeer::VISIBLE4_1,
        ),
        ChampSupplementairePeer::OBLIGATOIRE5 => array(
            ChampSupplementairePeer::OBLIGATOIRE5_0,
            ChampSupplementairePeer::OBLIGATOIRE5_1,
        ),
        ChampSupplementairePeer::ACTIF5 => array(
            ChampSupplementairePeer::ACTIF5_0,
            ChampSupplementairePeer::ACTIF5_1,
        ),
        ChampSupplementairePeer::VISIBLE5 => array(
            ChampSupplementairePeer::VISIBLE5_0,
            ChampSupplementairePeer::VISIBLE5_1,
        ),
        ChampSupplementairePeer::VISIBLE_BOV1 => array(
            ChampSupplementairePeer::VISIBLE_BOV1_0,
            ChampSupplementairePeer::VISIBLE_BOV1_1,
        ),
        ChampSupplementairePeer::VISIBLE_BOV2 => array(
            ChampSupplementairePeer::VISIBLE_BOV2_0,
            ChampSupplementairePeer::VISIBLE_BOV2_1,
        ),
        ChampSupplementairePeer::VISIBLE_BOV3 => array(
            ChampSupplementairePeer::VISIBLE_BOV3_0,
            ChampSupplementairePeer::VISIBLE_BOV3_1,
        ),
        ChampSupplementairePeer::VISIBLE_BOV4 => array(
            ChampSupplementairePeer::VISIBLE_BOV4_0,
            ChampSupplementairePeer::VISIBLE_BOV4_1,
        ),
        ChampSupplementairePeer::VISIBLE_BOV5 => array(
            ChampSupplementairePeer::VISIBLE_BOV5_0,
            ChampSupplementairePeer::VISIBLE_BOV5_1,
        ),
        ChampSupplementairePeer::VISIBLE_TABLEAU1 => array(
            ChampSupplementairePeer::VISIBLE_TABLEAU1_0,
            ChampSupplementairePeer::VISIBLE_TABLEAU1_1,
        ),
        ChampSupplementairePeer::VISIBLE_TABLEAU2 => array(
            ChampSupplementairePeer::VISIBLE_TABLEAU2_0,
            ChampSupplementairePeer::VISIBLE_TABLEAU2_1,
        ),
        ChampSupplementairePeer::VISIBLE_TABLEAU3 => array(
            ChampSupplementairePeer::VISIBLE_TABLEAU3_0,
            ChampSupplementairePeer::VISIBLE_TABLEAU3_1,
        ),
        ChampSupplementairePeer::VISIBLE_TABLEAU4 => array(
            ChampSupplementairePeer::VISIBLE_TABLEAU4_0,
            ChampSupplementairePeer::VISIBLE_TABLEAU4_1,
        ),
        ChampSupplementairePeer::VISIBLE_TABLEAU5 => array(
            ChampSupplementairePeer::VISIBLE_TABLEAU5_0,
            ChampSupplementairePeer::VISIBLE_TABLEAU5_1,
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
        $toNames = ChampSupplementairePeer::getFieldNames($toType);
        $key = isset(ChampSupplementairePeer::$fieldKeys[$fromType][$name]) ? ChampSupplementairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ChampSupplementairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ChampSupplementairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ChampSupplementairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ChampSupplementairePeer::$enumValueSets;
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
        $valueSets = ChampSupplementairePeer::getValueSets();

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
        $values = ChampSupplementairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ChampSupplementairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ChampSupplementairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE);
            $criteria->addSelectColumn(ChampSupplementairePeer::ID_ORGANISME);
            $criteria->addSelectColumn(ChampSupplementairePeer::ID_THEME);
            $criteria->addSelectColumn(ChampSupplementairePeer::ID_ACTION);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_FR1);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_AR1);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_COURT1);
            $criteria->addSelectColumn(ChampSupplementairePeer::TYPE1);
            $criteria->addSelectColumn(ChampSupplementairePeer::OBLIGATOIRE1);
            $criteria->addSelectColumn(ChampSupplementairePeer::ACTIF1);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE1);
            $criteria->addSelectColumn(ChampSupplementairePeer::EMPLACEMENT1);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_FR2);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_AR2);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_COURT2);
            $criteria->addSelectColumn(ChampSupplementairePeer::TYPE2);
            $criteria->addSelectColumn(ChampSupplementairePeer::OBLIGATOIRE2);
            $criteria->addSelectColumn(ChampSupplementairePeer::ACTIF2);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE2);
            $criteria->addSelectColumn(ChampSupplementairePeer::EMPLACEMENT2);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_FR3);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_AR3);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_COURT3);
            $criteria->addSelectColumn(ChampSupplementairePeer::TYPE3);
            $criteria->addSelectColumn(ChampSupplementairePeer::OBLIGATOIRE3);
            $criteria->addSelectColumn(ChampSupplementairePeer::ACTIF3);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE3);
            $criteria->addSelectColumn(ChampSupplementairePeer::EMPLACEMENT3);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_FR4);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_AR4);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_COURT4);
            $criteria->addSelectColumn(ChampSupplementairePeer::TYPE4);
            $criteria->addSelectColumn(ChampSupplementairePeer::OBLIGATOIRE4);
            $criteria->addSelectColumn(ChampSupplementairePeer::ACTIF4);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE4);
            $criteria->addSelectColumn(ChampSupplementairePeer::EMPLACEMENT4);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_FR5);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_AR5);
            $criteria->addSelectColumn(ChampSupplementairePeer::LABEL_COURT5);
            $criteria->addSelectColumn(ChampSupplementairePeer::TYPE5);
            $criteria->addSelectColumn(ChampSupplementairePeer::OBLIGATOIRE5);
            $criteria->addSelectColumn(ChampSupplementairePeer::ACTIF5);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE5);
            $criteria->addSelectColumn(ChampSupplementairePeer::EMPLACEMENT5);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_FR_1);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_AR_1);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_FR_2);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_AR_2);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_FR_3);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_AR_3);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_FR_4);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_AR_4);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_FR_5);
            $criteria->addSelectColumn(ChampSupplementairePeer::VALEUR_LISTE_AR_5);
            $criteria->addSelectColumn(ChampSupplementairePeer::POSITION1);
            $criteria->addSelectColumn(ChampSupplementairePeer::POSITION2);
            $criteria->addSelectColumn(ChampSupplementairePeer::POSITION3);
            $criteria->addSelectColumn(ChampSupplementairePeer::POSITION4);
            $criteria->addSelectColumn(ChampSupplementairePeer::POSITION5);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_BOV1);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_BOV2);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_BOV3);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_BOV4);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_BOV5);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_TABLEAU1);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_TABLEAU2);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_TABLEAU3);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_TABLEAU4);
            $criteria->addSelectColumn(ChampSupplementairePeer::VISIBLE_TABLEAU5);
        } else {
            $criteria->addSelectColumn($alias . '.ID_CHAMP_SUPPLEMENTAIRE');
            $criteria->addSelectColumn($alias . '.ID_ORGANISME');
            $criteria->addSelectColumn($alias . '.ID_THEME');
            $criteria->addSelectColumn($alias . '.ID_ACTION');
            $criteria->addSelectColumn($alias . '.LABEL_FR1');
            $criteria->addSelectColumn($alias . '.LABEL_AR1');
            $criteria->addSelectColumn($alias . '.LABEL_COURT1');
            $criteria->addSelectColumn($alias . '.TYPE1');
            $criteria->addSelectColumn($alias . '.OBLIGATOIRE1');
            $criteria->addSelectColumn($alias . '.ACTIF1');
            $criteria->addSelectColumn($alias . '.VISIBLE1');
            $criteria->addSelectColumn($alias . '.EMPLACEMENT1');
            $criteria->addSelectColumn($alias . '.LABEL_FR2');
            $criteria->addSelectColumn($alias . '.LABEL_AR2');
            $criteria->addSelectColumn($alias . '.LABEL_COURT2');
            $criteria->addSelectColumn($alias . '.TYPE2');
            $criteria->addSelectColumn($alias . '.OBLIGATOIRE2');
            $criteria->addSelectColumn($alias . '.ACTIF2');
            $criteria->addSelectColumn($alias . '.VISIBLE2');
            $criteria->addSelectColumn($alias . '.EMPLACEMENT2');
            $criteria->addSelectColumn($alias . '.LABEL_FR3');
            $criteria->addSelectColumn($alias . '.LABEL_AR3');
            $criteria->addSelectColumn($alias . '.LABEL_COURT3');
            $criteria->addSelectColumn($alias . '.TYPE3');
            $criteria->addSelectColumn($alias . '.OBLIGATOIRE3');
            $criteria->addSelectColumn($alias . '.ACTIF3');
            $criteria->addSelectColumn($alias . '.VISIBLE3');
            $criteria->addSelectColumn($alias . '.EMPLACEMENT3');
            $criteria->addSelectColumn($alias . '.LABEL_FR4');
            $criteria->addSelectColumn($alias . '.LABEL_AR4');
            $criteria->addSelectColumn($alias . '.LABEL_COURT4');
            $criteria->addSelectColumn($alias . '.TYPE4');
            $criteria->addSelectColumn($alias . '.OBLIGATOIRE4');
            $criteria->addSelectColumn($alias . '.ACTIF4');
            $criteria->addSelectColumn($alias . '.VISIBLE4');
            $criteria->addSelectColumn($alias . '.EMPLACEMENT4');
            $criteria->addSelectColumn($alias . '.LABEL_FR5');
            $criteria->addSelectColumn($alias . '.LABEL_AR5');
            $criteria->addSelectColumn($alias . '.LABEL_COURT5');
            $criteria->addSelectColumn($alias . '.TYPE5');
            $criteria->addSelectColumn($alias . '.OBLIGATOIRE5');
            $criteria->addSelectColumn($alias . '.ACTIF5');
            $criteria->addSelectColumn($alias . '.VISIBLE5');
            $criteria->addSelectColumn($alias . '.EMPLACEMENT5');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_FR_1');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_AR_1');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_FR_2');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_AR_2');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_FR_3');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_AR_3');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_FR_4');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_AR_4');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_FR_5');
            $criteria->addSelectColumn($alias . '.VALEUR_LISTE_AR_5');
            $criteria->addSelectColumn($alias . '.POSITION1');
            $criteria->addSelectColumn($alias . '.POSITION2');
            $criteria->addSelectColumn($alias . '.POSITION3');
            $criteria->addSelectColumn($alias . '.POSITION4');
            $criteria->addSelectColumn($alias . '.POSITION5');
            $criteria->addSelectColumn($alias . '.VISIBLE_BOV1');
            $criteria->addSelectColumn($alias . '.VISIBLE_BOV2');
            $criteria->addSelectColumn($alias . '.VISIBLE_BOV3');
            $criteria->addSelectColumn($alias . '.VISIBLE_BOV4');
            $criteria->addSelectColumn($alias . '.VISIBLE_BOV5');
            $criteria->addSelectColumn($alias . '.VISIBLE_TABLEAU1');
            $criteria->addSelectColumn($alias . '.VISIBLE_TABLEAU2');
            $criteria->addSelectColumn($alias . '.VISIBLE_TABLEAU3');
            $criteria->addSelectColumn($alias . '.VISIBLE_TABLEAU4');
            $criteria->addSelectColumn($alias . '.VISIBLE_TABLEAU5');
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
        $criteria->setPrimaryTableName(ChampSupplementairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ChampSupplementairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ChampSupplementairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ChampSupplementaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ChampSupplementairePeer::doSelect($critcopy, $con);
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
        return ChampSupplementairePeer::populateObjects(ChampSupplementairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ChampSupplementairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ChampSupplementairePeer::DATABASE_NAME);

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
     * @param      ChampSupplementaire $obj A ChampSupplementaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdChampSupplementaire();
            } // if key === null
            ChampSupplementairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ChampSupplementaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ChampSupplementaire) {
                $key = (string) $value->getIdChampSupplementaire();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ChampSupplementaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ChampSupplementairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ChampSupplementaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ChampSupplementairePeer::$instances[$key])) {
                return ChampSupplementairePeer::$instances[$key];
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
        foreach (ChampSupplementairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ChampSupplementairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to champ_supplementaire
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
        $cls = ChampSupplementairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ChampSupplementairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ChampSupplementairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ChampSupplementairePeer::addInstanceToPool($obj, $key);
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
     * @return array (ChampSupplementaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ChampSupplementairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ChampSupplementairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ChampSupplementairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ChampSupplementairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ChampSupplementairePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ChampSupplementairePeer::DATABASE_NAME)->getTable(ChampSupplementairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseChampSupplementairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseChampSupplementairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ChampSupplementaireTableMap());
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
        return ChampSupplementairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ChampSupplementaire or Criteria object.
     *
     * @param      mixed $values Criteria or ChampSupplementaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ChampSupplementaire object
        }

        if ($criteria->containsKey(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE) && $criteria->keyContainsValue(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ChampSupplementairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ChampSupplementaire or Criteria object.
     *
     * @param      mixed $values Criteria or ChampSupplementaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE);
            $value = $criteria->remove(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE);
            if ($value) {
                $selectCriteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ChampSupplementairePeer::TABLE_NAME);
            }

        } else { // $values is ChampSupplementaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ChampSupplementairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the champ_supplementaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ChampSupplementairePeer::TABLE_NAME, $con, ChampSupplementairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ChampSupplementairePeer::clearInstancePool();
            ChampSupplementairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ChampSupplementaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ChampSupplementaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ChampSupplementairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ChampSupplementaire) { // it's a model object
            // invalidate the cache for this single object
            ChampSupplementairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);
            $criteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ChampSupplementairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ChampSupplementairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ChampSupplementairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ChampSupplementaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ChampSupplementaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ChampSupplementairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ChampSupplementairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ChampSupplementairePeer::DATABASE_NAME, ChampSupplementairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ChampSupplementaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ChampSupplementairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);
        $criteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $pk);

        $v = ChampSupplementairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ChampSupplementaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);
            $criteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $pks, Criteria::IN);
            $objs = ChampSupplementairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseChampSupplementairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseChampSupplementairePeer::buildTableMap();

