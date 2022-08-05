<?php


/**
 * Base static class for performing query and update operations on the 'SousCategorie' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonSousCategoriePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'SousCategorie';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonSousCategorie';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonSousCategorieTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id field */
    const ID = 'SousCategorie.id';

    /** the column name for the id_categorie field */
    const ID_CATEGORIE = 'SousCategorie.id_categorie';

    /** the column name for the libelle field */
    const LIBELLE = 'SousCategorie.libelle';

    /** the column name for the libelle_ar field */
    const LIBELLE_AR = 'SousCategorie.libelle_ar';

    /** the column name for the libelle_fr field */
    const LIBELLE_FR = 'SousCategorie.libelle_fr';

    /** the column name for the libelle_en field */
    const LIBELLE_EN = 'SousCategorie.libelle_en';

    /** the column name for the libelle_es field */
    const LIBELLE_ES = 'SousCategorie.libelle_es';

    /** the column name for the libelle_su field */
    const LIBELLE_SU = 'SousCategorie.libelle_su';

    /** the column name for the libelle_du field */
    const LIBELLE_DU = 'SousCategorie.libelle_du';

    /** the column name for the libelle_cz field */
    const LIBELLE_CZ = 'SousCategorie.libelle_cz';

    /** the column name for the libelle_it field */
    const LIBELLE_IT = 'SousCategorie.libelle_it';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'SousCategorie.date_modification';

    /** the column name for the code field */
    const CODE = 'SousCategorie.code';

    /** the column name for the active field */
    const ACTIVE = 'SousCategorie.active';

    /** The enumerated values for the active field */
    const ACTIVE_0 = '0';
    const ACTIVE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonSousCategorie objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonSousCategorie[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonSousCategoriePeer::$fieldNames[CommonSousCategoriePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdCategorie', 'Libelle', 'LibelleAr', 'LibelleFr', 'LibelleEn', 'LibelleEs', 'LibelleSu', 'LibelleDu', 'LibelleCz', 'LibelleIt', 'DateModification', 'Code', 'Active', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idCategorie', 'libelle', 'libelleAr', 'libelleFr', 'libelleEn', 'libelleEs', 'libelleSu', 'libelleDu', 'libelleCz', 'libelleIt', 'dateModification', 'code', 'active', ),
        BasePeer::TYPE_COLNAME => array (CommonSousCategoriePeer::ID, CommonSousCategoriePeer::ID_CATEGORIE, CommonSousCategoriePeer::LIBELLE, CommonSousCategoriePeer::LIBELLE_AR, CommonSousCategoriePeer::LIBELLE_FR, CommonSousCategoriePeer::LIBELLE_EN, CommonSousCategoriePeer::LIBELLE_ES, CommonSousCategoriePeer::LIBELLE_SU, CommonSousCategoriePeer::LIBELLE_DU, CommonSousCategoriePeer::LIBELLE_CZ, CommonSousCategoriePeer::LIBELLE_IT, CommonSousCategoriePeer::DATE_MODIFICATION, CommonSousCategoriePeer::CODE, CommonSousCategoriePeer::ACTIVE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CATEGORIE', 'LIBELLE', 'LIBELLE_AR', 'LIBELLE_FR', 'LIBELLE_EN', 'LIBELLE_ES', 'LIBELLE_SU', 'LIBELLE_DU', 'LIBELLE_CZ', 'LIBELLE_IT', 'DATE_MODIFICATION', 'CODE', 'ACTIVE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_categorie', 'libelle', 'libelle_ar', 'libelle_fr', 'libelle_en', 'libelle_es', 'libelle_su', 'libelle_du', 'libelle_cz', 'libelle_it', 'date_modification', 'code', 'active', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonSousCategoriePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdCategorie' => 1, 'Libelle' => 2, 'LibelleAr' => 3, 'LibelleFr' => 4, 'LibelleEn' => 5, 'LibelleEs' => 6, 'LibelleSu' => 7, 'LibelleDu' => 8, 'LibelleCz' => 9, 'LibelleIt' => 10, 'DateModification' => 11, 'Code' => 12, 'Active' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idCategorie' => 1, 'libelle' => 2, 'libelleAr' => 3, 'libelleFr' => 4, 'libelleEn' => 5, 'libelleEs' => 6, 'libelleSu' => 7, 'libelleDu' => 8, 'libelleCz' => 9, 'libelleIt' => 10, 'dateModification' => 11, 'code' => 12, 'active' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonSousCategoriePeer::ID => 0, CommonSousCategoriePeer::ID_CATEGORIE => 1, CommonSousCategoriePeer::LIBELLE => 2, CommonSousCategoriePeer::LIBELLE_AR => 3, CommonSousCategoriePeer::LIBELLE_FR => 4, CommonSousCategoriePeer::LIBELLE_EN => 5, CommonSousCategoriePeer::LIBELLE_ES => 6, CommonSousCategoriePeer::LIBELLE_SU => 7, CommonSousCategoriePeer::LIBELLE_DU => 8, CommonSousCategoriePeer::LIBELLE_CZ => 9, CommonSousCategoriePeer::LIBELLE_IT => 10, CommonSousCategoriePeer::DATE_MODIFICATION => 11, CommonSousCategoriePeer::CODE => 12, CommonSousCategoriePeer::ACTIVE => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CATEGORIE' => 1, 'LIBELLE' => 2, 'LIBELLE_AR' => 3, 'LIBELLE_FR' => 4, 'LIBELLE_EN' => 5, 'LIBELLE_ES' => 6, 'LIBELLE_SU' => 7, 'LIBELLE_DU' => 8, 'LIBELLE_CZ' => 9, 'LIBELLE_IT' => 10, 'DATE_MODIFICATION' => 11, 'CODE' => 12, 'ACTIVE' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_categorie' => 1, 'libelle' => 2, 'libelle_ar' => 3, 'libelle_fr' => 4, 'libelle_en' => 5, 'libelle_es' => 6, 'libelle_su' => 7, 'libelle_du' => 8, 'libelle_cz' => 9, 'libelle_it' => 10, 'date_modification' => 11, 'code' => 12, 'active' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonSousCategoriePeer::ACTIVE => array(
            CommonSousCategoriePeer::ACTIVE_0,
            CommonSousCategoriePeer::ACTIVE_1,
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
        $toNames = CommonSousCategoriePeer::getFieldNames($toType);
        $key = isset(CommonSousCategoriePeer::$fieldKeys[$fromType][$name]) ? CommonSousCategoriePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonSousCategoriePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonSousCategoriePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonSousCategoriePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonSousCategoriePeer::$enumValueSets;
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
        $valueSets = CommonSousCategoriePeer::getValueSets();

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
        $values = CommonSousCategoriePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonSousCategoriePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonSousCategoriePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonSousCategoriePeer::ID);
            $criteria->addSelectColumn(CommonSousCategoriePeer::ID_CATEGORIE);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_AR);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_FR);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_EN);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_ES);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_SU);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_DU);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_CZ);
            $criteria->addSelectColumn(CommonSousCategoriePeer::LIBELLE_IT);
            $criteria->addSelectColumn(CommonSousCategoriePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonSousCategoriePeer::CODE);
            $criteria->addSelectColumn(CommonSousCategoriePeer::ACTIVE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_categorie');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.libelle_ar');
            $criteria->addSelectColumn($alias . '.libelle_fr');
            $criteria->addSelectColumn($alias . '.libelle_en');
            $criteria->addSelectColumn($alias . '.libelle_es');
            $criteria->addSelectColumn($alias . '.libelle_su');
            $criteria->addSelectColumn($alias . '.libelle_du');
            $criteria->addSelectColumn($alias . '.libelle_cz');
            $criteria->addSelectColumn($alias . '.libelle_it');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.active');
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
        $criteria->setPrimaryTableName(CommonSousCategoriePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonSousCategoriePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonSousCategoriePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSousCategorie
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonSousCategoriePeer::doSelect($critcopy, $con);
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
        return CommonSousCategoriePeer::populateObjects(CommonSousCategoriePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonSousCategoriePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSousCategoriePeer::DATABASE_NAME);

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
     * @param      CommonSousCategorie $obj A CommonSousCategorie object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonSousCategoriePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonSousCategorie object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonSousCategorie) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonSousCategorie object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonSousCategoriePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonSousCategorie Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonSousCategoriePeer::$instances[$key])) {
                return CommonSousCategoriePeer::$instances[$key];
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
        foreach (CommonSousCategoriePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonSousCategoriePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to SousCategorie
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

        return (string) $row[$startcol];
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
        $cls = CommonSousCategoriePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonSousCategoriePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonSousCategoriePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonSousCategoriePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonSousCategorie object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonSousCategoriePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonSousCategoriePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonSousCategoriePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonSousCategoriePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonSousCategoriePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonSousCategoriePeer::DATABASE_NAME)->getTable(CommonSousCategoriePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonSousCategoriePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonSousCategoriePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonSousCategorieTableMap());
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
        return CommonSousCategoriePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonSousCategorie or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSousCategorie object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonSousCategorie object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonSousCategoriePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonSousCategorie or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSousCategorie object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonSousCategoriePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonSousCategoriePeer::ID);
            $value = $criteria->remove(CommonSousCategoriePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonSousCategoriePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonSousCategoriePeer::TABLE_NAME);
            }

        } else { // $values is CommonSousCategorie object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonSousCategoriePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SousCategorie table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonSousCategoriePeer::TABLE_NAME, $con, CommonSousCategoriePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonSousCategoriePeer::clearInstancePool();
            CommonSousCategoriePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonSousCategorie or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonSousCategorie object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonSousCategoriePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonSousCategorie) { // it's a model object
            // invalidate the cache for this single object
            CommonSousCategoriePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonSousCategoriePeer::DATABASE_NAME);
            $criteria->add(CommonSousCategoriePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonSousCategoriePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSousCategoriePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonSousCategoriePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonSousCategorie object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonSousCategorie $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonSousCategoriePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonSousCategoriePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonSousCategoriePeer::DATABASE_NAME, CommonSousCategoriePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonSousCategorie
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonSousCategoriePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonSousCategoriePeer::DATABASE_NAME);
        $criteria->add(CommonSousCategoriePeer::ID, $pk);

        $v = CommonSousCategoriePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonSousCategorie[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonSousCategoriePeer::DATABASE_NAME);
            $criteria->add(CommonSousCategoriePeer::ID, $pks, Criteria::IN);
            $objs = CommonSousCategoriePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonSousCategoriePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonSousCategoriePeer::buildTableMap();

