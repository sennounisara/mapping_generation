<?php


/**
 * Base static class for performing query and update operations on the 't_historique_tache' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTHistoriqueTachePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_historique_tache';

    /** the related Propel class for this table */
    const OM_CLASS = 'THistoriqueTache';

    /** the related TableMap class for this table */
    const TM_CLASS = 'THistoriqueTacheTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the ID_HISTORIQUE_TACHE field */
    const ID_HISTORIQUE_TACHE = 't_historique_tache.ID_HISTORIQUE_TACHE';

    /** the column name for the ID_TACHE field */
    const ID_TACHE = 't_historique_tache.ID_TACHE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 't_historique_tache.ID_DEMANDE';

    /** the column name for the DATE_ECHEANCE_PREVISIONNELLE field */
    const DATE_ECHEANCE_PREVISIONNELLE = 't_historique_tache.DATE_ECHEANCE_PREVISIONNELLE';

    /** the column name for the DATE_ECHEANCE_REELLE field */
    const DATE_ECHEANCE_REELLE = 't_historique_tache.DATE_ECHEANCE_REELLE';

    /** the column name for the RESPONSABLE field */
    const RESPONSABLE = 't_historique_tache.RESPONSABLE';

    /** the column name for the TAUX_REALISATION field */
    const TAUX_REALISATION = 't_historique_tache.TAUX_REALISATION';

    /** the column name for the ID_ACTION field */
    const ID_ACTION = 't_historique_tache.ID_ACTION';

    /** the column name for the ID_STATUT field */
    const ID_STATUT = 't_historique_tache.ID_STATUT';

    /** the column name for the MOTIF field */
    const MOTIF = 't_historique_tache.MOTIF';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 't_historique_tache.ID_AGENT';

    /** the column name for the AGENT field */
    const AGENT = 't_historique_tache.AGENT';

    /** the column name for the DATE_MODIFICATION field */
    const DATE_MODIFICATION = 't_historique_tache.DATE_MODIFICATION';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of THistoriqueTache objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array THistoriqueTache[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. THistoriqueTachePeer::$fieldNames[THistoriqueTachePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdHistoriqueTache', 'IdTache', 'IdDemande', 'DateEcheancePrevisionnelle', 'DateEcheanceReelle', 'Responsable', 'TauxRealisation', 'IdAction', 'IdStatut', 'Motif', 'IdAgent', 'Agent', 'DateModification', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idHistoriqueTache', 'idTache', 'idDemande', 'dateEcheancePrevisionnelle', 'dateEcheanceReelle', 'responsable', 'tauxRealisation', 'idAction', 'idStatut', 'motif', 'idAgent', 'agent', 'dateModification', ),
        BasePeer::TYPE_COLNAME => array (THistoriqueTachePeer::ID_HISTORIQUE_TACHE, THistoriqueTachePeer::ID_TACHE, THistoriqueTachePeer::ID_DEMANDE, THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE, THistoriqueTachePeer::DATE_ECHEANCE_REELLE, THistoriqueTachePeer::RESPONSABLE, THistoriqueTachePeer::TAUX_REALISATION, THistoriqueTachePeer::ID_ACTION, THistoriqueTachePeer::ID_STATUT, THistoriqueTachePeer::MOTIF, THistoriqueTachePeer::ID_AGENT, THistoriqueTachePeer::AGENT, THistoriqueTachePeer::DATE_MODIFICATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_HISTORIQUE_TACHE', 'ID_TACHE', 'ID_DEMANDE', 'DATE_ECHEANCE_PREVISIONNELLE', 'DATE_ECHEANCE_REELLE', 'RESPONSABLE', 'TAUX_REALISATION', 'ID_ACTION', 'ID_STATUT', 'MOTIF', 'ID_AGENT', 'AGENT', 'DATE_MODIFICATION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_HISTORIQUE_TACHE', 'ID_TACHE', 'ID_DEMANDE', 'DATE_ECHEANCE_PREVISIONNELLE', 'DATE_ECHEANCE_REELLE', 'RESPONSABLE', 'TAUX_REALISATION', 'ID_ACTION', 'ID_STATUT', 'MOTIF', 'ID_AGENT', 'AGENT', 'DATE_MODIFICATION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. THistoriqueTachePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdHistoriqueTache' => 0, 'IdTache' => 1, 'IdDemande' => 2, 'DateEcheancePrevisionnelle' => 3, 'DateEcheanceReelle' => 4, 'Responsable' => 5, 'TauxRealisation' => 6, 'IdAction' => 7, 'IdStatut' => 8, 'Motif' => 9, 'IdAgent' => 10, 'Agent' => 11, 'DateModification' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idHistoriqueTache' => 0, 'idTache' => 1, 'idDemande' => 2, 'dateEcheancePrevisionnelle' => 3, 'dateEcheanceReelle' => 4, 'responsable' => 5, 'tauxRealisation' => 6, 'idAction' => 7, 'idStatut' => 8, 'motif' => 9, 'idAgent' => 10, 'agent' => 11, 'dateModification' => 12, ),
        BasePeer::TYPE_COLNAME => array (THistoriqueTachePeer::ID_HISTORIQUE_TACHE => 0, THistoriqueTachePeer::ID_TACHE => 1, THistoriqueTachePeer::ID_DEMANDE => 2, THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE => 3, THistoriqueTachePeer::DATE_ECHEANCE_REELLE => 4, THistoriqueTachePeer::RESPONSABLE => 5, THistoriqueTachePeer::TAUX_REALISATION => 6, THistoriqueTachePeer::ID_ACTION => 7, THistoriqueTachePeer::ID_STATUT => 8, THistoriqueTachePeer::MOTIF => 9, THistoriqueTachePeer::ID_AGENT => 10, THistoriqueTachePeer::AGENT => 11, THistoriqueTachePeer::DATE_MODIFICATION => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_HISTORIQUE_TACHE' => 0, 'ID_TACHE' => 1, 'ID_DEMANDE' => 2, 'DATE_ECHEANCE_PREVISIONNELLE' => 3, 'DATE_ECHEANCE_REELLE' => 4, 'RESPONSABLE' => 5, 'TAUX_REALISATION' => 6, 'ID_ACTION' => 7, 'ID_STATUT' => 8, 'MOTIF' => 9, 'ID_AGENT' => 10, 'AGENT' => 11, 'DATE_MODIFICATION' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_HISTORIQUE_TACHE' => 0, 'ID_TACHE' => 1, 'ID_DEMANDE' => 2, 'DATE_ECHEANCE_PREVISIONNELLE' => 3, 'DATE_ECHEANCE_REELLE' => 4, 'RESPONSABLE' => 5, 'TAUX_REALISATION' => 6, 'ID_ACTION' => 7, 'ID_STATUT' => 8, 'MOTIF' => 9, 'ID_AGENT' => 10, 'AGENT' => 11, 'DATE_MODIFICATION' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = THistoriqueTachePeer::getFieldNames($toType);
        $key = isset(THistoriqueTachePeer::$fieldKeys[$fromType][$name]) ? THistoriqueTachePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(THistoriqueTachePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, THistoriqueTachePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return THistoriqueTachePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. THistoriqueTachePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(THistoriqueTachePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_HISTORIQUE_TACHE);
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_TACHE);
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_DEMANDE);
            $criteria->addSelectColumn(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE);
            $criteria->addSelectColumn(THistoriqueTachePeer::DATE_ECHEANCE_REELLE);
            $criteria->addSelectColumn(THistoriqueTachePeer::RESPONSABLE);
            $criteria->addSelectColumn(THistoriqueTachePeer::TAUX_REALISATION);
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_ACTION);
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_STATUT);
            $criteria->addSelectColumn(THistoriqueTachePeer::MOTIF);
            $criteria->addSelectColumn(THistoriqueTachePeer::ID_AGENT);
            $criteria->addSelectColumn(THistoriqueTachePeer::AGENT);
            $criteria->addSelectColumn(THistoriqueTachePeer::DATE_MODIFICATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID_HISTORIQUE_TACHE');
            $criteria->addSelectColumn($alias . '.ID_TACHE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_ECHEANCE_PREVISIONNELLE');
            $criteria->addSelectColumn($alias . '.DATE_ECHEANCE_REELLE');
            $criteria->addSelectColumn($alias . '.RESPONSABLE');
            $criteria->addSelectColumn($alias . '.TAUX_REALISATION');
            $criteria->addSelectColumn($alias . '.ID_ACTION');
            $criteria->addSelectColumn($alias . '.ID_STATUT');
            $criteria->addSelectColumn($alias . '.MOTIF');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.AGENT');
            $criteria->addSelectColumn($alias . '.DATE_MODIFICATION');
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
        $criteria->setPrimaryTableName(THistoriqueTachePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            THistoriqueTachePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(THistoriqueTachePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 THistoriqueTache
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = THistoriqueTachePeer::doSelect($critcopy, $con);
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
        return THistoriqueTachePeer::populateObjects(THistoriqueTachePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            THistoriqueTachePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(THistoriqueTachePeer::DATABASE_NAME);

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
     * @param      THistoriqueTache $obj A THistoriqueTache object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdHistoriqueTache();
            } // if key === null
            THistoriqueTachePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A THistoriqueTache object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof THistoriqueTache) {
                $key = (string) $value->getIdHistoriqueTache();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or THistoriqueTache object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(THistoriqueTachePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   THistoriqueTache Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(THistoriqueTachePeer::$instances[$key])) {
                return THistoriqueTachePeer::$instances[$key];
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
        foreach (THistoriqueTachePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        THistoriqueTachePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_historique_tache
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
        $cls = THistoriqueTachePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = THistoriqueTachePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = THistoriqueTachePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                THistoriqueTachePeer::addInstanceToPool($obj, $key);
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
     * @return array (THistoriqueTache object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = THistoriqueTachePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = THistoriqueTachePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + THistoriqueTachePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = THistoriqueTachePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            THistoriqueTachePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(THistoriqueTachePeer::DATABASE_NAME)->getTable(THistoriqueTachePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTHistoriqueTachePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTHistoriqueTachePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new THistoriqueTacheTableMap());
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
        return THistoriqueTachePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a THistoriqueTache or Criteria object.
     *
     * @param      mixed $values Criteria or THistoriqueTache object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from THistoriqueTache object
        }

        if ($criteria->containsKey(THistoriqueTachePeer::ID_HISTORIQUE_TACHE) && $criteria->keyContainsValue(THistoriqueTachePeer::ID_HISTORIQUE_TACHE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.THistoriqueTachePeer::ID_HISTORIQUE_TACHE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(THistoriqueTachePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a THistoriqueTache or Criteria object.
     *
     * @param      mixed $values Criteria or THistoriqueTache object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(THistoriqueTachePeer::ID_HISTORIQUE_TACHE);
            $value = $criteria->remove(THistoriqueTachePeer::ID_HISTORIQUE_TACHE);
            if ($value) {
                $selectCriteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(THistoriqueTachePeer::TABLE_NAME);
            }

        } else { // $values is THistoriqueTache object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(THistoriqueTachePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_historique_tache table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(THistoriqueTachePeer::TABLE_NAME, $con, THistoriqueTachePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            THistoriqueTachePeer::clearInstancePool();
            THistoriqueTachePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a THistoriqueTache or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or THistoriqueTache object or primary key or array of primary keys
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
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            THistoriqueTachePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof THistoriqueTache) { // it's a model object
            // invalidate the cache for this single object
            THistoriqueTachePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);
            $criteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                THistoriqueTachePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(THistoriqueTachePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            THistoriqueTachePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given THistoriqueTache object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      THistoriqueTache $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(THistoriqueTachePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(THistoriqueTachePeer::TABLE_NAME);

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

        return BasePeer::doValidate(THistoriqueTachePeer::DATABASE_NAME, THistoriqueTachePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return THistoriqueTache
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = THistoriqueTachePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);
        $criteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $pk);

        $v = THistoriqueTachePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return THistoriqueTache[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);
            $criteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $pks, Criteria::IN);
            $objs = THistoriqueTachePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTHistoriqueTachePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTHistoriqueTachePeer::buildTableMap();

