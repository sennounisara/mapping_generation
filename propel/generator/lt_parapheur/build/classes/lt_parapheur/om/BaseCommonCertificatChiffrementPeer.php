<?php


/**
 * Base static class for performing query and update operations on the 'CertificatChiffrement' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatChiffrementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'CertificatChiffrement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCertificatChiffrement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCertificatChiffrementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'CertificatChiffrement.consultation_ref';

    /** the column name for the organisme field */
    const ORGANISME = 'CertificatChiffrement.organisme';

    /** the column name for the type_env field */
    const TYPE_ENV = 'CertificatChiffrement.type_env';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'CertificatChiffrement.sous_pli';

    /** the column name for the index_certificat field */
    const INDEX_CERTIFICAT = 'CertificatChiffrement.index_certificat';

    /** the column name for the certificat field */
    const CERTIFICAT = 'CertificatChiffrement.certificat';

    /** the column name for the visible field */
    const VISIBLE = 'CertificatChiffrement.visible';

    /** The enumerated values for the visible field */
    const VISIBLE_0 = '0';
    const VISIBLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCertificatChiffrement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCertificatChiffrement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatChiffrementPeer::$fieldNames[CommonCertificatChiffrementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ConsultationRef', 'Organisme', 'TypeEnv', 'SousPli', 'IndexCertificat', 'Certificat', 'Visible', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('consultationRef', 'organisme', 'typeEnv', 'sousPli', 'indexCertificat', 'certificat', 'visible', ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatChiffrementPeer::CONSULTATION_REF, CommonCertificatChiffrementPeer::ORGANISME, CommonCertificatChiffrementPeer::TYPE_ENV, CommonCertificatChiffrementPeer::SOUS_PLI, CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, CommonCertificatChiffrementPeer::CERTIFICAT, CommonCertificatChiffrementPeer::VISIBLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CONSULTATION_REF', 'ORGANISME', 'TYPE_ENV', 'SOUS_PLI', 'INDEX_CERTIFICAT', 'CERTIFICAT', 'VISIBLE', ),
        BasePeer::TYPE_FIELDNAME => array ('consultation_ref', 'organisme', 'type_env', 'sous_pli', 'index_certificat', 'certificat', 'visible', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatChiffrementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ConsultationRef' => 0, 'Organisme' => 1, 'TypeEnv' => 2, 'SousPli' => 3, 'IndexCertificat' => 4, 'Certificat' => 5, 'Visible' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('consultationRef' => 0, 'organisme' => 1, 'typeEnv' => 2, 'sousPli' => 3, 'indexCertificat' => 4, 'certificat' => 5, 'visible' => 6, ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatChiffrementPeer::CONSULTATION_REF => 0, CommonCertificatChiffrementPeer::ORGANISME => 1, CommonCertificatChiffrementPeer::TYPE_ENV => 2, CommonCertificatChiffrementPeer::SOUS_PLI => 3, CommonCertificatChiffrementPeer::INDEX_CERTIFICAT => 4, CommonCertificatChiffrementPeer::CERTIFICAT => 5, CommonCertificatChiffrementPeer::VISIBLE => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CONSULTATION_REF' => 0, 'ORGANISME' => 1, 'TYPE_ENV' => 2, 'SOUS_PLI' => 3, 'INDEX_CERTIFICAT' => 4, 'CERTIFICAT' => 5, 'VISIBLE' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('consultation_ref' => 0, 'organisme' => 1, 'type_env' => 2, 'sous_pli' => 3, 'index_certificat' => 4, 'certificat' => 5, 'visible' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCertificatChiffrementPeer::VISIBLE => array(
            CommonCertificatChiffrementPeer::VISIBLE_0,
            CommonCertificatChiffrementPeer::VISIBLE_1,
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
        $toNames = CommonCertificatChiffrementPeer::getFieldNames($toType);
        $key = isset(CommonCertificatChiffrementPeer::$fieldKeys[$fromType][$name]) ? CommonCertificatChiffrementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCertificatChiffrementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCertificatChiffrementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCertificatChiffrementPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCertificatChiffrementPeer::$enumValueSets;
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
        $valueSets = CommonCertificatChiffrementPeer::getValueSets();

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
        $values = CommonCertificatChiffrementPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCertificatChiffrementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCertificatChiffrementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::ORGANISME);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::TYPE_ENV);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonCertificatChiffrementPeer::VISIBLE);
        } else {
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.type_env');
            $criteria->addSelectColumn($alias . '.sous_pli');
            $criteria->addSelectColumn($alias . '.index_certificat');
            $criteria->addSelectColumn($alias . '.certificat');
            $criteria->addSelectColumn($alias . '.visible');
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
        $criteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatChiffrementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCertificatChiffrementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatChiffrement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCertificatChiffrementPeer::doSelect($critcopy, $con);
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
        return CommonCertificatChiffrementPeer::populateObjects(CommonCertificatChiffrementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCertificatChiffrementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatChiffrementPeer::DATABASE_NAME);

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
     * @param      CommonCertificatChiffrement $obj A CommonCertificatChiffrement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getConsultationRef(), (string) $obj->getOrganisme(), (string) $obj->getTypeEnv(), (string) $obj->getSousPli(), (string) $obj->getIndexCertificat()));
            } // if key === null
            CommonCertificatChiffrementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCertificatChiffrement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCertificatChiffrement) {
                $key = serialize(array((string) $value->getConsultationRef(), (string) $value->getOrganisme(), (string) $value->getTypeEnv(), (string) $value->getSousPli(), (string) $value->getIndexCertificat()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCertificatChiffrement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCertificatChiffrementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCertificatChiffrement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCertificatChiffrementPeer::$instances[$key])) {
                return CommonCertificatChiffrementPeer::$instances[$key];
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
        foreach (CommonCertificatChiffrementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCertificatChiffrementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to CertificatChiffrement
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (int) $row[$startcol + 2], (int) $row[$startcol + 3], (int) $row[$startcol + 4]);
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
        $cls = CommonCertificatChiffrementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCertificatChiffrementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCertificatChiffrementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCertificatChiffrementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCertificatChiffrement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCertificatChiffrementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCertificatChiffrementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCertificatChiffrementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCertificatChiffrementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCertificatChiffrementPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCertificatChiffrementPeer::DATABASE_NAME)->getTable(CommonCertificatChiffrementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCertificatChiffrementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCertificatChiffrementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCertificatChiffrementTableMap());
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
        return CommonCertificatChiffrementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCertificatChiffrement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatChiffrement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCertificatChiffrement object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCertificatChiffrementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCertificatChiffrement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatChiffrement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCertificatChiffrementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCertificatChiffrementPeer::CONSULTATION_REF);
            $value = $criteria->remove(CommonCertificatChiffrementPeer::CONSULTATION_REF);
            if ($value) {
                $selectCriteria->add(CommonCertificatChiffrementPeer::CONSULTATION_REF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCertificatChiffrementPeer::ORGANISME);
            $value = $criteria->remove(CommonCertificatChiffrementPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonCertificatChiffrementPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCertificatChiffrementPeer::TYPE_ENV);
            $value = $criteria->remove(CommonCertificatChiffrementPeer::TYPE_ENV);
            if ($value) {
                $selectCriteria->add(CommonCertificatChiffrementPeer::TYPE_ENV, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCertificatChiffrementPeer::SOUS_PLI);
            $value = $criteria->remove(CommonCertificatChiffrementPeer::SOUS_PLI);
            if ($value) {
                $selectCriteria->add(CommonCertificatChiffrementPeer::SOUS_PLI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT);
            $value = $criteria->remove(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT);
            if ($value) {
                $selectCriteria->add(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatChiffrementPeer::TABLE_NAME);
            }

        } else { // $values is CommonCertificatChiffrement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCertificatChiffrementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CertificatChiffrement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCertificatChiffrementPeer::TABLE_NAME, $con, CommonCertificatChiffrementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCertificatChiffrementPeer::clearInstancePool();
            CommonCertificatChiffrementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCertificatChiffrement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCertificatChiffrement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCertificatChiffrementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCertificatChiffrement) { // it's a model object
            // invalidate the cache for this single object
            CommonCertificatChiffrementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCertificatChiffrementPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonCertificatChiffrementPeer::CONSULTATION_REF, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonCertificatChiffrementPeer::ORGANISME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonCertificatChiffrementPeer::TYPE_ENV, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CommonCertificatChiffrementPeer::SOUS_PLI, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonCertificatChiffrementPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatChiffrementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCertificatChiffrementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCertificatChiffrement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCertificatChiffrement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCertificatChiffrementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCertificatChiffrementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCertificatChiffrementPeer::DATABASE_NAME, CommonCertificatChiffrementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $consultation_ref
     * @param   string $organisme
     * @param   int $type_env
     * @param   int $sous_pli
     * @param   int $index_certificat
     * @param      PropelPDO $con
     * @return   CommonCertificatChiffrement
     */
    public static function retrieveByPK($consultation_ref, $organisme, $type_env, $sous_pli, $index_certificat, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $consultation_ref, (string) $organisme, (string) $type_env, (string) $sous_pli, (string) $index_certificat));
         if (null !== ($obj = CommonCertificatChiffrementPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonCertificatChiffrementPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatChiffrementPeer::CONSULTATION_REF, $consultation_ref);
        $criteria->add(CommonCertificatChiffrementPeer::ORGANISME, $organisme);
        $criteria->add(CommonCertificatChiffrementPeer::TYPE_ENV, $type_env);
        $criteria->add(CommonCertificatChiffrementPeer::SOUS_PLI, $sous_pli);
        $criteria->add(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $index_certificat);
        $v = CommonCertificatChiffrementPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonCertificatChiffrementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCertificatChiffrementPeer::buildTableMap();

