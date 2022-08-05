<?php


/**
 * Base static class for performing query and update operations on the 't_document_contat' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentContatPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_document_contat';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDocumentContat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDocumentContatTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id_document field */
    const ID_DOCUMENT = 't_document_contat.id_document';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 't_document_contat.id_contrat';

    /** the column name for the type_document field */
    const TYPE_DOCUMENT = 't_document_contat.type_document';

    /** the column name for the nom_document field */
    const NOM_DOCUMENT = 't_document_contat.nom_document';

    /** the column name for the titre_document field */
    const TITRE_DOCUMENT = 't_document_contat.titre_document';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_document_contat.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 't_document_contat.date_modification';

    /** the column name for the id_agent field */
    const ID_AGENT = 't_document_contat.id_agent';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 't_document_contat.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 't_document_contat.prenom_agent';

    /** the column name for the id_blob field */
    const ID_BLOB = 't_document_contat.id_blob';

    /** the column name for the taille_document field */
    const TAILLE_DOCUMENT = 't_document_contat.taille_document';

    /** the column name for the extension_document field */
    const EXTENSION_DOCUMENT = 't_document_contat.extension_document';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDocumentContat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDocumentContat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentContatPeer::$fieldNames[CommonTDocumentContatPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument', 'IdContrat', 'TypeDocument', 'NomDocument', 'TitreDocument', 'DateCreation', 'DateModification', 'IdAgent', 'NomAgent', 'PrenomAgent', 'IdBlob', 'TailleDocument', 'ExtensionDocument', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument', 'idContrat', 'typeDocument', 'nomDocument', 'titreDocument', 'dateCreation', 'dateModification', 'idAgent', 'nomAgent', 'prenomAgent', 'idBlob', 'tailleDocument', 'extensionDocument', ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentContatPeer::ID_DOCUMENT, CommonTDocumentContatPeer::ID_CONTRAT, CommonTDocumentContatPeer::TYPE_DOCUMENT, CommonTDocumentContatPeer::NOM_DOCUMENT, CommonTDocumentContatPeer::TITRE_DOCUMENT, CommonTDocumentContatPeer::DATE_CREATION, CommonTDocumentContatPeer::DATE_MODIFICATION, CommonTDocumentContatPeer::ID_AGENT, CommonTDocumentContatPeer::NOM_AGENT, CommonTDocumentContatPeer::PRENOM_AGENT, CommonTDocumentContatPeer::ID_BLOB, CommonTDocumentContatPeer::TAILLE_DOCUMENT, CommonTDocumentContatPeer::EXTENSION_DOCUMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT', 'ID_CONTRAT', 'TYPE_DOCUMENT', 'NOM_DOCUMENT', 'TITRE_DOCUMENT', 'DATE_CREATION', 'DATE_MODIFICATION', 'ID_AGENT', 'NOM_AGENT', 'PRENOM_AGENT', 'ID_BLOB', 'TAILLE_DOCUMENT', 'EXTENSION_DOCUMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_document', 'id_contrat', 'type_document', 'nom_document', 'titre_document', 'date_creation', 'date_modification', 'id_agent', 'nom_agent', 'prenom_agent', 'id_blob', 'taille_document', 'extension_document', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentContatPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument' => 0, 'IdContrat' => 1, 'TypeDocument' => 2, 'NomDocument' => 3, 'TitreDocument' => 4, 'DateCreation' => 5, 'DateModification' => 6, 'IdAgent' => 7, 'NomAgent' => 8, 'PrenomAgent' => 9, 'IdBlob' => 10, 'TailleDocument' => 11, 'ExtensionDocument' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument' => 0, 'idContrat' => 1, 'typeDocument' => 2, 'nomDocument' => 3, 'titreDocument' => 4, 'dateCreation' => 5, 'dateModification' => 6, 'idAgent' => 7, 'nomAgent' => 8, 'prenomAgent' => 9, 'idBlob' => 10, 'tailleDocument' => 11, 'extensionDocument' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentContatPeer::ID_DOCUMENT => 0, CommonTDocumentContatPeer::ID_CONTRAT => 1, CommonTDocumentContatPeer::TYPE_DOCUMENT => 2, CommonTDocumentContatPeer::NOM_DOCUMENT => 3, CommonTDocumentContatPeer::TITRE_DOCUMENT => 4, CommonTDocumentContatPeer::DATE_CREATION => 5, CommonTDocumentContatPeer::DATE_MODIFICATION => 6, CommonTDocumentContatPeer::ID_AGENT => 7, CommonTDocumentContatPeer::NOM_AGENT => 8, CommonTDocumentContatPeer::PRENOM_AGENT => 9, CommonTDocumentContatPeer::ID_BLOB => 10, CommonTDocumentContatPeer::TAILLE_DOCUMENT => 11, CommonTDocumentContatPeer::EXTENSION_DOCUMENT => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT' => 0, 'ID_CONTRAT' => 1, 'TYPE_DOCUMENT' => 2, 'NOM_DOCUMENT' => 3, 'TITRE_DOCUMENT' => 4, 'DATE_CREATION' => 5, 'DATE_MODIFICATION' => 6, 'ID_AGENT' => 7, 'NOM_AGENT' => 8, 'PRENOM_AGENT' => 9, 'ID_BLOB' => 10, 'TAILLE_DOCUMENT' => 11, 'EXTENSION_DOCUMENT' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id_document' => 0, 'id_contrat' => 1, 'type_document' => 2, 'nom_document' => 3, 'titre_document' => 4, 'date_creation' => 5, 'date_modification' => 6, 'id_agent' => 7, 'nom_agent' => 8, 'prenom_agent' => 9, 'id_blob' => 10, 'taille_document' => 11, 'extension_document' => 12, ),
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
        $toNames = CommonTDocumentContatPeer::getFieldNames($toType);
        $key = isset(CommonTDocumentContatPeer::$fieldKeys[$fromType][$name]) ? CommonTDocumentContatPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDocumentContatPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDocumentContatPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDocumentContatPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTDocumentContatPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDocumentContatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDocumentContatPeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::NOM_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::TITRE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::TAILLE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentContatPeer::EXTENSION_DOCUMENT);
        } else {
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.type_document');
            $criteria->addSelectColumn($alias . '.nom_document');
            $criteria->addSelectColumn($alias . '.titre_document');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.taille_document');
            $criteria->addSelectColumn($alias . '.extension_document');
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
        $criteria->setPrimaryTableName(CommonTDocumentContatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentContatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDocumentContatPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentContat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDocumentContatPeer::doSelect($critcopy, $con);
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
        return CommonTDocumentContatPeer::populateObjects(CommonTDocumentContatPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDocumentContatPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentContatPeer::DATABASE_NAME);

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
     * @param      CommonTDocumentContat $obj A CommonTDocumentContat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDocument();
            } // if key === null
            CommonTDocumentContatPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDocumentContat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDocumentContat) {
                $key = (string) $value->getIdDocument();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDocumentContat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDocumentContatPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDocumentContat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDocumentContatPeer::$instances[$key])) {
                return CommonTDocumentContatPeer::$instances[$key];
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
        foreach (CommonTDocumentContatPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDocumentContatPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_document_contat
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
        $cls = CommonTDocumentContatPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDocumentContatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDocumentContatPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDocumentContatPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDocumentContat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDocumentContatPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDocumentContatPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDocumentContatPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDocumentContatPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDocumentContatPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTDocumentContatPeer::DATABASE_NAME)->getTable(CommonTDocumentContatPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDocumentContatPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDocumentContatPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDocumentContatTableMap());
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
        return CommonTDocumentContatPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDocumentContat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentContat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDocumentContat object
        }

        if ($criteria->containsKey(CommonTDocumentContatPeer::ID_DOCUMENT) && $criteria->keyContainsValue(CommonTDocumentContatPeer::ID_DOCUMENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDocumentContatPeer::ID_DOCUMENT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentContatPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDocumentContat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentContat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDocumentContatPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDocumentContatPeer::ID_DOCUMENT);
            $value = $criteria->remove(CommonTDocumentContatPeer::ID_DOCUMENT);
            if ($value) {
                $selectCriteria->add(CommonTDocumentContatPeer::ID_DOCUMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDocumentContatPeer::TABLE_NAME);
            }

        } else { // $values is CommonTDocumentContat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDocumentContatPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_document_contat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDocumentContatPeer::TABLE_NAME, $con, CommonTDocumentContatPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDocumentContatPeer::clearInstancePool();
            CommonTDocumentContatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDocumentContat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDocumentContat object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDocumentContatPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDocumentContat) { // it's a model object
            // invalidate the cache for this single object
            CommonTDocumentContatPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDocumentContatPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentContatPeer::ID_DOCUMENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDocumentContatPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentContatPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDocumentContatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDocumentContat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDocumentContat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDocumentContatPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDocumentContatPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDocumentContatPeer::DATABASE_NAME, CommonTDocumentContatPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentContat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDocumentContatPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDocumentContatPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentContatPeer::ID_DOCUMENT, $pk);

        $v = CommonTDocumentContatPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentContat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDocumentContatPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentContatPeer::ID_DOCUMENT, $pks, Criteria::IN);
            $objs = CommonTDocumentContatPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDocumentContatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDocumentContatPeer::buildTableMap();

