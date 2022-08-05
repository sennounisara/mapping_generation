<?php


/**
 * Base static class for performing query and update operations on the 'GeolocalisationN2' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonGeolocalisationN2Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'GeolocalisationN2';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonGeolocalisationN2';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonGeolocalisationN2TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'GeolocalisationN2.id';

    /** the column name for the id_geolocalisationN1 field */
    const ID_GEOLOCALISATIONN1 = 'GeolocalisationN2.id_geolocalisationN1';

    /** the column name for the denomination1 field */
    const DENOMINATION1 = 'GeolocalisationN2.denomination1';

    /** the column name for the denomination2 field */
    const DENOMINATION2 = 'GeolocalisationN2.denomination2';

    /** the column name for the valeur_avec_sous_categorie field */
    const VALEUR_AVEC_SOUS_CATEGORIE = 'GeolocalisationN2.valeur_avec_sous_categorie';

    /** the column name for the actif field */
    const ACTIF = 'GeolocalisationN2.actif';

    /** the column name for the denomination1_ar field */
    const DENOMINATION1_AR = 'GeolocalisationN2.denomination1_ar';

    /** the column name for the denomination2_ar field */
    const DENOMINATION2_AR = 'GeolocalisationN2.denomination2_ar';

    /** the column name for the denomination1_fr field */
    const DENOMINATION1_FR = 'GeolocalisationN2.denomination1_fr';

    /** the column name for the denomination2_fr field */
    const DENOMINATION2_FR = 'GeolocalisationN2.denomination2_fr';

    /** the column name for the denomination1_en field */
    const DENOMINATION1_EN = 'GeolocalisationN2.denomination1_en';

    /** the column name for the denomination2_en field */
    const DENOMINATION2_EN = 'GeolocalisationN2.denomination2_en';

    /** the column name for the denomination1_es field */
    const DENOMINATION1_ES = 'GeolocalisationN2.denomination1_es';

    /** the column name for the denomination2_es field */
    const DENOMINATION2_ES = 'GeolocalisationN2.denomination2_es';

    /** the column name for the denomination1_su field */
    const DENOMINATION1_SU = 'GeolocalisationN2.denomination1_su';

    /** the column name for the denomination2_su field */
    const DENOMINATION2_SU = 'GeolocalisationN2.denomination2_su';

    /** the column name for the denomination1_du field */
    const DENOMINATION1_DU = 'GeolocalisationN2.denomination1_du';

    /** the column name for the denomination2_du field */
    const DENOMINATION2_DU = 'GeolocalisationN2.denomination2_du';

    /** the column name for the denomination1_cz field */
    const DENOMINATION1_CZ = 'GeolocalisationN2.denomination1_cz';

    /** the column name for the denomination2_cz field */
    const DENOMINATION2_CZ = 'GeolocalisationN2.denomination2_cz';

    /** the column name for the denomination1_it field */
    const DENOMINATION1_IT = 'GeolocalisationN2.denomination1_it';

    /** the column name for the denomination2_it field */
    const DENOMINATION2_IT = 'GeolocalisationN2.denomination2_it';

    /** the column name for the valeur_sub field */
    const VALEUR_SUB = 'GeolocalisationN2.valeur_sub';

    /** The enumerated values for the valeur_avec_sous_categorie field */
    const VALEUR_AVEC_SOUS_CATEGORIE_0 = '0';
    const VALEUR_AVEC_SOUS_CATEGORIE_1 = '1';

    /** The enumerated values for the actif field */
    const ACTIF_0 = '0';
    const ACTIF_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonGeolocalisationN2 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonGeolocalisationN2[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN2Peer::$fieldNames[CommonGeolocalisationN2Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdGeolocalisationn1', 'Denomination1', 'Denomination2', 'ValeurAvecSousCategorie', 'Actif', 'Denomination1Ar', 'Denomination2Ar', 'Denomination1Fr', 'Denomination2Fr', 'Denomination1En', 'Denomination2En', 'Denomination1Es', 'Denomination2Es', 'Denomination1Su', 'Denomination2Su', 'Denomination1Du', 'Denomination2Du', 'Denomination1Cz', 'Denomination2Cz', 'Denomination1It', 'Denomination2It', 'ValeurSub', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idGeolocalisationn1', 'denomination1', 'denomination2', 'valeurAvecSousCategorie', 'actif', 'denomination1Ar', 'denomination2Ar', 'denomination1Fr', 'denomination2Fr', 'denomination1En', 'denomination2En', 'denomination1Es', 'denomination2Es', 'denomination1Su', 'denomination2Su', 'denomination1Du', 'denomination2Du', 'denomination1Cz', 'denomination2Cz', 'denomination1It', 'denomination2It', 'valeurSub', ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN2Peer::ID, CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1, CommonGeolocalisationN2Peer::DENOMINATION1, CommonGeolocalisationN2Peer::DENOMINATION2, CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE, CommonGeolocalisationN2Peer::ACTIF, CommonGeolocalisationN2Peer::DENOMINATION1_AR, CommonGeolocalisationN2Peer::DENOMINATION2_AR, CommonGeolocalisationN2Peer::DENOMINATION1_FR, CommonGeolocalisationN2Peer::DENOMINATION2_FR, CommonGeolocalisationN2Peer::DENOMINATION1_EN, CommonGeolocalisationN2Peer::DENOMINATION2_EN, CommonGeolocalisationN2Peer::DENOMINATION1_ES, CommonGeolocalisationN2Peer::DENOMINATION2_ES, CommonGeolocalisationN2Peer::DENOMINATION1_SU, CommonGeolocalisationN2Peer::DENOMINATION2_SU, CommonGeolocalisationN2Peer::DENOMINATION1_DU, CommonGeolocalisationN2Peer::DENOMINATION2_DU, CommonGeolocalisationN2Peer::DENOMINATION1_CZ, CommonGeolocalisationN2Peer::DENOMINATION2_CZ, CommonGeolocalisationN2Peer::DENOMINATION1_IT, CommonGeolocalisationN2Peer::DENOMINATION2_IT, CommonGeolocalisationN2Peer::VALEUR_SUB, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_GEOLOCALISATIONN1', 'DENOMINATION1', 'DENOMINATION2', 'VALEUR_AVEC_SOUS_CATEGORIE', 'ACTIF', 'DENOMINATION1_AR', 'DENOMINATION2_AR', 'DENOMINATION1_FR', 'DENOMINATION2_FR', 'DENOMINATION1_EN', 'DENOMINATION2_EN', 'DENOMINATION1_ES', 'DENOMINATION2_ES', 'DENOMINATION1_SU', 'DENOMINATION2_SU', 'DENOMINATION1_DU', 'DENOMINATION2_DU', 'DENOMINATION1_CZ', 'DENOMINATION2_CZ', 'DENOMINATION1_IT', 'DENOMINATION2_IT', 'VALEUR_SUB', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_geolocalisationN1', 'denomination1', 'denomination2', 'valeur_avec_sous_categorie', 'actif', 'denomination1_ar', 'denomination2_ar', 'denomination1_fr', 'denomination2_fr', 'denomination1_en', 'denomination2_en', 'denomination1_es', 'denomination2_es', 'denomination1_su', 'denomination2_su', 'denomination1_du', 'denomination2_du', 'denomination1_cz', 'denomination2_cz', 'denomination1_it', 'denomination2_it', 'valeur_sub', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonGeolocalisationN2Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdGeolocalisationn1' => 1, 'Denomination1' => 2, 'Denomination2' => 3, 'ValeurAvecSousCategorie' => 4, 'Actif' => 5, 'Denomination1Ar' => 6, 'Denomination2Ar' => 7, 'Denomination1Fr' => 8, 'Denomination2Fr' => 9, 'Denomination1En' => 10, 'Denomination2En' => 11, 'Denomination1Es' => 12, 'Denomination2Es' => 13, 'Denomination1Su' => 14, 'Denomination2Su' => 15, 'Denomination1Du' => 16, 'Denomination2Du' => 17, 'Denomination1Cz' => 18, 'Denomination2Cz' => 19, 'Denomination1It' => 20, 'Denomination2It' => 21, 'ValeurSub' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idGeolocalisationn1' => 1, 'denomination1' => 2, 'denomination2' => 3, 'valeurAvecSousCategorie' => 4, 'actif' => 5, 'denomination1Ar' => 6, 'denomination2Ar' => 7, 'denomination1Fr' => 8, 'denomination2Fr' => 9, 'denomination1En' => 10, 'denomination2En' => 11, 'denomination1Es' => 12, 'denomination2Es' => 13, 'denomination1Su' => 14, 'denomination2Su' => 15, 'denomination1Du' => 16, 'denomination2Du' => 17, 'denomination1Cz' => 18, 'denomination2Cz' => 19, 'denomination1It' => 20, 'denomination2It' => 21, 'valeurSub' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonGeolocalisationN2Peer::ID => 0, CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1 => 1, CommonGeolocalisationN2Peer::DENOMINATION1 => 2, CommonGeolocalisationN2Peer::DENOMINATION2 => 3, CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE => 4, CommonGeolocalisationN2Peer::ACTIF => 5, CommonGeolocalisationN2Peer::DENOMINATION1_AR => 6, CommonGeolocalisationN2Peer::DENOMINATION2_AR => 7, CommonGeolocalisationN2Peer::DENOMINATION1_FR => 8, CommonGeolocalisationN2Peer::DENOMINATION2_FR => 9, CommonGeolocalisationN2Peer::DENOMINATION1_EN => 10, CommonGeolocalisationN2Peer::DENOMINATION2_EN => 11, CommonGeolocalisationN2Peer::DENOMINATION1_ES => 12, CommonGeolocalisationN2Peer::DENOMINATION2_ES => 13, CommonGeolocalisationN2Peer::DENOMINATION1_SU => 14, CommonGeolocalisationN2Peer::DENOMINATION2_SU => 15, CommonGeolocalisationN2Peer::DENOMINATION1_DU => 16, CommonGeolocalisationN2Peer::DENOMINATION2_DU => 17, CommonGeolocalisationN2Peer::DENOMINATION1_CZ => 18, CommonGeolocalisationN2Peer::DENOMINATION2_CZ => 19, CommonGeolocalisationN2Peer::DENOMINATION1_IT => 20, CommonGeolocalisationN2Peer::DENOMINATION2_IT => 21, CommonGeolocalisationN2Peer::VALEUR_SUB => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_GEOLOCALISATIONN1' => 1, 'DENOMINATION1' => 2, 'DENOMINATION2' => 3, 'VALEUR_AVEC_SOUS_CATEGORIE' => 4, 'ACTIF' => 5, 'DENOMINATION1_AR' => 6, 'DENOMINATION2_AR' => 7, 'DENOMINATION1_FR' => 8, 'DENOMINATION2_FR' => 9, 'DENOMINATION1_EN' => 10, 'DENOMINATION2_EN' => 11, 'DENOMINATION1_ES' => 12, 'DENOMINATION2_ES' => 13, 'DENOMINATION1_SU' => 14, 'DENOMINATION2_SU' => 15, 'DENOMINATION1_DU' => 16, 'DENOMINATION2_DU' => 17, 'DENOMINATION1_CZ' => 18, 'DENOMINATION2_CZ' => 19, 'DENOMINATION1_IT' => 20, 'DENOMINATION2_IT' => 21, 'VALEUR_SUB' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_geolocalisationN1' => 1, 'denomination1' => 2, 'denomination2' => 3, 'valeur_avec_sous_categorie' => 4, 'actif' => 5, 'denomination1_ar' => 6, 'denomination2_ar' => 7, 'denomination1_fr' => 8, 'denomination2_fr' => 9, 'denomination1_en' => 10, 'denomination2_en' => 11, 'denomination1_es' => 12, 'denomination2_es' => 13, 'denomination1_su' => 14, 'denomination2_su' => 15, 'denomination1_du' => 16, 'denomination2_du' => 17, 'denomination1_cz' => 18, 'denomination2_cz' => 19, 'denomination1_it' => 20, 'denomination2_it' => 21, 'valeur_sub' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE => array(
            CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE_0,
            CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE_1,
        ),
        CommonGeolocalisationN2Peer::ACTIF => array(
            CommonGeolocalisationN2Peer::ACTIF_0,
            CommonGeolocalisationN2Peer::ACTIF_1,
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
        $toNames = CommonGeolocalisationN2Peer::getFieldNames($toType);
        $key = isset(CommonGeolocalisationN2Peer::$fieldKeys[$fromType][$name]) ? CommonGeolocalisationN2Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonGeolocalisationN2Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonGeolocalisationN2Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonGeolocalisationN2Peer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonGeolocalisationN2Peer::$enumValueSets;
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
        $valueSets = CommonGeolocalisationN2Peer::getValueSets();

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
        $values = CommonGeolocalisationN2Peer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonGeolocalisationN2Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonGeolocalisationN2Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::ID);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::ACTIF);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_AR);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_FR);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_EN);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_ES);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_SU);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_DU);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_CZ);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION1_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::DENOMINATION2_IT);
            $criteria->addSelectColumn(CommonGeolocalisationN2Peer::VALEUR_SUB);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_geolocalisationN1');
            $criteria->addSelectColumn($alias . '.denomination1');
            $criteria->addSelectColumn($alias . '.denomination2');
            $criteria->addSelectColumn($alias . '.valeur_avec_sous_categorie');
            $criteria->addSelectColumn($alias . '.actif');
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
            $criteria->addSelectColumn($alias . '.valeur_sub');
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
        $criteria->setPrimaryTableName(CommonGeolocalisationN2Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonGeolocalisationN2Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonGeolocalisationN2Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGeolocalisationN2
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonGeolocalisationN2Peer::doSelect($critcopy, $con);
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
        return CommonGeolocalisationN2Peer::populateObjects(CommonGeolocalisationN2Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonGeolocalisationN2Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN2Peer::DATABASE_NAME);

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
     * @param      CommonGeolocalisationN2 $obj A CommonGeolocalisationN2 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonGeolocalisationN2Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonGeolocalisationN2 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonGeolocalisationN2) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonGeolocalisationN2 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonGeolocalisationN2Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonGeolocalisationN2 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonGeolocalisationN2Peer::$instances[$key])) {
                return CommonGeolocalisationN2Peer::$instances[$key];
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
        foreach (CommonGeolocalisationN2Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonGeolocalisationN2Peer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to GeolocalisationN2
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
        $cls = CommonGeolocalisationN2Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonGeolocalisationN2Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonGeolocalisationN2Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonGeolocalisationN2Peer::addInstanceToPool($obj, $key);
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
     * @return array (CommonGeolocalisationN2 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonGeolocalisationN2Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonGeolocalisationN2Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonGeolocalisationN2Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonGeolocalisationN2Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonGeolocalisationN2Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonGeolocalisationN2Peer::DATABASE_NAME)->getTable(CommonGeolocalisationN2Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonGeolocalisationN2Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonGeolocalisationN2Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonGeolocalisationN2TableMap());
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
        return CommonGeolocalisationN2Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonGeolocalisationN2 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN2 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonGeolocalisationN2 object
        }

        if ($criteria->containsKey(CommonGeolocalisationN2Peer::ID) && $criteria->keyContainsValue(CommonGeolocalisationN2Peer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonGeolocalisationN2Peer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN2Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonGeolocalisationN2 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN2 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonGeolocalisationN2Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonGeolocalisationN2Peer::ID);
            $value = $criteria->remove(CommonGeolocalisationN2Peer::ID);
            if ($value) {
                $selectCriteria->add(CommonGeolocalisationN2Peer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonGeolocalisationN2Peer::TABLE_NAME);
            }

        } else { // $values is CommonGeolocalisationN2 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN2Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the GeolocalisationN2 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonGeolocalisationN2Peer::TABLE_NAME, $con, CommonGeolocalisationN2Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonGeolocalisationN2Peer::clearInstancePool();
            CommonGeolocalisationN2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonGeolocalisationN2 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonGeolocalisationN2 object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonGeolocalisationN2Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonGeolocalisationN2) { // it's a model object
            // invalidate the cache for this single object
            CommonGeolocalisationN2Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonGeolocalisationN2Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN2Peer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonGeolocalisationN2Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonGeolocalisationN2Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonGeolocalisationN2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonGeolocalisationN2 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonGeolocalisationN2 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonGeolocalisationN2Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonGeolocalisationN2Peer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonGeolocalisationN2Peer::DATABASE_NAME, CommonGeolocalisationN2Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN2
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonGeolocalisationN2Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonGeolocalisationN2Peer::DATABASE_NAME);
        $criteria->add(CommonGeolocalisationN2Peer::ID, $pk);

        $v = CommonGeolocalisationN2Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonGeolocalisationN2[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonGeolocalisationN2Peer::DATABASE_NAME);
            $criteria->add(CommonGeolocalisationN2Peer::ID, $pks, Criteria::IN);
            $objs = CommonGeolocalisationN2Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonGeolocalisationN2Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonGeolocalisationN2Peer::buildTableMap();

