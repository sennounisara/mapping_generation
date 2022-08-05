<?php


/**
 * Base static class for performing query and update operations on the 'Echange' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEchangePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Echange';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEchange';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEchangeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'Echange.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Echange.organisme';

    /** the column name for the objet field */
    const OBJET = 'Echange.objet';

    /** the column name for the corps field */
    const CORPS = 'Echange.corps';

    /** the column name for the expediteur field */
    const EXPEDITEUR = 'Echange.expediteur';

    /** the column name for the id_createur field */
    const ID_CREATEUR = 'Echange.id_createur';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'Echange.ref_consultation';

    /** the column name for the option_envoi field */
    const OPTION_ENVOI = 'Echange.option_envoi';

    /** the column name for the date_message field */
    const DATE_MESSAGE = 'Echange.date_message';

    /** the column name for the format field */
    const FORMAT = 'Echange.format';

    /** the column name for the id_action_declencheur field */
    const ID_ACTION_DECLENCHEUR = 'Echange.id_action_declencheur';

    /** the column name for the status field */
    const STATUS = 'Echange.status';

    /** the column name for the service_id field */
    const SERVICE_ID = 'Echange.service_id';

    /** the column name for the email_expediteur field */
    const EMAIL_EXPEDITEUR = 'Echange.email_expediteur';

    /** the column name for the id_type_message field */
    const ID_TYPE_MESSAGE = 'Echange.id_type_message';

    /** the column name for the destinataires_retraits field */
    const DESTINATAIRES_RETRAITS = 'Echange.destinataires_retraits';

    /** the column name for the destinataires_questions field */
    const DESTINATAIRES_QUESTIONS = 'Echange.destinataires_questions';

    /** the column name for the destinataires_depots field */
    const DESTINATAIRES_DEPOTS = 'Echange.destinataires_depots';

    /** the column name for the destinataires_bd_fournisseurs field */
    const DESTINATAIRES_BD_FOURNISSEURS = 'Echange.destinataires_bd_fournisseurs';

    /** the column name for the destinataires_libres field */
    const DESTINATAIRES_LIBRES = 'Echange.destinataires_libres';

    /** the column name for the page_source field */
    const PAGE_SOURCE = 'Echange.page_source';

    /** the column name for the destinataires field */
    const DESTINATAIRES = 'Echange.destinataires';

    /** the column name for the destinataire_visioconference field */
    const DESTINATAIRE_VISIOCONFERENCE = 'Echange.destinataire_visioconference';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEchange objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEchange[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEchangePeer::$fieldNames[CommonEchangePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Objet', 'Corps', 'Expediteur', 'IdCreateur', 'RefConsultation', 'OptionEnvoi', 'DateMessage', 'Format', 'IdActionDeclencheur', 'Status', 'ServiceId', 'EmailExpediteur', 'IdTypeMessage', 'DestinatairesRetraits', 'DestinatairesQuestions', 'DestinatairesDepots', 'DestinatairesBdFournisseurs', 'DestinatairesLibres', 'PageSource', 'Destinataires', 'DestinataireVisioconference', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'objet', 'corps', 'expediteur', 'idCreateur', 'refConsultation', 'optionEnvoi', 'dateMessage', 'format', 'idActionDeclencheur', 'status', 'serviceId', 'emailExpediteur', 'idTypeMessage', 'destinatairesRetraits', 'destinatairesQuestions', 'destinatairesDepots', 'destinatairesBdFournisseurs', 'destinatairesLibres', 'pageSource', 'destinataires', 'destinataireVisioconference', ),
        BasePeer::TYPE_COLNAME => array (CommonEchangePeer::ID, CommonEchangePeer::ORGANISME, CommonEchangePeer::OBJET, CommonEchangePeer::CORPS, CommonEchangePeer::EXPEDITEUR, CommonEchangePeer::ID_CREATEUR, CommonEchangePeer::REF_CONSULTATION, CommonEchangePeer::OPTION_ENVOI, CommonEchangePeer::DATE_MESSAGE, CommonEchangePeer::FORMAT, CommonEchangePeer::ID_ACTION_DECLENCHEUR, CommonEchangePeer::STATUS, CommonEchangePeer::SERVICE_ID, CommonEchangePeer::EMAIL_EXPEDITEUR, CommonEchangePeer::ID_TYPE_MESSAGE, CommonEchangePeer::DESTINATAIRES_RETRAITS, CommonEchangePeer::DESTINATAIRES_QUESTIONS, CommonEchangePeer::DESTINATAIRES_DEPOTS, CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS, CommonEchangePeer::DESTINATAIRES_LIBRES, CommonEchangePeer::PAGE_SOURCE, CommonEchangePeer::DESTINATAIRES, CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'OBJET', 'CORPS', 'EXPEDITEUR', 'ID_CREATEUR', 'REF_CONSULTATION', 'OPTION_ENVOI', 'DATE_MESSAGE', 'FORMAT', 'ID_ACTION_DECLENCHEUR', 'STATUS', 'SERVICE_ID', 'EMAIL_EXPEDITEUR', 'ID_TYPE_MESSAGE', 'DESTINATAIRES_RETRAITS', 'DESTINATAIRES_QUESTIONS', 'DESTINATAIRES_DEPOTS', 'DESTINATAIRES_BD_FOURNISSEURS', 'DESTINATAIRES_LIBRES', 'PAGE_SOURCE', 'DESTINATAIRES', 'DESTINATAIRE_VISIOCONFERENCE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'objet', 'corps', 'expediteur', 'id_createur', 'ref_consultation', 'option_envoi', 'date_message', 'format', 'id_action_declencheur', 'status', 'service_id', 'email_expediteur', 'id_type_message', 'destinataires_retraits', 'destinataires_questions', 'destinataires_depots', 'destinataires_bd_fournisseurs', 'destinataires_libres', 'page_source', 'destinataires', 'destinataire_visioconference', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEchangePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Objet' => 2, 'Corps' => 3, 'Expediteur' => 4, 'IdCreateur' => 5, 'RefConsultation' => 6, 'OptionEnvoi' => 7, 'DateMessage' => 8, 'Format' => 9, 'IdActionDeclencheur' => 10, 'Status' => 11, 'ServiceId' => 12, 'EmailExpediteur' => 13, 'IdTypeMessage' => 14, 'DestinatairesRetraits' => 15, 'DestinatairesQuestions' => 16, 'DestinatairesDepots' => 17, 'DestinatairesBdFournisseurs' => 18, 'DestinatairesLibres' => 19, 'PageSource' => 20, 'Destinataires' => 21, 'DestinataireVisioconference' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'objet' => 2, 'corps' => 3, 'expediteur' => 4, 'idCreateur' => 5, 'refConsultation' => 6, 'optionEnvoi' => 7, 'dateMessage' => 8, 'format' => 9, 'idActionDeclencheur' => 10, 'status' => 11, 'serviceId' => 12, 'emailExpediteur' => 13, 'idTypeMessage' => 14, 'destinatairesRetraits' => 15, 'destinatairesQuestions' => 16, 'destinatairesDepots' => 17, 'destinatairesBdFournisseurs' => 18, 'destinatairesLibres' => 19, 'pageSource' => 20, 'destinataires' => 21, 'destinataireVisioconference' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonEchangePeer::ID => 0, CommonEchangePeer::ORGANISME => 1, CommonEchangePeer::OBJET => 2, CommonEchangePeer::CORPS => 3, CommonEchangePeer::EXPEDITEUR => 4, CommonEchangePeer::ID_CREATEUR => 5, CommonEchangePeer::REF_CONSULTATION => 6, CommonEchangePeer::OPTION_ENVOI => 7, CommonEchangePeer::DATE_MESSAGE => 8, CommonEchangePeer::FORMAT => 9, CommonEchangePeer::ID_ACTION_DECLENCHEUR => 10, CommonEchangePeer::STATUS => 11, CommonEchangePeer::SERVICE_ID => 12, CommonEchangePeer::EMAIL_EXPEDITEUR => 13, CommonEchangePeer::ID_TYPE_MESSAGE => 14, CommonEchangePeer::DESTINATAIRES_RETRAITS => 15, CommonEchangePeer::DESTINATAIRES_QUESTIONS => 16, CommonEchangePeer::DESTINATAIRES_DEPOTS => 17, CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS => 18, CommonEchangePeer::DESTINATAIRES_LIBRES => 19, CommonEchangePeer::PAGE_SOURCE => 20, CommonEchangePeer::DESTINATAIRES => 21, CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'OBJET' => 2, 'CORPS' => 3, 'EXPEDITEUR' => 4, 'ID_CREATEUR' => 5, 'REF_CONSULTATION' => 6, 'OPTION_ENVOI' => 7, 'DATE_MESSAGE' => 8, 'FORMAT' => 9, 'ID_ACTION_DECLENCHEUR' => 10, 'STATUS' => 11, 'SERVICE_ID' => 12, 'EMAIL_EXPEDITEUR' => 13, 'ID_TYPE_MESSAGE' => 14, 'DESTINATAIRES_RETRAITS' => 15, 'DESTINATAIRES_QUESTIONS' => 16, 'DESTINATAIRES_DEPOTS' => 17, 'DESTINATAIRES_BD_FOURNISSEURS' => 18, 'DESTINATAIRES_LIBRES' => 19, 'PAGE_SOURCE' => 20, 'DESTINATAIRES' => 21, 'DESTINATAIRE_VISIOCONFERENCE' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'objet' => 2, 'corps' => 3, 'expediteur' => 4, 'id_createur' => 5, 'ref_consultation' => 6, 'option_envoi' => 7, 'date_message' => 8, 'format' => 9, 'id_action_declencheur' => 10, 'status' => 11, 'service_id' => 12, 'email_expediteur' => 13, 'id_type_message' => 14, 'destinataires_retraits' => 15, 'destinataires_questions' => 16, 'destinataires_depots' => 17, 'destinataires_bd_fournisseurs' => 18, 'destinataires_libres' => 19, 'page_source' => 20, 'destinataires' => 21, 'destinataire_visioconference' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $toNames = CommonEchangePeer::getFieldNames($toType);
        $key = isset(CommonEchangePeer::$fieldKeys[$fromType][$name]) ? CommonEchangePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEchangePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEchangePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEchangePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonEchangePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEchangePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEchangePeer::ID);
            $criteria->addSelectColumn(CommonEchangePeer::ORGANISME);
            $criteria->addSelectColumn(CommonEchangePeer::OBJET);
            $criteria->addSelectColumn(CommonEchangePeer::CORPS);
            $criteria->addSelectColumn(CommonEchangePeer::EXPEDITEUR);
            $criteria->addSelectColumn(CommonEchangePeer::ID_CREATEUR);
            $criteria->addSelectColumn(CommonEchangePeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonEchangePeer::OPTION_ENVOI);
            $criteria->addSelectColumn(CommonEchangePeer::DATE_MESSAGE);
            $criteria->addSelectColumn(CommonEchangePeer::FORMAT);
            $criteria->addSelectColumn(CommonEchangePeer::ID_ACTION_DECLENCHEUR);
            $criteria->addSelectColumn(CommonEchangePeer::STATUS);
            $criteria->addSelectColumn(CommonEchangePeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonEchangePeer::EMAIL_EXPEDITEUR);
            $criteria->addSelectColumn(CommonEchangePeer::ID_TYPE_MESSAGE);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES_RETRAITS);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES_QUESTIONS);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES_DEPOTS);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES_LIBRES);
            $criteria->addSelectColumn(CommonEchangePeer::PAGE_SOURCE);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRES);
            $criteria->addSelectColumn(CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.corps');
            $criteria->addSelectColumn($alias . '.expediteur');
            $criteria->addSelectColumn($alias . '.id_createur');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.option_envoi');
            $criteria->addSelectColumn($alias . '.date_message');
            $criteria->addSelectColumn($alias . '.format');
            $criteria->addSelectColumn($alias . '.id_action_declencheur');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.email_expediteur');
            $criteria->addSelectColumn($alias . '.id_type_message');
            $criteria->addSelectColumn($alias . '.destinataires_retraits');
            $criteria->addSelectColumn($alias . '.destinataires_questions');
            $criteria->addSelectColumn($alias . '.destinataires_depots');
            $criteria->addSelectColumn($alias . '.destinataires_bd_fournisseurs');
            $criteria->addSelectColumn($alias . '.destinataires_libres');
            $criteria->addSelectColumn($alias . '.page_source');
            $criteria->addSelectColumn($alias . '.destinataires');
            $criteria->addSelectColumn($alias . '.destinataire_visioconference');
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
        $criteria->setPrimaryTableName(CommonEchangePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEchangePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEchangePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchange
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEchangePeer::doSelect($critcopy, $con);
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
        return CommonEchangePeer::populateObjects(CommonEchangePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEchangePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEchangePeer::DATABASE_NAME);

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
     * @param      CommonEchange $obj A CommonEchange object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEchangePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEchange object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEchange) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEchange object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEchangePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEchange Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEchangePeer::$instances[$key])) {
                return CommonEchangePeer::$instances[$key];
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
        foreach (CommonEchangePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEchangePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Echange
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonEchangeDestinatairePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonEchangeDestinatairePeer::clearInstancePool();
        // Invalidate objects in CommonEchangePieceJointePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonEchangePieceJointePeer::clearInstancePool();
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
        $cls = CommonEchangePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEchangePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEchangePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEchangePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEchange object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEchangePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEchangePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEchangePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEchangePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEchangePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEchangePeer::DATABASE_NAME)->getTable(CommonEchangePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEchangePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEchangePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEchangeTableMap());
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
        return CommonEchangePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEchange or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEchange object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEchange object
        }

        if ($criteria->containsKey(CommonEchangePeer::ID) && $criteria->keyContainsValue(CommonEchangePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEchangePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEchangePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEchange or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEchange object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEchangePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEchangePeer::ID);
            $value = $criteria->remove(CommonEchangePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEchangePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEchangePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEchangePeer::ORGANISME);
            $value = $criteria->remove(CommonEchangePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEchangePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEchangePeer::TABLE_NAME);
            }

        } else { // $values is CommonEchange object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEchangePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Echange table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonEchangePeer::doOnDeleteCascade(new Criteria(CommonEchangePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonEchangePeer::TABLE_NAME, $con, CommonEchangePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEchangePeer::clearInstancePool();
            CommonEchangePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEchange or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEchange object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEchange) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEchangePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEchangePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEchangePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEchangePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonEchangePeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonEchangePeer::clearInstancePool();
            } elseif ($values instanceof CommonEchange) { // it's a model object
                CommonEchangePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonEchangePeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEchangePeer::clearRelatedInstancePool();
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
        $objects = CommonEchangePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonEchangeDestinataire objects
            $criteria = new Criteria(CommonEchangeDestinatairePeer::DATABASE_NAME);
            
            $criteria->add(CommonEchangeDestinatairePeer::ID_ECHANGE, $obj->getId());
            $affectedRows += CommonEchangeDestinatairePeer::doDelete($criteria, $con);

            // delete related CommonEchangePieceJointe objects
            $criteria = new Criteria(CommonEchangePieceJointePeer::DATABASE_NAME);
            
            $criteria->add(CommonEchangePieceJointePeer::ID_MESSAGE, $obj->getId());
            $affectedRows += CommonEchangePieceJointePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonEchange object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEchange $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEchangePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEchangePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEchangePeer::DATABASE_NAME, CommonEchangePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEchange
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonEchangePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEchangePeer::DATABASE_NAME);
        $criteria->add(CommonEchangePeer::ID, $id);
        $criteria->add(CommonEchangePeer::ORGANISME, $organisme);
        $v = CommonEchangePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEchangePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEchangePeer::buildTableMap();

