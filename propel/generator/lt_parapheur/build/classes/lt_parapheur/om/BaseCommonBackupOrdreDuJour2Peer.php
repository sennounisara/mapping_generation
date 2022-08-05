<?php


/**
 * Base static class for performing query and update operations on the 'backup_Ordre_Du_Jour_2' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupOrdreDuJour2Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Ordre_Du_Jour_2';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupOrdreDuJour2';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupOrdreDuJour2TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id field */
    const ID = 'backup_Ordre_Du_Jour_2.id';

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Ordre_Du_Jour_2.organisme';

    /** the column name for the id_seance field */
    const ID_SEANCE = 'backup_Ordre_Du_Jour_2.id_seance';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'backup_Ordre_Du_Jour_2.ref_consultation';

    /** the column name for the ref_libre field */
    const REF_LIBRE = 'backup_Ordre_Du_Jour_2.ref_libre';

    /** the column name for the id_etape field */
    const ID_ETAPE = 'backup_Ordre_Du_Jour_2.id_etape';

    /** the column name for the intitule_ordre_du_jour field */
    const INTITULE_ORDRE_DU_JOUR = 'backup_Ordre_Du_Jour_2.intitule_ordre_du_jour';

    /** the column name for the lots_odj_libre field */
    const LOTS_ODJ_LIBRE = 'backup_Ordre_Du_Jour_2.lots_odj_libre';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'backup_Ordre_Du_Jour_2.id_type_procedure';

    /** the column name for the type_procedure_libre field */
    const TYPE_PROCEDURE_LIBRE = 'backup_Ordre_Du_Jour_2.type_procedure_libre';

    /** the column name for the date_cloture field */
    const DATE_CLOTURE = 'backup_Ordre_Du_Jour_2.date_cloture';

    /** the column name for the type_env field */
    const TYPE_ENV = 'backup_Ordre_Du_Jour_2.type_env';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'backup_Ordre_Du_Jour_2.sous_pli';

    /** the column name for the heure field */
    const HEURE = 'backup_Ordre_Du_Jour_2.heure';

    /** the column name for the etape_consultation field */
    const ETAPE_CONSULTATION = 'backup_Ordre_Du_Jour_2.etape_consultation';

    /** the column name for the type_consultation field */
    const TYPE_CONSULTATION = 'backup_Ordre_Du_Jour_2.type_consultation';

    /** the column name for the minutes field */
    const MINUTES = 'backup_Ordre_Du_Jour_2.minutes';

    /** the column name for the service field */
    const SERVICE = 'backup_Ordre_Du_Jour_2.service';

    /** the column name for the id_service field */
    const ID_SERVICE = 'backup_Ordre_Du_Jour_2.id_service';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'backup_Ordre_Du_Jour_2.date_debut';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupOrdreDuJour2 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupOrdreDuJour2[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupOrdreDuJour2Peer::$fieldNames[CommonBackupOrdreDuJour2Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdSeance', 'RefConsultation', 'RefLibre', 'IdEtape', 'IntituleOrdreDuJour', 'LotsOdjLibre', 'IdTypeProcedure', 'TypeProcedureLibre', 'DateCloture', 'TypeEnv', 'SousPli', 'Heure', 'EtapeConsultation', 'TypeConsultation', 'Minutes', 'Service', 'IdService', 'DateDebut', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idSeance', 'refConsultation', 'refLibre', 'idEtape', 'intituleOrdreDuJour', 'lotsOdjLibre', 'idTypeProcedure', 'typeProcedureLibre', 'dateCloture', 'typeEnv', 'sousPli', 'heure', 'etapeConsultation', 'typeConsultation', 'minutes', 'service', 'idService', 'dateDebut', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupOrdreDuJour2Peer::ID, CommonBackupOrdreDuJour2Peer::ORGANISME, CommonBackupOrdreDuJour2Peer::ID_SEANCE, CommonBackupOrdreDuJour2Peer::REF_CONSULTATION, CommonBackupOrdreDuJour2Peer::REF_LIBRE, CommonBackupOrdreDuJour2Peer::ID_ETAPE, CommonBackupOrdreDuJour2Peer::INTITULE_ORDRE_DU_JOUR, CommonBackupOrdreDuJour2Peer::LOTS_ODJ_LIBRE, CommonBackupOrdreDuJour2Peer::ID_TYPE_PROCEDURE, CommonBackupOrdreDuJour2Peer::TYPE_PROCEDURE_LIBRE, CommonBackupOrdreDuJour2Peer::DATE_CLOTURE, CommonBackupOrdreDuJour2Peer::TYPE_ENV, CommonBackupOrdreDuJour2Peer::SOUS_PLI, CommonBackupOrdreDuJour2Peer::HEURE, CommonBackupOrdreDuJour2Peer::ETAPE_CONSULTATION, CommonBackupOrdreDuJour2Peer::TYPE_CONSULTATION, CommonBackupOrdreDuJour2Peer::MINUTES, CommonBackupOrdreDuJour2Peer::SERVICE, CommonBackupOrdreDuJour2Peer::ID_SERVICE, CommonBackupOrdreDuJour2Peer::DATE_DEBUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_SEANCE', 'REF_CONSULTATION', 'REF_LIBRE', 'ID_ETAPE', 'INTITULE_ORDRE_DU_JOUR', 'LOTS_ODJ_LIBRE', 'ID_TYPE_PROCEDURE', 'TYPE_PROCEDURE_LIBRE', 'DATE_CLOTURE', 'TYPE_ENV', 'SOUS_PLI', 'HEURE', 'ETAPE_CONSULTATION', 'TYPE_CONSULTATION', 'MINUTES', 'SERVICE', 'ID_SERVICE', 'DATE_DEBUT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_seance', 'ref_consultation', 'ref_libre', 'id_etape', 'intitule_ordre_du_jour', 'lots_odj_libre', 'id_type_procedure', 'type_procedure_libre', 'date_cloture', 'type_env', 'sous_pli', 'heure', 'etape_consultation', 'type_consultation', 'minutes', 'service', 'id_service', 'date_debut', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupOrdreDuJour2Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdSeance' => 2, 'RefConsultation' => 3, 'RefLibre' => 4, 'IdEtape' => 5, 'IntituleOrdreDuJour' => 6, 'LotsOdjLibre' => 7, 'IdTypeProcedure' => 8, 'TypeProcedureLibre' => 9, 'DateCloture' => 10, 'TypeEnv' => 11, 'SousPli' => 12, 'Heure' => 13, 'EtapeConsultation' => 14, 'TypeConsultation' => 15, 'Minutes' => 16, 'Service' => 17, 'IdService' => 18, 'DateDebut' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idSeance' => 2, 'refConsultation' => 3, 'refLibre' => 4, 'idEtape' => 5, 'intituleOrdreDuJour' => 6, 'lotsOdjLibre' => 7, 'idTypeProcedure' => 8, 'typeProcedureLibre' => 9, 'dateCloture' => 10, 'typeEnv' => 11, 'sousPli' => 12, 'heure' => 13, 'etapeConsultation' => 14, 'typeConsultation' => 15, 'minutes' => 16, 'service' => 17, 'idService' => 18, 'dateDebut' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupOrdreDuJour2Peer::ID => 0, CommonBackupOrdreDuJour2Peer::ORGANISME => 1, CommonBackupOrdreDuJour2Peer::ID_SEANCE => 2, CommonBackupOrdreDuJour2Peer::REF_CONSULTATION => 3, CommonBackupOrdreDuJour2Peer::REF_LIBRE => 4, CommonBackupOrdreDuJour2Peer::ID_ETAPE => 5, CommonBackupOrdreDuJour2Peer::INTITULE_ORDRE_DU_JOUR => 6, CommonBackupOrdreDuJour2Peer::LOTS_ODJ_LIBRE => 7, CommonBackupOrdreDuJour2Peer::ID_TYPE_PROCEDURE => 8, CommonBackupOrdreDuJour2Peer::TYPE_PROCEDURE_LIBRE => 9, CommonBackupOrdreDuJour2Peer::DATE_CLOTURE => 10, CommonBackupOrdreDuJour2Peer::TYPE_ENV => 11, CommonBackupOrdreDuJour2Peer::SOUS_PLI => 12, CommonBackupOrdreDuJour2Peer::HEURE => 13, CommonBackupOrdreDuJour2Peer::ETAPE_CONSULTATION => 14, CommonBackupOrdreDuJour2Peer::TYPE_CONSULTATION => 15, CommonBackupOrdreDuJour2Peer::MINUTES => 16, CommonBackupOrdreDuJour2Peer::SERVICE => 17, CommonBackupOrdreDuJour2Peer::ID_SERVICE => 18, CommonBackupOrdreDuJour2Peer::DATE_DEBUT => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_SEANCE' => 2, 'REF_CONSULTATION' => 3, 'REF_LIBRE' => 4, 'ID_ETAPE' => 5, 'INTITULE_ORDRE_DU_JOUR' => 6, 'LOTS_ODJ_LIBRE' => 7, 'ID_TYPE_PROCEDURE' => 8, 'TYPE_PROCEDURE_LIBRE' => 9, 'DATE_CLOTURE' => 10, 'TYPE_ENV' => 11, 'SOUS_PLI' => 12, 'HEURE' => 13, 'ETAPE_CONSULTATION' => 14, 'TYPE_CONSULTATION' => 15, 'MINUTES' => 16, 'SERVICE' => 17, 'ID_SERVICE' => 18, 'DATE_DEBUT' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_seance' => 2, 'ref_consultation' => 3, 'ref_libre' => 4, 'id_etape' => 5, 'intitule_ordre_du_jour' => 6, 'lots_odj_libre' => 7, 'id_type_procedure' => 8, 'type_procedure_libre' => 9, 'date_cloture' => 10, 'type_env' => 11, 'sous_pli' => 12, 'heure' => 13, 'etape_consultation' => 14, 'type_consultation' => 15, 'minutes' => 16, 'service' => 17, 'id_service' => 18, 'date_debut' => 19, ),
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
        $toNames = CommonBackupOrdreDuJour2Peer::getFieldNames($toType);
        $key = isset(CommonBackupOrdreDuJour2Peer::$fieldKeys[$fromType][$name]) ? CommonBackupOrdreDuJour2Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupOrdreDuJour2Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupOrdreDuJour2Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupOrdreDuJour2Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupOrdreDuJour2Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupOrdreDuJour2Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ID);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ID_SEANCE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::REF_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ID_ETAPE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::INTITULE_ORDRE_DU_JOUR);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::LOTS_ODJ_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::TYPE_PROCEDURE_LIBRE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::DATE_CLOTURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::TYPE_ENV);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::SOUS_PLI);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::HEURE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ETAPE_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::TYPE_CONSULTATION);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::MINUTES);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::SERVICE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::ID_SERVICE);
            $criteria->addSelectColumn(CommonBackupOrdreDuJour2Peer::DATE_DEBUT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_seance');
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
        $criteria->setPrimaryTableName(CommonBackupOrdreDuJour2Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupOrdreDuJour2Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupOrdreDuJour2Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupOrdreDuJour2
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupOrdreDuJour2Peer::doSelect($critcopy, $con);
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
        return CommonBackupOrdreDuJour2Peer::populateObjects(CommonBackupOrdreDuJour2Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupOrdreDuJour2Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);

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
     * @param      CommonBackupOrdreDuJour2 $obj A CommonBackupOrdreDuJour2 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBackupOrdreDuJour2Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupOrdreDuJour2 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupOrdreDuJour2) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupOrdreDuJour2 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupOrdreDuJour2Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupOrdreDuJour2 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupOrdreDuJour2Peer::$instances[$key])) {
                return CommonBackupOrdreDuJour2Peer::$instances[$key];
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
        foreach (CommonBackupOrdreDuJour2Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupOrdreDuJour2Peer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Ordre_Du_Jour_2
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
        $cls = CommonBackupOrdreDuJour2Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupOrdreDuJour2Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupOrdreDuJour2Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupOrdreDuJour2Peer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupOrdreDuJour2 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupOrdreDuJour2Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupOrdreDuJour2Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupOrdreDuJour2Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupOrdreDuJour2Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupOrdreDuJour2Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupOrdreDuJour2Peer::DATABASE_NAME)->getTable(CommonBackupOrdreDuJour2Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupOrdreDuJour2Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupOrdreDuJour2Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupOrdreDuJour2TableMap());
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
        return CommonBackupOrdreDuJour2Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupOrdreDuJour2 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour2 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupOrdreDuJour2 object
        }

        if ($criteria->containsKey(CommonBackupOrdreDuJour2Peer::ID) && $criteria->keyContainsValue(CommonBackupOrdreDuJour2Peer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBackupOrdreDuJour2Peer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupOrdreDuJour2 or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour2 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupOrdreDuJour2Peer::ID);
            $value = $criteria->remove(CommonBackupOrdreDuJour2Peer::ID);
            if ($value) {
                $selectCriteria->add(CommonBackupOrdreDuJour2Peer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupOrdreDuJour2Peer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupOrdreDuJour2Peer::ORGANISME);
            $value = $criteria->remove(CommonBackupOrdreDuJour2Peer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupOrdreDuJour2Peer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupOrdreDuJour2Peer::TABLE_NAME);
            }

        } else { // $values is CommonBackupOrdreDuJour2 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Ordre_Du_Jour_2 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupOrdreDuJour2Peer::TABLE_NAME, $con, CommonBackupOrdreDuJour2Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupOrdreDuJour2Peer::clearInstancePool();
            CommonBackupOrdreDuJour2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupOrdreDuJour2 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupOrdreDuJour2 object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupOrdreDuJour2Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupOrdreDuJour2) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupOrdreDuJour2Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupOrdreDuJour2Peer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupOrdreDuJour2Peer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupOrdreDuJour2Peer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupOrdreDuJour2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupOrdreDuJour2 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupOrdreDuJour2 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupOrdreDuJour2Peer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, CommonBackupOrdreDuJour2Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBackupOrdreDuJour2
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonBackupOrdreDuJour2Peer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJour2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupOrdreDuJour2Peer::DATABASE_NAME);
        $criteria->add(CommonBackupOrdreDuJour2Peer::ID, $id);
        $criteria->add(CommonBackupOrdreDuJour2Peer::ORGANISME, $organisme);
        $v = CommonBackupOrdreDuJour2Peer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupOrdreDuJour2Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupOrdreDuJour2Peer::buildTableMap();

