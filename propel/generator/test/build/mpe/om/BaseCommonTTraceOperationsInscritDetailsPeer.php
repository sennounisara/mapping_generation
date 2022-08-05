<?php


/**
 * Base static class for performing query and update operations on the 'T_trace_operations_inscrit_details' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTTraceOperationsInscritDetailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'T_trace_operations_inscrit_details';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTTraceOperationsInscritDetails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTTraceOperationsInscritDetailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 'T_trace_operations_inscrit_details.id';

    /** the column name for the id_trace field */
    const ID_TRACE = 'T_trace_operations_inscrit_details.id_trace';

    /** the column name for the date_debut_action field */
    const DATE_DEBUT_ACTION = 'T_trace_operations_inscrit_details.date_debut_action';

    /** the column name for the nom_action field */
    const NOM_ACTION = 'T_trace_operations_inscrit_details.nom_action';

    /** the column name for the details field */
    const DETAILS = 'T_trace_operations_inscrit_details.details';

    /** the column name for the date_fin_action field */
    const DATE_FIN_ACTION = 'T_trace_operations_inscrit_details.date_fin_action';

    /** the column name for the id_description field */
    const ID_DESCRIPTION = 'T_trace_operations_inscrit_details.id_description';

    /** the column name for the afficher field */
    const AFFICHER = 'T_trace_operations_inscrit_details.afficher';

    /** the column name for the descripton field */
    const DESCRIPTON = 'T_trace_operations_inscrit_details.descripton';

    /** the column name for the log_applet field */
    const LOG_APPLET = 'T_trace_operations_inscrit_details.log_applet';

    /** The enumerated values for the afficher field */
    const AFFICHER_0 = '0';
    const AFFICHER_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTTraceOperationsInscritDetails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTTraceOperationsInscritDetails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTTraceOperationsInscritDetailsPeer::$fieldNames[CommonTTraceOperationsInscritDetailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdTrace', 'DateDebutAction', 'NomAction', 'Details', 'DateFinAction', 'IdDescription', 'Afficher', 'Descripton', 'LogApplet', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idTrace', 'dateDebutAction', 'nomAction', 'details', 'dateFinAction', 'idDescription', 'afficher', 'descripton', 'logApplet', ),
        BasePeer::TYPE_COLNAME => array (CommonTTraceOperationsInscritDetailsPeer::ID, CommonTTraceOperationsInscritDetailsPeer::ID_TRACE, CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION, CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION, CommonTTraceOperationsInscritDetailsPeer::DETAILS, CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION, CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION, CommonTTraceOperationsInscritDetailsPeer::AFFICHER, CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON, CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_TRACE', 'DATE_DEBUT_ACTION', 'NOM_ACTION', 'DETAILS', 'DATE_FIN_ACTION', 'ID_DESCRIPTION', 'AFFICHER', 'DESCRIPTON', 'LOG_APPLET', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_trace', 'date_debut_action', 'nom_action', 'details', 'date_fin_action', 'id_description', 'afficher', 'descripton', 'log_applet', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTTraceOperationsInscritDetailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdTrace' => 1, 'DateDebutAction' => 2, 'NomAction' => 3, 'Details' => 4, 'DateFinAction' => 5, 'IdDescription' => 6, 'Afficher' => 7, 'Descripton' => 8, 'LogApplet' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idTrace' => 1, 'dateDebutAction' => 2, 'nomAction' => 3, 'details' => 4, 'dateFinAction' => 5, 'idDescription' => 6, 'afficher' => 7, 'descripton' => 8, 'logApplet' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonTTraceOperationsInscritDetailsPeer::ID => 0, CommonTTraceOperationsInscritDetailsPeer::ID_TRACE => 1, CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION => 2, CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION => 3, CommonTTraceOperationsInscritDetailsPeer::DETAILS => 4, CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION => 5, CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION => 6, CommonTTraceOperationsInscritDetailsPeer::AFFICHER => 7, CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON => 8, CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_TRACE' => 1, 'DATE_DEBUT_ACTION' => 2, 'NOM_ACTION' => 3, 'DETAILS' => 4, 'DATE_FIN_ACTION' => 5, 'ID_DESCRIPTION' => 6, 'AFFICHER' => 7, 'DESCRIPTON' => 8, 'LOG_APPLET' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_trace' => 1, 'date_debut_action' => 2, 'nom_action' => 3, 'details' => 4, 'date_fin_action' => 5, 'id_description' => 6, 'afficher' => 7, 'descripton' => 8, 'log_applet' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTTraceOperationsInscritDetailsPeer::AFFICHER => array(
            CommonTTraceOperationsInscritDetailsPeer::AFFICHER_0,
            CommonTTraceOperationsInscritDetailsPeer::AFFICHER_1,
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
        $toNames = CommonTTraceOperationsInscritDetailsPeer::getFieldNames($toType);
        $key = isset(CommonTTraceOperationsInscritDetailsPeer::$fieldKeys[$fromType][$name]) ? CommonTTraceOperationsInscritDetailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTTraceOperationsInscritDetailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTTraceOperationsInscritDetailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTTraceOperationsInscritDetailsPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTTraceOperationsInscritDetailsPeer::$enumValueSets;
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
        $valueSets = CommonTTraceOperationsInscritDetailsPeer::getValueSets();

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
        $values = CommonTTraceOperationsInscritDetailsPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTTraceOperationsInscritDetailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::ID);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::DETAILS);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::AFFICHER);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON);
            $criteria->addSelectColumn(CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_trace');
            $criteria->addSelectColumn($alias . '.date_debut_action');
            $criteria->addSelectColumn($alias . '.nom_action');
            $criteria->addSelectColumn($alias . '.details');
            $criteria->addSelectColumn($alias . '.date_fin_action');
            $criteria->addSelectColumn($alias . '.id_description');
            $criteria->addSelectColumn($alias . '.afficher');
            $criteria->addSelectColumn($alias . '.descripton');
            $criteria->addSelectColumn($alias . '.log_applet');
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
        $criteria->setPrimaryTableName(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTraceOperationsInscritDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTraceOperationsInscritDetails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTTraceOperationsInscritDetailsPeer::doSelect($critcopy, $con);
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
        return CommonTTraceOperationsInscritDetailsPeer::populateObjects(CommonTTraceOperationsInscritDetailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTTraceOperationsInscritDetailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

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
     * @param      CommonTTraceOperationsInscritDetails $obj A CommonTTraceOperationsInscritDetails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTTraceOperationsInscritDetailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTTraceOperationsInscritDetails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTTraceOperationsInscritDetails) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTTraceOperationsInscritDetails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTTraceOperationsInscritDetailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTTraceOperationsInscritDetails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTTraceOperationsInscritDetailsPeer::$instances[$key])) {
                return CommonTTraceOperationsInscritDetailsPeer::$instances[$key];
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
        foreach (CommonTTraceOperationsInscritDetailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTTraceOperationsInscritDetailsPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to T_trace_operations_inscrit_details
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
        $cls = CommonTTraceOperationsInscritDetailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTTraceOperationsInscritDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTTraceOperationsInscritDetailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTTraceOperationsInscritDetailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTTraceOperationsInscritDetails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTTraceOperationsInscritDetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTTraceOperationsInscritDetailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTTraceOperationsInscritDetailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTTraceOperationsInscritDetailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTTraceOperationsInscritDetailsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME)->getTable(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTTraceOperationsInscritDetailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTTraceOperationsInscritDetailsTableMap());
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
        return CommonTTraceOperationsInscritDetailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTTraceOperationsInscritDetails or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTTraceOperationsInscritDetails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTTraceOperationsInscritDetails object
        }

        if ($criteria->containsKey(CommonTTraceOperationsInscritDetailsPeer::ID) && $criteria->keyContainsValue(CommonTTraceOperationsInscritDetailsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTTraceOperationsInscritDetailsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTTraceOperationsInscritDetails or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTTraceOperationsInscritDetails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTTraceOperationsInscritDetailsPeer::ID);
            $value = $criteria->remove(CommonTTraceOperationsInscritDetailsPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME);
            }

        } else { // $values is CommonTTraceOperationsInscritDetails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the T_trace_operations_inscrit_details table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME, $con, CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTTraceOperationsInscritDetailsPeer::clearInstancePool();
            CommonTTraceOperationsInscritDetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTTraceOperationsInscritDetails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTTraceOperationsInscritDetails object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTTraceOperationsInscritDetailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTTraceOperationsInscritDetails) { // it's a model object
            // invalidate the cache for this single object
            CommonTTraceOperationsInscritDetailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
            $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTTraceOperationsInscritDetailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTTraceOperationsInscritDetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTTraceOperationsInscritDetails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTTraceOperationsInscritDetails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, CommonTTraceOperationsInscritDetailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTTraceOperationsInscritDetails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTTraceOperationsInscritDetailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
        $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, $pk);

        $v = CommonTTraceOperationsInscritDetailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTTraceOperationsInscritDetails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
            $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, $pks, Criteria::IN);
            $objs = CommonTTraceOperationsInscritDetailsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTTraceOperationsInscritDetailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTTraceOperationsInscritDetailsPeer::buildTableMap();

