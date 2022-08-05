<?php


/**
 * Base static class for performing query and update operations on the 't_CAO_Seance_Intervenant_Externe' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCAOSeanceIntervenantExternePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_CAO_Seance_Intervenant_Externe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCAOSeanceIntervenantExterne';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCAOSeanceIntervenantExterneTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the id_seance_intervenant_externe field */
    const ID_SEANCE_INTERVENANT_EXTERNE = 't_CAO_Seance_Intervenant_Externe.id_seance_intervenant_externe';

    /** the column name for the id_seance field */
    const ID_SEANCE = 't_CAO_Seance_Intervenant_Externe.id_seance';

    /** the column name for the id_intervenant_externe field */
    const ID_INTERVENANT_EXTERNE = 't_CAO_Seance_Intervenant_Externe.id_intervenant_externe';

    /** the column name for the organisme field */
    const ORGANISME = 't_CAO_Seance_Intervenant_Externe.organisme';

    /** the column name for the id_ref_val_type_voix field */
    const ID_REF_VAL_TYPE_VOIX = 't_CAO_Seance_Intervenant_Externe.id_ref_val_type_voix';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCAOSeanceIntervenantExterne objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCAOSeanceIntervenantExterne[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOSeanceIntervenantExternePeer::$fieldNames[CommonTCAOSeanceIntervenantExternePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdSeanceIntervenantExterne', 'IdSeance', 'IdIntervenantExterne', 'Organisme', 'IdRefValTypeVoix', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSeanceIntervenantExterne', 'idSeance', 'idIntervenantExterne', 'organisme', 'idRefValTypeVoix', ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOSeanceIntervenantExternePeer::ORGANISME, CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SEANCE_INTERVENANT_EXTERNE', 'ID_SEANCE', 'ID_INTERVENANT_EXTERNE', 'ORGANISME', 'ID_REF_VAL_TYPE_VOIX', ),
        BasePeer::TYPE_FIELDNAME => array ('id_seance_intervenant_externe', 'id_seance', 'id_intervenant_externe', 'organisme', 'id_ref_val_type_voix', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOSeanceIntervenantExternePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdSeanceIntervenantExterne' => 0, 'IdSeance' => 1, 'IdIntervenantExterne' => 2, 'Organisme' => 3, 'IdRefValTypeVoix' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSeanceIntervenantExterne' => 0, 'idSeance' => 1, 'idIntervenantExterne' => 2, 'organisme' => 3, 'idRefValTypeVoix' => 4, ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE => 0, CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE => 1, CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE => 2, CommonTCAOSeanceIntervenantExternePeer::ORGANISME => 3, CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SEANCE_INTERVENANT_EXTERNE' => 0, 'ID_SEANCE' => 1, 'ID_INTERVENANT_EXTERNE' => 2, 'ORGANISME' => 3, 'ID_REF_VAL_TYPE_VOIX' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('id_seance_intervenant_externe' => 0, 'id_seance' => 1, 'id_intervenant_externe' => 2, 'organisme' => 3, 'id_ref_val_type_voix' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = CommonTCAOSeanceIntervenantExternePeer::getFieldNames($toType);
        $key = isset(CommonTCAOSeanceIntervenantExternePeer::$fieldKeys[$fromType][$name]) ? CommonTCAOSeanceIntervenantExternePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCAOSeanceIntervenantExternePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCAOSeanceIntervenantExternePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCAOSeanceIntervenantExternePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCAOSeanceIntervenantExternePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE);
            $criteria->addSelectColumn(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE);
            $criteria->addSelectColumn(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE);
            $criteria->addSelectColumn(CommonTCAOSeanceIntervenantExternePeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX);
        } else {
            $criteria->addSelectColumn($alias . '.id_seance_intervenant_externe');
            $criteria->addSelectColumn($alias . '.id_seance');
            $criteria->addSelectColumn($alias . '.id_intervenant_externe');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_ref_val_type_voix');
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
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOSeanceIntervenantExterne
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCAOSeanceIntervenantExternePeer::doSelect($critcopy, $con);
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
        return CommonTCAOSeanceIntervenantExternePeer::populateObjects(CommonTCAOSeanceIntervenantExternePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

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
     * @param      CommonTCAOSeanceIntervenantExterne $obj A CommonTCAOSeanceIntervenantExterne object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdSeanceIntervenantExterne(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTCAOSeanceIntervenantExternePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCAOSeanceIntervenantExterne object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCAOSeanceIntervenantExterne) {
                $key = serialize(array((string) $value->getIdSeanceIntervenantExterne(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCAOSeanceIntervenantExterne object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCAOSeanceIntervenantExternePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCAOSeanceIntervenantExterne Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCAOSeanceIntervenantExternePeer::$instances[$key])) {
                return CommonTCAOSeanceIntervenantExternePeer::$instances[$key];
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
        foreach (CommonTCAOSeanceIntervenantExternePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCAOSeanceIntervenantExternePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_CAO_Seance_Intervenant_Externe
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
        if ($row[$startcol] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 3]));
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

        return array((string) $row[$startcol], (string) $row[$startcol + 3]);
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
        $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCAOSeanceIntervenantExterne object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCAOSeanceIntervenantExternePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTCAOIntervenantExterne table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCAOIntervenantExterne(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCAOSeance table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCAOSeance(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);

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
     * Selects a collection of CommonTCAOSeanceIntervenantExterne objects pre-filled with their CommonTCAOIntervenantExterne objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOSeanceIntervenantExterne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCAOIntervenantExterne(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        }

        CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        $startcol = CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;
        CommonTCAOIntervenantExternePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCAOIntervenantExternePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCAOIntervenantExternePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOIntervenantExternePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCAOIntervenantExternePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to $obj2 (CommonTCAOIntervenantExterne)
                $obj2->addCommonTCAOSeanceIntervenantExterne($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOSeanceIntervenantExterne objects pre-filled with their CommonTCAOSeance objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOSeanceIntervenantExterne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCAOSeance(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        }

        CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        $startcol = CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;
        CommonTCAOSeancePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCAOSeancePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCAOSeancePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOSeancePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCAOSeancePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to $obj2 (CommonTCAOSeance)
                $obj2->addCommonTCAOSeanceIntervenantExterne($obj1);

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
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);

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
     * Selects a collection of CommonTCAOSeanceIntervenantExterne objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOSeanceIntervenantExterne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        }

        CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOIntervenantExternePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOIntervenantExternePeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOSeancePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonTCAOSeancePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTCAOIntervenantExterne rows

            $key2 = CommonTCAOIntervenantExternePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTCAOIntervenantExternePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOIntervenantExternePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOIntervenantExternePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to the collection in $obj2 (CommonTCAOIntervenantExterne)
                $obj2->addCommonTCAOSeanceIntervenantExterne($obj1);
            } // if joined row not null

            // Add objects for joined CommonTCAOSeance rows

            $key3 = CommonTCAOSeancePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonTCAOSeancePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonTCAOSeancePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonTCAOSeancePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to the collection in $obj3 (CommonTCAOSeance)
                $obj3->addCommonTCAOSeanceIntervenantExterne($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTCAOIntervenantExterne table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTCAOIntervenantExterne(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCAOSeance table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTCAOSeance(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);

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
     * Selects a collection of CommonTCAOSeanceIntervenantExterne objects pre-filled with all related objects except CommonTCAOIntervenantExterne.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOSeanceIntervenantExterne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTCAOIntervenantExterne(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        }

        CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOSeancePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOSeancePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, CommonTCAOSeancePeer::ID_SEANCE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCAOSeance rows

                $key2 = CommonTCAOSeancePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCAOSeancePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCAOSeancePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOSeancePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to the collection in $obj2 (CommonTCAOSeance)
                $obj2->addCommonTCAOSeanceIntervenantExterne($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOSeanceIntervenantExterne objects pre-filled with all related objects except CommonTCAOSeance.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOSeanceIntervenantExterne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTCAOSeance(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        }

        CommonTCAOSeanceIntervenantExternePeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOSeanceIntervenantExternePeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOIntervenantExternePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOIntervenantExternePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOSeanceIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOSeanceIntervenantExternePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCAOIntervenantExterne rows

                $key2 = CommonTCAOIntervenantExternePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCAOIntervenantExternePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCAOIntervenantExternePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOIntervenantExternePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOSeanceIntervenantExterne) to the collection in $obj2 (CommonTCAOIntervenantExterne)
                $obj2->addCommonTCAOSeanceIntervenantExterne($obj1);

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
        return Propel::getDatabaseMap(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME)->getTable(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCAOSeanceIntervenantExternePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCAOSeanceIntervenantExterneTableMap());
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
        return CommonTCAOSeanceIntervenantExternePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCAOSeanceIntervenantExterne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOSeanceIntervenantExterne object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCAOSeanceIntervenantExterne object
        }

        if ($criteria->containsKey(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE) && $criteria->keyContainsValue(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCAOSeanceIntervenantExterne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOSeanceIntervenantExterne object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE);
            $value = $criteria->remove(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE);
            if ($value) {
                $selectCriteria->add(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCAOSeanceIntervenantExternePeer::ORGANISME);
            $value = $criteria->remove(CommonTCAOSeanceIntervenantExternePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);
            }

        } else { // $values is CommonTCAOSeanceIntervenantExterne object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_CAO_Seance_Intervenant_Externe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME, $con, CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCAOSeanceIntervenantExternePeer::clearInstancePool();
            CommonTCAOSeanceIntervenantExternePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCAOSeanceIntervenantExterne or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCAOSeanceIntervenantExterne object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCAOSeanceIntervenantExternePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCAOSeanceIntervenantExterne) { // it's a model object
            // invalidate the cache for this single object
            CommonTCAOSeanceIntervenantExternePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTCAOSeanceIntervenantExternePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCAOSeanceIntervenantExternePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCAOSeanceIntervenantExterne object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCAOSeanceIntervenantExterne $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, CommonTCAOSeanceIntervenantExternePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $id_seance_intervenant_externe
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTCAOSeanceIntervenantExterne
     */
    public static function retrieveByPK($id_seance_intervenant_externe, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_seance_intervenant_externe, (string) $organisme));
         if (null !== ($obj = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME);
        $criteria->add(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $id_seance_intervenant_externe);
        $criteria->add(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $organisme);
        $v = CommonTCAOSeanceIntervenantExternePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTCAOSeanceIntervenantExternePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCAOSeanceIntervenantExternePeer::buildTableMap();

