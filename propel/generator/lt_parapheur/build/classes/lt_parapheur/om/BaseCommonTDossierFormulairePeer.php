<?php


/**
 * Base static class for performing query and update operations on the 't_dossier_formulaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDossierFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_dossier_formulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDossierFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDossierFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id_dossier_formulaire field */
    const ID_DOSSIER_FORMULAIRE = 't_dossier_formulaire.id_dossier_formulaire';

    /** the column name for the id_reponse_elec_formulaire field */
    const ID_REPONSE_ELEC_FORMULAIRE = 't_dossier_formulaire.id_reponse_elec_formulaire';

    /** the column name for the id_lot field */
    const ID_LOT = 't_dossier_formulaire.id_lot';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 't_dossier_formulaire.type_enveloppe';

    /** the column name for the libelle_forrmulaire field */
    const LIBELLE_FORRMULAIRE = 't_dossier_formulaire.libelle_forrmulaire';

    /** the column name for the cle_externe_dispositif field */
    const CLE_EXTERNE_DISPOSITIF = 't_dossier_formulaire.cle_externe_dispositif';

    /** the column name for the cle_externe_dossier field */
    const CLE_EXTERNE_DOSSIER = 't_dossier_formulaire.cle_externe_dossier';

    /** the column name for the statut_validation field */
    const STATUT_VALIDATION = 't_dossier_formulaire.statut_validation';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_dossier_formulaire.date_creation';

    /** the column name for the date_modif field */
    const DATE_MODIF = 't_dossier_formulaire.date_modif';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 't_dossier_formulaire.date_validation';

    /** the column name for the statut_generation_globale field */
    const STATUT_GENERATION_GLOBALE = 't_dossier_formulaire.statut_generation_globale';

    /** the column name for the type_reponse field */
    const TYPE_REPONSE = 't_dossier_formulaire.type_reponse';

    /** the column name for the cle_externe_formulaire field */
    const CLE_EXTERNE_FORMULAIRE = 't_dossier_formulaire.cle_externe_formulaire';

    /** the column name for the formulaire_depose field */
    const FORMULAIRE_DEPOSE = 't_dossier_formulaire.formulaire_depose';

    /** the column name for the id_dossier_pere field */
    const ID_DOSSIER_PERE = 't_dossier_formulaire.id_dossier_pere';

    /** The enumerated values for the statut_validation field */
    const STATUT_VALIDATION_1 = '1';
    const STATUT_VALIDATION_2 = '2';
    const STATUT_VALIDATION_3 = '3';

    /** The enumerated values for the formulaire_depose field */
    const FORMULAIRE_DEPOSE_0 = '0';
    const FORMULAIRE_DEPOSE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDossierFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDossierFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDossierFormulairePeer::$fieldNames[CommonTDossierFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDossierFormulaire', 'IdReponseElecFormulaire', 'IdLot', 'TypeEnveloppe', 'LibelleForrmulaire', 'CleExterneDispositif', 'CleExterneDossier', 'StatutValidation', 'DateCreation', 'DateModif', 'DateValidation', 'StatutGenerationGlobale', 'TypeReponse', 'CleExterneFormulaire', 'FormulaireDepose', 'IdDossierPere', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDossierFormulaire', 'idReponseElecFormulaire', 'idLot', 'typeEnveloppe', 'libelleForrmulaire', 'cleExterneDispositif', 'cleExterneDossier', 'statutValidation', 'dateCreation', 'dateModif', 'dateValidation', 'statutGenerationGlobale', 'typeReponse', 'cleExterneFormulaire', 'formulaireDepose', 'idDossierPere', ),
        BasePeer::TYPE_COLNAME => array (CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, CommonTDossierFormulairePeer::ID_LOT, CommonTDossierFormulairePeer::TYPE_ENVELOPPE, CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE, CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER, CommonTDossierFormulairePeer::STATUT_VALIDATION, CommonTDossierFormulairePeer::DATE_CREATION, CommonTDossierFormulairePeer::DATE_MODIF, CommonTDossierFormulairePeer::DATE_VALIDATION, CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE, CommonTDossierFormulairePeer::TYPE_REPONSE, CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE, CommonTDossierFormulairePeer::ID_DOSSIER_PERE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOSSIER_FORMULAIRE', 'ID_REPONSE_ELEC_FORMULAIRE', 'ID_LOT', 'TYPE_ENVELOPPE', 'LIBELLE_FORRMULAIRE', 'CLE_EXTERNE_DISPOSITIF', 'CLE_EXTERNE_DOSSIER', 'STATUT_VALIDATION', 'DATE_CREATION', 'DATE_MODIF', 'DATE_VALIDATION', 'STATUT_GENERATION_GLOBALE', 'TYPE_REPONSE', 'CLE_EXTERNE_FORMULAIRE', 'FORMULAIRE_DEPOSE', 'ID_DOSSIER_PERE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_dossier_formulaire', 'id_reponse_elec_formulaire', 'id_lot', 'type_enveloppe', 'libelle_forrmulaire', 'cle_externe_dispositif', 'cle_externe_dossier', 'statut_validation', 'date_creation', 'date_modif', 'date_validation', 'statut_generation_globale', 'type_reponse', 'cle_externe_formulaire', 'formulaire_depose', 'id_dossier_pere', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDossierFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDossierFormulaire' => 0, 'IdReponseElecFormulaire' => 1, 'IdLot' => 2, 'TypeEnveloppe' => 3, 'LibelleForrmulaire' => 4, 'CleExterneDispositif' => 5, 'CleExterneDossier' => 6, 'StatutValidation' => 7, 'DateCreation' => 8, 'DateModif' => 9, 'DateValidation' => 10, 'StatutGenerationGlobale' => 11, 'TypeReponse' => 12, 'CleExterneFormulaire' => 13, 'FormulaireDepose' => 14, 'IdDossierPere' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDossierFormulaire' => 0, 'idReponseElecFormulaire' => 1, 'idLot' => 2, 'typeEnveloppe' => 3, 'libelleForrmulaire' => 4, 'cleExterneDispositif' => 5, 'cleExterneDossier' => 6, 'statutValidation' => 7, 'dateCreation' => 8, 'dateModif' => 9, 'dateValidation' => 10, 'statutGenerationGlobale' => 11, 'typeReponse' => 12, 'cleExterneFormulaire' => 13, 'formulaireDepose' => 14, 'idDossierPere' => 15, ),
        BasePeer::TYPE_COLNAME => array (CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE => 0, CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE => 1, CommonTDossierFormulairePeer::ID_LOT => 2, CommonTDossierFormulairePeer::TYPE_ENVELOPPE => 3, CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE => 4, CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF => 5, CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER => 6, CommonTDossierFormulairePeer::STATUT_VALIDATION => 7, CommonTDossierFormulairePeer::DATE_CREATION => 8, CommonTDossierFormulairePeer::DATE_MODIF => 9, CommonTDossierFormulairePeer::DATE_VALIDATION => 10, CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE => 11, CommonTDossierFormulairePeer::TYPE_REPONSE => 12, CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE => 13, CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE => 14, CommonTDossierFormulairePeer::ID_DOSSIER_PERE => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOSSIER_FORMULAIRE' => 0, 'ID_REPONSE_ELEC_FORMULAIRE' => 1, 'ID_LOT' => 2, 'TYPE_ENVELOPPE' => 3, 'LIBELLE_FORRMULAIRE' => 4, 'CLE_EXTERNE_DISPOSITIF' => 5, 'CLE_EXTERNE_DOSSIER' => 6, 'STATUT_VALIDATION' => 7, 'DATE_CREATION' => 8, 'DATE_MODIF' => 9, 'DATE_VALIDATION' => 10, 'STATUT_GENERATION_GLOBALE' => 11, 'TYPE_REPONSE' => 12, 'CLE_EXTERNE_FORMULAIRE' => 13, 'FORMULAIRE_DEPOSE' => 14, 'ID_DOSSIER_PERE' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id_dossier_formulaire' => 0, 'id_reponse_elec_formulaire' => 1, 'id_lot' => 2, 'type_enveloppe' => 3, 'libelle_forrmulaire' => 4, 'cle_externe_dispositif' => 5, 'cle_externe_dossier' => 6, 'statut_validation' => 7, 'date_creation' => 8, 'date_modif' => 9, 'date_validation' => 10, 'statut_generation_globale' => 11, 'type_reponse' => 12, 'cle_externe_formulaire' => 13, 'formulaire_depose' => 14, 'id_dossier_pere' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTDossierFormulairePeer::STATUT_VALIDATION => array(
            CommonTDossierFormulairePeer::STATUT_VALIDATION_1,
            CommonTDossierFormulairePeer::STATUT_VALIDATION_2,
            CommonTDossierFormulairePeer::STATUT_VALIDATION_3,
        ),
        CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE => array(
            CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE_0,
            CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE_1,
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
        $toNames = CommonTDossierFormulairePeer::getFieldNames($toType);
        $key = isset(CommonTDossierFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonTDossierFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDossierFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDossierFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDossierFormulairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTDossierFormulairePeer::$enumValueSets;
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
        $valueSets = CommonTDossierFormulairePeer::getValueSets();

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
        $values = CommonTDossierFormulairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTDossierFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDossierFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::ID_LOT);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::STATUT_VALIDATION);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::TYPE_REPONSE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE);
            $criteria->addSelectColumn(CommonTDossierFormulairePeer::ID_DOSSIER_PERE);
        } else {
            $criteria->addSelectColumn($alias . '.id_dossier_formulaire');
            $criteria->addSelectColumn($alias . '.id_reponse_elec_formulaire');
            $criteria->addSelectColumn($alias . '.id_lot');
            $criteria->addSelectColumn($alias . '.type_enveloppe');
            $criteria->addSelectColumn($alias . '.libelle_forrmulaire');
            $criteria->addSelectColumn($alias . '.cle_externe_dispositif');
            $criteria->addSelectColumn($alias . '.cle_externe_dossier');
            $criteria->addSelectColumn($alias . '.statut_validation');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.statut_generation_globale');
            $criteria->addSelectColumn($alias . '.type_reponse');
            $criteria->addSelectColumn($alias . '.cle_externe_formulaire');
            $criteria->addSelectColumn($alias . '.formulaire_depose');
            $criteria->addSelectColumn($alias . '.id_dossier_pere');
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
        $criteria->setPrimaryTableName(CommonTDossierFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDossierFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDossierFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDossierFormulairePeer::doSelect($critcopy, $con);
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
        return CommonTDossierFormulairePeer::populateObjects(CommonTDossierFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDossierFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

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
     * @param      CommonTDossierFormulaire $obj A CommonTDossierFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDossierFormulaire();
            } // if key === null
            CommonTDossierFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDossierFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDossierFormulaire) {
                $key = (string) $value->getIdDossierFormulaire();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDossierFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDossierFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDossierFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDossierFormulairePeer::$instances[$key])) {
                return CommonTDossierFormulairePeer::$instances[$key];
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
        foreach (CommonTDossierFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDossierFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_dossier_formulaire
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
        $cls = CommonTDossierFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDossierFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDossierFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDossierFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDossierFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDossierFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDossierFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDossierFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDossierFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDossierFormulairePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTReponseElecFormulaire table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTReponseElecFormulaire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTDossierFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDossierFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $join_behavior);

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
     * Selects a collection of CommonTDossierFormulaire objects pre-filled with their CommonTReponseElecFormulaire objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDossierFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTReponseElecFormulaire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);
        }

        CommonTDossierFormulairePeer::addSelectColumns($criteria);
        $startcol = CommonTDossierFormulairePeer::NUM_HYDRATE_COLUMNS;
        CommonTReponseElecFormulairePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDossierFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDossierFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTDossierFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDossierFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTReponseElecFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTReponseElecFormulairePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTReponseElecFormulairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTReponseElecFormulairePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTDossierFormulaire) to $obj2 (CommonTReponseElecFormulaire)
                $obj2->addCommonTDossierFormulaire($obj1);

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
        $criteria->setPrimaryTableName(CommonTDossierFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDossierFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $join_behavior);

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
     * Selects a collection of CommonTDossierFormulaire objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDossierFormulaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);
        }

        CommonTDossierFormulairePeer::addSelectColumns($criteria);
        $startcol2 = CommonTDossierFormulairePeer::NUM_HYDRATE_COLUMNS;

        CommonTReponseElecFormulairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTReponseElecFormulairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDossierFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDossierFormulairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTDossierFormulairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDossierFormulairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTReponseElecFormulaire rows

            $key2 = CommonTReponseElecFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTReponseElecFormulairePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTReponseElecFormulairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTReponseElecFormulairePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTDossierFormulaire) to the collection in $obj2 (CommonTReponseElecFormulaire)
                $obj2->addCommonTDossierFormulaire($obj1);
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
        return Propel::getDatabaseMap(CommonTDossierFormulairePeer::DATABASE_NAME)->getTable(CommonTDossierFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDossierFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDossierFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDossierFormulaireTableMap());
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
        return CommonTDossierFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDossierFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDossierFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDossierFormulaire object
        }

        if ($criteria->containsKey(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE) && $criteria->keyContainsValue(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDossierFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDossierFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE);
            $value = $criteria->remove(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE);
            if ($value) {
                $selectCriteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDossierFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTDossierFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_dossier_formulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDossierFormulairePeer::TABLE_NAME, $con, CommonTDossierFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDossierFormulairePeer::clearInstancePool();
            CommonTDossierFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDossierFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDossierFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDossierFormulairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDossierFormulaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTDossierFormulairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDossierFormulairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDossierFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDossierFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDossierFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDossierFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDossierFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDossierFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDossierFormulairePeer::DATABASE_NAME, CommonTDossierFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDossierFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDossierFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $pk);

        $v = CommonTDossierFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDossierFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $pks, Criteria::IN);
            $objs = CommonTDossierFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDossierFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDossierFormulairePeer::buildTableMap();

