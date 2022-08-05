<?php


/**
 * Base static class for performing query and update operations on the 'DecisionLot' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDecisionLotPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'DecisionLot';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonDecisionLot';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonDecisionLotTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id_decision_lot field */
    const ID_DECISION_LOT = 'DecisionLot.id_decision_lot';

    /** the column name for the organisme field */
    const ORGANISME = 'DecisionLot.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'DecisionLot.consultation_ref';

    /** the column name for the lot field */
    const LOT = 'DecisionLot.lot';

    /** the column name for the id_type_decision field */
    const ID_TYPE_DECISION = 'DecisionLot.id_type_decision';

    /** the column name for the autre_a_preciser field */
    const AUTRE_A_PRECISER = 'DecisionLot.autre_a_preciser';

    /** the column name for the date_decision field */
    const DATE_DECISION = 'DecisionLot.date_decision';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'DecisionLot.commentaire';

    /** the column name for the date_maj field */
    const DATE_MAJ = 'DecisionLot.date_maj';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonDecisionLot objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonDecisionLot[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonDecisionLotPeer::$fieldNames[CommonDecisionLotPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDecisionLot', 'Organisme', 'ConsultationRef', 'Lot', 'IdTypeDecision', 'AutreAPreciser', 'DateDecision', 'Commentaire', 'DateMaj', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDecisionLot', 'organisme', 'consultationRef', 'lot', 'idTypeDecision', 'autreAPreciser', 'dateDecision', 'commentaire', 'dateMaj', ),
        BasePeer::TYPE_COLNAME => array (CommonDecisionLotPeer::ID_DECISION_LOT, CommonDecisionLotPeer::ORGANISME, CommonDecisionLotPeer::CONSULTATION_REF, CommonDecisionLotPeer::LOT, CommonDecisionLotPeer::ID_TYPE_DECISION, CommonDecisionLotPeer::AUTRE_A_PRECISER, CommonDecisionLotPeer::DATE_DECISION, CommonDecisionLotPeer::COMMENTAIRE, CommonDecisionLotPeer::DATE_MAJ, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DECISION_LOT', 'ORGANISME', 'CONSULTATION_REF', 'LOT', 'ID_TYPE_DECISION', 'AUTRE_A_PRECISER', 'DATE_DECISION', 'COMMENTAIRE', 'DATE_MAJ', ),
        BasePeer::TYPE_FIELDNAME => array ('id_decision_lot', 'organisme', 'consultation_ref', 'lot', 'id_type_decision', 'autre_a_preciser', 'date_decision', 'commentaire', 'date_maj', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonDecisionLotPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDecisionLot' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'Lot' => 3, 'IdTypeDecision' => 4, 'AutreAPreciser' => 5, 'DateDecision' => 6, 'Commentaire' => 7, 'DateMaj' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDecisionLot' => 0, 'organisme' => 1, 'consultationRef' => 2, 'lot' => 3, 'idTypeDecision' => 4, 'autreAPreciser' => 5, 'dateDecision' => 6, 'commentaire' => 7, 'dateMaj' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonDecisionLotPeer::ID_DECISION_LOT => 0, CommonDecisionLotPeer::ORGANISME => 1, CommonDecisionLotPeer::CONSULTATION_REF => 2, CommonDecisionLotPeer::LOT => 3, CommonDecisionLotPeer::ID_TYPE_DECISION => 4, CommonDecisionLotPeer::AUTRE_A_PRECISER => 5, CommonDecisionLotPeer::DATE_DECISION => 6, CommonDecisionLotPeer::COMMENTAIRE => 7, CommonDecisionLotPeer::DATE_MAJ => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DECISION_LOT' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'LOT' => 3, 'ID_TYPE_DECISION' => 4, 'AUTRE_A_PRECISER' => 5, 'DATE_DECISION' => 6, 'COMMENTAIRE' => 7, 'DATE_MAJ' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id_decision_lot' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'lot' => 3, 'id_type_decision' => 4, 'autre_a_preciser' => 5, 'date_decision' => 6, 'commentaire' => 7, 'date_maj' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = CommonDecisionLotPeer::getFieldNames($toType);
        $key = isset(CommonDecisionLotPeer::$fieldKeys[$fromType][$name]) ? CommonDecisionLotPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonDecisionLotPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonDecisionLotPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonDecisionLotPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonDecisionLotPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonDecisionLotPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonDecisionLotPeer::ID_DECISION_LOT);
            $criteria->addSelectColumn(CommonDecisionLotPeer::ORGANISME);
            $criteria->addSelectColumn(CommonDecisionLotPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonDecisionLotPeer::LOT);
            $criteria->addSelectColumn(CommonDecisionLotPeer::ID_TYPE_DECISION);
            $criteria->addSelectColumn(CommonDecisionLotPeer::AUTRE_A_PRECISER);
            $criteria->addSelectColumn(CommonDecisionLotPeer::DATE_DECISION);
            $criteria->addSelectColumn(CommonDecisionLotPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonDecisionLotPeer::DATE_MAJ);
        } else {
            $criteria->addSelectColumn($alias . '.id_decision_lot');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.id_type_decision');
            $criteria->addSelectColumn($alias . '.autre_a_preciser');
            $criteria->addSelectColumn($alias . '.date_decision');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.date_maj');
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
        $criteria->setPrimaryTableName(CommonDecisionLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDecisionLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonDecisionLotPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDecisionLot
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonDecisionLotPeer::doSelect($critcopy, $con);
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
        return CommonDecisionLotPeer::populateObjects(CommonDecisionLotPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonDecisionLotPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDecisionLotPeer::DATABASE_NAME);

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
     * @param      CommonDecisionLot $obj A CommonDecisionLot object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdDecisionLot(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonDecisionLotPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonDecisionLot object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonDecisionLot) {
                $key = serialize(array((string) $value->getIdDecisionLot(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonDecisionLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonDecisionLotPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonDecisionLot Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonDecisionLotPeer::$instances[$key])) {
                return CommonDecisionLotPeer::$instances[$key];
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
        foreach (CommonDecisionLotPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonDecisionLotPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to DecisionLot
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
        $cls = CommonDecisionLotPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonDecisionLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonDecisionLotPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonDecisionLotPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonDecisionLot object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonDecisionLotPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonDecisionLotPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonDecisionLotPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonDecisionLotPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonDecisionLotPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonDecisionLotPeer::DATABASE_NAME)->getTable(CommonDecisionLotPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonDecisionLotPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonDecisionLotPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonDecisionLotTableMap());
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
        return CommonDecisionLotPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonDecisionLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDecisionLot object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonDecisionLot object
        }

        if ($criteria->containsKey(CommonDecisionLotPeer::ID_DECISION_LOT) && $criteria->keyContainsValue(CommonDecisionLotPeer::ID_DECISION_LOT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonDecisionLotPeer::ID_DECISION_LOT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonDecisionLotPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonDecisionLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDecisionLot object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonDecisionLotPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonDecisionLotPeer::ID_DECISION_LOT);
            $value = $criteria->remove(CommonDecisionLotPeer::ID_DECISION_LOT);
            if ($value) {
                $selectCriteria->add(CommonDecisionLotPeer::ID_DECISION_LOT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDecisionLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonDecisionLotPeer::ORGANISME);
            $value = $criteria->remove(CommonDecisionLotPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonDecisionLotPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDecisionLotPeer::TABLE_NAME);
            }

        } else { // $values is CommonDecisionLot object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonDecisionLotPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the DecisionLot table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonDecisionLotPeer::TABLE_NAME, $con, CommonDecisionLotPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonDecisionLotPeer::clearInstancePool();
            CommonDecisionLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonDecisionLot or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonDecisionLot object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonDecisionLotPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonDecisionLot) { // it's a model object
            // invalidate the cache for this single object
            CommonDecisionLotPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonDecisionLotPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonDecisionLotPeer::ID_DECISION_LOT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonDecisionLotPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonDecisionLotPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDecisionLotPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonDecisionLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonDecisionLot object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonDecisionLot $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonDecisionLotPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonDecisionLotPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonDecisionLotPeer::DATABASE_NAME, CommonDecisionLotPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_decision_lot
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonDecisionLot
     */
    public static function retrieveByPK($id_decision_lot, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_decision_lot, (string) $organisme));
         if (null !== ($obj = CommonDecisionLotPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonDecisionLotPeer::DATABASE_NAME);
        $criteria->add(CommonDecisionLotPeer::ID_DECISION_LOT, $id_decision_lot);
        $criteria->add(CommonDecisionLotPeer::ORGANISME, $organisme);
        $v = CommonDecisionLotPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonDecisionLotPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonDecisionLotPeer::buildTableMap();

