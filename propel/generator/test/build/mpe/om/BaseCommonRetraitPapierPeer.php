<?php


/**
 * Base static class for performing query and update operations on the 'Retrait_Papier' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonRetraitPapierPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Retrait_Papier';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonRetraitPapier';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonRetraitPapierTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id field */
    const ID = 'Retrait_Papier.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Retrait_Papier.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Retrait_Papier.consultation_ref';

    /** the column name for the nom field */
    const NOM = 'Retrait_Papier.nom';

    /** the column name for the adresse field */
    const ADRESSE = 'Retrait_Papier.adresse';

    /** the column name for the entreprise field */
    const ENTREPRISE = 'Retrait_Papier.entreprise';

    /** the column name for the datetelechargement field */
    const DATETELECHARGEMENT = 'Retrait_Papier.datetelechargement';

    /** the column name for the codepostal field */
    const CODEPOSTAL = 'Retrait_Papier.codepostal';

    /** the column name for the ville field */
    const VILLE = 'Retrait_Papier.ville';

    /** the column name for the pays field */
    const PAYS = 'Retrait_Papier.pays';

    /** the column name for the telephone field */
    const TELEPHONE = 'Retrait_Papier.telephone';

    /** the column name for the tirage_plan field */
    const TIRAGE_PLAN = 'Retrait_Papier.tirage_plan';

    /** the column name for the siret field */
    const SIRET = 'Retrait_Papier.siret';

    /** the column name for the fax field */
    const FAX = 'Retrait_Papier.fax';

    /** the column name for the email field */
    const EMAIL = 'Retrait_Papier.email';

    /** the column name for the Observation field */
    const OBSERVATION = 'Retrait_Papier.Observation';

    /** the column name for the prenom field */
    const PRENOM = 'Retrait_Papier.prenom';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Retrait_Papier.adresse2';

    /** the column name for the identifiant_national field */
    const IDENTIFIANT_NATIONAL = 'Retrait_Papier.identifiant_national';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'Retrait_Papier.acronyme_pays';

    /** the column name for the support field */
    const SUPPORT = 'Retrait_Papier.support';

    /** The enumerated values for the support field */
    const SUPPORT_1 = '1';
    const SUPPORT_2 = '2';
    const SUPPORT_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonRetraitPapier objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonRetraitPapier[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonRetraitPapierPeer::$fieldNames[CommonRetraitPapierPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'Nom', 'Adresse', 'Entreprise', 'Datetelechargement', 'Codepostal', 'Ville', 'Pays', 'Telephone', 'TiragePlan', 'Siret', 'Fax', 'Email', 'Observation', 'Prenom', 'Adresse2', 'IdentifiantNational', 'AcronymePays', 'Support', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'nom', 'adresse', 'entreprise', 'datetelechargement', 'codepostal', 'ville', 'pays', 'telephone', 'tiragePlan', 'siret', 'fax', 'email', 'observation', 'prenom', 'adresse2', 'identifiantNational', 'acronymePays', 'support', ),
        BasePeer::TYPE_COLNAME => array (CommonRetraitPapierPeer::ID, CommonRetraitPapierPeer::ORGANISME, CommonRetraitPapierPeer::CONSULTATION_REF, CommonRetraitPapierPeer::NOM, CommonRetraitPapierPeer::ADRESSE, CommonRetraitPapierPeer::ENTREPRISE, CommonRetraitPapierPeer::DATETELECHARGEMENT, CommonRetraitPapierPeer::CODEPOSTAL, CommonRetraitPapierPeer::VILLE, CommonRetraitPapierPeer::PAYS, CommonRetraitPapierPeer::TELEPHONE, CommonRetraitPapierPeer::TIRAGE_PLAN, CommonRetraitPapierPeer::SIRET, CommonRetraitPapierPeer::FAX, CommonRetraitPapierPeer::EMAIL, CommonRetraitPapierPeer::OBSERVATION, CommonRetraitPapierPeer::PRENOM, CommonRetraitPapierPeer::ADRESSE2, CommonRetraitPapierPeer::IDENTIFIANT_NATIONAL, CommonRetraitPapierPeer::ACRONYME_PAYS, CommonRetraitPapierPeer::SUPPORT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'NOM', 'ADRESSE', 'ENTREPRISE', 'DATETELECHARGEMENT', 'CODEPOSTAL', 'VILLE', 'PAYS', 'TELEPHONE', 'TIRAGE_PLAN', 'SIRET', 'FAX', 'EMAIL', 'OBSERVATION', 'PRENOM', 'ADRESSE2', 'IDENTIFIANT_NATIONAL', 'ACRONYME_PAYS', 'SUPPORT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'nom', 'adresse', 'entreprise', 'datetelechargement', 'codepostal', 'ville', 'pays', 'telephone', 'tirage_plan', 'siret', 'fax', 'email', 'Observation', 'prenom', 'adresse2', 'identifiant_national', 'acronyme_pays', 'support', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonRetraitPapierPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'Nom' => 3, 'Adresse' => 4, 'Entreprise' => 5, 'Datetelechargement' => 6, 'Codepostal' => 7, 'Ville' => 8, 'Pays' => 9, 'Telephone' => 10, 'TiragePlan' => 11, 'Siret' => 12, 'Fax' => 13, 'Email' => 14, 'Observation' => 15, 'Prenom' => 16, 'Adresse2' => 17, 'IdentifiantNational' => 18, 'AcronymePays' => 19, 'Support' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'nom' => 3, 'adresse' => 4, 'entreprise' => 5, 'datetelechargement' => 6, 'codepostal' => 7, 'ville' => 8, 'pays' => 9, 'telephone' => 10, 'tiragePlan' => 11, 'siret' => 12, 'fax' => 13, 'email' => 14, 'observation' => 15, 'prenom' => 16, 'adresse2' => 17, 'identifiantNational' => 18, 'acronymePays' => 19, 'support' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonRetraitPapierPeer::ID => 0, CommonRetraitPapierPeer::ORGANISME => 1, CommonRetraitPapierPeer::CONSULTATION_REF => 2, CommonRetraitPapierPeer::NOM => 3, CommonRetraitPapierPeer::ADRESSE => 4, CommonRetraitPapierPeer::ENTREPRISE => 5, CommonRetraitPapierPeer::DATETELECHARGEMENT => 6, CommonRetraitPapierPeer::CODEPOSTAL => 7, CommonRetraitPapierPeer::VILLE => 8, CommonRetraitPapierPeer::PAYS => 9, CommonRetraitPapierPeer::TELEPHONE => 10, CommonRetraitPapierPeer::TIRAGE_PLAN => 11, CommonRetraitPapierPeer::SIRET => 12, CommonRetraitPapierPeer::FAX => 13, CommonRetraitPapierPeer::EMAIL => 14, CommonRetraitPapierPeer::OBSERVATION => 15, CommonRetraitPapierPeer::PRENOM => 16, CommonRetraitPapierPeer::ADRESSE2 => 17, CommonRetraitPapierPeer::IDENTIFIANT_NATIONAL => 18, CommonRetraitPapierPeer::ACRONYME_PAYS => 19, CommonRetraitPapierPeer::SUPPORT => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'NOM' => 3, 'ADRESSE' => 4, 'ENTREPRISE' => 5, 'DATETELECHARGEMENT' => 6, 'CODEPOSTAL' => 7, 'VILLE' => 8, 'PAYS' => 9, 'TELEPHONE' => 10, 'TIRAGE_PLAN' => 11, 'SIRET' => 12, 'FAX' => 13, 'EMAIL' => 14, 'OBSERVATION' => 15, 'PRENOM' => 16, 'ADRESSE2' => 17, 'IDENTIFIANT_NATIONAL' => 18, 'ACRONYME_PAYS' => 19, 'SUPPORT' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'nom' => 3, 'adresse' => 4, 'entreprise' => 5, 'datetelechargement' => 6, 'codepostal' => 7, 'ville' => 8, 'pays' => 9, 'telephone' => 10, 'tirage_plan' => 11, 'siret' => 12, 'fax' => 13, 'email' => 14, 'Observation' => 15, 'prenom' => 16, 'adresse2' => 17, 'identifiant_national' => 18, 'acronyme_pays' => 19, 'support' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonRetraitPapierPeer::SUPPORT => array(
            CommonRetraitPapierPeer::SUPPORT_1,
            CommonRetraitPapierPeer::SUPPORT_2,
            CommonRetraitPapierPeer::SUPPORT_3,
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
        $toNames = CommonRetraitPapierPeer::getFieldNames($toType);
        $key = isset(CommonRetraitPapierPeer::$fieldKeys[$fromType][$name]) ? CommonRetraitPapierPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonRetraitPapierPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonRetraitPapierPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonRetraitPapierPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonRetraitPapierPeer::$enumValueSets;
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
        $valueSets = CommonRetraitPapierPeer::getValueSets();

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
        $values = CommonRetraitPapierPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonRetraitPapierPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonRetraitPapierPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ID);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ORGANISME);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::NOM);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ADRESSE);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ENTREPRISE);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::DATETELECHARGEMENT);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::VILLE);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::PAYS);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::TIRAGE_PLAN);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::SIRET);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::FAX);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::EMAIL);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::OBSERVATION);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::PRENOM);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonRetraitPapierPeer::SUPPORT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.entreprise');
            $criteria->addSelectColumn($alias . '.datetelechargement');
            $criteria->addSelectColumn($alias . '.codepostal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.tirage_plan');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.Observation');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.identifiant_national');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.support');
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
        $criteria->setPrimaryTableName(CommonRetraitPapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRetraitPapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRetraitPapier
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonRetraitPapierPeer::doSelect($critcopy, $con);
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
        return CommonRetraitPapierPeer::populateObjects(CommonRetraitPapierPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonRetraitPapierPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

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
     * @param      CommonRetraitPapier $obj A CommonRetraitPapier object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonRetraitPapierPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonRetraitPapier object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonRetraitPapier) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonRetraitPapier object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonRetraitPapierPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonRetraitPapier Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonRetraitPapierPeer::$instances[$key])) {
                return CommonRetraitPapierPeer::$instances[$key];
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
        foreach (CommonRetraitPapierPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonRetraitPapierPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Retrait_Papier
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
        $cls = CommonRetraitPapierPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonRetraitPapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonRetraitPapierPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonRetraitPapierPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonRetraitPapier object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonRetraitPapierPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonRetraitPapierPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonRetraitPapierPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonRetraitPapierPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonRetraitPapierPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonRetraitPapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRetraitPapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonRetraitPapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonRetraitPapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonRetraitPapier objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonRetraitPapier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);
        }

        CommonRetraitPapierPeer::addSelectColumns($criteria);
        $startcol = CommonRetraitPapierPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonRetraitPapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonRetraitPapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonRetraitPapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonRetraitPapierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonRetraitPapierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonRetraitPapierPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonRetraitPapier) to $obj2 (CommonConsultation)
                $obj2->addCommonRetraitPapier($obj1);

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
        $criteria->setPrimaryTableName(CommonRetraitPapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRetraitPapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonRetraitPapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonRetraitPapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonRetraitPapier objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonRetraitPapier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);
        }

        CommonRetraitPapierPeer::addSelectColumns($criteria);
        $startcol2 = CommonRetraitPapierPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonRetraitPapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonRetraitPapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonRetraitPapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonRetraitPapierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonRetraitPapierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonRetraitPapierPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonRetraitPapier) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonRetraitPapier($obj1);
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
        return Propel::getDatabaseMap(CommonRetraitPapierPeer::DATABASE_NAME)->getTable(CommonRetraitPapierPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonRetraitPapierPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonRetraitPapierPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonRetraitPapierTableMap());
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
        return CommonRetraitPapierPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonRetraitPapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRetraitPapier object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonRetraitPapier object
        }

        if ($criteria->containsKey(CommonRetraitPapierPeer::ID) && $criteria->keyContainsValue(CommonRetraitPapierPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonRetraitPapierPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonRetraitPapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRetraitPapier object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonRetraitPapierPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonRetraitPapierPeer::ID);
            $value = $criteria->remove(CommonRetraitPapierPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonRetraitPapierPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRetraitPapierPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonRetraitPapierPeer::ORGANISME);
            $value = $criteria->remove(CommonRetraitPapierPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonRetraitPapierPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRetraitPapierPeer::TABLE_NAME);
            }

        } else { // $values is CommonRetraitPapier object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Retrait_Papier table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonRetraitPapierPeer::TABLE_NAME, $con, CommonRetraitPapierPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonRetraitPapierPeer::clearInstancePool();
            CommonRetraitPapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonRetraitPapier or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonRetraitPapier object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonRetraitPapierPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonRetraitPapier) { // it's a model object
            // invalidate the cache for this single object
            CommonRetraitPapierPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonRetraitPapierPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonRetraitPapierPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonRetraitPapierPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonRetraitPapierPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRetraitPapierPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonRetraitPapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonRetraitPapier object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonRetraitPapier $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonRetraitPapierPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonRetraitPapierPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonRetraitPapierPeer::DATABASE_NAME, CommonRetraitPapierPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonRetraitPapier
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonRetraitPapierPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonRetraitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonRetraitPapierPeer::DATABASE_NAME);
        $criteria->add(CommonRetraitPapierPeer::ID, $id);
        $criteria->add(CommonRetraitPapierPeer::ORGANISME, $organisme);
        $v = CommonRetraitPapierPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonRetraitPapierPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonRetraitPapierPeer::buildTableMap();

