<?php


/**
 * Base static class for performing query and update operations on the 'Certificat_Agent' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Certificat_Agent';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCertificatAgent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCertificatAgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'Certificat_Agent.id';

    /** the column name for the certificat field */
    const CERTIFICAT = 'Certificat_Agent.certificat';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'Certificat_Agent.date_debut';

    /** the column name for the date_fin field */
    const DATE_FIN = 'Certificat_Agent.date_fin';

    /** the column name for the id_agent field */
    const ID_AGENT = 'Certificat_Agent.id_agent';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 'Certificat_Agent.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 'Certificat_Agent.prenom_agent';

    /** the column name for the id_service field */
    const ID_SERVICE = 'Certificat_Agent.id_service';

    /** the column name for the statut_revoque field */
    const STATUT_REVOQUE = 'Certificat_Agent.statut_revoque';

    /** the column name for the date_revoquation field */
    const DATE_REVOQUATION = 'Certificat_Agent.date_revoquation';

    /** the column name for the mail_agent field */
    const MAIL_AGENT = 'Certificat_Agent.mail_agent';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCertificatAgent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCertificatAgent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatAgentPeer::$fieldNames[CommonCertificatAgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Certificat', 'DateDebut', 'DateFin', 'IdAgent', 'NomAgent', 'PrenomAgent', 'IdService', 'StatutRevoque', 'DateRevoquation', 'MailAgent', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'certificat', 'dateDebut', 'dateFin', 'idAgent', 'nomAgent', 'prenomAgent', 'idService', 'statutRevoque', 'dateRevoquation', 'mailAgent', ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatAgentPeer::ID, CommonCertificatAgentPeer::CERTIFICAT, CommonCertificatAgentPeer::DATE_DEBUT, CommonCertificatAgentPeer::DATE_FIN, CommonCertificatAgentPeer::ID_AGENT, CommonCertificatAgentPeer::NOM_AGENT, CommonCertificatAgentPeer::PRENOM_AGENT, CommonCertificatAgentPeer::ID_SERVICE, CommonCertificatAgentPeer::STATUT_REVOQUE, CommonCertificatAgentPeer::DATE_REVOQUATION, CommonCertificatAgentPeer::MAIL_AGENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CERTIFICAT', 'DATE_DEBUT', 'DATE_FIN', 'ID_AGENT', 'NOM_AGENT', 'PRENOM_AGENT', 'ID_SERVICE', 'STATUT_REVOQUE', 'DATE_REVOQUATION', 'MAIL_AGENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'certificat', 'date_debut', 'date_fin', 'id_agent', 'nom_agent', 'prenom_agent', 'id_service', 'statut_revoque', 'date_revoquation', 'mail_agent', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatAgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Certificat' => 1, 'DateDebut' => 2, 'DateFin' => 3, 'IdAgent' => 4, 'NomAgent' => 5, 'PrenomAgent' => 6, 'IdService' => 7, 'StatutRevoque' => 8, 'DateRevoquation' => 9, 'MailAgent' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'certificat' => 1, 'dateDebut' => 2, 'dateFin' => 3, 'idAgent' => 4, 'nomAgent' => 5, 'prenomAgent' => 6, 'idService' => 7, 'statutRevoque' => 8, 'dateRevoquation' => 9, 'mailAgent' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatAgentPeer::ID => 0, CommonCertificatAgentPeer::CERTIFICAT => 1, CommonCertificatAgentPeer::DATE_DEBUT => 2, CommonCertificatAgentPeer::DATE_FIN => 3, CommonCertificatAgentPeer::ID_AGENT => 4, CommonCertificatAgentPeer::NOM_AGENT => 5, CommonCertificatAgentPeer::PRENOM_AGENT => 6, CommonCertificatAgentPeer::ID_SERVICE => 7, CommonCertificatAgentPeer::STATUT_REVOQUE => 8, CommonCertificatAgentPeer::DATE_REVOQUATION => 9, CommonCertificatAgentPeer::MAIL_AGENT => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CERTIFICAT' => 1, 'DATE_DEBUT' => 2, 'DATE_FIN' => 3, 'ID_AGENT' => 4, 'NOM_AGENT' => 5, 'PRENOM_AGENT' => 6, 'ID_SERVICE' => 7, 'STATUT_REVOQUE' => 8, 'DATE_REVOQUATION' => 9, 'MAIL_AGENT' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'certificat' => 1, 'date_debut' => 2, 'date_fin' => 3, 'id_agent' => 4, 'nom_agent' => 5, 'prenom_agent' => 6, 'id_service' => 7, 'statut_revoque' => 8, 'date_revoquation' => 9, 'mail_agent' => 10, ),
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
        $toNames = CommonCertificatAgentPeer::getFieldNames($toType);
        $key = isset(CommonCertificatAgentPeer::$fieldKeys[$fromType][$name]) ? CommonCertificatAgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCertificatAgentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCertificatAgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCertificatAgentPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonCertificatAgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCertificatAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCertificatAgentPeer::ID);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::DATE_DEBUT);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::DATE_FIN);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::STATUT_REVOQUE);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::DATE_REVOQUATION);
            $criteria->addSelectColumn(CommonCertificatAgentPeer::MAIL_AGENT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.certificat');
            $criteria->addSelectColumn($alias . '.date_debut');
            $criteria->addSelectColumn($alias . '.date_fin');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.statut_revoque');
            $criteria->addSelectColumn($alias . '.date_revoquation');
            $criteria->addSelectColumn($alias . '.mail_agent');
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
        $criteria->setPrimaryTableName(CommonCertificatAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCertificatAgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatAgent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCertificatAgentPeer::doSelect($critcopy, $con);
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
        return CommonCertificatAgentPeer::populateObjects(CommonCertificatAgentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCertificatAgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatAgentPeer::DATABASE_NAME);

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
     * @param      CommonCertificatAgent $obj A CommonCertificatAgent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCertificatAgentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCertificatAgent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCertificatAgent) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCertificatAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCertificatAgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCertificatAgent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCertificatAgentPeer::$instances[$key])) {
                return CommonCertificatAgentPeer::$instances[$key];
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
        foreach (CommonCertificatAgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCertificatAgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Certificat_Agent
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
        $cls = CommonCertificatAgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCertificatAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCertificatAgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCertificatAgentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCertificatAgent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCertificatAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCertificatAgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCertificatAgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCertificatAgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCertificatAgentPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCertificatAgentPeer::DATABASE_NAME)->getTable(CommonCertificatAgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCertificatAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCertificatAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCertificatAgentTableMap());
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
        return CommonCertificatAgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCertificatAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatAgent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCertificatAgent object
        }

        if ($criteria->containsKey(CommonCertificatAgentPeer::ID) && $criteria->keyContainsValue(CommonCertificatAgentPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCertificatAgentPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCertificatAgentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCertificatAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatAgent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCertificatAgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCertificatAgentPeer::ID);
            $value = $criteria->remove(CommonCertificatAgentPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCertificatAgentPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatAgentPeer::TABLE_NAME);
            }

        } else { // $values is CommonCertificatAgent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCertificatAgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Certificat_Agent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCertificatAgentPeer::TABLE_NAME, $con, CommonCertificatAgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCertificatAgentPeer::clearInstancePool();
            CommonCertificatAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCertificatAgent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCertificatAgent object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCertificatAgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCertificatAgent) { // it's a model object
            // invalidate the cache for this single object
            CommonCertificatAgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCertificatAgentPeer::DATABASE_NAME);
            $criteria->add(CommonCertificatAgentPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCertificatAgentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatAgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCertificatAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCertificatAgent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCertificatAgent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCertificatAgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCertificatAgentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCertificatAgentPeer::DATABASE_NAME, CommonCertificatAgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCertificatAgent
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCertificatAgentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCertificatAgentPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatAgentPeer::ID, $pk);

        $v = CommonCertificatAgentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCertificatAgent[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCertificatAgentPeer::DATABASE_NAME);
            $criteria->add(CommonCertificatAgentPeer::ID, $pks, Criteria::IN);
            $objs = CommonCertificatAgentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCertificatAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCertificatAgentPeer::buildTableMap();

