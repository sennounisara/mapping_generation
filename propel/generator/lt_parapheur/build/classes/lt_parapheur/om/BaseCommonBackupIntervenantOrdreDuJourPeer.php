<?php


/**
 * Base static class for performing query and update operations on the 'backup_Intervenant_Ordre_Du_Jour' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupIntervenantOrdreDuJourPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'backup_Intervenant_Ordre_Du_Jour';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonBackupIntervenantOrdreDuJour';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonBackupIntervenantOrdreDuJourTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'backup_Intervenant_Ordre_Du_Jour.id';

    /** the column name for the organisme field */
    const ORGANISME = 'backup_Intervenant_Ordre_Du_Jour.organisme';

    /** the column name for the id_ordre_du_jour field */
    const ID_ORDRE_DU_JOUR = 'backup_Intervenant_Ordre_Du_Jour.id_ordre_du_jour';

    /** the column name for the id_intervenant field */
    const ID_INTERVENANT = 'backup_Intervenant_Ordre_Du_Jour.id_intervenant';

    /** the column name for the id_agent field */
    const ID_AGENT = 'backup_Intervenant_Ordre_Du_Jour.id_agent';

    /** the column name for the convocation field */
    const CONVOCATION = 'backup_Intervenant_Ordre_Du_Jour.convocation';

    /** the column name for the convoc_send field */
    const CONVOC_SEND = 'backup_Intervenant_Ordre_Du_Jour.convoc_send';

    /** the column name for the nom_convoc field */
    const NOM_CONVOC = 'backup_Intervenant_Ordre_Du_Jour.nom_convoc';

    /** the column name for the contenu_envoi field */
    const CONTENU_ENVOI = 'backup_Intervenant_Ordre_Du_Jour.contenu_envoi';

    /** the column name for the nom_fichier_envoye field */
    const NOM_FICHIER_ENVOYE = 'backup_Intervenant_Ordre_Du_Jour.nom_fichier_envoye';

    /** the column name for the fichier_envoye field */
    const FICHIER_ENVOYE = 'backup_Intervenant_Ordre_Du_Jour.fichier_envoye';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'backup_Intervenant_Ordre_Du_Jour.date_envoi';

    /** the column name for the type_voix field */
    const TYPE_VOIX = 'backup_Intervenant_Ordre_Du_Jour.type_voix';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonBackupIntervenantOrdreDuJour objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonBackupIntervenantOrdreDuJour[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupIntervenantOrdreDuJourPeer::$fieldNames[CommonBackupIntervenantOrdreDuJourPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdOrdreDuJour', 'IdIntervenant', 'IdAgent', 'Convocation', 'ConvocSend', 'NomConvoc', 'ContenuEnvoi', 'NomFichierEnvoye', 'FichierEnvoye', 'DateEnvoi', 'TypeVoix', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idOrdreDuJour', 'idIntervenant', 'idAgent', 'convocation', 'convocSend', 'nomConvoc', 'contenuEnvoi', 'nomFichierEnvoye', 'fichierEnvoye', 'dateEnvoi', 'typeVoix', ),
        BasePeer::TYPE_COLNAME => array (CommonBackupIntervenantOrdreDuJourPeer::ID, CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR, CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT, CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT, CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION, CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND, CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC, CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI, CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE, CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE, CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI, CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_ORDRE_DU_JOUR', 'ID_INTERVENANT', 'ID_AGENT', 'CONVOCATION', 'CONVOC_SEND', 'NOM_CONVOC', 'CONTENU_ENVOI', 'NOM_FICHIER_ENVOYE', 'FICHIER_ENVOYE', 'DATE_ENVOI', 'TYPE_VOIX', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_ordre_du_jour', 'id_intervenant', 'id_agent', 'convocation', 'convoc_send', 'nom_convoc', 'contenu_envoi', 'nom_fichier_envoye', 'fichier_envoye', 'date_envoi', 'type_voix', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonBackupIntervenantOrdreDuJourPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdOrdreDuJour' => 2, 'IdIntervenant' => 3, 'IdAgent' => 4, 'Convocation' => 5, 'ConvocSend' => 6, 'NomConvoc' => 7, 'ContenuEnvoi' => 8, 'NomFichierEnvoye' => 9, 'FichierEnvoye' => 10, 'DateEnvoi' => 11, 'TypeVoix' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idOrdreDuJour' => 2, 'idIntervenant' => 3, 'idAgent' => 4, 'convocation' => 5, 'convocSend' => 6, 'nomConvoc' => 7, 'contenuEnvoi' => 8, 'nomFichierEnvoye' => 9, 'fichierEnvoye' => 10, 'dateEnvoi' => 11, 'typeVoix' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonBackupIntervenantOrdreDuJourPeer::ID => 0, CommonBackupIntervenantOrdreDuJourPeer::ORGANISME => 1, CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR => 2, CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT => 3, CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT => 4, CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION => 5, CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND => 6, CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC => 7, CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI => 8, CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE => 9, CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE => 10, CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI => 11, CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_ORDRE_DU_JOUR' => 2, 'ID_INTERVENANT' => 3, 'ID_AGENT' => 4, 'CONVOCATION' => 5, 'CONVOC_SEND' => 6, 'NOM_CONVOC' => 7, 'CONTENU_ENVOI' => 8, 'NOM_FICHIER_ENVOYE' => 9, 'FICHIER_ENVOYE' => 10, 'DATE_ENVOI' => 11, 'TYPE_VOIX' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_ordre_du_jour' => 2, 'id_intervenant' => 3, 'id_agent' => 4, 'convocation' => 5, 'convoc_send' => 6, 'nom_convoc' => 7, 'contenu_envoi' => 8, 'nom_fichier_envoye' => 9, 'fichier_envoye' => 10, 'date_envoi' => 11, 'type_voix' => 12, ),
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
        $toNames = CommonBackupIntervenantOrdreDuJourPeer::getFieldNames($toType);
        $key = isset(CommonBackupIntervenantOrdreDuJourPeer::$fieldKeys[$fromType][$name]) ? CommonBackupIntervenantOrdreDuJourPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonBackupIntervenantOrdreDuJourPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonBackupIntervenantOrdreDuJourPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonBackupIntervenantOrdreDuJourPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonBackupIntervenantOrdreDuJourPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::ID);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_ordre_du_jour');
            $criteria->addSelectColumn($alias . '.id_intervenant');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.convocation');
            $criteria->addSelectColumn($alias . '.convoc_send');
            $criteria->addSelectColumn($alias . '.nom_convoc');
            $criteria->addSelectColumn($alias . '.contenu_envoi');
            $criteria->addSelectColumn($alias . '.nom_fichier_envoye');
            $criteria->addSelectColumn($alias . '.fichier_envoye');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.type_voix');
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
        $criteria->setPrimaryTableName(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonBackupIntervenantOrdreDuJourPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupIntervenantOrdreDuJour
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonBackupIntervenantOrdreDuJourPeer::doSelect($critcopy, $con);
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
        return CommonBackupIntervenantOrdreDuJourPeer::populateObjects(CommonBackupIntervenantOrdreDuJourPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonBackupIntervenantOrdreDuJourPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

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
     * @param      CommonBackupIntervenantOrdreDuJour $obj A CommonBackupIntervenantOrdreDuJour object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonBackupIntervenantOrdreDuJourPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonBackupIntervenantOrdreDuJour object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonBackupIntervenantOrdreDuJour) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonBackupIntervenantOrdreDuJour object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonBackupIntervenantOrdreDuJourPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonBackupIntervenantOrdreDuJour Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonBackupIntervenantOrdreDuJourPeer::$instances[$key])) {
                return CommonBackupIntervenantOrdreDuJourPeer::$instances[$key];
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
        foreach (CommonBackupIntervenantOrdreDuJourPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonBackupIntervenantOrdreDuJourPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to backup_Intervenant_Ordre_Du_Jour
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
        $cls = CommonBackupIntervenantOrdreDuJourPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonBackupIntervenantOrdreDuJourPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonBackupIntervenantOrdreDuJourPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonBackupIntervenantOrdreDuJourPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonBackupIntervenantOrdreDuJour object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonBackupIntervenantOrdreDuJourPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonBackupIntervenantOrdreDuJourPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonBackupIntervenantOrdreDuJourPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonBackupIntervenantOrdreDuJourPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonBackupIntervenantOrdreDuJourPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME)->getTable(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonBackupIntervenantOrdreDuJourTableMap());
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
        return CommonBackupIntervenantOrdreDuJourPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonBackupIntervenantOrdreDuJour or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantOrdreDuJour object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonBackupIntervenantOrdreDuJour object
        }

        if ($criteria->containsKey(CommonBackupIntervenantOrdreDuJourPeer::ID) && $criteria->keyContainsValue(CommonBackupIntervenantOrdreDuJourPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonBackupIntervenantOrdreDuJourPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonBackupIntervenantOrdreDuJour or Criteria object.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantOrdreDuJour object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonBackupIntervenantOrdreDuJourPeer::ID);
            $value = $criteria->remove(CommonBackupIntervenantOrdreDuJourPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME);
            $value = $criteria->remove(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME);
            }

        } else { // $values is CommonBackupIntervenantOrdreDuJour object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the backup_Intervenant_Ordre_Du_Jour table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME, $con, CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonBackupIntervenantOrdreDuJourPeer::clearInstancePool();
            CommonBackupIntervenantOrdreDuJourPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonBackupIntervenantOrdreDuJour or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonBackupIntervenantOrdreDuJour object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonBackupIntervenantOrdreDuJourPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonBackupIntervenantOrdreDuJour) { // it's a model object
            // invalidate the cache for this single object
            CommonBackupIntervenantOrdreDuJourPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonBackupIntervenantOrdreDuJourPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonBackupIntervenantOrdreDuJourPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonBackupIntervenantOrdreDuJourPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonBackupIntervenantOrdreDuJour object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonBackupIntervenantOrdreDuJour $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, CommonBackupIntervenantOrdreDuJourPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonBackupIntervenantOrdreDuJour
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonBackupIntervenantOrdreDuJourPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
        $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID, $id);
        $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $organisme);
        $v = CommonBackupIntervenantOrdreDuJourPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonBackupIntervenantOrdreDuJourPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonBackupIntervenantOrdreDuJourPeer::buildTableMap();

