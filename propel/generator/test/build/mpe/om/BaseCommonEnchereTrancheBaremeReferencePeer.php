<?php


/**
 * Base static class for performing query and update operations on the 'EnchereTrancheBaremeReference' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEnchereTrancheBaremeReferencePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EnchereTrancheBaremeReference';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnchereTrancheBaremeReference';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnchereTrancheBaremeReferenceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the id field */
    const ID = 'EnchereTrancheBaremeReference.id';

    /** the column name for the organisme field */
    const ORGANISME = 'EnchereTrancheBaremeReference.organisme';

    /** the column name for the idReference field */
    const IDREFERENCE = 'EnchereTrancheBaremeReference.idReference';

    /** the column name for the borneInf field */
    const BORNEINF = 'EnchereTrancheBaremeReference.borneInf';

    /** the column name for the borneSup field */
    const BORNESUP = 'EnchereTrancheBaremeReference.borneSup';

    /** the column name for the note field */
    const NOTE = 'EnchereTrancheBaremeReference.note';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEnchereTrancheBaremeReference objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnchereTrancheBaremeReference[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereTrancheBaremeReferencePeer::$fieldNames[CommonEnchereTrancheBaremeReferencePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Idreference', 'Borneinf', 'Bornesup', 'Note', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idreference', 'borneinf', 'bornesup', 'note', ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereTrancheBaremeReferencePeer::ID, CommonEnchereTrancheBaremeReferencePeer::ORGANISME, CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereTrancheBaremeReferencePeer::BORNEINF, CommonEnchereTrancheBaremeReferencePeer::BORNESUP, CommonEnchereTrancheBaremeReferencePeer::NOTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'IDREFERENCE', 'BORNEINF', 'BORNESUP', 'NOTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'idReference', 'borneInf', 'borneSup', 'note', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereTrancheBaremeReferencePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Idreference' => 2, 'Borneinf' => 3, 'Bornesup' => 4, 'Note' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idreference' => 2, 'borneinf' => 3, 'bornesup' => 4, 'note' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereTrancheBaremeReferencePeer::ID => 0, CommonEnchereTrancheBaremeReferencePeer::ORGANISME => 1, CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE => 2, CommonEnchereTrancheBaremeReferencePeer::BORNEINF => 3, CommonEnchereTrancheBaremeReferencePeer::BORNESUP => 4, CommonEnchereTrancheBaremeReferencePeer::NOTE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'IDREFERENCE' => 2, 'BORNEINF' => 3, 'BORNESUP' => 4, 'NOTE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'idReference' => 2, 'borneInf' => 3, 'borneSup' => 4, 'note' => 5, ),
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
        $toNames = CommonEnchereTrancheBaremeReferencePeer::getFieldNames($toType);
        $key = isset(CommonEnchereTrancheBaremeReferencePeer::$fieldKeys[$fromType][$name]) ? CommonEnchereTrancheBaremeReferencePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnchereTrancheBaremeReferencePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnchereTrancheBaremeReferencePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnchereTrancheBaremeReferencePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonEnchereTrancheBaremeReferencePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::ID);
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::ORGANISME);
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE);
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::BORNEINF);
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::BORNESUP);
            $criteria->addSelectColumn(CommonEnchereTrancheBaremeReferencePeer::NOTE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.idReference');
            $criteria->addSelectColumn($alias . '.borneInf');
            $criteria->addSelectColumn($alias . '.borneSup');
            $criteria->addSelectColumn($alias . '.note');
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
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereTrancheBaremeReference
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnchereTrancheBaremeReferencePeer::doSelect($critcopy, $con);
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
        return CommonEnchereTrancheBaremeReferencePeer::populateObjects(CommonEnchereTrancheBaremeReferencePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

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
     * @param      CommonEnchereTrancheBaremeReference $obj A CommonEnchereTrancheBaremeReference object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEnchereTrancheBaremeReferencePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnchereTrancheBaremeReference object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnchereTrancheBaremeReference) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnchereTrancheBaremeReference object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnchereTrancheBaremeReferencePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnchereTrancheBaremeReference Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnchereTrancheBaremeReferencePeer::$instances[$key])) {
                return CommonEnchereTrancheBaremeReferencePeer::$instances[$key];
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
        foreach (CommonEnchereTrancheBaremeReferencePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnchereTrancheBaremeReferencePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EnchereTrancheBaremeReference
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
        $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnchereTrancheBaremeReference object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnchereTrancheBaremeReferencePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEnchereReferenceRelatedByIdreference table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEnchereReferenceRelatedByIdreference(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonEnchereReferenceRelatedByIdreferenceOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEnchereReferenceRelatedByIdreferenceOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID),
        array(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, CommonEnchereReferencePeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonEnchereTrancheBaremeReference objects pre-filled with their CommonEnchereReference objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEnchereReferenceRelatedByIdreference(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        }

        CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        $startcol = CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;
        CommonEnchereReferencePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEnchereReferencePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEnchereReferencePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEnchereReferencePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonEnchereTrancheBaremeReference) to $obj2 (CommonEnchereReference)
                $obj2->addCommonEnchereTrancheBaremeReferenceRelatedByIdreference($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonEnchereTrancheBaremeReference objects pre-filled with their CommonEnchereReference objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEnchereReferenceRelatedByIdreferenceOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        }

        CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        $startcol = CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;
        CommonEnchereReferencePeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID),
        array(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, CommonEnchereReferencePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEnchereReferencePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEnchereReferencePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEnchereReferencePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonEnchereTrancheBaremeReference) to $obj2 (CommonEnchereReference)
                $obj2->addCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($obj1);

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
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID),
        array(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, CommonEnchereReferencePeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonEnchereTrancheBaremeReference objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        }

        CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        $startcol2 = CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;

        CommonEnchereReferencePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEnchereReferencePeer::NUM_HYDRATE_COLUMNS;

        CommonEnchereReferencePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonEnchereReferencePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, CommonEnchereReferencePeer::ID),
        array(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, CommonEnchereReferencePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonEnchereReference rows

            $key2 = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonEnchereReferencePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEnchereReferencePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEnchereReferencePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonEnchereTrancheBaremeReference) to the collection in $obj2 (CommonEnchereReference)
                $obj2->addCommonEnchereTrancheBaremeReferenceRelatedByIdreference($obj1);
            } // if joined row not null

            // Add objects for joined CommonEnchereReference rows

            $key3 = CommonEnchereReferencePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonEnchereReferencePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonEnchereReferencePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonEnchereReferencePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonEnchereTrancheBaremeReference) to the collection in $obj3 (CommonEnchereReference)
                $obj3->addCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEnchereReferenceRelatedByIdreference table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonEnchereReferenceRelatedByIdreference(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Returns the number of rows matching criteria, joining the related CommonEnchereReferenceRelatedByIdreferenceOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonEnchereReferenceRelatedByIdreferenceOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Selects a collection of CommonEnchereTrancheBaremeReference objects pre-filled with all related objects except CommonEnchereReferenceRelatedByIdreference.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonEnchereReferenceRelatedByIdreference(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        }

        CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        $startcol2 = CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonEnchereTrancheBaremeReference objects pre-filled with all related objects except CommonEnchereReferenceRelatedByIdreferenceOrganisme.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonEnchereReferenceRelatedByIdreferenceOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        }

        CommonEnchereTrancheBaremeReferencePeer::addSelectColumns($criteria);
        $startcol2 = CommonEnchereTrancheBaremeReferencePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereTrancheBaremeReferencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonEnchereTrancheBaremeReferencePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME)->getTable(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnchereTrancheBaremeReferencePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnchereTrancheBaremeReferenceTableMap());
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
        return CommonEnchereTrancheBaremeReferencePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnchereTrancheBaremeReference or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereTrancheBaremeReference object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnchereTrancheBaremeReference object
        }

        if ($criteria->containsKey(CommonEnchereTrancheBaremeReferencePeer::ID) && $criteria->keyContainsValue(CommonEnchereTrancheBaremeReferencePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEnchereTrancheBaremeReferencePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnchereTrancheBaremeReference or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereTrancheBaremeReference object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnchereTrancheBaremeReferencePeer::ID);
            $value = $criteria->remove(CommonEnchereTrancheBaremeReferencePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEnchereTrancheBaremeReferencePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEnchereTrancheBaremeReferencePeer::ORGANISME);
            $value = $criteria->remove(CommonEnchereTrancheBaremeReferencePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);
            }

        } else { // $values is CommonEnchereTrancheBaremeReference object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EnchereTrancheBaremeReference table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME, $con, CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnchereTrancheBaremeReferencePeer::clearInstancePool();
            CommonEnchereTrancheBaremeReferencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnchereTrancheBaremeReference or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnchereTrancheBaremeReference object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEnchereTrancheBaremeReferencePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnchereTrancheBaremeReference) { // it's a model object
            // invalidate the cache for this single object
            CommonEnchereTrancheBaremeReferencePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEnchereTrancheBaremeReferencePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEnchereTrancheBaremeReferencePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnchereTrancheBaremeReferencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEnchereTrancheBaremeReference object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnchereTrancheBaremeReference $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, CommonEnchereTrancheBaremeReferencePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEnchereTrancheBaremeReference
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereTrancheBaremeReferencePeer::ID, $id);
        $criteria->add(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $organisme);
        $v = CommonEnchereTrancheBaremeReferencePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEnchereTrancheBaremeReferencePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnchereTrancheBaremeReferencePeer::buildTableMap();

