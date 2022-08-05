<?php


/**
 * Base static class for performing query and update operations on the 'exec_configuration_formulaire' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecConfigurationFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_configuration_formulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecConfigurationFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecConfigurationFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id field */
    const ID = 'exec_configuration_formulaire.id';

    /** the column name for the id_type_contrat field */
    const ID_TYPE_CONTRAT = 'exec_configuration_formulaire.id_type_contrat';

    /** the column name for the montant_avance field */
    const MONTANT_AVANCE = 'exec_configuration_formulaire.montant_avance';

    /** the column name for the penalite field */
    const PENALITE = 'exec_configuration_formulaire.penalite';

    /** the column name for the delai_partiel field */
    const DELAI_PARTIEL = 'exec_configuration_formulaire.delai_partiel';

    /** the column name for the os_par_phase field */
    const OS_PAR_PHASE = 'exec_configuration_formulaire.os_par_phase';

    /** the column name for the montant_caution_definitive field */
    const MONTANT_CAUTION_DEFINITIVE = 'exec_configuration_formulaire.montant_caution_definitive';

    /** the column name for the retenue_garantie field */
    const RETENUE_GARANTIE = 'exec_configuration_formulaire.retenue_garantie';

    /** the column name for the periode_garantie field */
    const PERIODE_GARANTIE = 'exec_configuration_formulaire.periode_garantie';

    /** the column name for the decomposition_phase field */
    const DECOMPOSITION_PHASE = 'exec_configuration_formulaire.decomposition_phase';

    /** the column name for the checkliste_livrable field */
    const CHECKLISTE_LIVRABLE = 'exec_configuration_formulaire.checkliste_livrable';

    /** the column name for the date_accusee field */
    const DATE_ACCUSEE = 'exec_configuration_formulaire.date_accusee';

    /** the column name for the date_notification field */
    const DATE_NOTIFICATION = 'exec_configuration_formulaire.date_notification';

    /** the column name for the mode_passaton field */
    const MODE_PASSATON = 'exec_configuration_formulaire.mode_passaton';

    /** the column name for the numero_consultation field */
    const NUMERO_CONSULTATION = 'exec_configuration_formulaire.numero_consultation';

    /** the column name for the reconductible field */
    const RECONDUCTIBLE = 'exec_configuration_formulaire.reconductible';

    /** the column name for the gestion_reception field */
    const GESTION_RECEPTION = 'exec_configuration_formulaire.gestion_reception';

    /** the column name for the gestion_litige field */
    const GESTION_LITIGE = 'exec_configuration_formulaire.gestion_litige';

    /** the column name for the porte_reception field */
    const PORTE_RECEPTION = 'exec_configuration_formulaire.porte_reception';

    /** the column name for the type_reception field */
    const TYPE_RECEPTION = 'exec_configuration_formulaire.type_reception';

    /** The enumerated values for the montant_avance field */
    const MONTANT_AVANCE_0 = '0';
    const MONTANT_AVANCE_1 = '1';

    /** The enumerated values for the penalite field */
    const PENALITE_0 = '0';
    const PENALITE_1 = '1';

    /** The enumerated values for the delai_partiel field */
    const DELAI_PARTIEL_0 = '0';
    const DELAI_PARTIEL_1 = '1';

    /** The enumerated values for the os_par_phase field */
    const OS_PAR_PHASE_0 = '0';
    const OS_PAR_PHASE_1 = '1';

    /** The enumerated values for the montant_caution_definitive field */
    const MONTANT_CAUTION_DEFINITIVE_0 = '0';
    const MONTANT_CAUTION_DEFINITIVE_1 = '1';

    /** The enumerated values for the retenue_garantie field */
    const RETENUE_GARANTIE_0 = '0';
    const RETENUE_GARANTIE_1 = '1';

    /** The enumerated values for the periode_garantie field */
    const PERIODE_GARANTIE_0 = '0';
    const PERIODE_GARANTIE_1 = '1';

    /** The enumerated values for the decomposition_phase field */
    const DECOMPOSITION_PHASE_0 = '0';
    const DECOMPOSITION_PHASE_1 = '1';

    /** The enumerated values for the checkliste_livrable field */
    const CHECKLISTE_LIVRABLE_0 = '0';
    const CHECKLISTE_LIVRABLE_1 = '1';

    /** The enumerated values for the date_accusee field */
    const DATE_ACCUSEE_0 = '0';
    const DATE_ACCUSEE_1 = '1';

    /** The enumerated values for the date_notification field */
    const DATE_NOTIFICATION_0 = '0';
    const DATE_NOTIFICATION_1 = '1';

    /** The enumerated values for the mode_passaton field */
    const MODE_PASSATON_0 = '0';
    const MODE_PASSATON_1 = '1';

    /** The enumerated values for the numero_consultation field */
    const NUMERO_CONSULTATION_0 = '0';
    const NUMERO_CONSULTATION_1 = '1';

    /** The enumerated values for the reconductible field */
    const RECONDUCTIBLE_0 = '0';
    const RECONDUCTIBLE_1 = '1';

    /** The enumerated values for the gestion_reception field */
    const GESTION_RECEPTION_0 = '0';
    const GESTION_RECEPTION_1 = '1';

    /** The enumerated values for the gestion_litige field */
    const GESTION_LITIGE_0 = '0';
    const GESTION_LITIGE_1 = '1';

    /** The enumerated values for the porte_reception field */
    const PORTE_RECEPTION_0 = '0';
    const PORTE_RECEPTION_1 = '1';

    /** The enumerated values for the type_reception field */
    const TYPE_RECEPTION_0 = '0';
    const TYPE_RECEPTION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecConfigurationFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecConfigurationFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecConfigurationFormulairePeer::$fieldNames[CommonExecConfigurationFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdTypeContrat', 'MontantAvance', 'Penalite', 'DelaiPartiel', 'OsParPhase', 'MontantCautionDefinitive', 'RetenueGarantie', 'PeriodeGarantie', 'DecompositionPhase', 'ChecklisteLivrable', 'DateAccusee', 'DateNotification', 'ModePassaton', 'NumeroConsultation', 'Reconductible', 'GestionReception', 'GestionLitige', 'PorteReception', 'TypeReception', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idTypeContrat', 'montantAvance', 'penalite', 'delaiPartiel', 'osParPhase', 'montantCautionDefinitive', 'retenueGarantie', 'periodeGarantie', 'decompositionPhase', 'checklisteLivrable', 'dateAccusee', 'dateNotification', 'modePassaton', 'numeroConsultation', 'reconductible', 'gestionReception', 'gestionLitige', 'porteReception', 'typeReception', ),
        BasePeer::TYPE_COLNAME => array (CommonExecConfigurationFormulairePeer::ID, CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecConfigurationFormulairePeer::MONTANT_AVANCE, CommonExecConfigurationFormulairePeer::PENALITE, CommonExecConfigurationFormulairePeer::DELAI_PARTIEL, CommonExecConfigurationFormulairePeer::OS_PAR_PHASE, CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE, CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE, CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE, CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE, CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE, CommonExecConfigurationFormulairePeer::DATE_ACCUSEE, CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION, CommonExecConfigurationFormulairePeer::MODE_PASSATON, CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION, CommonExecConfigurationFormulairePeer::RECONDUCTIBLE, CommonExecConfigurationFormulairePeer::GESTION_RECEPTION, CommonExecConfigurationFormulairePeer::GESTION_LITIGE, CommonExecConfigurationFormulairePeer::PORTE_RECEPTION, CommonExecConfigurationFormulairePeer::TYPE_RECEPTION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_TYPE_CONTRAT', 'MONTANT_AVANCE', 'PENALITE', 'DELAI_PARTIEL', 'OS_PAR_PHASE', 'MONTANT_CAUTION_DEFINITIVE', 'RETENUE_GARANTIE', 'PERIODE_GARANTIE', 'DECOMPOSITION_PHASE', 'CHECKLISTE_LIVRABLE', 'DATE_ACCUSEE', 'DATE_NOTIFICATION', 'MODE_PASSATON', 'NUMERO_CONSULTATION', 'RECONDUCTIBLE', 'GESTION_RECEPTION', 'GESTION_LITIGE', 'PORTE_RECEPTION', 'TYPE_RECEPTION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_type_contrat', 'montant_avance', 'penalite', 'delai_partiel', 'os_par_phase', 'montant_caution_definitive', 'retenue_garantie', 'periode_garantie', 'decomposition_phase', 'checkliste_livrable', 'date_accusee', 'date_notification', 'mode_passaton', 'numero_consultation', 'reconductible', 'gestion_reception', 'gestion_litige', 'porte_reception', 'type_reception', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecConfigurationFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdTypeContrat' => 1, 'MontantAvance' => 2, 'Penalite' => 3, 'DelaiPartiel' => 4, 'OsParPhase' => 5, 'MontantCautionDefinitive' => 6, 'RetenueGarantie' => 7, 'PeriodeGarantie' => 8, 'DecompositionPhase' => 9, 'ChecklisteLivrable' => 10, 'DateAccusee' => 11, 'DateNotification' => 12, 'ModePassaton' => 13, 'NumeroConsultation' => 14, 'Reconductible' => 15, 'GestionReception' => 16, 'GestionLitige' => 17, 'PorteReception' => 18, 'TypeReception' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idTypeContrat' => 1, 'montantAvance' => 2, 'penalite' => 3, 'delaiPartiel' => 4, 'osParPhase' => 5, 'montantCautionDefinitive' => 6, 'retenueGarantie' => 7, 'periodeGarantie' => 8, 'decompositionPhase' => 9, 'checklisteLivrable' => 10, 'dateAccusee' => 11, 'dateNotification' => 12, 'modePassaton' => 13, 'numeroConsultation' => 14, 'reconductible' => 15, 'gestionReception' => 16, 'gestionLitige' => 17, 'porteReception' => 18, 'typeReception' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonExecConfigurationFormulairePeer::ID => 0, CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT => 1, CommonExecConfigurationFormulairePeer::MONTANT_AVANCE => 2, CommonExecConfigurationFormulairePeer::PENALITE => 3, CommonExecConfigurationFormulairePeer::DELAI_PARTIEL => 4, CommonExecConfigurationFormulairePeer::OS_PAR_PHASE => 5, CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE => 6, CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE => 7, CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE => 8, CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE => 9, CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE => 10, CommonExecConfigurationFormulairePeer::DATE_ACCUSEE => 11, CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION => 12, CommonExecConfigurationFormulairePeer::MODE_PASSATON => 13, CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION => 14, CommonExecConfigurationFormulairePeer::RECONDUCTIBLE => 15, CommonExecConfigurationFormulairePeer::GESTION_RECEPTION => 16, CommonExecConfigurationFormulairePeer::GESTION_LITIGE => 17, CommonExecConfigurationFormulairePeer::PORTE_RECEPTION => 18, CommonExecConfigurationFormulairePeer::TYPE_RECEPTION => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_TYPE_CONTRAT' => 1, 'MONTANT_AVANCE' => 2, 'PENALITE' => 3, 'DELAI_PARTIEL' => 4, 'OS_PAR_PHASE' => 5, 'MONTANT_CAUTION_DEFINITIVE' => 6, 'RETENUE_GARANTIE' => 7, 'PERIODE_GARANTIE' => 8, 'DECOMPOSITION_PHASE' => 9, 'CHECKLISTE_LIVRABLE' => 10, 'DATE_ACCUSEE' => 11, 'DATE_NOTIFICATION' => 12, 'MODE_PASSATON' => 13, 'NUMERO_CONSULTATION' => 14, 'RECONDUCTIBLE' => 15, 'GESTION_RECEPTION' => 16, 'GESTION_LITIGE' => 17, 'PORTE_RECEPTION' => 18, 'TYPE_RECEPTION' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_type_contrat' => 1, 'montant_avance' => 2, 'penalite' => 3, 'delai_partiel' => 4, 'os_par_phase' => 5, 'montant_caution_definitive' => 6, 'retenue_garantie' => 7, 'periode_garantie' => 8, 'decomposition_phase' => 9, 'checkliste_livrable' => 10, 'date_accusee' => 11, 'date_notification' => 12, 'mode_passaton' => 13, 'numero_consultation' => 14, 'reconductible' => 15, 'gestion_reception' => 16, 'gestion_litige' => 17, 'porte_reception' => 18, 'type_reception' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecConfigurationFormulairePeer::MONTANT_AVANCE => array(
            CommonExecConfigurationFormulairePeer::MONTANT_AVANCE_0,
            CommonExecConfigurationFormulairePeer::MONTANT_AVANCE_1,
        ),
        CommonExecConfigurationFormulairePeer::PENALITE => array(
            CommonExecConfigurationFormulairePeer::PENALITE_0,
            CommonExecConfigurationFormulairePeer::PENALITE_1,
        ),
        CommonExecConfigurationFormulairePeer::DELAI_PARTIEL => array(
            CommonExecConfigurationFormulairePeer::DELAI_PARTIEL_0,
            CommonExecConfigurationFormulairePeer::DELAI_PARTIEL_1,
        ),
        CommonExecConfigurationFormulairePeer::OS_PAR_PHASE => array(
            CommonExecConfigurationFormulairePeer::OS_PAR_PHASE_0,
            CommonExecConfigurationFormulairePeer::OS_PAR_PHASE_1,
        ),
        CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE => array(
            CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE_0,
            CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE_1,
        ),
        CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE => array(
            CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE_0,
            CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE_1,
        ),
        CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE => array(
            CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE_0,
            CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE_1,
        ),
        CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE => array(
            CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE_0,
            CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE_1,
        ),
        CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE => array(
            CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE_0,
            CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE_1,
        ),
        CommonExecConfigurationFormulairePeer::DATE_ACCUSEE => array(
            CommonExecConfigurationFormulairePeer::DATE_ACCUSEE_0,
            CommonExecConfigurationFormulairePeer::DATE_ACCUSEE_1,
        ),
        CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION => array(
            CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION_0,
            CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION_1,
        ),
        CommonExecConfigurationFormulairePeer::MODE_PASSATON => array(
            CommonExecConfigurationFormulairePeer::MODE_PASSATON_0,
            CommonExecConfigurationFormulairePeer::MODE_PASSATON_1,
        ),
        CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION => array(
            CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION_0,
            CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION_1,
        ),
        CommonExecConfigurationFormulairePeer::RECONDUCTIBLE => array(
            CommonExecConfigurationFormulairePeer::RECONDUCTIBLE_0,
            CommonExecConfigurationFormulairePeer::RECONDUCTIBLE_1,
        ),
        CommonExecConfigurationFormulairePeer::GESTION_RECEPTION => array(
            CommonExecConfigurationFormulairePeer::GESTION_RECEPTION_0,
            CommonExecConfigurationFormulairePeer::GESTION_RECEPTION_1,
        ),
        CommonExecConfigurationFormulairePeer::GESTION_LITIGE => array(
            CommonExecConfigurationFormulairePeer::GESTION_LITIGE_0,
            CommonExecConfigurationFormulairePeer::GESTION_LITIGE_1,
        ),
        CommonExecConfigurationFormulairePeer::PORTE_RECEPTION => array(
            CommonExecConfigurationFormulairePeer::PORTE_RECEPTION_0,
            CommonExecConfigurationFormulairePeer::PORTE_RECEPTION_1,
        ),
        CommonExecConfigurationFormulairePeer::TYPE_RECEPTION => array(
            CommonExecConfigurationFormulairePeer::TYPE_RECEPTION_0,
            CommonExecConfigurationFormulairePeer::TYPE_RECEPTION_1,
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
        $toNames = CommonExecConfigurationFormulairePeer::getFieldNames($toType);
        $key = isset(CommonExecConfigurationFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonExecConfigurationFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecConfigurationFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecConfigurationFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecConfigurationFormulairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecConfigurationFormulairePeer::$enumValueSets;
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
        $valueSets = CommonExecConfigurationFormulairePeer::getValueSets();

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
        $values = CommonExecConfigurationFormulairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonExecConfigurationFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecConfigurationFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::ID);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::PENALITE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::MODE_PASSATON);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::RECONDUCTIBLE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::GESTION_RECEPTION);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::GESTION_LITIGE);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::PORTE_RECEPTION);
            $criteria->addSelectColumn(CommonExecConfigurationFormulairePeer::TYPE_RECEPTION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_type_contrat');
            $criteria->addSelectColumn($alias . '.montant_avance');
            $criteria->addSelectColumn($alias . '.penalite');
            $criteria->addSelectColumn($alias . '.delai_partiel');
            $criteria->addSelectColumn($alias . '.os_par_phase');
            $criteria->addSelectColumn($alias . '.montant_caution_definitive');
            $criteria->addSelectColumn($alias . '.retenue_garantie');
            $criteria->addSelectColumn($alias . '.periode_garantie');
            $criteria->addSelectColumn($alias . '.decomposition_phase');
            $criteria->addSelectColumn($alias . '.checkliste_livrable');
            $criteria->addSelectColumn($alias . '.date_accusee');
            $criteria->addSelectColumn($alias . '.date_notification');
            $criteria->addSelectColumn($alias . '.mode_passaton');
            $criteria->addSelectColumn($alias . '.numero_consultation');
            $criteria->addSelectColumn($alias . '.reconductible');
            $criteria->addSelectColumn($alias . '.gestion_reception');
            $criteria->addSelectColumn($alias . '.gestion_litige');
            $criteria->addSelectColumn($alias . '.porte_reception');
            $criteria->addSelectColumn($alias . '.type_reception');
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
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecConfigurationFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecConfigurationFormulairePeer::doSelect($critcopy, $con);
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
        return CommonExecConfigurationFormulairePeer::populateObjects(CommonExecConfigurationFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

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
     * @param      CommonExecConfigurationFormulaire $obj A CommonExecConfigurationFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecConfigurationFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecConfigurationFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecConfigurationFormulaire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecConfigurationFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecConfigurationFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecConfigurationFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecConfigurationFormulairePeer::$instances[$key])) {
                return CommonExecConfigurationFormulairePeer::$instances[$key];
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
        foreach (CommonExecConfigurationFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecConfigurationFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_configuration_formulaire
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
        $cls = CommonExecConfigurationFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecConfigurationFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecConfigurationFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecConfigurationFormulairePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with their CommonExecTypeContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with their CommonExecTypeContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with their CommonExecTypeContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);

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
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeContratPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecTypeContrat rows

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to the collection in $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypeContrat rows

            $key3 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecTypeContratPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecTypeContratPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to the collection in $obj3 (CommonExecTypeContrat)
                $obj3->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypeContrat rows

            $key4 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecTypeContratPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypeContratPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecConfigurationFormulaire) to the collection in $obj4 (CommonExecTypeContrat)
                $obj4->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContratRelatedByIdTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with all related objects except CommonExecTypeContratRelatedByIdTypeContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with all related objects except CommonExecTypeContratRelatedByIdTypeContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecConfigurationFormulaire objects pre-filled with all related objects except CommonExecTypeContratRelatedByIdTypeContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecConfigurationFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeContratRelatedByIdTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        }

        CommonExecConfigurationFormulairePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecConfigurationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecConfigurationFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecConfigurationFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecConfigurationFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(CommonExecConfigurationFormulairePeer::DATABASE_NAME)->getTable(CommonExecConfigurationFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecConfigurationFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecConfigurationFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecConfigurationFormulaireTableMap());
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
        return CommonExecConfigurationFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecConfigurationFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecConfigurationFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecConfigurationFormulaire object
        }

        if ($criteria->containsKey(CommonExecConfigurationFormulairePeer::ID) && $criteria->keyContainsValue(CommonExecConfigurationFormulairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecConfigurationFormulairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecConfigurationFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecConfigurationFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecConfigurationFormulairePeer::ID);
            $value = $criteria->remove(CommonExecConfigurationFormulairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecConfigurationFormulairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecConfigurationFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonExecConfigurationFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_configuration_formulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecConfigurationFormulairePeer::TABLE_NAME, $con, CommonExecConfigurationFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecConfigurationFormulairePeer::clearInstancePool();
            CommonExecConfigurationFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecConfigurationFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecConfigurationFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecConfigurationFormulairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecConfigurationFormulaire) { // it's a model object
            // invalidate the cache for this single object
            CommonExecConfigurationFormulairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonExecConfigurationFormulairePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecConfigurationFormulairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecConfigurationFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecConfigurationFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecConfigurationFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecConfigurationFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecConfigurationFormulairePeer::DATABASE_NAME, CommonExecConfigurationFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecConfigurationFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecConfigurationFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonExecConfigurationFormulairePeer::ID, $pk);

        $v = CommonExecConfigurationFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecConfigurationFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonExecConfigurationFormulairePeer::ID, $pks, Criteria::IN);
            $objs = CommonExecConfigurationFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecConfigurationFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecConfigurationFormulairePeer::buildTableMap();

