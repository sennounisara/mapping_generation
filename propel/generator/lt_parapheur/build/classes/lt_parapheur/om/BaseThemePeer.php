<?php


/**
 * Base static class for performing query and update operations on the 'theme' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseThemePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'theme';

    /** the related Propel class for this table */
    const OM_CLASS = 'Theme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ThemeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the ID_THEME field */
    const ID_THEME = 'theme.ID_THEME';

    /** the column name for the LIBELLE_THEME_FR field */
    const LIBELLE_THEME_FR = 'theme.LIBELLE_THEME_FR';

    /** the column name for the LIBELLE_THEME_AR field */
    const LIBELLE_THEME_AR = 'theme.LIBELLE_THEME_AR';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'theme.ID_ENTITE';

    /** the column name for the VISIBLE_TIERS field */
    const VISIBLE_TIERS = 'theme.VISIBLE_TIERS';

    /** the column name for the DATE_MODIFICATION field */
    const DATE_MODIFICATION = 'theme.DATE_MODIFICATION';

    /** the column name for the TYPE_THEME field */
    const TYPE_THEME = 'theme.TYPE_THEME';

    /** the column name for the ID_CIRCUIT_VALIDATION field */
    const ID_CIRCUIT_VALIDATION = 'theme.ID_CIRCUIT_VALIDATION';

    /** the column name for the ENTITES_AUTORISEES field */
    const ENTITES_AUTORISEES = 'theme.ENTITES_AUTORISEES';

    /** the column name for the CALCUL_ENTITES_AUTORISEES field */
    const CALCUL_ENTITES_AUTORISEES = 'theme.CALCUL_ENTITES_AUTORISEES';

    /** the column name for the TYPE_DEMANDE field */
    const TYPE_DEMANDE = 'theme.TYPE_DEMANDE';

    /** the column name for the ID_EXTERNE field */
    const ID_EXTERNE = 'theme.ID_EXTERNE';

    /** the column name for the AIDE_TEXT field */
    const AIDE_TEXT = 'theme.AIDE_TEXT';

    /** the column name for the DELAI field */
    const DELAI = 'theme.DELAI';

    /** the column name for the VISIBLE_DEMANDEUR field */
    const VISIBLE_DEMANDEUR = 'theme.VISIBLE_DEMANDEUR';

    /** the column name for the TYPE_DELAI field */
    const TYPE_DELAI = 'theme.TYPE_DELAI';

    /** The enumerated values for the VISIBLE_TIERS field */
    const VISIBLE_TIERS_0 = '0';
    const VISIBLE_TIERS_1 = '1';

    /** The enumerated values for the VISIBLE_DEMANDEUR field */
    const VISIBLE_DEMANDEUR_0 = '0';
    const VISIBLE_DEMANDEUR_1 = '1';

    /** The enumerated values for the TYPE_DELAI field */
    const TYPE_DELAI_1 = '1';
    const TYPE_DELAI_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Theme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Theme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ThemePeer::$fieldNames[ThemePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTheme', 'LibelleThemeFr', 'LibelleThemeAr', 'IdEntite', 'VisibleTiers', 'DateModification', 'TypeTheme', 'IdCircuitValidation', 'EntitesAutorisees', 'CalculEntitesAutorisees', 'TypeDemande', 'IdExterne', 'AideText', 'Delai', 'VisibleDemandeur', 'TypeDelai', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTheme', 'libelleThemeFr', 'libelleThemeAr', 'idEntite', 'visibleTiers', 'dateModification', 'typeTheme', 'idCircuitValidation', 'entitesAutorisees', 'calculEntitesAutorisees', 'typeDemande', 'idExterne', 'aideText', 'delai', 'visibleDemandeur', 'typeDelai', ),
        BasePeer::TYPE_COLNAME => array (ThemePeer::ID_THEME, ThemePeer::LIBELLE_THEME_FR, ThemePeer::LIBELLE_THEME_AR, ThemePeer::ID_ENTITE, ThemePeer::VISIBLE_TIERS, ThemePeer::DATE_MODIFICATION, ThemePeer::TYPE_THEME, ThemePeer::ID_CIRCUIT_VALIDATION, ThemePeer::ENTITES_AUTORISEES, ThemePeer::CALCUL_ENTITES_AUTORISEES, ThemePeer::TYPE_DEMANDE, ThemePeer::ID_EXTERNE, ThemePeer::AIDE_TEXT, ThemePeer::DELAI, ThemePeer::VISIBLE_DEMANDEUR, ThemePeer::TYPE_DELAI, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_THEME', 'LIBELLE_THEME_FR', 'LIBELLE_THEME_AR', 'ID_ENTITE', 'VISIBLE_TIERS', 'DATE_MODIFICATION', 'TYPE_THEME', 'ID_CIRCUIT_VALIDATION', 'ENTITES_AUTORISEES', 'CALCUL_ENTITES_AUTORISEES', 'TYPE_DEMANDE', 'ID_EXTERNE', 'AIDE_TEXT', 'DELAI', 'VISIBLE_DEMANDEUR', 'TYPE_DELAI', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_THEME', 'LIBELLE_THEME_FR', 'LIBELLE_THEME_AR', 'ID_ENTITE', 'VISIBLE_TIERS', 'DATE_MODIFICATION', 'TYPE_THEME', 'ID_CIRCUIT_VALIDATION', 'ENTITES_AUTORISEES', 'CALCUL_ENTITES_AUTORISEES', 'TYPE_DEMANDE', 'ID_EXTERNE', 'AIDE_TEXT', 'DELAI', 'VISIBLE_DEMANDEUR', 'TYPE_DELAI', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ThemePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTheme' => 0, 'LibelleThemeFr' => 1, 'LibelleThemeAr' => 2, 'IdEntite' => 3, 'VisibleTiers' => 4, 'DateModification' => 5, 'TypeTheme' => 6, 'IdCircuitValidation' => 7, 'EntitesAutorisees' => 8, 'CalculEntitesAutorisees' => 9, 'TypeDemande' => 10, 'IdExterne' => 11, 'AideText' => 12, 'Delai' => 13, 'VisibleDemandeur' => 14, 'TypeDelai' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTheme' => 0, 'libelleThemeFr' => 1, 'libelleThemeAr' => 2, 'idEntite' => 3, 'visibleTiers' => 4, 'dateModification' => 5, 'typeTheme' => 6, 'idCircuitValidation' => 7, 'entitesAutorisees' => 8, 'calculEntitesAutorisees' => 9, 'typeDemande' => 10, 'idExterne' => 11, 'aideText' => 12, 'delai' => 13, 'visibleDemandeur' => 14, 'typeDelai' => 15, ),
        BasePeer::TYPE_COLNAME => array (ThemePeer::ID_THEME => 0, ThemePeer::LIBELLE_THEME_FR => 1, ThemePeer::LIBELLE_THEME_AR => 2, ThemePeer::ID_ENTITE => 3, ThemePeer::VISIBLE_TIERS => 4, ThemePeer::DATE_MODIFICATION => 5, ThemePeer::TYPE_THEME => 6, ThemePeer::ID_CIRCUIT_VALIDATION => 7, ThemePeer::ENTITES_AUTORISEES => 8, ThemePeer::CALCUL_ENTITES_AUTORISEES => 9, ThemePeer::TYPE_DEMANDE => 10, ThemePeer::ID_EXTERNE => 11, ThemePeer::AIDE_TEXT => 12, ThemePeer::DELAI => 13, ThemePeer::VISIBLE_DEMANDEUR => 14, ThemePeer::TYPE_DELAI => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_THEME' => 0, 'LIBELLE_THEME_FR' => 1, 'LIBELLE_THEME_AR' => 2, 'ID_ENTITE' => 3, 'VISIBLE_TIERS' => 4, 'DATE_MODIFICATION' => 5, 'TYPE_THEME' => 6, 'ID_CIRCUIT_VALIDATION' => 7, 'ENTITES_AUTORISEES' => 8, 'CALCUL_ENTITES_AUTORISEES' => 9, 'TYPE_DEMANDE' => 10, 'ID_EXTERNE' => 11, 'AIDE_TEXT' => 12, 'DELAI' => 13, 'VISIBLE_DEMANDEUR' => 14, 'TYPE_DELAI' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_THEME' => 0, 'LIBELLE_THEME_FR' => 1, 'LIBELLE_THEME_AR' => 2, 'ID_ENTITE' => 3, 'VISIBLE_TIERS' => 4, 'DATE_MODIFICATION' => 5, 'TYPE_THEME' => 6, 'ID_CIRCUIT_VALIDATION' => 7, 'ENTITES_AUTORISEES' => 8, 'CALCUL_ENTITES_AUTORISEES' => 9, 'TYPE_DEMANDE' => 10, 'ID_EXTERNE' => 11, 'AIDE_TEXT' => 12, 'DELAI' => 13, 'VISIBLE_DEMANDEUR' => 14, 'TYPE_DELAI' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ThemePeer::VISIBLE_TIERS => array(
            ThemePeer::VISIBLE_TIERS_0,
            ThemePeer::VISIBLE_TIERS_1,
        ),
        ThemePeer::VISIBLE_DEMANDEUR => array(
            ThemePeer::VISIBLE_DEMANDEUR_0,
            ThemePeer::VISIBLE_DEMANDEUR_1,
        ),
        ThemePeer::TYPE_DELAI => array(
            ThemePeer::TYPE_DELAI_1,
            ThemePeer::TYPE_DELAI_2,
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
        $toNames = ThemePeer::getFieldNames($toType);
        $key = isset(ThemePeer::$fieldKeys[$fromType][$name]) ? ThemePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ThemePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ThemePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ThemePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ThemePeer::$enumValueSets;
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
        $valueSets = ThemePeer::getValueSets();

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
        $values = ThemePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ThemePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ThemePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ThemePeer::ID_THEME);
            $criteria->addSelectColumn(ThemePeer::LIBELLE_THEME_FR);
            $criteria->addSelectColumn(ThemePeer::LIBELLE_THEME_AR);
            $criteria->addSelectColumn(ThemePeer::ID_ENTITE);
            $criteria->addSelectColumn(ThemePeer::VISIBLE_TIERS);
            $criteria->addSelectColumn(ThemePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(ThemePeer::TYPE_THEME);
            $criteria->addSelectColumn(ThemePeer::ID_CIRCUIT_VALIDATION);
            $criteria->addSelectColumn(ThemePeer::ENTITES_AUTORISEES);
            $criteria->addSelectColumn(ThemePeer::CALCUL_ENTITES_AUTORISEES);
            $criteria->addSelectColumn(ThemePeer::TYPE_DEMANDE);
            $criteria->addSelectColumn(ThemePeer::ID_EXTERNE);
            $criteria->addSelectColumn(ThemePeer::AIDE_TEXT);
            $criteria->addSelectColumn(ThemePeer::DELAI);
            $criteria->addSelectColumn(ThemePeer::VISIBLE_DEMANDEUR);
            $criteria->addSelectColumn(ThemePeer::TYPE_DELAI);
        } else {
            $criteria->addSelectColumn($alias . '.ID_THEME');
            $criteria->addSelectColumn($alias . '.LIBELLE_THEME_FR');
            $criteria->addSelectColumn($alias . '.LIBELLE_THEME_AR');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.VISIBLE_TIERS');
            $criteria->addSelectColumn($alias . '.DATE_MODIFICATION');
            $criteria->addSelectColumn($alias . '.TYPE_THEME');
            $criteria->addSelectColumn($alias . '.ID_CIRCUIT_VALIDATION');
            $criteria->addSelectColumn($alias . '.ENTITES_AUTORISEES');
            $criteria->addSelectColumn($alias . '.CALCUL_ENTITES_AUTORISEES');
            $criteria->addSelectColumn($alias . '.TYPE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_EXTERNE');
            $criteria->addSelectColumn($alias . '.AIDE_TEXT');
            $criteria->addSelectColumn($alias . '.DELAI');
            $criteria->addSelectColumn($alias . '.VISIBLE_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.TYPE_DELAI');
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
        $criteria->setPrimaryTableName(ThemePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ThemePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ThemePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Theme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ThemePeer::doSelect($critcopy, $con);
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
        return ThemePeer::populateObjects(ThemePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ThemePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ThemePeer::DATABASE_NAME);

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
     * @param      Theme $obj A Theme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTheme();
            } // if key === null
            ThemePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Theme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Theme) {
                $key = (string) $value->getIdTheme();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Theme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ThemePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Theme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ThemePeer::$instances[$key])) {
                return ThemePeer::$instances[$key];
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
        foreach (ThemePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ThemePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to theme
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
        $cls = ThemePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ThemePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ThemePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ThemePeer::addInstanceToPool($obj, $key);
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
     * @return array (Theme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ThemePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ThemePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ThemePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ThemePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ThemePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ThemePeer::DATABASE_NAME)->getTable(ThemePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseThemePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseThemePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ThemeTableMap());
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
        return ThemePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Theme or Criteria object.
     *
     * @param      mixed $values Criteria or Theme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Theme object
        }

        if ($criteria->containsKey(ThemePeer::ID_THEME) && $criteria->keyContainsValue(ThemePeer::ID_THEME) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ThemePeer::ID_THEME.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ThemePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Theme or Criteria object.
     *
     * @param      mixed $values Criteria or Theme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ThemePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ThemePeer::ID_THEME);
            $value = $criteria->remove(ThemePeer::ID_THEME);
            if ($value) {
                $selectCriteria->add(ThemePeer::ID_THEME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ThemePeer::TABLE_NAME);
            }

        } else { // $values is Theme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ThemePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the theme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ThemePeer::TABLE_NAME, $con, ThemePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ThemePeer::clearInstancePool();
            ThemePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Theme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Theme object or primary key or array of primary keys
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
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ThemePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Theme) { // it's a model object
            // invalidate the cache for this single object
            ThemePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ThemePeer::DATABASE_NAME);
            $criteria->add(ThemePeer::ID_THEME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ThemePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ThemePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ThemePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Theme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Theme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ThemePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ThemePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ThemePeer::DATABASE_NAME, ThemePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Theme
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ThemePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ThemePeer::DATABASE_NAME);
        $criteria->add(ThemePeer::ID_THEME, $pk);

        $v = ThemePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Theme[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ThemePeer::DATABASE_NAME);
            $criteria->add(ThemePeer::ID_THEME, $pks, Criteria::IN);
            $objs = ThemePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseThemePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseThemePeer::buildTableMap();

