<?php


/**
 * Base static class for performing query and update operations on the 'article_catalogue' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonArticleCataloguePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'article_catalogue';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonArticleCatalogue';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonArticleCatalogueTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'article_catalogue.id';

    /** the column name for the reference field */
    const REFERENCE = 'article_catalogue.reference';

    /** the column name for the description field */
    const DESCRIPTION = 'article_catalogue.description';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'article_catalogue.prix_unitaire';

    /** the column name for the delai_livraison field */
    const DELAI_LIVRAISON = 'article_catalogue.delai_livraison';

    /** the column name for the type_categorie field */
    const TYPE_CATEGORIE = 'article_catalogue.type_categorie';

    /** the column name for the id_marque field */
    const ID_MARQUE = 'article_catalogue.id_marque';

    /** the column name for the id_fabriquant field */
    const ID_FABRIQUANT = 'article_catalogue.id_fabriquant';

    /** the column name for the id_blob field */
    const ID_BLOB = 'article_catalogue.id_blob';

    /** the column name for the unite_delai_livraison field */
    const UNITE_DELAI_LIVRAISON = 'article_catalogue.unite_delai_livraison';

    /** the column name for the id_catalogue field */
    const ID_CATALOGUE = 'article_catalogue.id_catalogue';

    /** the column name for the actif field */
    const ACTIF = 'article_catalogue.actif';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonArticleCatalogue objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonArticleCatalogue[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonArticleCataloguePeer::$fieldNames[CommonArticleCataloguePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Reference', 'Description', 'PrixUnitaire', 'DelaiLivraison', 'TypeCategorie', 'IdMarque', 'IdFabriquant', 'IdBlob', 'UniteDelaiLivraison', 'IdCatalogue', 'Actif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'reference', 'description', 'prixUnitaire', 'delaiLivraison', 'typeCategorie', 'idMarque', 'idFabriquant', 'idBlob', 'uniteDelaiLivraison', 'idCatalogue', 'actif', ),
        BasePeer::TYPE_COLNAME => array (CommonArticleCataloguePeer::ID, CommonArticleCataloguePeer::REFERENCE, CommonArticleCataloguePeer::DESCRIPTION, CommonArticleCataloguePeer::PRIX_UNITAIRE, CommonArticleCataloguePeer::DELAI_LIVRAISON, CommonArticleCataloguePeer::TYPE_CATEGORIE, CommonArticleCataloguePeer::ID_MARQUE, CommonArticleCataloguePeer::ID_FABRIQUANT, CommonArticleCataloguePeer::ID_BLOB, CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON, CommonArticleCataloguePeer::ID_CATALOGUE, CommonArticleCataloguePeer::ACTIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REFERENCE', 'DESCRIPTION', 'PRIX_UNITAIRE', 'DELAI_LIVRAISON', 'TYPE_CATEGORIE', 'ID_MARQUE', 'ID_FABRIQUANT', 'ID_BLOB', 'UNITE_DELAI_LIVRAISON', 'ID_CATALOGUE', 'ACTIF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'reference', 'description', 'prix_unitaire', 'delai_livraison', 'type_categorie', 'id_marque', 'id_fabriquant', 'id_blob', 'unite_delai_livraison', 'id_catalogue', 'actif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonArticleCataloguePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Reference' => 1, 'Description' => 2, 'PrixUnitaire' => 3, 'DelaiLivraison' => 4, 'TypeCategorie' => 5, 'IdMarque' => 6, 'IdFabriquant' => 7, 'IdBlob' => 8, 'UniteDelaiLivraison' => 9, 'IdCatalogue' => 10, 'Actif' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'reference' => 1, 'description' => 2, 'prixUnitaire' => 3, 'delaiLivraison' => 4, 'typeCategorie' => 5, 'idMarque' => 6, 'idFabriquant' => 7, 'idBlob' => 8, 'uniteDelaiLivraison' => 9, 'idCatalogue' => 10, 'actif' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonArticleCataloguePeer::ID => 0, CommonArticleCataloguePeer::REFERENCE => 1, CommonArticleCataloguePeer::DESCRIPTION => 2, CommonArticleCataloguePeer::PRIX_UNITAIRE => 3, CommonArticleCataloguePeer::DELAI_LIVRAISON => 4, CommonArticleCataloguePeer::TYPE_CATEGORIE => 5, CommonArticleCataloguePeer::ID_MARQUE => 6, CommonArticleCataloguePeer::ID_FABRIQUANT => 7, CommonArticleCataloguePeer::ID_BLOB => 8, CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON => 9, CommonArticleCataloguePeer::ID_CATALOGUE => 10, CommonArticleCataloguePeer::ACTIF => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REFERENCE' => 1, 'DESCRIPTION' => 2, 'PRIX_UNITAIRE' => 3, 'DELAI_LIVRAISON' => 4, 'TYPE_CATEGORIE' => 5, 'ID_MARQUE' => 6, 'ID_FABRIQUANT' => 7, 'ID_BLOB' => 8, 'UNITE_DELAI_LIVRAISON' => 9, 'ID_CATALOGUE' => 10, 'ACTIF' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'reference' => 1, 'description' => 2, 'prix_unitaire' => 3, 'delai_livraison' => 4, 'type_categorie' => 5, 'id_marque' => 6, 'id_fabriquant' => 7, 'id_blob' => 8, 'unite_delai_livraison' => 9, 'id_catalogue' => 10, 'actif' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = CommonArticleCataloguePeer::getFieldNames($toType);
        $key = isset(CommonArticleCataloguePeer::$fieldKeys[$fromType][$name]) ? CommonArticleCataloguePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonArticleCataloguePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonArticleCataloguePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonArticleCataloguePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonArticleCataloguePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonArticleCataloguePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ID);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::REFERENCE);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::DESCRIPTION);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::DELAI_LIVRAISON);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::TYPE_CATEGORIE);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ID_MARQUE);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ID_FABRIQUANT);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ID_CATALOGUE);
            $criteria->addSelectColumn(CommonArticleCataloguePeer::ACTIF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.delai_livraison');
            $criteria->addSelectColumn($alias . '.type_categorie');
            $criteria->addSelectColumn($alias . '.id_marque');
            $criteria->addSelectColumn($alias . '.id_fabriquant');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.unite_delai_livraison');
            $criteria->addSelectColumn($alias . '.id_catalogue');
            $criteria->addSelectColumn($alias . '.actif');
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
        $criteria->setPrimaryTableName(CommonArticleCataloguePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonArticleCataloguePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonArticleCataloguePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonArticleCatalogue
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonArticleCataloguePeer::doSelect($critcopy, $con);
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
        return CommonArticleCataloguePeer::populateObjects(CommonArticleCataloguePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonArticleCataloguePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonArticleCataloguePeer::DATABASE_NAME);

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
     * @param      CommonArticleCatalogue $obj A CommonArticleCatalogue object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonArticleCataloguePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonArticleCatalogue object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonArticleCatalogue) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonArticleCatalogue object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonArticleCataloguePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonArticleCatalogue Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonArticleCataloguePeer::$instances[$key])) {
                return CommonArticleCataloguePeer::$instances[$key];
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
        foreach (CommonArticleCataloguePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonArticleCataloguePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to article_catalogue
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
        $cls = CommonArticleCataloguePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonArticleCataloguePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonArticleCataloguePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonArticleCataloguePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonArticleCatalogue object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonArticleCataloguePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonArticleCataloguePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonArticleCataloguePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonArticleCataloguePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonArticleCataloguePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonArticleCataloguePeer::DATABASE_NAME)->getTable(CommonArticleCataloguePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonArticleCataloguePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonArticleCataloguePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonArticleCatalogueTableMap());
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
        return CommonArticleCataloguePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonArticleCatalogue or Criteria object.
     *
     * @param      mixed $values Criteria or CommonArticleCatalogue object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonArticleCatalogue object
        }

        if ($criteria->containsKey(CommonArticleCataloguePeer::ID) && $criteria->keyContainsValue(CommonArticleCataloguePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonArticleCataloguePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonArticleCataloguePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonArticleCatalogue or Criteria object.
     *
     * @param      mixed $values Criteria or CommonArticleCatalogue object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonArticleCataloguePeer::ID);
            $value = $criteria->remove(CommonArticleCataloguePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonArticleCataloguePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonArticleCataloguePeer::TABLE_NAME);
            }

        } else { // $values is CommonArticleCatalogue object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonArticleCataloguePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the article_catalogue table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonArticleCataloguePeer::TABLE_NAME, $con, CommonArticleCataloguePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonArticleCataloguePeer::clearInstancePool();
            CommonArticleCataloguePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonArticleCatalogue or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonArticleCatalogue object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonArticleCataloguePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonArticleCatalogue) { // it's a model object
            // invalidate the cache for this single object
            CommonArticleCataloguePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);
            $criteria->add(CommonArticleCataloguePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonArticleCataloguePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonArticleCataloguePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonArticleCataloguePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonArticleCatalogue object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonArticleCatalogue $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonArticleCataloguePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonArticleCataloguePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonArticleCataloguePeer::DATABASE_NAME, CommonArticleCataloguePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonArticleCatalogue
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonArticleCataloguePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);
        $criteria->add(CommonArticleCataloguePeer::ID, $pk);

        $v = CommonArticleCataloguePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonArticleCatalogue[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);
            $criteria->add(CommonArticleCataloguePeer::ID, $pks, Criteria::IN);
            $objs = CommonArticleCataloguePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonArticleCataloguePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonArticleCataloguePeer::buildTableMap();

