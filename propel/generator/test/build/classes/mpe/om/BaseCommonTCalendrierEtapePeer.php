<?php


/**
 * Base static class for performing query and update operations on the 't_calendrier_etape' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCalendrierEtapePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_calendrier_etape';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCalendrierEtape';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCalendrierEtapeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the ID_CALENDRIER_ETAPE field */
    const ID_CALENDRIER_ETAPE = 't_calendrier_etape.ID_CALENDRIER_ETAPE';

    /** the column name for the ID_CALENDRIER field */
    const ID_CALENDRIER = 't_calendrier_etape.ID_CALENDRIER';

    /** the column name for the CODE field */
    const CODE = 't_calendrier_etape.CODE';

    /** the column name for the LIBELLE field */
    const LIBELLE = 't_calendrier_etape.LIBELLE';

    /** the column name for the DATE_INITIALE field */
    const DATE_INITIALE = 't_calendrier_etape.DATE_INITIALE';

    /** the column name for the DATE_PREVUE field */
    const DATE_PREVUE = 't_calendrier_etape.DATE_PREVUE';

    /** the column name for the POSITION field */
    const POSITION = 't_calendrier_etape.POSITION';

    /** the column name for the LIBRE field */
    const LIBRE = 't_calendrier_etape.LIBRE';

    /** the column name for the DATE_REELLE_CONFIRMEE field */
    const DATE_REELLE_CONFIRMEE = 't_calendrier_etape.DATE_REELLE_CONFIRMEE';

    /** The enumerated values for the DATE_REELLE_CONFIRMEE field */
    const DATE_REELLE_CONFIRMEE_0 = '0';
    const DATE_REELLE_CONFIRMEE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCalendrierEtape objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCalendrierEtape[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierEtapePeer::$fieldNames[CommonTCalendrierEtapePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdCalendrierEtape', 'IdCalendrier', 'Code', 'Libelle', 'DateInitiale', 'DatePrevue', 'Position', 'Libre', 'DateReelleConfirmee', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCalendrierEtape', 'idCalendrier', 'code', 'libelle', 'dateInitiale', 'datePrevue', 'position', 'libre', 'dateReelleConfirmee', ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, CommonTCalendrierEtapePeer::ID_CALENDRIER, CommonTCalendrierEtapePeer::CODE, CommonTCalendrierEtapePeer::LIBELLE, CommonTCalendrierEtapePeer::DATE_INITIALE, CommonTCalendrierEtapePeer::DATE_PREVUE, CommonTCalendrierEtapePeer::POSITION, CommonTCalendrierEtapePeer::LIBRE, CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CALENDRIER_ETAPE', 'ID_CALENDRIER', 'CODE', 'LIBELLE', 'DATE_INITIALE', 'DATE_PREVUE', 'POSITION', 'LIBRE', 'DATE_REELLE_CONFIRMEE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_CALENDRIER_ETAPE', 'ID_CALENDRIER', 'CODE', 'LIBELLE', 'DATE_INITIALE', 'DATE_PREVUE', 'POSITION', 'LIBRE', 'DATE_REELLE_CONFIRMEE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierEtapePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdCalendrierEtape' => 0, 'IdCalendrier' => 1, 'Code' => 2, 'Libelle' => 3, 'DateInitiale' => 4, 'DatePrevue' => 5, 'Position' => 6, 'Libre' => 7, 'DateReelleConfirmee' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCalendrierEtape' => 0, 'idCalendrier' => 1, 'code' => 2, 'libelle' => 3, 'dateInitiale' => 4, 'datePrevue' => 5, 'position' => 6, 'libre' => 7, 'dateReelleConfirmee' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE => 0, CommonTCalendrierEtapePeer::ID_CALENDRIER => 1, CommonTCalendrierEtapePeer::CODE => 2, CommonTCalendrierEtapePeer::LIBELLE => 3, CommonTCalendrierEtapePeer::DATE_INITIALE => 4, CommonTCalendrierEtapePeer::DATE_PREVUE => 5, CommonTCalendrierEtapePeer::POSITION => 6, CommonTCalendrierEtapePeer::LIBRE => 7, CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CALENDRIER_ETAPE' => 0, 'ID_CALENDRIER' => 1, 'CODE' => 2, 'LIBELLE' => 3, 'DATE_INITIALE' => 4, 'DATE_PREVUE' => 5, 'POSITION' => 6, 'LIBRE' => 7, 'DATE_REELLE_CONFIRMEE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_CALENDRIER_ETAPE' => 0, 'ID_CALENDRIER' => 1, 'CODE' => 2, 'LIBELLE' => 3, 'DATE_INITIALE' => 4, 'DATE_PREVUE' => 5, 'POSITION' => 6, 'LIBRE' => 7, 'DATE_REELLE_CONFIRMEE' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE => array(
            CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE_0,
            CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE_1,
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
        $toNames = CommonTCalendrierEtapePeer::getFieldNames($toType);
        $key = isset(CommonTCalendrierEtapePeer::$fieldKeys[$fromType][$name]) ? CommonTCalendrierEtapePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCalendrierEtapePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCalendrierEtapePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCalendrierEtapePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTCalendrierEtapePeer::$enumValueSets;
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
        $valueSets = CommonTCalendrierEtapePeer::getValueSets();

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
        $values = CommonTCalendrierEtapePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTCalendrierEtapePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCalendrierEtapePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::ID_CALENDRIER);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::CODE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::LIBELLE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::DATE_INITIALE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::DATE_PREVUE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::POSITION);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::LIBRE);
            $criteria->addSelectColumn(CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE);
        } else {
            $criteria->addSelectColumn($alias . '.ID_CALENDRIER_ETAPE');
            $criteria->addSelectColumn($alias . '.ID_CALENDRIER');
            $criteria->addSelectColumn($alias . '.CODE');
            $criteria->addSelectColumn($alias . '.LIBELLE');
            $criteria->addSelectColumn($alias . '.DATE_INITIALE');
            $criteria->addSelectColumn($alias . '.DATE_PREVUE');
            $criteria->addSelectColumn($alias . '.POSITION');
            $criteria->addSelectColumn($alias . '.LIBRE');
            $criteria->addSelectColumn($alias . '.DATE_REELLE_CONFIRMEE');
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
        $criteria->setPrimaryTableName(CommonTCalendrierEtapePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrierEtape
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCalendrierEtapePeer::doSelect($critcopy, $con);
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
        return CommonTCalendrierEtapePeer::populateObjects(CommonTCalendrierEtapePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

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
     * @param      CommonTCalendrierEtape $obj A CommonTCalendrierEtape object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdCalendrierEtape();
            } // if key === null
            CommonTCalendrierEtapePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCalendrierEtape object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCalendrierEtape) {
                $key = (string) $value->getIdCalendrierEtape();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCalendrierEtape object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCalendrierEtapePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCalendrierEtape Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCalendrierEtapePeer::$instances[$key])) {
                return CommonTCalendrierEtapePeer::$instances[$key];
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
        foreach (CommonTCalendrierEtapePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCalendrierEtapePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_calendrier_etape
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonTCalendrierTransitionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTCalendrierTransitionPeer::clearInstancePool();
        // Invalidate objects in CommonTCalendrierTransitionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTCalendrierTransitionPeer::clearInstancePool();
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
        $cls = CommonTCalendrierEtapePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCalendrierEtapePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCalendrierEtapePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCalendrierEtapePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCalendrierEtape object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCalendrierEtapePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCalendrierEtapePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCalendrierEtapePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCalendrierEtapePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCalendrierEtapePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTCalendrier table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCalendrier(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCalendrierEtapePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCalendrierEtapePeer::ID_CALENDRIER, CommonTCalendrierPeer::ID_CALENDRIER, $join_behavior);

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
     * Selects a collection of CommonTCalendrierEtape objects pre-filled with their CommonTCalendrier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCalendrierEtape objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCalendrier(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);
        }

        CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        $startcol = CommonTCalendrierEtapePeer::NUM_HYDRATE_COLUMNS;
        CommonTCalendrierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCalendrierEtapePeer::ID_CALENDRIER, CommonTCalendrierPeer::ID_CALENDRIER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCalendrierEtapePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCalendrierEtapePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCalendrierEtapePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCalendrierEtapePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCalendrierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCalendrierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCalendrierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCalendrierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCalendrierEtape) to $obj2 (CommonTCalendrier)
                $obj2->addCommonTCalendrierEtape($obj1);

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
        $criteria->setPrimaryTableName(CommonTCalendrierEtapePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCalendrierEtapePeer::ID_CALENDRIER, CommonTCalendrierPeer::ID_CALENDRIER, $join_behavior);

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
     * Selects a collection of CommonTCalendrierEtape objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCalendrierEtape objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);
        }

        CommonTCalendrierEtapePeer::addSelectColumns($criteria);
        $startcol2 = CommonTCalendrierEtapePeer::NUM_HYDRATE_COLUMNS;

        CommonTCalendrierPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCalendrierPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCalendrierEtapePeer::ID_CALENDRIER, CommonTCalendrierPeer::ID_CALENDRIER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCalendrierEtapePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCalendrierEtapePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCalendrierEtapePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCalendrierEtapePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTCalendrier rows

            $key2 = CommonTCalendrierPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTCalendrierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCalendrierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCalendrierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCalendrierEtape) to the collection in $obj2 (CommonTCalendrier)
                $obj2->addCommonTCalendrierEtape($obj1);
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
        return Propel::getDatabaseMap(CommonTCalendrierEtapePeer::DATABASE_NAME)->getTable(CommonTCalendrierEtapePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCalendrierEtapePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCalendrierEtapePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCalendrierEtapeTableMap());
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
        return CommonTCalendrierEtapePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCalendrierEtape or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtape object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCalendrierEtape object
        }

        if ($criteria->containsKey(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE) && $criteria->keyContainsValue(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCalendrierEtape or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtape object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE);
            $value = $criteria->remove(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierEtapePeer::TABLE_NAME);
            }

        } else { // $values is CommonTCalendrierEtape object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_calendrier_etape table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonTCalendrierEtapePeer::doOnDeleteCascade(new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonTCalendrierEtapePeer::TABLE_NAME, $con, CommonTCalendrierEtapePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCalendrierEtapePeer::clearInstancePool();
            CommonTCalendrierEtapePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCalendrierEtape or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtape object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCalendrierEtape) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);
            $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonTCalendrierEtapePeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonTCalendrierEtapePeer::clearInstancePool();
            } elseif ($values instanceof CommonTCalendrierEtape) { // it's a model object
                CommonTCalendrierEtapePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonTCalendrierEtapePeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCalendrierEtapePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonTCalendrierEtapePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonTCalendrierTransition objects
            $criteria = new Criteria(CommonTCalendrierTransitionPeer::DATABASE_NAME);
            
            $criteria->add(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $obj->getIdCalendrierEtape());
            $affectedRows += CommonTCalendrierTransitionPeer::doDelete($criteria, $con);

            // delete related CommonTCalendrierTransition objects
            $criteria = new Criteria(CommonTCalendrierTransitionPeer::DATABASE_NAME);
            
            $criteria->add(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $obj->getIdCalendrierEtape());
            $affectedRows += CommonTCalendrierTransitionPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonTCalendrierEtape object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCalendrierEtape $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCalendrierEtapePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCalendrierEtapePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCalendrierEtapePeer::DATABASE_NAME, CommonTCalendrierEtapePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTCalendrierEtape
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTCalendrierEtapePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $pk);

        $v = CommonTCalendrierEtapePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTCalendrierEtape[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);
            $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $pks, Criteria::IN);
            $objs = CommonTCalendrierEtapePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTCalendrierEtapePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCalendrierEtapePeer::buildTableMap();

