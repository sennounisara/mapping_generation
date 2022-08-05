<?php


/**
 * Base static class for performing query and update operations on the 'AVIS' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAVISPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AVIS';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAVIS';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAVISTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 'AVIS.id';

    /** the column name for the organisme field */
    const ORGANISME = 'AVIS.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'AVIS.consultation_ref';

    /** the column name for the avis field */
    const AVIS = 'AVIS.avis';

    /** the column name for the intitule_avis field */
    const INTITULE_AVIS = 'AVIS.intitule_avis';

    /** the column name for the nom_avis field */
    const NOM_AVIS = 'AVIS.nom_avis';

    /** the column name for the statut field */
    const STATUT = 'AVIS.statut';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'AVIS.nom_fichier';

    /** the column name for the horodatage field */
    const HORODATAGE = 'AVIS.horodatage';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 'AVIS.untrusteddate';

    /** the column name for the agent_id field */
    const AGENT_ID = 'AVIS.agent_id';

    /** the column name for the avis_telechargeable field */
    const AVIS_TELECHARGEABLE = 'AVIS.avis_telechargeable';

    /** the column name for the url field */
    const URL = 'AVIS.url';

    /** the column name for the type field */
    const TYPE = 'AVIS.type';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'AVIS.date_creation';

    /** the column name for the date_pub field */
    const DATE_PUB = 'AVIS.date_pub';

    /** the column name for the type_doc_genere field */
    const TYPE_DOC_GENERE = 'AVIS.type_doc_genere';

    /** the column name for the langue field */
    const LANGUE = 'AVIS.langue';

    /** the column name for the type_avis_pub field */
    const TYPE_AVIS_PUB = 'AVIS.type_avis_pub';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAVIS objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAVIS[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAVISPeer::$fieldNames[CommonAVISPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'Avis', 'IntituleAvis', 'NomAvis', 'Statut', 'NomFichier', 'Horodatage', 'Untrusteddate', 'AgentId', 'AvisTelechargeable', 'Url', 'Type', 'DateCreation', 'DatePub', 'TypeDocGenere', 'Langue', 'TypeAvisPub', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'avis', 'intituleAvis', 'nomAvis', 'statut', 'nomFichier', 'horodatage', 'untrusteddate', 'agentId', 'avisTelechargeable', 'url', 'type', 'dateCreation', 'datePub', 'typeDocGenere', 'langue', 'typeAvisPub', ),
        BasePeer::TYPE_COLNAME => array (CommonAVISPeer::ID, CommonAVISPeer::ORGANISME, CommonAVISPeer::CONSULTATION_REF, CommonAVISPeer::AVIS, CommonAVISPeer::INTITULE_AVIS, CommonAVISPeer::NOM_AVIS, CommonAVISPeer::STATUT, CommonAVISPeer::NOM_FICHIER, CommonAVISPeer::HORODATAGE, CommonAVISPeer::UNTRUSTEDDATE, CommonAVISPeer::AGENT_ID, CommonAVISPeer::AVIS_TELECHARGEABLE, CommonAVISPeer::URL, CommonAVISPeer::TYPE, CommonAVISPeer::DATE_CREATION, CommonAVISPeer::DATE_PUB, CommonAVISPeer::TYPE_DOC_GENERE, CommonAVISPeer::LANGUE, CommonAVISPeer::TYPE_AVIS_PUB, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'AVIS', 'INTITULE_AVIS', 'NOM_AVIS', 'STATUT', 'NOM_FICHIER', 'HORODATAGE', 'UNTRUSTEDDATE', 'AGENT_ID', 'AVIS_TELECHARGEABLE', 'URL', 'TYPE', 'DATE_CREATION', 'DATE_PUB', 'TYPE_DOC_GENERE', 'LANGUE', 'TYPE_AVIS_PUB', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'avis', 'intitule_avis', 'nom_avis', 'statut', 'nom_fichier', 'horodatage', 'untrusteddate', 'agent_id', 'avis_telechargeable', 'url', 'type', 'date_creation', 'date_pub', 'type_doc_genere', 'langue', 'type_avis_pub', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAVISPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'Avis' => 3, 'IntituleAvis' => 4, 'NomAvis' => 5, 'Statut' => 6, 'NomFichier' => 7, 'Horodatage' => 8, 'Untrusteddate' => 9, 'AgentId' => 10, 'AvisTelechargeable' => 11, 'Url' => 12, 'Type' => 13, 'DateCreation' => 14, 'DatePub' => 15, 'TypeDocGenere' => 16, 'Langue' => 17, 'TypeAvisPub' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'avis' => 3, 'intituleAvis' => 4, 'nomAvis' => 5, 'statut' => 6, 'nomFichier' => 7, 'horodatage' => 8, 'untrusteddate' => 9, 'agentId' => 10, 'avisTelechargeable' => 11, 'url' => 12, 'type' => 13, 'dateCreation' => 14, 'datePub' => 15, 'typeDocGenere' => 16, 'langue' => 17, 'typeAvisPub' => 18, ),
        BasePeer::TYPE_COLNAME => array (CommonAVISPeer::ID => 0, CommonAVISPeer::ORGANISME => 1, CommonAVISPeer::CONSULTATION_REF => 2, CommonAVISPeer::AVIS => 3, CommonAVISPeer::INTITULE_AVIS => 4, CommonAVISPeer::NOM_AVIS => 5, CommonAVISPeer::STATUT => 6, CommonAVISPeer::NOM_FICHIER => 7, CommonAVISPeer::HORODATAGE => 8, CommonAVISPeer::UNTRUSTEDDATE => 9, CommonAVISPeer::AGENT_ID => 10, CommonAVISPeer::AVIS_TELECHARGEABLE => 11, CommonAVISPeer::URL => 12, CommonAVISPeer::TYPE => 13, CommonAVISPeer::DATE_CREATION => 14, CommonAVISPeer::DATE_PUB => 15, CommonAVISPeer::TYPE_DOC_GENERE => 16, CommonAVISPeer::LANGUE => 17, CommonAVISPeer::TYPE_AVIS_PUB => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'AVIS' => 3, 'INTITULE_AVIS' => 4, 'NOM_AVIS' => 5, 'STATUT' => 6, 'NOM_FICHIER' => 7, 'HORODATAGE' => 8, 'UNTRUSTEDDATE' => 9, 'AGENT_ID' => 10, 'AVIS_TELECHARGEABLE' => 11, 'URL' => 12, 'TYPE' => 13, 'DATE_CREATION' => 14, 'DATE_PUB' => 15, 'TYPE_DOC_GENERE' => 16, 'LANGUE' => 17, 'TYPE_AVIS_PUB' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'avis' => 3, 'intitule_avis' => 4, 'nom_avis' => 5, 'statut' => 6, 'nom_fichier' => 7, 'horodatage' => 8, 'untrusteddate' => 9, 'agent_id' => 10, 'avis_telechargeable' => 11, 'url' => 12, 'type' => 13, 'date_creation' => 14, 'date_pub' => 15, 'type_doc_genere' => 16, 'langue' => 17, 'type_avis_pub' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = CommonAVISPeer::getFieldNames($toType);
        $key = isset(CommonAVISPeer::$fieldKeys[$fromType][$name]) ? CommonAVISPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAVISPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAVISPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAVISPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAVISPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAVISPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAVISPeer::ID);
            $criteria->addSelectColumn(CommonAVISPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAVISPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAVISPeer::AVIS);
            $criteria->addSelectColumn(CommonAVISPeer::INTITULE_AVIS);
            $criteria->addSelectColumn(CommonAVISPeer::NOM_AVIS);
            $criteria->addSelectColumn(CommonAVISPeer::STATUT);
            $criteria->addSelectColumn(CommonAVISPeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonAVISPeer::HORODATAGE);
            $criteria->addSelectColumn(CommonAVISPeer::UNTRUSTEDDATE);
            $criteria->addSelectColumn(CommonAVISPeer::AGENT_ID);
            $criteria->addSelectColumn(CommonAVISPeer::AVIS_TELECHARGEABLE);
            $criteria->addSelectColumn(CommonAVISPeer::URL);
            $criteria->addSelectColumn(CommonAVISPeer::TYPE);
            $criteria->addSelectColumn(CommonAVISPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAVISPeer::DATE_PUB);
            $criteria->addSelectColumn(CommonAVISPeer::TYPE_DOC_GENERE);
            $criteria->addSelectColumn(CommonAVISPeer::LANGUE);
            $criteria->addSelectColumn(CommonAVISPeer::TYPE_AVIS_PUB);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.avis');
            $criteria->addSelectColumn($alias . '.intitule_avis');
            $criteria->addSelectColumn($alias . '.nom_avis');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusteddate');
            $criteria->addSelectColumn($alias . '.agent_id');
            $criteria->addSelectColumn($alias . '.avis_telechargeable');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_pub');
            $criteria->addSelectColumn($alias . '.type_doc_genere');
            $criteria->addSelectColumn($alias . '.langue');
            $criteria->addSelectColumn($alias . '.type_avis_pub');
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
        $criteria->setPrimaryTableName(CommonAVISPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAVISPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAVIS
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAVISPeer::doSelect($critcopy, $con);
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
        return CommonAVISPeer::populateObjects(CommonAVISPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAVISPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

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
     * @param      CommonAVIS $obj A CommonAVIS object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAVISPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAVIS object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAVIS) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAVIS object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAVISPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAVIS Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAVISPeer::$instances[$key])) {
                return CommonAVISPeer::$instances[$key];
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
        foreach (CommonAVISPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAVISPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AVIS
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
        $cls = CommonAVISPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAVISPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAVISPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAVISPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAVIS object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAVISPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAVISPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAVISPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAVISPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAVISPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonAVISPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAVISPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAVISPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAVISPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonAVIS objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAVIS objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);
        }

        CommonAVISPeer::addSelectColumns($criteria);
        $startcol = CommonAVISPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonAVISPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAVISPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAVISPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAVISPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAVISPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAVISPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAVIS) to $obj2 (CommonConsultation)
                $obj2->addCommonAVIS($obj1);

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
        $criteria->setPrimaryTableName(CommonAVISPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAVISPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAVISPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAVISPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonAVIS objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAVIS objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);
        }

        CommonAVISPeer::addSelectColumns($criteria);
        $startcol2 = CommonAVISPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonAVISPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAVISPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAVISPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAVISPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAVISPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAVISPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAVIS) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonAVIS($obj1);
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
        return Propel::getDatabaseMap(CommonAVISPeer::DATABASE_NAME)->getTable(CommonAVISPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAVISPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAVISPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAVISTableMap());
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
        return CommonAVISPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAVIS or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAVIS object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAVIS object
        }

        if ($criteria->containsKey(CommonAVISPeer::ID) && $criteria->keyContainsValue(CommonAVISPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAVISPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAVIS or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAVIS object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAVISPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAVISPeer::ID);
            $value = $criteria->remove(CommonAVISPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAVISPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAVISPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAVISPeer::ORGANISME);
            $value = $criteria->remove(CommonAVISPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAVISPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAVISPeer::TABLE_NAME);
            }

        } else { // $values is CommonAVIS object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AVIS table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAVISPeer::TABLE_NAME, $con, CommonAVISPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAVISPeer::clearInstancePool();
            CommonAVISPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAVIS or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAVIS object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAVISPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAVIS) { // it's a model object
            // invalidate the cache for this single object
            CommonAVISPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAVISPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAVISPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAVISPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAVISPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAVISPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAVISPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAVIS object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAVIS $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAVISPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAVISPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAVISPeer::DATABASE_NAME, CommonAVISPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAVIS
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAVISPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAVISPeer::DATABASE_NAME);
        $criteria->add(CommonAVISPeer::ID, $id);
        $criteria->add(CommonAVISPeer::ORGANISME, $organisme);
        $v = CommonAVISPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAVISPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAVISPeer::buildTableMap();

