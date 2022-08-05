<?php


/**
 * Base static class for performing query and update operations on the 't_candidature_mps' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCandidatureMpsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_candidature_mps';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCandidatureMps';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCandidatureMpsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id_candidature field */
    const ID_CANDIDATURE = 't_candidature_mps.id_candidature';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 't_candidature_mps.id_entreprise';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 't_candidature_mps.id_inscrit';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 't_candidature_mps.ref_consultation';

    /** the column name for the organisme field */
    const ORGANISME = 't_candidature_mps.organisme';

    /** the column name for the id_offre field */
    const ID_OFFRE = 't_candidature_mps.id_offre';

    /** the column name for the id_blob field */
    const ID_BLOB = 't_candidature_mps.id_blob';

    /** the column name for the horodatage field */
    const HORODATAGE = 't_candidature_mps.horodatage';

    /** the column name for the untrusted_date field */
    const UNTRUSTED_DATE = 't_candidature_mps.untrusted_date';

    /** the column name for the untrusted_serial field */
    const UNTRUSTED_SERIAL = 't_candidature_mps.untrusted_serial';

    /** the column name for the taille_fichier field */
    const TAILLE_FICHIER = 't_candidature_mps.taille_fichier';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCandidatureMps objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCandidatureMps[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCandidatureMpsPeer::$fieldNames[CommonTCandidatureMpsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdCandidature', 'IdEntreprise', 'IdInscrit', 'RefConsultation', 'Organisme', 'IdOffre', 'IdBlob', 'Horodatage', 'UntrustedDate', 'UntrustedSerial', 'TailleFichier', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCandidature', 'idEntreprise', 'idInscrit', 'refConsultation', 'organisme', 'idOffre', 'idBlob', 'horodatage', 'untrustedDate', 'untrustedSerial', 'tailleFichier', ),
        BasePeer::TYPE_COLNAME => array (CommonTCandidatureMpsPeer::ID_CANDIDATURE, CommonTCandidatureMpsPeer::ID_ENTREPRISE, CommonTCandidatureMpsPeer::ID_INSCRIT, CommonTCandidatureMpsPeer::REF_CONSULTATION, CommonTCandidatureMpsPeer::ORGANISME, CommonTCandidatureMpsPeer::ID_OFFRE, CommonTCandidatureMpsPeer::ID_BLOB, CommonTCandidatureMpsPeer::HORODATAGE, CommonTCandidatureMpsPeer::UNTRUSTED_DATE, CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL, CommonTCandidatureMpsPeer::TAILLE_FICHIER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CANDIDATURE', 'ID_ENTREPRISE', 'ID_INSCRIT', 'REF_CONSULTATION', 'ORGANISME', 'ID_OFFRE', 'ID_BLOB', 'HORODATAGE', 'UNTRUSTED_DATE', 'UNTRUSTED_SERIAL', 'TAILLE_FICHIER', ),
        BasePeer::TYPE_FIELDNAME => array ('id_candidature', 'id_entreprise', 'id_inscrit', 'ref_consultation', 'organisme', 'id_offre', 'id_blob', 'horodatage', 'untrusted_date', 'untrusted_serial', 'taille_fichier', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCandidatureMpsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdCandidature' => 0, 'IdEntreprise' => 1, 'IdInscrit' => 2, 'RefConsultation' => 3, 'Organisme' => 4, 'IdOffre' => 5, 'IdBlob' => 6, 'Horodatage' => 7, 'UntrustedDate' => 8, 'UntrustedSerial' => 9, 'TailleFichier' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCandidature' => 0, 'idEntreprise' => 1, 'idInscrit' => 2, 'refConsultation' => 3, 'organisme' => 4, 'idOffre' => 5, 'idBlob' => 6, 'horodatage' => 7, 'untrustedDate' => 8, 'untrustedSerial' => 9, 'tailleFichier' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonTCandidatureMpsPeer::ID_CANDIDATURE => 0, CommonTCandidatureMpsPeer::ID_ENTREPRISE => 1, CommonTCandidatureMpsPeer::ID_INSCRIT => 2, CommonTCandidatureMpsPeer::REF_CONSULTATION => 3, CommonTCandidatureMpsPeer::ORGANISME => 4, CommonTCandidatureMpsPeer::ID_OFFRE => 5, CommonTCandidatureMpsPeer::ID_BLOB => 6, CommonTCandidatureMpsPeer::HORODATAGE => 7, CommonTCandidatureMpsPeer::UNTRUSTED_DATE => 8, CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL => 9, CommonTCandidatureMpsPeer::TAILLE_FICHIER => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CANDIDATURE' => 0, 'ID_ENTREPRISE' => 1, 'ID_INSCRIT' => 2, 'REF_CONSULTATION' => 3, 'ORGANISME' => 4, 'ID_OFFRE' => 5, 'ID_BLOB' => 6, 'HORODATAGE' => 7, 'UNTRUSTED_DATE' => 8, 'UNTRUSTED_SERIAL' => 9, 'TAILLE_FICHIER' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id_candidature' => 0, 'id_entreprise' => 1, 'id_inscrit' => 2, 'ref_consultation' => 3, 'organisme' => 4, 'id_offre' => 5, 'id_blob' => 6, 'horodatage' => 7, 'untrusted_date' => 8, 'untrusted_serial' => 9, 'taille_fichier' => 10, ),
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
        $toNames = CommonTCandidatureMpsPeer::getFieldNames($toType);
        $key = isset(CommonTCandidatureMpsPeer::$fieldKeys[$fromType][$name]) ? CommonTCandidatureMpsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCandidatureMpsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCandidatureMpsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCandidatureMpsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCandidatureMpsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCandidatureMpsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ID_CANDIDATURE);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::HORODATAGE);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::UNTRUSTED_DATE);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL);
            $criteria->addSelectColumn(CommonTCandidatureMpsPeer::TAILLE_FICHIER);
        } else {
            $criteria->addSelectColumn($alias . '.id_candidature');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_offre');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusted_date');
            $criteria->addSelectColumn($alias . '.untrusted_serial');
            $criteria->addSelectColumn($alias . '.taille_fichier');
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
        $criteria->setPrimaryTableName(CommonTCandidatureMpsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCandidatureMpsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCandidatureMpsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCandidatureMps
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCandidatureMpsPeer::doSelect($critcopy, $con);
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
        return CommonTCandidatureMpsPeer::populateObjects(CommonTCandidatureMpsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCandidatureMpsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCandidatureMpsPeer::DATABASE_NAME);

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
     * @param      CommonTCandidatureMps $obj A CommonTCandidatureMps object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdCandidature();
            } // if key === null
            CommonTCandidatureMpsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCandidatureMps object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCandidatureMps) {
                $key = (string) $value->getIdCandidature();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCandidatureMps object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCandidatureMpsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCandidatureMps Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCandidatureMpsPeer::$instances[$key])) {
                return CommonTCandidatureMpsPeer::$instances[$key];
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
        foreach (CommonTCandidatureMpsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCandidatureMpsPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_candidature_mps
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
        $cls = CommonTCandidatureMpsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCandidatureMpsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCandidatureMpsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCandidatureMpsPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCandidatureMps object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCandidatureMpsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCandidatureMpsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCandidatureMpsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCandidatureMpsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCandidatureMpsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTCandidatureMpsPeer::DATABASE_NAME)->getTable(CommonTCandidatureMpsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCandidatureMpsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCandidatureMpsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCandidatureMpsTableMap());
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
        return CommonTCandidatureMpsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCandidatureMps or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCandidatureMps object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCandidatureMps object
        }

        if ($criteria->containsKey(CommonTCandidatureMpsPeer::ID_CANDIDATURE) && $criteria->keyContainsValue(CommonTCandidatureMpsPeer::ID_CANDIDATURE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCandidatureMpsPeer::ID_CANDIDATURE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCandidatureMpsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCandidatureMps or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCandidatureMps object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCandidatureMpsPeer::ID_CANDIDATURE);
            $value = $criteria->remove(CommonTCandidatureMpsPeer::ID_CANDIDATURE);
            if ($value) {
                $selectCriteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCandidatureMpsPeer::TABLE_NAME);
            }

        } else { // $values is CommonTCandidatureMps object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCandidatureMpsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_candidature_mps table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCandidatureMpsPeer::TABLE_NAME, $con, CommonTCandidatureMpsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCandidatureMpsPeer::clearInstancePool();
            CommonTCandidatureMpsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCandidatureMps or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCandidatureMps object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCandidatureMpsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCandidatureMps) { // it's a model object
            // invalidate the cache for this single object
            CommonTCandidatureMpsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);
            $criteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTCandidatureMpsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCandidatureMpsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCandidatureMpsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCandidatureMps object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCandidatureMps $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCandidatureMpsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCandidatureMpsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCandidatureMpsPeer::DATABASE_NAME, CommonTCandidatureMpsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTCandidatureMps
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTCandidatureMpsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);
        $criteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $pk);

        $v = CommonTCandidatureMpsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTCandidatureMps[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);
            $criteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $pks, Criteria::IN);
            $objs = CommonTCandidatureMpsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTCandidatureMpsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCandidatureMpsPeer::buildTableMap();

