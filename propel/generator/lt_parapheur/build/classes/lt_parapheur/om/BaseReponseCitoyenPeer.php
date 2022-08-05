<?php


/**
 * Base static class for performing query and update operations on the 'reponse_citoyen' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseReponseCitoyenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'reponse_citoyen';

    /** the related Propel class for this table */
    const OM_CLASS = 'ReponseCitoyen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ReponseCitoyenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the ID_REPONSE field */
    const ID_REPONSE = 'reponse_citoyen.ID_REPONSE';

    /** the column name for the ID_ECHANGE field */
    const ID_ECHANGE = 'reponse_citoyen.ID_ECHANGE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'reponse_citoyen.ID_DEMANDE';

    /** the column name for the ID_PIECE_JOINTE field */
    const ID_PIECE_JOINTE = 'reponse_citoyen.ID_PIECE_JOINTE';

    /** the column name for the NOM_PIECE_JOINTE field */
    const NOM_PIECE_JOINTE = 'reponse_citoyen.NOM_PIECE_JOINTE';

    /** the column name for the MESSAGE field */
    const MESSAGE = 'reponse_citoyen.MESSAGE';

    /** the column name for the DATE_REPONSE field */
    const DATE_REPONSE = 'reponse_citoyen.DATE_REPONSE';

    /** the column name for the VISUALISER field */
    const VISUALISER = 'reponse_citoyen.VISUALISER';

    /** the column name for the LIE_AUX_ANNEXES field */
    const LIE_AUX_ANNEXES = 'reponse_citoyen.LIE_AUX_ANNEXES';

    /** The enumerated values for the VISUALISER field */
    const VISUALISER_0 = '0';
    const VISUALISER_1 = '1';

    /** The enumerated values for the LIE_AUX_ANNEXES field */
    const LIE_AUX_ANNEXES_0 = '0';
    const LIE_AUX_ANNEXES_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ReponseCitoyen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ReponseCitoyen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ReponseCitoyenPeer::$fieldNames[ReponseCitoyenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdReponse', 'IdEchange', 'IdDemande', 'IdPieceJointe', 'NomPieceJointe', 'Message', 'DateReponse', 'Visualiser', 'LieAuxAnnexes', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idReponse', 'idEchange', 'idDemande', 'idPieceJointe', 'nomPieceJointe', 'message', 'dateReponse', 'visualiser', 'lieAuxAnnexes', ),
        BasePeer::TYPE_COLNAME => array (ReponseCitoyenPeer::ID_REPONSE, ReponseCitoyenPeer::ID_ECHANGE, ReponseCitoyenPeer::ID_DEMANDE, ReponseCitoyenPeer::ID_PIECE_JOINTE, ReponseCitoyenPeer::NOM_PIECE_JOINTE, ReponseCitoyenPeer::MESSAGE, ReponseCitoyenPeer::DATE_REPONSE, ReponseCitoyenPeer::VISUALISER, ReponseCitoyenPeer::LIE_AUX_ANNEXES, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_REPONSE', 'ID_ECHANGE', 'ID_DEMANDE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'MESSAGE', 'DATE_REPONSE', 'VISUALISER', 'LIE_AUX_ANNEXES', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_REPONSE', 'ID_ECHANGE', 'ID_DEMANDE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'MESSAGE', 'DATE_REPONSE', 'VISUALISER', 'LIE_AUX_ANNEXES', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ReponseCitoyenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdReponse' => 0, 'IdEchange' => 1, 'IdDemande' => 2, 'IdPieceJointe' => 3, 'NomPieceJointe' => 4, 'Message' => 5, 'DateReponse' => 6, 'Visualiser' => 7, 'LieAuxAnnexes' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idReponse' => 0, 'idEchange' => 1, 'idDemande' => 2, 'idPieceJointe' => 3, 'nomPieceJointe' => 4, 'message' => 5, 'dateReponse' => 6, 'visualiser' => 7, 'lieAuxAnnexes' => 8, ),
        BasePeer::TYPE_COLNAME => array (ReponseCitoyenPeer::ID_REPONSE => 0, ReponseCitoyenPeer::ID_ECHANGE => 1, ReponseCitoyenPeer::ID_DEMANDE => 2, ReponseCitoyenPeer::ID_PIECE_JOINTE => 3, ReponseCitoyenPeer::NOM_PIECE_JOINTE => 4, ReponseCitoyenPeer::MESSAGE => 5, ReponseCitoyenPeer::DATE_REPONSE => 6, ReponseCitoyenPeer::VISUALISER => 7, ReponseCitoyenPeer::LIE_AUX_ANNEXES => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_REPONSE' => 0, 'ID_ECHANGE' => 1, 'ID_DEMANDE' => 2, 'ID_PIECE_JOINTE' => 3, 'NOM_PIECE_JOINTE' => 4, 'MESSAGE' => 5, 'DATE_REPONSE' => 6, 'VISUALISER' => 7, 'LIE_AUX_ANNEXES' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_REPONSE' => 0, 'ID_ECHANGE' => 1, 'ID_DEMANDE' => 2, 'ID_PIECE_JOINTE' => 3, 'NOM_PIECE_JOINTE' => 4, 'MESSAGE' => 5, 'DATE_REPONSE' => 6, 'VISUALISER' => 7, 'LIE_AUX_ANNEXES' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ReponseCitoyenPeer::VISUALISER => array(
            ReponseCitoyenPeer::VISUALISER_0,
            ReponseCitoyenPeer::VISUALISER_1,
        ),
        ReponseCitoyenPeer::LIE_AUX_ANNEXES => array(
            ReponseCitoyenPeer::LIE_AUX_ANNEXES_0,
            ReponseCitoyenPeer::LIE_AUX_ANNEXES_1,
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
        $toNames = ReponseCitoyenPeer::getFieldNames($toType);
        $key = isset(ReponseCitoyenPeer::$fieldKeys[$fromType][$name]) ? ReponseCitoyenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ReponseCitoyenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ReponseCitoyenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ReponseCitoyenPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ReponseCitoyenPeer::$enumValueSets;
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
        $valueSets = ReponseCitoyenPeer::getValueSets();

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
        $values = ReponseCitoyenPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ReponseCitoyenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ReponseCitoyenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ReponseCitoyenPeer::ID_REPONSE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::ID_ECHANGE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::ID_DEMANDE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::ID_PIECE_JOINTE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::NOM_PIECE_JOINTE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::MESSAGE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::DATE_REPONSE);
            $criteria->addSelectColumn(ReponseCitoyenPeer::VISUALISER);
            $criteria->addSelectColumn(ReponseCitoyenPeer::LIE_AUX_ANNEXES);
        } else {
            $criteria->addSelectColumn($alias . '.ID_REPONSE');
            $criteria->addSelectColumn($alias . '.ID_ECHANGE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.MESSAGE');
            $criteria->addSelectColumn($alias . '.DATE_REPONSE');
            $criteria->addSelectColumn($alias . '.VISUALISER');
            $criteria->addSelectColumn($alias . '.LIE_AUX_ANNEXES');
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
        $criteria->setPrimaryTableName(ReponseCitoyenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ReponseCitoyenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ReponseCitoyenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ReponseCitoyen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ReponseCitoyenPeer::doSelect($critcopy, $con);
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
        return ReponseCitoyenPeer::populateObjects(ReponseCitoyenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ReponseCitoyenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ReponseCitoyenPeer::DATABASE_NAME);

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
     * @param      ReponseCitoyen $obj A ReponseCitoyen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdReponse();
            } // if key === null
            ReponseCitoyenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ReponseCitoyen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ReponseCitoyen) {
                $key = (string) $value->getIdReponse();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ReponseCitoyen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ReponseCitoyenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ReponseCitoyen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ReponseCitoyenPeer::$instances[$key])) {
                return ReponseCitoyenPeer::$instances[$key];
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
        foreach (ReponseCitoyenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ReponseCitoyenPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to reponse_citoyen
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
        $cls = ReponseCitoyenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ReponseCitoyenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ReponseCitoyenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ReponseCitoyenPeer::addInstanceToPool($obj, $key);
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
     * @return array (ReponseCitoyen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ReponseCitoyenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ReponseCitoyenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ReponseCitoyenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ReponseCitoyenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ReponseCitoyenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ReponseCitoyenPeer::DATABASE_NAME)->getTable(ReponseCitoyenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseReponseCitoyenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseReponseCitoyenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ReponseCitoyenTableMap());
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
        return ReponseCitoyenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ReponseCitoyen or Criteria object.
     *
     * @param      mixed $values Criteria or ReponseCitoyen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ReponseCitoyen object
        }

        if ($criteria->containsKey(ReponseCitoyenPeer::ID_REPONSE) && $criteria->keyContainsValue(ReponseCitoyenPeer::ID_REPONSE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReponseCitoyenPeer::ID_REPONSE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ReponseCitoyenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ReponseCitoyen or Criteria object.
     *
     * @param      mixed $values Criteria or ReponseCitoyen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ReponseCitoyenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ReponseCitoyenPeer::ID_REPONSE);
            $value = $criteria->remove(ReponseCitoyenPeer::ID_REPONSE);
            if ($value) {
                $selectCriteria->add(ReponseCitoyenPeer::ID_REPONSE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ReponseCitoyenPeer::TABLE_NAME);
            }

        } else { // $values is ReponseCitoyen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ReponseCitoyenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the reponse_citoyen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ReponseCitoyenPeer::TABLE_NAME, $con, ReponseCitoyenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ReponseCitoyenPeer::clearInstancePool();
            ReponseCitoyenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ReponseCitoyen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ReponseCitoyen object or primary key or array of primary keys
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
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ReponseCitoyenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ReponseCitoyen) { // it's a model object
            // invalidate the cache for this single object
            ReponseCitoyenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ReponseCitoyenPeer::DATABASE_NAME);
            $criteria->add(ReponseCitoyenPeer::ID_REPONSE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ReponseCitoyenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ReponseCitoyenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ReponseCitoyenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ReponseCitoyen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ReponseCitoyen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ReponseCitoyenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ReponseCitoyenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ReponseCitoyenPeer::DATABASE_NAME, ReponseCitoyenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ReponseCitoyen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ReponseCitoyenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ReponseCitoyenPeer::DATABASE_NAME);
        $criteria->add(ReponseCitoyenPeer::ID_REPONSE, $pk);

        $v = ReponseCitoyenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ReponseCitoyen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ReponseCitoyenPeer::DATABASE_NAME);
            $criteria->add(ReponseCitoyenPeer::ID_REPONSE, $pks, Criteria::IN);
            $objs = ReponseCitoyenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseReponseCitoyenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseReponseCitoyenPeer::buildTableMap();

