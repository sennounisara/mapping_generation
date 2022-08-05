<?php


/**
 * Base static class for performing query and update operations on the 'AnnonceJAL' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceJALPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AnnonceJAL';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnonceJAL';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnonceJALTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the id field */
    const ID = 'AnnonceJAL.id';

    /** the column name for the organisme field */
    const ORGANISME = 'AnnonceJAL.organisme';

    /** the column name for the libelle_type field */
    const LIBELLE_TYPE = 'AnnonceJAL.libelle_type';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'AnnonceJAL.date_creation';

    /** the column name for the objet field */
    const OBJET = 'AnnonceJAL.objet';

    /** the column name for the texte field */
    const TEXTE = 'AnnonceJAL.texte';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'AnnonceJAL.consultation_ref';

    /** the column name for the option_envoi field */
    const OPTION_ENVOI = 'AnnonceJAL.option_envoi';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnonceJAL objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnonceJAL[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceJALPeer::$fieldNames[CommonAnnonceJALPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'LibelleType', 'DateCreation', 'Objet', 'Texte', 'ConsultationRef', 'OptionEnvoi', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'libelleType', 'dateCreation', 'objet', 'texte', 'consultationRef', 'optionEnvoi', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceJALPeer::ID, CommonAnnonceJALPeer::ORGANISME, CommonAnnonceJALPeer::LIBELLE_TYPE, CommonAnnonceJALPeer::DATE_CREATION, CommonAnnonceJALPeer::OBJET, CommonAnnonceJALPeer::TEXTE, CommonAnnonceJALPeer::CONSULTATION_REF, CommonAnnonceJALPeer::OPTION_ENVOI, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'LIBELLE_TYPE', 'DATE_CREATION', 'OBJET', 'TEXTE', 'CONSULTATION_REF', 'OPTION_ENVOI', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'libelle_type', 'date_creation', 'objet', 'texte', 'consultation_ref', 'option_envoi', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceJALPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'LibelleType' => 2, 'DateCreation' => 3, 'Objet' => 4, 'Texte' => 5, 'ConsultationRef' => 6, 'OptionEnvoi' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'libelleType' => 2, 'dateCreation' => 3, 'objet' => 4, 'texte' => 5, 'consultationRef' => 6, 'optionEnvoi' => 7, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceJALPeer::ID => 0, CommonAnnonceJALPeer::ORGANISME => 1, CommonAnnonceJALPeer::LIBELLE_TYPE => 2, CommonAnnonceJALPeer::DATE_CREATION => 3, CommonAnnonceJALPeer::OBJET => 4, CommonAnnonceJALPeer::TEXTE => 5, CommonAnnonceJALPeer::CONSULTATION_REF => 6, CommonAnnonceJALPeer::OPTION_ENVOI => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'LIBELLE_TYPE' => 2, 'DATE_CREATION' => 3, 'OBJET' => 4, 'TEXTE' => 5, 'CONSULTATION_REF' => 6, 'OPTION_ENVOI' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'libelle_type' => 2, 'date_creation' => 3, 'objet' => 4, 'texte' => 5, 'consultation_ref' => 6, 'option_envoi' => 7, ),
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
        $toNames = CommonAnnonceJALPeer::getFieldNames($toType);
        $key = isset(CommonAnnonceJALPeer::$fieldKeys[$fromType][$name]) ? CommonAnnonceJALPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnonceJALPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnonceJALPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnonceJALPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAnnonceJALPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnonceJALPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnonceJALPeer::ID);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::LIBELLE_TYPE);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::OBJET);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::TEXTE);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAnnonceJALPeer::OPTION_ENVOI);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.libelle_type');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.texte');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.option_envoi');
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
        $criteria->setPrimaryTableName(CommonAnnonceJALPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceJALPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnonceJALPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonceJAL
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnonceJALPeer::doSelect($critcopy, $con);
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
        return CommonAnnonceJALPeer::populateObjects(CommonAnnonceJALPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnonceJALPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceJALPeer::DATABASE_NAME);

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
     * @param      CommonAnnonceJAL $obj A CommonAnnonceJAL object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnonceJALPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnonceJAL object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnonceJAL) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnonceJAL object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnonceJALPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnonceJAL Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnonceJALPeer::$instances[$key])) {
                return CommonAnnonceJALPeer::$instances[$key];
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
        foreach (CommonAnnonceJALPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnonceJALPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AnnonceJAL
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonAnnonceJALPieceJointePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonAnnonceJALPieceJointePeer::clearInstancePool();
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
        $cls = CommonAnnonceJALPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnonceJALPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnonceJALPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnonceJALPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnonceJAL object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnonceJALPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnonceJALPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnonceJALPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnonceJALPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnonceJALPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAnnonceJALPeer::DATABASE_NAME)->getTable(CommonAnnonceJALPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnonceJALPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnonceJALPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnonceJALTableMap());
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
        return CommonAnnonceJALPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnonceJAL or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceJAL object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnonceJAL object
        }

        if ($criteria->containsKey(CommonAnnonceJALPeer::ID) && $criteria->keyContainsValue(CommonAnnonceJALPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAnnonceJALPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceJALPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnonceJAL or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceJAL object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnonceJALPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnonceJALPeer::ID);
            $value = $criteria->remove(CommonAnnonceJALPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAnnonceJALPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceJALPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnonceJALPeer::ORGANISME);
            $value = $criteria->remove(CommonAnnonceJALPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnonceJALPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceJALPeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnonceJAL object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnonceJALPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AnnonceJAL table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonAnnonceJALPeer::doOnDeleteCascade(new Criteria(CommonAnnonceJALPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonAnnonceJALPeer::TABLE_NAME, $con, CommonAnnonceJALPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnonceJALPeer::clearInstancePool();
            CommonAnnonceJALPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnonceJAL or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnonceJAL object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnonceJAL) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnonceJALPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnonceJALPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnonceJALPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceJALPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonAnnonceJALPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonAnnonceJALPeer::clearInstancePool();
            } elseif ($values instanceof CommonAnnonceJAL) { // it's a model object
                CommonAnnonceJALPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonAnnonceJALPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnonceJALPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonAnnonceJALPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonAnnonceJALPieceJointe objects
            $criteria = new Criteria(CommonAnnonceJALPieceJointePeer::DATABASE_NAME);
            
            $criteria->add(CommonAnnonceJALPieceJointePeer::ID_ANNONCE_JAL, $obj->getId());
            $affectedRows += CommonAnnonceJALPieceJointePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonAnnonceJAL object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnonceJAL $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnonceJALPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnonceJALPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnonceJALPeer::DATABASE_NAME, CommonAnnonceJALPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnonceJAL
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAnnonceJALPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnonceJALPeer::DATABASE_NAME);
        $criteria->add(CommonAnnonceJALPeer::ID, $id);
        $criteria->add(CommonAnnonceJALPeer::ORGANISME, $organisme);
        $v = CommonAnnonceJALPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnonceJALPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnonceJALPeer::buildTableMap();

