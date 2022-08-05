<?php


/**
 * Base static class for performing query and update operations on the 'Organisme' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonOrganismePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Organisme';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonOrganisme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonOrganismeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 84;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 84;

    /** the column name for the id field */
    const ID = 'Organisme.id';

    /** the column name for the acronyme field */
    const ACRONYME = 'Organisme.acronyme';

    /** the column name for the type_article_org field */
    const TYPE_ARTICLE_ORG = 'Organisme.type_article_org';

    /** the column name for the denomination_org field */
    const DENOMINATION_ORG = 'Organisme.denomination_org';

    /** the column name for the categorie_insee field */
    const CATEGORIE_INSEE = 'Organisme.categorie_insee';

    /** the column name for the description_org field */
    const DESCRIPTION_ORG = 'Organisme.description_org';

    /** the column name for the adresse field */
    const ADRESSE = 'Organisme.adresse';

    /** the column name for the cp field */
    const CP = 'Organisme.cp';

    /** the column name for the ville field */
    const VILLE = 'Organisme.ville';

    /** the column name for the email field */
    const EMAIL = 'Organisme.email';

    /** the column name for the url field */
    const URL = 'Organisme.url';

    /** the column name for the id_attrib_file field */
    const ID_ATTRIB_FILE = 'Organisme.id_attrib_file';

    /** the column name for the attrib_file field */
    const ATTRIB_FILE = 'Organisme.attrib_file';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Organisme.date_creation';

    /** the column name for the active field */
    const ACTIVE = 'Organisme.active';

    /** the column name for the id_client_ANM field */
    const ID_CLIENT_ANM = 'Organisme.id_client_ANM';

    /** the column name for the status field */
    const STATUS = 'Organisme.status';

    /** the column name for the signataire_cao field */
    const SIGNATAIRE_CAO = 'Organisme.signataire_cao';

    /** the column name for the offset field */
    const OFFSET = 'Organisme.offset';

    /** the column name for the sigle field */
    const SIGLE = 'Organisme.sigle';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Organisme.adresse2';

    /** the column name for the tel field */
    const TEL = 'Organisme.tel';

    /** the column name for the telecopie field */
    const TELECOPIE = 'Organisme.telecopie';

    /** the column name for the pays field */
    const PAYS = 'Organisme.pays';

    /** the column name for the affichage_entite field */
    const AFFICHAGE_ENTITE = 'Organisme.affichage_entite';

    /** the column name for the id_initial field */
    const ID_INITIAL = 'Organisme.id_initial';

    /** the column name for the denomination_org_ar field */
    const DENOMINATION_ORG_AR = 'Organisme.denomination_org_ar';

    /** the column name for the description_org_ar field */
    const DESCRIPTION_ORG_AR = 'Organisme.description_org_ar';

    /** the column name for the adresse_ar field */
    const ADRESSE_AR = 'Organisme.adresse_ar';

    /** the column name for the ville_ar field */
    const VILLE_AR = 'Organisme.ville_ar';

    /** the column name for the adresse2_ar field */
    const ADRESSE2_AR = 'Organisme.adresse2_ar';

    /** the column name for the pays_ar field */
    const PAYS_AR = 'Organisme.pays_ar';

    /** the column name for the denomination_org_fr field */
    const DENOMINATION_ORG_FR = 'Organisme.denomination_org_fr';

    /** the column name for the description_org_fr field */
    const DESCRIPTION_ORG_FR = 'Organisme.description_org_fr';

    /** the column name for the adresse_fr field */
    const ADRESSE_FR = 'Organisme.adresse_fr';

    /** the column name for the ville_fr field */
    const VILLE_FR = 'Organisme.ville_fr';

    /** the column name for the adresse2_fr field */
    const ADRESSE2_FR = 'Organisme.adresse2_fr';

    /** the column name for the pays_fr field */
    const PAYS_FR = 'Organisme.pays_fr';

    /** the column name for the denomination_org_es field */
    const DENOMINATION_ORG_ES = 'Organisme.denomination_org_es';

    /** the column name for the description_org_es field */
    const DESCRIPTION_ORG_ES = 'Organisme.description_org_es';

    /** the column name for the adresse_es field */
    const ADRESSE_ES = 'Organisme.adresse_es';

    /** the column name for the ville_es field */
    const VILLE_ES = 'Organisme.ville_es';

    /** the column name for the adresse2_es field */
    const ADRESSE2_ES = 'Organisme.adresse2_es';

    /** the column name for the pays_es field */
    const PAYS_ES = 'Organisme.pays_es';

    /** the column name for the denomination_org_en field */
    const DENOMINATION_ORG_EN = 'Organisme.denomination_org_en';

    /** the column name for the description_org_en field */
    const DESCRIPTION_ORG_EN = 'Organisme.description_org_en';

    /** the column name for the adresse_en field */
    const ADRESSE_EN = 'Organisme.adresse_en';

    /** the column name for the ville_en field */
    const VILLE_EN = 'Organisme.ville_en';

    /** the column name for the adresse2_en field */
    const ADRESSE2_EN = 'Organisme.adresse2_en';

    /** the column name for the pays_en field */
    const PAYS_EN = 'Organisme.pays_en';

    /** the column name for the denomination_org_su field */
    const DENOMINATION_ORG_SU = 'Organisme.denomination_org_su';

    /** the column name for the description_org_su field */
    const DESCRIPTION_ORG_SU = 'Organisme.description_org_su';

    /** the column name for the adresse_su field */
    const ADRESSE_SU = 'Organisme.adresse_su';

    /** the column name for the ville_su field */
    const VILLE_SU = 'Organisme.ville_su';

    /** the column name for the adresse2_su field */
    const ADRESSE2_SU = 'Organisme.adresse2_su';

    /** the column name for the pays_su field */
    const PAYS_SU = 'Organisme.pays_su';

    /** the column name for the denomination_org_du field */
    const DENOMINATION_ORG_DU = 'Organisme.denomination_org_du';

    /** the column name for the description_org_du field */
    const DESCRIPTION_ORG_DU = 'Organisme.description_org_du';

    /** the column name for the adresse_du field */
    const ADRESSE_DU = 'Organisme.adresse_du';

    /** the column name for the ville_du field */
    const VILLE_DU = 'Organisme.ville_du';

    /** the column name for the adresse2_du field */
    const ADRESSE2_DU = 'Organisme.adresse2_du';

    /** the column name for the pays_du field */
    const PAYS_DU = 'Organisme.pays_du';

    /** the column name for the denomination_org_cz field */
    const DENOMINATION_ORG_CZ = 'Organisme.denomination_org_cz';

    /** the column name for the description_org_cz field */
    const DESCRIPTION_ORG_CZ = 'Organisme.description_org_cz';

    /** the column name for the adresse_cz field */
    const ADRESSE_CZ = 'Organisme.adresse_cz';

    /** the column name for the ville_cz field */
    const VILLE_CZ = 'Organisme.ville_cz';

    /** the column name for the adresse2_cz field */
    const ADRESSE2_CZ = 'Organisme.adresse2_cz';

    /** the column name for the pays_cz field */
    const PAYS_CZ = 'Organisme.pays_cz';

    /** the column name for the denomination_org_it field */
    const DENOMINATION_ORG_IT = 'Organisme.denomination_org_it';

    /** the column name for the description_org_it field */
    const DESCRIPTION_ORG_IT = 'Organisme.description_org_it';

    /** the column name for the adresse_it field */
    const ADRESSE_IT = 'Organisme.adresse_it';

    /** the column name for the ville_it field */
    const VILLE_IT = 'Organisme.ville_it';

    /** the column name for the adresse2_it field */
    const ADRESSE2_IT = 'Organisme.adresse2_it';

    /** the column name for the pays_it field */
    const PAYS_IT = 'Organisme.pays_it';

    /** the column name for the siren field */
    const SIREN = 'Organisme.siren';

    /** the column name for the complement field */
    const COMPLEMENT = 'Organisme.complement';

    /** the column name for the moniteur_provenance field */
    const MONITEUR_PROVENANCE = 'Organisme.moniteur_provenance';

    /** the column name for the code_acces_logiciel field */
    const CODE_ACCES_LOGICIEL = 'Organisme.code_acces_logiciel';

    /** the column name for the decalage_horaire field */
    const DECALAGE_HORAIRE = 'Organisme.decalage_horaire';

    /** the column name for the lieu_residence field */
    const LIEU_RESIDENCE = 'Organisme.lieu_residence';

    /** the column name for the activation_fuseau_horaire field */
    const ACTIVATION_FUSEAU_HORAIRE = 'Organisme.activation_fuseau_horaire';

    /** the column name for the alerte field */
    const ALERTE = 'Organisme.alerte';

    /** the column name for the ordre field */
    const ORDRE = 'Organisme.ordre';

    /** the column name for the URL_INTERFACE_ANM field */
    const URL_INTERFACE_ANM = 'Organisme.URL_INTERFACE_ANM';

    /** The enumerated values for the status field */
    const STATUS_0 = '0';
    const STATUS_1 = '1';

    /** The enumerated values for the activation_fuseau_horaire field */
    const ACTIVATION_FUSEAU_HORAIRE_0 = '0';
    const ACTIVATION_FUSEAU_HORAIRE_1 = '1';

    /** The enumerated values for the alerte field */
    const ALERTE_0 = '0';
    const ALERTE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonOrganisme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonOrganisme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonOrganismePeer::$fieldNames[CommonOrganismePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Acronyme', 'TypeArticleOrg', 'DenominationOrg', 'CategorieInsee', 'DescriptionOrg', 'Adresse', 'Cp', 'Ville', 'Email', 'Url', 'IdAttribFile', 'AttribFile', 'DateCreation', 'Active', 'IdClientAnm', 'Status', 'SignataireCao', 'Offset', 'Sigle', 'Adresse2', 'Tel', 'Telecopie', 'Pays', 'AffichageEntite', 'IdInitial', 'DenominationOrgAr', 'DescriptionOrgAr', 'AdresseAr', 'VilleAr', 'Adresse2Ar', 'PaysAr', 'DenominationOrgFr', 'DescriptionOrgFr', 'AdresseFr', 'VilleFr', 'Adresse2Fr', 'PaysFr', 'DenominationOrgEs', 'DescriptionOrgEs', 'AdresseEs', 'VilleEs', 'Adresse2Es', 'PaysEs', 'DenominationOrgEn', 'DescriptionOrgEn', 'AdresseEn', 'VilleEn', 'Adresse2En', 'PaysEn', 'DenominationOrgSu', 'DescriptionOrgSu', 'AdresseSu', 'VilleSu', 'Adresse2Su', 'PaysSu', 'DenominationOrgDu', 'DescriptionOrgDu', 'AdresseDu', 'VilleDu', 'Adresse2Du', 'PaysDu', 'DenominationOrgCz', 'DescriptionOrgCz', 'AdresseCz', 'VilleCz', 'Adresse2Cz', 'PaysCz', 'DenominationOrgIt', 'DescriptionOrgIt', 'AdresseIt', 'VilleIt', 'Adresse2It', 'PaysIt', 'Siren', 'Complement', 'MoniteurProvenance', 'CodeAccesLogiciel', 'DecalageHoraire', 'LieuResidence', 'ActivationFuseauHoraire', 'Alerte', 'Ordre', 'UrlInterfaceAnm', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'acronyme', 'typeArticleOrg', 'denominationOrg', 'categorieInsee', 'descriptionOrg', 'adresse', 'cp', 'ville', 'email', 'url', 'idAttribFile', 'attribFile', 'dateCreation', 'active', 'idClientAnm', 'status', 'signataireCao', 'offset', 'sigle', 'adresse2', 'tel', 'telecopie', 'pays', 'affichageEntite', 'idInitial', 'denominationOrgAr', 'descriptionOrgAr', 'adresseAr', 'villeAr', 'adresse2Ar', 'paysAr', 'denominationOrgFr', 'descriptionOrgFr', 'adresseFr', 'villeFr', 'adresse2Fr', 'paysFr', 'denominationOrgEs', 'descriptionOrgEs', 'adresseEs', 'villeEs', 'adresse2Es', 'paysEs', 'denominationOrgEn', 'descriptionOrgEn', 'adresseEn', 'villeEn', 'adresse2En', 'paysEn', 'denominationOrgSu', 'descriptionOrgSu', 'adresseSu', 'villeSu', 'adresse2Su', 'paysSu', 'denominationOrgDu', 'descriptionOrgDu', 'adresseDu', 'villeDu', 'adresse2Du', 'paysDu', 'denominationOrgCz', 'descriptionOrgCz', 'adresseCz', 'villeCz', 'adresse2Cz', 'paysCz', 'denominationOrgIt', 'descriptionOrgIt', 'adresseIt', 'villeIt', 'adresse2It', 'paysIt', 'siren', 'complement', 'moniteurProvenance', 'codeAccesLogiciel', 'decalageHoraire', 'lieuResidence', 'activationFuseauHoraire', 'alerte', 'ordre', 'urlInterfaceAnm', ),
        BasePeer::TYPE_COLNAME => array (CommonOrganismePeer::ID, CommonOrganismePeer::ACRONYME, CommonOrganismePeer::TYPE_ARTICLE_ORG, CommonOrganismePeer::DENOMINATION_ORG, CommonOrganismePeer::CATEGORIE_INSEE, CommonOrganismePeer::DESCRIPTION_ORG, CommonOrganismePeer::ADRESSE, CommonOrganismePeer::CP, CommonOrganismePeer::VILLE, CommonOrganismePeer::EMAIL, CommonOrganismePeer::URL, CommonOrganismePeer::ID_ATTRIB_FILE, CommonOrganismePeer::ATTRIB_FILE, CommonOrganismePeer::DATE_CREATION, CommonOrganismePeer::ACTIVE, CommonOrganismePeer::ID_CLIENT_ANM, CommonOrganismePeer::STATUS, CommonOrganismePeer::SIGNATAIRE_CAO, CommonOrganismePeer::OFFSET, CommonOrganismePeer::SIGLE, CommonOrganismePeer::ADRESSE2, CommonOrganismePeer::TEL, CommonOrganismePeer::TELECOPIE, CommonOrganismePeer::PAYS, CommonOrganismePeer::AFFICHAGE_ENTITE, CommonOrganismePeer::ID_INITIAL, CommonOrganismePeer::DENOMINATION_ORG_AR, CommonOrganismePeer::DESCRIPTION_ORG_AR, CommonOrganismePeer::ADRESSE_AR, CommonOrganismePeer::VILLE_AR, CommonOrganismePeer::ADRESSE2_AR, CommonOrganismePeer::PAYS_AR, CommonOrganismePeer::DENOMINATION_ORG_FR, CommonOrganismePeer::DESCRIPTION_ORG_FR, CommonOrganismePeer::ADRESSE_FR, CommonOrganismePeer::VILLE_FR, CommonOrganismePeer::ADRESSE2_FR, CommonOrganismePeer::PAYS_FR, CommonOrganismePeer::DENOMINATION_ORG_ES, CommonOrganismePeer::DESCRIPTION_ORG_ES, CommonOrganismePeer::ADRESSE_ES, CommonOrganismePeer::VILLE_ES, CommonOrganismePeer::ADRESSE2_ES, CommonOrganismePeer::PAYS_ES, CommonOrganismePeer::DENOMINATION_ORG_EN, CommonOrganismePeer::DESCRIPTION_ORG_EN, CommonOrganismePeer::ADRESSE_EN, CommonOrganismePeer::VILLE_EN, CommonOrganismePeer::ADRESSE2_EN, CommonOrganismePeer::PAYS_EN, CommonOrganismePeer::DENOMINATION_ORG_SU, CommonOrganismePeer::DESCRIPTION_ORG_SU, CommonOrganismePeer::ADRESSE_SU, CommonOrganismePeer::VILLE_SU, CommonOrganismePeer::ADRESSE2_SU, CommonOrganismePeer::PAYS_SU, CommonOrganismePeer::DENOMINATION_ORG_DU, CommonOrganismePeer::DESCRIPTION_ORG_DU, CommonOrganismePeer::ADRESSE_DU, CommonOrganismePeer::VILLE_DU, CommonOrganismePeer::ADRESSE2_DU, CommonOrganismePeer::PAYS_DU, CommonOrganismePeer::DENOMINATION_ORG_CZ, CommonOrganismePeer::DESCRIPTION_ORG_CZ, CommonOrganismePeer::ADRESSE_CZ, CommonOrganismePeer::VILLE_CZ, CommonOrganismePeer::ADRESSE2_CZ, CommonOrganismePeer::PAYS_CZ, CommonOrganismePeer::DENOMINATION_ORG_IT, CommonOrganismePeer::DESCRIPTION_ORG_IT, CommonOrganismePeer::ADRESSE_IT, CommonOrganismePeer::VILLE_IT, CommonOrganismePeer::ADRESSE2_IT, CommonOrganismePeer::PAYS_IT, CommonOrganismePeer::SIREN, CommonOrganismePeer::COMPLEMENT, CommonOrganismePeer::MONITEUR_PROVENANCE, CommonOrganismePeer::CODE_ACCES_LOGICIEL, CommonOrganismePeer::DECALAGE_HORAIRE, CommonOrganismePeer::LIEU_RESIDENCE, CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE, CommonOrganismePeer::ALERTE, CommonOrganismePeer::ORDRE, CommonOrganismePeer::URL_INTERFACE_ANM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ACRONYME', 'TYPE_ARTICLE_ORG', 'DENOMINATION_ORG', 'CATEGORIE_INSEE', 'DESCRIPTION_ORG', 'ADRESSE', 'CP', 'VILLE', 'EMAIL', 'URL', 'ID_ATTRIB_FILE', 'ATTRIB_FILE', 'DATE_CREATION', 'ACTIVE', 'ID_CLIENT_ANM', 'STATUS', 'SIGNATAIRE_CAO', 'OFFSET', 'SIGLE', 'ADRESSE2', 'TEL', 'TELECOPIE', 'PAYS', 'AFFICHAGE_ENTITE', 'ID_INITIAL', 'DENOMINATION_ORG_AR', 'DESCRIPTION_ORG_AR', 'ADRESSE_AR', 'VILLE_AR', 'ADRESSE2_AR', 'PAYS_AR', 'DENOMINATION_ORG_FR', 'DESCRIPTION_ORG_FR', 'ADRESSE_FR', 'VILLE_FR', 'ADRESSE2_FR', 'PAYS_FR', 'DENOMINATION_ORG_ES', 'DESCRIPTION_ORG_ES', 'ADRESSE_ES', 'VILLE_ES', 'ADRESSE2_ES', 'PAYS_ES', 'DENOMINATION_ORG_EN', 'DESCRIPTION_ORG_EN', 'ADRESSE_EN', 'VILLE_EN', 'ADRESSE2_EN', 'PAYS_EN', 'DENOMINATION_ORG_SU', 'DESCRIPTION_ORG_SU', 'ADRESSE_SU', 'VILLE_SU', 'ADRESSE2_SU', 'PAYS_SU', 'DENOMINATION_ORG_DU', 'DESCRIPTION_ORG_DU', 'ADRESSE_DU', 'VILLE_DU', 'ADRESSE2_DU', 'PAYS_DU', 'DENOMINATION_ORG_CZ', 'DESCRIPTION_ORG_CZ', 'ADRESSE_CZ', 'VILLE_CZ', 'ADRESSE2_CZ', 'PAYS_CZ', 'DENOMINATION_ORG_IT', 'DESCRIPTION_ORG_IT', 'ADRESSE_IT', 'VILLE_IT', 'ADRESSE2_IT', 'PAYS_IT', 'SIREN', 'COMPLEMENT', 'MONITEUR_PROVENANCE', 'CODE_ACCES_LOGICIEL', 'DECALAGE_HORAIRE', 'LIEU_RESIDENCE', 'ACTIVATION_FUSEAU_HORAIRE', 'ALERTE', 'ORDRE', 'URL_INTERFACE_ANM', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'acronyme', 'type_article_org', 'denomination_org', 'categorie_insee', 'description_org', 'adresse', 'cp', 'ville', 'email', 'url', 'id_attrib_file', 'attrib_file', 'date_creation', 'active', 'id_client_ANM', 'status', 'signataire_cao', 'offset', 'sigle', 'adresse2', 'tel', 'telecopie', 'pays', 'affichage_entite', 'id_initial', 'denomination_org_ar', 'description_org_ar', 'adresse_ar', 'ville_ar', 'adresse2_ar', 'pays_ar', 'denomination_org_fr', 'description_org_fr', 'adresse_fr', 'ville_fr', 'adresse2_fr', 'pays_fr', 'denomination_org_es', 'description_org_es', 'adresse_es', 'ville_es', 'adresse2_es', 'pays_es', 'denomination_org_en', 'description_org_en', 'adresse_en', 'ville_en', 'adresse2_en', 'pays_en', 'denomination_org_su', 'description_org_su', 'adresse_su', 'ville_su', 'adresse2_su', 'pays_su', 'denomination_org_du', 'description_org_du', 'adresse_du', 'ville_du', 'adresse2_du', 'pays_du', 'denomination_org_cz', 'description_org_cz', 'adresse_cz', 'ville_cz', 'adresse2_cz', 'pays_cz', 'denomination_org_it', 'description_org_it', 'adresse_it', 'ville_it', 'adresse2_it', 'pays_it', 'siren', 'complement', 'moniteur_provenance', 'code_acces_logiciel', 'decalage_horaire', 'lieu_residence', 'activation_fuseau_horaire', 'alerte', 'ordre', 'URL_INTERFACE_ANM', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonOrganismePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Acronyme' => 1, 'TypeArticleOrg' => 2, 'DenominationOrg' => 3, 'CategorieInsee' => 4, 'DescriptionOrg' => 5, 'Adresse' => 6, 'Cp' => 7, 'Ville' => 8, 'Email' => 9, 'Url' => 10, 'IdAttribFile' => 11, 'AttribFile' => 12, 'DateCreation' => 13, 'Active' => 14, 'IdClientAnm' => 15, 'Status' => 16, 'SignataireCao' => 17, 'Offset' => 18, 'Sigle' => 19, 'Adresse2' => 20, 'Tel' => 21, 'Telecopie' => 22, 'Pays' => 23, 'AffichageEntite' => 24, 'IdInitial' => 25, 'DenominationOrgAr' => 26, 'DescriptionOrgAr' => 27, 'AdresseAr' => 28, 'VilleAr' => 29, 'Adresse2Ar' => 30, 'PaysAr' => 31, 'DenominationOrgFr' => 32, 'DescriptionOrgFr' => 33, 'AdresseFr' => 34, 'VilleFr' => 35, 'Adresse2Fr' => 36, 'PaysFr' => 37, 'DenominationOrgEs' => 38, 'DescriptionOrgEs' => 39, 'AdresseEs' => 40, 'VilleEs' => 41, 'Adresse2Es' => 42, 'PaysEs' => 43, 'DenominationOrgEn' => 44, 'DescriptionOrgEn' => 45, 'AdresseEn' => 46, 'VilleEn' => 47, 'Adresse2En' => 48, 'PaysEn' => 49, 'DenominationOrgSu' => 50, 'DescriptionOrgSu' => 51, 'AdresseSu' => 52, 'VilleSu' => 53, 'Adresse2Su' => 54, 'PaysSu' => 55, 'DenominationOrgDu' => 56, 'DescriptionOrgDu' => 57, 'AdresseDu' => 58, 'VilleDu' => 59, 'Adresse2Du' => 60, 'PaysDu' => 61, 'DenominationOrgCz' => 62, 'DescriptionOrgCz' => 63, 'AdresseCz' => 64, 'VilleCz' => 65, 'Adresse2Cz' => 66, 'PaysCz' => 67, 'DenominationOrgIt' => 68, 'DescriptionOrgIt' => 69, 'AdresseIt' => 70, 'VilleIt' => 71, 'Adresse2It' => 72, 'PaysIt' => 73, 'Siren' => 74, 'Complement' => 75, 'MoniteurProvenance' => 76, 'CodeAccesLogiciel' => 77, 'DecalageHoraire' => 78, 'LieuResidence' => 79, 'ActivationFuseauHoraire' => 80, 'Alerte' => 81, 'Ordre' => 82, 'UrlInterfaceAnm' => 83, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'acronyme' => 1, 'typeArticleOrg' => 2, 'denominationOrg' => 3, 'categorieInsee' => 4, 'descriptionOrg' => 5, 'adresse' => 6, 'cp' => 7, 'ville' => 8, 'email' => 9, 'url' => 10, 'idAttribFile' => 11, 'attribFile' => 12, 'dateCreation' => 13, 'active' => 14, 'idClientAnm' => 15, 'status' => 16, 'signataireCao' => 17, 'offset' => 18, 'sigle' => 19, 'adresse2' => 20, 'tel' => 21, 'telecopie' => 22, 'pays' => 23, 'affichageEntite' => 24, 'idInitial' => 25, 'denominationOrgAr' => 26, 'descriptionOrgAr' => 27, 'adresseAr' => 28, 'villeAr' => 29, 'adresse2Ar' => 30, 'paysAr' => 31, 'denominationOrgFr' => 32, 'descriptionOrgFr' => 33, 'adresseFr' => 34, 'villeFr' => 35, 'adresse2Fr' => 36, 'paysFr' => 37, 'denominationOrgEs' => 38, 'descriptionOrgEs' => 39, 'adresseEs' => 40, 'villeEs' => 41, 'adresse2Es' => 42, 'paysEs' => 43, 'denominationOrgEn' => 44, 'descriptionOrgEn' => 45, 'adresseEn' => 46, 'villeEn' => 47, 'adresse2En' => 48, 'paysEn' => 49, 'denominationOrgSu' => 50, 'descriptionOrgSu' => 51, 'adresseSu' => 52, 'villeSu' => 53, 'adresse2Su' => 54, 'paysSu' => 55, 'denominationOrgDu' => 56, 'descriptionOrgDu' => 57, 'adresseDu' => 58, 'villeDu' => 59, 'adresse2Du' => 60, 'paysDu' => 61, 'denominationOrgCz' => 62, 'descriptionOrgCz' => 63, 'adresseCz' => 64, 'villeCz' => 65, 'adresse2Cz' => 66, 'paysCz' => 67, 'denominationOrgIt' => 68, 'descriptionOrgIt' => 69, 'adresseIt' => 70, 'villeIt' => 71, 'adresse2It' => 72, 'paysIt' => 73, 'siren' => 74, 'complement' => 75, 'moniteurProvenance' => 76, 'codeAccesLogiciel' => 77, 'decalageHoraire' => 78, 'lieuResidence' => 79, 'activationFuseauHoraire' => 80, 'alerte' => 81, 'ordre' => 82, 'urlInterfaceAnm' => 83, ),
        BasePeer::TYPE_COLNAME => array (CommonOrganismePeer::ID => 0, CommonOrganismePeer::ACRONYME => 1, CommonOrganismePeer::TYPE_ARTICLE_ORG => 2, CommonOrganismePeer::DENOMINATION_ORG => 3, CommonOrganismePeer::CATEGORIE_INSEE => 4, CommonOrganismePeer::DESCRIPTION_ORG => 5, CommonOrganismePeer::ADRESSE => 6, CommonOrganismePeer::CP => 7, CommonOrganismePeer::VILLE => 8, CommonOrganismePeer::EMAIL => 9, CommonOrganismePeer::URL => 10, CommonOrganismePeer::ID_ATTRIB_FILE => 11, CommonOrganismePeer::ATTRIB_FILE => 12, CommonOrganismePeer::DATE_CREATION => 13, CommonOrganismePeer::ACTIVE => 14, CommonOrganismePeer::ID_CLIENT_ANM => 15, CommonOrganismePeer::STATUS => 16, CommonOrganismePeer::SIGNATAIRE_CAO => 17, CommonOrganismePeer::OFFSET => 18, CommonOrganismePeer::SIGLE => 19, CommonOrganismePeer::ADRESSE2 => 20, CommonOrganismePeer::TEL => 21, CommonOrganismePeer::TELECOPIE => 22, CommonOrganismePeer::PAYS => 23, CommonOrganismePeer::AFFICHAGE_ENTITE => 24, CommonOrganismePeer::ID_INITIAL => 25, CommonOrganismePeer::DENOMINATION_ORG_AR => 26, CommonOrganismePeer::DESCRIPTION_ORG_AR => 27, CommonOrganismePeer::ADRESSE_AR => 28, CommonOrganismePeer::VILLE_AR => 29, CommonOrganismePeer::ADRESSE2_AR => 30, CommonOrganismePeer::PAYS_AR => 31, CommonOrganismePeer::DENOMINATION_ORG_FR => 32, CommonOrganismePeer::DESCRIPTION_ORG_FR => 33, CommonOrganismePeer::ADRESSE_FR => 34, CommonOrganismePeer::VILLE_FR => 35, CommonOrganismePeer::ADRESSE2_FR => 36, CommonOrganismePeer::PAYS_FR => 37, CommonOrganismePeer::DENOMINATION_ORG_ES => 38, CommonOrganismePeer::DESCRIPTION_ORG_ES => 39, CommonOrganismePeer::ADRESSE_ES => 40, CommonOrganismePeer::VILLE_ES => 41, CommonOrganismePeer::ADRESSE2_ES => 42, CommonOrganismePeer::PAYS_ES => 43, CommonOrganismePeer::DENOMINATION_ORG_EN => 44, CommonOrganismePeer::DESCRIPTION_ORG_EN => 45, CommonOrganismePeer::ADRESSE_EN => 46, CommonOrganismePeer::VILLE_EN => 47, CommonOrganismePeer::ADRESSE2_EN => 48, CommonOrganismePeer::PAYS_EN => 49, CommonOrganismePeer::DENOMINATION_ORG_SU => 50, CommonOrganismePeer::DESCRIPTION_ORG_SU => 51, CommonOrganismePeer::ADRESSE_SU => 52, CommonOrganismePeer::VILLE_SU => 53, CommonOrganismePeer::ADRESSE2_SU => 54, CommonOrganismePeer::PAYS_SU => 55, CommonOrganismePeer::DENOMINATION_ORG_DU => 56, CommonOrganismePeer::DESCRIPTION_ORG_DU => 57, CommonOrganismePeer::ADRESSE_DU => 58, CommonOrganismePeer::VILLE_DU => 59, CommonOrganismePeer::ADRESSE2_DU => 60, CommonOrganismePeer::PAYS_DU => 61, CommonOrganismePeer::DENOMINATION_ORG_CZ => 62, CommonOrganismePeer::DESCRIPTION_ORG_CZ => 63, CommonOrganismePeer::ADRESSE_CZ => 64, CommonOrganismePeer::VILLE_CZ => 65, CommonOrganismePeer::ADRESSE2_CZ => 66, CommonOrganismePeer::PAYS_CZ => 67, CommonOrganismePeer::DENOMINATION_ORG_IT => 68, CommonOrganismePeer::DESCRIPTION_ORG_IT => 69, CommonOrganismePeer::ADRESSE_IT => 70, CommonOrganismePeer::VILLE_IT => 71, CommonOrganismePeer::ADRESSE2_IT => 72, CommonOrganismePeer::PAYS_IT => 73, CommonOrganismePeer::SIREN => 74, CommonOrganismePeer::COMPLEMENT => 75, CommonOrganismePeer::MONITEUR_PROVENANCE => 76, CommonOrganismePeer::CODE_ACCES_LOGICIEL => 77, CommonOrganismePeer::DECALAGE_HORAIRE => 78, CommonOrganismePeer::LIEU_RESIDENCE => 79, CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE => 80, CommonOrganismePeer::ALERTE => 81, CommonOrganismePeer::ORDRE => 82, CommonOrganismePeer::URL_INTERFACE_ANM => 83, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ACRONYME' => 1, 'TYPE_ARTICLE_ORG' => 2, 'DENOMINATION_ORG' => 3, 'CATEGORIE_INSEE' => 4, 'DESCRIPTION_ORG' => 5, 'ADRESSE' => 6, 'CP' => 7, 'VILLE' => 8, 'EMAIL' => 9, 'URL' => 10, 'ID_ATTRIB_FILE' => 11, 'ATTRIB_FILE' => 12, 'DATE_CREATION' => 13, 'ACTIVE' => 14, 'ID_CLIENT_ANM' => 15, 'STATUS' => 16, 'SIGNATAIRE_CAO' => 17, 'OFFSET' => 18, 'SIGLE' => 19, 'ADRESSE2' => 20, 'TEL' => 21, 'TELECOPIE' => 22, 'PAYS' => 23, 'AFFICHAGE_ENTITE' => 24, 'ID_INITIAL' => 25, 'DENOMINATION_ORG_AR' => 26, 'DESCRIPTION_ORG_AR' => 27, 'ADRESSE_AR' => 28, 'VILLE_AR' => 29, 'ADRESSE2_AR' => 30, 'PAYS_AR' => 31, 'DENOMINATION_ORG_FR' => 32, 'DESCRIPTION_ORG_FR' => 33, 'ADRESSE_FR' => 34, 'VILLE_FR' => 35, 'ADRESSE2_FR' => 36, 'PAYS_FR' => 37, 'DENOMINATION_ORG_ES' => 38, 'DESCRIPTION_ORG_ES' => 39, 'ADRESSE_ES' => 40, 'VILLE_ES' => 41, 'ADRESSE2_ES' => 42, 'PAYS_ES' => 43, 'DENOMINATION_ORG_EN' => 44, 'DESCRIPTION_ORG_EN' => 45, 'ADRESSE_EN' => 46, 'VILLE_EN' => 47, 'ADRESSE2_EN' => 48, 'PAYS_EN' => 49, 'DENOMINATION_ORG_SU' => 50, 'DESCRIPTION_ORG_SU' => 51, 'ADRESSE_SU' => 52, 'VILLE_SU' => 53, 'ADRESSE2_SU' => 54, 'PAYS_SU' => 55, 'DENOMINATION_ORG_DU' => 56, 'DESCRIPTION_ORG_DU' => 57, 'ADRESSE_DU' => 58, 'VILLE_DU' => 59, 'ADRESSE2_DU' => 60, 'PAYS_DU' => 61, 'DENOMINATION_ORG_CZ' => 62, 'DESCRIPTION_ORG_CZ' => 63, 'ADRESSE_CZ' => 64, 'VILLE_CZ' => 65, 'ADRESSE2_CZ' => 66, 'PAYS_CZ' => 67, 'DENOMINATION_ORG_IT' => 68, 'DESCRIPTION_ORG_IT' => 69, 'ADRESSE_IT' => 70, 'VILLE_IT' => 71, 'ADRESSE2_IT' => 72, 'PAYS_IT' => 73, 'SIREN' => 74, 'COMPLEMENT' => 75, 'MONITEUR_PROVENANCE' => 76, 'CODE_ACCES_LOGICIEL' => 77, 'DECALAGE_HORAIRE' => 78, 'LIEU_RESIDENCE' => 79, 'ACTIVATION_FUSEAU_HORAIRE' => 80, 'ALERTE' => 81, 'ORDRE' => 82, 'URL_INTERFACE_ANM' => 83, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'acronyme' => 1, 'type_article_org' => 2, 'denomination_org' => 3, 'categorie_insee' => 4, 'description_org' => 5, 'adresse' => 6, 'cp' => 7, 'ville' => 8, 'email' => 9, 'url' => 10, 'id_attrib_file' => 11, 'attrib_file' => 12, 'date_creation' => 13, 'active' => 14, 'id_client_ANM' => 15, 'status' => 16, 'signataire_cao' => 17, 'offset' => 18, 'sigle' => 19, 'adresse2' => 20, 'tel' => 21, 'telecopie' => 22, 'pays' => 23, 'affichage_entite' => 24, 'id_initial' => 25, 'denomination_org_ar' => 26, 'description_org_ar' => 27, 'adresse_ar' => 28, 'ville_ar' => 29, 'adresse2_ar' => 30, 'pays_ar' => 31, 'denomination_org_fr' => 32, 'description_org_fr' => 33, 'adresse_fr' => 34, 'ville_fr' => 35, 'adresse2_fr' => 36, 'pays_fr' => 37, 'denomination_org_es' => 38, 'description_org_es' => 39, 'adresse_es' => 40, 'ville_es' => 41, 'adresse2_es' => 42, 'pays_es' => 43, 'denomination_org_en' => 44, 'description_org_en' => 45, 'adresse_en' => 46, 'ville_en' => 47, 'adresse2_en' => 48, 'pays_en' => 49, 'denomination_org_su' => 50, 'description_org_su' => 51, 'adresse_su' => 52, 'ville_su' => 53, 'adresse2_su' => 54, 'pays_su' => 55, 'denomination_org_du' => 56, 'description_org_du' => 57, 'adresse_du' => 58, 'ville_du' => 59, 'adresse2_du' => 60, 'pays_du' => 61, 'denomination_org_cz' => 62, 'description_org_cz' => 63, 'adresse_cz' => 64, 'ville_cz' => 65, 'adresse2_cz' => 66, 'pays_cz' => 67, 'denomination_org_it' => 68, 'description_org_it' => 69, 'adresse_it' => 70, 'ville_it' => 71, 'adresse2_it' => 72, 'pays_it' => 73, 'siren' => 74, 'complement' => 75, 'moniteur_provenance' => 76, 'code_acces_logiciel' => 77, 'decalage_horaire' => 78, 'lieu_residence' => 79, 'activation_fuseau_horaire' => 80, 'alerte' => 81, 'ordre' => 82, 'URL_INTERFACE_ANM' => 83, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonOrganismePeer::STATUS => array(
            CommonOrganismePeer::STATUS_0,
            CommonOrganismePeer::STATUS_1,
        ),
        CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE => array(
            CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE_0,
            CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE_1,
        ),
        CommonOrganismePeer::ALERTE => array(
            CommonOrganismePeer::ALERTE_0,
            CommonOrganismePeer::ALERTE_1,
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
        $toNames = CommonOrganismePeer::getFieldNames($toType);
        $key = isset(CommonOrganismePeer::$fieldKeys[$fromType][$name]) ? CommonOrganismePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonOrganismePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonOrganismePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonOrganismePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonOrganismePeer::$enumValueSets;
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
        $valueSets = CommonOrganismePeer::getValueSets();

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
        $values = CommonOrganismePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonOrganismePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonOrganismePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonOrganismePeer::ID);
            $criteria->addSelectColumn(CommonOrganismePeer::ACRONYME);
            $criteria->addSelectColumn(CommonOrganismePeer::TYPE_ARTICLE_ORG);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG);
            $criteria->addSelectColumn(CommonOrganismePeer::CATEGORIE_INSEE);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE);
            $criteria->addSelectColumn(CommonOrganismePeer::CP);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE);
            $criteria->addSelectColumn(CommonOrganismePeer::EMAIL);
            $criteria->addSelectColumn(CommonOrganismePeer::URL);
            $criteria->addSelectColumn(CommonOrganismePeer::ID_ATTRIB_FILE);
            $criteria->addSelectColumn(CommonOrganismePeer::ATTRIB_FILE);
            $criteria->addSelectColumn(CommonOrganismePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonOrganismePeer::ACTIVE);
            $criteria->addSelectColumn(CommonOrganismePeer::ID_CLIENT_ANM);
            $criteria->addSelectColumn(CommonOrganismePeer::STATUS);
            $criteria->addSelectColumn(CommonOrganismePeer::SIGNATAIRE_CAO);
            $criteria->addSelectColumn(CommonOrganismePeer::OFFSET);
            $criteria->addSelectColumn(CommonOrganismePeer::SIGLE);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2);
            $criteria->addSelectColumn(CommonOrganismePeer::TEL);
            $criteria->addSelectColumn(CommonOrganismePeer::TELECOPIE);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS);
            $criteria->addSelectColumn(CommonOrganismePeer::AFFICHAGE_ENTITE);
            $criteria->addSelectColumn(CommonOrganismePeer::ID_INITIAL);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_AR);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_FR);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_ES);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_EN);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_SU);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_DU);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_CZ);
            $criteria->addSelectColumn(CommonOrganismePeer::DENOMINATION_ORG_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::DESCRIPTION_ORG_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::VILLE_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::ADRESSE2_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::PAYS_IT);
            $criteria->addSelectColumn(CommonOrganismePeer::SIREN);
            $criteria->addSelectColumn(CommonOrganismePeer::COMPLEMENT);
            $criteria->addSelectColumn(CommonOrganismePeer::MONITEUR_PROVENANCE);
            $criteria->addSelectColumn(CommonOrganismePeer::CODE_ACCES_LOGICIEL);
            $criteria->addSelectColumn(CommonOrganismePeer::DECALAGE_HORAIRE);
            $criteria->addSelectColumn(CommonOrganismePeer::LIEU_RESIDENCE);
            $criteria->addSelectColumn(CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE);
            $criteria->addSelectColumn(CommonOrganismePeer::ALERTE);
            $criteria->addSelectColumn(CommonOrganismePeer::ORDRE);
            $criteria->addSelectColumn(CommonOrganismePeer::URL_INTERFACE_ANM);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.acronyme');
            $criteria->addSelectColumn($alias . '.type_article_org');
            $criteria->addSelectColumn($alias . '.denomination_org');
            $criteria->addSelectColumn($alias . '.categorie_insee');
            $criteria->addSelectColumn($alias . '.description_org');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.id_attrib_file');
            $criteria->addSelectColumn($alias . '.attrib_file');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.active');
            $criteria->addSelectColumn($alias . '.id_client_ANM');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.signataire_cao');
            $criteria->addSelectColumn($alias . '.offset');
            $criteria->addSelectColumn($alias . '.sigle');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.tel');
            $criteria->addSelectColumn($alias . '.telecopie');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.affichage_entite');
            $criteria->addSelectColumn($alias . '.id_initial');
            $criteria->addSelectColumn($alias . '.denomination_org_ar');
            $criteria->addSelectColumn($alias . '.description_org_ar');
            $criteria->addSelectColumn($alias . '.adresse_ar');
            $criteria->addSelectColumn($alias . '.ville_ar');
            $criteria->addSelectColumn($alias . '.adresse2_ar');
            $criteria->addSelectColumn($alias . '.pays_ar');
            $criteria->addSelectColumn($alias . '.denomination_org_fr');
            $criteria->addSelectColumn($alias . '.description_org_fr');
            $criteria->addSelectColumn($alias . '.adresse_fr');
            $criteria->addSelectColumn($alias . '.ville_fr');
            $criteria->addSelectColumn($alias . '.adresse2_fr');
            $criteria->addSelectColumn($alias . '.pays_fr');
            $criteria->addSelectColumn($alias . '.denomination_org_es');
            $criteria->addSelectColumn($alias . '.description_org_es');
            $criteria->addSelectColumn($alias . '.adresse_es');
            $criteria->addSelectColumn($alias . '.ville_es');
            $criteria->addSelectColumn($alias . '.adresse2_es');
            $criteria->addSelectColumn($alias . '.pays_es');
            $criteria->addSelectColumn($alias . '.denomination_org_en');
            $criteria->addSelectColumn($alias . '.description_org_en');
            $criteria->addSelectColumn($alias . '.adresse_en');
            $criteria->addSelectColumn($alias . '.ville_en');
            $criteria->addSelectColumn($alias . '.adresse2_en');
            $criteria->addSelectColumn($alias . '.pays_en');
            $criteria->addSelectColumn($alias . '.denomination_org_su');
            $criteria->addSelectColumn($alias . '.description_org_su');
            $criteria->addSelectColumn($alias . '.adresse_su');
            $criteria->addSelectColumn($alias . '.ville_su');
            $criteria->addSelectColumn($alias . '.adresse2_su');
            $criteria->addSelectColumn($alias . '.pays_su');
            $criteria->addSelectColumn($alias . '.denomination_org_du');
            $criteria->addSelectColumn($alias . '.description_org_du');
            $criteria->addSelectColumn($alias . '.adresse_du');
            $criteria->addSelectColumn($alias . '.ville_du');
            $criteria->addSelectColumn($alias . '.adresse2_du');
            $criteria->addSelectColumn($alias . '.pays_du');
            $criteria->addSelectColumn($alias . '.denomination_org_cz');
            $criteria->addSelectColumn($alias . '.description_org_cz');
            $criteria->addSelectColumn($alias . '.adresse_cz');
            $criteria->addSelectColumn($alias . '.ville_cz');
            $criteria->addSelectColumn($alias . '.adresse2_cz');
            $criteria->addSelectColumn($alias . '.pays_cz');
            $criteria->addSelectColumn($alias . '.denomination_org_it');
            $criteria->addSelectColumn($alias . '.description_org_it');
            $criteria->addSelectColumn($alias . '.adresse_it');
            $criteria->addSelectColumn($alias . '.ville_it');
            $criteria->addSelectColumn($alias . '.adresse2_it');
            $criteria->addSelectColumn($alias . '.pays_it');
            $criteria->addSelectColumn($alias . '.siren');
            $criteria->addSelectColumn($alias . '.complement');
            $criteria->addSelectColumn($alias . '.moniteur_provenance');
            $criteria->addSelectColumn($alias . '.code_acces_logiciel');
            $criteria->addSelectColumn($alias . '.decalage_horaire');
            $criteria->addSelectColumn($alias . '.lieu_residence');
            $criteria->addSelectColumn($alias . '.activation_fuseau_horaire');
            $criteria->addSelectColumn($alias . '.alerte');
            $criteria->addSelectColumn($alias . '.ordre');
            $criteria->addSelectColumn($alias . '.URL_INTERFACE_ANM');
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
        $criteria->setPrimaryTableName(CommonOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonOrganismePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOrganisme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonOrganismePeer::doSelect($critcopy, $con);
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
        return CommonOrganismePeer::populateObjects(CommonOrganismePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonOrganismePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOrganismePeer::DATABASE_NAME);

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
     * @param      CommonOrganisme $obj A CommonOrganisme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonOrganismePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonOrganisme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonOrganisme) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonOrganisme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonOrganismePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonOrganisme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonOrganismePeer::$instances[$key])) {
                return CommonOrganismePeer::$instances[$key];
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
        foreach (CommonOrganismePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonOrganismePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Organisme
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
        $cls = CommonOrganismePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonOrganismePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonOrganismePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonOrganisme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonOrganismePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonOrganismePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonOrganismePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonOrganismePeer::DATABASE_NAME)->getTable(CommonOrganismePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonOrganismePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonOrganismePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonOrganismeTableMap());
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
        return CommonOrganismePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOrganisme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonOrganisme object
        }

        if ($criteria->containsKey(CommonOrganismePeer::ID) && $criteria->keyContainsValue(CommonOrganismePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonOrganismePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonOrganismePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOrganisme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonOrganismePeer::ID);
            $value = $criteria->remove(CommonOrganismePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonOrganismePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOrganismePeer::TABLE_NAME);
            }

        } else { // $values is CommonOrganisme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonOrganismePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Organisme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonOrganismePeer::TABLE_NAME, $con, CommonOrganismePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonOrganismePeer::clearInstancePool();
            CommonOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonOrganisme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonOrganisme object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonOrganismePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonOrganisme) { // it's a model object
            // invalidate the cache for this single object
            CommonOrganismePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);
            $criteria->add(CommonOrganismePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonOrganismePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOrganismePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonOrganisme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonOrganisme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonOrganismePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonOrganismePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonOrganismePeer::DATABASE_NAME, CommonOrganismePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonOrganisme
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonOrganismePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonOrganismePeer::ID, $pk);

        $v = CommonOrganismePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonOrganisme[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);
            $criteria->add(CommonOrganismePeer::ID, $pks, Criteria::IN);
            $objs = CommonOrganismePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonOrganismePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonOrganismePeer::buildTableMap();

