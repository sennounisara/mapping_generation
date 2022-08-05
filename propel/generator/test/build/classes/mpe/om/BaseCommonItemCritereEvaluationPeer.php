<?php


/**
 * Base static class for performing query and update operations on the 'ItemCritereEvaluation' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonItemCritereEvaluationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ItemCritereEvaluation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonItemCritereEvaluation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonItemCritereEvaluationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'ItemCritereEvaluation.id';

    /** the column name for the idCritereEvaluation field */
    const IDCRITEREEVALUATION = 'ItemCritereEvaluation.idCritereEvaluation';

    /** the column name for the libelle field */
    const LIBELLE = 'ItemCritereEvaluation.libelle';

    /** the column name for the prix field */
    const PRIX = 'ItemCritereEvaluation.prix';

    /** the column name for the quantite field */
    const QUANTITE = 'ItemCritereEvaluation.quantite';

    /** the column name for the ponderation field */
    const PONDERATION = 'ItemCritereEvaluation.ponderation';

    /** the column name for the numero field */
    const NUMERO = 'ItemCritereEvaluation.numero';

    /** the column name for the regle_evaluation field */
    const REGLE_EVALUATION = 'ItemCritereEvaluation.regle_evaluation';

    /** the column name for the type_item field */
    const TYPE_ITEM = 'ItemCritereEvaluation.type_item';

    /** The enumerated values for the prix field */
    const PRIX_0 = '0';
    const PRIX_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonItemCritereEvaluation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonItemCritereEvaluation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonItemCritereEvaluationPeer::$fieldNames[CommonItemCritereEvaluationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Idcritereevaluation', 'Libelle', 'Prix', 'Quantite', 'Ponderation', 'Numero', 'RegleEvaluation', 'TypeItem', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idcritereevaluation', 'libelle', 'prix', 'quantite', 'ponderation', 'numero', 'regleEvaluation', 'typeItem', ),
        BasePeer::TYPE_COLNAME => array (CommonItemCritereEvaluationPeer::ID, CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, CommonItemCritereEvaluationPeer::LIBELLE, CommonItemCritereEvaluationPeer::PRIX, CommonItemCritereEvaluationPeer::QUANTITE, CommonItemCritereEvaluationPeer::PONDERATION, CommonItemCritereEvaluationPeer::NUMERO, CommonItemCritereEvaluationPeer::REGLE_EVALUATION, CommonItemCritereEvaluationPeer::TYPE_ITEM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDCRITEREEVALUATION', 'LIBELLE', 'PRIX', 'QUANTITE', 'PONDERATION', 'NUMERO', 'REGLE_EVALUATION', 'TYPE_ITEM', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idCritereEvaluation', 'libelle', 'prix', 'quantite', 'ponderation', 'numero', 'regle_evaluation', 'type_item', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonItemCritereEvaluationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Idcritereevaluation' => 1, 'Libelle' => 2, 'Prix' => 3, 'Quantite' => 4, 'Ponderation' => 5, 'Numero' => 6, 'RegleEvaluation' => 7, 'TypeItem' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idcritereevaluation' => 1, 'libelle' => 2, 'prix' => 3, 'quantite' => 4, 'ponderation' => 5, 'numero' => 6, 'regleEvaluation' => 7, 'typeItem' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonItemCritereEvaluationPeer::ID => 0, CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION => 1, CommonItemCritereEvaluationPeer::LIBELLE => 2, CommonItemCritereEvaluationPeer::PRIX => 3, CommonItemCritereEvaluationPeer::QUANTITE => 4, CommonItemCritereEvaluationPeer::PONDERATION => 5, CommonItemCritereEvaluationPeer::NUMERO => 6, CommonItemCritereEvaluationPeer::REGLE_EVALUATION => 7, CommonItemCritereEvaluationPeer::TYPE_ITEM => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDCRITEREEVALUATION' => 1, 'LIBELLE' => 2, 'PRIX' => 3, 'QUANTITE' => 4, 'PONDERATION' => 5, 'NUMERO' => 6, 'REGLE_EVALUATION' => 7, 'TYPE_ITEM' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idCritereEvaluation' => 1, 'libelle' => 2, 'prix' => 3, 'quantite' => 4, 'ponderation' => 5, 'numero' => 6, 'regle_evaluation' => 7, 'type_item' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonItemCritereEvaluationPeer::PRIX => array(
            CommonItemCritereEvaluationPeer::PRIX_0,
            CommonItemCritereEvaluationPeer::PRIX_1,
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
        $toNames = CommonItemCritereEvaluationPeer::getFieldNames($toType);
        $key = isset(CommonItemCritereEvaluationPeer::$fieldKeys[$fromType][$name]) ? CommonItemCritereEvaluationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonItemCritereEvaluationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonItemCritereEvaluationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonItemCritereEvaluationPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonItemCritereEvaluationPeer::$enumValueSets;
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
        $valueSets = CommonItemCritereEvaluationPeer::getValueSets();

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
        $values = CommonItemCritereEvaluationPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonItemCritereEvaluationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonItemCritereEvaluationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::ID);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::LIBELLE);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::PRIX);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::QUANTITE);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::PONDERATION);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::NUMERO);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::REGLE_EVALUATION);
            $criteria->addSelectColumn(CommonItemCritereEvaluationPeer::TYPE_ITEM);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idCritereEvaluation');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.prix');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.ponderation');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.regle_evaluation');
            $criteria->addSelectColumn($alias . '.type_item');
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
        $criteria->setPrimaryTableName(CommonItemCritereEvaluationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonItemCritereEvaluationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonItemCritereEvaluation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonItemCritereEvaluationPeer::doSelect($critcopy, $con);
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
        return CommonItemCritereEvaluationPeer::populateObjects(CommonItemCritereEvaluationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonItemCritereEvaluationPeer::DATABASE_NAME);

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
     * @param      CommonItemCritereEvaluation $obj A CommonItemCritereEvaluation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonItemCritereEvaluationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonItemCritereEvaluation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonItemCritereEvaluation) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonItemCritereEvaluation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonItemCritereEvaluationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonItemCritereEvaluation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonItemCritereEvaluationPeer::$instances[$key])) {
                return CommonItemCritereEvaluationPeer::$instances[$key];
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
        foreach (CommonItemCritereEvaluationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonItemCritereEvaluationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ItemCritereEvaluation
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
        $cls = CommonItemCritereEvaluationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonItemCritereEvaluationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonItemCritereEvaluationPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonItemCritereEvaluation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonItemCritereEvaluationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonItemCritereEvaluationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonItemCritereEvaluationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonItemCritereEvaluationPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonItemCritereEvaluationPeer::DATABASE_NAME)->getTable(CommonItemCritereEvaluationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonItemCritereEvaluationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonItemCritereEvaluationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonItemCritereEvaluationTableMap());
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
        return CommonItemCritereEvaluationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonItemCritereEvaluation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonItemCritereEvaluation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonItemCritereEvaluation object
        }

        if ($criteria->containsKey(CommonItemCritereEvaluationPeer::ID) && $criteria->keyContainsValue(CommonItemCritereEvaluationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonItemCritereEvaluationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonItemCritereEvaluationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonItemCritereEvaluation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonItemCritereEvaluation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonItemCritereEvaluationPeer::ID);
            $value = $criteria->remove(CommonItemCritereEvaluationPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonItemCritereEvaluationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonItemCritereEvaluationPeer::TABLE_NAME);
            }

        } else { // $values is CommonItemCritereEvaluation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonItemCritereEvaluationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ItemCritereEvaluation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonItemCritereEvaluationPeer::TABLE_NAME, $con, CommonItemCritereEvaluationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonItemCritereEvaluationPeer::clearInstancePool();
            CommonItemCritereEvaluationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonItemCritereEvaluation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonItemCritereEvaluation object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonItemCritereEvaluationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonItemCritereEvaluation) { // it's a model object
            // invalidate the cache for this single object
            CommonItemCritereEvaluationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);
            $criteria->add(CommonItemCritereEvaluationPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonItemCritereEvaluationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonItemCritereEvaluationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonItemCritereEvaluationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonItemCritereEvaluation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonItemCritereEvaluation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonItemCritereEvaluationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonItemCritereEvaluationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonItemCritereEvaluationPeer::DATABASE_NAME, CommonItemCritereEvaluationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonItemCritereEvaluation
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonItemCritereEvaluationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);
        $criteria->add(CommonItemCritereEvaluationPeer::ID, $pk);

        $v = CommonItemCritereEvaluationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonItemCritereEvaluation[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);
            $criteria->add(CommonItemCritereEvaluationPeer::ID, $pks, Criteria::IN);
            $objs = CommonItemCritereEvaluationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonItemCritereEvaluationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonItemCritereEvaluationPeer::buildTableMap();

