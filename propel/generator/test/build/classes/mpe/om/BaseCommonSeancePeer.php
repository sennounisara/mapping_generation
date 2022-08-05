<?php


/**
 * Base static class for performing query and update operations on the 'seance' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonSeancePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'seance';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonSeance';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonSeanceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id field */
    const ID = 'seance.id';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'seance.consultation_ref';

    /** the column name for the organisme field */
    const ORGANISME = 'seance.organisme';

    /** the column name for the report field */
    const REPORT = 'seance.report';

    /** the column name for the date field */
    const DATE = 'seance.date';

    /** the column name for the type field */
    const TYPE = 'seance.type';

    /** the column name for the ouverture_env_candidature field */
    const OUVERTURE_ENV_CANDIDATURE = 'seance.ouverture_env_candidature';

    /** the column name for the ouverture_env_offre_technique field */
    const OUVERTURE_ENV_OFFRE_TECHNIQUE = 'seance.ouverture_env_offre_technique';

    /** the column name for the ouverture_env_offre_financiere field */
    const OUVERTURE_ENV_OFFRE_FINANCIERE = 'seance.ouverture_env_offre_financiere';

    /** the column name for the jugement_env1_administratif field */
    const JUGEMENT_ENV1_ADMINISTRATIF = 'seance.jugement_env1_administratif';

    /** the column name for the jugement_env1_technique field */
    const JUGEMENT_ENV1_TECHNIQUE = 'seance.jugement_env1_technique';

    /** the column name for the jugement_env1_echantillon field */
    const JUGEMENT_ENV1_ECHANTILLON = 'seance.jugement_env1_echantillon';

    /** the column name for the jugement_offre_technique field */
    const JUGEMENT_OFFRE_TECHNIQUE = 'seance.jugement_offre_technique';

    /** the column name for the jugement_offre_financiere field */
    const JUGEMENT_OFFRE_FINANCIERE = 'seance.jugement_offre_financiere';

    /** the column name for the justificatif field */
    const JUSTIFICATIF = 'seance.justificatif';

    /** the column name for the statut field */
    const STATUT = 'seance.statut';

    /** the column name for the id_blob_pv field */
    const ID_BLOB_PV = 'seance.id_blob_pv';

    /** The enumerated values for the report field */
    const REPORT_0 = '0';
    const REPORT_1 = '1';

    /** The enumerated values for the ouverture_env_candidature field */
    const OUVERTURE_ENV_CANDIDATURE_0 = '0';
    const OUVERTURE_ENV_CANDIDATURE_1 = '1';

    /** The enumerated values for the ouverture_env_offre_technique field */
    const OUVERTURE_ENV_OFFRE_TECHNIQUE_0 = '0';
    const OUVERTURE_ENV_OFFRE_TECHNIQUE_1 = '1';

    /** The enumerated values for the ouverture_env_offre_financiere field */
    const OUVERTURE_ENV_OFFRE_FINANCIERE_0 = '0';
    const OUVERTURE_ENV_OFFRE_FINANCIERE_1 = '1';

    /** The enumerated values for the jugement_env1_administratif field */
    const JUGEMENT_ENV1_ADMINISTRATIF_0 = '0';
    const JUGEMENT_ENV1_ADMINISTRATIF_1 = '1';

    /** The enumerated values for the jugement_env1_technique field */
    const JUGEMENT_ENV1_TECHNIQUE_0 = '0';
    const JUGEMENT_ENV1_TECHNIQUE_1 = '1';

    /** The enumerated values for the jugement_env1_echantillon field */
    const JUGEMENT_ENV1_ECHANTILLON_0 = '0';
    const JUGEMENT_ENV1_ECHANTILLON_1 = '1';

    /** The enumerated values for the jugement_offre_technique field */
    const JUGEMENT_OFFRE_TECHNIQUE_0 = '0';
    const JUGEMENT_OFFRE_TECHNIQUE_1 = '1';

    /** The enumerated values for the jugement_offre_financiere field */
    const JUGEMENT_OFFRE_FINANCIERE_0 = '0';
    const JUGEMENT_OFFRE_FINANCIERE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonSeance objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonSeance[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonSeancePeer::$fieldNames[CommonSeancePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'ConsultationRef', 'Organisme', 'Report', 'Date', 'Type', 'OuvertureEnvCandidature', 'OuvertureEnvOffreTechnique', 'OuvertureEnvOffreFinanciere', 'JugementEnv1Administratif', 'JugementEnv1Technique', 'JugementEnv1Echantillon', 'JugementOffreTechnique', 'JugementOffreFinanciere', 'Justificatif', 'Statut', 'IdBlobPv', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'consultationRef', 'organisme', 'report', 'date', 'type', 'ouvertureEnvCandidature', 'ouvertureEnvOffreTechnique', 'ouvertureEnvOffreFinanciere', 'jugementEnv1Administratif', 'jugementEnv1Technique', 'jugementEnv1Echantillon', 'jugementOffreTechnique', 'jugementOffreFinanciere', 'justificatif', 'statut', 'idBlobPv', ),
        BasePeer::TYPE_COLNAME => array (CommonSeancePeer::ID, CommonSeancePeer::CONSULTATION_REF, CommonSeancePeer::ORGANISME, CommonSeancePeer::REPORT, CommonSeancePeer::DATE, CommonSeancePeer::TYPE, CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE, CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE, CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE, CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF, CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE, CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON, CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE, CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE, CommonSeancePeer::JUSTIFICATIF, CommonSeancePeer::STATUT, CommonSeancePeer::ID_BLOB_PV, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CONSULTATION_REF', 'ORGANISME', 'REPORT', 'DATE', 'TYPE', 'OUVERTURE_ENV_CANDIDATURE', 'OUVERTURE_ENV_OFFRE_TECHNIQUE', 'OUVERTURE_ENV_OFFRE_FINANCIERE', 'JUGEMENT_ENV1_ADMINISTRATIF', 'JUGEMENT_ENV1_TECHNIQUE', 'JUGEMENT_ENV1_ECHANTILLON', 'JUGEMENT_OFFRE_TECHNIQUE', 'JUGEMENT_OFFRE_FINANCIERE', 'JUSTIFICATIF', 'STATUT', 'ID_BLOB_PV', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'consultation_ref', 'organisme', 'report', 'date', 'type', 'ouverture_env_candidature', 'ouverture_env_offre_technique', 'ouverture_env_offre_financiere', 'jugement_env1_administratif', 'jugement_env1_technique', 'jugement_env1_echantillon', 'jugement_offre_technique', 'jugement_offre_financiere', 'justificatif', 'statut', 'id_blob_pv', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonSeancePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ConsultationRef' => 1, 'Organisme' => 2, 'Report' => 3, 'Date' => 4, 'Type' => 5, 'OuvertureEnvCandidature' => 6, 'OuvertureEnvOffreTechnique' => 7, 'OuvertureEnvOffreFinanciere' => 8, 'JugementEnv1Administratif' => 9, 'JugementEnv1Technique' => 10, 'JugementEnv1Echantillon' => 11, 'JugementOffreTechnique' => 12, 'JugementOffreFinanciere' => 13, 'Justificatif' => 14, 'Statut' => 15, 'IdBlobPv' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'consultationRef' => 1, 'organisme' => 2, 'report' => 3, 'date' => 4, 'type' => 5, 'ouvertureEnvCandidature' => 6, 'ouvertureEnvOffreTechnique' => 7, 'ouvertureEnvOffreFinanciere' => 8, 'jugementEnv1Administratif' => 9, 'jugementEnv1Technique' => 10, 'jugementEnv1Echantillon' => 11, 'jugementOffreTechnique' => 12, 'jugementOffreFinanciere' => 13, 'justificatif' => 14, 'statut' => 15, 'idBlobPv' => 16, ),
        BasePeer::TYPE_COLNAME => array (CommonSeancePeer::ID => 0, CommonSeancePeer::CONSULTATION_REF => 1, CommonSeancePeer::ORGANISME => 2, CommonSeancePeer::REPORT => 3, CommonSeancePeer::DATE => 4, CommonSeancePeer::TYPE => 5, CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE => 6, CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE => 7, CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE => 8, CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF => 9, CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE => 10, CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON => 11, CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE => 12, CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE => 13, CommonSeancePeer::JUSTIFICATIF => 14, CommonSeancePeer::STATUT => 15, CommonSeancePeer::ID_BLOB_PV => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CONSULTATION_REF' => 1, 'ORGANISME' => 2, 'REPORT' => 3, 'DATE' => 4, 'TYPE' => 5, 'OUVERTURE_ENV_CANDIDATURE' => 6, 'OUVERTURE_ENV_OFFRE_TECHNIQUE' => 7, 'OUVERTURE_ENV_OFFRE_FINANCIERE' => 8, 'JUGEMENT_ENV1_ADMINISTRATIF' => 9, 'JUGEMENT_ENV1_TECHNIQUE' => 10, 'JUGEMENT_ENV1_ECHANTILLON' => 11, 'JUGEMENT_OFFRE_TECHNIQUE' => 12, 'JUGEMENT_OFFRE_FINANCIERE' => 13, 'JUSTIFICATIF' => 14, 'STATUT' => 15, 'ID_BLOB_PV' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'consultation_ref' => 1, 'organisme' => 2, 'report' => 3, 'date' => 4, 'type' => 5, 'ouverture_env_candidature' => 6, 'ouverture_env_offre_technique' => 7, 'ouverture_env_offre_financiere' => 8, 'jugement_env1_administratif' => 9, 'jugement_env1_technique' => 10, 'jugement_env1_echantillon' => 11, 'jugement_offre_technique' => 12, 'jugement_offre_financiere' => 13, 'justificatif' => 14, 'statut' => 15, 'id_blob_pv' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonSeancePeer::REPORT => array(
            CommonSeancePeer::REPORT_0,
            CommonSeancePeer::REPORT_1,
        ),
        CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE => array(
            CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE_0,
            CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE_1,
        ),
        CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE => array(
            CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE_0,
            CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE_1,
        ),
        CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE => array(
            CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE_0,
            CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE_1,
        ),
        CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF => array(
            CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF_0,
            CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF_1,
        ),
        CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE => array(
            CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE_0,
            CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE_1,
        ),
        CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON => array(
            CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON_0,
            CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON_1,
        ),
        CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE => array(
            CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE_0,
            CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE_1,
        ),
        CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE => array(
            CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE_0,
            CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE_1,
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
        $toNames = CommonSeancePeer::getFieldNames($toType);
        $key = isset(CommonSeancePeer::$fieldKeys[$fromType][$name]) ? CommonSeancePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonSeancePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonSeancePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonSeancePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonSeancePeer::$enumValueSets;
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
        $valueSets = CommonSeancePeer::getValueSets();

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
        $values = CommonSeancePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonSeancePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonSeancePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonSeancePeer::ID);
            $criteria->addSelectColumn(CommonSeancePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonSeancePeer::ORGANISME);
            $criteria->addSelectColumn(CommonSeancePeer::REPORT);
            $criteria->addSelectColumn(CommonSeancePeer::DATE);
            $criteria->addSelectColumn(CommonSeancePeer::TYPE);
            $criteria->addSelectColumn(CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE);
            $criteria->addSelectColumn(CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE);
            $criteria->addSelectColumn(CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE);
            $criteria->addSelectColumn(CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF);
            $criteria->addSelectColumn(CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE);
            $criteria->addSelectColumn(CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON);
            $criteria->addSelectColumn(CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE);
            $criteria->addSelectColumn(CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE);
            $criteria->addSelectColumn(CommonSeancePeer::JUSTIFICATIF);
            $criteria->addSelectColumn(CommonSeancePeer::STATUT);
            $criteria->addSelectColumn(CommonSeancePeer::ID_BLOB_PV);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.report');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.ouverture_env_candidature');
            $criteria->addSelectColumn($alias . '.ouverture_env_offre_technique');
            $criteria->addSelectColumn($alias . '.ouverture_env_offre_financiere');
            $criteria->addSelectColumn($alias . '.jugement_env1_administratif');
            $criteria->addSelectColumn($alias . '.jugement_env1_technique');
            $criteria->addSelectColumn($alias . '.jugement_env1_echantillon');
            $criteria->addSelectColumn($alias . '.jugement_offre_technique');
            $criteria->addSelectColumn($alias . '.jugement_offre_financiere');
            $criteria->addSelectColumn($alias . '.justificatif');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.id_blob_pv');
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
        $criteria->setPrimaryTableName(CommonSeancePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonSeancePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonSeancePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSeance
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonSeancePeer::doSelect($critcopy, $con);
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
        return CommonSeancePeer::populateObjects(CommonSeancePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonSeancePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSeancePeer::DATABASE_NAME);

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
     * @param      CommonSeance $obj A CommonSeance object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonSeancePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonSeance object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonSeance) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonSeance object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonSeancePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonSeance Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonSeancePeer::$instances[$key])) {
                return CommonSeancePeer::$instances[$key];
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
        foreach (CommonSeancePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonSeancePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to seance
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
        $cls = CommonSeancePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonSeancePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonSeancePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonSeancePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonSeance object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonSeancePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonSeancePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonSeancePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonSeancePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonSeancePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonSeancePeer::DATABASE_NAME)->getTable(CommonSeancePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonSeancePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonSeancePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonSeanceTableMap());
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
        return CommonSeancePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonSeance or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSeance object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonSeance object
        }

        if ($criteria->containsKey(CommonSeancePeer::ID) && $criteria->keyContainsValue(CommonSeancePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonSeancePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonSeancePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonSeance or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSeance object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonSeancePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonSeancePeer::ID);
            $value = $criteria->remove(CommonSeancePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonSeancePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonSeancePeer::TABLE_NAME);
            }

        } else { // $values is CommonSeance object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonSeancePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the seance table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonSeancePeer::TABLE_NAME, $con, CommonSeancePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonSeancePeer::clearInstancePool();
            CommonSeancePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonSeance or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonSeance object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonSeancePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonSeance) { // it's a model object
            // invalidate the cache for this single object
            CommonSeancePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonSeancePeer::DATABASE_NAME);
            $criteria->add(CommonSeancePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonSeancePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSeancePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonSeancePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonSeance object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonSeance $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonSeancePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonSeancePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonSeancePeer::DATABASE_NAME, CommonSeancePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonSeance
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonSeancePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonSeancePeer::DATABASE_NAME);
        $criteria->add(CommonSeancePeer::ID, $pk);

        $v = CommonSeancePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonSeance[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonSeancePeer::DATABASE_NAME);
            $criteria->add(CommonSeancePeer::ID, $pks, Criteria::IN);
            $objs = CommonSeancePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonSeancePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonSeancePeer::buildTableMap();

