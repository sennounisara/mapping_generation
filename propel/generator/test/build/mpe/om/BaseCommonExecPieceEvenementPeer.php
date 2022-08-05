<?php


/**
 * Base static class for performing query and update operations on the 'exec_piece_evenement' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceEvenementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_piece_evenement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecPieceEvenement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecPieceEvenementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'exec_piece_evenement.id';

    /** the column name for the id_evenement field */
    const ID_EVENEMENT = 'exec_piece_evenement.id_evenement';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_piece_evenement.id_contrat';

    /** the column name for the id_type_piece field */
    const ID_TYPE_PIECE = 'exec_piece_evenement.id_type_piece';

    /** the column name for the libelle field */
    const LIBELLE = 'exec_piece_evenement.libelle';

    /** the column name for the taille field */
    const TAILLE = 'exec_piece_evenement.taille';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_piece_evenement.id_agent_crea';

    /** the column name for the date_creat field */
    const DATE_CREAT = 'exec_piece_evenement.date_creat';

    /** the column name for the id_blob field */
    const ID_BLOB = 'exec_piece_evenement.id_blob';

    /** the column name for the acces_fournisseur field */
    const ACCES_FOURNISSEUR = 'exec_piece_evenement.acces_fournisseur';

    /** the column name for the depuis_paraph field */
    const DEPUIS_PARAPH = 'exec_piece_evenement.depuis_paraph';

    /** The enumerated values for the acces_fournisseur field */
    const ACCES_FOURNISSEUR_0 = '0';
    const ACCES_FOURNISSEUR_1 = '1';

    /** The enumerated values for the depuis_paraph field */
    const DEPUIS_PARAPH_0 = '0';
    const DEPUIS_PARAPH_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecPieceEvenement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecPieceEvenement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPieceEvenementPeer::$fieldNames[CommonExecPieceEvenementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdEvenement', 'IdContrat', 'IdTypePiece', 'Libelle', 'Taille', 'IdAgentCrea', 'DateCreat', 'IdBlob', 'AccesFournisseur', 'DepuisParaph', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idEvenement', 'idContrat', 'idTypePiece', 'libelle', 'taille', 'idAgentCrea', 'dateCreat', 'idBlob', 'accesFournisseur', 'depuisParaph', ),
        BasePeer::TYPE_COLNAME => array (CommonExecPieceEvenementPeer::ID, CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecPieceEvenementPeer::LIBELLE, CommonExecPieceEvenementPeer::TAILLE, CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonExecPieceEvenementPeer::DATE_CREAT, CommonExecPieceEvenementPeer::ID_BLOB, CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR, CommonExecPieceEvenementPeer::DEPUIS_PARAPH, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_EVENEMENT', 'ID_CONTRAT', 'ID_TYPE_PIECE', 'LIBELLE', 'TAILLE', 'ID_AGENT_CREA', 'DATE_CREAT', 'ID_BLOB', 'ACCES_FOURNISSEUR', 'DEPUIS_PARAPH', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_evenement', 'id_contrat', 'id_type_piece', 'libelle', 'taille', 'id_agent_crea', 'date_creat', 'id_blob', 'acces_fournisseur', 'depuis_paraph', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecPieceEvenementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdEvenement' => 1, 'IdContrat' => 2, 'IdTypePiece' => 3, 'Libelle' => 4, 'Taille' => 5, 'IdAgentCrea' => 6, 'DateCreat' => 7, 'IdBlob' => 8, 'AccesFournisseur' => 9, 'DepuisParaph' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idEvenement' => 1, 'idContrat' => 2, 'idTypePiece' => 3, 'libelle' => 4, 'taille' => 5, 'idAgentCrea' => 6, 'dateCreat' => 7, 'idBlob' => 8, 'accesFournisseur' => 9, 'depuisParaph' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonExecPieceEvenementPeer::ID => 0, CommonExecPieceEvenementPeer::ID_EVENEMENT => 1, CommonExecPieceEvenementPeer::ID_CONTRAT => 2, CommonExecPieceEvenementPeer::ID_TYPE_PIECE => 3, CommonExecPieceEvenementPeer::LIBELLE => 4, CommonExecPieceEvenementPeer::TAILLE => 5, CommonExecPieceEvenementPeer::ID_AGENT_CREA => 6, CommonExecPieceEvenementPeer::DATE_CREAT => 7, CommonExecPieceEvenementPeer::ID_BLOB => 8, CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR => 9, CommonExecPieceEvenementPeer::DEPUIS_PARAPH => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_EVENEMENT' => 1, 'ID_CONTRAT' => 2, 'ID_TYPE_PIECE' => 3, 'LIBELLE' => 4, 'TAILLE' => 5, 'ID_AGENT_CREA' => 6, 'DATE_CREAT' => 7, 'ID_BLOB' => 8, 'ACCES_FOURNISSEUR' => 9, 'DEPUIS_PARAPH' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_evenement' => 1, 'id_contrat' => 2, 'id_type_piece' => 3, 'libelle' => 4, 'taille' => 5, 'id_agent_crea' => 6, 'date_creat' => 7, 'id_blob' => 8, 'acces_fournisseur' => 9, 'depuis_paraph' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR => array(
            CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR_0,
            CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR_1,
        ),
        CommonExecPieceEvenementPeer::DEPUIS_PARAPH => array(
            CommonExecPieceEvenementPeer::DEPUIS_PARAPH_0,
            CommonExecPieceEvenementPeer::DEPUIS_PARAPH_1,
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
        $toNames = CommonExecPieceEvenementPeer::getFieldNames($toType);
        $key = isset(CommonExecPieceEvenementPeer::$fieldKeys[$fromType][$name]) ? CommonExecPieceEvenementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecPieceEvenementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecPieceEvenementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecPieceEvenementPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecPieceEvenementPeer::$enumValueSets;
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
        $valueSets = CommonExecPieceEvenementPeer::getValueSets();

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
        $values = CommonExecPieceEvenementPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonExecPieceEvenementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecPieceEvenementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID_EVENEMENT);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID_TYPE_PIECE);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::LIBELLE);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::TAILLE);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::DATE_CREAT);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::ACCES_FOURNISSEUR);
            $criteria->addSelectColumn(CommonExecPieceEvenementPeer::DEPUIS_PARAPH);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_evenement');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_type_piece');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_creat');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.acces_fournisseur');
            $criteria->addSelectColumn($alias . '.depuis_paraph');
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
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPieceEvenement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecPieceEvenementPeer::doSelect($critcopy, $con);
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
        return CommonExecPieceEvenementPeer::populateObjects(CommonExecPieceEvenementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

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
     * @param      CommonExecPieceEvenement $obj A CommonExecPieceEvenement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecPieceEvenementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecPieceEvenement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecPieceEvenement) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecPieceEvenement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecPieceEvenementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecPieceEvenement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecPieceEvenementPeer::$instances[$key])) {
                return CommonExecPieceEvenementPeer::$instances[$key];
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
        foreach (CommonExecPieceEvenementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecPieceEvenementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_piece_evenement
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
        $cls = CommonExecPieceEvenementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecPieceEvenementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecPieceEvenementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecPieceEvenement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecPieceEvenementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecPieceEvenementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecPieceEvenementPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypePieceEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypePieceEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with their CommonAgent objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonAgentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to $obj2 (CommonAgent)
                $obj2->addCommonExecPieceEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecPieceEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with their CommonExecEvenement objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecEvenementPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecEvenementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecEvenementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecEvenementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to $obj2 (CommonExecEvenement)
                $obj2->addCommonExecPieceEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with their CommonExecTypePieceEvenement objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypePieceEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypePieceEvenementPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypePieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypePieceEvenementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypePieceEvenementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypePieceEvenementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to $obj2 (CommonExecTypePieceEvenement)
                $obj2->addCommonExecPieceEvenement($obj1);

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
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypePieceEvenementPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecTypePieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPieceEvenement($obj1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecPieceEvenement($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecEvenement rows

            $key4 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecEvenementPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj4 (CommonExecEvenement)
                $obj4->addCommonExecPieceEvenement($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypePieceEvenement rows

            $key5 = CommonExecTypePieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = CommonExecTypePieceEvenementPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = CommonExecTypePieceEvenementPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecTypePieceEvenementPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj5 (CommonExecTypePieceEvenement)
                $obj5->addCommonExecPieceEvenement($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
    public static function doCountJoinAllExceptCommonAgent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypePieceEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypePieceEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with all related objects except CommonAgent.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypePieceEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypePieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecEvenement rows

                $key3 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecEvenementPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecEvenementPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecEvenementPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj3 (CommonExecEvenement)
                $obj3->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypePieceEvenement rows

                $key4 = CommonExecTypePieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypePieceEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypePieceEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypePieceEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj4 (CommonExecTypePieceEvenement)
                $obj4->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
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
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypePieceEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypePieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecEvenement rows

                $key3 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecEvenementPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecEvenementPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecEvenementPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj3 (CommonExecEvenement)
                $obj3->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypePieceEvenement rows

                $key4 = CommonExecTypePieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypePieceEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypePieceEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypePieceEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj4 (CommonExecTypePieceEvenement)
                $obj4->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with all related objects except CommonExecEvenement.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypePieceEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypePieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_TYPE_PIECE, CommonExecTypePieceEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPieceEvenement($obj1);

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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypePieceEvenement rows

                $key4 = CommonExecTypePieceEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypePieceEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypePieceEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypePieceEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj4 (CommonExecTypePieceEvenement)
                $obj4->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecPieceEvenement objects pre-filled with all related objects except CommonExecTypePieceEvenement.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecPieceEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypePieceEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);
        }

        CommonExecPieceEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecPieceEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_AGENT_CREA, CommonAgentPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecPieceEvenementPeer::ID_EVENEMENT, CommonExecEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecPieceEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecPieceEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecPieceEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecPieceEvenementPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj2 (CommonAgent)
                $obj2->addCommonExecPieceEvenement($obj1);

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

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecPieceEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecEvenement rows

                $key4 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecPieceEvenement) to the collection in $obj4 (CommonExecEvenement)
                $obj4->addCommonExecPieceEvenement($obj1);

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
        return Propel::getDatabaseMap(CommonExecPieceEvenementPeer::DATABASE_NAME)->getTable(CommonExecPieceEvenementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecPieceEvenementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecPieceEvenementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecPieceEvenementTableMap());
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
        return CommonExecPieceEvenementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecPieceEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPieceEvenement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecPieceEvenement object
        }

        if ($criteria->containsKey(CommonExecPieceEvenementPeer::ID) && $criteria->keyContainsValue(CommonExecPieceEvenementPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecPieceEvenementPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecPieceEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecPieceEvenement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecPieceEvenementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecPieceEvenementPeer::ID);
            $value = $criteria->remove(CommonExecPieceEvenementPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecPieceEvenementPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecPieceEvenementPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecPieceEvenement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_piece_evenement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecPieceEvenementPeer::TABLE_NAME, $con, CommonExecPieceEvenementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecPieceEvenementPeer::clearInstancePool();
            CommonExecPieceEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecPieceEvenement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecPieceEvenement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecPieceEvenementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecPieceEvenement) { // it's a model object
            // invalidate the cache for this single object
            CommonExecPieceEvenementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecPieceEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonExecPieceEvenementPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecPieceEvenementPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecPieceEvenementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecPieceEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecPieceEvenement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecPieceEvenement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecPieceEvenementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecPieceEvenementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecPieceEvenementPeer::DATABASE_NAME, CommonExecPieceEvenementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPieceEvenement
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecPieceEvenementPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecPieceEvenementPeer::DATABASE_NAME);
        $criteria->add(CommonExecPieceEvenementPeer::ID, $pk);

        $v = CommonExecPieceEvenementPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecPieceEvenement[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecPieceEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonExecPieceEvenementPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecPieceEvenementPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecPieceEvenementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecPieceEvenementPeer::buildTableMap();

