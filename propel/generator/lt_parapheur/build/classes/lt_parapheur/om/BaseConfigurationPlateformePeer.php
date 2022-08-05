<?php


/**
 * Base static class for performing query and update operations on the 'configuration_plateforme' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationPlateformePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'configuration_plateforme';

    /** the related Propel class for this table */
    const OM_CLASS = 'ConfigurationPlateforme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ConfigurationPlateformeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'configuration_plateforme.id';

    /** the column name for the MODULE_DEMANDEUR_CONNU field */
    const MODULE_DEMANDEUR_CONNU = 'configuration_plateforme.MODULE_DEMANDEUR_CONNU';

    /** the column name for the AFFICHAGE_ONGLET_FORMAT_DEMANDE field */
    const AFFICHAGE_ONGLET_FORMAT_DEMANDE = 'configuration_plateforme.AFFICHAGE_ONGLET_FORMAT_DEMANDE';

    /** the column name for the AFFICHAGE_POPOVER_FORMAT_DEMANDE field */
    const AFFICHAGE_POPOVER_FORMAT_DEMANDE = 'configuration_plateforme.AFFICHAGE_POPOVER_FORMAT_DEMANDE';

    /** the column name for the AFFICHAGE_CRITERE_FORMAT_DEMANDE field */
    const AFFICHAGE_CRITERE_FORMAT_DEMANDE = 'configuration_plateforme.AFFICHAGE_CRITERE_FORMAT_DEMANDE';

    /** the column name for the AR_AGENT field */
    const AR_AGENT = 'configuration_plateforme.AR_AGENT';

    /** the column name for the AFFICHAGE_SOURCE_DEMANDE field */
    const AFFICHAGE_SOURCE_DEMANDE = 'configuration_plateforme.AFFICHAGE_SOURCE_DEMANDE';

    /** the column name for the MODULE_RECHERCHE_THEME_DEMANDEUR field */
    const MODULE_RECHERCHE_THEME_DEMANDEUR = 'configuration_plateforme.MODULE_RECHERCHE_THEME_DEMANDEUR';

    /** the column name for the VISIBLITIE_CONDITION_UTILISATION field */
    const VISIBLITIE_CONDITION_UTILISATION = 'configuration_plateforme.VISIBLITIE_CONDITION_UTILISATION';

    /** the column name for the CONDITION_UTILISATION_AR field */
    const CONDITION_UTILISATION_AR = 'configuration_plateforme.CONDITION_UTILISATION_AR';

    /** the column name for the CONDITION_UTILISATION_FR field */
    const CONDITION_UTILISATION_FR = 'configuration_plateforme.CONDITION_UTILISATION_FR';

    /** the column name for the VISIBILITE_TYPE_DEMANDE field */
    const VISIBILITE_TYPE_DEMANDE = 'configuration_plateforme.VISIBILITE_TYPE_DEMANDE';

    /** The enumerated values for the MODULE_DEMANDEUR_CONNU field */
    const MODULE_DEMANDEUR_CONNU_0 = '0';
    const MODULE_DEMANDEUR_CONNU_1 = '1';

    /** The enumerated values for the AFFICHAGE_ONGLET_FORMAT_DEMANDE field */
    const AFFICHAGE_ONGLET_FORMAT_DEMANDE_0 = '0';
    const AFFICHAGE_ONGLET_FORMAT_DEMANDE_1 = '1';

    /** The enumerated values for the AFFICHAGE_POPOVER_FORMAT_DEMANDE field */
    const AFFICHAGE_POPOVER_FORMAT_DEMANDE_0 = '0';
    const AFFICHAGE_POPOVER_FORMAT_DEMANDE_1 = '1';

    /** The enumerated values for the AFFICHAGE_CRITERE_FORMAT_DEMANDE field */
    const AFFICHAGE_CRITERE_FORMAT_DEMANDE_0 = '0';
    const AFFICHAGE_CRITERE_FORMAT_DEMANDE_1 = '1';

    /** The enumerated values for the AR_AGENT field */
    const AR_AGENT_0 = '0';
    const AR_AGENT_1 = '1';

    /** The enumerated values for the AFFICHAGE_SOURCE_DEMANDE field */
    const AFFICHAGE_SOURCE_DEMANDE_0 = '0';
    const AFFICHAGE_SOURCE_DEMANDE_1 = '1';

    /** The enumerated values for the MODULE_RECHERCHE_THEME_DEMANDEUR field */
    const MODULE_RECHERCHE_THEME_DEMANDEUR_0 = '0';
    const MODULE_RECHERCHE_THEME_DEMANDEUR_1 = '1';

    /** The enumerated values for the VISIBLITIE_CONDITION_UTILISATION field */
    const VISIBLITIE_CONDITION_UTILISATION_0 = '0';
    const VISIBLITIE_CONDITION_UTILISATION_1 = '1';

    /** The enumerated values for the VISIBILITE_TYPE_DEMANDE field */
    const VISIBILITE_TYPE_DEMANDE_0 = '0';
    const VISIBILITE_TYPE_DEMANDE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ConfigurationPlateforme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ConfigurationPlateforme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ConfigurationPlateformePeer::$fieldNames[ConfigurationPlateformePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'ModuleDemandeurConnu', 'AffichageOngletFormatDemande', 'AffichagePopoverFormatDemande', 'AffichageCritereFormatDemande', 'ArAgent', 'AffichageSourceDemande', 'ModuleRechercheThemeDemandeur', 'VisiblitieConditionUtilisation', 'ConditionUtilisationAr', 'ConditionUtilisationFr', 'VisibiliteTypeDemande', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'moduleDemandeurConnu', 'affichageOngletFormatDemande', 'affichagePopoverFormatDemande', 'affichageCritereFormatDemande', 'arAgent', 'affichageSourceDemande', 'moduleRechercheThemeDemandeur', 'visiblitieConditionUtilisation', 'conditionUtilisationAr', 'conditionUtilisationFr', 'visibiliteTypeDemande', ),
        BasePeer::TYPE_COLNAME => array (ConfigurationPlateformePeer::ID, ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU, ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE, ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE, ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE, ConfigurationPlateformePeer::AR_AGENT, ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE, ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR, ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION, ConfigurationPlateformePeer::CONDITION_UTILISATION_AR, ConfigurationPlateformePeer::CONDITION_UTILISATION_FR, ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'MODULE_DEMANDEUR_CONNU', 'AFFICHAGE_ONGLET_FORMAT_DEMANDE', 'AFFICHAGE_POPOVER_FORMAT_DEMANDE', 'AFFICHAGE_CRITERE_FORMAT_DEMANDE', 'AR_AGENT', 'AFFICHAGE_SOURCE_DEMANDE', 'MODULE_RECHERCHE_THEME_DEMANDEUR', 'VISIBLITIE_CONDITION_UTILISATION', 'CONDITION_UTILISATION_AR', 'CONDITION_UTILISATION_FR', 'VISIBILITE_TYPE_DEMANDE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'MODULE_DEMANDEUR_CONNU', 'AFFICHAGE_ONGLET_FORMAT_DEMANDE', 'AFFICHAGE_POPOVER_FORMAT_DEMANDE', 'AFFICHAGE_CRITERE_FORMAT_DEMANDE', 'AR_AGENT', 'AFFICHAGE_SOURCE_DEMANDE', 'MODULE_RECHERCHE_THEME_DEMANDEUR', 'VISIBLITIE_CONDITION_UTILISATION', 'CONDITION_UTILISATION_AR', 'CONDITION_UTILISATION_FR', 'VISIBILITE_TYPE_DEMANDE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ConfigurationPlateformePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ModuleDemandeurConnu' => 1, 'AffichageOngletFormatDemande' => 2, 'AffichagePopoverFormatDemande' => 3, 'AffichageCritereFormatDemande' => 4, 'ArAgent' => 5, 'AffichageSourceDemande' => 6, 'ModuleRechercheThemeDemandeur' => 7, 'VisiblitieConditionUtilisation' => 8, 'ConditionUtilisationAr' => 9, 'ConditionUtilisationFr' => 10, 'VisibiliteTypeDemande' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'moduleDemandeurConnu' => 1, 'affichageOngletFormatDemande' => 2, 'affichagePopoverFormatDemande' => 3, 'affichageCritereFormatDemande' => 4, 'arAgent' => 5, 'affichageSourceDemande' => 6, 'moduleRechercheThemeDemandeur' => 7, 'visiblitieConditionUtilisation' => 8, 'conditionUtilisationAr' => 9, 'conditionUtilisationFr' => 10, 'visibiliteTypeDemande' => 11, ),
        BasePeer::TYPE_COLNAME => array (ConfigurationPlateformePeer::ID => 0, ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU => 1, ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE => 2, ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE => 3, ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE => 4, ConfigurationPlateformePeer::AR_AGENT => 5, ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE => 6, ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR => 7, ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION => 8, ConfigurationPlateformePeer::CONDITION_UTILISATION_AR => 9, ConfigurationPlateformePeer::CONDITION_UTILISATION_FR => 10, ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'MODULE_DEMANDEUR_CONNU' => 1, 'AFFICHAGE_ONGLET_FORMAT_DEMANDE' => 2, 'AFFICHAGE_POPOVER_FORMAT_DEMANDE' => 3, 'AFFICHAGE_CRITERE_FORMAT_DEMANDE' => 4, 'AR_AGENT' => 5, 'AFFICHAGE_SOURCE_DEMANDE' => 6, 'MODULE_RECHERCHE_THEME_DEMANDEUR' => 7, 'VISIBLITIE_CONDITION_UTILISATION' => 8, 'CONDITION_UTILISATION_AR' => 9, 'CONDITION_UTILISATION_FR' => 10, 'VISIBILITE_TYPE_DEMANDE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'MODULE_DEMANDEUR_CONNU' => 1, 'AFFICHAGE_ONGLET_FORMAT_DEMANDE' => 2, 'AFFICHAGE_POPOVER_FORMAT_DEMANDE' => 3, 'AFFICHAGE_CRITERE_FORMAT_DEMANDE' => 4, 'AR_AGENT' => 5, 'AFFICHAGE_SOURCE_DEMANDE' => 6, 'MODULE_RECHERCHE_THEME_DEMANDEUR' => 7, 'VISIBLITIE_CONDITION_UTILISATION' => 8, 'CONDITION_UTILISATION_AR' => 9, 'CONDITION_UTILISATION_FR' => 10, 'VISIBILITE_TYPE_DEMANDE' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU => array(
            ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU_0,
            ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU_1,
        ),
        ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE => array(
            ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE_0,
            ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE_1,
        ),
        ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE => array(
            ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE_0,
            ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE_1,
        ),
        ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE => array(
            ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE_0,
            ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE_1,
        ),
        ConfigurationPlateformePeer::AR_AGENT => array(
            ConfigurationPlateformePeer::AR_AGENT_0,
            ConfigurationPlateformePeer::AR_AGENT_1,
        ),
        ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE => array(
            ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE_0,
            ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE_1,
        ),
        ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR => array(
            ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR_0,
            ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR_1,
        ),
        ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION => array(
            ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION_0,
            ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION_1,
        ),
        ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE => array(
            ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE_0,
            ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE_1,
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
        $toNames = ConfigurationPlateformePeer::getFieldNames($toType);
        $key = isset(ConfigurationPlateformePeer::$fieldKeys[$fromType][$name]) ? ConfigurationPlateformePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ConfigurationPlateformePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ConfigurationPlateformePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ConfigurationPlateformePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ConfigurationPlateformePeer::$enumValueSets;
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
        $valueSets = ConfigurationPlateformePeer::getValueSets();

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
        $values = ConfigurationPlateformePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ConfigurationPlateformePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ConfigurationPlateformePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ConfigurationPlateformePeer::ID);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::AR_AGENT);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::CONDITION_UTILISATION_AR);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::CONDITION_UTILISATION_FR);
            $criteria->addSelectColumn(ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.MODULE_DEMANDEUR_CONNU');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_ONGLET_FORMAT_DEMANDE');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_POPOVER_FORMAT_DEMANDE');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_CRITERE_FORMAT_DEMANDE');
            $criteria->addSelectColumn($alias . '.AR_AGENT');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_SOURCE_DEMANDE');
            $criteria->addSelectColumn($alias . '.MODULE_RECHERCHE_THEME_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.VISIBLITIE_CONDITION_UTILISATION');
            $criteria->addSelectColumn($alias . '.CONDITION_UTILISATION_AR');
            $criteria->addSelectColumn($alias . '.CONDITION_UTILISATION_FR');
            $criteria->addSelectColumn($alias . '.VISIBILITE_TYPE_DEMANDE');
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
        $criteria->setPrimaryTableName(ConfigurationPlateformePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConfigurationPlateformePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ConfigurationPlateformePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ConfigurationPlateforme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ConfigurationPlateformePeer::doSelect($critcopy, $con);
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
        return ConfigurationPlateformePeer::populateObjects(ConfigurationPlateformePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ConfigurationPlateformePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ConfigurationPlateformePeer::DATABASE_NAME);

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
     * @param      ConfigurationPlateforme $obj A ConfigurationPlateforme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ConfigurationPlateformePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ConfigurationPlateforme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ConfigurationPlateforme) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ConfigurationPlateforme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ConfigurationPlateformePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ConfigurationPlateforme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ConfigurationPlateformePeer::$instances[$key])) {
                return ConfigurationPlateformePeer::$instances[$key];
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
        foreach (ConfigurationPlateformePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ConfigurationPlateformePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to configuration_plateforme
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
        $cls = ConfigurationPlateformePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ConfigurationPlateformePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ConfigurationPlateformePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigurationPlateformePeer::addInstanceToPool($obj, $key);
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
     * @return array (ConfigurationPlateforme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ConfigurationPlateformePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ConfigurationPlateformePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ConfigurationPlateformePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigurationPlateformePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ConfigurationPlateformePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ConfigurationPlateformePeer::DATABASE_NAME)->getTable(ConfigurationPlateformePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseConfigurationPlateformePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseConfigurationPlateformePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ConfigurationPlateformeTableMap());
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
        return ConfigurationPlateformePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ConfigurationPlateforme or Criteria object.
     *
     * @param      mixed $values Criteria or ConfigurationPlateforme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ConfigurationPlateforme object
        }


        // Set the correct dbName
        $criteria->setDbName(ConfigurationPlateformePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ConfigurationPlateforme or Criteria object.
     *
     * @param      mixed $values Criteria or ConfigurationPlateforme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ConfigurationPlateformePeer::ID);
            $value = $criteria->remove(ConfigurationPlateformePeer::ID);
            if ($value) {
                $selectCriteria->add(ConfigurationPlateformePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ConfigurationPlateformePeer::TABLE_NAME);
            }

        } else { // $values is ConfigurationPlateforme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ConfigurationPlateformePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the configuration_plateforme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ConfigurationPlateformePeer::TABLE_NAME, $con, ConfigurationPlateformePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigurationPlateformePeer::clearInstancePool();
            ConfigurationPlateformePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigurationPlateforme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ConfigurationPlateforme object or primary key or array of primary keys
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
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ConfigurationPlateformePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ConfigurationPlateforme) { // it's a model object
            // invalidate the cache for this single object
            ConfigurationPlateformePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);
            $criteria->add(ConfigurationPlateformePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ConfigurationPlateformePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ConfigurationPlateformePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ConfigurationPlateformePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ConfigurationPlateforme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ConfigurationPlateforme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ConfigurationPlateformePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ConfigurationPlateformePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ConfigurationPlateformePeer::DATABASE_NAME, ConfigurationPlateformePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ConfigurationPlateforme
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ConfigurationPlateformePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);
        $criteria->add(ConfigurationPlateformePeer::ID, $pk);

        $v = ConfigurationPlateformePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ConfigurationPlateforme[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);
            $criteria->add(ConfigurationPlateformePeer::ID, $pks, Criteria::IN);
            $objs = ConfigurationPlateformePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseConfigurationPlateformePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseConfigurationPlateformePeer::buildTableMap();

