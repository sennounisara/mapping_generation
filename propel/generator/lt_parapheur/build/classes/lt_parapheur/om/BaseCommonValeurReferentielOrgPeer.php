<?php


/**
 * Base static class for performing query and update operations on the 'ValeurReferentielOrg' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonValeurReferentielOrgPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ValeurReferentielOrg';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonValeurReferentielOrg';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonValeurReferentielOrgTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'ValeurReferentielOrg.id';

    /** the column name for the organisme field */
    const ORGANISME = 'ValeurReferentielOrg.organisme';

    /** the column name for the id_referentiel field */
    const ID_REFERENTIEL = 'ValeurReferentielOrg.id_referentiel';

    /** the column name for the libelle_valeur_referentiel field */
    const LIBELLE_VALEUR_REFERENTIEL = 'ValeurReferentielOrg.libelle_valeur_referentiel';

    /** the column name for the libelle_valeur_referentiel_fr field */
    const LIBELLE_VALEUR_REFERENTIEL_FR = 'ValeurReferentielOrg.libelle_valeur_referentiel_fr';

    /** the column name for the libelle_valeur_referentiel_en field */
    const LIBELLE_VALEUR_REFERENTIEL_EN = 'ValeurReferentielOrg.libelle_valeur_referentiel_en';

    /** the column name for the libelle_valeur_referentiel_es field */
    const LIBELLE_VALEUR_REFERENTIEL_ES = 'ValeurReferentielOrg.libelle_valeur_referentiel_es';

    /** the column name for the libelle_valeur_referentiel_su field */
    const LIBELLE_VALEUR_REFERENTIEL_SU = 'ValeurReferentielOrg.libelle_valeur_referentiel_su';

    /** the column name for the libelle_valeur_referentiel_du field */
    const LIBELLE_VALEUR_REFERENTIEL_DU = 'ValeurReferentielOrg.libelle_valeur_referentiel_du';

    /** the column name for the libelle_valeur_referentiel_cz field */
    const LIBELLE_VALEUR_REFERENTIEL_CZ = 'ValeurReferentielOrg.libelle_valeur_referentiel_cz';

    /** the column name for the libelle_valeur_referentiel_ar field */
    const LIBELLE_VALEUR_REFERENTIEL_AR = 'ValeurReferentielOrg.libelle_valeur_referentiel_ar';

    /** the column name for the libelle_valeur_referentiel_it field */
    const LIBELLE_VALEUR_REFERENTIEL_IT = 'ValeurReferentielOrg.libelle_valeur_referentiel_it';

    /** the column name for the valeur_sub field */
    const VALEUR_SUB = 'ValeurReferentielOrg.valeur_sub';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonValeurReferentielOrg objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonValeurReferentielOrg[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonValeurReferentielOrgPeer::$fieldNames[CommonValeurReferentielOrgPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdReferentiel', 'LibelleValeurReferentiel', 'LibelleValeurReferentielFr', 'LibelleValeurReferentielEn', 'LibelleValeurReferentielEs', 'LibelleValeurReferentielSu', 'LibelleValeurReferentielDu', 'LibelleValeurReferentielCz', 'LibelleValeurReferentielAr', 'LibelleValeurReferentielIt', 'ValeurSub', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idReferentiel', 'libelleValeurReferentiel', 'libelleValeurReferentielFr', 'libelleValeurReferentielEn', 'libelleValeurReferentielEs', 'libelleValeurReferentielSu', 'libelleValeurReferentielDu', 'libelleValeurReferentielCz', 'libelleValeurReferentielAr', 'libelleValeurReferentielIt', 'valeurSub', ),
        BasePeer::TYPE_COLNAME => array (CommonValeurReferentielOrgPeer::ID, CommonValeurReferentielOrgPeer::ORGANISME, CommonValeurReferentielOrgPeer::ID_REFERENTIEL, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_FR, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_EN, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_ES, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_SU, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_DU, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_CZ, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_AR, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_IT, CommonValeurReferentielOrgPeer::VALEUR_SUB, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_REFERENTIEL', 'LIBELLE_VALEUR_REFERENTIEL', 'LIBELLE_VALEUR_REFERENTIEL_FR', 'LIBELLE_VALEUR_REFERENTIEL_EN', 'LIBELLE_VALEUR_REFERENTIEL_ES', 'LIBELLE_VALEUR_REFERENTIEL_SU', 'LIBELLE_VALEUR_REFERENTIEL_DU', 'LIBELLE_VALEUR_REFERENTIEL_CZ', 'LIBELLE_VALEUR_REFERENTIEL_AR', 'LIBELLE_VALEUR_REFERENTIEL_IT', 'VALEUR_SUB', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_referentiel', 'libelle_valeur_referentiel', 'libelle_valeur_referentiel_fr', 'libelle_valeur_referentiel_en', 'libelle_valeur_referentiel_es', 'libelle_valeur_referentiel_su', 'libelle_valeur_referentiel_du', 'libelle_valeur_referentiel_cz', 'libelle_valeur_referentiel_ar', 'libelle_valeur_referentiel_it', 'valeur_sub', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonValeurReferentielOrgPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdReferentiel' => 2, 'LibelleValeurReferentiel' => 3, 'LibelleValeurReferentielFr' => 4, 'LibelleValeurReferentielEn' => 5, 'LibelleValeurReferentielEs' => 6, 'LibelleValeurReferentielSu' => 7, 'LibelleValeurReferentielDu' => 8, 'LibelleValeurReferentielCz' => 9, 'LibelleValeurReferentielAr' => 10, 'LibelleValeurReferentielIt' => 11, 'ValeurSub' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idReferentiel' => 2, 'libelleValeurReferentiel' => 3, 'libelleValeurReferentielFr' => 4, 'libelleValeurReferentielEn' => 5, 'libelleValeurReferentielEs' => 6, 'libelleValeurReferentielSu' => 7, 'libelleValeurReferentielDu' => 8, 'libelleValeurReferentielCz' => 9, 'libelleValeurReferentielAr' => 10, 'libelleValeurReferentielIt' => 11, 'valeurSub' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonValeurReferentielOrgPeer::ID => 0, CommonValeurReferentielOrgPeer::ORGANISME => 1, CommonValeurReferentielOrgPeer::ID_REFERENTIEL => 2, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL => 3, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_FR => 4, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_EN => 5, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_ES => 6, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_SU => 7, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_DU => 8, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_CZ => 9, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_AR => 10, CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_IT => 11, CommonValeurReferentielOrgPeer::VALEUR_SUB => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_REFERENTIEL' => 2, 'LIBELLE_VALEUR_REFERENTIEL' => 3, 'LIBELLE_VALEUR_REFERENTIEL_FR' => 4, 'LIBELLE_VALEUR_REFERENTIEL_EN' => 5, 'LIBELLE_VALEUR_REFERENTIEL_ES' => 6, 'LIBELLE_VALEUR_REFERENTIEL_SU' => 7, 'LIBELLE_VALEUR_REFERENTIEL_DU' => 8, 'LIBELLE_VALEUR_REFERENTIEL_CZ' => 9, 'LIBELLE_VALEUR_REFERENTIEL_AR' => 10, 'LIBELLE_VALEUR_REFERENTIEL_IT' => 11, 'VALEUR_SUB' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_referentiel' => 2, 'libelle_valeur_referentiel' => 3, 'libelle_valeur_referentiel_fr' => 4, 'libelle_valeur_referentiel_en' => 5, 'libelle_valeur_referentiel_es' => 6, 'libelle_valeur_referentiel_su' => 7, 'libelle_valeur_referentiel_du' => 8, 'libelle_valeur_referentiel_cz' => 9, 'libelle_valeur_referentiel_ar' => 10, 'libelle_valeur_referentiel_it' => 11, 'valeur_sub' => 12, ),
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
        $toNames = CommonValeurReferentielOrgPeer::getFieldNames($toType);
        $key = isset(CommonValeurReferentielOrgPeer::$fieldKeys[$fromType][$name]) ? CommonValeurReferentielOrgPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonValeurReferentielOrgPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonValeurReferentielOrgPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonValeurReferentielOrgPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonValeurReferentielOrgPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonValeurReferentielOrgPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::ID);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::ORGANISME);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::ID_REFERENTIEL);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_FR);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_EN);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_ES);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_SU);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_DU);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_CZ);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_AR);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::LIBELLE_VALEUR_REFERENTIEL_IT);
            $criteria->addSelectColumn(CommonValeurReferentielOrgPeer::VALEUR_SUB);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_referentiel');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_fr');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_en');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_es');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_su');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_du');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_cz');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_ar');
            $criteria->addSelectColumn($alias . '.libelle_valeur_referentiel_it');
            $criteria->addSelectColumn($alias . '.valeur_sub');
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
        $criteria->setPrimaryTableName(CommonValeurReferentielOrgPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonValeurReferentielOrgPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonValeurReferentielOrgPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonValeurReferentielOrg
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonValeurReferentielOrgPeer::doSelect($critcopy, $con);
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
        return CommonValeurReferentielOrgPeer::populateObjects(CommonValeurReferentielOrgPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonValeurReferentielOrgPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonValeurReferentielOrgPeer::DATABASE_NAME);

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
     * @param      CommonValeurReferentielOrg $obj A CommonValeurReferentielOrg object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonValeurReferentielOrgPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonValeurReferentielOrg object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonValeurReferentielOrg) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonValeurReferentielOrg object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonValeurReferentielOrgPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonValeurReferentielOrg Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonValeurReferentielOrgPeer::$instances[$key])) {
                return CommonValeurReferentielOrgPeer::$instances[$key];
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
        foreach (CommonValeurReferentielOrgPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonValeurReferentielOrgPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ValeurReferentielOrg
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
        $cls = CommonValeurReferentielOrgPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonValeurReferentielOrgPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonValeurReferentielOrgPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonValeurReferentielOrgPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonValeurReferentielOrg object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonValeurReferentielOrgPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonValeurReferentielOrgPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonValeurReferentielOrgPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonValeurReferentielOrgPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonValeurReferentielOrgPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonValeurReferentielOrgPeer::DATABASE_NAME)->getTable(CommonValeurReferentielOrgPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonValeurReferentielOrgPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonValeurReferentielOrgPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonValeurReferentielOrgTableMap());
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
        return CommonValeurReferentielOrgPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonValeurReferentielOrg or Criteria object.
     *
     * @param      mixed $values Criteria or CommonValeurReferentielOrg object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonValeurReferentielOrg object
        }

        if ($criteria->containsKey(CommonValeurReferentielOrgPeer::ID) && $criteria->keyContainsValue(CommonValeurReferentielOrgPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonValeurReferentielOrgPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonValeurReferentielOrgPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonValeurReferentielOrg or Criteria object.
     *
     * @param      mixed $values Criteria or CommonValeurReferentielOrg object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonValeurReferentielOrgPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonValeurReferentielOrgPeer::ID);
            $value = $criteria->remove(CommonValeurReferentielOrgPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonValeurReferentielOrgPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonValeurReferentielOrgPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonValeurReferentielOrgPeer::ORGANISME);
            $value = $criteria->remove(CommonValeurReferentielOrgPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonValeurReferentielOrgPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonValeurReferentielOrgPeer::TABLE_NAME);
            }

        } else { // $values is CommonValeurReferentielOrg object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonValeurReferentielOrgPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ValeurReferentielOrg table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonValeurReferentielOrgPeer::TABLE_NAME, $con, CommonValeurReferentielOrgPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonValeurReferentielOrgPeer::clearInstancePool();
            CommonValeurReferentielOrgPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonValeurReferentielOrg or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonValeurReferentielOrg object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonValeurReferentielOrgPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonValeurReferentielOrg) { // it's a model object
            // invalidate the cache for this single object
            CommonValeurReferentielOrgPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonValeurReferentielOrgPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonValeurReferentielOrgPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonValeurReferentielOrgPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonValeurReferentielOrgPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonValeurReferentielOrgPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonValeurReferentielOrgPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonValeurReferentielOrg object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonValeurReferentielOrg $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonValeurReferentielOrgPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonValeurReferentielOrgPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonValeurReferentielOrgPeer::DATABASE_NAME, CommonValeurReferentielOrgPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonValeurReferentielOrg
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonValeurReferentielOrgPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonValeurReferentielOrgPeer::DATABASE_NAME);
        $criteria->add(CommonValeurReferentielOrgPeer::ID, $id);
        $criteria->add(CommonValeurReferentielOrgPeer::ORGANISME, $organisme);
        $v = CommonValeurReferentielOrgPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonValeurReferentielOrgPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonValeurReferentielOrgPeer::buildTableMap();

