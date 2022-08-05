<?php


/**
 * Base static class for performing query and update operations on the 'bloc_notes' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseBlocNotesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'bloc_notes';

    /** the related Propel class for this table */
    const OM_CLASS = 'BlocNotes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'BlocNotesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the ID_NOTE field */
    const ID_NOTE = 'bloc_notes.ID_NOTE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'bloc_notes.ID_DEMANDE';

    /** the column name for the TEXTE_NOTE field */
    const TEXTE_NOTE = 'bloc_notes.TEXTE_NOTE';

    /** the column name for the DATE_NOTE field */
    const DATE_NOTE = 'bloc_notes.DATE_NOTE';

    /** the column name for the ID_PIECE_JOINTE field */
    const ID_PIECE_JOINTE = 'bloc_notes.ID_PIECE_JOINTE';

    /** the column name for the NOM_PIECE_JOINTE field */
    const NOM_PIECE_JOINTE = 'bloc_notes.NOM_PIECE_JOINTE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'bloc_notes.ID_ENTITE';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 'bloc_notes.ID_AGENT';

    /** the column name for the NOM_AGENT_FR field */
    const NOM_AGENT_FR = 'bloc_notes.NOM_AGENT_FR';

    /** the column name for the NOM_AGENT_AR field */
    const NOM_AGENT_AR = 'bloc_notes.NOM_AGENT_AR';

    /** the column name for the PRENOM_AGENT_FR field */
    const PRENOM_AGENT_FR = 'bloc_notes.PRENOM_AGENT_FR';

    /** the column name for the PRENOM_AGENT_AR field */
    const PRENOM_AGENT_AR = 'bloc_notes.PRENOM_AGENT_AR';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of BlocNotes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array BlocNotes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. BlocNotesPeer::$fieldNames[BlocNotesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdNote', 'IdDemande', 'TexteNote', 'DateNote', 'IdPieceJointe', 'NomPieceJointe', 'IdEntite', 'IdAgent', 'NomAgentFr', 'NomAgentAr', 'PrenomAgentFr', 'PrenomAgentAr', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idNote', 'idDemande', 'texteNote', 'dateNote', 'idPieceJointe', 'nomPieceJointe', 'idEntite', 'idAgent', 'nomAgentFr', 'nomAgentAr', 'prenomAgentFr', 'prenomAgentAr', ),
        BasePeer::TYPE_COLNAME => array (BlocNotesPeer::ID_NOTE, BlocNotesPeer::ID_DEMANDE, BlocNotesPeer::TEXTE_NOTE, BlocNotesPeer::DATE_NOTE, BlocNotesPeer::ID_PIECE_JOINTE, BlocNotesPeer::NOM_PIECE_JOINTE, BlocNotesPeer::ID_ENTITE, BlocNotesPeer::ID_AGENT, BlocNotesPeer::NOM_AGENT_FR, BlocNotesPeer::NOM_AGENT_AR, BlocNotesPeer::PRENOM_AGENT_FR, BlocNotesPeer::PRENOM_AGENT_AR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_NOTE', 'ID_DEMANDE', 'TEXTE_NOTE', 'DATE_NOTE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'ID_ENTITE', 'ID_AGENT', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_FR', 'PRENOM_AGENT_AR', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_NOTE', 'ID_DEMANDE', 'TEXTE_NOTE', 'DATE_NOTE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'ID_ENTITE', 'ID_AGENT', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_FR', 'PRENOM_AGENT_AR', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. BlocNotesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdNote' => 0, 'IdDemande' => 1, 'TexteNote' => 2, 'DateNote' => 3, 'IdPieceJointe' => 4, 'NomPieceJointe' => 5, 'IdEntite' => 6, 'IdAgent' => 7, 'NomAgentFr' => 8, 'NomAgentAr' => 9, 'PrenomAgentFr' => 10, 'PrenomAgentAr' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idNote' => 0, 'idDemande' => 1, 'texteNote' => 2, 'dateNote' => 3, 'idPieceJointe' => 4, 'nomPieceJointe' => 5, 'idEntite' => 6, 'idAgent' => 7, 'nomAgentFr' => 8, 'nomAgentAr' => 9, 'prenomAgentFr' => 10, 'prenomAgentAr' => 11, ),
        BasePeer::TYPE_COLNAME => array (BlocNotesPeer::ID_NOTE => 0, BlocNotesPeer::ID_DEMANDE => 1, BlocNotesPeer::TEXTE_NOTE => 2, BlocNotesPeer::DATE_NOTE => 3, BlocNotesPeer::ID_PIECE_JOINTE => 4, BlocNotesPeer::NOM_PIECE_JOINTE => 5, BlocNotesPeer::ID_ENTITE => 6, BlocNotesPeer::ID_AGENT => 7, BlocNotesPeer::NOM_AGENT_FR => 8, BlocNotesPeer::NOM_AGENT_AR => 9, BlocNotesPeer::PRENOM_AGENT_FR => 10, BlocNotesPeer::PRENOM_AGENT_AR => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_NOTE' => 0, 'ID_DEMANDE' => 1, 'TEXTE_NOTE' => 2, 'DATE_NOTE' => 3, 'ID_PIECE_JOINTE' => 4, 'NOM_PIECE_JOINTE' => 5, 'ID_ENTITE' => 6, 'ID_AGENT' => 7, 'NOM_AGENT_FR' => 8, 'NOM_AGENT_AR' => 9, 'PRENOM_AGENT_FR' => 10, 'PRENOM_AGENT_AR' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_NOTE' => 0, 'ID_DEMANDE' => 1, 'TEXTE_NOTE' => 2, 'DATE_NOTE' => 3, 'ID_PIECE_JOINTE' => 4, 'NOM_PIECE_JOINTE' => 5, 'ID_ENTITE' => 6, 'ID_AGENT' => 7, 'NOM_AGENT_FR' => 8, 'NOM_AGENT_AR' => 9, 'PRENOM_AGENT_FR' => 10, 'PRENOM_AGENT_AR' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = BlocNotesPeer::getFieldNames($toType);
        $key = isset(BlocNotesPeer::$fieldKeys[$fromType][$name]) ? BlocNotesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(BlocNotesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, BlocNotesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return BlocNotesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. BlocNotesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(BlocNotesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(BlocNotesPeer::ID_NOTE);
            $criteria->addSelectColumn(BlocNotesPeer::ID_DEMANDE);
            $criteria->addSelectColumn(BlocNotesPeer::TEXTE_NOTE);
            $criteria->addSelectColumn(BlocNotesPeer::DATE_NOTE);
            $criteria->addSelectColumn(BlocNotesPeer::ID_PIECE_JOINTE);
            $criteria->addSelectColumn(BlocNotesPeer::NOM_PIECE_JOINTE);
            $criteria->addSelectColumn(BlocNotesPeer::ID_ENTITE);
            $criteria->addSelectColumn(BlocNotesPeer::ID_AGENT);
            $criteria->addSelectColumn(BlocNotesPeer::NOM_AGENT_FR);
            $criteria->addSelectColumn(BlocNotesPeer::NOM_AGENT_AR);
            $criteria->addSelectColumn(BlocNotesPeer::PRENOM_AGENT_FR);
            $criteria->addSelectColumn(BlocNotesPeer::PRENOM_AGENT_AR);
        } else {
            $criteria->addSelectColumn($alias . '.ID_NOTE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.TEXTE_NOTE');
            $criteria->addSelectColumn($alias . '.DATE_NOTE');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_AR');
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
        $criteria->setPrimaryTableName(BlocNotesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            BlocNotesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(BlocNotesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 BlocNotes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = BlocNotesPeer::doSelect($critcopy, $con);
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
        return BlocNotesPeer::populateObjects(BlocNotesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            BlocNotesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(BlocNotesPeer::DATABASE_NAME);

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
     * @param      BlocNotes $obj A BlocNotes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdNote();
            } // if key === null
            BlocNotesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A BlocNotes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof BlocNotes) {
                $key = (string) $value->getIdNote();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or BlocNotes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(BlocNotesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   BlocNotes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(BlocNotesPeer::$instances[$key])) {
                return BlocNotesPeer::$instances[$key];
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
        foreach (BlocNotesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        BlocNotesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to bloc_notes
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
        $cls = BlocNotesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = BlocNotesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = BlocNotesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BlocNotesPeer::addInstanceToPool($obj, $key);
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
     * @return array (BlocNotes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = BlocNotesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = BlocNotesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + BlocNotesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BlocNotesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            BlocNotesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(BlocNotesPeer::DATABASE_NAME)->getTable(BlocNotesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBlocNotesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBlocNotesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new BlocNotesTableMap());
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
        return BlocNotesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a BlocNotes or Criteria object.
     *
     * @param      mixed $values Criteria or BlocNotes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from BlocNotes object
        }

        if ($criteria->containsKey(BlocNotesPeer::ID_NOTE) && $criteria->keyContainsValue(BlocNotesPeer::ID_NOTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BlocNotesPeer::ID_NOTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(BlocNotesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a BlocNotes or Criteria object.
     *
     * @param      mixed $values Criteria or BlocNotes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(BlocNotesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(BlocNotesPeer::ID_NOTE);
            $value = $criteria->remove(BlocNotesPeer::ID_NOTE);
            if ($value) {
                $selectCriteria->add(BlocNotesPeer::ID_NOTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BlocNotesPeer::TABLE_NAME);
            }

        } else { // $values is BlocNotes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(BlocNotesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the bloc_notes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(BlocNotesPeer::TABLE_NAME, $con, BlocNotesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BlocNotesPeer::clearInstancePool();
            BlocNotesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a BlocNotes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or BlocNotes object or primary key or array of primary keys
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
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            BlocNotesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof BlocNotes) { // it's a model object
            // invalidate the cache for this single object
            BlocNotesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BlocNotesPeer::DATABASE_NAME);
            $criteria->add(BlocNotesPeer::ID_NOTE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                BlocNotesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(BlocNotesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            BlocNotesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given BlocNotes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      BlocNotes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(BlocNotesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(BlocNotesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(BlocNotesPeer::DATABASE_NAME, BlocNotesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return BlocNotes
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = BlocNotesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(BlocNotesPeer::DATABASE_NAME);
        $criteria->add(BlocNotesPeer::ID_NOTE, $pk);

        $v = BlocNotesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return BlocNotes[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(BlocNotesPeer::DATABASE_NAME);
            $criteria->add(BlocNotesPeer::ID_NOTE, $pks, Criteria::IN);
            $objs = BlocNotesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseBlocNotesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBlocNotesPeer::buildTableMap();

