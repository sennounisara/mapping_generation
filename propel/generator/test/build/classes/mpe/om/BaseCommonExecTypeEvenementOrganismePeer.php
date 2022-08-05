<?php


/**
 * Base static class for performing query and update operations on the 'exec_type_evenement_organisme' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecTypeEvenementOrganismePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_type_evenement_organisme';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecTypeEvenementOrganisme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecTypeEvenementOrganismeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the id_type_evenement field */
    const ID_TYPE_EVENEMENT = 'exec_type_evenement_organisme.id_type_evenement';

    /** the column name for the organisme field */
    const ORGANISME = 'exec_type_evenement_organisme.organisme';

    /** the column name for the habilitation field */
    const HABILITATION = 'exec_type_evenement_organisme.habilitation';

    /** the column name for the via_demande field */
    const VIA_DEMANDE = 'exec_type_evenement_organisme.via_demande';

    /** the column name for the id_theme field */
    const ID_THEME = 'exec_type_evenement_organisme.id_theme';

    /** the column name for the id_modele_document field */
    const ID_MODELE_DOCUMENT = 'exec_type_evenement_organisme.id_modele_document';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecTypeEvenementOrganisme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecTypeEvenementOrganisme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecTypeEvenementOrganismePeer::$fieldNames[CommonExecTypeEvenementOrganismePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeEvenement', 'Organisme', 'Habilitation', 'ViaDemande', 'IdTheme', 'IdModeleDocument', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeEvenement', 'organisme', 'habilitation', 'viaDemande', 'idTheme', 'idModeleDocument', ),
        BasePeer::TYPE_COLNAME => array (CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementOrganismePeer::ORGANISME, CommonExecTypeEvenementOrganismePeer::HABILITATION, CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE, CommonExecTypeEvenementOrganismePeer::ID_THEME, CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_EVENEMENT', 'ORGANISME', 'HABILITATION', 'VIA_DEMANDE', 'ID_THEME', 'ID_MODELE_DOCUMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_evenement', 'organisme', 'habilitation', 'via_demande', 'id_theme', 'id_modele_document', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecTypeEvenementOrganismePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeEvenement' => 0, 'Organisme' => 1, 'Habilitation' => 2, 'ViaDemande' => 3, 'IdTheme' => 4, 'IdModeleDocument' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeEvenement' => 0, 'organisme' => 1, 'habilitation' => 2, 'viaDemande' => 3, 'idTheme' => 4, 'idModeleDocument' => 5, ),
        BasePeer::TYPE_COLNAME => array (CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT => 0, CommonExecTypeEvenementOrganismePeer::ORGANISME => 1, CommonExecTypeEvenementOrganismePeer::HABILITATION => 2, CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE => 3, CommonExecTypeEvenementOrganismePeer::ID_THEME => 4, CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_EVENEMENT' => 0, 'ORGANISME' => 1, 'HABILITATION' => 2, 'VIA_DEMANDE' => 3, 'ID_THEME' => 4, 'ID_MODELE_DOCUMENT' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_evenement' => 0, 'organisme' => 1, 'habilitation' => 2, 'via_demande' => 3, 'id_theme' => 4, 'id_modele_document' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = CommonExecTypeEvenementOrganismePeer::getFieldNames($toType);
        $key = isset(CommonExecTypeEvenementOrganismePeer::$fieldKeys[$fromType][$name]) ? CommonExecTypeEvenementOrganismePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecTypeEvenementOrganismePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecTypeEvenementOrganismePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecTypeEvenementOrganismePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecTypeEvenementOrganismePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecTypeEvenementOrganismePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT);
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::ORGANISME);
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::HABILITATION);
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE);
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::ID_THEME);
            $criteria->addSelectColumn(CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT);
        } else {
            $criteria->addSelectColumn($alias . '.id_type_evenement');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.habilitation');
            $criteria->addSelectColumn($alias . '.via_demande');
            $criteria->addSelectColumn($alias . '.id_theme');
            $criteria->addSelectColumn($alias . '.id_modele_document');
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
        $criteria->setPrimaryTableName(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecTypeEvenementOrganisme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecTypeEvenementOrganismePeer::doSelect($critcopy, $con);
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
        return CommonExecTypeEvenementOrganismePeer::populateObjects(CommonExecTypeEvenementOrganismePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

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
     * @param      CommonExecTypeEvenementOrganisme $obj A CommonExecTypeEvenementOrganisme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdTypeEvenement(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonExecTypeEvenementOrganismePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecTypeEvenementOrganisme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecTypeEvenementOrganisme) {
                $key = serialize(array((string) $value->getIdTypeEvenement(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecTypeEvenementOrganisme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecTypeEvenementOrganismePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecTypeEvenementOrganisme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecTypeEvenementOrganismePeer::$instances[$key])) {
                return CommonExecTypeEvenementOrganismePeer::$instances[$key];
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
        foreach (CommonExecTypeEvenementOrganismePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecTypeEvenementOrganismePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_type_evenement_organisme
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
        $cls = CommonExecTypeEvenementOrganismePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecTypeEvenementOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecTypeEvenementOrganismePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecTypeEvenementOrganisme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecTypeEvenementOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecTypeEvenementOrganismePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecTypeEvenementOrganismePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecTypeEvenementOrganismePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecTypeEvenementOrganisme objects pre-filled with their CommonExecTypeEvenement objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecTypeEvenementOrganisme objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
        }

        CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        $startcol = CommonExecTypeEvenementOrganismePeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeEvenementPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecTypeEvenementOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecTypeEvenementOrganismePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecTypeEvenementOrganismePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeEvenementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecTypeEvenementOrganisme) to $obj2 (CommonExecTypeEvenement)
                $obj2->addCommonExecTypeEvenementOrganisme($obj1);

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
        $criteria->setPrimaryTableName(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecTypeEvenementOrganisme objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecTypeEvenementOrganisme objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
        }

        CommonExecTypeEvenementOrganismePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecTypeEvenementOrganismePeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeEvenementPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecTypeEvenementOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecTypeEvenementOrganismePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecTypeEvenementOrganismePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecTypeEvenement rows

            $key2 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeEvenementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecTypeEvenementOrganisme) to the collection in $obj2 (CommonExecTypeEvenement)
                $obj2->addCommonExecTypeEvenementOrganisme($obj1);
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
        return Propel::getDatabaseMap(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME)->getTable(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecTypeEvenementOrganismePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecTypeEvenementOrganismeTableMap());
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
        return CommonExecTypeEvenementOrganismePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecTypeEvenementOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecTypeEvenementOrganisme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecTypeEvenementOrganisme object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecTypeEvenementOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecTypeEvenementOrganisme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT);
            $value = $criteria->remove(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT);
            if ($value) {
                $selectCriteria->add(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonExecTypeEvenementOrganismePeer::ORGANISME);
            $value = $criteria->remove(CommonExecTypeEvenementOrganismePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonExecTypeEvenementOrganismePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);
            }

        } else { // $values is CommonExecTypeEvenementOrganisme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_type_evenement_organisme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecTypeEvenementOrganismePeer::TABLE_NAME, $con, CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecTypeEvenementOrganismePeer::clearInstancePool();
            CommonExecTypeEvenementOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecTypeEvenementOrganisme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecTypeEvenementOrganisme object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecTypeEvenementOrganismePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecTypeEvenementOrganisme) { // it's a model object
            // invalidate the cache for this single object
            CommonExecTypeEvenementOrganismePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonExecTypeEvenementOrganismePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonExecTypeEvenementOrganismePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecTypeEvenementOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecTypeEvenementOrganisme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecTypeEvenementOrganisme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecTypeEvenementOrganismePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, CommonExecTypeEvenementOrganismePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_type_evenement
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonExecTypeEvenementOrganisme
     */
    public static function retrieveByPK($id_type_evenement, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_type_evenement, (string) $organisme));
         if (null !== ($obj = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $id_type_evenement);
        $criteria->add(CommonExecTypeEvenementOrganismePeer::ORGANISME, $organisme);
        $v = CommonExecTypeEvenementOrganismePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonExecTypeEvenementOrganismePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecTypeEvenementOrganismePeer::buildTableMap();

