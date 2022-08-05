<?php


/**
 * Base static class for performing query and update operations on the 'FormXmlDestinataireOpoce' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFormXmlDestinataireOpocePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'FormXmlDestinataireOpoce';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonFormXmlDestinataireOpoce';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonFormXmlDestinataireOpoceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 'FormXmlDestinataireOpoce.id';

    /** the column name for the organisme field */
    const ORGANISME = 'FormXmlDestinataireOpoce.organisme';

    /** the column name for the id_destinataire_opoce field */
    const ID_DESTINATAIRE_OPOCE = 'FormXmlDestinataireOpoce.id_destinataire_opoce';

    /** the column name for the xml field */
    const XML = 'FormXmlDestinataireOpoce.xml';

    /** the column name for the code_retour field */
    const CODE_RETOUR = 'FormXmlDestinataireOpoce.code_retour';

    /** the column name for the message_retour field */
    const MESSAGE_RETOUR = 'FormXmlDestinataireOpoce.message_retour';

    /** the column name for the id_joue field */
    const ID_JOUE = 'FormXmlDestinataireOpoce.id_joue';

    /** the column name for the date_pub_joue field */
    const DATE_PUB_JOUE = 'FormXmlDestinataireOpoce.date_pub_joue';

    /** the column name for the lien_publication field */
    const LIEN_PUBLICATION = 'FormXmlDestinataireOpoce.lien_publication';

    /** the column name for the no_doc_ext field */
    const NO_DOC_EXT = 'FormXmlDestinataireOpoce.no_doc_ext';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonFormXmlDestinataireOpoce objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonFormXmlDestinataireOpoce[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonFormXmlDestinataireOpocePeer::$fieldNames[CommonFormXmlDestinataireOpocePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdDestinataireOpoce', 'Xml', 'CodeRetour', 'MessageRetour', 'IdJoue', 'DatePubJoue', 'LienPublication', 'NoDocExt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idDestinataireOpoce', 'xml', 'codeRetour', 'messageRetour', 'idJoue', 'datePubJoue', 'lienPublication', 'noDocExt', ),
        BasePeer::TYPE_COLNAME => array (CommonFormXmlDestinataireOpocePeer::ID, CommonFormXmlDestinataireOpocePeer::ORGANISME, CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE, CommonFormXmlDestinataireOpocePeer::XML, CommonFormXmlDestinataireOpocePeer::CODE_RETOUR, CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR, CommonFormXmlDestinataireOpocePeer::ID_JOUE, CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE, CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION, CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_DESTINATAIRE_OPOCE', 'XML', 'CODE_RETOUR', 'MESSAGE_RETOUR', 'ID_JOUE', 'DATE_PUB_JOUE', 'LIEN_PUBLICATION', 'NO_DOC_EXT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_destinataire_opoce', 'xml', 'code_retour', 'message_retour', 'id_joue', 'date_pub_joue', 'lien_publication', 'no_doc_ext', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonFormXmlDestinataireOpocePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdDestinataireOpoce' => 2, 'Xml' => 3, 'CodeRetour' => 4, 'MessageRetour' => 5, 'IdJoue' => 6, 'DatePubJoue' => 7, 'LienPublication' => 8, 'NoDocExt' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idDestinataireOpoce' => 2, 'xml' => 3, 'codeRetour' => 4, 'messageRetour' => 5, 'idJoue' => 6, 'datePubJoue' => 7, 'lienPublication' => 8, 'noDocExt' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonFormXmlDestinataireOpocePeer::ID => 0, CommonFormXmlDestinataireOpocePeer::ORGANISME => 1, CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE => 2, CommonFormXmlDestinataireOpocePeer::XML => 3, CommonFormXmlDestinataireOpocePeer::CODE_RETOUR => 4, CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR => 5, CommonFormXmlDestinataireOpocePeer::ID_JOUE => 6, CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE => 7, CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION => 8, CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_DESTINATAIRE_OPOCE' => 2, 'XML' => 3, 'CODE_RETOUR' => 4, 'MESSAGE_RETOUR' => 5, 'ID_JOUE' => 6, 'DATE_PUB_JOUE' => 7, 'LIEN_PUBLICATION' => 8, 'NO_DOC_EXT' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_destinataire_opoce' => 2, 'xml' => 3, 'code_retour' => 4, 'message_retour' => 5, 'id_joue' => 6, 'date_pub_joue' => 7, 'lien_publication' => 8, 'no_doc_ext' => 9, ),
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
        $toNames = CommonFormXmlDestinataireOpocePeer::getFieldNames($toType);
        $key = isset(CommonFormXmlDestinataireOpocePeer::$fieldKeys[$fromType][$name]) ? CommonFormXmlDestinataireOpocePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonFormXmlDestinataireOpocePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonFormXmlDestinataireOpocePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonFormXmlDestinataireOpocePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonFormXmlDestinataireOpocePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonFormXmlDestinataireOpocePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::ID);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::ORGANISME);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::XML);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::CODE_RETOUR);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::ID_JOUE);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION);
            $criteria->addSelectColumn(CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_destinataire_opoce');
            $criteria->addSelectColumn($alias . '.xml');
            $criteria->addSelectColumn($alias . '.code_retour');
            $criteria->addSelectColumn($alias . '.message_retour');
            $criteria->addSelectColumn($alias . '.id_joue');
            $criteria->addSelectColumn($alias . '.date_pub_joue');
            $criteria->addSelectColumn($alias . '.lien_publication');
            $criteria->addSelectColumn($alias . '.no_doc_ext');
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
        $criteria->setPrimaryTableName(CommonFormXmlDestinataireOpocePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFormXmlDestinataireOpocePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFormXmlDestinataireOpoce
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonFormXmlDestinataireOpocePeer::doSelect($critcopy, $con);
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
        return CommonFormXmlDestinataireOpocePeer::populateObjects(CommonFormXmlDestinataireOpocePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonFormXmlDestinataireOpocePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

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
     * @param      CommonFormXmlDestinataireOpoce $obj A CommonFormXmlDestinataireOpoce object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonFormXmlDestinataireOpocePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonFormXmlDestinataireOpoce object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonFormXmlDestinataireOpoce) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonFormXmlDestinataireOpoce object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonFormXmlDestinataireOpocePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonFormXmlDestinataireOpoce Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonFormXmlDestinataireOpocePeer::$instances[$key])) {
                return CommonFormXmlDestinataireOpocePeer::$instances[$key];
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
        foreach (CommonFormXmlDestinataireOpocePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonFormXmlDestinataireOpocePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to FormXmlDestinataireOpoce
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
        $cls = CommonFormXmlDestinataireOpocePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonFormXmlDestinataireOpocePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonFormXmlDestinataireOpocePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonFormXmlDestinataireOpocePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonFormXmlDestinataireOpoce object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonFormXmlDestinataireOpocePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonFormXmlDestinataireOpocePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonFormXmlDestinataireOpocePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonFormXmlDestinataireOpocePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonFormXmlDestinataireOpocePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME)->getTable(CommonFormXmlDestinataireOpocePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonFormXmlDestinataireOpocePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonFormXmlDestinataireOpoceTableMap());
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
        return CommonFormXmlDestinataireOpocePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonFormXmlDestinataireOpoce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFormXmlDestinataireOpoce object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonFormXmlDestinataireOpoce object
        }

        if ($criteria->containsKey(CommonFormXmlDestinataireOpocePeer::ID) && $criteria->keyContainsValue(CommonFormXmlDestinataireOpocePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonFormXmlDestinataireOpocePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonFormXmlDestinataireOpoce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFormXmlDestinataireOpoce object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonFormXmlDestinataireOpocePeer::ID);
            $value = $criteria->remove(CommonFormXmlDestinataireOpocePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonFormXmlDestinataireOpocePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFormXmlDestinataireOpocePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonFormXmlDestinataireOpocePeer::ORGANISME);
            $value = $criteria->remove(CommonFormXmlDestinataireOpocePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonFormXmlDestinataireOpocePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFormXmlDestinataireOpocePeer::TABLE_NAME);
            }

        } else { // $values is CommonFormXmlDestinataireOpoce object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the FormXmlDestinataireOpoce table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonFormXmlDestinataireOpocePeer::TABLE_NAME, $con, CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonFormXmlDestinataireOpocePeer::clearInstancePool();
            CommonFormXmlDestinataireOpocePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonFormXmlDestinataireOpoce or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonFormXmlDestinataireOpoce object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonFormXmlDestinataireOpocePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonFormXmlDestinataireOpoce) { // it's a model object
            // invalidate the cache for this single object
            CommonFormXmlDestinataireOpocePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonFormXmlDestinataireOpocePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonFormXmlDestinataireOpocePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonFormXmlDestinataireOpocePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonFormXmlDestinataireOpocePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonFormXmlDestinataireOpoce object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonFormXmlDestinataireOpoce $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonFormXmlDestinataireOpocePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, CommonFormXmlDestinataireOpocePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonFormXmlDestinataireOpoce
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonFormXmlDestinataireOpocePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
        $criteria->add(CommonFormXmlDestinataireOpocePeer::ID, $id);
        $criteria->add(CommonFormXmlDestinataireOpocePeer::ORGANISME, $organisme);
        $v = CommonFormXmlDestinataireOpocePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonFormXmlDestinataireOpocePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonFormXmlDestinataireOpocePeer::buildTableMap();

