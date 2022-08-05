<?php


/**
 * Base static class for performing query and update operations on the 'Service_Mertier_Profils' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonServiceMertierProfilsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Service_Mertier_Profils';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonServiceMertierProfils';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonServiceMertierProfilsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id_auto field */
    const ID_AUTO = 'Service_Mertier_Profils.id_auto';

    /** the column name for the id_interne field */
    const ID_INTERNE = 'Service_Mertier_Profils.id_interne';

    /** the column name for the id_service_metier field */
    const ID_SERVICE_METIER = 'Service_Mertier_Profils.id_service_metier';

    /** the column name for the id_externe field */
    const ID_EXTERNE = 'Service_Mertier_Profils.id_externe';

    /** the column name for the libelle field */
    const LIBELLE = 'Service_Mertier_Profils.libelle';

    /** the column name for the libelle_fr field */
    const LIBELLE_FR = 'Service_Mertier_Profils.libelle_fr';

    /** the column name for the libelle_en field */
    const LIBELLE_EN = 'Service_Mertier_Profils.libelle_en';

    /** the column name for the libelle_es field */
    const LIBELLE_ES = 'Service_Mertier_Profils.libelle_es';

    /** the column name for the libelle_su field */
    const LIBELLE_SU = 'Service_Mertier_Profils.libelle_su';

    /** the column name for the libelle_du field */
    const LIBELLE_DU = 'Service_Mertier_Profils.libelle_du';

    /** the column name for the libelle_cz field */
    const LIBELLE_CZ = 'Service_Mertier_Profils.libelle_cz';

    /** the column name for the libelle_ar field */
    const LIBELLE_AR = 'Service_Mertier_Profils.libelle_ar';

    /** the column name for the libelle_it field */
    const LIBELLE_IT = 'Service_Mertier_Profils.libelle_it';

    /** the column name for the show_profile_for_hyperadmin_only field */
    const SHOW_PROFILE_FOR_HYPERADMIN_ONLY = 'Service_Mertier_Profils.show_profile_for_hyperadmin_only';

    /** The enumerated values for the show_profile_for_hyperadmin_only field */
    const SHOW_PROFILE_FOR_HYPERADMIN_ONLY_0 = '0';
    const SHOW_PROFILE_FOR_HYPERADMIN_ONLY_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonServiceMertierProfils objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonServiceMertierProfils[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonServiceMertierProfilsPeer::$fieldNames[CommonServiceMertierProfilsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdAuto', 'IdInterne', 'IdServiceMetier', 'IdExterne', 'Libelle', 'LibelleFr', 'LibelleEn', 'LibelleEs', 'LibelleSu', 'LibelleDu', 'LibelleCz', 'LibelleAr', 'LibelleIt', 'ShowProfileForHyperadminOnly', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAuto', 'idInterne', 'idServiceMetier', 'idExterne', 'libelle', 'libelleFr', 'libelleEn', 'libelleEs', 'libelleSu', 'libelleDu', 'libelleCz', 'libelleAr', 'libelleIt', 'showProfileForHyperadminOnly', ),
        BasePeer::TYPE_COLNAME => array (CommonServiceMertierProfilsPeer::ID_AUTO, CommonServiceMertierProfilsPeer::ID_INTERNE, CommonServiceMertierProfilsPeer::ID_SERVICE_METIER, CommonServiceMertierProfilsPeer::ID_EXTERNE, CommonServiceMertierProfilsPeer::LIBELLE, CommonServiceMertierProfilsPeer::LIBELLE_FR, CommonServiceMertierProfilsPeer::LIBELLE_EN, CommonServiceMertierProfilsPeer::LIBELLE_ES, CommonServiceMertierProfilsPeer::LIBELLE_SU, CommonServiceMertierProfilsPeer::LIBELLE_DU, CommonServiceMertierProfilsPeer::LIBELLE_CZ, CommonServiceMertierProfilsPeer::LIBELLE_AR, CommonServiceMertierProfilsPeer::LIBELLE_IT, CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AUTO', 'ID_INTERNE', 'ID_SERVICE_METIER', 'ID_EXTERNE', 'LIBELLE', 'LIBELLE_FR', 'LIBELLE_EN', 'LIBELLE_ES', 'LIBELLE_SU', 'LIBELLE_DU', 'LIBELLE_CZ', 'LIBELLE_AR', 'LIBELLE_IT', 'SHOW_PROFILE_FOR_HYPERADMIN_ONLY', ),
        BasePeer::TYPE_FIELDNAME => array ('id_auto', 'id_interne', 'id_service_metier', 'id_externe', 'libelle', 'libelle_fr', 'libelle_en', 'libelle_es', 'libelle_su', 'libelle_du', 'libelle_cz', 'libelle_ar', 'libelle_it', 'show_profile_for_hyperadmin_only', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonServiceMertierProfilsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdAuto' => 0, 'IdInterne' => 1, 'IdServiceMetier' => 2, 'IdExterne' => 3, 'Libelle' => 4, 'LibelleFr' => 5, 'LibelleEn' => 6, 'LibelleEs' => 7, 'LibelleSu' => 8, 'LibelleDu' => 9, 'LibelleCz' => 10, 'LibelleAr' => 11, 'LibelleIt' => 12, 'ShowProfileForHyperadminOnly' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAuto' => 0, 'idInterne' => 1, 'idServiceMetier' => 2, 'idExterne' => 3, 'libelle' => 4, 'libelleFr' => 5, 'libelleEn' => 6, 'libelleEs' => 7, 'libelleSu' => 8, 'libelleDu' => 9, 'libelleCz' => 10, 'libelleAr' => 11, 'libelleIt' => 12, 'showProfileForHyperadminOnly' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonServiceMertierProfilsPeer::ID_AUTO => 0, CommonServiceMertierProfilsPeer::ID_INTERNE => 1, CommonServiceMertierProfilsPeer::ID_SERVICE_METIER => 2, CommonServiceMertierProfilsPeer::ID_EXTERNE => 3, CommonServiceMertierProfilsPeer::LIBELLE => 4, CommonServiceMertierProfilsPeer::LIBELLE_FR => 5, CommonServiceMertierProfilsPeer::LIBELLE_EN => 6, CommonServiceMertierProfilsPeer::LIBELLE_ES => 7, CommonServiceMertierProfilsPeer::LIBELLE_SU => 8, CommonServiceMertierProfilsPeer::LIBELLE_DU => 9, CommonServiceMertierProfilsPeer::LIBELLE_CZ => 10, CommonServiceMertierProfilsPeer::LIBELLE_AR => 11, CommonServiceMertierProfilsPeer::LIBELLE_IT => 12, CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AUTO' => 0, 'ID_INTERNE' => 1, 'ID_SERVICE_METIER' => 2, 'ID_EXTERNE' => 3, 'LIBELLE' => 4, 'LIBELLE_FR' => 5, 'LIBELLE_EN' => 6, 'LIBELLE_ES' => 7, 'LIBELLE_SU' => 8, 'LIBELLE_DU' => 9, 'LIBELLE_CZ' => 10, 'LIBELLE_AR' => 11, 'LIBELLE_IT' => 12, 'SHOW_PROFILE_FOR_HYPERADMIN_ONLY' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id_auto' => 0, 'id_interne' => 1, 'id_service_metier' => 2, 'id_externe' => 3, 'libelle' => 4, 'libelle_fr' => 5, 'libelle_en' => 6, 'libelle_es' => 7, 'libelle_su' => 8, 'libelle_du' => 9, 'libelle_cz' => 10, 'libelle_ar' => 11, 'libelle_it' => 12, 'show_profile_for_hyperadmin_only' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY => array(
            CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY_0,
            CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY_1,
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
        $toNames = CommonServiceMertierProfilsPeer::getFieldNames($toType);
        $key = isset(CommonServiceMertierProfilsPeer::$fieldKeys[$fromType][$name]) ? CommonServiceMertierProfilsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonServiceMertierProfilsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonServiceMertierProfilsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonServiceMertierProfilsPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonServiceMertierProfilsPeer::$enumValueSets;
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
        $valueSets = CommonServiceMertierProfilsPeer::getValueSets();

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
        $values = CommonServiceMertierProfilsPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonServiceMertierProfilsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonServiceMertierProfilsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::ID_AUTO);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::ID_INTERNE);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::ID_EXTERNE);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_FR);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_EN);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_ES);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_SU);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_DU);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_CZ);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_AR);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::LIBELLE_IT);
            $criteria->addSelectColumn(CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY);
        } else {
            $criteria->addSelectColumn($alias . '.id_auto');
            $criteria->addSelectColumn($alias . '.id_interne');
            $criteria->addSelectColumn($alias . '.id_service_metier');
            $criteria->addSelectColumn($alias . '.id_externe');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.libelle_fr');
            $criteria->addSelectColumn($alias . '.libelle_en');
            $criteria->addSelectColumn($alias . '.libelle_es');
            $criteria->addSelectColumn($alias . '.libelle_su');
            $criteria->addSelectColumn($alias . '.libelle_du');
            $criteria->addSelectColumn($alias . '.libelle_cz');
            $criteria->addSelectColumn($alias . '.libelle_ar');
            $criteria->addSelectColumn($alias . '.libelle_it');
            $criteria->addSelectColumn($alias . '.show_profile_for_hyperadmin_only');
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
        $criteria->setPrimaryTableName(CommonServiceMertierProfilsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonServiceMertierProfilsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonServiceMertierProfilsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonServiceMertierProfils
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonServiceMertierProfilsPeer::doSelect($critcopy, $con);
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
        return CommonServiceMertierProfilsPeer::populateObjects(CommonServiceMertierProfilsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonServiceMertierProfilsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonServiceMertierProfilsPeer::DATABASE_NAME);

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
     * @param      CommonServiceMertierProfils $obj A CommonServiceMertierProfils object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdAuto();
            } // if key === null
            CommonServiceMertierProfilsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonServiceMertierProfils object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonServiceMertierProfils) {
                $key = (string) $value->getIdAuto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonServiceMertierProfils object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonServiceMertierProfilsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonServiceMertierProfils Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonServiceMertierProfilsPeer::$instances[$key])) {
                return CommonServiceMertierProfilsPeer::$instances[$key];
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
        foreach (CommonServiceMertierProfilsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonServiceMertierProfilsPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Service_Mertier_Profils
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
        $cls = CommonServiceMertierProfilsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonServiceMertierProfilsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonServiceMertierProfilsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonServiceMertierProfilsPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonServiceMertierProfils object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonServiceMertierProfilsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonServiceMertierProfilsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonServiceMertierProfilsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonServiceMertierProfilsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonServiceMertierProfilsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonServiceMertierProfilsPeer::DATABASE_NAME)->getTable(CommonServiceMertierProfilsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonServiceMertierProfilsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonServiceMertierProfilsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonServiceMertierProfilsTableMap());
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
        return CommonServiceMertierProfilsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonServiceMertierProfils or Criteria object.
     *
     * @param      mixed $values Criteria or CommonServiceMertierProfils object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonServiceMertierProfils object
        }

        if ($criteria->containsKey(CommonServiceMertierProfilsPeer::ID_AUTO) && $criteria->keyContainsValue(CommonServiceMertierProfilsPeer::ID_AUTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonServiceMertierProfilsPeer::ID_AUTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonServiceMertierProfilsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonServiceMertierProfils or Criteria object.
     *
     * @param      mixed $values Criteria or CommonServiceMertierProfils object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonServiceMertierProfilsPeer::ID_AUTO);
            $value = $criteria->remove(CommonServiceMertierProfilsPeer::ID_AUTO);
            if ($value) {
                $selectCriteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonServiceMertierProfilsPeer::TABLE_NAME);
            }

        } else { // $values is CommonServiceMertierProfils object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonServiceMertierProfilsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Service_Mertier_Profils table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonServiceMertierProfilsPeer::TABLE_NAME, $con, CommonServiceMertierProfilsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonServiceMertierProfilsPeer::clearInstancePool();
            CommonServiceMertierProfilsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonServiceMertierProfils or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonServiceMertierProfils object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonServiceMertierProfilsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonServiceMertierProfils) { // it's a model object
            // invalidate the cache for this single object
            CommonServiceMertierProfilsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);
            $criteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonServiceMertierProfilsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonServiceMertierProfilsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonServiceMertierProfilsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonServiceMertierProfils object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonServiceMertierProfils $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonServiceMertierProfilsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonServiceMertierProfilsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonServiceMertierProfilsPeer::DATABASE_NAME, CommonServiceMertierProfilsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonServiceMertierProfils
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonServiceMertierProfilsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);
        $criteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, $pk);

        $v = CommonServiceMertierProfilsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonServiceMertierProfils[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);
            $criteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, $pks, Criteria::IN);
            $objs = CommonServiceMertierProfilsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonServiceMertierProfilsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonServiceMertierProfilsPeer::buildTableMap();

