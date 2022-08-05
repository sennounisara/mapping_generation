<?php


/**
 * Base static class for performing query and update operations on the 'chorus_noms_fichiers' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonChorusNomsFichiersPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'chorus_noms_fichiers';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonChorusNomsFichiers';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonChorusNomsFichiersTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the id_echange field */
    const ID_ECHANGE = 'chorus_noms_fichiers.id_echange';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'chorus_noms_fichiers.nom_fichier';

    /** the column name for the acronyme_organisme field */
    const ACRONYME_ORGANISME = 'chorus_noms_fichiers.acronyme_organisme';

    /** the column name for the type_fichier field */
    const TYPE_FICHIER = 'chorus_noms_fichiers.type_fichier';

    /** the column name for the date_ajout field */
    const DATE_AJOUT = 'chorus_noms_fichiers.date_ajout';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonChorusNomsFichiers objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonChorusNomsFichiers[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusNomsFichiersPeer::$fieldNames[CommonChorusNomsFichiersPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEchange', 'NomFichier', 'AcronymeOrganisme', 'TypeFichier', 'DateAjout', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEchange', 'nomFichier', 'acronymeOrganisme', 'typeFichier', 'dateAjout', ),
        BasePeer::TYPE_COLNAME => array (CommonChorusNomsFichiersPeer::ID_ECHANGE, CommonChorusNomsFichiersPeer::NOM_FICHIER, CommonChorusNomsFichiersPeer::ACRONYME_ORGANISME, CommonChorusNomsFichiersPeer::TYPE_FICHIER, CommonChorusNomsFichiersPeer::DATE_AJOUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ECHANGE', 'NOM_FICHIER', 'ACRONYME_ORGANISME', 'TYPE_FICHIER', 'DATE_AJOUT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_echange', 'nom_fichier', 'acronyme_organisme', 'type_fichier', 'date_ajout', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusNomsFichiersPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEchange' => 0, 'NomFichier' => 1, 'AcronymeOrganisme' => 2, 'TypeFichier' => 3, 'DateAjout' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEchange' => 0, 'nomFichier' => 1, 'acronymeOrganisme' => 2, 'typeFichier' => 3, 'dateAjout' => 4, ),
        BasePeer::TYPE_COLNAME => array (CommonChorusNomsFichiersPeer::ID_ECHANGE => 0, CommonChorusNomsFichiersPeer::NOM_FICHIER => 1, CommonChorusNomsFichiersPeer::ACRONYME_ORGANISME => 2, CommonChorusNomsFichiersPeer::TYPE_FICHIER => 3, CommonChorusNomsFichiersPeer::DATE_AJOUT => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ECHANGE' => 0, 'NOM_FICHIER' => 1, 'ACRONYME_ORGANISME' => 2, 'TYPE_FICHIER' => 3, 'DATE_AJOUT' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('id_echange' => 0, 'nom_fichier' => 1, 'acronyme_organisme' => 2, 'type_fichier' => 3, 'date_ajout' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = CommonChorusNomsFichiersPeer::getFieldNames($toType);
        $key = isset(CommonChorusNomsFichiersPeer::$fieldKeys[$fromType][$name]) ? CommonChorusNomsFichiersPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonChorusNomsFichiersPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonChorusNomsFichiersPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonChorusNomsFichiersPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonChorusNomsFichiersPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonChorusNomsFichiersPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonChorusNomsFichiersPeer::ID_ECHANGE);
            $criteria->addSelectColumn(CommonChorusNomsFichiersPeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonChorusNomsFichiersPeer::ACRONYME_ORGANISME);
            $criteria->addSelectColumn(CommonChorusNomsFichiersPeer::TYPE_FICHIER);
            $criteria->addSelectColumn(CommonChorusNomsFichiersPeer::DATE_AJOUT);
        } else {
            $criteria->addSelectColumn($alias . '.id_echange');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.acronyme_organisme');
            $criteria->addSelectColumn($alias . '.type_fichier');
            $criteria->addSelectColumn($alias . '.date_ajout');
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
        $criteria->setPrimaryTableName(CommonChorusNomsFichiersPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonChorusNomsFichiersPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonChorusNomsFichiersPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusNomsFichiers
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonChorusNomsFichiersPeer::doSelect($critcopy, $con);
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
        return CommonChorusNomsFichiersPeer::populateObjects(CommonChorusNomsFichiersPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonChorusNomsFichiersPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusNomsFichiersPeer::DATABASE_NAME);

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
     * @param      CommonChorusNomsFichiers $obj A CommonChorusNomsFichiers object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdEchange(), (string) $obj->getNomFichier()));
            } // if key === null
            CommonChorusNomsFichiersPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonChorusNomsFichiers object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonChorusNomsFichiers) {
                $key = serialize(array((string) $value->getIdEchange(), (string) $value->getNomFichier()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonChorusNomsFichiers object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonChorusNomsFichiersPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonChorusNomsFichiers Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonChorusNomsFichiersPeer::$instances[$key])) {
                return CommonChorusNomsFichiersPeer::$instances[$key];
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
        foreach (CommonChorusNomsFichiersPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonChorusNomsFichiersPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to chorus_noms_fichiers
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
        $cls = CommonChorusNomsFichiersPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonChorusNomsFichiersPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonChorusNomsFichiersPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonChorusNomsFichiersPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonChorusNomsFichiers object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonChorusNomsFichiersPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonChorusNomsFichiersPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonChorusNomsFichiersPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonChorusNomsFichiersPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonChorusNomsFichiersPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonChorusNomsFichiersPeer::DATABASE_NAME)->getTable(CommonChorusNomsFichiersPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonChorusNomsFichiersPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonChorusNomsFichiersPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonChorusNomsFichiersTableMap());
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
        return CommonChorusNomsFichiersPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonChorusNomsFichiers or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusNomsFichiers object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonChorusNomsFichiers object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonChorusNomsFichiersPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonChorusNomsFichiers or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusNomsFichiers object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonChorusNomsFichiersPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonChorusNomsFichiersPeer::ID_ECHANGE);
            $value = $criteria->remove(CommonChorusNomsFichiersPeer::ID_ECHANGE);
            if ($value) {
                $selectCriteria->add(CommonChorusNomsFichiersPeer::ID_ECHANGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusNomsFichiersPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonChorusNomsFichiersPeer::NOM_FICHIER);
            $value = $criteria->remove(CommonChorusNomsFichiersPeer::NOM_FICHIER);
            if ($value) {
                $selectCriteria->add(CommonChorusNomsFichiersPeer::NOM_FICHIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusNomsFichiersPeer::TABLE_NAME);
            }

        } else { // $values is CommonChorusNomsFichiers object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonChorusNomsFichiersPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the chorus_noms_fichiers table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonChorusNomsFichiersPeer::TABLE_NAME, $con, CommonChorusNomsFichiersPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonChorusNomsFichiersPeer::clearInstancePool();
            CommonChorusNomsFichiersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonChorusNomsFichiers or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonChorusNomsFichiers object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonChorusNomsFichiersPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonChorusNomsFichiers) { // it's a model object
            // invalidate the cache for this single object
            CommonChorusNomsFichiersPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonChorusNomsFichiersPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonChorusNomsFichiersPeer::ID_ECHANGE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonChorusNomsFichiersPeer::NOM_FICHIER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonChorusNomsFichiersPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusNomsFichiersPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonChorusNomsFichiersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonChorusNomsFichiers object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonChorusNomsFichiers $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonChorusNomsFichiersPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonChorusNomsFichiersPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonChorusNomsFichiersPeer::DATABASE_NAME, CommonChorusNomsFichiersPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_echange
     * @param   string $nom_fichier
     * @param      PropelPDO $con
     * @return   CommonChorusNomsFichiers
     */
    public static function retrieveByPK($id_echange, $nom_fichier, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_echange, (string) $nom_fichier));
         if (null !== ($obj = CommonChorusNomsFichiersPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonChorusNomsFichiersPeer::DATABASE_NAME);
        $criteria->add(CommonChorusNomsFichiersPeer::ID_ECHANGE, $id_echange);
        $criteria->add(CommonChorusNomsFichiersPeer::NOM_FICHIER, $nom_fichier);
        $v = CommonChorusNomsFichiersPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonChorusNomsFichiersPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonChorusNomsFichiersPeer::buildTableMap();
