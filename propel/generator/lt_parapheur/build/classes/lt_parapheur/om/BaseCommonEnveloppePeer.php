<?php


/**
 * Base static class for performing query and update operations on the 'Enveloppe' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnveloppePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Enveloppe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnveloppe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnveloppeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 30;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 30;

    /** the column name for the id_enveloppe_electro field */
    const ID_ENVELOPPE_ELECTRO = 'Enveloppe.id_enveloppe_electro';

    /** the column name for the organisme field */
    const ORGANISME = 'Enveloppe.organisme';

    /** the column name for the offre_id field */
    const OFFRE_ID = 'Enveloppe.offre_id';

    /** the column name for the champs_optionnels field */
    const CHAMPS_OPTIONNELS = 'Enveloppe.champs_optionnels';

    /** the column name for the fichier field */
    const FICHIER = 'Enveloppe.fichier';

    /** the column name for the supprime field */
    const SUPPRIME = 'Enveloppe.supprime';

    /** the column name for the cryptage field */
    const CRYPTAGE = 'Enveloppe.cryptage';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'Enveloppe.nom_fichier';

    /** the column name for the hash field */
    const HASH = 'Enveloppe.hash';

    /** the column name for the type_env field */
    const TYPE_ENV = 'Enveloppe.type_env';

    /** the column name for the sous_pli field */
    const SOUS_PLI = 'Enveloppe.sous_pli';

    /** the column name for the attribue field */
    const ATTRIBUE = 'Enveloppe.attribue';

    /** the column name for the dateheure_ouverture field */
    const DATEHEURE_OUVERTURE = 'Enveloppe.dateheure_ouverture';

    /** the column name for the agent_id_ouverture field */
    const AGENT_ID_OUVERTURE = 'Enveloppe.agent_id_ouverture';

    /** the column name for the agent_id_ouverture2 field */
    const AGENT_ID_OUVERTURE2 = 'Enveloppe.agent_id_ouverture2';

    /** the column name for the donnees_ouverture field */
    const DONNEES_OUVERTURE = 'Enveloppe.donnees_ouverture';

    /** the column name for the horodatage_donnees_ouverture field */
    const HORODATAGE_DONNEES_OUVERTURE = 'Enveloppe.horodatage_donnees_ouverture';

    /** the column name for the statut_enveloppe field */
    const STATUT_ENVELOPPE = 'Enveloppe.statut_enveloppe';

    /** the column name for the agent_telechargement field */
    const AGENT_TELECHARGEMENT = 'Enveloppe.agent_telechargement';

    /** the column name for the date_telechargement field */
    const DATE_TELECHARGEMENT = 'Enveloppe.date_telechargement';

    /** the column name for the repertoire_telechargement field */
    const REPERTOIRE_TELECHARGEMENT = 'Enveloppe.repertoire_telechargement';

    /** the column name for the nom_agent_ouverture field */
    const NOM_AGENT_OUVERTURE = 'Enveloppe.nom_agent_ouverture';

    /** the column name for the dateheure_ouverture_agent2 field */
    const DATEHEURE_OUVERTURE_AGENT2 = 'Enveloppe.dateheure_ouverture_agent2';

    /** the column name for the certificat field */
    const CERTIFICAT = 'Enveloppe.certificat';

    /** the column name for the montant field */
    const MONTANT = 'Enveloppe.montant';

    /** the column name for the montant_apres_modification field */
    const MONTANT_APRES_MODIFICATION = 'Enveloppe.montant_apres_modification';

    /** the column name for the type_attributaire field */
    const TYPE_ATTRIBUTAIRE = 'Enveloppe.type_attributaire';

    /** the column name for the devise field */
    const DEVISE = 'Enveloppe.devise';

    /** the column name for the rabais_preference_national field */
    const RABAIS_PREFERENCE_NATIONAL = 'Enveloppe.rabais_preference_national';

    /** the column name for the type_correction_montant field */
    const TYPE_CORRECTION_MONTANT = 'Enveloppe.type_correction_montant';

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
     * An identity map to hold any loaded instances of CommonEnveloppe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnveloppe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppePeer::$fieldNames[CommonEnveloppePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppeElectro', 'Organisme', 'OffreId', 'ChampsOptionnels', 'Fichier', 'Supprime', 'Cryptage', 'NomFichier', 'Hash', 'TypeEnv', 'SousPli', 'Attribue', 'DateheureOuverture', 'AgentIdOuverture', 'AgentIdOuverture2', 'DonneesOuverture', 'HorodatageDonneesOuverture', 'StatutEnveloppe', 'AgentTelechargement', 'DateTelechargement', 'RepertoireTelechargement', 'NomAgentOuverture', 'DateheureOuvertureAgent2', 'Certificat', 'Montant', 'MontantApresModification', 'TypeAttributaire', 'Devise', 'RabaisPreferenceNational', 'TypeCorrectionMontant', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppeElectro', 'organisme', 'offreId', 'champsOptionnels', 'fichier', 'supprime', 'cryptage', 'nomFichier', 'hash', 'typeEnv', 'sousPli', 'attribue', 'dateheureOuverture', 'agentIdOuverture', 'agentIdOuverture2', 'donneesOuverture', 'horodatageDonneesOuverture', 'statutEnveloppe', 'agentTelechargement', 'dateTelechargement', 'repertoireTelechargement', 'nomAgentOuverture', 'dateheureOuvertureAgent2', 'certificat', 'montant', 'montantApresModification', 'typeAttributaire', 'devise', 'rabaisPreferenceNational', 'typeCorrectionMontant', ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, CommonEnveloppePeer::ORGANISME, CommonEnveloppePeer::OFFRE_ID, CommonEnveloppePeer::CHAMPS_OPTIONNELS, CommonEnveloppePeer::FICHIER, CommonEnveloppePeer::SUPPRIME, CommonEnveloppePeer::CRYPTAGE, CommonEnveloppePeer::NOM_FICHIER, CommonEnveloppePeer::HASH, CommonEnveloppePeer::TYPE_ENV, CommonEnveloppePeer::SOUS_PLI, CommonEnveloppePeer::ATTRIBUE, CommonEnveloppePeer::DATEHEURE_OUVERTURE, CommonEnveloppePeer::AGENT_ID_OUVERTURE, CommonEnveloppePeer::AGENT_ID_OUVERTURE2, CommonEnveloppePeer::DONNEES_OUVERTURE, CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE, CommonEnveloppePeer::STATUT_ENVELOPPE, CommonEnveloppePeer::AGENT_TELECHARGEMENT, CommonEnveloppePeer::DATE_TELECHARGEMENT, CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT, CommonEnveloppePeer::NOM_AGENT_OUVERTURE, CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2, CommonEnveloppePeer::CERTIFICAT, CommonEnveloppePeer::MONTANT, CommonEnveloppePeer::MONTANT_APRES_MODIFICATION, CommonEnveloppePeer::TYPE_ATTRIBUTAIRE, CommonEnveloppePeer::DEVISE, CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL, CommonEnveloppePeer::TYPE_CORRECTION_MONTANT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_ELECTRO', 'ORGANISME', 'OFFRE_ID', 'CHAMPS_OPTIONNELS', 'FICHIER', 'SUPPRIME', 'CRYPTAGE', 'NOM_FICHIER', 'HASH', 'TYPE_ENV', 'SOUS_PLI', 'ATTRIBUE', 'DATEHEURE_OUVERTURE', 'AGENT_ID_OUVERTURE', 'AGENT_ID_OUVERTURE2', 'DONNEES_OUVERTURE', 'HORODATAGE_DONNEES_OUVERTURE', 'STATUT_ENVELOPPE', 'AGENT_TELECHARGEMENT', 'DATE_TELECHARGEMENT', 'REPERTOIRE_TELECHARGEMENT', 'NOM_AGENT_OUVERTURE', 'DATEHEURE_OUVERTURE_AGENT2', 'CERTIFICAT', 'MONTANT', 'MONTANT_APRES_MODIFICATION', 'TYPE_ATTRIBUTAIRE', 'DEVISE', 'RABAIS_PREFERENCE_NATIONAL', 'TYPE_CORRECTION_MONTANT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_electro', 'organisme', 'offre_id', 'champs_optionnels', 'fichier', 'supprime', 'cryptage', 'nom_fichier', 'hash', 'type_env', 'sous_pli', 'attribue', 'dateheure_ouverture', 'agent_id_ouverture', 'agent_id_ouverture2', 'donnees_ouverture', 'horodatage_donnees_ouverture', 'statut_enveloppe', 'agent_telechargement', 'date_telechargement', 'repertoire_telechargement', 'nom_agent_ouverture', 'dateheure_ouverture_agent2', 'certificat', 'montant', 'montant_apres_modification', 'type_attributaire', 'devise', 'rabais_preference_national', 'type_correction_montant', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEnveloppeElectro' => 0, 'Organisme' => 1, 'OffreId' => 2, 'ChampsOptionnels' => 3, 'Fichier' => 4, 'Supprime' => 5, 'Cryptage' => 6, 'NomFichier' => 7, 'Hash' => 8, 'TypeEnv' => 9, 'SousPli' => 10, 'Attribue' => 11, 'DateheureOuverture' => 12, 'AgentIdOuverture' => 13, 'AgentIdOuverture2' => 14, 'DonneesOuverture' => 15, 'HorodatageDonneesOuverture' => 16, 'StatutEnveloppe' => 17, 'AgentTelechargement' => 18, 'DateTelechargement' => 19, 'RepertoireTelechargement' => 20, 'NomAgentOuverture' => 21, 'DateheureOuvertureAgent2' => 22, 'Certificat' => 23, 'Montant' => 24, 'MontantApresModification' => 25, 'TypeAttributaire' => 26, 'Devise' => 27, 'RabaisPreferenceNational' => 28, 'TypeCorrectionMontant' => 29, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEnveloppeElectro' => 0, 'organisme' => 1, 'offreId' => 2, 'champsOptionnels' => 3, 'fichier' => 4, 'supprime' => 5, 'cryptage' => 6, 'nomFichier' => 7, 'hash' => 8, 'typeEnv' => 9, 'sousPli' => 10, 'attribue' => 11, 'dateheureOuverture' => 12, 'agentIdOuverture' => 13, 'agentIdOuverture2' => 14, 'donneesOuverture' => 15, 'horodatageDonneesOuverture' => 16, 'statutEnveloppe' => 17, 'agentTelechargement' => 18, 'dateTelechargement' => 19, 'repertoireTelechargement' => 20, 'nomAgentOuverture' => 21, 'dateheureOuvertureAgent2' => 22, 'certificat' => 23, 'montant' => 24, 'montantApresModification' => 25, 'typeAttributaire' => 26, 'devise' => 27, 'rabaisPreferenceNational' => 28, 'typeCorrectionMontant' => 29, ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO => 0, CommonEnveloppePeer::ORGANISME => 1, CommonEnveloppePeer::OFFRE_ID => 2, CommonEnveloppePeer::CHAMPS_OPTIONNELS => 3, CommonEnveloppePeer::FICHIER => 4, CommonEnveloppePeer::SUPPRIME => 5, CommonEnveloppePeer::CRYPTAGE => 6, CommonEnveloppePeer::NOM_FICHIER => 7, CommonEnveloppePeer::HASH => 8, CommonEnveloppePeer::TYPE_ENV => 9, CommonEnveloppePeer::SOUS_PLI => 10, CommonEnveloppePeer::ATTRIBUE => 11, CommonEnveloppePeer::DATEHEURE_OUVERTURE => 12, CommonEnveloppePeer::AGENT_ID_OUVERTURE => 13, CommonEnveloppePeer::AGENT_ID_OUVERTURE2 => 14, CommonEnveloppePeer::DONNEES_OUVERTURE => 15, CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE => 16, CommonEnveloppePeer::STATUT_ENVELOPPE => 17, CommonEnveloppePeer::AGENT_TELECHARGEMENT => 18, CommonEnveloppePeer::DATE_TELECHARGEMENT => 19, CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT => 20, CommonEnveloppePeer::NOM_AGENT_OUVERTURE => 21, CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2 => 22, CommonEnveloppePeer::CERTIFICAT => 23, CommonEnveloppePeer::MONTANT => 24, CommonEnveloppePeer::MONTANT_APRES_MODIFICATION => 25, CommonEnveloppePeer::TYPE_ATTRIBUTAIRE => 26, CommonEnveloppePeer::DEVISE => 27, CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL => 28, CommonEnveloppePeer::TYPE_CORRECTION_MONTANT => 29, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENVELOPPE_ELECTRO' => 0, 'ORGANISME' => 1, 'OFFRE_ID' => 2, 'CHAMPS_OPTIONNELS' => 3, 'FICHIER' => 4, 'SUPPRIME' => 5, 'CRYPTAGE' => 6, 'NOM_FICHIER' => 7, 'HASH' => 8, 'TYPE_ENV' => 9, 'SOUS_PLI' => 10, 'ATTRIBUE' => 11, 'DATEHEURE_OUVERTURE' => 12, 'AGENT_ID_OUVERTURE' => 13, 'AGENT_ID_OUVERTURE2' => 14, 'DONNEES_OUVERTURE' => 15, 'HORODATAGE_DONNEES_OUVERTURE' => 16, 'STATUT_ENVELOPPE' => 17, 'AGENT_TELECHARGEMENT' => 18, 'DATE_TELECHARGEMENT' => 19, 'REPERTOIRE_TELECHARGEMENT' => 20, 'NOM_AGENT_OUVERTURE' => 21, 'DATEHEURE_OUVERTURE_AGENT2' => 22, 'CERTIFICAT' => 23, 'MONTANT' => 24, 'MONTANT_APRES_MODIFICATION' => 25, 'TYPE_ATTRIBUTAIRE' => 26, 'DEVISE' => 27, 'RABAIS_PREFERENCE_NATIONAL' => 28, 'TYPE_CORRECTION_MONTANT' => 29, ),
        BasePeer::TYPE_FIELDNAME => array ('id_enveloppe_electro' => 0, 'organisme' => 1, 'offre_id' => 2, 'champs_optionnels' => 3, 'fichier' => 4, 'supprime' => 5, 'cryptage' => 6, 'nom_fichier' => 7, 'hash' => 8, 'type_env' => 9, 'sous_pli' => 10, 'attribue' => 11, 'dateheure_ouverture' => 12, 'agent_id_ouverture' => 13, 'agent_id_ouverture2' => 14, 'donnees_ouverture' => 15, 'horodatage_donnees_ouverture' => 16, 'statut_enveloppe' => 17, 'agent_telechargement' => 18, 'date_telechargement' => 19, 'repertoire_telechargement' => 20, 'nom_agent_ouverture' => 21, 'dateheure_ouverture_agent2' => 22, 'certificat' => 23, 'montant' => 24, 'montant_apres_modification' => 25, 'type_attributaire' => 26, 'devise' => 27, 'rabais_preference_national' => 28, 'type_correction_montant' => 29, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEnveloppePeer::TYPE_ATTRIBUTAIRE => array(
            CommonEnveloppePeer::TYPE_ATTRIBUTAIRE_1,
            CommonEnveloppePeer::TYPE_ATTRIBUTAIRE_2,
            CommonEnveloppePeer::TYPE_ATTRIBUTAIRE_3,
            CommonEnveloppePeer::TYPE_ATTRIBUTAIRE_4,
        ),
        CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL => array(
            CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL_0,
            CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL_1,
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
        $toNames = CommonEnveloppePeer::getFieldNames($toType);
        $key = isset(CommonEnveloppePeer::$fieldKeys[$fromType][$name]) ? CommonEnveloppePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnveloppePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnveloppePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnveloppePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEnveloppePeer::$enumValueSets;
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
        $valueSets = CommonEnveloppePeer::getValueSets();

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
        $values = CommonEnveloppePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEnveloppePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnveloppePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO);
            $criteria->addSelectColumn(CommonEnveloppePeer::ORGANISME);
            $criteria->addSelectColumn(CommonEnveloppePeer::OFFRE_ID);
            $criteria->addSelectColumn(CommonEnveloppePeer::CHAMPS_OPTIONNELS);
            $criteria->addSelectColumn(CommonEnveloppePeer::FICHIER);
            $criteria->addSelectColumn(CommonEnveloppePeer::SUPPRIME);
            $criteria->addSelectColumn(CommonEnveloppePeer::CRYPTAGE);
            $criteria->addSelectColumn(CommonEnveloppePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonEnveloppePeer::HASH);
            $criteria->addSelectColumn(CommonEnveloppePeer::TYPE_ENV);
            $criteria->addSelectColumn(CommonEnveloppePeer::SOUS_PLI);
            $criteria->addSelectColumn(CommonEnveloppePeer::ATTRIBUE);
            $criteria->addSelectColumn(CommonEnveloppePeer::DATEHEURE_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePeer::AGENT_ID_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePeer::AGENT_ID_OUVERTURE2);
            $criteria->addSelectColumn(CommonEnveloppePeer::DONNEES_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePeer::STATUT_ENVELOPPE);
            $criteria->addSelectColumn(CommonEnveloppePeer::AGENT_TELECHARGEMENT);
            $criteria->addSelectColumn(CommonEnveloppePeer::DATE_TELECHARGEMENT);
            $criteria->addSelectColumn(CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT);
            $criteria->addSelectColumn(CommonEnveloppePeer::NOM_AGENT_OUVERTURE);
            $criteria->addSelectColumn(CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2);
            $criteria->addSelectColumn(CommonEnveloppePeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonEnveloppePeer::MONTANT);
            $criteria->addSelectColumn(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION);
            $criteria->addSelectColumn(CommonEnveloppePeer::TYPE_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonEnveloppePeer::DEVISE);
            $criteria->addSelectColumn(CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL);
            $criteria->addSelectColumn(CommonEnveloppePeer::TYPE_CORRECTION_MONTANT);
        } else {
            $criteria->addSelectColumn($alias . '.id_enveloppe_electro');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.offre_id');
            $criteria->addSelectColumn($alias . '.champs_optionnels');
            $criteria->addSelectColumn($alias . '.fichier');
            $criteria->addSelectColumn($alias . '.supprime');
            $criteria->addSelectColumn($alias . '.cryptage');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.hash');
            $criteria->addSelectColumn($alias . '.type_env');
            $criteria->addSelectColumn($alias . '.sous_pli');
            $criteria->addSelectColumn($alias . '.attribue');
            $criteria->addSelectColumn($alias . '.dateheure_ouverture');
            $criteria->addSelectColumn($alias . '.agent_id_ouverture');
            $criteria->addSelectColumn($alias . '.agent_id_ouverture2');
            $criteria->addSelectColumn($alias . '.donnees_ouverture');
            $criteria->addSelectColumn($alias . '.horodatage_donnees_ouverture');
            $criteria->addSelectColumn($alias . '.statut_enveloppe');
            $criteria->addSelectColumn($alias . '.agent_telechargement');
            $criteria->addSelectColumn($alias . '.date_telechargement');
            $criteria->addSelectColumn($alias . '.repertoire_telechargement');
            $criteria->addSelectColumn($alias . '.nom_agent_ouverture');
            $criteria->addSelectColumn($alias . '.dateheure_ouverture_agent2');
            $criteria->addSelectColumn($alias . '.certificat');
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
        $criteria->setPrimaryTableName(CommonEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnveloppePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnveloppePeer::doSelect($critcopy, $con);
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
        return CommonEnveloppePeer::populateObjects(CommonEnveloppePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnveloppePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePeer::DATABASE_NAME);

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
     * @param      CommonEnveloppe $obj A CommonEnveloppe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdEnveloppeElectro(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEnveloppePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnveloppe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnveloppe) {
                $key = serialize(array((string) $value->getIdEnveloppeElectro(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnveloppe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnveloppePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnveloppe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnveloppePeer::$instances[$key])) {
                return CommonEnveloppePeer::$instances[$key];
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
        foreach (CommonEnveloppePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnveloppePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Enveloppe
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
        $cls = CommonEnveloppePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnveloppePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnveloppePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnveloppe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnveloppePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnveloppePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnveloppePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnveloppePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEnveloppePeer::DATABASE_NAME)->getTable(CommonEnveloppePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnveloppePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnveloppePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnveloppeTableMap());
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
        return CommonEnveloppePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnveloppe object
        }

        if ($criteria->containsKey(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO) && $criteria->keyContainsValue(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnveloppePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO);
            $value = $criteria->remove(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO);
            if ($value) {
                $selectCriteria->add(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnveloppePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEnveloppePeer::ORGANISME);
            $value = $criteria->remove(CommonEnveloppePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEnveloppePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnveloppePeer::TABLE_NAME);
            }

        } else { // $values is CommonEnveloppe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnveloppePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Enveloppe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEnveloppePeer::TABLE_NAME, $con, CommonEnveloppePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnveloppePeer::clearInstancePool();
            CommonEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnveloppe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnveloppe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEnveloppePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnveloppe) { // it's a model object
            // invalidate the cache for this single object
            CommonEnveloppePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnveloppePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEnveloppePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEnveloppePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEnveloppe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnveloppe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnveloppePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnveloppePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnveloppePeer::DATABASE_NAME, CommonEnveloppePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_enveloppe_electro
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEnveloppe
     */
    public static function retrieveByPK($id_enveloppe_electro, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_enveloppe_electro, (string) $organisme));
         if (null !== ($obj = CommonEnveloppePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $id_enveloppe_electro);
        $criteria->add(CommonEnveloppePeer::ORGANISME, $organisme);
        $v = CommonEnveloppePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEnveloppePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnveloppePeer::buildTableMap();

