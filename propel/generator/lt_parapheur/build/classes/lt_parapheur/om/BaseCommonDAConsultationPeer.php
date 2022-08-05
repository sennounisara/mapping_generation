<?php


/**
 * Base static class for performing query and update operations on the 'DA_Consultation' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDAConsultationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'DA_Consultation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonDAConsultation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonDAConsultationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id field */
    const ID = 'DA_Consultation.id';

    /** the column name for the organisme field */
    const ORGANISME = 'DA_Consultation.organisme';

    /** the column name for the reference_utilisateur field */
    const REFERENCE_UTILISATEUR = 'DA_Consultation.reference_utilisateur';

    /** the column name for the Societe field */
    const SOCIETE = 'DA_Consultation.Societe';

    /** the column name for the objet field */
    const OBJET = 'DA_Consultation.objet';

    /** the column name for the type_procedure field */
    const TYPE_PROCEDURE = 'DA_Consultation.type_procedure';

    /** the column name for the type_marche field */
    const TYPE_MARCHE = 'DA_Consultation.type_marche';

    /** the column name for the satut_AO field */
    const SATUT_AO = 'DA_Consultation.satut_AO';

    /** the column name for the datefin field */
    const DATEFIN = 'DA_Consultation.datefin';

    /** the column name for the datemiseenligne field */
    const DATEMISEENLIGNE = 'DA_Consultation.datemiseenligne';

    /** the column name for the caution_provisoire field */
    const CAUTION_PROVISOIRE = 'DA_Consultation.caution_provisoire';

    /** the column name for the Principale field */
    const PRINCIPALE = 'DA_Consultation.Principale';

    /** the column name for the lot field */
    const LOT = 'DA_Consultation.lot';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'DA_Consultation.consultation_ref';

    /** the column name for the CREATE_AT field */
    const CREATE_AT = 'DA_Consultation.CREATE_AT';

    /** The enumerated values for the Principale field */
    const PRINCIPALE_OUI = 'oui';
    const PRINCIPALE_NON = 'non';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonDAConsultation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonDAConsultation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonDAConsultationPeer::$fieldNames[CommonDAConsultationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ReferenceUtilisateur', 'Societe', 'Objet', 'TypeProcedure', 'TypeMarche', 'SatutAo', 'Datefin', 'Datemiseenligne', 'CautionProvisoire', 'Principale', 'Lot', 'ConsultationRef', 'CreateAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'referenceUtilisateur', 'societe', 'objet', 'typeProcedure', 'typeMarche', 'satutAo', 'datefin', 'datemiseenligne', 'cautionProvisoire', 'principale', 'lot', 'consultationRef', 'createAt', ),
        BasePeer::TYPE_COLNAME => array (CommonDAConsultationPeer::ID, CommonDAConsultationPeer::ORGANISME, CommonDAConsultationPeer::REFERENCE_UTILISATEUR, CommonDAConsultationPeer::SOCIETE, CommonDAConsultationPeer::OBJET, CommonDAConsultationPeer::TYPE_PROCEDURE, CommonDAConsultationPeer::TYPE_MARCHE, CommonDAConsultationPeer::SATUT_AO, CommonDAConsultationPeer::DATEFIN, CommonDAConsultationPeer::DATEMISEENLIGNE, CommonDAConsultationPeer::CAUTION_PROVISOIRE, CommonDAConsultationPeer::PRINCIPALE, CommonDAConsultationPeer::LOT, CommonDAConsultationPeer::CONSULTATION_REF, CommonDAConsultationPeer::CREATE_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'REFERENCE_UTILISATEUR', 'SOCIETE', 'OBJET', 'TYPE_PROCEDURE', 'TYPE_MARCHE', 'SATUT_AO', 'DATEFIN', 'DATEMISEENLIGNE', 'CAUTION_PROVISOIRE', 'PRINCIPALE', 'LOT', 'CONSULTATION_REF', 'CREATE_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'reference_utilisateur', 'Societe', 'objet', 'type_procedure', 'type_marche', 'satut_AO', 'datefin', 'datemiseenligne', 'caution_provisoire', 'Principale', 'lot', 'consultation_ref', 'CREATE_AT', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonDAConsultationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ReferenceUtilisateur' => 2, 'Societe' => 3, 'Objet' => 4, 'TypeProcedure' => 5, 'TypeMarche' => 6, 'SatutAo' => 7, 'Datefin' => 8, 'Datemiseenligne' => 9, 'CautionProvisoire' => 10, 'Principale' => 11, 'Lot' => 12, 'ConsultationRef' => 13, 'CreateAt' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'referenceUtilisateur' => 2, 'societe' => 3, 'objet' => 4, 'typeProcedure' => 5, 'typeMarche' => 6, 'satutAo' => 7, 'datefin' => 8, 'datemiseenligne' => 9, 'cautionProvisoire' => 10, 'principale' => 11, 'lot' => 12, 'consultationRef' => 13, 'createAt' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonDAConsultationPeer::ID => 0, CommonDAConsultationPeer::ORGANISME => 1, CommonDAConsultationPeer::REFERENCE_UTILISATEUR => 2, CommonDAConsultationPeer::SOCIETE => 3, CommonDAConsultationPeer::OBJET => 4, CommonDAConsultationPeer::TYPE_PROCEDURE => 5, CommonDAConsultationPeer::TYPE_MARCHE => 6, CommonDAConsultationPeer::SATUT_AO => 7, CommonDAConsultationPeer::DATEFIN => 8, CommonDAConsultationPeer::DATEMISEENLIGNE => 9, CommonDAConsultationPeer::CAUTION_PROVISOIRE => 10, CommonDAConsultationPeer::PRINCIPALE => 11, CommonDAConsultationPeer::LOT => 12, CommonDAConsultationPeer::CONSULTATION_REF => 13, CommonDAConsultationPeer::CREATE_AT => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'REFERENCE_UTILISATEUR' => 2, 'SOCIETE' => 3, 'OBJET' => 4, 'TYPE_PROCEDURE' => 5, 'TYPE_MARCHE' => 6, 'SATUT_AO' => 7, 'DATEFIN' => 8, 'DATEMISEENLIGNE' => 9, 'CAUTION_PROVISOIRE' => 10, 'PRINCIPALE' => 11, 'LOT' => 12, 'CONSULTATION_REF' => 13, 'CREATE_AT' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'reference_utilisateur' => 2, 'Societe' => 3, 'objet' => 4, 'type_procedure' => 5, 'type_marche' => 6, 'satut_AO' => 7, 'datefin' => 8, 'datemiseenligne' => 9, 'caution_provisoire' => 10, 'Principale' => 11, 'lot' => 12, 'consultation_ref' => 13, 'CREATE_AT' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonDAConsultationPeer::PRINCIPALE => array(
            CommonDAConsultationPeer::PRINCIPALE_OUI,
            CommonDAConsultationPeer::PRINCIPALE_NON,
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
        $toNames = CommonDAConsultationPeer::getFieldNames($toType);
        $key = isset(CommonDAConsultationPeer::$fieldKeys[$fromType][$name]) ? CommonDAConsultationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonDAConsultationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonDAConsultationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonDAConsultationPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonDAConsultationPeer::$enumValueSets;
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
        $valueSets = CommonDAConsultationPeer::getValueSets();

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
        $values = CommonDAConsultationPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonDAConsultationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonDAConsultationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonDAConsultationPeer::ID);
            $criteria->addSelectColumn(CommonDAConsultationPeer::ORGANISME);
            $criteria->addSelectColumn(CommonDAConsultationPeer::REFERENCE_UTILISATEUR);
            $criteria->addSelectColumn(CommonDAConsultationPeer::SOCIETE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::OBJET);
            $criteria->addSelectColumn(CommonDAConsultationPeer::TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::TYPE_MARCHE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::SATUT_AO);
            $criteria->addSelectColumn(CommonDAConsultationPeer::DATEFIN);
            $criteria->addSelectColumn(CommonDAConsultationPeer::DATEMISEENLIGNE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::PRINCIPALE);
            $criteria->addSelectColumn(CommonDAConsultationPeer::LOT);
            $criteria->addSelectColumn(CommonDAConsultationPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonDAConsultationPeer::CREATE_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.reference_utilisateur');
            $criteria->addSelectColumn($alias . '.Societe');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.type_procedure');
            $criteria->addSelectColumn($alias . '.type_marche');
            $criteria->addSelectColumn($alias . '.satut_AO');
            $criteria->addSelectColumn($alias . '.datefin');
            $criteria->addSelectColumn($alias . '.datemiseenligne');
            $criteria->addSelectColumn($alias . '.caution_provisoire');
            $criteria->addSelectColumn($alias . '.Principale');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.CREATE_AT');
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
        $criteria->setPrimaryTableName(CommonDAConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDAConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDAConsultation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonDAConsultationPeer::doSelect($critcopy, $con);
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
        return CommonDAConsultationPeer::populateObjects(CommonDAConsultationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonDAConsultationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

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
     * @param      CommonDAConsultation $obj A CommonDAConsultation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonDAConsultationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonDAConsultation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonDAConsultation) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonDAConsultation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonDAConsultationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonDAConsultation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonDAConsultationPeer::$instances[$key])) {
                return CommonDAConsultationPeer::$instances[$key];
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
        foreach (CommonDAConsultationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonDAConsultationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to DA_Consultation
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
        $cls = CommonDAConsultationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonDAConsultationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonDAConsultationPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonDAConsultation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonDAConsultationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonDAConsultationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonDAConsultationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonDAConsultationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonDAConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDAConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonDAConsultationPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonDAConsultation objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonDAConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);
        }

        CommonDAConsultationPeer::addSelectColumns($criteria);
        $startcol = CommonDAConsultationPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonDAConsultationPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonDAConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonDAConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonDAConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonDAConsultation) to $obj2 (CommonConsultation)
                $obj2->addCommonDAConsultation($obj1);

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
        $criteria->setPrimaryTableName(CommonDAConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDAConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonDAConsultationPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonDAConsultation objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonDAConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);
        }

        CommonDAConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonDAConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonDAConsultationPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonDAConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonDAConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonDAConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonDAConsultation) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonDAConsultation($obj1);
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
        return Propel::getDatabaseMap(CommonDAConsultationPeer::DATABASE_NAME)->getTable(CommonDAConsultationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonDAConsultationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonDAConsultationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonDAConsultationTableMap());
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
        return CommonDAConsultationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonDAConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDAConsultation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonDAConsultation object
        }

        if ($criteria->containsKey(CommonDAConsultationPeer::ID) && $criteria->keyContainsValue(CommonDAConsultationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonDAConsultationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonDAConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDAConsultation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonDAConsultationPeer::ID);
            $value = $criteria->remove(CommonDAConsultationPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonDAConsultationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDAConsultationPeer::TABLE_NAME);
            }

        } else { // $values is CommonDAConsultation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the DA_Consultation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonDAConsultationPeer::TABLE_NAME, $con, CommonDAConsultationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonDAConsultationPeer::clearInstancePool();
            CommonDAConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonDAConsultation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonDAConsultation object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonDAConsultationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonDAConsultation) { // it's a model object
            // invalidate the cache for this single object
            CommonDAConsultationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);
            $criteria->add(CommonDAConsultationPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonDAConsultationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDAConsultationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonDAConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonDAConsultation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonDAConsultation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonDAConsultationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonDAConsultationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonDAConsultationPeer::DATABASE_NAME, CommonDAConsultationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonDAConsultation
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonDAConsultationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonDAConsultationPeer::ID, $pk);

        $v = CommonDAConsultationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonDAConsultation[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);
            $criteria->add(CommonDAConsultationPeer::ID, $pks, Criteria::IN);
            $objs = CommonDAConsultationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonDAConsultationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonDAConsultationPeer::buildTableMap();

