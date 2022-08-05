<?php


/**
 * Base static class for performing query and update operations on the 'Avis_Pub' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAvisPubPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Avis_Pub';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAvisPub';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAvisPubTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the id field */
    const ID = 'Avis_Pub.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Avis_Pub.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Avis_Pub.consultation_ref';

    /** the column name for the statut field */
    const STATUT = 'Avis_Pub.statut';

    /** the column name for the id_agent field */
    const ID_AGENT = 'Avis_Pub.id_agent';

    /** the column name for the id_agent_validateur field */
    const ID_AGENT_VALIDATEUR = 'Avis_Pub.id_agent_validateur';

    /** the column name for the id_agent_validateur_eco field */
    const ID_AGENT_VALIDATEUR_ECO = 'Avis_Pub.id_agent_validateur_eco';

    /** the column name for the id_agent_validateur_sip field */
    const ID_AGENT_VALIDATEUR_SIP = 'Avis_Pub.id_agent_validateur_sip';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Avis_Pub.date_creation';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'Avis_Pub.date_envoi';

    /** the column name for the type_avis field */
    const TYPE_AVIS = 'Avis_Pub.type_avis';

    /** the column name for the date_publication field */
    const DATE_PUBLICATION = 'Avis_Pub.date_publication';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'Avis_Pub.date_validation';

    /** the column name for the Sip field */
    const SIP = 'Avis_Pub.Sip';

    /** the column name for the id_avis_portail field */
    const ID_AVIS_PORTAIL = 'Avis_Pub.id_avis_portail';

    /** the column name for the id_avis_presse field */
    const ID_AVIS_PRESSE = 'Avis_Pub.id_avis_presse';

    /** the column name for the id_avis_pdf_opoce field */
    const ID_AVIS_PDF_OPOCE = 'Avis_Pub.id_avis_pdf_opoce';

    /** the column name for the id_blob_logo field */
    const ID_BLOB_LOGO = 'Avis_Pub.id_blob_logo';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAvisPub objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAvisPub[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAvisPubPeer::$fieldNames[CommonAvisPubPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'Statut', 'IdAgent', 'IdAgentValidateur', 'IdAgentValidateurEco', 'IdAgentValidateurSip', 'DateCreation', 'DateEnvoi', 'TypeAvis', 'DatePublication', 'DateValidation', 'Sip', 'IdAvisPortail', 'IdAvisPresse', 'IdAvisPdfOpoce', 'IdBlobLogo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'statut', 'idAgent', 'idAgentValidateur', 'idAgentValidateurEco', 'idAgentValidateurSip', 'dateCreation', 'dateEnvoi', 'typeAvis', 'datePublication', 'dateValidation', 'sip', 'idAvisPortail', 'idAvisPresse', 'idAvisPdfOpoce', 'idBlobLogo', ),
        BasePeer::TYPE_COLNAME => array (CommonAvisPubPeer::ID, CommonAvisPubPeer::ORGANISME, CommonAvisPubPeer::CONSULTATION_REF, CommonAvisPubPeer::STATUT, CommonAvisPubPeer::ID_AGENT, CommonAvisPubPeer::ID_AGENT_VALIDATEUR, CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO, CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP, CommonAvisPubPeer::DATE_CREATION, CommonAvisPubPeer::DATE_ENVOI, CommonAvisPubPeer::TYPE_AVIS, CommonAvisPubPeer::DATE_PUBLICATION, CommonAvisPubPeer::DATE_VALIDATION, CommonAvisPubPeer::SIP, CommonAvisPubPeer::ID_AVIS_PORTAIL, CommonAvisPubPeer::ID_AVIS_PRESSE, CommonAvisPubPeer::ID_AVIS_PDF_OPOCE, CommonAvisPubPeer::ID_BLOB_LOGO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'STATUT', 'ID_AGENT', 'ID_AGENT_VALIDATEUR', 'ID_AGENT_VALIDATEUR_ECO', 'ID_AGENT_VALIDATEUR_SIP', 'DATE_CREATION', 'DATE_ENVOI', 'TYPE_AVIS', 'DATE_PUBLICATION', 'DATE_VALIDATION', 'SIP', 'ID_AVIS_PORTAIL', 'ID_AVIS_PRESSE', 'ID_AVIS_PDF_OPOCE', 'ID_BLOB_LOGO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'statut', 'id_agent', 'id_agent_validateur', 'id_agent_validateur_eco', 'id_agent_validateur_sip', 'date_creation', 'date_envoi', 'type_avis', 'date_publication', 'date_validation', 'Sip', 'id_avis_portail', 'id_avis_presse', 'id_avis_pdf_opoce', 'id_blob_logo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAvisPubPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'Statut' => 3, 'IdAgent' => 4, 'IdAgentValidateur' => 5, 'IdAgentValidateurEco' => 6, 'IdAgentValidateurSip' => 7, 'DateCreation' => 8, 'DateEnvoi' => 9, 'TypeAvis' => 10, 'DatePublication' => 11, 'DateValidation' => 12, 'Sip' => 13, 'IdAvisPortail' => 14, 'IdAvisPresse' => 15, 'IdAvisPdfOpoce' => 16, 'IdBlobLogo' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'statut' => 3, 'idAgent' => 4, 'idAgentValidateur' => 5, 'idAgentValidateurEco' => 6, 'idAgentValidateurSip' => 7, 'dateCreation' => 8, 'dateEnvoi' => 9, 'typeAvis' => 10, 'datePublication' => 11, 'dateValidation' => 12, 'sip' => 13, 'idAvisPortail' => 14, 'idAvisPresse' => 15, 'idAvisPdfOpoce' => 16, 'idBlobLogo' => 17, ),
        BasePeer::TYPE_COLNAME => array (CommonAvisPubPeer::ID => 0, CommonAvisPubPeer::ORGANISME => 1, CommonAvisPubPeer::CONSULTATION_REF => 2, CommonAvisPubPeer::STATUT => 3, CommonAvisPubPeer::ID_AGENT => 4, CommonAvisPubPeer::ID_AGENT_VALIDATEUR => 5, CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO => 6, CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP => 7, CommonAvisPubPeer::DATE_CREATION => 8, CommonAvisPubPeer::DATE_ENVOI => 9, CommonAvisPubPeer::TYPE_AVIS => 10, CommonAvisPubPeer::DATE_PUBLICATION => 11, CommonAvisPubPeer::DATE_VALIDATION => 12, CommonAvisPubPeer::SIP => 13, CommonAvisPubPeer::ID_AVIS_PORTAIL => 14, CommonAvisPubPeer::ID_AVIS_PRESSE => 15, CommonAvisPubPeer::ID_AVIS_PDF_OPOCE => 16, CommonAvisPubPeer::ID_BLOB_LOGO => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'STATUT' => 3, 'ID_AGENT' => 4, 'ID_AGENT_VALIDATEUR' => 5, 'ID_AGENT_VALIDATEUR_ECO' => 6, 'ID_AGENT_VALIDATEUR_SIP' => 7, 'DATE_CREATION' => 8, 'DATE_ENVOI' => 9, 'TYPE_AVIS' => 10, 'DATE_PUBLICATION' => 11, 'DATE_VALIDATION' => 12, 'SIP' => 13, 'ID_AVIS_PORTAIL' => 14, 'ID_AVIS_PRESSE' => 15, 'ID_AVIS_PDF_OPOCE' => 16, 'ID_BLOB_LOGO' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'statut' => 3, 'id_agent' => 4, 'id_agent_validateur' => 5, 'id_agent_validateur_eco' => 6, 'id_agent_validateur_sip' => 7, 'date_creation' => 8, 'date_envoi' => 9, 'type_avis' => 10, 'date_publication' => 11, 'date_validation' => 12, 'Sip' => 13, 'id_avis_portail' => 14, 'id_avis_presse' => 15, 'id_avis_pdf_opoce' => 16, 'id_blob_logo' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $toNames = CommonAvisPubPeer::getFieldNames($toType);
        $key = isset(CommonAvisPubPeer::$fieldKeys[$fromType][$name]) ? CommonAvisPubPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAvisPubPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAvisPubPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAvisPubPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAvisPubPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAvisPubPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAvisPubPeer::ID);
            $criteria->addSelectColumn(CommonAvisPubPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAvisPubPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAvisPubPeer::STATUT);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AGENT_VALIDATEUR);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP);
            $criteria->addSelectColumn(CommonAvisPubPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAvisPubPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonAvisPubPeer::TYPE_AVIS);
            $criteria->addSelectColumn(CommonAvisPubPeer::DATE_PUBLICATION);
            $criteria->addSelectColumn(CommonAvisPubPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonAvisPubPeer::SIP);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AVIS_PORTAIL);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AVIS_PRESSE);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE);
            $criteria->addSelectColumn(CommonAvisPubPeer::ID_BLOB_LOGO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.id_agent_validateur');
            $criteria->addSelectColumn($alias . '.id_agent_validateur_eco');
            $criteria->addSelectColumn($alias . '.id_agent_validateur_sip');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.type_avis');
            $criteria->addSelectColumn($alias . '.date_publication');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.Sip');
            $criteria->addSelectColumn($alias . '.id_avis_portail');
            $criteria->addSelectColumn($alias . '.id_avis_presse');
            $criteria->addSelectColumn($alias . '.id_avis_pdf_opoce');
            $criteria->addSelectColumn($alias . '.id_blob_logo');
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
        $criteria->setPrimaryTableName(CommonAvisPubPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAvisPubPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAvisPub
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAvisPubPeer::doSelect($critcopy, $con);
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
        return CommonAvisPubPeer::populateObjects(CommonAvisPubPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAvisPubPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

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
     * @param      CommonAvisPub $obj A CommonAvisPub object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAvisPubPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAvisPub object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAvisPub) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAvisPub object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAvisPubPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAvisPub Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAvisPubPeer::$instances[$key])) {
                return CommonAvisPubPeer::$instances[$key];
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
        foreach (CommonAvisPubPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAvisPubPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Avis_Pub
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
        $cls = CommonAvisPubPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAvisPubPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAvisPubPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAvisPubPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAvisPub object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAvisPubPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAvisPubPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAvisPubPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAvisPubPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAvisPubPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonAvisPubPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAvisPubPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAvisPubPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAvisPubPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonAvisPub objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAvisPub objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);
        }

        CommonAvisPubPeer::addSelectColumns($criteria);
        $startcol = CommonAvisPubPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonAvisPubPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAvisPubPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAvisPubPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAvisPubPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAvisPubPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAvisPubPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAvisPub) to $obj2 (CommonConsultation)
                $obj2->addCommonAvisPub($obj1);

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
        $criteria->setPrimaryTableName(CommonAvisPubPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAvisPubPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAvisPubPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAvisPubPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonAvisPub objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAvisPub objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);
        }

        CommonAvisPubPeer::addSelectColumns($criteria);
        $startcol2 = CommonAvisPubPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonAvisPubPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAvisPubPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAvisPubPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAvisPubPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAvisPubPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAvisPubPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAvisPub) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonAvisPub($obj1);
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
        return Propel::getDatabaseMap(CommonAvisPubPeer::DATABASE_NAME)->getTable(CommonAvisPubPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAvisPubPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAvisPubPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAvisPubTableMap());
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
        return CommonAvisPubPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAvisPub or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAvisPub object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAvisPub object
        }

        if ($criteria->containsKey(CommonAvisPubPeer::ID) && $criteria->keyContainsValue(CommonAvisPubPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAvisPubPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAvisPub or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAvisPub object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAvisPubPeer::ID);
            $value = $criteria->remove(CommonAvisPubPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAvisPubPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAvisPubPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAvisPubPeer::ORGANISME);
            $value = $criteria->remove(CommonAvisPubPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAvisPubPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAvisPubPeer::TABLE_NAME);
            }

        } else { // $values is CommonAvisPub object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Avis_Pub table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAvisPubPeer::TABLE_NAME, $con, CommonAvisPubPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAvisPubPeer::clearInstancePool();
            CommonAvisPubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAvisPub or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAvisPub object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAvisPubPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAvisPub) { // it's a model object
            // invalidate the cache for this single object
            CommonAvisPubPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAvisPubPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAvisPubPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAvisPubPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAvisPubPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAvisPubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAvisPub object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAvisPub $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAvisPubPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAvisPubPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAvisPubPeer::DATABASE_NAME, CommonAvisPubPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAvisPub
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAvisPubPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);
        $criteria->add(CommonAvisPubPeer::ID, $id);
        $criteria->add(CommonAvisPubPeer::ORGANISME, $organisme);
        $v = CommonAvisPubPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAvisPubPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAvisPubPeer::buildTableMap();

