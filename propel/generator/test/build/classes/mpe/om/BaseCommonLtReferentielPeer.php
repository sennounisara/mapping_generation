<?php


/**
 * Base static class for performing query and update operations on the 'Lt_Referentiel' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonLtReferentielPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Lt_Referentiel';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonLtReferentiel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonLtReferentielTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id field */
    const ID = 'Lt_Referentiel.id';

    /** the column name for the code_libelle field */
    const CODE_LIBELLE = 'Lt_Referentiel.code_libelle';

    /** the column name for the entreprise field */
    const ENTREPRISE = 'Lt_Referentiel.entreprise';

    /** the column name for the consultation field */
    const CONSULTATION = 'Lt_Referentiel.consultation';

    /** the column name for the lot field */
    const LOT = 'Lt_Referentiel.lot';

    /** the column name for the agent field */
    const AGENT = 'Lt_Referentiel.agent';

    /** the column name for the obligatoire field */
    const OBLIGATOIRE = 'Lt_Referentiel.obligatoire';

    /** the column name for the type_search field */
    const TYPE_SEARCH = 'Lt_Referentiel.type_search';

    /** the column name for the pages field */
    const PAGES = 'Lt_Referentiel.pages';

    /** the column name for the path_config field */
    const PATH_CONFIG = 'Lt_Referentiel.path_config';

    /** the column name for the mode_affichage field */
    const MODE_AFFICHAGE = 'Lt_Referentiel.mode_affichage';

    /** the column name for the mode_modification field */
    const MODE_MODIFICATION = 'Lt_Referentiel.mode_modification';

    /** the column name for the mode_recherche field */
    const MODE_RECHERCHE = 'Lt_Referentiel.mode_recherche';

    /** the column name for the Type field */
    const TYPE = 'Lt_Referentiel.Type';

    /** the column name for the organismes field */
    const ORGANISMES = 'Lt_Referentiel.organismes';

    /** the column name for the libelle_info_bulle field */
    const LIBELLE_INFO_BULLE = 'Lt_Referentiel.libelle_info_bulle';

    /** the column name for the logo field */
    const LOGO = 'Lt_Referentiel.logo';

    /** the column name for the defaultValue field */
    const DEFAULTVALUE = 'Lt_Referentiel.defaultValue';

    /** the column name for the dependance_allotissement field */
    const DEPENDANCE_ALLOTISSEMENT = 'Lt_Referentiel.dependance_allotissement';

    /** the column name for the data_type field */
    const DATA_TYPE = 'Lt_Referentiel.data_type';

    /** The enumerated values for the entreprise field */
    const ENTREPRISE_0 = '0';
    const ENTREPRISE_1 = '1';

    /** The enumerated values for the consultation field */
    const CONSULTATION_0 = '0';
    const CONSULTATION_1 = '1';

    /** The enumerated values for the lot field */
    const LOT_0 = '0';
    const LOT_1 = '1';

    /** The enumerated values for the agent field */
    const AGENT_0 = '0';
    const AGENT_1 = '1';

    /** The enumerated values for the obligatoire field */
    const OBLIGATOIRE_0 = '0';
    const OBLIGATOIRE_1 = '1';

    /** The enumerated values for the type_search field */
    const TYPE_SEARCH_0 = '0';
    const TYPE_SEARCH_1 = '1';
    const TYPE_SEARCH_2 = '2';
    const TYPE_SEARCH_3 = '3';
    const TYPE_SEARCH_4 = '4';

    /** The enumerated values for the Type field */
    const TYPE_0 = '0';
    const TYPE_1 = '1';
    const TYPE_2 = '2';

    /** The enumerated values for the dependance_allotissement field */
    const DEPENDANCE_ALLOTISSEMENT_0 = '0';
    const DEPENDANCE_ALLOTISSEMENT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonLtReferentiel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonLtReferentiel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonLtReferentielPeer::$fieldNames[CommonLtReferentielPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'CodeLibelle', 'Entreprise', 'Consultation', 'Lot', 'Agent', 'Obligatoire', 'TypeSearch', 'Pages', 'PathConfig', 'ModeAffichage', 'ModeModification', 'ModeRecherche', 'Type', 'Organismes', 'LibelleInfoBulle', 'Logo', 'Defaultvalue', 'DependanceAllotissement', 'DataType', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'codeLibelle', 'entreprise', 'consultation', 'lot', 'agent', 'obligatoire', 'typeSearch', 'pages', 'pathConfig', 'modeAffichage', 'modeModification', 'modeRecherche', 'type', 'organismes', 'libelleInfoBulle', 'logo', 'defaultvalue', 'dependanceAllotissement', 'dataType', ),
        BasePeer::TYPE_COLNAME => array (CommonLtReferentielPeer::ID, CommonLtReferentielPeer::CODE_LIBELLE, CommonLtReferentielPeer::ENTREPRISE, CommonLtReferentielPeer::CONSULTATION, CommonLtReferentielPeer::LOT, CommonLtReferentielPeer::AGENT, CommonLtReferentielPeer::OBLIGATOIRE, CommonLtReferentielPeer::TYPE_SEARCH, CommonLtReferentielPeer::PAGES, CommonLtReferentielPeer::PATH_CONFIG, CommonLtReferentielPeer::MODE_AFFICHAGE, CommonLtReferentielPeer::MODE_MODIFICATION, CommonLtReferentielPeer::MODE_RECHERCHE, CommonLtReferentielPeer::TYPE, CommonLtReferentielPeer::ORGANISMES, CommonLtReferentielPeer::LIBELLE_INFO_BULLE, CommonLtReferentielPeer::LOGO, CommonLtReferentielPeer::DEFAULTVALUE, CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT, CommonLtReferentielPeer::DATA_TYPE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CODE_LIBELLE', 'ENTREPRISE', 'CONSULTATION', 'LOT', 'AGENT', 'OBLIGATOIRE', 'TYPE_SEARCH', 'PAGES', 'PATH_CONFIG', 'MODE_AFFICHAGE', 'MODE_MODIFICATION', 'MODE_RECHERCHE', 'TYPE', 'ORGANISMES', 'LIBELLE_INFO_BULLE', 'LOGO', 'DEFAULTVALUE', 'DEPENDANCE_ALLOTISSEMENT', 'DATA_TYPE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'code_libelle', 'entreprise', 'consultation', 'lot', 'agent', 'obligatoire', 'type_search', 'pages', 'path_config', 'mode_affichage', 'mode_modification', 'mode_recherche', 'Type', 'organismes', 'libelle_info_bulle', 'logo', 'defaultValue', 'dependance_allotissement', 'data_type', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonLtReferentielPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CodeLibelle' => 1, 'Entreprise' => 2, 'Consultation' => 3, 'Lot' => 4, 'Agent' => 5, 'Obligatoire' => 6, 'TypeSearch' => 7, 'Pages' => 8, 'PathConfig' => 9, 'ModeAffichage' => 10, 'ModeModification' => 11, 'ModeRecherche' => 12, 'Type' => 13, 'Organismes' => 14, 'LibelleInfoBulle' => 15, 'Logo' => 16, 'Defaultvalue' => 17, 'DependanceAllotissement' => 18, 'DataType' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'codeLibelle' => 1, 'entreprise' => 2, 'consultation' => 3, 'lot' => 4, 'agent' => 5, 'obligatoire' => 6, 'typeSearch' => 7, 'pages' => 8, 'pathConfig' => 9, 'modeAffichage' => 10, 'modeModification' => 11, 'modeRecherche' => 12, 'type' => 13, 'organismes' => 14, 'libelleInfoBulle' => 15, 'logo' => 16, 'defaultvalue' => 17, 'dependanceAllotissement' => 18, 'dataType' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonLtReferentielPeer::ID => 0, CommonLtReferentielPeer::CODE_LIBELLE => 1, CommonLtReferentielPeer::ENTREPRISE => 2, CommonLtReferentielPeer::CONSULTATION => 3, CommonLtReferentielPeer::LOT => 4, CommonLtReferentielPeer::AGENT => 5, CommonLtReferentielPeer::OBLIGATOIRE => 6, CommonLtReferentielPeer::TYPE_SEARCH => 7, CommonLtReferentielPeer::PAGES => 8, CommonLtReferentielPeer::PATH_CONFIG => 9, CommonLtReferentielPeer::MODE_AFFICHAGE => 10, CommonLtReferentielPeer::MODE_MODIFICATION => 11, CommonLtReferentielPeer::MODE_RECHERCHE => 12, CommonLtReferentielPeer::TYPE => 13, CommonLtReferentielPeer::ORGANISMES => 14, CommonLtReferentielPeer::LIBELLE_INFO_BULLE => 15, CommonLtReferentielPeer::LOGO => 16, CommonLtReferentielPeer::DEFAULTVALUE => 17, CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT => 18, CommonLtReferentielPeer::DATA_TYPE => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CODE_LIBELLE' => 1, 'ENTREPRISE' => 2, 'CONSULTATION' => 3, 'LOT' => 4, 'AGENT' => 5, 'OBLIGATOIRE' => 6, 'TYPE_SEARCH' => 7, 'PAGES' => 8, 'PATH_CONFIG' => 9, 'MODE_AFFICHAGE' => 10, 'MODE_MODIFICATION' => 11, 'MODE_RECHERCHE' => 12, 'TYPE' => 13, 'ORGANISMES' => 14, 'LIBELLE_INFO_BULLE' => 15, 'LOGO' => 16, 'DEFAULTVALUE' => 17, 'DEPENDANCE_ALLOTISSEMENT' => 18, 'DATA_TYPE' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'code_libelle' => 1, 'entreprise' => 2, 'consultation' => 3, 'lot' => 4, 'agent' => 5, 'obligatoire' => 6, 'type_search' => 7, 'pages' => 8, 'path_config' => 9, 'mode_affichage' => 10, 'mode_modification' => 11, 'mode_recherche' => 12, 'Type' => 13, 'organismes' => 14, 'libelle_info_bulle' => 15, 'logo' => 16, 'defaultValue' => 17, 'dependance_allotissement' => 18, 'data_type' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonLtReferentielPeer::ENTREPRISE => array(
            CommonLtReferentielPeer::ENTREPRISE_0,
            CommonLtReferentielPeer::ENTREPRISE_1,
        ),
        CommonLtReferentielPeer::CONSULTATION => array(
            CommonLtReferentielPeer::CONSULTATION_0,
            CommonLtReferentielPeer::CONSULTATION_1,
        ),
        CommonLtReferentielPeer::LOT => array(
            CommonLtReferentielPeer::LOT_0,
            CommonLtReferentielPeer::LOT_1,
        ),
        CommonLtReferentielPeer::AGENT => array(
            CommonLtReferentielPeer::AGENT_0,
            CommonLtReferentielPeer::AGENT_1,
        ),
        CommonLtReferentielPeer::OBLIGATOIRE => array(
            CommonLtReferentielPeer::OBLIGATOIRE_0,
            CommonLtReferentielPeer::OBLIGATOIRE_1,
        ),
        CommonLtReferentielPeer::TYPE_SEARCH => array(
            CommonLtReferentielPeer::TYPE_SEARCH_0,
            CommonLtReferentielPeer::TYPE_SEARCH_1,
            CommonLtReferentielPeer::TYPE_SEARCH_2,
            CommonLtReferentielPeer::TYPE_SEARCH_3,
            CommonLtReferentielPeer::TYPE_SEARCH_4,
        ),
        CommonLtReferentielPeer::TYPE => array(
            CommonLtReferentielPeer::TYPE_0,
            CommonLtReferentielPeer::TYPE_1,
            CommonLtReferentielPeer::TYPE_2,
        ),
        CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT => array(
            CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT_0,
            CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT_1,
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
        $toNames = CommonLtReferentielPeer::getFieldNames($toType);
        $key = isset(CommonLtReferentielPeer::$fieldKeys[$fromType][$name]) ? CommonLtReferentielPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonLtReferentielPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonLtReferentielPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonLtReferentielPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonLtReferentielPeer::$enumValueSets;
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
        $valueSets = CommonLtReferentielPeer::getValueSets();

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
        $values = CommonLtReferentielPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonLtReferentielPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonLtReferentielPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonLtReferentielPeer::ID);
            $criteria->addSelectColumn(CommonLtReferentielPeer::CODE_LIBELLE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::ENTREPRISE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::CONSULTATION);
            $criteria->addSelectColumn(CommonLtReferentielPeer::LOT);
            $criteria->addSelectColumn(CommonLtReferentielPeer::AGENT);
            $criteria->addSelectColumn(CommonLtReferentielPeer::OBLIGATOIRE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::TYPE_SEARCH);
            $criteria->addSelectColumn(CommonLtReferentielPeer::PAGES);
            $criteria->addSelectColumn(CommonLtReferentielPeer::PATH_CONFIG);
            $criteria->addSelectColumn(CommonLtReferentielPeer::MODE_AFFICHAGE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::MODE_MODIFICATION);
            $criteria->addSelectColumn(CommonLtReferentielPeer::MODE_RECHERCHE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::TYPE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::ORGANISMES);
            $criteria->addSelectColumn(CommonLtReferentielPeer::LIBELLE_INFO_BULLE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::LOGO);
            $criteria->addSelectColumn(CommonLtReferentielPeer::DEFAULTVALUE);
            $criteria->addSelectColumn(CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT);
            $criteria->addSelectColumn(CommonLtReferentielPeer::DATA_TYPE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.code_libelle');
            $criteria->addSelectColumn($alias . '.entreprise');
            $criteria->addSelectColumn($alias . '.consultation');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.agent');
            $criteria->addSelectColumn($alias . '.obligatoire');
            $criteria->addSelectColumn($alias . '.type_search');
            $criteria->addSelectColumn($alias . '.pages');
            $criteria->addSelectColumn($alias . '.path_config');
            $criteria->addSelectColumn($alias . '.mode_affichage');
            $criteria->addSelectColumn($alias . '.mode_modification');
            $criteria->addSelectColumn($alias . '.mode_recherche');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.organismes');
            $criteria->addSelectColumn($alias . '.libelle_info_bulle');
            $criteria->addSelectColumn($alias . '.logo');
            $criteria->addSelectColumn($alias . '.defaultValue');
            $criteria->addSelectColumn($alias . '.dependance_allotissement');
            $criteria->addSelectColumn($alias . '.data_type');
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
        $criteria->setPrimaryTableName(CommonLtReferentielPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonLtReferentielPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonLtReferentielPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLtReferentiel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonLtReferentielPeer::doSelect($critcopy, $con);
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
        return CommonLtReferentielPeer::populateObjects(CommonLtReferentielPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonLtReferentielPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonLtReferentielPeer::DATABASE_NAME);

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
     * @param      CommonLtReferentiel $obj A CommonLtReferentiel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonLtReferentielPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonLtReferentiel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonLtReferentiel) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonLtReferentiel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonLtReferentielPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonLtReferentiel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonLtReferentielPeer::$instances[$key])) {
                return CommonLtReferentielPeer::$instances[$key];
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
        foreach (CommonLtReferentielPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonLtReferentielPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Lt_Referentiel
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
        $cls = CommonLtReferentielPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonLtReferentielPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonLtReferentielPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonLtReferentielPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonLtReferentiel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonLtReferentielPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonLtReferentielPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonLtReferentielPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonLtReferentielPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonLtReferentielPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonLtReferentielPeer::DATABASE_NAME)->getTable(CommonLtReferentielPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonLtReferentielPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonLtReferentielPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonLtReferentielTableMap());
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
        return CommonLtReferentielPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonLtReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonLtReferentiel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonLtReferentiel object
        }

        if ($criteria->containsKey(CommonLtReferentielPeer::ID) && $criteria->keyContainsValue(CommonLtReferentielPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonLtReferentielPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonLtReferentielPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonLtReferentiel or Criteria object.
     *
     * @param      mixed $values Criteria or CommonLtReferentiel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonLtReferentielPeer::ID);
            $value = $criteria->remove(CommonLtReferentielPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonLtReferentielPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonLtReferentielPeer::TABLE_NAME);
            }

        } else { // $values is CommonLtReferentiel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonLtReferentielPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Lt_Referentiel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonLtReferentielPeer::TABLE_NAME, $con, CommonLtReferentielPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonLtReferentielPeer::clearInstancePool();
            CommonLtReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonLtReferentiel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonLtReferentiel object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonLtReferentielPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonLtReferentiel) { // it's a model object
            // invalidate the cache for this single object
            CommonLtReferentielPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);
            $criteria->add(CommonLtReferentielPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonLtReferentielPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonLtReferentielPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonLtReferentielPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonLtReferentiel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonLtReferentiel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonLtReferentielPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonLtReferentielPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonLtReferentielPeer::DATABASE_NAME, CommonLtReferentielPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonLtReferentiel
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonLtReferentielPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonLtReferentielPeer::ID, $pk);

        $v = CommonLtReferentielPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonLtReferentiel[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);
            $criteria->add(CommonLtReferentielPeer::ID, $pks, Criteria::IN);
            $objs = CommonLtReferentielPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonLtReferentielPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonLtReferentielPeer::buildTableMap();

