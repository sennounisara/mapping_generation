<?php


/**
 * Base static class for performing query and update operations on the 'caution_provisoire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionProvisoirePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'caution_provisoire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCautionProvisoire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCautionProvisoireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'caution_provisoire.id';

    /** the column name for the organisme field */
    const ORGANISME = 'caution_provisoire.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'caution_provisoire.consultation_ref';

    /** the column name for the caution_ref field */
    const CAUTION_REF = 'caution_provisoire.caution_ref';

    /** the column name for the lot field */
    const LOT = 'caution_provisoire.lot';

    /** the column name for the montant field */
    const MONTANT = 'caution_provisoire.montant';

    /** the column name for the montant_devise field */
    const MONTANT_DEVISE = 'caution_provisoire.montant_devise';

    /** the column name for the devise field */
    const DEVISE = 'caution_provisoire.devise';

    /** the column name for the entreprise field */
    const ENTREPRISE = 'caution_provisoire.entreprise';

    /** the column name for the id_banque field */
    const ID_BANQUE = 'caution_provisoire.id_banque';

    /** the column name for the id_blob_pj field */
    const ID_BLOB_PJ = 'caution_provisoire.id_blob_pj';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCautionProvisoire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCautionProvisoire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionProvisoirePeer::$fieldNames[CommonCautionProvisoirePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'CautionRef', 'Lot', 'Montant', 'MontantDevise', 'Devise', 'Entreprise', 'IdBanque', 'IdBlobPj', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'cautionRef', 'lot', 'montant', 'montantDevise', 'devise', 'entreprise', 'idBanque', 'idBlobPj', ),
        BasePeer::TYPE_COLNAME => array (CommonCautionProvisoirePeer::ID, CommonCautionProvisoirePeer::ORGANISME, CommonCautionProvisoirePeer::CONSULTATION_REF, CommonCautionProvisoirePeer::CAUTION_REF, CommonCautionProvisoirePeer::LOT, CommonCautionProvisoirePeer::MONTANT, CommonCautionProvisoirePeer::MONTANT_DEVISE, CommonCautionProvisoirePeer::DEVISE, CommonCautionProvisoirePeer::ENTREPRISE, CommonCautionProvisoirePeer::ID_BANQUE, CommonCautionProvisoirePeer::ID_BLOB_PJ, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'CAUTION_REF', 'LOT', 'MONTANT', 'MONTANT_DEVISE', 'DEVISE', 'ENTREPRISE', 'ID_BANQUE', 'ID_BLOB_PJ', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'caution_ref', 'lot', 'montant', 'montant_devise', 'devise', 'entreprise', 'id_banque', 'id_blob_pj', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionProvisoirePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'CautionRef' => 3, 'Lot' => 4, 'Montant' => 5, 'MontantDevise' => 6, 'Devise' => 7, 'Entreprise' => 8, 'IdBanque' => 9, 'IdBlobPj' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'cautionRef' => 3, 'lot' => 4, 'montant' => 5, 'montantDevise' => 6, 'devise' => 7, 'entreprise' => 8, 'idBanque' => 9, 'idBlobPj' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonCautionProvisoirePeer::ID => 0, CommonCautionProvisoirePeer::ORGANISME => 1, CommonCautionProvisoirePeer::CONSULTATION_REF => 2, CommonCautionProvisoirePeer::CAUTION_REF => 3, CommonCautionProvisoirePeer::LOT => 4, CommonCautionProvisoirePeer::MONTANT => 5, CommonCautionProvisoirePeer::MONTANT_DEVISE => 6, CommonCautionProvisoirePeer::DEVISE => 7, CommonCautionProvisoirePeer::ENTREPRISE => 8, CommonCautionProvisoirePeer::ID_BANQUE => 9, CommonCautionProvisoirePeer::ID_BLOB_PJ => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'CAUTION_REF' => 3, 'LOT' => 4, 'MONTANT' => 5, 'MONTANT_DEVISE' => 6, 'DEVISE' => 7, 'ENTREPRISE' => 8, 'ID_BANQUE' => 9, 'ID_BLOB_PJ' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'caution_ref' => 3, 'lot' => 4, 'montant' => 5, 'montant_devise' => 6, 'devise' => 7, 'entreprise' => 8, 'id_banque' => 9, 'id_blob_pj' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = CommonCautionProvisoirePeer::getFieldNames($toType);
        $key = isset(CommonCautionProvisoirePeer::$fieldKeys[$fromType][$name]) ? CommonCautionProvisoirePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCautionProvisoirePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCautionProvisoirePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCautionProvisoirePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonCautionProvisoirePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCautionProvisoirePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::ID);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::ORGANISME);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::CAUTION_REF);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::LOT);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::MONTANT);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::MONTANT_DEVISE);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::DEVISE);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::ENTREPRISE);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::ID_BANQUE);
            $criteria->addSelectColumn(CommonCautionProvisoirePeer::ID_BLOB_PJ);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.caution_ref');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.montant');
            $criteria->addSelectColumn($alias . '.montant_devise');
            $criteria->addSelectColumn($alias . '.devise');
            $criteria->addSelectColumn($alias . '.entreprise');
            $criteria->addSelectColumn($alias . '.id_banque');
            $criteria->addSelectColumn($alias . '.id_blob_pj');
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
        $criteria->setPrimaryTableName(CommonCautionProvisoirePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionProvisoirePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCautionProvisoirePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionProvisoire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCautionProvisoirePeer::doSelect($critcopy, $con);
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
        return CommonCautionProvisoirePeer::populateObjects(CommonCautionProvisoirePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCautionProvisoirePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionProvisoirePeer::DATABASE_NAME);

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
     * @param      CommonCautionProvisoire $obj A CommonCautionProvisoire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCautionProvisoirePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCautionProvisoire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCautionProvisoire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCautionProvisoire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCautionProvisoirePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCautionProvisoire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCautionProvisoirePeer::$instances[$key])) {
                return CommonCautionProvisoirePeer::$instances[$key];
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
        foreach (CommonCautionProvisoirePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCautionProvisoirePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to caution_provisoire
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
        $cls = CommonCautionProvisoirePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCautionProvisoirePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCautionProvisoirePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCautionProvisoirePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCautionProvisoire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCautionProvisoirePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCautionProvisoirePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCautionProvisoirePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCautionProvisoirePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCautionProvisoirePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCautionProvisoirePeer::DATABASE_NAME)->getTable(CommonCautionProvisoirePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCautionProvisoirePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCautionProvisoirePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCautionProvisoireTableMap());
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
        return CommonCautionProvisoirePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCautionProvisoire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionProvisoire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCautionProvisoire object
        }

        if ($criteria->containsKey(CommonCautionProvisoirePeer::ID) && $criteria->keyContainsValue(CommonCautionProvisoirePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCautionProvisoirePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCautionProvisoirePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCautionProvisoire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionProvisoire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCautionProvisoirePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCautionProvisoirePeer::ID);
            $value = $criteria->remove(CommonCautionProvisoirePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCautionProvisoirePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCautionProvisoirePeer::TABLE_NAME);
            }

        } else { // $values is CommonCautionProvisoire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCautionProvisoirePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the caution_provisoire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCautionProvisoirePeer::TABLE_NAME, $con, CommonCautionProvisoirePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCautionProvisoirePeer::clearInstancePool();
            CommonCautionProvisoirePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCautionProvisoire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCautionProvisoire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCautionProvisoirePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCautionProvisoire) { // it's a model object
            // invalidate the cache for this single object
            CommonCautionProvisoirePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCautionProvisoirePeer::DATABASE_NAME);
            $criteria->add(CommonCautionProvisoirePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCautionProvisoirePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionProvisoirePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCautionProvisoirePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCautionProvisoire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCautionProvisoire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCautionProvisoirePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCautionProvisoirePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCautionProvisoirePeer::DATABASE_NAME, CommonCautionProvisoirePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionProvisoire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCautionProvisoirePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCautionProvisoirePeer::DATABASE_NAME);
        $criteria->add(CommonCautionProvisoirePeer::ID, $pk);

        $v = CommonCautionProvisoirePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionProvisoire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCautionProvisoirePeer::DATABASE_NAME);
            $criteria->add(CommonCautionProvisoirePeer::ID, $pks, Criteria::IN);
            $objs = CommonCautionProvisoirePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCautionProvisoirePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCautionProvisoirePeer::buildTableMap();

