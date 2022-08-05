<?php


/**
 * Base static class for performing query and update operations on the 'Annonce_Press' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnoncePressPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Annonce_Press';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnoncePress';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnoncePressTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 'Annonce_Press.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Annonce_Press.organisme';

    /** the column name for the libelle_type field */
    const LIBELLE_TYPE = 'Annonce_Press.libelle_type';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Annonce_Press.date_creation';

    /** the column name for the objet field */
    const OBJET = 'Annonce_Press.objet';

    /** the column name for the texte field */
    const TEXTE = 'Annonce_Press.texte';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Annonce_Press.consultation_ref';

    /** the column name for the option_envoi field */
    const OPTION_ENVOI = 'Annonce_Press.option_envoi';

    /** the column name for the id_Dest_Press field */
    const ID_DEST_PRESS = 'Annonce_Press.id_Dest_Press';

    /** the column name for the id_adresse_facturation field */
    const ID_ADRESSE_FACTURATION = 'Annonce_Press.id_adresse_facturation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnoncePress objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnoncePress[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePressPeer::$fieldNames[CommonAnnoncePressPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'LibelleType', 'DateCreation', 'Objet', 'Texte', 'ConsultationRef', 'OptionEnvoi', 'IdDestPress', 'IdAdresseFacturation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'libelleType', 'dateCreation', 'objet', 'texte', 'consultationRef', 'optionEnvoi', 'idDestPress', 'idAdresseFacturation', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePressPeer::ID, CommonAnnoncePressPeer::ORGANISME, CommonAnnoncePressPeer::LIBELLE_TYPE, CommonAnnoncePressPeer::DATE_CREATION, CommonAnnoncePressPeer::OBJET, CommonAnnoncePressPeer::TEXTE, CommonAnnoncePressPeer::CONSULTATION_REF, CommonAnnoncePressPeer::OPTION_ENVOI, CommonAnnoncePressPeer::ID_DEST_PRESS, CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'LIBELLE_TYPE', 'DATE_CREATION', 'OBJET', 'TEXTE', 'CONSULTATION_REF', 'OPTION_ENVOI', 'ID_DEST_PRESS', 'ID_ADRESSE_FACTURATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'libelle_type', 'date_creation', 'objet', 'texte', 'consultation_ref', 'option_envoi', 'id_Dest_Press', 'id_adresse_facturation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePressPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'LibelleType' => 2, 'DateCreation' => 3, 'Objet' => 4, 'Texte' => 5, 'ConsultationRef' => 6, 'OptionEnvoi' => 7, 'IdDestPress' => 8, 'IdAdresseFacturation' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'libelleType' => 2, 'dateCreation' => 3, 'objet' => 4, 'texte' => 5, 'consultationRef' => 6, 'optionEnvoi' => 7, 'idDestPress' => 8, 'idAdresseFacturation' => 9, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePressPeer::ID => 0, CommonAnnoncePressPeer::ORGANISME => 1, CommonAnnoncePressPeer::LIBELLE_TYPE => 2, CommonAnnoncePressPeer::DATE_CREATION => 3, CommonAnnoncePressPeer::OBJET => 4, CommonAnnoncePressPeer::TEXTE => 5, CommonAnnoncePressPeer::CONSULTATION_REF => 6, CommonAnnoncePressPeer::OPTION_ENVOI => 7, CommonAnnoncePressPeer::ID_DEST_PRESS => 8, CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'LIBELLE_TYPE' => 2, 'DATE_CREATION' => 3, 'OBJET' => 4, 'TEXTE' => 5, 'CONSULTATION_REF' => 6, 'OPTION_ENVOI' => 7, 'ID_DEST_PRESS' => 8, 'ID_ADRESSE_FACTURATION' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'libelle_type' => 2, 'date_creation' => 3, 'objet' => 4, 'texte' => 5, 'consultation_ref' => 6, 'option_envoi' => 7, 'id_Dest_Press' => 8, 'id_adresse_facturation' => 9, ),
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
        $toNames = CommonAnnoncePressPeer::getFieldNames($toType);
        $key = isset(CommonAnnoncePressPeer::$fieldKeys[$fromType][$name]) ? CommonAnnoncePressPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnoncePressPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnoncePressPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnoncePressPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAnnoncePressPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnoncePressPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnoncePressPeer::ID);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::LIBELLE_TYPE);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::OBJET);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::TEXTE);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::OPTION_ENVOI);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::ID_DEST_PRESS);
            $criteria->addSelectColumn(CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.libelle_type');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.texte');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.option_envoi');
            $criteria->addSelectColumn($alias . '.id_Dest_Press');
            $criteria->addSelectColumn($alias . '.id_adresse_facturation');
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
        $criteria->setPrimaryTableName(CommonAnnoncePressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnoncePressPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnoncePress
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnoncePressPeer::doSelect($critcopy, $con);
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
        return CommonAnnoncePressPeer::populateObjects(CommonAnnoncePressPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnoncePressPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPeer::DATABASE_NAME);

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
     * @param      CommonAnnoncePress $obj A CommonAnnoncePress object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnoncePressPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnoncePress object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnoncePress) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnoncePress object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnoncePressPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnoncePress Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnoncePressPeer::$instances[$key])) {
                return CommonAnnoncePressPeer::$instances[$key];
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
        foreach (CommonAnnoncePressPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnoncePressPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Annonce_Press
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonAnnoncePressPieceJointePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonAnnoncePressPieceJointePeer::clearInstancePool();
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
        $cls = CommonAnnoncePressPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnoncePressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnoncePressPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnoncePressPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnoncePress object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnoncePressPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnoncePressPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnoncePressPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnoncePressPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnoncePressPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAnnoncePressPeer::DATABASE_NAME)->getTable(CommonAnnoncePressPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnoncePressPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnoncePressPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnoncePressTableMap());
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
        return CommonAnnoncePressPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnoncePress or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnoncePress object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnoncePress object
        }

        if ($criteria->containsKey(CommonAnnoncePressPeer::ID) && $criteria->keyContainsValue(CommonAnnoncePressPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAnnoncePressPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnoncePress or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnoncePress object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnoncePressPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnoncePressPeer::ID);
            $value = $criteria->remove(CommonAnnoncePressPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePressPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePressPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnoncePressPeer::ORGANISME);
            $value = $criteria->remove(CommonAnnoncePressPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePressPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePressPeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnoncePress object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Annonce_Press table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonAnnoncePressPeer::doOnDeleteCascade(new Criteria(CommonAnnoncePressPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonAnnoncePressPeer::TABLE_NAME, $con, CommonAnnoncePressPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnoncePressPeer::clearInstancePool();
            CommonAnnoncePressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnoncePress or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnoncePress object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnoncePress) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnoncePressPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnoncePressPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnoncePressPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonAnnoncePressPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonAnnoncePressPeer::clearInstancePool();
            } elseif ($values instanceof CommonAnnoncePress) { // it's a model object
                CommonAnnoncePressPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonAnnoncePressPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnoncePressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonAnnoncePressPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonAnnoncePressPieceJointe objects
            $criteria = new Criteria(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
            
            $criteria->add(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, $obj->getId());
            $affectedRows += CommonAnnoncePressPieceJointePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonAnnoncePress object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnoncePress $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnoncePressPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnoncePressPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnoncePressPeer::DATABASE_NAME, CommonAnnoncePressPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnoncePress
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAnnoncePressPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnoncePressPeer::DATABASE_NAME);
        $criteria->add(CommonAnnoncePressPeer::ID, $id);
        $criteria->add(CommonAnnoncePressPeer::ORGANISME, $organisme);
        $v = CommonAnnoncePressPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnoncePressPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnoncePressPeer::buildTableMap();

