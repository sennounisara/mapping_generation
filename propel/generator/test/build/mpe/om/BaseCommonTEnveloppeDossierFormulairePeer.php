<?php


/**
 * Base static class for performing query and update operations on the 't_enveloppe_dossier_formulaire' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTEnveloppeDossierFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_enveloppe_dossier_formulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTEnveloppeDossierFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTEnveloppeDossierFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id_enveloppe_dossier_formulaire field */
    const ID_ENVELOPPE_DOSSIER_FORMULAIRE = 't_enveloppe_dossier_formulaire.id_enveloppe_dossier_formulaire';

    /** the column name for the id_dossier_formulaire field */
    const ID_DOSSIER_FORMULAIRE = 't_enveloppe_dossier_formulaire.id_dossier_formulaire';

    /** the column name for the id_enveloppe field */
    const ID_ENVELOPPE = 't_enveloppe_dossier_formulaire.id_enveloppe';

    /** the column name for the organisme field */
    const ORGANISME = 't_enveloppe_dossier_formulaire.organisme';

    /** the column name for the id_lot field */
    const ID_LOT = 't_enveloppe_dossier_formulaire.id_lot';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 't_enveloppe_dossier_formulaire.type_enveloppe';

    /** the column name for the libelle_forrmulaire field */
    const LIBELLE_FORRMULAIRE = 't_enveloppe_dossier_formulaire.libelle_forrmulaire';

    /** the column name for the cle_externe_dispositif field */
    const CLE_EXTERNE_DISPOSITIF = 't_enveloppe_dossier_formulaire.cle_externe_dispositif';

    /** the column name for the cle_externe_dossier field */
    const CLE_EXTERNE_DOSSIER = 't_enveloppe_dossier_formulaire.cle_externe_dossier';

    /** the column name for the statut_validation field */
    const STATUT_VALIDATION = 't_enveloppe_dossier_formulaire.statut_validation';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_enveloppe_dossier_formulaire.date_creation';

    /** the column name for the date_modif field */
    const DATE_MODIF = 't_enveloppe_dossier_formulaire.date_modif';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 't_enveloppe_dossier_formulaire.date_validation';

    /** the column name for the statut_generation_globale field */
    const STATUT_GENERATION_GLOBALE = 't_enveloppe_dossier_formulaire.statut_generation_globale';

    /** the column name for the type_reponse field */
    const TYPE_REPONSE = 't_enveloppe_dossier_formulaire.type_reponse';

    /** the column name for the cle_externe_formulaire field */
    const CLE_EXTERNE_FORMULAIRE = 't_enveloppe_dossier_formulaire.cle_externe_formulaire';

    /** The enumerated values for the statut_validation field */
    const STATUT_VALIDATION_1 = '1';
    const STATUT_VALIDATION_2 = '2';
    const STATUT_VALIDATION_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTEnveloppeDossierFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTEnveloppeDossierFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTEnveloppeDossierFormulairePeer::$fieldNames[CommonTEnveloppeDossierFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppeDossierFormulaire', 'IdDossierFormulaire', 'IdEnveloppe', 'Organisme', 'IdLot', 'TypeEnveloppe', 'LibelleForrmulaire', 'CleExterneDispositif', 'CleExterneDossier', 'StatutValidation', 'DateCreation', 'DateModif', 'DateValidation', 'StatutGenerationGlobale', 'TypeReponse', 'CleExterneFormulaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppeDossierFormulaire', 'idDossierFormulaire', 'idEnveloppe', 'organisme', 'idLot', 'typeEnveloppe', 'libelleForrmulaire', 'cleExterneDispositif', 'cleExterneDossier', 'statutValidation', 'dateCreation', 'dateModif', 'dateValidation', 'statutGenerationGlobale', 'typeReponse', 'cleExterneFormulaire', ),
        BasePeer::TYPE_COLNAME => array (CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE, CommonTEnveloppeDossierFormulairePeer::ORGANISME, CommonTEnveloppeDossierFormulairePeer::ID_LOT, CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE, CommonTEnveloppeDossierFormulairePeer::LIBELLE_FORRMULAIRE, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER, CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION, CommonTEnveloppeDossierFormulairePeer::DATE_CREATION, CommonTEnveloppeDossierFormulairePeer::DATE_MODIF, CommonTEnveloppeDossierFormulairePeer::DATE_VALIDATION, CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE, CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_DOSSIER_FORMULAIRE', 'ID_DOSSIER_FORMULAIRE', 'ID_ENVELOPPE', 'ORGANISME', 'ID_LOT', 'TYPE_ENVELOPPE', 'LIBELLE_FORRMULAIRE', 'CLE_EXTERNE_DISPOSITIF', 'CLE_EXTERNE_DOSSIER', 'STATUT_VALIDATION', 'DATE_CREATION', 'DATE_MODIF', 'DATE_VALIDATION', 'STATUT_GENERATION_GLOBALE', 'TYPE_REPONSE', 'CLE_EXTERNE_FORMULAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_dossier_formulaire', 'id_dossier_formulaire', 'id_enveloppe', 'organisme', 'id_lot', 'type_enveloppe', 'libelle_forrmulaire', 'cle_externe_dispositif', 'cle_externe_dossier', 'statut_validation', 'date_creation', 'date_modif', 'date_validation', 'statut_generation_globale', 'type_reponse', 'cle_externe_formulaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTEnveloppeDossierFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppeDossierFormulaire' => 0, 'IdDossierFormulaire' => 1, 'IdEnveloppe' => 2, 'Organisme' => 3, 'IdLot' => 4, 'TypeEnveloppe' => 5, 'LibelleForrmulaire' => 6, 'CleExterneDispositif' => 7, 'CleExterneDossier' => 8, 'StatutValidation' => 9, 'DateCreation' => 10, 'DateModif' => 11, 'DateValidation' => 12, 'StatutGenerationGlobale' => 13, 'TypeReponse' => 14, 'CleExterneFormulaire' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppeDossierFormulaire' => 0, 'idDossierFormulaire' => 1, 'idEnveloppe' => 2, 'organisme' => 3, 'idLot' => 4, 'typeEnveloppe' => 5, 'libelleForrmulaire' => 6, 'cleExterneDispositif' => 7, 'cleExterneDossier' => 8, 'statutValidation' => 9, 'dateCreation' => 10, 'dateModif' => 11, 'dateValidation' => 12, 'statutGenerationGlobale' => 13, 'typeReponse' => 14, 'cleExterneFormulaire' => 15, ),
        BasePeer::TYPE_COLNAME => array (CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE => 0, CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE => 1, CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE => 2, CommonTEnveloppeDossierFormulairePeer::ORGANISME => 3, CommonTEnveloppeDossierFormulairePeer::ID_LOT => 4, CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE => 5, CommonTEnveloppeDossierFormulairePeer::LIBELLE_FORRMULAIRE => 6, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF => 7, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER => 8, CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION => 9, CommonTEnveloppeDossierFormulairePeer::DATE_CREATION => 10, CommonTEnveloppeDossierFormulairePeer::DATE_MODIF => 11, CommonTEnveloppeDossierFormulairePeer::DATE_VALIDATION => 12, CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE => 13, CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE => 14, CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_DOSSIER_FORMULAIRE' => 0, 'ID_DOSSIER_FORMULAIRE' => 1, 'ID_ENVELOPPE' => 2, 'ORGANISME' => 3, 'ID_LOT' => 4, 'TYPE_ENVELOPPE' => 5, 'LIBELLE_FORRMULAIRE' => 6, 'CLE_EXTERNE_DISPOSITIF' => 7, 'CLE_EXTERNE_DOSSIER' => 8, 'STATUT_VALIDATION' => 9, 'DATE_CREATION' => 10, 'DATE_MODIF' => 11, 'DATE_VALIDATION' => 12, 'STATUT_GENERATION_GLOBALE' => 13, 'TYPE_REPONSE' => 14, 'CLE_EXTERNE_FORMULAIRE' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_dossier_formulaire' => 0, 'id_dossier_formulaire' => 1, 'id_enveloppe' => 2, 'organisme' => 3, 'id_lot' => 4, 'type_enveloppe' => 5, 'libelle_forrmulaire' => 6, 'cle_externe_dispositif' => 7, 'cle_externe_dossier' => 8, 'statut_validation' => 9, 'date_creation' => 10, 'date_modif' => 11, 'date_validation' => 12, 'statut_generation_globale' => 13, 'type_reponse' => 14, 'cle_externe_formulaire' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION => array(
            CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION_1,
            CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION_2,
            CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION_3,
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
        $toNames = CommonTEnveloppeDossierFormulairePeer::getFieldNames($toType);
        $key = isset(CommonTEnveloppeDossierFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonTEnveloppeDossierFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTEnveloppeDossierFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTEnveloppeDossierFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTEnveloppeDossierFormulairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTEnveloppeDossierFormulairePeer::$enumValueSets;
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
        $valueSets = CommonTEnveloppeDossierFormulairePeer::getValueSets();

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
        $values = CommonTEnveloppeDossierFormulairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTEnveloppeDossierFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::ORGANISME);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::ID_LOT);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::LIBELLE_FORRMULAIRE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE);
            $criteria->addSelectColumn(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id_enveloppe_dossier_formulaire');
            $criteria->addSelectColumn($alias . '.id_dossier_formulaire');
            $criteria->addSelectColumn($alias . '.id_enveloppe');
            $criteria->addSelectColumn($alias . '.organisme');
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
        $criteria->setPrimaryTableName(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTEnveloppeDossierFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTEnveloppeDossierFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTEnveloppeDossierFormulairePeer::doSelect($critcopy, $con);
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
        return CommonTEnveloppeDossierFormulairePeer::populateObjects(CommonTEnveloppeDossierFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTEnveloppeDossierFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);

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
     * @param      CommonTEnveloppeDossierFormulaire $obj A CommonTEnveloppeDossierFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEnveloppeDossierFormulaire();
            } // if key === null
            CommonTEnveloppeDossierFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTEnveloppeDossierFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTEnveloppeDossierFormulaire) {
                $key = (string) $value->getIdEnveloppeDossierFormulaire();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTEnveloppeDossierFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTEnveloppeDossierFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTEnveloppeDossierFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTEnveloppeDossierFormulairePeer::$instances[$key])) {
                return CommonTEnveloppeDossierFormulairePeer::$instances[$key];
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
        foreach (CommonTEnveloppeDossierFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTEnveloppeDossierFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_enveloppe_dossier_formulaire
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
        $cls = CommonTEnveloppeDossierFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTEnveloppeDossierFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTEnveloppeDossierFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTEnveloppeDossierFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTEnveloppeDossierFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTEnveloppeDossierFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTEnveloppeDossierFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTEnveloppeDossierFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTEnveloppeDossierFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTEnveloppeDossierFormulairePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME)->getTable(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTEnveloppeDossierFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTEnveloppeDossierFormulaireTableMap());
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
        return CommonTEnveloppeDossierFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTEnveloppeDossierFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTEnveloppeDossierFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTEnveloppeDossierFormulaire object
        }

        if ($criteria->containsKey(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE) && $criteria->keyContainsValue(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTEnveloppeDossierFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTEnveloppeDossierFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE);
            $value = $criteria->remove(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE);
            if ($value) {
                $selectCriteria->add(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTEnveloppeDossierFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_enveloppe_dossier_formulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME, $con, CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTEnveloppeDossierFormulairePeer::clearInstancePool();
            CommonTEnveloppeDossierFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTEnveloppeDossierFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTEnveloppeDossierFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTEnveloppeDossierFormulairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTEnveloppeDossierFormulaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTEnveloppeDossierFormulairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTEnveloppeDossierFormulairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTEnveloppeDossierFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTEnveloppeDossierFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTEnveloppeDossierFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTEnveloppeDossierFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, CommonTEnveloppeDossierFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTEnveloppeDossierFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTEnveloppeDossierFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $pk);

        $v = CommonTEnveloppeDossierFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTEnveloppeDossierFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $pks, Criteria::IN);
            $objs = CommonTEnveloppeDossierFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTEnveloppeDossierFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTEnveloppeDossierFormulairePeer::buildTableMap();

