<?php


/**
 * Base static class for performing query and update operations on the 'renseignements_boamp' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonRenseignementsBoampPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'renseignements_boamp';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonRenseignementsBoamp';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonRenseignementsBoampTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id field */
    const ID = 'renseignements_boamp.id';

    /** the column name for the acronymeOrg field */
    const ACRONYMEORG = 'renseignements_boamp.acronymeOrg';

    /** the column name for the id_type field */
    const ID_TYPE = 'renseignements_boamp.id_type';

    /** the column name for the id_compte field */
    const ID_COMPTE = 'renseignements_boamp.id_compte';

    /** the column name for the correspondant field */
    const CORRESPONDANT = 'renseignements_boamp.correspondant';

    /** the column name for the organisme field */
    const ORGANISME = 'renseignements_boamp.organisme';

    /** the column name for the adresse field */
    const ADRESSE = 'renseignements_boamp.adresse';

    /** the column name for the cp field */
    const CP = 'renseignements_boamp.cp';

    /** the column name for the ville field */
    const VILLE = 'renseignements_boamp.ville';

    /** the column name for the pays field */
    const PAYS = 'renseignements_boamp.pays';

    /** the column name for the telephone field */
    const TELEPHONE = 'renseignements_boamp.telephone';

    /** the column name for the poste field */
    const POSTE = 'renseignements_boamp.poste';

    /** the column name for the fax field */
    const FAX = 'renseignements_boamp.fax';

    /** the column name for the mail field */
    const MAIL = 'renseignements_boamp.mail';

    /** the column name for the url field */
    const URL = 'renseignements_boamp.url';

    /** the column name for the organe_charge_procedure field */
    const ORGANE_CHARGE_PROCEDURE = 'renseignements_boamp.organe_charge_procedure';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonRenseignementsBoamp objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonRenseignementsBoamp[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonRenseignementsBoampPeer::$fieldNames[CommonRenseignementsBoampPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Acronymeorg', 'IdType', 'IdCompte', 'Correspondant', 'Organisme', 'Adresse', 'Cp', 'Ville', 'Pays', 'Telephone', 'Poste', 'Fax', 'Mail', 'Url', 'OrganeChargeProcedure', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'acronymeorg', 'idType', 'idCompte', 'correspondant', 'organisme', 'adresse', 'cp', 'ville', 'pays', 'telephone', 'poste', 'fax', 'mail', 'url', 'organeChargeProcedure', ),
        BasePeer::TYPE_COLNAME => array (CommonRenseignementsBoampPeer::ID, CommonRenseignementsBoampPeer::ACRONYMEORG, CommonRenseignementsBoampPeer::ID_TYPE, CommonRenseignementsBoampPeer::ID_COMPTE, CommonRenseignementsBoampPeer::CORRESPONDANT, CommonRenseignementsBoampPeer::ORGANISME, CommonRenseignementsBoampPeer::ADRESSE, CommonRenseignementsBoampPeer::CP, CommonRenseignementsBoampPeer::VILLE, CommonRenseignementsBoampPeer::PAYS, CommonRenseignementsBoampPeer::TELEPHONE, CommonRenseignementsBoampPeer::POSTE, CommonRenseignementsBoampPeer::FAX, CommonRenseignementsBoampPeer::MAIL, CommonRenseignementsBoampPeer::URL, CommonRenseignementsBoampPeer::ORGANE_CHARGE_PROCEDURE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ACRONYMEORG', 'ID_TYPE', 'ID_COMPTE', 'CORRESPONDANT', 'ORGANISME', 'ADRESSE', 'CP', 'VILLE', 'PAYS', 'TELEPHONE', 'POSTE', 'FAX', 'MAIL', 'URL', 'ORGANE_CHARGE_PROCEDURE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'acronymeOrg', 'id_type', 'id_compte', 'correspondant', 'organisme', 'adresse', 'cp', 'ville', 'pays', 'telephone', 'poste', 'fax', 'mail', 'url', 'organe_charge_procedure', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonRenseignementsBoampPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Acronymeorg' => 1, 'IdType' => 2, 'IdCompte' => 3, 'Correspondant' => 4, 'Organisme' => 5, 'Adresse' => 6, 'Cp' => 7, 'Ville' => 8, 'Pays' => 9, 'Telephone' => 10, 'Poste' => 11, 'Fax' => 12, 'Mail' => 13, 'Url' => 14, 'OrganeChargeProcedure' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'acronymeorg' => 1, 'idType' => 2, 'idCompte' => 3, 'correspondant' => 4, 'organisme' => 5, 'adresse' => 6, 'cp' => 7, 'ville' => 8, 'pays' => 9, 'telephone' => 10, 'poste' => 11, 'fax' => 12, 'mail' => 13, 'url' => 14, 'organeChargeProcedure' => 15, ),
        BasePeer::TYPE_COLNAME => array (CommonRenseignementsBoampPeer::ID => 0, CommonRenseignementsBoampPeer::ACRONYMEORG => 1, CommonRenseignementsBoampPeer::ID_TYPE => 2, CommonRenseignementsBoampPeer::ID_COMPTE => 3, CommonRenseignementsBoampPeer::CORRESPONDANT => 4, CommonRenseignementsBoampPeer::ORGANISME => 5, CommonRenseignementsBoampPeer::ADRESSE => 6, CommonRenseignementsBoampPeer::CP => 7, CommonRenseignementsBoampPeer::VILLE => 8, CommonRenseignementsBoampPeer::PAYS => 9, CommonRenseignementsBoampPeer::TELEPHONE => 10, CommonRenseignementsBoampPeer::POSTE => 11, CommonRenseignementsBoampPeer::FAX => 12, CommonRenseignementsBoampPeer::MAIL => 13, CommonRenseignementsBoampPeer::URL => 14, CommonRenseignementsBoampPeer::ORGANE_CHARGE_PROCEDURE => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ACRONYMEORG' => 1, 'ID_TYPE' => 2, 'ID_COMPTE' => 3, 'CORRESPONDANT' => 4, 'ORGANISME' => 5, 'ADRESSE' => 6, 'CP' => 7, 'VILLE' => 8, 'PAYS' => 9, 'TELEPHONE' => 10, 'POSTE' => 11, 'FAX' => 12, 'MAIL' => 13, 'URL' => 14, 'ORGANE_CHARGE_PROCEDURE' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'acronymeOrg' => 1, 'id_type' => 2, 'id_compte' => 3, 'correspondant' => 4, 'organisme' => 5, 'adresse' => 6, 'cp' => 7, 'ville' => 8, 'pays' => 9, 'telephone' => 10, 'poste' => 11, 'fax' => 12, 'mail' => 13, 'url' => 14, 'organe_charge_procedure' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = CommonRenseignementsBoampPeer::getFieldNames($toType);
        $key = isset(CommonRenseignementsBoampPeer::$fieldKeys[$fromType][$name]) ? CommonRenseignementsBoampPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonRenseignementsBoampPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonRenseignementsBoampPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonRenseignementsBoampPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonRenseignementsBoampPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonRenseignementsBoampPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ID);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ACRONYMEORG);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ID_TYPE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ID_COMPTE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::CORRESPONDANT);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ORGANISME);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ADRESSE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::CP);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::VILLE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::PAYS);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::POSTE);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::FAX);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::MAIL);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::URL);
            $criteria->addSelectColumn(CommonRenseignementsBoampPeer::ORGANE_CHARGE_PROCEDURE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.acronymeOrg');
            $criteria->addSelectColumn($alias . '.id_type');
            $criteria->addSelectColumn($alias . '.id_compte');
            $criteria->addSelectColumn($alias . '.correspondant');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.poste');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.organe_charge_procedure');
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
        $criteria->setPrimaryTableName(CommonRenseignementsBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRenseignementsBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonRenseignementsBoampPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRenseignementsBoamp
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonRenseignementsBoampPeer::doSelect($critcopy, $con);
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
        return CommonRenseignementsBoampPeer::populateObjects(CommonRenseignementsBoampPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonRenseignementsBoampPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRenseignementsBoampPeer::DATABASE_NAME);

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
     * @param      CommonRenseignementsBoamp $obj A CommonRenseignementsBoamp object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getAcronymeorg()));
            } // if key === null
            CommonRenseignementsBoampPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonRenseignementsBoamp object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonRenseignementsBoamp) {
                $key = serialize(array((string) $value->getId(), (string) $value->getAcronymeorg()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonRenseignementsBoamp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonRenseignementsBoampPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonRenseignementsBoamp Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonRenseignementsBoampPeer::$instances[$key])) {
                return CommonRenseignementsBoampPeer::$instances[$key];
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
        foreach (CommonRenseignementsBoampPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonRenseignementsBoampPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to renseignements_boamp
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
        $cls = CommonRenseignementsBoampPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonRenseignementsBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonRenseignementsBoampPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonRenseignementsBoampPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonRenseignementsBoamp object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonRenseignementsBoampPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonRenseignementsBoampPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonRenseignementsBoampPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonRenseignementsBoampPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonRenseignementsBoampPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonRenseignementsBoampPeer::DATABASE_NAME)->getTable(CommonRenseignementsBoampPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonRenseignementsBoampPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonRenseignementsBoampPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonRenseignementsBoampTableMap());
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
        return CommonRenseignementsBoampPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonRenseignementsBoamp or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRenseignementsBoamp object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonRenseignementsBoamp object
        }

        if ($criteria->containsKey(CommonRenseignementsBoampPeer::ID) && $criteria->keyContainsValue(CommonRenseignementsBoampPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonRenseignementsBoampPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonRenseignementsBoampPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonRenseignementsBoamp or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRenseignementsBoamp object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonRenseignementsBoampPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonRenseignementsBoampPeer::ID);
            $value = $criteria->remove(CommonRenseignementsBoampPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonRenseignementsBoampPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRenseignementsBoampPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonRenseignementsBoampPeer::ACRONYMEORG);
            $value = $criteria->remove(CommonRenseignementsBoampPeer::ACRONYMEORG);
            if ($value) {
                $selectCriteria->add(CommonRenseignementsBoampPeer::ACRONYMEORG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRenseignementsBoampPeer::TABLE_NAME);
            }

        } else { // $values is CommonRenseignementsBoamp object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonRenseignementsBoampPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the renseignements_boamp table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonRenseignementsBoampPeer::TABLE_NAME, $con, CommonRenseignementsBoampPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonRenseignementsBoampPeer::clearInstancePool();
            CommonRenseignementsBoampPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonRenseignementsBoamp or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonRenseignementsBoamp object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonRenseignementsBoampPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonRenseignementsBoamp) { // it's a model object
            // invalidate the cache for this single object
            CommonRenseignementsBoampPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonRenseignementsBoampPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonRenseignementsBoampPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonRenseignementsBoampPeer::ACRONYMEORG, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonRenseignementsBoampPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRenseignementsBoampPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonRenseignementsBoampPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonRenseignementsBoamp object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonRenseignementsBoamp $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonRenseignementsBoampPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonRenseignementsBoampPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonRenseignementsBoampPeer::DATABASE_NAME, CommonRenseignementsBoampPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $acronymeorg
     * @param      PropelPDO $con
     * @return   CommonRenseignementsBoamp
     */
    public static function retrieveByPK($id, $acronymeorg, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $acronymeorg));
         if (null !== ($obj = CommonRenseignementsBoampPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonRenseignementsBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonRenseignementsBoampPeer::DATABASE_NAME);
        $criteria->add(CommonRenseignementsBoampPeer::ID, $id);
        $criteria->add(CommonRenseignementsBoampPeer::ACRONYMEORG, $acronymeorg);
        $v = CommonRenseignementsBoampPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonRenseignementsBoampPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonRenseignementsBoampPeer::buildTableMap();

