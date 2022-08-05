<?php


/**
 * Base static class for performing query and update operations on the 't_CAO_Commission_Agent' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_CAO_Commission_Agent';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCAOCommissionAgent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCAOCommissionAgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the id_commission_agent field */
    const ID_COMMISSION_AGENT = 't_CAO_Commission_Agent.id_commission_agent';

    /** the column name for the id_agent field */
    const ID_AGENT = 't_CAO_Commission_Agent.id_agent';

    /** the column name for the organisme field */
    const ORGANISME = 't_CAO_Commission_Agent.organisme';

    /** the column name for the id_commission field */
    const ID_COMMISSION = 't_CAO_Commission_Agent.id_commission';

    /** the column name for the id_ref_val_type_voix_defaut field */
    const ID_REF_VAL_TYPE_VOIX_DEFAUT = 't_CAO_Commission_Agent.id_ref_val_type_voix_defaut';

    /** the column name for the type_compte field */
    const TYPE_COMPTE = 't_CAO_Commission_Agent.type_compte';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCAOCommissionAgent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCAOCommissionAgent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOCommissionAgentPeer::$fieldNames[CommonTCAOCommissionAgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdCommissionAgent', 'IdAgent', 'Organisme', 'IdCommission', 'IdRefValTypeVoixDefaut', 'TypeCompte', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCommissionAgent', 'idAgent', 'organisme', 'idCommission', 'idRefValTypeVoixDefaut', 'typeCompte', ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, CommonTCAOCommissionAgentPeer::ID_AGENT, CommonTCAOCommissionAgentPeer::ORGANISME, CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, CommonTCAOCommissionAgentPeer::TYPE_COMPTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMMISSION_AGENT', 'ID_AGENT', 'ORGANISME', 'ID_COMMISSION', 'ID_REF_VAL_TYPE_VOIX_DEFAUT', 'TYPE_COMPTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_commission_agent', 'id_agent', 'organisme', 'id_commission', 'id_ref_val_type_voix_defaut', 'type_compte', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOCommissionAgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdCommissionAgent' => 0, 'IdAgent' => 1, 'Organisme' => 2, 'IdCommission' => 3, 'IdRefValTypeVoixDefaut' => 4, 'TypeCompte' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCommissionAgent' => 0, 'idAgent' => 1, 'organisme' => 2, 'idCommission' => 3, 'idRefValTypeVoixDefaut' => 4, 'typeCompte' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT => 0, CommonTCAOCommissionAgentPeer::ID_AGENT => 1, CommonTCAOCommissionAgentPeer::ORGANISME => 2, CommonTCAOCommissionAgentPeer::ID_COMMISSION => 3, CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT => 4, CommonTCAOCommissionAgentPeer::TYPE_COMPTE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMMISSION_AGENT' => 0, 'ID_AGENT' => 1, 'ORGANISME' => 2, 'ID_COMMISSION' => 3, 'ID_REF_VAL_TYPE_VOIX_DEFAUT' => 4, 'TYPE_COMPTE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id_commission_agent' => 0, 'id_agent' => 1, 'organisme' => 2, 'id_commission' => 3, 'id_ref_val_type_voix_defaut' => 4, 'type_compte' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = CommonTCAOCommissionAgentPeer::getFieldNames($toType);
        $key = isset(CommonTCAOCommissionAgentPeer::$fieldKeys[$fromType][$name]) ? CommonTCAOCommissionAgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCAOCommissionAgentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCAOCommissionAgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCAOCommissionAgentPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCAOCommissionAgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCAOCommissionAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT);
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::ID_COMMISSION);
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT);
            $criteria->addSelectColumn(CommonTCAOCommissionAgentPeer::TYPE_COMPTE);
        } else {
            $criteria->addSelectColumn($alias . '.id_commission_agent');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_commission');
            $criteria->addSelectColumn($alias . '.id_ref_val_type_voix_defaut');
            $criteria->addSelectColumn($alias . '.type_compte');
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
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommissionAgent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCAOCommissionAgentPeer::doSelect($critcopy, $con);
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
        return CommonTCAOCommissionAgentPeer::populateObjects(CommonTCAOCommissionAgentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

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
     * @param      CommonTCAOCommissionAgent $obj A CommonTCAOCommissionAgent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdCommissionAgent(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTCAOCommissionAgentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCAOCommissionAgent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCAOCommissionAgent) {
                $key = serialize(array((string) $value->getIdCommissionAgent(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCAOCommissionAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCAOCommissionAgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCAOCommissionAgent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCAOCommissionAgentPeer::$instances[$key])) {
                return CommonTCAOCommissionAgentPeer::$instances[$key];
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
        foreach (CommonTCAOCommissionAgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCAOCommissionAgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_CAO_Commission_Agent
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2]));
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

        return array((string) $row[$startcol], (string) $row[$startcol + 2]);
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
        $cls = CommonTCAOCommissionAgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCAOCommissionAgent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCAOCommissionAgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCAOCommissionAgentPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgent table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCAOCommission table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCAOCommission(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionAgent objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionAgent objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        $startcol = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOCommissionAgentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to $obj2 (CommonAgent)
                $obj2->addCommonTCAOCommissionAgent($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOCommissionAgent objects pre-filled with their CommonTCAOCommission objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionAgent objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCAOCommission(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        $startcol = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;
        CommonTCAOCommissionPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOCommissionAgentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCAOCommissionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to $obj2 (CommonTCAOCommission)
                $obj2->addCommonTCAOCommissionAgent($obj1);

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
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionAgent objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionAgent objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOCommissionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonTCAOCommissionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionAgentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonAgent rows

            $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonTCAOCommissionAgent($obj1);
            } // if joined row not null

            // Add objects for joined CommonTCAOCommission rows

            $key3 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonTCAOCommissionPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to the collection in $obj3 (CommonTCAOCommission)
                $obj3->addCommonTCAOCommissionAgent($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgent table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCAOCommission table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTCAOCommission(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionAgent objects pre-filled with all related objects except CommonAgent.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionAgent objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOCommissionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOCommissionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionAgentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCAOCommission rows

                $key2 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCAOCommissionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to the collection in $obj2 (CommonTCAOCommission)
                $obj2->addCommonTCAOCommissionAgent($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOCommissionAgent objects pre-filled with all related objects except CommonTCAOCommission.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionAgent objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTCAOCommission(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionAgentPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionAgentPeer::ID_AGENT, CommonAgentPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionAgentPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionAgentPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionAgentPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonAgent rows

                $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionAgent) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonTCAOCommissionAgent($obj1);

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
        return Propel::getDatabaseMap(CommonTCAOCommissionAgentPeer::DATABASE_NAME)->getTable(CommonTCAOCommissionAgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCAOCommissionAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCAOCommissionAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCAOCommissionAgentTableMap());
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
        return CommonTCAOCommissionAgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCAOCommissionAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionAgent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCAOCommissionAgent object
        }

        if ($criteria->containsKey(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT) && $criteria->keyContainsValue(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCAOCommissionAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionAgent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT);
            $value = $criteria->remove(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT);
            if ($value) {
                $selectCriteria->add(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCAOCommissionAgentPeer::ORGANISME);
            $value = $criteria->remove(CommonTCAOCommissionAgentPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTCAOCommissionAgentPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOCommissionAgentPeer::TABLE_NAME);
            }

        } else { // $values is CommonTCAOCommissionAgent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_CAO_Commission_Agent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCAOCommissionAgentPeer::TABLE_NAME, $con, CommonTCAOCommissionAgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCAOCommissionAgentPeer::clearInstancePool();
            CommonTCAOCommissionAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCAOCommissionAgent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionAgent object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCAOCommissionAgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCAOCommissionAgent) { // it's a model object
            // invalidate the cache for this single object
            CommonTCAOCommissionAgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTCAOCommissionAgentPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTCAOCommissionAgentPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCAOCommissionAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCAOCommissionAgent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCAOCommissionAgent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCAOCommissionAgentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCAOCommissionAgentPeer::DATABASE_NAME, CommonTCAOCommissionAgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $id_commission_agent
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTCAOCommissionAgent
     */
    public static function retrieveByPK($id_commission_agent, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_commission_agent, (string) $organisme));
         if (null !== ($obj = CommonTCAOCommissionAgentPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        $criteria->add(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $id_commission_agent);
        $criteria->add(CommonTCAOCommissionAgentPeer::ORGANISME, $organisme);
        $v = CommonTCAOCommissionAgentPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTCAOCommissionAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCAOCommissionAgentPeer::buildTableMap();

