<?php


/**
 * Base static class for performing query and update operations on the 't_demandeur' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTDemandeurPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_demandeur';

    /** the related Propel class for this table */
    const OM_CLASS = 'TDemandeur';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TDemandeurTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 54;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 54;

    /** the column name for the ID_DEMANDEUR field */
    const ID_DEMANDEUR = 't_demandeur.ID_DEMANDEUR';

    /** the column name for the NOM field */
    const NOM = 't_demandeur.NOM';

    /** the column name for the PRENOM field */
    const PRENOM = 't_demandeur.PRENOM';

    /** the column name for the PRENOM_FR field */
    const PRENOM_FR = 't_demandeur.PRENOM_FR';

    /** the column name for the NOM_FR field */
    const NOM_FR = 't_demandeur.NOM_FR';

    /** the column name for the RAISON_SOCIALE field */
    const RAISON_SOCIALE = 't_demandeur.RAISON_SOCIALE';

    /** the column name for the RAISON_SOCIALE_AR field */
    const RAISON_SOCIALE_AR = 't_demandeur.RAISON_SOCIALE_AR';

    /** the column name for the TYPE_REQUERANT field */
    const TYPE_REQUERANT = 't_demandeur.TYPE_REQUERANT';

    /** the column name for the IDENTIFIANT_FISCAL field */
    const IDENTIFIANT_FISCAL = 't_demandeur.IDENTIFIANT_FISCAL';

    /** the column name for the ORGANISATION field */
    const ORGANISATION = 't_demandeur.ORGANISATION';

    /** the column name for the ORGANISATION_AR field */
    const ORGANISATION_AR = 't_demandeur.ORGANISATION_AR';

    /** the column name for the VILLE_REGISTRE_COMMERCE field */
    const VILLE_REGISTRE_COMMERCE = 't_demandeur.VILLE_REGISTRE_COMMERCE';

    /** the column name for the NUMERO_REGISTRE_COMMERCE field */
    const NUMERO_REGISTRE_COMMERCE = 't_demandeur.NUMERO_REGISTRE_COMMERCE';

    /** the column name for the ADRESSE field */
    const ADRESSE = 't_demandeur.ADRESSE';

    /** the column name for the COMPLEMENT_ADRESSE field */
    const COMPLEMENT_ADRESSE = 't_demandeur.COMPLEMENT_ADRESSE';

    /** the column name for the CODE_POSTAL field */
    const CODE_POSTAL = 't_demandeur.CODE_POSTAL';

    /** the column name for the VILLE field */
    const VILLE = 't_demandeur.VILLE';

    /** the column name for the PAYS field */
    const PAYS = 't_demandeur.PAYS';

    /** the column name for the EMAIL field */
    const EMAIL = 't_demandeur.EMAIL';

    /** the column name for the MOT_DE_PASSE_DEMANDEUR field */
    const MOT_DE_PASSE_DEMANDEUR = 't_demandeur.MOT_DE_PASSE_DEMANDEUR';

    /** the column name for the TELEPHONE field */
    const TELEPHONE = 't_demandeur.TELEPHONE';

    /** the column name for the TELEPHONE_PORTABLE field */
    const TELEPHONE_PORTABLE = 't_demandeur.TELEPHONE_PORTABLE';

    /** the column name for the NUMERO_TAXE_PROFESSIONNELLE field */
    const NUMERO_TAXE_PROFESSIONNELLE = 't_demandeur.NUMERO_TAXE_PROFESSIONNELLE';

    /** the column name for the FAX field */
    const FAX = 't_demandeur.FAX';

    /** the column name for the FAX_ENTREPRISE field */
    const FAX_ENTREPRISE = 't_demandeur.FAX_ENTREPRISE';

    /** the column name for the ICE field */
    const ICE = 't_demandeur.ICE';

    /** the column name for the NUMERO_CNSS field */
    const NUMERO_CNSS = 't_demandeur.NUMERO_CNSS';

    /** the column name for the FONCTION field */
    const FONCTION = 't_demandeur.FONCTION';

    /** the column name for the TELEPHONE_ENTREPRISE field */
    const TELEPHONE_ENTREPRISE = 't_demandeur.TELEPHONE_ENTREPRISE';

    /** the column name for the NUMERO_PATENTE field */
    const NUMERO_PATENTE = 't_demandeur.NUMERO_PATENTE';

    /** the column name for the EMAIL_ENTREPRISE field */
    const EMAIL_ENTREPRISE = 't_demandeur.EMAIL_ENTREPRISE';

    /** the column name for the FORM_JURIDIQUE field */
    const FORM_JURIDIQUE = 't_demandeur.FORM_JURIDIQUE';

    /** the column name for the ID_REGION field */
    const ID_REGION = 't_demandeur.ID_REGION';

    /** the column name for the VALIDE field */
    const VALIDE = 't_demandeur.VALIDE';

    /** the column name for the IDENTIFIANT_NATIONAL field */
    const IDENTIFIANT_NATIONAL = 't_demandeur.IDENTIFIANT_NATIONAL';

    /** the column name for the TYPE_ENTREPRISE field */
    const TYPE_ENTREPRISE = 't_demandeur.TYPE_ENTREPRISE';

    /** the column name for the MOTIF_REJET field */
    const MOTIF_REJET = 't_demandeur.MOTIF_REJET';

    /** the column name for the MOTIF_DESACTIVATION field */
    const MOTIF_DESACTIVATION = 't_demandeur.MOTIF_DESACTIVATION';

    /** the column name for the NUMERO_FOURNISSEUR field */
    const NUMERO_FOURNISSEUR = 't_demandeur.NUMERO_FOURNISSEUR';

    /** the column name for the DATE_CREATION field */
    const DATE_CREATION = 't_demandeur.DATE_CREATION';

    /** the column name for the IS_CONNU field */
    const IS_CONNU = 't_demandeur.IS_CONNU';

    /** the column name for the ID_ENTITE_DEMANDEUR field */
    const ID_ENTITE_DEMANDEUR = 't_demandeur.ID_ENTITE_DEMANDEUR';

    /** the column name for the ID_EXTERNE field */
    const ID_EXTERNE = 't_demandeur.ID_EXTERNE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 't_demandeur.ID_ENTITE';

    /** the column name for the ANNULEE field */
    const ANNULEE = 't_demandeur.ANNULEE';

    /** the column name for the ID_REMPLACANT field */
    const ID_REMPLACANT = 't_demandeur.ID_REMPLACANT';

    /** the column name for the ID_ORGANISME field */
    const ID_ORGANISME = 't_demandeur.ID_ORGANISME';

    /** the column name for the ID_ENTITE_ORGANISME field */
    const ID_ENTITE_ORGANISME = 't_demandeur.ID_ENTITE_ORGANISME';

    /** the column name for the DATE_DERNIER_ACCES field */
    const DATE_DERNIER_ACCES = 't_demandeur.DATE_DERNIER_ACCES';

    /** the column name for the JETON_VALIDATION field */
    const JETON_VALIDATION = 't_demandeur.JETON_VALIDATION';

    /** the column name for the STATUT_ENABLE_ACCOUNT field */
    const STATUT_ENABLE_ACCOUNT = 't_demandeur.STATUT_ENABLE_ACCOUNT';

    /** the column name for the DATE_TRAITEMENT field */
    const DATE_TRAITEMENT = 't_demandeur.DATE_TRAITEMENT';

    /** the column name for the TOKEN_RECUP field */
    const TOKEN_RECUP = 't_demandeur.TOKEN_RECUP';

    /** the column name for the DATE_EXPIRATION field */
    const DATE_EXPIRATION = 't_demandeur.DATE_EXPIRATION';

    /** The enumerated values for the VALIDE field */
    const VALIDE_0 = '0';
    const VALIDE_1 = '1';
    const VALIDE_2 = '2';

    /** The enumerated values for the TYPE_ENTREPRISE field */
    const TYPE_ENTREPRISE_0 = '0';
    const TYPE_ENTREPRISE_1 = '1';

    /** The enumerated values for the IS_CONNU field */
    const IS_CONNU_0 = '0';
    const IS_CONNU_1 = '1';

    /** The enumerated values for the ANNULEE field */
    const ANNULEE_0 = '0';
    const ANNULEE_1 = '1';

    /** The enumerated values for the STATUT_ENABLE_ACCOUNT field */
    const STATUT_ENABLE_ACCOUNT_0 = '0';
    const STATUT_ENABLE_ACCOUNT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TDemandeur objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TDemandeur[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TDemandeurPeer::$fieldNames[TDemandeurPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDemandeur', 'Nom', 'Prenom', 'PrenomFr', 'NomFr', 'RaisonSociale', 'RaisonSocialeAr', 'TypeRequerant', 'IdentifiantFiscal', 'Organisation', 'OrganisationAr', 'VilleRegistreCommerce', 'NumeroRegistreCommerce', 'Adresse', 'ComplementAdresse', 'CodePostal', 'Ville', 'Pays', 'Email', 'MotDePasseDemandeur', 'Telephone', 'TelephonePortable', 'NumeroTaxeProfessionnelle', 'Fax', 'FaxEntreprise', 'Ice', 'NumeroCnss', 'Fonction', 'TelephoneEntreprise', 'NumeroPatente', 'EmailEntreprise', 'FormJuridique', 'IdRegion', 'Valide', 'IdentifiantNational', 'TypeEntreprise', 'MotifRejet', 'MotifDesactivation', 'NumeroFournisseur', 'DateCreation', 'IsConnu', 'IdEntiteDemandeur', 'IdExterne', 'IdEntite', 'Annulee', 'IdRemplacant', 'IdOrganisme', 'IdEntiteOrganisme', 'DateDernierAcces', 'JetonValidation', 'StatutEnableAccount', 'DateTraitement', 'TokenRecup', 'DateExpiration', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDemandeur', 'nom', 'prenom', 'prenomFr', 'nomFr', 'raisonSociale', 'raisonSocialeAr', 'typeRequerant', 'identifiantFiscal', 'organisation', 'organisationAr', 'villeRegistreCommerce', 'numeroRegistreCommerce', 'adresse', 'complementAdresse', 'codePostal', 'ville', 'pays', 'email', 'motDePasseDemandeur', 'telephone', 'telephonePortable', 'numeroTaxeProfessionnelle', 'fax', 'faxEntreprise', 'ice', 'numeroCnss', 'fonction', 'telephoneEntreprise', 'numeroPatente', 'emailEntreprise', 'formJuridique', 'idRegion', 'valide', 'identifiantNational', 'typeEntreprise', 'motifRejet', 'motifDesactivation', 'numeroFournisseur', 'dateCreation', 'isConnu', 'idEntiteDemandeur', 'idExterne', 'idEntite', 'annulee', 'idRemplacant', 'idOrganisme', 'idEntiteOrganisme', 'dateDernierAcces', 'jetonValidation', 'statutEnableAccount', 'dateTraitement', 'tokenRecup', 'dateExpiration', ),
        BasePeer::TYPE_COLNAME => array (TDemandeurPeer::ID_DEMANDEUR, TDemandeurPeer::NOM, TDemandeurPeer::PRENOM, TDemandeurPeer::PRENOM_FR, TDemandeurPeer::NOM_FR, TDemandeurPeer::RAISON_SOCIALE, TDemandeurPeer::RAISON_SOCIALE_AR, TDemandeurPeer::TYPE_REQUERANT, TDemandeurPeer::IDENTIFIANT_FISCAL, TDemandeurPeer::ORGANISATION, TDemandeurPeer::ORGANISATION_AR, TDemandeurPeer::VILLE_REGISTRE_COMMERCE, TDemandeurPeer::NUMERO_REGISTRE_COMMERCE, TDemandeurPeer::ADRESSE, TDemandeurPeer::COMPLEMENT_ADRESSE, TDemandeurPeer::CODE_POSTAL, TDemandeurPeer::VILLE, TDemandeurPeer::PAYS, TDemandeurPeer::EMAIL, TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR, TDemandeurPeer::TELEPHONE, TDemandeurPeer::TELEPHONE_PORTABLE, TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE, TDemandeurPeer::FAX, TDemandeurPeer::FAX_ENTREPRISE, TDemandeurPeer::ICE, TDemandeurPeer::NUMERO_CNSS, TDemandeurPeer::FONCTION, TDemandeurPeer::TELEPHONE_ENTREPRISE, TDemandeurPeer::NUMERO_PATENTE, TDemandeurPeer::EMAIL_ENTREPRISE, TDemandeurPeer::FORM_JURIDIQUE, TDemandeurPeer::ID_REGION, TDemandeurPeer::VALIDE, TDemandeurPeer::IDENTIFIANT_NATIONAL, TDemandeurPeer::TYPE_ENTREPRISE, TDemandeurPeer::MOTIF_REJET, TDemandeurPeer::MOTIF_DESACTIVATION, TDemandeurPeer::NUMERO_FOURNISSEUR, TDemandeurPeer::DATE_CREATION, TDemandeurPeer::IS_CONNU, TDemandeurPeer::ID_ENTITE_DEMANDEUR, TDemandeurPeer::ID_EXTERNE, TDemandeurPeer::ID_ENTITE, TDemandeurPeer::ANNULEE, TDemandeurPeer::ID_REMPLACANT, TDemandeurPeer::ID_ORGANISME, TDemandeurPeer::ID_ENTITE_ORGANISME, TDemandeurPeer::DATE_DERNIER_ACCES, TDemandeurPeer::JETON_VALIDATION, TDemandeurPeer::STATUT_ENABLE_ACCOUNT, TDemandeurPeer::DATE_TRAITEMENT, TDemandeurPeer::TOKEN_RECUP, TDemandeurPeer::DATE_EXPIRATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DEMANDEUR', 'NOM', 'PRENOM', 'PRENOM_FR', 'NOM_FR', 'RAISON_SOCIALE', 'RAISON_SOCIALE_AR', 'TYPE_REQUERANT', 'IDENTIFIANT_FISCAL', 'ORGANISATION', 'ORGANISATION_AR', 'VILLE_REGISTRE_COMMERCE', 'NUMERO_REGISTRE_COMMERCE', 'ADRESSE', 'COMPLEMENT_ADRESSE', 'CODE_POSTAL', 'VILLE', 'PAYS', 'EMAIL', 'MOT_DE_PASSE_DEMANDEUR', 'TELEPHONE', 'TELEPHONE_PORTABLE', 'NUMERO_TAXE_PROFESSIONNELLE', 'FAX', 'FAX_ENTREPRISE', 'ICE', 'NUMERO_CNSS', 'FONCTION', 'TELEPHONE_ENTREPRISE', 'NUMERO_PATENTE', 'EMAIL_ENTREPRISE', 'FORM_JURIDIQUE', 'ID_REGION', 'VALIDE', 'IDENTIFIANT_NATIONAL', 'TYPE_ENTREPRISE', 'MOTIF_REJET', 'MOTIF_DESACTIVATION', 'NUMERO_FOURNISSEUR', 'DATE_CREATION', 'IS_CONNU', 'ID_ENTITE_DEMANDEUR', 'ID_EXTERNE', 'ID_ENTITE', 'ANNULEE', 'ID_REMPLACANT', 'ID_ORGANISME', 'ID_ENTITE_ORGANISME', 'DATE_DERNIER_ACCES', 'JETON_VALIDATION', 'STATUT_ENABLE_ACCOUNT', 'DATE_TRAITEMENT', 'TOKEN_RECUP', 'DATE_EXPIRATION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_DEMANDEUR', 'NOM', 'PRENOM', 'PRENOM_FR', 'NOM_FR', 'RAISON_SOCIALE', 'RAISON_SOCIALE_AR', 'TYPE_REQUERANT', 'IDENTIFIANT_FISCAL', 'ORGANISATION', 'ORGANISATION_AR', 'VILLE_REGISTRE_COMMERCE', 'NUMERO_REGISTRE_COMMERCE', 'ADRESSE', 'COMPLEMENT_ADRESSE', 'CODE_POSTAL', 'VILLE', 'PAYS', 'EMAIL', 'MOT_DE_PASSE_DEMANDEUR', 'TELEPHONE', 'TELEPHONE_PORTABLE', 'NUMERO_TAXE_PROFESSIONNELLE', 'FAX', 'FAX_ENTREPRISE', 'ICE', 'NUMERO_CNSS', 'FONCTION', 'TELEPHONE_ENTREPRISE', 'NUMERO_PATENTE', 'EMAIL_ENTREPRISE', 'FORM_JURIDIQUE', 'ID_REGION', 'VALIDE', 'IDENTIFIANT_NATIONAL', 'TYPE_ENTREPRISE', 'MOTIF_REJET', 'MOTIF_DESACTIVATION', 'NUMERO_FOURNISSEUR', 'DATE_CREATION', 'IS_CONNU', 'ID_ENTITE_DEMANDEUR', 'ID_EXTERNE', 'ID_ENTITE', 'ANNULEE', 'ID_REMPLACANT', 'ID_ORGANISME', 'ID_ENTITE_ORGANISME', 'DATE_DERNIER_ACCES', 'JETON_VALIDATION', 'STATUT_ENABLE_ACCOUNT', 'DATE_TRAITEMENT', 'TOKEN_RECUP', 'DATE_EXPIRATION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TDemandeurPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDemandeur' => 0, 'Nom' => 1, 'Prenom' => 2, 'PrenomFr' => 3, 'NomFr' => 4, 'RaisonSociale' => 5, 'RaisonSocialeAr' => 6, 'TypeRequerant' => 7, 'IdentifiantFiscal' => 8, 'Organisation' => 9, 'OrganisationAr' => 10, 'VilleRegistreCommerce' => 11, 'NumeroRegistreCommerce' => 12, 'Adresse' => 13, 'ComplementAdresse' => 14, 'CodePostal' => 15, 'Ville' => 16, 'Pays' => 17, 'Email' => 18, 'MotDePasseDemandeur' => 19, 'Telephone' => 20, 'TelephonePortable' => 21, 'NumeroTaxeProfessionnelle' => 22, 'Fax' => 23, 'FaxEntreprise' => 24, 'Ice' => 25, 'NumeroCnss' => 26, 'Fonction' => 27, 'TelephoneEntreprise' => 28, 'NumeroPatente' => 29, 'EmailEntreprise' => 30, 'FormJuridique' => 31, 'IdRegion' => 32, 'Valide' => 33, 'IdentifiantNational' => 34, 'TypeEntreprise' => 35, 'MotifRejet' => 36, 'MotifDesactivation' => 37, 'NumeroFournisseur' => 38, 'DateCreation' => 39, 'IsConnu' => 40, 'IdEntiteDemandeur' => 41, 'IdExterne' => 42, 'IdEntite' => 43, 'Annulee' => 44, 'IdRemplacant' => 45, 'IdOrganisme' => 46, 'IdEntiteOrganisme' => 47, 'DateDernierAcces' => 48, 'JetonValidation' => 49, 'StatutEnableAccount' => 50, 'DateTraitement' => 51, 'TokenRecup' => 52, 'DateExpiration' => 53, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDemandeur' => 0, 'nom' => 1, 'prenom' => 2, 'prenomFr' => 3, 'nomFr' => 4, 'raisonSociale' => 5, 'raisonSocialeAr' => 6, 'typeRequerant' => 7, 'identifiantFiscal' => 8, 'organisation' => 9, 'organisationAr' => 10, 'villeRegistreCommerce' => 11, 'numeroRegistreCommerce' => 12, 'adresse' => 13, 'complementAdresse' => 14, 'codePostal' => 15, 'ville' => 16, 'pays' => 17, 'email' => 18, 'motDePasseDemandeur' => 19, 'telephone' => 20, 'telephonePortable' => 21, 'numeroTaxeProfessionnelle' => 22, 'fax' => 23, 'faxEntreprise' => 24, 'ice' => 25, 'numeroCnss' => 26, 'fonction' => 27, 'telephoneEntreprise' => 28, 'numeroPatente' => 29, 'emailEntreprise' => 30, 'formJuridique' => 31, 'idRegion' => 32, 'valide' => 33, 'identifiantNational' => 34, 'typeEntreprise' => 35, 'motifRejet' => 36, 'motifDesactivation' => 37, 'numeroFournisseur' => 38, 'dateCreation' => 39, 'isConnu' => 40, 'idEntiteDemandeur' => 41, 'idExterne' => 42, 'idEntite' => 43, 'annulee' => 44, 'idRemplacant' => 45, 'idOrganisme' => 46, 'idEntiteOrganisme' => 47, 'dateDernierAcces' => 48, 'jetonValidation' => 49, 'statutEnableAccount' => 50, 'dateTraitement' => 51, 'tokenRecup' => 52, 'dateExpiration' => 53, ),
        BasePeer::TYPE_COLNAME => array (TDemandeurPeer::ID_DEMANDEUR => 0, TDemandeurPeer::NOM => 1, TDemandeurPeer::PRENOM => 2, TDemandeurPeer::PRENOM_FR => 3, TDemandeurPeer::NOM_FR => 4, TDemandeurPeer::RAISON_SOCIALE => 5, TDemandeurPeer::RAISON_SOCIALE_AR => 6, TDemandeurPeer::TYPE_REQUERANT => 7, TDemandeurPeer::IDENTIFIANT_FISCAL => 8, TDemandeurPeer::ORGANISATION => 9, TDemandeurPeer::ORGANISATION_AR => 10, TDemandeurPeer::VILLE_REGISTRE_COMMERCE => 11, TDemandeurPeer::NUMERO_REGISTRE_COMMERCE => 12, TDemandeurPeer::ADRESSE => 13, TDemandeurPeer::COMPLEMENT_ADRESSE => 14, TDemandeurPeer::CODE_POSTAL => 15, TDemandeurPeer::VILLE => 16, TDemandeurPeer::PAYS => 17, TDemandeurPeer::EMAIL => 18, TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR => 19, TDemandeurPeer::TELEPHONE => 20, TDemandeurPeer::TELEPHONE_PORTABLE => 21, TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE => 22, TDemandeurPeer::FAX => 23, TDemandeurPeer::FAX_ENTREPRISE => 24, TDemandeurPeer::ICE => 25, TDemandeurPeer::NUMERO_CNSS => 26, TDemandeurPeer::FONCTION => 27, TDemandeurPeer::TELEPHONE_ENTREPRISE => 28, TDemandeurPeer::NUMERO_PATENTE => 29, TDemandeurPeer::EMAIL_ENTREPRISE => 30, TDemandeurPeer::FORM_JURIDIQUE => 31, TDemandeurPeer::ID_REGION => 32, TDemandeurPeer::VALIDE => 33, TDemandeurPeer::IDENTIFIANT_NATIONAL => 34, TDemandeurPeer::TYPE_ENTREPRISE => 35, TDemandeurPeer::MOTIF_REJET => 36, TDemandeurPeer::MOTIF_DESACTIVATION => 37, TDemandeurPeer::NUMERO_FOURNISSEUR => 38, TDemandeurPeer::DATE_CREATION => 39, TDemandeurPeer::IS_CONNU => 40, TDemandeurPeer::ID_ENTITE_DEMANDEUR => 41, TDemandeurPeer::ID_EXTERNE => 42, TDemandeurPeer::ID_ENTITE => 43, TDemandeurPeer::ANNULEE => 44, TDemandeurPeer::ID_REMPLACANT => 45, TDemandeurPeer::ID_ORGANISME => 46, TDemandeurPeer::ID_ENTITE_ORGANISME => 47, TDemandeurPeer::DATE_DERNIER_ACCES => 48, TDemandeurPeer::JETON_VALIDATION => 49, TDemandeurPeer::STATUT_ENABLE_ACCOUNT => 50, TDemandeurPeer::DATE_TRAITEMENT => 51, TDemandeurPeer::TOKEN_RECUP => 52, TDemandeurPeer::DATE_EXPIRATION => 53, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DEMANDEUR' => 0, 'NOM' => 1, 'PRENOM' => 2, 'PRENOM_FR' => 3, 'NOM_FR' => 4, 'RAISON_SOCIALE' => 5, 'RAISON_SOCIALE_AR' => 6, 'TYPE_REQUERANT' => 7, 'IDENTIFIANT_FISCAL' => 8, 'ORGANISATION' => 9, 'ORGANISATION_AR' => 10, 'VILLE_REGISTRE_COMMERCE' => 11, 'NUMERO_REGISTRE_COMMERCE' => 12, 'ADRESSE' => 13, 'COMPLEMENT_ADRESSE' => 14, 'CODE_POSTAL' => 15, 'VILLE' => 16, 'PAYS' => 17, 'EMAIL' => 18, 'MOT_DE_PASSE_DEMANDEUR' => 19, 'TELEPHONE' => 20, 'TELEPHONE_PORTABLE' => 21, 'NUMERO_TAXE_PROFESSIONNELLE' => 22, 'FAX' => 23, 'FAX_ENTREPRISE' => 24, 'ICE' => 25, 'NUMERO_CNSS' => 26, 'FONCTION' => 27, 'TELEPHONE_ENTREPRISE' => 28, 'NUMERO_PATENTE' => 29, 'EMAIL_ENTREPRISE' => 30, 'FORM_JURIDIQUE' => 31, 'ID_REGION' => 32, 'VALIDE' => 33, 'IDENTIFIANT_NATIONAL' => 34, 'TYPE_ENTREPRISE' => 35, 'MOTIF_REJET' => 36, 'MOTIF_DESACTIVATION' => 37, 'NUMERO_FOURNISSEUR' => 38, 'DATE_CREATION' => 39, 'IS_CONNU' => 40, 'ID_ENTITE_DEMANDEUR' => 41, 'ID_EXTERNE' => 42, 'ID_ENTITE' => 43, 'ANNULEE' => 44, 'ID_REMPLACANT' => 45, 'ID_ORGANISME' => 46, 'ID_ENTITE_ORGANISME' => 47, 'DATE_DERNIER_ACCES' => 48, 'JETON_VALIDATION' => 49, 'STATUT_ENABLE_ACCOUNT' => 50, 'DATE_TRAITEMENT' => 51, 'TOKEN_RECUP' => 52, 'DATE_EXPIRATION' => 53, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_DEMANDEUR' => 0, 'NOM' => 1, 'PRENOM' => 2, 'PRENOM_FR' => 3, 'NOM_FR' => 4, 'RAISON_SOCIALE' => 5, 'RAISON_SOCIALE_AR' => 6, 'TYPE_REQUERANT' => 7, 'IDENTIFIANT_FISCAL' => 8, 'ORGANISATION' => 9, 'ORGANISATION_AR' => 10, 'VILLE_REGISTRE_COMMERCE' => 11, 'NUMERO_REGISTRE_COMMERCE' => 12, 'ADRESSE' => 13, 'COMPLEMENT_ADRESSE' => 14, 'CODE_POSTAL' => 15, 'VILLE' => 16, 'PAYS' => 17, 'EMAIL' => 18, 'MOT_DE_PASSE_DEMANDEUR' => 19, 'TELEPHONE' => 20, 'TELEPHONE_PORTABLE' => 21, 'NUMERO_TAXE_PROFESSIONNELLE' => 22, 'FAX' => 23, 'FAX_ENTREPRISE' => 24, 'ICE' => 25, 'NUMERO_CNSS' => 26, 'FONCTION' => 27, 'TELEPHONE_ENTREPRISE' => 28, 'NUMERO_PATENTE' => 29, 'EMAIL_ENTREPRISE' => 30, 'FORM_JURIDIQUE' => 31, 'ID_REGION' => 32, 'VALIDE' => 33, 'IDENTIFIANT_NATIONAL' => 34, 'TYPE_ENTREPRISE' => 35, 'MOTIF_REJET' => 36, 'MOTIF_DESACTIVATION' => 37, 'NUMERO_FOURNISSEUR' => 38, 'DATE_CREATION' => 39, 'IS_CONNU' => 40, 'ID_ENTITE_DEMANDEUR' => 41, 'ID_EXTERNE' => 42, 'ID_ENTITE' => 43, 'ANNULEE' => 44, 'ID_REMPLACANT' => 45, 'ID_ORGANISME' => 46, 'ID_ENTITE_ORGANISME' => 47, 'DATE_DERNIER_ACCES' => 48, 'JETON_VALIDATION' => 49, 'STATUT_ENABLE_ACCOUNT' => 50, 'DATE_TRAITEMENT' => 51, 'TOKEN_RECUP' => 52, 'DATE_EXPIRATION' => 53, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TDemandeurPeer::VALIDE => array(
            TDemandeurPeer::VALIDE_0,
            TDemandeurPeer::VALIDE_1,
            TDemandeurPeer::VALIDE_2,
        ),
        TDemandeurPeer::TYPE_ENTREPRISE => array(
            TDemandeurPeer::TYPE_ENTREPRISE_0,
            TDemandeurPeer::TYPE_ENTREPRISE_1,
        ),
        TDemandeurPeer::IS_CONNU => array(
            TDemandeurPeer::IS_CONNU_0,
            TDemandeurPeer::IS_CONNU_1,
        ),
        TDemandeurPeer::ANNULEE => array(
            TDemandeurPeer::ANNULEE_0,
            TDemandeurPeer::ANNULEE_1,
        ),
        TDemandeurPeer::STATUT_ENABLE_ACCOUNT => array(
            TDemandeurPeer::STATUT_ENABLE_ACCOUNT_0,
            TDemandeurPeer::STATUT_ENABLE_ACCOUNT_1,
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
        $toNames = TDemandeurPeer::getFieldNames($toType);
        $key = isset(TDemandeurPeer::$fieldKeys[$fromType][$name]) ? TDemandeurPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TDemandeurPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TDemandeurPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TDemandeurPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TDemandeurPeer::$enumValueSets;
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
        $valueSets = TDemandeurPeer::getValueSets();

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
        $values = TDemandeurPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TDemandeurPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TDemandeurPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TDemandeurPeer::ID_DEMANDEUR);
            $criteria->addSelectColumn(TDemandeurPeer::NOM);
            $criteria->addSelectColumn(TDemandeurPeer::PRENOM);
            $criteria->addSelectColumn(TDemandeurPeer::PRENOM_FR);
            $criteria->addSelectColumn(TDemandeurPeer::NOM_FR);
            $criteria->addSelectColumn(TDemandeurPeer::RAISON_SOCIALE);
            $criteria->addSelectColumn(TDemandeurPeer::RAISON_SOCIALE_AR);
            $criteria->addSelectColumn(TDemandeurPeer::TYPE_REQUERANT);
            $criteria->addSelectColumn(TDemandeurPeer::IDENTIFIANT_FISCAL);
            $criteria->addSelectColumn(TDemandeurPeer::ORGANISATION);
            $criteria->addSelectColumn(TDemandeurPeer::ORGANISATION_AR);
            $criteria->addSelectColumn(TDemandeurPeer::VILLE_REGISTRE_COMMERCE);
            $criteria->addSelectColumn(TDemandeurPeer::NUMERO_REGISTRE_COMMERCE);
            $criteria->addSelectColumn(TDemandeurPeer::ADRESSE);
            $criteria->addSelectColumn(TDemandeurPeer::COMPLEMENT_ADRESSE);
            $criteria->addSelectColumn(TDemandeurPeer::CODE_POSTAL);
            $criteria->addSelectColumn(TDemandeurPeer::VILLE);
            $criteria->addSelectColumn(TDemandeurPeer::PAYS);
            $criteria->addSelectColumn(TDemandeurPeer::EMAIL);
            $criteria->addSelectColumn(TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR);
            $criteria->addSelectColumn(TDemandeurPeer::TELEPHONE);
            $criteria->addSelectColumn(TDemandeurPeer::TELEPHONE_PORTABLE);
            $criteria->addSelectColumn(TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE);
            $criteria->addSelectColumn(TDemandeurPeer::FAX);
            $criteria->addSelectColumn(TDemandeurPeer::FAX_ENTREPRISE);
            $criteria->addSelectColumn(TDemandeurPeer::ICE);
            $criteria->addSelectColumn(TDemandeurPeer::NUMERO_CNSS);
            $criteria->addSelectColumn(TDemandeurPeer::FONCTION);
            $criteria->addSelectColumn(TDemandeurPeer::TELEPHONE_ENTREPRISE);
            $criteria->addSelectColumn(TDemandeurPeer::NUMERO_PATENTE);
            $criteria->addSelectColumn(TDemandeurPeer::EMAIL_ENTREPRISE);
            $criteria->addSelectColumn(TDemandeurPeer::FORM_JURIDIQUE);
            $criteria->addSelectColumn(TDemandeurPeer::ID_REGION);
            $criteria->addSelectColumn(TDemandeurPeer::VALIDE);
            $criteria->addSelectColumn(TDemandeurPeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(TDemandeurPeer::TYPE_ENTREPRISE);
            $criteria->addSelectColumn(TDemandeurPeer::MOTIF_REJET);
            $criteria->addSelectColumn(TDemandeurPeer::MOTIF_DESACTIVATION);
            $criteria->addSelectColumn(TDemandeurPeer::NUMERO_FOURNISSEUR);
            $criteria->addSelectColumn(TDemandeurPeer::DATE_CREATION);
            $criteria->addSelectColumn(TDemandeurPeer::IS_CONNU);
            $criteria->addSelectColumn(TDemandeurPeer::ID_ENTITE_DEMANDEUR);
            $criteria->addSelectColumn(TDemandeurPeer::ID_EXTERNE);
            $criteria->addSelectColumn(TDemandeurPeer::ID_ENTITE);
            $criteria->addSelectColumn(TDemandeurPeer::ANNULEE);
            $criteria->addSelectColumn(TDemandeurPeer::ID_REMPLACANT);
            $criteria->addSelectColumn(TDemandeurPeer::ID_ORGANISME);
            $criteria->addSelectColumn(TDemandeurPeer::ID_ENTITE_ORGANISME);
            $criteria->addSelectColumn(TDemandeurPeer::DATE_DERNIER_ACCES);
            $criteria->addSelectColumn(TDemandeurPeer::JETON_VALIDATION);
            $criteria->addSelectColumn(TDemandeurPeer::STATUT_ENABLE_ACCOUNT);
            $criteria->addSelectColumn(TDemandeurPeer::DATE_TRAITEMENT);
            $criteria->addSelectColumn(TDemandeurPeer::TOKEN_RECUP);
            $criteria->addSelectColumn(TDemandeurPeer::DATE_EXPIRATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.NOM');
            $criteria->addSelectColumn($alias . '.PRENOM');
            $criteria->addSelectColumn($alias . '.PRENOM_FR');
            $criteria->addSelectColumn($alias . '.NOM_FR');
            $criteria->addSelectColumn($alias . '.RAISON_SOCIALE');
            $criteria->addSelectColumn($alias . '.RAISON_SOCIALE_AR');
            $criteria->addSelectColumn($alias . '.TYPE_REQUERANT');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_FISCAL');
            $criteria->addSelectColumn($alias . '.ORGANISATION');
            $criteria->addSelectColumn($alias . '.ORGANISATION_AR');
            $criteria->addSelectColumn($alias . '.VILLE_REGISTRE_COMMERCE');
            $criteria->addSelectColumn($alias . '.NUMERO_REGISTRE_COMMERCE');
            $criteria->addSelectColumn($alias . '.ADRESSE');
            $criteria->addSelectColumn($alias . '.COMPLEMENT_ADRESSE');
            $criteria->addSelectColumn($alias . '.CODE_POSTAL');
            $criteria->addSelectColumn($alias . '.VILLE');
            $criteria->addSelectColumn($alias . '.PAYS');
            $criteria->addSelectColumn($alias . '.EMAIL');
            $criteria->addSelectColumn($alias . '.MOT_DE_PASSE_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.TELEPHONE');
            $criteria->addSelectColumn($alias . '.TELEPHONE_PORTABLE');
            $criteria->addSelectColumn($alias . '.NUMERO_TAXE_PROFESSIONNELLE');
            $criteria->addSelectColumn($alias . '.FAX');
            $criteria->addSelectColumn($alias . '.FAX_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.ICE');
            $criteria->addSelectColumn($alias . '.NUMERO_CNSS');
            $criteria->addSelectColumn($alias . '.FONCTION');
            $criteria->addSelectColumn($alias . '.TELEPHONE_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.NUMERO_PATENTE');
            $criteria->addSelectColumn($alias . '.EMAIL_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.FORM_JURIDIQUE');
            $criteria->addSelectColumn($alias . '.ID_REGION');
            $criteria->addSelectColumn($alias . '.VALIDE');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_NATIONAL');
            $criteria->addSelectColumn($alias . '.TYPE_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.MOTIF_REJET');
            $criteria->addSelectColumn($alias . '.MOTIF_DESACTIVATION');
            $criteria->addSelectColumn($alias . '.NUMERO_FOURNISSEUR');
            $criteria->addSelectColumn($alias . '.DATE_CREATION');
            $criteria->addSelectColumn($alias . '.IS_CONNU');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.ID_EXTERNE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ANNULEE');
            $criteria->addSelectColumn($alias . '.ID_REMPLACANT');
            $criteria->addSelectColumn($alias . '.ID_ORGANISME');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_ORGANISME');
            $criteria->addSelectColumn($alias . '.DATE_DERNIER_ACCES');
            $criteria->addSelectColumn($alias . '.JETON_VALIDATION');
            $criteria->addSelectColumn($alias . '.STATUT_ENABLE_ACCOUNT');
            $criteria->addSelectColumn($alias . '.DATE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.TOKEN_RECUP');
            $criteria->addSelectColumn($alias . '.DATE_EXPIRATION');
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
        $criteria->setPrimaryTableName(TDemandeurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TDemandeurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TDemandeurPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDemandeur
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TDemandeurPeer::doSelect($critcopy, $con);
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
        return TDemandeurPeer::populateObjects(TDemandeurPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TDemandeurPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TDemandeurPeer::DATABASE_NAME);

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
     * @param      TDemandeur $obj A TDemandeur object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDemandeur();
            } // if key === null
            TDemandeurPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TDemandeur object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TDemandeur) {
                $key = (string) $value->getIdDemandeur();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TDemandeur object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TDemandeurPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TDemandeur Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TDemandeurPeer::$instances[$key])) {
                return TDemandeurPeer::$instances[$key];
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
        foreach (TDemandeurPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TDemandeurPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_demandeur
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
        $cls = TDemandeurPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TDemandeurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TDemandeurPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TDemandeurPeer::addInstanceToPool($obj, $key);
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
     * @return array (TDemandeur object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TDemandeurPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TDemandeurPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TDemandeurPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TDemandeurPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TDemandeurPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TDemandeurPeer::DATABASE_NAME)->getTable(TDemandeurPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTDemandeurPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTDemandeurPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TDemandeurTableMap());
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
        return TDemandeurPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TDemandeur or Criteria object.
     *
     * @param      mixed $values Criteria or TDemandeur object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TDemandeur object
        }

        if ($criteria->containsKey(TDemandeurPeer::ID_DEMANDEUR) && $criteria->keyContainsValue(TDemandeurPeer::ID_DEMANDEUR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TDemandeurPeer::ID_DEMANDEUR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TDemandeurPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TDemandeur or Criteria object.
     *
     * @param      mixed $values Criteria or TDemandeur object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TDemandeurPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TDemandeurPeer::ID_DEMANDEUR);
            $value = $criteria->remove(TDemandeurPeer::ID_DEMANDEUR);
            if ($value) {
                $selectCriteria->add(TDemandeurPeer::ID_DEMANDEUR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TDemandeurPeer::TABLE_NAME);
            }

        } else { // $values is TDemandeur object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TDemandeurPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_demandeur table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TDemandeurPeer::TABLE_NAME, $con, TDemandeurPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TDemandeurPeer::clearInstancePool();
            TDemandeurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TDemandeur or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TDemandeur object or primary key or array of primary keys
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
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TDemandeurPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TDemandeur) { // it's a model object
            // invalidate the cache for this single object
            TDemandeurPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TDemandeurPeer::DATABASE_NAME);
            $criteria->add(TDemandeurPeer::ID_DEMANDEUR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TDemandeurPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TDemandeurPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            TDemandeurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TDemandeur object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TDemandeur $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TDemandeurPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TDemandeurPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TDemandeurPeer::DATABASE_NAME, TDemandeurPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TDemandeur
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TDemandeurPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TDemandeurPeer::DATABASE_NAME);
        $criteria->add(TDemandeurPeer::ID_DEMANDEUR, $pk);

        $v = TDemandeurPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TDemandeur[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TDemandeurPeer::DATABASE_NAME);
            $criteria->add(TDemandeurPeer::ID_DEMANDEUR, $pks, Criteria::IN);
            $objs = TDemandeurPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTDemandeurPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTDemandeurPeer::buildTableMap();

