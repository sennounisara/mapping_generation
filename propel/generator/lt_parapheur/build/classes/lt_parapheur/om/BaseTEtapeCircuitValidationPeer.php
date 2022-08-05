<?php


/**
 * Base static class for performing query and update operations on the 't_etape_circuit_validation' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTEtapeCircuitValidationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_etape_circuit_validation';

    /** the related Propel class for this table */
    const OM_CLASS = 'TEtapeCircuitValidation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TEtapeCircuitValidationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the ID field */
    const ID = 't_etape_circuit_validation.ID';

    /** the column name for the LIBELLE_ETAPE_FR field */
    const LIBELLE_ETAPE_FR = 't_etape_circuit_validation.LIBELLE_ETAPE_FR';

    /** the column name for the LIBELLE_ETAPE_AR field */
    const LIBELLE_ETAPE_AR = 't_etape_circuit_validation.LIBELLE_ETAPE_AR';

    /** the column name for the NUMERO_ETAPE field */
    const NUMERO_ETAPE = 't_etape_circuit_validation.NUMERO_ETAPE';

    /** the column name for the ID_TYPE_ETAPE field */
    const ID_TYPE_ETAPE = 't_etape_circuit_validation.ID_TYPE_ETAPE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 't_etape_circuit_validation.ID_ENTITE';

    /** the column name for the ID_CIRCUIT_VALIDATION field */
    const ID_CIRCUIT_VALIDATION = 't_etape_circuit_validation.ID_CIRCUIT_VALIDATION';

    /** the column name for the NIVEAU_DEPART field */
    const NIVEAU_DEPART = 't_etape_circuit_validation.NIVEAU_DEPART';

    /** the column name for the NIVEAU_FIN field */
    const NIVEAU_FIN = 't_etape_circuit_validation.NIVEAU_FIN';

    /** the column name for the ID_SIGNATAIRE field */
    const ID_SIGNATAIRE = 't_etape_circuit_validation.ID_SIGNATAIRE';

    /** the column name for the VISA_SIGNATURE field */
    const VISA_SIGNATURE = 't_etape_circuit_validation.VISA_SIGNATURE';

    /** the column name for the REGLE_VALIDATION field */
    const REGLE_VALIDATION = 't_etape_circuit_validation.REGLE_VALIDATION';

    /** the column name for the REGLE_REFUS field */
    const REGLE_REFUS = 't_etape_circuit_validation.REGLE_REFUS';

    /** the column name for the DELAI_ETAPE field */
    const DELAI_ETAPE = 't_etape_circuit_validation.DELAI_ETAPE';

    /** the column name for the DELAI_HEURE field */
    const DELAI_HEURE = 't_etape_circuit_validation.DELAI_HEURE';

    /** the column name for the ID_ENTITE_RELANCE field */
    const ID_ENTITE_RELANCE = 't_etape_circuit_validation.ID_ENTITE_RELANCE';

    /** the column name for the ID_AGENT_RELANCE field */
    const ID_AGENT_RELANCE = 't_etape_circuit_validation.ID_AGENT_RELANCE';

    /** the column name for the CLOTURE field */
    const CLOTURE = 't_etape_circuit_validation.CLOTURE';

    /** the column name for the CALCUL_HIERARCHIE field */
    const CALCUL_HIERARCHIE = 't_etape_circuit_validation.CALCUL_HIERARCHIE';

    /** The enumerated values for the VISA_SIGNATURE field */
    const VISA_SIGNATURE_0 = '0';
    const VISA_SIGNATURE_1 = '1';
    const VISA_SIGNATURE_2 = '2';
    const VISA_SIGNATURE_3 = '3';
    const VISA_SIGNATURE_4 = '4';

    /** The enumerated values for the CLOTURE field */
    const CLOTURE_0 = '0';
    const CLOTURE_1 = '1';

    /** The enumerated values for the CALCUL_HIERARCHIE field */
    const CALCUL_HIERARCHIE_0 = '0';
    const CALCUL_HIERARCHIE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TEtapeCircuitValidation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TEtapeCircuitValidation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TEtapeCircuitValidationPeer::$fieldNames[TEtapeCircuitValidationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'LibelleEtapeFr', 'LibelleEtapeAr', 'NumeroEtape', 'IdTypeEtape', 'IdEntite', 'IdCircuitValidation', 'NiveauDepart', 'NiveauFin', 'IdSignataire', 'VisaSignature', 'RegleValidation', 'RegleRefus', 'DelaiEtape', 'DelaiHeure', 'IdEntiteRelance', 'IdAgentRelance', 'Cloture', 'CalculHierarchie', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'libelleEtapeFr', 'libelleEtapeAr', 'numeroEtape', 'idTypeEtape', 'idEntite', 'idCircuitValidation', 'niveauDepart', 'niveauFin', 'idSignataire', 'visaSignature', 'regleValidation', 'regleRefus', 'delaiEtape', 'delaiHeure', 'idEntiteRelance', 'idAgentRelance', 'cloture', 'calculHierarchie', ),
        BasePeer::TYPE_COLNAME => array (TEtapeCircuitValidationPeer::ID, TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR, TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR, TEtapeCircuitValidationPeer::NUMERO_ETAPE, TEtapeCircuitValidationPeer::ID_TYPE_ETAPE, TEtapeCircuitValidationPeer::ID_ENTITE, TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION, TEtapeCircuitValidationPeer::NIVEAU_DEPART, TEtapeCircuitValidationPeer::NIVEAU_FIN, TEtapeCircuitValidationPeer::ID_SIGNATAIRE, TEtapeCircuitValidationPeer::VISA_SIGNATURE, TEtapeCircuitValidationPeer::REGLE_VALIDATION, TEtapeCircuitValidationPeer::REGLE_REFUS, TEtapeCircuitValidationPeer::DELAI_ETAPE, TEtapeCircuitValidationPeer::DELAI_HEURE, TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE, TEtapeCircuitValidationPeer::ID_AGENT_RELANCE, TEtapeCircuitValidationPeer::CLOTURE, TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LIBELLE_ETAPE_FR', 'LIBELLE_ETAPE_AR', 'NUMERO_ETAPE', 'ID_TYPE_ETAPE', 'ID_ENTITE', 'ID_CIRCUIT_VALIDATION', 'NIVEAU_DEPART', 'NIVEAU_FIN', 'ID_SIGNATAIRE', 'VISA_SIGNATURE', 'REGLE_VALIDATION', 'REGLE_REFUS', 'DELAI_ETAPE', 'DELAI_HEURE', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'CLOTURE', 'CALCUL_HIERARCHIE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'LIBELLE_ETAPE_FR', 'LIBELLE_ETAPE_AR', 'NUMERO_ETAPE', 'ID_TYPE_ETAPE', 'ID_ENTITE', 'ID_CIRCUIT_VALIDATION', 'NIVEAU_DEPART', 'NIVEAU_FIN', 'ID_SIGNATAIRE', 'VISA_SIGNATURE', 'REGLE_VALIDATION', 'REGLE_REFUS', 'DELAI_ETAPE', 'DELAI_HEURE', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'CLOTURE', 'CALCUL_HIERARCHIE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TEtapeCircuitValidationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LibelleEtapeFr' => 1, 'LibelleEtapeAr' => 2, 'NumeroEtape' => 3, 'IdTypeEtape' => 4, 'IdEntite' => 5, 'IdCircuitValidation' => 6, 'NiveauDepart' => 7, 'NiveauFin' => 8, 'IdSignataire' => 9, 'VisaSignature' => 10, 'RegleValidation' => 11, 'RegleRefus' => 12, 'DelaiEtape' => 13, 'DelaiHeure' => 14, 'IdEntiteRelance' => 15, 'IdAgentRelance' => 16, 'Cloture' => 17, 'CalculHierarchie' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'libelleEtapeFr' => 1, 'libelleEtapeAr' => 2, 'numeroEtape' => 3, 'idTypeEtape' => 4, 'idEntite' => 5, 'idCircuitValidation' => 6, 'niveauDepart' => 7, 'niveauFin' => 8, 'idSignataire' => 9, 'visaSignature' => 10, 'regleValidation' => 11, 'regleRefus' => 12, 'delaiEtape' => 13, 'delaiHeure' => 14, 'idEntiteRelance' => 15, 'idAgentRelance' => 16, 'cloture' => 17, 'calculHierarchie' => 18, ),
        BasePeer::TYPE_COLNAME => array (TEtapeCircuitValidationPeer::ID => 0, TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR => 1, TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR => 2, TEtapeCircuitValidationPeer::NUMERO_ETAPE => 3, TEtapeCircuitValidationPeer::ID_TYPE_ETAPE => 4, TEtapeCircuitValidationPeer::ID_ENTITE => 5, TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION => 6, TEtapeCircuitValidationPeer::NIVEAU_DEPART => 7, TEtapeCircuitValidationPeer::NIVEAU_FIN => 8, TEtapeCircuitValidationPeer::ID_SIGNATAIRE => 9, TEtapeCircuitValidationPeer::VISA_SIGNATURE => 10, TEtapeCircuitValidationPeer::REGLE_VALIDATION => 11, TEtapeCircuitValidationPeer::REGLE_REFUS => 12, TEtapeCircuitValidationPeer::DELAI_ETAPE => 13, TEtapeCircuitValidationPeer::DELAI_HEURE => 14, TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE => 15, TEtapeCircuitValidationPeer::ID_AGENT_RELANCE => 16, TEtapeCircuitValidationPeer::CLOTURE => 17, TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LIBELLE_ETAPE_FR' => 1, 'LIBELLE_ETAPE_AR' => 2, 'NUMERO_ETAPE' => 3, 'ID_TYPE_ETAPE' => 4, 'ID_ENTITE' => 5, 'ID_CIRCUIT_VALIDATION' => 6, 'NIVEAU_DEPART' => 7, 'NIVEAU_FIN' => 8, 'ID_SIGNATAIRE' => 9, 'VISA_SIGNATURE' => 10, 'REGLE_VALIDATION' => 11, 'REGLE_REFUS' => 12, 'DELAI_ETAPE' => 13, 'DELAI_HEURE' => 14, 'ID_ENTITE_RELANCE' => 15, 'ID_AGENT_RELANCE' => 16, 'CLOTURE' => 17, 'CALCUL_HIERARCHIE' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'LIBELLE_ETAPE_FR' => 1, 'LIBELLE_ETAPE_AR' => 2, 'NUMERO_ETAPE' => 3, 'ID_TYPE_ETAPE' => 4, 'ID_ENTITE' => 5, 'ID_CIRCUIT_VALIDATION' => 6, 'NIVEAU_DEPART' => 7, 'NIVEAU_FIN' => 8, 'ID_SIGNATAIRE' => 9, 'VISA_SIGNATURE' => 10, 'REGLE_VALIDATION' => 11, 'REGLE_REFUS' => 12, 'DELAI_ETAPE' => 13, 'DELAI_HEURE' => 14, 'ID_ENTITE_RELANCE' => 15, 'ID_AGENT_RELANCE' => 16, 'CLOTURE' => 17, 'CALCUL_HIERARCHIE' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TEtapeCircuitValidationPeer::VISA_SIGNATURE => array(
            TEtapeCircuitValidationPeer::VISA_SIGNATURE_0,
            TEtapeCircuitValidationPeer::VISA_SIGNATURE_1,
            TEtapeCircuitValidationPeer::VISA_SIGNATURE_2,
            TEtapeCircuitValidationPeer::VISA_SIGNATURE_3,
            TEtapeCircuitValidationPeer::VISA_SIGNATURE_4,
        ),
        TEtapeCircuitValidationPeer::CLOTURE => array(
            TEtapeCircuitValidationPeer::CLOTURE_0,
            TEtapeCircuitValidationPeer::CLOTURE_1,
        ),
        TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE => array(
            TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE_0,
            TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE_1,
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
        $toNames = TEtapeCircuitValidationPeer::getFieldNames($toType);
        $key = isset(TEtapeCircuitValidationPeer::$fieldKeys[$fromType][$name]) ? TEtapeCircuitValidationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TEtapeCircuitValidationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TEtapeCircuitValidationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TEtapeCircuitValidationPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TEtapeCircuitValidationPeer::$enumValueSets;
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
        $valueSets = TEtapeCircuitValidationPeer::getValueSets();

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
        $values = TEtapeCircuitValidationPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TEtapeCircuitValidationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TEtapeCircuitValidationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::NUMERO_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_ENTITE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::NIVEAU_DEPART);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::NIVEAU_FIN);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_SIGNATAIRE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::VISA_SIGNATURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::REGLE_VALIDATION);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::REGLE_REFUS);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::DELAI_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::DELAI_HEURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::CLOTURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.LIBELLE_ETAPE_FR');
            $criteria->addSelectColumn($alias . '.LIBELLE_ETAPE_AR');
            $criteria->addSelectColumn($alias . '.NUMERO_ETAPE');
            $criteria->addSelectColumn($alias . '.ID_TYPE_ETAPE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_CIRCUIT_VALIDATION');
            $criteria->addSelectColumn($alias . '.NIVEAU_DEPART');
            $criteria->addSelectColumn($alias . '.NIVEAU_FIN');
            $criteria->addSelectColumn($alias . '.ID_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.VISA_SIGNATURE');
            $criteria->addSelectColumn($alias . '.REGLE_VALIDATION');
            $criteria->addSelectColumn($alias . '.REGLE_REFUS');
            $criteria->addSelectColumn($alias . '.DELAI_ETAPE');
            $criteria->addSelectColumn($alias . '.DELAI_HEURE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RELANCE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_RELANCE');
            $criteria->addSelectColumn($alias . '.CLOTURE');
            $criteria->addSelectColumn($alias . '.CALCUL_HIERARCHIE');
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
        $criteria->setPrimaryTableName(TEtapeCircuitValidationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TEtapeCircuitValidationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TEtapeCircuitValidationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEtapeCircuitValidation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TEtapeCircuitValidationPeer::doSelect($critcopy, $con);
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
        return TEtapeCircuitValidationPeer::populateObjects(TEtapeCircuitValidationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TEtapeCircuitValidationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationPeer::DATABASE_NAME);

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
     * @param      TEtapeCircuitValidation $obj A TEtapeCircuitValidation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TEtapeCircuitValidationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TEtapeCircuitValidation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TEtapeCircuitValidation) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TEtapeCircuitValidation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TEtapeCircuitValidationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TEtapeCircuitValidation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TEtapeCircuitValidationPeer::$instances[$key])) {
                return TEtapeCircuitValidationPeer::$instances[$key];
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
        foreach (TEtapeCircuitValidationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TEtapeCircuitValidationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_etape_circuit_validation
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
        $cls = TEtapeCircuitValidationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TEtapeCircuitValidationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TEtapeCircuitValidationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TEtapeCircuitValidationPeer::addInstanceToPool($obj, $key);
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
     * @return array (TEtapeCircuitValidation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TEtapeCircuitValidationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TEtapeCircuitValidationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TEtapeCircuitValidationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TEtapeCircuitValidationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TEtapeCircuitValidationPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TEtapeCircuitValidationPeer::DATABASE_NAME)->getTable(TEtapeCircuitValidationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTEtapeCircuitValidationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTEtapeCircuitValidationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TEtapeCircuitValidationTableMap());
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
        return TEtapeCircuitValidationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TEtapeCircuitValidation or Criteria object.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TEtapeCircuitValidation object
        }

        if ($criteria->containsKey(TEtapeCircuitValidationPeer::ID) && $criteria->keyContainsValue(TEtapeCircuitValidationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TEtapeCircuitValidationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TEtapeCircuitValidation or Criteria object.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TEtapeCircuitValidationPeer::ID);
            $value = $criteria->remove(TEtapeCircuitValidationPeer::ID);
            if ($value) {
                $selectCriteria->add(TEtapeCircuitValidationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TEtapeCircuitValidationPeer::TABLE_NAME);
            }

        } else { // $values is TEtapeCircuitValidation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_etape_circuit_validation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TEtapeCircuitValidationPeer::TABLE_NAME, $con, TEtapeCircuitValidationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TEtapeCircuitValidationPeer::clearInstancePool();
            TEtapeCircuitValidationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TEtapeCircuitValidation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidation object or primary key or array of primary keys
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
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TEtapeCircuitValidationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TEtapeCircuitValidation) { // it's a model object
            // invalidate the cache for this single object
            TEtapeCircuitValidationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);
            $criteria->add(TEtapeCircuitValidationPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TEtapeCircuitValidationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            TEtapeCircuitValidationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TEtapeCircuitValidation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TEtapeCircuitValidation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TEtapeCircuitValidationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TEtapeCircuitValidationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TEtapeCircuitValidationPeer::DATABASE_NAME, TEtapeCircuitValidationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TEtapeCircuitValidation
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TEtapeCircuitValidationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);
        $criteria->add(TEtapeCircuitValidationPeer::ID, $pk);

        $v = TEtapeCircuitValidationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TEtapeCircuitValidation[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);
            $criteria->add(TEtapeCircuitValidationPeer::ID, $pks, Criteria::IN);
            $objs = TEtapeCircuitValidationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTEtapeCircuitValidationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTEtapeCircuitValidationPeer::buildTableMap();

