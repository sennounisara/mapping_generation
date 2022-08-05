<?php


/**
 * Base static class for performing query and update operations on the 't_CAO_Commission_Consultation' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionConsultationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_CAO_Commission_Consultation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTCAOCommissionConsultation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTCAOCommissionConsultationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id_commission_consultation field */
    const ID_COMMISSION_CONSULTATION = 't_CAO_Commission_Consultation.id_commission_consultation';

    /** the column name for the id_commission field */
    const ID_COMMISSION = 't_CAO_Commission_Consultation.id_commission';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 't_CAO_Commission_Consultation.ref_consultation';

    /** the column name for the ref_libre field */
    const REF_LIBRE = 't_CAO_Commission_Consultation.ref_libre';

    /** the column name for the organisme field */
    const ORGANISME = 't_CAO_Commission_Consultation.organisme';

    /** the column name for the intitule field */
    const INTITULE = 't_CAO_Commission_Consultation.intitule';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 't_CAO_Commission_Consultation.id_type_procedure';

    /** the column name for the id_categorie field */
    const ID_CATEGORIE = 't_CAO_Commission_Consultation.id_categorie';

    /** the column name for the service_gestionnaire field */
    const SERVICE_GESTIONNAIRE = 't_CAO_Commission_Consultation.service_gestionnaire';

    /** the column name for the id_service_gestionnaire field */
    const ID_SERVICE_GESTIONNAIRE = 't_CAO_Commission_Consultation.id_service_gestionnaire';

    /** the column name for the service_associe field */
    const SERVICE_ASSOCIE = 't_CAO_Commission_Consultation.service_associe';

    /** the column name for the id_service_associe field */
    const ID_SERVICE_ASSOCIE = 't_CAO_Commission_Consultation.id_service_associe';

    /** the column name for the date_cloture field */
    const DATE_CLOTURE = 't_CAO_Commission_Consultation.date_cloture';

    /** the column name for the date_mise_en_ligne field */
    const DATE_MISE_EN_LIGNE = 't_CAO_Commission_Consultation.date_mise_en_ligne';

    /** the column name for the id_consultation field */
    const ID_CONSULTATION = 't_CAO_Commission_Consultation.id_consultation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTCAOCommissionConsultation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTCAOCommissionConsultation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOCommissionConsultationPeer::$fieldNames[CommonTCAOCommissionConsultationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdCommissionConsultation', 'IdCommission', 'RefConsultation', 'RefLibre', 'Organisme', 'Intitule', 'IdTypeProcedure', 'IdCategorie', 'ServiceGestionnaire', 'IdServiceGestionnaire', 'ServiceAssocie', 'IdServiceAssocie', 'DateCloture', 'DateMiseEnLigne', 'IdConsultation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCommissionConsultation', 'idCommission', 'refConsultation', 'refLibre', 'organisme', 'intitule', 'idTypeProcedure', 'idCategorie', 'serviceGestionnaire', 'idServiceGestionnaire', 'serviceAssocie', 'idServiceAssocie', 'dateCloture', 'dateMiseEnLigne', 'idConsultation', ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionConsultationPeer::REF_CONSULTATION, CommonTCAOCommissionConsultationPeer::REF_LIBRE, CommonTCAOCommissionConsultationPeer::ORGANISME, CommonTCAOCommissionConsultationPeer::INTITULE, CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE, CommonTCAOCommissionConsultationPeer::ID_CATEGORIE, CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE, CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE, CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE, CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE, CommonTCAOCommissionConsultationPeer::DATE_CLOTURE, CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE, CommonTCAOCommissionConsultationPeer::ID_CONSULTATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMMISSION_CONSULTATION', 'ID_COMMISSION', 'REF_CONSULTATION', 'REF_LIBRE', 'ORGANISME', 'INTITULE', 'ID_TYPE_PROCEDURE', 'ID_CATEGORIE', 'SERVICE_GESTIONNAIRE', 'ID_SERVICE_GESTIONNAIRE', 'SERVICE_ASSOCIE', 'ID_SERVICE_ASSOCIE', 'DATE_CLOTURE', 'DATE_MISE_EN_LIGNE', 'ID_CONSULTATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id_commission_consultation', 'id_commission', 'ref_consultation', 'ref_libre', 'organisme', 'intitule', 'id_type_procedure', 'id_categorie', 'service_gestionnaire', 'id_service_gestionnaire', 'service_associe', 'id_service_associe', 'date_cloture', 'date_mise_en_ligne', 'id_consultation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTCAOCommissionConsultationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdCommissionConsultation' => 0, 'IdCommission' => 1, 'RefConsultation' => 2, 'RefLibre' => 3, 'Organisme' => 4, 'Intitule' => 5, 'IdTypeProcedure' => 6, 'IdCategorie' => 7, 'ServiceGestionnaire' => 8, 'IdServiceGestionnaire' => 9, 'ServiceAssocie' => 10, 'IdServiceAssocie' => 11, 'DateCloture' => 12, 'DateMiseEnLigne' => 13, 'IdConsultation' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCommissionConsultation' => 0, 'idCommission' => 1, 'refConsultation' => 2, 'refLibre' => 3, 'organisme' => 4, 'intitule' => 5, 'idTypeProcedure' => 6, 'idCategorie' => 7, 'serviceGestionnaire' => 8, 'idServiceGestionnaire' => 9, 'serviceAssocie' => 10, 'idServiceAssocie' => 11, 'dateCloture' => 12, 'dateMiseEnLigne' => 13, 'idConsultation' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION => 0, CommonTCAOCommissionConsultationPeer::ID_COMMISSION => 1, CommonTCAOCommissionConsultationPeer::REF_CONSULTATION => 2, CommonTCAOCommissionConsultationPeer::REF_LIBRE => 3, CommonTCAOCommissionConsultationPeer::ORGANISME => 4, CommonTCAOCommissionConsultationPeer::INTITULE => 5, CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE => 6, CommonTCAOCommissionConsultationPeer::ID_CATEGORIE => 7, CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE => 8, CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE => 9, CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE => 10, CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE => 11, CommonTCAOCommissionConsultationPeer::DATE_CLOTURE => 12, CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE => 13, CommonTCAOCommissionConsultationPeer::ID_CONSULTATION => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMMISSION_CONSULTATION' => 0, 'ID_COMMISSION' => 1, 'REF_CONSULTATION' => 2, 'REF_LIBRE' => 3, 'ORGANISME' => 4, 'INTITULE' => 5, 'ID_TYPE_PROCEDURE' => 6, 'ID_CATEGORIE' => 7, 'SERVICE_GESTIONNAIRE' => 8, 'ID_SERVICE_GESTIONNAIRE' => 9, 'SERVICE_ASSOCIE' => 10, 'ID_SERVICE_ASSOCIE' => 11, 'DATE_CLOTURE' => 12, 'DATE_MISE_EN_LIGNE' => 13, 'ID_CONSULTATION' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id_commission_consultation' => 0, 'id_commission' => 1, 'ref_consultation' => 2, 'ref_libre' => 3, 'organisme' => 4, 'intitule' => 5, 'id_type_procedure' => 6, 'id_categorie' => 7, 'service_gestionnaire' => 8, 'id_service_gestionnaire' => 9, 'service_associe' => 10, 'id_service_associe' => 11, 'date_cloture' => 12, 'date_mise_en_ligne' => 13, 'id_consultation' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = CommonTCAOCommissionConsultationPeer::getFieldNames($toType);
        $key = isset(CommonTCAOCommissionConsultationPeer::$fieldKeys[$fromType][$name]) ? CommonTCAOCommissionConsultationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTCAOCommissionConsultationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTCAOCommissionConsultationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTCAOCommissionConsultationPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTCAOCommissionConsultationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTCAOCommissionConsultationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_COMMISSION);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::REF_LIBRE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::INTITULE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE);
            $criteria->addSelectColumn(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION);
        } else {
            $criteria->addSelectColumn($alias . '.id_commission_consultation');
            $criteria->addSelectColumn($alias . '.id_commission');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.ref_libre');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.id_categorie');
            $criteria->addSelectColumn($alias . '.service_gestionnaire');
            $criteria->addSelectColumn($alias . '.id_service_gestionnaire');
            $criteria->addSelectColumn($alias . '.service_associe');
            $criteria->addSelectColumn($alias . '.id_service_associe');
            $criteria->addSelectColumn($alias . '.date_cloture');
            $criteria->addSelectColumn($alias . '.date_mise_en_ligne');
            $criteria->addSelectColumn($alias . '.id_consultation');
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
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommissionConsultation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTCAOCommissionConsultationPeer::doSelect($critcopy, $con);
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
        return CommonTCAOCommissionConsultationPeer::populateObjects(CommonTCAOCommissionConsultationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

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
     * @param      CommonTCAOCommissionConsultation $obj A CommonTCAOCommissionConsultation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdCommissionConsultation(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTCAOCommissionConsultationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTCAOCommissionConsultation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTCAOCommissionConsultation) {
                $key = serialize(array((string) $value->getIdCommissionConsultation(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTCAOCommissionConsultation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTCAOCommissionConsultationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTCAOCommissionConsultation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTCAOCommissionConsultationPeer::$instances[$key])) {
                return CommonTCAOCommissionConsultationPeer::$instances[$key];
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
        foreach (CommonTCAOCommissionConsultationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTCAOCommissionConsultationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_CAO_Commission_Consultation
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
        if ($row[$startcol] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 4]));
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

        return array((string) $row[$startcol], (string) $row[$startcol + 4]);
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
        $cls = CommonTCAOCommissionConsultationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTCAOCommissionConsultation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTCAOCommissionConsultationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTCAOCommission table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCAOCommission(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

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
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionConsultation objects pre-filled with their CommonTCAOCommission objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCAOCommission(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        $startcol = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;
        CommonTCAOCommissionPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOCommissionConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCAOCommissionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionConsultation) to $obj2 (CommonTCAOCommission)
                $obj2->addCommonTCAOCommissionConsultation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOCommissionConsultation objects pre-filled with their CommonOrganisme objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        $startcol = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;
        CommonOrganismePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTCAOCommissionConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonTCAOCommissionConsultation) to $obj2 (CommonOrganisme)
                $obj2->addCommonTCAOCommissionConsultation($obj1);

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
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionConsultation objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOCommissionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOCommissionPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTCAOCommission rows

            $key2 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTCAOCommissionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTCAOCommissionConsultation) to the collection in $obj2 (CommonTCAOCommission)
                $obj2->addCommonTCAOCommissionConsultation($obj1);
            } // if joined row not null

            // Add objects for joined CommonOrganisme rows

            $key3 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonOrganismePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonOrganismePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonTCAOCommissionConsultation) to the collection in $obj3 (CommonOrganisme)
                $obj3->addCommonTCAOCommissionConsultation($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTCAOCommission table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTCAOCommission(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);

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
     * Selects a collection of CommonTCAOCommissionConsultation objects pre-filled with all related objects except CommonTCAOCommission.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTCAOCommission(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionConsultation) to the collection in $obj2 (CommonOrganisme)
                $obj2->addCommonTCAOCommissionConsultation($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonTCAOCommissionConsultation objects pre-filled with all related objects except CommonOrganisme.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTCAOCommissionConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        }

        CommonTCAOCommissionConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonTCAOCommissionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCAOCommissionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, CommonTCAOCommissionPeer::ID_COMMISSION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTCAOCommissionConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTCAOCommissionConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCAOCommission rows

                $key2 = CommonTCAOCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCAOCommissionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCAOCommissionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCAOCommissionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonTCAOCommissionConsultation) to the collection in $obj2 (CommonTCAOCommission)
                $obj2->addCommonTCAOCommissionConsultation($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CommonTCAOCommissionConsultationPeer::DATABASE_NAME)->getTable(CommonTCAOCommissionConsultationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTCAOCommissionConsultationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTCAOCommissionConsultationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTCAOCommissionConsultationTableMap());
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
        return CommonTCAOCommissionConsultationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTCAOCommissionConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionConsultation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTCAOCommissionConsultation object
        }

        if ($criteria->containsKey(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION) && $criteria->keyContainsValue(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTCAOCommissionConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionConsultation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION);
            $value = $criteria->remove(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION);
            if ($value) {
                $selectCriteria->add(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTCAOCommissionConsultationPeer::ORGANISME);
            $value = $criteria->remove(CommonTCAOCommissionConsultationPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTCAOCommissionConsultationPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTCAOCommissionConsultationPeer::TABLE_NAME);
            }

        } else { // $values is CommonTCAOCommissionConsultation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_CAO_Commission_Consultation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTCAOCommissionConsultationPeer::TABLE_NAME, $con, CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTCAOCommissionConsultationPeer::clearInstancePool();
            CommonTCAOCommissionConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTCAOCommissionConsultation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTCAOCommissionConsultation object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTCAOCommissionConsultationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTCAOCommissionConsultation) { // it's a model object
            // invalidate the cache for this single object
            CommonTCAOCommissionConsultationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTCAOCommissionConsultationPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTCAOCommissionConsultationPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTCAOCommissionConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTCAOCommissionConsultation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTCAOCommissionConsultation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTCAOCommissionConsultationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, CommonTCAOCommissionConsultationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $id_commission_consultation
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTCAOCommissionConsultation
     */
    public static function retrieveByPK($id_commission_consultation, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_commission_consultation, (string) $organisme));
         if (null !== ($obj = CommonTCAOCommissionConsultationPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $id_commission_consultation);
        $criteria->add(CommonTCAOCommissionConsultationPeer::ORGANISME, $organisme);
        $v = CommonTCAOCommissionConsultationPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTCAOCommissionConsultationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTCAOCommissionConsultationPeer::buildTableMap();

