<?php


/**
 * Base static class for performing query and update operations on the 'exec_historique_prix' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecHistoriquePrixPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_historique_prix';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecHistoriquePrix';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecHistoriquePrixTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id field */
    const ID = 'exec_historique_prix.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_historique_prix.id_contrat';

    /** the column name for the id_prix field */
    const ID_PRIX = 'exec_historique_prix.id_prix';

    /** the column name for the id_avenant field */
    const ID_AVENANT = 'exec_historique_prix.id_avenant';

    /** the column name for the numero field */
    const NUMERO = 'exec_historique_prix.numero';

    /** the column name for the intitule field */
    const INTITULE = 'exec_historique_prix.intitule';

    /** the column name for the unite field */
    const UNITE = 'exec_historique_prix.unite';

    /** the column name for the quantite field */
    const QUANTITE = 'exec_historique_prix.quantite';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'exec_historique_prix.prix_unitaire';

    /** the column name for the prix_ht field */
    const PRIX_HT = 'exec_historique_prix.prix_ht';

    /** the column name for the taux_tva field */
    const TAUX_TVA = 'exec_historique_prix.taux_tva';

    /** the column name for the prix_ttc field */
    const PRIX_TTC = 'exec_historique_prix.prix_ttc';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_historique_prix.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_historique_prix.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_historique_prix.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_historique_prix.id_agent_modif';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecHistoriquePrix objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecHistoriquePrix[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecHistoriquePrixPeer::$fieldNames[CommonExecHistoriquePrixPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'IdPrix', 'IdAvenant', 'Numero', 'Intitule', 'Unite', 'Quantite', 'PrixUnitaire', 'PrixHt', 'TauxTva', 'PrixTtc', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'idPrix', 'idAvenant', 'numero', 'intitule', 'unite', 'quantite', 'prixUnitaire', 'prixHt', 'tauxTva', 'prixTtc', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', ),
        BasePeer::TYPE_COLNAME => array (CommonExecHistoriquePrixPeer::ID, CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecHistoriquePrixPeer::NUMERO, CommonExecHistoriquePrixPeer::INTITULE, CommonExecHistoriquePrixPeer::UNITE, CommonExecHistoriquePrixPeer::QUANTITE, CommonExecHistoriquePrixPeer::PRIX_UNITAIRE, CommonExecHistoriquePrixPeer::PRIX_HT, CommonExecHistoriquePrixPeer::TAUX_TVA, CommonExecHistoriquePrixPeer::PRIX_TTC, CommonExecHistoriquePrixPeer::DATE_CREA, CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonExecHistoriquePrixPeer::DATE_MODIF, CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'ID_PRIX', 'ID_AVENANT', 'NUMERO', 'INTITULE', 'UNITE', 'QUANTITE', 'PRIX_UNITAIRE', 'PRIX_HT', 'TAUX_TVA', 'PRIX_TTC', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'id_prix', 'id_avenant', 'numero', 'intitule', 'unite', 'quantite', 'prix_unitaire', 'prix_ht', 'taux_tva', 'prix_ttc', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecHistoriquePrixPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'IdPrix' => 2, 'IdAvenant' => 3, 'Numero' => 4, 'Intitule' => 5, 'Unite' => 6, 'Quantite' => 7, 'PrixUnitaire' => 8, 'PrixHt' => 9, 'TauxTva' => 10, 'PrixTtc' => 11, 'DateCrea' => 12, 'IdAgentCrea' => 13, 'DateModif' => 14, 'IdAgentModif' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'idPrix' => 2, 'idAvenant' => 3, 'numero' => 4, 'intitule' => 5, 'unite' => 6, 'quantite' => 7, 'prixUnitaire' => 8, 'prixHt' => 9, 'tauxTva' => 10, 'prixTtc' => 11, 'dateCrea' => 12, 'idAgentCrea' => 13, 'dateModif' => 14, 'idAgentModif' => 15, ),
        BasePeer::TYPE_COLNAME => array (CommonExecHistoriquePrixPeer::ID => 0, CommonExecHistoriquePrixPeer::ID_CONTRAT => 1, CommonExecHistoriquePrixPeer::ID_PRIX => 2, CommonExecHistoriquePrixPeer::ID_AVENANT => 3, CommonExecHistoriquePrixPeer::NUMERO => 4, CommonExecHistoriquePrixPeer::INTITULE => 5, CommonExecHistoriquePrixPeer::UNITE => 6, CommonExecHistoriquePrixPeer::QUANTITE => 7, CommonExecHistoriquePrixPeer::PRIX_UNITAIRE => 8, CommonExecHistoriquePrixPeer::PRIX_HT => 9, CommonExecHistoriquePrixPeer::TAUX_TVA => 10, CommonExecHistoriquePrixPeer::PRIX_TTC => 11, CommonExecHistoriquePrixPeer::DATE_CREA => 12, CommonExecHistoriquePrixPeer::ID_AGENT_CREA => 13, CommonExecHistoriquePrixPeer::DATE_MODIF => 14, CommonExecHistoriquePrixPeer::ID_AGENT_MODIF => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'ID_PRIX' => 2, 'ID_AVENANT' => 3, 'NUMERO' => 4, 'INTITULE' => 5, 'UNITE' => 6, 'QUANTITE' => 7, 'PRIX_UNITAIRE' => 8, 'PRIX_HT' => 9, 'TAUX_TVA' => 10, 'PRIX_TTC' => 11, 'DATE_CREA' => 12, 'ID_AGENT_CREA' => 13, 'DATE_MODIF' => 14, 'ID_AGENT_MODIF' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'id_prix' => 2, 'id_avenant' => 3, 'numero' => 4, 'intitule' => 5, 'unite' => 6, 'quantite' => 7, 'prix_unitaire' => 8, 'prix_ht' => 9, 'taux_tva' => 10, 'prix_ttc' => 11, 'date_crea' => 12, 'id_agent_crea' => 13, 'date_modif' => 14, 'id_agent_modif' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = CommonExecHistoriquePrixPeer::getFieldNames($toType);
        $key = isset(CommonExecHistoriquePrixPeer::$fieldKeys[$fromType][$name]) ? CommonExecHistoriquePrixPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecHistoriquePrixPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecHistoriquePrixPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecHistoriquePrixPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecHistoriquePrixPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecHistoriquePrixPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID_PRIX);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID_AVENANT);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::INTITULE);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::UNITE);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::QUANTITE);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::PRIX_HT);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::TAUX_TVA);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::PRIX_TTC);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_prix');
            $criteria->addSelectColumn($alias . '.id_avenant');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.prix_ht');
            $criteria->addSelectColumn($alias . '.taux_tva');
            $criteria->addSelectColumn($alias . '.prix_ttc');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecHistoriquePrix
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecHistoriquePrixPeer::doSelect($critcopy, $con);
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
        return CommonExecHistoriquePrixPeer::populateObjects(CommonExecHistoriquePrixPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

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
     * @param      CommonExecHistoriquePrix $obj A CommonExecHistoriquePrix object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecHistoriquePrixPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecHistoriquePrix object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecHistoriquePrix) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecHistoriquePrix object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecHistoriquePrixPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecHistoriquePrix Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecHistoriquePrixPeer::$instances[$key])) {
                return CommonExecHistoriquePrixPeer::$instances[$key];
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
        foreach (CommonExecHistoriquePrixPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecHistoriquePrixPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_historique_prix
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
        $cls = CommonExecHistoriquePrixPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecHistoriquePrixPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecHistoriquePrix object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecHistoriquePrixPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecHistoriquePrixPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecHistoriquePrixPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgentRelatedByIdAgentCrea table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentRelatedByIdAgentCrea(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentRelatedByIdAgentModif table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentRelatedByIdAgentModif(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentRelatedByIdAgentCrea(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentCrea($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentRelatedByIdAgentModif(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentModif($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with their CommonExecAvenant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecAvenant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        CommonExecAvenantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecHistoriquePrix) to $obj2 (CommonExecAvenant)
                $obj2->addCommonExecHistoriquePrix($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecHistoriquePrix) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecHistoriquePrix($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with their CommonExecPrix objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecPrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;
        CommonExecPrixPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecHistoriquePrix) to $obj2 (CommonExecPrix)
                $obj2->addCommonExecHistoriquePrix($obj1);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonAgent rows

            $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentCrea($obj1);
            } // if joined row not null

            // Add objects for joined CommonAgent rows

            $key3 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonAgentPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonAgentPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecHistoriquePrixRelatedByIdAgentModif($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecAvenant rows

            $key4 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecAvenantPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecAvenantPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecAvenantPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecAvenant)
                $obj4->addCommonExecHistoriquePrix($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecContrat rows

            $key5 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = CommonExecContratPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecContratPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj5 (CommonExecContrat)
                $obj5->addCommonExecHistoriquePrix($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecPrix rows

            $key6 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = CommonExecPrixPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = CommonExecPrixPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommonExecPrixPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj6 (CommonExecPrix)
                $obj6->addCommonExecHistoriquePrix($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgentRelatedByIdAgentCrea table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentRelatedByIdAgentCrea(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentRelatedByIdAgentModif table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentRelatedByIdAgentModif(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects except CommonAgentRelatedByIdAgentCrea.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentRelatedByIdAgentCrea(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonExecAvenant)
                $obj2->addCommonExecHistoriquePrix($obj1);

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

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key4 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecPrixPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecPrixPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects except CommonAgentRelatedByIdAgentModif.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentRelatedByIdAgentModif(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonExecAvenant)
                $obj2->addCommonExecHistoriquePrix($obj1);

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

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key4 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecPrixPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecPrixPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects except CommonExecAvenant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
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
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonAgent rows

                $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentCrea($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgent rows

                $key3 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonAgentPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecHistoriquePrixRelatedByIdAgentModif($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecContrat rows

                $key4 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecContratPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecContratPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecContrat)
                $obj4->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key5 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = CommonExecPrixPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecPrixPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj5 (CommonExecPrix)
                $obj5->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
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
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonAgent rows

                $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentCrea($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgent rows

                $key3 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonAgentPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecHistoriquePrixRelatedByIdAgentModif($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecAvenant rows

                $key4 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecAvenantPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecAvenantPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecAvenantPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecAvenant)
                $obj4->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPrix rows

                $key5 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = CommonExecPrixPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = CommonExecPrixPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecPrixPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj5 (CommonExecPrix)
                $obj5->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecHistoriquePrix objects pre-filled with all related objects except CommonExecPrix.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecHistoriquePrix objects.
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
            $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        }

        CommonExecHistoriquePrixPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecHistoriquePrixPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_AVENANT, CommonExecAvenantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecHistoriquePrixPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecHistoriquePrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecHistoriquePrixPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecHistoriquePrixPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecHistoriquePrixPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonAgent rows

                $key2 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonAgentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecHistoriquePrixRelatedByIdAgentCrea($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgent rows

                $key3 = CommonAgentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonAgentPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonAgentPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecHistoriquePrixRelatedByIdAgentModif($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecAvenant rows

                $key4 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecAvenantPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecAvenantPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecAvenantPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj4 (CommonExecAvenant)
                $obj4->addCommonExecHistoriquePrix($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecContrat rows

                $key5 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = CommonExecContratPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecContratPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (CommonExecHistoriquePrix) to the collection in $obj5 (CommonExecContrat)
                $obj5->addCommonExecHistoriquePrix($obj1);

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
        return Propel::getDatabaseMap(CommonExecHistoriquePrixPeer::DATABASE_NAME)->getTable(CommonExecHistoriquePrixPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecHistoriquePrixPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecHistoriquePrixPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecHistoriquePrixTableMap());
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
        return CommonExecHistoriquePrixPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecHistoriquePrix or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecHistoriquePrix object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecHistoriquePrix object
        }

        if ($criteria->containsKey(CommonExecHistoriquePrixPeer::ID) && $criteria->keyContainsValue(CommonExecHistoriquePrixPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecHistoriquePrixPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecHistoriquePrix or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecHistoriquePrix object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecHistoriquePrixPeer::ID);
            $value = $criteria->remove(CommonExecHistoriquePrixPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecHistoriquePrixPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecHistoriquePrixPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecHistoriquePrix object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_historique_prix table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecHistoriquePrixPeer::TABLE_NAME, $con, CommonExecHistoriquePrixPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecHistoriquePrixPeer::clearInstancePool();
            CommonExecHistoriquePrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecHistoriquePrix or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecHistoriquePrix object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecHistoriquePrixPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecHistoriquePrix) { // it's a model object
            // invalidate the cache for this single object
            CommonExecHistoriquePrixPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecHistoriquePrixPeer::DATABASE_NAME);
            $criteria->add(CommonExecHistoriquePrixPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecHistoriquePrixPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecHistoriquePrixPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecHistoriquePrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecHistoriquePrix object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecHistoriquePrix $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecHistoriquePrixPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecHistoriquePrixPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecHistoriquePrixPeer::DATABASE_NAME, CommonExecHistoriquePrixPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecHistoriquePrix
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecHistoriquePrixPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecHistoriquePrixPeer::DATABASE_NAME);
        $criteria->add(CommonExecHistoriquePrixPeer::ID, $pk);

        $v = CommonExecHistoriquePrixPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecHistoriquePrix[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecHistoriquePrixPeer::DATABASE_NAME);
            $criteria->add(CommonExecHistoriquePrixPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecHistoriquePrixPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecHistoriquePrixPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecHistoriquePrixPeer::buildTableMap();

