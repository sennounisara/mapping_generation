<?php


/**
 * Base static class for performing query and update operations on the 'exec_dossier_paiement' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecDossierPaiementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_dossier_paiement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecDossierPaiement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecDossierPaiementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 'exec_dossier_paiement.id';

    /** the column name for the nume_ordre_paiement field */
    const NUME_ORDRE_PAIEMENT = 'exec_dossier_paiement.nume_ordre_paiement';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'exec_dossier_paiement.commentaire';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_dossier_paiement.id_contrat';

    /** the column name for the id_agent_creat field */
    const ID_AGENT_CREAT = 'exec_dossier_paiement.id_agent_creat';

    /** the column name for the statut field */
    const STATUT = 'exec_dossier_paiement.statut';

    /** the column name for the date_depot field */
    const DATE_DEPOT = 'exec_dossier_paiement.date_depot';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'exec_dossier_paiement.date_validation';

    /** the column name for the date_rejet field */
    const DATE_REJET = 'exec_dossier_paiement.date_rejet';

    /** the column name for the montant_a_paye_ttc field */
    const MONTANT_A_PAYE_TTC = 'exec_dossier_paiement.montant_a_paye_ttc';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_dossier_paiement.date_crea';

    /** the column name for the id_agent_modi field */
    const ID_AGENT_MODI = 'exec_dossier_paiement.id_agent_modi';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 'exec_dossier_paiement.id_parapheur';

    /** the column name for the date_cloture_parapheur field */
    const DATE_CLOTURE_PARAPHEUR = 'exec_dossier_paiement.date_cloture_parapheur';

    /** the column name for the id_agent_validation field */
    const ID_AGENT_VALIDATION = 'exec_dossier_paiement.id_agent_validation';

    /** the column name for the montant_penalite field */
    const MONTANT_PENALITE = 'exec_dossier_paiement.montant_penalite';

    /** the column name for the montant_facture field */
    const MONTANT_FACTURE = 'exec_dossier_paiement.montant_facture';

    /** the column name for the motif_rejet field */
    const MOTIF_REJET = 'exec_dossier_paiement.motif_rejet';

    /** the column name for the date_derniere_synchronisation field */
    const DATE_DERNIERE_SYNCHRONISATION = 'exec_dossier_paiement.date_derniere_synchronisation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecDossierPaiement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecDossierPaiement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecDossierPaiementPeer::$fieldNames[CommonExecDossierPaiementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NumeOrdrePaiement', 'Commentaire', 'IdContrat', 'IdAgentCreat', 'Statut', 'DateDepot', 'DateValidation', 'DateRejet', 'MontantAPayeTtc', 'DateCrea', 'IdAgentModi', 'IdParapheur', 'DateClotureParapheur', 'IdAgentValidation', 'MontantPenalite', 'MontantFacture', 'MotifRejet', 'DateDerniereSynchronisation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'numeOrdrePaiement', 'commentaire', 'idContrat', 'idAgentCreat', 'statut', 'dateDepot', 'dateValidation', 'dateRejet', 'montantAPayeTtc', 'dateCrea', 'idAgentModi', 'idParapheur', 'dateClotureParapheur', 'idAgentValidation', 'montantPenalite', 'montantFacture', 'motifRejet', 'dateDerniereSynchronisation', ),
        BasePeer::TYPE_COLNAME => array (CommonExecDossierPaiementPeer::ID, CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT, CommonExecDossierPaiementPeer::COMMENTAIRE, CommonExecDossierPaiementPeer::ID_CONTRAT, CommonExecDossierPaiementPeer::ID_AGENT_CREAT, CommonExecDossierPaiementPeer::STATUT, CommonExecDossierPaiementPeer::DATE_DEPOT, CommonExecDossierPaiementPeer::DATE_VALIDATION, CommonExecDossierPaiementPeer::DATE_REJET, CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC, CommonExecDossierPaiementPeer::DATE_CREA, CommonExecDossierPaiementPeer::ID_AGENT_MODI, CommonExecDossierPaiementPeer::ID_PARAPHEUR, CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR, CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION, CommonExecDossierPaiementPeer::MONTANT_PENALITE, CommonExecDossierPaiementPeer::MONTANT_FACTURE, CommonExecDossierPaiementPeer::MOTIF_REJET, CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NUME_ORDRE_PAIEMENT', 'COMMENTAIRE', 'ID_CONTRAT', 'ID_AGENT_CREAT', 'STATUT', 'DATE_DEPOT', 'DATE_VALIDATION', 'DATE_REJET', 'MONTANT_A_PAYE_TTC', 'DATE_CREA', 'ID_AGENT_MODI', 'ID_PARAPHEUR', 'DATE_CLOTURE_PARAPHEUR', 'ID_AGENT_VALIDATION', 'MONTANT_PENALITE', 'MONTANT_FACTURE', 'MOTIF_REJET', 'DATE_DERNIERE_SYNCHRONISATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'nume_ordre_paiement', 'commentaire', 'id_contrat', 'id_agent_creat', 'statut', 'date_depot', 'date_validation', 'date_rejet', 'montant_a_paye_ttc', 'date_crea', 'id_agent_modi', 'id_parapheur', 'date_cloture_parapheur', 'id_agent_validation', 'montant_penalite', 'montant_facture', 'motif_rejet', 'date_derniere_synchronisation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecDossierPaiementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NumeOrdrePaiement' => 1, 'Commentaire' => 2, 'IdContrat' => 3, 'IdAgentCreat' => 4, 'Statut' => 5, 'DateDepot' => 6, 'DateValidation' => 7, 'DateRejet' => 8, 'MontantAPayeTtc' => 9, 'DateCrea' => 10, 'IdAgentModi' => 11, 'IdParapheur' => 12, 'DateClotureParapheur' => 13, 'IdAgentValidation' => 14, 'MontantPenalite' => 15, 'MontantFacture' => 16, 'MotifRejet' => 17, 'DateDerniereSynchronisation' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'numeOrdrePaiement' => 1, 'commentaire' => 2, 'idContrat' => 3, 'idAgentCreat' => 4, 'statut' => 5, 'dateDepot' => 6, 'dateValidation' => 7, 'dateRejet' => 8, 'montantAPayeTtc' => 9, 'dateCrea' => 10, 'idAgentModi' => 11, 'idParapheur' => 12, 'dateClotureParapheur' => 13, 'idAgentValidation' => 14, 'montantPenalite' => 15, 'montantFacture' => 16, 'motifRejet' => 17, 'dateDerniereSynchronisation' => 18, ),
        BasePeer::TYPE_COLNAME => array (CommonExecDossierPaiementPeer::ID => 0, CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT => 1, CommonExecDossierPaiementPeer::COMMENTAIRE => 2, CommonExecDossierPaiementPeer::ID_CONTRAT => 3, CommonExecDossierPaiementPeer::ID_AGENT_CREAT => 4, CommonExecDossierPaiementPeer::STATUT => 5, CommonExecDossierPaiementPeer::DATE_DEPOT => 6, CommonExecDossierPaiementPeer::DATE_VALIDATION => 7, CommonExecDossierPaiementPeer::DATE_REJET => 8, CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC => 9, CommonExecDossierPaiementPeer::DATE_CREA => 10, CommonExecDossierPaiementPeer::ID_AGENT_MODI => 11, CommonExecDossierPaiementPeer::ID_PARAPHEUR => 12, CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR => 13, CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION => 14, CommonExecDossierPaiementPeer::MONTANT_PENALITE => 15, CommonExecDossierPaiementPeer::MONTANT_FACTURE => 16, CommonExecDossierPaiementPeer::MOTIF_REJET => 17, CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NUME_ORDRE_PAIEMENT' => 1, 'COMMENTAIRE' => 2, 'ID_CONTRAT' => 3, 'ID_AGENT_CREAT' => 4, 'STATUT' => 5, 'DATE_DEPOT' => 6, 'DATE_VALIDATION' => 7, 'DATE_REJET' => 8, 'MONTANT_A_PAYE_TTC' => 9, 'DATE_CREA' => 10, 'ID_AGENT_MODI' => 11, 'ID_PARAPHEUR' => 12, 'DATE_CLOTURE_PARAPHEUR' => 13, 'ID_AGENT_VALIDATION' => 14, 'MONTANT_PENALITE' => 15, 'MONTANT_FACTURE' => 16, 'MOTIF_REJET' => 17, 'DATE_DERNIERE_SYNCHRONISATION' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'nume_ordre_paiement' => 1, 'commentaire' => 2, 'id_contrat' => 3, 'id_agent_creat' => 4, 'statut' => 5, 'date_depot' => 6, 'date_validation' => 7, 'date_rejet' => 8, 'montant_a_paye_ttc' => 9, 'date_crea' => 10, 'id_agent_modi' => 11, 'id_parapheur' => 12, 'date_cloture_parapheur' => 13, 'id_agent_validation' => 14, 'montant_penalite' => 15, 'montant_facture' => 16, 'motif_rejet' => 17, 'date_derniere_synchronisation' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = CommonExecDossierPaiementPeer::getFieldNames($toType);
        $key = isset(CommonExecDossierPaiementPeer::$fieldKeys[$fromType][$name]) ? CommonExecDossierPaiementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecDossierPaiementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecDossierPaiementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecDossierPaiementPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecDossierPaiementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecDossierPaiementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID_AGENT_CREAT);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::STATUT);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_DEPOT);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_REJET);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID_AGENT_MODI);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::MONTANT_PENALITE);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::MONTANT_FACTURE);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::MOTIF_REJET);
            $criteria->addSelectColumn(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.nume_ordre_paiement');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_agent_creat');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date_depot');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.date_rejet');
            $criteria->addSelectColumn($alias . '.montant_a_paye_ttc');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_modi');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.date_cloture_parapheur');
            $criteria->addSelectColumn($alias . '.id_agent_validation');
            $criteria->addSelectColumn($alias . '.montant_penalite');
            $criteria->addSelectColumn($alias . '.montant_facture');
            $criteria->addSelectColumn($alias . '.motif_rejet');
            $criteria->addSelectColumn($alias . '.date_derniere_synchronisation');
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
        $criteria->setPrimaryTableName(CommonExecDossierPaiementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecDossierPaiement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecDossierPaiementPeer::doSelect($critcopy, $con);
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
        return CommonExecDossierPaiementPeer::populateObjects(CommonExecDossierPaiementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

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
     * @param      CommonExecDossierPaiement $obj A CommonExecDossierPaiement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecDossierPaiementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecDossierPaiement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecDossierPaiement) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecDossierPaiement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecDossierPaiementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecDossierPaiement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecDossierPaiementPeer::$instances[$key])) {
                return CommonExecDossierPaiementPeer::$instances[$key];
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
        foreach (CommonExecDossierPaiementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecDossierPaiementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_dossier_paiement
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
        $cls = CommonExecDossierPaiementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecDossierPaiementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecDossierPaiementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecDossierPaiementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecDossierPaiement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecDossierPaiementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecDossierPaiementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecDossierPaiementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecDossierPaiementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecDossierPaiementPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonExecDossierPaiementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecDossierPaiementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecDossierPaiement objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecDossierPaiement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);
        }

        CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        $startcol = CommonExecDossierPaiementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecDossierPaiementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecDossierPaiementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecDossierPaiementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecDossierPaiementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecDossierPaiementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecDossierPaiement) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecDossierPaiement($obj1);

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
        $criteria->setPrimaryTableName(CommonExecDossierPaiementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecDossierPaiementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecDossierPaiement objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecDossierPaiement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);
        }

        CommonExecDossierPaiementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecDossierPaiementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecDossierPaiementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecDossierPaiementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecDossierPaiementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecDossierPaiementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecDossierPaiementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecDossierPaiement) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecDossierPaiement($obj1);
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
        return Propel::getDatabaseMap(CommonExecDossierPaiementPeer::DATABASE_NAME)->getTable(CommonExecDossierPaiementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecDossierPaiementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecDossierPaiementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecDossierPaiementTableMap());
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
        return CommonExecDossierPaiementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecDossierPaiement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecDossierPaiement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecDossierPaiement object
        }

        if ($criteria->containsKey(CommonExecDossierPaiementPeer::ID) && $criteria->keyContainsValue(CommonExecDossierPaiementPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecDossierPaiementPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecDossierPaiement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecDossierPaiement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecDossierPaiementPeer::ID);
            $value = $criteria->remove(CommonExecDossierPaiementPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecDossierPaiementPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecDossierPaiementPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecDossierPaiement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_dossier_paiement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecDossierPaiementPeer::TABLE_NAME, $con, CommonExecDossierPaiementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecDossierPaiementPeer::clearInstancePool();
            CommonExecDossierPaiementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecDossierPaiement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecDossierPaiement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecDossierPaiementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecDossierPaiement) { // it's a model object
            // invalidate the cache for this single object
            CommonExecDossierPaiementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);
            $criteria->add(CommonExecDossierPaiementPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecDossierPaiementPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecDossierPaiementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecDossierPaiementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecDossierPaiement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecDossierPaiement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecDossierPaiementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecDossierPaiementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecDossierPaiementPeer::DATABASE_NAME, CommonExecDossierPaiementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecDossierPaiement
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecDossierPaiementPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);
        $criteria->add(CommonExecDossierPaiementPeer::ID, $pk);

        $v = CommonExecDossierPaiementPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecDossierPaiement[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);
            $criteria->add(CommonExecDossierPaiementPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecDossierPaiementPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecDossierPaiementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecDossierPaiementPeer::buildTableMap();

