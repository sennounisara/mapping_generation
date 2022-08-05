<?php


/**
 * Base static class for performing query and update operations on the 't_synthese_rapport_audit' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTSyntheseRapportAuditPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_synthese_rapport_audit';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTSyntheseRapportAudit';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTSyntheseRapportAuditTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 't_synthese_rapport_audit.id';

    /** the column name for the organisme field */
    const ORGANISME = 't_synthese_rapport_audit.organisme';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 't_synthese_rapport_audit.nom_fichier';

    /** the column name for the fichier field */
    const FICHIER = 't_synthese_rapport_audit.fichier';

    /** the column name for the date field */
    const DATE = 't_synthese_rapport_audit.date';

    /** the column name for the horodatage field */
    const HORODATAGE = 't_synthese_rapport_audit.horodatage';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 't_synthese_rapport_audit.untrusteddate';

    /** the column name for the taille field */
    const TAILLE = 't_synthese_rapport_audit.taille';

    /** the column name for the annee field */
    const ANNEE = 't_synthese_rapport_audit.annee';

    /** the column name for the service_id field */
    const SERVICE_ID = 't_synthese_rapport_audit.service_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTSyntheseRapportAudit objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTSyntheseRapportAudit[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTSyntheseRapportAuditPeer::$fieldNames[CommonTSyntheseRapportAuditPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'NomFichier', 'Fichier', 'Date', 'Horodatage', 'Untrusteddate', 'Taille', 'Annee', 'ServiceId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'nomFichier', 'fichier', 'date', 'horodatage', 'untrusteddate', 'taille', 'annee', 'serviceId', ),
        BasePeer::TYPE_COLNAME => array (CommonTSyntheseRapportAuditPeer::ID, CommonTSyntheseRapportAuditPeer::ORGANISME, CommonTSyntheseRapportAuditPeer::NOM_FICHIER, CommonTSyntheseRapportAuditPeer::FICHIER, CommonTSyntheseRapportAuditPeer::DATE, CommonTSyntheseRapportAuditPeer::HORODATAGE, CommonTSyntheseRapportAuditPeer::UNTRUSTEDDATE, CommonTSyntheseRapportAuditPeer::TAILLE, CommonTSyntheseRapportAuditPeer::ANNEE, CommonTSyntheseRapportAuditPeer::SERVICE_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'NOM_FICHIER', 'FICHIER', 'DATE', 'HORODATAGE', 'UNTRUSTEDDATE', 'TAILLE', 'ANNEE', 'SERVICE_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'nom_fichier', 'fichier', 'date', 'horodatage', 'untrusteddate', 'taille', 'annee', 'service_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTSyntheseRapportAuditPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'NomFichier' => 2, 'Fichier' => 3, 'Date' => 4, 'Horodatage' => 5, 'Untrusteddate' => 6, 'Taille' => 7, 'Annee' => 8, 'ServiceId' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'nomFichier' => 2, 'fichier' => 3, 'date' => 4, 'horodatage' => 5, 'untrusteddate' => 6, 'taille' => 7, 'annee' => 8, 'serviceId' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonTSyntheseRapportAuditPeer::ID => 0, CommonTSyntheseRapportAuditPeer::ORGANISME => 1, CommonTSyntheseRapportAuditPeer::NOM_FICHIER => 2, CommonTSyntheseRapportAuditPeer::FICHIER => 3, CommonTSyntheseRapportAuditPeer::DATE => 4, CommonTSyntheseRapportAuditPeer::HORODATAGE => 5, CommonTSyntheseRapportAuditPeer::UNTRUSTEDDATE => 6, CommonTSyntheseRapportAuditPeer::TAILLE => 7, CommonTSyntheseRapportAuditPeer::ANNEE => 8, CommonTSyntheseRapportAuditPeer::SERVICE_ID => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'NOM_FICHIER' => 2, 'FICHIER' => 3, 'DATE' => 4, 'HORODATAGE' => 5, 'UNTRUSTEDDATE' => 6, 'TAILLE' => 7, 'ANNEE' => 8, 'SERVICE_ID' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'nom_fichier' => 2, 'fichier' => 3, 'date' => 4, 'horodatage' => 5, 'untrusteddate' => 6, 'taille' => 7, 'annee' => 8, 'service_id' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = CommonTSyntheseRapportAuditPeer::getFieldNames($toType);
        $key = isset(CommonTSyntheseRapportAuditPeer::$fieldKeys[$fromType][$name]) ? CommonTSyntheseRapportAuditPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTSyntheseRapportAuditPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTSyntheseRapportAuditPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTSyntheseRapportAuditPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTSyntheseRapportAuditPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTSyntheseRapportAuditPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::ID);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::FICHIER);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::DATE);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::HORODATAGE);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::UNTRUSTEDDATE);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::TAILLE);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::ANNEE);
            $criteria->addSelectColumn(CommonTSyntheseRapportAuditPeer::SERVICE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.fichier');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusteddate');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.annee');
            $criteria->addSelectColumn($alias . '.service_id');
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
        $criteria->setPrimaryTableName(CommonTSyntheseRapportAuditPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTSyntheseRapportAuditPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTSyntheseRapportAuditPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTSyntheseRapportAudit
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTSyntheseRapportAuditPeer::doSelect($critcopy, $con);
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
        return CommonTSyntheseRapportAuditPeer::populateObjects(CommonTSyntheseRapportAuditPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTSyntheseRapportAuditPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);

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
     * @param      CommonTSyntheseRapportAudit $obj A CommonTSyntheseRapportAudit object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTSyntheseRapportAuditPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTSyntheseRapportAudit object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTSyntheseRapportAudit) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTSyntheseRapportAudit object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTSyntheseRapportAuditPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTSyntheseRapportAudit Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTSyntheseRapportAuditPeer::$instances[$key])) {
                return CommonTSyntheseRapportAuditPeer::$instances[$key];
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
        foreach (CommonTSyntheseRapportAuditPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTSyntheseRapportAuditPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_synthese_rapport_audit
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
        $cls = CommonTSyntheseRapportAuditPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTSyntheseRapportAuditPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTSyntheseRapportAuditPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTSyntheseRapportAuditPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTSyntheseRapportAudit object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTSyntheseRapportAuditPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTSyntheseRapportAuditPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTSyntheseRapportAuditPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTSyntheseRapportAuditPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTSyntheseRapportAuditPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTSyntheseRapportAuditPeer::DATABASE_NAME)->getTable(CommonTSyntheseRapportAuditPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTSyntheseRapportAuditPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTSyntheseRapportAuditPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTSyntheseRapportAuditTableMap());
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
        return CommonTSyntheseRapportAuditPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTSyntheseRapportAudit or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTSyntheseRapportAudit object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTSyntheseRapportAudit object
        }

        if ($criteria->containsKey(CommonTSyntheseRapportAuditPeer::ID) && $criteria->keyContainsValue(CommonTSyntheseRapportAuditPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTSyntheseRapportAuditPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTSyntheseRapportAudit or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTSyntheseRapportAudit object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTSyntheseRapportAuditPeer::ID);
            $value = $criteria->remove(CommonTSyntheseRapportAuditPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTSyntheseRapportAuditPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTSyntheseRapportAuditPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTSyntheseRapportAuditPeer::ORGANISME);
            $value = $criteria->remove(CommonTSyntheseRapportAuditPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTSyntheseRapportAuditPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTSyntheseRapportAuditPeer::TABLE_NAME);
            }

        } else { // $values is CommonTSyntheseRapportAudit object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_synthese_rapport_audit table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTSyntheseRapportAuditPeer::TABLE_NAME, $con, CommonTSyntheseRapportAuditPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTSyntheseRapportAuditPeer::clearInstancePool();
            CommonTSyntheseRapportAuditPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTSyntheseRapportAudit or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTSyntheseRapportAudit object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTSyntheseRapportAuditPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTSyntheseRapportAudit) { // it's a model object
            // invalidate the cache for this single object
            CommonTSyntheseRapportAuditPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTSyntheseRapportAuditPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTSyntheseRapportAuditPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTSyntheseRapportAuditPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTSyntheseRapportAuditPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTSyntheseRapportAudit object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTSyntheseRapportAudit $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTSyntheseRapportAuditPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, CommonTSyntheseRapportAuditPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTSyntheseRapportAudit
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonTSyntheseRapportAuditPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTSyntheseRapportAuditPeer::DATABASE_NAME);
        $criteria->add(CommonTSyntheseRapportAuditPeer::ID, $id);
        $criteria->add(CommonTSyntheseRapportAuditPeer::ORGANISME, $organisme);
        $v = CommonTSyntheseRapportAuditPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTSyntheseRapportAuditPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTSyntheseRapportAuditPeer::buildTableMap();

