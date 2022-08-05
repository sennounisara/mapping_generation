<?php


/**
 * Base static class for performing query and update operations on the 'Newsletter' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonNewsletterPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Newsletter';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonNewsletter';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonNewsletterTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the id field */
    const ID = 'Newsletter.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Newsletter.organisme';

    /** the column name for the objet field */
    const OBJET = 'Newsletter.objet';

    /** the column name for the corps field */
    const CORPS = 'Newsletter.corps';

    /** the column name for the id_service_redacteur field */
    const ID_SERVICE_REDACTEUR = 'Newsletter.id_service_redacteur';

    /** the column name for the nom_redacteur field */
    const NOM_REDACTEUR = 'Newsletter.nom_redacteur';

    /** the column name for the prenom_redacteur field */
    const PRENOM_REDACTEUR = 'Newsletter.prenom_redacteur';

    /** the column name for the envoye_par_nom field */
    const ENVOYE_PAR_NOM = 'Newsletter.envoye_par_nom';

    /** the column name for the envoye_par_prenom field */
    const ENVOYE_PAR_PRENOM = 'Newsletter.envoye_par_prenom';

    /** the column name for the envoye_par_email field */
    const ENVOYE_PAR_EMAIL = 'Newsletter.envoye_par_email';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Newsletter.date_creation';

    /** the column name for the date_derniere_modification field */
    const DATE_DERNIERE_MODIFICATION = 'Newsletter.date_derniere_modification';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'Newsletter.date_envoi';

    /** the column name for the id_service_destinataire field */
    const ID_SERVICE_DESTINATAIRE = 'Newsletter.id_service_destinataire';

    /** the column name for the statut field */
    const STATUT = 'Newsletter.statut';

    /** the column name for the destinataires field */
    const DESTINATAIRES = 'Newsletter.destinataires';

    /** the column name for the inclure_services_descendants field */
    const INCLURE_SERVICES_DESCENDANTS = 'Newsletter.inclure_services_descendants';

    /** the column name for the type_destinataire field */
    const TYPE_DESTINATAIRE = 'Newsletter.type_destinataire';

    /** The enumerated values for the inclure_services_descendants field */
    const INCLURE_SERVICES_DESCENDANTS_0 = '0';
    const INCLURE_SERVICES_DESCENDANTS_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonNewsletter objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonNewsletter[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonNewsletterPeer::$fieldNames[CommonNewsletterPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Objet', 'Corps', 'IdServiceRedacteur', 'NomRedacteur', 'PrenomRedacteur', 'EnvoyeParNom', 'EnvoyeParPrenom', 'EnvoyeParEmail', 'DateCreation', 'DateDerniereModification', 'DateEnvoi', 'IdServiceDestinataire', 'Statut', 'Destinataires', 'InclureServicesDescendants', 'TypeDestinataire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'objet', 'corps', 'idServiceRedacteur', 'nomRedacteur', 'prenomRedacteur', 'envoyeParNom', 'envoyeParPrenom', 'envoyeParEmail', 'dateCreation', 'dateDerniereModification', 'dateEnvoi', 'idServiceDestinataire', 'statut', 'destinataires', 'inclureServicesDescendants', 'typeDestinataire', ),
        BasePeer::TYPE_COLNAME => array (CommonNewsletterPeer::ID, CommonNewsletterPeer::ORGANISME, CommonNewsletterPeer::OBJET, CommonNewsletterPeer::CORPS, CommonNewsletterPeer::ID_SERVICE_REDACTEUR, CommonNewsletterPeer::NOM_REDACTEUR, CommonNewsletterPeer::PRENOM_REDACTEUR, CommonNewsletterPeer::ENVOYE_PAR_NOM, CommonNewsletterPeer::ENVOYE_PAR_PRENOM, CommonNewsletterPeer::ENVOYE_PAR_EMAIL, CommonNewsletterPeer::DATE_CREATION, CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION, CommonNewsletterPeer::DATE_ENVOI, CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE, CommonNewsletterPeer::STATUT, CommonNewsletterPeer::DESTINATAIRES, CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS, CommonNewsletterPeer::TYPE_DESTINATAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'OBJET', 'CORPS', 'ID_SERVICE_REDACTEUR', 'NOM_REDACTEUR', 'PRENOM_REDACTEUR', 'ENVOYE_PAR_NOM', 'ENVOYE_PAR_PRENOM', 'ENVOYE_PAR_EMAIL', 'DATE_CREATION', 'DATE_DERNIERE_MODIFICATION', 'DATE_ENVOI', 'ID_SERVICE_DESTINATAIRE', 'STATUT', 'DESTINATAIRES', 'INCLURE_SERVICES_DESCENDANTS', 'TYPE_DESTINATAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'objet', 'corps', 'id_service_redacteur', 'nom_redacteur', 'prenom_redacteur', 'envoye_par_nom', 'envoye_par_prenom', 'envoye_par_email', 'date_creation', 'date_derniere_modification', 'date_envoi', 'id_service_destinataire', 'statut', 'destinataires', 'inclure_services_descendants', 'type_destinataire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonNewsletterPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Objet' => 2, 'Corps' => 3, 'IdServiceRedacteur' => 4, 'NomRedacteur' => 5, 'PrenomRedacteur' => 6, 'EnvoyeParNom' => 7, 'EnvoyeParPrenom' => 8, 'EnvoyeParEmail' => 9, 'DateCreation' => 10, 'DateDerniereModification' => 11, 'DateEnvoi' => 12, 'IdServiceDestinataire' => 13, 'Statut' => 14, 'Destinataires' => 15, 'InclureServicesDescendants' => 16, 'TypeDestinataire' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'objet' => 2, 'corps' => 3, 'idServiceRedacteur' => 4, 'nomRedacteur' => 5, 'prenomRedacteur' => 6, 'envoyeParNom' => 7, 'envoyeParPrenom' => 8, 'envoyeParEmail' => 9, 'dateCreation' => 10, 'dateDerniereModification' => 11, 'dateEnvoi' => 12, 'idServiceDestinataire' => 13, 'statut' => 14, 'destinataires' => 15, 'inclureServicesDescendants' => 16, 'typeDestinataire' => 17, ),
        BasePeer::TYPE_COLNAME => array (CommonNewsletterPeer::ID => 0, CommonNewsletterPeer::ORGANISME => 1, CommonNewsletterPeer::OBJET => 2, CommonNewsletterPeer::CORPS => 3, CommonNewsletterPeer::ID_SERVICE_REDACTEUR => 4, CommonNewsletterPeer::NOM_REDACTEUR => 5, CommonNewsletterPeer::PRENOM_REDACTEUR => 6, CommonNewsletterPeer::ENVOYE_PAR_NOM => 7, CommonNewsletterPeer::ENVOYE_PAR_PRENOM => 8, CommonNewsletterPeer::ENVOYE_PAR_EMAIL => 9, CommonNewsletterPeer::DATE_CREATION => 10, CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION => 11, CommonNewsletterPeer::DATE_ENVOI => 12, CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE => 13, CommonNewsletterPeer::STATUT => 14, CommonNewsletterPeer::DESTINATAIRES => 15, CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS => 16, CommonNewsletterPeer::TYPE_DESTINATAIRE => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'OBJET' => 2, 'CORPS' => 3, 'ID_SERVICE_REDACTEUR' => 4, 'NOM_REDACTEUR' => 5, 'PRENOM_REDACTEUR' => 6, 'ENVOYE_PAR_NOM' => 7, 'ENVOYE_PAR_PRENOM' => 8, 'ENVOYE_PAR_EMAIL' => 9, 'DATE_CREATION' => 10, 'DATE_DERNIERE_MODIFICATION' => 11, 'DATE_ENVOI' => 12, 'ID_SERVICE_DESTINATAIRE' => 13, 'STATUT' => 14, 'DESTINATAIRES' => 15, 'INCLURE_SERVICES_DESCENDANTS' => 16, 'TYPE_DESTINATAIRE' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'objet' => 2, 'corps' => 3, 'id_service_redacteur' => 4, 'nom_redacteur' => 5, 'prenom_redacteur' => 6, 'envoye_par_nom' => 7, 'envoye_par_prenom' => 8, 'envoye_par_email' => 9, 'date_creation' => 10, 'date_derniere_modification' => 11, 'date_envoi' => 12, 'id_service_destinataire' => 13, 'statut' => 14, 'destinataires' => 15, 'inclure_services_descendants' => 16, 'type_destinataire' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS => array(
            CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS_0,
            CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS_1,
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
        $toNames = CommonNewsletterPeer::getFieldNames($toType);
        $key = isset(CommonNewsletterPeer::$fieldKeys[$fromType][$name]) ? CommonNewsletterPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonNewsletterPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonNewsletterPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonNewsletterPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonNewsletterPeer::$enumValueSets;
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
        $valueSets = CommonNewsletterPeer::getValueSets();

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
        $values = CommonNewsletterPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonNewsletterPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonNewsletterPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonNewsletterPeer::ID);
            $criteria->addSelectColumn(CommonNewsletterPeer::ORGANISME);
            $criteria->addSelectColumn(CommonNewsletterPeer::OBJET);
            $criteria->addSelectColumn(CommonNewsletterPeer::CORPS);
            $criteria->addSelectColumn(CommonNewsletterPeer::ID_SERVICE_REDACTEUR);
            $criteria->addSelectColumn(CommonNewsletterPeer::NOM_REDACTEUR);
            $criteria->addSelectColumn(CommonNewsletterPeer::PRENOM_REDACTEUR);
            $criteria->addSelectColumn(CommonNewsletterPeer::ENVOYE_PAR_NOM);
            $criteria->addSelectColumn(CommonNewsletterPeer::ENVOYE_PAR_PRENOM);
            $criteria->addSelectColumn(CommonNewsletterPeer::ENVOYE_PAR_EMAIL);
            $criteria->addSelectColumn(CommonNewsletterPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION);
            $criteria->addSelectColumn(CommonNewsletterPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE);
            $criteria->addSelectColumn(CommonNewsletterPeer::STATUT);
            $criteria->addSelectColumn(CommonNewsletterPeer::DESTINATAIRES);
            $criteria->addSelectColumn(CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS);
            $criteria->addSelectColumn(CommonNewsletterPeer::TYPE_DESTINATAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.corps');
            $criteria->addSelectColumn($alias . '.id_service_redacteur');
            $criteria->addSelectColumn($alias . '.nom_redacteur');
            $criteria->addSelectColumn($alias . '.prenom_redacteur');
            $criteria->addSelectColumn($alias . '.envoye_par_nom');
            $criteria->addSelectColumn($alias . '.envoye_par_prenom');
            $criteria->addSelectColumn($alias . '.envoye_par_email');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_derniere_modification');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.id_service_destinataire');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.destinataires');
            $criteria->addSelectColumn($alias . '.inclure_services_descendants');
            $criteria->addSelectColumn($alias . '.type_destinataire');
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
        $criteria->setPrimaryTableName(CommonNewsletterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonNewsletterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonNewsletterPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonNewsletter
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonNewsletterPeer::doSelect($critcopy, $con);
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
        return CommonNewsletterPeer::populateObjects(CommonNewsletterPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonNewsletterPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonNewsletterPeer::DATABASE_NAME);

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
     * @param      CommonNewsletter $obj A CommonNewsletter object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonNewsletterPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonNewsletter object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonNewsletter) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonNewsletter object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonNewsletterPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonNewsletter Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonNewsletterPeer::$instances[$key])) {
                return CommonNewsletterPeer::$instances[$key];
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
        foreach (CommonNewsletterPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonNewsletterPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Newsletter
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
        $cls = CommonNewsletterPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonNewsletterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonNewsletterPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonNewsletterPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonNewsletter object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonNewsletterPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonNewsletterPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonNewsletterPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonNewsletterPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonNewsletterPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonNewsletterPeer::DATABASE_NAME)->getTable(CommonNewsletterPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonNewsletterPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonNewsletterPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonNewsletterTableMap());
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
        return CommonNewsletterPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonNewsletter or Criteria object.
     *
     * @param      mixed $values Criteria or CommonNewsletter object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonNewsletter object
        }

        if ($criteria->containsKey(CommonNewsletterPeer::ID) && $criteria->keyContainsValue(CommonNewsletterPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonNewsletterPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonNewsletterPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonNewsletter or Criteria object.
     *
     * @param      mixed $values Criteria or CommonNewsletter object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonNewsletterPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonNewsletterPeer::ID);
            $value = $criteria->remove(CommonNewsletterPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonNewsletterPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonNewsletterPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonNewsletterPeer::ORGANISME);
            $value = $criteria->remove(CommonNewsletterPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonNewsletterPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonNewsletterPeer::TABLE_NAME);
            }

        } else { // $values is CommonNewsletter object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonNewsletterPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Newsletter table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonNewsletterPeer::TABLE_NAME, $con, CommonNewsletterPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonNewsletterPeer::clearInstancePool();
            CommonNewsletterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonNewsletter or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonNewsletter object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonNewsletterPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonNewsletter) { // it's a model object
            // invalidate the cache for this single object
            CommonNewsletterPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonNewsletterPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonNewsletterPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonNewsletterPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonNewsletterPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonNewsletterPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonNewsletterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonNewsletter object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonNewsletter $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonNewsletterPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonNewsletterPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonNewsletterPeer::DATABASE_NAME, CommonNewsletterPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonNewsletter
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonNewsletterPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonNewsletterPeer::DATABASE_NAME);
        $criteria->add(CommonNewsletterPeer::ID, $id);
        $criteria->add(CommonNewsletterPeer::ORGANISME, $organisme);
        $v = CommonNewsletterPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonNewsletterPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonNewsletterPeer::buildTableMap();

