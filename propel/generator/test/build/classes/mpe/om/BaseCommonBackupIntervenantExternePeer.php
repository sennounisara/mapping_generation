<?php


/**
 * Base static class for performing query and update operations on the 'backup_Intervenant_Externe' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonBackupIntervenantExternePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Intervenant_Externe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupIntervenantExterne';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupIntervenantExterneTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'backup_Intervenant_Externe.id';

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Intervenant_Externe.organisme';

    /** the column name for the nom field */
    const NOM = 'backup_Intervenant_Externe.nom';

    /** the column name for the prenom field */
    const PRENOM = 'backup_Intervenant_Externe.prenom';

    /** the column name for the organisation field */
    const ORGANISATION = 'backup_Intervenant_Externe.organisation';

    /** the column name for the fonction field */
    const FONCTION = 'backup_Intervenant_Externe.fonction';

    /** the column name for the adresse field */
    const ADRESSE = 'backup_Intervenant_Externe.adresse';

    /** the column name for the code_postal field */
    const CODE_POSTAL = 'backup_Intervenant_Externe.code_postal';

    /** the column name for the ville field */
    const VILLE = 'backup_Intervenant_Externe.ville';

    /** the column name for the mail field */
    const MAIL = 'backup_Intervenant_Externe.mail';

    /** the column name for the type_invitation field */
    const TYPE_INVITATION = 'backup_Intervenant_Externe.type_invitation';

    /** the column name for the civilite field */
    const CIVILITE = 'backup_Intervenant_Externe.civilite';

    /** the column name for the type_voix field */
    const TYPE_VOIX = 'backup_Intervenant_Externe.type_voix';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupIntervenantExterne objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupIntervenantExterne[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupIntervenantExternePeer::$fieldNames[CommonBackupIntervenantExternePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Nom', 'Prenom', 'Organisation', 'Fonction', 'Adresse', 'CodePostal', 'Ville', 'Mail', 'TypeInvitation', 'Civilite', 'TypeVoix', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'nom', 'prenom', 'organisation', 'fonction', 'adresse', 'codePostal', 'ville', 'mail', 'typeInvitation', 'civilite', 'typeVoix', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupIntervenantExternePeer::ID, CommonBackupIntervenantExternePeer::ORGANISME, CommonBackupIntervenantExternePeer::NOM, CommonBackupIntervenantExternePeer::PRENOM, CommonBackupIntervenantExternePeer::ORGANISATION, CommonBackupIntervenantExternePeer::FONCTION, CommonBackupIntervenantExternePeer::ADRESSE, CommonBackupIntervenantExternePeer::CODE_POSTAL, CommonBackupIntervenantExternePeer::VILLE, CommonBackupIntervenantExternePeer::MAIL, CommonBackupIntervenantExternePeer::TYPE_INVITATION, CommonBackupIntervenantExternePeer::CIVILITE, CommonBackupIntervenantExternePeer::TYPE_VOIX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'NOM', 'PRENOM', 'ORGANISATION', 'FONCTION', 'ADRESSE', 'CODE_POSTAL', 'VILLE', 'MAIL', 'TYPE_INVITATION', 'CIVILITE', 'TYPE_VOIX', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'nom', 'prenom', 'organisation', 'fonction', 'adresse', 'code_postal', 'ville', 'mail', 'type_invitation', 'civilite', 'type_voix', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupIntervenantExternePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Nom' => 2, 'Prenom' => 3, 'Organisation' => 4, 'Fonction' => 5, 'Adresse' => 6, 'CodePostal' => 7, 'Ville' => 8, 'Mail' => 9, 'TypeInvitation' => 10, 'Civilite' => 11, 'TypeVoix' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'nom' => 2, 'prenom' => 3, 'organisation' => 4, 'fonction' => 5, 'adresse' => 6, 'codePostal' => 7, 'ville' => 8, 'mail' => 9, 'typeInvitation' => 10, 'civilite' => 11, 'typeVoix' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupIntervenantExternePeer::ID => 0, CommonBackupIntervenantExternePeer::ORGANISME => 1, CommonBackupIntervenantExternePeer::NOM => 2, CommonBackupIntervenantExternePeer::PRENOM => 3, CommonBackupIntervenantExternePeer::ORGANISATION => 4, CommonBackupIntervenantExternePeer::FONCTION => 5, CommonBackupIntervenantExternePeer::ADRESSE => 6, CommonBackupIntervenantExternePeer::CODE_POSTAL => 7, CommonBackupIntervenantExternePeer::VILLE => 8, CommonBackupIntervenantExternePeer::MAIL => 9, CommonBackupIntervenantExternePeer::TYPE_INVITATION => 10, CommonBackupIntervenantExternePeer::CIVILITE => 11, CommonBackupIntervenantExternePeer::TYPE_VOIX => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'NOM' => 2, 'PRENOM' => 3, 'ORGANISATION' => 4, 'FONCTION' => 5, 'ADRESSE' => 6, 'CODE_POSTAL' => 7, 'VILLE' => 8, 'MAIL' => 9, 'TYPE_INVITATION' => 10, 'CIVILITE' => 11, 'TYPE_VOIX' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'nom' => 2, 'prenom' => 3, 'organisation' => 4, 'fonction' => 5, 'adresse' => 6, 'code_postal' => 7, 'ville' => 8, 'mail' => 9, 'type_invitation' => 10, 'civilite' => 11, 'type_voix' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = CommonBackupIntervenantExternePeer::getFieldNames($toType);
        $key = isset(CommonBackupIntervenantExternePeer::$fieldKeys[$fromType][$name]) ? CommonBackupIntervenantExternePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupIntervenantExternePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupIntervenantExternePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupIntervenantExternePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupIntervenantExternePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupIntervenantExternePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::ID);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::NOM);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::PRENOM);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::ORGANISATION);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::FONCTION);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::ADRESSE);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::CODE_POSTAL);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::VILLE);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::MAIL);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::TYPE_INVITATION);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::CIVILITE);
            $criteria->addSelectColumn(CommonBackupIntervenantExternePeer::TYPE_VOIX);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.organisation');
            $criteria->addSelectColumn($alias . '.fonction');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.code_postal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.type_invitation');
            $criteria->addSelectColumn($alias . '.civilite');
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
        $criteria->setPrimaryTableName(CommonBackupIntervenantExternePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupIntervenantExternePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupIntervenantExternePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupIntervenantExterne
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupIntervenantExternePeer::doSelect($critcopy, $con);
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
        return CommonBackupIntervenantExternePeer::populateObjects(CommonBackupIntervenantExternePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupIntervenantExternePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantExternePeer::DATABASE_NAME);

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
     * @param      CommonBackupIntervenantExterne $obj A CommonBackupIntervenantExterne object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBackupIntervenantExternePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupIntervenantExterne object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupIntervenantExterne) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupIntervenantExterne object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupIntervenantExternePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupIntervenantExterne Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupIntervenantExternePeer::$instances[$key])) {
                return CommonBackupIntervenantExternePeer::$instances[$key];
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
        foreach (CommonBackupIntervenantExternePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupIntervenantExternePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Intervenant_Externe
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
        $cls = CommonBackupIntervenantExternePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupIntervenantExternePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupIntervenantExternePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupIntervenantExternePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupIntervenantExterne object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupIntervenantExternePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupIntervenantExternePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupIntervenantExternePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupIntervenantExternePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupIntervenantExternePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupIntervenantExternePeer::DATABASE_NAME)->getTable(CommonBackupIntervenantExternePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupIntervenantExternePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupIntervenantExternePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupIntervenantExterneTableMap());
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
        return CommonBackupIntervenantExternePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupIntervenantExterne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantExterne object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupIntervenantExterne object
        }

        if ($criteria->containsKey(CommonBackupIntervenantExternePeer::ID) && $criteria->keyContainsValue(CommonBackupIntervenantExternePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBackupIntervenantExternePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantExternePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupIntervenantExterne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantExterne object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupIntervenantExternePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupIntervenantExternePeer::ID);
            $value = $criteria->remove(CommonBackupIntervenantExternePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonBackupIntervenantExternePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupIntervenantExternePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupIntervenantExternePeer::ORGANISME);
            $value = $criteria->remove(CommonBackupIntervenantExternePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupIntervenantExternePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupIntervenantExternePeer::TABLE_NAME);
            }

        } else { // $values is CommonBackupIntervenantExterne object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantExternePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Intervenant_Externe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupIntervenantExternePeer::TABLE_NAME, $con, CommonBackupIntervenantExternePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupIntervenantExternePeer::clearInstancePool();
            CommonBackupIntervenantExternePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupIntervenantExterne or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantExterne object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupIntervenantExternePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupIntervenantExterne) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupIntervenantExternePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupIntervenantExternePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupIntervenantExternePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupIntervenantExternePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupIntervenantExternePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantExternePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupIntervenantExternePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupIntervenantExterne object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupIntervenantExterne $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupIntervenantExternePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupIntervenantExternePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupIntervenantExternePeer::DATABASE_NAME, CommonBackupIntervenantExternePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBackupIntervenantExterne
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonBackupIntervenantExternePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupIntervenantExternePeer::DATABASE_NAME);
        $criteria->add(CommonBackupIntervenantExternePeer::ID, $id);
        $criteria->add(CommonBackupIntervenantExternePeer::ORGANISME, $organisme);
        $v = CommonBackupIntervenantExternePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupIntervenantExternePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupIntervenantExternePeer::buildTableMap();

