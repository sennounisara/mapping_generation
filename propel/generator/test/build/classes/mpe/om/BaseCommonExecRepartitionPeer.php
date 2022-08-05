<?php


/**
 * Base static class for performing query and update operations on the 'exec_repartition' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecRepartitionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_repartition';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecRepartition';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecRepartitionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the id field */
    const ID = 'exec_repartition.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_repartition.id_contrat';

    /** the column name for the id_facture field */
    const ID_FACTURE = 'exec_repartition.id_facture';

    /** the column name for the id_prix field */
    const ID_PRIX = 'exec_repartition.id_prix';

    /** the column name for the id_contractant field */
    const ID_CONTRACTANT = 'exec_repartition.id_contractant';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'exec_repartition.prix_unitaire';

    /** the column name for the taux_tva field */
    const TAUX_TVA = 'exec_repartition.taux_tva';

    /** the column name for the pourcentage_realise field */
    const POURCENTAGE_REALISE = 'exec_repartition.pourcentage_realise';

    /** the column name for the cumul_pourcent_realise field */
    const CUMUL_POURCENT_REALISE = 'exec_repartition.cumul_pourcent_realise';

    /** the column name for the montant_facture_ht field */
    const MONTANT_FACTURE_HT = 'exec_repartition.montant_facture_ht';

    /** the column name for the montant_facture_ttc field */
    const MONTANT_FACTURE_TTC = 'exec_repartition.montant_facture_ttc';

    /** the column name for the montant_paye_ht field */
    const MONTANT_PAYE_HT = 'exec_repartition.montant_paye_ht';

    /** the column name for the montant_paye_ttc field */
    const MONTANT_PAYE_TTC = 'exec_repartition.montant_paye_ttc';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_repartition.id_agent_crea';

    /** the column name for the id_entreprise_crea field */
    const ID_ENTREPRISE_CREA = 'exec_repartition.id_entreprise_crea';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_repartition.date_crea';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_repartition.id_agent_modif';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_repartition.date_modif';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecRepartition objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecRepartition[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecRepartitionPeer::$fieldNames[CommonExecRepartitionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'IdFacture', 'IdPrix', 'IdContractant', 'PrixUnitaire', 'TauxTva', 'PourcentageRealise', 'CumulPourcentRealise', 'MontantFactureHt', 'MontantFactureTtc', 'MontantPayeHt', 'MontantPayeTtc', 'IdAgentCrea', 'IdEntrepriseCrea', 'DateCrea', 'IdAgentModif', 'DateModif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'idFacture', 'idPrix', 'idContractant', 'prixUnitaire', 'tauxTva', 'pourcentageRealise', 'cumulPourcentRealise', 'montantFactureHt', 'montantFactureTtc', 'montantPayeHt', 'montantPayeTtc', 'idAgentCrea', 'idEntrepriseCrea', 'dateCrea', 'idAgentModif', 'dateModif', ),
        BasePeer::TYPE_COLNAME => array (CommonExecRepartitionPeer::ID, CommonExecRepartitionPeer::ID_CONTRAT, CommonExecRepartitionPeer::ID_FACTURE, CommonExecRepartitionPeer::ID_PRIX, CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecRepartitionPeer::PRIX_UNITAIRE, CommonExecRepartitionPeer::TAUX_TVA, CommonExecRepartitionPeer::POURCENTAGE_REALISE, CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE, CommonExecRepartitionPeer::MONTANT_FACTURE_HT, CommonExecRepartitionPeer::MONTANT_FACTURE_TTC, CommonExecRepartitionPeer::MONTANT_PAYE_HT, CommonExecRepartitionPeer::MONTANT_PAYE_TTC, CommonExecRepartitionPeer::ID_AGENT_CREA, CommonExecRepartitionPeer::ID_ENTREPRISE_CREA, CommonExecRepartitionPeer::DATE_CREA, CommonExecRepartitionPeer::ID_AGENT_MODIF, CommonExecRepartitionPeer::DATE_MODIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'ID_FACTURE', 'ID_PRIX', 'ID_CONTRACTANT', 'PRIX_UNITAIRE', 'TAUX_TVA', 'POURCENTAGE_REALISE', 'CUMUL_POURCENT_REALISE', 'MONTANT_FACTURE_HT', 'MONTANT_FACTURE_TTC', 'MONTANT_PAYE_HT', 'MONTANT_PAYE_TTC', 'ID_AGENT_CREA', 'ID_ENTREPRISE_CREA', 'DATE_CREA', 'ID_AGENT_MODIF', 'DATE_MODIF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'id_facture', 'id_prix', 'id_contractant', 'prix_unitaire', 'taux_tva', 'pourcentage_realise', 'cumul_pourcent_realise', 'montant_facture_ht', 'montant_facture_ttc', 'montant_paye_ht', 'montant_paye_ttc', 'id_agent_crea', 'id_entreprise_crea', 'date_crea', 'id_agent_modif', 'date_modif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecRepartitionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'IdFacture' => 2, 'IdPrix' => 3, 'IdContractant' => 4, 'PrixUnitaire' => 5, 'TauxTva' => 6, 'PourcentageRealise' => 7, 'CumulPourcentRealise' => 8, 'MontantFactureHt' => 9, 'MontantFactureTtc' => 10, 'MontantPayeHt' => 11, 'MontantPayeTtc' => 12, 'IdAgentCrea' => 13, 'IdEntrepriseCrea' => 14, 'DateCrea' => 15, 'IdAgentModif' => 16, 'DateModif' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'idFacture' => 2, 'idPrix' => 3, 'idContractant' => 4, 'prixUnitaire' => 5, 'tauxTva' => 6, 'pourcentageRealise' => 7, 'cumulPourcentRealise' => 8, 'montantFactureHt' => 9, 'montantFactureTtc' => 10, 'montantPayeHt' => 11, 'montantPayeTtc' => 12, 'idAgentCrea' => 13, 'idEntrepriseCrea' => 14, 'dateCrea' => 15, 'idAgentModif' => 16, 'dateModif' => 17, ),
        BasePeer::TYPE_COLNAME => array (CommonExecRepartitionPeer::ID => 0, CommonExecRepartitionPeer::ID_CONTRAT => 1, CommonExecRepartitionPeer::ID_FACTURE => 2, CommonExecRepartitionPeer::ID_PRIX => 3, CommonExecRepartitionPeer::ID_CONTRACTANT => 4, CommonExecRepartitionPeer::PRIX_UNITAIRE => 5, CommonExecRepartitionPeer::TAUX_TVA => 6, CommonExecRepartitionPeer::POURCENTAGE_REALISE => 7, CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE => 8, CommonExecRepartitionPeer::MONTANT_FACTURE_HT => 9, CommonExecRepartitionPeer::MONTANT_FACTURE_TTC => 10, CommonExecRepartitionPeer::MONTANT_PAYE_HT => 11, CommonExecRepartitionPeer::MONTANT_PAYE_TTC => 12, CommonExecRepartitionPeer::ID_AGENT_CREA => 13, CommonExecRepartitionPeer::ID_ENTREPRISE_CREA => 14, CommonExecRepartitionPeer::DATE_CREA => 15, CommonExecRepartitionPeer::ID_AGENT_MODIF => 16, CommonExecRepartitionPeer::DATE_MODIF => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'ID_FACTURE' => 2, 'ID_PRIX' => 3, 'ID_CONTRACTANT' => 4, 'PRIX_UNITAIRE' => 5, 'TAUX_TVA' => 6, 'POURCENTAGE_REALISE' => 7, 'CUMUL_POURCENT_REALISE' => 8, 'MONTANT_FACTURE_HT' => 9, 'MONTANT_FACTURE_TTC' => 10, 'MONTANT_PAYE_HT' => 11, 'MONTANT_PAYE_TTC' => 12, 'ID_AGENT_CREA' => 13, 'ID_ENTREPRISE_CREA' => 14, 'DATE_CREA' => 15, 'ID_AGENT_MODIF' => 16, 'DATE_MODIF' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'id_facture' => 2, 'id_prix' => 3, 'id_contractant' => 4, 'prix_unitaire' => 5, 'taux_tva' => 6, 'pourcentage_realise' => 7, 'cumul_pourcent_realise' => 8, 'montant_facture_ht' => 9, 'montant_facture_ttc' => 10, 'montant_paye_ht' => 11, 'montant_paye_ttc' => 12, 'id_agent_crea' => 13, 'id_entreprise_crea' => 14, 'date_crea' => 15, 'id_agent_modif' => 16, 'date_modif' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $toNames = CommonExecRepartitionPeer::getFieldNames($toType);
        $key = isset(CommonExecRepartitionPeer::$fieldKeys[$fromType][$name]) ? CommonExecRepartitionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecRepartitionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecRepartitionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecRepartitionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecRepartitionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecRepartitionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_FACTURE);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_PRIX);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_CONTRACTANT);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::TAUX_TVA);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::POURCENTAGE_REALISE);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::MONTANT_FACTURE_HT);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::MONTANT_PAYE_HT);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::MONTANT_PAYE_TTC);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecRepartitionPeer::DATE_MODIF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_facture');
            $criteria->addSelectColumn($alias . '.id_prix');
            $criteria->addSelectColumn($alias . '.id_contractant');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.taux_tva');
            $criteria->addSelectColumn($alias . '.pourcentage_realise');
            $criteria->addSelectColumn($alias . '.cumul_pourcent_realise');
            $criteria->addSelectColumn($alias . '.montant_facture_ht');
            $criteria->addSelectColumn($alias . '.montant_facture_ttc');
            $criteria->addSelectColumn($alias . '.montant_paye_ht');
            $criteria->addSelectColumn($alias . '.montant_paye_ttc');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.id_entreprise_crea');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.date_modif');
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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecRepartition
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecRepartitionPeer::doSelect($critcopy, $con);
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
        return CommonExecRepartitionPeer::populateObjects(CommonExecRepartitionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

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
     * @param      CommonExecRepartition $obj A CommonExecRepartition object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecRepartitionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecRepartition object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecRepartition) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecRepartition object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecRepartitionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecRepartition Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecRepartitionPeer::$instances[$key])) {
                return CommonExecRepartitionPeer::$instances[$key];
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
        foreach (CommonExecRepartitionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecRepartitionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_repartition
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
        $cls = CommonExecRepartitionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecRepartitionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecRepartitionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecRepartition object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecRepartitionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecRepartitionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecRepartitionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecRepartition objects pre-filled with their CommonExecContractant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContractantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecRepartition) to $obj2 (CommonExecContractant)
                $obj2->addCommonExecRepartition($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecRepartition) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecRepartition($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with their CommonExecFacture objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;
        CommonExecFacturePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecRepartition) to $obj2 (CommonExecFacture)
                $obj2->addCommonExecRepartition($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with their CommonExecPrix objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecPrix(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;
        CommonExecPrixPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecRepartition) to $obj2 (CommonExecPrix)
                $obj2->addCommonExecRepartition($obj1);

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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecRepartition objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecContractant rows

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecRepartition($obj1);
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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecRepartition($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecFacture rows

            $key4 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecFacturePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecFacturePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecFacturePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj4 (CommonExecFacture)
                $obj4->addCommonExecRepartition($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecPrix rows

            $key5 = CommonExecPrixPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = CommonExecPrixPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = CommonExecPrixPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecPrixPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj5 (CommonExecPrix)
                $obj5->addCommonExecRepartition($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecRepartitionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecRepartition objects pre-filled with all related objects except CommonExecContractant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecRepartition($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecFacture rows

                $key3 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecFacturePeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecFacturePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecFacturePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj3 (CommonExecFacture)
                $obj3->addCommonExecRepartition($obj1);

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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecRepartition($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
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
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecRepartition($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecFacture rows

                $key3 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecFacturePeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecFacturePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecFacturePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj3 (CommonExecFacture)
                $obj3->addCommonExecRepartition($obj1);

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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecRepartition($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with all related objects except CommonExecFacture.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPrixPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPrixPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_PRIX, CommonExecPrixPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecRepartition($obj1);

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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecRepartition($obj1);

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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj4 (CommonExecPrix)
                $obj4->addCommonExecRepartition($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecRepartition objects pre-filled with all related objects except CommonExecPrix.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecRepartition objects.
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
            $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);
        }

        CommonExecRepartitionPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecRepartitionPeer::ID_FACTURE, CommonExecFacturePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecRepartitionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecRepartitionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecRepartitionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecRepartitionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecRepartition($obj1);

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

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecRepartition($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecFacture rows

                $key4 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecFacturePeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecFacturePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecFacturePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecRepartition) to the collection in $obj4 (CommonExecFacture)
                $obj4->addCommonExecRepartition($obj1);

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
        return Propel::getDatabaseMap(CommonExecRepartitionPeer::DATABASE_NAME)->getTable(CommonExecRepartitionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecRepartitionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecRepartitionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecRepartitionTableMap());
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
        return CommonExecRepartitionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecRepartition or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecRepartition object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecRepartition object
        }

        if ($criteria->containsKey(CommonExecRepartitionPeer::ID) && $criteria->keyContainsValue(CommonExecRepartitionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecRepartitionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecRepartition or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecRepartition object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecRepartitionPeer::ID);
            $value = $criteria->remove(CommonExecRepartitionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecRepartitionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecRepartitionPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecRepartition object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_repartition table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecRepartitionPeer::TABLE_NAME, $con, CommonExecRepartitionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecRepartitionPeer::clearInstancePool();
            CommonExecRepartitionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecRepartition or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecRepartition object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecRepartitionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecRepartition) { // it's a model object
            // invalidate the cache for this single object
            CommonExecRepartitionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);
            $criteria->add(CommonExecRepartitionPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecRepartitionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecRepartitionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecRepartitionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecRepartition object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecRepartition $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecRepartitionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecRepartitionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecRepartitionPeer::DATABASE_NAME, CommonExecRepartitionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecRepartition
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecRepartitionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);
        $criteria->add(CommonExecRepartitionPeer::ID, $pk);

        $v = CommonExecRepartitionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecRepartition[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);
            $criteria->add(CommonExecRepartitionPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecRepartitionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecRepartitionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecRepartitionPeer::buildTableMap();

