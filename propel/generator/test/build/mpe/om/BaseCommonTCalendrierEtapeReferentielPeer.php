<?php


/**
 * Base static class for performing query and update operations on the 't_calendrier_etape_referentiel' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCalendrierEtapeReferentielPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_calendrier_etape_referentiel';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCalendrierEtapeReferentiel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCalendrierEtapeReferentielTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the ID_ETAPE_CALENDRIER_REFERENTIEL field */
    const ID_ETAPE_CALENDRIER_REFERENTIEL = 't_calendrier_etape_referentiel.ID_ETAPE_CALENDRIER_REFERENTIEL';

    /** the column name for the ID_TYPE_PROCEDURE field */
    const ID_TYPE_PROCEDURE = 't_calendrier_etape_referentiel.ID_TYPE_PROCEDURE';

    /** the column name for the ORGANISME field */
    const ORGANISME = 't_calendrier_etape_referentiel.ORGANISME';

    /** the column name for the CODE field */
    const CODE = 't_calendrier_etape_referentiel.CODE';

    /** the column name for the LIBELLE field */
    const LIBELLE = 't_calendrier_etape_referentiel.LIBELLE';

    /** the column name for the POSITION field */
    const POSITION = 't_calendrier_etape_referentiel.POSITION';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCalendrierEtapeReferentiel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCalendrierEtapeReferentiel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierEtapeReferentielPeer::$fieldNames[CommonTCalendrierEtapeReferentielPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEtapeCalendrierReferentiel', 'IdTypeProcedure', 'Organisme', 'Code', 'Libelle', 'Position', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEtapeCalendrierReferentiel', 'idTypeProcedure', 'organisme', 'code', 'libelle', 'position', ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, CommonTCalendrierEtapeReferentielPeer::ORGANISME, CommonTCalendrierEtapeReferentielPeer::CODE, CommonTCalendrierEtapeReferentielPeer::LIBELLE, CommonTCalendrierEtapeReferentielPeer::POSITION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ETAPE_CALENDRIER_REFERENTIEL', 'ID_TYPE_PROCEDURE', 'ORGANISME', 'CODE', 'LIBELLE', 'POSITION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ETAPE_CALENDRIER_REFERENTIEL', 'ID_TYPE_PROCEDURE', 'ORGANISME', 'CODE', 'LIBELLE', 'POSITION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierEtapeReferentielPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEtapeCalendrierReferentiel' => 0, 'IdTypeProcedure' => 1, 'Organisme' => 2, 'Code' => 3, 'Libelle' => 4, 'Position' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEtapeCalendrierReferentiel' => 0, 'idTypeProcedure' => 1, 'organisme' => 2, 'code' => 3, 'libelle' => 4, 'position' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL => 0, CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE => 1, CommonTCalendrierEtapeReferentielPeer::ORGANISME => 2, CommonTCalendrierEtapeReferentielPeer::CODE => 3, CommonTCalendrierEtapeReferentielPeer::LIBELLE => 4, CommonTCalendrierEtapeReferentielPeer::POSITION => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ETAPE_CALENDRIER_REFERENTIEL' => 0, 'ID_TYPE_PROCEDURE' => 1, 'ORGANISME' => 2, 'CODE' => 3, 'LIBELLE' => 4, 'POSITION' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ETAPE_CALENDRIER_REFERENTIEL' => 0, 'ID_TYPE_PROCEDURE' => 1, 'ORGANISME' => 2, 'CODE' => 3, 'LIBELLE' => 4, 'POSITION' => 5, ),
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
        $toNames = CommonTCalendrierEtapeReferentielPeer::getFieldNames($toType);
        $key = isset(CommonTCalendrierEtapeReferentielPeer::$fieldKeys[$fromType][$name]) ? CommonTCalendrierEtapeReferentielPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCalendrierEtapeReferentielPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCalendrierEtapeReferentielPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCalendrierEtapeReferentielPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCalendrierEtapeReferentielPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL);
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::CODE);
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::LIBELLE);
            $criteria->addSelectColumn(CommonTCalendrierEtapeReferentielPeer::POSITION);
        } else {
            $criteria->addSelectColumn($alias . '.ID_ETAPE_CALENDRIER_REFERENTIEL');
            $criteria->addSelectColumn($alias . '.ID_TYPE_PROCEDURE');
            $criteria->addSelectColumn($alias . '.ORGANISME');
            $criteria->addSelectColumn($alias . '.CODE');
            $criteria->addSelectColumn($alias . '.LIBELLE');
            $criteria->addSelectColumn($alias . '.POSITION');
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
        $criteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrierEtapeReferentiel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCalendrierEtapeReferentielPeer::doSelect($critcopy, $con);
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
        return CommonTCalendrierEtapeReferentielPeer::populateObjects(CommonTCalendrierEtapeReferentielPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

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
     * @param      CommonTCalendrierEtapeReferentiel $obj A CommonTCalendrierEtapeReferentiel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdEtapeCalendrierReferentiel(), (string) $obj->getIdTypeProcedure(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTCalendrierEtapeReferentielPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCalendrierEtapeReferentiel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCalendrierEtapeReferentiel) {
                $key = serialize(array((string) $value->getIdEtapeCalendrierReferentiel(), (string) $value->getIdTypeProcedure(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCalendrierEtapeReferentiel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCalendrierEtapeReferentielPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCalendrierEtapeReferentiel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCalendrierEtapeReferentielPeer::$instances[$key])) {
                return CommonTCalendrierEtapeReferentielPeer::$instances[$key];
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
        foreach (CommonTCalendrierEtapeReferentielPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCalendrierEtapeReferentielPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_calendrier_etape_referentiel
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = CommonTCalendrierEtapeReferentielPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCalendrierEtapeReferentielPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCalendrierEtapeReferentielPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCalendrierEtapeReferentiel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCalendrierEtapeReferentielPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCalendrierEtapeReferentielPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCalendrierEtapeReferentielPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCalendrierEtapeReferentielPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTypeProcedureOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTypeProcedureOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE),
        array(CommonTCalendrierEtapeReferentielPeer::ORGANISME, CommonTypeProcedureOrganismePeer::ORGANISME),
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
     * Selects a collection of CommonTCalendrierEtapeReferentiel objects pre-filled with their CommonTypeProcedureOrganisme objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCalendrierEtapeReferentiel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTypeProcedureOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
        }

        CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        $startcol = CommonTCalendrierEtapeReferentielPeer::NUM_HYDRATE_COLUMNS;
        CommonTypeProcedureOrganismePeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE),
        array(CommonTCalendrierEtapeReferentielPeer::ORGANISME, CommonTypeProcedureOrganismePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCalendrierEtapeReferentielPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCalendrierEtapeReferentielPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCalendrierEtapeReferentielPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTypeProcedureOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTypeProcedureOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTypeProcedureOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTypeProcedureOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCalendrierEtapeReferentiel) to $obj2 (CommonTypeProcedureOrganisme)
                $obj2->addCommonTCalendrierEtapeReferentiel($obj1);

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
        $criteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE),
        array(CommonTCalendrierEtapeReferentielPeer::ORGANISME, CommonTypeProcedureOrganismePeer::ORGANISME),
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
     * Selects a collection of CommonTCalendrierEtapeReferentiel objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCalendrierEtapeReferentiel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
        }

        CommonTCalendrierEtapeReferentielPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCalendrierEtapeReferentielPeer::NUM_HYDRATE_COLUMNS;

        CommonTypeProcedureOrganismePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTypeProcedureOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE),
        array(CommonTCalendrierEtapeReferentielPeer::ORGANISME, CommonTypeProcedureOrganismePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCalendrierEtapeReferentielPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCalendrierEtapeReferentielPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCalendrierEtapeReferentielPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTypeProcedureOrganisme rows

            $key2 = CommonTypeProcedureOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTypeProcedureOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTypeProcedureOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTypeProcedureOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCalendrierEtapeReferentiel) to the collection in $obj2 (CommonTypeProcedureOrganisme)
                $obj2->addCommonTCalendrierEtapeReferentiel($obj1);
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
        return Propel::getDatabaseMap(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME)->getTable(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCalendrierEtapeReferentielPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCalendrierEtapeReferentielTableMap());
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
        return CommonTCalendrierEtapeReferentielPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCalendrierEtapeReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtapeReferentiel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCalendrierEtapeReferentiel object
        }

        if ($criteria->containsKey(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL) && $criteria->keyContainsValue(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCalendrierEtapeReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtapeReferentiel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL);
            $value = $criteria->remove(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE);
            $value = $criteria->remove(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCalendrierEtapeReferentielPeer::ORGANISME);
            $value = $criteria->remove(CommonTCalendrierEtapeReferentielPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);
            }

        } else { // $values is CommonTCalendrierEtapeReferentiel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_calendrier_etape_referentiel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME, $con, CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCalendrierEtapeReferentielPeer::clearInstancePool();
            CommonTCalendrierEtapeReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCalendrierEtapeReferentiel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCalendrierEtapeReferentiel object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCalendrierEtapeReferentielPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCalendrierEtapeReferentiel) { // it's a model object
            // invalidate the cache for this single object
            CommonTCalendrierEtapeReferentielPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTCalendrierEtapeReferentielPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCalendrierEtapeReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCalendrierEtapeReferentiel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCalendrierEtapeReferentiel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCalendrierEtapeReferentielPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, CommonTCalendrierEtapeReferentielPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_etape_calendrier_referentiel
     * @param   int $id_type_procedure
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTCalendrierEtapeReferentiel
     */
    public static function retrieveByPK($id_etape_calendrier_referentiel, $id_type_procedure, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_etape_calendrier_referentiel, (string) $id_type_procedure, (string) $organisme));
         if (null !== ($obj = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $id_etape_calendrier_referentiel);
        $criteria->add(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $id_type_procedure);
        $criteria->add(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $organisme);
        $v = CommonTCalendrierEtapeReferentielPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTCalendrierEtapeReferentielPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCalendrierEtapeReferentielPeer::buildTableMap();

