<?php


/**
 * Base static class for performing query and update operations on the 'CertificatPermanent' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatPermanentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'CertificatPermanent';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCertificatPermanent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCertificatPermanentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id field */
    const ID = 'CertificatPermanent.id';

    /** the column name for the organisme field */
    const ORGANISME = 'CertificatPermanent.organisme';

    /** the column name for the Titre field */
    const TITRE = 'CertificatPermanent.Titre';

    /** the column name for the Prenom field */
    const PRENOM = 'CertificatPermanent.Prenom';

    /** the column name for the Nom field */
    const NOM = 'CertificatPermanent.Nom';

    /** the column name for the EMail field */
    const EMAIL = 'CertificatPermanent.EMail';

    /** the column name for the Certificat field */
    const CERTIFICAT = 'CertificatPermanent.Certificat';

    /** the column name for the service_id field */
    const SERVICE_ID = 'CertificatPermanent.service_id';

    /** the column name for the master_key field */
    const MASTER_KEY = 'CertificatPermanent.master_key';

    /** the column name for the id_agent field */
    const ID_AGENT = 'CertificatPermanent.id_agent';

    /** the column name for the CSP field */
    const CSP = 'CertificatPermanent.CSP';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'CertificatPermanent.date_modification';

    /** the column name for the certificat_universelle field */
    const CERTIFICAT_UNIVERSELLE = 'CertificatPermanent.certificat_universelle';

    /** the column name for the visible field */
    const VISIBLE = 'CertificatPermanent.visible';

    /** The enumerated values for the master_key field */
    const MASTER_KEY_0 = '0';
    const MASTER_KEY_1 = '1';

    /** The enumerated values for the certificat_universelle field */
    const CERTIFICAT_UNIVERSELLE_0 = '0';
    const CERTIFICAT_UNIVERSELLE_1 = '1';

    /** The enumerated values for the visible field */
    const VISIBLE_0 = '0';
    const VISIBLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCertificatPermanent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCertificatPermanent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatPermanentPeer::$fieldNames[CommonCertificatPermanentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Titre', 'Prenom', 'Nom', 'Email', 'Certificat', 'ServiceId', 'MasterKey', 'IdAgent', 'Csp', 'DateModification', 'CertificatUniverselle', 'Visible', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'titre', 'prenom', 'nom', 'email', 'certificat', 'serviceId', 'masterKey', 'idAgent', 'csp', 'dateModification', 'certificatUniverselle', 'visible', ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatPermanentPeer::ID, CommonCertificatPermanentPeer::ORGANISME, CommonCertificatPermanentPeer::TITRE, CommonCertificatPermanentPeer::PRENOM, CommonCertificatPermanentPeer::NOM, CommonCertificatPermanentPeer::EMAIL, CommonCertificatPermanentPeer::CERTIFICAT, CommonCertificatPermanentPeer::SERVICE_ID, CommonCertificatPermanentPeer::MASTER_KEY, CommonCertificatPermanentPeer::ID_AGENT, CommonCertificatPermanentPeer::CSP, CommonCertificatPermanentPeer::DATE_MODIFICATION, CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE, CommonCertificatPermanentPeer::VISIBLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'TITRE', 'PRENOM', 'NOM', 'EMAIL', 'CERTIFICAT', 'SERVICE_ID', 'MASTER_KEY', 'ID_AGENT', 'CSP', 'DATE_MODIFICATION', 'CERTIFICAT_UNIVERSELLE', 'VISIBLE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'Titre', 'Prenom', 'Nom', 'EMail', 'Certificat', 'service_id', 'master_key', 'id_agent', 'CSP', 'date_modification', 'certificat_universelle', 'visible', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatPermanentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Titre' => 2, 'Prenom' => 3, 'Nom' => 4, 'Email' => 5, 'Certificat' => 6, 'ServiceId' => 7, 'MasterKey' => 8, 'IdAgent' => 9, 'Csp' => 10, 'DateModification' => 11, 'CertificatUniverselle' => 12, 'Visible' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'titre' => 2, 'prenom' => 3, 'nom' => 4, 'email' => 5, 'certificat' => 6, 'serviceId' => 7, 'masterKey' => 8, 'idAgent' => 9, 'csp' => 10, 'dateModification' => 11, 'certificatUniverselle' => 12, 'visible' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatPermanentPeer::ID => 0, CommonCertificatPermanentPeer::ORGANISME => 1, CommonCertificatPermanentPeer::TITRE => 2, CommonCertificatPermanentPeer::PRENOM => 3, CommonCertificatPermanentPeer::NOM => 4, CommonCertificatPermanentPeer::EMAIL => 5, CommonCertificatPermanentPeer::CERTIFICAT => 6, CommonCertificatPermanentPeer::SERVICE_ID => 7, CommonCertificatPermanentPeer::MASTER_KEY => 8, CommonCertificatPermanentPeer::ID_AGENT => 9, CommonCertificatPermanentPeer::CSP => 10, CommonCertificatPermanentPeer::DATE_MODIFICATION => 11, CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE => 12, CommonCertificatPermanentPeer::VISIBLE => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'TITRE' => 2, 'PRENOM' => 3, 'NOM' => 4, 'EMAIL' => 5, 'CERTIFICAT' => 6, 'SERVICE_ID' => 7, 'MASTER_KEY' => 8, 'ID_AGENT' => 9, 'CSP' => 10, 'DATE_MODIFICATION' => 11, 'CERTIFICAT_UNIVERSELLE' => 12, 'VISIBLE' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'Titre' => 2, 'Prenom' => 3, 'Nom' => 4, 'EMail' => 5, 'Certificat' => 6, 'service_id' => 7, 'master_key' => 8, 'id_agent' => 9, 'CSP' => 10, 'date_modification' => 11, 'certificat_universelle' => 12, 'visible' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCertificatPermanentPeer::MASTER_KEY => array(
            CommonCertificatPermanentPeer::MASTER_KEY_0,
            CommonCertificatPermanentPeer::MASTER_KEY_1,
        ),
        CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE => array(
            CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE_0,
            CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE_1,
        ),
        CommonCertificatPermanentPeer::VISIBLE => array(
            CommonCertificatPermanentPeer::VISIBLE_0,
            CommonCertificatPermanentPeer::VISIBLE_1,
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
        $toNames = CommonCertificatPermanentPeer::getFieldNames($toType);
        $key = isset(CommonCertificatPermanentPeer::$fieldKeys[$fromType][$name]) ? CommonCertificatPermanentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCertificatPermanentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCertificatPermanentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCertificatPermanentPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCertificatPermanentPeer::$enumValueSets;
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
        $valueSets = CommonCertificatPermanentPeer::getValueSets();

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
        $values = CommonCertificatPermanentPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCertificatPermanentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCertificatPermanentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::ID);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::ORGANISME);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::TITRE);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::PRENOM);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::NOM);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::EMAIL);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::MASTER_KEY);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::CSP);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE);
            $criteria->addSelectColumn(CommonCertificatPermanentPeer::VISIBLE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.Titre');
            $criteria->addSelectColumn($alias . '.Prenom');
            $criteria->addSelectColumn($alias . '.Nom');
            $criteria->addSelectColumn($alias . '.EMail');
            $criteria->addSelectColumn($alias . '.Certificat');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.master_key');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.CSP');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.certificat_universelle');
            $criteria->addSelectColumn($alias . '.visible');
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
        $criteria->setPrimaryTableName(CommonCertificatPermanentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatPermanentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCertificatPermanentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatPermanent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCertificatPermanentPeer::doSelect($critcopy, $con);
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
        return CommonCertificatPermanentPeer::populateObjects(CommonCertificatPermanentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCertificatPermanentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatPermanentPeer::DATABASE_NAME);

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
     * @param      CommonCertificatPermanent $obj A CommonCertificatPermanent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonCertificatPermanentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCertificatPermanent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCertificatPermanent) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCertificatPermanent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCertificatPermanentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCertificatPermanent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCertificatPermanentPeer::$instances[$key])) {
                return CommonCertificatPermanentPeer::$instances[$key];
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
        foreach (CommonCertificatPermanentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCertificatPermanentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to CertificatPermanent
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
        $cls = CommonCertificatPermanentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCertificatPermanentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCertificatPermanentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCertificatPermanentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCertificatPermanent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCertificatPermanentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCertificatPermanentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCertificatPermanentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCertificatPermanentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCertificatPermanentPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCertificatPermanentPeer::DATABASE_NAME)->getTable(CommonCertificatPermanentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCertificatPermanentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCertificatPermanentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCertificatPermanentTableMap());
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
        return CommonCertificatPermanentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCertificatPermanent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatPermanent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCertificatPermanent object
        }

        if ($criteria->containsKey(CommonCertificatPermanentPeer::ID) && $criteria->keyContainsValue(CommonCertificatPermanentPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCertificatPermanentPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCertificatPermanentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCertificatPermanent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatPermanent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCertificatPermanentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCertificatPermanentPeer::ID);
            $value = $criteria->remove(CommonCertificatPermanentPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCertificatPermanentPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatPermanentPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonCertificatPermanentPeer::ORGANISME);
            $value = $criteria->remove(CommonCertificatPermanentPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonCertificatPermanentPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatPermanentPeer::TABLE_NAME);
            }

        } else { // $values is CommonCertificatPermanent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCertificatPermanentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CertificatPermanent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCertificatPermanentPeer::TABLE_NAME, $con, CommonCertificatPermanentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCertificatPermanentPeer::clearInstancePool();
            CommonCertificatPermanentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCertificatPermanent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCertificatPermanent object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCertificatPermanentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCertificatPermanent) { // it's a model object
            // invalidate the cache for this single object
            CommonCertificatPermanentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCertificatPermanentPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonCertificatPermanentPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonCertificatPermanentPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonCertificatPermanentPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatPermanentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCertificatPermanentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCertificatPermanent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCertificatPermanent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCertificatPermanentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCertificatPermanentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCertificatPermanentPeer::DATABASE_NAME, CommonCertificatPermanentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonCertificatPermanent
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonCertificatPermanentPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonCertificatPermanentPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatPermanentPeer::ID, $id);
        $criteria->add(CommonCertificatPermanentPeer::ORGANISME, $organisme);
        $v = CommonCertificatPermanentPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonCertificatPermanentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCertificatPermanentPeer::buildTableMap();

