<?php


/**
 * Base static class for performing query and update operations on the 'agent' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'agent';

    /** the related Propel class for this table */
    const OM_CLASS = 'Agent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the ID field */
    const ID = 'agent.ID';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'agent.ID_ENTITE';

    /** the column name for the ID_COMMUNE field */
    const ID_COMMUNE = 'agent.ID_COMMUNE';

    /** the column name for the ID_PROFIL_AGENT field */
    const ID_PROFIL_AGENT = 'agent.ID_PROFIL_AGENT';

    /** the column name for the LOGIN_AGENT field */
    const LOGIN_AGENT = 'agent.LOGIN_AGENT';

    /** the column name for the MOT_DE_PASSE_AGENT field */
    const MOT_DE_PASSE_AGENT = 'agent.MOT_DE_PASSE_AGENT';

    /** the column name for the SALT_AGENT field */
    const SALT_AGENT = 'agent.SALT_AGENT';

    /** the column name for the NOM_AGENT_FR field */
    const NOM_AGENT_FR = 'agent.NOM_AGENT_FR';

    /** the column name for the PRENOM_AGENT_FR field */
    const PRENOM_AGENT_FR = 'agent.PRENOM_AGENT_FR';

    /** the column name for the NOM_AGENT_AR field */
    const NOM_AGENT_AR = 'agent.NOM_AGENT_AR';

    /** the column name for the PRENOM_AGENT_AR field */
    const PRENOM_AGENT_AR = 'agent.PRENOM_AGENT_AR';

    /** the column name for the EMAIL_AGENT field */
    const EMAIL_AGENT = 'agent.EMAIL_AGENT';

    /** the column name for the TEL_AGENT field */
    const TEL_AGENT = 'agent.TEL_AGENT';

    /** the column name for the FAX_AGENT field */
    const FAX_AGENT = 'agent.FAX_AGENT';

    /** the column name for the ETAT_AGENT field */
    const ETAT_AGENT = 'agent.ETAT_AGENT';

    /** the column name for the SUPER_AGENT field */
    const SUPER_AGENT = 'agent.SUPER_AGENT';

    /** the column name for the ETAT_ALERTE field */
    const ETAT_ALERTE = 'agent.ETAT_ALERTE';

    /** the column name for the TYPE_ALERTE field */
    const TYPE_ALERTE = 'agent.TYPE_ALERTE';

    /** the column name for the SIGNATAIRE field */
    const SIGNATAIRE = 'agent.SIGNATAIRE';

    /** the column name for the DATE_DERNIER_ACCES field */
    const DATE_DERNIER_ACCES = 'agent.DATE_DERNIER_ACCES';

    /** the column name for the ID_SOCLE field */
    const ID_SOCLE = 'agent.ID_SOCLE';

    /** the column name for the CENTRE_APPEL field */
    const CENTRE_APPEL = 'agent.CENTRE_APPEL';

    /** the column name for the IDENTIFIANT_AGENT_CA field */
    const IDENTIFIANT_AGENT_CA = 'agent.IDENTIFIANT_AGENT_CA';

    /** the column name for the TYPE_AFFECTATION field */
    const TYPE_AFFECTATION = 'agent.TYPE_AFFECTATION';

    /** the column name for the ID_PJ_SIGNATURE field */
    const ID_PJ_SIGNATURE = 'agent.ID_PJ_SIGNATURE';

    /** the column name for the ID_PJ_SIGNATURE_PARAPHE field */
    const ID_PJ_SIGNATURE_PARAPHE = 'agent.ID_PJ_SIGNATURE_PARAPHE';

    /** the column name for the CERTIFICAT field */
    const CERTIFICAT = 'agent.CERTIFICAT';

    /** the column name for the IDENTIFIANT_CERTIFICAT field */
    const IDENTIFIANT_CERTIFICAT = 'agent.IDENTIFIANT_CERTIFICAT';

    /** the column name for the JETON_VALIDATION field */
    const JETON_VALIDATION = 'agent.JETON_VALIDATION';

    /** the column name for the FILIGRANE field */
    const FILIGRANE = 'agent.FILIGRANE';

    /** the column name for the ID_VERSION field */
    const ID_VERSION = 'agent.ID_VERSION';

    /** the column name for the VERSION_LU field */
    const VERSION_LU = 'agent.VERSION_LU';

    /** the column name for the TENTATIVE_MDP field */
    const TENTATIVE_MDP = 'agent.TENTATIVE_MDP';

    /** the column name for the DATE_BLOCAGE field */
    const DATE_BLOCAGE = 'agent.DATE_BLOCAGE';

    /** The enumerated values for the ETAT_AGENT field */
    const ETAT_AGENT_0 = '0';
    const ETAT_AGENT_1 = '1';

    /** The enumerated values for the SUPER_AGENT field */
    const SUPER_AGENT_0 = '0';
    const SUPER_AGENT_1 = '1';

    /** The enumerated values for the ETAT_ALERTE field */
    const ETAT_ALERTE_0 = '0';
    const ETAT_ALERTE_1 = '1';

    /** The enumerated values for the TYPE_ALERTE field */
    const TYPE_ALERTE_0 = '0';
    const TYPE_ALERTE_1 = '1';
    const TYPE_ALERTE_2 = '2';

    /** The enumerated values for the SIGNATAIRE field */
    const SIGNATAIRE_0 = '0';
    const SIGNATAIRE_1 = '1';

    /** The enumerated values for the CENTRE_APPEL field */
    const CENTRE_APPEL_0 = '0';
    const CENTRE_APPEL_1 = '1';

    /** The enumerated values for the TYPE_AFFECTATION field */
    const TYPE_AFFECTATION_0 = '0';
    const TYPE_AFFECTATION_1 = '1';

    /** The enumerated values for the FILIGRANE field */
    const FILIGRANE_0 = '0';
    const FILIGRANE_1 = '1';

    /** The enumerated values for the VERSION_LU field */
    const VERSION_LU_0 = '0';
    const VERSION_LU_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Agent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Agent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AgentPeer::$fieldNames[AgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdEntite', 'IdCommune', 'IdProfilAgent', 'LoginAgent', 'MotDePasseAgent', 'SaltAgent', 'NomAgentFr', 'PrenomAgentFr', 'NomAgentAr', 'PrenomAgentAr', 'EmailAgent', 'TelAgent', 'FaxAgent', 'EtatAgent', 'SuperAgent', 'EtatAlerte', 'TypeAlerte', 'Signataire', 'DateDernierAcces', 'IdSocle', 'CentreAppel', 'IdentifiantAgentCa', 'TypeAffectation', 'IdPjSignature', 'IdPjSignatureParaphe', 'Certificat', 'IdentifiantCertificat', 'JetonValidation', 'Filigrane', 'IdVersion', 'VersionLu', 'TentativeMdp', 'DateBlocage', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idEntite', 'idCommune', 'idProfilAgent', 'loginAgent', 'motDePasseAgent', 'saltAgent', 'nomAgentFr', 'prenomAgentFr', 'nomAgentAr', 'prenomAgentAr', 'emailAgent', 'telAgent', 'faxAgent', 'etatAgent', 'superAgent', 'etatAlerte', 'typeAlerte', 'signataire', 'dateDernierAcces', 'idSocle', 'centreAppel', 'identifiantAgentCa', 'typeAffectation', 'idPjSignature', 'idPjSignatureParaphe', 'certificat', 'identifiantCertificat', 'jetonValidation', 'filigrane', 'idVersion', 'versionLu', 'tentativeMdp', 'dateBlocage', ),
        BasePeer::TYPE_COLNAME => array (AgentPeer::ID, AgentPeer::ID_ENTITE, AgentPeer::ID_COMMUNE, AgentPeer::ID_PROFIL_AGENT, AgentPeer::LOGIN_AGENT, AgentPeer::MOT_DE_PASSE_AGENT, AgentPeer::SALT_AGENT, AgentPeer::NOM_AGENT_FR, AgentPeer::PRENOM_AGENT_FR, AgentPeer::NOM_AGENT_AR, AgentPeer::PRENOM_AGENT_AR, AgentPeer::EMAIL_AGENT, AgentPeer::TEL_AGENT, AgentPeer::FAX_AGENT, AgentPeer::ETAT_AGENT, AgentPeer::SUPER_AGENT, AgentPeer::ETAT_ALERTE, AgentPeer::TYPE_ALERTE, AgentPeer::SIGNATAIRE, AgentPeer::DATE_DERNIER_ACCES, AgentPeer::ID_SOCLE, AgentPeer::CENTRE_APPEL, AgentPeer::IDENTIFIANT_AGENT_CA, AgentPeer::TYPE_AFFECTATION, AgentPeer::ID_PJ_SIGNATURE, AgentPeer::ID_PJ_SIGNATURE_PARAPHE, AgentPeer::CERTIFICAT, AgentPeer::IDENTIFIANT_CERTIFICAT, AgentPeer::JETON_VALIDATION, AgentPeer::FILIGRANE, AgentPeer::ID_VERSION, AgentPeer::VERSION_LU, AgentPeer::TENTATIVE_MDP, AgentPeer::DATE_BLOCAGE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_ENTITE', 'ID_COMMUNE', 'ID_PROFIL_AGENT', 'LOGIN_AGENT', 'MOT_DE_PASSE_AGENT', 'SALT_AGENT', 'NOM_AGENT_FR', 'PRENOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_AR', 'EMAIL_AGENT', 'TEL_AGENT', 'FAX_AGENT', 'ETAT_AGENT', 'SUPER_AGENT', 'ETAT_ALERTE', 'TYPE_ALERTE', 'SIGNATAIRE', 'DATE_DERNIER_ACCES', 'ID_SOCLE', 'CENTRE_APPEL', 'IDENTIFIANT_AGENT_CA', 'TYPE_AFFECTATION', 'ID_PJ_SIGNATURE', 'ID_PJ_SIGNATURE_PARAPHE', 'CERTIFICAT', 'IDENTIFIANT_CERTIFICAT', 'JETON_VALIDATION', 'FILIGRANE', 'ID_VERSION', 'VERSION_LU', 'TENTATIVE_MDP', 'DATE_BLOCAGE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_ENTITE', 'ID_COMMUNE', 'ID_PROFIL_AGENT', 'LOGIN_AGENT', 'MOT_DE_PASSE_AGENT', 'SALT_AGENT', 'NOM_AGENT_FR', 'PRENOM_AGENT_FR', 'NOM_AGENT_AR', 'PRENOM_AGENT_AR', 'EMAIL_AGENT', 'TEL_AGENT', 'FAX_AGENT', 'ETAT_AGENT', 'SUPER_AGENT', 'ETAT_ALERTE', 'TYPE_ALERTE', 'SIGNATAIRE', 'DATE_DERNIER_ACCES', 'ID_SOCLE', 'CENTRE_APPEL', 'IDENTIFIANT_AGENT_CA', 'TYPE_AFFECTATION', 'ID_PJ_SIGNATURE', 'ID_PJ_SIGNATURE_PARAPHE', 'CERTIFICAT', 'IDENTIFIANT_CERTIFICAT', 'JETON_VALIDATION', 'FILIGRANE', 'ID_VERSION', 'VERSION_LU', 'TENTATIVE_MDP', 'DATE_BLOCAGE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdEntite' => 1, 'IdCommune' => 2, 'IdProfilAgent' => 3, 'LoginAgent' => 4, 'MotDePasseAgent' => 5, 'SaltAgent' => 6, 'NomAgentFr' => 7, 'PrenomAgentFr' => 8, 'NomAgentAr' => 9, 'PrenomAgentAr' => 10, 'EmailAgent' => 11, 'TelAgent' => 12, 'FaxAgent' => 13, 'EtatAgent' => 14, 'SuperAgent' => 15, 'EtatAlerte' => 16, 'TypeAlerte' => 17, 'Signataire' => 18, 'DateDernierAcces' => 19, 'IdSocle' => 20, 'CentreAppel' => 21, 'IdentifiantAgentCa' => 22, 'TypeAffectation' => 23, 'IdPjSignature' => 24, 'IdPjSignatureParaphe' => 25, 'Certificat' => 26, 'IdentifiantCertificat' => 27, 'JetonValidation' => 28, 'Filigrane' => 29, 'IdVersion' => 30, 'VersionLu' => 31, 'TentativeMdp' => 32, 'DateBlocage' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idEntite' => 1, 'idCommune' => 2, 'idProfilAgent' => 3, 'loginAgent' => 4, 'motDePasseAgent' => 5, 'saltAgent' => 6, 'nomAgentFr' => 7, 'prenomAgentFr' => 8, 'nomAgentAr' => 9, 'prenomAgentAr' => 10, 'emailAgent' => 11, 'telAgent' => 12, 'faxAgent' => 13, 'etatAgent' => 14, 'superAgent' => 15, 'etatAlerte' => 16, 'typeAlerte' => 17, 'signataire' => 18, 'dateDernierAcces' => 19, 'idSocle' => 20, 'centreAppel' => 21, 'identifiantAgentCa' => 22, 'typeAffectation' => 23, 'idPjSignature' => 24, 'idPjSignatureParaphe' => 25, 'certificat' => 26, 'identifiantCertificat' => 27, 'jetonValidation' => 28, 'filigrane' => 29, 'idVersion' => 30, 'versionLu' => 31, 'tentativeMdp' => 32, 'dateBlocage' => 33, ),
        BasePeer::TYPE_COLNAME => array (AgentPeer::ID => 0, AgentPeer::ID_ENTITE => 1, AgentPeer::ID_COMMUNE => 2, AgentPeer::ID_PROFIL_AGENT => 3, AgentPeer::LOGIN_AGENT => 4, AgentPeer::MOT_DE_PASSE_AGENT => 5, AgentPeer::SALT_AGENT => 6, AgentPeer::NOM_AGENT_FR => 7, AgentPeer::PRENOM_AGENT_FR => 8, AgentPeer::NOM_AGENT_AR => 9, AgentPeer::PRENOM_AGENT_AR => 10, AgentPeer::EMAIL_AGENT => 11, AgentPeer::TEL_AGENT => 12, AgentPeer::FAX_AGENT => 13, AgentPeer::ETAT_AGENT => 14, AgentPeer::SUPER_AGENT => 15, AgentPeer::ETAT_ALERTE => 16, AgentPeer::TYPE_ALERTE => 17, AgentPeer::SIGNATAIRE => 18, AgentPeer::DATE_DERNIER_ACCES => 19, AgentPeer::ID_SOCLE => 20, AgentPeer::CENTRE_APPEL => 21, AgentPeer::IDENTIFIANT_AGENT_CA => 22, AgentPeer::TYPE_AFFECTATION => 23, AgentPeer::ID_PJ_SIGNATURE => 24, AgentPeer::ID_PJ_SIGNATURE_PARAPHE => 25, AgentPeer::CERTIFICAT => 26, AgentPeer::IDENTIFIANT_CERTIFICAT => 27, AgentPeer::JETON_VALIDATION => 28, AgentPeer::FILIGRANE => 29, AgentPeer::ID_VERSION => 30, AgentPeer::VERSION_LU => 31, AgentPeer::TENTATIVE_MDP => 32, AgentPeer::DATE_BLOCAGE => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_ENTITE' => 1, 'ID_COMMUNE' => 2, 'ID_PROFIL_AGENT' => 3, 'LOGIN_AGENT' => 4, 'MOT_DE_PASSE_AGENT' => 5, 'SALT_AGENT' => 6, 'NOM_AGENT_FR' => 7, 'PRENOM_AGENT_FR' => 8, 'NOM_AGENT_AR' => 9, 'PRENOM_AGENT_AR' => 10, 'EMAIL_AGENT' => 11, 'TEL_AGENT' => 12, 'FAX_AGENT' => 13, 'ETAT_AGENT' => 14, 'SUPER_AGENT' => 15, 'ETAT_ALERTE' => 16, 'TYPE_ALERTE' => 17, 'SIGNATAIRE' => 18, 'DATE_DERNIER_ACCES' => 19, 'ID_SOCLE' => 20, 'CENTRE_APPEL' => 21, 'IDENTIFIANT_AGENT_CA' => 22, 'TYPE_AFFECTATION' => 23, 'ID_PJ_SIGNATURE' => 24, 'ID_PJ_SIGNATURE_PARAPHE' => 25, 'CERTIFICAT' => 26, 'IDENTIFIANT_CERTIFICAT' => 27, 'JETON_VALIDATION' => 28, 'FILIGRANE' => 29, 'ID_VERSION' => 30, 'VERSION_LU' => 31, 'TENTATIVE_MDP' => 32, 'DATE_BLOCAGE' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_ENTITE' => 1, 'ID_COMMUNE' => 2, 'ID_PROFIL_AGENT' => 3, 'LOGIN_AGENT' => 4, 'MOT_DE_PASSE_AGENT' => 5, 'SALT_AGENT' => 6, 'NOM_AGENT_FR' => 7, 'PRENOM_AGENT_FR' => 8, 'NOM_AGENT_AR' => 9, 'PRENOM_AGENT_AR' => 10, 'EMAIL_AGENT' => 11, 'TEL_AGENT' => 12, 'FAX_AGENT' => 13, 'ETAT_AGENT' => 14, 'SUPER_AGENT' => 15, 'ETAT_ALERTE' => 16, 'TYPE_ALERTE' => 17, 'SIGNATAIRE' => 18, 'DATE_DERNIER_ACCES' => 19, 'ID_SOCLE' => 20, 'CENTRE_APPEL' => 21, 'IDENTIFIANT_AGENT_CA' => 22, 'TYPE_AFFECTATION' => 23, 'ID_PJ_SIGNATURE' => 24, 'ID_PJ_SIGNATURE_PARAPHE' => 25, 'CERTIFICAT' => 26, 'IDENTIFIANT_CERTIFICAT' => 27, 'JETON_VALIDATION' => 28, 'FILIGRANE' => 29, 'ID_VERSION' => 30, 'VERSION_LU' => 31, 'TENTATIVE_MDP' => 32, 'DATE_BLOCAGE' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        AgentPeer::ETAT_AGENT => array(
            AgentPeer::ETAT_AGENT_0,
            AgentPeer::ETAT_AGENT_1,
        ),
        AgentPeer::SUPER_AGENT => array(
            AgentPeer::SUPER_AGENT_0,
            AgentPeer::SUPER_AGENT_1,
        ),
        AgentPeer::ETAT_ALERTE => array(
            AgentPeer::ETAT_ALERTE_0,
            AgentPeer::ETAT_ALERTE_1,
        ),
        AgentPeer::TYPE_ALERTE => array(
            AgentPeer::TYPE_ALERTE_0,
            AgentPeer::TYPE_ALERTE_1,
            AgentPeer::TYPE_ALERTE_2,
        ),
        AgentPeer::SIGNATAIRE => array(
            AgentPeer::SIGNATAIRE_0,
            AgentPeer::SIGNATAIRE_1,
        ),
        AgentPeer::CENTRE_APPEL => array(
            AgentPeer::CENTRE_APPEL_0,
            AgentPeer::CENTRE_APPEL_1,
        ),
        AgentPeer::TYPE_AFFECTATION => array(
            AgentPeer::TYPE_AFFECTATION_0,
            AgentPeer::TYPE_AFFECTATION_1,
        ),
        AgentPeer::FILIGRANE => array(
            AgentPeer::FILIGRANE_0,
            AgentPeer::FILIGRANE_1,
        ),
        AgentPeer::VERSION_LU => array(
            AgentPeer::VERSION_LU_0,
            AgentPeer::VERSION_LU_1,
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
        $toNames = AgentPeer::getFieldNames($toType);
        $key = isset(AgentPeer::$fieldKeys[$fromType][$name]) ? AgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AgentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AgentPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return AgentPeer::$enumValueSets;
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
        $valueSets = AgentPeer::getValueSets();

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
        $values = AgentPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. AgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AgentPeer::ID);
            $criteria->addSelectColumn(AgentPeer::ID_ENTITE);
            $criteria->addSelectColumn(AgentPeer::ID_COMMUNE);
            $criteria->addSelectColumn(AgentPeer::ID_PROFIL_AGENT);
            $criteria->addSelectColumn(AgentPeer::LOGIN_AGENT);
            $criteria->addSelectColumn(AgentPeer::MOT_DE_PASSE_AGENT);
            $criteria->addSelectColumn(AgentPeer::SALT_AGENT);
            $criteria->addSelectColumn(AgentPeer::NOM_AGENT_FR);
            $criteria->addSelectColumn(AgentPeer::PRENOM_AGENT_FR);
            $criteria->addSelectColumn(AgentPeer::NOM_AGENT_AR);
            $criteria->addSelectColumn(AgentPeer::PRENOM_AGENT_AR);
            $criteria->addSelectColumn(AgentPeer::EMAIL_AGENT);
            $criteria->addSelectColumn(AgentPeer::TEL_AGENT);
            $criteria->addSelectColumn(AgentPeer::FAX_AGENT);
            $criteria->addSelectColumn(AgentPeer::ETAT_AGENT);
            $criteria->addSelectColumn(AgentPeer::SUPER_AGENT);
            $criteria->addSelectColumn(AgentPeer::ETAT_ALERTE);
            $criteria->addSelectColumn(AgentPeer::TYPE_ALERTE);
            $criteria->addSelectColumn(AgentPeer::SIGNATAIRE);
            $criteria->addSelectColumn(AgentPeer::DATE_DERNIER_ACCES);
            $criteria->addSelectColumn(AgentPeer::ID_SOCLE);
            $criteria->addSelectColumn(AgentPeer::CENTRE_APPEL);
            $criteria->addSelectColumn(AgentPeer::IDENTIFIANT_AGENT_CA);
            $criteria->addSelectColumn(AgentPeer::TYPE_AFFECTATION);
            $criteria->addSelectColumn(AgentPeer::ID_PJ_SIGNATURE);
            $criteria->addSelectColumn(AgentPeer::ID_PJ_SIGNATURE_PARAPHE);
            $criteria->addSelectColumn(AgentPeer::CERTIFICAT);
            $criteria->addSelectColumn(AgentPeer::IDENTIFIANT_CERTIFICAT);
            $criteria->addSelectColumn(AgentPeer::JETON_VALIDATION);
            $criteria->addSelectColumn(AgentPeer::FILIGRANE);
            $criteria->addSelectColumn(AgentPeer::ID_VERSION);
            $criteria->addSelectColumn(AgentPeer::VERSION_LU);
            $criteria->addSelectColumn(AgentPeer::TENTATIVE_MDP);
            $criteria->addSelectColumn(AgentPeer::DATE_BLOCAGE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_COMMUNE');
            $criteria->addSelectColumn($alias . '.ID_PROFIL_AGENT');
            $criteria->addSelectColumn($alias . '.LOGIN_AGENT');
            $criteria->addSelectColumn($alias . '.MOT_DE_PASSE_AGENT');
            $criteria->addSelectColumn($alias . '.SALT_AGENT');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.EMAIL_AGENT');
            $criteria->addSelectColumn($alias . '.TEL_AGENT');
            $criteria->addSelectColumn($alias . '.FAX_AGENT');
            $criteria->addSelectColumn($alias . '.ETAT_AGENT');
            $criteria->addSelectColumn($alias . '.SUPER_AGENT');
            $criteria->addSelectColumn($alias . '.ETAT_ALERTE');
            $criteria->addSelectColumn($alias . '.TYPE_ALERTE');
            $criteria->addSelectColumn($alias . '.SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.DATE_DERNIER_ACCES');
            $criteria->addSelectColumn($alias . '.ID_SOCLE');
            $criteria->addSelectColumn($alias . '.CENTRE_APPEL');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_AGENT_CA');
            $criteria->addSelectColumn($alias . '.TYPE_AFFECTATION');
            $criteria->addSelectColumn($alias . '.ID_PJ_SIGNATURE');
            $criteria->addSelectColumn($alias . '.ID_PJ_SIGNATURE_PARAPHE');
            $criteria->addSelectColumn($alias . '.CERTIFICAT');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_CERTIFICAT');
            $criteria->addSelectColumn($alias . '.JETON_VALIDATION');
            $criteria->addSelectColumn($alias . '.FILIGRANE');
            $criteria->addSelectColumn($alias . '.ID_VERSION');
            $criteria->addSelectColumn($alias . '.VERSION_LU');
            $criteria->addSelectColumn($alias . '.TENTATIVE_MDP');
            $criteria->addSelectColumn($alias . '.DATE_BLOCAGE');
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
        $criteria->setPrimaryTableName(AgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Agent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AgentPeer::doSelect($critcopy, $con);
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
        return AgentPeer::populateObjects(AgentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AgentPeer::DATABASE_NAME);

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
     * @param      Agent $obj A Agent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            AgentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Agent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Agent) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Agent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Agent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AgentPeer::$instances[$key])) {
                return AgentPeer::$instances[$key];
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
        foreach (AgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to agent
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
        $cls = AgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AgentPeer::addInstanceToPool($obj, $key);
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
     * @return array (Agent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AgentPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AgentPeer::DATABASE_NAME)->getTable(AgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new AgentTableMap());
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
        return AgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Agent or Criteria object.
     *
     * @param      mixed $values Criteria or Agent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Agent object
        }

        if ($criteria->containsKey(AgentPeer::ID) && $criteria->keyContainsValue(AgentPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AgentPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AgentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Agent or Criteria object.
     *
     * @param      mixed $values Criteria or Agent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AgentPeer::ID);
            $value = $criteria->remove(AgentPeer::ID);
            if ($value) {
                $selectCriteria->add(AgentPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AgentPeer::TABLE_NAME);
            }

        } else { // $values is Agent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the agent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AgentPeer::TABLE_NAME, $con, AgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AgentPeer::clearInstancePool();
            AgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Agent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Agent object or primary key or array of primary keys
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
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Agent) { // it's a model object
            // invalidate the cache for this single object
            AgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AgentPeer::DATABASE_NAME);
            $criteria->add(AgentPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AgentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            AgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Agent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Agent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AgentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AgentPeer::DATABASE_NAME, AgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Agent
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AgentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AgentPeer::DATABASE_NAME);
        $criteria->add(AgentPeer::ID, $pk);

        $v = AgentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Agent[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AgentPeer::DATABASE_NAME);
            $criteria->add(AgentPeer::ID, $pks, Criteria::IN);
            $objs = AgentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAgentPeer::buildTableMap();

