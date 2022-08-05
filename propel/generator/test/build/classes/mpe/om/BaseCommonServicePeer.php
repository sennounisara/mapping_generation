<?php


/**
 * Base static class for performing query and update operations on the 'Service' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonServicePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Service';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonService';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonServiceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 74;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 74;

    /** the column name for the id field */
    const ID = 'Service.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Service.organisme';

    /** the column name for the type_service field */
    const TYPE_SERVICE = 'Service.type_service';

    /** the column name for the libelle field */
    const LIBELLE = 'Service.libelle';

    /** the column name for the sigle field */
    const SIGLE = 'Service.sigle';

    /** the column name for the adresse field */
    const ADRESSE = 'Service.adresse';

    /** the column name for the adresse_suite field */
    const ADRESSE_SUITE = 'Service.adresse_suite';

    /** the column name for the cp field */
    const CP = 'Service.cp';

    /** the column name for the ville field */
    const VILLE = 'Service.ville';

    /** the column name for the telephone field */
    const TELEPHONE = 'Service.telephone';

    /** the column name for the fax field */
    const FAX = 'Service.fax';

    /** the column name for the mail field */
    const MAIL = 'Service.mail';

    /** the column name for the pays field */
    const PAYS = 'Service.pays';

    /** the column name for the id_initial field */
    const ID_INITIAL = 'Service.id_initial';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Service.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'Service.date_modification';

    /** the column name for the siren field */
    const SIREN = 'Service.siren';

    /** the column name for the complement field */
    const COMPLEMENT = 'Service.complement';

    /** the column name for the libelle_ar field */
    const LIBELLE_AR = 'Service.libelle_ar';

    /** the column name for the adresse_ar field */
    const ADRESSE_AR = 'Service.adresse_ar';

    /** the column name for the adresse_suite_ar field */
    const ADRESSE_SUITE_AR = 'Service.adresse_suite_ar';

    /** the column name for the ville_ar field */
    const VILLE_AR = 'Service.ville_ar';

    /** the column name for the pays_ar field */
    const PAYS_AR = 'Service.pays_ar';

    /** the column name for the libelle_fr field */
    const LIBELLE_FR = 'Service.libelle_fr';

    /** the column name for the adresse_fr field */
    const ADRESSE_FR = 'Service.adresse_fr';

    /** the column name for the adresse_suite_fr field */
    const ADRESSE_SUITE_FR = 'Service.adresse_suite_fr';

    /** the column name for the ville_fr field */
    const VILLE_FR = 'Service.ville_fr';

    /** the column name for the pays_fr field */
    const PAYS_FR = 'Service.pays_fr';

    /** the column name for the libelle_es field */
    const LIBELLE_ES = 'Service.libelle_es';

    /** the column name for the adresse_es field */
    const ADRESSE_ES = 'Service.adresse_es';

    /** the column name for the adresse_suite_es field */
    const ADRESSE_SUITE_ES = 'Service.adresse_suite_es';

    /** the column name for the ville_es field */
    const VILLE_ES = 'Service.ville_es';

    /** the column name for the pays_es field */
    const PAYS_ES = 'Service.pays_es';

    /** the column name for the libelle_en field */
    const LIBELLE_EN = 'Service.libelle_en';

    /** the column name for the adresse_en field */
    const ADRESSE_EN = 'Service.adresse_en';

    /** the column name for the adresse_suite_en field */
    const ADRESSE_SUITE_EN = 'Service.adresse_suite_en';

    /** the column name for the ville_en field */
    const VILLE_EN = 'Service.ville_en';

    /** the column name for the pays_en field */
    const PAYS_EN = 'Service.pays_en';

    /** the column name for the libelle_su field */
    const LIBELLE_SU = 'Service.libelle_su';

    /** the column name for the adresse_su field */
    const ADRESSE_SU = 'Service.adresse_su';

    /** the column name for the adresse_suite_su field */
    const ADRESSE_SUITE_SU = 'Service.adresse_suite_su';

    /** the column name for the ville_su field */
    const VILLE_SU = 'Service.ville_su';

    /** the column name for the pays_su field */
    const PAYS_SU = 'Service.pays_su';

    /** the column name for the libelle_du field */
    const LIBELLE_DU = 'Service.libelle_du';

    /** the column name for the adresse_du field */
    const ADRESSE_DU = 'Service.adresse_du';

    /** the column name for the adresse_suite_du field */
    const ADRESSE_SUITE_DU = 'Service.adresse_suite_du';

    /** the column name for the ville_du field */
    const VILLE_DU = 'Service.ville_du';

    /** the column name for the pays_du field */
    const PAYS_DU = 'Service.pays_du';

    /** the column name for the libelle_cz field */
    const LIBELLE_CZ = 'Service.libelle_cz';

    /** the column name for the adresse_cz field */
    const ADRESSE_CZ = 'Service.adresse_cz';

    /** the column name for the adresse_suite_cz field */
    const ADRESSE_SUITE_CZ = 'Service.adresse_suite_cz';

    /** the column name for the ville_cz field */
    const VILLE_CZ = 'Service.ville_cz';

    /** the column name for the pays_cz field */
    const PAYS_CZ = 'Service.pays_cz';

    /** the column name for the libelle_it field */
    const LIBELLE_IT = 'Service.libelle_it';

    /** the column name for the adresse_it field */
    const ADRESSE_IT = 'Service.adresse_it';

    /** the column name for the adresse_suite_it field */
    const ADRESSE_SUITE_IT = 'Service.adresse_suite_it';

    /** the column name for the ville_it field */
    const VILLE_IT = 'Service.ville_it';

    /** the column name for the pays_it field */
    const PAYS_IT = 'Service.pays_it';

    /** the column name for the chemin_complet field */
    const CHEMIN_COMPLET = 'Service.chemin_complet';

    /** the column name for the chemin_complet_fr field */
    const CHEMIN_COMPLET_FR = 'Service.chemin_complet_fr';

    /** the column name for the chemin_complet_en field */
    const CHEMIN_COMPLET_EN = 'Service.chemin_complet_en';

    /** the column name for the chemin_complet_es field */
    const CHEMIN_COMPLET_ES = 'Service.chemin_complet_es';

    /** the column name for the chemin_complet_su field */
    const CHEMIN_COMPLET_SU = 'Service.chemin_complet_su';

    /** the column name for the chemin_complet_du field */
    const CHEMIN_COMPLET_DU = 'Service.chemin_complet_du';

    /** the column name for the chemin_complet_cz field */
    const CHEMIN_COMPLET_CZ = 'Service.chemin_complet_cz';

    /** the column name for the chemin_complet_ar field */
    const CHEMIN_COMPLET_AR = 'Service.chemin_complet_ar';

    /** the column name for the chemin_complet_it field */
    const CHEMIN_COMPLET_IT = 'Service.chemin_complet_it';

    /** the column name for the nom_service_archiveur field */
    const NOM_SERVICE_ARCHIVEUR = 'Service.nom_service_archiveur';

    /** the column name for the identifiant_service_archiveur field */
    const IDENTIFIANT_SERVICE_ARCHIVEUR = 'Service.identifiant_service_archiveur';

    /** the column name for the affichage_service field */
    const AFFICHAGE_SERVICE = 'Service.affichage_service';

    /** the column name for the activation_fuseau_horaire field */
    const ACTIVATION_FUSEAU_HORAIRE = 'Service.activation_fuseau_horaire';

    /** the column name for the decalage_horaire field */
    const DECALAGE_HORAIRE = 'Service.decalage_horaire';

    /** the column name for the lieu_residence field */
    const LIEU_RESIDENCE = 'Service.lieu_residence';

    /** the column name for the alerte field */
    const ALERTE = 'Service.alerte';

    /** The enumerated values for the type_service field */
    const TYPE_SERVICE_1 = '1';
    const TYPE_SERVICE_2 = '2';

    /** The enumerated values for the affichage_service field */
    const AFFICHAGE_SERVICE_0 = '0';
    const AFFICHAGE_SERVICE_1 = '1';

    /** The enumerated values for the activation_fuseau_horaire field */
    const ACTIVATION_FUSEAU_HORAIRE_0 = '0';
    const ACTIVATION_FUSEAU_HORAIRE_1 = '1';

    /** The enumerated values for the alerte field */
    const ALERTE_0 = '0';
    const ALERTE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonService objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonService[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonServicePeer::$fieldNames[CommonServicePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'TypeService', 'Libelle', 'Sigle', 'Adresse', 'AdresseSuite', 'Cp', 'Ville', 'Telephone', 'Fax', 'Mail', 'Pays', 'IdInitial', 'DateCreation', 'DateModification', 'Siren', 'Complement', 'LibelleAr', 'AdresseAr', 'AdresseSuiteAr', 'VilleAr', 'PaysAr', 'LibelleFr', 'AdresseFr', 'AdresseSuiteFr', 'VilleFr', 'PaysFr', 'LibelleEs', 'AdresseEs', 'AdresseSuiteEs', 'VilleEs', 'PaysEs', 'LibelleEn', 'AdresseEn', 'AdresseSuiteEn', 'VilleEn', 'PaysEn', 'LibelleSu', 'AdresseSu', 'AdresseSuiteSu', 'VilleSu', 'PaysSu', 'LibelleDu', 'AdresseDu', 'AdresseSuiteDu', 'VilleDu', 'PaysDu', 'LibelleCz', 'AdresseCz', 'AdresseSuiteCz', 'VilleCz', 'PaysCz', 'LibelleIt', 'AdresseIt', 'AdresseSuiteIt', 'VilleIt', 'PaysIt', 'CheminComplet', 'CheminCompletFr', 'CheminCompletEn', 'CheminCompletEs', 'CheminCompletSu', 'CheminCompletDu', 'CheminCompletCz', 'CheminCompletAr', 'CheminCompletIt', 'NomServiceArchiveur', 'IdentifiantServiceArchiveur', 'AffichageService', 'ActivationFuseauHoraire', 'DecalageHoraire', 'LieuResidence', 'Alerte', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'typeService', 'libelle', 'sigle', 'adresse', 'adresseSuite', 'cp', 'ville', 'telephone', 'fax', 'mail', 'pays', 'idInitial', 'dateCreation', 'dateModification', 'siren', 'complement', 'libelleAr', 'adresseAr', 'adresseSuiteAr', 'villeAr', 'paysAr', 'libelleFr', 'adresseFr', 'adresseSuiteFr', 'villeFr', 'paysFr', 'libelleEs', 'adresseEs', 'adresseSuiteEs', 'villeEs', 'paysEs', 'libelleEn', 'adresseEn', 'adresseSuiteEn', 'villeEn', 'paysEn', 'libelleSu', 'adresseSu', 'adresseSuiteSu', 'villeSu', 'paysSu', 'libelleDu', 'adresseDu', 'adresseSuiteDu', 'villeDu', 'paysDu', 'libelleCz', 'adresseCz', 'adresseSuiteCz', 'villeCz', 'paysCz', 'libelleIt', 'adresseIt', 'adresseSuiteIt', 'villeIt', 'paysIt', 'cheminComplet', 'cheminCompletFr', 'cheminCompletEn', 'cheminCompletEs', 'cheminCompletSu', 'cheminCompletDu', 'cheminCompletCz', 'cheminCompletAr', 'cheminCompletIt', 'nomServiceArchiveur', 'identifiantServiceArchiveur', 'affichageService', 'activationFuseauHoraire', 'decalageHoraire', 'lieuResidence', 'alerte', ),
        BasePeer::TYPE_COLNAME => array (CommonServicePeer::ID, CommonServicePeer::ORGANISME, CommonServicePeer::TYPE_SERVICE, CommonServicePeer::LIBELLE, CommonServicePeer::SIGLE, CommonServicePeer::ADRESSE, CommonServicePeer::ADRESSE_SUITE, CommonServicePeer::CP, CommonServicePeer::VILLE, CommonServicePeer::TELEPHONE, CommonServicePeer::FAX, CommonServicePeer::MAIL, CommonServicePeer::PAYS, CommonServicePeer::ID_INITIAL, CommonServicePeer::DATE_CREATION, CommonServicePeer::DATE_MODIFICATION, CommonServicePeer::SIREN, CommonServicePeer::COMPLEMENT, CommonServicePeer::LIBELLE_AR, CommonServicePeer::ADRESSE_AR, CommonServicePeer::ADRESSE_SUITE_AR, CommonServicePeer::VILLE_AR, CommonServicePeer::PAYS_AR, CommonServicePeer::LIBELLE_FR, CommonServicePeer::ADRESSE_FR, CommonServicePeer::ADRESSE_SUITE_FR, CommonServicePeer::VILLE_FR, CommonServicePeer::PAYS_FR, CommonServicePeer::LIBELLE_ES, CommonServicePeer::ADRESSE_ES, CommonServicePeer::ADRESSE_SUITE_ES, CommonServicePeer::VILLE_ES, CommonServicePeer::PAYS_ES, CommonServicePeer::LIBELLE_EN, CommonServicePeer::ADRESSE_EN, CommonServicePeer::ADRESSE_SUITE_EN, CommonServicePeer::VILLE_EN, CommonServicePeer::PAYS_EN, CommonServicePeer::LIBELLE_SU, CommonServicePeer::ADRESSE_SU, CommonServicePeer::ADRESSE_SUITE_SU, CommonServicePeer::VILLE_SU, CommonServicePeer::PAYS_SU, CommonServicePeer::LIBELLE_DU, CommonServicePeer::ADRESSE_DU, CommonServicePeer::ADRESSE_SUITE_DU, CommonServicePeer::VILLE_DU, CommonServicePeer::PAYS_DU, CommonServicePeer::LIBELLE_CZ, CommonServicePeer::ADRESSE_CZ, CommonServicePeer::ADRESSE_SUITE_CZ, CommonServicePeer::VILLE_CZ, CommonServicePeer::PAYS_CZ, CommonServicePeer::LIBELLE_IT, CommonServicePeer::ADRESSE_IT, CommonServicePeer::ADRESSE_SUITE_IT, CommonServicePeer::VILLE_IT, CommonServicePeer::PAYS_IT, CommonServicePeer::CHEMIN_COMPLET, CommonServicePeer::CHEMIN_COMPLET_FR, CommonServicePeer::CHEMIN_COMPLET_EN, CommonServicePeer::CHEMIN_COMPLET_ES, CommonServicePeer::CHEMIN_COMPLET_SU, CommonServicePeer::CHEMIN_COMPLET_DU, CommonServicePeer::CHEMIN_COMPLET_CZ, CommonServicePeer::CHEMIN_COMPLET_AR, CommonServicePeer::CHEMIN_COMPLET_IT, CommonServicePeer::NOM_SERVICE_ARCHIVEUR, CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR, CommonServicePeer::AFFICHAGE_SERVICE, CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE, CommonServicePeer::DECALAGE_HORAIRE, CommonServicePeer::LIEU_RESIDENCE, CommonServicePeer::ALERTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'TYPE_SERVICE', 'LIBELLE', 'SIGLE', 'ADRESSE', 'ADRESSE_SUITE', 'CP', 'VILLE', 'TELEPHONE', 'FAX', 'MAIL', 'PAYS', 'ID_INITIAL', 'DATE_CREATION', 'DATE_MODIFICATION', 'SIREN', 'COMPLEMENT', 'LIBELLE_AR', 'ADRESSE_AR', 'ADRESSE_SUITE_AR', 'VILLE_AR', 'PAYS_AR', 'LIBELLE_FR', 'ADRESSE_FR', 'ADRESSE_SUITE_FR', 'VILLE_FR', 'PAYS_FR', 'LIBELLE_ES', 'ADRESSE_ES', 'ADRESSE_SUITE_ES', 'VILLE_ES', 'PAYS_ES', 'LIBELLE_EN', 'ADRESSE_EN', 'ADRESSE_SUITE_EN', 'VILLE_EN', 'PAYS_EN', 'LIBELLE_SU', 'ADRESSE_SU', 'ADRESSE_SUITE_SU', 'VILLE_SU', 'PAYS_SU', 'LIBELLE_DU', 'ADRESSE_DU', 'ADRESSE_SUITE_DU', 'VILLE_DU', 'PAYS_DU', 'LIBELLE_CZ', 'ADRESSE_CZ', 'ADRESSE_SUITE_CZ', 'VILLE_CZ', 'PAYS_CZ', 'LIBELLE_IT', 'ADRESSE_IT', 'ADRESSE_SUITE_IT', 'VILLE_IT', 'PAYS_IT', 'CHEMIN_COMPLET', 'CHEMIN_COMPLET_FR', 'CHEMIN_COMPLET_EN', 'CHEMIN_COMPLET_ES', 'CHEMIN_COMPLET_SU', 'CHEMIN_COMPLET_DU', 'CHEMIN_COMPLET_CZ', 'CHEMIN_COMPLET_AR', 'CHEMIN_COMPLET_IT', 'NOM_SERVICE_ARCHIVEUR', 'IDENTIFIANT_SERVICE_ARCHIVEUR', 'AFFICHAGE_SERVICE', 'ACTIVATION_FUSEAU_HORAIRE', 'DECALAGE_HORAIRE', 'LIEU_RESIDENCE', 'ALERTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'type_service', 'libelle', 'sigle', 'adresse', 'adresse_suite', 'cp', 'ville', 'telephone', 'fax', 'mail', 'pays', 'id_initial', 'date_creation', 'date_modification', 'siren', 'complement', 'libelle_ar', 'adresse_ar', 'adresse_suite_ar', 'ville_ar', 'pays_ar', 'libelle_fr', 'adresse_fr', 'adresse_suite_fr', 'ville_fr', 'pays_fr', 'libelle_es', 'adresse_es', 'adresse_suite_es', 'ville_es', 'pays_es', 'libelle_en', 'adresse_en', 'adresse_suite_en', 'ville_en', 'pays_en', 'libelle_su', 'adresse_su', 'adresse_suite_su', 'ville_su', 'pays_su', 'libelle_du', 'adresse_du', 'adresse_suite_du', 'ville_du', 'pays_du', 'libelle_cz', 'adresse_cz', 'adresse_suite_cz', 'ville_cz', 'pays_cz', 'libelle_it', 'adresse_it', 'adresse_suite_it', 'ville_it', 'pays_it', 'chemin_complet', 'chemin_complet_fr', 'chemin_complet_en', 'chemin_complet_es', 'chemin_complet_su', 'chemin_complet_du', 'chemin_complet_cz', 'chemin_complet_ar', 'chemin_complet_it', 'nom_service_archiveur', 'identifiant_service_archiveur', 'affichage_service', 'activation_fuseau_horaire', 'decalage_horaire', 'lieu_residence', 'alerte', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonServicePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'TypeService' => 2, 'Libelle' => 3, 'Sigle' => 4, 'Adresse' => 5, 'AdresseSuite' => 6, 'Cp' => 7, 'Ville' => 8, 'Telephone' => 9, 'Fax' => 10, 'Mail' => 11, 'Pays' => 12, 'IdInitial' => 13, 'DateCreation' => 14, 'DateModification' => 15, 'Siren' => 16, 'Complement' => 17, 'LibelleAr' => 18, 'AdresseAr' => 19, 'AdresseSuiteAr' => 20, 'VilleAr' => 21, 'PaysAr' => 22, 'LibelleFr' => 23, 'AdresseFr' => 24, 'AdresseSuiteFr' => 25, 'VilleFr' => 26, 'PaysFr' => 27, 'LibelleEs' => 28, 'AdresseEs' => 29, 'AdresseSuiteEs' => 30, 'VilleEs' => 31, 'PaysEs' => 32, 'LibelleEn' => 33, 'AdresseEn' => 34, 'AdresseSuiteEn' => 35, 'VilleEn' => 36, 'PaysEn' => 37, 'LibelleSu' => 38, 'AdresseSu' => 39, 'AdresseSuiteSu' => 40, 'VilleSu' => 41, 'PaysSu' => 42, 'LibelleDu' => 43, 'AdresseDu' => 44, 'AdresseSuiteDu' => 45, 'VilleDu' => 46, 'PaysDu' => 47, 'LibelleCz' => 48, 'AdresseCz' => 49, 'AdresseSuiteCz' => 50, 'VilleCz' => 51, 'PaysCz' => 52, 'LibelleIt' => 53, 'AdresseIt' => 54, 'AdresseSuiteIt' => 55, 'VilleIt' => 56, 'PaysIt' => 57, 'CheminComplet' => 58, 'CheminCompletFr' => 59, 'CheminCompletEn' => 60, 'CheminCompletEs' => 61, 'CheminCompletSu' => 62, 'CheminCompletDu' => 63, 'CheminCompletCz' => 64, 'CheminCompletAr' => 65, 'CheminCompletIt' => 66, 'NomServiceArchiveur' => 67, 'IdentifiantServiceArchiveur' => 68, 'AffichageService' => 69, 'ActivationFuseauHoraire' => 70, 'DecalageHoraire' => 71, 'LieuResidence' => 72, 'Alerte' => 73, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'typeService' => 2, 'libelle' => 3, 'sigle' => 4, 'adresse' => 5, 'adresseSuite' => 6, 'cp' => 7, 'ville' => 8, 'telephone' => 9, 'fax' => 10, 'mail' => 11, 'pays' => 12, 'idInitial' => 13, 'dateCreation' => 14, 'dateModification' => 15, 'siren' => 16, 'complement' => 17, 'libelleAr' => 18, 'adresseAr' => 19, 'adresseSuiteAr' => 20, 'villeAr' => 21, 'paysAr' => 22, 'libelleFr' => 23, 'adresseFr' => 24, 'adresseSuiteFr' => 25, 'villeFr' => 26, 'paysFr' => 27, 'libelleEs' => 28, 'adresseEs' => 29, 'adresseSuiteEs' => 30, 'villeEs' => 31, 'paysEs' => 32, 'libelleEn' => 33, 'adresseEn' => 34, 'adresseSuiteEn' => 35, 'villeEn' => 36, 'paysEn' => 37, 'libelleSu' => 38, 'adresseSu' => 39, 'adresseSuiteSu' => 40, 'villeSu' => 41, 'paysSu' => 42, 'libelleDu' => 43, 'adresseDu' => 44, 'adresseSuiteDu' => 45, 'villeDu' => 46, 'paysDu' => 47, 'libelleCz' => 48, 'adresseCz' => 49, 'adresseSuiteCz' => 50, 'villeCz' => 51, 'paysCz' => 52, 'libelleIt' => 53, 'adresseIt' => 54, 'adresseSuiteIt' => 55, 'villeIt' => 56, 'paysIt' => 57, 'cheminComplet' => 58, 'cheminCompletFr' => 59, 'cheminCompletEn' => 60, 'cheminCompletEs' => 61, 'cheminCompletSu' => 62, 'cheminCompletDu' => 63, 'cheminCompletCz' => 64, 'cheminCompletAr' => 65, 'cheminCompletIt' => 66, 'nomServiceArchiveur' => 67, 'identifiantServiceArchiveur' => 68, 'affichageService' => 69, 'activationFuseauHoraire' => 70, 'decalageHoraire' => 71, 'lieuResidence' => 72, 'alerte' => 73, ),
        BasePeer::TYPE_COLNAME => array (CommonServicePeer::ID => 0, CommonServicePeer::ORGANISME => 1, CommonServicePeer::TYPE_SERVICE => 2, CommonServicePeer::LIBELLE => 3, CommonServicePeer::SIGLE => 4, CommonServicePeer::ADRESSE => 5, CommonServicePeer::ADRESSE_SUITE => 6, CommonServicePeer::CP => 7, CommonServicePeer::VILLE => 8, CommonServicePeer::TELEPHONE => 9, CommonServicePeer::FAX => 10, CommonServicePeer::MAIL => 11, CommonServicePeer::PAYS => 12, CommonServicePeer::ID_INITIAL => 13, CommonServicePeer::DATE_CREATION => 14, CommonServicePeer::DATE_MODIFICATION => 15, CommonServicePeer::SIREN => 16, CommonServicePeer::COMPLEMENT => 17, CommonServicePeer::LIBELLE_AR => 18, CommonServicePeer::ADRESSE_AR => 19, CommonServicePeer::ADRESSE_SUITE_AR => 20, CommonServicePeer::VILLE_AR => 21, CommonServicePeer::PAYS_AR => 22, CommonServicePeer::LIBELLE_FR => 23, CommonServicePeer::ADRESSE_FR => 24, CommonServicePeer::ADRESSE_SUITE_FR => 25, CommonServicePeer::VILLE_FR => 26, CommonServicePeer::PAYS_FR => 27, CommonServicePeer::LIBELLE_ES => 28, CommonServicePeer::ADRESSE_ES => 29, CommonServicePeer::ADRESSE_SUITE_ES => 30, CommonServicePeer::VILLE_ES => 31, CommonServicePeer::PAYS_ES => 32, CommonServicePeer::LIBELLE_EN => 33, CommonServicePeer::ADRESSE_EN => 34, CommonServicePeer::ADRESSE_SUITE_EN => 35, CommonServicePeer::VILLE_EN => 36, CommonServicePeer::PAYS_EN => 37, CommonServicePeer::LIBELLE_SU => 38, CommonServicePeer::ADRESSE_SU => 39, CommonServicePeer::ADRESSE_SUITE_SU => 40, CommonServicePeer::VILLE_SU => 41, CommonServicePeer::PAYS_SU => 42, CommonServicePeer::LIBELLE_DU => 43, CommonServicePeer::ADRESSE_DU => 44, CommonServicePeer::ADRESSE_SUITE_DU => 45, CommonServicePeer::VILLE_DU => 46, CommonServicePeer::PAYS_DU => 47, CommonServicePeer::LIBELLE_CZ => 48, CommonServicePeer::ADRESSE_CZ => 49, CommonServicePeer::ADRESSE_SUITE_CZ => 50, CommonServicePeer::VILLE_CZ => 51, CommonServicePeer::PAYS_CZ => 52, CommonServicePeer::LIBELLE_IT => 53, CommonServicePeer::ADRESSE_IT => 54, CommonServicePeer::ADRESSE_SUITE_IT => 55, CommonServicePeer::VILLE_IT => 56, CommonServicePeer::PAYS_IT => 57, CommonServicePeer::CHEMIN_COMPLET => 58, CommonServicePeer::CHEMIN_COMPLET_FR => 59, CommonServicePeer::CHEMIN_COMPLET_EN => 60, CommonServicePeer::CHEMIN_COMPLET_ES => 61, CommonServicePeer::CHEMIN_COMPLET_SU => 62, CommonServicePeer::CHEMIN_COMPLET_DU => 63, CommonServicePeer::CHEMIN_COMPLET_CZ => 64, CommonServicePeer::CHEMIN_COMPLET_AR => 65, CommonServicePeer::CHEMIN_COMPLET_IT => 66, CommonServicePeer::NOM_SERVICE_ARCHIVEUR => 67, CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR => 68, CommonServicePeer::AFFICHAGE_SERVICE => 69, CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE => 70, CommonServicePeer::DECALAGE_HORAIRE => 71, CommonServicePeer::LIEU_RESIDENCE => 72, CommonServicePeer::ALERTE => 73, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'TYPE_SERVICE' => 2, 'LIBELLE' => 3, 'SIGLE' => 4, 'ADRESSE' => 5, 'ADRESSE_SUITE' => 6, 'CP' => 7, 'VILLE' => 8, 'TELEPHONE' => 9, 'FAX' => 10, 'MAIL' => 11, 'PAYS' => 12, 'ID_INITIAL' => 13, 'DATE_CREATION' => 14, 'DATE_MODIFICATION' => 15, 'SIREN' => 16, 'COMPLEMENT' => 17, 'LIBELLE_AR' => 18, 'ADRESSE_AR' => 19, 'ADRESSE_SUITE_AR' => 20, 'VILLE_AR' => 21, 'PAYS_AR' => 22, 'LIBELLE_FR' => 23, 'ADRESSE_FR' => 24, 'ADRESSE_SUITE_FR' => 25, 'VILLE_FR' => 26, 'PAYS_FR' => 27, 'LIBELLE_ES' => 28, 'ADRESSE_ES' => 29, 'ADRESSE_SUITE_ES' => 30, 'VILLE_ES' => 31, 'PAYS_ES' => 32, 'LIBELLE_EN' => 33, 'ADRESSE_EN' => 34, 'ADRESSE_SUITE_EN' => 35, 'VILLE_EN' => 36, 'PAYS_EN' => 37, 'LIBELLE_SU' => 38, 'ADRESSE_SU' => 39, 'ADRESSE_SUITE_SU' => 40, 'VILLE_SU' => 41, 'PAYS_SU' => 42, 'LIBELLE_DU' => 43, 'ADRESSE_DU' => 44, 'ADRESSE_SUITE_DU' => 45, 'VILLE_DU' => 46, 'PAYS_DU' => 47, 'LIBELLE_CZ' => 48, 'ADRESSE_CZ' => 49, 'ADRESSE_SUITE_CZ' => 50, 'VILLE_CZ' => 51, 'PAYS_CZ' => 52, 'LIBELLE_IT' => 53, 'ADRESSE_IT' => 54, 'ADRESSE_SUITE_IT' => 55, 'VILLE_IT' => 56, 'PAYS_IT' => 57, 'CHEMIN_COMPLET' => 58, 'CHEMIN_COMPLET_FR' => 59, 'CHEMIN_COMPLET_EN' => 60, 'CHEMIN_COMPLET_ES' => 61, 'CHEMIN_COMPLET_SU' => 62, 'CHEMIN_COMPLET_DU' => 63, 'CHEMIN_COMPLET_CZ' => 64, 'CHEMIN_COMPLET_AR' => 65, 'CHEMIN_COMPLET_IT' => 66, 'NOM_SERVICE_ARCHIVEUR' => 67, 'IDENTIFIANT_SERVICE_ARCHIVEUR' => 68, 'AFFICHAGE_SERVICE' => 69, 'ACTIVATION_FUSEAU_HORAIRE' => 70, 'DECALAGE_HORAIRE' => 71, 'LIEU_RESIDENCE' => 72, 'ALERTE' => 73, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'type_service' => 2, 'libelle' => 3, 'sigle' => 4, 'adresse' => 5, 'adresse_suite' => 6, 'cp' => 7, 'ville' => 8, 'telephone' => 9, 'fax' => 10, 'mail' => 11, 'pays' => 12, 'id_initial' => 13, 'date_creation' => 14, 'date_modification' => 15, 'siren' => 16, 'complement' => 17, 'libelle_ar' => 18, 'adresse_ar' => 19, 'adresse_suite_ar' => 20, 'ville_ar' => 21, 'pays_ar' => 22, 'libelle_fr' => 23, 'adresse_fr' => 24, 'adresse_suite_fr' => 25, 'ville_fr' => 26, 'pays_fr' => 27, 'libelle_es' => 28, 'adresse_es' => 29, 'adresse_suite_es' => 30, 'ville_es' => 31, 'pays_es' => 32, 'libelle_en' => 33, 'adresse_en' => 34, 'adresse_suite_en' => 35, 'ville_en' => 36, 'pays_en' => 37, 'libelle_su' => 38, 'adresse_su' => 39, 'adresse_suite_su' => 40, 'ville_su' => 41, 'pays_su' => 42, 'libelle_du' => 43, 'adresse_du' => 44, 'adresse_suite_du' => 45, 'ville_du' => 46, 'pays_du' => 47, 'libelle_cz' => 48, 'adresse_cz' => 49, 'adresse_suite_cz' => 50, 'ville_cz' => 51, 'pays_cz' => 52, 'libelle_it' => 53, 'adresse_it' => 54, 'adresse_suite_it' => 55, 'ville_it' => 56, 'pays_it' => 57, 'chemin_complet' => 58, 'chemin_complet_fr' => 59, 'chemin_complet_en' => 60, 'chemin_complet_es' => 61, 'chemin_complet_su' => 62, 'chemin_complet_du' => 63, 'chemin_complet_cz' => 64, 'chemin_complet_ar' => 65, 'chemin_complet_it' => 66, 'nom_service_archiveur' => 67, 'identifiant_service_archiveur' => 68, 'affichage_service' => 69, 'activation_fuseau_horaire' => 70, 'decalage_horaire' => 71, 'lieu_residence' => 72, 'alerte' => 73, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonServicePeer::TYPE_SERVICE => array(
            CommonServicePeer::TYPE_SERVICE_1,
            CommonServicePeer::TYPE_SERVICE_2,
        ),
        CommonServicePeer::AFFICHAGE_SERVICE => array(
            CommonServicePeer::AFFICHAGE_SERVICE_0,
            CommonServicePeer::AFFICHAGE_SERVICE_1,
        ),
        CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE => array(
            CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE_0,
            CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE_1,
        ),
        CommonServicePeer::ALERTE => array(
            CommonServicePeer::ALERTE_0,
            CommonServicePeer::ALERTE_1,
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
        $toNames = CommonServicePeer::getFieldNames($toType);
        $key = isset(CommonServicePeer::$fieldKeys[$fromType][$name]) ? CommonServicePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonServicePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonServicePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonServicePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonServicePeer::$enumValueSets;
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
        $valueSets = CommonServicePeer::getValueSets();

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
        $values = CommonServicePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonServicePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonServicePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonServicePeer::ID);
            $criteria->addSelectColumn(CommonServicePeer::ORGANISME);
            $criteria->addSelectColumn(CommonServicePeer::TYPE_SERVICE);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE);
            $criteria->addSelectColumn(CommonServicePeer::SIGLE);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE);
            $criteria->addSelectColumn(CommonServicePeer::CP);
            $criteria->addSelectColumn(CommonServicePeer::VILLE);
            $criteria->addSelectColumn(CommonServicePeer::TELEPHONE);
            $criteria->addSelectColumn(CommonServicePeer::FAX);
            $criteria->addSelectColumn(CommonServicePeer::MAIL);
            $criteria->addSelectColumn(CommonServicePeer::PAYS);
            $criteria->addSelectColumn(CommonServicePeer::ID_INITIAL);
            $criteria->addSelectColumn(CommonServicePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonServicePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonServicePeer::SIREN);
            $criteria->addSelectColumn(CommonServicePeer::COMPLEMENT);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_AR);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_AR);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_AR);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_AR);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_AR);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_FR);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_FR);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_FR);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_FR);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_FR);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_ES);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_ES);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_ES);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_ES);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_ES);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_EN);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_EN);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_EN);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_EN);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_EN);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_SU);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SU);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_SU);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_SU);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_SU);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_DU);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_DU);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_DU);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_DU);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_DU);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_CZ);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_CZ);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_CZ);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_CZ);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_CZ);
            $criteria->addSelectColumn(CommonServicePeer::LIBELLE_IT);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_IT);
            $criteria->addSelectColumn(CommonServicePeer::ADRESSE_SUITE_IT);
            $criteria->addSelectColumn(CommonServicePeer::VILLE_IT);
            $criteria->addSelectColumn(CommonServicePeer::PAYS_IT);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_FR);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_EN);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_ES);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_SU);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_DU);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_CZ);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_AR);
            $criteria->addSelectColumn(CommonServicePeer::CHEMIN_COMPLET_IT);
            $criteria->addSelectColumn(CommonServicePeer::NOM_SERVICE_ARCHIVEUR);
            $criteria->addSelectColumn(CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR);
            $criteria->addSelectColumn(CommonServicePeer::AFFICHAGE_SERVICE);
            $criteria->addSelectColumn(CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE);
            $criteria->addSelectColumn(CommonServicePeer::DECALAGE_HORAIRE);
            $criteria->addSelectColumn(CommonServicePeer::LIEU_RESIDENCE);
            $criteria->addSelectColumn(CommonServicePeer::ALERTE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.type_service');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.sigle');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.adresse_suite');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.id_initial');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.siren');
            $criteria->addSelectColumn($alias . '.complement');
            $criteria->addSelectColumn($alias . '.libelle_ar');
            $criteria->addSelectColumn($alias . '.adresse_ar');
            $criteria->addSelectColumn($alias . '.adresse_suite_ar');
            $criteria->addSelectColumn($alias . '.ville_ar');
            $criteria->addSelectColumn($alias . '.pays_ar');
            $criteria->addSelectColumn($alias . '.libelle_fr');
            $criteria->addSelectColumn($alias . '.adresse_fr');
            $criteria->addSelectColumn($alias . '.adresse_suite_fr');
            $criteria->addSelectColumn($alias . '.ville_fr');
            $criteria->addSelectColumn($alias . '.pays_fr');
            $criteria->addSelectColumn($alias . '.libelle_es');
            $criteria->addSelectColumn($alias . '.adresse_es');
            $criteria->addSelectColumn($alias . '.adresse_suite_es');
            $criteria->addSelectColumn($alias . '.ville_es');
            $criteria->addSelectColumn($alias . '.pays_es');
            $criteria->addSelectColumn($alias . '.libelle_en');
            $criteria->addSelectColumn($alias . '.adresse_en');
            $criteria->addSelectColumn($alias . '.adresse_suite_en');
            $criteria->addSelectColumn($alias . '.ville_en');
            $criteria->addSelectColumn($alias . '.pays_en');
            $criteria->addSelectColumn($alias . '.libelle_su');
            $criteria->addSelectColumn($alias . '.adresse_su');
            $criteria->addSelectColumn($alias . '.adresse_suite_su');
            $criteria->addSelectColumn($alias . '.ville_su');
            $criteria->addSelectColumn($alias . '.pays_su');
            $criteria->addSelectColumn($alias . '.libelle_du');
            $criteria->addSelectColumn($alias . '.adresse_du');
            $criteria->addSelectColumn($alias . '.adresse_suite_du');
            $criteria->addSelectColumn($alias . '.ville_du');
            $criteria->addSelectColumn($alias . '.pays_du');
            $criteria->addSelectColumn($alias . '.libelle_cz');
            $criteria->addSelectColumn($alias . '.adresse_cz');
            $criteria->addSelectColumn($alias . '.adresse_suite_cz');
            $criteria->addSelectColumn($alias . '.ville_cz');
            $criteria->addSelectColumn($alias . '.pays_cz');
            $criteria->addSelectColumn($alias . '.libelle_it');
            $criteria->addSelectColumn($alias . '.adresse_it');
            $criteria->addSelectColumn($alias . '.adresse_suite_it');
            $criteria->addSelectColumn($alias . '.ville_it');
            $criteria->addSelectColumn($alias . '.pays_it');
            $criteria->addSelectColumn($alias . '.chemin_complet');
            $criteria->addSelectColumn($alias . '.chemin_complet_fr');
            $criteria->addSelectColumn($alias . '.chemin_complet_en');
            $criteria->addSelectColumn($alias . '.chemin_complet_es');
            $criteria->addSelectColumn($alias . '.chemin_complet_su');
            $criteria->addSelectColumn($alias . '.chemin_complet_du');
            $criteria->addSelectColumn($alias . '.chemin_complet_cz');
            $criteria->addSelectColumn($alias . '.chemin_complet_ar');
            $criteria->addSelectColumn($alias . '.chemin_complet_it');
            $criteria->addSelectColumn($alias . '.nom_service_archiveur');
            $criteria->addSelectColumn($alias . '.identifiant_service_archiveur');
            $criteria->addSelectColumn($alias . '.affichage_service');
            $criteria->addSelectColumn($alias . '.activation_fuseau_horaire');
            $criteria->addSelectColumn($alias . '.decalage_horaire');
            $criteria->addSelectColumn($alias . '.lieu_residence');
            $criteria->addSelectColumn($alias . '.alerte');
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
        $criteria->setPrimaryTableName(CommonServicePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonServicePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonServicePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonService
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonServicePeer::doSelect($critcopy, $con);
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
        return CommonServicePeer::populateObjects(CommonServicePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonServicePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonServicePeer::DATABASE_NAME);

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
     * @param      CommonService $obj A CommonService object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonServicePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonService object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonService) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonService object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonServicePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonService Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonServicePeer::$instances[$key])) {
                return CommonServicePeer::$instances[$key];
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
        foreach (CommonServicePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonServicePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Service
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
        $cls = CommonServicePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonServicePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonServicePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonServicePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonService object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonServicePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonServicePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonServicePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonServicePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonServicePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonServicePeer::DATABASE_NAME)->getTable(CommonServicePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonServicePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonServicePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonServiceTableMap());
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
        return CommonServicePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonService or Criteria object.
     *
     * @param      mixed $values Criteria or CommonService object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonService object
        }

        if ($criteria->containsKey(CommonServicePeer::ID) && $criteria->keyContainsValue(CommonServicePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonServicePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonServicePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonService or Criteria object.
     *
     * @param      mixed $values Criteria or CommonService object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonServicePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonServicePeer::ID);
            $value = $criteria->remove(CommonServicePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonServicePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonServicePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonServicePeer::ORGANISME);
            $value = $criteria->remove(CommonServicePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonServicePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonServicePeer::TABLE_NAME);
            }

        } else { // $values is CommonService object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonServicePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Service table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonServicePeer::TABLE_NAME, $con, CommonServicePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonServicePeer::clearInstancePool();
            CommonServicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonService or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonService object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonServicePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonService) { // it's a model object
            // invalidate the cache for this single object
            CommonServicePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonServicePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonServicePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonServicePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonServicePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonServicePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonServicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonService object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonService $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonServicePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonServicePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonServicePeer::DATABASE_NAME, CommonServicePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonService
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonServicePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonServicePeer::DATABASE_NAME);
        $criteria->add(CommonServicePeer::ID, $id);
        $criteria->add(CommonServicePeer::ORGANISME, $organisme);
        $v = CommonServicePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonServicePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonServicePeer::buildTableMap();

