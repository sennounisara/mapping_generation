<?php


/**
 * Base static class for performing query and update operations on the 'entite' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseEntitePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'entite';

    /** the related Propel class for this table */
    const OM_CLASS = 'Entite';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EntiteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 46;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 46;

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'entite.ID_ENTITE';

    /** the column name for the DENOMINATION_FR field */
    const DENOMINATION_FR = 'entite.DENOMINATION_FR';

    /** the column name for the DENOMINATION_AR field */
    const DENOMINATION_AR = 'entite.DENOMINATION_AR';

    /** the column name for the ETAT field */
    const ETAT = 'entite.ETAT';

    /** the column name for the TYPE_ENTITE field */
    const TYPE_ENTITE = 'entite.TYPE_ENTITE';

    /** the column name for the mail field */
    const MAIL = 'entite.mail';

    /** the column name for the telephone field */
    const TELEPHONE = 'entite.telephone';

    /** the column name for the fax field */
    const FAX = 'entite.fax';

    /** the column name for the adresse field */
    const ADRESSE = 'entite.adresse';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'entite.adresse2';

    /** the column name for the cp field */
    const CP = 'entite.cp';

    /** the column name for the ville field */
    const VILLE = 'entite.ville';

    /** the column name for the path_fr field */
    const PATH_FR = 'entite.path_fr';

    /** the column name for the path_ar field */
    const PATH_AR = 'entite.path_ar';

    /** the column name for the ID_REGION field */
    const ID_REGION = 'entite.ID_REGION';

    /** the column name for the ID_PROVINCE field */
    const ID_PROVINCE = 'entite.ID_PROVINCE';

    /** the column name for the ID_COMMUNE field */
    const ID_COMMUNE = 'entite.ID_COMMUNE';

    /** the column name for the COMMUNE field */
    const COMMUNE = 'entite.COMMUNE';

    /** the column name for the ID_PAYS field */
    const ID_PAYS = 'entite.ID_PAYS';

    /** the column name for the SIGLE_FR field */
    const SIGLE_FR = 'entite.SIGLE_FR';

    /** the column name for the SIGLE_AR field */
    const SIGLE_AR = 'entite.SIGLE_AR';

    /** the column name for the PATH_SIGLE_FR field */
    const PATH_SIGLE_FR = 'entite.PATH_SIGLE_FR';

    /** the column name for the PATH_SIGLE_AR field */
    const PATH_SIGLE_AR = 'entite.PATH_SIGLE_AR';

    /** the column name for the ENTITE_VISIBLE_REQUERANT field */
    const ENTITE_VISIBLE_REQUERANT = 'entite.ENTITE_VISIBLE_REQUERANT';

    /** the column name for the ID_ENTITE_RECEPTION field */
    const ID_ENTITE_RECEPTION = 'entite.ID_ENTITE_RECEPTION';

    /** the column name for the NIVEAU field */
    const NIVEAU = 'entite.NIVEAU';

    /** the column name for the CODE_MIN field */
    const CODE_MIN = 'entite.CODE_MIN';

    /** the column name for the IDS_ENTITE_EN_COPIE field */
    const IDS_ENTITE_EN_COPIE = 'entite.IDS_ENTITE_EN_COPIE';

    /** the column name for the NOM_DOMAINE field */
    const NOM_DOMAINE = 'entite.NOM_DOMAINE';

    /** the column name for the ACRONYME field */
    const ACRONYME = 'entite.ACRONYME';

    /** the column name for the SUPPRIME field */
    const SUPPRIME = 'entite.SUPPRIME';

    /** the column name for the ENTITE_TRAITEMENT field */
    const ENTITE_TRAITEMENT = 'entite.ENTITE_TRAITEMENT';

    /** the column name for the ENTITES_AUTORISEES field */
    const ENTITES_AUTORISEES = 'entite.ENTITES_AUTORISEES';

    /** the column name for the CALCUL_ENTITES_AUTORISEES field */
    const CALCUL_ENTITES_AUTORISEES = 'entite.CALCUL_ENTITES_AUTORISEES';

    /** the column name for the ID_ENTITE_AFFECTATION_AUTOMATIQUE field */
    const ID_ENTITE_AFFECTATION_AUTOMATIQUE = 'entite.ID_ENTITE_AFFECTATION_AUTOMATIQUE';

    /** the column name for the ID_ENTITE_RELANCE field */
    const ID_ENTITE_RELANCE = 'entite.ID_ENTITE_RELANCE';

    /** the column name for the CODE_ENTITE field */
    const CODE_ENTITE = 'entite.CODE_ENTITE';

    /** the column name for the TELEPHONES_CENTRE_APPEL field */
    const TELEPHONES_CENTRE_APPEL = 'entite.TELEPHONES_CENTRE_APPEL';

    /** the column name for the HORAIRE_CENTRE_APPEL_AR field */
    const HORAIRE_CENTRE_APPEL_AR = 'entite.HORAIRE_CENTRE_APPEL_AR';

    /** the column name for the HORAIRE_CENTRE_APPEL_FR field */
    const HORAIRE_CENTRE_APPEL_FR = 'entite.HORAIRE_CENTRE_APPEL_FR';

    /** the column name for the DATE_MODIFICATION field */
    const DATE_MODIFICATION = 'entite.DATE_MODIFICATION';

    /** the column name for the ID_ENTITE_RECOURS field */
    const ID_ENTITE_RECOURS = 'entite.ID_ENTITE_RECOURS';

    /** the column name for the IDENTIFIANT_ENTITE_RECEPTION_WS field */
    const IDENTIFIANT_ENTITE_RECEPTION_WS = 'entite.IDENTIFIANT_ENTITE_RECEPTION_WS';

    /** the column name for the ID_SOCLE field */
    const ID_SOCLE = 'entite.ID_SOCLE';

    /** the column name for the ID_EXTERNE field */
    const ID_EXTERNE = 'entite.ID_EXTERNE';

    /** the column name for the INCREMENT field */
    const INCREMENT = 'entite.INCREMENT';

    /** The enumerated values for the ETAT field */
    const ETAT_0 = '0';
    const ETAT_1 = '1';

    /** The enumerated values for the TYPE_ENTITE field */
    const TYPE_ENTITE_0 = '0';
    const TYPE_ENTITE_1 = '1';
    const TYPE_ENTITE_2 = '2';

    /** The enumerated values for the ENTITE_VISIBLE_REQUERANT field */
    const ENTITE_VISIBLE_REQUERANT_0 = '0';
    const ENTITE_VISIBLE_REQUERANT_1 = '1';

    /** The enumerated values for the SUPPRIME field */
    const SUPPRIME_0 = '0';
    const SUPPRIME_1 = '1';

    /** The enumerated values for the ENTITE_TRAITEMENT field */
    const ENTITE_TRAITEMENT_0 = '0';
    const ENTITE_TRAITEMENT_1 = '1';

    /** The enumerated values for the INCREMENT field */
    const INCREMENT_0 = '0';
    const INCREMENT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Entite objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Entite[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EntitePeer::$fieldNames[EntitePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntite', 'DenominationFr', 'DenominationAr', 'Etat', 'TypeEntite', 'Mail', 'Telephone', 'Fax', 'Adresse', 'Adresse2', 'Cp', 'Ville', 'PathFr', 'PathAr', 'IdRegion', 'IdProvince', 'IdCommune', 'Commune', 'IdPays', 'SigleFr', 'SigleAr', 'PathSigleFr', 'PathSigleAr', 'EntiteVisibleRequerant', 'IdEntiteReception', 'Niveau', 'CodeMin', 'IdsEntiteEnCopie', 'NomDomaine', 'Acronyme', 'Supprime', 'EntiteTraitement', 'EntitesAutorisees', 'CalculEntitesAutorisees', 'IdEntiteAffectationAutomatique', 'IdEntiteRelance', 'CodeEntite', 'TelephonesCentreAppel', 'HoraireCentreAppelAr', 'HoraireCentreAppelFr', 'DateModification', 'IdEntiteRecours', 'IdentifiantEntiteReceptionWs', 'IdSocle', 'IdExterne', 'Increment', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntite', 'denominationFr', 'denominationAr', 'etat', 'typeEntite', 'mail', 'telephone', 'fax', 'adresse', 'adresse2', 'cp', 'ville', 'pathFr', 'pathAr', 'idRegion', 'idProvince', 'idCommune', 'commune', 'idPays', 'sigleFr', 'sigleAr', 'pathSigleFr', 'pathSigleAr', 'entiteVisibleRequerant', 'idEntiteReception', 'niveau', 'codeMin', 'idsEntiteEnCopie', 'nomDomaine', 'acronyme', 'supprime', 'entiteTraitement', 'entitesAutorisees', 'calculEntitesAutorisees', 'idEntiteAffectationAutomatique', 'idEntiteRelance', 'codeEntite', 'telephonesCentreAppel', 'horaireCentreAppelAr', 'horaireCentreAppelFr', 'dateModification', 'idEntiteRecours', 'identifiantEntiteReceptionWs', 'idSocle', 'idExterne', 'increment', ),
        BasePeer::TYPE_COLNAME => array (EntitePeer::ID_ENTITE, EntitePeer::DENOMINATION_FR, EntitePeer::DENOMINATION_AR, EntitePeer::ETAT, EntitePeer::TYPE_ENTITE, EntitePeer::MAIL, EntitePeer::TELEPHONE, EntitePeer::FAX, EntitePeer::ADRESSE, EntitePeer::ADRESSE2, EntitePeer::CP, EntitePeer::VILLE, EntitePeer::PATH_FR, EntitePeer::PATH_AR, EntitePeer::ID_REGION, EntitePeer::ID_PROVINCE, EntitePeer::ID_COMMUNE, EntitePeer::COMMUNE, EntitePeer::ID_PAYS, EntitePeer::SIGLE_FR, EntitePeer::SIGLE_AR, EntitePeer::PATH_SIGLE_FR, EntitePeer::PATH_SIGLE_AR, EntitePeer::ENTITE_VISIBLE_REQUERANT, EntitePeer::ID_ENTITE_RECEPTION, EntitePeer::NIVEAU, EntitePeer::CODE_MIN, EntitePeer::IDS_ENTITE_EN_COPIE, EntitePeer::NOM_DOMAINE, EntitePeer::ACRONYME, EntitePeer::SUPPRIME, EntitePeer::ENTITE_TRAITEMENT, EntitePeer::ENTITES_AUTORISEES, EntitePeer::CALCUL_ENTITES_AUTORISEES, EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE, EntitePeer::ID_ENTITE_RELANCE, EntitePeer::CODE_ENTITE, EntitePeer::TELEPHONES_CENTRE_APPEL, EntitePeer::HORAIRE_CENTRE_APPEL_AR, EntitePeer::HORAIRE_CENTRE_APPEL_FR, EntitePeer::DATE_MODIFICATION, EntitePeer::ID_ENTITE_RECOURS, EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS, EntitePeer::ID_SOCLE, EntitePeer::ID_EXTERNE, EntitePeer::INCREMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTITE', 'DENOMINATION_FR', 'DENOMINATION_AR', 'ETAT', 'TYPE_ENTITE', 'MAIL', 'TELEPHONE', 'FAX', 'ADRESSE', 'ADRESSE2', 'CP', 'VILLE', 'PATH_FR', 'PATH_AR', 'ID_REGION', 'ID_PROVINCE', 'ID_COMMUNE', 'COMMUNE', 'ID_PAYS', 'SIGLE_FR', 'SIGLE_AR', 'PATH_SIGLE_FR', 'PATH_SIGLE_AR', 'ENTITE_VISIBLE_REQUERANT', 'ID_ENTITE_RECEPTION', 'NIVEAU', 'CODE_MIN', 'IDS_ENTITE_EN_COPIE', 'NOM_DOMAINE', 'ACRONYME', 'SUPPRIME', 'ENTITE_TRAITEMENT', 'ENTITES_AUTORISEES', 'CALCUL_ENTITES_AUTORISEES', 'ID_ENTITE_AFFECTATION_AUTOMATIQUE', 'ID_ENTITE_RELANCE', 'CODE_ENTITE', 'TELEPHONES_CENTRE_APPEL', 'HORAIRE_CENTRE_APPEL_AR', 'HORAIRE_CENTRE_APPEL_FR', 'DATE_MODIFICATION', 'ID_ENTITE_RECOURS', 'IDENTIFIANT_ENTITE_RECEPTION_WS', 'ID_SOCLE', 'ID_EXTERNE', 'INCREMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ENTITE', 'DENOMINATION_FR', 'DENOMINATION_AR', 'ETAT', 'TYPE_ENTITE', 'mail', 'telephone', 'fax', 'adresse', 'adresse2', 'cp', 'ville', 'path_fr', 'path_ar', 'ID_REGION', 'ID_PROVINCE', 'ID_COMMUNE', 'COMMUNE', 'ID_PAYS', 'SIGLE_FR', 'SIGLE_AR', 'PATH_SIGLE_FR', 'PATH_SIGLE_AR', 'ENTITE_VISIBLE_REQUERANT', 'ID_ENTITE_RECEPTION', 'NIVEAU', 'CODE_MIN', 'IDS_ENTITE_EN_COPIE', 'NOM_DOMAINE', 'ACRONYME', 'SUPPRIME', 'ENTITE_TRAITEMENT', 'ENTITES_AUTORISEES', 'CALCUL_ENTITES_AUTORISEES', 'ID_ENTITE_AFFECTATION_AUTOMATIQUE', 'ID_ENTITE_RELANCE', 'CODE_ENTITE', 'TELEPHONES_CENTRE_APPEL', 'HORAIRE_CENTRE_APPEL_AR', 'HORAIRE_CENTRE_APPEL_FR', 'DATE_MODIFICATION', 'ID_ENTITE_RECOURS', 'IDENTIFIANT_ENTITE_RECEPTION_WS', 'ID_SOCLE', 'ID_EXTERNE', 'INCREMENT', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EntitePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntite' => 0, 'DenominationFr' => 1, 'DenominationAr' => 2, 'Etat' => 3, 'TypeEntite' => 4, 'Mail' => 5, 'Telephone' => 6, 'Fax' => 7, 'Adresse' => 8, 'Adresse2' => 9, 'Cp' => 10, 'Ville' => 11, 'PathFr' => 12, 'PathAr' => 13, 'IdRegion' => 14, 'IdProvince' => 15, 'IdCommune' => 16, 'Commune' => 17, 'IdPays' => 18, 'SigleFr' => 19, 'SigleAr' => 20, 'PathSigleFr' => 21, 'PathSigleAr' => 22, 'EntiteVisibleRequerant' => 23, 'IdEntiteReception' => 24, 'Niveau' => 25, 'CodeMin' => 26, 'IdsEntiteEnCopie' => 27, 'NomDomaine' => 28, 'Acronyme' => 29, 'Supprime' => 30, 'EntiteTraitement' => 31, 'EntitesAutorisees' => 32, 'CalculEntitesAutorisees' => 33, 'IdEntiteAffectationAutomatique' => 34, 'IdEntiteRelance' => 35, 'CodeEntite' => 36, 'TelephonesCentreAppel' => 37, 'HoraireCentreAppelAr' => 38, 'HoraireCentreAppelFr' => 39, 'DateModification' => 40, 'IdEntiteRecours' => 41, 'IdentifiantEntiteReceptionWs' => 42, 'IdSocle' => 43, 'IdExterne' => 44, 'Increment' => 45, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntite' => 0, 'denominationFr' => 1, 'denominationAr' => 2, 'etat' => 3, 'typeEntite' => 4, 'mail' => 5, 'telephone' => 6, 'fax' => 7, 'adresse' => 8, 'adresse2' => 9, 'cp' => 10, 'ville' => 11, 'pathFr' => 12, 'pathAr' => 13, 'idRegion' => 14, 'idProvince' => 15, 'idCommune' => 16, 'commune' => 17, 'idPays' => 18, 'sigleFr' => 19, 'sigleAr' => 20, 'pathSigleFr' => 21, 'pathSigleAr' => 22, 'entiteVisibleRequerant' => 23, 'idEntiteReception' => 24, 'niveau' => 25, 'codeMin' => 26, 'idsEntiteEnCopie' => 27, 'nomDomaine' => 28, 'acronyme' => 29, 'supprime' => 30, 'entiteTraitement' => 31, 'entitesAutorisees' => 32, 'calculEntitesAutorisees' => 33, 'idEntiteAffectationAutomatique' => 34, 'idEntiteRelance' => 35, 'codeEntite' => 36, 'telephonesCentreAppel' => 37, 'horaireCentreAppelAr' => 38, 'horaireCentreAppelFr' => 39, 'dateModification' => 40, 'idEntiteRecours' => 41, 'identifiantEntiteReceptionWs' => 42, 'idSocle' => 43, 'idExterne' => 44, 'increment' => 45, ),
        BasePeer::TYPE_COLNAME => array (EntitePeer::ID_ENTITE => 0, EntitePeer::DENOMINATION_FR => 1, EntitePeer::DENOMINATION_AR => 2, EntitePeer::ETAT => 3, EntitePeer::TYPE_ENTITE => 4, EntitePeer::MAIL => 5, EntitePeer::TELEPHONE => 6, EntitePeer::FAX => 7, EntitePeer::ADRESSE => 8, EntitePeer::ADRESSE2 => 9, EntitePeer::CP => 10, EntitePeer::VILLE => 11, EntitePeer::PATH_FR => 12, EntitePeer::PATH_AR => 13, EntitePeer::ID_REGION => 14, EntitePeer::ID_PROVINCE => 15, EntitePeer::ID_COMMUNE => 16, EntitePeer::COMMUNE => 17, EntitePeer::ID_PAYS => 18, EntitePeer::SIGLE_FR => 19, EntitePeer::SIGLE_AR => 20, EntitePeer::PATH_SIGLE_FR => 21, EntitePeer::PATH_SIGLE_AR => 22, EntitePeer::ENTITE_VISIBLE_REQUERANT => 23, EntitePeer::ID_ENTITE_RECEPTION => 24, EntitePeer::NIVEAU => 25, EntitePeer::CODE_MIN => 26, EntitePeer::IDS_ENTITE_EN_COPIE => 27, EntitePeer::NOM_DOMAINE => 28, EntitePeer::ACRONYME => 29, EntitePeer::SUPPRIME => 30, EntitePeer::ENTITE_TRAITEMENT => 31, EntitePeer::ENTITES_AUTORISEES => 32, EntitePeer::CALCUL_ENTITES_AUTORISEES => 33, EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE => 34, EntitePeer::ID_ENTITE_RELANCE => 35, EntitePeer::CODE_ENTITE => 36, EntitePeer::TELEPHONES_CENTRE_APPEL => 37, EntitePeer::HORAIRE_CENTRE_APPEL_AR => 38, EntitePeer::HORAIRE_CENTRE_APPEL_FR => 39, EntitePeer::DATE_MODIFICATION => 40, EntitePeer::ID_ENTITE_RECOURS => 41, EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS => 42, EntitePeer::ID_SOCLE => 43, EntitePeer::ID_EXTERNE => 44, EntitePeer::INCREMENT => 45, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTITE' => 0, 'DENOMINATION_FR' => 1, 'DENOMINATION_AR' => 2, 'ETAT' => 3, 'TYPE_ENTITE' => 4, 'MAIL' => 5, 'TELEPHONE' => 6, 'FAX' => 7, 'ADRESSE' => 8, 'ADRESSE2' => 9, 'CP' => 10, 'VILLE' => 11, 'PATH_FR' => 12, 'PATH_AR' => 13, 'ID_REGION' => 14, 'ID_PROVINCE' => 15, 'ID_COMMUNE' => 16, 'COMMUNE' => 17, 'ID_PAYS' => 18, 'SIGLE_FR' => 19, 'SIGLE_AR' => 20, 'PATH_SIGLE_FR' => 21, 'PATH_SIGLE_AR' => 22, 'ENTITE_VISIBLE_REQUERANT' => 23, 'ID_ENTITE_RECEPTION' => 24, 'NIVEAU' => 25, 'CODE_MIN' => 26, 'IDS_ENTITE_EN_COPIE' => 27, 'NOM_DOMAINE' => 28, 'ACRONYME' => 29, 'SUPPRIME' => 30, 'ENTITE_TRAITEMENT' => 31, 'ENTITES_AUTORISEES' => 32, 'CALCUL_ENTITES_AUTORISEES' => 33, 'ID_ENTITE_AFFECTATION_AUTOMATIQUE' => 34, 'ID_ENTITE_RELANCE' => 35, 'CODE_ENTITE' => 36, 'TELEPHONES_CENTRE_APPEL' => 37, 'HORAIRE_CENTRE_APPEL_AR' => 38, 'HORAIRE_CENTRE_APPEL_FR' => 39, 'DATE_MODIFICATION' => 40, 'ID_ENTITE_RECOURS' => 41, 'IDENTIFIANT_ENTITE_RECEPTION_WS' => 42, 'ID_SOCLE' => 43, 'ID_EXTERNE' => 44, 'INCREMENT' => 45, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ENTITE' => 0, 'DENOMINATION_FR' => 1, 'DENOMINATION_AR' => 2, 'ETAT' => 3, 'TYPE_ENTITE' => 4, 'mail' => 5, 'telephone' => 6, 'fax' => 7, 'adresse' => 8, 'adresse2' => 9, 'cp' => 10, 'ville' => 11, 'path_fr' => 12, 'path_ar' => 13, 'ID_REGION' => 14, 'ID_PROVINCE' => 15, 'ID_COMMUNE' => 16, 'COMMUNE' => 17, 'ID_PAYS' => 18, 'SIGLE_FR' => 19, 'SIGLE_AR' => 20, 'PATH_SIGLE_FR' => 21, 'PATH_SIGLE_AR' => 22, 'ENTITE_VISIBLE_REQUERANT' => 23, 'ID_ENTITE_RECEPTION' => 24, 'NIVEAU' => 25, 'CODE_MIN' => 26, 'IDS_ENTITE_EN_COPIE' => 27, 'NOM_DOMAINE' => 28, 'ACRONYME' => 29, 'SUPPRIME' => 30, 'ENTITE_TRAITEMENT' => 31, 'ENTITES_AUTORISEES' => 32, 'CALCUL_ENTITES_AUTORISEES' => 33, 'ID_ENTITE_AFFECTATION_AUTOMATIQUE' => 34, 'ID_ENTITE_RELANCE' => 35, 'CODE_ENTITE' => 36, 'TELEPHONES_CENTRE_APPEL' => 37, 'HORAIRE_CENTRE_APPEL_AR' => 38, 'HORAIRE_CENTRE_APPEL_FR' => 39, 'DATE_MODIFICATION' => 40, 'ID_ENTITE_RECOURS' => 41, 'IDENTIFIANT_ENTITE_RECEPTION_WS' => 42, 'ID_SOCLE' => 43, 'ID_EXTERNE' => 44, 'INCREMENT' => 45, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        EntitePeer::ETAT => array(
            EntitePeer::ETAT_0,
            EntitePeer::ETAT_1,
        ),
        EntitePeer::TYPE_ENTITE => array(
            EntitePeer::TYPE_ENTITE_0,
            EntitePeer::TYPE_ENTITE_1,
            EntitePeer::TYPE_ENTITE_2,
        ),
        EntitePeer::ENTITE_VISIBLE_REQUERANT => array(
            EntitePeer::ENTITE_VISIBLE_REQUERANT_0,
            EntitePeer::ENTITE_VISIBLE_REQUERANT_1,
        ),
        EntitePeer::SUPPRIME => array(
            EntitePeer::SUPPRIME_0,
            EntitePeer::SUPPRIME_1,
        ),
        EntitePeer::ENTITE_TRAITEMENT => array(
            EntitePeer::ENTITE_TRAITEMENT_0,
            EntitePeer::ENTITE_TRAITEMENT_1,
        ),
        EntitePeer::INCREMENT => array(
            EntitePeer::INCREMENT_0,
            EntitePeer::INCREMENT_1,
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
        $toNames = EntitePeer::getFieldNames($toType);
        $key = isset(EntitePeer::$fieldKeys[$fromType][$name]) ? EntitePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EntitePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EntitePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EntitePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return EntitePeer::$enumValueSets;
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
        $valueSets = EntitePeer::getValueSets();

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
        $values = EntitePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. EntitePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EntitePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EntitePeer::ID_ENTITE);
            $criteria->addSelectColumn(EntitePeer::DENOMINATION_FR);
            $criteria->addSelectColumn(EntitePeer::DENOMINATION_AR);
            $criteria->addSelectColumn(EntitePeer::ETAT);
            $criteria->addSelectColumn(EntitePeer::TYPE_ENTITE);
            $criteria->addSelectColumn(EntitePeer::MAIL);
            $criteria->addSelectColumn(EntitePeer::TELEPHONE);
            $criteria->addSelectColumn(EntitePeer::FAX);
            $criteria->addSelectColumn(EntitePeer::ADRESSE);
            $criteria->addSelectColumn(EntitePeer::ADRESSE2);
            $criteria->addSelectColumn(EntitePeer::CP);
            $criteria->addSelectColumn(EntitePeer::VILLE);
            $criteria->addSelectColumn(EntitePeer::PATH_FR);
            $criteria->addSelectColumn(EntitePeer::PATH_AR);
            $criteria->addSelectColumn(EntitePeer::ID_REGION);
            $criteria->addSelectColumn(EntitePeer::ID_PROVINCE);
            $criteria->addSelectColumn(EntitePeer::ID_COMMUNE);
            $criteria->addSelectColumn(EntitePeer::COMMUNE);
            $criteria->addSelectColumn(EntitePeer::ID_PAYS);
            $criteria->addSelectColumn(EntitePeer::SIGLE_FR);
            $criteria->addSelectColumn(EntitePeer::SIGLE_AR);
            $criteria->addSelectColumn(EntitePeer::PATH_SIGLE_FR);
            $criteria->addSelectColumn(EntitePeer::PATH_SIGLE_AR);
            $criteria->addSelectColumn(EntitePeer::ENTITE_VISIBLE_REQUERANT);
            $criteria->addSelectColumn(EntitePeer::ID_ENTITE_RECEPTION);
            $criteria->addSelectColumn(EntitePeer::NIVEAU);
            $criteria->addSelectColumn(EntitePeer::CODE_MIN);
            $criteria->addSelectColumn(EntitePeer::IDS_ENTITE_EN_COPIE);
            $criteria->addSelectColumn(EntitePeer::NOM_DOMAINE);
            $criteria->addSelectColumn(EntitePeer::ACRONYME);
            $criteria->addSelectColumn(EntitePeer::SUPPRIME);
            $criteria->addSelectColumn(EntitePeer::ENTITE_TRAITEMENT);
            $criteria->addSelectColumn(EntitePeer::ENTITES_AUTORISEES);
            $criteria->addSelectColumn(EntitePeer::CALCUL_ENTITES_AUTORISEES);
            $criteria->addSelectColumn(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE);
            $criteria->addSelectColumn(EntitePeer::ID_ENTITE_RELANCE);
            $criteria->addSelectColumn(EntitePeer::CODE_ENTITE);
            $criteria->addSelectColumn(EntitePeer::TELEPHONES_CENTRE_APPEL);
            $criteria->addSelectColumn(EntitePeer::HORAIRE_CENTRE_APPEL_AR);
            $criteria->addSelectColumn(EntitePeer::HORAIRE_CENTRE_APPEL_FR);
            $criteria->addSelectColumn(EntitePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(EntitePeer::ID_ENTITE_RECOURS);
            $criteria->addSelectColumn(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS);
            $criteria->addSelectColumn(EntitePeer::ID_SOCLE);
            $criteria->addSelectColumn(EntitePeer::ID_EXTERNE);
            $criteria->addSelectColumn(EntitePeer::INCREMENT);
        } else {
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.DENOMINATION_FR');
            $criteria->addSelectColumn($alias . '.DENOMINATION_AR');
            $criteria->addSelectColumn($alias . '.ETAT');
            $criteria->addSelectColumn($alias . '.TYPE_ENTITE');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.path_fr');
            $criteria->addSelectColumn($alias . '.path_ar');
            $criteria->addSelectColumn($alias . '.ID_REGION');
            $criteria->addSelectColumn($alias . '.ID_PROVINCE');
            $criteria->addSelectColumn($alias . '.ID_COMMUNE');
            $criteria->addSelectColumn($alias . '.COMMUNE');
            $criteria->addSelectColumn($alias . '.ID_PAYS');
            $criteria->addSelectColumn($alias . '.SIGLE_FR');
            $criteria->addSelectColumn($alias . '.SIGLE_AR');
            $criteria->addSelectColumn($alias . '.PATH_SIGLE_FR');
            $criteria->addSelectColumn($alias . '.PATH_SIGLE_AR');
            $criteria->addSelectColumn($alias . '.ENTITE_VISIBLE_REQUERANT');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RECEPTION');
            $criteria->addSelectColumn($alias . '.NIVEAU');
            $criteria->addSelectColumn($alias . '.CODE_MIN');
            $criteria->addSelectColumn($alias . '.IDS_ENTITE_EN_COPIE');
            $criteria->addSelectColumn($alias . '.NOM_DOMAINE');
            $criteria->addSelectColumn($alias . '.ACRONYME');
            $criteria->addSelectColumn($alias . '.SUPPRIME');
            $criteria->addSelectColumn($alias . '.ENTITE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.ENTITES_AUTORISEES');
            $criteria->addSelectColumn($alias . '.CALCUL_ENTITES_AUTORISEES');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_AFFECTATION_AUTOMATIQUE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RELANCE');
            $criteria->addSelectColumn($alias . '.CODE_ENTITE');
            $criteria->addSelectColumn($alias . '.TELEPHONES_CENTRE_APPEL');
            $criteria->addSelectColumn($alias . '.HORAIRE_CENTRE_APPEL_AR');
            $criteria->addSelectColumn($alias . '.HORAIRE_CENTRE_APPEL_FR');
            $criteria->addSelectColumn($alias . '.DATE_MODIFICATION');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RECOURS');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_ENTITE_RECEPTION_WS');
            $criteria->addSelectColumn($alias . '.ID_SOCLE');
            $criteria->addSelectColumn($alias . '.ID_EXTERNE');
            $criteria->addSelectColumn($alias . '.INCREMENT');
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
        $criteria->setPrimaryTableName(EntitePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EntitePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EntitePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Entite
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EntitePeer::doSelect($critcopy, $con);
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
        return EntitePeer::populateObjects(EntitePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EntitePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EntitePeer::DATABASE_NAME);

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
     * @param      Entite $obj A Entite object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEntite();
            } // if key === null
            EntitePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Entite object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Entite) {
                $key = (string) $value->getIdEntite();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Entite object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EntitePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Entite Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EntitePeer::$instances[$key])) {
                return EntitePeer::$instances[$key];
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
        foreach (EntitePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EntitePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to entite
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
        $cls = EntitePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EntitePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EntitePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EntitePeer::addInstanceToPool($obj, $key);
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
     * @return array (Entite object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EntitePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EntitePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EntitePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EntitePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EntitePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EntitePeer::DATABASE_NAME)->getTable(EntitePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEntitePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEntitePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new EntiteTableMap());
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
        return EntitePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Entite or Criteria object.
     *
     * @param      mixed $values Criteria or Entite object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Entite object
        }

        if ($criteria->containsKey(EntitePeer::ID_ENTITE) && $criteria->keyContainsValue(EntitePeer::ID_ENTITE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EntitePeer::ID_ENTITE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EntitePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Entite or Criteria object.
     *
     * @param      mixed $values Criteria or Entite object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EntitePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EntitePeer::ID_ENTITE);
            $value = $criteria->remove(EntitePeer::ID_ENTITE);
            if ($value) {
                $selectCriteria->add(EntitePeer::ID_ENTITE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EntitePeer::TABLE_NAME);
            }

        } else { // $values is Entite object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EntitePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the entite table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EntitePeer::TABLE_NAME, $con, EntitePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EntitePeer::clearInstancePool();
            EntitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Entite or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Entite object or primary key or array of primary keys
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
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EntitePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Entite) { // it's a model object
            // invalidate the cache for this single object
            EntitePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EntitePeer::DATABASE_NAME);
            $criteria->add(EntitePeer::ID_ENTITE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EntitePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EntitePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            EntitePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Entite object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Entite $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EntitePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EntitePeer::TABLE_NAME);

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

        return BasePeer::doValidate(EntitePeer::DATABASE_NAME, EntitePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Entite
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EntitePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EntitePeer::DATABASE_NAME);
        $criteria->add(EntitePeer::ID_ENTITE, $pk);

        $v = EntitePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Entite[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EntitePeer::DATABASE_NAME);
            $criteria->add(EntitePeer::ID_ENTITE, $pks, Criteria::IN);
            $objs = EntitePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEntitePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEntitePeer::buildTableMap();

