<?php


/**
 * Base static class for performing query and update operations on the 'EnchereEntreprisePmi' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEnchereEntreprisePmiPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EnchereEntreprisePmi';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnchereEntreprisePmi';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnchereEntreprisePmiTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'EnchereEntreprisePmi.id';

    /** the column name for the organisme field */
    const ORGANISME = 'EnchereEntreprisePmi.organisme';

    /** the column name for the idEnchere field */
    const IDENCHERE = 'EnchereEntreprisePmi.idEnchere';

    /** the column name for the nom field */
    const NOM = 'EnchereEntreprisePmi.nom';

    /** the column name for the numeroAnonyme field */
    const NUMEROANONYME = 'EnchereEntreprisePmi.numeroAnonyme';

    /** the column name for the email field */
    const EMAIL = 'EnchereEntreprisePmi.email';

    /** the column name for the mdp field */
    const MDP = 'EnchereEntreprisePmi.mdp';

    /** the column name for the noteTechnique field */
    const NOTETECHNIQUE = 'EnchereEntreprisePmi.noteTechnique';

    /** the column name for the idEntreprise field */
    const IDENTREPRISE = 'EnchereEntreprisePmi.idEntreprise';

    /** the column name for the datePing field */
    const DATEPING = 'EnchereEntreprisePmi.datePing';

    /** the column name for the nomAgentConnecte field */
    const NOMAGENTCONNECTE = 'EnchereEntreprisePmi.nomAgentConnecte';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEnchereEntreprisePmi objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnchereEntreprisePmi[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereEntreprisePmiPeer::$fieldNames[CommonEnchereEntreprisePmiPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Idenchere', 'Nom', 'Numeroanonyme', 'Email', 'Mdp', 'Notetechnique', 'Identreprise', 'Dateping', 'Nomagentconnecte', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idenchere', 'nom', 'numeroanonyme', 'email', 'mdp', 'notetechnique', 'identreprise', 'dateping', 'nomagentconnecte', ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereEntreprisePmiPeer::ID, CommonEnchereEntreprisePmiPeer::ORGANISME, CommonEnchereEntreprisePmiPeer::IDENCHERE, CommonEnchereEntreprisePmiPeer::NOM, CommonEnchereEntreprisePmiPeer::NUMEROANONYME, CommonEnchereEntreprisePmiPeer::EMAIL, CommonEnchereEntreprisePmiPeer::MDP, CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE, CommonEnchereEntreprisePmiPeer::IDENTREPRISE, CommonEnchereEntreprisePmiPeer::DATEPING, CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'IDENCHERE', 'NOM', 'NUMEROANONYME', 'EMAIL', 'MDP', 'NOTETECHNIQUE', 'IDENTREPRISE', 'DATEPING', 'NOMAGENTCONNECTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'idEnchere', 'nom', 'numeroAnonyme', 'email', 'mdp', 'noteTechnique', 'idEntreprise', 'datePing', 'nomAgentConnecte', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnchereEntreprisePmiPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Idenchere' => 2, 'Nom' => 3, 'Numeroanonyme' => 4, 'Email' => 5, 'Mdp' => 6, 'Notetechnique' => 7, 'Identreprise' => 8, 'Dateping' => 9, 'Nomagentconnecte' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idenchere' => 2, 'nom' => 3, 'numeroanonyme' => 4, 'email' => 5, 'mdp' => 6, 'notetechnique' => 7, 'identreprise' => 8, 'dateping' => 9, 'nomagentconnecte' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonEnchereEntreprisePmiPeer::ID => 0, CommonEnchereEntreprisePmiPeer::ORGANISME => 1, CommonEnchereEntreprisePmiPeer::IDENCHERE => 2, CommonEnchereEntreprisePmiPeer::NOM => 3, CommonEnchereEntreprisePmiPeer::NUMEROANONYME => 4, CommonEnchereEntreprisePmiPeer::EMAIL => 5, CommonEnchereEntreprisePmiPeer::MDP => 6, CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE => 7, CommonEnchereEntreprisePmiPeer::IDENTREPRISE => 8, CommonEnchereEntreprisePmiPeer::DATEPING => 9, CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'IDENCHERE' => 2, 'NOM' => 3, 'NUMEROANONYME' => 4, 'EMAIL' => 5, 'MDP' => 6, 'NOTETECHNIQUE' => 7, 'IDENTREPRISE' => 8, 'DATEPING' => 9, 'NOMAGENTCONNECTE' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'idEnchere' => 2, 'nom' => 3, 'numeroAnonyme' => 4, 'email' => 5, 'mdp' => 6, 'noteTechnique' => 7, 'idEntreprise' => 8, 'datePing' => 9, 'nomAgentConnecte' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = CommonEnchereEntreprisePmiPeer::getFieldNames($toType);
        $key = isset(CommonEnchereEntreprisePmiPeer::$fieldKeys[$fromType][$name]) ? CommonEnchereEntreprisePmiPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnchereEntreprisePmiPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnchereEntreprisePmiPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnchereEntreprisePmiPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonEnchereEntreprisePmiPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnchereEntreprisePmiPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::ID);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::ORGANISME);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::IDENCHERE);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::NOM);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::NUMEROANONYME);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::EMAIL);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::MDP);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::IDENTREPRISE);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::DATEPING);
            $criteria->addSelectColumn(CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.idEnchere');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.numeroAnonyme');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.mdp');
            $criteria->addSelectColumn($alias . '.noteTechnique');
            $criteria->addSelectColumn($alias . '.idEntreprise');
            $criteria->addSelectColumn($alias . '.datePing');
            $criteria->addSelectColumn($alias . '.nomAgentConnecte');
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
        $criteria->setPrimaryTableName(CommonEnchereEntreprisePmiPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereEntreprisePmi
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnchereEntreprisePmiPeer::doSelect($critcopy, $con);
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
        return CommonEnchereEntreprisePmiPeer::populateObjects(CommonEnchereEntreprisePmiPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

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
     * @param      CommonEnchereEntreprisePmi $obj A CommonEnchereEntreprisePmi object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEnchereEntreprisePmiPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnchereEntreprisePmi object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnchereEntreprisePmi) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnchereEntreprisePmi object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnchereEntreprisePmiPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnchereEntreprisePmi Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnchereEntreprisePmiPeer::$instances[$key])) {
                return CommonEnchereEntreprisePmiPeer::$instances[$key];
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
        foreach (CommonEnchereEntreprisePmiPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnchereEntreprisePmiPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EnchereEntreprisePmi
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonEnchereOffrePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonEnchereOffrePeer::clearInstancePool();
        // Invalidate objects in CommonEnchereValeursInitialesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonEnchereValeursInitialesPeer::clearInstancePool();
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
        $cls = CommonEnchereEntreprisePmiPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnchereEntreprisePmiPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnchereEntreprisePmiPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnchereEntreprisePmiPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnchereEntreprisePmi object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnchereEntreprisePmiPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnchereEntreprisePmiPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnchereEntreprisePmiPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnchereEntreprisePmiPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnchereEntreprisePmiPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEncherePmi table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEncherePmi(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnchereEntreprisePmiPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonEnchereEntreprisePmiPeer::IDENCHERE, CommonEncherePmiPeer::ID),
        array(CommonEnchereEntreprisePmiPeer::ORGANISME, CommonEncherePmiPeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonEnchereEntreprisePmi objects pre-filled with their CommonEncherePmi objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereEntreprisePmi objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEncherePmi(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
        }

        CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        $startcol = CommonEnchereEntreprisePmiPeer::NUM_HYDRATE_COLUMNS;
        CommonEncherePmiPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonEnchereEntreprisePmiPeer::IDENCHERE, CommonEncherePmiPeer::ID),
        array(CommonEnchereEntreprisePmiPeer::ORGANISME, CommonEncherePmiPeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereEntreprisePmiPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereEntreprisePmiPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonEnchereEntreprisePmiPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereEntreprisePmiPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEncherePmiPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEncherePmiPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEncherePmiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEncherePmiPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonEnchereEntreprisePmi) to $obj2 (CommonEncherePmi)
                $obj2->addCommonEnchereEntreprisePmi($obj1);

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
        $criteria->setPrimaryTableName(CommonEnchereEntreprisePmiPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonEnchereEntreprisePmiPeer::IDENCHERE, CommonEncherePmiPeer::ID),
        array(CommonEnchereEntreprisePmiPeer::ORGANISME, CommonEncherePmiPeer::ORGANISME),
      ), $join_behavior);

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
     * Selects a collection of CommonEnchereEntreprisePmi objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnchereEntreprisePmi objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
        }

        CommonEnchereEntreprisePmiPeer::addSelectColumns($criteria);
        $startcol2 = CommonEnchereEntreprisePmiPeer::NUM_HYDRATE_COLUMNS;

        CommonEncherePmiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEncherePmiPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonEnchereEntreprisePmiPeer::IDENCHERE, CommonEncherePmiPeer::ID),
        array(CommonEnchereEntreprisePmiPeer::ORGANISME, CommonEncherePmiPeer::ORGANISME),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnchereEntreprisePmiPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnchereEntreprisePmiPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonEnchereEntreprisePmiPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnchereEntreprisePmiPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonEncherePmi rows

            $key2 = CommonEncherePmiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonEncherePmiPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEncherePmiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEncherePmiPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonEnchereEntreprisePmi) to the collection in $obj2 (CommonEncherePmi)
                $obj2->addCommonEnchereEntreprisePmi($obj1);
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
        return Propel::getDatabaseMap(CommonEnchereEntreprisePmiPeer::DATABASE_NAME)->getTable(CommonEnchereEntreprisePmiPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnchereEntreprisePmiPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnchereEntreprisePmiPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnchereEntreprisePmiTableMap());
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
        return CommonEnchereEntreprisePmiPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnchereEntreprisePmi or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereEntreprisePmi object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnchereEntreprisePmi object
        }

        if ($criteria->containsKey(CommonEnchereEntreprisePmiPeer::ID) && $criteria->keyContainsValue(CommonEnchereEntreprisePmiPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEnchereEntreprisePmiPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnchereEntreprisePmi or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnchereEntreprisePmi object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnchereEntreprisePmiPeer::ID);
            $value = $criteria->remove(CommonEnchereEntreprisePmiPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEnchereEntreprisePmiPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereEntreprisePmiPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEnchereEntreprisePmiPeer::ORGANISME);
            $value = $criteria->remove(CommonEnchereEntreprisePmiPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEnchereEntreprisePmiPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnchereEntreprisePmiPeer::TABLE_NAME);
            }

        } else { // $values is CommonEnchereEntreprisePmi object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EnchereEntreprisePmi table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonEnchereEntreprisePmiPeer::doOnDeleteCascade(new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonEnchereEntreprisePmiPeer::TABLE_NAME, $con, CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnchereEntreprisePmiPeer::clearInstancePool();
            CommonEnchereEntreprisePmiPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnchereEntreprisePmi or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnchereEntreprisePmi object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnchereEntreprisePmi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEnchereEntreprisePmiPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEnchereEntreprisePmiPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonEnchereEntreprisePmiPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonEnchereEntreprisePmiPeer::clearInstancePool();
            } elseif ($values instanceof CommonEnchereEntreprisePmi) { // it's a model object
                CommonEnchereEntreprisePmiPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonEnchereEntreprisePmiPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnchereEntreprisePmiPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonEnchereEntreprisePmiPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonEnchereOffre objects
            $criteria = new Criteria(CommonEnchereOffrePeer::DATABASE_NAME);
            
            $criteria->add(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $obj->getId());
            $criteria->add(CommonEnchereOffrePeer::ORGANISME, $obj->getOrganisme());
            $affectedRows += CommonEnchereOffrePeer::doDelete($criteria, $con);

            // delete related CommonEnchereValeursInitiales objects
            $criteria = new Criteria(CommonEnchereValeursInitialesPeer::DATABASE_NAME);
            
            $criteria->add(CommonEnchereValeursInitialesPeer::IDENCHEREENTREPRISE, $obj->getId());
            $criteria->add(CommonEnchereValeursInitialesPeer::ORGANISME, $obj->getOrganisme());
            $affectedRows += CommonEnchereValeursInitialesPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonEnchereEntreprisePmi object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnchereEntreprisePmi $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnchereEntreprisePmiPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, CommonEnchereEntreprisePmiPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEnchereEntreprisePmi
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonEnchereEntreprisePmiPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
        $criteria->add(CommonEnchereEntreprisePmiPeer::ID, $id);
        $criteria->add(CommonEnchereEntreprisePmiPeer::ORGANISME, $organisme);
        $v = CommonEnchereEntreprisePmiPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEnchereEntreprisePmiPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnchereEntreprisePmiPeer::buildTableMap();

