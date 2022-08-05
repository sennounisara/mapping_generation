<?php


/**
 * Base static class for performing query and update operations on the 'echange_citoyen' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseEchangeCitoyenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'echange_citoyen';

    /** the related Propel class for this table */
    const OM_CLASS = 'EchangeCitoyen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EchangeCitoyenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the ID field */
    const ID = 'echange_citoyen.ID';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'echange_citoyen.ID_DEMANDE';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 'echange_citoyen.ID_AGENT';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'echange_citoyen.ID_ENTITE';

    /** the column name for the ID_PIECE_JOINTE field */
    const ID_PIECE_JOINTE = 'echange_citoyen.ID_PIECE_JOINTE';

    /** the column name for the NOM_PIECE_JOINTE field */
    const NOM_PIECE_JOINTE = 'echange_citoyen.NOM_PIECE_JOINTE';

    /** the column name for the MESSAGE field */
    const MESSAGE = 'echange_citoyen.MESSAGE';

    /** the column name for the DATE_ECHANGE field */
    const DATE_ECHANGE = 'echange_citoyen.DATE_ECHANGE';

    /** the column name for the VISUALISER field */
    const VISUALISER = 'echange_citoyen.VISUALISER';

    /** the column name for the DATE_VISUALISATION field */
    const DATE_VISUALISATION = 'echange_citoyen.DATE_VISUALISATION';

    /** the column name for the NOM_AGENT_FR field */
    const NOM_AGENT_FR = 'echange_citoyen.NOM_AGENT_FR';

    /** the column name for the NOM_AGENT_AR field */
    const NOM_AGENT_AR = 'echange_citoyen.NOM_AGENT_AR';

    /** the column name for the PRENOM_AGENT_FR field */
    const PRENOM_AGENT_FR = 'echange_citoyen.PRENOM_AGENT_FR';

    /** the column name for the PRENOM_AGENT_AR field */
    const PRENOM_AGENT_AR = 'echange_citoyen.PRENOM_AGENT_AR';

    /** the column name for the CANAL field */
    const CANAL = 'echange_citoyen.CANAL';

    /** the column name for the INFO_CANAL field */
    const INFO_CANAL = 'echange_citoyen.INFO_CANAL';

    /** the column name for the REPONDU field */
    const REPONDU = 'echange_citoyen.REPONDU';

    /** The enumerated values for the VISUALISER field */
    const VISUALISER_0 = '0';
    const VISUALISER_1 = '1';

    /** The enumerated values for the REPONDU field */
    const REPONDU_0 = '0';
    const REPONDU_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of EchangeCitoyen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array EchangeCitoyen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EchangeCitoyenPeer::$fieldNames[EchangeCitoyenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdDemande', 'IdAgent', 'IdEntite', 'IdPieceJointe', 'NomPieceJointe', 'Message', 'DateEchange', 'Visualiser', 'DateVisualisation', 'NomAgentFr', 'NomAgentAr', 'PrenomAgentFr', 'PrenomAgentAr', 'Canal', 'InfoCanal', 'Repondu', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idDemande', 'idAgent', 'idEntite', 'idPieceJointe', 'nomPieceJointe', 'message', 'dateEchange', 'visualiser', 'dateVisualisation', 'nomAgentFr', 'nomAgentAr', 'prenomAgentFr', 'prenomAgentAr', 'canal', 'infoCanal', 'repondu', ),
        BasePeer::TYPE_COLNAME => array (EchangeCitoyenPeer::ID, EchangeCitoyenPeer::ID_DEMANDE, EchangeCitoyenPeer::ID_AGENT, EchangeCitoyenPeer::ID_ENTITE, EchangeCitoyenPeer::ID_PIECE_JOINTE, EchangeCitoyenPeer::NOM_PIECE_JOINTE, EchangeCitoyenPeer::MESSAGE, EchangeCitoyenPeer::DATE_ECHANGE, EchangeCitoyenPeer::VISUALISER, EchangeCitoyenPeer::DATE_VISUALISATION, EchangeCitoyenPeer::NOM_AGENT_FR, EchangeCitoyenPeer::NOM_AGENT_AR, EchangeCitoyenPeer::PRENOM_AGENT_FR, EchangeCitoyenPeer::PRENOM_AGENT_AR, EchangeCitoyenPeer::CANAL, EchangeCitoyenPeer::INFO_CANAL, EchangeCitoyenPeer::REPONDU, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_DEMANDE', 'ID_AGENT', 'ID_ENTITE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'MESSAGE', 'DATE_ECHANGE', 'VISUALISER', 'DATE_VISUALISATION', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_FR', 'PRENOM_AGENT_AR', 'CANAL', 'INFO_CANAL', 'REPONDU', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_DEMANDE', 'ID_AGENT', 'ID_ENTITE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'MESSAGE', 'DATE_ECHANGE', 'VISUALISER', 'DATE_VISUALISATION', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_FR', 'PRENOM_AGENT_AR', 'CANAL', 'INFO_CANAL', 'REPONDU', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EchangeCitoyenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdDemande' => 1, 'IdAgent' => 2, 'IdEntite' => 3, 'IdPieceJointe' => 4, 'NomPieceJointe' => 5, 'Message' => 6, 'DateEchange' => 7, 'Visualiser' => 8, 'DateVisualisation' => 9, 'NomAgentFr' => 10, 'NomAgentAr' => 11, 'PrenomAgentFr' => 12, 'PrenomAgentAr' => 13, 'Canal' => 14, 'InfoCanal' => 15, 'Repondu' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idDemande' => 1, 'idAgent' => 2, 'idEntite' => 3, 'idPieceJointe' => 4, 'nomPieceJointe' => 5, 'message' => 6, 'dateEchange' => 7, 'visualiser' => 8, 'dateVisualisation' => 9, 'nomAgentFr' => 10, 'nomAgentAr' => 11, 'prenomAgentFr' => 12, 'prenomAgentAr' => 13, 'canal' => 14, 'infoCanal' => 15, 'repondu' => 16, ),
        BasePeer::TYPE_COLNAME => array (EchangeCitoyenPeer::ID => 0, EchangeCitoyenPeer::ID_DEMANDE => 1, EchangeCitoyenPeer::ID_AGENT => 2, EchangeCitoyenPeer::ID_ENTITE => 3, EchangeCitoyenPeer::ID_PIECE_JOINTE => 4, EchangeCitoyenPeer::NOM_PIECE_JOINTE => 5, EchangeCitoyenPeer::MESSAGE => 6, EchangeCitoyenPeer::DATE_ECHANGE => 7, EchangeCitoyenPeer::VISUALISER => 8, EchangeCitoyenPeer::DATE_VISUALISATION => 9, EchangeCitoyenPeer::NOM_AGENT_FR => 10, EchangeCitoyenPeer::NOM_AGENT_AR => 11, EchangeCitoyenPeer::PRENOM_AGENT_FR => 12, EchangeCitoyenPeer::PRENOM_AGENT_AR => 13, EchangeCitoyenPeer::CANAL => 14, EchangeCitoyenPeer::INFO_CANAL => 15, EchangeCitoyenPeer::REPONDU => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_DEMANDE' => 1, 'ID_AGENT' => 2, 'ID_ENTITE' => 3, 'ID_PIECE_JOINTE' => 4, 'NOM_PIECE_JOINTE' => 5, 'MESSAGE' => 6, 'DATE_ECHANGE' => 7, 'VISUALISER' => 8, 'DATE_VISUALISATION' => 9, 'NOM_AGENT_FR' => 10, 'NOM_AGENT_AR' => 11, 'PRENOM_AGENT_FR' => 12, 'PRENOM_AGENT_AR' => 13, 'CANAL' => 14, 'INFO_CANAL' => 15, 'REPONDU' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_DEMANDE' => 1, 'ID_AGENT' => 2, 'ID_ENTITE' => 3, 'ID_PIECE_JOINTE' => 4, 'NOM_PIECE_JOINTE' => 5, 'MESSAGE' => 6, 'DATE_ECHANGE' => 7, 'VISUALISER' => 8, 'DATE_VISUALISATION' => 9, 'NOM_AGENT_FR' => 10, 'NOM_AGENT_AR' => 11, 'PRENOM_AGENT_FR' => 12, 'PRENOM_AGENT_AR' => 13, 'CANAL' => 14, 'INFO_CANAL' => 15, 'REPONDU' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        EchangeCitoyenPeer::VISUALISER => array(
            EchangeCitoyenPeer::VISUALISER_0,
            EchangeCitoyenPeer::VISUALISER_1,
        ),
        EchangeCitoyenPeer::REPONDU => array(
            EchangeCitoyenPeer::REPONDU_0,
            EchangeCitoyenPeer::REPONDU_1,
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
        $toNames = EchangeCitoyenPeer::getFieldNames($toType);
        $key = isset(EchangeCitoyenPeer::$fieldKeys[$fromType][$name]) ? EchangeCitoyenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EchangeCitoyenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EchangeCitoyenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EchangeCitoyenPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return EchangeCitoyenPeer::$enumValueSets;
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
        $valueSets = EchangeCitoyenPeer::getValueSets();

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
        $values = EchangeCitoyenPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. EchangeCitoyenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EchangeCitoyenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EchangeCitoyenPeer::ID);
            $criteria->addSelectColumn(EchangeCitoyenPeer::ID_DEMANDE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::ID_AGENT);
            $criteria->addSelectColumn(EchangeCitoyenPeer::ID_ENTITE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::ID_PIECE_JOINTE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::NOM_PIECE_JOINTE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::MESSAGE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::DATE_ECHANGE);
            $criteria->addSelectColumn(EchangeCitoyenPeer::VISUALISER);
            $criteria->addSelectColumn(EchangeCitoyenPeer::DATE_VISUALISATION);
            $criteria->addSelectColumn(EchangeCitoyenPeer::NOM_AGENT_FR);
            $criteria->addSelectColumn(EchangeCitoyenPeer::NOM_AGENT_AR);
            $criteria->addSelectColumn(EchangeCitoyenPeer::PRENOM_AGENT_FR);
            $criteria->addSelectColumn(EchangeCitoyenPeer::PRENOM_AGENT_AR);
            $criteria->addSelectColumn(EchangeCitoyenPeer::CANAL);
            $criteria->addSelectColumn(EchangeCitoyenPeer::INFO_CANAL);
            $criteria->addSelectColumn(EchangeCitoyenPeer::REPONDU);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.MESSAGE');
            $criteria->addSelectColumn($alias . '.DATE_ECHANGE');
            $criteria->addSelectColumn($alias . '.VISUALISER');
            $criteria->addSelectColumn($alias . '.DATE_VISUALISATION');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.CANAL');
            $criteria->addSelectColumn($alias . '.INFO_CANAL');
            $criteria->addSelectColumn($alias . '.REPONDU');
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
        $criteria->setPrimaryTableName(EchangeCitoyenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EchangeCitoyenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EchangeCitoyenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 EchangeCitoyen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EchangeCitoyenPeer::doSelect($critcopy, $con);
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
        return EchangeCitoyenPeer::populateObjects(EchangeCitoyenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EchangeCitoyenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EchangeCitoyenPeer::DATABASE_NAME);

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
     * @param      EchangeCitoyen $obj A EchangeCitoyen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            EchangeCitoyenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A EchangeCitoyen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof EchangeCitoyen) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or EchangeCitoyen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EchangeCitoyenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   EchangeCitoyen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EchangeCitoyenPeer::$instances[$key])) {
                return EchangeCitoyenPeer::$instances[$key];
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
        foreach (EchangeCitoyenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EchangeCitoyenPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to echange_citoyen
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
        $cls = EchangeCitoyenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EchangeCitoyenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EchangeCitoyenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EchangeCitoyenPeer::addInstanceToPool($obj, $key);
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
     * @return array (EchangeCitoyen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EchangeCitoyenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EchangeCitoyenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EchangeCitoyenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EchangeCitoyenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EchangeCitoyenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EchangeCitoyenPeer::DATABASE_NAME)->getTable(EchangeCitoyenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEchangeCitoyenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEchangeCitoyenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new EchangeCitoyenTableMap());
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
        return EchangeCitoyenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a EchangeCitoyen or Criteria object.
     *
     * @param      mixed $values Criteria or EchangeCitoyen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from EchangeCitoyen object
        }

        if ($criteria->containsKey(EchangeCitoyenPeer::ID) && $criteria->keyContainsValue(EchangeCitoyenPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EchangeCitoyenPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EchangeCitoyenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a EchangeCitoyen or Criteria object.
     *
     * @param      mixed $values Criteria or EchangeCitoyen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EchangeCitoyenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EchangeCitoyenPeer::ID);
            $value = $criteria->remove(EchangeCitoyenPeer::ID);
            if ($value) {
                $selectCriteria->add(EchangeCitoyenPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EchangeCitoyenPeer::TABLE_NAME);
            }

        } else { // $values is EchangeCitoyen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EchangeCitoyenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the echange_citoyen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EchangeCitoyenPeer::TABLE_NAME, $con, EchangeCitoyenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EchangeCitoyenPeer::clearInstancePool();
            EchangeCitoyenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a EchangeCitoyen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or EchangeCitoyen object or primary key or array of primary keys
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
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EchangeCitoyenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof EchangeCitoyen) { // it's a model object
            // invalidate the cache for this single object
            EchangeCitoyenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EchangeCitoyenPeer::DATABASE_NAME);
            $criteria->add(EchangeCitoyenPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EchangeCitoyenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EchangeCitoyenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            EchangeCitoyenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given EchangeCitoyen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      EchangeCitoyen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EchangeCitoyenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EchangeCitoyenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EchangeCitoyenPeer::DATABASE_NAME, EchangeCitoyenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return EchangeCitoyen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EchangeCitoyenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EchangeCitoyenPeer::DATABASE_NAME);
        $criteria->add(EchangeCitoyenPeer::ID, $pk);

        $v = EchangeCitoyenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return EchangeCitoyen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EchangeCitoyenPeer::DATABASE_NAME);
            $criteria->add(EchangeCitoyenPeer::ID, $pks, Criteria::IN);
            $objs = EchangeCitoyenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEchangeCitoyenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEchangeCitoyenPeer::buildTableMap();

