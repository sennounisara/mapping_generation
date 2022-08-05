<?php


/**
 * Base static class for performing query and update operations on the 'exec_avenant' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecAvenantPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_avenant';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecAvenant';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecAvenantTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the id field */
    const ID = 'exec_avenant.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_avenant.id_contrat';

    /** the column name for the id_type_avenant field */
    const ID_TYPE_AVENANT = 'exec_avenant.id_type_avenant';

    /** the column name for the numero field */
    const NUMERO = 'exec_avenant.numero';

    /** the column name for the intitule field */
    const INTITULE = 'exec_avenant.intitule';

    /** the column name for the date_notification field */
    const DATE_NOTIFICATION = 'exec_avenant.date_notification';

    /** the column name for the incidence_financiere field */
    const INCIDENCE_FINANCIERE = 'exec_avenant.incidence_financiere';

    /** the column name for the positif field */
    const POSITIF = 'exec_avenant.positif';

    /** the column name for the montant_ecart_ht field */
    const MONTANT_ECART_HT = 'exec_avenant.montant_ecart_ht';

    /** the column name for the montant_ecart_ttc field */
    const MONTANT_ECART_TTC = 'exec_avenant.montant_ecart_ttc';

    /** the column name for the pourcentage_ecart field */
    const POURCENTAGE_ECART = 'exec_avenant.pourcentage_ecart';

    /** the column name for the statut field */
    const STATUT = 'exec_avenant.statut';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'exec_avenant.date_validation';

    /** the column name for the id_agent_validation field */
    const ID_AGENT_VALIDATION = 'exec_avenant.id_agent_validation';

    /** the column name for the date_rejet field */
    const DATE_REJET = 'exec_avenant.date_rejet';

    /** the column name for the id_agent_rejet field */
    const ID_AGENT_REJET = 'exec_avenant.id_agent_rejet';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_avenant.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_avenant.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_avenant.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_avenant.id_agent_modif';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 'exec_avenant.id_parapheur';

    /** the column name for the date_cloture_parapheur field */
    const DATE_CLOTURE_PARAPHEUR = 'exec_avenant.date_cloture_parapheur';

    /** the column name for the motif_rejet field */
    const MOTIF_REJET = 'exec_avenant.motif_rejet';

    /** the column name for the date_derniere_synchronisation field */
    const DATE_DERNIERE_SYNCHRONISATION = 'exec_avenant.date_derniere_synchronisation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecAvenant objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecAvenant[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecAvenantPeer::$fieldNames[CommonExecAvenantPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'IdTypeAvenant', 'Numero', 'Intitule', 'DateNotification', 'IncidenceFinanciere', 'Positif', 'MontantEcartHt', 'MontantEcartTtc', 'PourcentageEcart', 'Statut', 'DateValidation', 'IdAgentValidation', 'DateRejet', 'IdAgentRejet', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', 'IdParapheur', 'DateClotureParapheur', 'MotifRejet', 'DateDerniereSynchronisation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'idTypeAvenant', 'numero', 'intitule', 'dateNotification', 'incidenceFinanciere', 'positif', 'montantEcartHt', 'montantEcartTtc', 'pourcentageEcart', 'statut', 'dateValidation', 'idAgentValidation', 'dateRejet', 'idAgentRejet', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', 'idParapheur', 'dateClotureParapheur', 'motifRejet', 'dateDerniereSynchronisation', ),
        BasePeer::TYPE_COLNAME => array (CommonExecAvenantPeer::ID, CommonExecAvenantPeer::ID_CONTRAT, CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecAvenantPeer::NUMERO, CommonExecAvenantPeer::INTITULE, CommonExecAvenantPeer::DATE_NOTIFICATION, CommonExecAvenantPeer::INCIDENCE_FINANCIERE, CommonExecAvenantPeer::POSITIF, CommonExecAvenantPeer::MONTANT_ECART_HT, CommonExecAvenantPeer::MONTANT_ECART_TTC, CommonExecAvenantPeer::POURCENTAGE_ECART, CommonExecAvenantPeer::STATUT, CommonExecAvenantPeer::DATE_VALIDATION, CommonExecAvenantPeer::ID_AGENT_VALIDATION, CommonExecAvenantPeer::DATE_REJET, CommonExecAvenantPeer::ID_AGENT_REJET, CommonExecAvenantPeer::DATE_CREA, CommonExecAvenantPeer::ID_AGENT_CREA, CommonExecAvenantPeer::DATE_MODIF, CommonExecAvenantPeer::ID_AGENT_MODIF, CommonExecAvenantPeer::ID_PARAPHEUR, CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR, CommonExecAvenantPeer::MOTIF_REJET, CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'ID_TYPE_AVENANT', 'NUMERO', 'INTITULE', 'DATE_NOTIFICATION', 'INCIDENCE_FINANCIERE', 'POSITIF', 'MONTANT_ECART_HT', 'MONTANT_ECART_TTC', 'POURCENTAGE_ECART', 'STATUT', 'DATE_VALIDATION', 'ID_AGENT_VALIDATION', 'DATE_REJET', 'ID_AGENT_REJET', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', 'ID_PARAPHEUR', 'DATE_CLOTURE_PARAPHEUR', 'MOTIF_REJET', 'DATE_DERNIERE_SYNCHRONISATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'id_type_avenant', 'numero', 'intitule', 'date_notification', 'incidence_financiere', 'positif', 'montant_ecart_ht', 'montant_ecart_ttc', 'pourcentage_ecart', 'statut', 'date_validation', 'id_agent_validation', 'date_rejet', 'id_agent_rejet', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', 'id_parapheur', 'date_cloture_parapheur', 'motif_rejet', 'date_derniere_synchronisation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecAvenantPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'IdTypeAvenant' => 2, 'Numero' => 3, 'Intitule' => 4, 'DateNotification' => 5, 'IncidenceFinanciere' => 6, 'Positif' => 7, 'MontantEcartHt' => 8, 'MontantEcartTtc' => 9, 'PourcentageEcart' => 10, 'Statut' => 11, 'DateValidation' => 12, 'IdAgentValidation' => 13, 'DateRejet' => 14, 'IdAgentRejet' => 15, 'DateCrea' => 16, 'IdAgentCrea' => 17, 'DateModif' => 18, 'IdAgentModif' => 19, 'IdParapheur' => 20, 'DateClotureParapheur' => 21, 'MotifRejet' => 22, 'DateDerniereSynchronisation' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'idTypeAvenant' => 2, 'numero' => 3, 'intitule' => 4, 'dateNotification' => 5, 'incidenceFinanciere' => 6, 'positif' => 7, 'montantEcartHt' => 8, 'montantEcartTtc' => 9, 'pourcentageEcart' => 10, 'statut' => 11, 'dateValidation' => 12, 'idAgentValidation' => 13, 'dateRejet' => 14, 'idAgentRejet' => 15, 'dateCrea' => 16, 'idAgentCrea' => 17, 'dateModif' => 18, 'idAgentModif' => 19, 'idParapheur' => 20, 'dateClotureParapheur' => 21, 'motifRejet' => 22, 'dateDerniereSynchronisation' => 23, ),
        BasePeer::TYPE_COLNAME => array (CommonExecAvenantPeer::ID => 0, CommonExecAvenantPeer::ID_CONTRAT => 1, CommonExecAvenantPeer::ID_TYPE_AVENANT => 2, CommonExecAvenantPeer::NUMERO => 3, CommonExecAvenantPeer::INTITULE => 4, CommonExecAvenantPeer::DATE_NOTIFICATION => 5, CommonExecAvenantPeer::INCIDENCE_FINANCIERE => 6, CommonExecAvenantPeer::POSITIF => 7, CommonExecAvenantPeer::MONTANT_ECART_HT => 8, CommonExecAvenantPeer::MONTANT_ECART_TTC => 9, CommonExecAvenantPeer::POURCENTAGE_ECART => 10, CommonExecAvenantPeer::STATUT => 11, CommonExecAvenantPeer::DATE_VALIDATION => 12, CommonExecAvenantPeer::ID_AGENT_VALIDATION => 13, CommonExecAvenantPeer::DATE_REJET => 14, CommonExecAvenantPeer::ID_AGENT_REJET => 15, CommonExecAvenantPeer::DATE_CREA => 16, CommonExecAvenantPeer::ID_AGENT_CREA => 17, CommonExecAvenantPeer::DATE_MODIF => 18, CommonExecAvenantPeer::ID_AGENT_MODIF => 19, CommonExecAvenantPeer::ID_PARAPHEUR => 20, CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR => 21, CommonExecAvenantPeer::MOTIF_REJET => 22, CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'ID_TYPE_AVENANT' => 2, 'NUMERO' => 3, 'INTITULE' => 4, 'DATE_NOTIFICATION' => 5, 'INCIDENCE_FINANCIERE' => 6, 'POSITIF' => 7, 'MONTANT_ECART_HT' => 8, 'MONTANT_ECART_TTC' => 9, 'POURCENTAGE_ECART' => 10, 'STATUT' => 11, 'DATE_VALIDATION' => 12, 'ID_AGENT_VALIDATION' => 13, 'DATE_REJET' => 14, 'ID_AGENT_REJET' => 15, 'DATE_CREA' => 16, 'ID_AGENT_CREA' => 17, 'DATE_MODIF' => 18, 'ID_AGENT_MODIF' => 19, 'ID_PARAPHEUR' => 20, 'DATE_CLOTURE_PARAPHEUR' => 21, 'MOTIF_REJET' => 22, 'DATE_DERNIERE_SYNCHRONISATION' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'id_type_avenant' => 2, 'numero' => 3, 'intitule' => 4, 'date_notification' => 5, 'incidence_financiere' => 6, 'positif' => 7, 'montant_ecart_ht' => 8, 'montant_ecart_ttc' => 9, 'pourcentage_ecart' => 10, 'statut' => 11, 'date_validation' => 12, 'id_agent_validation' => 13, 'date_rejet' => 14, 'id_agent_rejet' => 15, 'date_crea' => 16, 'id_agent_crea' => 17, 'date_modif' => 18, 'id_agent_modif' => 19, 'id_parapheur' => 20, 'date_cloture_parapheur' => 21, 'motif_rejet' => 22, 'date_derniere_synchronisation' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = CommonExecAvenantPeer::getFieldNames($toType);
        $key = isset(CommonExecAvenantPeer::$fieldKeys[$fromType][$name]) ? CommonExecAvenantPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecAvenantPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecAvenantPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecAvenantPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecAvenantPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecAvenantPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_TYPE_AVENANT);
            $criteria->addSelectColumn(CommonExecAvenantPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecAvenantPeer::INTITULE);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonExecAvenantPeer::INCIDENCE_FINANCIERE);
            $criteria->addSelectColumn(CommonExecAvenantPeer::POSITIF);
            $criteria->addSelectColumn(CommonExecAvenantPeer::MONTANT_ECART_HT);
            $criteria->addSelectColumn(CommonExecAvenantPeer::MONTANT_ECART_TTC);
            $criteria->addSelectColumn(CommonExecAvenantPeer::POURCENTAGE_ECART);
            $criteria->addSelectColumn(CommonExecAvenantPeer::STATUT);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_AGENT_VALIDATION);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_REJET);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_AGENT_REJET);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecAvenantPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecAvenantPeer::MOTIF_REJET);
            $criteria->addSelectColumn(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_type_avenant');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.date_notification');
            $criteria->addSelectColumn($alias . '.incidence_financiere');
            $criteria->addSelectColumn($alias . '.positif');
            $criteria->addSelectColumn($alias . '.montant_ecart_ht');
            $criteria->addSelectColumn($alias . '.montant_ecart_ttc');
            $criteria->addSelectColumn($alias . '.pourcentage_ecart');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.id_agent_validation');
            $criteria->addSelectColumn($alias . '.date_rejet');
            $criteria->addSelectColumn($alias . '.id_agent_rejet');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.date_cloture_parapheur');
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
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecAvenant
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecAvenantPeer::doSelect($critcopy, $con);
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
        return CommonExecAvenantPeer::populateObjects(CommonExecAvenantPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

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
     * @param      CommonExecAvenant $obj A CommonExecAvenant object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecAvenantPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecAvenant object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecAvenant) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecAvenant object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecAvenantPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecAvenant Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecAvenantPeer::$instances[$key])) {
                return CommonExecAvenantPeer::$instances[$key];
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
        foreach (CommonExecAvenantPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecAvenantPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_avenant
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
        $cls = CommonExecAvenantPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecAvenantPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecAvenantPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecAvenant object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecAvenantPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecAvenantPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecAvenantPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeAvenant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeAvenant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecAvenant objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);
        }

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecAvenantPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecAvenant) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecAvenant($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecAvenant objects pre-filled with their CommonExecTypeAvenant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeAvenant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);
        }

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeAvenantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeAvenantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecAvenant) to $obj2 (CommonExecTypeAvenant)
                $obj2->addCommonExecAvenant($obj1);

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
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecAvenant objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);
        }

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeAvenantPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecTypeAvenantPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecAvenantPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecAvenant) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecAvenant($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypeAvenant rows

            $key3 = CommonExecTypeAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecTypeAvenantPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecTypeAvenantPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecTypeAvenantPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecAvenant) to the collection in $obj3 (CommonExecTypeAvenant)
                $obj3->addCommonExecAvenant($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeAvenant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeAvenant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecAvenant objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecAvenant objects.
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
            $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);
        }

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeAvenantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeAvenantPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecAvenantPeer::ID_TYPE_AVENANT, CommonExecTypeAvenantPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecAvenantPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecTypeAvenant rows

                $key2 = CommonExecTypeAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecTypeAvenantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecTypeAvenantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeAvenantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecAvenant) to the collection in $obj2 (CommonExecTypeAvenant)
                $obj2->addCommonExecAvenant($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecAvenant objects pre-filled with all related objects except CommonExecTypeAvenant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecAvenant objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeAvenant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);
        }

        CommonExecAvenantPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecAvenantPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecAvenantPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecAvenantPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecAvenantPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecAvenant) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecAvenant($obj1);

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
        return Propel::getDatabaseMap(CommonExecAvenantPeer::DATABASE_NAME)->getTable(CommonExecAvenantPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecAvenantPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecAvenantPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecAvenantTableMap());
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
        return CommonExecAvenantPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecAvenant object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecAvenant object
        }

        if ($criteria->containsKey(CommonExecAvenantPeer::ID) && $criteria->keyContainsValue(CommonExecAvenantPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecAvenantPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecAvenant object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecAvenantPeer::ID);
            $value = $criteria->remove(CommonExecAvenantPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecAvenantPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecAvenantPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecAvenant object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_avenant table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecAvenantPeer::TABLE_NAME, $con, CommonExecAvenantPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecAvenantPeer::clearInstancePool();
            CommonExecAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecAvenant or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecAvenant object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecAvenantPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecAvenant) { // it's a model object
            // invalidate the cache for this single object
            CommonExecAvenantPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);
            $criteria->add(CommonExecAvenantPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecAvenantPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecAvenantPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecAvenant object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecAvenant $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecAvenantPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecAvenantPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecAvenantPeer::DATABASE_NAME, CommonExecAvenantPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecAvenant
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecAvenantPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecAvenantPeer::ID, $pk);

        $v = CommonExecAvenantPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecAvenant[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);
            $criteria->add(CommonExecAvenantPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecAvenantPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecAvenantPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecAvenantPeer::buildTableMap();

