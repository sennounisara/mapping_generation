<?php


/**
 * Base static class for performing query and update operations on the 't_calendrier_transition_referentiel' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrierTransitionReferentielPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_calendrier_transition_referentiel';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCalendrierTransitionReferentiel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCalendrierTransitionReferentielTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the ID_TRANSITION_CALENDRIER_REFERENTIEL field */
    const ID_TRANSITION_CALENDRIER_REFERENTIEL = 't_calendrier_transition_referentiel.ID_TRANSITION_CALENDRIER_REFERENTIEL';

    /** the column name for the ID_TYPE_PROCEDURE field */
    const ID_TYPE_PROCEDURE = 't_calendrier_transition_referentiel.ID_TYPE_PROCEDURE';

    /** the column name for the ORGANISME field */
    const ORGANISME = 't_calendrier_transition_referentiel.ORGANISME';

    /** the column name for the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE field */
    const ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE = 't_calendrier_transition_referentiel.ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE';

    /** the column name for the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE field */
    const ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE = 't_calendrier_transition_referentiel.ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE';

    /** the column name for the VALEUR_FIXE field */
    const VALEUR_FIXE = 't_calendrier_transition_referentiel.VALEUR_FIXE';

    /** the column name for the VALEUR_VARIABLE field */
    const VALEUR_VARIABLE = 't_calendrier_transition_referentiel.VALEUR_VARIABLE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCalendrierTransitionReferentiel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCalendrierTransitionReferentiel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierTransitionReferentielPeer::$fieldNames[CommonTCalendrierTransitionReferentielPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTransitionCalendrierReferentiel', 'IdTypeProcedure', 'Organisme', 'IdCalendrierEtapeReferentielSource', 'IdCalendrierEtapeReferentielCible', 'ValeurFixe', 'ValeurVariable', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTransitionCalendrierReferentiel', 'idTypeProcedure', 'organisme', 'idCalendrierEtapeReferentielSource', 'idCalendrierEtapeReferentielCible', 'valeurFixe', 'valeurVariable', ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, CommonTCalendrierTransitionReferentielPeer::ORGANISME, CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE, CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE, CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE, CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TRANSITION_CALENDRIER_REFERENTIEL', 'ID_TYPE_PROCEDURE', 'ORGANISME', 'ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE', 'ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE', 'VALEUR_FIXE', 'VALEUR_VARIABLE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_TRANSITION_CALENDRIER_REFERENTIEL', 'ID_TYPE_PROCEDURE', 'ORGANISME', 'ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE', 'ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE', 'VALEUR_FIXE', 'VALEUR_VARIABLE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCalendrierTransitionReferentielPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTransitionCalendrierReferentiel' => 0, 'IdTypeProcedure' => 1, 'Organisme' => 2, 'IdCalendrierEtapeReferentielSource' => 3, 'IdCalendrierEtapeReferentielCible' => 4, 'ValeurFixe' => 5, 'ValeurVariable' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTransitionCalendrierReferentiel' => 0, 'idTypeProcedure' => 1, 'organisme' => 2, 'idCalendrierEtapeReferentielSource' => 3, 'idCalendrierEtapeReferentielCible' => 4, 'valeurFixe' => 5, 'valeurVariable' => 6, ),
        BasePeer::TYPE_COLNAME => array (CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL => 0, CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE => 1, CommonTCalendrierTransitionReferentielPeer::ORGANISME => 2, CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE => 3, CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE => 4, CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE => 5, CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TRANSITION_CALENDRIER_REFERENTIEL' => 0, 'ID_TYPE_PROCEDURE' => 1, 'ORGANISME' => 2, 'ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE' => 3, 'ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE' => 4, 'VALEUR_FIXE' => 5, 'VALEUR_VARIABLE' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_TRANSITION_CALENDRIER_REFERENTIEL' => 0, 'ID_TYPE_PROCEDURE' => 1, 'ORGANISME' => 2, 'ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE' => 3, 'ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE' => 4, 'VALEUR_FIXE' => 5, 'VALEUR_VARIABLE' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = CommonTCalendrierTransitionReferentielPeer::getFieldNames($toType);
        $key = isset(CommonTCalendrierTransitionReferentielPeer::$fieldKeys[$fromType][$name]) ? CommonTCalendrierTransitionReferentielPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCalendrierTransitionReferentielPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCalendrierTransitionReferentielPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCalendrierTransitionReferentielPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCalendrierTransitionReferentielPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE);
            $criteria->addSelectColumn(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE);
        } else {
            $criteria->addSelectColumn($alias . '.ID_TRANSITION_CALENDRIER_REFERENTIEL');
            $criteria->addSelectColumn($alias . '.ID_TYPE_PROCEDURE');
            $criteria->addSelectColumn($alias . '.ORGANISME');
            $criteria->addSelectColumn($alias . '.ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE');
            $criteria->addSelectColumn($alias . '.ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE');
            $criteria->addSelectColumn($alias . '.VALEUR_FIXE');
            $criteria->addSelectColumn($alias . '.VALEUR_VARIABLE');
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
        $criteria->setPrimaryTableName(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCalendrierTransitionReferentielPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrierTransitionReferentiel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCalendrierTransitionReferentielPeer::doSelect($critcopy, $con);
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
        return CommonTCalendrierTransitionReferentielPeer::populateObjects(CommonTCalendrierTransitionReferentielPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCalendrierTransitionReferentielPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

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
     * @param      CommonTCalendrierTransitionReferentiel $obj A CommonTCalendrierTransitionReferentiel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdTransitionCalendrierReferentiel(), (string) $obj->getIdTypeProcedure(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTCalendrierTransitionReferentielPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCalendrierTransitionReferentiel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCalendrierTransitionReferentiel) {
                $key = serialize(array((string) $value->getIdTransitionCalendrierReferentiel(), (string) $value->getIdTypeProcedure(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCalendrierTransitionReferentiel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCalendrierTransitionReferentielPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCalendrierTransitionReferentiel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCalendrierTransitionReferentielPeer::$instances[$key])) {
                return CommonTCalendrierTransitionReferentielPeer::$instances[$key];
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
        foreach (CommonTCalendrierTransitionReferentielPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCalendrierTransitionReferentielPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_calendrier_transition_referentiel
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
        $cls = CommonTCalendrierTransitionReferentielPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCalendrierTransitionReferentielPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCalendrierTransitionReferentielPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCalendrierTransitionReferentielPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCalendrierTransitionReferentiel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCalendrierTransitionReferentielPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCalendrierTransitionReferentielPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCalendrierTransitionReferentielPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCalendrierTransitionReferentielPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCalendrierTransitionReferentielPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME)->getTable(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCalendrierTransitionReferentielPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCalendrierTransitionReferentielTableMap());
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
        return CommonTCalendrierTransitionReferentielPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCalendrierTransitionReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierTransitionReferentiel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCalendrierTransitionReferentiel object
        }

        if ($criteria->containsKey(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL) && $criteria->keyContainsValue(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCalendrierTransitionReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCalendrierTransitionReferentiel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL);
            $value = $criteria->remove(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE);
            $value = $criteria->remove(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCalendrierTransitionReferentielPeer::ORGANISME);
            $value = $criteria->remove(CommonTCalendrierTransitionReferentielPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);
            }

        } else { // $values is CommonTCalendrierTransitionReferentiel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_calendrier_transition_referentiel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME, $con, CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCalendrierTransitionReferentielPeer::clearInstancePool();
            CommonTCalendrierTransitionReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCalendrierTransitionReferentiel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCalendrierTransitionReferentiel object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCalendrierTransitionReferentielPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCalendrierTransitionReferentiel) { // it's a model object
            // invalidate the cache for this single object
            CommonTCalendrierTransitionReferentielPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTCalendrierTransitionReferentielPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCalendrierTransitionReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCalendrierTransitionReferentiel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCalendrierTransitionReferentiel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCalendrierTransitionReferentielPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, CommonTCalendrierTransitionReferentielPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_transition_calendrier_referentiel
     * @param   int $id_type_procedure
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTCalendrierTransitionReferentiel
     */
    public static function retrieveByPK($id_transition_calendrier_referentiel, $id_type_procedure, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_transition_calendrier_referentiel, (string) $id_type_procedure, (string) $organisme));
         if (null !== ($obj = CommonTCalendrierTransitionReferentielPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $id_transition_calendrier_referentiel);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $id_type_procedure);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $organisme);
        $v = CommonTCalendrierTransitionReferentielPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTCalendrierTransitionReferentielPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCalendrierTransitionReferentielPeer::buildTableMap();

