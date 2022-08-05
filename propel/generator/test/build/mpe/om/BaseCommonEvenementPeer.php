<?php


/**
 * Base static class for performing query and update operations on the 'Evenement' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEvenementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Evenement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEvenement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEvenementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id_evenement field */
    const ID_EVENEMENT = 'Evenement.id_evenement';

    /** the column name for the reference_consultation field */
    const REFERENCE_CONSULTATION = 'Evenement.reference_consultation';

    /** the column name for the reference_utilisateur field */
    const REFERENCE_UTILISATEUR = 'Evenement.reference_utilisateur';

    /** the column name for the id_service field */
    const ID_SERVICE = 'Evenement.id_service';

    /** the column name for the organisme field */
    const ORGANISME = 'Evenement.organisme';

    /** the column name for the objet_consultation field */
    const OBJET_CONSULTATION = 'Evenement.objet_consultation';

    /** the column name for the type_evenement field */
    const TYPE_EVENEMENT = 'Evenement.type_evenement';

    /** the column name for the date_evenement field */
    const DATE_EVENEMENT = 'Evenement.date_evenement';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Evenement.date_creation';

    /** The enumerated values for the type_evenement field */
    const TYPE_EVENEMENT_PUBLICATION = 'publication';
    const TYPE_EVENEMENT_MODIFICATION = 'modification';
    const TYPE_EVENEMENT_ANNULATION = 'annulation';
    const TYPE_EVENEMENT_DECISION = 'decision';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEvenement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEvenement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEvenementPeer::$fieldNames[CommonEvenementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEvenement', 'ReferenceConsultation', 'ReferenceUtilisateur', 'IdService', 'Organisme', 'ObjetConsultation', 'TypeEvenement', 'DateEvenement', 'DateCreation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEvenement', 'referenceConsultation', 'referenceUtilisateur', 'idService', 'organisme', 'objetConsultation', 'typeEvenement', 'dateEvenement', 'dateCreation', ),
        BasePeer::TYPE_COLNAME => array (CommonEvenementPeer::ID_EVENEMENT, CommonEvenementPeer::REFERENCE_CONSULTATION, CommonEvenementPeer::REFERENCE_UTILISATEUR, CommonEvenementPeer::ID_SERVICE, CommonEvenementPeer::ORGANISME, CommonEvenementPeer::OBJET_CONSULTATION, CommonEvenementPeer::TYPE_EVENEMENT, CommonEvenementPeer::DATE_EVENEMENT, CommonEvenementPeer::DATE_CREATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_EVENEMENT', 'REFERENCE_CONSULTATION', 'REFERENCE_UTILISATEUR', 'ID_SERVICE', 'ORGANISME', 'OBJET_CONSULTATION', 'TYPE_EVENEMENT', 'DATE_EVENEMENT', 'DATE_CREATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id_evenement', 'reference_consultation', 'reference_utilisateur', 'id_service', 'organisme', 'objet_consultation', 'type_evenement', 'date_evenement', 'date_creation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEvenementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEvenement' => 0, 'ReferenceConsultation' => 1, 'ReferenceUtilisateur' => 2, 'IdService' => 3, 'Organisme' => 4, 'ObjetConsultation' => 5, 'TypeEvenement' => 6, 'DateEvenement' => 7, 'DateCreation' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEvenement' => 0, 'referenceConsultation' => 1, 'referenceUtilisateur' => 2, 'idService' => 3, 'organisme' => 4, 'objetConsultation' => 5, 'typeEvenement' => 6, 'dateEvenement' => 7, 'dateCreation' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonEvenementPeer::ID_EVENEMENT => 0, CommonEvenementPeer::REFERENCE_CONSULTATION => 1, CommonEvenementPeer::REFERENCE_UTILISATEUR => 2, CommonEvenementPeer::ID_SERVICE => 3, CommonEvenementPeer::ORGANISME => 4, CommonEvenementPeer::OBJET_CONSULTATION => 5, CommonEvenementPeer::TYPE_EVENEMENT => 6, CommonEvenementPeer::DATE_EVENEMENT => 7, CommonEvenementPeer::DATE_CREATION => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_EVENEMENT' => 0, 'REFERENCE_CONSULTATION' => 1, 'REFERENCE_UTILISATEUR' => 2, 'ID_SERVICE' => 3, 'ORGANISME' => 4, 'OBJET_CONSULTATION' => 5, 'TYPE_EVENEMENT' => 6, 'DATE_EVENEMENT' => 7, 'DATE_CREATION' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id_evenement' => 0, 'reference_consultation' => 1, 'reference_utilisateur' => 2, 'id_service' => 3, 'organisme' => 4, 'objet_consultation' => 5, 'type_evenement' => 6, 'date_evenement' => 7, 'date_creation' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEvenementPeer::TYPE_EVENEMENT => array(
            CommonEvenementPeer::TYPE_EVENEMENT_PUBLICATION,
            CommonEvenementPeer::TYPE_EVENEMENT_MODIFICATION,
            CommonEvenementPeer::TYPE_EVENEMENT_ANNULATION,
            CommonEvenementPeer::TYPE_EVENEMENT_DECISION,
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
        $toNames = CommonEvenementPeer::getFieldNames($toType);
        $key = isset(CommonEvenementPeer::$fieldKeys[$fromType][$name]) ? CommonEvenementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEvenementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEvenementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEvenementPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEvenementPeer::$enumValueSets;
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
        $valueSets = CommonEvenementPeer::getValueSets();

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
        $values = CommonEvenementPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEvenementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEvenementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEvenementPeer::ID_EVENEMENT);
            $criteria->addSelectColumn(CommonEvenementPeer::REFERENCE_CONSULTATION);
            $criteria->addSelectColumn(CommonEvenementPeer::REFERENCE_UTILISATEUR);
            $criteria->addSelectColumn(CommonEvenementPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonEvenementPeer::ORGANISME);
            $criteria->addSelectColumn(CommonEvenementPeer::OBJET_CONSULTATION);
            $criteria->addSelectColumn(CommonEvenementPeer::TYPE_EVENEMENT);
            $criteria->addSelectColumn(CommonEvenementPeer::DATE_EVENEMENT);
            $criteria->addSelectColumn(CommonEvenementPeer::DATE_CREATION);
        } else {
            $criteria->addSelectColumn($alias . '.id_evenement');
            $criteria->addSelectColumn($alias . '.reference_consultation');
            $criteria->addSelectColumn($alias . '.reference_utilisateur');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.objet_consultation');
            $criteria->addSelectColumn($alias . '.type_evenement');
            $criteria->addSelectColumn($alias . '.date_evenement');
            $criteria->addSelectColumn($alias . '.date_creation');
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
        $criteria->setPrimaryTableName(CommonEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEvenementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEvenement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEvenementPeer::doSelect($critcopy, $con);
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
        return CommonEvenementPeer::populateObjects(CommonEvenementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEvenementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEvenementPeer::DATABASE_NAME);

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
     * @param      CommonEvenement $obj A CommonEvenement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEvenement();
            } // if key === null
            CommonEvenementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEvenement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEvenement) {
                $key = (string) $value->getIdEvenement();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEvenement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEvenementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEvenement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEvenementPeer::$instances[$key])) {
                return CommonEvenementPeer::$instances[$key];
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
        foreach (CommonEvenementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEvenementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Evenement
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
        $cls = CommonEvenementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEvenementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEvenementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEvenement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEvenementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEvenementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEvenementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEvenementPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEvenementPeer::DATABASE_NAME)->getTable(CommonEvenementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEvenementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEvenementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEvenementTableMap());
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
        return CommonEvenementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEvenement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEvenement object
        }

        if ($criteria->containsKey(CommonEvenementPeer::ID_EVENEMENT) && $criteria->keyContainsValue(CommonEvenementPeer::ID_EVENEMENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEvenementPeer::ID_EVENEMENT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEvenementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEvenement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEvenementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEvenementPeer::ID_EVENEMENT);
            $value = $criteria->remove(CommonEvenementPeer::ID_EVENEMENT);
            if ($value) {
                $selectCriteria->add(CommonEvenementPeer::ID_EVENEMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEvenementPeer::TABLE_NAME);
            }

        } else { // $values is CommonEvenement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEvenementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Evenement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEvenementPeer::TABLE_NAME, $con, CommonEvenementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEvenementPeer::clearInstancePool();
            CommonEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEvenement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEvenement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEvenementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEvenement) { // it's a model object
            // invalidate the cache for this single object
            CommonEvenementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonEvenementPeer::ID_EVENEMENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonEvenementPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEvenementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEvenement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEvenement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEvenementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEvenementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEvenementPeer::DATABASE_NAME, CommonEvenementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonEvenement
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonEvenementPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonEvenementPeer::DATABASE_NAME);
        $criteria->add(CommonEvenementPeer::ID_EVENEMENT, $pk);

        $v = CommonEvenementPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonEvenement[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonEvenementPeer::ID_EVENEMENT, $pks, Criteria::IN);
            $objs = CommonEvenementPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonEvenementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEvenementPeer::buildTableMap();

