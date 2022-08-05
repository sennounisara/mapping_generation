<?php


/**
 * Base static class for performing query and update operations on the 'exec_livrable_contrat' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecLivrableContratPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_livrable_contrat';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecLivrableContrat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecLivrableContratTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'exec_livrable_contrat.id';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_livrable_contrat.id_contrat';

    /** the column name for the id_phase field */
    const ID_PHASE = 'exec_livrable_contrat.id_phase';

    /** the column name for the libelle field */
    const LIBELLE = 'exec_livrable_contrat.libelle';

    /** the column name for the taille field */
    const TAILLE = 'exec_livrable_contrat.taille';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_livrable_contrat.id_agent_crea';

    /** the column name for the date_creat field */
    const DATE_CREAT = 'exec_livrable_contrat.date_creat';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_livrable_contrat.id_agent_modif';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_livrable_contrat.date_modif';

    /** the column name for the id_blob field */
    const ID_BLOB = 'exec_livrable_contrat.id_blob';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'exec_livrable_contrat.nom_fichier';

    /** the column name for the statut field */
    const STATUT = 'exec_livrable_contrat.statut';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'exec_livrable_contrat.commentaire';

    /** The enumerated values for the statut field */
    const STATUT_0 = '0';
    const STATUT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecLivrableContrat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecLivrableContrat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecLivrableContratPeer::$fieldNames[CommonExecLivrableContratPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdContrat', 'IdPhase', 'Libelle', 'Taille', 'IdAgentCrea', 'DateCreat', 'IdAgentModif', 'DateModif', 'IdBlob', 'NomFichier', 'Statut', 'Commentaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idContrat', 'idPhase', 'libelle', 'taille', 'idAgentCrea', 'dateCreat', 'idAgentModif', 'dateModif', 'idBlob', 'nomFichier', 'statut', 'commentaire', ),
        BasePeer::TYPE_COLNAME => array (CommonExecLivrableContratPeer::ID, CommonExecLivrableContratPeer::ID_CONTRAT, CommonExecLivrableContratPeer::ID_PHASE, CommonExecLivrableContratPeer::LIBELLE, CommonExecLivrableContratPeer::TAILLE, CommonExecLivrableContratPeer::ID_AGENT_CREA, CommonExecLivrableContratPeer::DATE_CREAT, CommonExecLivrableContratPeer::ID_AGENT_MODIF, CommonExecLivrableContratPeer::DATE_MODIF, CommonExecLivrableContratPeer::ID_BLOB, CommonExecLivrableContratPeer::NOM_FICHIER, CommonExecLivrableContratPeer::STATUT, CommonExecLivrableContratPeer::COMMENTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CONTRAT', 'ID_PHASE', 'LIBELLE', 'TAILLE', 'ID_AGENT_CREA', 'DATE_CREAT', 'ID_AGENT_MODIF', 'DATE_MODIF', 'ID_BLOB', 'NOM_FICHIER', 'STATUT', 'COMMENTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_contrat', 'id_phase', 'libelle', 'taille', 'id_agent_crea', 'date_creat', 'id_agent_modif', 'date_modif', 'id_blob', 'nom_fichier', 'statut', 'commentaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecLivrableContratPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdContrat' => 1, 'IdPhase' => 2, 'Libelle' => 3, 'Taille' => 4, 'IdAgentCrea' => 5, 'DateCreat' => 6, 'IdAgentModif' => 7, 'DateModif' => 8, 'IdBlob' => 9, 'NomFichier' => 10, 'Statut' => 11, 'Commentaire' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idContrat' => 1, 'idPhase' => 2, 'libelle' => 3, 'taille' => 4, 'idAgentCrea' => 5, 'dateCreat' => 6, 'idAgentModif' => 7, 'dateModif' => 8, 'idBlob' => 9, 'nomFichier' => 10, 'statut' => 11, 'commentaire' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonExecLivrableContratPeer::ID => 0, CommonExecLivrableContratPeer::ID_CONTRAT => 1, CommonExecLivrableContratPeer::ID_PHASE => 2, CommonExecLivrableContratPeer::LIBELLE => 3, CommonExecLivrableContratPeer::TAILLE => 4, CommonExecLivrableContratPeer::ID_AGENT_CREA => 5, CommonExecLivrableContratPeer::DATE_CREAT => 6, CommonExecLivrableContratPeer::ID_AGENT_MODIF => 7, CommonExecLivrableContratPeer::DATE_MODIF => 8, CommonExecLivrableContratPeer::ID_BLOB => 9, CommonExecLivrableContratPeer::NOM_FICHIER => 10, CommonExecLivrableContratPeer::STATUT => 11, CommonExecLivrableContratPeer::COMMENTAIRE => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CONTRAT' => 1, 'ID_PHASE' => 2, 'LIBELLE' => 3, 'TAILLE' => 4, 'ID_AGENT_CREA' => 5, 'DATE_CREAT' => 6, 'ID_AGENT_MODIF' => 7, 'DATE_MODIF' => 8, 'ID_BLOB' => 9, 'NOM_FICHIER' => 10, 'STATUT' => 11, 'COMMENTAIRE' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_contrat' => 1, 'id_phase' => 2, 'libelle' => 3, 'taille' => 4, 'id_agent_crea' => 5, 'date_creat' => 6, 'id_agent_modif' => 7, 'date_modif' => 8, 'id_blob' => 9, 'nom_fichier' => 10, 'statut' => 11, 'commentaire' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecLivrableContratPeer::STATUT => array(
            CommonExecLivrableContratPeer::STATUT_0,
            CommonExecLivrableContratPeer::STATUT_1,
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
        $toNames = CommonExecLivrableContratPeer::getFieldNames($toType);
        $key = isset(CommonExecLivrableContratPeer::$fieldKeys[$fromType][$name]) ? CommonExecLivrableContratPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecLivrableContratPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecLivrableContratPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecLivrableContratPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecLivrableContratPeer::$enumValueSets;
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
        $valueSets = CommonExecLivrableContratPeer::getValueSets();

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
        $values = CommonExecLivrableContratPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonExecLivrableContratPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecLivrableContratPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID_PHASE);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::LIBELLE);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::TAILLE);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::DATE_CREAT);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::STATUT);
            $criteria->addSelectColumn(CommonExecLivrableContratPeer::COMMENTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_phase');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_creat');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.commentaire');
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
        $criteria->setPrimaryTableName(CommonExecLivrableContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecLivrableContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecLivrableContrat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecLivrableContratPeer::doSelect($critcopy, $con);
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
        return CommonExecLivrableContratPeer::populateObjects(CommonExecLivrableContratPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecLivrableContratPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

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
     * @param      CommonExecLivrableContrat $obj A CommonExecLivrableContrat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecLivrableContratPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecLivrableContrat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecLivrableContrat) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecLivrableContrat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecLivrableContratPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecLivrableContrat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecLivrableContratPeer::$instances[$key])) {
                return CommonExecLivrableContratPeer::$instances[$key];
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
        foreach (CommonExecLivrableContratPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecLivrableContratPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_livrable_contrat
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
        $cls = CommonExecLivrableContratPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecLivrableContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecLivrableContratPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecLivrableContratPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecLivrableContrat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecLivrableContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecLivrableContratPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecLivrableContratPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecLivrableContratPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecLivrableContratPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonExecLivrableContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecLivrableContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecLivrableContratPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecLivrableContrat objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecLivrableContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);
        }

        CommonExecLivrableContratPeer::addSelectColumns($criteria);
        $startcol = CommonExecLivrableContratPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecLivrableContratPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecLivrableContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecLivrableContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecLivrableContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecLivrableContratPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecLivrableContrat) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecLivrableContrat($obj1);

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
        $criteria->setPrimaryTableName(CommonExecLivrableContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecLivrableContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecLivrableContratPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecLivrableContrat objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecLivrableContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);
        }

        CommonExecLivrableContratPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecLivrableContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecLivrableContratPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecLivrableContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecLivrableContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecLivrableContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecLivrableContratPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecLivrableContrat) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecLivrableContrat($obj1);
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
        return Propel::getDatabaseMap(CommonExecLivrableContratPeer::DATABASE_NAME)->getTable(CommonExecLivrableContratPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecLivrableContratPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecLivrableContratPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecLivrableContratTableMap());
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
        return CommonExecLivrableContratPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecLivrableContrat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecLivrableContrat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecLivrableContrat object
        }

        if ($criteria->containsKey(CommonExecLivrableContratPeer::ID) && $criteria->keyContainsValue(CommonExecLivrableContratPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecLivrableContratPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecLivrableContrat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecLivrableContrat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecLivrableContratPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecLivrableContratPeer::ID);
            $value = $criteria->remove(CommonExecLivrableContratPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecLivrableContratPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecLivrableContratPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecLivrableContrat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_livrable_contrat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecLivrableContratPeer::TABLE_NAME, $con, CommonExecLivrableContratPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecLivrableContratPeer::clearInstancePool();
            CommonExecLivrableContratPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecLivrableContrat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecLivrableContrat object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecLivrableContratPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecLivrableContrat) { // it's a model object
            // invalidate the cache for this single object
            CommonExecLivrableContratPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecLivrableContratPeer::DATABASE_NAME);
            $criteria->add(CommonExecLivrableContratPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecLivrableContratPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecLivrableContratPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecLivrableContratPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecLivrableContrat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecLivrableContrat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecLivrableContratPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecLivrableContratPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecLivrableContratPeer::DATABASE_NAME, CommonExecLivrableContratPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecLivrableContrat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecLivrableContratPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecLivrableContratPeer::DATABASE_NAME);
        $criteria->add(CommonExecLivrableContratPeer::ID, $pk);

        $v = CommonExecLivrableContratPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecLivrableContrat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecLivrableContratPeer::DATABASE_NAME);
            $criteria->add(CommonExecLivrableContratPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecLivrableContratPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecLivrableContratPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecLivrableContratPeer::buildTableMap();

