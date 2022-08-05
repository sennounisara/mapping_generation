<?php


/**
 * Base static class for performing query and update operations on the 'AdresseFacturationJal' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdresseFacturationJalPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AdresseFacturationJal';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAdresseFacturationJal';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAdresseFacturationJalTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'AdresseFacturationJal.id';

    /** the column name for the organisme field */
    const ORGANISME = 'AdresseFacturationJal.organisme';

    /** the column name for the id_service field */
    const ID_SERVICE = 'AdresseFacturationJal.id_service';

    /** the column name for the email_ar field */
    const EMAIL_AR = 'AdresseFacturationJal.email_ar';

    /** the column name for the telecopie field */
    const TELECOPIE = 'AdresseFacturationJal.telecopie';

    /** the column name for the information_facturation field */
    const INFORMATION_FACTURATION = 'AdresseFacturationJal.information_facturation';

    /** the column name for the facturation_sip field */
    const FACTURATION_SIP = 'AdresseFacturationJal.facturation_sip';

    /** the column name for the id_blob_logo field */
    const ID_BLOB_LOGO = 'AdresseFacturationJal.id_blob_logo';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'AdresseFacturationJal.nom_fichier';

    /** The enumerated values for the facturation_sip field */
    const FACTURATION_SIP_0 = '0';
    const FACTURATION_SIP_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAdresseFacturationJal objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAdresseFacturationJal[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAdresseFacturationJalPeer::$fieldNames[CommonAdresseFacturationJalPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdService', 'EmailAr', 'Telecopie', 'InformationFacturation', 'FacturationSip', 'IdBlobLogo', 'NomFichier', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idService', 'emailAr', 'telecopie', 'informationFacturation', 'facturationSip', 'idBlobLogo', 'nomFichier', ),
        BasePeer::TYPE_COLNAME => array (CommonAdresseFacturationJalPeer::ID, CommonAdresseFacturationJalPeer::ORGANISME, CommonAdresseFacturationJalPeer::ID_SERVICE, CommonAdresseFacturationJalPeer::EMAIL_AR, CommonAdresseFacturationJalPeer::TELECOPIE, CommonAdresseFacturationJalPeer::INFORMATION_FACTURATION, CommonAdresseFacturationJalPeer::FACTURATION_SIP, CommonAdresseFacturationJalPeer::ID_BLOB_LOGO, CommonAdresseFacturationJalPeer::NOM_FICHIER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_SERVICE', 'EMAIL_AR', 'TELECOPIE', 'INFORMATION_FACTURATION', 'FACTURATION_SIP', 'ID_BLOB_LOGO', 'NOM_FICHIER', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_service', 'email_ar', 'telecopie', 'information_facturation', 'facturation_sip', 'id_blob_logo', 'nom_fichier', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAdresseFacturationJalPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdService' => 2, 'EmailAr' => 3, 'Telecopie' => 4, 'InformationFacturation' => 5, 'FacturationSip' => 6, 'IdBlobLogo' => 7, 'NomFichier' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idService' => 2, 'emailAr' => 3, 'telecopie' => 4, 'informationFacturation' => 5, 'facturationSip' => 6, 'idBlobLogo' => 7, 'nomFichier' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonAdresseFacturationJalPeer::ID => 0, CommonAdresseFacturationJalPeer::ORGANISME => 1, CommonAdresseFacturationJalPeer::ID_SERVICE => 2, CommonAdresseFacturationJalPeer::EMAIL_AR => 3, CommonAdresseFacturationJalPeer::TELECOPIE => 4, CommonAdresseFacturationJalPeer::INFORMATION_FACTURATION => 5, CommonAdresseFacturationJalPeer::FACTURATION_SIP => 6, CommonAdresseFacturationJalPeer::ID_BLOB_LOGO => 7, CommonAdresseFacturationJalPeer::NOM_FICHIER => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_SERVICE' => 2, 'EMAIL_AR' => 3, 'TELECOPIE' => 4, 'INFORMATION_FACTURATION' => 5, 'FACTURATION_SIP' => 6, 'ID_BLOB_LOGO' => 7, 'NOM_FICHIER' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_service' => 2, 'email_ar' => 3, 'telecopie' => 4, 'information_facturation' => 5, 'facturation_sip' => 6, 'id_blob_logo' => 7, 'nom_fichier' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAdresseFacturationJalPeer::FACTURATION_SIP => array(
            CommonAdresseFacturationJalPeer::FACTURATION_SIP_0,
            CommonAdresseFacturationJalPeer::FACTURATION_SIP_1,
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
        $toNames = CommonAdresseFacturationJalPeer::getFieldNames($toType);
        $key = isset(CommonAdresseFacturationJalPeer::$fieldKeys[$fromType][$name]) ? CommonAdresseFacturationJalPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAdresseFacturationJalPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAdresseFacturationJalPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAdresseFacturationJalPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAdresseFacturationJalPeer::$enumValueSets;
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
        $valueSets = CommonAdresseFacturationJalPeer::getValueSets();

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
        $values = CommonAdresseFacturationJalPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAdresseFacturationJalPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAdresseFacturationJalPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::ID);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::EMAIL_AR);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::TELECOPIE);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::INFORMATION_FACTURATION);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::FACTURATION_SIP);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::ID_BLOB_LOGO);
            $criteria->addSelectColumn(CommonAdresseFacturationJalPeer::NOM_FICHIER);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.email_ar');
            $criteria->addSelectColumn($alias . '.telecopie');
            $criteria->addSelectColumn($alias . '.information_facturation');
            $criteria->addSelectColumn($alias . '.facturation_sip');
            $criteria->addSelectColumn($alias . '.id_blob_logo');
            $criteria->addSelectColumn($alias . '.nom_fichier');
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
        $criteria->setPrimaryTableName(CommonAdresseFacturationJalPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdresseFacturationJalPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAdresseFacturationJalPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdresseFacturationJal
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAdresseFacturationJalPeer::doSelect($critcopy, $con);
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
        return CommonAdresseFacturationJalPeer::populateObjects(CommonAdresseFacturationJalPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAdresseFacturationJalPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdresseFacturationJalPeer::DATABASE_NAME);

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
     * @param      CommonAdresseFacturationJal $obj A CommonAdresseFacturationJal object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAdresseFacturationJalPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAdresseFacturationJal object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAdresseFacturationJal) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAdresseFacturationJal object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAdresseFacturationJalPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAdresseFacturationJal Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAdresseFacturationJalPeer::$instances[$key])) {
                return CommonAdresseFacturationJalPeer::$instances[$key];
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
        foreach (CommonAdresseFacturationJalPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAdresseFacturationJalPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AdresseFacturationJal
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
        $cls = CommonAdresseFacturationJalPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAdresseFacturationJalPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAdresseFacturationJalPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAdresseFacturationJalPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAdresseFacturationJal object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAdresseFacturationJalPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAdresseFacturationJalPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAdresseFacturationJalPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAdresseFacturationJalPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAdresseFacturationJalPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAdresseFacturationJalPeer::DATABASE_NAME)->getTable(CommonAdresseFacturationJalPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAdresseFacturationJalPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAdresseFacturationJalPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAdresseFacturationJalTableMap());
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
        return CommonAdresseFacturationJalPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAdresseFacturationJal or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdresseFacturationJal object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAdresseFacturationJal object
        }

        if ($criteria->containsKey(CommonAdresseFacturationJalPeer::ID) && $criteria->keyContainsValue(CommonAdresseFacturationJalPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAdresseFacturationJalPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAdresseFacturationJalPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAdresseFacturationJal or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdresseFacturationJal object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAdresseFacturationJalPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAdresseFacturationJalPeer::ID);
            $value = $criteria->remove(CommonAdresseFacturationJalPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAdresseFacturationJalPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdresseFacturationJalPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAdresseFacturationJalPeer::ORGANISME);
            $value = $criteria->remove(CommonAdresseFacturationJalPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAdresseFacturationJalPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdresseFacturationJalPeer::TABLE_NAME);
            }

        } else { // $values is CommonAdresseFacturationJal object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAdresseFacturationJalPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AdresseFacturationJal table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAdresseFacturationJalPeer::TABLE_NAME, $con, CommonAdresseFacturationJalPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAdresseFacturationJalPeer::clearInstancePool();
            CommonAdresseFacturationJalPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAdresseFacturationJal or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAdresseFacturationJal object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAdresseFacturationJalPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAdresseFacturationJal) { // it's a model object
            // invalidate the cache for this single object
            CommonAdresseFacturationJalPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAdresseFacturationJalPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAdresseFacturationJalPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAdresseFacturationJalPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAdresseFacturationJalPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdresseFacturationJalPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAdresseFacturationJalPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAdresseFacturationJal object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAdresseFacturationJal $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAdresseFacturationJalPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAdresseFacturationJalPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAdresseFacturationJalPeer::DATABASE_NAME, CommonAdresseFacturationJalPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAdresseFacturationJal
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAdresseFacturationJalPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAdresseFacturationJalPeer::DATABASE_NAME);
        $criteria->add(CommonAdresseFacturationJalPeer::ID, $id);
        $criteria->add(CommonAdresseFacturationJalPeer::ORGANISME, $organisme);
        $v = CommonAdresseFacturationJalPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAdresseFacturationJalPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAdresseFacturationJalPeer::buildTableMap();

