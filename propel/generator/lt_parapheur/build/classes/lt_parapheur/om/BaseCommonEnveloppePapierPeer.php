<?php


/**
 * Base static class for performing query and update operations on the 'Enveloppe_papier' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnveloppePapierPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Enveloppe_papier';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnveloppePapier';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnveloppePapierTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id_enveloppe_papier field */
    const ID_ENVELOPPE_PAPIER = 'Enveloppe_papier.id_enveloppe_papier';

    /** the column name for the organisme field */
    const ORGANISME = 'Enveloppe_papier.organisme';

    /** the column name for the offre_papier_id field */
    const OFFRE_PAPIER_ID = 'Enveloppe_papier.offre_papier_id';

    /** the column name for the statut field */
    const STATUT = 'Enveloppe_papier.statut';

    /** the column name for the supprime field */
    const SUPPRIME = 'Enveloppe_papier.supprime';

    /** the column name for the cryptage field */
    const CRYPTAGE = 'Enveloppe_papier.cryptage';

    /** the column name for the is_send field */
    const IS_SEND = 'Enveloppe_papier.is_send';

    /** the column name for the type_env field */
    const TYPE_ENV = 'Enveloppe_papier.type_env';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'Enveloppe_papier.sous_pli';

    /** the column name for the champs_optionnels field */
    const CHAMPS_OPTIONNELS = 'Enveloppe_papier.champs_optionnels';

    /** the column name for the agent_id_ouverture field */
    const AGENT_ID_OUVERTURE = 'Enveloppe_papier.agent_id_ouverture';

    /** the column name for the dateheure_ouverture field */
    const DATEHEURE_OUVERTURE = 'Enveloppe_papier.dateheure_ouverture';

    /** the column name for the statut_enveloppe field */
    const STATUT_ENVELOPPE = 'Enveloppe_papier.statut_enveloppe';

    /** the column name for the enveloppe_postule field */
    const ENVELOPPE_POSTULE = 'Enveloppe_papier.enveloppe_postule';

    /** the column name for the nom_agent_ouverture field */
    const NOM_AGENT_OUVERTURE = 'Enveloppe_papier.nom_agent_ouverture';

    /** the column name for the montant field */
    const MONTANT = 'Enveloppe_papier.montant';

    /** the column name for the montant_apres_modification field */
    const MONTANT_APRES_MODIFICATION = 'Enveloppe_papier.montant_apres_modification';

    /** the column name for the type_attributaire field */
    const TYPE_ATTRIBUTAIRE = 'Enveloppe_papier.type_attributaire';

    /** the column name for the devise field */
    const DEVISE = 'Enveloppe_papier.devise';

    /** the column name for the rabais_preference_national field */
    const RABAIS_PREFERENCE_NATIONAL = 'Enveloppe_papier.rabais_preference_national';

    /** the column name for the type_correction_montant field */
    const TYPE_CORRECTION_MONTANT = 'Enveloppe_papier.type_correction_montant';

    /** The enumerated values for the enveloppe_postule field */
    const ENVELOPPE_POSTULE_0 = '0';
    const ENVELOPPE_POSTULE_1 = '1';

    /** The enumerated values for the type_attributaire field */
    const TYPE_ATTRIBUTAIRE_1 = '1';
    const TYPE_ATTRIBUTAIRE_2 = '2';
    const TYPE_ATTRIBUTAIRE_3 = '3';
    const TYPE_ATTRIBUTAIRE_4 = '4';

    /** The enumerated values for the rabais_preference_national field */
    const RABAIS_PREFERENCE_NATIONAL_0 = '0';
    const RABAIS_PREFERENCE_NATIONAL_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEnveloppePapier objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnveloppePapier[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppePapierPeer::$fieldNames[CommonEnveloppePapierPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppePapier', 'Organisme', 'OffrePapierId', 'Statut', 'Supprime', 'Cryptage', 'IsSend', 'TypeEnv', 'SousPli', 'ChampsOptionnels', 'AgentIdOuverture', 'DateheureOuverture', 'StatutEnveloppe', 'EnveloppePostule', 'NomAgentOuverture', 'Montant', 'MontantApresModification', 'TypeAttributaire', 'Devise', 'RabaisPreferenceNational', 'TypeCorrectionMontant', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppePapier', 'organisme', 'offrePapierId', 'statut', 'supprime', 'cryptage', 'isSend', 'typeEnv', 'sousPli', 'champsOptionnels', 'agentIdOuverture', 'dateheureOuverture', 'statutEnveloppe', 'enveloppePostule', 'nomAgentOuverture', 'montant', 'montantApresModification', 'typeAttributaire', 'devise', 'rabaisPreferenceNational', 'typeCorrectionMontant', ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, CommonEnveloppePapierPeer::ORGANISME, CommonEnveloppePapierPeer::OFFRE_PAPIER_ID, CommonEnveloppePapierPeer::STATUT, CommonEnveloppePapierPeer::SUPPRIME, CommonEnveloppePapierPeer::CRYPTAGE, CommonEnveloppePapierPeer::IS_SEND, CommonEnveloppePapierPeer::TYPE_ENV, CommonEnveloppePapierPeer::SOUS_PLI, CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS, CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE, CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE, CommonEnveloppePapierPeer::STATUT_ENVELOPPE, CommonEnveloppePapierPeer::ENVELOPPE_POSTULE, CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE, CommonEnveloppePapierPeer::MONTANT, CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION, CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE, CommonEnveloppePapierPeer::DEVISE, CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL, CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_PAPIER', 'ORGANISME', 'OFFRE_PAPIER_ID', 'STATUT', 'SUPPRIME', 'CRYPTAGE', 'IS_SEND', 'TYPE_ENV', 'SOUS_PLI', 'CHAMPS_OPTIONNELS', 'AGENT_ID_OUVERTURE', 'DATEHEURE_OUVERTURE', 'STATUT_ENVELOPPE', 'ENVELOPPE_POSTULE', 'NOM_AGENT_OUVERTURE', 'MONTANT', 'MONTANT_APRES_MODIFICATION', 'TYPE_ATTRIBUTAIRE', 'DEVISE', 'RABAIS_PREFERENCE_NATIONAL', 'TYPE_CORRECTION_MONTANT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_papier', 'organisme', 'offre_papier_id', 'statut', 'supprime', 'cryptage', 'is_send', 'type_env', 'sous_pli', 'champs_optionnels', 'agent_id_ouverture', 'dateheure_ouverture', 'statut_enveloppe', 'enveloppe_postule', 'nom_agent_ouverture', 'montant', 'montant_apres_modification', 'type_attributaire', 'devise', 'rabais_preference_national', 'type_correction_montant', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppePapierPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppePapier' => 0, 'Organisme' => 1, 'OffrePapierId' => 2, 'Statut' => 3, 'Supprime' => 4, 'Cryptage' => 5, 'IsSend' => 6, 'TypeEnv' => 7, 'SousPli' => 8, 'ChampsOptionnels' => 9, 'AgentIdOuverture' => 10, 'DateheureOuverture' => 11, 'StatutEnveloppe' => 12, 'EnveloppePostule' => 13, 'NomAgentOuverture' => 14, 'Montant' => 15, 'MontantApresModification' => 16, 'TypeAttributaire' => 17, 'Devise' => 18, 'RabaisPreferenceNational' => 19, 'TypeCorrectionMontant' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppePapier' => 0, 'organisme' => 1, 'offrePapierId' => 2, 'statut' => 3, 'supprime' => 4, 'cryptage' => 5, 'isSend' => 6, 'typeEnv' => 7, 'sousPli' => 8, 'champsOptionnels' => 9, 'agentIdOuverture' => 10, 'dateheureOuverture' => 11, 'statutEnveloppe' => 12, 'enveloppePostule' => 13, 'nomAgentOuverture' => 14, 'montant' => 15, 'montantApresModification' => 16, 'typeAttributaire' => 17, 'devise' => 18, 'rabaisPreferenceNational' => 19, 'typeCorrectionMontant' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER => 0, CommonEnveloppePapierPeer::ORGANISME => 1, CommonEnveloppePapierPeer::OFFRE_PAPIER_ID => 2, CommonEnveloppePapierPeer::STATUT => 3, CommonEnveloppePapierPeer::SUPPRIME => 4, CommonEnveloppePapierPeer::CRYPTAGE => 5, CommonEnveloppePapierPeer::IS_SEND => 6, CommonEnveloppePapierPeer::TYPE_ENV => 7, CommonEnveloppePapierPeer::SOUS_PLI => 8, CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS => 9, CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE => 10, CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE => 11, CommonEnveloppePapierPeer::STATUT_ENVELOPPE => 12, CommonEnveloppePapierPeer::ENVELOPPE_POSTULE => 13, CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE => 14, CommonEnveloppePapierPeer::MONTANT => 15, CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION => 16, CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE => 17, CommonEnveloppePapierPeer::DEVISE => 18, CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL => 19, CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_PAPIER' => 0, 'ORGANISME' => 1, 'OFFRE_PAPIER_ID' => 2, 'STATUT' => 3, 'SUPPRIME' => 4, 'CRYPTAGE' => 5, 'IS_SEND' => 6, 'TYPE_ENV' => 7, 'SOUS_PLI' => 8, 'CHAMPS_OPTIONNELS' => 9, 'AGENT_ID_OUVERTURE' => 10, 'DATEHEURE_OUVERTURE' => 11, 'STATUT_ENVELOPPE' => 12, 'ENVELOPPE_POSTULE' => 13, 'NOM_AGENT_OUVERTURE' => 14, 'MONTANT' => 15, 'MONTANT_APRES_MODIFICATION' => 16, 'TYPE_ATTRIBUTAIRE' => 17, 'DEVISE' => 18, 'RABAIS_PREFERENCE_NATIONAL' => 19, 'TYPE_CORRECTION_MONTANT' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_papier' => 0, 'organisme' => 1, 'offre_papier_id' => 2, 'statut' => 3, 'supprime' => 4, 'cryptage' => 5, 'is_send' => 6, 'type_env' => 7, 'sous_pli' => 8, 'champs_optionnels' => 9, 'agent_id_ouverture' => 10, 'dateheure_ouverture' => 11, 'statut_enveloppe' => 12, 'enveloppe_postule' => 13, 'nom_agent_ouverture' => 14, 'montant' => 15, 'montant_apres_modification' => 16, 'type_attributaire' => 17, 'devise' => 18, 'rabais_preference_national' => 19, 'type_correction_montant' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEnveloppePapierPeer::ENVELOPPE_POSTULE => array(
            CommonEnveloppePapierPeer::ENVELOPPE_POSTULE_0,
            CommonEnveloppePapierPeer::ENVELOPPE_POSTULE_1,
        ),
        CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE => array(
            CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE_1,
            CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE_2,
            CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE_3,
            CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE_4,
        ),
        CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL => array(
            CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL_0,
            CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL_1,
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
        $toNames = CommonEnveloppePapierPeer::getFieldNames($toType);
        $key = isset(CommonEnveloppePapierPeer::$fieldKeys[$fromType][$name]) ? CommonEnveloppePapierPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnveloppePapierPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnveloppePapierPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnveloppePapierPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEnveloppePapierPeer::$enumValueSets;
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
        $valueSets = CommonEnveloppePapierPeer::getValueSets();

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
        $values = CommonEnveloppePapierPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEnveloppePapierPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnveloppePapierPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::ORGANISME);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::STATUT);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::SUPPRIME);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::CRYPTAGE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::IS_SEND);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::TYPE_ENV);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::STATUT_ENVELOPPE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::ENVELOPPE_POSTULE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::MONTANT);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::DEVISE);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL);
            $criteria->addSelectColumn(CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT);
        } else {
            $criteria->addSelectColumn($alias . '.id_enveloppe_papier');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.offre_papier_id');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.supprime');
            $criteria->addSelectColumn($alias . '.cryptage');
            $criteria->addSelectColumn($alias . '.is_send');
            $criteria->addSelectColumn($alias . '.type_env');
            $criteria->addSelectColumn($alias . '.sous_pli');
            $criteria->addSelectColumn($alias . '.champs_optionnels');
            $criteria->addSelectColumn($alias . '.agent_id_ouverture');
            $criteria->addSelectColumn($alias . '.dateheure_ouverture');
            $criteria->addSelectColumn($alias . '.statut_enveloppe');
            $criteria->addSelectColumn($alias . '.enveloppe_postule');
            $criteria->addSelectColumn($alias . '.nom_agent_ouverture');
            $criteria->addSelectColumn($alias . '.montant');
            $criteria->addSelectColumn($alias . '.montant_apres_modification');
            $criteria->addSelectColumn($alias . '.type_attributaire');
            $criteria->addSelectColumn($alias . '.devise');
            $criteria->addSelectColumn($alias . '.rabais_preference_national');
            $criteria->addSelectColumn($alias . '.type_correction_montant');
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
        $criteria->setPrimaryTableName(CommonEnveloppePapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnveloppePapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnveloppePapierPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppePapier
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnveloppePapierPeer::doSelect($critcopy, $con);
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
        return CommonEnveloppePapierPeer::populateObjects(CommonEnveloppePapierPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnveloppePapierPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePapierPeer::DATABASE_NAME);

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
     * @param      CommonEnveloppePapier $obj A CommonEnveloppePapier object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdEnveloppePapier(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEnveloppePapierPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnveloppePapier object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnveloppePapier) {
                $key = serialize(array((string) $value->getIdEnveloppePapier(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnveloppePapier object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnveloppePapierPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnveloppePapier Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnveloppePapierPeer::$instances[$key])) {
                return CommonEnveloppePapierPeer::$instances[$key];
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
        foreach (CommonEnveloppePapierPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnveloppePapierPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Enveloppe_papier
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
        $cls = CommonEnveloppePapierPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnveloppePapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnveloppePapierPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnveloppePapierPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnveloppePapier object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnveloppePapierPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnveloppePapierPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnveloppePapierPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnveloppePapierPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnveloppePapierPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEnveloppePapierPeer::DATABASE_NAME)->getTable(CommonEnveloppePapierPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnveloppePapierPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnveloppePapierPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnveloppePapierTableMap());
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
        return CommonEnveloppePapierPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnveloppePapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppePapier object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnveloppePapier object
        }

        if ($criteria->containsKey(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER) && $criteria->keyContainsValue(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePapierPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnveloppePapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppePapier object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnveloppePapierPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER);
            $value = $criteria->remove(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER);
            if ($value) {
                $selectCriteria->add(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnveloppePapierPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEnveloppePapierPeer::ORGANISME);
            $value = $criteria->remove(CommonEnveloppePapierPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEnveloppePapierPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnveloppePapierPeer::TABLE_NAME);
            }

        } else { // $values is CommonEnveloppePapier object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnveloppePapierPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Enveloppe_papier table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEnveloppePapierPeer::TABLE_NAME, $con, CommonEnveloppePapierPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnveloppePapierPeer::clearInstancePool();
            CommonEnveloppePapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnveloppePapier or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnveloppePapier object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEnveloppePapierPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnveloppePapier) { // it's a model object
            // invalidate the cache for this single object
            CommonEnveloppePapierPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnveloppePapierPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEnveloppePapierPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEnveloppePapierPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePapierPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnveloppePapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEnveloppePapier object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnveloppePapier $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnveloppePapierPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnveloppePapierPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnveloppePapierPeer::DATABASE_NAME, CommonEnveloppePapierPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_enveloppe_papier
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEnveloppePapier
     */
    public static function retrieveByPK($id_enveloppe_papier, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_enveloppe_papier, (string) $organisme));
         if (null !== ($obj = CommonEnveloppePapierPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEnveloppePapierPeer::DATABASE_NAME);
        $criteria->add(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $id_enveloppe_papier);
        $criteria->add(CommonEnveloppePapierPeer::ORGANISME, $organisme);
        $v = CommonEnveloppePapierPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEnveloppePapierPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnveloppePapierPeer::buildTableMap();

