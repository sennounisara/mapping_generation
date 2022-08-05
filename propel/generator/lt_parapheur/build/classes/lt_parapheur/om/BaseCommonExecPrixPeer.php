<?php


/**
 * Base static class for performing query and update operations on the 'exec_prix' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPrixPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_prix';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecPrix';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecPrixTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'exec_prix.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_prix.id_contrat';

    /** the column name for the numero field */
    const NUMERO = 'exec_prix.numero';

    /** the column name for the intitule field */
    const INTITULE = 'exec_prix.intitule';

    /** the column name for the unite field */
    const UNITE = 'exec_prix.unite';

    /** the column name for the quantite field */
    const QUANTITE = 'exec_prix.quantite';

    /** the column name for the quantite_min field */
    const QUANTITE_MIN = 'exec_prix.quantite_min';

    /** the column name for the quantite_max field */
    const QUANTITE_MAX = 'exec_prix.quantite_max';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'exec_prix.prix_unitaire';

    /** the column name for the prix_ht field */
    const PRIX_HT = 'exec_prix.prix_ht';

    /** the column name for the prix_ht_min field */
    const PRIX_HT_MIN = 'exec_prix.prix_ht_min';

    /** the column name for the prix_ht_max field */
    const PRIX_HT_MAX = 'exec_prix.prix_ht_max';

    /** the column name for the taux_tva field */
    const TAUX_TVA = 'exec_prix.taux_tva';

    /** the column name for the prix_ttc field */
    const PRIX_TTC = 'exec_prix.prix_ttc';

    /** the column name for the prix_ttc_min field */
    const PRIX_TTC_MIN = 'exec_prix.prix_ttc_min';

    /** the column name for the prix_ttc_max field */
    const PRIX_TTC_MAX = 'exec_prix.prix_ttc_max';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_prix.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_prix.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_prix.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_prix.id_agent_modif';

    /** the column name for the num_chapeau field */
    const NUM_CHAPEAU = 'exec_prix.num_chapeau';

    /** the column name for the prix_unitaire_max field */
    const PRIX_UNITAIRE_MAX = 'exec_prix.prix_unitaire_max';

    /** the column name for the prestation field */
    const PRESTATION = 'exec_prix.prestation';

    /** The enumerated values for the prestation field */
    const PRESTATION_0 = '0';
    const PRESTATION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecPrix objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecPrix[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPrixPeer::$fieldNames[CommonExecPrixPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'Numero', 'Intitule', 'Unite', 'Quantite', 'QuantiteMin', 'QuantiteMax', 'PrixUnitaire', 'PrixHt', 'PrixHtMin', 'PrixHtMax', 'TauxTva', 'PrixTtc', 'PrixTtcMin', 'PrixTtcMax', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', 'NumChapeau', 'PrixUnitaireMax', 'Prestation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'numero', 'intitule', 'unite', 'quantite', 'quantiteMin', 'quantiteMax', 'prixUnitaire', 'prixHt', 'prixHtMin', 'prixHtMax', 'tauxTva', 'prixTtc', 'prixTtcMin', 'prixTtcMax', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', 'numChapeau', 'prixUnitaireMax', 'prestation', ),
        BasePeer::TYPE_COLNAME => array (CommonExecPrixPeer::ID, CommonExecPrixPeer::ID_CONTRAT, CommonExecPrixPeer::NUMERO, CommonExecPrixPeer::INTITULE, CommonExecPrixPeer::UNITE, CommonExecPrixPeer::QUANTITE, CommonExecPrixPeer::QUANTITE_MIN, CommonExecPrixPeer::QUANTITE_MAX, CommonExecPrixPeer::PRIX_UNITAIRE, CommonExecPrixPeer::PRIX_HT, CommonExecPrixPeer::PRIX_HT_MIN, CommonExecPrixPeer::PRIX_HT_MAX, CommonExecPrixPeer::TAUX_TVA, CommonExecPrixPeer::PRIX_TTC, CommonExecPrixPeer::PRIX_TTC_MIN, CommonExecPrixPeer::PRIX_TTC_MAX, CommonExecPrixPeer::DATE_CREA, CommonExecPrixPeer::ID_AGENT_CREA, CommonExecPrixPeer::DATE_MODIF, CommonExecPrixPeer::ID_AGENT_MODIF, CommonExecPrixPeer::NUM_CHAPEAU, CommonExecPrixPeer::PRIX_UNITAIRE_MAX, CommonExecPrixPeer::PRESTATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'NUMERO', 'INTITULE', 'UNITE', 'QUANTITE', 'QUANTITE_MIN', 'QUANTITE_MAX', 'PRIX_UNITAIRE', 'PRIX_HT', 'PRIX_HT_MIN', 'PRIX_HT_MAX', 'TAUX_TVA', 'PRIX_TTC', 'PRIX_TTC_MIN', 'PRIX_TTC_MAX', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', 'NUM_CHAPEAU', 'PRIX_UNITAIRE_MAX', 'PRESTATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'numero', 'intitule', 'unite', 'quantite', 'quantite_min', 'quantite_max', 'prix_unitaire', 'prix_ht', 'prix_ht_min', 'prix_ht_max', 'taux_tva', 'prix_ttc', 'prix_ttc_min', 'prix_ttc_max', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', 'num_chapeau', 'prix_unitaire_max', 'prestation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPrixPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'Numero' => 2, 'Intitule' => 3, 'Unite' => 4, 'Quantite' => 5, 'QuantiteMin' => 6, 'QuantiteMax' => 7, 'PrixUnitaire' => 8, 'PrixHt' => 9, 'PrixHtMin' => 10, 'PrixHtMax' => 11, 'TauxTva' => 12, 'PrixTtc' => 13, 'PrixTtcMin' => 14, 'PrixTtcMax' => 15, 'DateCrea' => 16, 'IdAgentCrea' => 17, 'DateModif' => 18, 'IdAgentModif' => 19, 'NumChapeau' => 20, 'PrixUnitaireMax' => 21, 'Prestation' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'numero' => 2, 'intitule' => 3, 'unite' => 4, 'quantite' => 5, 'quantiteMin' => 6, 'quantiteMax' => 7, 'prixUnitaire' => 8, 'prixHt' => 9, 'prixHtMin' => 10, 'prixHtMax' => 11, 'tauxTva' => 12, 'prixTtc' => 13, 'prixTtcMin' => 14, 'prixTtcMax' => 15, 'dateCrea' => 16, 'idAgentCrea' => 17, 'dateModif' => 18, 'idAgentModif' => 19, 'numChapeau' => 20, 'prixUnitaireMax' => 21, 'prestation' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonExecPrixPeer::ID => 0, CommonExecPrixPeer::ID_CONTRAT => 1, CommonExecPrixPeer::NUMERO => 2, CommonExecPrixPeer::INTITULE => 3, CommonExecPrixPeer::UNITE => 4, CommonExecPrixPeer::QUANTITE => 5, CommonExecPrixPeer::QUANTITE_MIN => 6, CommonExecPrixPeer::QUANTITE_MAX => 7, CommonExecPrixPeer::PRIX_UNITAIRE => 8, CommonExecPrixPeer::PRIX_HT => 9, CommonExecPrixPeer::PRIX_HT_MIN => 10, CommonExecPrixPeer::PRIX_HT_MAX => 11, CommonExecPrixPeer::TAUX_TVA => 12, CommonExecPrixPeer::PRIX_TTC => 13, CommonExecPrixPeer::PRIX_TTC_MIN => 14, CommonExecPrixPeer::PRIX_TTC_MAX => 15, CommonExecPrixPeer::DATE_CREA => 16, CommonExecPrixPeer::ID_AGENT_CREA => 17, CommonExecPrixPeer::DATE_MODIF => 18, CommonExecPrixPeer::ID_AGENT_MODIF => 19, CommonExecPrixPeer::NUM_CHAPEAU => 20, CommonExecPrixPeer::PRIX_UNITAIRE_MAX => 21, CommonExecPrixPeer::PRESTATION => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'NUMERO' => 2, 'INTITULE' => 3, 'UNITE' => 4, 'QUANTITE' => 5, 'QUANTITE_MIN' => 6, 'QUANTITE_MAX' => 7, 'PRIX_UNITAIRE' => 8, 'PRIX_HT' => 9, 'PRIX_HT_MIN' => 10, 'PRIX_HT_MAX' => 11, 'TAUX_TVA' => 12, 'PRIX_TTC' => 13, 'PRIX_TTC_MIN' => 14, 'PRIX_TTC_MAX' => 15, 'DATE_CREA' => 16, 'ID_AGENT_CREA' => 17, 'DATE_MODIF' => 18, 'ID_AGENT_MODIF' => 19, 'NUM_CHAPEAU' => 20, 'PRIX_UNITAIRE_MAX' => 21, 'PRESTATION' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'numero' => 2, 'intitule' => 3, 'unite' => 4, 'quantite' => 5, 'quantite_min' => 6, 'quantite_max' => 7, 'prix_unitaire' => 8, 'prix_ht' => 9, 'prix_ht_min' => 10, 'prix_ht_max' => 11, 'taux_tva' => 12, 'prix_ttc' => 13, 'prix_ttc_min' => 14, 'prix_ttc_max' => 15, 'date_crea' => 16, 'id_agent_crea' => 17, 'date_modif' => 18, 'id_agent_modif' => 19, 'num_chapeau' => 20, 'prix_unitaire_max' => 21, 'prestation' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecPrixPeer::PRESTATION => array(
            CommonExecPrixPeer::PRESTATION_0,
            CommonExecPrixPeer::PRESTATION_1,
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
        $toNames = CommonExecPrixPeer::getFieldNames($toType);
        $key = isset(CommonExecPrixPeer::$fieldKeys[$fromType][$name]) ? CommonExecPrixPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecPrixPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecPrixPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecPrixPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecPrixPeer::$enumValueSets;
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
        $valueSets = CommonExecPrixPeer::getValueSets();

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
        $values = CommonExecPrixPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonExecPrixPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecPrixPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecPrixPeer::ID);
            $criteria->addSelectColumn(CommonExecPrixPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecPrixPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecPrixPeer::INTITULE);
            $criteria->addSelectColumn(CommonExecPrixPeer::UNITE);
            $criteria->addSelectColumn(CommonExecPrixPeer::QUANTITE);
            $criteria->addSelectColumn(CommonExecPrixPeer::QUANTITE_MIN);
            $criteria->addSelectColumn(CommonExecPrixPeer::QUANTITE_MAX);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_HT);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_HT_MIN);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_HT_MAX);
            $criteria->addSelectColumn(CommonExecPrixPeer::TAUX_TVA);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_TTC);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_TTC_MIN);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_TTC_MAX);
            $criteria->addSelectColumn(CommonExecPrixPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecPrixPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecPrixPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecPrixPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecPrixPeer::NUM_CHAPEAU);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRIX_UNITAIRE_MAX);
            $criteria->addSelectColumn(CommonExecPrixPeer::PRESTATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.quantite_min');
            $criteria->addSelectColumn($alias . '.quantite_max');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.prix_ht');
            $criteria->addSelectColumn($alias . '.prix_ht_min');
            $criteria->addSelectColumn($alias . '.prix_ht_max');
            $criteria->addSelectColumn($alias . '.taux_tva');
            $criteria->addSelectColumn($alias . '.prix_ttc');
            $criteria->addSelectColumn($alias . '.prix_ttc_min');
            $criteria->addSelectColumn($alias . '.prix_ttc_max');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.num_chapeau');
            $criteria->addSelectColumn($alias . '.prix_unitaire_max');
            $criteria->addSelectColumn($alias . '.prestation');
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
        $criteria->setPrimaryTableName(CommonExecPrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPrix
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecPrixPeer::doSelect($critcopy, $con);
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
        return CommonExecPrixPeer::populateObjects(CommonExecPrixPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecPrixPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

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
     * @param      CommonExecPrix $obj A CommonExecPrix object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecPrixPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecPrix object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecPrix) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecPrix object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecPrixPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecPrix Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecPrixPeer::$instances[$key])) {
                return CommonExecPrixPeer::$instances[$key];
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
        foreach (CommonExecPrixPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecPrixPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_prix
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
        $cls = CommonExecPrixPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecPrixPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecPrixPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecPrix object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecPrixPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecPrixPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecPrixPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecPrix objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);
        }

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecPrix) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecPrix($obj1);

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
        $criteria->setPrimaryTableName(CommonExecPrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecPrix objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);
        }

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecContrat rows

            $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecPrix) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecPrix($obj1);
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
        return Propel::getDatabaseMap(CommonExecPrixPeer::DATABASE_NAME)->getTable(CommonExecPrixPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecPrixPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecPrixPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecPrixTableMap());
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
        return CommonExecPrixPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecPrix or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPrix object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecPrix object
        }

        if ($criteria->containsKey(CommonExecPrixPeer::ID) && $criteria->keyContainsValue(CommonExecPrixPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecPrixPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecPrix or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPrix object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecPrixPeer::ID);
            $value = $criteria->remove(CommonExecPrixPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecPrixPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecPrixPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecPrix object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_prix table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecPrixPeer::TABLE_NAME, $con, CommonExecPrixPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecPrixPeer::clearInstancePool();
            CommonExecPrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecPrix or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecPrix object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecPrixPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecPrix) { // it's a model object
            // invalidate the cache for this single object
            CommonExecPrixPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);
            $criteria->add(CommonExecPrixPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecPrixPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecPrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecPrix object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecPrix $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecPrixPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecPrixPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecPrixPeer::DATABASE_NAME, CommonExecPrixPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPrix
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecPrixPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);
        $criteria->add(CommonExecPrixPeer::ID, $pk);

        $v = CommonExecPrixPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPrix[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);
            $criteria->add(CommonExecPrixPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecPrixPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecPrixPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecPrixPeer::buildTableMap();

