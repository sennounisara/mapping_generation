<?php


/**
 * Base static class for performing query and update operations on the 'ModeleFormulaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonModeleFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ModeleFormulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonModeleFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonModeleFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'ModeleFormulaire.id';

    /** the column name for the reference field */
    const REFERENCE = 'ModeleFormulaire.reference';

    /** the column name for the nom field */
    const NOM = 'ModeleFormulaire.nom';

    /** the column name for the type_formulaire field */
    const TYPE_FORMULAIRE = 'ModeleFormulaire.type_formulaire';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'ModeleFormulaire.id_type_procedure';

    /** the column name for the id_categorie field */
    const ID_CATEGORIE = 'ModeleFormulaire.id_categorie';

    /** the column name for the code_cpv_1 field */
    const CODE_CPV_1 = 'ModeleFormulaire.code_cpv_1';

    /** the column name for the code_cpv_2 field */
    const CODE_CPV_2 = 'ModeleFormulaire.code_cpv_2';

    /** the column name for the organisme field */
    const ORGANISME = 'ModeleFormulaire.organisme';

    /** the column name for the service_id field */
    const SERVICE_ID = 'ModeleFormulaire.service_id';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'ModeleFormulaire.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'ModeleFormulaire.date_modification';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonModeleFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonModeleFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonModeleFormulairePeer::$fieldNames[CommonModeleFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Reference', 'Nom', 'TypeFormulaire', 'IdTypeProcedure', 'IdCategorie', 'CodeCpv1', 'CodeCpv2', 'Organisme', 'ServiceId', 'DateCreation', 'DateModification', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'reference', 'nom', 'typeFormulaire', 'idTypeProcedure', 'idCategorie', 'codeCpv1', 'codeCpv2', 'organisme', 'serviceId', 'dateCreation', 'dateModification', ),
        BasePeer::TYPE_COLNAME => array (CommonModeleFormulairePeer::ID, CommonModeleFormulairePeer::REFERENCE, CommonModeleFormulairePeer::NOM, CommonModeleFormulairePeer::TYPE_FORMULAIRE, CommonModeleFormulairePeer::ID_TYPE_PROCEDURE, CommonModeleFormulairePeer::ID_CATEGORIE, CommonModeleFormulairePeer::CODE_CPV_1, CommonModeleFormulairePeer::CODE_CPV_2, CommonModeleFormulairePeer::ORGANISME, CommonModeleFormulairePeer::SERVICE_ID, CommonModeleFormulairePeer::DATE_CREATION, CommonModeleFormulairePeer::DATE_MODIFICATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REFERENCE', 'NOM', 'TYPE_FORMULAIRE', 'ID_TYPE_PROCEDURE', 'ID_CATEGORIE', 'CODE_CPV_1', 'CODE_CPV_2', 'ORGANISME', 'SERVICE_ID', 'DATE_CREATION', 'DATE_MODIFICATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'reference', 'nom', 'type_formulaire', 'id_type_procedure', 'id_categorie', 'code_cpv_1', 'code_cpv_2', 'organisme', 'service_id', 'date_creation', 'date_modification', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonModeleFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Reference' => 1, 'Nom' => 2, 'TypeFormulaire' => 3, 'IdTypeProcedure' => 4, 'IdCategorie' => 5, 'CodeCpv1' => 6, 'CodeCpv2' => 7, 'Organisme' => 8, 'ServiceId' => 9, 'DateCreation' => 10, 'DateModification' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'reference' => 1, 'nom' => 2, 'typeFormulaire' => 3, 'idTypeProcedure' => 4, 'idCategorie' => 5, 'codeCpv1' => 6, 'codeCpv2' => 7, 'organisme' => 8, 'serviceId' => 9, 'dateCreation' => 10, 'dateModification' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonModeleFormulairePeer::ID => 0, CommonModeleFormulairePeer::REFERENCE => 1, CommonModeleFormulairePeer::NOM => 2, CommonModeleFormulairePeer::TYPE_FORMULAIRE => 3, CommonModeleFormulairePeer::ID_TYPE_PROCEDURE => 4, CommonModeleFormulairePeer::ID_CATEGORIE => 5, CommonModeleFormulairePeer::CODE_CPV_1 => 6, CommonModeleFormulairePeer::CODE_CPV_2 => 7, CommonModeleFormulairePeer::ORGANISME => 8, CommonModeleFormulairePeer::SERVICE_ID => 9, CommonModeleFormulairePeer::DATE_CREATION => 10, CommonModeleFormulairePeer::DATE_MODIFICATION => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REFERENCE' => 1, 'NOM' => 2, 'TYPE_FORMULAIRE' => 3, 'ID_TYPE_PROCEDURE' => 4, 'ID_CATEGORIE' => 5, 'CODE_CPV_1' => 6, 'CODE_CPV_2' => 7, 'ORGANISME' => 8, 'SERVICE_ID' => 9, 'DATE_CREATION' => 10, 'DATE_MODIFICATION' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'reference' => 1, 'nom' => 2, 'type_formulaire' => 3, 'id_type_procedure' => 4, 'id_categorie' => 5, 'code_cpv_1' => 6, 'code_cpv_2' => 7, 'organisme' => 8, 'service_id' => 9, 'date_creation' => 10, 'date_modification' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = CommonModeleFormulairePeer::getFieldNames($toType);
        $key = isset(CommonModeleFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonModeleFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonModeleFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonModeleFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonModeleFormulairePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonModeleFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonModeleFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonModeleFormulairePeer::ID);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::REFERENCE);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::NOM);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::TYPE_FORMULAIRE);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::ID_CATEGORIE);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::CODE_CPV_1);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::CODE_CPV_2);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::ORGANISME);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonModeleFormulairePeer::DATE_MODIFICATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.type_formulaire');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.id_categorie');
            $criteria->addSelectColumn($alias . '.code_cpv_1');
            $criteria->addSelectColumn($alias . '.code_cpv_2');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
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
        $criteria->setPrimaryTableName(CommonModeleFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonModeleFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonModeleFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonModeleFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonModeleFormulairePeer::doSelect($critcopy, $con);
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
        return CommonModeleFormulairePeer::populateObjects(CommonModeleFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonModeleFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonModeleFormulairePeer::DATABASE_NAME);

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
     * @param      CommonModeleFormulaire $obj A CommonModeleFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonModeleFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonModeleFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonModeleFormulaire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonModeleFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonModeleFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonModeleFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonModeleFormulairePeer::$instances[$key])) {
                return CommonModeleFormulairePeer::$instances[$key];
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
        foreach (CommonModeleFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonModeleFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ModeleFormulaire
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
        $cls = CommonModeleFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonModeleFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonModeleFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonModeleFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonModeleFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonModeleFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonModeleFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonModeleFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonModeleFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonModeleFormulairePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonModeleFormulairePeer::DATABASE_NAME)->getTable(CommonModeleFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonModeleFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonModeleFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonModeleFormulaireTableMap());
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
        return CommonModeleFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonModeleFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonModeleFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonModeleFormulaire object
        }

        if ($criteria->containsKey(CommonModeleFormulairePeer::ID) && $criteria->keyContainsValue(CommonModeleFormulairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonModeleFormulairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonModeleFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonModeleFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonModeleFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonModeleFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonModeleFormulairePeer::ID);
            $value = $criteria->remove(CommonModeleFormulairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonModeleFormulairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonModeleFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonModeleFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonModeleFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ModeleFormulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonModeleFormulairePeer::TABLE_NAME, $con, CommonModeleFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonModeleFormulairePeer::clearInstancePool();
            CommonModeleFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonModeleFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonModeleFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonModeleFormulairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonModeleFormulaire) { // it's a model object
            // invalidate the cache for this single object
            CommonModeleFormulairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonModeleFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonModeleFormulairePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonModeleFormulairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonModeleFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonModeleFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonModeleFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonModeleFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonModeleFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonModeleFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonModeleFormulairePeer::DATABASE_NAME, CommonModeleFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonModeleFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonModeleFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonModeleFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonModeleFormulairePeer::ID, $pk);

        $v = CommonModeleFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonModeleFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonModeleFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonModeleFormulairePeer::ID, $pks, Criteria::IN);
            $objs = CommonModeleFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonModeleFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonModeleFormulairePeer::buildTableMap();

