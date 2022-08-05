<?php


/**
 * Base static class for performing query and update operations on the 'resultat_analyse_historique' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonResultatAnalyseHistoriquePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'resultat_analyse_historique';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonResultatAnalyseHistorique';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonResultatAnalyseHistoriqueTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'resultat_analyse_historique.id';

    /** the column name for the organisme field */
    const ORGANISME = 'resultat_analyse_historique.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'resultat_analyse_historique.consultation_ref';

    /** the column name for the id_offre field */
    const ID_OFFRE = 'resultat_analyse_historique.id_offre';

    /** the column name for the lot field */
    const LOT = 'resultat_analyse_historique.lot';

    /** the column name for the date_decision field */
    const DATE_DECISION = 'resultat_analyse_historique.date_decision';

    /** the column name for the type_decision field */
    const TYPE_DECISION = 'resultat_analyse_historique.type_decision';

    /** the column name for the type_depot field */
    const TYPE_DEPOT = 'resultat_analyse_historique.type_depot';

    /** the column name for the justificatif field */
    const JUSTIFICATIF = 'resultat_analyse_historique.justificatif';

    /** the column name for the nom_entreprise field */
    const NOM_ENTREPRISE = 'resultat_analyse_historique.nom_entreprise';

    /** the column name for the action field */
    const ACTION = 'resultat_analyse_historique.action';

    /** the column name for the agent_id field */
    const AGENT_ID = 'resultat_analyse_historique.agent_id';

    /** The enumerated values for the type_depot field */
    const TYPE_DEPOT_1 = '1';
    const TYPE_DEPOT_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonResultatAnalyseHistorique objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonResultatAnalyseHistorique[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonResultatAnalyseHistoriquePeer::$fieldNames[CommonResultatAnalyseHistoriquePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'IdOffre', 'Lot', 'DateDecision', 'TypeDecision', 'TypeDepot', 'Justificatif', 'NomEntreprise', 'Action', 'AgentId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'idOffre', 'lot', 'dateDecision', 'typeDecision', 'typeDepot', 'justificatif', 'nomEntreprise', 'action', 'agentId', ),
        BasePeer::TYPE_COLNAME => array (CommonResultatAnalyseHistoriquePeer::ID, CommonResultatAnalyseHistoriquePeer::ORGANISME, CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF, CommonResultatAnalyseHistoriquePeer::ID_OFFRE, CommonResultatAnalyseHistoriquePeer::LOT, CommonResultatAnalyseHistoriquePeer::DATE_DECISION, CommonResultatAnalyseHistoriquePeer::TYPE_DECISION, CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT, CommonResultatAnalyseHistoriquePeer::JUSTIFICATIF, CommonResultatAnalyseHistoriquePeer::NOM_ENTREPRISE, CommonResultatAnalyseHistoriquePeer::ACTION, CommonResultatAnalyseHistoriquePeer::AGENT_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'ID_OFFRE', 'LOT', 'DATE_DECISION', 'TYPE_DECISION', 'TYPE_DEPOT', 'JUSTIFICATIF', 'NOM_ENTREPRISE', 'ACTION', 'AGENT_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'id_offre', 'lot', 'date_decision', 'type_decision', 'type_depot', 'justificatif', 'nom_entreprise', 'action', 'agent_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonResultatAnalyseHistoriquePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'IdOffre' => 3, 'Lot' => 4, 'DateDecision' => 5, 'TypeDecision' => 6, 'TypeDepot' => 7, 'Justificatif' => 8, 'NomEntreprise' => 9, 'Action' => 10, 'AgentId' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'idOffre' => 3, 'lot' => 4, 'dateDecision' => 5, 'typeDecision' => 6, 'typeDepot' => 7, 'justificatif' => 8, 'nomEntreprise' => 9, 'action' => 10, 'agentId' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonResultatAnalyseHistoriquePeer::ID => 0, CommonResultatAnalyseHistoriquePeer::ORGANISME => 1, CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF => 2, CommonResultatAnalyseHistoriquePeer::ID_OFFRE => 3, CommonResultatAnalyseHistoriquePeer::LOT => 4, CommonResultatAnalyseHistoriquePeer::DATE_DECISION => 5, CommonResultatAnalyseHistoriquePeer::TYPE_DECISION => 6, CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT => 7, CommonResultatAnalyseHistoriquePeer::JUSTIFICATIF => 8, CommonResultatAnalyseHistoriquePeer::NOM_ENTREPRISE => 9, CommonResultatAnalyseHistoriquePeer::ACTION => 10, CommonResultatAnalyseHistoriquePeer::AGENT_ID => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'ID_OFFRE' => 3, 'LOT' => 4, 'DATE_DECISION' => 5, 'TYPE_DECISION' => 6, 'TYPE_DEPOT' => 7, 'JUSTIFICATIF' => 8, 'NOM_ENTREPRISE' => 9, 'ACTION' => 10, 'AGENT_ID' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'id_offre' => 3, 'lot' => 4, 'date_decision' => 5, 'type_decision' => 6, 'type_depot' => 7, 'justificatif' => 8, 'nom_entreprise' => 9, 'action' => 10, 'agent_id' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT => array(
            CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT_1,
            CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT_2,
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
        $toNames = CommonResultatAnalyseHistoriquePeer::getFieldNames($toType);
        $key = isset(CommonResultatAnalyseHistoriquePeer::$fieldKeys[$fromType][$name]) ? CommonResultatAnalyseHistoriquePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonResultatAnalyseHistoriquePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonResultatAnalyseHistoriquePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonResultatAnalyseHistoriquePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonResultatAnalyseHistoriquePeer::$enumValueSets;
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
        $valueSets = CommonResultatAnalyseHistoriquePeer::getValueSets();

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
        $values = CommonResultatAnalyseHistoriquePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonResultatAnalyseHistoriquePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonResultatAnalyseHistoriquePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::ID);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::ORGANISME);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::LOT);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::DATE_DECISION);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::TYPE_DECISION);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::JUSTIFICATIF);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::NOM_ENTREPRISE);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::ACTION);
            $criteria->addSelectColumn(CommonResultatAnalyseHistoriquePeer::AGENT_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.id_offre');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.date_decision');
            $criteria->addSelectColumn($alias . '.type_decision');
            $criteria->addSelectColumn($alias . '.type_depot');
            $criteria->addSelectColumn($alias . '.justificatif');
            $criteria->addSelectColumn($alias . '.nom_entreprise');
            $criteria->addSelectColumn($alias . '.action');
            $criteria->addSelectColumn($alias . '.agent_id');
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
        $criteria->setPrimaryTableName(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonResultatAnalyseHistorique
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonResultatAnalyseHistoriquePeer::doSelect($critcopy, $con);
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
        return CommonResultatAnalyseHistoriquePeer::populateObjects(CommonResultatAnalyseHistoriquePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

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
     * @param      CommonResultatAnalyseHistorique $obj A CommonResultatAnalyseHistorique object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonResultatAnalyseHistoriquePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonResultatAnalyseHistorique object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonResultatAnalyseHistorique) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonResultatAnalyseHistorique object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonResultatAnalyseHistoriquePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonResultatAnalyseHistorique Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonResultatAnalyseHistoriquePeer::$instances[$key])) {
                return CommonResultatAnalyseHistoriquePeer::$instances[$key];
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
        foreach (CommonResultatAnalyseHistoriquePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonResultatAnalyseHistoriquePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to resultat_analyse_historique
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
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
        $cls = CommonResultatAnalyseHistoriquePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonResultatAnalyseHistoriquePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonResultatAnalyseHistoriquePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonResultatAnalyseHistorique object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonResultatAnalyseHistoriquePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonResultatAnalyseHistoriquePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonResultatAnalyseHistoriquePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonResultatAnalyseHistoriquePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgent table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonResultatAnalyseHistoriquePeer::AGENT_ID, CommonAgentPeer::ID, $join_behavior);

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
     * Selects a collection of CommonResultatAnalyseHistorique objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonResultatAnalyseHistorique objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
        }

        CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        $startcol = CommonResultatAnalyseHistoriquePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonResultatAnalyseHistoriquePeer::AGENT_ID, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonResultatAnalyseHistoriquePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonResultatAnalyseHistoriquePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonResultatAnalyseHistoriquePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonResultatAnalyseHistorique) to $obj2 (CommonAgent)
                $obj2->addCommonResultatAnalyseHistorique($obj1);

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
        $criteria->setPrimaryTableName(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonResultatAnalyseHistoriquePeer::AGENT_ID, CommonAgentPeer::ID, $join_behavior);

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
     * Selects a collection of CommonResultatAnalyseHistorique objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonResultatAnalyseHistorique objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
        }

        CommonResultatAnalyseHistoriquePeer::addSelectColumns($criteria);
        $startcol2 = CommonResultatAnalyseHistoriquePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonResultatAnalyseHistoriquePeer::AGENT_ID, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonResultatAnalyseHistoriquePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonResultatAnalyseHistoriquePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonResultatAnalyseHistoriquePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonResultatAnalyseHistorique) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonResultatAnalyseHistorique($obj1);
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
        return Propel::getDatabaseMap(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME)->getTable(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonResultatAnalyseHistoriquePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonResultatAnalyseHistoriqueTableMap());
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
        return CommonResultatAnalyseHistoriquePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonResultatAnalyseHistorique or Criteria object.
     *
     * @param      mixed $values Criteria or CommonResultatAnalyseHistorique object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonResultatAnalyseHistorique object
        }

        if ($criteria->containsKey(CommonResultatAnalyseHistoriquePeer::ID) && $criteria->keyContainsValue(CommonResultatAnalyseHistoriquePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonResultatAnalyseHistoriquePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonResultatAnalyseHistorique or Criteria object.
     *
     * @param      mixed $values Criteria or CommonResultatAnalyseHistorique object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonResultatAnalyseHistoriquePeer::ID);
            $value = $criteria->remove(CommonResultatAnalyseHistoriquePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonResultatAnalyseHistoriquePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonResultatAnalyseHistoriquePeer::ORGANISME);
            $value = $criteria->remove(CommonResultatAnalyseHistoriquePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonResultatAnalyseHistoriquePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);
            }

        } else { // $values is CommonResultatAnalyseHistorique object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the resultat_analyse_historique table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonResultatAnalyseHistoriquePeer::TABLE_NAME, $con, CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonResultatAnalyseHistoriquePeer::clearInstancePool();
            CommonResultatAnalyseHistoriquePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonResultatAnalyseHistorique or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonResultatAnalyseHistorique object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonResultatAnalyseHistoriquePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonResultatAnalyseHistorique) { // it's a model object
            // invalidate the cache for this single object
            CommonResultatAnalyseHistoriquePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonResultatAnalyseHistoriquePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonResultatAnalyseHistoriquePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonResultatAnalyseHistoriquePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonResultatAnalyseHistoriquePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonResultatAnalyseHistorique object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonResultatAnalyseHistorique $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonResultatAnalyseHistoriquePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, CommonResultatAnalyseHistoriquePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonResultatAnalyseHistorique
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME);
        $criteria->add(CommonResultatAnalyseHistoriquePeer::ID, $id);
        $criteria->add(CommonResultatAnalyseHistoriquePeer::ORGANISME, $organisme);
        $v = CommonResultatAnalyseHistoriquePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonResultatAnalyseHistoriquePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonResultatAnalyseHistoriquePeer::buildTableMap();

