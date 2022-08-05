<?php


/**
 * Base static class for performing query and update operations on the 'blocFichierEnveloppe' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonBlocFichierEnveloppePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'blocFichierEnveloppe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBlocFichierEnveloppe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBlocFichierEnveloppeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the id_bloc_fichier field */
    const ID_BLOC_FICHIER = 'blocFichierEnveloppe.id_bloc_fichier';

    /** the column name for the organisme field */
    const ORGANISME = 'blocFichierEnveloppe.organisme';

    /** the column name for the id_fichier field */
    const ID_FICHIER = 'blocFichierEnveloppe.id_fichier';

    /** the column name for the numero_ordre_bloc field */
    const NUMERO_ORDRE_BLOC = 'blocFichierEnveloppe.numero_ordre_bloc';

    /** the column name for the id_blob_chiffre field */
    const ID_BLOB_CHIFFRE = 'blocFichierEnveloppe.id_blob_chiffre';

    /** the column name for the id_blob_dechiffre field */
    const ID_BLOB_DECHIFFRE = 'blocFichierEnveloppe.id_blob_dechiffre';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBlocFichierEnveloppe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBlocFichierEnveloppe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBlocFichierEnveloppePeer::$fieldNames[CommonBlocFichierEnveloppePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdBlocFichier', 'Organisme', 'IdFichier', 'NumeroOrdreBloc', 'IdBlobChiffre', 'IdBlobDechiffre', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBlocFichier', 'organisme', 'idFichier', 'numeroOrdreBloc', 'idBlobChiffre', 'idBlobDechiffre', ),
        BasePeer::TYPE_COLNAME => array (CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, CommonBlocFichierEnveloppePeer::ORGANISME, CommonBlocFichierEnveloppePeer::ID_FICHIER, CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC, CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE, CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BLOC_FICHIER', 'ORGANISME', 'ID_FICHIER', 'NUMERO_ORDRE_BLOC', 'ID_BLOB_CHIFFRE', 'ID_BLOB_DECHIFFRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_bloc_fichier', 'organisme', 'id_fichier', 'numero_ordre_bloc', 'id_blob_chiffre', 'id_blob_dechiffre', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBlocFichierEnveloppePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdBlocFichier' => 0, 'Organisme' => 1, 'IdFichier' => 2, 'NumeroOrdreBloc' => 3, 'IdBlobChiffre' => 4, 'IdBlobDechiffre' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBlocFichier' => 0, 'organisme' => 1, 'idFichier' => 2, 'numeroOrdreBloc' => 3, 'idBlobChiffre' => 4, 'idBlobDechiffre' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER => 0, CommonBlocFichierEnveloppePeer::ORGANISME => 1, CommonBlocFichierEnveloppePeer::ID_FICHIER => 2, CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC => 3, CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE => 4, CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BLOC_FICHIER' => 0, 'ORGANISME' => 1, 'ID_FICHIER' => 2, 'NUMERO_ORDRE_BLOC' => 3, 'ID_BLOB_CHIFFRE' => 4, 'ID_BLOB_DECHIFFRE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id_bloc_fichier' => 0, 'organisme' => 1, 'id_fichier' => 2, 'numero_ordre_bloc' => 3, 'id_blob_chiffre' => 4, 'id_blob_dechiffre' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = CommonBlocFichierEnveloppePeer::getFieldNames($toType);
        $key = isset(CommonBlocFichierEnveloppePeer::$fieldKeys[$fromType][$name]) ? CommonBlocFichierEnveloppePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBlocFichierEnveloppePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBlocFichierEnveloppePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBlocFichierEnveloppePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBlocFichierEnveloppePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBlocFichierEnveloppePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER);
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::ORGANISME);
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::ID_FICHIER);
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC);
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE);
            $criteria->addSelectColumn(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE);
        } else {
            $criteria->addSelectColumn($alias . '.id_bloc_fichier');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_fichier');
            $criteria->addSelectColumn($alias . '.numero_ordre_bloc');
            $criteria->addSelectColumn($alias . '.id_blob_chiffre');
            $criteria->addSelectColumn($alias . '.id_blob_dechiffre');
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
        $criteria->setPrimaryTableName(CommonBlocFichierEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBlocFichierEnveloppe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBlocFichierEnveloppePeer::doSelect($critcopy, $con);
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
        return CommonBlocFichierEnveloppePeer::populateObjects(CommonBlocFichierEnveloppePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

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
     * @param      CommonBlocFichierEnveloppe $obj A CommonBlocFichierEnveloppe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdBlocFichier(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBlocFichierEnveloppePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBlocFichierEnveloppe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBlocFichierEnveloppe) {
                $key = serialize(array((string) $value->getIdBlocFichier(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBlocFichierEnveloppe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBlocFichierEnveloppePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBlocFichierEnveloppe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBlocFichierEnveloppePeer::$instances[$key])) {
                return CommonBlocFichierEnveloppePeer::$instances[$key];
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
        foreach (CommonBlocFichierEnveloppePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBlocFichierEnveloppePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to blocFichierEnveloppe
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
        $cls = CommonBlocFichierEnveloppePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBlocFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBlocFichierEnveloppePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBlocFichierEnveloppePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBlocFichierEnveloppe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBlocFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBlocFichierEnveloppePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBlocFichierEnveloppePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBlocFichierEnveloppePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBlocFichierEnveloppePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonFichierEnveloppe table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonFichierEnveloppe(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonBlocFichierEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonBlocFichierEnveloppePeer::ID_FICHIER, CommonFichierEnveloppePeer::ID_FICHIER),
        array(CommonBlocFichierEnveloppePeer::ORGANISME, CommonFichierEnveloppePeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonBlocFichierEnveloppe objects pre-filled with their CommonFichierEnveloppe objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonBlocFichierEnveloppe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonFichierEnveloppe(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
        }

        CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        $startcol = CommonBlocFichierEnveloppePeer::NUM_HYDRATE_COLUMNS;
        CommonFichierEnveloppePeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonBlocFichierEnveloppePeer::ID_FICHIER, CommonFichierEnveloppePeer::ID_FICHIER),
        array(CommonBlocFichierEnveloppePeer::ORGANISME, CommonFichierEnveloppePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonBlocFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonBlocFichierEnveloppePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonBlocFichierEnveloppePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonBlocFichierEnveloppePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonFichierEnveloppePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonFichierEnveloppePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonFichierEnveloppePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonBlocFichierEnveloppe) to $obj2 (CommonFichierEnveloppe)
                $obj2->addCommonBlocFichierEnveloppe($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonBlocFichierEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonBlocFichierEnveloppePeer::ID_FICHIER, CommonFichierEnveloppePeer::ID_FICHIER),
        array(CommonBlocFichierEnveloppePeer::ORGANISME, CommonFichierEnveloppePeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonBlocFichierEnveloppe objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonBlocFichierEnveloppe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
        }

        CommonBlocFichierEnveloppePeer::addSelectColumns($criteria);
        $startcol2 = CommonBlocFichierEnveloppePeer::NUM_HYDRATE_COLUMNS;

        CommonFichierEnveloppePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonFichierEnveloppePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonBlocFichierEnveloppePeer::ID_FICHIER, CommonFichierEnveloppePeer::ID_FICHIER),
        array(CommonBlocFichierEnveloppePeer::ORGANISME, CommonFichierEnveloppePeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonBlocFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonBlocFichierEnveloppePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonBlocFichierEnveloppePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonBlocFichierEnveloppePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonFichierEnveloppe rows

            $key2 = CommonFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonFichierEnveloppePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonFichierEnveloppePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonFichierEnveloppePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonBlocFichierEnveloppe) to the collection in $obj2 (CommonFichierEnveloppe)
                $obj2->addCommonBlocFichierEnveloppe($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(CommonBlocFichierEnveloppePeer::DATABASE_NAME)->getTable(CommonBlocFichierEnveloppePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBlocFichierEnveloppePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBlocFichierEnveloppePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBlocFichierEnveloppeTableMap());
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
        return CommonBlocFichierEnveloppePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBlocFichierEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBlocFichierEnveloppe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBlocFichierEnveloppe object
        }

        if ($criteria->containsKey(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER) && $criteria->keyContainsValue(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBlocFichierEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBlocFichierEnveloppe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER);
            $value = $criteria->remove(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER);
            if ($value) {
                $selectCriteria->add(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBlocFichierEnveloppePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBlocFichierEnveloppePeer::ORGANISME);
            $value = $criteria->remove(CommonBlocFichierEnveloppePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBlocFichierEnveloppePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBlocFichierEnveloppePeer::TABLE_NAME);
            }

        } else { // $values is CommonBlocFichierEnveloppe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the blocFichierEnveloppe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBlocFichierEnveloppePeer::TABLE_NAME, $con, CommonBlocFichierEnveloppePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBlocFichierEnveloppePeer::clearInstancePool();
            CommonBlocFichierEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBlocFichierEnveloppe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBlocFichierEnveloppe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBlocFichierEnveloppePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBlocFichierEnveloppe) { // it's a model object
            // invalidate the cache for this single object
            CommonBlocFichierEnveloppePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBlocFichierEnveloppePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBlocFichierEnveloppePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBlocFichierEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBlocFichierEnveloppe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBlocFichierEnveloppe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBlocFichierEnveloppePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBlocFichierEnveloppePeer::DATABASE_NAME, CommonBlocFichierEnveloppePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_bloc_fichier
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBlocFichierEnveloppe
     */
    public static function retrieveByPK($id_bloc_fichier, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_bloc_fichier, (string) $organisme));
         if (null !== ($obj = CommonBlocFichierEnveloppePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $id_bloc_fichier);
        $criteria->add(CommonBlocFichierEnveloppePeer::ORGANISME, $organisme);
        $v = CommonBlocFichierEnveloppePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBlocFichierEnveloppePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBlocFichierEnveloppePeer::buildTableMap();

