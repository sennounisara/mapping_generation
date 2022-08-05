<?php


/**
 * Base static class for performing query and update operations on the 'visite_lieux' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonVisiteLieuxPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'visite_lieux';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonVisiteLieux';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonVisiteLieuxTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id field */
    const ID = 'visite_lieux.id';

    /** the column name for the organisme field */
    const ORGANISME = 'visite_lieux.organisme';

    /** the column name for the reference field */
    const REFERENCE = 'visite_lieux.reference';

    /** the column name for the adresse field */
    const ADRESSE = 'visite_lieux.adresse';

    /** the column name for the id_tr_adresse field */
    const ID_TR_ADRESSE = 'visite_lieux.id_tr_adresse';

    /** the column name for the date field */
    const DATE = 'visite_lieux.date';

    /** the column name for the lot field */
    const LOT = 'visite_lieux.lot';

    /** the column name for the adresse_fr field */
    const ADRESSE_FR = 'visite_lieux.adresse_fr';

    /** the column name for the adresse_en field */
    const ADRESSE_EN = 'visite_lieux.adresse_en';

    /** the column name for the adresse_es field */
    const ADRESSE_ES = 'visite_lieux.adresse_es';

    /** the column name for the adresse_su field */
    const ADRESSE_SU = 'visite_lieux.adresse_su';

    /** the column name for the adresse_du field */
    const ADRESSE_DU = 'visite_lieux.adresse_du';

    /** the column name for the adresse_cz field */
    const ADRESSE_CZ = 'visite_lieux.adresse_cz';

    /** the column name for the adresse_ar field */
    const ADRESSE_AR = 'visite_lieux.adresse_ar';

    /** the column name for the adresse_it field */
    const ADRESSE_IT = 'visite_lieux.adresse_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonVisiteLieux objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonVisiteLieux[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonVisiteLieuxPeer::$fieldNames[CommonVisiteLieuxPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Reference', 'Adresse', 'IdTrAdresse', 'Date', 'Lot', 'AdresseFr', 'AdresseEn', 'AdresseEs', 'AdresseSu', 'AdresseDu', 'AdresseCz', 'AdresseAr', 'AdresseIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'reference', 'adresse', 'idTrAdresse', 'date', 'lot', 'adresseFr', 'adresseEn', 'adresseEs', 'adresseSu', 'adresseDu', 'adresseCz', 'adresseAr', 'adresseIt', ),
        BasePeer::TYPE_COLNAME => array (CommonVisiteLieuxPeer::ID, CommonVisiteLieuxPeer::ORGANISME, CommonVisiteLieuxPeer::REFERENCE, CommonVisiteLieuxPeer::ADRESSE, CommonVisiteLieuxPeer::ID_TR_ADRESSE, CommonVisiteLieuxPeer::DATE, CommonVisiteLieuxPeer::LOT, CommonVisiteLieuxPeer::ADRESSE_FR, CommonVisiteLieuxPeer::ADRESSE_EN, CommonVisiteLieuxPeer::ADRESSE_ES, CommonVisiteLieuxPeer::ADRESSE_SU, CommonVisiteLieuxPeer::ADRESSE_DU, CommonVisiteLieuxPeer::ADRESSE_CZ, CommonVisiteLieuxPeer::ADRESSE_AR, CommonVisiteLieuxPeer::ADRESSE_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'REFERENCE', 'ADRESSE', 'ID_TR_ADRESSE', 'DATE', 'LOT', 'ADRESSE_FR', 'ADRESSE_EN', 'ADRESSE_ES', 'ADRESSE_SU', 'ADRESSE_DU', 'ADRESSE_CZ', 'ADRESSE_AR', 'ADRESSE_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'reference', 'adresse', 'id_tr_adresse', 'date', 'lot', 'adresse_fr', 'adresse_en', 'adresse_es', 'adresse_su', 'adresse_du', 'adresse_cz', 'adresse_ar', 'adresse_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonVisiteLieuxPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Reference' => 2, 'Adresse' => 3, 'IdTrAdresse' => 4, 'Date' => 5, 'Lot' => 6, 'AdresseFr' => 7, 'AdresseEn' => 8, 'AdresseEs' => 9, 'AdresseSu' => 10, 'AdresseDu' => 11, 'AdresseCz' => 12, 'AdresseAr' => 13, 'AdresseIt' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'reference' => 2, 'adresse' => 3, 'idTrAdresse' => 4, 'date' => 5, 'lot' => 6, 'adresseFr' => 7, 'adresseEn' => 8, 'adresseEs' => 9, 'adresseSu' => 10, 'adresseDu' => 11, 'adresseCz' => 12, 'adresseAr' => 13, 'adresseIt' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonVisiteLieuxPeer::ID => 0, CommonVisiteLieuxPeer::ORGANISME => 1, CommonVisiteLieuxPeer::REFERENCE => 2, CommonVisiteLieuxPeer::ADRESSE => 3, CommonVisiteLieuxPeer::ID_TR_ADRESSE => 4, CommonVisiteLieuxPeer::DATE => 5, CommonVisiteLieuxPeer::LOT => 6, CommonVisiteLieuxPeer::ADRESSE_FR => 7, CommonVisiteLieuxPeer::ADRESSE_EN => 8, CommonVisiteLieuxPeer::ADRESSE_ES => 9, CommonVisiteLieuxPeer::ADRESSE_SU => 10, CommonVisiteLieuxPeer::ADRESSE_DU => 11, CommonVisiteLieuxPeer::ADRESSE_CZ => 12, CommonVisiteLieuxPeer::ADRESSE_AR => 13, CommonVisiteLieuxPeer::ADRESSE_IT => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'REFERENCE' => 2, 'ADRESSE' => 3, 'ID_TR_ADRESSE' => 4, 'DATE' => 5, 'LOT' => 6, 'ADRESSE_FR' => 7, 'ADRESSE_EN' => 8, 'ADRESSE_ES' => 9, 'ADRESSE_SU' => 10, 'ADRESSE_DU' => 11, 'ADRESSE_CZ' => 12, 'ADRESSE_AR' => 13, 'ADRESSE_IT' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'reference' => 2, 'adresse' => 3, 'id_tr_adresse' => 4, 'date' => 5, 'lot' => 6, 'adresse_fr' => 7, 'adresse_en' => 8, 'adresse_es' => 9, 'adresse_su' => 10, 'adresse_du' => 11, 'adresse_cz' => 12, 'adresse_ar' => 13, 'adresse_it' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = CommonVisiteLieuxPeer::getFieldNames($toType);
        $key = isset(CommonVisiteLieuxPeer::$fieldKeys[$fromType][$name]) ? CommonVisiteLieuxPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonVisiteLieuxPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonVisiteLieuxPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonVisiteLieuxPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonVisiteLieuxPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonVisiteLieuxPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ID);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ORGANISME);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::REFERENCE);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ID_TR_ADRESSE);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::DATE);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::LOT);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_FR);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_EN);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_ES);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_SU);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_DU);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_CZ);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_AR);
            $criteria->addSelectColumn(CommonVisiteLieuxPeer::ADRESSE_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.id_tr_adresse');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.adresse_fr');
            $criteria->addSelectColumn($alias . '.adresse_en');
            $criteria->addSelectColumn($alias . '.adresse_es');
            $criteria->addSelectColumn($alias . '.adresse_su');
            $criteria->addSelectColumn($alias . '.adresse_du');
            $criteria->addSelectColumn($alias . '.adresse_cz');
            $criteria->addSelectColumn($alias . '.adresse_ar');
            $criteria->addSelectColumn($alias . '.adresse_it');
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
        $criteria->setPrimaryTableName(CommonVisiteLieuxPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonVisiteLieuxPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonVisiteLieux
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonVisiteLieuxPeer::doSelect($critcopy, $con);
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
        return CommonVisiteLieuxPeer::populateObjects(CommonVisiteLieuxPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonVisiteLieuxPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

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
     * @param      CommonVisiteLieux $obj A CommonVisiteLieux object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonVisiteLieuxPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonVisiteLieux object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonVisiteLieux) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonVisiteLieux object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonVisiteLieuxPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonVisiteLieux Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonVisiteLieuxPeer::$instances[$key])) {
                return CommonVisiteLieuxPeer::$instances[$key];
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
        foreach (CommonVisiteLieuxPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonVisiteLieuxPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to visite_lieux
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
        $cls = CommonVisiteLieuxPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonVisiteLieuxPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonVisiteLieuxPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonVisiteLieuxPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonVisiteLieux object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonVisiteLieuxPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonVisiteLieuxPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonVisiteLieuxPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonVisiteLieuxPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonVisiteLieuxPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonVisiteLieuxPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonVisiteLieuxPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonVisiteLieuxPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonVisiteLieuxPeer::REFERENCE, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonVisiteLieux objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonVisiteLieux objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);
        }

        CommonVisiteLieuxPeer::addSelectColumns($criteria);
        $startcol = CommonVisiteLieuxPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonVisiteLieuxPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonVisiteLieuxPeer::REFERENCE, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonVisiteLieuxPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonVisiteLieuxPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonVisiteLieuxPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonVisiteLieuxPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonVisiteLieux) to $obj2 (CommonConsultation)
                $obj2->addCommonVisiteLieux($obj1);

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
        $criteria->setPrimaryTableName(CommonVisiteLieuxPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonVisiteLieuxPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonVisiteLieuxPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonVisiteLieuxPeer::REFERENCE, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonVisiteLieux objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonVisiteLieux objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);
        }

        CommonVisiteLieuxPeer::addSelectColumns($criteria);
        $startcol2 = CommonVisiteLieuxPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonVisiteLieuxPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonVisiteLieuxPeer::REFERENCE, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonVisiteLieuxPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonVisiteLieuxPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonVisiteLieuxPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonVisiteLieuxPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonVisiteLieux) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonVisiteLieux($obj1);
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
        return Propel::getDatabaseMap(CommonVisiteLieuxPeer::DATABASE_NAME)->getTable(CommonVisiteLieuxPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonVisiteLieuxPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonVisiteLieuxPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonVisiteLieuxTableMap());
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
        return CommonVisiteLieuxPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonVisiteLieux or Criteria object.
     *
     * @param      mixed $values Criteria or CommonVisiteLieux object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonVisiteLieux object
        }

        if ($criteria->containsKey(CommonVisiteLieuxPeer::ID) && $criteria->keyContainsValue(CommonVisiteLieuxPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonVisiteLieuxPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonVisiteLieux or Criteria object.
     *
     * @param      mixed $values Criteria or CommonVisiteLieux object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonVisiteLieuxPeer::ID);
            $value = $criteria->remove(CommonVisiteLieuxPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonVisiteLieuxPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonVisiteLieuxPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonVisiteLieuxPeer::ORGANISME);
            $value = $criteria->remove(CommonVisiteLieuxPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonVisiteLieuxPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonVisiteLieuxPeer::TABLE_NAME);
            }

        } else { // $values is CommonVisiteLieux object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the visite_lieux table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonVisiteLieuxPeer::TABLE_NAME, $con, CommonVisiteLieuxPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonVisiteLieuxPeer::clearInstancePool();
            CommonVisiteLieuxPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonVisiteLieux or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonVisiteLieux object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonVisiteLieuxPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonVisiteLieux) { // it's a model object
            // invalidate the cache for this single object
            CommonVisiteLieuxPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonVisiteLieuxPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonVisiteLieuxPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonVisiteLieuxPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonVisiteLieuxPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonVisiteLieuxPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonVisiteLieux object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonVisiteLieux $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonVisiteLieuxPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonVisiteLieuxPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonVisiteLieuxPeer::DATABASE_NAME, CommonVisiteLieuxPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonVisiteLieux
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonVisiteLieuxPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);
        $criteria->add(CommonVisiteLieuxPeer::ID, $id);
        $criteria->add(CommonVisiteLieuxPeer::ORGANISME, $organisme);
        $v = CommonVisiteLieuxPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonVisiteLieuxPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonVisiteLieuxPeer::buildTableMap();

