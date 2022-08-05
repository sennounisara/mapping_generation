<?php


/**
 * Base static class for performing query and update operations on the 'statistiques_par_entite' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesParEntitePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'statistiques_par_entite';

    /** the related Propel class for this table */
    const OM_CLASS = 'StatistiquesParEntite';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StatistiquesParEntiteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the ID field */
    const ID = 'statistiques_par_entite.ID';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'statistiques_par_entite.ID_ENTITE';

    /** the column name for the TOTAL_RECLAMATIONS_PAR_MOIS field */
    const TOTAL_RECLAMATIONS_PAR_MOIS = 'statistiques_par_entite.TOTAL_RECLAMATIONS_PAR_MOIS';

    /** the column name for the STATUT_GENERAL field */
    const STATUT_GENERAL = 'statistiques_par_entite.STATUT_GENERAL';

    /** the column name for the STATUT_DEMANDE field */
    const STATUT_DEMANDE = 'statistiques_par_entite.STATUT_DEMANDE';

    /** the column name for the CUMUL_A_FIN_MOIS field */
    const CUMUL_A_FIN_MOIS = 'statistiques_par_entite.CUMUL_A_FIN_MOIS';

    /** the column name for the EVOLUTION_MOIS field */
    const EVOLUTION_MOIS = 'statistiques_par_entite.EVOLUTION_MOIS';

    /** the column name for the ID_STATISTIQUE field */
    const ID_STATISTIQUE = 'statistiques_par_entite.ID_STATISTIQUE';

    /** the column name for the ANNEE field */
    const ANNEE = 'statistiques_par_entite.ANNEE';

    /** the column name for the MOIS field */
    const MOIS = 'statistiques_par_entite.MOIS';

    /** the column name for the SIGLE_PATH field */
    const SIGLE_PATH = 'statistiques_par_entite.SIGLE_PATH';

    /** the column name for the TOTAL_PAR_MOIS_ALL_CHILD field */
    const TOTAL_PAR_MOIS_ALL_CHILD = 'statistiques_par_entite.TOTAL_PAR_MOIS_ALL_CHILD';

    /** the column name for the TOTAL field */
    const TOTAL = 'statistiques_par_entite.TOTAL';

    /** the column name for the TOTAL_NON_AFFECTE field */
    const TOTAL_NON_AFFECTE = 'statistiques_par_entite.TOTAL_NON_AFFECTE';

    /** the column name for the TOTAL_HORS_ATTRIBUTION field */
    const TOTAL_HORS_ATTRIBUTION = 'statistiques_par_entite.TOTAL_HORS_ATTRIBUTION';

    /** the column name for the NIVEAU_ENTITE field */
    const NIVEAU_ENTITE = 'statistiques_par_entite.NIVEAU_ENTITE';

    /** the column name for the EVOLUTION_ALL_CHILD field */
    const EVOLUTION_ALL_CHILD = 'statistiques_par_entite.EVOLUTION_ALL_CHILD';

    /** the column name for the EVOLUTION_TOTAL field */
    const EVOLUTION_TOTAL = 'statistiques_par_entite.EVOLUTION_TOTAL';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of StatistiquesParEntite objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array StatistiquesParEntite[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StatistiquesParEntitePeer::$fieldNames[StatistiquesParEntitePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdEntite', 'TotalReclamationsParMois', 'StatutGeneral', 'StatutDemande', 'CumulAFinMois', 'EvolutionMois', 'IdStatistique', 'Annee', 'Mois', 'SiglePath', 'TotalParMoisAllChild', 'Total', 'TotalNonAffecte', 'TotalHorsAttribution', 'NiveauEntite', 'EvolutionAllChild', 'EvolutionTotal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idEntite', 'totalReclamationsParMois', 'statutGeneral', 'statutDemande', 'cumulAFinMois', 'evolutionMois', 'idStatistique', 'annee', 'mois', 'siglePath', 'totalParMoisAllChild', 'total', 'totalNonAffecte', 'totalHorsAttribution', 'niveauEntite', 'evolutionAllChild', 'evolutionTotal', ),
        BasePeer::TYPE_COLNAME => array (StatistiquesParEntitePeer::ID, StatistiquesParEntitePeer::ID_ENTITE, StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS, StatistiquesParEntitePeer::STATUT_GENERAL, StatistiquesParEntitePeer::STATUT_DEMANDE, StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS, StatistiquesParEntitePeer::EVOLUTION_MOIS, StatistiquesParEntitePeer::ID_STATISTIQUE, StatistiquesParEntitePeer::ANNEE, StatistiquesParEntitePeer::MOIS, StatistiquesParEntitePeer::SIGLE_PATH, StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD, StatistiquesParEntitePeer::TOTAL, StatistiquesParEntitePeer::TOTAL_NON_AFFECTE, StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION, StatistiquesParEntitePeer::NIVEAU_ENTITE, StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD, StatistiquesParEntitePeer::EVOLUTION_TOTAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_ENTITE', 'TOTAL_RECLAMATIONS_PAR_MOIS', 'STATUT_GENERAL', 'STATUT_DEMANDE', 'CUMUL_A_FIN_MOIS', 'EVOLUTION_MOIS', 'ID_STATISTIQUE', 'ANNEE', 'MOIS', 'SIGLE_PATH', 'TOTAL_PAR_MOIS_ALL_CHILD', 'TOTAL', 'TOTAL_NON_AFFECTE', 'TOTAL_HORS_ATTRIBUTION', 'NIVEAU_ENTITE', 'EVOLUTION_ALL_CHILD', 'EVOLUTION_TOTAL', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_ENTITE', 'TOTAL_RECLAMATIONS_PAR_MOIS', 'STATUT_GENERAL', 'STATUT_DEMANDE', 'CUMUL_A_FIN_MOIS', 'EVOLUTION_MOIS', 'ID_STATISTIQUE', 'ANNEE', 'MOIS', 'SIGLE_PATH', 'TOTAL_PAR_MOIS_ALL_CHILD', 'TOTAL', 'TOTAL_NON_AFFECTE', 'TOTAL_HORS_ATTRIBUTION', 'NIVEAU_ENTITE', 'EVOLUTION_ALL_CHILD', 'EVOLUTION_TOTAL', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StatistiquesParEntitePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdEntite' => 1, 'TotalReclamationsParMois' => 2, 'StatutGeneral' => 3, 'StatutDemande' => 4, 'CumulAFinMois' => 5, 'EvolutionMois' => 6, 'IdStatistique' => 7, 'Annee' => 8, 'Mois' => 9, 'SiglePath' => 10, 'TotalParMoisAllChild' => 11, 'Total' => 12, 'TotalNonAffecte' => 13, 'TotalHorsAttribution' => 14, 'NiveauEntite' => 15, 'EvolutionAllChild' => 16, 'EvolutionTotal' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idEntite' => 1, 'totalReclamationsParMois' => 2, 'statutGeneral' => 3, 'statutDemande' => 4, 'cumulAFinMois' => 5, 'evolutionMois' => 6, 'idStatistique' => 7, 'annee' => 8, 'mois' => 9, 'siglePath' => 10, 'totalParMoisAllChild' => 11, 'total' => 12, 'totalNonAffecte' => 13, 'totalHorsAttribution' => 14, 'niveauEntite' => 15, 'evolutionAllChild' => 16, 'evolutionTotal' => 17, ),
        BasePeer::TYPE_COLNAME => array (StatistiquesParEntitePeer::ID => 0, StatistiquesParEntitePeer::ID_ENTITE => 1, StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS => 2, StatistiquesParEntitePeer::STATUT_GENERAL => 3, StatistiquesParEntitePeer::STATUT_DEMANDE => 4, StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS => 5, StatistiquesParEntitePeer::EVOLUTION_MOIS => 6, StatistiquesParEntitePeer::ID_STATISTIQUE => 7, StatistiquesParEntitePeer::ANNEE => 8, StatistiquesParEntitePeer::MOIS => 9, StatistiquesParEntitePeer::SIGLE_PATH => 10, StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD => 11, StatistiquesParEntitePeer::TOTAL => 12, StatistiquesParEntitePeer::TOTAL_NON_AFFECTE => 13, StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION => 14, StatistiquesParEntitePeer::NIVEAU_ENTITE => 15, StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD => 16, StatistiquesParEntitePeer::EVOLUTION_TOTAL => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_ENTITE' => 1, 'TOTAL_RECLAMATIONS_PAR_MOIS' => 2, 'STATUT_GENERAL' => 3, 'STATUT_DEMANDE' => 4, 'CUMUL_A_FIN_MOIS' => 5, 'EVOLUTION_MOIS' => 6, 'ID_STATISTIQUE' => 7, 'ANNEE' => 8, 'MOIS' => 9, 'SIGLE_PATH' => 10, 'TOTAL_PAR_MOIS_ALL_CHILD' => 11, 'TOTAL' => 12, 'TOTAL_NON_AFFECTE' => 13, 'TOTAL_HORS_ATTRIBUTION' => 14, 'NIVEAU_ENTITE' => 15, 'EVOLUTION_ALL_CHILD' => 16, 'EVOLUTION_TOTAL' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_ENTITE' => 1, 'TOTAL_RECLAMATIONS_PAR_MOIS' => 2, 'STATUT_GENERAL' => 3, 'STATUT_DEMANDE' => 4, 'CUMUL_A_FIN_MOIS' => 5, 'EVOLUTION_MOIS' => 6, 'ID_STATISTIQUE' => 7, 'ANNEE' => 8, 'MOIS' => 9, 'SIGLE_PATH' => 10, 'TOTAL_PAR_MOIS_ALL_CHILD' => 11, 'TOTAL' => 12, 'TOTAL_NON_AFFECTE' => 13, 'TOTAL_HORS_ATTRIBUTION' => 14, 'NIVEAU_ENTITE' => 15, 'EVOLUTION_ALL_CHILD' => 16, 'EVOLUTION_TOTAL' => 17, ),
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
        $toNames = StatistiquesParEntitePeer::getFieldNames($toType);
        $key = isset(StatistiquesParEntitePeer::$fieldKeys[$fromType][$name]) ? StatistiquesParEntitePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StatistiquesParEntitePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StatistiquesParEntitePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StatistiquesParEntitePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StatistiquesParEntitePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StatistiquesParEntitePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StatistiquesParEntitePeer::ID);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::ID_ENTITE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::STATUT_GENERAL);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::STATUT_DEMANDE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::EVOLUTION_MOIS);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::ID_STATISTIQUE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::ANNEE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::MOIS);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::SIGLE_PATH);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::TOTAL);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::NIVEAU_ENTITE);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD);
            $criteria->addSelectColumn(StatistiquesParEntitePeer::EVOLUTION_TOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.TOTAL_RECLAMATIONS_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.STATUT_GENERAL');
            $criteria->addSelectColumn($alias . '.STATUT_DEMANDE');
            $criteria->addSelectColumn($alias . '.CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.EVOLUTION_MOIS');
            $criteria->addSelectColumn($alias . '.ID_STATISTIQUE');
            $criteria->addSelectColumn($alias . '.ANNEE');
            $criteria->addSelectColumn($alias . '.MOIS');
            $criteria->addSelectColumn($alias . '.SIGLE_PATH');
            $criteria->addSelectColumn($alias . '.TOTAL_PAR_MOIS_ALL_CHILD');
            $criteria->addSelectColumn($alias . '.TOTAL');
            $criteria->addSelectColumn($alias . '.TOTAL_NON_AFFECTE');
            $criteria->addSelectColumn($alias . '.TOTAL_HORS_ATTRIBUTION');
            $criteria->addSelectColumn($alias . '.NIVEAU_ENTITE');
            $criteria->addSelectColumn($alias . '.EVOLUTION_ALL_CHILD');
            $criteria->addSelectColumn($alias . '.EVOLUTION_TOTAL');
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
        $criteria->setPrimaryTableName(StatistiquesParEntitePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StatistiquesParEntitePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StatistiquesParEntitePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 StatistiquesParEntite
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StatistiquesParEntitePeer::doSelect($critcopy, $con);
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
        return StatistiquesParEntitePeer::populateObjects(StatistiquesParEntitePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StatistiquesParEntitePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StatistiquesParEntitePeer::DATABASE_NAME);

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
     * @param      StatistiquesParEntite $obj A StatistiquesParEntite object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            StatistiquesParEntitePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A StatistiquesParEntite object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof StatistiquesParEntite) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or StatistiquesParEntite object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StatistiquesParEntitePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   StatistiquesParEntite Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StatistiquesParEntitePeer::$instances[$key])) {
                return StatistiquesParEntitePeer::$instances[$key];
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
        foreach (StatistiquesParEntitePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StatistiquesParEntitePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to statistiques_par_entite
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
        $cls = StatistiquesParEntitePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StatistiquesParEntitePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StatistiquesParEntitePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StatistiquesParEntitePeer::addInstanceToPool($obj, $key);
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
     * @return array (StatistiquesParEntite object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StatistiquesParEntitePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StatistiquesParEntitePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StatistiquesParEntitePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StatistiquesParEntitePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StatistiquesParEntitePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StatistiquesParEntitePeer::DATABASE_NAME)->getTable(StatistiquesParEntitePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStatistiquesParEntitePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStatistiquesParEntitePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new StatistiquesParEntiteTableMap());
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
        return StatistiquesParEntitePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a StatistiquesParEntite or Criteria object.
     *
     * @param      mixed $values Criteria or StatistiquesParEntite object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from StatistiquesParEntite object
        }

        if ($criteria->containsKey(StatistiquesParEntitePeer::ID) && $criteria->keyContainsValue(StatistiquesParEntitePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.StatistiquesParEntitePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(StatistiquesParEntitePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a StatistiquesParEntite or Criteria object.
     *
     * @param      mixed $values Criteria or StatistiquesParEntite object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StatistiquesParEntitePeer::ID);
            $value = $criteria->remove(StatistiquesParEntitePeer::ID);
            if ($value) {
                $selectCriteria->add(StatistiquesParEntitePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StatistiquesParEntitePeer::TABLE_NAME);
            }

        } else { // $values is StatistiquesParEntite object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StatistiquesParEntitePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the statistiques_par_entite table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StatistiquesParEntitePeer::TABLE_NAME, $con, StatistiquesParEntitePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StatistiquesParEntitePeer::clearInstancePool();
            StatistiquesParEntitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a StatistiquesParEntite or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or StatistiquesParEntite object or primary key or array of primary keys
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
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StatistiquesParEntitePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof StatistiquesParEntite) { // it's a model object
            // invalidate the cache for this single object
            StatistiquesParEntitePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);
            $criteria->add(StatistiquesParEntitePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                StatistiquesParEntitePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StatistiquesParEntitePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            StatistiquesParEntitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given StatistiquesParEntite object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      StatistiquesParEntite $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StatistiquesParEntitePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StatistiquesParEntitePeer::TABLE_NAME);

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

        return BasePeer::doValidate(StatistiquesParEntitePeer::DATABASE_NAME, StatistiquesParEntitePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return StatistiquesParEntite
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = StatistiquesParEntitePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);
        $criteria->add(StatistiquesParEntitePeer::ID, $pk);

        $v = StatistiquesParEntitePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return StatistiquesParEntite[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);
            $criteria->add(StatistiquesParEntitePeer::ID, $pks, Criteria::IN);
            $objs = StatistiquesParEntitePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseStatistiquesParEntitePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStatistiquesParEntitePeer::buildTableMap();

