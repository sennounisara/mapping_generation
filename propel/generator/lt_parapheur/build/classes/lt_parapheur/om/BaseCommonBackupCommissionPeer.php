<?php


/**
 * Base static class for performing query and update operations on the 'backup_Commission' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupCommissionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Commission';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupCommission';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupCommissionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 'backup_Commission.id';

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Commission.organisme';

    /** the column name for the date field */
    const DATE = 'backup_Commission.date';

    /** the column name for the lieu field */
    const LIEU = 'backup_Commission.lieu';

    /** the column name for the salle field */
    const SALLE = 'backup_Commission.salle';

    /** the column name for the type field */
    const TYPE = 'backup_Commission.type';

    /** the column name for the libelle field */
    const LIBELLE = 'backup_Commission.libelle';

    /** the column name for the ordre_du_jour field */
    const ORDRE_DU_JOUR = 'backup_Commission.ordre_du_jour';

    /** the column name for the invitations_zip field */
    const INVITATIONS_ZIP = 'backup_Commission.invitations_zip';

    /** the column name for the status_cao field */
    const STATUS_CAO = 'backup_Commission.status_cao';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupCommission objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupCommission[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupCommissionPeer::$fieldNames[CommonBackupCommissionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Date', 'Lieu', 'Salle', 'Type', 'Libelle', 'OrdreDuJour', 'InvitationsZip', 'StatusCao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'date', 'lieu', 'salle', 'type', 'libelle', 'ordreDuJour', 'invitationsZip', 'statusCao', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupCommissionPeer::ID, CommonBackupCommissionPeer::ORGANISME, CommonBackupCommissionPeer::DATE, CommonBackupCommissionPeer::LIEU, CommonBackupCommissionPeer::SALLE, CommonBackupCommissionPeer::TYPE, CommonBackupCommissionPeer::LIBELLE, CommonBackupCommissionPeer::ORDRE_DU_JOUR, CommonBackupCommissionPeer::INVITATIONS_ZIP, CommonBackupCommissionPeer::STATUS_CAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'DATE', 'LIEU', 'SALLE', 'TYPE', 'LIBELLE', 'ORDRE_DU_JOUR', 'INVITATIONS_ZIP', 'STATUS_CAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'date', 'lieu', 'salle', 'type', 'libelle', 'ordre_du_jour', 'invitations_zip', 'status_cao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupCommissionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Date' => 2, 'Lieu' => 3, 'Salle' => 4, 'Type' => 5, 'Libelle' => 6, 'OrdreDuJour' => 7, 'InvitationsZip' => 8, 'StatusCao' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'date' => 2, 'lieu' => 3, 'salle' => 4, 'type' => 5, 'libelle' => 6, 'ordreDuJour' => 7, 'invitationsZip' => 8, 'statusCao' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupCommissionPeer::ID => 0, CommonBackupCommissionPeer::ORGANISME => 1, CommonBackupCommissionPeer::DATE => 2, CommonBackupCommissionPeer::LIEU => 3, CommonBackupCommissionPeer::SALLE => 4, CommonBackupCommissionPeer::TYPE => 5, CommonBackupCommissionPeer::LIBELLE => 6, CommonBackupCommissionPeer::ORDRE_DU_JOUR => 7, CommonBackupCommissionPeer::INVITATIONS_ZIP => 8, CommonBackupCommissionPeer::STATUS_CAO => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'DATE' => 2, 'LIEU' => 3, 'SALLE' => 4, 'TYPE' => 5, 'LIBELLE' => 6, 'ORDRE_DU_JOUR' => 7, 'INVITATIONS_ZIP' => 8, 'STATUS_CAO' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'date' => 2, 'lieu' => 3, 'salle' => 4, 'type' => 5, 'libelle' => 6, 'ordre_du_jour' => 7, 'invitations_zip' => 8, 'status_cao' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = CommonBackupCommissionPeer::getFieldNames($toType);
        $key = isset(CommonBackupCommissionPeer::$fieldKeys[$fromType][$name]) ? CommonBackupCommissionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupCommissionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupCommissionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupCommissionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupCommissionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupCommissionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupCommissionPeer::ID);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::DATE);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::LIEU);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::SALLE);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::TYPE);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::LIBELLE);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::ORDRE_DU_JOUR);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::INVITATIONS_ZIP);
            $criteria->addSelectColumn(CommonBackupCommissionPeer::STATUS_CAO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.lieu');
            $criteria->addSelectColumn($alias . '.salle');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.ordre_du_jour');
            $criteria->addSelectColumn($alias . '.invitations_zip');
            $criteria->addSelectColumn($alias . '.status_cao');
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
        $criteria->setPrimaryTableName(CommonBackupCommissionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupCommissionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupCommissionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupCommission
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupCommissionPeer::doSelect($critcopy, $con);
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
        return CommonBackupCommissionPeer::populateObjects(CommonBackupCommissionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupCommissionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupCommissionPeer::DATABASE_NAME);

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
     * @param      CommonBackupCommission $obj A CommonBackupCommission object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBackupCommissionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupCommission object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupCommission) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupCommission object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupCommissionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupCommission Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupCommissionPeer::$instances[$key])) {
                return CommonBackupCommissionPeer::$instances[$key];
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
        foreach (CommonBackupCommissionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupCommissionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Commission
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
        $cls = CommonBackupCommissionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupCommissionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupCommissionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupCommission object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupCommissionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupCommissionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupCommissionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupCommissionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupCommissionPeer::DATABASE_NAME)->getTable(CommonBackupCommissionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupCommissionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupCommissionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupCommissionTableMap());
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
        return CommonBackupCommissionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupCommission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupCommission object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupCommission object
        }

        if ($criteria->containsKey(CommonBackupCommissionPeer::ID) && $criteria->keyContainsValue(CommonBackupCommissionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBackupCommissionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupCommissionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupCommission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupCommission object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupCommissionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupCommissionPeer::ID);
            $value = $criteria->remove(CommonBackupCommissionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonBackupCommissionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupCommissionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupCommissionPeer::ORGANISME);
            $value = $criteria->remove(CommonBackupCommissionPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupCommissionPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupCommissionPeer::TABLE_NAME);
            }

        } else { // $values is CommonBackupCommission object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupCommissionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Commission table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupCommissionPeer::TABLE_NAME, $con, CommonBackupCommissionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupCommissionPeer::clearInstancePool();
            CommonBackupCommissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupCommission or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupCommission object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupCommissionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupCommission) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupCommissionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupCommissionPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupCommissionPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupCommissionPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupCommissionPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupCommissionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupCommissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupCommission object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupCommission $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupCommissionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupCommissionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupCommissionPeer::DATABASE_NAME, CommonBackupCommissionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBackupCommission
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonBackupCommissionPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupCommissionPeer::DATABASE_NAME);
        $criteria->add(CommonBackupCommissionPeer::ID, $id);
        $criteria->add(CommonBackupCommissionPeer::ORGANISME, $organisme);
        $v = CommonBackupCommissionPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupCommissionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupCommissionPeer::buildTableMap();

