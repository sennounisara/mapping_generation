<?php


/**
 * Base static class for performing query and update operations on the 'backup_Agent_Commission' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupAgentCommissionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Agent_Commission';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupAgentCommission';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupAgentCommissionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Agent_Commission.organisme';

    /** the column name for the id_commission field */
    const ID_COMMISSION = 'backup_Agent_Commission.id_commission';

    /** the column name for the id_agent field */
    const ID_AGENT = 'backup_Agent_Commission.id_agent';

    /** the column name for the convocation field */
    const CONVOCATION = 'backup_Agent_Commission.convocation';

    /** the column name for the convoc_send field */
    const CONVOC_SEND = 'backup_Agent_Commission.convoc_send';

    /** the column name for the nom_convoc field */
    const NOM_CONVOC = 'backup_Agent_Commission.nom_convoc';

    /** the column name for the contenu_envoi field */
    const CONTENU_ENVOI = 'backup_Agent_Commission.contenu_envoi';

    /** the column name for the fichier_envoye field */
    const FICHIER_ENVOYE = 'backup_Agent_Commission.fichier_envoye';

    /** the column name for the nom_fichier_envoye field */
    const NOM_FICHIER_ENVOYE = 'backup_Agent_Commission.nom_fichier_envoye';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'backup_Agent_Commission.date_envoi';

    /** the column name for the type_voix field */
    const TYPE_VOIX = 'backup_Agent_Commission.type_voix';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupAgentCommission objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupAgentCommission[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupAgentCommissionPeer::$fieldNames[CommonBackupAgentCommissionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme', 'IdCommission', 'IdAgent', 'Convocation', 'ConvocSend', 'NomConvoc', 'ContenuEnvoi', 'FichierEnvoye', 'NomFichierEnvoye', 'DateEnvoi', 'TypeVoix', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme', 'idCommission', 'idAgent', 'convocation', 'convocSend', 'nomConvoc', 'contenuEnvoi', 'fichierEnvoye', 'nomFichierEnvoye', 'dateEnvoi', 'typeVoix', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupAgentCommissionPeer::ORGANISME, CommonBackupAgentCommissionPeer::ID_COMMISSION, CommonBackupAgentCommissionPeer::ID_AGENT, CommonBackupAgentCommissionPeer::CONVOCATION, CommonBackupAgentCommissionPeer::CONVOC_SEND, CommonBackupAgentCommissionPeer::NOM_CONVOC, CommonBackupAgentCommissionPeer::CONTENU_ENVOI, CommonBackupAgentCommissionPeer::FICHIER_ENVOYE, CommonBackupAgentCommissionPeer::NOM_FICHIER_ENVOYE, CommonBackupAgentCommissionPeer::DATE_ENVOI, CommonBackupAgentCommissionPeer::TYPE_VOIX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME', 'ID_COMMISSION', 'ID_AGENT', 'CONVOCATION', 'CONVOC_SEND', 'NOM_CONVOC', 'CONTENU_ENVOI', 'FICHIER_ENVOYE', 'NOM_FICHIER_ENVOYE', 'DATE_ENVOI', 'TYPE_VOIX', ),
        BasePeer::TYPE_FIELDNAME => array ('organisme', 'id_commission', 'id_agent', 'convocation', 'convoc_send', 'nom_convoc', 'contenu_envoi', 'fichier_envoye', 'nom_fichier_envoye', 'date_envoi', 'type_voix', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupAgentCommissionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Organisme' => 0, 'IdCommission' => 1, 'IdAgent' => 2, 'Convocation' => 3, 'ConvocSend' => 4, 'NomConvoc' => 5, 'ContenuEnvoi' => 6, 'FichierEnvoye' => 7, 'NomFichierEnvoye' => 8, 'DateEnvoi' => 9, 'TypeVoix' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('organisme' => 0, 'idCommission' => 1, 'idAgent' => 2, 'convocation' => 3, 'convocSend' => 4, 'nomConvoc' => 5, 'contenuEnvoi' => 6, 'fichierEnvoye' => 7, 'nomFichierEnvoye' => 8, 'dateEnvoi' => 9, 'typeVoix' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupAgentCommissionPeer::ORGANISME => 0, CommonBackupAgentCommissionPeer::ID_COMMISSION => 1, CommonBackupAgentCommissionPeer::ID_AGENT => 2, CommonBackupAgentCommissionPeer::CONVOCATION => 3, CommonBackupAgentCommissionPeer::CONVOC_SEND => 4, CommonBackupAgentCommissionPeer::NOM_CONVOC => 5, CommonBackupAgentCommissionPeer::CONTENU_ENVOI => 6, CommonBackupAgentCommissionPeer::FICHIER_ENVOYE => 7, CommonBackupAgentCommissionPeer::NOM_FICHIER_ENVOYE => 8, CommonBackupAgentCommissionPeer::DATE_ENVOI => 9, CommonBackupAgentCommissionPeer::TYPE_VOIX => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORGANISME' => 0, 'ID_COMMISSION' => 1, 'ID_AGENT' => 2, 'CONVOCATION' => 3, 'CONVOC_SEND' => 4, 'NOM_CONVOC' => 5, 'CONTENU_ENVOI' => 6, 'FICHIER_ENVOYE' => 7, 'NOM_FICHIER_ENVOYE' => 8, 'DATE_ENVOI' => 9, 'TYPE_VOIX' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('organisme' => 0, 'id_commission' => 1, 'id_agent' => 2, 'convocation' => 3, 'convoc_send' => 4, 'nom_convoc' => 5, 'contenu_envoi' => 6, 'fichier_envoye' => 7, 'nom_fichier_envoye' => 8, 'date_envoi' => 9, 'type_voix' => 10, ),
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
        $toNames = CommonBackupAgentCommissionPeer::getFieldNames($toType);
        $key = isset(CommonBackupAgentCommissionPeer::$fieldKeys[$fromType][$name]) ? CommonBackupAgentCommissionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupAgentCommissionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupAgentCommissionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupAgentCommissionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupAgentCommissionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupAgentCommissionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::ID_COMMISSION);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::CONVOCATION);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::CONVOC_SEND);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::NOM_CONVOC);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::CONTENU_ENVOI);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::FICHIER_ENVOYE);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::NOM_FICHIER_ENVOYE);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonBackupAgentCommissionPeer::TYPE_VOIX);
        } else {
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_commission');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.convocation');
            $criteria->addSelectColumn($alias . '.convoc_send');
            $criteria->addSelectColumn($alias . '.nom_convoc');
            $criteria->addSelectColumn($alias . '.contenu_envoi');
            $criteria->addSelectColumn($alias . '.fichier_envoye');
            $criteria->addSelectColumn($alias . '.nom_fichier_envoye');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.type_voix');
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
        $criteria->setPrimaryTableName(CommonBackupAgentCommissionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupAgentCommissionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupAgentCommissionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupAgentCommission
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupAgentCommissionPeer::doSelect($critcopy, $con);
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
        return CommonBackupAgentCommissionPeer::populateObjects(CommonBackupAgentCommissionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupAgentCommissionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupAgentCommissionPeer::DATABASE_NAME);

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
     * @param      CommonBackupAgentCommission $obj A CommonBackupAgentCommission object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getOrganisme(), (string) $obj->getIdCommission(), (string) $obj->getIdAgent()));
            } // if key === null
            CommonBackupAgentCommissionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupAgentCommission object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupAgentCommission) {
                $key = serialize(array((string) $value->getOrganisme(), (string) $value->getIdCommission(), (string) $value->getIdAgent()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupAgentCommission object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupAgentCommissionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupAgentCommission Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupAgentCommissionPeer::$instances[$key])) {
                return CommonBackupAgentCommissionPeer::$instances[$key];
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
        foreach (CommonBackupAgentCommissionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupAgentCommissionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Agent_Commission
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((string) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = CommonBackupAgentCommissionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupAgentCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupAgentCommissionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupAgentCommissionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupAgentCommission object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupAgentCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupAgentCommissionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupAgentCommissionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupAgentCommissionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupAgentCommissionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupAgentCommissionPeer::DATABASE_NAME)->getTable(CommonBackupAgentCommissionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupAgentCommissionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupAgentCommissionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupAgentCommissionTableMap());
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
        return CommonBackupAgentCommissionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupAgentCommission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupAgentCommission object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupAgentCommission object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupAgentCommissionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupAgentCommission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupAgentCommission object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupAgentCommissionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupAgentCommissionPeer::ORGANISME);
            $value = $criteria->remove(CommonBackupAgentCommissionPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupAgentCommissionPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupAgentCommissionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupAgentCommissionPeer::ID_COMMISSION);
            $value = $criteria->remove(CommonBackupAgentCommissionPeer::ID_COMMISSION);
            if ($value) {
                $selectCriteria->add(CommonBackupAgentCommissionPeer::ID_COMMISSION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupAgentCommissionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupAgentCommissionPeer::ID_AGENT);
            $value = $criteria->remove(CommonBackupAgentCommissionPeer::ID_AGENT);
            if ($value) {
                $selectCriteria->add(CommonBackupAgentCommissionPeer::ID_AGENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupAgentCommissionPeer::TABLE_NAME);
            }

        } else { // $values is CommonBackupAgentCommission object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupAgentCommissionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Agent_Commission table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupAgentCommissionPeer::TABLE_NAME, $con, CommonBackupAgentCommissionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupAgentCommissionPeer::clearInstancePool();
            CommonBackupAgentCommissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupAgentCommission or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupAgentCommission object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupAgentCommissionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupAgentCommission) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupAgentCommissionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupAgentCommissionPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupAgentCommissionPeer::ORGANISME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupAgentCommissionPeer::ID_COMMISSION, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupAgentCommissionPeer::ID_AGENT, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupAgentCommissionPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupAgentCommissionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupAgentCommissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupAgentCommission object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupAgentCommission $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupAgentCommissionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupAgentCommissionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupAgentCommissionPeer::DATABASE_NAME, CommonBackupAgentCommissionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $organisme
     * @param   int $id_commission
     * @param   int $id_agent
     * @param      PropelPDO $con
     * @return   CommonBackupAgentCommission
     */
    public static function retrieveByPK($organisme, $id_commission, $id_agent, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $organisme, (string) $id_commission, (string) $id_agent));
         if (null !== ($obj = CommonBackupAgentCommissionPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupAgentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupAgentCommissionPeer::DATABASE_NAME);
        $criteria->add(CommonBackupAgentCommissionPeer::ORGANISME, $organisme);
        $criteria->add(CommonBackupAgentCommissionPeer::ID_COMMISSION, $id_commission);
        $criteria->add(CommonBackupAgentCommissionPeer::ID_AGENT, $id_agent);
        $v = CommonBackupAgentCommissionPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupAgentCommissionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupAgentCommissionPeer::buildTableMap();

