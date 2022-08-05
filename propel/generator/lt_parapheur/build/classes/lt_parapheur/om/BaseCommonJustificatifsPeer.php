<?php


/**
 * Base static class for performing query and update operations on the 'Justificatifs' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonJustificatifsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Justificatifs';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonJustificatifs';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonJustificatifsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the id field */
    const ID = 'Justificatifs.id';

    /** the column name for the intitule_justificatif field */
    const INTITULE_JUSTIFICATIF = 'Justificatifs.intitule_justificatif';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'Justificatifs.id_entreprise';

    /** the column name for the taille field */
    const TAILLE = 'Justificatifs.taille';

    /** the column name for the justificatif field */
    const JUSTIFICATIF = 'Justificatifs.justificatif';

    /** the column name for the statut field */
    const STATUT = 'Justificatifs.statut';

    /** the column name for the id_document field */
    const ID_DOCUMENT = 'Justificatifs.id_document';

    /** the column name for the nom field */
    const NOM = 'Justificatifs.nom';

    /** the column name for the nom_fr field */
    const NOM_FR = 'Justificatifs.nom_fr';

    /** the column name for the nom_en field */
    const NOM_EN = 'Justificatifs.nom_en';

    /** the column name for the nom_es field */
    const NOM_ES = 'Justificatifs.nom_es';

    /** the column name for the nom_su field */
    const NOM_SU = 'Justificatifs.nom_su';

    /** the column name for the nom_du field */
    const NOM_DU = 'Justificatifs.nom_du';

    /** the column name for the nom_cz field */
    const NOM_CZ = 'Justificatifs.nom_cz';

    /** the column name for the nom_ar field */
    const NOM_AR = 'Justificatifs.nom_ar';

    /** the column name for the nom_it field */
    const NOM_IT = 'Justificatifs.nom_it';

    /** the column name for the date_fin_validite field */
    const DATE_FIN_VALIDITE = 'Justificatifs.date_fin_validite';

    /** the column name for the visible_par_agents field */
    const VISIBLE_PAR_AGENTS = 'Justificatifs.visible_par_agents';

    /** The enumerated values for the statut field */
    const STATUT_0 = '0';
    const STATUT_1 = '1';

    /** The enumerated values for the visible_par_agents field */
    const VISIBLE_PAR_AGENTS_0 = '0';
    const VISIBLE_PAR_AGENTS_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonJustificatifs objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonJustificatifs[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonJustificatifsPeer::$fieldNames[CommonJustificatifsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IntituleJustificatif', 'IdEntreprise', 'Taille', 'Justificatif', 'Statut', 'IdDocument', 'Nom', 'NomFr', 'NomEn', 'NomEs', 'NomSu', 'NomDu', 'NomCz', 'NomAr', 'NomIt', 'DateFinValidite', 'VisibleParAgents', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'intituleJustificatif', 'idEntreprise', 'taille', 'justificatif', 'statut', 'idDocument', 'nom', 'nomFr', 'nomEn', 'nomEs', 'nomSu', 'nomDu', 'nomCz', 'nomAr', 'nomIt', 'dateFinValidite', 'visibleParAgents', ),
        BasePeer::TYPE_COLNAME => array (CommonJustificatifsPeer::ID, CommonJustificatifsPeer::INTITULE_JUSTIFICATIF, CommonJustificatifsPeer::ID_ENTREPRISE, CommonJustificatifsPeer::TAILLE, CommonJustificatifsPeer::JUSTIFICATIF, CommonJustificatifsPeer::STATUT, CommonJustificatifsPeer::ID_DOCUMENT, CommonJustificatifsPeer::NOM, CommonJustificatifsPeer::NOM_FR, CommonJustificatifsPeer::NOM_EN, CommonJustificatifsPeer::NOM_ES, CommonJustificatifsPeer::NOM_SU, CommonJustificatifsPeer::NOM_DU, CommonJustificatifsPeer::NOM_CZ, CommonJustificatifsPeer::NOM_AR, CommonJustificatifsPeer::NOM_IT, CommonJustificatifsPeer::DATE_FIN_VALIDITE, CommonJustificatifsPeer::VISIBLE_PAR_AGENTS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'INTITULE_JUSTIFICATIF', 'ID_ENTREPRISE', 'TAILLE', 'JUSTIFICATIF', 'STATUT', 'ID_DOCUMENT', 'NOM', 'NOM_FR', 'NOM_EN', 'NOM_ES', 'NOM_SU', 'NOM_DU', 'NOM_CZ', 'NOM_AR', 'NOM_IT', 'DATE_FIN_VALIDITE', 'VISIBLE_PAR_AGENTS', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'intitule_justificatif', 'id_entreprise', 'taille', 'justificatif', 'statut', 'id_document', 'nom', 'nom_fr', 'nom_en', 'nom_es', 'nom_su', 'nom_du', 'nom_cz', 'nom_ar', 'nom_it', 'date_fin_validite', 'visible_par_agents', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonJustificatifsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IntituleJustificatif' => 1, 'IdEntreprise' => 2, 'Taille' => 3, 'Justificatif' => 4, 'Statut' => 5, 'IdDocument' => 6, 'Nom' => 7, 'NomFr' => 8, 'NomEn' => 9, 'NomEs' => 10, 'NomSu' => 11, 'NomDu' => 12, 'NomCz' => 13, 'NomAr' => 14, 'NomIt' => 15, 'DateFinValidite' => 16, 'VisibleParAgents' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'intituleJustificatif' => 1, 'idEntreprise' => 2, 'taille' => 3, 'justificatif' => 4, 'statut' => 5, 'idDocument' => 6, 'nom' => 7, 'nomFr' => 8, 'nomEn' => 9, 'nomEs' => 10, 'nomSu' => 11, 'nomDu' => 12, 'nomCz' => 13, 'nomAr' => 14, 'nomIt' => 15, 'dateFinValidite' => 16, 'visibleParAgents' => 17, ),
        BasePeer::TYPE_COLNAME => array (CommonJustificatifsPeer::ID => 0, CommonJustificatifsPeer::INTITULE_JUSTIFICATIF => 1, CommonJustificatifsPeer::ID_ENTREPRISE => 2, CommonJustificatifsPeer::TAILLE => 3, CommonJustificatifsPeer::JUSTIFICATIF => 4, CommonJustificatifsPeer::STATUT => 5, CommonJustificatifsPeer::ID_DOCUMENT => 6, CommonJustificatifsPeer::NOM => 7, CommonJustificatifsPeer::NOM_FR => 8, CommonJustificatifsPeer::NOM_EN => 9, CommonJustificatifsPeer::NOM_ES => 10, CommonJustificatifsPeer::NOM_SU => 11, CommonJustificatifsPeer::NOM_DU => 12, CommonJustificatifsPeer::NOM_CZ => 13, CommonJustificatifsPeer::NOM_AR => 14, CommonJustificatifsPeer::NOM_IT => 15, CommonJustificatifsPeer::DATE_FIN_VALIDITE => 16, CommonJustificatifsPeer::VISIBLE_PAR_AGENTS => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'INTITULE_JUSTIFICATIF' => 1, 'ID_ENTREPRISE' => 2, 'TAILLE' => 3, 'JUSTIFICATIF' => 4, 'STATUT' => 5, 'ID_DOCUMENT' => 6, 'NOM' => 7, 'NOM_FR' => 8, 'NOM_EN' => 9, 'NOM_ES' => 10, 'NOM_SU' => 11, 'NOM_DU' => 12, 'NOM_CZ' => 13, 'NOM_AR' => 14, 'NOM_IT' => 15, 'DATE_FIN_VALIDITE' => 16, 'VISIBLE_PAR_AGENTS' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'intitule_justificatif' => 1, 'id_entreprise' => 2, 'taille' => 3, 'justificatif' => 4, 'statut' => 5, 'id_document' => 6, 'nom' => 7, 'nom_fr' => 8, 'nom_en' => 9, 'nom_es' => 10, 'nom_su' => 11, 'nom_du' => 12, 'nom_cz' => 13, 'nom_ar' => 14, 'nom_it' => 15, 'date_fin_validite' => 16, 'visible_par_agents' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonJustificatifsPeer::STATUT => array(
            CommonJustificatifsPeer::STATUT_0,
            CommonJustificatifsPeer::STATUT_1,
        ),
        CommonJustificatifsPeer::VISIBLE_PAR_AGENTS => array(
            CommonJustificatifsPeer::VISIBLE_PAR_AGENTS_0,
            CommonJustificatifsPeer::VISIBLE_PAR_AGENTS_1,
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
        $toNames = CommonJustificatifsPeer::getFieldNames($toType);
        $key = isset(CommonJustificatifsPeer::$fieldKeys[$fromType][$name]) ? CommonJustificatifsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonJustificatifsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonJustificatifsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonJustificatifsPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonJustificatifsPeer::$enumValueSets;
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
        $valueSets = CommonJustificatifsPeer::getValueSets();

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
        $values = CommonJustificatifsPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonJustificatifsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonJustificatifsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonJustificatifsPeer::ID);
            $criteria->addSelectColumn(CommonJustificatifsPeer::INTITULE_JUSTIFICATIF);
            $criteria->addSelectColumn(CommonJustificatifsPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonJustificatifsPeer::TAILLE);
            $criteria->addSelectColumn(CommonJustificatifsPeer::JUSTIFICATIF);
            $criteria->addSelectColumn(CommonJustificatifsPeer::STATUT);
            $criteria->addSelectColumn(CommonJustificatifsPeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_FR);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_EN);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_ES);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_SU);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_DU);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_CZ);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_AR);
            $criteria->addSelectColumn(CommonJustificatifsPeer::NOM_IT);
            $criteria->addSelectColumn(CommonJustificatifsPeer::DATE_FIN_VALIDITE);
            $criteria->addSelectColumn(CommonJustificatifsPeer::VISIBLE_PAR_AGENTS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.intitule_justificatif');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.justificatif');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.nom_fr');
            $criteria->addSelectColumn($alias . '.nom_en');
            $criteria->addSelectColumn($alias . '.nom_es');
            $criteria->addSelectColumn($alias . '.nom_su');
            $criteria->addSelectColumn($alias . '.nom_du');
            $criteria->addSelectColumn($alias . '.nom_cz');
            $criteria->addSelectColumn($alias . '.nom_ar');
            $criteria->addSelectColumn($alias . '.nom_it');
            $criteria->addSelectColumn($alias . '.date_fin_validite');
            $criteria->addSelectColumn($alias . '.visible_par_agents');
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
        $criteria->setPrimaryTableName(CommonJustificatifsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonJustificatifsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonJustificatifsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonJustificatifs
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonJustificatifsPeer::doSelect($critcopy, $con);
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
        return CommonJustificatifsPeer::populateObjects(CommonJustificatifsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonJustificatifsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonJustificatifsPeer::DATABASE_NAME);

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
     * @param      CommonJustificatifs $obj A CommonJustificatifs object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonJustificatifsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonJustificatifs object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonJustificatifs) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonJustificatifs object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonJustificatifsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonJustificatifs Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonJustificatifsPeer::$instances[$key])) {
                return CommonJustificatifsPeer::$instances[$key];
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
        foreach (CommonJustificatifsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonJustificatifsPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Justificatifs
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
        $cls = CommonJustificatifsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonJustificatifsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonJustificatifsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonJustificatifsPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonJustificatifs object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonJustificatifsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonJustificatifsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonJustificatifsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonJustificatifsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonJustificatifsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonJustificatifsPeer::DATABASE_NAME)->getTable(CommonJustificatifsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonJustificatifsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonJustificatifsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonJustificatifsTableMap());
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
        return CommonJustificatifsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonJustificatifs or Criteria object.
     *
     * @param      mixed $values Criteria or CommonJustificatifs object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonJustificatifs object
        }

        if ($criteria->containsKey(CommonJustificatifsPeer::ID) && $criteria->keyContainsValue(CommonJustificatifsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonJustificatifsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonJustificatifsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonJustificatifs or Criteria object.
     *
     * @param      mixed $values Criteria or CommonJustificatifs object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonJustificatifsPeer::ID);
            $value = $criteria->remove(CommonJustificatifsPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonJustificatifsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonJustificatifsPeer::TABLE_NAME);
            }

        } else { // $values is CommonJustificatifs object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonJustificatifsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Justificatifs table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonJustificatifsPeer::TABLE_NAME, $con, CommonJustificatifsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonJustificatifsPeer::clearInstancePool();
            CommonJustificatifsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonJustificatifs or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonJustificatifs object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonJustificatifsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonJustificatifs) { // it's a model object
            // invalidate the cache for this single object
            CommonJustificatifsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);
            $criteria->add(CommonJustificatifsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonJustificatifsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonJustificatifsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonJustificatifsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonJustificatifs object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonJustificatifs $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonJustificatifsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonJustificatifsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonJustificatifsPeer::DATABASE_NAME, CommonJustificatifsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonJustificatifs
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonJustificatifsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);
        $criteria->add(CommonJustificatifsPeer::ID, $pk);

        $v = CommonJustificatifsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonJustificatifs[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);
            $criteria->add(CommonJustificatifsPeer::ID, $pks, Criteria::IN);
            $objs = CommonJustificatifsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonJustificatifsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonJustificatifsPeer::buildTableMap();

