<?php


/**
 * Base static class for performing query and update operations on the 'GeolocalisationN1' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGeolocalisationN1Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'GeolocalisationN1';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonGeolocalisationN1';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonGeolocalisationN1TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id field */
    const ID = 'GeolocalisationN1.id';

    /** the column name for the id_geolocalisationN0 field */
    const ID_GEOLOCALISATIONN0 = 'GeolocalisationN1.id_geolocalisationN0';

    /** the column name for the actif field */
    const ACTIF = 'GeolocalisationN1.actif';

    /** the column name for the denomination1 field */
    const DENOMINATION1 = 'GeolocalisationN1.denomination1';

    /** the column name for the denomination2 field */
    const DENOMINATION2 = 'GeolocalisationN1.denomination2';

    /** the column name for the denomination1_ar field */
    const DENOMINATION1_AR = 'GeolocalisationN1.denomination1_ar';

    /** the column name for the denomination2_ar field */
    const DENOMINATION2_AR = 'GeolocalisationN1.denomination2_ar';

    /** the column name for the denomination1_fr field */
    const DENOMINATION1_FR = 'GeolocalisationN1.denomination1_fr';

    /** the column name for the denomination2_fr field */
    const DENOMINATION2_FR = 'GeolocalisationN1.denomination2_fr';

    /** the column name for the denomination1_en field */
    const DENOMINATION1_EN = 'GeolocalisationN1.denomination1_en';

    /** the column name for the denomination2_en field */
    const DENOMINATION2_EN = 'GeolocalisationN1.denomination2_en';

    /** the column name for the denomination1_es field */
    const DENOMINATION1_ES = 'GeolocalisationN1.denomination1_es';

    /** the column name for the denomination2_es field */
    const DENOMINATION2_ES = 'GeolocalisationN1.denomination2_es';

    /** the column name for the denomination1_su field */
    const DENOMINATION1_SU = 'GeolocalisationN1.denomination1_su';

    /** the column name for the denomination2_su field */
    const DENOMINATION2_SU = 'GeolocalisationN1.denomination2_su';

    /** the column name for the denomination1_du field */
    const DENOMINATION1_DU = 'GeolocalisationN1.denomination1_du';

    /** the column name for the denomination2_du field */
    const DENOMINATION2_DU = 'GeolocalisationN1.denomination2_du';

    /** the column name for the denomination1_cz field */
    const DENOMINATION1_CZ = 'GeolocalisationN1.denomination1_cz';

    /** the column name for the denomination2_cz field */
    const DENOMINATION2_CZ = 'GeolocalisationN1.denomination2_cz';

    /** the column name for the denomination1_it field */
    const DENOMINATION1_IT = 'GeolocalisationN1.denomination1_it';

    /** the column name for the denomination2_it field */
    const DENOMINATION2_IT = 'GeolocalisationN1.denomination2_it';

    /** The enumerated values for the actif field */
    const ACTIF_0 = '0';
    const ACTIF_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonGeolocalisationN1 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonGeolocalisationN1[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN1Peer::$fieldNames[CommonGeolocalisationN1Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdGeolocalisationn0', 'Actif', 'Denomination1', 'Denomination2', 'Denomination1Ar', 'Denomination2Ar', 'Denomination1Fr', 'Denomination2Fr', 'Denomination1En', 'Denomination2En', 'Denomination1Es', 'Denomination2Es', 'Denomination1Su', 'Denomination2Su', 'Denomination1Du', 'Denomination2Du', 'Denomination1Cz', 'Denomination2Cz', 'Denomination1It', 'Denomination2It', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idGeolocalisationn0', 'actif', 'denomination1', 'denomination2', 'denomination1Ar', 'denomination2Ar', 'denomination1Fr', 'denomination2Fr', 'denomination1En', 'denomination2En', 'denomination1Es', 'denomination2Es', 'denomination1Su', 'denomination2Su', 'denomination1Du', 'denomination2Du', 'denomination1Cz', 'denomination2Cz', 'denomination1It', 'denomination2It', ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN1Peer::ID, CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0, CommonGeolocalisationN1Peer::ACTIF, CommonGeolocalisationN1Peer::DENOMINATION1, CommonGeolocalisationN1Peer::DENOMINATION2, CommonGeolocalisationN1Peer::DENOMINATION1_AR, CommonGeolocalisationN1Peer::DENOMINATION2_AR, CommonGeolocalisationN1Peer::DENOMINATION1_FR, CommonGeolocalisationN1Peer::DENOMINATION2_FR, CommonGeolocalisationN1Peer::DENOMINATION1_EN, CommonGeolocalisationN1Peer::DENOMINATION2_EN, CommonGeolocalisationN1Peer::DENOMINATION1_ES, CommonGeolocalisationN1Peer::DENOMINATION2_ES, CommonGeolocalisationN1Peer::DENOMINATION1_SU, CommonGeolocalisationN1Peer::DENOMINATION2_SU, CommonGeolocalisationN1Peer::DENOMINATION1_DU, CommonGeolocalisationN1Peer::DENOMINATION2_DU, CommonGeolocalisationN1Peer::DENOMINATION1_CZ, CommonGeolocalisationN1Peer::DENOMINATION2_CZ, CommonGeolocalisationN1Peer::DENOMINATION1_IT, CommonGeolocalisationN1Peer::DENOMINATION2_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_GEOLOCALISATIONN0', 'ACTIF', 'DENOMINATION1', 'DENOMINATION2', 'DENOMINATION1_AR', 'DENOMINATION2_AR', 'DENOMINATION1_FR', 'DENOMINATION2_FR', 'DENOMINATION1_EN', 'DENOMINATION2_EN', 'DENOMINATION1_ES', 'DENOMINATION2_ES', 'DENOMINATION1_SU', 'DENOMINATION2_SU', 'DENOMINATION1_DU', 'DENOMINATION2_DU', 'DENOMINATION1_CZ', 'DENOMINATION2_CZ', 'DENOMINATION1_IT', 'DENOMINATION2_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_geolocalisationN0', 'actif', 'denomination1', 'denomination2', 'denomination1_ar', 'denomination2_ar', 'denomination1_fr', 'denomination2_fr', 'denomination1_en', 'denomination2_en', 'denomination1_es', 'denomination2_es', 'denomination1_su', 'denomination2_su', 'denomination1_du', 'denomination2_du', 'denomination1_cz', 'denomination2_cz', 'denomination1_it', 'denomination2_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN1Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdGeolocalisationn0' => 1, 'Actif' => 2, 'Denomination1' => 3, 'Denomination2' => 4, 'Denomination1Ar' => 5, 'Denomination2Ar' => 6, 'Denomination1Fr' => 7, 'Denomination2Fr' => 8, 'Denomination1En' => 9, 'Denomination2En' => 10, 'Denomination1Es' => 11, 'Denomination2Es' => 12, 'Denomination1Su' => 13, 'Denomination2Su' => 14, 'Denomination1Du' => 15, 'Denomination2Du' => 16, 'Denomination1Cz' => 17, 'Denomination2Cz' => 18, 'Denomination1It' => 19, 'Denomination2It' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idGeolocalisationn0' => 1, 'actif' => 2, 'denomination1' => 3, 'denomination2' => 4, 'denomination1Ar' => 5, 'denomination2Ar' => 6, 'denomination1Fr' => 7, 'denomination2Fr' => 8, 'denomination1En' => 9, 'denomination2En' => 10, 'denomination1Es' => 11, 'denomination2Es' => 12, 'denomination1Su' => 13, 'denomination2Su' => 14, 'denomination1Du' => 15, 'denomination2Du' => 16, 'denomination1Cz' => 17, 'denomination2Cz' => 18, 'denomination1It' => 19, 'denomination2It' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN1Peer::ID => 0, CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0 => 1, CommonGeolocalisationN1Peer::ACTIF => 2, CommonGeolocalisationN1Peer::DENOMINATION1 => 3, CommonGeolocalisationN1Peer::DENOMINATION2 => 4, CommonGeolocalisationN1Peer::DENOMINATION1_AR => 5, CommonGeolocalisationN1Peer::DENOMINATION2_AR => 6, CommonGeolocalisationN1Peer::DENOMINATION1_FR => 7, CommonGeolocalisationN1Peer::DENOMINATION2_FR => 8, CommonGeolocalisationN1Peer::DENOMINATION1_EN => 9, CommonGeolocalisationN1Peer::DENOMINATION2_EN => 10, CommonGeolocalisationN1Peer::DENOMINATION1_ES => 11, CommonGeolocalisationN1Peer::DENOMINATION2_ES => 12, CommonGeolocalisationN1Peer::DENOMINATION1_SU => 13, CommonGeolocalisationN1Peer::DENOMINATION2_SU => 14, CommonGeolocalisationN1Peer::DENOMINATION1_DU => 15, CommonGeolocalisationN1Peer::DENOMINATION2_DU => 16, CommonGeolocalisationN1Peer::DENOMINATION1_CZ => 17, CommonGeolocalisationN1Peer::DENOMINATION2_CZ => 18, CommonGeolocalisationN1Peer::DENOMINATION1_IT => 19, CommonGeolocalisationN1Peer::DENOMINATION2_IT => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_GEOLOCALISATIONN0' => 1, 'ACTIF' => 2, 'DENOMINATION1' => 3, 'DENOMINATION2' => 4, 'DENOMINATION1_AR' => 5, 'DENOMINATION2_AR' => 6, 'DENOMINATION1_FR' => 7, 'DENOMINATION2_FR' => 8, 'DENOMINATION1_EN' => 9, 'DENOMINATION2_EN' => 10, 'DENOMINATION1_ES' => 11, 'DENOMINATION2_ES' => 12, 'DENOMINATION1_SU' => 13, 'DENOMINATION2_SU' => 14, 'DENOMINATION1_DU' => 15, 'DENOMINATION2_DU' => 16, 'DENOMINATION1_CZ' => 17, 'DENOMINATION2_CZ' => 18, 'DENOMINATION1_IT' => 19, 'DENOMINATION2_IT' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_geolocalisationN0' => 1, 'actif' => 2, 'denomination1' => 3, 'denomination2' => 4, 'denomination1_ar' => 5, 'denomination2_ar' => 6, 'denomination1_fr' => 7, 'denomination2_fr' => 8, 'denomination1_en' => 9, 'denomination2_en' => 10, 'denomination1_es' => 11, 'denomination2_es' => 12, 'denomination1_su' => 13, 'denomination2_su' => 14, 'denomination1_du' => 15, 'denomination2_du' => 16, 'denomination1_cz' => 17, 'denomination2_cz' => 18, 'denomination1_it' => 19, 'denomination2_it' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonGeolocalisationN1Peer::ACTIF => array(
            CommonGeolocalisationN1Peer::ACTIF_0,
            CommonGeolocalisationN1Peer::ACTIF_1,
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
        $toNames = CommonGeolocalisationN1Peer::getFieldNames($toType);
        $key = isset(CommonGeolocalisationN1Peer::$fieldKeys[$fromType][$name]) ? CommonGeolocalisationN1Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonGeolocalisationN1Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonGeolocalisationN1Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonGeolocalisationN1Peer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonGeolocalisationN1Peer::$enumValueSets;
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
        $valueSets = CommonGeolocalisationN1Peer::getValueSets();

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
        $values = CommonGeolocalisationN1Peer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonGeolocalisationN1Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonGeolocalisationN1Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::ID);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::ACTIF);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION1_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN1Peer::DENOMINATION2_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_geolocalisationN0');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.denomination1');
            $criteria->addSelectColumn($alias . '.denomination2');
            $criteria->addSelectColumn($alias . '.denomination1_ar');
            $criteria->addSelectColumn($alias . '.denomination2_ar');
            $criteria->addSelectColumn($alias . '.denomination1_fr');
            $criteria->addSelectColumn($alias . '.denomination2_fr');
            $criteria->addSelectColumn($alias . '.denomination1_en');
            $criteria->addSelectColumn($alias . '.denomination2_en');
            $criteria->addSelectColumn($alias . '.denomination1_es');
            $criteria->addSelectColumn($alias . '.denomination2_es');
            $criteria->addSelectColumn($alias . '.denomination1_su');
            $criteria->addSelectColumn($alias . '.denomination2_su');
            $criteria->addSelectColumn($alias . '.denomination1_du');
            $criteria->addSelectColumn($alias . '.denomination2_du');
            $criteria->addSelectColumn($alias . '.denomination1_cz');
            $criteria->addSelectColumn($alias . '.denomination2_cz');
            $criteria->addSelectColumn($alias . '.denomination1_it');
            $criteria->addSelectColumn($alias . '.denomination2_it');
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
        $criteria->setPrimaryTableName(CommonGeolocalisationN1Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonGeolocalisationN1Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonGeolocalisationN1Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGeolocalisationN1
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonGeolocalisationN1Peer::doSelect($critcopy, $con);
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
        return CommonGeolocalisationN1Peer::populateObjects(CommonGeolocalisationN1Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonGeolocalisationN1Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN1Peer::DATABASE_NAME);

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
     * @param      CommonGeolocalisationN1 $obj A CommonGeolocalisationN1 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonGeolocalisationN1Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonGeolocalisationN1 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonGeolocalisationN1) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonGeolocalisationN1 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonGeolocalisationN1Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonGeolocalisationN1 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonGeolocalisationN1Peer::$instances[$key])) {
                return CommonGeolocalisationN1Peer::$instances[$key];
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
        foreach (CommonGeolocalisationN1Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonGeolocalisationN1Peer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to GeolocalisationN1
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
        $cls = CommonGeolocalisationN1Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonGeolocalisationN1Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonGeolocalisationN1Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonGeolocalisationN1Peer::addInstanceToPool($obj, $key);
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
     * @return array (CommonGeolocalisationN1 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonGeolocalisationN1Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonGeolocalisationN1Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonGeolocalisationN1Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonGeolocalisationN1Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonGeolocalisationN1Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonGeolocalisationN1Peer::DATABASE_NAME)->getTable(CommonGeolocalisationN1Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonGeolocalisationN1Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonGeolocalisationN1Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonGeolocalisationN1TableMap());
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
        return CommonGeolocalisationN1Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonGeolocalisationN1 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN1 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonGeolocalisationN1 object
        }

        if ($criteria->containsKey(CommonGeolocalisationN1Peer::ID) && $criteria->keyContainsValue(CommonGeolocalisationN1Peer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonGeolocalisationN1Peer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN1Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonGeolocalisationN1 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN1 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonGeolocalisationN1Peer::ID);
            $value = $criteria->remove(CommonGeolocalisationN1Peer::ID);
            if ($value) {
                $selectCriteria->add(CommonGeolocalisationN1Peer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonGeolocalisationN1Peer::TABLE_NAME);
            }

        } else { // $values is CommonGeolocalisationN1 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN1Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the GeolocalisationN1 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonGeolocalisationN1Peer::TABLE_NAME, $con, CommonGeolocalisationN1Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonGeolocalisationN1Peer::clearInstancePool();
            CommonGeolocalisationN1Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonGeolocalisationN1 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN1 object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonGeolocalisationN1Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonGeolocalisationN1) { // it's a model object
            // invalidate the cache for this single object
            CommonGeolocalisationN1Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN1Peer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonGeolocalisationN1Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN1Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonGeolocalisationN1Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonGeolocalisationN1 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonGeolocalisationN1 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonGeolocalisationN1Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonGeolocalisationN1Peer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonGeolocalisationN1Peer::DATABASE_NAME, CommonGeolocalisationN1Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN1
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonGeolocalisationN1Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);
        $criteria->add(CommonGeolocalisationN1Peer::ID, $pk);

        $v = CommonGeolocalisationN1Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN1[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN1Peer::ID, $pks, Criteria::IN);
            $objs = CommonGeolocalisationN1Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonGeolocalisationN1Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonGeolocalisationN1Peer::buildTableMap();

