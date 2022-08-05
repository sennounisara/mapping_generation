<?php


/**
 * Base static class for performing query and update operations on the 'Admissibilite_Enveloppe_papier_Lot' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAdmissibiliteEnveloppePapierLotPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Admissibilite_Enveloppe_papier_Lot';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAdmissibiliteEnveloppePapierLot';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAdmissibiliteEnveloppePapierLotTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the id_offre_papier field */
    const ID_OFFRE_PAPIER = 'Admissibilite_Enveloppe_papier_Lot.id_offre_papier';

    /** the column name for the organisme field */
    const ORGANISME = 'Admissibilite_Enveloppe_papier_Lot.organisme';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'Admissibilite_Enveloppe_papier_Lot.sous_pli';

    /** the column name for the admissibilite field */
    const ADMISSIBILITE = 'Admissibilite_Enveloppe_papier_Lot.admissibilite';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'Admissibilite_Enveloppe_papier_Lot.commentaire';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 'Admissibilite_Enveloppe_papier_Lot.type_enveloppe';

    /** the column name for the sous_reserve field */
    const SOUS_RESERVE = 'Admissibilite_Enveloppe_papier_Lot.sous_reserve';

    /** The enumerated values for the sous_reserve field */
    const SOUS_RESERVE_0 = '0';
    const SOUS_RESERVE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAdmissibiliteEnveloppePapierLot objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAdmissibiliteEnveloppePapierLot[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAdmissibiliteEnveloppePapierLotPeer::$fieldNames[CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdOffrePapier', 'Organisme', 'SousPli', 'Admissibilite', 'Commentaire', 'TypeEnveloppe', 'SousReserve', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idOffrePapier', 'organisme', 'sousPli', 'admissibilite', 'commentaire', 'typeEnveloppe', 'sousReserve', ),
        BasePeer::TYPE_COLNAME => array (CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER, CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME, CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI, CommonAdmissibiliteEnveloppePapierLotPeer::ADMISSIBILITE, CommonAdmissibiliteEnveloppePapierLotPeer::COMMENTAIRE, CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE, CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_OFFRE_PAPIER', 'ORGANISME', 'SOUS_PLI', 'ADMISSIBILITE', 'COMMENTAIRE', 'TYPE_ENVELOPPE', 'SOUS_RESERVE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_offre_papier', 'organisme', 'sous_pli', 'admissibilite', 'commentaire', 'type_enveloppe', 'sous_reserve', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAdmissibiliteEnveloppePapierLotPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdOffrePapier' => 0, 'Organisme' => 1, 'SousPli' => 2, 'Admissibilite' => 3, 'Commentaire' => 4, 'TypeEnveloppe' => 5, 'SousReserve' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idOffrePapier' => 0, 'organisme' => 1, 'sousPli' => 2, 'admissibilite' => 3, 'commentaire' => 4, 'typeEnveloppe' => 5, 'sousReserve' => 6, ),
        BasePeer::TYPE_COLNAME => array (CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER => 0, CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME => 1, CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI => 2, CommonAdmissibiliteEnveloppePapierLotPeer::ADMISSIBILITE => 3, CommonAdmissibiliteEnveloppePapierLotPeer::COMMENTAIRE => 4, CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE => 5, CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_OFFRE_PAPIER' => 0, 'ORGANISME' => 1, 'SOUS_PLI' => 2, 'ADMISSIBILITE' => 3, 'COMMENTAIRE' => 4, 'TYPE_ENVELOPPE' => 5, 'SOUS_RESERVE' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('id_offre_papier' => 0, 'organisme' => 1, 'sous_pli' => 2, 'admissibilite' => 3, 'commentaire' => 4, 'type_enveloppe' => 5, 'sous_reserve' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE => array(
            CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE_0,
            CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE_1,
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
        $toNames = CommonAdmissibiliteEnveloppePapierLotPeer::getFieldNames($toType);
        $key = isset(CommonAdmissibiliteEnveloppePapierLotPeer::$fieldKeys[$fromType][$name]) ? CommonAdmissibiliteEnveloppePapierLotPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAdmissibiliteEnveloppePapierLotPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAdmissibiliteEnveloppePapierLotPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAdmissibiliteEnveloppePapierLotPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAdmissibiliteEnveloppePapierLotPeer::$enumValueSets;
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
        $valueSets = CommonAdmissibiliteEnveloppePapierLotPeer::getValueSets();

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
        $values = CommonAdmissibiliteEnveloppePapierLotPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAdmissibiliteEnveloppePapierLotPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::ADMISSIBILITE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_RESERVE);
        } else {
            $criteria->addSelectColumn($alias . '.id_offre_papier');
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
        $criteria->setPrimaryTableName(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdmissibiliteEnveloppePapierLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdmissibiliteEnveloppePapierLot
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAdmissibiliteEnveloppePapierLotPeer::doSelect($critcopy, $con);
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
        return CommonAdmissibiliteEnveloppePapierLotPeer::populateObjects(CommonAdmissibiliteEnveloppePapierLotPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAdmissibiliteEnveloppePapierLotPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);

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
     * @param      CommonAdmissibiliteEnveloppePapierLot $obj A CommonAdmissibiliteEnveloppePapierLot object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdOffrePapier(), (string) $obj->getOrganisme(), (string) $obj->getSousPli(), (string) $obj->getTypeEnveloppe()));
            } // if key === null
            CommonAdmissibiliteEnveloppePapierLotPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAdmissibiliteEnveloppePapierLot object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAdmissibiliteEnveloppePapierLot) {
                $key = serialize(array((string) $value->getIdOffrePapier(), (string) $value->getOrganisme(), (string) $value->getSousPli(), (string) $value->getTypeEnveloppe()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAdmissibiliteEnveloppePapierLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAdmissibiliteEnveloppePapierLotPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAdmissibiliteEnveloppePapierLot Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAdmissibiliteEnveloppePapierLotPeer::$instances[$key])) {
                return CommonAdmissibiliteEnveloppePapierLotPeer::$instances[$key];
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
        foreach (CommonAdmissibiliteEnveloppePapierLotPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAdmissibiliteEnveloppePapierLotPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Admissibilite_Enveloppe_papier_Lot
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
        $cls = CommonAdmissibiliteEnveloppePapierLotPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAdmissibiliteEnveloppePapierLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAdmissibiliteEnveloppePapierLotPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAdmissibiliteEnveloppePapierLotPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAdmissibiliteEnveloppePapierLot object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAdmissibiliteEnveloppePapierLotPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAdmissibiliteEnveloppePapierLotPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAdmissibiliteEnveloppePapierLotPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAdmissibiliteEnveloppePapierLotPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAdmissibiliteEnveloppePapierLotPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME)->getTable(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAdmissibiliteEnveloppePapierLotTableMap());
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
        return CommonAdmissibiliteEnveloppePapierLotPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAdmissibiliteEnveloppePapierLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppePapierLot object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAdmissibiliteEnveloppePapierLot object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAdmissibiliteEnveloppePapierLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppePapierLot object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE);
            $value = $criteria->remove(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE);
            if ($value) {
                $selectCriteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);
            }

        } else { // $values is CommonAdmissibiliteEnveloppePapierLot object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Admissibilite_Enveloppe_papier_Lot table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME, $con, CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAdmissibiliteEnveloppePapierLotPeer::clearInstancePool();
            CommonAdmissibiliteEnveloppePapierLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAdmissibiliteEnveloppePapierLot or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAdmissibiliteEnveloppePapierLot object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAdmissibiliteEnveloppePapierLotPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAdmissibiliteEnveloppePapierLot) { // it's a model object
            // invalidate the cache for this single object
            CommonAdmissibiliteEnveloppePapierLotPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAdmissibiliteEnveloppePapierLotPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAdmissibiliteEnveloppePapierLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAdmissibiliteEnveloppePapierLot object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAdmissibiliteEnveloppePapierLot $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, CommonAdmissibiliteEnveloppePapierLotPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_offre_papier
     * @param   string $organisme
     * @param   int $sous_pli
     * @param   int $type_enveloppe
     * @param      PropelPDO $con
     * @return   CommonAdmissibiliteEnveloppePapierLot
     */
    public static function retrieveByPK($id_offre_papier, $organisme, $sous_pli, $type_enveloppe, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_offre_papier, (string) $organisme, (string) $sous_pli, (string) $type_enveloppe));
         if (null !== ($obj = CommonAdmissibiliteEnveloppePapierLotPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAdmissibiliteEnveloppePapierLotPeer::DATABASE_NAME);
        $criteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::ID_OFFRE_PAPIER, $id_offre_papier);
        $criteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::ORGANISME, $organisme);
        $criteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::SOUS_PLI, $sous_pli);
        $criteria->add(CommonAdmissibiliteEnveloppePapierLotPeer::TYPE_ENVELOPPE, $type_enveloppe);
        $v = CommonAdmissibiliteEnveloppePapierLotPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAdmissibiliteEnveloppePapierLotPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAdmissibiliteEnveloppePapierLotPeer::buildTableMap();

