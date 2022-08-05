<?php


/**
 * Base static class for performing query and update operations on the 'Annonce' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnoncePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Annonce';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnonce';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnonceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id_boamp field */
    const ID_BOAMP = 'Annonce.id_boamp';

    /** the column name for the organisme field */
    const ORGANISME = 'Annonce.organisme';

    /** the column name for the envoi_boamp field */
    const ENVOI_BOAMP = 'Annonce.envoi_boamp';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'Annonce.date_envoi';

    /** the column name for the datepub field */
    const DATEPUB = 'Annonce.datepub';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Annonce.consultation_ref';

    /** the column name for the nom_fichier_xml field */
    const NOM_FICHIER_XML = 'Annonce.nom_fichier_xml';

    /** the column name for the envoi_joue field */
    const ENVOI_JOUE = 'Annonce.envoi_joue';

    /** the column name for the mapa field */
    const MAPA = 'Annonce.mapa';

    /** the column name for the implique_SAD field */
    const IMPLIQUE_SAD = 'Annonce.implique_SAD';

    /** the column name for the date_maj field */
    const DATE_MAJ = 'Annonce.date_maj';

    /** The enumerated values for the envoi_joue field */
    const ENVOI_JOUE_0 = '0';
    const ENVOI_JOUE_1 = '1';

    /** The enumerated values for the mapa field */
    const MAPA_0 = '0';
    const MAPA_1 = '1';

    /** The enumerated values for the implique_SAD field */
    const IMPLIQUE_SAD_0 = '0';
    const IMPLIQUE_SAD_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnonce objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnonce[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePeer::$fieldNames[CommonAnnoncePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdBoamp', 'Organisme', 'EnvoiBoamp', 'DateEnvoi', 'Datepub', 'ConsultationRef', 'NomFichierXml', 'EnvoiJoue', 'Mapa', 'ImpliqueSad', 'DateMaj', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBoamp', 'organisme', 'envoiBoamp', 'dateEnvoi', 'datepub', 'consultationRef', 'nomFichierXml', 'envoiJoue', 'mapa', 'impliqueSad', 'dateMaj', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePeer::ID_BOAMP, CommonAnnoncePeer::ORGANISME, CommonAnnoncePeer::ENVOI_BOAMP, CommonAnnoncePeer::DATE_ENVOI, CommonAnnoncePeer::DATEPUB, CommonAnnoncePeer::CONSULTATION_REF, CommonAnnoncePeer::NOM_FICHIER_XML, CommonAnnoncePeer::ENVOI_JOUE, CommonAnnoncePeer::MAPA, CommonAnnoncePeer::IMPLIQUE_SAD, CommonAnnoncePeer::DATE_MAJ, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BOAMP', 'ORGANISME', 'ENVOI_BOAMP', 'DATE_ENVOI', 'DATEPUB', 'CONSULTATION_REF', 'NOM_FICHIER_XML', 'ENVOI_JOUE', 'MAPA', 'IMPLIQUE_SAD', 'DATE_MAJ', ),
        BasePeer::TYPE_FIELDNAME => array ('id_boamp', 'organisme', 'envoi_boamp', 'date_envoi', 'datepub', 'consultation_ref', 'nom_fichier_xml', 'envoi_joue', 'mapa', 'implique_SAD', 'date_maj', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdBoamp' => 0, 'Organisme' => 1, 'EnvoiBoamp' => 2, 'DateEnvoi' => 3, 'Datepub' => 4, 'ConsultationRef' => 5, 'NomFichierXml' => 6, 'EnvoiJoue' => 7, 'Mapa' => 8, 'ImpliqueSad' => 9, 'DateMaj' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBoamp' => 0, 'organisme' => 1, 'envoiBoamp' => 2, 'dateEnvoi' => 3, 'datepub' => 4, 'consultationRef' => 5, 'nomFichierXml' => 6, 'envoiJoue' => 7, 'mapa' => 8, 'impliqueSad' => 9, 'dateMaj' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePeer::ID_BOAMP => 0, CommonAnnoncePeer::ORGANISME => 1, CommonAnnoncePeer::ENVOI_BOAMP => 2, CommonAnnoncePeer::DATE_ENVOI => 3, CommonAnnoncePeer::DATEPUB => 4, CommonAnnoncePeer::CONSULTATION_REF => 5, CommonAnnoncePeer::NOM_FICHIER_XML => 6, CommonAnnoncePeer::ENVOI_JOUE => 7, CommonAnnoncePeer::MAPA => 8, CommonAnnoncePeer::IMPLIQUE_SAD => 9, CommonAnnoncePeer::DATE_MAJ => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BOAMP' => 0, 'ORGANISME' => 1, 'ENVOI_BOAMP' => 2, 'DATE_ENVOI' => 3, 'DATEPUB' => 4, 'CONSULTATION_REF' => 5, 'NOM_FICHIER_XML' => 6, 'ENVOI_JOUE' => 7, 'MAPA' => 8, 'IMPLIQUE_SAD' => 9, 'DATE_MAJ' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id_boamp' => 0, 'organisme' => 1, 'envoi_boamp' => 2, 'date_envoi' => 3, 'datepub' => 4, 'consultation_ref' => 5, 'nom_fichier_xml' => 6, 'envoi_joue' => 7, 'mapa' => 8, 'implique_SAD' => 9, 'date_maj' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAnnoncePeer::ENVOI_JOUE => array(
            CommonAnnoncePeer::ENVOI_JOUE_0,
            CommonAnnoncePeer::ENVOI_JOUE_1,
        ),
        CommonAnnoncePeer::MAPA => array(
            CommonAnnoncePeer::MAPA_0,
            CommonAnnoncePeer::MAPA_1,
        ),
        CommonAnnoncePeer::IMPLIQUE_SAD => array(
            CommonAnnoncePeer::IMPLIQUE_SAD_0,
            CommonAnnoncePeer::IMPLIQUE_SAD_1,
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
        $toNames = CommonAnnoncePeer::getFieldNames($toType);
        $key = isset(CommonAnnoncePeer::$fieldKeys[$fromType][$name]) ? CommonAnnoncePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnoncePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnoncePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnoncePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAnnoncePeer::$enumValueSets;
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
        $valueSets = CommonAnnoncePeer::getValueSets();

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
        $values = CommonAnnoncePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAnnoncePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnoncePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnoncePeer::ID_BOAMP);
            $criteria->addSelectColumn(CommonAnnoncePeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnoncePeer::ENVOI_BOAMP);
            $criteria->addSelectColumn(CommonAnnoncePeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonAnnoncePeer::DATEPUB);
            $criteria->addSelectColumn(CommonAnnoncePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAnnoncePeer::NOM_FICHIER_XML);
            $criteria->addSelectColumn(CommonAnnoncePeer::ENVOI_JOUE);
            $criteria->addSelectColumn(CommonAnnoncePeer::MAPA);
            $criteria->addSelectColumn(CommonAnnoncePeer::IMPLIQUE_SAD);
            $criteria->addSelectColumn(CommonAnnoncePeer::DATE_MAJ);
        } else {
            $criteria->addSelectColumn($alias . '.id_boamp');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.envoi_boamp');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.datepub');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.nom_fichier_xml');
            $criteria->addSelectColumn($alias . '.envoi_joue');
            $criteria->addSelectColumn($alias . '.mapa');
            $criteria->addSelectColumn($alias . '.implique_SAD');
            $criteria->addSelectColumn($alias . '.date_maj');
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
        $criteria->setPrimaryTableName(CommonAnnoncePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonce
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnoncePeer::doSelect($critcopy, $con);
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
        return CommonAnnoncePeer::populateObjects(CommonAnnoncePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnoncePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

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
     * @param      CommonAnnonce $obj A CommonAnnonce object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdBoamp(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnoncePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnonce object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnonce) {
                $key = serialize(array((string) $value->getIdBoamp(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnonce object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnoncePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnonce Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnoncePeer::$instances[$key])) {
                return CommonAnnoncePeer::$instances[$key];
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
        foreach (CommonAnnoncePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnoncePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Annonce
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
        $cls = CommonAnnoncePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnoncePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnoncePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnoncePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnonce object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnoncePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnoncePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnoncePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnoncePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnoncePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonAnnoncePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAnnoncePeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnoncePeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonAnnonce objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonce objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);
        }

        CommonAnnoncePeer::addSelectColumns($criteria);
        $startcol = CommonAnnoncePeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonAnnoncePeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnoncePeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnoncePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnoncePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnoncePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnoncePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAnnonce) to $obj2 (CommonConsultation)
                $obj2->addCommonAnnonce($obj1);

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
        $criteria->setPrimaryTableName(CommonAnnoncePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAnnoncePeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnoncePeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonAnnonce objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonce objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);
        }

        CommonAnnoncePeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnoncePeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonAnnoncePeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnoncePeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnoncePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnoncePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnoncePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnoncePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonAnnonce) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonAnnonce($obj1);
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
        return Propel::getDatabaseMap(CommonAnnoncePeer::DATABASE_NAME)->getTable(CommonAnnoncePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnoncePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnoncePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnonceTableMap());
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
        return CommonAnnoncePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnonce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonce object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnonce object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnonce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonce object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnoncePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnoncePeer::ID_BOAMP);
            $value = $criteria->remove(CommonAnnoncePeer::ID_BOAMP);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePeer::ID_BOAMP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnoncePeer::ORGANISME);
            $value = $criteria->remove(CommonAnnoncePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnonce object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Annonce table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAnnoncePeer::TABLE_NAME, $con, CommonAnnoncePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnoncePeer::clearInstancePool();
            CommonAnnoncePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnonce or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnonce object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAnnoncePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnonce) { // it's a model object
            // invalidate the cache for this single object
            CommonAnnoncePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnoncePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnoncePeer::ID_BOAMP, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnoncePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAnnoncePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnoncePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAnnonce object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnonce $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnoncePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnoncePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnoncePeer::DATABASE_NAME, CommonAnnoncePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_boamp
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnonce
     */
    public static function retrieveByPK($id_boamp, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_boamp, (string) $organisme));
         if (null !== ($obj = CommonAnnoncePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnoncePeer::DATABASE_NAME);
        $criteria->add(CommonAnnoncePeer::ID_BOAMP, $id_boamp);
        $criteria->add(CommonAnnoncePeer::ORGANISME, $organisme);
        $v = CommonAnnoncePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnoncePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnoncePeer::buildTableMap();

