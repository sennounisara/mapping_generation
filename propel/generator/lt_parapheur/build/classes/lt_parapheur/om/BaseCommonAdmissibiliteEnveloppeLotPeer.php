<?php


/**
 * Base static class for performing query and update operations on the 'Admissibilite_Enveloppe_Lot' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdmissibiliteEnveloppeLotPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Admissibilite_Enveloppe_Lot';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAdmissibiliteEnveloppeLot';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAdmissibiliteEnveloppeLotTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the id_Offre field */
    const ID_OFFRE = 'Admissibilite_Enveloppe_Lot.id_Offre';

    /** the column name for the organisme field */
    const ORGANISME = 'Admissibilite_Enveloppe_Lot.organisme';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'Admissibilite_Enveloppe_Lot.sous_pli';

    /** the column name for the admissibilite field */
    const ADMISSIBILITE = 'Admissibilite_Enveloppe_Lot.admissibilite';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'Admissibilite_Enveloppe_Lot.commentaire';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 'Admissibilite_Enveloppe_Lot.type_enveloppe';

    /** the column name for the sous_reserve field */
    const SOUS_RESERVE = 'Admissibilite_Enveloppe_Lot.sous_reserve';

    /** The enumerated values for the sous_reserve field */
    const SOUS_RESERVE_0 = '0';
    const SOUS_RESERVE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAdmissibiliteEnveloppeLot objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAdmissibiliteEnveloppeLot[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAdmissibiliteEnveloppeLotPeer::$fieldNames[CommonAdmissibiliteEnveloppeLotPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdOffre', 'Organisme', 'SousPli', 'Admissibilite', 'Commentaire', 'TypeEnveloppe', 'SousReserve', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idOffre', 'organisme', 'sousPli', 'admissibilite', 'commentaire', 'typeEnveloppe', 'sousReserve', ),
        BasePeer::TYPE_COLNAME => array (CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE, CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE, CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_OFFRE', 'ORGANISME', 'SOUS_PLI', 'ADMISSIBILITE', 'COMMENTAIRE', 'TYPE_ENVELOPPE', 'SOUS_RESERVE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_Offre', 'organisme', 'sous_pli', 'admissibilite', 'commentaire', 'type_enveloppe', 'sous_reserve', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAdmissibiliteEnveloppeLotPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdOffre' => 0, 'Organisme' => 1, 'SousPli' => 2, 'Admissibilite' => 3, 'Commentaire' => 4, 'TypeEnveloppe' => 5, 'SousReserve' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idOffre' => 0, 'organisme' => 1, 'sousPli' => 2, 'admissibilite' => 3, 'commentaire' => 4, 'typeEnveloppe' => 5, 'sousReserve' => 6, ),
        BasePeer::TYPE_COLNAME => array (CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE => 0, CommonAdmissibiliteEnveloppeLotPeer::ORGANISME => 1, CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI => 2, CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE => 3, CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE => 4, CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE => 5, CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_OFFRE' => 0, 'ORGANISME' => 1, 'SOUS_PLI' => 2, 'ADMISSIBILITE' => 3, 'COMMENTAIRE' => 4, 'TYPE_ENVELOPPE' => 5, 'SOUS_RESERVE' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('id_Offre' => 0, 'organisme' => 1, 'sous_pli' => 2, 'admissibilite' => 3, 'commentaire' => 4, 'type_enveloppe' => 5, 'sous_reserve' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE => array(
            CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE_0,
            CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE_1,
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
        $toNames = CommonAdmissibiliteEnveloppeLotPeer::getFieldNames($toType);
        $key = isset(CommonAdmissibiliteEnveloppeLotPeer::$fieldKeys[$fromType][$name]) ? CommonAdmissibiliteEnveloppeLotPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAdmissibiliteEnveloppeLotPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAdmissibiliteEnveloppeLotPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAdmissibiliteEnveloppeLotPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAdmissibiliteEnveloppeLotPeer::$enumValueSets;
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
        $valueSets = CommonAdmissibiliteEnveloppeLotPeer::getValueSets();

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
        $values = CommonAdmissibiliteEnveloppeLotPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAdmissibiliteEnveloppeLotPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE);
        } else {
            $criteria->addSelectColumn($alias . '.id_Offre');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.sous_pli');
            $criteria->addSelectColumn($alias . '.admissibilite');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.type_enveloppe');
            $criteria->addSelectColumn($alias . '.sous_reserve');
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
        $criteria->setPrimaryTableName(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdmissibiliteEnveloppeLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdmissibiliteEnveloppeLot
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAdmissibiliteEnveloppeLotPeer::doSelect($critcopy, $con);
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
        return CommonAdmissibiliteEnveloppeLotPeer::populateObjects(CommonAdmissibiliteEnveloppeLotPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAdmissibiliteEnveloppeLotPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

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
     * @param      CommonAdmissibiliteEnveloppeLot $obj A CommonAdmissibiliteEnveloppeLot object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdOffre(), (string) $obj->getOrganisme(), (string) $obj->getSousPli(), (string) $obj->getTypeEnveloppe()));
            } // if key === null
            CommonAdmissibiliteEnveloppeLotPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAdmissibiliteEnveloppeLot object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAdmissibiliteEnveloppeLot) {
                $key = serialize(array((string) $value->getIdOffre(), (string) $value->getOrganisme(), (string) $value->getSousPli(), (string) $value->getTypeEnveloppe()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAdmissibiliteEnveloppeLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAdmissibiliteEnveloppeLotPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAdmissibiliteEnveloppeLot Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAdmissibiliteEnveloppeLotPeer::$instances[$key])) {
                return CommonAdmissibiliteEnveloppeLotPeer::$instances[$key];
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
        foreach (CommonAdmissibiliteEnveloppeLotPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAdmissibiliteEnveloppeLotPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Admissibilite_Enveloppe_Lot
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (int) $row[$startcol + 2], (int) $row[$startcol + 5]);
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
        $cls = CommonAdmissibiliteEnveloppeLotPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAdmissibiliteEnveloppeLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAdmissibiliteEnveloppeLotPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAdmissibiliteEnveloppeLotPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAdmissibiliteEnveloppeLot object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAdmissibiliteEnveloppeLotPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAdmissibiliteEnveloppeLotPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAdmissibiliteEnveloppeLotPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAdmissibiliteEnveloppeLotPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAdmissibiliteEnveloppeLotPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME)->getTable(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAdmissibiliteEnveloppeLotTableMap());
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
        return CommonAdmissibiliteEnveloppeLotPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAdmissibiliteEnveloppeLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppeLot object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAdmissibiliteEnveloppeLot object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAdmissibiliteEnveloppeLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppeLot object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);
            }

        } else { // $values is CommonAdmissibiliteEnveloppeLot object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Admissibilite_Enveloppe_Lot table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME, $con, CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAdmissibiliteEnveloppeLotPeer::clearInstancePool();
            CommonAdmissibiliteEnveloppeLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAdmissibiliteEnveloppeLot or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppeLot object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAdmissibiliteEnveloppeLotPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAdmissibiliteEnveloppeLot) { // it's a model object
            // invalidate the cache for this single object
            CommonAdmissibiliteEnveloppeLotPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAdmissibiliteEnveloppeLotPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAdmissibiliteEnveloppeLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAdmissibiliteEnveloppeLot object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAdmissibiliteEnveloppeLot $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, CommonAdmissibiliteEnveloppeLotPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_offre
     * @param   string $organisme
     * @param   int $sous_pli
     * @param   int $type_enveloppe
     * @param      PropelPDO $con
     * @return   CommonAdmissibiliteEnveloppeLot
     */
    public static function retrieveByPK($id_offre, $organisme, $sous_pli, $type_enveloppe, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_offre, (string) $organisme, (string) $sous_pli, (string) $type_enveloppe));
         if (null !== ($obj = CommonAdmissibiliteEnveloppeLotPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $id_offre);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $organisme);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $sous_pli);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $type_enveloppe);
        $v = CommonAdmissibiliteEnveloppeLotPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAdmissibiliteEnveloppeLotPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAdmissibiliteEnveloppeLotPeer::buildTableMap();

