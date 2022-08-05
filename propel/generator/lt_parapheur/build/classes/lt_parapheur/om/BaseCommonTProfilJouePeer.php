<?php


/**
 * Base static class for performing query and update operations on the 'T_Profil_Joue' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTProfilJouePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'T_Profil_Joue';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTProfilJoue';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTProfilJoueTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 38;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 38;

    /** the column name for the id field */
    const ID = 'T_Profil_Joue.id';

    /** the column name for the id_agent field */
    const ID_AGENT = 'T_Profil_Joue.id_agent';

    /** the column name for the organisme field */
    const ORGANISME = 'T_Profil_Joue.organisme';

    /** the column name for the nom_officiel field */
    const NOM_OFFICIEL = 'T_Profil_Joue.nom_officiel';

    /** the column name for the pays field */
    const PAYS = 'T_Profil_Joue.pays';

    /** the column name for the ville field */
    const VILLE = 'T_Profil_Joue.ville';

    /** the column name for the adresse field */
    const ADRESSE = 'T_Profil_Joue.adresse';

    /** the column name for the code_postal field */
    const CODE_POSTAL = 'T_Profil_Joue.code_postal';

    /** the column name for the point_contact field */
    const POINT_CONTACT = 'T_Profil_Joue.point_contact';

    /** the column name for the a_attention_de field */
    const A_ATTENTION_DE = 'T_Profil_Joue.a_attention_de';

    /** the column name for the telephone field */
    const TELEPHONE = 'T_Profil_Joue.telephone';

    /** the column name for the fax field */
    const FAX = 'T_Profil_Joue.fax';

    /** the column name for the email field */
    const EMAIL = 'T_Profil_Joue.email';

    /** the column name for the adresse_pouvoir_adjudicateur field */
    const ADRESSE_POUVOIR_ADJUDICATEUR = 'T_Profil_Joue.adresse_pouvoir_adjudicateur';

    /** the column name for the adresse_profil_acheteur field */
    const ADRESSE_PROFIL_ACHETEUR = 'T_Profil_Joue.adresse_profil_acheteur';

    /** the column name for the autorite_nationale field */
    const AUTORITE_NATIONALE = 'T_Profil_Joue.autorite_nationale';

    /** the column name for the office_nationale field */
    const OFFICE_NATIONALE = 'T_Profil_Joue.office_nationale';

    /** the column name for the collectivite_territoriale field */
    const COLLECTIVITE_TERRITORIALE = 'T_Profil_Joue.collectivite_territoriale';

    /** the column name for the office_regionale field */
    const OFFICE_REGIONALE = 'T_Profil_Joue.office_regionale';

    /** the column name for the organisme_public field */
    const ORGANISME_PUBLIC = 'T_Profil_Joue.organisme_public';

    /** the column name for the organisation_europenne field */
    const ORGANISATION_EUROPENNE = 'T_Profil_Joue.organisation_europenne';

    /** the column name for the autre_type_pouvoir_adjudicateur field */
    const AUTRE_TYPE_POUVOIR_ADJUDICATEUR = 'T_Profil_Joue.autre_type_pouvoir_adjudicateur';

    /** the column name for the autre_libelle_type_pouvoir_adjudicateur field */
    const AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR = 'T_Profil_Joue.autre_libelle_type_pouvoir_adjudicateur';

    /** the column name for the services_generaux field */
    const SERVICES_GENERAUX = 'T_Profil_Joue.services_generaux';

    /** the column name for the defense field */
    const DEFENSE = 'T_Profil_Joue.defense';

    /** the column name for the securite_public field */
    const SECURITE_PUBLIC = 'T_Profil_Joue.securite_public';

    /** the column name for the environnement field */
    const ENVIRONNEMENT = 'T_Profil_Joue.environnement';

    /** the column name for the affaires_economiques field */
    const AFFAIRES_ECONOMIQUES = 'T_Profil_Joue.affaires_economiques';

    /** the column name for the sante field */
    const SANTE = 'T_Profil_Joue.sante';

    /** the column name for the developpement_collectif field */
    const DEVELOPPEMENT_COLLECTIF = 'T_Profil_Joue.developpement_collectif';

    /** the column name for the protection_sociale field */
    const PROTECTION_SOCIALE = 'T_Profil_Joue.protection_sociale';

    /** the column name for the loisirs field */
    const LOISIRS = 'T_Profil_Joue.loisirs';

    /** the column name for the eduction field */
    const EDUCTION = 'T_Profil_Joue.eduction';

    /** the column name for the autre_activites_principales field */
    const AUTRE_ACTIVITES_PRINCIPALES = 'T_Profil_Joue.autre_activites_principales';

    /** the column name for the autre_libelle_activites_principales field */
    const AUTRE_LIBELLE_ACTIVITES_PRINCIPALES = 'T_Profil_Joue.autre_libelle_activites_principales';

    /** the column name for the pouvoir_adjudicateur_agit field */
    const POUVOIR_ADJUDICATEUR_AGIT = 'T_Profil_Joue.pouvoir_adjudicateur_agit';

    /** the column name for the pouvoir_adjudicateur_marche_couvert field */
    const POUVOIR_ADJUDICATEUR_MARCHE_COUVERT = 'T_Profil_Joue.pouvoir_adjudicateur_marche_couvert';

    /** the column name for the entite_adjudicatrice_marche_couvert field */
    const ENTITE_ADJUDICATRICE_MARCHE_COUVERT = 'T_Profil_Joue.entite_adjudicatrice_marche_couvert';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTProfilJoue objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTProfilJoue[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTProfilJouePeer::$fieldNames[CommonTProfilJouePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdAgent', 'Organisme', 'NomOfficiel', 'Pays', 'Ville', 'Adresse', 'CodePostal', 'PointContact', 'AAttentionDe', 'Telephone', 'Fax', 'Email', 'AdressePouvoirAdjudicateur', 'AdresseProfilAcheteur', 'AutoriteNationale', 'OfficeNationale', 'CollectiviteTerritoriale', 'OfficeRegionale', 'OrganismePublic', 'OrganisationEuropenne', 'AutreTypePouvoirAdjudicateur', 'AutreLibelleTypePouvoirAdjudicateur', 'ServicesGeneraux', 'Defense', 'SecuritePublic', 'Environnement', 'AffairesEconomiques', 'Sante', 'DeveloppementCollectif', 'ProtectionSociale', 'Loisirs', 'Eduction', 'AutreActivitesPrincipales', 'AutreLibelleActivitesPrincipales', 'PouvoirAdjudicateurAgit', 'PouvoirAdjudicateurMarcheCouvert', 'EntiteAdjudicatriceMarcheCouvert', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idAgent', 'organisme', 'nomOfficiel', 'pays', 'ville', 'adresse', 'codePostal', 'pointContact', 'aAttentionDe', 'telephone', 'fax', 'email', 'adressePouvoirAdjudicateur', 'adresseProfilAcheteur', 'autoriteNationale', 'officeNationale', 'collectiviteTerritoriale', 'officeRegionale', 'organismePublic', 'organisationEuropenne', 'autreTypePouvoirAdjudicateur', 'autreLibelleTypePouvoirAdjudicateur', 'servicesGeneraux', 'defense', 'securitePublic', 'environnement', 'affairesEconomiques', 'sante', 'developpementCollectif', 'protectionSociale', 'loisirs', 'eduction', 'autreActivitesPrincipales', 'autreLibelleActivitesPrincipales', 'pouvoirAdjudicateurAgit', 'pouvoirAdjudicateurMarcheCouvert', 'entiteAdjudicatriceMarcheCouvert', ),
        BasePeer::TYPE_COLNAME => array (CommonTProfilJouePeer::ID, CommonTProfilJouePeer::ID_AGENT, CommonTProfilJouePeer::ORGANISME, CommonTProfilJouePeer::NOM_OFFICIEL, CommonTProfilJouePeer::PAYS, CommonTProfilJouePeer::VILLE, CommonTProfilJouePeer::ADRESSE, CommonTProfilJouePeer::CODE_POSTAL, CommonTProfilJouePeer::POINT_CONTACT, CommonTProfilJouePeer::A_ATTENTION_DE, CommonTProfilJouePeer::TELEPHONE, CommonTProfilJouePeer::FAX, CommonTProfilJouePeer::EMAIL, CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR, CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR, CommonTProfilJouePeer::AUTORITE_NATIONALE, CommonTProfilJouePeer::OFFICE_NATIONALE, CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE, CommonTProfilJouePeer::OFFICE_REGIONALE, CommonTProfilJouePeer::ORGANISME_PUBLIC, CommonTProfilJouePeer::ORGANISATION_EUROPENNE, CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR, CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR, CommonTProfilJouePeer::SERVICES_GENERAUX, CommonTProfilJouePeer::DEFENSE, CommonTProfilJouePeer::SECURITE_PUBLIC, CommonTProfilJouePeer::ENVIRONNEMENT, CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES, CommonTProfilJouePeer::SANTE, CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF, CommonTProfilJouePeer::PROTECTION_SOCIALE, CommonTProfilJouePeer::LOISIRS, CommonTProfilJouePeer::EDUCTION, CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES, CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES, CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT, CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT, CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_AGENT', 'ORGANISME', 'NOM_OFFICIEL', 'PAYS', 'VILLE', 'ADRESSE', 'CODE_POSTAL', 'POINT_CONTACT', 'A_ATTENTION_DE', 'TELEPHONE', 'FAX', 'EMAIL', 'ADRESSE_POUVOIR_ADJUDICATEUR', 'ADRESSE_PROFIL_ACHETEUR', 'AUTORITE_NATIONALE', 'OFFICE_NATIONALE', 'COLLECTIVITE_TERRITORIALE', 'OFFICE_REGIONALE', 'ORGANISME_PUBLIC', 'ORGANISATION_EUROPENNE', 'AUTRE_TYPE_POUVOIR_ADJUDICATEUR', 'AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR', 'SERVICES_GENERAUX', 'DEFENSE', 'SECURITE_PUBLIC', 'ENVIRONNEMENT', 'AFFAIRES_ECONOMIQUES', 'SANTE', 'DEVELOPPEMENT_COLLECTIF', 'PROTECTION_SOCIALE', 'LOISIRS', 'EDUCTION', 'AUTRE_ACTIVITES_PRINCIPALES', 'AUTRE_LIBELLE_ACTIVITES_PRINCIPALES', 'POUVOIR_ADJUDICATEUR_AGIT', 'POUVOIR_ADJUDICATEUR_MARCHE_COUVERT', 'ENTITE_ADJUDICATRICE_MARCHE_COUVERT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_agent', 'organisme', 'nom_officiel', 'pays', 'ville', 'adresse', 'code_postal', 'point_contact', 'a_attention_de', 'telephone', 'fax', 'email', 'adresse_pouvoir_adjudicateur', 'adresse_profil_acheteur', 'autorite_nationale', 'office_nationale', 'collectivite_territoriale', 'office_regionale', 'organisme_public', 'organisation_europenne', 'autre_type_pouvoir_adjudicateur', 'autre_libelle_type_pouvoir_adjudicateur', 'services_generaux', 'defense', 'securite_public', 'environnement', 'affaires_economiques', 'sante', 'developpement_collectif', 'protection_sociale', 'loisirs', 'eduction', 'autre_activites_principales', 'autre_libelle_activites_principales', 'pouvoir_adjudicateur_agit', 'pouvoir_adjudicateur_marche_couvert', 'entite_adjudicatrice_marche_couvert', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTProfilJouePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdAgent' => 1, 'Organisme' => 2, 'NomOfficiel' => 3, 'Pays' => 4, 'Ville' => 5, 'Adresse' => 6, 'CodePostal' => 7, 'PointContact' => 8, 'AAttentionDe' => 9, 'Telephone' => 10, 'Fax' => 11, 'Email' => 12, 'AdressePouvoirAdjudicateur' => 13, 'AdresseProfilAcheteur' => 14, 'AutoriteNationale' => 15, 'OfficeNationale' => 16, 'CollectiviteTerritoriale' => 17, 'OfficeRegionale' => 18, 'OrganismePublic' => 19, 'OrganisationEuropenne' => 20, 'AutreTypePouvoirAdjudicateur' => 21, 'AutreLibelleTypePouvoirAdjudicateur' => 22, 'ServicesGeneraux' => 23, 'Defense' => 24, 'SecuritePublic' => 25, 'Environnement' => 26, 'AffairesEconomiques' => 27, 'Sante' => 28, 'DeveloppementCollectif' => 29, 'ProtectionSociale' => 30, 'Loisirs' => 31, 'Eduction' => 32, 'AutreActivitesPrincipales' => 33, 'AutreLibelleActivitesPrincipales' => 34, 'PouvoirAdjudicateurAgit' => 35, 'PouvoirAdjudicateurMarcheCouvert' => 36, 'EntiteAdjudicatriceMarcheCouvert' => 37, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idAgent' => 1, 'organisme' => 2, 'nomOfficiel' => 3, 'pays' => 4, 'ville' => 5, 'adresse' => 6, 'codePostal' => 7, 'pointContact' => 8, 'aAttentionDe' => 9, 'telephone' => 10, 'fax' => 11, 'email' => 12, 'adressePouvoirAdjudicateur' => 13, 'adresseProfilAcheteur' => 14, 'autoriteNationale' => 15, 'officeNationale' => 16, 'collectiviteTerritoriale' => 17, 'officeRegionale' => 18, 'organismePublic' => 19, 'organisationEuropenne' => 20, 'autreTypePouvoirAdjudicateur' => 21, 'autreLibelleTypePouvoirAdjudicateur' => 22, 'servicesGeneraux' => 23, 'defense' => 24, 'securitePublic' => 25, 'environnement' => 26, 'affairesEconomiques' => 27, 'sante' => 28, 'developpementCollectif' => 29, 'protectionSociale' => 30, 'loisirs' => 31, 'eduction' => 32, 'autreActivitesPrincipales' => 33, 'autreLibelleActivitesPrincipales' => 34, 'pouvoirAdjudicateurAgit' => 35, 'pouvoirAdjudicateurMarcheCouvert' => 36, 'entiteAdjudicatriceMarcheCouvert' => 37, ),
        BasePeer::TYPE_COLNAME => array (CommonTProfilJouePeer::ID => 0, CommonTProfilJouePeer::ID_AGENT => 1, CommonTProfilJouePeer::ORGANISME => 2, CommonTProfilJouePeer::NOM_OFFICIEL => 3, CommonTProfilJouePeer::PAYS => 4, CommonTProfilJouePeer::VILLE => 5, CommonTProfilJouePeer::ADRESSE => 6, CommonTProfilJouePeer::CODE_POSTAL => 7, CommonTProfilJouePeer::POINT_CONTACT => 8, CommonTProfilJouePeer::A_ATTENTION_DE => 9, CommonTProfilJouePeer::TELEPHONE => 10, CommonTProfilJouePeer::FAX => 11, CommonTProfilJouePeer::EMAIL => 12, CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR => 13, CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR => 14, CommonTProfilJouePeer::AUTORITE_NATIONALE => 15, CommonTProfilJouePeer::OFFICE_NATIONALE => 16, CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE => 17, CommonTProfilJouePeer::OFFICE_REGIONALE => 18, CommonTProfilJouePeer::ORGANISME_PUBLIC => 19, CommonTProfilJouePeer::ORGANISATION_EUROPENNE => 20, CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR => 21, CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR => 22, CommonTProfilJouePeer::SERVICES_GENERAUX => 23, CommonTProfilJouePeer::DEFENSE => 24, CommonTProfilJouePeer::SECURITE_PUBLIC => 25, CommonTProfilJouePeer::ENVIRONNEMENT => 26, CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES => 27, CommonTProfilJouePeer::SANTE => 28, CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF => 29, CommonTProfilJouePeer::PROTECTION_SOCIALE => 30, CommonTProfilJouePeer::LOISIRS => 31, CommonTProfilJouePeer::EDUCTION => 32, CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES => 33, CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES => 34, CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT => 35, CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT => 36, CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT => 37, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_AGENT' => 1, 'ORGANISME' => 2, 'NOM_OFFICIEL' => 3, 'PAYS' => 4, 'VILLE' => 5, 'ADRESSE' => 6, 'CODE_POSTAL' => 7, 'POINT_CONTACT' => 8, 'A_ATTENTION_DE' => 9, 'TELEPHONE' => 10, 'FAX' => 11, 'EMAIL' => 12, 'ADRESSE_POUVOIR_ADJUDICATEUR' => 13, 'ADRESSE_PROFIL_ACHETEUR' => 14, 'AUTORITE_NATIONALE' => 15, 'OFFICE_NATIONALE' => 16, 'COLLECTIVITE_TERRITORIALE' => 17, 'OFFICE_REGIONALE' => 18, 'ORGANISME_PUBLIC' => 19, 'ORGANISATION_EUROPENNE' => 20, 'AUTRE_TYPE_POUVOIR_ADJUDICATEUR' => 21, 'AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR' => 22, 'SERVICES_GENERAUX' => 23, 'DEFENSE' => 24, 'SECURITE_PUBLIC' => 25, 'ENVIRONNEMENT' => 26, 'AFFAIRES_ECONOMIQUES' => 27, 'SANTE' => 28, 'DEVELOPPEMENT_COLLECTIF' => 29, 'PROTECTION_SOCIALE' => 30, 'LOISIRS' => 31, 'EDUCTION' => 32, 'AUTRE_ACTIVITES_PRINCIPALES' => 33, 'AUTRE_LIBELLE_ACTIVITES_PRINCIPALES' => 34, 'POUVOIR_ADJUDICATEUR_AGIT' => 35, 'POUVOIR_ADJUDICATEUR_MARCHE_COUVERT' => 36, 'ENTITE_ADJUDICATRICE_MARCHE_COUVERT' => 37, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_agent' => 1, 'organisme' => 2, 'nom_officiel' => 3, 'pays' => 4, 'ville' => 5, 'adresse' => 6, 'code_postal' => 7, 'point_contact' => 8, 'a_attention_de' => 9, 'telephone' => 10, 'fax' => 11, 'email' => 12, 'adresse_pouvoir_adjudicateur' => 13, 'adresse_profil_acheteur' => 14, 'autorite_nationale' => 15, 'office_nationale' => 16, 'collectivite_territoriale' => 17, 'office_regionale' => 18, 'organisme_public' => 19, 'organisation_europenne' => 20, 'autre_type_pouvoir_adjudicateur' => 21, 'autre_libelle_type_pouvoir_adjudicateur' => 22, 'services_generaux' => 23, 'defense' => 24, 'securite_public' => 25, 'environnement' => 26, 'affaires_economiques' => 27, 'sante' => 28, 'developpement_collectif' => 29, 'protection_sociale' => 30, 'loisirs' => 31, 'eduction' => 32, 'autre_activites_principales' => 33, 'autre_libelle_activites_principales' => 34, 'pouvoir_adjudicateur_agit' => 35, 'pouvoir_adjudicateur_marche_couvert' => 36, 'entite_adjudicatrice_marche_couvert' => 37, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
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
        $toNames = CommonTProfilJouePeer::getFieldNames($toType);
        $key = isset(CommonTProfilJouePeer::$fieldKeys[$fromType][$name]) ? CommonTProfilJouePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTProfilJouePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTProfilJouePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTProfilJouePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTProfilJouePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTProfilJouePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTProfilJouePeer::ID);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ID_AGENT);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ORGANISME);
            $criteria->addSelectColumn(CommonTProfilJouePeer::NOM_OFFICIEL);
            $criteria->addSelectColumn(CommonTProfilJouePeer::PAYS);
            $criteria->addSelectColumn(CommonTProfilJouePeer::VILLE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ADRESSE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::CODE_POSTAL);
            $criteria->addSelectColumn(CommonTProfilJouePeer::POINT_CONTACT);
            $criteria->addSelectColumn(CommonTProfilJouePeer::A_ATTENTION_DE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::TELEPHONE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::FAX);
            $criteria->addSelectColumn(CommonTProfilJouePeer::EMAIL);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AUTORITE_NATIONALE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::OFFICE_NATIONALE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::OFFICE_REGIONALE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ORGANISME_PUBLIC);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ORGANISATION_EUROPENNE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR);
            $criteria->addSelectColumn(CommonTProfilJouePeer::SERVICES_GENERAUX);
            $criteria->addSelectColumn(CommonTProfilJouePeer::DEFENSE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::SECURITE_PUBLIC);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ENVIRONNEMENT);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES);
            $criteria->addSelectColumn(CommonTProfilJouePeer::SANTE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF);
            $criteria->addSelectColumn(CommonTProfilJouePeer::PROTECTION_SOCIALE);
            $criteria->addSelectColumn(CommonTProfilJouePeer::LOISIRS);
            $criteria->addSelectColumn(CommonTProfilJouePeer::EDUCTION);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES);
            $criteria->addSelectColumn(CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES);
            $criteria->addSelectColumn(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT);
            $criteria->addSelectColumn(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT);
            $criteria->addSelectColumn(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.nom_officiel');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.code_postal');
            $criteria->addSelectColumn($alias . '.point_contact');
            $criteria->addSelectColumn($alias . '.a_attention_de');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.adresse_pouvoir_adjudicateur');
            $criteria->addSelectColumn($alias . '.adresse_profil_acheteur');
            $criteria->addSelectColumn($alias . '.autorite_nationale');
            $criteria->addSelectColumn($alias . '.office_nationale');
            $criteria->addSelectColumn($alias . '.collectivite_territoriale');
            $criteria->addSelectColumn($alias . '.office_regionale');
            $criteria->addSelectColumn($alias . '.organisme_public');
            $criteria->addSelectColumn($alias . '.organisation_europenne');
            $criteria->addSelectColumn($alias . '.autre_type_pouvoir_adjudicateur');
            $criteria->addSelectColumn($alias . '.autre_libelle_type_pouvoir_adjudicateur');
            $criteria->addSelectColumn($alias . '.services_generaux');
            $criteria->addSelectColumn($alias . '.defense');
            $criteria->addSelectColumn($alias . '.securite_public');
            $criteria->addSelectColumn($alias . '.environnement');
            $criteria->addSelectColumn($alias . '.affaires_economiques');
            $criteria->addSelectColumn($alias . '.sante');
            $criteria->addSelectColumn($alias . '.developpement_collectif');
            $criteria->addSelectColumn($alias . '.protection_sociale');
            $criteria->addSelectColumn($alias . '.loisirs');
            $criteria->addSelectColumn($alias . '.eduction');
            $criteria->addSelectColumn($alias . '.autre_activites_principales');
            $criteria->addSelectColumn($alias . '.autre_libelle_activites_principales');
            $criteria->addSelectColumn($alias . '.pouvoir_adjudicateur_agit');
            $criteria->addSelectColumn($alias . '.pouvoir_adjudicateur_marche_couvert');
            $criteria->addSelectColumn($alias . '.entite_adjudicatrice_marche_couvert');
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
        $criteria->setPrimaryTableName(CommonTProfilJouePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTProfilJouePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTProfilJouePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTProfilJoue
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTProfilJouePeer::doSelect($critcopy, $con);
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
        return CommonTProfilJouePeer::populateObjects(CommonTProfilJouePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTProfilJouePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTProfilJouePeer::DATABASE_NAME);

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
     * @param      CommonTProfilJoue $obj A CommonTProfilJoue object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTProfilJouePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTProfilJoue object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTProfilJoue) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTProfilJoue object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTProfilJouePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTProfilJoue Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTProfilJouePeer::$instances[$key])) {
                return CommonTProfilJouePeer::$instances[$key];
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
        foreach (CommonTProfilJouePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTProfilJouePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to T_Profil_Joue
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
        $cls = CommonTProfilJouePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTProfilJouePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTProfilJouePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTProfilJouePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTProfilJoue object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTProfilJouePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTProfilJouePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTProfilJouePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTProfilJouePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTProfilJouePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTProfilJouePeer::DATABASE_NAME)->getTable(CommonTProfilJouePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTProfilJouePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTProfilJouePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTProfilJoueTableMap());
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
        return CommonTProfilJouePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTProfilJoue or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTProfilJoue object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTProfilJoue object
        }

        if ($criteria->containsKey(CommonTProfilJouePeer::ID) && $criteria->keyContainsValue(CommonTProfilJouePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTProfilJouePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTProfilJouePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTProfilJoue or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTProfilJoue object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTProfilJouePeer::ID);
            $value = $criteria->remove(CommonTProfilJouePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTProfilJouePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTProfilJouePeer::TABLE_NAME);
            }

        } else { // $values is CommonTProfilJoue object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTProfilJouePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the T_Profil_Joue table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTProfilJouePeer::TABLE_NAME, $con, CommonTProfilJouePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTProfilJouePeer::clearInstancePool();
            CommonTProfilJouePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTProfilJoue or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTProfilJoue object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTProfilJouePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTProfilJoue) { // it's a model object
            // invalidate the cache for this single object
            CommonTProfilJouePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);
            $criteria->add(CommonTProfilJouePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTProfilJouePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTProfilJouePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTProfilJouePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTProfilJoue object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTProfilJoue $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTProfilJouePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTProfilJouePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTProfilJouePeer::DATABASE_NAME, CommonTProfilJouePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTProfilJoue
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTProfilJouePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);
        $criteria->add(CommonTProfilJouePeer::ID, $pk);

        $v = CommonTProfilJouePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTProfilJoue[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);
            $criteria->add(CommonTProfilJouePeer::ID, $pks, Criteria::IN);
            $objs = CommonTProfilJouePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTProfilJouePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTProfilJouePeer::buildTableMap();

