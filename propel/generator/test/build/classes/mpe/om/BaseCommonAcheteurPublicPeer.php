<?php


/**
 * Base static class for performing query and update operations on the 'AcheteurPublic' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAcheteurPublicPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AcheteurPublic';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAcheteurPublic';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAcheteurPublicTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 49;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 49;

    /** the column name for the id field */
    const ID = 'AcheteurPublic.id';

    /** the column name for the organisme field */
    const ORGANISME = 'AcheteurPublic.organisme';

    /** the column name for the denomination field */
    const DENOMINATION = 'AcheteurPublic.denomination';

    /** the column name for the prm field */
    const PRM = 'AcheteurPublic.prm';

    /** the column name for the adresse field */
    const ADRESSE = 'AcheteurPublic.adresse';

    /** the column name for the cp field */
    const CP = 'AcheteurPublic.cp';

    /** the column name for the ville field */
    const VILLE = 'AcheteurPublic.ville';

    /** the column name for the dept field */
    const DEPT = 'AcheteurPublic.dept';

    /** the column name for the type_org field */
    const TYPE_ORG = 'AcheteurPublic.type_org';

    /** the column name for the telephone field */
    const TELEPHONE = 'AcheteurPublic.telephone';

    /** the column name for the fax field */
    const FAX = 'AcheteurPublic.fax';

    /** the column name for the mail field */
    const MAIL = 'AcheteurPublic.mail';

    /** the column name for the url field */
    const URL = 'AcheteurPublic.url';

    /** the column name for the url_acheteur field */
    const URL_ACHETEUR = 'AcheteurPublic.url_acheteur';

    /** the column name for the facture_numero field */
    const FACTURE_NUMERO = 'AcheteurPublic.facture_numero';

    /** the column name for the facture_code field */
    const FACTURE_CODE = 'AcheteurPublic.facture_code';

    /** the column name for the facture_denomination field */
    const FACTURE_DENOMINATION = 'AcheteurPublic.facture_denomination';

    /** the column name for the facturation_service field */
    const FACTURATION_SERVICE = 'AcheteurPublic.facturation_service';

    /** the column name for the facture_adresse field */
    const FACTURE_ADRESSE = 'AcheteurPublic.facture_adresse';

    /** the column name for the facture_cp field */
    const FACTURE_CP = 'AcheteurPublic.facture_cp';

    /** the column name for the facture_ville field */
    const FACTURE_VILLE = 'AcheteurPublic.facture_ville';

    /** the column name for the facture_pays field */
    const FACTURE_PAYS = 'AcheteurPublic.facture_pays';

    /** the column name for the id_aapc field */
    const ID_AAPC = 'AcheteurPublic.id_aapc';

    /** the column name for the boamp_login field */
    const BOAMP_LOGIN = 'AcheteurPublic.boamp_login';

    /** the column name for the boamp_password field */
    const BOAMP_PASSWORD = 'AcheteurPublic.boamp_password';

    /** the column name for the boamp_mail field */
    const BOAMP_MAIL = 'AcheteurPublic.boamp_mail';

    /** the column name for the boamp_target field */
    const BOAMP_TARGET = 'AcheteurPublic.boamp_target';

    /** the column name for the default_form_values field */
    const DEFAULT_FORM_VALUES = 'AcheteurPublic.default_form_values';

    /** the column name for the defaut_form_am_boamp field */
    const DEFAUT_FORM_AM_BOAMP = 'AcheteurPublic.defaut_form_am_boamp';

    /** the column name for the defaut_form_am_boamp_joue field */
    const DEFAUT_FORM_AM_BOAMP_JOUE = 'AcheteurPublic.defaut_form_am_boamp_joue';

    /** the column name for the defaut_form_mapa_boamp field */
    const DEFAUT_FORM_MAPA_BOAMP = 'AcheteurPublic.defaut_form_mapa_boamp';

    /** the column name for the defaut_form_aconcours field */
    const DEFAUT_FORM_ACONCOURS = 'AcheteurPublic.defaut_form_aconcours';

    /** the column name for the defaut_form_as_boamp_joue field */
    const DEFAUT_FORM_AS_BOAMP_JOUE = 'AcheteurPublic.defaut_form_as_boamp_joue';

    /** the column name for the defaut_form_aa_boamp field */
    const DEFAUT_FORM_AA_BOAMP = 'AcheteurPublic.defaut_form_aa_boamp';

    /** the column name for the defaut_form_ar_mapa_boamp field */
    const DEFAUT_FORM_AR_MAPA_BOAMP = 'AcheteurPublic.defaut_form_ar_mapa_boamp';

    /** the column name for the defaut_form_05_boamp field */
    const DEFAUT_FORM_05_BOAMP = 'AcheteurPublic.defaut_form_05_boamp';

    /** the column name for the defaut_form_rect field */
    const DEFAUT_FORM_RECT = 'AcheteurPublic.defaut_form_rect';

    /** the column name for the defaut_form_aa_boamp_joue field */
    const DEFAUT_FORM_AA_BOAMP_JOUE = 'AcheteurPublic.defaut_form_aa_boamp_joue';

    /** the column name for the id_service field */
    const ID_SERVICE = 'AcheteurPublic.id_service';

    /** the column name for the livraison_service field */
    const LIVRAISON_SERVICE = 'AcheteurPublic.livraison_service';

    /** the column name for the livraison_adresse field */
    const LIVRAISON_ADRESSE = 'AcheteurPublic.livraison_adresse';

    /** the column name for the livraison_code_postal field */
    const LIVRAISON_CODE_POSTAL = 'AcheteurPublic.livraison_code_postal';

    /** the column name for the livraison_ville field */
    const LIVRAISON_VILLE = 'AcheteurPublic.livraison_ville';

    /** the column name for the livraison_pays field */
    const LIVRAISON_PAYS = 'AcheteurPublic.livraison_pays';

    /** the column name for the type_pouvoir_activite field */
    const TYPE_POUVOIR_ACTIVITE = 'AcheteurPublic.type_pouvoir_activite';

    /** the column name for the code_nuts field */
    const CODE_NUTS = 'AcheteurPublic.code_nuts';

    /** the column name for the modalites_financement field */
    const MODALITES_FINANCEMENT = 'AcheteurPublic.modalites_financement';

    /** the column name for the moniteur_provenance field */
    const MONITEUR_PROVENANCE = 'AcheteurPublic.moniteur_provenance';

    /** the column name for the code_acces_logiciel field */
    const CODE_ACCES_LOGICIEL = 'AcheteurPublic.code_acces_logiciel';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAcheteurPublic objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAcheteurPublic[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAcheteurPublicPeer::$fieldNames[CommonAcheteurPublicPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Denomination', 'Prm', 'Adresse', 'Cp', 'Ville', 'Dept', 'TypeOrg', 'Telephone', 'Fax', 'Mail', 'Url', 'UrlAcheteur', 'FactureNumero', 'FactureCode', 'FactureDenomination', 'FacturationService', 'FactureAdresse', 'FactureCp', 'FactureVille', 'FacturePays', 'IdAapc', 'BoampLogin', 'BoampPassword', 'BoampMail', 'BoampTarget', 'DefaultFormValues', 'DefautFormAmBoamp', 'DefautFormAmBoampJoue', 'DefautFormMapaBoamp', 'DefautFormAconcours', 'DefautFormAsBoampJoue', 'DefautFormAaBoamp', 'DefautFormArMapaBoamp', 'DefautForm05Boamp', 'DefautFormRect', 'DefautFormAaBoampJoue', 'IdService', 'LivraisonService', 'LivraisonAdresse', 'LivraisonCodePostal', 'LivraisonVille', 'LivraisonPays', 'TypePouvoirActivite', 'CodeNuts', 'ModalitesFinancement', 'MoniteurProvenance', 'CodeAccesLogiciel', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'denomination', 'prm', 'adresse', 'cp', 'ville', 'dept', 'typeOrg', 'telephone', 'fax', 'mail', 'url', 'urlAcheteur', 'factureNumero', 'factureCode', 'factureDenomination', 'facturationService', 'factureAdresse', 'factureCp', 'factureVille', 'facturePays', 'idAapc', 'boampLogin', 'boampPassword', 'boampMail', 'boampTarget', 'defaultFormValues', 'defautFormAmBoamp', 'defautFormAmBoampJoue', 'defautFormMapaBoamp', 'defautFormAconcours', 'defautFormAsBoampJoue', 'defautFormAaBoamp', 'defautFormArMapaBoamp', 'defautForm05Boamp', 'defautFormRect', 'defautFormAaBoampJoue', 'idService', 'livraisonService', 'livraisonAdresse', 'livraisonCodePostal', 'livraisonVille', 'livraisonPays', 'typePouvoirActivite', 'codeNuts', 'modalitesFinancement', 'moniteurProvenance', 'codeAccesLogiciel', ),
        BasePeer::TYPE_COLNAME => array (CommonAcheteurPublicPeer::ID, CommonAcheteurPublicPeer::ORGANISME, CommonAcheteurPublicPeer::DENOMINATION, CommonAcheteurPublicPeer::PRM, CommonAcheteurPublicPeer::ADRESSE, CommonAcheteurPublicPeer::CP, CommonAcheteurPublicPeer::VILLE, CommonAcheteurPublicPeer::DEPT, CommonAcheteurPublicPeer::TYPE_ORG, CommonAcheteurPublicPeer::TELEPHONE, CommonAcheteurPublicPeer::FAX, CommonAcheteurPublicPeer::MAIL, CommonAcheteurPublicPeer::URL, CommonAcheteurPublicPeer::URL_ACHETEUR, CommonAcheteurPublicPeer::FACTURE_NUMERO, CommonAcheteurPublicPeer::FACTURE_CODE, CommonAcheteurPublicPeer::FACTURE_DENOMINATION, CommonAcheteurPublicPeer::FACTURATION_SERVICE, CommonAcheteurPublicPeer::FACTURE_ADRESSE, CommonAcheteurPublicPeer::FACTURE_CP, CommonAcheteurPublicPeer::FACTURE_VILLE, CommonAcheteurPublicPeer::FACTURE_PAYS, CommonAcheteurPublicPeer::ID_AAPC, CommonAcheteurPublicPeer::BOAMP_LOGIN, CommonAcheteurPublicPeer::BOAMP_PASSWORD, CommonAcheteurPublicPeer::BOAMP_MAIL, CommonAcheteurPublicPeer::BOAMP_TARGET, CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES, CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP, CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE, CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP, CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS, CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE, CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP, CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP, CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP, CommonAcheteurPublicPeer::DEFAUT_FORM_RECT, CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE, CommonAcheteurPublicPeer::ID_SERVICE, CommonAcheteurPublicPeer::LIVRAISON_SERVICE, CommonAcheteurPublicPeer::LIVRAISON_ADRESSE, CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL, CommonAcheteurPublicPeer::LIVRAISON_VILLE, CommonAcheteurPublicPeer::LIVRAISON_PAYS, CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE, CommonAcheteurPublicPeer::CODE_NUTS, CommonAcheteurPublicPeer::MODALITES_FINANCEMENT, CommonAcheteurPublicPeer::MONITEUR_PROVENANCE, CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'DENOMINATION', 'PRM', 'ADRESSE', 'CP', 'VILLE', 'DEPT', 'TYPE_ORG', 'TELEPHONE', 'FAX', 'MAIL', 'URL', 'URL_ACHETEUR', 'FACTURE_NUMERO', 'FACTURE_CODE', 'FACTURE_DENOMINATION', 'FACTURATION_SERVICE', 'FACTURE_ADRESSE', 'FACTURE_CP', 'FACTURE_VILLE', 'FACTURE_PAYS', 'ID_AAPC', 'BOAMP_LOGIN', 'BOAMP_PASSWORD', 'BOAMP_MAIL', 'BOAMP_TARGET', 'DEFAULT_FORM_VALUES', 'DEFAUT_FORM_AM_BOAMP', 'DEFAUT_FORM_AM_BOAMP_JOUE', 'DEFAUT_FORM_MAPA_BOAMP', 'DEFAUT_FORM_ACONCOURS', 'DEFAUT_FORM_AS_BOAMP_JOUE', 'DEFAUT_FORM_AA_BOAMP', 'DEFAUT_FORM_AR_MAPA_BOAMP', 'DEFAUT_FORM_05_BOAMP', 'DEFAUT_FORM_RECT', 'DEFAUT_FORM_AA_BOAMP_JOUE', 'ID_SERVICE', 'LIVRAISON_SERVICE', 'LIVRAISON_ADRESSE', 'LIVRAISON_CODE_POSTAL', 'LIVRAISON_VILLE', 'LIVRAISON_PAYS', 'TYPE_POUVOIR_ACTIVITE', 'CODE_NUTS', 'MODALITES_FINANCEMENT', 'MONITEUR_PROVENANCE', 'CODE_ACCES_LOGICIEL', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'denomination', 'prm', 'adresse', 'cp', 'ville', 'dept', 'type_org', 'telephone', 'fax', 'mail', 'url', 'url_acheteur', 'facture_numero', 'facture_code', 'facture_denomination', 'facturation_service', 'facture_adresse', 'facture_cp', 'facture_ville', 'facture_pays', 'id_aapc', 'boamp_login', 'boamp_password', 'boamp_mail', 'boamp_target', 'default_form_values', 'defaut_form_am_boamp', 'defaut_form_am_boamp_joue', 'defaut_form_mapa_boamp', 'defaut_form_aconcours', 'defaut_form_as_boamp_joue', 'defaut_form_aa_boamp', 'defaut_form_ar_mapa_boamp', 'defaut_form_05_boamp', 'defaut_form_rect', 'defaut_form_aa_boamp_joue', 'id_service', 'livraison_service', 'livraison_adresse', 'livraison_code_postal', 'livraison_ville', 'livraison_pays', 'type_pouvoir_activite', 'code_nuts', 'modalites_financement', 'moniteur_provenance', 'code_acces_logiciel', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAcheteurPublicPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Denomination' => 2, 'Prm' => 3, 'Adresse' => 4, 'Cp' => 5, 'Ville' => 6, 'Dept' => 7, 'TypeOrg' => 8, 'Telephone' => 9, 'Fax' => 10, 'Mail' => 11, 'Url' => 12, 'UrlAcheteur' => 13, 'FactureNumero' => 14, 'FactureCode' => 15, 'FactureDenomination' => 16, 'FacturationService' => 17, 'FactureAdresse' => 18, 'FactureCp' => 19, 'FactureVille' => 20, 'FacturePays' => 21, 'IdAapc' => 22, 'BoampLogin' => 23, 'BoampPassword' => 24, 'BoampMail' => 25, 'BoampTarget' => 26, 'DefaultFormValues' => 27, 'DefautFormAmBoamp' => 28, 'DefautFormAmBoampJoue' => 29, 'DefautFormMapaBoamp' => 30, 'DefautFormAconcours' => 31, 'DefautFormAsBoampJoue' => 32, 'DefautFormAaBoamp' => 33, 'DefautFormArMapaBoamp' => 34, 'DefautForm05Boamp' => 35, 'DefautFormRect' => 36, 'DefautFormAaBoampJoue' => 37, 'IdService' => 38, 'LivraisonService' => 39, 'LivraisonAdresse' => 40, 'LivraisonCodePostal' => 41, 'LivraisonVille' => 42, 'LivraisonPays' => 43, 'TypePouvoirActivite' => 44, 'CodeNuts' => 45, 'ModalitesFinancement' => 46, 'MoniteurProvenance' => 47, 'CodeAccesLogiciel' => 48, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'denomination' => 2, 'prm' => 3, 'adresse' => 4, 'cp' => 5, 'ville' => 6, 'dept' => 7, 'typeOrg' => 8, 'telephone' => 9, 'fax' => 10, 'mail' => 11, 'url' => 12, 'urlAcheteur' => 13, 'factureNumero' => 14, 'factureCode' => 15, 'factureDenomination' => 16, 'facturationService' => 17, 'factureAdresse' => 18, 'factureCp' => 19, 'factureVille' => 20, 'facturePays' => 21, 'idAapc' => 22, 'boampLogin' => 23, 'boampPassword' => 24, 'boampMail' => 25, 'boampTarget' => 26, 'defaultFormValues' => 27, 'defautFormAmBoamp' => 28, 'defautFormAmBoampJoue' => 29, 'defautFormMapaBoamp' => 30, 'defautFormAconcours' => 31, 'defautFormAsBoampJoue' => 32, 'defautFormAaBoamp' => 33, 'defautFormArMapaBoamp' => 34, 'defautForm05Boamp' => 35, 'defautFormRect' => 36, 'defautFormAaBoampJoue' => 37, 'idService' => 38, 'livraisonService' => 39, 'livraisonAdresse' => 40, 'livraisonCodePostal' => 41, 'livraisonVille' => 42, 'livraisonPays' => 43, 'typePouvoirActivite' => 44, 'codeNuts' => 45, 'modalitesFinancement' => 46, 'moniteurProvenance' => 47, 'codeAccesLogiciel' => 48, ),
        BasePeer::TYPE_COLNAME => array (CommonAcheteurPublicPeer::ID => 0, CommonAcheteurPublicPeer::ORGANISME => 1, CommonAcheteurPublicPeer::DENOMINATION => 2, CommonAcheteurPublicPeer::PRM => 3, CommonAcheteurPublicPeer::ADRESSE => 4, CommonAcheteurPublicPeer::CP => 5, CommonAcheteurPublicPeer::VILLE => 6, CommonAcheteurPublicPeer::DEPT => 7, CommonAcheteurPublicPeer::TYPE_ORG => 8, CommonAcheteurPublicPeer::TELEPHONE => 9, CommonAcheteurPublicPeer::FAX => 10, CommonAcheteurPublicPeer::MAIL => 11, CommonAcheteurPublicPeer::URL => 12, CommonAcheteurPublicPeer::URL_ACHETEUR => 13, CommonAcheteurPublicPeer::FACTURE_NUMERO => 14, CommonAcheteurPublicPeer::FACTURE_CODE => 15, CommonAcheteurPublicPeer::FACTURE_DENOMINATION => 16, CommonAcheteurPublicPeer::FACTURATION_SERVICE => 17, CommonAcheteurPublicPeer::FACTURE_ADRESSE => 18, CommonAcheteurPublicPeer::FACTURE_CP => 19, CommonAcheteurPublicPeer::FACTURE_VILLE => 20, CommonAcheteurPublicPeer::FACTURE_PAYS => 21, CommonAcheteurPublicPeer::ID_AAPC => 22, CommonAcheteurPublicPeer::BOAMP_LOGIN => 23, CommonAcheteurPublicPeer::BOAMP_PASSWORD => 24, CommonAcheteurPublicPeer::BOAMP_MAIL => 25, CommonAcheteurPublicPeer::BOAMP_TARGET => 26, CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES => 27, CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP => 28, CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE => 29, CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP => 30, CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS => 31, CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE => 32, CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP => 33, CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP => 34, CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP => 35, CommonAcheteurPublicPeer::DEFAUT_FORM_RECT => 36, CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE => 37, CommonAcheteurPublicPeer::ID_SERVICE => 38, CommonAcheteurPublicPeer::LIVRAISON_SERVICE => 39, CommonAcheteurPublicPeer::LIVRAISON_ADRESSE => 40, CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL => 41, CommonAcheteurPublicPeer::LIVRAISON_VILLE => 42, CommonAcheteurPublicPeer::LIVRAISON_PAYS => 43, CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE => 44, CommonAcheteurPublicPeer::CODE_NUTS => 45, CommonAcheteurPublicPeer::MODALITES_FINANCEMENT => 46, CommonAcheteurPublicPeer::MONITEUR_PROVENANCE => 47, CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL => 48, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'DENOMINATION' => 2, 'PRM' => 3, 'ADRESSE' => 4, 'CP' => 5, 'VILLE' => 6, 'DEPT' => 7, 'TYPE_ORG' => 8, 'TELEPHONE' => 9, 'FAX' => 10, 'MAIL' => 11, 'URL' => 12, 'URL_ACHETEUR' => 13, 'FACTURE_NUMERO' => 14, 'FACTURE_CODE' => 15, 'FACTURE_DENOMINATION' => 16, 'FACTURATION_SERVICE' => 17, 'FACTURE_ADRESSE' => 18, 'FACTURE_CP' => 19, 'FACTURE_VILLE' => 20, 'FACTURE_PAYS' => 21, 'ID_AAPC' => 22, 'BOAMP_LOGIN' => 23, 'BOAMP_PASSWORD' => 24, 'BOAMP_MAIL' => 25, 'BOAMP_TARGET' => 26, 'DEFAULT_FORM_VALUES' => 27, 'DEFAUT_FORM_AM_BOAMP' => 28, 'DEFAUT_FORM_AM_BOAMP_JOUE' => 29, 'DEFAUT_FORM_MAPA_BOAMP' => 30, 'DEFAUT_FORM_ACONCOURS' => 31, 'DEFAUT_FORM_AS_BOAMP_JOUE' => 32, 'DEFAUT_FORM_AA_BOAMP' => 33, 'DEFAUT_FORM_AR_MAPA_BOAMP' => 34, 'DEFAUT_FORM_05_BOAMP' => 35, 'DEFAUT_FORM_RECT' => 36, 'DEFAUT_FORM_AA_BOAMP_JOUE' => 37, 'ID_SERVICE' => 38, 'LIVRAISON_SERVICE' => 39, 'LIVRAISON_ADRESSE' => 40, 'LIVRAISON_CODE_POSTAL' => 41, 'LIVRAISON_VILLE' => 42, 'LIVRAISON_PAYS' => 43, 'TYPE_POUVOIR_ACTIVITE' => 44, 'CODE_NUTS' => 45, 'MODALITES_FINANCEMENT' => 46, 'MONITEUR_PROVENANCE' => 47, 'CODE_ACCES_LOGICIEL' => 48, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'denomination' => 2, 'prm' => 3, 'adresse' => 4, 'cp' => 5, 'ville' => 6, 'dept' => 7, 'type_org' => 8, 'telephone' => 9, 'fax' => 10, 'mail' => 11, 'url' => 12, 'url_acheteur' => 13, 'facture_numero' => 14, 'facture_code' => 15, 'facture_denomination' => 16, 'facturation_service' => 17, 'facture_adresse' => 18, 'facture_cp' => 19, 'facture_ville' => 20, 'facture_pays' => 21, 'id_aapc' => 22, 'boamp_login' => 23, 'boamp_password' => 24, 'boamp_mail' => 25, 'boamp_target' => 26, 'default_form_values' => 27, 'defaut_form_am_boamp' => 28, 'defaut_form_am_boamp_joue' => 29, 'defaut_form_mapa_boamp' => 30, 'defaut_form_aconcours' => 31, 'defaut_form_as_boamp_joue' => 32, 'defaut_form_aa_boamp' => 33, 'defaut_form_ar_mapa_boamp' => 34, 'defaut_form_05_boamp' => 35, 'defaut_form_rect' => 36, 'defaut_form_aa_boamp_joue' => 37, 'id_service' => 38, 'livraison_service' => 39, 'livraison_adresse' => 40, 'livraison_code_postal' => 41, 'livraison_ville' => 42, 'livraison_pays' => 43, 'type_pouvoir_activite' => 44, 'code_nuts' => 45, 'modalites_financement' => 46, 'moniteur_provenance' => 47, 'code_acces_logiciel' => 48, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
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
        $toNames = CommonAcheteurPublicPeer::getFieldNames($toType);
        $key = isset(CommonAcheteurPublicPeer::$fieldKeys[$fromType][$name]) ? CommonAcheteurPublicPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAcheteurPublicPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAcheteurPublicPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAcheteurPublicPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAcheteurPublicPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAcheteurPublicPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::ID);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DENOMINATION);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::PRM);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::ADRESSE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::CP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::VILLE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEPT);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::TYPE_ORG);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FAX);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::MAIL);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::URL);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::URL_ACHETEUR);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_NUMERO);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_CODE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_DENOMINATION);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURATION_SERVICE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_ADRESSE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_CP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_VILLE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::FACTURE_PAYS);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::ID_AAPC);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::BOAMP_LOGIN);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::BOAMP_PASSWORD);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::BOAMP_MAIL);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::BOAMP_TARGET);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_RECT);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::LIVRAISON_SERVICE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::LIVRAISON_ADRESSE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::LIVRAISON_VILLE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::LIVRAISON_PAYS);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::CODE_NUTS);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::MODALITES_FINANCEMENT);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE);
            $criteria->addSelectColumn(CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.denomination');
            $criteria->addSelectColumn($alias . '.prm');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.dept');
            $criteria->addSelectColumn($alias . '.type_org');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.url_acheteur');
            $criteria->addSelectColumn($alias . '.facture_numero');
            $criteria->addSelectColumn($alias . '.facture_code');
            $criteria->addSelectColumn($alias . '.facture_denomination');
            $criteria->addSelectColumn($alias . '.facturation_service');
            $criteria->addSelectColumn($alias . '.facture_adresse');
            $criteria->addSelectColumn($alias . '.facture_cp');
            $criteria->addSelectColumn($alias . '.facture_ville');
            $criteria->addSelectColumn($alias . '.facture_pays');
            $criteria->addSelectColumn($alias . '.id_aapc');
            $criteria->addSelectColumn($alias . '.boamp_login');
            $criteria->addSelectColumn($alias . '.boamp_password');
            $criteria->addSelectColumn($alias . '.boamp_mail');
            $criteria->addSelectColumn($alias . '.boamp_target');
            $criteria->addSelectColumn($alias . '.default_form_values');
            $criteria->addSelectColumn($alias . '.defaut_form_am_boamp');
            $criteria->addSelectColumn($alias . '.defaut_form_am_boamp_joue');
            $criteria->addSelectColumn($alias . '.defaut_form_mapa_boamp');
            $criteria->addSelectColumn($alias . '.defaut_form_aconcours');
            $criteria->addSelectColumn($alias . '.defaut_form_as_boamp_joue');
            $criteria->addSelectColumn($alias . '.defaut_form_aa_boamp');
            $criteria->addSelectColumn($alias . '.defaut_form_ar_mapa_boamp');
            $criteria->addSelectColumn($alias . '.defaut_form_05_boamp');
            $criteria->addSelectColumn($alias . '.defaut_form_rect');
            $criteria->addSelectColumn($alias . '.defaut_form_aa_boamp_joue');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.livraison_service');
            $criteria->addSelectColumn($alias . '.livraison_adresse');
            $criteria->addSelectColumn($alias . '.livraison_code_postal');
            $criteria->addSelectColumn($alias . '.livraison_ville');
            $criteria->addSelectColumn($alias . '.livraison_pays');
            $criteria->addSelectColumn($alias . '.type_pouvoir_activite');
            $criteria->addSelectColumn($alias . '.code_nuts');
            $criteria->addSelectColumn($alias . '.modalites_financement');
            $criteria->addSelectColumn($alias . '.moniteur_provenance');
            $criteria->addSelectColumn($alias . '.code_acces_logiciel');
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
        $criteria->setPrimaryTableName(CommonAcheteurPublicPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAcheteurPublicPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAcheteurPublicPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAcheteurPublic
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAcheteurPublicPeer::doSelect($critcopy, $con);
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
        return CommonAcheteurPublicPeer::populateObjects(CommonAcheteurPublicPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAcheteurPublicPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAcheteurPublicPeer::DATABASE_NAME);

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
     * @param      CommonAcheteurPublic $obj A CommonAcheteurPublic object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAcheteurPublicPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAcheteurPublic object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAcheteurPublic) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAcheteurPublic object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAcheteurPublicPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAcheteurPublic Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAcheteurPublicPeer::$instances[$key])) {
                return CommonAcheteurPublicPeer::$instances[$key];
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
        foreach (CommonAcheteurPublicPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAcheteurPublicPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AcheteurPublic
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
        $cls = CommonAcheteurPublicPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAcheteurPublicPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAcheteurPublicPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAcheteurPublicPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAcheteurPublic object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAcheteurPublicPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAcheteurPublicPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAcheteurPublicPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAcheteurPublicPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAcheteurPublicPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAcheteurPublicPeer::DATABASE_NAME)->getTable(CommonAcheteurPublicPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAcheteurPublicPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAcheteurPublicPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAcheteurPublicTableMap());
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
        return CommonAcheteurPublicPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAcheteurPublic or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAcheteurPublic object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAcheteurPublic object
        }

        if ($criteria->containsKey(CommonAcheteurPublicPeer::ID) && $criteria->keyContainsValue(CommonAcheteurPublicPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAcheteurPublicPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAcheteurPublicPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAcheteurPublic or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAcheteurPublic object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAcheteurPublicPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAcheteurPublicPeer::ID);
            $value = $criteria->remove(CommonAcheteurPublicPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAcheteurPublicPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAcheteurPublicPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAcheteurPublicPeer::ORGANISME);
            $value = $criteria->remove(CommonAcheteurPublicPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAcheteurPublicPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAcheteurPublicPeer::TABLE_NAME);
            }

        } else { // $values is CommonAcheteurPublic object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAcheteurPublicPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AcheteurPublic table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAcheteurPublicPeer::TABLE_NAME, $con, CommonAcheteurPublicPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAcheteurPublicPeer::clearInstancePool();
            CommonAcheteurPublicPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAcheteurPublic or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAcheteurPublic object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAcheteurPublicPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAcheteurPublic) { // it's a model object
            // invalidate the cache for this single object
            CommonAcheteurPublicPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAcheteurPublicPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAcheteurPublicPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAcheteurPublicPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAcheteurPublicPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAcheteurPublicPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAcheteurPublicPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAcheteurPublic object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAcheteurPublic $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAcheteurPublicPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAcheteurPublicPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAcheteurPublicPeer::DATABASE_NAME, CommonAcheteurPublicPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAcheteurPublic
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAcheteurPublicPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAcheteurPublicPeer::DATABASE_NAME);
        $criteria->add(CommonAcheteurPublicPeer::ID, $id);
        $criteria->add(CommonAcheteurPublicPeer::ORGANISME, $organisme);
        $v = CommonAcheteurPublicPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAcheteurPublicPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAcheteurPublicPeer::buildTableMap();

