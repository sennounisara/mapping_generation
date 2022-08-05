<?php


/**
 * Base static class for performing query and update operations on the 'Panier_Entreprise' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonPanierEntreprisePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Panier_Entreprise';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonPanierEntreprise';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonPanierEntrepriseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the organisme field */
    const ORGANISME = 'Panier_Entreprise.organisme';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'Panier_Entreprise.ref_consultation';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'Panier_Entreprise.id_entreprise';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'Panier_Entreprise.id_inscrit';

    /** the column name for the date_ajout field */
    const DATE_AJOUT = 'Panier_Entreprise.date_ajout';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonPanierEntreprise objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonPanierEntreprise[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonPanierEntreprisePeer::$fieldNames[CommonPanierEntreprisePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme', 'RefConsultation', 'IdEntreprise', 'IdInscrit', 'DateAjout', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme', 'refConsultation', 'idEntreprise', 'idInscrit', 'dateAjout', ),
        BasePeer::TYPE_COLNAME => array (CommonPanierEntreprisePeer::ORGANISME, CommonPanierEntreprisePeer::REF_CONSULTATION, CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonPanierEntreprisePeer::ID_INSCRIT, CommonPanierEntreprisePeer::DATE_AJOUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME', 'REF_CONSULTATION', 'ID_ENTREPRISE', 'ID_INSCRIT', 'DATE_AJOUT', ),
        BasePeer::TYPE_FIELDNAME => array ('organisme', 'ref_consultation', 'id_entreprise', 'id_inscrit', 'date_ajout', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonPanierEntreprisePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme' => 0, 'RefConsultation' => 1, 'IdEntreprise' => 2, 'IdInscrit' => 3, 'DateAjout' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme' => 0, 'refConsultation' => 1, 'idEntreprise' => 2, 'idInscrit' => 3, 'dateAjout' => 4, ),
        BasePeer::TYPE_COLNAME => array (CommonPanierEntreprisePeer::ORGANISME => 0, CommonPanierEntreprisePeer::REF_CONSULTATION => 1, CommonPanierEntreprisePeer::ID_ENTREPRISE => 2, CommonPanierEntreprisePeer::ID_INSCRIT => 3, CommonPanierEntreprisePeer::DATE_AJOUT => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME' => 0, 'REF_CONSULTATION' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'DATE_AJOUT' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('organisme' => 0, 'ref_consultation' => 1, 'id_entreprise' => 2, 'id_inscrit' => 3, 'date_ajout' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = CommonPanierEntreprisePeer::getFieldNames($toType);
        $key = isset(CommonPanierEntreprisePeer::$fieldKeys[$fromType][$name]) ? CommonPanierEntreprisePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonPanierEntreprisePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonPanierEntreprisePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonPanierEntreprisePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonPanierEntreprisePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonPanierEntreprisePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonPanierEntreprisePeer::ORGANISME);
            $criteria->addSelectColumn(CommonPanierEntreprisePeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonPanierEntreprisePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonPanierEntreprisePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonPanierEntreprisePeer::DATE_AJOUT);
        } else {
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.date_ajout');
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
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPanierEntreprise
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonPanierEntreprisePeer::doSelect($critcopy, $con);
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
        return CommonPanierEntreprisePeer::populateObjects(CommonPanierEntreprisePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

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
     * @param      CommonPanierEntreprise $obj A CommonPanierEntreprise object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getOrganisme(), (string) $obj->getRefConsultation(), (string) $obj->getIdEntreprise(), (string) $obj->getIdInscrit()));
            } // if key === null
            CommonPanierEntreprisePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonPanierEntreprise object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonPanierEntreprise) {
                $key = serialize(array((string) $value->getOrganisme(), (string) $value->getRefConsultation(), (string) $value->getIdEntreprise(), (string) $value->getIdInscrit()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonPanierEntreprise object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonPanierEntreprisePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonPanierEntreprise Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonPanierEntreprisePeer::$instances[$key])) {
                return CommonPanierEntreprisePeer::$instances[$key];
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
        foreach (CommonPanierEntreprisePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonPanierEntreprisePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Panier_Entreprise
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]));
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

        return array((string) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2], (int) $row[$startcol + 3]);
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
        $cls = CommonPanierEntreprisePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonPanierEntreprisePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonPanierEntreprisePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonPanierEntreprise object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonPanierEntreprisePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonPanierEntreprisePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonPanierEntreprisePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEntreprise table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEntreprise(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonInscrit table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonInscrit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonPanierEntreprise objects pre-filled with their CommonEntreprise objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEntreprise(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;
        CommonEntreprisePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to $obj2 (CommonEntreprise)
                $obj2->addCommonPanierEntreprise($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPanierEntreprise objects pre-filled with their CommonInscrit objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonInscrit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;
        CommonInscritPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonInscritPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonInscritPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonInscritPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to $obj2 (CommonInscrit)
                $obj2->addCommonPanierEntreprise($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPanierEntreprise objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to $obj2 (CommonConsultation)
                $obj2->addCommonPanierEntreprise($obj1);

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
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonPanierEntreprise objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol2 = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonEntreprisePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonInscritPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonEntreprise rows

            $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj2 (CommonEntreprise)
                $obj2->addCommonPanierEntreprise($obj1);
            } // if joined row not null

            // Add objects for joined CommonInscrit rows

            $key3 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonInscritPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonInscritPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonInscritPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj3 (CommonInscrit)
                $obj3->addCommonPanierEntreprise($obj1);
            } // if joined row not null

            // Add objects for joined CommonConsultation rows

            $key4 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonConsultationPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonConsultationPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj4 (CommonConsultation)
                $obj4->addCommonPanierEntreprise($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEntreprise table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonEntreprise(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonInscrit table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonInscrit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPanierEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

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
     * Selects a collection of CommonPanierEntreprise objects pre-filled with all related objects except CommonEntreprise.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonEntreprise(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol2 = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonInscritPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonInscrit rows

                $key2 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonInscritPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonInscritPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonInscritPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj2 (CommonInscrit)
                $obj2->addCommonPanierEntreprise($obj1);

            } // if joined row is not null

                // Add objects for joined CommonConsultation rows

                $key3 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonConsultationPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonConsultationPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonConsultationPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj3 (CommonConsultation)
                $obj3->addCommonPanierEntreprise($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPanierEntreprise objects pre-filled with all related objects except CommonInscrit.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonInscrit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol2 = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonEntreprisePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonEntreprise rows

                $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj2 (CommonEntreprise)
                $obj2->addCommonPanierEntreprise($obj1);

            } // if joined row is not null

                // Add objects for joined CommonConsultation rows

                $key3 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonConsultationPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonConsultationPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonConsultationPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj3 (CommonConsultation)
                $obj3->addCommonPanierEntreprise($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPanierEntreprise objects pre-filled with all related objects except CommonConsultation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPanierEntreprise objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);
        }

        CommonPanierEntreprisePeer::addSelectColumns($criteria);
        $startcol2 = CommonPanierEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonEntreprisePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEntreprisePeer::NUM_HYDRATE_COLUMNS;

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonInscritPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_ENTREPRISE, CommonEntreprisePeer::ID, $join_behavior);

        $criteria->addJoin(CommonPanierEntreprisePeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPanierEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPanierEntreprisePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPanierEntreprisePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPanierEntreprisePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonEntreprise rows

                $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj2 (CommonEntreprise)
                $obj2->addCommonPanierEntreprise($obj1);

            } // if joined row is not null

                // Add objects for joined CommonInscrit rows

                $key3 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonInscritPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonInscritPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonInscritPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonPanierEntreprise) to the collection in $obj3 (CommonInscrit)
                $obj3->addCommonPanierEntreprise($obj1);

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
        return Propel::getDatabaseMap(CommonPanierEntreprisePeer::DATABASE_NAME)->getTable(CommonPanierEntreprisePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonPanierEntreprisePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonPanierEntreprisePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonPanierEntrepriseTableMap());
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
        return CommonPanierEntreprisePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonPanierEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPanierEntreprise object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonPanierEntreprise object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonPanierEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPanierEntreprise object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonPanierEntreprisePeer::ORGANISME);
            $value = $criteria->remove(CommonPanierEntreprisePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonPanierEntreprisePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPanierEntreprisePeer::REF_CONSULTATION);
            $value = $criteria->remove(CommonPanierEntreprisePeer::REF_CONSULTATION);
            if ($value) {
                $selectCriteria->add(CommonPanierEntreprisePeer::REF_CONSULTATION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPanierEntreprisePeer::ID_ENTREPRISE);
            $value = $criteria->remove(CommonPanierEntreprisePeer::ID_ENTREPRISE);
            if ($value) {
                $selectCriteria->add(CommonPanierEntreprisePeer::ID_ENTREPRISE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPanierEntreprisePeer::ID_INSCRIT);
            $value = $criteria->remove(CommonPanierEntreprisePeer::ID_INSCRIT);
            if ($value) {
                $selectCriteria->add(CommonPanierEntreprisePeer::ID_INSCRIT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPanierEntreprisePeer::TABLE_NAME);
            }

        } else { // $values is CommonPanierEntreprise object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Panier_Entreprise table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonPanierEntreprisePeer::TABLE_NAME, $con, CommonPanierEntreprisePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonPanierEntreprisePeer::clearInstancePool();
            CommonPanierEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonPanierEntreprise or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonPanierEntreprise object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonPanierEntreprisePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonPanierEntreprise) { // it's a model object
            // invalidate the cache for this single object
            CommonPanierEntreprisePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonPanierEntreprisePeer::ORGANISME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonPanierEntreprisePeer::REF_CONSULTATION, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonPanierEntreprisePeer::ID_ENTREPRISE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CommonPanierEntreprisePeer::ID_INSCRIT, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonPanierEntreprisePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPanierEntreprisePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonPanierEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonPanierEntreprise object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonPanierEntreprise $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonPanierEntreprisePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonPanierEntreprisePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonPanierEntreprisePeer::DATABASE_NAME, CommonPanierEntreprisePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $organisme
     * @param   int $ref_consultation
     * @param   int $id_entreprise
     * @param   int $id_inscrit
     * @param      PropelPDO $con
     * @return   CommonPanierEntreprise
     */
    public static function retrieveByPK($organisme, $ref_consultation, $id_entreprise, $id_inscrit, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $organisme, (string) $ref_consultation, (string) $id_entreprise, (string) $id_inscrit));
         if (null !== ($obj = CommonPanierEntreprisePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonPanierEntreprisePeer::ORGANISME, $organisme);
        $criteria->add(CommonPanierEntreprisePeer::REF_CONSULTATION, $ref_consultation);
        $criteria->add(CommonPanierEntreprisePeer::ID_ENTREPRISE, $id_entreprise);
        $criteria->add(CommonPanierEntreprisePeer::ID_INSCRIT, $id_inscrit);
        $v = CommonPanierEntreprisePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonPanierEntreprisePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonPanierEntreprisePeer::buildTableMap();

