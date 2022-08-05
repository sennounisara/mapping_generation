<?php


/**
 * Base static class for performing query and update operations on the 'backup_Ordre_Du_Jour' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonBackupOrdreDuJourPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Ordre_Du_Jour';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupOrdreDuJour';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupOrdreDuJourTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id field */
    const ID = 'backup_Ordre_Du_Jour.id';

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Ordre_Du_Jour.organisme';

    /** the column name for the id_commission field */
    const ID_COMMISSION = 'backup_Ordre_Du_Jour.id_commission';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'backup_Ordre_Du_Jour.ref_consultation';

    /** the column name for the ref_libre field */
    const REF_LIBRE = 'backup_Ordre_Du_Jour.ref_libre';

    /** the column name for the id_etape field */
    const ID_ETAPE = 'backup_Ordre_Du_Jour.id_etape';

    /** the column name for the intitule_ordre_du_jour field */
    const INTITULE_ORDRE_DU_JOUR = 'backup_Ordre_Du_Jour.intitule_ordre_du_jour';

    /** the column name for the lots_odj_libre field */
    const LOTS_ODJ_LIBRE = 'backup_Ordre_Du_Jour.lots_odj_libre';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'backup_Ordre_Du_Jour.id_type_procedure';

    /** the column name for the type_procedure_libre field */
    const TYPE_PROCEDURE_LIBRE = 'backup_Ordre_Du_Jour.type_procedure_libre';

    /** the column name for the date_cloture field */
    const DATE_CLOTURE = 'backup_Ordre_Du_Jour.date_cloture';

    /** the column name for the type_env field */
    const TYPE_ENV = 'backup_Ordre_Du_Jour.type_env';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'backup_Ordre_Du_Jour.sous_pli';

    /** the column name for the heure field */
    const HEURE = 'backup_Ordre_Du_Jour.heure';

    /** the column name for the etape_consultation field */
    const ETAPE_CONSULTATION = 'backup_Ordre_Du_Jour.etape_consultation';

    /** the column name for the type_consultation field */
    const TYPE_CONSULTATION = 'backup_Ordre_Du_Jour.type_consultation';

    /** the column name for the minutes field */
    const MINUTES = 'backup_Ordre_Du_Jour.minutes';

    /** the column name for the service field */
    const SERVICE = 'backup_Ordre_Du_Jour.service';

    /** the column name for the id_service field */
    const ID_SERVICE = 'backup_Ordre_Du_Jour.id_service';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'backup_Ordre_Du_Jour.date_debut';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupOrdreDuJour objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupOrdreDuJour[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupOrdreDuJourPeer::$fieldNames[CommonBackupOrdreDuJourPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdCommission', 'RefConsultation', 'RefLibre', 'IdEtape', 'IntituleOrdreDuJour', 'LotsOdjLibre', 'IdTypeProcedure', 'TypeProcedureLibre', 'DateCloture', 'TypeEnv', 'SousPli', 'Heure', 'EtapeConsultation', 'TypeConsultation', 'Minutes', 'Service', 'IdService', 'DateDebut', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idCommission', 'refConsultation', 'refLibre', 'idEtape', 'intituleOrdreDuJour', 'lotsOdjLibre', 'idTypeProcedure', 'typeProcedureLibre', 'dateCloture', 'typeEnv', 'sousPli', 'heure', 'etapeConsultation', 'typeConsultation', 'minutes', 'service', 'idService', 'dateDebut', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupOrdreDuJourPeer::ID, CommonBackupOrdreDuJourPeer::ORGANISME, CommonBackupOrdreDuJourPeer::ID_COMMISSION, CommonBackupOrdreDuJourPeer::REF_CONSULTATION, CommonBackupOrdreDuJourPeer::REF_LIBRE, CommonBackupOrdreDuJourPeer::ID_ETAPE, CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR, CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE, CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE, CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE, CommonBackupOrdreDuJourPeer::DATE_CLOTURE, CommonBackupOrdreDuJourPeer::TYPE_ENV, CommonBackupOrdreDuJourPeer::SOUS_PLI, CommonBackupOrdreDuJourPeer::HEURE, CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION, CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION, CommonBackupOrdreDuJourPeer::MINUTES, CommonBackupOrdreDuJourPeer::SERVICE, CommonBackupOrdreDuJourPeer::ID_SERVICE, CommonBackupOrdreDuJourPeer::DATE_DEBUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_COMMISSION', 'REF_CONSULTATION', 'REF_LIBRE', 'ID_ETAPE', 'INTITULE_ORDRE_DU_JOUR', 'LOTS_ODJ_LIBRE', 'ID_TYPE_PROCEDURE', 'TYPE_PROCEDURE_LIBRE', 'DATE_CLOTURE', 'TYPE_ENV', 'SOUS_PLI', 'HEURE', 'ETAPE_CONSULTATION', 'TYPE_CONSULTATION', 'MINUTES', 'SERVICE', 'ID_SERVICE', 'DATE_DEBUT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_commission', 'ref_consultation', 'ref_libre', 'id_etape', 'intitule_ordre_du_jour', 'lots_odj_libre', 'id_type_procedure', 'type_procedure_libre', 'date_cloture', 'type_env', 'sous_pli', 'heure', 'etape_consultation', 'type_consultation', 'minutes', 'service', 'id_service', 'date_debut', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupOrdreDuJourPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdCommission' => 2, 'RefConsultation' => 3, 'RefLibre' => 4, 'IdEtape' => 5, 'IntituleOrdreDuJour' => 6, 'LotsOdjLibre' => 7, 'IdTypeProcedure' => 8, 'TypeProcedureLibre' => 9, 'DateCloture' => 10, 'TypeEnv' => 11, 'SousPli' => 12, 'Heure' => 13, 'EtapeConsultation' => 14, 'TypeConsultation' => 15, 'Minutes' => 16, 'Service' => 17, 'IdService' => 18, 'DateDebut' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idCommission' => 2, 'refConsultation' => 3, 'refLibre' => 4, 'idEtape' => 5, 'intituleOrdreDuJour' => 6, 'lotsOdjLibre' => 7, 'idTypeProcedure' => 8, 'typeProcedureLibre' => 9, 'dateCloture' => 10, 'typeEnv' => 11, 'sousPli' => 12, 'heure' => 13, 'etapeConsultation' => 14, 'typeConsultation' => 15, 'minutes' => 16, 'service' => 17, 'idService' => 18, 'dateDebut' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupOrdreDuJourPeer::ID => 0, CommonBackupOrdreDuJourPeer::ORGANISME => 1, CommonBackupOrdreDuJourPeer::ID_COMMISSION => 2, CommonBackupOrdreDuJourPeer::REF_CONSULTATION => 3, CommonBackupOrdreDuJourPeer::REF_LIBRE => 4, CommonBackupOrdreDuJourPeer::ID_ETAPE => 5, CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR => 6, CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE => 7, CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE => 8, CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE => 9, CommonBackupOrdreDuJourPeer::DATE_CLOTURE => 10, CommonBackupOrdreDuJourPeer::TYPE_ENV => 11, CommonBackupOrdreDuJourPeer::SOUS_PLI => 12, CommonBackupOrdreDuJourPeer::HEURE => 13, CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION => 14, CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION => 15, CommonBackupOrdreDuJourPeer::MINUTES => 16, CommonBackupOrdreDuJourPeer::SERVICE => 17, CommonBackupOrdreDuJourPeer::ID_SERVICE => 18, CommonBackupOrdreDuJourPeer::DATE_DEBUT => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_COMMISSION' => 2, 'REF_CONSULTATION' => 3, 'REF_LIBRE' => 4, 'ID_ETAPE' => 5, 'INTITULE_ORDRE_DU_JOUR' => 6, 'LOTS_ODJ_LIBRE' => 7, 'ID_TYPE_PROCEDURE' => 8, 'TYPE_PROCEDURE_LIBRE' => 9, 'DATE_CLOTURE' => 10, 'TYPE_ENV' => 11, 'SOUS_PLI' => 12, 'HEURE' => 13, 'ETAPE_CONSULTATION' => 14, 'TYPE_CONSULTATION' => 15, 'MINUTES' => 16, 'SERVICE' => 17, 'ID_SERVICE' => 18, 'DATE_DEBUT' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_commission' => 2, 'ref_consultation' => 3, 'ref_libre' => 4, 'id_etape' => 5, 'intitule_ordre_du_jour' => 6, 'lots_odj_libre' => 7, 'id_type_procedure' => 8, 'type_procedure_libre' => 9, 'date_cloture' => 10, 'type_env' => 11, 'sous_pli' => 12, 'heure' => 13, 'etape_consultation' => 14, 'type_consultation' => 15, 'minutes' => 16, 'service' => 17, 'id_service' => 18, 'date_debut' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $toNames = CommonBackupOrdreDuJourPeer::getFieldNames($toType);
        $key = isset(CommonBackupOrdreDuJourPeer::$fieldKeys[$fromType][$name]) ? CommonBackupOrdreDuJourPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupOrdreDuJourPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupOrdreDuJourPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupOrdreDuJourPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupOrdreDuJourPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupOrdreDuJourPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ID);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ID_COMMISSION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::REF_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ID_ETAPE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::DATE_CLOTURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::TYPE_ENV);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::HEURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::MINUTES);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::SERVICE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJourPeer::DATE_DEBUT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_commission');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.ref_libre');
            $criteria->addSelectColumn($alias . '.id_etape');
            $criteria->addSelectColumn($alias . '.intitule_ordre_du_jour');
            $criteria->addSelectColumn($alias . '.lots_odj_libre');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.type_procedure_libre');
            $criteria->addSelectColumn($alias . '.date_cloture');
            $criteria->addSelectColumn($alias . '.type_env');
            $criteria->addSelectColumn($alias . '.sous_pli');
            $criteria->addSelectColumn($alias . '.heure');
            $criteria->addSelectColumn($alias . '.etape_consultation');
            $criteria->addSelectColumn($alias . '.type_consultation');
            $criteria->addSelectColumn($alias . '.minutes');
            $criteria->addSelectColumn($alias . '.service');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.date_debut');
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
        $criteria->setPrimaryTableName(CommonBackupOrdreDuJourPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupOrdreDuJourPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupOrdreDuJourPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupOrdreDuJour
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupOrdreDuJourPeer::doSelect($critcopy, $con);
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
        return CommonBackupOrdreDuJourPeer::populateObjects(CommonBackupOrdreDuJourPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupOrdreDuJourPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

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
     * @param      CommonBackupOrdreDuJour $obj A CommonBackupOrdreDuJour object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBackupOrdreDuJourPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupOrdreDuJour object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupOrdreDuJour) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupOrdreDuJour object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupOrdreDuJourPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupOrdreDuJour Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupOrdreDuJourPeer::$instances[$key])) {
                return CommonBackupOrdreDuJourPeer::$instances[$key];
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
        foreach (CommonBackupOrdreDuJourPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupOrdreDuJourPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Ordre_Du_Jour
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
        $cls = CommonBackupOrdreDuJourPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupOrdreDuJourPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupOrdreDuJourPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupOrdreDuJourPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupOrdreDuJour object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupOrdreDuJourPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupOrdreDuJourPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupOrdreDuJourPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupOrdreDuJourPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupOrdreDuJourPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupOrdreDuJourPeer::DATABASE_NAME)->getTable(CommonBackupOrdreDuJourPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupOrdreDuJourPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupOrdreDuJourPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupOrdreDuJourTableMap());
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
        return CommonBackupOrdreDuJourPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupOrdreDuJour or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupOrdreDuJour object
        }

        if ($criteria->containsKey(CommonBackupOrdreDuJourPeer::ID) && $criteria->keyContainsValue(CommonBackupOrdreDuJourPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBackupOrdreDuJourPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupOrdreDuJour or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupOrdreDuJourPeer::ID);
            $value = $criteria->remove(CommonBackupOrdreDuJourPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonBackupOrdreDuJourPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupOrdreDuJourPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupOrdreDuJourPeer::ORGANISME);
            $value = $criteria->remove(CommonBackupOrdreDuJourPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupOrdreDuJourPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupOrdreDuJourPeer::TABLE_NAME);
            }

        } else { // $values is CommonBackupOrdreDuJour object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Ordre_Du_Jour table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupOrdreDuJourPeer::TABLE_NAME, $con, CommonBackupOrdreDuJourPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupOrdreDuJourPeer::clearInstancePool();
            CommonBackupOrdreDuJourPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupOrdreDuJour or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupOrdreDuJourPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupOrdreDuJour) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupOrdreDuJourPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupOrdreDuJourPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupOrdreDuJourPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupOrdreDuJourPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupOrdreDuJourPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupOrdreDuJourPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupOrdreDuJour object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupOrdreDuJour $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupOrdreDuJourPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupOrdreDuJourPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupOrdreDuJourPeer::DATABASE_NAME, CommonBackupOrdreDuJourPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBackupOrdreDuJour
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonBackupOrdreDuJourPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupOrdreDuJourPeer::DATABASE_NAME);
        $criteria->add(CommonBackupOrdreDuJourPeer::ID, $id);
        $criteria->add(CommonBackupOrdreDuJourPeer::ORGANISME, $organisme);
        $v = CommonBackupOrdreDuJourPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupOrdreDuJourPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupOrdreDuJourPeer::buildTableMap();

