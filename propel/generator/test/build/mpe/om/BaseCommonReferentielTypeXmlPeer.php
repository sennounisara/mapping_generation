<?php


/**
 * Base static class for performing query and update operations on the 'ReferentielTypeXml' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonReferentielTypeXmlPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ReferentielTypeXml';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonReferentielTypeXml';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonReferentielTypeXmlTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'ReferentielTypeXml.id';

    /** the column name for the organisme field */
    const ORGANISME = 'ReferentielTypeXml.organisme';

    /** the column name for the id_destinataire field */
    const ID_DESTINATAIRE = 'ReferentielTypeXml.id_destinataire';

    /** the column name for the libelle_type field */
    const LIBELLE_TYPE = 'ReferentielTypeXml.libelle_type';

    /** the column name for the libelle_type_fr field */
    const LIBELLE_TYPE_FR = 'ReferentielTypeXml.libelle_type_fr';

    /** the column name for the libelle_type_en field */
    const LIBELLE_TYPE_EN = 'ReferentielTypeXml.libelle_type_en';

    /** the column name for the libelle_type_es field */
    const LIBELLE_TYPE_ES = 'ReferentielTypeXml.libelle_type_es';

    /** the column name for the libelle_type_su field */
    const LIBELLE_TYPE_SU = 'ReferentielTypeXml.libelle_type_su';

    /** the column name for the libelle_type_du field */
    const LIBELLE_TYPE_DU = 'ReferentielTypeXml.libelle_type_du';

    /** the column name for the libelle_type_cz field */
    const LIBELLE_TYPE_CZ = 'ReferentielTypeXml.libelle_type_cz';

    /** the column name for the libelle_type_ar field */
    const LIBELLE_TYPE_AR = 'ReferentielTypeXml.libelle_type_ar';

    /** the column name for the libelle_type_it field */
    const LIBELLE_TYPE_IT = 'ReferentielTypeXml.libelle_type_it';

    /** the column name for the id_avis_marche field */
    const ID_AVIS_MARCHE = 'ReferentielTypeXml.id_avis_marche';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonReferentielTypeXml objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonReferentielTypeXml[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonReferentielTypeXmlPeer::$fieldNames[CommonReferentielTypeXmlPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdDestinataire', 'LibelleType', 'LibelleTypeFr', 'LibelleTypeEn', 'LibelleTypeEs', 'LibelleTypeSu', 'LibelleTypeDu', 'LibelleTypeCz', 'LibelleTypeAr', 'LibelleTypeIt', 'IdAvisMarche', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idDestinataire', 'libelleType', 'libelleTypeFr', 'libelleTypeEn', 'libelleTypeEs', 'libelleTypeSu', 'libelleTypeDu', 'libelleTypeCz', 'libelleTypeAr', 'libelleTypeIt', 'idAvisMarche', ),
        BasePeer::TYPE_COLNAME => array (CommonReferentielTypeXmlPeer::ID, CommonReferentielTypeXmlPeer::ORGANISME, CommonReferentielTypeXmlPeer::ID_DESTINATAIRE, CommonReferentielTypeXmlPeer::LIBELLE_TYPE, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_FR, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_EN, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_ES, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_SU, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_DU, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_CZ, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_AR, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_IT, CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_DESTINATAIRE', 'LIBELLE_TYPE', 'LIBELLE_TYPE_FR', 'LIBELLE_TYPE_EN', 'LIBELLE_TYPE_ES', 'LIBELLE_TYPE_SU', 'LIBELLE_TYPE_DU', 'LIBELLE_TYPE_CZ', 'LIBELLE_TYPE_AR', 'LIBELLE_TYPE_IT', 'ID_AVIS_MARCHE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_destinataire', 'libelle_type', 'libelle_type_fr', 'libelle_type_en', 'libelle_type_es', 'libelle_type_su', 'libelle_type_du', 'libelle_type_cz', 'libelle_type_ar', 'libelle_type_it', 'id_avis_marche', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonReferentielTypeXmlPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdDestinataire' => 2, 'LibelleType' => 3, 'LibelleTypeFr' => 4, 'LibelleTypeEn' => 5, 'LibelleTypeEs' => 6, 'LibelleTypeSu' => 7, 'LibelleTypeDu' => 8, 'LibelleTypeCz' => 9, 'LibelleTypeAr' => 10, 'LibelleTypeIt' => 11, 'IdAvisMarche' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idDestinataire' => 2, 'libelleType' => 3, 'libelleTypeFr' => 4, 'libelleTypeEn' => 5, 'libelleTypeEs' => 6, 'libelleTypeSu' => 7, 'libelleTypeDu' => 8, 'libelleTypeCz' => 9, 'libelleTypeAr' => 10, 'libelleTypeIt' => 11, 'idAvisMarche' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonReferentielTypeXmlPeer::ID => 0, CommonReferentielTypeXmlPeer::ORGANISME => 1, CommonReferentielTypeXmlPeer::ID_DESTINATAIRE => 2, CommonReferentielTypeXmlPeer::LIBELLE_TYPE => 3, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_FR => 4, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_EN => 5, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_ES => 6, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_SU => 7, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_DU => 8, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_CZ => 9, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_AR => 10, CommonReferentielTypeXmlPeer::LIBELLE_TYPE_IT => 11, CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_DESTINATAIRE' => 2, 'LIBELLE_TYPE' => 3, 'LIBELLE_TYPE_FR' => 4, 'LIBELLE_TYPE_EN' => 5, 'LIBELLE_TYPE_ES' => 6, 'LIBELLE_TYPE_SU' => 7, 'LIBELLE_TYPE_DU' => 8, 'LIBELLE_TYPE_CZ' => 9, 'LIBELLE_TYPE_AR' => 10, 'LIBELLE_TYPE_IT' => 11, 'ID_AVIS_MARCHE' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_destinataire' => 2, 'libelle_type' => 3, 'libelle_type_fr' => 4, 'libelle_type_en' => 5, 'libelle_type_es' => 6, 'libelle_type_su' => 7, 'libelle_type_du' => 8, 'libelle_type_cz' => 9, 'libelle_type_ar' => 10, 'libelle_type_it' => 11, 'id_avis_marche' => 12, ),
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
        $toNames = CommonReferentielTypeXmlPeer::getFieldNames($toType);
        $key = isset(CommonReferentielTypeXmlPeer::$fieldKeys[$fromType][$name]) ? CommonReferentielTypeXmlPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonReferentielTypeXmlPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonReferentielTypeXmlPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonReferentielTypeXmlPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonReferentielTypeXmlPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonReferentielTypeXmlPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::ID);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::ORGANISME);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::ID_DESTINATAIRE);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_FR);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_EN);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_ES);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_SU);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_DU);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_CZ);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_AR);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_IT);
            $criteria->addSelectColumn(CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_destinataire');
            $criteria->addSelectColumn($alias . '.libelle_type');
            $criteria->addSelectColumn($alias . '.libelle_type_fr');
            $criteria->addSelectColumn($alias . '.libelle_type_en');
            $criteria->addSelectColumn($alias . '.libelle_type_es');
            $criteria->addSelectColumn($alias . '.libelle_type_su');
            $criteria->addSelectColumn($alias . '.libelle_type_du');
            $criteria->addSelectColumn($alias . '.libelle_type_cz');
            $criteria->addSelectColumn($alias . '.libelle_type_ar');
            $criteria->addSelectColumn($alias . '.libelle_type_it');
            $criteria->addSelectColumn($alias . '.id_avis_marche');
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
        $criteria->setPrimaryTableName(CommonReferentielTypeXmlPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonReferentielTypeXmlPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonReferentielTypeXmlPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielTypeXml
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonReferentielTypeXmlPeer::doSelect($critcopy, $con);
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
        return CommonReferentielTypeXmlPeer::populateObjects(CommonReferentielTypeXmlPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonReferentielTypeXmlPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonReferentielTypeXmlPeer::DATABASE_NAME);

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
     * @param      CommonReferentielTypeXml $obj A CommonReferentielTypeXml object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonReferentielTypeXmlPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonReferentielTypeXml object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonReferentielTypeXml) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonReferentielTypeXml object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonReferentielTypeXmlPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonReferentielTypeXml Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonReferentielTypeXmlPeer::$instances[$key])) {
                return CommonReferentielTypeXmlPeer::$instances[$key];
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
        foreach (CommonReferentielTypeXmlPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonReferentielTypeXmlPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ReferentielTypeXml
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonReferentielFormXmlPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonReferentielFormXmlPeer::clearInstancePool();
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
        $cls = CommonReferentielTypeXmlPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonReferentielTypeXmlPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonReferentielTypeXmlPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonReferentielTypeXmlPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonReferentielTypeXml object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonReferentielTypeXmlPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonReferentielTypeXmlPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonReferentielTypeXmlPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonReferentielTypeXmlPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonReferentielTypeXmlPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonReferentielTypeXmlPeer::DATABASE_NAME)->getTable(CommonReferentielTypeXmlPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonReferentielTypeXmlPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonReferentielTypeXmlPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonReferentielTypeXmlTableMap());
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
        return CommonReferentielTypeXmlPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonReferentielTypeXml or Criteria object.
     *
     * @param      mixed $values Criteria or CommonReferentielTypeXml object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonReferentielTypeXml object
        }

        if ($criteria->containsKey(CommonReferentielTypeXmlPeer::ID) && $criteria->keyContainsValue(CommonReferentielTypeXmlPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonReferentielTypeXmlPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonReferentielTypeXmlPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonReferentielTypeXml or Criteria object.
     *
     * @param      mixed $values Criteria or CommonReferentielTypeXml object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonReferentielTypeXmlPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonReferentielTypeXmlPeer::ID);
            $value = $criteria->remove(CommonReferentielTypeXmlPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonReferentielTypeXmlPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonReferentielTypeXmlPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonReferentielTypeXmlPeer::ORGANISME);
            $value = $criteria->remove(CommonReferentielTypeXmlPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonReferentielTypeXmlPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonReferentielTypeXmlPeer::TABLE_NAME);
            }

        } else { // $values is CommonReferentielTypeXml object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonReferentielTypeXmlPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ReferentielTypeXml table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonReferentielTypeXmlPeer::doOnDeleteCascade(new Criteria(CommonReferentielTypeXmlPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonReferentielTypeXmlPeer::TABLE_NAME, $con, CommonReferentielTypeXmlPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonReferentielTypeXmlPeer::clearInstancePool();
            CommonReferentielTypeXmlPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonReferentielTypeXml or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonReferentielTypeXml object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonReferentielTypeXml) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonReferentielTypeXmlPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonReferentielTypeXmlPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonReferentielTypeXmlPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonReferentielTypeXmlPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonReferentielTypeXmlPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonReferentielTypeXmlPeer::clearInstancePool();
            } elseif ($values instanceof CommonReferentielTypeXml) { // it's a model object
                CommonReferentielTypeXmlPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonReferentielTypeXmlPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonReferentielTypeXmlPeer::clearRelatedInstancePool();
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
        $objects = CommonReferentielTypeXmlPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonReferentielFormXml objects
            $criteria = new Criteria(CommonReferentielFormXmlPeer::DATABASE_NAME);
            
            $criteria->add(CommonReferentielFormXmlPeer::ID_TYPE_XML, $obj->getId());
            $affectedRows += CommonReferentielFormXmlPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonReferentielTypeXml object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonReferentielTypeXml $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonReferentielTypeXmlPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonReferentielTypeXmlPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonReferentielTypeXmlPeer::DATABASE_NAME, CommonReferentielTypeXmlPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonReferentielTypeXml
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonReferentielTypeXmlPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonReferentielTypeXmlPeer::DATABASE_NAME);
        $criteria->add(CommonReferentielTypeXmlPeer::ID, $id);
        $criteria->add(CommonReferentielTypeXmlPeer::ORGANISME, $organisme);
        $v = CommonReferentielTypeXmlPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonReferentielTypeXmlPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonReferentielTypeXmlPeer::buildTableMap();

