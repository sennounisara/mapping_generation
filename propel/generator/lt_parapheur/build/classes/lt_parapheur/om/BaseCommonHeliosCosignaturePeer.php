<?php


/**
 * Base static class for performing query and update operations on the 'Helios_cosignature' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHeliosCosignaturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Helios_cosignature';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonHeliosCosignature';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonHeliosCosignatureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the id_fichier field */
    const ID_FICHIER = 'Helios_cosignature.id_fichier';

    /** the column name for the organisme field */
    const ORGANISME = 'Helios_cosignature.organisme';

    /** the column name for the signature_acte field */
    const SIGNATURE_ACTE = 'Helios_cosignature.signature_acte';

    /** the column name for the horodatage_acte field */
    const HORODATAGE_ACTE = 'Helios_cosignature.horodatage_acte';

    /** the column name for the untrusteddate_acte field */
    const UNTRUSTEDDATE_ACTE = 'Helios_cosignature.untrusteddate_acte';

    /** the column name for the taille_acte field */
    const TAILLE_ACTE = 'Helios_cosignature.taille_acte';

    /** the column name for the id_Blob field */
    const ID_BLOB = 'Helios_cosignature.id_Blob';

    /** the column name for the idEnveloppe field */
    const IDENVELOPPE = 'Helios_cosignature.idEnveloppe';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonHeliosCosignature objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonHeliosCosignature[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosCosignaturePeer::$fieldNames[CommonHeliosCosignaturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdFichier', 'Organisme', 'SignatureActe', 'HorodatageActe', 'UntrusteddateActe', 'TailleActe', 'IdBlob', 'Idenveloppe', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idFichier', 'organisme', 'signatureActe', 'horodatageActe', 'untrusteddateActe', 'tailleActe', 'idBlob', 'idenveloppe', ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosCosignaturePeer::ID_FICHIER, CommonHeliosCosignaturePeer::ORGANISME, CommonHeliosCosignaturePeer::SIGNATURE_ACTE, CommonHeliosCosignaturePeer::HORODATAGE_ACTE, CommonHeliosCosignaturePeer::UNTRUSTEDDATE_ACTE, CommonHeliosCosignaturePeer::TAILLE_ACTE, CommonHeliosCosignaturePeer::ID_BLOB, CommonHeliosCosignaturePeer::IDENVELOPPE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_FICHIER', 'ORGANISME', 'SIGNATURE_ACTE', 'HORODATAGE_ACTE', 'UNTRUSTEDDATE_ACTE', 'TAILLE_ACTE', 'ID_BLOB', 'IDENVELOPPE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_fichier', 'organisme', 'signature_acte', 'horodatage_acte', 'untrusteddate_acte', 'taille_acte', 'id_Blob', 'idEnveloppe', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosCosignaturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdFichier' => 0, 'Organisme' => 1, 'SignatureActe' => 2, 'HorodatageActe' => 3, 'UntrusteddateActe' => 4, 'TailleActe' => 5, 'IdBlob' => 6, 'Idenveloppe' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idFichier' => 0, 'organisme' => 1, 'signatureActe' => 2, 'horodatageActe' => 3, 'untrusteddateActe' => 4, 'tailleActe' => 5, 'idBlob' => 6, 'idenveloppe' => 7, ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosCosignaturePeer::ID_FICHIER => 0, CommonHeliosCosignaturePeer::ORGANISME => 1, CommonHeliosCosignaturePeer::SIGNATURE_ACTE => 2, CommonHeliosCosignaturePeer::HORODATAGE_ACTE => 3, CommonHeliosCosignaturePeer::UNTRUSTEDDATE_ACTE => 4, CommonHeliosCosignaturePeer::TAILLE_ACTE => 5, CommonHeliosCosignaturePeer::ID_BLOB => 6, CommonHeliosCosignaturePeer::IDENVELOPPE => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_FICHIER' => 0, 'ORGANISME' => 1, 'SIGNATURE_ACTE' => 2, 'HORODATAGE_ACTE' => 3, 'UNTRUSTEDDATE_ACTE' => 4, 'TAILLE_ACTE' => 5, 'ID_BLOB' => 6, 'IDENVELOPPE' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('id_fichier' => 0, 'organisme' => 1, 'signature_acte' => 2, 'horodatage_acte' => 3, 'untrusteddate_acte' => 4, 'taille_acte' => 5, 'id_Blob' => 6, 'idEnveloppe' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = CommonHeliosCosignaturePeer::getFieldNames($toType);
        $key = isset(CommonHeliosCosignaturePeer::$fieldKeys[$fromType][$name]) ? CommonHeliosCosignaturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonHeliosCosignaturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonHeliosCosignaturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonHeliosCosignaturePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonHeliosCosignaturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonHeliosCosignaturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::ID_FICHIER);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::ORGANISME);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::SIGNATURE_ACTE);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::HORODATAGE_ACTE);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::UNTRUSTEDDATE_ACTE);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::TAILLE_ACTE);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonHeliosCosignaturePeer::IDENVELOPPE);
        } else {
            $criteria->addSelectColumn($alias . '.id_fichier');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.signature_acte');
            $criteria->addSelectColumn($alias . '.horodatage_acte');
            $criteria->addSelectColumn($alias . '.untrusteddate_acte');
            $criteria->addSelectColumn($alias . '.taille_acte');
            $criteria->addSelectColumn($alias . '.id_Blob');
            $criteria->addSelectColumn($alias . '.idEnveloppe');
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
        $criteria->setPrimaryTableName(CommonHeliosCosignaturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHeliosCosignaturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonHeliosCosignaturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosCosignature
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonHeliosCosignaturePeer::doSelect($critcopy, $con);
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
        return CommonHeliosCosignaturePeer::populateObjects(CommonHeliosCosignaturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonHeliosCosignaturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosCosignaturePeer::DATABASE_NAME);

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
     * @param      CommonHeliosCosignature $obj A CommonHeliosCosignature object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdFichier(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonHeliosCosignaturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonHeliosCosignature object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonHeliosCosignature) {
                $key = serialize(array((string) $value->getIdFichier(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonHeliosCosignature object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonHeliosCosignaturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonHeliosCosignature Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonHeliosCosignaturePeer::$instances[$key])) {
                return CommonHeliosCosignaturePeer::$instances[$key];
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
        foreach (CommonHeliosCosignaturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonHeliosCosignaturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Helios_cosignature
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
        $cls = CommonHeliosCosignaturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonHeliosCosignaturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonHeliosCosignaturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonHeliosCosignaturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonHeliosCosignature object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonHeliosCosignaturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonHeliosCosignaturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonHeliosCosignaturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonHeliosCosignaturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonHeliosCosignaturePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonHeliosCosignaturePeer::DATABASE_NAME)->getTable(CommonHeliosCosignaturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonHeliosCosignaturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonHeliosCosignaturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonHeliosCosignatureTableMap());
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
        return CommonHeliosCosignaturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonHeliosCosignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosCosignature object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonHeliosCosignature object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonHeliosCosignaturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonHeliosCosignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosCosignature object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonHeliosCosignaturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonHeliosCosignaturePeer::ID_FICHIER);
            $value = $criteria->remove(CommonHeliosCosignaturePeer::ID_FICHIER);
            if ($value) {
                $selectCriteria->add(CommonHeliosCosignaturePeer::ID_FICHIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosCosignaturePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonHeliosCosignaturePeer::ORGANISME);
            $value = $criteria->remove(CommonHeliosCosignaturePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonHeliosCosignaturePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosCosignaturePeer::TABLE_NAME);
            }

        } else { // $values is CommonHeliosCosignature object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonHeliosCosignaturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Helios_cosignature table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonHeliosCosignaturePeer::TABLE_NAME, $con, CommonHeliosCosignaturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonHeliosCosignaturePeer::clearInstancePool();
            CommonHeliosCosignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonHeliosCosignature or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonHeliosCosignature object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonHeliosCosignaturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonHeliosCosignature) { // it's a model object
            // invalidate the cache for this single object
            CommonHeliosCosignaturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonHeliosCosignaturePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonHeliosCosignaturePeer::ID_FICHIER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonHeliosCosignaturePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonHeliosCosignaturePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosCosignaturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonHeliosCosignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonHeliosCosignature object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonHeliosCosignature $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonHeliosCosignaturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonHeliosCosignaturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonHeliosCosignaturePeer::DATABASE_NAME, CommonHeliosCosignaturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_fichier
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonHeliosCosignature
     */
    public static function retrieveByPK($id_fichier, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_fichier, (string) $organisme));
         if (null !== ($obj = CommonHeliosCosignaturePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonHeliosCosignaturePeer::DATABASE_NAME);
        $criteria->add(CommonHeliosCosignaturePeer::ID_FICHIER, $id_fichier);
        $criteria->add(CommonHeliosCosignaturePeer::ORGANISME, $organisme);
        $v = CommonHeliosCosignaturePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonHeliosCosignaturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonHeliosCosignaturePeer::buildTableMap();

