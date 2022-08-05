<?php


/**
 * Base static class for performing query and update operations on the 'exec_prix_avenant' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecPrixAvenantPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_prix_avenant';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecPrixAvenant';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecPrixAvenantTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id field */
    const ID = 'exec_prix_avenant.id';

    /** the column name for the id_avenant field */
    const ID_AVENANT = 'exec_prix_avenant.id_avenant';

    /** the column name for the id_prix field */
    const ID_PRIX = 'exec_prix_avenant.id_prix';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_prix_avenant.id_contrat';

    /** the column name for the numero field */
    const NUMERO = 'exec_prix_avenant.numero';

    /** the column name for the intitule field */
    const INTITULE = 'exec_prix_avenant.intitule';

    /** the column name for the unite field */
    const UNITE = 'exec_prix_avenant.unite';

    /** the column name for the ecart_quantite field */
    const ECART_QUANTITE = 'exec_prix_avenant.ecart_quantite';

    /** the column name for the quantite_av field */
    const QUANTITE_AV = 'exec_prix_avenant.quantite_av';

    /** the column name for the quantite_ap field */
    const QUANTITE_AP = 'exec_prix_avenant.quantite_ap';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'exec_prix_avenant.prix_unitaire';

    /** the column name for the prix_ht_av field */
    const PRIX_HT_AV = 'exec_prix_avenant.prix_ht_av';

    /** the column name for the prix_ht_ap field */
    const PRIX_HT_AP = 'exec_prix_avenant.prix_ht_ap';

    /** the column name for the taux_tva field */
    const TAUX_TVA = 'exec_prix_avenant.taux_tva';

    /** the column name for the prix_ttc_av field */
    const PRIX_TTC_AV = 'exec_prix_avenant.prix_ttc_av';

    /** the column name for the prix_ttc_ap field */
    const PRIX_TTC_AP = 'exec_prix_avenant.prix_ttc_ap';

    /** the column name for the quantite_max field */
    const QUANTITE_MAX = 'exec_prix_avenant.quantite_max';

    /** the column name for the prix_ht_min field */
    const PRIX_HT_MIN = 'exec_prix_avenant.prix_ht_min';

    /** the column name for the prix_ht_max field */
    const PRIX_HT_MAX = 'exec_prix_avenant.prix_ht_max';

    /** the column name for the prix_ttc_min field */
    const PRIX_TTC_MIN = 'exec_prix_avenant.prix_ttc_min';

    /** the column name for the prix_ttc_max field */
    const PRIX_TTC_MAX = 'exec_prix_avenant.prix_ttc_max';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecPrixAvenant objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecPrixAvenant[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPrixAvenantPeer::$fieldNames[CommonExecPrixAvenantPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdAvenant', 'IdPrix', 'IdContrat', 'Numero', 'Intitule', 'Unite', 'EcartQuantite', 'QuantiteAv', 'QuantiteAp', 'PrixUnitaire', 'PrixHtAv', 'PrixHtAp', 'TauxTva', 'PrixTtcAv', 'PrixTtcAp', 'QuantiteMax', 'PrixHtMin', 'PrixHtMax', 'PrixTtcMin', 'PrixTtcMax', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idAvenant', 'idPrix', 'idContrat', 'numero', 'intitule', 'unite', 'ecartQuantite', 'quantiteAv', 'quantiteAp', 'prixUnitaire', 'prixHtAv', 'prixHtAp', 'tauxTva', 'prixTtcAv', 'prixTtcAp', 'quantiteMax', 'prixHtMin', 'prixHtMax', 'prixTtcMin', 'prixTtcMax', ),
        BasePeer::TYPE_COLNAME => array (CommonExecPrixAvenantPeer::ID, CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecPrixAvenantPeer::NUMERO, CommonExecPrixAvenantPeer::INTITULE, CommonExecPrixAvenantPeer::UNITE, CommonExecPrixAvenantPeer::ECART_QUANTITE, CommonExecPrixAvenantPeer::QUANTITE_AV, CommonExecPrixAvenantPeer::QUANTITE_AP, CommonExecPrixAvenantPeer::PRIX_UNITAIRE, CommonExecPrixAvenantPeer::PRIX_HT_AV, CommonExecPrixAvenantPeer::PRIX_HT_AP, CommonExecPrixAvenantPeer::TAUX_TVA, CommonExecPrixAvenantPeer::PRIX_TTC_AV, CommonExecPrixAvenantPeer::PRIX_TTC_AP, CommonExecPrixAvenantPeer::QUANTITE_MAX, CommonExecPrixAvenantPeer::PRIX_HT_MIN, CommonExecPrixAvenantPeer::PRIX_HT_MAX, CommonExecPrixAvenantPeer::PRIX_TTC_MIN, CommonExecPrixAvenantPeer::PRIX_TTC_MAX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_AVENANT', 'ID_PRIX', 'ID_CONTRAT', 'NUMERO', 'INTITULE', 'UNITE', 'ECART_QUANTITE', 'QUANTITE_AV', 'QUANTITE_AP', 'PRIX_UNITAIRE', 'PRIX_HT_AV', 'PRIX_HT_AP', 'TAUX_TVA', 'PRIX_TTC_AV', 'PRIX_TTC_AP', 'QUANTITE_MAX', 'PRIX_HT_MIN', 'PRIX_HT_MAX', 'PRIX_TTC_MIN', 'PRIX_TTC_MAX', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_avenant', 'id_prix', 'id_contrat', 'numero', 'intitule', 'unite', 'ecart_quantite', 'quantite_av', 'quantite_ap', 'prix_unitaire', 'prix_ht_av', 'prix_ht_ap', 'taux_tva', 'prix_ttc_av', 'prix_ttc_ap', 'quantite_max', 'prix_ht_min', 'prix_ht_max', 'prix_ttc_min', 'prix_ttc_max', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPrixAvenantPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdAvenant' => 1, 'IdPrix' => 2, 'IdContrat' => 3, 'Numero' => 4, 'Intitule' => 5, 'Unite' => 6, 'EcartQuantite' => 7, 'QuantiteAv' => 8, 'QuantiteAp' => 9, 'PrixUnitaire' => 10, 'PrixHtAv' => 11, 'PrixHtAp' => 12, 'TauxTva' => 13, 'PrixTtcAv' => 14, 'PrixTtcAp' => 15, 'QuantiteMax' => 16, 'PrixHtMin' => 17, 'PrixHtMax' => 18, 'PrixTtcMin' => 19, 'PrixTtcMax' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idAvenant' => 1, 'idPrix' => 2, 'idContrat' => 3, 'numero' => 4, 'intitule' => 5, 'unite' => 6, 'ecartQuantite' => 7, 'quantiteAv' => 8, 'quantiteAp' => 9, 'prixUnitaire' => 10, 'prixHtAv' => 11, 'prixHtAp' => 12, 'tauxTva' => 13, 'prixTtcAv' => 14, 'prixTtcAp' => 15, 'quantiteMax' => 16, 'prixHtMin' => 17, 'prixHtMax' => 18, 'prixTtcMin' => 19, 'prixTtcMax' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonExecPrixAvenantPeer::ID => 0, CommonExecPrixAvenantPeer::ID_AVENANT => 1, CommonExecPrixAvenantPeer::ID_PRIX => 2, CommonExecPrixAvenantPeer::ID_CONTRAT => 3, CommonExecPrixAvenantPeer::NUMERO => 4, CommonExecPrixAvenantPeer::INTITULE => 5, CommonExecPrixAvenantPeer::UNITE => 6, CommonExecPrixAvenantPeer::ECART_QUANTITE => 7, CommonExecPrixAvenantPeer::QUANTITE_AV => 8, CommonExecPrixAvenantPeer::QUANTITE_AP => 9, CommonExecPrixAvenantPeer::PRIX_UNITAIRE => 10, CommonExecPrixAvenantPeer::PRIX_HT_AV => 11, CommonExecPrixAvenantPeer::PRIX_HT_AP => 12, CommonExecPrixAvenantPeer::TAUX_TVA => 13, CommonExecPrixAvenantPeer::PRIX_TTC_AV => 14, CommonExecPrixAvenantPeer::PRIX_TTC_AP => 15, CommonExecPrixAvenantPeer::QUANTITE_MAX => 16, CommonExecPrixAvenantPeer::PRIX_HT_MIN => 17, CommonExecPrixAvenantPeer::PRIX_HT_MAX => 18, CommonExecPrixAvenantPeer::PRIX_TTC_MIN => 19, CommonExecPrixAvenantPeer::PRIX_TTC_MAX => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_AVENANT' => 1, 'ID_PRIX' => 2, 'ID_CONTRAT' => 3, 'NUMERO' => 4, 'INTITULE' => 5, 'UNITE' => 6, 'ECART_QUANTITE' => 7, 'QUANTITE_AV' => 8, 'QUANTITE_AP' => 9, 'PRIX_UNITAIRE' => 10, 'PRIX_HT_AV' => 11, 'PRIX_HT_AP' => 12, 'TAUX_TVA' => 13, 'PRIX_TTC_AV' => 14, 'PRIX_TTC_AP' => 15, 'QUANTITE_MAX' => 16, 'PRIX_HT_MIN' => 17, 'PRIX_HT_MAX' => 18, 'PRIX_TTC_MIN' => 19, 'PRIX_TTC_MAX' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_avenant' => 1, 'id_prix' => 2, 'id_contrat' => 3, 'numero' => 4, 'intitule' => 5, 'unite' => 6, 'ecart_quantite' => 7, 'quantite_av' => 8, 'quantite_ap' => 9, 'prix_unitaire' => 10, 'prix_ht_av' => 11, 'prix_ht_ap' => 12, 'taux_tva' => 13, 'prix_ttc_av' => 14, 'prix_ttc_ap' => 15, 'quantite_max' => 16, 'prix_ht_min' => 17, 'prix_ht_max' => 18, 'prix_ttc_min' => 19, 'prix_ttc_max' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = CommonExecPrixAvenantPeer::getFieldNames($toType);
        $key = isset(CommonExecPrixAvenantPeer::$fieldKeys[$fromType][$name]) ? CommonExecPrixAvenantPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecPrixAvenantPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecPrixAvenantPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecPrixAvenantPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecPrixAvenantPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecPrixAvenantPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::ID);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::ID_AVENANT);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::ID_PRIX);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::INTITULE);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::UNITE);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::ECART_QUANTITE);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::QUANTITE_AV);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::QUANTITE_AP);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_HT_AV);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_HT_AP);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::TAUX_TVA);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_TTC_AV);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_TTC_AP);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::QUANTITE_MAX);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_HT_MIN);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_HT_MAX);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_TTC_MIN);
            $criteria->addSelectColumn(CommonExecPrixAvenantPeer::PRIX_TTC_MAX);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_avenant');
            $criteria->addSelectColumn($alias . '.id_prix');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.ecart_quantite');
            $criteria->addSelectColumn($alias . '.quantite_av');
            $criteria->addSelectColumn($alias . '.quantite_ap');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.prix_ht_av');
            $criteria->addSelectColumn($alias . '.prix_ht_ap');
            $criteria->addSelectColumn($alias . '.taux_tva');
            $criteria->addSelectColumn($alias . '.prix_ttc_av');
            $criteria->addSelectColumn($alias . '.prix_ttc_ap');
            $criteria->addSelectColumn($alias . '.quantite_max');
            $criteria->addSelectColumn($alias . '.prix_ht_min');
            $criteria->addSelectColumn($alias . '.prix_ht_max');
            $criteria->addSelectColumn($alias . '.prix_ttc_min');
            $criteria->addSelectColumn($alias . '.prix_ttc_max');
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
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPrixAvenant
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecPrixAvenantPeer::doSelect($critcopy, $con);
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
        return CommonExecPrixAvenantPeer::populateObjects(CommonExecPrixAvenantPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

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
     * @param      CommonExecPrixAvenant $obj A CommonExecPrixAvenant object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecPrixAvenantPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecPrixAvenant object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecPrixAvenant) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecPrixAvenant object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecPrixAvenantPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecPrixAvenant Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecPrixAvenantPeer::$instances[$key])) {
                return CommonExecPrixAvenantPeer::$instances[$key];
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
        foreach (CommonExecPrixAvenantPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecPrixAvenantPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_prix_avenant
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
        $cls = CommonExecPrixAvenantPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecPrixAvenantPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecPrixAvenantPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecPrixAvenant object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecPrixAvenantPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecPrixAvenantPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecPrixAvenantPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecAvenant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecAvenant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecPrix table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecPrix(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with their CommonExecAvenant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecAvenant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;
        CommonExecAvenantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecAvenantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to $obj2 (CommonExecAvenant)
                $obj2->addCommonExecPrixAvenant($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPrixAvenant) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecPrixAvenant($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with their CommonExecPrix objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecPrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;
        CommonExecPrixPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecPrixPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecPrixPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecPrixPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to $obj2 (CommonExecPrix)
                $obj2->addCommonExecPrixAvenant($obj1);

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
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecAvenant rows

            $key2 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecAvenantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj2 (CommonExecAvenant)
                $obj2->addCommonExecPrixAvenant($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecContrat rows

            $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecPrixAvenant($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecPrix rows

            $key4 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecPrixPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecPrixPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecPrixPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecPrixAvenant($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecAvenant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecAvenant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecPrix table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecPrix(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with all related objects except CommonExecAvenant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecAvenant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key3 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecPrixPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecPrixPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj3 (CommonExecPrix)
                $obj3->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecAvenant rows

                $key2 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecAvenantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj2 (CommonExecAvenant)
                $obj2->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key3 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecPrixPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecPrixPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj3 (CommonExecPrix)
                $obj3->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPrixAvenant objects pre-filled with all related objects except CommonExecPrix.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPrixAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecPrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);
        }

        CommonExecPrixAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPrixAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPrixAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPrixAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPrixAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPrixAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecAvenant rows

                $key2 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecAvenantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj2 (CommonExecAvenant)
                $obj2->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecContrat rows

                $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecPrixAvenant) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecPrixAvenant($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CommonExecPrixAvenantPeer::DATABASE_NAME)->getTable(CommonExecPrixAvenantPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecPrixAvenantPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecPrixAvenantPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecPrixAvenantTableMap());
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
        return CommonExecPrixAvenantPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecPrixAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPrixAvenant object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecPrixAvenant object
        }

        if ($criteria->containsKey(CommonExecPrixAvenantPeer::ID) && $criteria->keyContainsValue(CommonExecPrixAvenantPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecPrixAvenantPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecPrixAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPrixAvenant object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecPrixAvenantPeer::ID);
            $value = $criteria->remove(CommonExecPrixAvenantPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecPrixAvenantPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecPrixAvenantPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecPrixAvenant object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_prix_avenant table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecPrixAvenantPeer::TABLE_NAME, $con, CommonExecPrixAvenantPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecPrixAvenantPeer::clearInstancePool();
            CommonExecPrixAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecPrixAvenant or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecPrixAvenant object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecPrixAvenantPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecPrixAvenant) { // it's a model object
            // invalidate the cache for this single object
            CommonExecPrixAvenantPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);
            $criteria->add(CommonExecPrixAvenantPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecPrixAvenantPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPrixAvenantPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecPrixAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecPrixAvenant object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecPrixAvenant $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecPrixAvenantPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecPrixAvenantPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecPrixAvenantPeer::DATABASE_NAME, CommonExecPrixAvenantPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPrixAvenant
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecPrixAvenantPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecPrixAvenantPeer::ID, $pk);

        $v = CommonExecPrixAvenantPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPrixAvenant[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);
            $criteria->add(CommonExecPrixAvenantPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecPrixAvenantPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecPrixAvenantPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecPrixAvenantPeer::buildTableMap();

