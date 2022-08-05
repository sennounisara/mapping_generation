<?php


/**
 * Base static class for performing query and update operations on the 'exec_reception' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseExecReceptionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_reception';

    /** the related Propel class for this table */
    const OM_CLASS = 'ExecReception';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ExecReceptionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id field */
    const ID = 'exec_reception.id';

    /** the column name for the intitule field */
    const INTITULE = 'exec_reception.intitule';

    /** the column name for the numero field */
    const NUMERO = 'exec_reception.numero';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_reception.id_contrat';

    /** the column name for the id_contractant field */
    const ID_CONTRACTANT = 'exec_reception.id_contractant';

    /** the column name for the statut field */
    const STATUT = 'exec_reception.statut';

    /** the column name for the date_reception field */
    const DATE_RECEPTION = 'exec_reception.date_reception';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'exec_reception.date_validation';

    /** the column name for the id_agent_validation field */
    const ID_AGENT_VALIDATION = 'exec_reception.id_agent_validation';

    /** the column name for the date_rejet field */
    const DATE_REJET = 'exec_reception.date_rejet';

    /** the column name for the id_agent_rejet field */
    const ID_AGENT_REJET = 'exec_reception.id_agent_rejet';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'exec_reception.commentaire';

    /** the column name for the origine_piece field */
    const ORIGINE_PIECE = 'exec_reception.origine_piece';

    /** the column name for the numero_workflow field */
    const NUMERO_WORKFLOW = 'exec_reception.numero_workflow';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_reception.id_agent_crea';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_reception.date_crea';

    /** the column name for the motif_rejet field */
    const MOTIF_REJET = 'exec_reception.motif_rejet';

    /** the column name for the origine field */
    const ORIGINE = 'exec_reception.origine';

    /** the column name for the id_facture field */
    const ID_FACTURE = 'exec_reception.id_facture';

    /** the column name for the id_pv_reception field */
    const ID_PV_RECEPTION = 'exec_reception.id_pv_reception';

    /** the column name for the accepte field */
    const ACCEPTE = 'exec_reception.accepte';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ExecReception objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ExecReception[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ExecReceptionPeer::$fieldNames[ExecReceptionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Intitule', 'Numero', 'IdContrat', 'IdContractant', 'Statut', 'DateReception', 'DateValidation', 'IdAgentValidation', 'DateRejet', 'IdAgentRejet', 'Commentaire', 'OriginePiece', 'NumeroWorkflow', 'IdAgentCrea', 'DateCrea', 'MotifRejet', 'Origine', 'IdFacture', 'IdPvReception', 'Accepte', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'intitule', 'numero', 'idContrat', 'idContractant', 'statut', 'dateReception', 'dateValidation', 'idAgentValidation', 'dateRejet', 'idAgentRejet', 'commentaire', 'originePiece', 'numeroWorkflow', 'idAgentCrea', 'dateCrea', 'motifRejet', 'origine', 'idFacture', 'idPvReception', 'accepte', ),
        BasePeer::TYPE_COLNAME => array (ExecReceptionPeer::ID, ExecReceptionPeer::INTITULE, ExecReceptionPeer::NUMERO, ExecReceptionPeer::ID_CONTRAT, ExecReceptionPeer::ID_CONTRACTANT, ExecReceptionPeer::STATUT, ExecReceptionPeer::DATE_RECEPTION, ExecReceptionPeer::DATE_VALIDATION, ExecReceptionPeer::ID_AGENT_VALIDATION, ExecReceptionPeer::DATE_REJET, ExecReceptionPeer::ID_AGENT_REJET, ExecReceptionPeer::COMMENTAIRE, ExecReceptionPeer::ORIGINE_PIECE, ExecReceptionPeer::NUMERO_WORKFLOW, ExecReceptionPeer::ID_AGENT_CREA, ExecReceptionPeer::DATE_CREA, ExecReceptionPeer::MOTIF_REJET, ExecReceptionPeer::ORIGINE, ExecReceptionPeer::ID_FACTURE, ExecReceptionPeer::ID_PV_RECEPTION, ExecReceptionPeer::ACCEPTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'INTITULE', 'NUMERO', 'ID_CONTRAT', 'ID_CONTRACTANT', 'STATUT', 'DATE_RECEPTION', 'DATE_VALIDATION', 'ID_AGENT_VALIDATION', 'DATE_REJET', 'ID_AGENT_REJET', 'COMMENTAIRE', 'ORIGINE_PIECE', 'NUMERO_WORKFLOW', 'ID_AGENT_CREA', 'DATE_CREA', 'MOTIF_REJET', 'ORIGINE', 'ID_FACTURE', 'ID_PV_RECEPTION', 'ACCEPTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'intitule', 'numero', 'id_contrat', 'id_contractant', 'statut', 'date_reception', 'date_validation', 'id_agent_validation', 'date_rejet', 'id_agent_rejet', 'commentaire', 'origine_piece', 'numero_workflow', 'id_agent_crea', 'date_crea', 'motif_rejet', 'origine', 'id_facture', 'id_pv_reception', 'accepte', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ExecReceptionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Intitule' => 1, 'Numero' => 2, 'IdContrat' => 3, 'IdContractant' => 4, 'Statut' => 5, 'DateReception' => 6, 'DateValidation' => 7, 'IdAgentValidation' => 8, 'DateRejet' => 9, 'IdAgentRejet' => 10, 'Commentaire' => 11, 'OriginePiece' => 12, 'NumeroWorkflow' => 13, 'IdAgentCrea' => 14, 'DateCrea' => 15, 'MotifRejet' => 16, 'Origine' => 17, 'IdFacture' => 18, 'IdPvReception' => 19, 'Accepte' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'intitule' => 1, 'numero' => 2, 'idContrat' => 3, 'idContractant' => 4, 'statut' => 5, 'dateReception' => 6, 'dateValidation' => 7, 'idAgentValidation' => 8, 'dateRejet' => 9, 'idAgentRejet' => 10, 'commentaire' => 11, 'originePiece' => 12, 'numeroWorkflow' => 13, 'idAgentCrea' => 14, 'dateCrea' => 15, 'motifRejet' => 16, 'origine' => 17, 'idFacture' => 18, 'idPvReception' => 19, 'accepte' => 20, ),
        BasePeer::TYPE_COLNAME => array (ExecReceptionPeer::ID => 0, ExecReceptionPeer::INTITULE => 1, ExecReceptionPeer::NUMERO => 2, ExecReceptionPeer::ID_CONTRAT => 3, ExecReceptionPeer::ID_CONTRACTANT => 4, ExecReceptionPeer::STATUT => 5, ExecReceptionPeer::DATE_RECEPTION => 6, ExecReceptionPeer::DATE_VALIDATION => 7, ExecReceptionPeer::ID_AGENT_VALIDATION => 8, ExecReceptionPeer::DATE_REJET => 9, ExecReceptionPeer::ID_AGENT_REJET => 10, ExecReceptionPeer::COMMENTAIRE => 11, ExecReceptionPeer::ORIGINE_PIECE => 12, ExecReceptionPeer::NUMERO_WORKFLOW => 13, ExecReceptionPeer::ID_AGENT_CREA => 14, ExecReceptionPeer::DATE_CREA => 15, ExecReceptionPeer::MOTIF_REJET => 16, ExecReceptionPeer::ORIGINE => 17, ExecReceptionPeer::ID_FACTURE => 18, ExecReceptionPeer::ID_PV_RECEPTION => 19, ExecReceptionPeer::ACCEPTE => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'INTITULE' => 1, 'NUMERO' => 2, 'ID_CONTRAT' => 3, 'ID_CONTRACTANT' => 4, 'STATUT' => 5, 'DATE_RECEPTION' => 6, 'DATE_VALIDATION' => 7, 'ID_AGENT_VALIDATION' => 8, 'DATE_REJET' => 9, 'ID_AGENT_REJET' => 10, 'COMMENTAIRE' => 11, 'ORIGINE_PIECE' => 12, 'NUMERO_WORKFLOW' => 13, 'ID_AGENT_CREA' => 14, 'DATE_CREA' => 15, 'MOTIF_REJET' => 16, 'ORIGINE' => 17, 'ID_FACTURE' => 18, 'ID_PV_RECEPTION' => 19, 'ACCEPTE' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'intitule' => 1, 'numero' => 2, 'id_contrat' => 3, 'id_contractant' => 4, 'statut' => 5, 'date_reception' => 6, 'date_validation' => 7, 'id_agent_validation' => 8, 'date_rejet' => 9, 'id_agent_rejet' => 10, 'commentaire' => 11, 'origine_piece' => 12, 'numero_workflow' => 13, 'id_agent_crea' => 14, 'date_crea' => 15, 'motif_rejet' => 16, 'origine' => 17, 'id_facture' => 18, 'id_pv_reception' => 19, 'accepte' => 20, ),
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
        $toNames = ExecReceptionPeer::getFieldNames($toType);
        $key = isset(ExecReceptionPeer::$fieldKeys[$fromType][$name]) ? ExecReceptionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ExecReceptionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ExecReceptionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ExecReceptionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ExecReceptionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ExecReceptionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ExecReceptionPeer::ID);
            $criteria->addSelectColumn(ExecReceptionPeer::INTITULE);
            $criteria->addSelectColumn(ExecReceptionPeer::NUMERO);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_CONTRAT);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_CONTRACTANT);
            $criteria->addSelectColumn(ExecReceptionPeer::STATUT);
            $criteria->addSelectColumn(ExecReceptionPeer::DATE_RECEPTION);
            $criteria->addSelectColumn(ExecReceptionPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_AGENT_VALIDATION);
            $criteria->addSelectColumn(ExecReceptionPeer::DATE_REJET);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_AGENT_REJET);
            $criteria->addSelectColumn(ExecReceptionPeer::COMMENTAIRE);
            $criteria->addSelectColumn(ExecReceptionPeer::ORIGINE_PIECE);
            $criteria->addSelectColumn(ExecReceptionPeer::NUMERO_WORKFLOW);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(ExecReceptionPeer::DATE_CREA);
            $criteria->addSelectColumn(ExecReceptionPeer::MOTIF_REJET);
            $criteria->addSelectColumn(ExecReceptionPeer::ORIGINE);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_FACTURE);
            $criteria->addSelectColumn(ExecReceptionPeer::ID_PV_RECEPTION);
            $criteria->addSelectColumn(ExecReceptionPeer::ACCEPTE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_contractant');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date_reception');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.id_agent_validation');
            $criteria->addSelectColumn($alias . '.date_rejet');
            $criteria->addSelectColumn($alias . '.id_agent_rejet');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.origine_piece');
            $criteria->addSelectColumn($alias . '.numero_workflow');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.motif_rejet');
            $criteria->addSelectColumn($alias . '.origine');
            $criteria->addSelectColumn($alias . '.id_facture');
            $criteria->addSelectColumn($alias . '.id_pv_reception');
            $criteria->addSelectColumn($alias . '.accepte');
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
        $criteria->setPrimaryTableName(ExecReceptionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExecReceptionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ExecReception
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ExecReceptionPeer::doSelect($critcopy, $con);
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
        return ExecReceptionPeer::populateObjects(ExecReceptionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ExecReceptionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

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
     * @param      ExecReception $obj A ExecReception object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ExecReceptionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ExecReception object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ExecReception) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ExecReception object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ExecReceptionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ExecReception Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ExecReceptionPeer::$instances[$key])) {
                return ExecReceptionPeer::$instances[$key];
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
        foreach (ExecReceptionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ExecReceptionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_reception
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
        $cls = ExecReceptionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ExecReceptionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ExecReceptionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExecReceptionPeer::addInstanceToPool($obj, $key);
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
     * @return array (ExecReception object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ExecReceptionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ExecReceptionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ExecReceptionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExecReceptionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ExecReceptionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related ExecFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinExecFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExecReceptionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExecReceptionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExecReceptionPeer::ID_FACTURE, ExecFacturePeer::ID, $join_behavior);

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
     * Selects a collection of ExecReception objects pre-filled with their ExecFacture objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExecReception objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinExecFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);
        }

        ExecReceptionPeer::addSelectColumns($criteria);
        $startcol = ExecReceptionPeer::NUM_HYDRATE_COLUMNS;
        ExecFacturePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExecReceptionPeer::ID_FACTURE, ExecFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExecReceptionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExecReceptionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExecReceptionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExecReceptionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ExecFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ExecFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ExecFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ExecReception) to $obj2 (ExecFacture)
                $obj2->addExecReception($obj1);

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
        $criteria->setPrimaryTableName(ExecReceptionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExecReceptionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExecReceptionPeer::ID_FACTURE, ExecFacturePeer::ID, $join_behavior);

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
     * Selects a collection of ExecReception objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExecReception objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);
        }

        ExecReceptionPeer::addSelectColumns($criteria);
        $startcol2 = ExecReceptionPeer::NUM_HYDRATE_COLUMNS;

        ExecFacturePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ExecFacturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExecReceptionPeer::ID_FACTURE, ExecFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExecReceptionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExecReceptionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExecReceptionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExecReceptionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ExecFacture rows

            $key2 = ExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ExecFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ExecFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ExecFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ExecReception) to the collection in $obj2 (ExecFacture)
                $obj2->addExecReception($obj1);
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
        return Propel::getDatabaseMap(ExecReceptionPeer::DATABASE_NAME)->getTable(ExecReceptionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseExecReceptionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseExecReceptionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ExecReceptionTableMap());
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
        return ExecReceptionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ExecReception or Criteria object.
     *
     * @param      mixed $values Criteria or ExecReception object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ExecReception object
        }

        if ($criteria->containsKey(ExecReceptionPeer::ID) && $criteria->keyContainsValue(ExecReceptionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExecReceptionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ExecReception or Criteria object.
     *
     * @param      mixed $values Criteria or ExecReception object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ExecReceptionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ExecReceptionPeer::ID);
            $value = $criteria->remove(ExecReceptionPeer::ID);
            if ($value) {
                $selectCriteria->add(ExecReceptionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExecReceptionPeer::TABLE_NAME);
            }

        } else { // $values is ExecReception object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_reception table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ExecReceptionPeer::TABLE_NAME, $con, ExecReceptionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExecReceptionPeer::clearInstancePool();
            ExecReceptionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ExecReception or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ExecReception object or primary key or array of primary keys
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
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ExecReceptionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ExecReception) { // it's a model object
            // invalidate the cache for this single object
            ExecReceptionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExecReceptionPeer::DATABASE_NAME);
            $criteria->add(ExecReceptionPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ExecReceptionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ExecReceptionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ExecReceptionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ExecReception object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ExecReception $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ExecReceptionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ExecReceptionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ExecReceptionPeer::DATABASE_NAME, ExecReceptionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ExecReception
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ExecReceptionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ExecReceptionPeer::DATABASE_NAME);
        $criteria->add(ExecReceptionPeer::ID, $pk);

        $v = ExecReceptionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ExecReception[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ExecReceptionPeer::DATABASE_NAME);
            $criteria->add(ExecReceptionPeer::ID, $pks, Criteria::IN);
            $objs = ExecReceptionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseExecReceptionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseExecReceptionPeer::buildTableMap();

