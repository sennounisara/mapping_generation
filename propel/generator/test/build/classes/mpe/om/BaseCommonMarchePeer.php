<?php


/**
 * Base static class for performing query and update operations on the 'Marche' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonMarchePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Marche';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonMarche';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonMarcheTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'Marche.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Marche.organisme';

    /** the column name for the idMarcheTrancheBudgetaire field */
    const IDMARCHETRANCHEBUDGETAIRE = 'Marche.idMarcheTrancheBudgetaire';

    /** the column name for the numeroMarcheAnnee field */
    const NUMEROMARCHEANNEE = 'Marche.numeroMarcheAnnee';

    /** the column name for the idService field */
    const IDSERVICE = 'Marche.idService';

    /** the column name for the nomAttributaire field */
    const NOMATTRIBUTAIRE = 'Marche.nomAttributaire';

    /** the column name for the dateNotification field */
    const DATENOTIFICATION = 'Marche.dateNotification';

    /** the column name for the codePostal field */
    const CODEPOSTAL = 'Marche.codePostal';

    /** the column name for the natureMarche field */
    const NATUREMARCHE = 'Marche.natureMarche';

    /** the column name for the objetMarche field */
    const OBJETMARCHE = 'Marche.objetMarche';

    /** the column name for the montantMarche field */
    const MONTANTMARCHE = 'Marche.montantMarche';

    /** the column name for the valide field */
    const VALIDE = 'Marche.valide';

    /** the column name for the isManuel field */
    const ISMANUEL = 'Marche.isManuel';

    /** the column name for the pmePmi field */
    const PMEPMI = 'Marche.pmePmi';

    /** the column name for the id_decision_enveloppe field */
    const ID_DECISION_ENVELOPPE = 'Marche.id_decision_enveloppe';

    /** the column name for the ville field */
    const VILLE = 'Marche.ville';

    /** the column name for the acronymePays_Attributaire field */
    const ACRONYMEPAYS_ATTRIBUTAIRE = 'Marche.acronymePays_Attributaire';

    /** the column name for the pays_Attributaire field */
    const PAYS_ATTRIBUTAIRE = 'Marche.pays_Attributaire';

    /** the column name for the siren_Attributaire field */
    const SIREN_ATTRIBUTAIRE = 'Marche.siren_Attributaire';

    /** the column name for the nic_Attributaire field */
    const NIC_ATTRIBUTAIRE = 'Marche.nic_Attributaire';

    /** the column name for the identifiantNational_Attributaire field */
    const IDENTIFIANTNATIONAL_ATTRIBUTAIRE = 'Marche.identifiantNational_Attributaire';

    /** the column name for the rc_ville_attributaire field */
    const RC_VILLE_ATTRIBUTAIRE = 'Marche.rc_ville_attributaire';

    /** the column name for the rc_num_attributaire field */
    const RC_NUM_ATTRIBUTAIRE = 'Marche.rc_num_attributaire';

    /** The enumerated values for the valide field */
    const VALIDE_0 = '0';
    const VALIDE_1 = '1';

    /** The enumerated values for the isManuel field */
    const ISMANUEL_0 = '0';
    const ISMANUEL_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonMarche objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonMarche[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonMarchePeer::$fieldNames[CommonMarchePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Idmarchetranchebudgetaire', 'Numeromarcheannee', 'Idservice', 'Nomattributaire', 'Datenotification', 'Codepostal', 'Naturemarche', 'Objetmarche', 'Montantmarche', 'Valide', 'Ismanuel', 'Pmepmi', 'IdDecisionEnveloppe', 'Ville', 'AcronymepaysAttributaire', 'PaysAttributaire', 'SirenAttributaire', 'NicAttributaire', 'IdentifiantnationalAttributaire', 'RcVilleAttributaire', 'RcNumAttributaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idmarchetranchebudgetaire', 'numeromarcheannee', 'idservice', 'nomattributaire', 'datenotification', 'codepostal', 'naturemarche', 'objetmarche', 'montantmarche', 'valide', 'ismanuel', 'pmepmi', 'idDecisionEnveloppe', 'ville', 'acronymepaysAttributaire', 'paysAttributaire', 'sirenAttributaire', 'nicAttributaire', 'identifiantnationalAttributaire', 'rcVilleAttributaire', 'rcNumAttributaire', ),
        BasePeer::TYPE_COLNAME => array (CommonMarchePeer::ID, CommonMarchePeer::ORGANISME, CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE, CommonMarchePeer::NUMEROMARCHEANNEE, CommonMarchePeer::IDSERVICE, CommonMarchePeer::NOMATTRIBUTAIRE, CommonMarchePeer::DATENOTIFICATION, CommonMarchePeer::CODEPOSTAL, CommonMarchePeer::NATUREMARCHE, CommonMarchePeer::OBJETMARCHE, CommonMarchePeer::MONTANTMARCHE, CommonMarchePeer::VALIDE, CommonMarchePeer::ISMANUEL, CommonMarchePeer::PMEPMI, CommonMarchePeer::ID_DECISION_ENVELOPPE, CommonMarchePeer::VILLE, CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE, CommonMarchePeer::PAYS_ATTRIBUTAIRE, CommonMarchePeer::SIREN_ATTRIBUTAIRE, CommonMarchePeer::NIC_ATTRIBUTAIRE, CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE, CommonMarchePeer::RC_NUM_ATTRIBUTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'IDMARCHETRANCHEBUDGETAIRE', 'NUMEROMARCHEANNEE', 'IDSERVICE', 'NOMATTRIBUTAIRE', 'DATENOTIFICATION', 'CODEPOSTAL', 'NATUREMARCHE', 'OBJETMARCHE', 'MONTANTMARCHE', 'VALIDE', 'ISMANUEL', 'PMEPMI', 'ID_DECISION_ENVELOPPE', 'VILLE', 'ACRONYMEPAYS_ATTRIBUTAIRE', 'PAYS_ATTRIBUTAIRE', 'SIREN_ATTRIBUTAIRE', 'NIC_ATTRIBUTAIRE', 'IDENTIFIANTNATIONAL_ATTRIBUTAIRE', 'RC_VILLE_ATTRIBUTAIRE', 'RC_NUM_ATTRIBUTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'idMarcheTrancheBudgetaire', 'numeroMarcheAnnee', 'idService', 'nomAttributaire', 'dateNotification', 'codePostal', 'natureMarche', 'objetMarche', 'montantMarche', 'valide', 'isManuel', 'pmePmi', 'id_decision_enveloppe', 'ville', 'acronymePays_Attributaire', 'pays_Attributaire', 'siren_Attributaire', 'nic_Attributaire', 'identifiantNational_Attributaire', 'rc_ville_attributaire', 'rc_num_attributaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonMarchePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Idmarchetranchebudgetaire' => 2, 'Numeromarcheannee' => 3, 'Idservice' => 4, 'Nomattributaire' => 5, 'Datenotification' => 6, 'Codepostal' => 7, 'Naturemarche' => 8, 'Objetmarche' => 9, 'Montantmarche' => 10, 'Valide' => 11, 'Ismanuel' => 12, 'Pmepmi' => 13, 'IdDecisionEnveloppe' => 14, 'Ville' => 15, 'AcronymepaysAttributaire' => 16, 'PaysAttributaire' => 17, 'SirenAttributaire' => 18, 'NicAttributaire' => 19, 'IdentifiantnationalAttributaire' => 20, 'RcVilleAttributaire' => 21, 'RcNumAttributaire' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idmarchetranchebudgetaire' => 2, 'numeromarcheannee' => 3, 'idservice' => 4, 'nomattributaire' => 5, 'datenotification' => 6, 'codepostal' => 7, 'naturemarche' => 8, 'objetmarche' => 9, 'montantmarche' => 10, 'valide' => 11, 'ismanuel' => 12, 'pmepmi' => 13, 'idDecisionEnveloppe' => 14, 'ville' => 15, 'acronymepaysAttributaire' => 16, 'paysAttributaire' => 17, 'sirenAttributaire' => 18, 'nicAttributaire' => 19, 'identifiantnationalAttributaire' => 20, 'rcVilleAttributaire' => 21, 'rcNumAttributaire' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonMarchePeer::ID => 0, CommonMarchePeer::ORGANISME => 1, CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE => 2, CommonMarchePeer::NUMEROMARCHEANNEE => 3, CommonMarchePeer::IDSERVICE => 4, CommonMarchePeer::NOMATTRIBUTAIRE => 5, CommonMarchePeer::DATENOTIFICATION => 6, CommonMarchePeer::CODEPOSTAL => 7, CommonMarchePeer::NATUREMARCHE => 8, CommonMarchePeer::OBJETMARCHE => 9, CommonMarchePeer::MONTANTMARCHE => 10, CommonMarchePeer::VALIDE => 11, CommonMarchePeer::ISMANUEL => 12, CommonMarchePeer::PMEPMI => 13, CommonMarchePeer::ID_DECISION_ENVELOPPE => 14, CommonMarchePeer::VILLE => 15, CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE => 16, CommonMarchePeer::PAYS_ATTRIBUTAIRE => 17, CommonMarchePeer::SIREN_ATTRIBUTAIRE => 18, CommonMarchePeer::NIC_ATTRIBUTAIRE => 19, CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE => 20, CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE => 21, CommonMarchePeer::RC_NUM_ATTRIBUTAIRE => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'IDMARCHETRANCHEBUDGETAIRE' => 2, 'NUMEROMARCHEANNEE' => 3, 'IDSERVICE' => 4, 'NOMATTRIBUTAIRE' => 5, 'DATENOTIFICATION' => 6, 'CODEPOSTAL' => 7, 'NATUREMARCHE' => 8, 'OBJETMARCHE' => 9, 'MONTANTMARCHE' => 10, 'VALIDE' => 11, 'ISMANUEL' => 12, 'PMEPMI' => 13, 'ID_DECISION_ENVELOPPE' => 14, 'VILLE' => 15, 'ACRONYMEPAYS_ATTRIBUTAIRE' => 16, 'PAYS_ATTRIBUTAIRE' => 17, 'SIREN_ATTRIBUTAIRE' => 18, 'NIC_ATTRIBUTAIRE' => 19, 'IDENTIFIANTNATIONAL_ATTRIBUTAIRE' => 20, 'RC_VILLE_ATTRIBUTAIRE' => 21, 'RC_NUM_ATTRIBUTAIRE' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'idMarcheTrancheBudgetaire' => 2, 'numeroMarcheAnnee' => 3, 'idService' => 4, 'nomAttributaire' => 5, 'dateNotification' => 6, 'codePostal' => 7, 'natureMarche' => 8, 'objetMarche' => 9, 'montantMarche' => 10, 'valide' => 11, 'isManuel' => 12, 'pmePmi' => 13, 'id_decision_enveloppe' => 14, 'ville' => 15, 'acronymePays_Attributaire' => 16, 'pays_Attributaire' => 17, 'siren_Attributaire' => 18, 'nic_Attributaire' => 19, 'identifiantNational_Attributaire' => 20, 'rc_ville_attributaire' => 21, 'rc_num_attributaire' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonMarchePeer::VALIDE => array(
            CommonMarchePeer::VALIDE_0,
            CommonMarchePeer::VALIDE_1,
        ),
        CommonMarchePeer::ISMANUEL => array(
            CommonMarchePeer::ISMANUEL_0,
            CommonMarchePeer::ISMANUEL_1,
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
        $toNames = CommonMarchePeer::getFieldNames($toType);
        $key = isset(CommonMarchePeer::$fieldKeys[$fromType][$name]) ? CommonMarchePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonMarchePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonMarchePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonMarchePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonMarchePeer::$enumValueSets;
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
        $valueSets = CommonMarchePeer::getValueSets();

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
        $values = CommonMarchePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonMarchePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonMarchePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonMarchePeer::ID);
            $criteria->addSelectColumn(CommonMarchePeer::ORGANISME);
            $criteria->addSelectColumn(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::NUMEROMARCHEANNEE);
            $criteria->addSelectColumn(CommonMarchePeer::IDSERVICE);
            $criteria->addSelectColumn(CommonMarchePeer::NOMATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::DATENOTIFICATION);
            $criteria->addSelectColumn(CommonMarchePeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonMarchePeer::NATUREMARCHE);
            $criteria->addSelectColumn(CommonMarchePeer::OBJETMARCHE);
            $criteria->addSelectColumn(CommonMarchePeer::MONTANTMARCHE);
            $criteria->addSelectColumn(CommonMarchePeer::VALIDE);
            $criteria->addSelectColumn(CommonMarchePeer::ISMANUEL);
            $criteria->addSelectColumn(CommonMarchePeer::PMEPMI);
            $criteria->addSelectColumn(CommonMarchePeer::ID_DECISION_ENVELOPPE);
            $criteria->addSelectColumn(CommonMarchePeer::VILLE);
            $criteria->addSelectColumn(CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::PAYS_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::SIREN_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::NIC_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonMarchePeer::RC_NUM_ATTRIBUTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.idMarcheTrancheBudgetaire');
            $criteria->addSelectColumn($alias . '.numeroMarcheAnnee');
            $criteria->addSelectColumn($alias . '.idService');
            $criteria->addSelectColumn($alias . '.nomAttributaire');
            $criteria->addSelectColumn($alias . '.dateNotification');
            $criteria->addSelectColumn($alias . '.codePostal');
            $criteria->addSelectColumn($alias . '.natureMarche');
            $criteria->addSelectColumn($alias . '.objetMarche');
            $criteria->addSelectColumn($alias . '.montantMarche');
            $criteria->addSelectColumn($alias . '.valide');
            $criteria->addSelectColumn($alias . '.isManuel');
            $criteria->addSelectColumn($alias . '.pmePmi');
            $criteria->addSelectColumn($alias . '.id_decision_enveloppe');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.acronymePays_Attributaire');
            $criteria->addSelectColumn($alias . '.pays_Attributaire');
            $criteria->addSelectColumn($alias . '.siren_Attributaire');
            $criteria->addSelectColumn($alias . '.nic_Attributaire');
            $criteria->addSelectColumn($alias . '.identifiantNational_Attributaire');
            $criteria->addSelectColumn($alias . '.rc_ville_attributaire');
            $criteria->addSelectColumn($alias . '.rc_num_attributaire');
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
        $criteria->setPrimaryTableName(CommonMarchePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonMarchePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonMarchePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMarche
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonMarchePeer::doSelect($critcopy, $con);
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
        return CommonMarchePeer::populateObjects(CommonMarchePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonMarchePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonMarchePeer::DATABASE_NAME);

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
     * @param      CommonMarche $obj A CommonMarche object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonMarchePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonMarche object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonMarche) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonMarche object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonMarchePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonMarche Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonMarchePeer::$instances[$key])) {
                return CommonMarchePeer::$instances[$key];
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
        foreach (CommonMarchePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonMarchePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Marche
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
        $cls = CommonMarchePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonMarchePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonMarchePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonMarchePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonMarche object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonMarchePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonMarchePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonMarchePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonMarchePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonMarchePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonMarchePeer::DATABASE_NAME)->getTable(CommonMarchePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonMarchePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonMarchePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonMarcheTableMap());
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
        return CommonMarchePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonMarche or Criteria object.
     *
     * @param      mixed $values Criteria or CommonMarche object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonMarche object
        }

        if ($criteria->containsKey(CommonMarchePeer::ID) && $criteria->keyContainsValue(CommonMarchePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonMarchePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonMarchePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonMarche or Criteria object.
     *
     * @param      mixed $values Criteria or CommonMarche object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonMarchePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonMarchePeer::ID);
            $value = $criteria->remove(CommonMarchePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonMarchePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonMarchePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonMarchePeer::ORGANISME);
            $value = $criteria->remove(CommonMarchePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonMarchePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonMarchePeer::TABLE_NAME);
            }

        } else { // $values is CommonMarche object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonMarchePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Marche table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonMarchePeer::TABLE_NAME, $con, CommonMarchePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonMarchePeer::clearInstancePool();
            CommonMarchePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonMarche or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonMarche object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonMarchePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonMarche) { // it's a model object
            // invalidate the cache for this single object
            CommonMarchePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonMarchePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonMarchePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonMarchePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonMarchePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonMarchePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonMarchePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonMarche object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonMarche $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonMarchePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonMarchePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonMarchePeer::DATABASE_NAME, CommonMarchePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonMarche
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonMarchePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonMarchePeer::DATABASE_NAME);
        $criteria->add(CommonMarchePeer::ID, $id);
        $criteria->add(CommonMarchePeer::ORGANISME, $organisme);
        $v = CommonMarchePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonMarchePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonMarchePeer::buildTableMap();

