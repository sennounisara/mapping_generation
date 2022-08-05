<?php


/**
 * Base static class for performing query and update operations on the 'changement_heure' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonChangementHeurePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'changement_heure';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonChangementHeure';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonChangementHeureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 4;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 4;

    /** the column name for the organisme field */
    const ORGANISME = 'changement_heure.organisme';

    /** the column name for the date_debut_zone field */
    const DATE_DEBUT_ZONE = 'changement_heure.date_debut_zone';

    /** the column name for the date_fin_zone field */
    const DATE_FIN_ZONE = 'changement_heure.date_fin_zone';

    /** the column name for the decalage field */
    const DECALAGE = 'changement_heure.decalage';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonChangementHeure objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonChangementHeure[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonChangementHeurePeer::$fieldNames[CommonChangementHeurePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme', 'DateDebutZone', 'DateFinZone', 'Decalage', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme', 'dateDebutZone', 'dateFinZone', 'decalage', ),
        BasePeer::TYPE_COLNAME => array (CommonChangementHeurePeer::ORGANISME, CommonChangementHeurePeer::DATE_DEBUT_ZONE, CommonChangementHeurePeer::DATE_FIN_ZONE, CommonChangementHeurePeer::DECALAGE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME', 'DATE_DEBUT_ZONE', 'DATE_FIN_ZONE', 'DECALAGE', ),
        BasePeer::TYPE_FIELDNAME => array ('organisme', 'date_debut_zone', 'date_fin_zone', 'decalage', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonChangementHeurePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme' => 0, 'DateDebutZone' => 1, 'DateFinZone' => 2, 'Decalage' => 3, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme' => 0, 'dateDebutZone' => 1, 'dateFinZone' => 2, 'decalage' => 3, ),
        BasePeer::TYPE_COLNAME => array (CommonChangementHeurePeer::ORGANISME => 0, CommonChangementHeurePeer::DATE_DEBUT_ZONE => 1, CommonChangementHeurePeer::DATE_FIN_ZONE => 2, CommonChangementHeurePeer::DECALAGE => 3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME' => 0, 'DATE_DEBUT_ZONE' => 1, 'DATE_FIN_ZONE' => 2, 'DECALAGE' => 3, ),
        BasePeer::TYPE_FIELDNAME => array ('organisme' => 0, 'date_debut_zone' => 1, 'date_fin_zone' => 2, 'decalage' => 3, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
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
        $toNames = CommonChangementHeurePeer::getFieldNames($toType);
        $key = isset(CommonChangementHeurePeer::$fieldKeys[$fromType][$name]) ? CommonChangementHeurePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonChangementHeurePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonChangementHeurePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonChangementHeurePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonChangementHeurePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonChangementHeurePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonChangementHeurePeer::ORGANISME);
            $criteria->addSelectColumn(CommonChangementHeurePeer::DATE_DEBUT_ZONE);
            $criteria->addSelectColumn(CommonChangementHeurePeer::DATE_FIN_ZONE);
            $criteria->addSelectColumn(CommonChangementHeurePeer::DECALAGE);
        } else {
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.date_debut_zone');
            $criteria->addSelectColumn($alias . '.date_fin_zone');
            $criteria->addSelectColumn($alias . '.decalage');
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
        $criteria->setPrimaryTableName(CommonChangementHeurePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonChangementHeurePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonChangementHeurePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChangementHeure
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonChangementHeurePeer::doSelect($critcopy, $con);
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
        return CommonChangementHeurePeer::populateObjects(CommonChangementHeurePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonChangementHeurePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChangementHeurePeer::DATABASE_NAME);

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
     * @param      CommonChangementHeure $obj A CommonChangementHeure object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getOrganisme(), (string) $obj->getDateDebutZone('U'), (string) $obj->getDateFinZone('U')));
            } // if key === null
            CommonChangementHeurePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonChangementHeure object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonChangementHeure) {
                $key = serialize(array((string) $value->getOrganisme(), (string) $value->getDateDebutZone(), (string) $value->getDateFinZone()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonChangementHeure object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonChangementHeurePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonChangementHeure Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonChangementHeurePeer::$instances[$key])) {
                return CommonChangementHeurePeer::$instances[$key];
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
        foreach (CommonChangementHeurePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonChangementHeurePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to changement_heure
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

        return array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = CommonChangementHeurePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonChangementHeurePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonChangementHeurePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonChangementHeurePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonChangementHeure object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonChangementHeurePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonChangementHeurePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonChangementHeurePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonChangementHeurePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonChangementHeurePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonChangementHeurePeer::DATABASE_NAME)->getTable(CommonChangementHeurePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonChangementHeurePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonChangementHeurePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonChangementHeureTableMap());
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
        return CommonChangementHeurePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonChangementHeure or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChangementHeure object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonChangementHeure object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonChangementHeurePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonChangementHeure or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChangementHeure object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonChangementHeurePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonChangementHeurePeer::ORGANISME);
            $value = $criteria->remove(CommonChangementHeurePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonChangementHeurePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChangementHeurePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonChangementHeurePeer::DATE_DEBUT_ZONE);
            $value = $criteria->remove(CommonChangementHeurePeer::DATE_DEBUT_ZONE);
            if ($value) {
                $selectCriteria->add(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChangementHeurePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonChangementHeurePeer::DATE_FIN_ZONE);
            $value = $criteria->remove(CommonChangementHeurePeer::DATE_FIN_ZONE);
            if ($value) {
                $selectCriteria->add(CommonChangementHeurePeer::DATE_FIN_ZONE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChangementHeurePeer::TABLE_NAME);
            }

        } else { // $values is CommonChangementHeure object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonChangementHeurePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the changement_heure table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonChangementHeurePeer::TABLE_NAME, $con, CommonChangementHeurePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonChangementHeurePeer::clearInstancePool();
            CommonChangementHeurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonChangementHeure or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonChangementHeure object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonChangementHeurePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonChangementHeure) { // it's a model object
            // invalidate the cache for this single object
            CommonChangementHeurePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonChangementHeurePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonChangementHeurePeer::ORGANISME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonChangementHeurePeer::DATE_FIN_ZONE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonChangementHeurePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChangementHeurePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonChangementHeurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonChangementHeure object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonChangementHeure $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonChangementHeurePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonChangementHeurePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonChangementHeurePeer::DATABASE_NAME, CommonChangementHeurePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $organisme
     * @param   string $date_debut_zone
     * @param   string $date_fin_zone
     * @param      PropelPDO $con
     * @return   CommonChangementHeure
     */
    public static function retrieveByPK($organisme, $date_debut_zone, $date_fin_zone, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $organisme, (string) $date_debut_zone, (string) $date_fin_zone));
         if (null !== ($obj = CommonChangementHeurePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonChangementHeurePeer::DATABASE_NAME);
        $criteria->add(CommonChangementHeurePeer::ORGANISME, $organisme);
        $criteria->add(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $date_debut_zone);
        $criteria->add(CommonChangementHeurePeer::DATE_FIN_ZONE, $date_fin_zone);
        $v = CommonChangementHeurePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonChangementHeurePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonChangementHeurePeer::buildTableMap();

