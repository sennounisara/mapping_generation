<?php


/**
 * Base static class for performing query and update operations on the 't_compte_bancaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCompteBancairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_compte_bancaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCompteBancaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCompteBancaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the ID field */
    const ID = 't_compte_bancaire.ID';

    /** the column name for the ID_ENTREPRISE field */
    const ID_ENTREPRISE = 't_compte_bancaire.ID_ENTREPRISE';

    /** the column name for the ID_INSCRIT field */
    const ID_INSCRIT = 't_compte_bancaire.ID_INSCRIT';

    /** the column name for the DENOMINATION field */
    const DENOMINATION = 't_compte_bancaire.DENOMINATION';

    /** the column name for the ID_BANQUE field */
    const ID_BANQUE = 't_compte_bancaire.ID_BANQUE';

    /** the column name for the IDENTIFIANT_BANCAIRE field */
    const IDENTIFIANT_BANCAIRE = 't_compte_bancaire.IDENTIFIANT_BANCAIRE';

    /** the column name for the CODE_VILLE field */
    const CODE_VILLE = 't_compte_bancaire.CODE_VILLE';

    /** the column name for the CODE_AGENCE field */
    const CODE_AGENCE = 't_compte_bancaire.CODE_AGENCE';

    /** the column name for the ID_VILLE field */
    const ID_VILLE = 't_compte_bancaire.ID_VILLE';

    /** the column name for the SUPPRIME field */
    const SUPPRIME = 't_compte_bancaire.SUPPRIME';

    /** the column name for the ACTIF field */
    const ACTIF = 't_compte_bancaire.ACTIF';

    /** the column name for the BANCARISE field */
    const BANCARISE = 't_compte_bancaire.BANCARISE';

    /** The enumerated values for the SUPPRIME field */
    const SUPPRIME_0 = '0';
    const SUPPRIME_1 = '1';

    /** The enumerated values for the ACTIF field */
    const ACTIF_0 = '0';
    const ACTIF_1 = '1';

    /** The enumerated values for the BANCARISE field */
    const BANCARISE_0 = '0';
    const BANCARISE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCompteBancaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCompteBancaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCompteBancairePeer::$fieldNames[CommonTCompteBancairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdEntreprise', 'IdInscrit', 'Denomination', 'IdBanque', 'IdentifiantBancaire', 'CodeVille', 'CodeAgence', 'IdVille', 'Supprime', 'Actif', 'Bancarise', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idEntreprise', 'idInscrit', 'denomination', 'idBanque', 'identifiantBancaire', 'codeVille', 'codeAgence', 'idVille', 'supprime', 'actif', 'bancarise', ),
        BasePeer::TYPE_COLNAME => array (CommonTCompteBancairePeer::ID, CommonTCompteBancairePeer::ID_ENTREPRISE, CommonTCompteBancairePeer::ID_INSCRIT, CommonTCompteBancairePeer::DENOMINATION, CommonTCompteBancairePeer::ID_BANQUE, CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE, CommonTCompteBancairePeer::CODE_VILLE, CommonTCompteBancairePeer::CODE_AGENCE, CommonTCompteBancairePeer::ID_VILLE, CommonTCompteBancairePeer::SUPPRIME, CommonTCompteBancairePeer::ACTIF, CommonTCompteBancairePeer::BANCARISE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_ENTREPRISE', 'ID_INSCRIT', 'DENOMINATION', 'ID_BANQUE', 'IDENTIFIANT_BANCAIRE', 'CODE_VILLE', 'CODE_AGENCE', 'ID_VILLE', 'SUPPRIME', 'ACTIF', 'BANCARISE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_ENTREPRISE', 'ID_INSCRIT', 'DENOMINATION', 'ID_BANQUE', 'IDENTIFIANT_BANCAIRE', 'CODE_VILLE', 'CODE_AGENCE', 'ID_VILLE', 'SUPPRIME', 'ACTIF', 'BANCARISE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCompteBancairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdEntreprise' => 1, 'IdInscrit' => 2, 'Denomination' => 3, 'IdBanque' => 4, 'IdentifiantBancaire' => 5, 'CodeVille' => 6, 'CodeAgence' => 7, 'IdVille' => 8, 'Supprime' => 9, 'Actif' => 10, 'Bancarise' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idEntreprise' => 1, 'idInscrit' => 2, 'denomination' => 3, 'idBanque' => 4, 'identifiantBancaire' => 5, 'codeVille' => 6, 'codeAgence' => 7, 'idVille' => 8, 'supprime' => 9, 'actif' => 10, 'bancarise' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonTCompteBancairePeer::ID => 0, CommonTCompteBancairePeer::ID_ENTREPRISE => 1, CommonTCompteBancairePeer::ID_INSCRIT => 2, CommonTCompteBancairePeer::DENOMINATION => 3, CommonTCompteBancairePeer::ID_BANQUE => 4, CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE => 5, CommonTCompteBancairePeer::CODE_VILLE => 6, CommonTCompteBancairePeer::CODE_AGENCE => 7, CommonTCompteBancairePeer::ID_VILLE => 8, CommonTCompteBancairePeer::SUPPRIME => 9, CommonTCompteBancairePeer::ACTIF => 10, CommonTCompteBancairePeer::BANCARISE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_ENTREPRISE' => 1, 'ID_INSCRIT' => 2, 'DENOMINATION' => 3, 'ID_BANQUE' => 4, 'IDENTIFIANT_BANCAIRE' => 5, 'CODE_VILLE' => 6, 'CODE_AGENCE' => 7, 'ID_VILLE' => 8, 'SUPPRIME' => 9, 'ACTIF' => 10, 'BANCARISE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_ENTREPRISE' => 1, 'ID_INSCRIT' => 2, 'DENOMINATION' => 3, 'ID_BANQUE' => 4, 'IDENTIFIANT_BANCAIRE' => 5, 'CODE_VILLE' => 6, 'CODE_AGENCE' => 7, 'ID_VILLE' => 8, 'SUPPRIME' => 9, 'ACTIF' => 10, 'BANCARISE' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTCompteBancairePeer::SUPPRIME => array(
            CommonTCompteBancairePeer::SUPPRIME_0,
            CommonTCompteBancairePeer::SUPPRIME_1,
        ),
        CommonTCompteBancairePeer::ACTIF => array(
            CommonTCompteBancairePeer::ACTIF_0,
            CommonTCompteBancairePeer::ACTIF_1,
        ),
        CommonTCompteBancairePeer::BANCARISE => array(
            CommonTCompteBancairePeer::BANCARISE_0,
            CommonTCompteBancairePeer::BANCARISE_1,
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
        $toNames = CommonTCompteBancairePeer::getFieldNames($toType);
        $key = isset(CommonTCompteBancairePeer::$fieldKeys[$fromType][$name]) ? CommonTCompteBancairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCompteBancairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCompteBancairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCompteBancairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTCompteBancairePeer::$enumValueSets;
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
        $valueSets = CommonTCompteBancairePeer::getValueSets();

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
        $values = CommonTCompteBancairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTCompteBancairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCompteBancairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ID);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::DENOMINATION);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ID_BANQUE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::CODE_VILLE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::CODE_AGENCE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ID_VILLE);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::SUPPRIME);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::ACTIF);
            $criteria->addSelectColumn(CommonTCompteBancairePeer::BANCARISE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT');
            $criteria->addSelectColumn($alias . '.DENOMINATION');
            $criteria->addSelectColumn($alias . '.ID_BANQUE');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_BANCAIRE');
            $criteria->addSelectColumn($alias . '.CODE_VILLE');
            $criteria->addSelectColumn($alias . '.CODE_AGENCE');
            $criteria->addSelectColumn($alias . '.ID_VILLE');
            $criteria->addSelectColumn($alias . '.SUPPRIME');
            $criteria->addSelectColumn($alias . '.ACTIF');
            $criteria->addSelectColumn($alias . '.BANCARISE');
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
        $criteria->setPrimaryTableName(CommonTCompteBancairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCompteBancairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCompteBancaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCompteBancairePeer::doSelect($critcopy, $con);
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
        return CommonTCompteBancairePeer::populateObjects(CommonTCompteBancairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCompteBancairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

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
     * @param      CommonTCompteBancaire $obj A CommonTCompteBancaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTCompteBancairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCompteBancaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCompteBancaire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCompteBancaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCompteBancairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCompteBancaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCompteBancairePeer::$instances[$key])) {
                return CommonTCompteBancairePeer::$instances[$key];
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
        foreach (CommonTCompteBancairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCompteBancairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_compte_bancaire
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
        $cls = CommonTCompteBancairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCompteBancairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCompteBancairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCompteBancaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCompteBancairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCompteBancairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCompteBancairePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTBanque table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTBanque(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCompteBancairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCompteBancairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCompteBancairePeer::ID_BANQUE, CommonTBanquePeer::ID, $join_behavior);

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
     * Selects a collection of CommonTCompteBancaire objects pre-filled with their CommonTBanque objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCompteBancaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTBanque(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);
        }

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol = CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;
        CommonTBanquePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCompteBancairePeer::ID_BANQUE, CommonTBanquePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCompteBancairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCompteBancairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCompteBancairePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTBanquePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTBanquePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTBanquePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTBanquePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCompteBancaire) to $obj2 (CommonTBanque)
                $obj2->addCommonTCompteBancaire($obj1);

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
        $criteria->setPrimaryTableName(CommonTCompteBancairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCompteBancairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCompteBancairePeer::ID_BANQUE, CommonTBanquePeer::ID, $join_behavior);

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
     * Selects a collection of CommonTCompteBancaire objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCompteBancaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);
        }

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol2 = CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        CommonTBanquePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTBanquePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCompteBancairePeer::ID_BANQUE, CommonTBanquePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCompteBancairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCompteBancairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCompteBancairePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTBanque rows

            $key2 = CommonTBanquePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTBanquePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTBanquePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTBanquePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCompteBancaire) to the collection in $obj2 (CommonTBanque)
                $obj2->addCommonTCompteBancaire($obj1);
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
        return Propel::getDatabaseMap(CommonTCompteBancairePeer::DATABASE_NAME)->getTable(CommonTCompteBancairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCompteBancairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCompteBancairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCompteBancaireTableMap());
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
        return CommonTCompteBancairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCompteBancaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCompteBancaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCompteBancaire object
        }

        if ($criteria->containsKey(CommonTCompteBancairePeer::ID) && $criteria->keyContainsValue(CommonTCompteBancairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCompteBancairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCompteBancaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCompteBancaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCompteBancairePeer::ID);
            $value = $criteria->remove(CommonTCompteBancairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTCompteBancairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCompteBancairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTCompteBancaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_compte_bancaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCompteBancairePeer::TABLE_NAME, $con, CommonTCompteBancairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCompteBancairePeer::clearInstancePool();
            CommonTCompteBancairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCompteBancaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCompteBancaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCompteBancairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCompteBancaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTCompteBancairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);
            $criteria->add(CommonTCompteBancairePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTCompteBancairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCompteBancairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCompteBancairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCompteBancaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCompteBancaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCompteBancairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCompteBancairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCompteBancairePeer::DATABASE_NAME, CommonTCompteBancairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTCompteBancaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTCompteBancairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);
        $criteria->add(CommonTCompteBancairePeer::ID, $pk);

        $v = CommonTCompteBancairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTCompteBancaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);
            $criteria->add(CommonTCompteBancairePeer::ID, $pks, Criteria::IN);
            $objs = CommonTCompteBancairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTCompteBancairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCompteBancairePeer::buildTableMap();

