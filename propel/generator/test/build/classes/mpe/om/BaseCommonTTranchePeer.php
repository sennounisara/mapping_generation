<?php


/**
 * Base static class for performing query and update operations on the 't_tranche' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTTranchePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_tranche';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTTranche';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTTrancheTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the id_tranche field */
    const ID_TRANCHE = 't_tranche.id_tranche';

    /** the column name for the id_forme_prix field */
    const ID_FORME_PRIX = 't_tranche.id_forme_prix';

    /** the column name for the id_donnee_complementaire field */
    const ID_DONNEE_COMPLEMENTAIRE = 't_tranche.id_donnee_complementaire';

    /** the column name for the nature_tranche field */
    const NATURE_TRANCHE = 't_tranche.nature_tranche';

    /** the column name for the code_tranche field */
    const CODE_TRANCHE = 't_tranche.code_tranche';

    /** the column name for the intitule_tranche field */
    const INTITULE_TRANCHE = 't_tranche.intitule_tranche';

    /** The enumerated values for the nature_tranche field */
    const NATURE_TRANCHE_TF = 'TF';
    const NATURE_TRANCHE_TC = 'TC';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTTranche objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTTranche[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTTranchePeer::$fieldNames[CommonTTranchePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTranche', 'IdFormePrix', 'IdDonneeComplementaire', 'NatureTranche', 'CodeTranche', 'IntituleTranche', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTranche', 'idFormePrix', 'idDonneeComplementaire', 'natureTranche', 'codeTranche', 'intituleTranche', ),
        BasePeer::TYPE_COLNAME => array (CommonTTranchePeer::ID_TRANCHE, CommonTTranchePeer::ID_FORME_PRIX, CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTTranchePeer::NATURE_TRANCHE, CommonTTranchePeer::CODE_TRANCHE, CommonTTranchePeer::INTITULE_TRANCHE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TRANCHE', 'ID_FORME_PRIX', 'ID_DONNEE_COMPLEMENTAIRE', 'NATURE_TRANCHE', 'CODE_TRANCHE', 'INTITULE_TRANCHE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_tranche', 'id_forme_prix', 'id_donnee_complementaire', 'nature_tranche', 'code_tranche', 'intitule_tranche', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTTranchePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTranche' => 0, 'IdFormePrix' => 1, 'IdDonneeComplementaire' => 2, 'NatureTranche' => 3, 'CodeTranche' => 4, 'IntituleTranche' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTranche' => 0, 'idFormePrix' => 1, 'idDonneeComplementaire' => 2, 'natureTranche' => 3, 'codeTranche' => 4, 'intituleTranche' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonTTranchePeer::ID_TRANCHE => 0, CommonTTranchePeer::ID_FORME_PRIX => 1, CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE => 2, CommonTTranchePeer::NATURE_TRANCHE => 3, CommonTTranchePeer::CODE_TRANCHE => 4, CommonTTranchePeer::INTITULE_TRANCHE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TRANCHE' => 0, 'ID_FORME_PRIX' => 1, 'ID_DONNEE_COMPLEMENTAIRE' => 2, 'NATURE_TRANCHE' => 3, 'CODE_TRANCHE' => 4, 'INTITULE_TRANCHE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id_tranche' => 0, 'id_forme_prix' => 1, 'id_donnee_complementaire' => 2, 'nature_tranche' => 3, 'code_tranche' => 4, 'intitule_tranche' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTTranchePeer::NATURE_TRANCHE => array(
            CommonTTranchePeer::NATURE_TRANCHE_TF,
            CommonTTranchePeer::NATURE_TRANCHE_TC,
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
        $toNames = CommonTTranchePeer::getFieldNames($toType);
        $key = isset(CommonTTranchePeer::$fieldKeys[$fromType][$name]) ? CommonTTranchePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTTranchePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTTranchePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTTranchePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTTranchePeer::$enumValueSets;
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
        $valueSets = CommonTTranchePeer::getValueSets();

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
        $values = CommonTTranchePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTTranchePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTTranchePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTTranchePeer::ID_TRANCHE);
            $criteria->addSelectColumn(CommonTTranchePeer::ID_FORME_PRIX);
            $criteria->addSelectColumn(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE);
            $criteria->addSelectColumn(CommonTTranchePeer::NATURE_TRANCHE);
            $criteria->addSelectColumn(CommonTTranchePeer::CODE_TRANCHE);
            $criteria->addSelectColumn(CommonTTranchePeer::INTITULE_TRANCHE);
        } else {
            $criteria->addSelectColumn($alias . '.id_tranche');
            $criteria->addSelectColumn($alias . '.id_forme_prix');
            $criteria->addSelectColumn($alias . '.id_donnee_complementaire');
            $criteria->addSelectColumn($alias . '.nature_tranche');
            $criteria->addSelectColumn($alias . '.code_tranche');
            $criteria->addSelectColumn($alias . '.intitule_tranche');
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
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTranche
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTTranchePeer::doSelect($critcopy, $con);
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
        return CommonTTranchePeer::populateObjects(CommonTTranchePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

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
     * @param      CommonTTranche $obj A CommonTTranche object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTranche();
            } // if key === null
            CommonTTranchePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTTranche object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTTranche) {
                $key = (string) $value->getIdTranche();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTTranche object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTTranchePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTTranche Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTTranchePeer::$instances[$key])) {
                return CommonTTranchePeer::$instances[$key];
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
        foreach (CommonTTranchePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTTranchePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_tranche
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
        $cls = CommonTTranchePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTTranchePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTTranchePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTTranche object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTTranchePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTTranchePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTTranchePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTTranchePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTDonneeComplementaire table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTDonneeComplementaire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTFormePrix table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTFormePrix(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);

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
     * Selects a collection of CommonTTranche objects pre-filled with their CommonTDonneeComplementaire objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTTranche objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTDonneeComplementaire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);
        }

        CommonTTranchePeer::addSelectColumns($criteria);
        $startcol = CommonTTranchePeer::NUM_HYDRATE_COLUMNS;
        CommonTDonneeComplementairePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTTranchePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTTranchePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTTranchePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTDonneeComplementairePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTDonneeComplementairePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTDonneeComplementairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTDonneeComplementairePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTTranche) to $obj2 (CommonTDonneeComplementaire)
                $obj2->addCommonTTranche($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTTranche objects pre-filled with their CommonTFormePrix objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTTranche objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTFormePrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);
        }

        CommonTTranchePeer::addSelectColumns($criteria);
        $startcol = CommonTTranchePeer::NUM_HYDRATE_COLUMNS;
        CommonTFormePrixPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTTranchePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTTranchePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTTranchePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTFormePrixPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTFormePrixPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTFormePrixPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTFormePrixPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTTranche) to $obj2 (CommonTFormePrix)
                $obj2->addCommonTTranche($obj1);

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
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);

        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);

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
     * Selects a collection of CommonTTranche objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTTranche objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);
        }

        CommonTTranchePeer::addSelectColumns($criteria);
        $startcol2 = CommonTTranchePeer::NUM_HYDRATE_COLUMNS;

        CommonTDonneeComplementairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTDonneeComplementairePeer::NUM_HYDRATE_COLUMNS;

        CommonTFormePrixPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonTFormePrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);

        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTTranchePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTTranchePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTTranchePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTDonneeComplementaire rows

            $key2 = CommonTDonneeComplementairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTDonneeComplementairePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTDonneeComplementairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTDonneeComplementairePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTTranche) to the collection in $obj2 (CommonTDonneeComplementaire)
                $obj2->addCommonTTranche($obj1);
            } // if joined row not null

            // Add objects for joined CommonTFormePrix rows

            $key3 = CommonTFormePrixPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonTFormePrixPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonTFormePrixPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonTFormePrixPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonTTranche) to the collection in $obj3 (CommonTFormePrix)
                $obj3->addCommonTTranche($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTDonneeComplementaire table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTDonneeComplementaire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTFormePrix table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTFormePrix(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTTranchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);

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
     * Selects a collection of CommonTTranche objects pre-filled with all related objects except CommonTDonneeComplementaire.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTTranche objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTDonneeComplementaire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);
        }

        CommonTTranchePeer::addSelectColumns($criteria);
        $startcol2 = CommonTTranchePeer::NUM_HYDRATE_COLUMNS;

        CommonTFormePrixPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTFormePrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTTranchePeer::ID_FORME_PRIX, CommonTFormePrixPeer::ID_FORME_PRIX, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTTranchePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTTranchePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTTranchePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTFormePrix rows

                $key2 = CommonTFormePrixPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTFormePrixPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTFormePrixPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTFormePrixPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTTranche) to the collection in $obj2 (CommonTFormePrix)
                $obj2->addCommonTTranche($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTTranche objects pre-filled with all related objects except CommonTFormePrix.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTTranche objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTFormePrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);
        }

        CommonTTranchePeer::addSelectColumns($criteria);
        $startcol2 = CommonTTranchePeer::NUM_HYDRATE_COLUMNS;

        CommonTDonneeComplementairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTDonneeComplementairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, CommonTDonneeComplementairePeer::ID_DONNEE_COMPLEMENTAIRE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTTranchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTTranchePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTTranchePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTTranchePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTDonneeComplementaire rows

                $key2 = CommonTDonneeComplementairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTDonneeComplementairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTDonneeComplementairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTDonneeComplementairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTTranche) to the collection in $obj2 (CommonTDonneeComplementaire)
                $obj2->addCommonTTranche($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CommonTTranchePeer::DATABASE_NAME)->getTable(CommonTTranchePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTTranchePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTTranchePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTTrancheTableMap());
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
        return CommonTTranchePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTTranche or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTTranche object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTTranche object
        }

        if ($criteria->containsKey(CommonTTranchePeer::ID_TRANCHE) && $criteria->keyContainsValue(CommonTTranchePeer::ID_TRANCHE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTTranchePeer::ID_TRANCHE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTTranche or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTTranche object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTTranchePeer::ID_TRANCHE);
            $value = $criteria->remove(CommonTTranchePeer::ID_TRANCHE);
            if ($value) {
                $selectCriteria->add(CommonTTranchePeer::ID_TRANCHE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTTranchePeer::TABLE_NAME);
            }

        } else { // $values is CommonTTranche object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_tranche table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTTranchePeer::TABLE_NAME, $con, CommonTTranchePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTTranchePeer::clearInstancePool();
            CommonTTranchePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTTranche or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTTranche object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTTranchePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTTranche) { // it's a model object
            // invalidate the cache for this single object
            CommonTTranchePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);
            $criteria->add(CommonTTranchePeer::ID_TRANCHE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTTranchePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTTranchePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTTranchePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTTranche object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTTranche $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTTranchePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTTranchePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTTranchePeer::DATABASE_NAME, CommonTTranchePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTTranche
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTTranchePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);
        $criteria->add(CommonTTranchePeer::ID_TRANCHE, $pk);

        $v = CommonTTranchePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTTranche[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);
            $criteria->add(CommonTTranchePeer::ID_TRANCHE, $pks, Criteria::IN);
            $objs = CommonTTranchePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTTranchePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTTranchePeer::buildTableMap();

