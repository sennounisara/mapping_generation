<?php


/**
 * Base static class for performing query and update operations on the 'Faq_Entreprise' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonFaqEntreprisePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Faq_Entreprise';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonFaqEntreprise';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonFaqEntrepriseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'Faq_Entreprise.id';

    /** the column name for the question field */
    const QUESTION = 'Faq_Entreprise.question';

    /** the column name for the question_fr field */
    const QUESTION_FR = 'Faq_Entreprise.question_fr';

    /** the column name for the question_en field */
    const QUESTION_EN = 'Faq_Entreprise.question_en';

    /** the column name for the question_es field */
    const QUESTION_ES = 'Faq_Entreprise.question_es';

    /** the column name for the reponse field */
    const REPONSE = 'Faq_Entreprise.reponse';

    /** the column name for the reponse_fr field */
    const REPONSE_FR = 'Faq_Entreprise.reponse_fr';

    /** the column name for the reponse_en field */
    const REPONSE_EN = 'Faq_Entreprise.reponse_en';

    /** the column name for the reponse_es field */
    const REPONSE_ES = 'Faq_Entreprise.reponse_es';

    /** the column name for the question_it field */
    const QUESTION_IT = 'Faq_Entreprise.question_it';

    /** the column name for the reponse_it field */
    const REPONSE_IT = 'Faq_Entreprise.reponse_it';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonFaqEntreprise objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonFaqEntreprise[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonFaqEntreprisePeer::$fieldNames[CommonFaqEntreprisePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Question', 'QuestionFr', 'QuestionEn', 'QuestionEs', 'Reponse', 'ReponseFr', 'ReponseEn', 'ReponseEs', 'QuestionIt', 'ReponseIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'question', 'questionFr', 'questionEn', 'questionEs', 'reponse', 'reponseFr', 'reponseEn', 'reponseEs', 'questionIt', 'reponseIt', ),
        BasePeer::TYPE_COLNAME => array (CommonFaqEntreprisePeer::ID, CommonFaqEntreprisePeer::QUESTION, CommonFaqEntreprisePeer::QUESTION_FR, CommonFaqEntreprisePeer::QUESTION_EN, CommonFaqEntreprisePeer::QUESTION_ES, CommonFaqEntreprisePeer::REPONSE, CommonFaqEntreprisePeer::REPONSE_FR, CommonFaqEntreprisePeer::REPONSE_EN, CommonFaqEntreprisePeer::REPONSE_ES, CommonFaqEntreprisePeer::QUESTION_IT, CommonFaqEntreprisePeer::REPONSE_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'QUESTION', 'QUESTION_FR', 'QUESTION_EN', 'QUESTION_ES', 'REPONSE', 'REPONSE_FR', 'REPONSE_EN', 'REPONSE_ES', 'QUESTION_IT', 'REPONSE_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'question', 'question_fr', 'question_en', 'question_es', 'reponse', 'reponse_fr', 'reponse_en', 'reponse_es', 'question_it', 'reponse_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonFaqEntreprisePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Question' => 1, 'QuestionFr' => 2, 'QuestionEn' => 3, 'QuestionEs' => 4, 'Reponse' => 5, 'ReponseFr' => 6, 'ReponseEn' => 7, 'ReponseEs' => 8, 'QuestionIt' => 9, 'ReponseIt' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'question' => 1, 'questionFr' => 2, 'questionEn' => 3, 'questionEs' => 4, 'reponse' => 5, 'reponseFr' => 6, 'reponseEn' => 7, 'reponseEs' => 8, 'questionIt' => 9, 'reponseIt' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonFaqEntreprisePeer::ID => 0, CommonFaqEntreprisePeer::QUESTION => 1, CommonFaqEntreprisePeer::QUESTION_FR => 2, CommonFaqEntreprisePeer::QUESTION_EN => 3, CommonFaqEntreprisePeer::QUESTION_ES => 4, CommonFaqEntreprisePeer::REPONSE => 5, CommonFaqEntreprisePeer::REPONSE_FR => 6, CommonFaqEntreprisePeer::REPONSE_EN => 7, CommonFaqEntreprisePeer::REPONSE_ES => 8, CommonFaqEntreprisePeer::QUESTION_IT => 9, CommonFaqEntreprisePeer::REPONSE_IT => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'QUESTION' => 1, 'QUESTION_FR' => 2, 'QUESTION_EN' => 3, 'QUESTION_ES' => 4, 'REPONSE' => 5, 'REPONSE_FR' => 6, 'REPONSE_EN' => 7, 'REPONSE_ES' => 8, 'QUESTION_IT' => 9, 'REPONSE_IT' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'question' => 1, 'question_fr' => 2, 'question_en' => 3, 'question_es' => 4, 'reponse' => 5, 'reponse_fr' => 6, 'reponse_en' => 7, 'reponse_es' => 8, 'question_it' => 9, 'reponse_it' => 10, ),
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
        $toNames = CommonFaqEntreprisePeer::getFieldNames($toType);
        $key = isset(CommonFaqEntreprisePeer::$fieldKeys[$fromType][$name]) ? CommonFaqEntreprisePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonFaqEntreprisePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonFaqEntreprisePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonFaqEntreprisePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonFaqEntreprisePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonFaqEntreprisePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::ID);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::QUESTION);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::QUESTION_FR);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::QUESTION_EN);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::QUESTION_ES);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::REPONSE);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::REPONSE_FR);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::REPONSE_EN);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::REPONSE_ES);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::QUESTION_IT);
            $criteria->addSelectColumn(CommonFaqEntreprisePeer::REPONSE_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.question');
            $criteria->addSelectColumn($alias . '.question_fr');
            $criteria->addSelectColumn($alias . '.question_en');
            $criteria->addSelectColumn($alias . '.question_es');
            $criteria->addSelectColumn($alias . '.reponse');
            $criteria->addSelectColumn($alias . '.reponse_fr');
            $criteria->addSelectColumn($alias . '.reponse_en');
            $criteria->addSelectColumn($alias . '.reponse_es');
            $criteria->addSelectColumn($alias . '.question_it');
            $criteria->addSelectColumn($alias . '.reponse_it');
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
        $criteria->setPrimaryTableName(CommonFaqEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFaqEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonFaqEntreprisePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFaqEntreprise
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonFaqEntreprisePeer::doSelect($critcopy, $con);
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
        return CommonFaqEntreprisePeer::populateObjects(CommonFaqEntreprisePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonFaqEntreprisePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFaqEntreprisePeer::DATABASE_NAME);

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
     * @param      CommonFaqEntreprise $obj A CommonFaqEntreprise object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonFaqEntreprisePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonFaqEntreprise object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonFaqEntreprise) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonFaqEntreprise object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonFaqEntreprisePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonFaqEntreprise Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonFaqEntreprisePeer::$instances[$key])) {
                return CommonFaqEntreprisePeer::$instances[$key];
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
        foreach (CommonFaqEntreprisePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonFaqEntreprisePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Faq_Entreprise
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
        $cls = CommonFaqEntreprisePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonFaqEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonFaqEntreprisePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonFaqEntreprisePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonFaqEntreprise object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonFaqEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonFaqEntreprisePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonFaqEntreprisePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonFaqEntreprisePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonFaqEntreprisePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonFaqEntreprisePeer::DATABASE_NAME)->getTable(CommonFaqEntreprisePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonFaqEntreprisePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonFaqEntreprisePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonFaqEntrepriseTableMap());
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
        return CommonFaqEntreprisePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonFaqEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFaqEntreprise object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonFaqEntreprise object
        }

        if ($criteria->containsKey(CommonFaqEntreprisePeer::ID) && $criteria->keyContainsValue(CommonFaqEntreprisePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonFaqEntreprisePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonFaqEntreprisePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonFaqEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFaqEntreprise object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonFaqEntreprisePeer::ID);
            $value = $criteria->remove(CommonFaqEntreprisePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonFaqEntreprisePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFaqEntreprisePeer::TABLE_NAME);
            }

        } else { // $values is CommonFaqEntreprise object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonFaqEntreprisePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Faq_Entreprise table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonFaqEntreprisePeer::TABLE_NAME, $con, CommonFaqEntreprisePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonFaqEntreprisePeer::clearInstancePool();
            CommonFaqEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonFaqEntreprise or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonFaqEntreprise object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonFaqEntreprisePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonFaqEntreprise) { // it's a model object
            // invalidate the cache for this single object
            CommonFaqEntreprisePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonFaqEntreprisePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonFaqEntreprisePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFaqEntreprisePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonFaqEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonFaqEntreprise object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonFaqEntreprise $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonFaqEntreprisePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonFaqEntreprisePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonFaqEntreprisePeer::DATABASE_NAME, CommonFaqEntreprisePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonFaqEntreprise
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonFaqEntreprisePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonFaqEntreprisePeer::ID, $pk);

        $v = CommonFaqEntreprisePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonFaqEntreprise[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonFaqEntreprisePeer::ID, $pks, Criteria::IN);
            $objs = CommonFaqEntreprisePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonFaqEntreprisePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonFaqEntreprisePeer::buildTableMap();

