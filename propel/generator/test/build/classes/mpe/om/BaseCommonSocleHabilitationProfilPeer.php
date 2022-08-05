<?php


/**
 * Base static class for performing query and update operations on the 'Socle_Habilitation_Profil' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonSocleHabilitationProfilPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Socle_Habilitation_Profil';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonSocleHabilitationProfil';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonSocleHabilitationProfilTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 4;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 4;

    /** the column name for the id_profil field */
    const ID_PROFIL = 'Socle_Habilitation_Profil.id_profil';

    /** the column name for the gestion_agent_pole_socle field */
    const GESTION_AGENT_POLE_SOCLE = 'Socle_Habilitation_Profil.gestion_agent_pole_socle';

    /** the column name for the gestion_agents_socle field */
    const GESTION_AGENTS_SOCLE = 'Socle_Habilitation_Profil.gestion_agents_socle';

    /** the column name for the droit_gestion_services_socle field */
    const DROIT_GESTION_SERVICES_SOCLE = 'Socle_Habilitation_Profil.droit_gestion_services_socle';

    /** The enumerated values for the gestion_agent_pole_socle field */
    const GESTION_AGENT_POLE_SOCLE_0 = '0';
    const GESTION_AGENT_POLE_SOCLE_1 = '1';

    /** The enumerated values for the gestion_agents_socle field */
    const GESTION_AGENTS_SOCLE_0 = '0';
    const GESTION_AGENTS_SOCLE_1 = '1';

    /** The enumerated values for the droit_gestion_services_socle field */
    const DROIT_GESTION_SERVICES_SOCLE_0 = '0';
    const DROIT_GESTION_SERVICES_SOCLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonSocleHabilitationProfil objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonSocleHabilitationProfil[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonSocleHabilitationProfilPeer::$fieldNames[CommonSocleHabilitationProfilPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdProfil', 'GestionAgentPoleSocle', 'GestionAgentsSocle', 'DroitGestionServicesSocle', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idProfil', 'gestionAgentPoleSocle', 'gestionAgentsSocle', 'droitGestionServicesSocle', ),
        BasePeer::TYPE_COLNAME => array (CommonSocleHabilitationProfilPeer::ID_PROFIL, CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE, CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE, CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PROFIL', 'GESTION_AGENT_POLE_SOCLE', 'GESTION_AGENTS_SOCLE', 'DROIT_GESTION_SERVICES_SOCLE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_profil', 'gestion_agent_pole_socle', 'gestion_agents_socle', 'droit_gestion_services_socle', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonSocleHabilitationProfilPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdProfil' => 0, 'GestionAgentPoleSocle' => 1, 'GestionAgentsSocle' => 2, 'DroitGestionServicesSocle' => 3, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idProfil' => 0, 'gestionAgentPoleSocle' => 1, 'gestionAgentsSocle' => 2, 'droitGestionServicesSocle' => 3, ),
        BasePeer::TYPE_COLNAME => array (CommonSocleHabilitationProfilPeer::ID_PROFIL => 0, CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE => 1, CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE => 2, CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE => 3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PROFIL' => 0, 'GESTION_AGENT_POLE_SOCLE' => 1, 'GESTION_AGENTS_SOCLE' => 2, 'DROIT_GESTION_SERVICES_SOCLE' => 3, ),
        BasePeer::TYPE_FIELDNAME => array ('id_profil' => 0, 'gestion_agent_pole_socle' => 1, 'gestion_agents_socle' => 2, 'droit_gestion_services_socle' => 3, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE => array(
            CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE_0,
            CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE_1,
        ),
        CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE => array(
            CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE_0,
            CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE_1,
        ),
        CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE => array(
            CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE_0,
            CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE_1,
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
        $toNames = CommonSocleHabilitationProfilPeer::getFieldNames($toType);
        $key = isset(CommonSocleHabilitationProfilPeer::$fieldKeys[$fromType][$name]) ? CommonSocleHabilitationProfilPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonSocleHabilitationProfilPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonSocleHabilitationProfilPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonSocleHabilitationProfilPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonSocleHabilitationProfilPeer::$enumValueSets;
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
        $valueSets = CommonSocleHabilitationProfilPeer::getValueSets();

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
        $values = CommonSocleHabilitationProfilPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonSocleHabilitationProfilPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonSocleHabilitationProfilPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonSocleHabilitationProfilPeer::ID_PROFIL);
            $criteria->addSelectColumn(CommonSocleHabilitationProfilPeer::GESTION_AGENT_POLE_SOCLE);
            $criteria->addSelectColumn(CommonSocleHabilitationProfilPeer::GESTION_AGENTS_SOCLE);
            $criteria->addSelectColumn(CommonSocleHabilitationProfilPeer::DROIT_GESTION_SERVICES_SOCLE);
        } else {
            $criteria->addSelectColumn($alias . '.id_profil');
            $criteria->addSelectColumn($alias . '.gestion_agent_pole_socle');
            $criteria->addSelectColumn($alias . '.gestion_agents_socle');
            $criteria->addSelectColumn($alias . '.droit_gestion_services_socle');
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
        $criteria->setPrimaryTableName(CommonSocleHabilitationProfilPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonSocleHabilitationProfilPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonSocleHabilitationProfilPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSocleHabilitationProfil
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonSocleHabilitationProfilPeer::doSelect($critcopy, $con);
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
        return CommonSocleHabilitationProfilPeer::populateObjects(CommonSocleHabilitationProfilPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonSocleHabilitationProfilPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSocleHabilitationProfilPeer::DATABASE_NAME);

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
     * @param      CommonSocleHabilitationProfil $obj A CommonSocleHabilitationProfil object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdProfil();
            } // if key === null
            CommonSocleHabilitationProfilPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonSocleHabilitationProfil object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonSocleHabilitationProfil) {
                $key = (string) $value->getIdProfil();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonSocleHabilitationProfil object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonSocleHabilitationProfilPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonSocleHabilitationProfil Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonSocleHabilitationProfilPeer::$instances[$key])) {
                return CommonSocleHabilitationProfilPeer::$instances[$key];
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
        foreach (CommonSocleHabilitationProfilPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonSocleHabilitationProfilPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Socle_Habilitation_Profil
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
        $cls = CommonSocleHabilitationProfilPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonSocleHabilitationProfilPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonSocleHabilitationProfilPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonSocleHabilitationProfilPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonSocleHabilitationProfil object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonSocleHabilitationProfilPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonSocleHabilitationProfilPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonSocleHabilitationProfilPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonSocleHabilitationProfilPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonSocleHabilitationProfilPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonSocleHabilitationProfilPeer::DATABASE_NAME)->getTable(CommonSocleHabilitationProfilPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonSocleHabilitationProfilPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonSocleHabilitationProfilPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonSocleHabilitationProfilTableMap());
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
        return CommonSocleHabilitationProfilPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonSocleHabilitationProfil or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSocleHabilitationProfil object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonSocleHabilitationProfil object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonSocleHabilitationProfilPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonSocleHabilitationProfil or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSocleHabilitationProfil object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonSocleHabilitationProfilPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonSocleHabilitationProfilPeer::ID_PROFIL);
            $value = $criteria->remove(CommonSocleHabilitationProfilPeer::ID_PROFIL);
            if ($value) {
                $selectCriteria->add(CommonSocleHabilitationProfilPeer::ID_PROFIL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonSocleHabilitationProfilPeer::TABLE_NAME);
            }

        } else { // $values is CommonSocleHabilitationProfil object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonSocleHabilitationProfilPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Socle_Habilitation_Profil table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonSocleHabilitationProfilPeer::TABLE_NAME, $con, CommonSocleHabilitationProfilPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonSocleHabilitationProfilPeer::clearInstancePool();
            CommonSocleHabilitationProfilPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonSocleHabilitationProfil or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonSocleHabilitationProfil object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonSocleHabilitationProfilPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonSocleHabilitationProfil) { // it's a model object
            // invalidate the cache for this single object
            CommonSocleHabilitationProfilPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonSocleHabilitationProfilPeer::DATABASE_NAME);
            $criteria->add(CommonSocleHabilitationProfilPeer::ID_PROFIL, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonSocleHabilitationProfilPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSocleHabilitationProfilPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonSocleHabilitationProfilPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonSocleHabilitationProfil object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonSocleHabilitationProfil $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonSocleHabilitationProfilPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonSocleHabilitationProfilPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonSocleHabilitationProfilPeer::DATABASE_NAME, CommonSocleHabilitationProfilPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonSocleHabilitationProfil
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonSocleHabilitationProfilPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonSocleHabilitationProfilPeer::DATABASE_NAME);
        $criteria->add(CommonSocleHabilitationProfilPeer::ID_PROFIL, $pk);

        $v = CommonSocleHabilitationProfilPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonSocleHabilitationProfil[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonSocleHabilitationProfilPeer::DATABASE_NAME);
            $criteria->add(CommonSocleHabilitationProfilPeer::ID_PROFIL, $pks, Criteria::IN);
            $objs = CommonSocleHabilitationProfilPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonSocleHabilitationProfilPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonSocleHabilitationProfilPeer::buildTableMap();

