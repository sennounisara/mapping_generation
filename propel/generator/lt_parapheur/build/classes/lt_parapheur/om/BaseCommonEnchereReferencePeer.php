<?php


/**
 * Base static class for performing query and update operations on the 'EnchereReference' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereReferencePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EnchereReference';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnchereReference';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnchereReferenceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id field */
    const ID = 'EnchereReference.id';

    /** the column name for the organisme field */
    const ORGANISME = 'EnchereReference.organisme';

    /** the column name for the idEnchere field */
    const IDENCHERE = 'EnchereReference.idEnchere';

    /** the column name for the libelle field */
    const LIBELLE = 'EnchereReference.libelle';

    /** the column name for the quantite field */
    const QUANTITE = 'EnchereReference.quantite';

    /** the column name for the isMontant field */
    const ISMONTANT = 'EnchereReference.isMontant';

    /** the column name for the unite field */
    const UNITE = 'EnchereReference.unite';

    /** the column name for the pasMin field */
    const PASMIN = 'EnchereReference.pasMin';

    /** the column name for the pasMax field */
    const PASMAX = 'EnchereReference.pasMax';

    /** the column name for the valeurReference field */
    const VALEURREFERENCE = 'EnchereReference.valeurReference';

    /** the column name for the valeurDepartCommune field */
    const VALEURDEPARTCOMMUNE = 'EnchereReference.valeurDepartCommune';

    /** the column name for the valeurDepart field */
    const VALEURDEPART = 'EnchereReference.valeurDepart';

    /** the column name for the typeBaremeReference field */
    const TYPEBAREMEREFERENCE = 'EnchereReference.typeBaremeReference';

    /** the column name for the ponderationNoteReference field */
    const PONDERATIONNOTEREFERENCE = 'EnchereReference.ponderationNoteReference';

    /** the column name for the noteMaxBaremeRelatif field */
    const NOTEMAXBAREMERELATIF = 'EnchereReference.noteMaxBaremeRelatif';

    /** The enumerated values for the isMontant field */
    const ISMONTANT_0 = '0';
    const ISMONTANT_1 = '1';

    /** The enumerated values for the valeurDepartCommune field */
    const VALEURDEPARTCOMMUNE_0 = '0';
    const VALEURDEPARTCOMMUNE_1 = '1';

    /** The enumerated values for the typeBaremeReference field */
    const TYPEBAREMEREFERENCE_1 = '1';
    const TYPEBAREMEREFERENCE_2 = '2';
    const TYPEBAREMEREFERENCE_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEnchereReference objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnchereReference[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereReferencePeer::$fieldNames[CommonEnchereReferencePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Idenchere', 'Libelle', 'Quantite', 'Ismontant', 'Unite', 'Pasmin', 'Pasmax', 'Valeurreference', 'Valeurdepartcommune', 'Valeurdepart', 'Typebaremereference', 'Ponderationnotereference', 'Notemaxbaremerelatif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idenchere', 'libelle', 'quantite', 'ismontant', 'unite', 'pasmin', 'pasmax', 'valeurreference', 'valeurdepartcommune', 'valeurdepart', 'typebaremereference', 'ponderationnotereference', 'notemaxbaremerelatif', ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereReferencePeer::ID, CommonEnchereReferencePeer::ORGANISME, CommonEnchereReferencePeer::IDENCHERE, CommonEnchereReferencePeer::LIBELLE, CommonEnchereReferencePeer::QUANTITE, CommonEnchereReferencePeer::ISMONTANT, CommonEnchereReferencePeer::UNITE, CommonEnchereReferencePeer::PASMIN, CommonEnchereReferencePeer::PASMAX, CommonEnchereReferencePeer::VALEURREFERENCE, CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE, CommonEnchereReferencePeer::VALEURDEPART, CommonEnchereReferencePeer::TYPEBAREMEREFERENCE, CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'IDENCHERE', 'LIBELLE', 'QUANTITE', 'ISMONTANT', 'UNITE', 'PASMIN', 'PASMAX', 'VALEURREFERENCE', 'VALEURDEPARTCOMMUNE', 'VALEURDEPART', 'TYPEBAREMEREFERENCE', 'PONDERATIONNOTEREFERENCE', 'NOTEMAXBAREMERELATIF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'idEnchere', 'libelle', 'quantite', 'isMontant', 'unite', 'pasMin', 'pasMax', 'valeurReference', 'valeurDepartCommune', 'valeurDepart', 'typeBaremeReference', 'ponderationNoteReference', 'noteMaxBaremeRelatif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereReferencePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Idenchere' => 2, 'Libelle' => 3, 'Quantite' => 4, 'Ismontant' => 5, 'Unite' => 6, 'Pasmin' => 7, 'Pasmax' => 8, 'Valeurreference' => 9, 'Valeurdepartcommune' => 10, 'Valeurdepart' => 11, 'Typebaremereference' => 12, 'Ponderationnotereference' => 13, 'Notemaxbaremerelatif' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idenchere' => 2, 'libelle' => 3, 'quantite' => 4, 'ismontant' => 5, 'unite' => 6, 'pasmin' => 7, 'pasmax' => 8, 'valeurreference' => 9, 'valeurdepartcommune' => 10, 'valeurdepart' => 11, 'typebaremereference' => 12, 'ponderationnotereference' => 13, 'notemaxbaremerelatif' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereReferencePeer::ID => 0, CommonEnchereReferencePeer::ORGANISME => 1, CommonEnchereReferencePeer::IDENCHERE => 2, CommonEnchereReferencePeer::LIBELLE => 3, CommonEnchereReferencePeer::QUANTITE => 4, CommonEnchereReferencePeer::ISMONTANT => 5, CommonEnchereReferencePeer::UNITE => 6, CommonEnchereReferencePeer::PASMIN => 7, CommonEnchereReferencePeer::PASMAX => 8, CommonEnchereReferencePeer::VALEURREFERENCE => 9, CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE => 10, CommonEnchereReferencePeer::VALEURDEPART => 11, CommonEnchereReferencePeer::TYPEBAREMEREFERENCE => 12, CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE => 13, CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'IDENCHERE' => 2, 'LIBELLE' => 3, 'QUANTITE' => 4, 'ISMONTANT' => 5, 'UNITE' => 6, 'PASMIN' => 7, 'PASMAX' => 8, 'VALEURREFERENCE' => 9, 'VALEURDEPARTCOMMUNE' => 10, 'VALEURDEPART' => 11, 'TYPEBAREMEREFERENCE' => 12, 'PONDERATIONNOTEREFERENCE' => 13, 'NOTEMAXBAREMERELATIF' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'idEnchere' => 2, 'libelle' => 3, 'quantite' => 4, 'isMontant' => 5, 'unite' => 6, 'pasMin' => 7, 'pasMax' => 8, 'valeurReference' => 9, 'valeurDepartCommune' => 10, 'valeurDepart' => 11, 'typeBaremeReference' => 12, 'ponderationNoteReference' => 13, 'noteMaxBaremeRelatif' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEnchereReferencePeer::ISMONTANT => array(
            CommonEnchereReferencePeer::ISMONTANT_0,
            CommonEnchereReferencePeer::ISMONTANT_1,
        ),
        CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE => array(
            CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE_0,
            CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE_1,
        ),
        CommonEnchereReferencePeer::TYPEBAREMEREFERENCE => array(
            CommonEnchereReferencePeer::TYPEBAREMEREFERENCE_1,
            CommonEnchereReferencePeer::TYPEBAREMEREFERENCE_2,
            CommonEnchereReferencePeer::TYPEBAREMEREFERENCE_3,
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
        $toNames = CommonEnchereReferencePeer::getFieldNames($toType);
        $key = isset(CommonEnchereReferencePeer::$fieldKeys[$fromType][$name]) ? CommonEnchereReferencePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnchereReferencePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnchereReferencePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnchereReferencePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEnchereReferencePeer::$enumValueSets;
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
        $valueSets = CommonEnchereReferencePeer::getValueSets();

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
        $values = CommonEnchereReferencePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEnchereReferencePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnchereReferencePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnchereReferencePeer::ID);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::ORGANISME);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::IDENCHERE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::LIBELLE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::QUANTITE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::ISMONTANT);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::UNITE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::PASMIN);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::PASMAX);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::VALEURREFERENCE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::VALEURDEPART);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE);
            $criteria->addSelectColumn(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.idEnchere');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.isMontant');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.pasMin');
            $criteria->addSelectColumn($alias . '.pasMax');
            $criteria->addSelectColumn($alias . '.valeurReference');
            $criteria->addSelectColumn($alias . '.valeurDepartCommune');
            $criteria->addSelectColumn($alias . '.valeurDepart');
            $criteria->addSelectColumn($alias . '.typeBaremeReference');
            $criteria->addSelectColumn($alias . '.ponderationNoteReference');
            $criteria->addSelectColumn($alias . '.noteMaxBaremeRelatif');
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
        $criteria->setPrimaryTableName(CommonEnchereReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnchereReferencePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereReference
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnchereReferencePeer::doSelect($critcopy, $con);
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
        return CommonEnchereReferencePeer::populateObjects(CommonEnchereReferencePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnchereReferencePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereReferencePeer::DATABASE_NAME);

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
     * @param      CommonEnchereReference $obj A CommonEnchereReference object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEnchereReferencePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnchereReference object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnchereReference) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnchereReference object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnchereReferencePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnchereReference Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnchereReferencePeer::$instances[$key])) {
                return CommonEnchereReferencePeer::$instances[$key];
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
        foreach (CommonEnchereReferencePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnchereReferencePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EnchereReference
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
        $cls = CommonEnchereReferencePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnchereReferencePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnchereReferencePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnchereReference object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnchereReferencePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnchereReferencePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnchereReferencePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnchereReferencePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEnchereReferencePeer::DATABASE_NAME)->getTable(CommonEnchereReferencePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnchereReferencePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnchereReferencePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnchereReferenceTableMap());
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
        return CommonEnchereReferencePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnchereReference or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereReference object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnchereReference object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnchereReferencePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnchereReference or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereReference object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnchereReferencePeer::ID);
            $value = $criteria->remove(CommonEnchereReferencePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEnchereReferencePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereReferencePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEnchereReferencePeer::ORGANISME);
            $value = $criteria->remove(CommonEnchereReferencePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEnchereReferencePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereReferencePeer::TABLE_NAME);
            }

        } else { // $values is CommonEnchereReference object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnchereReferencePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EnchereReference table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEnchereReferencePeer::TABLE_NAME, $con, CommonEnchereReferencePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnchereReferencePeer::clearInstancePool();
            CommonEnchereReferencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnchereReference or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnchereReference object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEnchereReferencePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnchereReference) { // it's a model object
            // invalidate the cache for this single object
            CommonEnchereReferencePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEnchereReferencePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEnchereReferencePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEnchereReferencePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereReferencePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnchereReferencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEnchereReference object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnchereReference $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnchereReferencePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnchereReferencePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnchereReferencePeer::DATABASE_NAME, CommonEnchereReferencePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEnchereReference
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonEnchereReferencePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereReferencePeer::ID, $id);
        $criteria->add(CommonEnchereReferencePeer::ORGANISME, $organisme);
        $v = CommonEnchereReferencePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEnchereReferencePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnchereReferencePeer::buildTableMap();

