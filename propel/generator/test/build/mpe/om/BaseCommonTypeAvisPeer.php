<?php


/**
 * Base static class for performing query and update operations on the 'TypeAvis' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTypeAvisPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'TypeAvis';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTypeAvis';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTypeAvisTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'TypeAvis.id';

    /** the column name for the intitule_avis field */
    const INTITULE_AVIS = 'TypeAvis.intitule_avis';

    /** the column name for the intitule_avis_fr field */
    const INTITULE_AVIS_FR = 'TypeAvis.intitule_avis_fr';

    /** the column name for the intitule_avis_en field */
    const INTITULE_AVIS_EN = 'TypeAvis.intitule_avis_en';

    /** the column name for the intitule_avis_es field */
    const INTITULE_AVIS_ES = 'TypeAvis.intitule_avis_es';

    /** the column name for the intitule_avis_su field */
    const INTITULE_AVIS_SU = 'TypeAvis.intitule_avis_su';

    /** the column name for the intitule_avis_du field */
    const INTITULE_AVIS_DU = 'TypeAvis.intitule_avis_du';

    /** the column name for the intitule_avis_cz field */
    const INTITULE_AVIS_CZ = 'TypeAvis.intitule_avis_cz';

    /** the column name for the intitule_avis_ar field */
    const INTITULE_AVIS_AR = 'TypeAvis.intitule_avis_ar';

    /** the column name for the abbreviation field */
    const ABBREVIATION = 'TypeAvis.abbreviation';

    /** the column name for the id_type_avis_ANM field */
    const ID_TYPE_AVIS_ANM = 'TypeAvis.id_type_avis_ANM';

    /** the column name for the intitule_avis_it field */
    const INTITULE_AVIS_IT = 'TypeAvis.intitule_avis_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTypeAvis objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTypeAvis[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeAvisPeer::$fieldNames[CommonTypeAvisPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IntituleAvis', 'IntituleAvisFr', 'IntituleAvisEn', 'IntituleAvisEs', 'IntituleAvisSu', 'IntituleAvisDu', 'IntituleAvisCz', 'IntituleAvisAr', 'Abbreviation', 'IdTypeAvisAnm', 'IntituleAvisIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'intituleAvis', 'intituleAvisFr', 'intituleAvisEn', 'intituleAvisEs', 'intituleAvisSu', 'intituleAvisDu', 'intituleAvisCz', 'intituleAvisAr', 'abbreviation', 'idTypeAvisAnm', 'intituleAvisIt', ),
        BasePeer::TYPE_COLNAME => array (CommonTypeAvisPeer::ID, CommonTypeAvisPeer::INTITULE_AVIS, CommonTypeAvisPeer::INTITULE_AVIS_FR, CommonTypeAvisPeer::INTITULE_AVIS_EN, CommonTypeAvisPeer::INTITULE_AVIS_ES, CommonTypeAvisPeer::INTITULE_AVIS_SU, CommonTypeAvisPeer::INTITULE_AVIS_DU, CommonTypeAvisPeer::INTITULE_AVIS_CZ, CommonTypeAvisPeer::INTITULE_AVIS_AR, CommonTypeAvisPeer::ABBREVIATION, CommonTypeAvisPeer::ID_TYPE_AVIS_ANM, CommonTypeAvisPeer::INTITULE_AVIS_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'INTITULE_AVIS', 'INTITULE_AVIS_FR', 'INTITULE_AVIS_EN', 'INTITULE_AVIS_ES', 'INTITULE_AVIS_SU', 'INTITULE_AVIS_DU', 'INTITULE_AVIS_CZ', 'INTITULE_AVIS_AR', 'ABBREVIATION', 'ID_TYPE_AVIS_ANM', 'INTITULE_AVIS_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'intitule_avis', 'intitule_avis_fr', 'intitule_avis_en', 'intitule_avis_es', 'intitule_avis_su', 'intitule_avis_du', 'intitule_avis_cz', 'intitule_avis_ar', 'abbreviation', 'id_type_avis_ANM', 'intitule_avis_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeAvisPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IntituleAvis' => 1, 'IntituleAvisFr' => 2, 'IntituleAvisEn' => 3, 'IntituleAvisEs' => 4, 'IntituleAvisSu' => 5, 'IntituleAvisDu' => 6, 'IntituleAvisCz' => 7, 'IntituleAvisAr' => 8, 'Abbreviation' => 9, 'IdTypeAvisAnm' => 10, 'IntituleAvisIt' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'intituleAvis' => 1, 'intituleAvisFr' => 2, 'intituleAvisEn' => 3, 'intituleAvisEs' => 4, 'intituleAvisSu' => 5, 'intituleAvisDu' => 6, 'intituleAvisCz' => 7, 'intituleAvisAr' => 8, 'abbreviation' => 9, 'idTypeAvisAnm' => 10, 'intituleAvisIt' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonTypeAvisPeer::ID => 0, CommonTypeAvisPeer::INTITULE_AVIS => 1, CommonTypeAvisPeer::INTITULE_AVIS_FR => 2, CommonTypeAvisPeer::INTITULE_AVIS_EN => 3, CommonTypeAvisPeer::INTITULE_AVIS_ES => 4, CommonTypeAvisPeer::INTITULE_AVIS_SU => 5, CommonTypeAvisPeer::INTITULE_AVIS_DU => 6, CommonTypeAvisPeer::INTITULE_AVIS_CZ => 7, CommonTypeAvisPeer::INTITULE_AVIS_AR => 8, CommonTypeAvisPeer::ABBREVIATION => 9, CommonTypeAvisPeer::ID_TYPE_AVIS_ANM => 10, CommonTypeAvisPeer::INTITULE_AVIS_IT => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'INTITULE_AVIS' => 1, 'INTITULE_AVIS_FR' => 2, 'INTITULE_AVIS_EN' => 3, 'INTITULE_AVIS_ES' => 4, 'INTITULE_AVIS_SU' => 5, 'INTITULE_AVIS_DU' => 6, 'INTITULE_AVIS_CZ' => 7, 'INTITULE_AVIS_AR' => 8, 'ABBREVIATION' => 9, 'ID_TYPE_AVIS_ANM' => 10, 'INTITULE_AVIS_IT' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'intitule_avis' => 1, 'intitule_avis_fr' => 2, 'intitule_avis_en' => 3, 'intitule_avis_es' => 4, 'intitule_avis_su' => 5, 'intitule_avis_du' => 6, 'intitule_avis_cz' => 7, 'intitule_avis_ar' => 8, 'abbreviation' => 9, 'id_type_avis_ANM' => 10, 'intitule_avis_it' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = CommonTypeAvisPeer::getFieldNames($toType);
        $key = isset(CommonTypeAvisPeer::$fieldKeys[$fromType][$name]) ? CommonTypeAvisPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTypeAvisPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTypeAvisPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTypeAvisPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTypeAvisPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTypeAvisPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTypeAvisPeer::ID);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_FR);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_EN);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_ES);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_SU);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_DU);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_CZ);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_AR);
            $criteria->addSelectColumn(CommonTypeAvisPeer::ABBREVIATION);
            $criteria->addSelectColumn(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM);
            $criteria->addSelectColumn(CommonTypeAvisPeer::INTITULE_AVIS_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.intitule_avis');
            $criteria->addSelectColumn($alias . '.intitule_avis_fr');
            $criteria->addSelectColumn($alias . '.intitule_avis_en');
            $criteria->addSelectColumn($alias . '.intitule_avis_es');
            $criteria->addSelectColumn($alias . '.intitule_avis_su');
            $criteria->addSelectColumn($alias . '.intitule_avis_du');
            $criteria->addSelectColumn($alias . '.intitule_avis_cz');
            $criteria->addSelectColumn($alias . '.intitule_avis_ar');
            $criteria->addSelectColumn($alias . '.abbreviation');
            $criteria->addSelectColumn($alias . '.id_type_avis_ANM');
            $criteria->addSelectColumn($alias . '.intitule_avis_it');
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
        $criteria->setPrimaryTableName(CommonTypeAvisPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTypeAvisPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTypeAvisPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeAvis
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTypeAvisPeer::doSelect($critcopy, $con);
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
        return CommonTypeAvisPeer::populateObjects(CommonTypeAvisPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTypeAvisPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeAvisPeer::DATABASE_NAME);

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
     * @param      CommonTypeAvis $obj A CommonTypeAvis object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTypeAvisPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTypeAvis object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTypeAvis) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTypeAvis object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTypeAvisPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTypeAvis Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTypeAvisPeer::$instances[$key])) {
                return CommonTypeAvisPeer::$instances[$key];
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
        foreach (CommonTypeAvisPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTypeAvisPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to TypeAvis
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
        $cls = CommonTypeAvisPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTypeAvisPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTypeAvisPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTypeAvisPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTypeAvis object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTypeAvisPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTypeAvisPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTypeAvisPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTypeAvisPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTypeAvisPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTypeAvisPeer::DATABASE_NAME)->getTable(CommonTypeAvisPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTypeAvisPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTypeAvisPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTypeAvisTableMap());
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
        return CommonTypeAvisPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTypeAvis or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeAvis object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTypeAvis object
        }

        if ($criteria->containsKey(CommonTypeAvisPeer::ID) && $criteria->keyContainsValue(CommonTypeAvisPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTypeAvisPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTypeAvisPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTypeAvis or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeAvis object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTypeAvisPeer::ID);
            $value = $criteria->remove(CommonTypeAvisPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTypeAvisPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTypeAvisPeer::TABLE_NAME);
            }

        } else { // $values is CommonTypeAvis object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTypeAvisPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the TypeAvis table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTypeAvisPeer::TABLE_NAME, $con, CommonTypeAvisPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTypeAvisPeer::clearInstancePool();
            CommonTypeAvisPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTypeAvis or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTypeAvis object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTypeAvisPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTypeAvis) { // it's a model object
            // invalidate the cache for this single object
            CommonTypeAvisPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);
            $criteria->add(CommonTypeAvisPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTypeAvisPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeAvisPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTypeAvisPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTypeAvis object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTypeAvis $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTypeAvisPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTypeAvisPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTypeAvisPeer::DATABASE_NAME, CommonTypeAvisPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTypeAvis
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTypeAvisPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);
        $criteria->add(CommonTypeAvisPeer::ID, $pk);

        $v = CommonTypeAvisPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTypeAvis[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);
            $criteria->add(CommonTypeAvisPeer::ID, $pks, Criteria::IN);
            $objs = CommonTypeAvisPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTypeAvisPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTypeAvisPeer::buildTableMap();

