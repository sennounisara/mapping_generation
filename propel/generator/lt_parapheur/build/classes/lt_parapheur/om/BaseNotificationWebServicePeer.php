<?php


/**
 * Base static class for performing query and update operations on the 'notification_web_service' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseNotificationWebServicePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'notification_web_service';

    /** the related Propel class for this table */
    const OM_CLASS = 'NotificationWebService';

    /** the related TableMap class for this table */
    const TM_CLASS = 'NotificationWebServiceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the ID_NOTIFICATION_WEB_SERVICE field */
    const ID_NOTIFICATION_WEB_SERVICE = 'notification_web_service.ID_NOTIFICATION_WEB_SERVICE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'notification_web_service.ID_DEMANDE';

    /** the column name for the ID_STATUT field */
    const ID_STATUT = 'notification_web_service.ID_STATUT';

    /** the column name for the LIBELLE_STATUT field */
    const LIBELLE_STATUT = 'notification_web_service.LIBELLE_STATUT';

    /** the column name for the LIBELLE_STATUT_AR field */
    const LIBELLE_STATUT_AR = 'notification_web_service.LIBELLE_STATUT_AR';

    /** the column name for the DATE_STATUT field */
    const DATE_STATUT = 'notification_web_service.DATE_STATUT';

    /** the column name for the DATE field */
    const DATE = 'notification_web_service.DATE';

    /** the column name for the ID_ORGANISME field */
    const ID_ORGANISME = 'notification_web_service.ID_ORGANISME';

    /** the column name for the ID_UTILISATEUR field */
    const ID_UTILISATEUR = 'notification_web_service.ID_UTILISATEUR';

    /** the column name for the ETAT_NOTIFICATION field */
    const ETAT_NOTIFICATION = 'notification_web_service.ETAT_NOTIFICATION';

    /** the column name for the ETAT_ACQUITTEMENT field */
    const ETAT_ACQUITTEMENT = 'notification_web_service.ETAT_ACQUITTEMENT';

    /** the column name for the DATE_ACQUITTEMENT field */
    const DATE_ACQUITTEMENT = 'notification_web_service.DATE_ACQUITTEMENT';

    /** The enumerated values for the ETAT_NOTIFICATION field */
    const ETAT_NOTIFICATION_0 = '0';
    const ETAT_NOTIFICATION_1 = '1';

    /** The enumerated values for the ETAT_ACQUITTEMENT field */
    const ETAT_ACQUITTEMENT_0 = '0';
    const ETAT_ACQUITTEMENT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of NotificationWebService objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array NotificationWebService[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NotificationWebServicePeer::$fieldNames[NotificationWebServicePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdNotificationWebService', 'IdDemande', 'IdStatut', 'LibelleStatut', 'LibelleStatutAr', 'DateStatut', 'Date', 'IdOrganisme', 'IdUtilisateur', 'EtatNotification', 'EtatAcquittement', 'DateAcquittement', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idNotificationWebService', 'idDemande', 'idStatut', 'libelleStatut', 'libelleStatutAr', 'dateStatut', 'date', 'idOrganisme', 'idUtilisateur', 'etatNotification', 'etatAcquittement', 'dateAcquittement', ),
        BasePeer::TYPE_COLNAME => array (NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, NotificationWebServicePeer::ID_DEMANDE, NotificationWebServicePeer::ID_STATUT, NotificationWebServicePeer::LIBELLE_STATUT, NotificationWebServicePeer::LIBELLE_STATUT_AR, NotificationWebServicePeer::DATE_STATUT, NotificationWebServicePeer::DATE, NotificationWebServicePeer::ID_ORGANISME, NotificationWebServicePeer::ID_UTILISATEUR, NotificationWebServicePeer::ETAT_NOTIFICATION, NotificationWebServicePeer::ETAT_ACQUITTEMENT, NotificationWebServicePeer::DATE_ACQUITTEMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_NOTIFICATION_WEB_SERVICE', 'ID_DEMANDE', 'ID_STATUT', 'LIBELLE_STATUT', 'LIBELLE_STATUT_AR', 'DATE_STATUT', 'DATE', 'ID_ORGANISME', 'ID_UTILISATEUR', 'ETAT_NOTIFICATION', 'ETAT_ACQUITTEMENT', 'DATE_ACQUITTEMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_NOTIFICATION_WEB_SERVICE', 'ID_DEMANDE', 'ID_STATUT', 'LIBELLE_STATUT', 'LIBELLE_STATUT_AR', 'DATE_STATUT', 'DATE', 'ID_ORGANISME', 'ID_UTILISATEUR', 'ETAT_NOTIFICATION', 'ETAT_ACQUITTEMENT', 'DATE_ACQUITTEMENT', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NotificationWebServicePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdNotificationWebService' => 0, 'IdDemande' => 1, 'IdStatut' => 2, 'LibelleStatut' => 3, 'LibelleStatutAr' => 4, 'DateStatut' => 5, 'Date' => 6, 'IdOrganisme' => 7, 'IdUtilisateur' => 8, 'EtatNotification' => 9, 'EtatAcquittement' => 10, 'DateAcquittement' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idNotificationWebService' => 0, 'idDemande' => 1, 'idStatut' => 2, 'libelleStatut' => 3, 'libelleStatutAr' => 4, 'dateStatut' => 5, 'date' => 6, 'idOrganisme' => 7, 'idUtilisateur' => 8, 'etatNotification' => 9, 'etatAcquittement' => 10, 'dateAcquittement' => 11, ),
        BasePeer::TYPE_COLNAME => array (NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE => 0, NotificationWebServicePeer::ID_DEMANDE => 1, NotificationWebServicePeer::ID_STATUT => 2, NotificationWebServicePeer::LIBELLE_STATUT => 3, NotificationWebServicePeer::LIBELLE_STATUT_AR => 4, NotificationWebServicePeer::DATE_STATUT => 5, NotificationWebServicePeer::DATE => 6, NotificationWebServicePeer::ID_ORGANISME => 7, NotificationWebServicePeer::ID_UTILISATEUR => 8, NotificationWebServicePeer::ETAT_NOTIFICATION => 9, NotificationWebServicePeer::ETAT_ACQUITTEMENT => 10, NotificationWebServicePeer::DATE_ACQUITTEMENT => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_NOTIFICATION_WEB_SERVICE' => 0, 'ID_DEMANDE' => 1, 'ID_STATUT' => 2, 'LIBELLE_STATUT' => 3, 'LIBELLE_STATUT_AR' => 4, 'DATE_STATUT' => 5, 'DATE' => 6, 'ID_ORGANISME' => 7, 'ID_UTILISATEUR' => 8, 'ETAT_NOTIFICATION' => 9, 'ETAT_ACQUITTEMENT' => 10, 'DATE_ACQUITTEMENT' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_NOTIFICATION_WEB_SERVICE' => 0, 'ID_DEMANDE' => 1, 'ID_STATUT' => 2, 'LIBELLE_STATUT' => 3, 'LIBELLE_STATUT_AR' => 4, 'DATE_STATUT' => 5, 'DATE' => 6, 'ID_ORGANISME' => 7, 'ID_UTILISATEUR' => 8, 'ETAT_NOTIFICATION' => 9, 'ETAT_ACQUITTEMENT' => 10, 'DATE_ACQUITTEMENT' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        NotificationWebServicePeer::ETAT_NOTIFICATION => array(
            NotificationWebServicePeer::ETAT_NOTIFICATION_0,
            NotificationWebServicePeer::ETAT_NOTIFICATION_1,
        ),
        NotificationWebServicePeer::ETAT_ACQUITTEMENT => array(
            NotificationWebServicePeer::ETAT_ACQUITTEMENT_0,
            NotificationWebServicePeer::ETAT_ACQUITTEMENT_1,
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
        $toNames = NotificationWebServicePeer::getFieldNames($toType);
        $key = isset(NotificationWebServicePeer::$fieldKeys[$fromType][$name]) ? NotificationWebServicePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NotificationWebServicePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, NotificationWebServicePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NotificationWebServicePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return NotificationWebServicePeer::$enumValueSets;
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
        $valueSets = NotificationWebServicePeer::getValueSets();

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
        $values = NotificationWebServicePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. NotificationWebServicePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NotificationWebServicePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE);
            $criteria->addSelectColumn(NotificationWebServicePeer::ID_DEMANDE);
            $criteria->addSelectColumn(NotificationWebServicePeer::ID_STATUT);
            $criteria->addSelectColumn(NotificationWebServicePeer::LIBELLE_STATUT);
            $criteria->addSelectColumn(NotificationWebServicePeer::LIBELLE_STATUT_AR);
            $criteria->addSelectColumn(NotificationWebServicePeer::DATE_STATUT);
            $criteria->addSelectColumn(NotificationWebServicePeer::DATE);
            $criteria->addSelectColumn(NotificationWebServicePeer::ID_ORGANISME);
            $criteria->addSelectColumn(NotificationWebServicePeer::ID_UTILISATEUR);
            $criteria->addSelectColumn(NotificationWebServicePeer::ETAT_NOTIFICATION);
            $criteria->addSelectColumn(NotificationWebServicePeer::ETAT_ACQUITTEMENT);
            $criteria->addSelectColumn(NotificationWebServicePeer::DATE_ACQUITTEMENT);
        } else {
            $criteria->addSelectColumn($alias . '.ID_NOTIFICATION_WEB_SERVICE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_STATUT');
            $criteria->addSelectColumn($alias . '.LIBELLE_STATUT');
            $criteria->addSelectColumn($alias . '.LIBELLE_STATUT_AR');
            $criteria->addSelectColumn($alias . '.DATE_STATUT');
            $criteria->addSelectColumn($alias . '.DATE');
            $criteria->addSelectColumn($alias . '.ID_ORGANISME');
            $criteria->addSelectColumn($alias . '.ID_UTILISATEUR');
            $criteria->addSelectColumn($alias . '.ETAT_NOTIFICATION');
            $criteria->addSelectColumn($alias . '.ETAT_ACQUITTEMENT');
            $criteria->addSelectColumn($alias . '.DATE_ACQUITTEMENT');
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
        $criteria->setPrimaryTableName(NotificationWebServicePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotificationWebServicePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NotificationWebServicePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 NotificationWebService
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NotificationWebServicePeer::doSelect($critcopy, $con);
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
        return NotificationWebServicePeer::populateObjects(NotificationWebServicePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NotificationWebServicePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NotificationWebServicePeer::DATABASE_NAME);

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
     * @param      NotificationWebService $obj A NotificationWebService object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdNotificationWebService();
            } // if key === null
            NotificationWebServicePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A NotificationWebService object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof NotificationWebService) {
                $key = (string) $value->getIdNotificationWebService();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NotificationWebService object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NotificationWebServicePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   NotificationWebService Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NotificationWebServicePeer::$instances[$key])) {
                return NotificationWebServicePeer::$instances[$key];
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
        foreach (NotificationWebServicePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NotificationWebServicePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to notification_web_service
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
        $cls = NotificationWebServicePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NotificationWebServicePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NotificationWebServicePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NotificationWebServicePeer::addInstanceToPool($obj, $key);
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
     * @return array (NotificationWebService object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NotificationWebServicePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NotificationWebServicePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NotificationWebServicePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NotificationWebServicePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NotificationWebServicePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(NotificationWebServicePeer::DATABASE_NAME)->getTable(NotificationWebServicePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNotificationWebServicePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNotificationWebServicePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new NotificationWebServiceTableMap());
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
        return NotificationWebServicePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a NotificationWebService or Criteria object.
     *
     * @param      mixed $values Criteria or NotificationWebService object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from NotificationWebService object
        }

        if ($criteria->containsKey(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE) && $criteria->keyContainsValue(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NotificationWebServicePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a NotificationWebService or Criteria object.
     *
     * @param      mixed $values Criteria or NotificationWebService object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE);
            $value = $criteria->remove(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE);
            if ($value) {
                $selectCriteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NotificationWebServicePeer::TABLE_NAME);
            }

        } else { // $values is NotificationWebService object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NotificationWebServicePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the notification_web_service table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(NotificationWebServicePeer::TABLE_NAME, $con, NotificationWebServicePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NotificationWebServicePeer::clearInstancePool();
            NotificationWebServicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a NotificationWebService or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or NotificationWebService object or primary key or array of primary keys
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
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            NotificationWebServicePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof NotificationWebService) { // it's a model object
            // invalidate the cache for this single object
            NotificationWebServicePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);
            $criteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                NotificationWebServicePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(NotificationWebServicePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            NotificationWebServicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given NotificationWebService object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      NotificationWebService $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NotificationWebServicePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NotificationWebServicePeer::TABLE_NAME);

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

        return BasePeer::doValidate(NotificationWebServicePeer::DATABASE_NAME, NotificationWebServicePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return NotificationWebService
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NotificationWebServicePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);
        $criteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $pk);

        $v = NotificationWebServicePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return NotificationWebService[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);
            $criteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $pks, Criteria::IN);
            $objs = NotificationWebServicePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNotificationWebServicePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNotificationWebServicePeer::buildTableMap();

