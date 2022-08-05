<?php


/**
 * Base static class for performing query and update operations on the 'exec_phase' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecPhasePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_phase';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecPhase';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecPhaseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id field */
    const ID = 'exec_phase.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_phase.id_contrat';

    /** the column name for the numero field */
    const NUMERO = 'exec_phase.numero';

    /** the column name for the intitule field */
    const INTITULE = 'exec_phase.intitule';

    /** the column name for the delai field */
    const DELAI = 'exec_phase.delai';

    /** the column name for the unite_delai field */
    const UNITE_DELAI = 'exec_phase.unite_delai';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_phase.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_phase.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_phase.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_phase.id_agent_modif';

    /** the column name for the delai_reel field */
    const DELAI_REEL = 'exec_phase.delai_reel';

    /** the column name for the depassement field */
    const DEPASSEMENT = 'exec_phase.depassement';

    /** the column name for the date_maj_delai_reel field */
    const DATE_MAJ_DELAI_REEL = 'exec_phase.date_maj_delai_reel';

    /** the column name for the delai_differe field */
    const DELAI_DIFFERE = 'exec_phase.delai_differe';

    /** the column name for the unite_delai_differe field */
    const UNITE_DELAI_DIFFERE = 'exec_phase.unite_delai_differe';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'exec_phase.date_debut';

    /** the column name for the statut field */
    const STATUT = 'exec_phase.statut';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecPhase objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecPhase[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPhasePeer::$fieldNames[CommonExecPhasePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'Numero', 'Intitule', 'Delai', 'UniteDelai', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', 'DelaiReel', 'Depassement', 'DateMajDelaiReel', 'DelaiDiffere', 'UniteDelaiDiffere', 'DateDebut', 'Statut', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'numero', 'intitule', 'delai', 'uniteDelai', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', 'delaiReel', 'depassement', 'dateMajDelaiReel', 'delaiDiffere', 'uniteDelaiDiffere', 'dateDebut', 'statut', ),
        BasePeer::TYPE_COLNAME => array (CommonExecPhasePeer::ID, CommonExecPhasePeer::ID_CONTRAT, CommonExecPhasePeer::NUMERO, CommonExecPhasePeer::INTITULE, CommonExecPhasePeer::DELAI, CommonExecPhasePeer::UNITE_DELAI, CommonExecPhasePeer::DATE_CREA, CommonExecPhasePeer::ID_AGENT_CREA, CommonExecPhasePeer::DATE_MODIF, CommonExecPhasePeer::ID_AGENT_MODIF, CommonExecPhasePeer::DELAI_REEL, CommonExecPhasePeer::DEPASSEMENT, CommonExecPhasePeer::DATE_MAJ_DELAI_REEL, CommonExecPhasePeer::DELAI_DIFFERE, CommonExecPhasePeer::UNITE_DELAI_DIFFERE, CommonExecPhasePeer::DATE_DEBUT, CommonExecPhasePeer::STATUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'NUMERO', 'INTITULE', 'DELAI', 'UNITE_DELAI', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', 'DELAI_REEL', 'DEPASSEMENT', 'DATE_MAJ_DELAI_REEL', 'DELAI_DIFFERE', 'UNITE_DELAI_DIFFERE', 'DATE_DEBUT', 'STATUT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'numero', 'intitule', 'delai', 'unite_delai', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', 'delai_reel', 'depassement', 'date_maj_delai_reel', 'delai_differe', 'unite_delai_differe', 'date_debut', 'statut', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPhasePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'Numero' => 2, 'Intitule' => 3, 'Delai' => 4, 'UniteDelai' => 5, 'DateCrea' => 6, 'IdAgentCrea' => 7, 'DateModif' => 8, 'IdAgentModif' => 9, 'DelaiReel' => 10, 'Depassement' => 11, 'DateMajDelaiReel' => 12, 'DelaiDiffere' => 13, 'UniteDelaiDiffere' => 14, 'DateDebut' => 15, 'Statut' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'numero' => 2, 'intitule' => 3, 'delai' => 4, 'uniteDelai' => 5, 'dateCrea' => 6, 'idAgentCrea' => 7, 'dateModif' => 8, 'idAgentModif' => 9, 'delaiReel' => 10, 'depassement' => 11, 'dateMajDelaiReel' => 12, 'delaiDiffere' => 13, 'uniteDelaiDiffere' => 14, 'dateDebut' => 15, 'statut' => 16, ),
        BasePeer::TYPE_COLNAME => array (CommonExecPhasePeer::ID => 0, CommonExecPhasePeer::ID_CONTRAT => 1, CommonExecPhasePeer::NUMERO => 2, CommonExecPhasePeer::INTITULE => 3, CommonExecPhasePeer::DELAI => 4, CommonExecPhasePeer::UNITE_DELAI => 5, CommonExecPhasePeer::DATE_CREA => 6, CommonExecPhasePeer::ID_AGENT_CREA => 7, CommonExecPhasePeer::DATE_MODIF => 8, CommonExecPhasePeer::ID_AGENT_MODIF => 9, CommonExecPhasePeer::DELAI_REEL => 10, CommonExecPhasePeer::DEPASSEMENT => 11, CommonExecPhasePeer::DATE_MAJ_DELAI_REEL => 12, CommonExecPhasePeer::DELAI_DIFFERE => 13, CommonExecPhasePeer::UNITE_DELAI_DIFFERE => 14, CommonExecPhasePeer::DATE_DEBUT => 15, CommonExecPhasePeer::STATUT => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'NUMERO' => 2, 'INTITULE' => 3, 'DELAI' => 4, 'UNITE_DELAI' => 5, 'DATE_CREA' => 6, 'ID_AGENT_CREA' => 7, 'DATE_MODIF' => 8, 'ID_AGENT_MODIF' => 9, 'DELAI_REEL' => 10, 'DEPASSEMENT' => 11, 'DATE_MAJ_DELAI_REEL' => 12, 'DELAI_DIFFERE' => 13, 'UNITE_DELAI_DIFFERE' => 14, 'DATE_DEBUT' => 15, 'STATUT' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'numero' => 2, 'intitule' => 3, 'delai' => 4, 'unite_delai' => 5, 'date_crea' => 6, 'id_agent_crea' => 7, 'date_modif' => 8, 'id_agent_modif' => 9, 'delai_reel' => 10, 'depassement' => 11, 'date_maj_delai_reel' => 12, 'delai_differe' => 13, 'unite_delai_differe' => 14, 'date_debut' => 15, 'statut' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = CommonExecPhasePeer::getFieldNames($toType);
        $key = isset(CommonExecPhasePeer::$fieldKeys[$fromType][$name]) ? CommonExecPhasePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecPhasePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecPhasePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecPhasePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecPhasePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecPhasePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecPhasePeer::ID);
            $criteria->addSelectColumn(CommonExecPhasePeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecPhasePeer::NUMERO);
            $criteria->addSelectColumn(CommonExecPhasePeer::INTITULE);
            $criteria->addSelectColumn(CommonExecPhasePeer::DELAI);
            $criteria->addSelectColumn(CommonExecPhasePeer::UNITE_DELAI);
            $criteria->addSelectColumn(CommonExecPhasePeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecPhasePeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecPhasePeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecPhasePeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecPhasePeer::DELAI_REEL);
            $criteria->addSelectColumn(CommonExecPhasePeer::DEPASSEMENT);
            $criteria->addSelectColumn(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL);
            $criteria->addSelectColumn(CommonExecPhasePeer::DELAI_DIFFERE);
            $criteria->addSelectColumn(CommonExecPhasePeer::UNITE_DELAI_DIFFERE);
            $criteria->addSelectColumn(CommonExecPhasePeer::DATE_DEBUT);
            $criteria->addSelectColumn(CommonExecPhasePeer::STATUT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.delai');
            $criteria->addSelectColumn($alias . '.unite_delai');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.delai_reel');
            $criteria->addSelectColumn($alias . '.depassement');
            $criteria->addSelectColumn($alias . '.date_maj_delai_reel');
            $criteria->addSelectColumn($alias . '.delai_differe');
            $criteria->addSelectColumn($alias . '.unite_delai_differe');
            $criteria->addSelectColumn($alias . '.date_debut');
            $criteria->addSelectColumn($alias . '.statut');
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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPhase
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecPhasePeer::doSelect($critcopy, $con);
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
        return CommonExecPhasePeer::populateObjects(CommonExecPhasePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

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
     * @param      CommonExecPhase $obj A CommonExecPhase object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecPhasePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecPhase object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecPhase) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecPhase object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecPhasePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecPhase Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecPhasePeer::$instances[$key])) {
                return CommonExecPhasePeer::$instances[$key];
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
        foreach (CommonExecPhasePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecPhasePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_phase
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
        $cls = CommonExecPhasePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecPhasePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecPhasePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecPhase object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecPhasePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecPhasePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecPhasePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecPhase objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentRelatedByIdAgentCrea(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to $obj2 (CommonAgent)
                $obj2->addCommonExecPhaseRelatedByIdAgentCrea($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPhase objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentRelatedByIdAgentModif(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to $obj2 (CommonAgent)
                $obj2->addCommonExecPhaseRelatedByIdAgentModif($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPhase objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecPhase($obj1);

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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecPhase objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPhaseRelatedByIdAgentCrea($obj1);
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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecPhaseRelatedByIdAgentModif($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecContrat rows

            $key4 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecContratPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecContratPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecPhase) to the collection in $obj4 (CommonExecContrat)
                $obj4->addCommonExecPhase($obj1);
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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPhasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPhase objects pre-filled with all related objects except CommonAgentRelatedByIdAgentCrea.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
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
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecPhase($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPhase objects pre-filled with all related objects except CommonAgentRelatedByIdAgentModif.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
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
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPhasePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecPhase($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPhase objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPhase objects.
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
            $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);
        }

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPhasePeer::ID_AGENT_MODIF, CommonAgentPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPhasePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPhasePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPhasePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPhaseRelatedByIdAgentCrea($obj1);

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

                // Add the $obj1 (CommonExecPhase) to the collection in $obj3 (CommonAgent)
                $obj3->addCommonExecPhaseRelatedByIdAgentModif($obj1);

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
        return Propel::getDatabaseMap(CommonExecPhasePeer::DATABASE_NAME)->getTable(CommonExecPhasePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecPhasePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecPhasePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecPhaseTableMap());
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
        return CommonExecPhasePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecPhase or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPhase object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecPhase object
        }

        if ($criteria->containsKey(CommonExecPhasePeer::ID) && $criteria->keyContainsValue(CommonExecPhasePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecPhasePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecPhase or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPhase object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecPhasePeer::ID);
            $value = $criteria->remove(CommonExecPhasePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecPhasePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecPhasePeer::TABLE_NAME);
            }

        } else { // $values is CommonExecPhase object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_phase table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecPhasePeer::TABLE_NAME, $con, CommonExecPhasePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecPhasePeer::clearInstancePool();
            CommonExecPhasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecPhase or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecPhase object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecPhasePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecPhase) { // it's a model object
            // invalidate the cache for this single object
            CommonExecPhasePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);
            $criteria->add(CommonExecPhasePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecPhasePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPhasePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecPhasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecPhase object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecPhase $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecPhasePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecPhasePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecPhasePeer::DATABASE_NAME, CommonExecPhasePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPhase
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecPhasePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);
        $criteria->add(CommonExecPhasePeer::ID, $pk);

        $v = CommonExecPhasePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPhase[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);
            $criteria->add(CommonExecPhasePeer::ID, $pks, Criteria::IN);
            $objs = CommonExecPhasePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecPhasePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecPhasePeer::buildTableMap();

