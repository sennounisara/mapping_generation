<?php


/**
 * Base static class for performing query and update operations on the 'DocumentsAttaches' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDocumentsAttachesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'DocumentsAttaches';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonDocumentsAttaches';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonDocumentsAttachesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id_document field */
    const ID_DOCUMENT = 'DocumentsAttaches.id_document';

    /** the column name for the nom_document field */
    const NOM_DOCUMENT = 'DocumentsAttaches.nom_document';

    /** the column name for the nom_document_fr field */
    const NOM_DOCUMENT_FR = 'DocumentsAttaches.nom_document_fr';

    /** the column name for the nom_document_es field */
    const NOM_DOCUMENT_ES = 'DocumentsAttaches.nom_document_es';

    /** the column name for the nom_document_en field */
    const NOM_DOCUMENT_EN = 'DocumentsAttaches.nom_document_en';

    /** the column name for the nom_document_su field */
    const NOM_DOCUMENT_SU = 'DocumentsAttaches.nom_document_su';

    /** the column name for the nom_document_du field */
    const NOM_DOCUMENT_DU = 'DocumentsAttaches.nom_document_du';

    /** the column name for the nom_document_cz field */
    const NOM_DOCUMENT_CZ = 'DocumentsAttaches.nom_document_cz';

    /** the column name for the nom_document_ar field */
    const NOM_DOCUMENT_AR = 'DocumentsAttaches.nom_document_ar';

    /** the column name for the nom_document_it field */
    const NOM_DOCUMENT_IT = 'DocumentsAttaches.nom_document_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonDocumentsAttaches objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonDocumentsAttaches[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonDocumentsAttachesPeer::$fieldNames[CommonDocumentsAttachesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument', 'NomDocument', 'NomDocumentFr', 'NomDocumentEs', 'NomDocumentEn', 'NomDocumentSu', 'NomDocumentDu', 'NomDocumentCz', 'NomDocumentAr', 'NomDocumentIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument', 'nomDocument', 'nomDocumentFr', 'nomDocumentEs', 'nomDocumentEn', 'nomDocumentSu', 'nomDocumentDu', 'nomDocumentCz', 'nomDocumentAr', 'nomDocumentIt', ),
        BasePeer::TYPE_COLNAME => array (CommonDocumentsAttachesPeer::ID_DOCUMENT, CommonDocumentsAttachesPeer::NOM_DOCUMENT, CommonDocumentsAttachesPeer::NOM_DOCUMENT_FR, CommonDocumentsAttachesPeer::NOM_DOCUMENT_ES, CommonDocumentsAttachesPeer::NOM_DOCUMENT_EN, CommonDocumentsAttachesPeer::NOM_DOCUMENT_SU, CommonDocumentsAttachesPeer::NOM_DOCUMENT_DU, CommonDocumentsAttachesPeer::NOM_DOCUMENT_CZ, CommonDocumentsAttachesPeer::NOM_DOCUMENT_AR, CommonDocumentsAttachesPeer::NOM_DOCUMENT_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT', 'NOM_DOCUMENT', 'NOM_DOCUMENT_FR', 'NOM_DOCUMENT_ES', 'NOM_DOCUMENT_EN', 'NOM_DOCUMENT_SU', 'NOM_DOCUMENT_DU', 'NOM_DOCUMENT_CZ', 'NOM_DOCUMENT_AR', 'NOM_DOCUMENT_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_document', 'nom_document', 'nom_document_fr', 'nom_document_es', 'nom_document_en', 'nom_document_su', 'nom_document_du', 'nom_document_cz', 'nom_document_ar', 'nom_document_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonDocumentsAttachesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument' => 0, 'NomDocument' => 1, 'NomDocumentFr' => 2, 'NomDocumentEs' => 3, 'NomDocumentEn' => 4, 'NomDocumentSu' => 5, 'NomDocumentDu' => 6, 'NomDocumentCz' => 7, 'NomDocumentAr' => 8, 'NomDocumentIt' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument' => 0, 'nomDocument' => 1, 'nomDocumentFr' => 2, 'nomDocumentEs' => 3, 'nomDocumentEn' => 4, 'nomDocumentSu' => 5, 'nomDocumentDu' => 6, 'nomDocumentCz' => 7, 'nomDocumentAr' => 8, 'nomDocumentIt' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonDocumentsAttachesPeer::ID_DOCUMENT => 0, CommonDocumentsAttachesPeer::NOM_DOCUMENT => 1, CommonDocumentsAttachesPeer::NOM_DOCUMENT_FR => 2, CommonDocumentsAttachesPeer::NOM_DOCUMENT_ES => 3, CommonDocumentsAttachesPeer::NOM_DOCUMENT_EN => 4, CommonDocumentsAttachesPeer::NOM_DOCUMENT_SU => 5, CommonDocumentsAttachesPeer::NOM_DOCUMENT_DU => 6, CommonDocumentsAttachesPeer::NOM_DOCUMENT_CZ => 7, CommonDocumentsAttachesPeer::NOM_DOCUMENT_AR => 8, CommonDocumentsAttachesPeer::NOM_DOCUMENT_IT => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT' => 0, 'NOM_DOCUMENT' => 1, 'NOM_DOCUMENT_FR' => 2, 'NOM_DOCUMENT_ES' => 3, 'NOM_DOCUMENT_EN' => 4, 'NOM_DOCUMENT_SU' => 5, 'NOM_DOCUMENT_DU' => 6, 'NOM_DOCUMENT_CZ' => 7, 'NOM_DOCUMENT_AR' => 8, 'NOM_DOCUMENT_IT' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id_document' => 0, 'nom_document' => 1, 'nom_document_fr' => 2, 'nom_document_es' => 3, 'nom_document_en' => 4, 'nom_document_su' => 5, 'nom_document_du' => 6, 'nom_document_cz' => 7, 'nom_document_ar' => 8, 'nom_document_it' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = CommonDocumentsAttachesPeer::getFieldNames($toType);
        $key = isset(CommonDocumentsAttachesPeer::$fieldKeys[$fromType][$name]) ? CommonDocumentsAttachesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonDocumentsAttachesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonDocumentsAttachesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonDocumentsAttachesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonDocumentsAttachesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonDocumentsAttachesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_FR);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_ES);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_EN);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_SU);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_DU);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_CZ);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_AR);
            $criteria->addSelectColumn(CommonDocumentsAttachesPeer::NOM_DOCUMENT_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.nom_document');
            $criteria->addSelectColumn($alias . '.nom_document_fr');
            $criteria->addSelectColumn($alias . '.nom_document_es');
            $criteria->addSelectColumn($alias . '.nom_document_en');
            $criteria->addSelectColumn($alias . '.nom_document_su');
            $criteria->addSelectColumn($alias . '.nom_document_du');
            $criteria->addSelectColumn($alias . '.nom_document_cz');
            $criteria->addSelectColumn($alias . '.nom_document_ar');
            $criteria->addSelectColumn($alias . '.nom_document_it');
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
        $criteria->setPrimaryTableName(CommonDocumentsAttachesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDocumentsAttachesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonDocumentsAttachesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDocumentsAttaches
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonDocumentsAttachesPeer::doSelect($critcopy, $con);
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
        return CommonDocumentsAttachesPeer::populateObjects(CommonDocumentsAttachesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonDocumentsAttachesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDocumentsAttachesPeer::DATABASE_NAME);

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
     * @param      CommonDocumentsAttaches $obj A CommonDocumentsAttaches object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDocument();
            } // if key === null
            CommonDocumentsAttachesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonDocumentsAttaches object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonDocumentsAttaches) {
                $key = (string) $value->getIdDocument();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonDocumentsAttaches object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonDocumentsAttachesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonDocumentsAttaches Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonDocumentsAttachesPeer::$instances[$key])) {
                return CommonDocumentsAttachesPeer::$instances[$key];
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
        foreach (CommonDocumentsAttachesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonDocumentsAttachesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to DocumentsAttaches
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
        $cls = CommonDocumentsAttachesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonDocumentsAttachesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonDocumentsAttachesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonDocumentsAttachesPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonDocumentsAttaches object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonDocumentsAttachesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonDocumentsAttachesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonDocumentsAttachesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonDocumentsAttachesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonDocumentsAttachesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonDocumentsAttachesPeer::DATABASE_NAME)->getTable(CommonDocumentsAttachesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonDocumentsAttachesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonDocumentsAttachesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonDocumentsAttachesTableMap());
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
        return CommonDocumentsAttachesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonDocumentsAttaches or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDocumentsAttaches object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonDocumentsAttaches object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonDocumentsAttachesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonDocumentsAttaches or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDocumentsAttaches object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonDocumentsAttachesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonDocumentsAttachesPeer::ID_DOCUMENT);
            $value = $criteria->remove(CommonDocumentsAttachesPeer::ID_DOCUMENT);
            if ($value) {
                $selectCriteria->add(CommonDocumentsAttachesPeer::ID_DOCUMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDocumentsAttachesPeer::TABLE_NAME);
            }

        } else { // $values is CommonDocumentsAttaches object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonDocumentsAttachesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the DocumentsAttaches table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonDocumentsAttachesPeer::TABLE_NAME, $con, CommonDocumentsAttachesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonDocumentsAttachesPeer::clearInstancePool();
            CommonDocumentsAttachesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonDocumentsAttaches or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonDocumentsAttaches object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonDocumentsAttachesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonDocumentsAttaches) { // it's a model object
            // invalidate the cache for this single object
            CommonDocumentsAttachesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonDocumentsAttachesPeer::DATABASE_NAME);
            $criteria->add(CommonDocumentsAttachesPeer::ID_DOCUMENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonDocumentsAttachesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDocumentsAttachesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonDocumentsAttachesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonDocumentsAttaches object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonDocumentsAttaches $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonDocumentsAttachesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonDocumentsAttachesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonDocumentsAttachesPeer::DATABASE_NAME, CommonDocumentsAttachesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonDocumentsAttaches
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonDocumentsAttachesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonDocumentsAttachesPeer::DATABASE_NAME);
        $criteria->add(CommonDocumentsAttachesPeer::ID_DOCUMENT, $pk);

        $v = CommonDocumentsAttachesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonDocumentsAttaches[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonDocumentsAttachesPeer::DATABASE_NAME);
            $criteria->add(CommonDocumentsAttachesPeer::ID_DOCUMENT, $pks, Criteria::IN);
            $objs = CommonDocumentsAttachesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonDocumentsAttachesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonDocumentsAttachesPeer::buildTableMap();

