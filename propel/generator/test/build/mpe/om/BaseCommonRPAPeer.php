<?php


/**
 * Base static class for performing query and update operations on the 'RPA' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonRPAPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'RPA';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonRPA';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonRPATableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 'RPA.id';

    /** the column name for the acronymeOrg field */
    const ACRONYMEORG = 'RPA.acronymeOrg';

    /** the column name for the organisme field */
    const ORGANISME = 'RPA.organisme';

    /** the column name for the nom field */
    const NOM = 'RPA.nom';

    /** the column name for the prenom field */
    const PRENOM = 'RPA.prenom';

    /** the column name for the adresse1 field */
    const ADRESSE1 = 'RPA.adresse1';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'RPA.adresse2';

    /** the column name for the codepostal field */
    const CODEPOSTAL = 'RPA.codepostal';

    /** the column name for the ville field */
    const VILLE = 'RPA.ville';

    /** the column name for the id_service field */
    const ID_SERVICE = 'RPA.id_service';

    /** the column name for the Fonction field */
    const FONCTION = 'RPA.Fonction';

    /** the column name for the pays field */
    const PAYS = 'RPA.pays';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'RPA.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'RPA.date_modification';

    /** the column name for the responsable_archive field */
    const RESPONSABLE_ARCHIVE = 'RPA.responsable_archive';

    /** the column name for the email field */
    const EMAIL = 'RPA.email';

    /** the column name for the telephone field */
    const TELEPHONE = 'RPA.telephone';

    /** the column name for the fax field */
    const FAX = 'RPA.fax';

    /** the column name for the OrganismeRpa field */
    const ORGANISMERPA = 'RPA.OrganismeRpa';

    /** The enumerated values for the responsable_archive field */
    const RESPONSABLE_ARCHIVE_0 = '0';
    const RESPONSABLE_ARCHIVE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonRPA objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonRPA[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonRPAPeer::$fieldNames[CommonRPAPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Acronymeorg', 'Organisme', 'Nom', 'Prenom', 'Adresse1', 'Adresse2', 'Codepostal', 'Ville', 'IdService', 'Fonction', 'Pays', 'DateCreation', 'DateModification', 'ResponsableArchive', 'Email', 'Telephone', 'Fax', 'Organismerpa', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'acronymeorg', 'organisme', 'nom', 'prenom', 'adresse1', 'adresse2', 'codepostal', 'ville', 'idService', 'fonction', 'pays', 'dateCreation', 'dateModification', 'responsableArchive', 'email', 'telephone', 'fax', 'organismerpa', ),
        BasePeer::TYPE_COLNAME => array (CommonRPAPeer::ID, CommonRPAPeer::ACRONYMEORG, CommonRPAPeer::ORGANISME, CommonRPAPeer::NOM, CommonRPAPeer::PRENOM, CommonRPAPeer::ADRESSE1, CommonRPAPeer::ADRESSE2, CommonRPAPeer::CODEPOSTAL, CommonRPAPeer::VILLE, CommonRPAPeer::ID_SERVICE, CommonRPAPeer::FONCTION, CommonRPAPeer::PAYS, CommonRPAPeer::DATE_CREATION, CommonRPAPeer::DATE_MODIFICATION, CommonRPAPeer::RESPONSABLE_ARCHIVE, CommonRPAPeer::EMAIL, CommonRPAPeer::TELEPHONE, CommonRPAPeer::FAX, CommonRPAPeer::ORGANISMERPA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ACRONYMEORG', 'ORGANISME', 'NOM', 'PRENOM', 'ADRESSE1', 'ADRESSE2', 'CODEPOSTAL', 'VILLE', 'ID_SERVICE', 'FONCTION', 'PAYS', 'DATE_CREATION', 'DATE_MODIFICATION', 'RESPONSABLE_ARCHIVE', 'EMAIL', 'TELEPHONE', 'FAX', 'ORGANISMERPA', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'acronymeOrg', 'organisme', 'nom', 'prenom', 'adresse1', 'adresse2', 'codepostal', 'ville', 'id_service', 'Fonction', 'pays', 'date_creation', 'date_modification', 'responsable_archive', 'email', 'telephone', 'fax', 'OrganismeRpa', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonRPAPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Acronymeorg' => 1, 'Organisme' => 2, 'Nom' => 3, 'Prenom' => 4, 'Adresse1' => 5, 'Adresse2' => 6, 'Codepostal' => 7, 'Ville' => 8, 'IdService' => 9, 'Fonction' => 10, 'Pays' => 11, 'DateCreation' => 12, 'DateModification' => 13, 'ResponsableArchive' => 14, 'Email' => 15, 'Telephone' => 16, 'Fax' => 17, 'Organismerpa' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'acronymeorg' => 1, 'organisme' => 2, 'nom' => 3, 'prenom' => 4, 'adresse1' => 5, 'adresse2' => 6, 'codepostal' => 7, 'ville' => 8, 'idService' => 9, 'fonction' => 10, 'pays' => 11, 'dateCreation' => 12, 'dateModification' => 13, 'responsableArchive' => 14, 'email' => 15, 'telephone' => 16, 'fax' => 17, 'organismerpa' => 18, ),
        BasePeer::TYPE_COLNAME => array (CommonRPAPeer::ID => 0, CommonRPAPeer::ACRONYMEORG => 1, CommonRPAPeer::ORGANISME => 2, CommonRPAPeer::NOM => 3, CommonRPAPeer::PRENOM => 4, CommonRPAPeer::ADRESSE1 => 5, CommonRPAPeer::ADRESSE2 => 6, CommonRPAPeer::CODEPOSTAL => 7, CommonRPAPeer::VILLE => 8, CommonRPAPeer::ID_SERVICE => 9, CommonRPAPeer::FONCTION => 10, CommonRPAPeer::PAYS => 11, CommonRPAPeer::DATE_CREATION => 12, CommonRPAPeer::DATE_MODIFICATION => 13, CommonRPAPeer::RESPONSABLE_ARCHIVE => 14, CommonRPAPeer::EMAIL => 15, CommonRPAPeer::TELEPHONE => 16, CommonRPAPeer::FAX => 17, CommonRPAPeer::ORGANISMERPA => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ACRONYMEORG' => 1, 'ORGANISME' => 2, 'NOM' => 3, 'PRENOM' => 4, 'ADRESSE1' => 5, 'ADRESSE2' => 6, 'CODEPOSTAL' => 7, 'VILLE' => 8, 'ID_SERVICE' => 9, 'FONCTION' => 10, 'PAYS' => 11, 'DATE_CREATION' => 12, 'DATE_MODIFICATION' => 13, 'RESPONSABLE_ARCHIVE' => 14, 'EMAIL' => 15, 'TELEPHONE' => 16, 'FAX' => 17, 'ORGANISMERPA' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'acronymeOrg' => 1, 'organisme' => 2, 'nom' => 3, 'prenom' => 4, 'adresse1' => 5, 'adresse2' => 6, 'codepostal' => 7, 'ville' => 8, 'id_service' => 9, 'Fonction' => 10, 'pays' => 11, 'date_creation' => 12, 'date_modification' => 13, 'responsable_archive' => 14, 'email' => 15, 'telephone' => 16, 'fax' => 17, 'OrganismeRpa' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonRPAPeer::RESPONSABLE_ARCHIVE => array(
            CommonRPAPeer::RESPONSABLE_ARCHIVE_0,
            CommonRPAPeer::RESPONSABLE_ARCHIVE_1,
        ),
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
        $toNames = CommonRPAPeer::getFieldNames($toType);
        $key = isset(CommonRPAPeer::$fieldKeys[$fromType][$name]) ? CommonRPAPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonRPAPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonRPAPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonRPAPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonRPAPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonRPAPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonRPAPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
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
     * @param      string $column The column name for current table. (i.e. CommonRPAPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonRPAPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonRPAPeer::ID);
            $criteria->addSelectColumn(CommonRPAPeer::ACRONYMEORG);
            $criteria->addSelectColumn(CommonRPAPeer::ORGANISME);
            $criteria->addSelectColumn(CommonRPAPeer::NOM);
            $criteria->addSelectColumn(CommonRPAPeer::PRENOM);
            $criteria->addSelectColumn(CommonRPAPeer::ADRESSE1);
            $criteria->addSelectColumn(CommonRPAPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonRPAPeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonRPAPeer::VILLE);
            $criteria->addSelectColumn(CommonRPAPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonRPAPeer::FONCTION);
            $criteria->addSelectColumn(CommonRPAPeer::PAYS);
            $criteria->addSelectColumn(CommonRPAPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonRPAPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonRPAPeer::RESPONSABLE_ARCHIVE);
            $criteria->addSelectColumn(CommonRPAPeer::EMAIL);
            $criteria->addSelectColumn(CommonRPAPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonRPAPeer::FAX);
            $criteria->addSelectColumn(CommonRPAPeer::ORGANISMERPA);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.acronymeOrg');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.adresse1');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.codepostal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.Fonction');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.responsable_archive');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.OrganismeRpa');
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
        $criteria->setPrimaryTableName(CommonRPAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRPAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRPA
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonRPAPeer::doSelect($critcopy, $con);
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
        return CommonRPAPeer::populateObjects(CommonRPAPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonRPAPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

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
     * @param      CommonRPA $obj A CommonRPA object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getAcronymeorg()));
            } // if key === null
            CommonRPAPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonRPA object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonRPA) {
                $key = serialize(array((string) $value->getId(), (string) $value->getAcronymeorg()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonRPA object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonRPAPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonRPA Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonRPAPeer::$instances[$key])) {
                return CommonRPAPeer::$instances[$key];
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
        foreach (CommonRPAPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonRPAPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to RPA
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
        $cls = CommonRPAPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonRPAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonRPAPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonRPAPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonRPA object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonRPAPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonRPAPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonRPAPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonRPAPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonRPAPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonRPAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRPAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonRPAPeer::ACRONYMEORG, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonRPA objects pre-filled with their CommonOrganisme objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonRPA objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);
        }

        CommonRPAPeer::addSelectColumns($criteria);
        $startcol = CommonRPAPeer::NUM_HYDRATE_COLUMNS;
        CommonOrganismePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonRPAPeer::ACRONYMEORG, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonRPAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonRPAPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonRPAPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonRPAPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonRPA) to $obj2 (CommonOrganisme)
                $obj2->addCommonRPA($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonRPAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRPAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonRPAPeer::ACRONYMEORG, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonRPA objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonRPA objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);
        }

        CommonRPAPeer::addSelectColumns($criteria);
        $startcol2 = CommonRPAPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonRPAPeer::ACRONYMEORG, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonRPAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonRPAPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonRPAPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonRPAPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonOrganisme rows

            $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonRPA) to the collection in $obj2 (CommonOrganisme)
                $obj2->addCommonRPA($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(CommonRPAPeer::DATABASE_NAME)->getTable(CommonRPAPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonRPAPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonRPAPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonRPATableMap());
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
        return CommonRPAPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonRPA or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRPA object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonRPA object
        }

        if ($criteria->containsKey(CommonRPAPeer::ID) && $criteria->keyContainsValue(CommonRPAPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonRPAPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonRPA or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRPA object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonRPAPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonRPAPeer::ID);
            $value = $criteria->remove(CommonRPAPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonRPAPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRPAPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonRPAPeer::ACRONYMEORG);
            $value = $criteria->remove(CommonRPAPeer::ACRONYMEORG);
            if ($value) {
                $selectCriteria->add(CommonRPAPeer::ACRONYMEORG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRPAPeer::TABLE_NAME);
            }

        } else { // $values is CommonRPA object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the RPA table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonRPAPeer::TABLE_NAME, $con, CommonRPAPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonRPAPeer::clearInstancePool();
            CommonRPAPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonRPA or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonRPA object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonRPAPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonRPA) { // it's a model object
            // invalidate the cache for this single object
            CommonRPAPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonRPAPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonRPAPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonRPAPeer::ACRONYMEORG, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonRPAPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRPAPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonRPAPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonRPA object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonRPA $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonRPAPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonRPAPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonRPAPeer::DATABASE_NAME, CommonRPAPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $acronymeorg
     * @param      PropelPDO $con
     * @return   CommonRPA
     */
    public static function retrieveByPK($id, $acronymeorg, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $acronymeorg));
         if (null !== ($obj = CommonRPAPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonRPAPeer::DATABASE_NAME);
        $criteria->add(CommonRPAPeer::ID, $id);
        $criteria->add(CommonRPAPeer::ACRONYMEORG, $acronymeorg);
        $v = CommonRPAPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonRPAPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonRPAPeer::buildTableMap();

