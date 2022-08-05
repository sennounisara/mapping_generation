<?php


/**
 * Base static class for performing query and update operations on the 'Administrateur' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAdministrateurPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Administrateur';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAdministrateur';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAdministrateurTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'Administrateur.id';

    /** the column name for the original_login field */
    const ORIGINAL_LOGIN = 'Administrateur.original_login';

    /** the column name for the login field */
    const LOGIN = 'Administrateur.login';

    /** the column name for the certificat field */
    const CERTIFICAT = 'Administrateur.certificat';

    /** the column name for the mdp field */
    const MDP = 'Administrateur.mdp';

    /** the column name for the nom field */
    const NOM = 'Administrateur.nom';

    /** the column name for the prenom field */
    const PRENOM = 'Administrateur.prenom';

    /** the column name for the email field */
    const EMAIL = 'Administrateur.email';

    /** the column name for the organisme field */
    const ORGANISME = 'Administrateur.organisme';

    /** the column name for the admin_general field */
    const ADMIN_GENERAL = 'Administrateur.admin_general';

    /** the column name for the tentatives_mdp field */
    const TENTATIVES_MDP = 'Administrateur.tentatives_mdp';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAdministrateur objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAdministrateur[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAdministrateurPeer::$fieldNames[CommonAdministrateurPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'OriginalLogin', 'Login', 'Certificat', 'Mdp', 'Nom', 'Prenom', 'Email', 'Organisme', 'AdminGeneral', 'TentativesMdp', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'originalLogin', 'login', 'certificat', 'mdp', 'nom', 'prenom', 'email', 'organisme', 'adminGeneral', 'tentativesMdp', ),
        BasePeer::TYPE_COLNAME => array (CommonAdministrateurPeer::ID, CommonAdministrateurPeer::ORIGINAL_LOGIN, CommonAdministrateurPeer::LOGIN, CommonAdministrateurPeer::CERTIFICAT, CommonAdministrateurPeer::MDP, CommonAdministrateurPeer::NOM, CommonAdministrateurPeer::PRENOM, CommonAdministrateurPeer::EMAIL, CommonAdministrateurPeer::ORGANISME, CommonAdministrateurPeer::ADMIN_GENERAL, CommonAdministrateurPeer::TENTATIVES_MDP, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORIGINAL_LOGIN', 'LOGIN', 'CERTIFICAT', 'MDP', 'NOM', 'PRENOM', 'EMAIL', 'ORGANISME', 'ADMIN_GENERAL', 'TENTATIVES_MDP', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'original_login', 'login', 'certificat', 'mdp', 'nom', 'prenom', 'email', 'organisme', 'admin_general', 'tentatives_mdp', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAdministrateurPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'OriginalLogin' => 1, 'Login' => 2, 'Certificat' => 3, 'Mdp' => 4, 'Nom' => 5, 'Prenom' => 6, 'Email' => 7, 'Organisme' => 8, 'AdminGeneral' => 9, 'TentativesMdp' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'originalLogin' => 1, 'login' => 2, 'certificat' => 3, 'mdp' => 4, 'nom' => 5, 'prenom' => 6, 'email' => 7, 'organisme' => 8, 'adminGeneral' => 9, 'tentativesMdp' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonAdministrateurPeer::ID => 0, CommonAdministrateurPeer::ORIGINAL_LOGIN => 1, CommonAdministrateurPeer::LOGIN => 2, CommonAdministrateurPeer::CERTIFICAT => 3, CommonAdministrateurPeer::MDP => 4, CommonAdministrateurPeer::NOM => 5, CommonAdministrateurPeer::PRENOM => 6, CommonAdministrateurPeer::EMAIL => 7, CommonAdministrateurPeer::ORGANISME => 8, CommonAdministrateurPeer::ADMIN_GENERAL => 9, CommonAdministrateurPeer::TENTATIVES_MDP => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORIGINAL_LOGIN' => 1, 'LOGIN' => 2, 'CERTIFICAT' => 3, 'MDP' => 4, 'NOM' => 5, 'PRENOM' => 6, 'EMAIL' => 7, 'ORGANISME' => 8, 'ADMIN_GENERAL' => 9, 'TENTATIVES_MDP' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'original_login' => 1, 'login' => 2, 'certificat' => 3, 'mdp' => 4, 'nom' => 5, 'prenom' => 6, 'email' => 7, 'organisme' => 8, 'admin_general' => 9, 'tentatives_mdp' => 10, ),
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
        $toNames = CommonAdministrateurPeer::getFieldNames($toType);
        $key = isset(CommonAdministrateurPeer::$fieldKeys[$fromType][$name]) ? CommonAdministrateurPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAdministrateurPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAdministrateurPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAdministrateurPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAdministrateurPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAdministrateurPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAdministrateurPeer::ID);
            $criteria->addSelectColumn(CommonAdministrateurPeer::ORIGINAL_LOGIN);
            $criteria->addSelectColumn(CommonAdministrateurPeer::LOGIN);
            $criteria->addSelectColumn(CommonAdministrateurPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonAdministrateurPeer::MDP);
            $criteria->addSelectColumn(CommonAdministrateurPeer::NOM);
            $criteria->addSelectColumn(CommonAdministrateurPeer::PRENOM);
            $criteria->addSelectColumn(CommonAdministrateurPeer::EMAIL);
            $criteria->addSelectColumn(CommonAdministrateurPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAdministrateurPeer::ADMIN_GENERAL);
            $criteria->addSelectColumn(CommonAdministrateurPeer::TENTATIVES_MDP);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.original_login');
            $criteria->addSelectColumn($alias . '.login');
            $criteria->addSelectColumn($alias . '.certificat');
            $criteria->addSelectColumn($alias . '.mdp');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.admin_general');
            $criteria->addSelectColumn($alias . '.tentatives_mdp');
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
        $criteria->setPrimaryTableName(CommonAdministrateurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdministrateurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdministrateur
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAdministrateurPeer::doSelect($critcopy, $con);
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
        return CommonAdministrateurPeer::populateObjects(CommonAdministrateurPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAdministrateurPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

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
     * @param      CommonAdministrateur $obj A CommonAdministrateur object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonAdministrateurPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAdministrateur object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAdministrateur) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAdministrateur object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAdministrateurPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAdministrateur Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAdministrateurPeer::$instances[$key])) {
                return CommonAdministrateurPeer::$instances[$key];
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
        foreach (CommonAdministrateurPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAdministrateurPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Administrateur
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
        $cls = CommonAdministrateurPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAdministrateurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAdministrateurPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAdministrateurPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAdministrateur object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAdministrateurPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAdministrateurPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAdministrateurPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAdministrateurPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAdministrateurPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAdministrateurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdministrateurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAdministrateurPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonAdministrateur objects pre-filled with their CommonOrganisme objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAdministrateur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);
        }

        CommonAdministrateurPeer::addSelectColumns($criteria);
        $startcol = CommonAdministrateurPeer::NUM_HYDRATE_COLUMNS;
        CommonOrganismePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAdministrateurPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAdministrateurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAdministrateurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAdministrateurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAdministrateurPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAdministrateur) to $obj2 (CommonOrganisme)
                $obj2->addCommonAdministrateur($obj1);

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
        $criteria->setPrimaryTableName(CommonAdministrateurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAdministrateurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAdministrateurPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonAdministrateur objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAdministrateur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);
        }

        CommonAdministrateurPeer::addSelectColumns($criteria);
        $startcol2 = CommonAdministrateurPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAdministrateurPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAdministrateurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAdministrateurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAdministrateurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAdministrateurPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonOrganisme rows

            $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonAdministrateur) to the collection in $obj2 (CommonOrganisme)
                $obj2->addCommonAdministrateur($obj1);
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
        return Propel::getDatabaseMap(CommonAdministrateurPeer::DATABASE_NAME)->getTable(CommonAdministrateurPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAdministrateurPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAdministrateurPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAdministrateurTableMap());
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
        return CommonAdministrateurPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAdministrateur or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdministrateur object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAdministrateur object
        }

        if ($criteria->containsKey(CommonAdministrateurPeer::ID) && $criteria->keyContainsValue(CommonAdministrateurPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAdministrateurPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAdministrateur or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAdministrateur object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAdministrateurPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAdministrateurPeer::ID);
            $value = $criteria->remove(CommonAdministrateurPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAdministrateurPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAdministrateurPeer::TABLE_NAME);
            }

        } else { // $values is CommonAdministrateur object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Administrateur table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAdministrateurPeer::TABLE_NAME, $con, CommonAdministrateurPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAdministrateurPeer::clearInstancePool();
            CommonAdministrateurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAdministrateur or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAdministrateur object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAdministrateurPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAdministrateur) { // it's a model object
            // invalidate the cache for this single object
            CommonAdministrateurPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAdministrateurPeer::DATABASE_NAME);
            $criteria->add(CommonAdministrateurPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonAdministrateurPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAdministrateurPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAdministrateurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAdministrateur object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAdministrateur $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAdministrateurPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAdministrateurPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAdministrateurPeer::DATABASE_NAME, CommonAdministrateurPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonAdministrateur
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonAdministrateurPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonAdministrateurPeer::DATABASE_NAME);
        $criteria->add(CommonAdministrateurPeer::ID, $pk);

        $v = CommonAdministrateurPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonAdministrateur[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonAdministrateurPeer::DATABASE_NAME);
            $criteria->add(CommonAdministrateurPeer::ID, $pks, Criteria::IN);
            $objs = CommonAdministrateurPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonAdministrateurPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAdministrateurPeer::buildTableMap();

