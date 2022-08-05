<?php


/**
 * Base static class for performing query and update operations on the 'mandataire' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonMandatairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'mandataire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonMandataire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonMandataireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'mandataire.id';

    /** the column name for the id_groupement field */
    const ID_GROUPEMENT = 'mandataire.id_groupement';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'mandataire.id_entreprise';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'mandataire.id_inscrit';

    /** the column name for the type_mandataire field */
    const TYPE_MANDATAIRE = 'mandataire.type_mandataire';

    /** the column name for the rc_ville field */
    const RC_VILLE = 'mandataire.rc_ville';

    /** the column name for the rc_numero field */
    const RC_NUMERO = 'mandataire.rc_numero';

    /** the column name for the mail field */
    const MAIL = 'mandataire.mail';

    /** the column name for the statut_invitation field */
    const STATUT_INVITATION = 'mandataire.statut_invitation';

    /** The enumerated values for the type_mandataire field */
    const TYPE_MANDATAIRE_1 = '1';
    const TYPE_MANDATAIRE_2 = '2';

    /** The enumerated values for the statut_invitation field */
    const STATUT_INVITATION_0 = '0';
    const STATUT_INVITATION_1 = '1';
    const STATUT_INVITATION_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonMandataire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonMandataire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonMandatairePeer::$fieldNames[CommonMandatairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdGroupement', 'IdEntreprise', 'IdInscrit', 'TypeMandataire', 'RcVille', 'RcNumero', 'Mail', 'StatutInvitation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idGroupement', 'idEntreprise', 'idInscrit', 'typeMandataire', 'rcVille', 'rcNumero', 'mail', 'statutInvitation', ),
        BasePeer::TYPE_COLNAME => array (CommonMandatairePeer::ID, CommonMandatairePeer::ID_GROUPEMENT, CommonMandatairePeer::ID_ENTREPRISE, CommonMandatairePeer::ID_INSCRIT, CommonMandatairePeer::TYPE_MANDATAIRE, CommonMandatairePeer::RC_VILLE, CommonMandatairePeer::RC_NUMERO, CommonMandatairePeer::MAIL, CommonMandatairePeer::STATUT_INVITATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_GROUPEMENT', 'ID_ENTREPRISE', 'ID_INSCRIT', 'TYPE_MANDATAIRE', 'RC_VILLE', 'RC_NUMERO', 'MAIL', 'STATUT_INVITATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_groupement', 'id_entreprise', 'id_inscrit', 'type_mandataire', 'rc_ville', 'rc_numero', 'mail', 'statut_invitation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonMandatairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdGroupement' => 1, 'IdEntreprise' => 2, 'IdInscrit' => 3, 'TypeMandataire' => 4, 'RcVille' => 5, 'RcNumero' => 6, 'Mail' => 7, 'StatutInvitation' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idGroupement' => 1, 'idEntreprise' => 2, 'idInscrit' => 3, 'typeMandataire' => 4, 'rcVille' => 5, 'rcNumero' => 6, 'mail' => 7, 'statutInvitation' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonMandatairePeer::ID => 0, CommonMandatairePeer::ID_GROUPEMENT => 1, CommonMandatairePeer::ID_ENTREPRISE => 2, CommonMandatairePeer::ID_INSCRIT => 3, CommonMandatairePeer::TYPE_MANDATAIRE => 4, CommonMandatairePeer::RC_VILLE => 5, CommonMandatairePeer::RC_NUMERO => 6, CommonMandatairePeer::MAIL => 7, CommonMandatairePeer::STATUT_INVITATION => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_GROUPEMENT' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'TYPE_MANDATAIRE' => 4, 'RC_VILLE' => 5, 'RC_NUMERO' => 6, 'MAIL' => 7, 'STATUT_INVITATION' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_groupement' => 1, 'id_entreprise' => 2, 'id_inscrit' => 3, 'type_mandataire' => 4, 'rc_ville' => 5, 'rc_numero' => 6, 'mail' => 7, 'statut_invitation' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonMandatairePeer::TYPE_MANDATAIRE => array(
            CommonMandatairePeer::TYPE_MANDATAIRE_1,
            CommonMandatairePeer::TYPE_MANDATAIRE_2,
        ),
        CommonMandatairePeer::STATUT_INVITATION => array(
            CommonMandatairePeer::STATUT_INVITATION_0,
            CommonMandatairePeer::STATUT_INVITATION_1,
            CommonMandatairePeer::STATUT_INVITATION_2,
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
        $toNames = CommonMandatairePeer::getFieldNames($toType);
        $key = isset(CommonMandatairePeer::$fieldKeys[$fromType][$name]) ? CommonMandatairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonMandatairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonMandatairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonMandatairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonMandatairePeer::$enumValueSets;
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
        $valueSets = CommonMandatairePeer::getValueSets();

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
        $values = CommonMandatairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonMandatairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonMandatairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonMandatairePeer::ID);
            $criteria->addSelectColumn(CommonMandatairePeer::ID_GROUPEMENT);
            $criteria->addSelectColumn(CommonMandatairePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonMandatairePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonMandatairePeer::TYPE_MANDATAIRE);
            $criteria->addSelectColumn(CommonMandatairePeer::RC_VILLE);
            $criteria->addSelectColumn(CommonMandatairePeer::RC_NUMERO);
            $criteria->addSelectColumn(CommonMandatairePeer::MAIL);
            $criteria->addSelectColumn(CommonMandatairePeer::STATUT_INVITATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_groupement');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.type_mandataire');
            $criteria->addSelectColumn($alias . '.rc_ville');
            $criteria->addSelectColumn($alias . '.rc_numero');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.statut_invitation');
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
        $criteria->setPrimaryTableName(CommonMandatairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonMandatairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMandataire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonMandatairePeer::doSelect($critcopy, $con);
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
        return CommonMandatairePeer::populateObjects(CommonMandatairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonMandatairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

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
     * @param      CommonMandataire $obj A CommonMandataire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonMandatairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonMandataire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonMandataire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonMandataire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonMandatairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonMandataire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonMandatairePeer::$instances[$key])) {
                return CommonMandatairePeer::$instances[$key];
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
        foreach (CommonMandatairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonMandatairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to mandataire
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
        $cls = CommonMandatairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonMandatairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonMandatairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonMandatairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonMandataire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonMandatairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonMandatairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonMandatairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonMandatairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonMandatairePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonGroupement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonGroupement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonMandatairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonMandatairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonMandatairePeer::ID_GROUPEMENT, CommonGroupementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonMandataire objects pre-filled with their CommonGroupement objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonMandataire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonGroupement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);
        }

        CommonMandatairePeer::addSelectColumns($criteria);
        $startcol = CommonMandatairePeer::NUM_HYDRATE_COLUMNS;
        CommonGroupementPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonMandatairePeer::ID_GROUPEMENT, CommonGroupementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonMandatairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonMandatairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonMandatairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonMandatairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonGroupementPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonGroupementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonGroupementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonGroupementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonMandataire) to $obj2 (CommonGroupement)
                $obj2->addCommonMandataire($obj1);

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
        $criteria->setPrimaryTableName(CommonMandatairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonMandatairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonMandatairePeer::ID_GROUPEMENT, CommonGroupementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonMandataire objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonMandataire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);
        }

        CommonMandatairePeer::addSelectColumns($criteria);
        $startcol2 = CommonMandatairePeer::NUM_HYDRATE_COLUMNS;

        CommonGroupementPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonGroupementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonMandatairePeer::ID_GROUPEMENT, CommonGroupementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonMandatairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonMandatairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonMandatairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonMandatairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonGroupement rows

            $key2 = CommonGroupementPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonGroupementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonGroupementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonGroupementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonMandataire) to the collection in $obj2 (CommonGroupement)
                $obj2->addCommonMandataire($obj1);
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
        return Propel::getDatabaseMap(CommonMandatairePeer::DATABASE_NAME)->getTable(CommonMandatairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonMandatairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonMandatairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonMandataireTableMap());
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
        return CommonMandatairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonMandataire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonMandataire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonMandataire object
        }

        if ($criteria->containsKey(CommonMandatairePeer::ID) && $criteria->keyContainsValue(CommonMandatairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonMandatairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonMandataire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonMandataire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonMandatairePeer::ID);
            $value = $criteria->remove(CommonMandatairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonMandatairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonMandatairePeer::TABLE_NAME);
            }

        } else { // $values is CommonMandataire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the mandataire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonMandatairePeer::TABLE_NAME, $con, CommonMandatairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonMandatairePeer::clearInstancePool();
            CommonMandatairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonMandataire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonMandataire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonMandatairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonMandataire) { // it's a model object
            // invalidate the cache for this single object
            CommonMandatairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);
            $criteria->add(CommonMandatairePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonMandatairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonMandatairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonMandatairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonMandataire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonMandataire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonMandatairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonMandatairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonMandatairePeer::DATABASE_NAME, CommonMandatairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonMandataire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonMandatairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);
        $criteria->add(CommonMandatairePeer::ID, $pk);

        $v = CommonMandatairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonMandataire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);
            $criteria->add(CommonMandatairePeer::ID, $pks, Criteria::IN);
            $objs = CommonMandatairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonMandatairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonMandatairePeer::buildTableMap();

