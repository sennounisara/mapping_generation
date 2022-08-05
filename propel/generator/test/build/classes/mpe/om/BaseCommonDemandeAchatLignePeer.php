<?php


/**
 * Base static class for performing query and update operations on the 'demande_achat_ligne' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonDemandeAchatLignePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'demande_achat_ligne';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonDemandeAchatLigne';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonDemandeAchatLigneTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id_demande_achat_ligne field */
    const ID_DEMANDE_ACHAT_LIGNE = 'demande_achat_ligne.id_demande_achat_ligne';

    /** the column name for the organisme field */
    const ORGANISME = 'demande_achat_ligne.organisme';

    /** the column name for the email field */
    const EMAIL = 'demande_achat_ligne.email';

    /** the column name for the numero_demande_achat field */
    const NUMERO_DEMANDE_ACHAT = 'demande_achat_ligne.numero_demande_achat';

    /** the column name for the description_demande_achat field */
    const DESCRIPTION_DEMANDE_ACHAT = 'demande_achat_ligne.description_demande_achat';

    /** the column name for the numero_ligne field */
    const NUMERO_LIGNE = 'demande_achat_ligne.numero_ligne';

    /** the column name for the code_article field */
    const CODE_ARTICLE = 'demande_achat_ligne.code_article';

    /** the column name for the description_ligne field */
    const DESCRIPTION_LIGNE = 'demande_achat_ligne.description_ligne';

    /** the column name for the statut field */
    const STATUT = 'demande_achat_ligne.statut';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'demande_achat_ligne.consultation_ref';

    /** the column name for the lot field */
    const LOT = 'demande_achat_ligne.lot';

    /** the column name for the quantite field */
    const QUANTITE = 'demande_achat_ligne.quantite';

    /** the column name for the unite field */
    const UNITE = 'demande_achat_ligne.unite';

    /** the column name for the site field */
    const SITE = 'demande_achat_ligne.site';

    /** the column name for the port field */
    const PORT = 'demande_achat_ligne.port';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonDemandeAchatLigne objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonDemandeAchatLigne[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonDemandeAchatLignePeer::$fieldNames[CommonDemandeAchatLignePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDemandeAchatLigne', 'Organisme', 'Email', 'NumeroDemandeAchat', 'DescriptionDemandeAchat', 'NumeroLigne', 'CodeArticle', 'DescriptionLigne', 'Statut', 'ConsultationRef', 'Lot', 'Quantite', 'Unite', 'Site', 'Port', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDemandeAchatLigne', 'organisme', 'email', 'numeroDemandeAchat', 'descriptionDemandeAchat', 'numeroLigne', 'codeArticle', 'descriptionLigne', 'statut', 'consultationRef', 'lot', 'quantite', 'unite', 'site', 'port', ),
        BasePeer::TYPE_COLNAME => array (CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, CommonDemandeAchatLignePeer::ORGANISME, CommonDemandeAchatLignePeer::EMAIL, CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT, CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT, CommonDemandeAchatLignePeer::NUMERO_LIGNE, CommonDemandeAchatLignePeer::CODE_ARTICLE, CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE, CommonDemandeAchatLignePeer::STATUT, CommonDemandeAchatLignePeer::CONSULTATION_REF, CommonDemandeAchatLignePeer::LOT, CommonDemandeAchatLignePeer::QUANTITE, CommonDemandeAchatLignePeer::UNITE, CommonDemandeAchatLignePeer::SITE, CommonDemandeAchatLignePeer::PORT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DEMANDE_ACHAT_LIGNE', 'ORGANISME', 'EMAIL', 'NUMERO_DEMANDE_ACHAT', 'DESCRIPTION_DEMANDE_ACHAT', 'NUMERO_LIGNE', 'CODE_ARTICLE', 'DESCRIPTION_LIGNE', 'STATUT', 'CONSULTATION_REF', 'LOT', 'QUANTITE', 'UNITE', 'SITE', 'PORT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_demande_achat_ligne', 'organisme', 'email', 'numero_demande_achat', 'description_demande_achat', 'numero_ligne', 'code_article', 'description_ligne', 'statut', 'consultation_ref', 'lot', 'quantite', 'unite', 'site', 'port', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonDemandeAchatLignePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDemandeAchatLigne' => 0, 'Organisme' => 1, 'Email' => 2, 'NumeroDemandeAchat' => 3, 'DescriptionDemandeAchat' => 4, 'NumeroLigne' => 5, 'CodeArticle' => 6, 'DescriptionLigne' => 7, 'Statut' => 8, 'ConsultationRef' => 9, 'Lot' => 10, 'Quantite' => 11, 'Unite' => 12, 'Site' => 13, 'Port' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDemandeAchatLigne' => 0, 'organisme' => 1, 'email' => 2, 'numeroDemandeAchat' => 3, 'descriptionDemandeAchat' => 4, 'numeroLigne' => 5, 'codeArticle' => 6, 'descriptionLigne' => 7, 'statut' => 8, 'consultationRef' => 9, 'lot' => 10, 'quantite' => 11, 'unite' => 12, 'site' => 13, 'port' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE => 0, CommonDemandeAchatLignePeer::ORGANISME => 1, CommonDemandeAchatLignePeer::EMAIL => 2, CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT => 3, CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT => 4, CommonDemandeAchatLignePeer::NUMERO_LIGNE => 5, CommonDemandeAchatLignePeer::CODE_ARTICLE => 6, CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE => 7, CommonDemandeAchatLignePeer::STATUT => 8, CommonDemandeAchatLignePeer::CONSULTATION_REF => 9, CommonDemandeAchatLignePeer::LOT => 10, CommonDemandeAchatLignePeer::QUANTITE => 11, CommonDemandeAchatLignePeer::UNITE => 12, CommonDemandeAchatLignePeer::SITE => 13, CommonDemandeAchatLignePeer::PORT => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DEMANDE_ACHAT_LIGNE' => 0, 'ORGANISME' => 1, 'EMAIL' => 2, 'NUMERO_DEMANDE_ACHAT' => 3, 'DESCRIPTION_DEMANDE_ACHAT' => 4, 'NUMERO_LIGNE' => 5, 'CODE_ARTICLE' => 6, 'DESCRIPTION_LIGNE' => 7, 'STATUT' => 8, 'CONSULTATION_REF' => 9, 'LOT' => 10, 'QUANTITE' => 11, 'UNITE' => 12, 'SITE' => 13, 'PORT' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id_demande_achat_ligne' => 0, 'organisme' => 1, 'email' => 2, 'numero_demande_achat' => 3, 'description_demande_achat' => 4, 'numero_ligne' => 5, 'code_article' => 6, 'description_ligne' => 7, 'statut' => 8, 'consultation_ref' => 9, 'lot' => 10, 'quantite' => 11, 'unite' => 12, 'site' => 13, 'port' => 14, ),
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
        $toNames = CommonDemandeAchatLignePeer::getFieldNames($toType);
        $key = isset(CommonDemandeAchatLignePeer::$fieldKeys[$fromType][$name]) ? CommonDemandeAchatLignePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonDemandeAchatLignePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonDemandeAchatLignePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonDemandeAchatLignePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonDemandeAchatLignePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonDemandeAchatLignePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::ORGANISME);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::EMAIL);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::NUMERO_LIGNE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::CODE_ARTICLE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::STATUT);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::LOT);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::QUANTITE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::UNITE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::SITE);
            $criteria->addSelectColumn(CommonDemandeAchatLignePeer::PORT);
        } else {
            $criteria->addSelectColumn($alias . '.id_demande_achat_ligne');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.numero_demande_achat');
            $criteria->addSelectColumn($alias . '.description_demande_achat');
            $criteria->addSelectColumn($alias . '.numero_ligne');
            $criteria->addSelectColumn($alias . '.code_article');
            $criteria->addSelectColumn($alias . '.description_ligne');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.site');
            $criteria->addSelectColumn($alias . '.port');
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
        $criteria->setPrimaryTableName(CommonDemandeAchatLignePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDemandeAchatLignePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonDemandeAchatLignePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDemandeAchatLigne
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonDemandeAchatLignePeer::doSelect($critcopy, $con);
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
        return CommonDemandeAchatLignePeer::populateObjects(CommonDemandeAchatLignePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonDemandeAchatLignePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDemandeAchatLignePeer::DATABASE_NAME);

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
     * @param      CommonDemandeAchatLigne $obj A CommonDemandeAchatLigne object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDemandeAchatLigne();
            } // if key === null
            CommonDemandeAchatLignePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonDemandeAchatLigne object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonDemandeAchatLigne) {
                $key = (string) $value->getIdDemandeAchatLigne();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonDemandeAchatLigne object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonDemandeAchatLignePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonDemandeAchatLigne Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonDemandeAchatLignePeer::$instances[$key])) {
                return CommonDemandeAchatLignePeer::$instances[$key];
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
        foreach (CommonDemandeAchatLignePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonDemandeAchatLignePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to demande_achat_ligne
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
        $cls = CommonDemandeAchatLignePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonDemandeAchatLignePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonDemandeAchatLignePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonDemandeAchatLignePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonDemandeAchatLigne object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonDemandeAchatLignePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonDemandeAchatLignePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonDemandeAchatLignePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonDemandeAchatLignePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonDemandeAchatLignePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonDemandeAchatLignePeer::DATABASE_NAME)->getTable(CommonDemandeAchatLignePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonDemandeAchatLignePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonDemandeAchatLignePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonDemandeAchatLigneTableMap());
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
        return CommonDemandeAchatLignePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonDemandeAchatLigne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDemandeAchatLigne object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonDemandeAchatLigne object
        }

        if ($criteria->containsKey(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE) && $criteria->keyContainsValue(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonDemandeAchatLignePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonDemandeAchatLigne or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDemandeAchatLigne object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE);
            $value = $criteria->remove(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE);
            if ($value) {
                $selectCriteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDemandeAchatLignePeer::TABLE_NAME);
            }

        } else { // $values is CommonDemandeAchatLigne object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonDemandeAchatLignePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the demande_achat_ligne table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonDemandeAchatLignePeer::TABLE_NAME, $con, CommonDemandeAchatLignePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonDemandeAchatLignePeer::clearInstancePool();
            CommonDemandeAchatLignePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonDemandeAchatLigne or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonDemandeAchatLigne object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonDemandeAchatLignePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonDemandeAchatLigne) { // it's a model object
            // invalidate the cache for this single object
            CommonDemandeAchatLignePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);
            $criteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonDemandeAchatLignePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDemandeAchatLignePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonDemandeAchatLignePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonDemandeAchatLigne object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonDemandeAchatLigne $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonDemandeAchatLignePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonDemandeAchatLignePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonDemandeAchatLignePeer::DATABASE_NAME, CommonDemandeAchatLignePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonDemandeAchatLigne
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonDemandeAchatLignePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);
        $criteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $pk);

        $v = CommonDemandeAchatLignePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonDemandeAchatLigne[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);
            $criteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $pks, Criteria::IN);
            $objs = CommonDemandeAchatLignePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonDemandeAchatLignePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonDemandeAchatLignePeer::buildTableMap();

