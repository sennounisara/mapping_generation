<?php


/**
 * Base static class for performing query and update operations on the 'configuration_organsime' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationOrgansimePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'configuration_organsime';

    /** the related Propel class for this table */
    const OM_CLASS = 'ConfigurationOrgansime';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ConfigurationOrgansimeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 93;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 93;

    /** the column name for the id field */
    const ID = 'configuration_organsime.id';

    /** the column name for the niveau_lieu field */
    const NIVEAU_LIEU = 'configuration_organsime.niveau_lieu';

    /** the column name for the valeur_defaut_pays field */
    const VALEUR_DEFAUT_PAYS = 'configuration_organsime.valeur_defaut_pays';

    /** the column name for the valeur_defaut_region field */
    const VALEUR_DEFAUT_REGION = 'configuration_organsime.valeur_defaut_region';

    /** the column name for the valeur_defaut_province field */
    const VALEUR_DEFAUT_PROVINCE = 'configuration_organsime.valeur_defaut_province';

    /** the column name for the valeur_par_defaut_commune field */
    const VALEUR_PAR_DEFAUT_COMMUNE = 'configuration_organsime.valeur_par_defaut_commune';

    /** the column name for the mode_affectation_demande field */
    const MODE_AFFECTATION_DEMANDE = 'configuration_organsime.mode_affectation_demande';

    /** the column name for the module_entite_lie_lieu field */
    const MODULE_ENTITE_LIE_LIEU = 'configuration_organsime.module_entite_lie_lieu';

    /** the column name for the NBR_JOUR_DELAI_TRAITEMENT field */
    const NBR_JOUR_DELAI_TRAITEMENT = 'configuration_organsime.NBR_JOUR_DELAI_TRAITEMENT';

    /** the column name for the OBLIGATION_LIEU_DEMANDE field */
    const OBLIGATION_LIEU_DEMANDE = 'configuration_organsime.OBLIGATION_LIEU_DEMANDE';

    /** the column name for the MODULE_GOOGLE_MAPS field */
    const MODULE_GOOGLE_MAPS = 'configuration_organsime.MODULE_GOOGLE_MAPS';

    /** the column name for the VISIBILITE_CHAMP_LOCALISATION field */
    const VISIBILITE_CHAMP_LOCALISATION = 'configuration_organsime.VISIBILITE_CHAMP_LOCALISATION';

    /** the column name for the ECHANGE_WEB_SERVICE field */
    const ECHANGE_WEB_SERVICE = 'configuration_organsime.ECHANGE_WEB_SERVICE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'configuration_organsime.ID_ENTITE';

    /** the column name for the OBLIGATION_NOM_PRENOM_REQUERANT field */
    const OBLIGATION_NOM_PRENOM_REQUERANT = 'configuration_organsime.OBLIGATION_NOM_PRENOM_REQUERANT';

    /** the column name for the OBLIGATION_NOM_ORGANISME_REQUERANT field */
    const OBLIGATION_NOM_ORGANISME_REQUERANT = 'configuration_organsime.OBLIGATION_NOM_ORGANISME_REQUERANT';

    /** the column name for the OBLIGATION_REGISTRE_COMMERCE_REQUERANT field */
    const OBLIGATION_REGISTRE_COMMERCE_REQUERANT = 'configuration_organsime.OBLIGATION_REGISTRE_COMMERCE_REQUERANT';

    /** the column name for the OBLIGATION_TELEPHONE_REQUERANT field */
    const OBLIGATION_TELEPHONE_REQUERANT = 'configuration_organsime.OBLIGATION_TELEPHONE_REQUERANT';

    /** the column name for the VISIBILITE_REGISTRE_COMMERCE_REQUERANT field */
    const VISIBILITE_REGISTRE_COMMERCE_REQUERANT = 'configuration_organsime.VISIBILITE_REGISTRE_COMMERCE_REQUERANT';

    /** the column name for the VISIBILITE_IDENTIFIANT_FISCAL field */
    const VISIBILITE_IDENTIFIANT_FISCAL = 'configuration_organsime.VISIBILITE_IDENTIFIANT_FISCAL';

    /** the column name for the OBLIGATION_IDENTIFIANT_FISCAL field */
    const OBLIGATION_IDENTIFIANT_FISCAL = 'configuration_organsime.OBLIGATION_IDENTIFIANT_FISCAL';

    /** the column name for the DELAI_CLOTURE_DEMANDE field */
    const DELAI_CLOTURE_DEMANDE = 'configuration_organsime.DELAI_CLOTURE_DEMANDE';

    /** the column name for the NOTIFICATION_AVANT_DATE_REPONSE field */
    const NOTIFICATION_AVANT_DATE_REPONSE = 'configuration_organsime.NOTIFICATION_AVANT_DATE_REPONSE';

    /** the column name for the BORNE_TRAITEMENT_DEMANDE field */
    const BORNE_TRAITEMENT_DEMANDE = 'configuration_organsime.BORNE_TRAITEMENT_DEMANDE';

    /** the column name for the REGLE_NUMERO_DEMANDE_ENTRANT field */
    const REGLE_NUMERO_DEMANDE_ENTRANT = 'configuration_organsime.REGLE_NUMERO_DEMANDE_ENTRANT';

    /** the column name for the REGLE_NUMERO_DEMANDE_SORTANT field */
    const REGLE_NUMERO_DEMANDE_SORTANT = 'configuration_organsime.REGLE_NUMERO_DEMANDE_SORTANT';

    /** the column name for the REGLE_NUMERO_DEMANDE_INTERNE field */
    const REGLE_NUMERO_DEMANDE_INTERNE = 'configuration_organsime.REGLE_NUMERO_DEMANDE_INTERNE';

    /** the column name for the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE field */
    const VISIBILITE_BLOC_REPONSE_OBLIGATOIRE = 'configuration_organsime.VISIBILITE_BLOC_REPONSE_OBLIGATOIRE';

    /** the column name for the VISIBILITE_BLOC_LIEU_CONCERNE field */
    const VISIBILITE_BLOC_LIEU_CONCERNE = 'configuration_organsime.VISIBILITE_BLOC_LIEU_CONCERNE';

    /** the column name for the OBLIGATION_MESSAGE_DEMANDE field */
    const OBLIGATION_MESSAGE_DEMANDE = 'configuration_organsime.OBLIGATION_MESSAGE_DEMANDE';

    /** the column name for the OBLIGATION_EMAIL_DEMANDEUR field */
    const OBLIGATION_EMAIL_DEMANDEUR = 'configuration_organsime.OBLIGATION_EMAIL_DEMANDEUR';

    /** the column name for the OBLIGATION_SOUS_THEME field */
    const OBLIGATION_SOUS_THEME = 'configuration_organsime.OBLIGATION_SOUS_THEME';

    /** the column name for the VISIBLITIE_CONDITION_UTILISATION field */
    const VISIBLITIE_CONDITION_UTILISATION = 'configuration_organsime.VISIBLITIE_CONDITION_UTILISATION';

    /** the column name for the CONDITION_UTILISATION_AR field */
    const CONDITION_UTILISATION_AR = 'configuration_organsime.CONDITION_UTILISATION_AR';

    /** the column name for the CONDITION_UTILISATION_FR field */
    const CONDITION_UTILISATION_FR = 'configuration_organsime.CONDITION_UTILISATION_FR';

    /** the column name for the GESTION_DEMANDEUR_PAR_ENTITE field */
    const GESTION_DEMANDEUR_PAR_ENTITE = 'configuration_organsime.GESTION_DEMANDEUR_PAR_ENTITE';

    /** the column name for the VALEUR_DEFAUT_TYPE_DEMANDE field */
    const VALEUR_DEFAUT_TYPE_DEMANDE = 'configuration_organsime.VALEUR_DEFAUT_TYPE_DEMANDE';

    /** the column name for the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE field */
    const VALEUR_DEFAUT_REPONSE_OBLIGATOIRE = 'configuration_organsime.VALEUR_DEFAUT_REPONSE_OBLIGATOIRE';

    /** the column name for the ACCES_EXTRANET field */
    const ACCES_EXTRANET = 'configuration_organsime.ACCES_EXTRANET';

    /** the column name for the LANGUE_PAR_DEFAUT_EXTRANET field */
    const LANGUE_PAR_DEFAUT_EXTRANET = 'configuration_organsime.LANGUE_PAR_DEFAUT_EXTRANET';

    /** the column name for the GOOGLE_ANALYTICS field */
    const GOOGLE_ANALYTICS = 'configuration_organsime.GOOGLE_ANALYTICS';

    /** the column name for the CHIFFREMENT field */
    const CHIFFREMENT = 'configuration_organsime.CHIFFREMENT';

    /** the column name for the ID_ENTITE_CENTRALE field */
    const ID_ENTITE_CENTRALE = 'configuration_organsime.ID_ENTITE_CENTRALE';

    /** the column name for the SERVICE_NOTIFICATION_SMS field */
    const SERVICE_NOTIFICATION_SMS = 'configuration_organsime.SERVICE_NOTIFICATION_SMS';

    /** the column name for the LOGIN_SERVICE_SMS field */
    const LOGIN_SERVICE_SMS = 'configuration_organsime.LOGIN_SERVICE_SMS';

    /** the column name for the PASS_SERVICE_SMS field */
    const PASS_SERVICE_SMS = 'configuration_organsime.PASS_SERVICE_SMS';

    /** the column name for the CODE_ENVOI_SMS field */
    const CODE_ENVOI_SMS = 'configuration_organsime.CODE_ENVOI_SMS';

    /** the column name for the URL_SERVICE_SMS field */
    const URL_SERVICE_SMS = 'configuration_organsime.URL_SERVICE_SMS';

    /** the column name for the CIRCUIT_VALIDATION field */
    const CIRCUIT_VALIDATION = 'configuration_organsime.CIRCUIT_VALIDATION';

    /** the column name for the VISIBILITE_MESSAGE_DEMANDE field */
    const VISIBILITE_MESSAGE_DEMANDE = 'configuration_organsime.VISIBILITE_MESSAGE_DEMANDE';

    /** the column name for the CODE_SIGNATAIRE_CERTIFICAT field */
    const CODE_SIGNATAIRE_CERTIFICAT = 'configuration_organsime.CODE_SIGNATAIRE_CERTIFICAT';

    /** the column name for the ACCES_STATISTIQUES field */
    const ACCES_STATISTIQUES = 'configuration_organsime.ACCES_STATISTIQUES';

    /** the column name for the WEBSERVICE_DEMANDE field */
    const WEBSERVICE_DEMANDE = 'configuration_organsime.WEBSERVICE_DEMANDE';

    /** the column name for the URL_WEBSERVICE_DEMANDE field */
    const URL_WEBSERVICE_DEMANDE = 'configuration_organsime.URL_WEBSERVICE_DEMANDE';

    /** the column name for the JETON_WEBSERVICE field */
    const JETON_WEBSERVICE = 'configuration_organsime.JETON_WEBSERVICE';

    /** the column name for the IDENTIFIANT_ENTITE_RECEPTION field */
    const IDENTIFIANT_ENTITE_RECEPTION = 'configuration_organsime.IDENTIFIANT_ENTITE_RECEPTION';

    /** the column name for the IDENTIFIANT_SOUS_THEME field */
    const IDENTIFIANT_SOUS_THEME = 'configuration_organsime.IDENTIFIANT_SOUS_THEME';

    /** the column name for the SCANNER field */
    const SCANNER = 'configuration_organsime.SCANNER';

    /** the column name for the ACTIVATION_AUTH_SOCLE field */
    const ACTIVATION_AUTH_SOCLE = 'configuration_organsime.ACTIVATION_AUTH_SOCLE';

    /** the column name for the AFFICHAGE_ENREGISTRER_GENERER_NUMERO field */
    const AFFICHAGE_ENREGISTRER_GENERER_NUMERO = 'configuration_organsime.AFFICHAGE_ENREGISTRER_GENERER_NUMERO';

    /** the column name for the JETON_ORG_SERVICE field */
    const JETON_ORG_SERVICE = 'configuration_organsime.JETON_ORG_SERVICE';

    /** the column name for the ONGLET_DEPUIS_1 field */
    const ONGLET_DEPUIS_1 = 'configuration_organsime.ONGLET_DEPUIS_1';

    /** the column name for the ONGLET_DEPUIS_2 field */
    const ONGLET_DEPUIS_2 = 'configuration_organsime.ONGLET_DEPUIS_2';

    /** the column name for the NOMBRE_REOUVERTURE field */
    const NOMBRE_REOUVERTURE = 'configuration_organsime.NOMBRE_REOUVERTURE';

    /** the column name for the CENTRE_APPEL field */
    const CENTRE_APPEL = 'configuration_organsime.CENTRE_APPEL';

    /** the column name for the URL_WS_CA field */
    const URL_WS_CA = 'configuration_organsime.URL_WS_CA';

    /** the column name for the AUTHENTIFICATION_LDAP field */
    const AUTHENTIFICATION_LDAP = 'configuration_organsime.AUTHENTIFICATION_LDAP';

    /** the column name for the IP_LDAP field */
    const IP_LDAP = 'configuration_organsime.IP_LDAP';

    /** the column name for the BASE_DN_LDAP field */
    const BASE_DN_LDAP = 'configuration_organsime.BASE_DN_LDAP';

    /** the column name for the USER_LDAP field */
    const USER_LDAP = 'configuration_organsime.USER_LDAP';

    /** the column name for the PASSWORD_LDAP field */
    const PASSWORD_LDAP = 'configuration_organsime.PASSWORD_LDAP';

    /** the column name for the SCHEMA_LDAP field */
    const SCHEMA_LDAP = 'configuration_organsime.SCHEMA_LDAP';

    /** the column name for the PORT_LDAP field */
    const PORT_LDAP = 'configuration_organsime.PORT_LDAP';

    /** the column name for the PROLONGATION field */
    const PROLONGATION = 'configuration_organsime.PROLONGATION';

    /** the column name for the DUREE_PROLONGATION field */
    const DUREE_PROLONGATION = 'configuration_organsime.DUREE_PROLONGATION';

    /** the column name for the ORGANISME_PARAMETRAGE field */
    const ORGANISME_PARAMETRAGE = 'configuration_organsime.ORGANISME_PARAMETRAGE';

    /** the column name for the ORGANISME_GESTION_UTILISATEURS field */
    const ORGANISME_GESTION_UTILISATEURS = 'configuration_organsime.ORGANISME_GESTION_UTILISATEURS';

    /** the column name for the TYPE_GESTION_UTILISATEUR field */
    const TYPE_GESTION_UTILISATEUR = 'configuration_organsime.TYPE_GESTION_UTILISATEUR';

    /** the column name for the MULTI_AFFECTATION field */
    const MULTI_AFFECTATION = 'configuration_organsime.MULTI_AFFECTATION';

    /** the column name for the TAUX_ECHEANCE field */
    const TAUX_ECHEANCE = 'configuration_organsime.TAUX_ECHEANCE';

    /** the column name for the REPONSE_AFFECTATION_EXTERNE field */
    const REPONSE_AFFECTATION_EXTERNE = 'configuration_organsime.REPONSE_AFFECTATION_EXTERNE';

    /** the column name for the INCREMENT_CONFIDENTIEL field */
    const INCREMENT_CONFIDENTIEL = 'configuration_organsime.INCREMENT_CONFIDENTIEL';

    /** the column name for the OBLIGATION_EMETTEUR_COURRIER_ENTRANT field */
    const OBLIGATION_EMETTEUR_COURRIER_ENTRANT = 'configuration_organsime.OBLIGATION_EMETTEUR_COURRIER_ENTRANT';

    /** the column name for the OBLIGATION_EMETTEUR_COURRIER_INTERNE field */
    const OBLIGATION_EMETTEUR_COURRIER_INTERNE = 'configuration_organsime.OBLIGATION_EMETTEUR_COURRIER_INTERNE';

    /** the column name for the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT field */
    const OBLIGATION_DESTINATAIRE_COURRIER_SORTANT = 'configuration_organsime.OBLIGATION_DESTINATAIRE_COURRIER_SORTANT';

    /** the column name for the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT field */
    const OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT = 'configuration_organsime.OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT';

    /** the column name for the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE field */
    const OBLIGATION_DESTINATAIRE_COURRIER_INTERNE = 'configuration_organsime.OBLIGATION_DESTINATAIRE_COURRIER_INTERNE';

    /** the column name for the OBLIGATION_OBJET field */
    const OBLIGATION_OBJET = 'configuration_organsime.OBLIGATION_OBJET';

    /** the column name for the OBLIGATION_SIGNATAIRE field */
    const OBLIGATION_SIGNATAIRE = 'configuration_organsime.OBLIGATION_SIGNATAIRE';

    /** the column name for the GESTION_DEMANDEURS field */
    const GESTION_DEMANDEURS = 'configuration_organsime.GESTION_DEMANDEURS';

    /** the column name for the NUMERO_FOURNISSEUR field */
    const NUMERO_FOURNISSEUR = 'configuration_organsime.NUMERO_FOURNISSEUR';

    /** the column name for the TYPE_DELAI field */
    const TYPE_DELAI = 'configuration_organsime.TYPE_DELAI';

    /** the column name for the NUM_PROVISOIRE field */
    const NUM_PROVISOIRE = 'configuration_organsime.NUM_PROVISOIRE';

    /** The enumerated values for the mode_affectation_demande field */
    const MODE_AFFECTATION_DEMANDE_1 = '1';
    const MODE_AFFECTATION_DEMANDE_2 = '2';
    const MODE_AFFECTATION_DEMANDE_3 = '3';

    /** The enumerated values for the module_entite_lie_lieu field */
    const MODULE_ENTITE_LIE_LIEU_0 = '0';
    const MODULE_ENTITE_LIE_LIEU_1 = '1';

    /** The enumerated values for the OBLIGATION_LIEU_DEMANDE field */
    const OBLIGATION_LIEU_DEMANDE_0 = '0';
    const OBLIGATION_LIEU_DEMANDE_1 = '1';

    /** The enumerated values for the MODULE_GOOGLE_MAPS field */
    const MODULE_GOOGLE_MAPS_0 = '0';
    const MODULE_GOOGLE_MAPS_1 = '1';

    /** The enumerated values for the VISIBILITE_CHAMP_LOCALISATION field */
    const VISIBILITE_CHAMP_LOCALISATION_0 = '0';
    const VISIBILITE_CHAMP_LOCALISATION_1 = '1';

    /** The enumerated values for the ECHANGE_WEB_SERVICE field */
    const ECHANGE_WEB_SERVICE_0 = '0';
    const ECHANGE_WEB_SERVICE_1 = '1';

    /** The enumerated values for the OBLIGATION_NOM_PRENOM_REQUERANT field */
    const OBLIGATION_NOM_PRENOM_REQUERANT_0 = '0';
    const OBLIGATION_NOM_PRENOM_REQUERANT_1 = '1';

    /** The enumerated values for the OBLIGATION_NOM_ORGANISME_REQUERANT field */
    const OBLIGATION_NOM_ORGANISME_REQUERANT_0 = '0';
    const OBLIGATION_NOM_ORGANISME_REQUERANT_1 = '1';

    /** The enumerated values for the OBLIGATION_REGISTRE_COMMERCE_REQUERANT field */
    const OBLIGATION_REGISTRE_COMMERCE_REQUERANT_0 = '0';
    const OBLIGATION_REGISTRE_COMMERCE_REQUERANT_1 = '1';

    /** The enumerated values for the OBLIGATION_TELEPHONE_REQUERANT field */
    const OBLIGATION_TELEPHONE_REQUERANT_0 = '0';
    const OBLIGATION_TELEPHONE_REQUERANT_1 = '1';

    /** The enumerated values for the VISIBILITE_REGISTRE_COMMERCE_REQUERANT field */
    const VISIBILITE_REGISTRE_COMMERCE_REQUERANT_0 = '0';
    const VISIBILITE_REGISTRE_COMMERCE_REQUERANT_1 = '1';

    /** The enumerated values for the VISIBILITE_IDENTIFIANT_FISCAL field */
    const VISIBILITE_IDENTIFIANT_FISCAL_0 = '0';
    const VISIBILITE_IDENTIFIANT_FISCAL_1 = '1';

    /** The enumerated values for the OBLIGATION_IDENTIFIANT_FISCAL field */
    const OBLIGATION_IDENTIFIANT_FISCAL_0 = '0';
    const OBLIGATION_IDENTIFIANT_FISCAL_1 = '1';

    /** The enumerated values for the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE field */
    const VISIBILITE_BLOC_REPONSE_OBLIGATOIRE_0 = '0';
    const VISIBILITE_BLOC_REPONSE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the VISIBILITE_BLOC_LIEU_CONCERNE field */
    const VISIBILITE_BLOC_LIEU_CONCERNE_0 = '0';
    const VISIBILITE_BLOC_LIEU_CONCERNE_1 = '1';

    /** The enumerated values for the OBLIGATION_MESSAGE_DEMANDE field */
    const OBLIGATION_MESSAGE_DEMANDE_0 = '0';
    const OBLIGATION_MESSAGE_DEMANDE_1 = '1';

    /** The enumerated values for the OBLIGATION_EMAIL_DEMANDEUR field */
    const OBLIGATION_EMAIL_DEMANDEUR_0 = '0';
    const OBLIGATION_EMAIL_DEMANDEUR_1 = '1';

    /** The enumerated values for the OBLIGATION_SOUS_THEME field */
    const OBLIGATION_SOUS_THEME_0 = '0';
    const OBLIGATION_SOUS_THEME_1 = '1';

    /** The enumerated values for the VISIBLITIE_CONDITION_UTILISATION field */
    const VISIBLITIE_CONDITION_UTILISATION_0 = '0';
    const VISIBLITIE_CONDITION_UTILISATION_1 = '1';

    /** The enumerated values for the GESTION_DEMANDEUR_PAR_ENTITE field */
    const GESTION_DEMANDEUR_PAR_ENTITE_0 = '0';
    const GESTION_DEMANDEUR_PAR_ENTITE_1 = '1';

    /** The enumerated values for the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE field */
    const VALEUR_DEFAUT_REPONSE_OBLIGATOIRE_0 = '0';
    const VALEUR_DEFAUT_REPONSE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the ACCES_EXTRANET field */
    const ACCES_EXTRANET_0 = '0';
    const ACCES_EXTRANET_1 = '1';

    /** The enumerated values for the LANGUE_PAR_DEFAUT_EXTRANET field */
    const LANGUE_PAR_DEFAUT_EXTRANET_FR = 'fr';
    const LANGUE_PAR_DEFAUT_EXTRANET_AR = 'ar';

    /** The enumerated values for the CHIFFREMENT field */
    const CHIFFREMENT_0 = '0';
    const CHIFFREMENT_1 = '1';

    /** The enumerated values for the SERVICE_NOTIFICATION_SMS field */
    const SERVICE_NOTIFICATION_SMS_0 = '0';
    const SERVICE_NOTIFICATION_SMS_1 = '1';

    /** The enumerated values for the CIRCUIT_VALIDATION field */
    const CIRCUIT_VALIDATION_0 = '0';
    const CIRCUIT_VALIDATION_1 = '1';

    /** The enumerated values for the VISIBILITE_MESSAGE_DEMANDE field */
    const VISIBILITE_MESSAGE_DEMANDE_0 = '0';
    const VISIBILITE_MESSAGE_DEMANDE_1 = '1';

    /** The enumerated values for the ACCES_STATISTIQUES field */
    const ACCES_STATISTIQUES_0 = '0';
    const ACCES_STATISTIQUES_1 = '1';

    /** The enumerated values for the WEBSERVICE_DEMANDE field */
    const WEBSERVICE_DEMANDE_0 = '0';
    const WEBSERVICE_DEMANDE_1 = '1';

    /** The enumerated values for the SCANNER field */
    const SCANNER_0 = '0';
    const SCANNER_1 = '1';

    /** The enumerated values for the ACTIVATION_AUTH_SOCLE field */
    const ACTIVATION_AUTH_SOCLE_0 = '0';
    const ACTIVATION_AUTH_SOCLE_1 = '1';

    /** The enumerated values for the AFFICHAGE_ENREGISTRER_GENERER_NUMERO field */
    const AFFICHAGE_ENREGISTRER_GENERER_NUMERO_0 = '0';
    const AFFICHAGE_ENREGISTRER_GENERER_NUMERO_1 = '1';

    /** The enumerated values for the CENTRE_APPEL field */
    const CENTRE_APPEL_0 = '0';
    const CENTRE_APPEL_1 = '1';

    /** The enumerated values for the AUTHENTIFICATION_LDAP field */
    const AUTHENTIFICATION_LDAP_0 = '0';
    const AUTHENTIFICATION_LDAP_1 = '1';

    /** The enumerated values for the PROLONGATION field */
    const PROLONGATION_0 = '0';
    const PROLONGATION_1 = '1';

    /** The enumerated values for the TYPE_GESTION_UTILISATEUR field */
    const TYPE_GESTION_UTILISATEUR_0 = '0';
    const TYPE_GESTION_UTILISATEUR_1 = '1';

    /** The enumerated values for the MULTI_AFFECTATION field */
    const MULTI_AFFECTATION_0 = '0';
    const MULTI_AFFECTATION_1 = '1';

    /** The enumerated values for the REPONSE_AFFECTATION_EXTERNE field */
    const REPONSE_AFFECTATION_EXTERNE_0 = '0';
    const REPONSE_AFFECTATION_EXTERNE_1 = '1';

    /** The enumerated values for the INCREMENT_CONFIDENTIEL field */
    const INCREMENT_CONFIDENTIEL_0 = '0';
    const INCREMENT_CONFIDENTIEL_1 = '1';

    /** The enumerated values for the OBLIGATION_EMETTEUR_COURRIER_ENTRANT field */
    const OBLIGATION_EMETTEUR_COURRIER_ENTRANT_0 = '0';
    const OBLIGATION_EMETTEUR_COURRIER_ENTRANT_1 = '1';

    /** The enumerated values for the OBLIGATION_EMETTEUR_COURRIER_INTERNE field */
    const OBLIGATION_EMETTEUR_COURRIER_INTERNE_0 = '0';
    const OBLIGATION_EMETTEUR_COURRIER_INTERNE_1 = '1';

    /** The enumerated values for the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT field */
    const OBLIGATION_DESTINATAIRE_COURRIER_SORTANT_0 = '0';
    const OBLIGATION_DESTINATAIRE_COURRIER_SORTANT_1 = '1';

    /** The enumerated values for the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT field */
    const OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT_0 = '0';
    const OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT_1 = '1';

    /** The enumerated values for the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE field */
    const OBLIGATION_DESTINATAIRE_COURRIER_INTERNE_0 = '0';
    const OBLIGATION_DESTINATAIRE_COURRIER_INTERNE_1 = '1';

    /** The enumerated values for the OBLIGATION_OBJET field */
    const OBLIGATION_OBJET_0 = '0';
    const OBLIGATION_OBJET_1 = '1';

    /** The enumerated values for the OBLIGATION_SIGNATAIRE field */
    const OBLIGATION_SIGNATAIRE_0 = '0';
    const OBLIGATION_SIGNATAIRE_1 = '1';

    /** The enumerated values for the GESTION_DEMANDEURS field */
    const GESTION_DEMANDEURS_0 = '0';
    const GESTION_DEMANDEURS_1 = '1';

    /** The enumerated values for the NUMERO_FOURNISSEUR field */
    const NUMERO_FOURNISSEUR_0 = '0';
    const NUMERO_FOURNISSEUR_1 = '1';

    /** The enumerated values for the TYPE_DELAI field */
    const TYPE_DELAI_1 = '1';
    const TYPE_DELAI_2 = '2';

    /** The enumerated values for the NUM_PROVISOIRE field */
    const NUM_PROVISOIRE_0 = '0';
    const NUM_PROVISOIRE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ConfigurationOrgansime objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ConfigurationOrgansime[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ConfigurationOrgansimePeer::$fieldNames[ConfigurationOrgansimePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NiveauLieu', 'ValeurDefautPays', 'ValeurDefautRegion', 'ValeurDefautProvince', 'ValeurParDefautCommune', 'ModeAffectationDemande', 'ModuleEntiteLieLieu', 'NbrJourDelaiTraitement', 'ObligationLieuDemande', 'ModuleGoogleMaps', 'VisibiliteChampLocalisation', 'EchangeWebService', 'IdEntite', 'ObligationNomPrenomRequerant', 'ObligationNomOrganismeRequerant', 'ObligationRegistreCommerceRequerant', 'ObligationTelephoneRequerant', 'VisibiliteRegistreCommerceRequerant', 'VisibiliteIdentifiantFiscal', 'ObligationIdentifiantFiscal', 'DelaiClotureDemande', 'NotificationAvantDateReponse', 'BorneTraitementDemande', 'RegleNumeroDemandeEntrant', 'RegleNumeroDemandeSortant', 'RegleNumeroDemandeInterne', 'VisibiliteBlocReponseObligatoire', 'VisibiliteBlocLieuConcerne', 'ObligationMessageDemande', 'ObligationEmailDemandeur', 'ObligationSousTheme', 'VisiblitieConditionUtilisation', 'ConditionUtilisationAr', 'ConditionUtilisationFr', 'GestionDemandeurParEntite', 'ValeurDefautTypeDemande', 'ValeurDefautReponseObligatoire', 'AccesExtranet', 'LangueParDefautExtranet', 'GoogleAnalytics', 'Chiffrement', 'IdEntiteCentrale', 'ServiceNotificationSms', 'LoginServiceSms', 'PassServiceSms', 'CodeEnvoiSms', 'UrlServiceSms', 'CircuitValidation', 'VisibiliteMessageDemande', 'CodeSignataireCertificat', 'AccesStatistiques', 'WebserviceDemande', 'UrlWebserviceDemande', 'JetonWebservice', 'IdentifiantEntiteReception', 'IdentifiantSousTheme', 'Scanner', 'ActivationAuthSocle', 'AffichageEnregistrerGenererNumero', 'JetonOrgService', 'OngletDepuis1', 'OngletDepuis2', 'NombreReouverture', 'CentreAppel', 'UrlWsCa', 'AuthentificationLdap', 'IpLdap', 'BaseDnLdap', 'UserLdap', 'PasswordLdap', 'SchemaLdap', 'PortLdap', 'Prolongation', 'DureeProlongation', 'OrganismeParametrage', 'OrganismeGestionUtilisateurs', 'TypeGestionUtilisateur', 'MultiAffectation', 'TauxEcheance', 'ReponseAffectationExterne', 'IncrementConfidentiel', 'ObligationEmetteurCourrierEntrant', 'ObligationEmetteurCourrierInterne', 'ObligationDestinataireCourrierSortant', 'ObligationDestinataireMentionneCourrierEntrant', 'ObligationDestinataireCourrierInterne', 'ObligationObjet', 'ObligationSignataire', 'GestionDemandeurs', 'NumeroFournisseur', 'TypeDelai', 'NumProvisoire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'niveauLieu', 'valeurDefautPays', 'valeurDefautRegion', 'valeurDefautProvince', 'valeurParDefautCommune', 'modeAffectationDemande', 'moduleEntiteLieLieu', 'nbrJourDelaiTraitement', 'obligationLieuDemande', 'moduleGoogleMaps', 'visibiliteChampLocalisation', 'echangeWebService', 'idEntite', 'obligationNomPrenomRequerant', 'obligationNomOrganismeRequerant', 'obligationRegistreCommerceRequerant', 'obligationTelephoneRequerant', 'visibiliteRegistreCommerceRequerant', 'visibiliteIdentifiantFiscal', 'obligationIdentifiantFiscal', 'delaiClotureDemande', 'notificationAvantDateReponse', 'borneTraitementDemande', 'regleNumeroDemandeEntrant', 'regleNumeroDemandeSortant', 'regleNumeroDemandeInterne', 'visibiliteBlocReponseObligatoire', 'visibiliteBlocLieuConcerne', 'obligationMessageDemande', 'obligationEmailDemandeur', 'obligationSousTheme', 'visiblitieConditionUtilisation', 'conditionUtilisationAr', 'conditionUtilisationFr', 'gestionDemandeurParEntite', 'valeurDefautTypeDemande', 'valeurDefautReponseObligatoire', 'accesExtranet', 'langueParDefautExtranet', 'googleAnalytics', 'chiffrement', 'idEntiteCentrale', 'serviceNotificationSms', 'loginServiceSms', 'passServiceSms', 'codeEnvoiSms', 'urlServiceSms', 'circuitValidation', 'visibiliteMessageDemande', 'codeSignataireCertificat', 'accesStatistiques', 'webserviceDemande', 'urlWebserviceDemande', 'jetonWebservice', 'identifiantEntiteReception', 'identifiantSousTheme', 'scanner', 'activationAuthSocle', 'affichageEnregistrerGenererNumero', 'jetonOrgService', 'ongletDepuis1', 'ongletDepuis2', 'nombreReouverture', 'centreAppel', 'urlWsCa', 'authentificationLdap', 'ipLdap', 'baseDnLdap', 'userLdap', 'passwordLdap', 'schemaLdap', 'portLdap', 'prolongation', 'dureeProlongation', 'organismeParametrage', 'organismeGestionUtilisateurs', 'typeGestionUtilisateur', 'multiAffectation', 'tauxEcheance', 'reponseAffectationExterne', 'incrementConfidentiel', 'obligationEmetteurCourrierEntrant', 'obligationEmetteurCourrierInterne', 'obligationDestinataireCourrierSortant', 'obligationDestinataireMentionneCourrierEntrant', 'obligationDestinataireCourrierInterne', 'obligationObjet', 'obligationSignataire', 'gestionDemandeurs', 'numeroFournisseur', 'typeDelai', 'numProvisoire', ),
        BasePeer::TYPE_COLNAME => array (ConfigurationOrgansimePeer::ID, ConfigurationOrgansimePeer::NIVEAU_LIEU, ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS, ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION, ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE, ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE, ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE, ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU, ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT, ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE, ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS, ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION, ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE, ConfigurationOrgansimePeer::ID_ENTITE, ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT, ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT, ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT, ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT, ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT, ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL, ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL, ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE, ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE, ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE, ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE, ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE, ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE, ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR, ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME, ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION, ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR, ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR, ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE, ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE, ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE, ConfigurationOrgansimePeer::ACCES_EXTRANET, ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET, ConfigurationOrgansimePeer::GOOGLE_ANALYTICS, ConfigurationOrgansimePeer::CHIFFREMENT, ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE, ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS, ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS, ConfigurationOrgansimePeer::PASS_SERVICE_SMS, ConfigurationOrgansimePeer::CODE_ENVOI_SMS, ConfigurationOrgansimePeer::URL_SERVICE_SMS, ConfigurationOrgansimePeer::CIRCUIT_VALIDATION, ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE, ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT, ConfigurationOrgansimePeer::ACCES_STATISTIQUES, ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE, ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE, ConfigurationOrgansimePeer::JETON_WEBSERVICE, ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION, ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME, ConfigurationOrgansimePeer::SCANNER, ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE, ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO, ConfigurationOrgansimePeer::JETON_ORG_SERVICE, ConfigurationOrgansimePeer::ONGLET_DEPUIS_1, ConfigurationOrgansimePeer::ONGLET_DEPUIS_2, ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE, ConfigurationOrgansimePeer::CENTRE_APPEL, ConfigurationOrgansimePeer::URL_WS_CA, ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP, ConfigurationOrgansimePeer::IP_LDAP, ConfigurationOrgansimePeer::BASE_DN_LDAP, ConfigurationOrgansimePeer::USER_LDAP, ConfigurationOrgansimePeer::PASSWORD_LDAP, ConfigurationOrgansimePeer::SCHEMA_LDAP, ConfigurationOrgansimePeer::PORT_LDAP, ConfigurationOrgansimePeer::PROLONGATION, ConfigurationOrgansimePeer::DUREE_PROLONGATION, ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE, ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS, ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR, ConfigurationOrgansimePeer::MULTI_AFFECTATION, ConfigurationOrgansimePeer::TAUX_ECHEANCE, ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE, ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL, ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT, ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE, ConfigurationOrgansimePeer::OBLIGATION_OBJET, ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE, ConfigurationOrgansimePeer::GESTION_DEMANDEURS, ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR, ConfigurationOrgansimePeer::TYPE_DELAI, ConfigurationOrgansimePeer::NUM_PROVISOIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NIVEAU_LIEU', 'VALEUR_DEFAUT_PAYS', 'VALEUR_DEFAUT_REGION', 'VALEUR_DEFAUT_PROVINCE', 'VALEUR_PAR_DEFAUT_COMMUNE', 'MODE_AFFECTATION_DEMANDE', 'MODULE_ENTITE_LIE_LIEU', 'NBR_JOUR_DELAI_TRAITEMENT', 'OBLIGATION_LIEU_DEMANDE', 'MODULE_GOOGLE_MAPS', 'VISIBILITE_CHAMP_LOCALISATION', 'ECHANGE_WEB_SERVICE', 'ID_ENTITE', 'OBLIGATION_NOM_PRENOM_REQUERANT', 'OBLIGATION_NOM_ORGANISME_REQUERANT', 'OBLIGATION_REGISTRE_COMMERCE_REQUERANT', 'OBLIGATION_TELEPHONE_REQUERANT', 'VISIBILITE_REGISTRE_COMMERCE_REQUERANT', 'VISIBILITE_IDENTIFIANT_FISCAL', 'OBLIGATION_IDENTIFIANT_FISCAL', 'DELAI_CLOTURE_DEMANDE', 'NOTIFICATION_AVANT_DATE_REPONSE', 'BORNE_TRAITEMENT_DEMANDE', 'REGLE_NUMERO_DEMANDE_ENTRANT', 'REGLE_NUMERO_DEMANDE_SORTANT', 'REGLE_NUMERO_DEMANDE_INTERNE', 'VISIBILITE_BLOC_REPONSE_OBLIGATOIRE', 'VISIBILITE_BLOC_LIEU_CONCERNE', 'OBLIGATION_MESSAGE_DEMANDE', 'OBLIGATION_EMAIL_DEMANDEUR', 'OBLIGATION_SOUS_THEME', 'VISIBLITIE_CONDITION_UTILISATION', 'CONDITION_UTILISATION_AR', 'CONDITION_UTILISATION_FR', 'GESTION_DEMANDEUR_PAR_ENTITE', 'VALEUR_DEFAUT_TYPE_DEMANDE', 'VALEUR_DEFAUT_REPONSE_OBLIGATOIRE', 'ACCES_EXTRANET', 'LANGUE_PAR_DEFAUT_EXTRANET', 'GOOGLE_ANALYTICS', 'CHIFFREMENT', 'ID_ENTITE_CENTRALE', 'SERVICE_NOTIFICATION_SMS', 'LOGIN_SERVICE_SMS', 'PASS_SERVICE_SMS', 'CODE_ENVOI_SMS', 'URL_SERVICE_SMS', 'CIRCUIT_VALIDATION', 'VISIBILITE_MESSAGE_DEMANDE', 'CODE_SIGNATAIRE_CERTIFICAT', 'ACCES_STATISTIQUES', 'WEBSERVICE_DEMANDE', 'URL_WEBSERVICE_DEMANDE', 'JETON_WEBSERVICE', 'IDENTIFIANT_ENTITE_RECEPTION', 'IDENTIFIANT_SOUS_THEME', 'SCANNER', 'ACTIVATION_AUTH_SOCLE', 'AFFICHAGE_ENREGISTRER_GENERER_NUMERO', 'JETON_ORG_SERVICE', 'ONGLET_DEPUIS_1', 'ONGLET_DEPUIS_2', 'NOMBRE_REOUVERTURE', 'CENTRE_APPEL', 'URL_WS_CA', 'AUTHENTIFICATION_LDAP', 'IP_LDAP', 'BASE_DN_LDAP', 'USER_LDAP', 'PASSWORD_LDAP', 'SCHEMA_LDAP', 'PORT_LDAP', 'PROLONGATION', 'DUREE_PROLONGATION', 'ORGANISME_PARAMETRAGE', 'ORGANISME_GESTION_UTILISATEURS', 'TYPE_GESTION_UTILISATEUR', 'MULTI_AFFECTATION', 'TAUX_ECHEANCE', 'REPONSE_AFFECTATION_EXTERNE', 'INCREMENT_CONFIDENTIEL', 'OBLIGATION_EMETTEUR_COURRIER_ENTRANT', 'OBLIGATION_EMETTEUR_COURRIER_INTERNE', 'OBLIGATION_DESTINATAIRE_COURRIER_SORTANT', 'OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT', 'OBLIGATION_DESTINATAIRE_COURRIER_INTERNE', 'OBLIGATION_OBJET', 'OBLIGATION_SIGNATAIRE', 'GESTION_DEMANDEURS', 'NUMERO_FOURNISSEUR', 'TYPE_DELAI', 'NUM_PROVISOIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'niveau_lieu', 'valeur_defaut_pays', 'valeur_defaut_region', 'valeur_defaut_province', 'valeur_par_defaut_commune', 'mode_affectation_demande', 'module_entite_lie_lieu', 'NBR_JOUR_DELAI_TRAITEMENT', 'OBLIGATION_LIEU_DEMANDE', 'MODULE_GOOGLE_MAPS', 'VISIBILITE_CHAMP_LOCALISATION', 'ECHANGE_WEB_SERVICE', 'ID_ENTITE', 'OBLIGATION_NOM_PRENOM_REQUERANT', 'OBLIGATION_NOM_ORGANISME_REQUERANT', 'OBLIGATION_REGISTRE_COMMERCE_REQUERANT', 'OBLIGATION_TELEPHONE_REQUERANT', 'VISIBILITE_REGISTRE_COMMERCE_REQUERANT', 'VISIBILITE_IDENTIFIANT_FISCAL', 'OBLIGATION_IDENTIFIANT_FISCAL', 'DELAI_CLOTURE_DEMANDE', 'NOTIFICATION_AVANT_DATE_REPONSE', 'BORNE_TRAITEMENT_DEMANDE', 'REGLE_NUMERO_DEMANDE_ENTRANT', 'REGLE_NUMERO_DEMANDE_SORTANT', 'REGLE_NUMERO_DEMANDE_INTERNE', 'VISIBILITE_BLOC_REPONSE_OBLIGATOIRE', 'VISIBILITE_BLOC_LIEU_CONCERNE', 'OBLIGATION_MESSAGE_DEMANDE', 'OBLIGATION_EMAIL_DEMANDEUR', 'OBLIGATION_SOUS_THEME', 'VISIBLITIE_CONDITION_UTILISATION', 'CONDITION_UTILISATION_AR', 'CONDITION_UTILISATION_FR', 'GESTION_DEMANDEUR_PAR_ENTITE', 'VALEUR_DEFAUT_TYPE_DEMANDE', 'VALEUR_DEFAUT_REPONSE_OBLIGATOIRE', 'ACCES_EXTRANET', 'LANGUE_PAR_DEFAUT_EXTRANET', 'GOOGLE_ANALYTICS', 'CHIFFREMENT', 'ID_ENTITE_CENTRALE', 'SERVICE_NOTIFICATION_SMS', 'LOGIN_SERVICE_SMS', 'PASS_SERVICE_SMS', 'CODE_ENVOI_SMS', 'URL_SERVICE_SMS', 'CIRCUIT_VALIDATION', 'VISIBILITE_MESSAGE_DEMANDE', 'CODE_SIGNATAIRE_CERTIFICAT', 'ACCES_STATISTIQUES', 'WEBSERVICE_DEMANDE', 'URL_WEBSERVICE_DEMANDE', 'JETON_WEBSERVICE', 'IDENTIFIANT_ENTITE_RECEPTION', 'IDENTIFIANT_SOUS_THEME', 'SCANNER', 'ACTIVATION_AUTH_SOCLE', 'AFFICHAGE_ENREGISTRER_GENERER_NUMERO', 'JETON_ORG_SERVICE', 'ONGLET_DEPUIS_1', 'ONGLET_DEPUIS_2', 'NOMBRE_REOUVERTURE', 'CENTRE_APPEL', 'URL_WS_CA', 'AUTHENTIFICATION_LDAP', 'IP_LDAP', 'BASE_DN_LDAP', 'USER_LDAP', 'PASSWORD_LDAP', 'SCHEMA_LDAP', 'PORT_LDAP', 'PROLONGATION', 'DUREE_PROLONGATION', 'ORGANISME_PARAMETRAGE', 'ORGANISME_GESTION_UTILISATEURS', 'TYPE_GESTION_UTILISATEUR', 'MULTI_AFFECTATION', 'TAUX_ECHEANCE', 'REPONSE_AFFECTATION_EXTERNE', 'INCREMENT_CONFIDENTIEL', 'OBLIGATION_EMETTEUR_COURRIER_ENTRANT', 'OBLIGATION_EMETTEUR_COURRIER_INTERNE', 'OBLIGATION_DESTINATAIRE_COURRIER_SORTANT', 'OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT', 'OBLIGATION_DESTINATAIRE_COURRIER_INTERNE', 'OBLIGATION_OBJET', 'OBLIGATION_SIGNATAIRE', 'GESTION_DEMANDEURS', 'NUMERO_FOURNISSEUR', 'TYPE_DELAI', 'NUM_PROVISOIRE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ConfigurationOrgansimePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NiveauLieu' => 1, 'ValeurDefautPays' => 2, 'ValeurDefautRegion' => 3, 'ValeurDefautProvince' => 4, 'ValeurParDefautCommune' => 5, 'ModeAffectationDemande' => 6, 'ModuleEntiteLieLieu' => 7, 'NbrJourDelaiTraitement' => 8, 'ObligationLieuDemande' => 9, 'ModuleGoogleMaps' => 10, 'VisibiliteChampLocalisation' => 11, 'EchangeWebService' => 12, 'IdEntite' => 13, 'ObligationNomPrenomRequerant' => 14, 'ObligationNomOrganismeRequerant' => 15, 'ObligationRegistreCommerceRequerant' => 16, 'ObligationTelephoneRequerant' => 17, 'VisibiliteRegistreCommerceRequerant' => 18, 'VisibiliteIdentifiantFiscal' => 19, 'ObligationIdentifiantFiscal' => 20, 'DelaiClotureDemande' => 21, 'NotificationAvantDateReponse' => 22, 'BorneTraitementDemande' => 23, 'RegleNumeroDemandeEntrant' => 24, 'RegleNumeroDemandeSortant' => 25, 'RegleNumeroDemandeInterne' => 26, 'VisibiliteBlocReponseObligatoire' => 27, 'VisibiliteBlocLieuConcerne' => 28, 'ObligationMessageDemande' => 29, 'ObligationEmailDemandeur' => 30, 'ObligationSousTheme' => 31, 'VisiblitieConditionUtilisation' => 32, 'ConditionUtilisationAr' => 33, 'ConditionUtilisationFr' => 34, 'GestionDemandeurParEntite' => 35, 'ValeurDefautTypeDemande' => 36, 'ValeurDefautReponseObligatoire' => 37, 'AccesExtranet' => 38, 'LangueParDefautExtranet' => 39, 'GoogleAnalytics' => 40, 'Chiffrement' => 41, 'IdEntiteCentrale' => 42, 'ServiceNotificationSms' => 43, 'LoginServiceSms' => 44, 'PassServiceSms' => 45, 'CodeEnvoiSms' => 46, 'UrlServiceSms' => 47, 'CircuitValidation' => 48, 'VisibiliteMessageDemande' => 49, 'CodeSignataireCertificat' => 50, 'AccesStatistiques' => 51, 'WebserviceDemande' => 52, 'UrlWebserviceDemande' => 53, 'JetonWebservice' => 54, 'IdentifiantEntiteReception' => 55, 'IdentifiantSousTheme' => 56, 'Scanner' => 57, 'ActivationAuthSocle' => 58, 'AffichageEnregistrerGenererNumero' => 59, 'JetonOrgService' => 60, 'OngletDepuis1' => 61, 'OngletDepuis2' => 62, 'NombreReouverture' => 63, 'CentreAppel' => 64, 'UrlWsCa' => 65, 'AuthentificationLdap' => 66, 'IpLdap' => 67, 'BaseDnLdap' => 68, 'UserLdap' => 69, 'PasswordLdap' => 70, 'SchemaLdap' => 71, 'PortLdap' => 72, 'Prolongation' => 73, 'DureeProlongation' => 74, 'OrganismeParametrage' => 75, 'OrganismeGestionUtilisateurs' => 76, 'TypeGestionUtilisateur' => 77, 'MultiAffectation' => 78, 'TauxEcheance' => 79, 'ReponseAffectationExterne' => 80, 'IncrementConfidentiel' => 81, 'ObligationEmetteurCourrierEntrant' => 82, 'ObligationEmetteurCourrierInterne' => 83, 'ObligationDestinataireCourrierSortant' => 84, 'ObligationDestinataireMentionneCourrierEntrant' => 85, 'ObligationDestinataireCourrierInterne' => 86, 'ObligationObjet' => 87, 'ObligationSignataire' => 88, 'GestionDemandeurs' => 89, 'NumeroFournisseur' => 90, 'TypeDelai' => 91, 'NumProvisoire' => 92, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'niveauLieu' => 1, 'valeurDefautPays' => 2, 'valeurDefautRegion' => 3, 'valeurDefautProvince' => 4, 'valeurParDefautCommune' => 5, 'modeAffectationDemande' => 6, 'moduleEntiteLieLieu' => 7, 'nbrJourDelaiTraitement' => 8, 'obligationLieuDemande' => 9, 'moduleGoogleMaps' => 10, 'visibiliteChampLocalisation' => 11, 'echangeWebService' => 12, 'idEntite' => 13, 'obligationNomPrenomRequerant' => 14, 'obligationNomOrganismeRequerant' => 15, 'obligationRegistreCommerceRequerant' => 16, 'obligationTelephoneRequerant' => 17, 'visibiliteRegistreCommerceRequerant' => 18, 'visibiliteIdentifiantFiscal' => 19, 'obligationIdentifiantFiscal' => 20, 'delaiClotureDemande' => 21, 'notificationAvantDateReponse' => 22, 'borneTraitementDemande' => 23, 'regleNumeroDemandeEntrant' => 24, 'regleNumeroDemandeSortant' => 25, 'regleNumeroDemandeInterne' => 26, 'visibiliteBlocReponseObligatoire' => 27, 'visibiliteBlocLieuConcerne' => 28, 'obligationMessageDemande' => 29, 'obligationEmailDemandeur' => 30, 'obligationSousTheme' => 31, 'visiblitieConditionUtilisation' => 32, 'conditionUtilisationAr' => 33, 'conditionUtilisationFr' => 34, 'gestionDemandeurParEntite' => 35, 'valeurDefautTypeDemande' => 36, 'valeurDefautReponseObligatoire' => 37, 'accesExtranet' => 38, 'langueParDefautExtranet' => 39, 'googleAnalytics' => 40, 'chiffrement' => 41, 'idEntiteCentrale' => 42, 'serviceNotificationSms' => 43, 'loginServiceSms' => 44, 'passServiceSms' => 45, 'codeEnvoiSms' => 46, 'urlServiceSms' => 47, 'circuitValidation' => 48, 'visibiliteMessageDemande' => 49, 'codeSignataireCertificat' => 50, 'accesStatistiques' => 51, 'webserviceDemande' => 52, 'urlWebserviceDemande' => 53, 'jetonWebservice' => 54, 'identifiantEntiteReception' => 55, 'identifiantSousTheme' => 56, 'scanner' => 57, 'activationAuthSocle' => 58, 'affichageEnregistrerGenererNumero' => 59, 'jetonOrgService' => 60, 'ongletDepuis1' => 61, 'ongletDepuis2' => 62, 'nombreReouverture' => 63, 'centreAppel' => 64, 'urlWsCa' => 65, 'authentificationLdap' => 66, 'ipLdap' => 67, 'baseDnLdap' => 68, 'userLdap' => 69, 'passwordLdap' => 70, 'schemaLdap' => 71, 'portLdap' => 72, 'prolongation' => 73, 'dureeProlongation' => 74, 'organismeParametrage' => 75, 'organismeGestionUtilisateurs' => 76, 'typeGestionUtilisateur' => 77, 'multiAffectation' => 78, 'tauxEcheance' => 79, 'reponseAffectationExterne' => 80, 'incrementConfidentiel' => 81, 'obligationEmetteurCourrierEntrant' => 82, 'obligationEmetteurCourrierInterne' => 83, 'obligationDestinataireCourrierSortant' => 84, 'obligationDestinataireMentionneCourrierEntrant' => 85, 'obligationDestinataireCourrierInterne' => 86, 'obligationObjet' => 87, 'obligationSignataire' => 88, 'gestionDemandeurs' => 89, 'numeroFournisseur' => 90, 'typeDelai' => 91, 'numProvisoire' => 92, ),
        BasePeer::TYPE_COLNAME => array (ConfigurationOrgansimePeer::ID => 0, ConfigurationOrgansimePeer::NIVEAU_LIEU => 1, ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS => 2, ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION => 3, ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE => 4, ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE => 5, ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE => 6, ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU => 7, ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT => 8, ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE => 9, ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS => 10, ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION => 11, ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE => 12, ConfigurationOrgansimePeer::ID_ENTITE => 13, ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT => 14, ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT => 15, ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT => 16, ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT => 17, ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT => 18, ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL => 19, ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL => 20, ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE => 21, ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE => 22, ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE => 23, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT => 24, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT => 25, ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE => 26, ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE => 27, ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE => 28, ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE => 29, ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR => 30, ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME => 31, ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION => 32, ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR => 33, ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR => 34, ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE => 35, ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE => 36, ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE => 37, ConfigurationOrgansimePeer::ACCES_EXTRANET => 38, ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET => 39, ConfigurationOrgansimePeer::GOOGLE_ANALYTICS => 40, ConfigurationOrgansimePeer::CHIFFREMENT => 41, ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE => 42, ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS => 43, ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS => 44, ConfigurationOrgansimePeer::PASS_SERVICE_SMS => 45, ConfigurationOrgansimePeer::CODE_ENVOI_SMS => 46, ConfigurationOrgansimePeer::URL_SERVICE_SMS => 47, ConfigurationOrgansimePeer::CIRCUIT_VALIDATION => 48, ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE => 49, ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT => 50, ConfigurationOrgansimePeer::ACCES_STATISTIQUES => 51, ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE => 52, ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE => 53, ConfigurationOrgansimePeer::JETON_WEBSERVICE => 54, ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION => 55, ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME => 56, ConfigurationOrgansimePeer::SCANNER => 57, ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE => 58, ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO => 59, ConfigurationOrgansimePeer::JETON_ORG_SERVICE => 60, ConfigurationOrgansimePeer::ONGLET_DEPUIS_1 => 61, ConfigurationOrgansimePeer::ONGLET_DEPUIS_2 => 62, ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE => 63, ConfigurationOrgansimePeer::CENTRE_APPEL => 64, ConfigurationOrgansimePeer::URL_WS_CA => 65, ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP => 66, ConfigurationOrgansimePeer::IP_LDAP => 67, ConfigurationOrgansimePeer::BASE_DN_LDAP => 68, ConfigurationOrgansimePeer::USER_LDAP => 69, ConfigurationOrgansimePeer::PASSWORD_LDAP => 70, ConfigurationOrgansimePeer::SCHEMA_LDAP => 71, ConfigurationOrgansimePeer::PORT_LDAP => 72, ConfigurationOrgansimePeer::PROLONGATION => 73, ConfigurationOrgansimePeer::DUREE_PROLONGATION => 74, ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE => 75, ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS => 76, ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR => 77, ConfigurationOrgansimePeer::MULTI_AFFECTATION => 78, ConfigurationOrgansimePeer::TAUX_ECHEANCE => 79, ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE => 80, ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL => 81, ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT => 82, ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE => 83, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT => 84, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT => 85, ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE => 86, ConfigurationOrgansimePeer::OBLIGATION_OBJET => 87, ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE => 88, ConfigurationOrgansimePeer::GESTION_DEMANDEURS => 89, ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR => 90, ConfigurationOrgansimePeer::TYPE_DELAI => 91, ConfigurationOrgansimePeer::NUM_PROVISOIRE => 92, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NIVEAU_LIEU' => 1, 'VALEUR_DEFAUT_PAYS' => 2, 'VALEUR_DEFAUT_REGION' => 3, 'VALEUR_DEFAUT_PROVINCE' => 4, 'VALEUR_PAR_DEFAUT_COMMUNE' => 5, 'MODE_AFFECTATION_DEMANDE' => 6, 'MODULE_ENTITE_LIE_LIEU' => 7, 'NBR_JOUR_DELAI_TRAITEMENT' => 8, 'OBLIGATION_LIEU_DEMANDE' => 9, 'MODULE_GOOGLE_MAPS' => 10, 'VISIBILITE_CHAMP_LOCALISATION' => 11, 'ECHANGE_WEB_SERVICE' => 12, 'ID_ENTITE' => 13, 'OBLIGATION_NOM_PRENOM_REQUERANT' => 14, 'OBLIGATION_NOM_ORGANISME_REQUERANT' => 15, 'OBLIGATION_REGISTRE_COMMERCE_REQUERANT' => 16, 'OBLIGATION_TELEPHONE_REQUERANT' => 17, 'VISIBILITE_REGISTRE_COMMERCE_REQUERANT' => 18, 'VISIBILITE_IDENTIFIANT_FISCAL' => 19, 'OBLIGATION_IDENTIFIANT_FISCAL' => 20, 'DELAI_CLOTURE_DEMANDE' => 21, 'NOTIFICATION_AVANT_DATE_REPONSE' => 22, 'BORNE_TRAITEMENT_DEMANDE' => 23, 'REGLE_NUMERO_DEMANDE_ENTRANT' => 24, 'REGLE_NUMERO_DEMANDE_SORTANT' => 25, 'REGLE_NUMERO_DEMANDE_INTERNE' => 26, 'VISIBILITE_BLOC_REPONSE_OBLIGATOIRE' => 27, 'VISIBILITE_BLOC_LIEU_CONCERNE' => 28, 'OBLIGATION_MESSAGE_DEMANDE' => 29, 'OBLIGATION_EMAIL_DEMANDEUR' => 30, 'OBLIGATION_SOUS_THEME' => 31, 'VISIBLITIE_CONDITION_UTILISATION' => 32, 'CONDITION_UTILISATION_AR' => 33, 'CONDITION_UTILISATION_FR' => 34, 'GESTION_DEMANDEUR_PAR_ENTITE' => 35, 'VALEUR_DEFAUT_TYPE_DEMANDE' => 36, 'VALEUR_DEFAUT_REPONSE_OBLIGATOIRE' => 37, 'ACCES_EXTRANET' => 38, 'LANGUE_PAR_DEFAUT_EXTRANET' => 39, 'GOOGLE_ANALYTICS' => 40, 'CHIFFREMENT' => 41, 'ID_ENTITE_CENTRALE' => 42, 'SERVICE_NOTIFICATION_SMS' => 43, 'LOGIN_SERVICE_SMS' => 44, 'PASS_SERVICE_SMS' => 45, 'CODE_ENVOI_SMS' => 46, 'URL_SERVICE_SMS' => 47, 'CIRCUIT_VALIDATION' => 48, 'VISIBILITE_MESSAGE_DEMANDE' => 49, 'CODE_SIGNATAIRE_CERTIFICAT' => 50, 'ACCES_STATISTIQUES' => 51, 'WEBSERVICE_DEMANDE' => 52, 'URL_WEBSERVICE_DEMANDE' => 53, 'JETON_WEBSERVICE' => 54, 'IDENTIFIANT_ENTITE_RECEPTION' => 55, 'IDENTIFIANT_SOUS_THEME' => 56, 'SCANNER' => 57, 'ACTIVATION_AUTH_SOCLE' => 58, 'AFFICHAGE_ENREGISTRER_GENERER_NUMERO' => 59, 'JETON_ORG_SERVICE' => 60, 'ONGLET_DEPUIS_1' => 61, 'ONGLET_DEPUIS_2' => 62, 'NOMBRE_REOUVERTURE' => 63, 'CENTRE_APPEL' => 64, 'URL_WS_CA' => 65, 'AUTHENTIFICATION_LDAP' => 66, 'IP_LDAP' => 67, 'BASE_DN_LDAP' => 68, 'USER_LDAP' => 69, 'PASSWORD_LDAP' => 70, 'SCHEMA_LDAP' => 71, 'PORT_LDAP' => 72, 'PROLONGATION' => 73, 'DUREE_PROLONGATION' => 74, 'ORGANISME_PARAMETRAGE' => 75, 'ORGANISME_GESTION_UTILISATEURS' => 76, 'TYPE_GESTION_UTILISATEUR' => 77, 'MULTI_AFFECTATION' => 78, 'TAUX_ECHEANCE' => 79, 'REPONSE_AFFECTATION_EXTERNE' => 80, 'INCREMENT_CONFIDENTIEL' => 81, 'OBLIGATION_EMETTEUR_COURRIER_ENTRANT' => 82, 'OBLIGATION_EMETTEUR_COURRIER_INTERNE' => 83, 'OBLIGATION_DESTINATAIRE_COURRIER_SORTANT' => 84, 'OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT' => 85, 'OBLIGATION_DESTINATAIRE_COURRIER_INTERNE' => 86, 'OBLIGATION_OBJET' => 87, 'OBLIGATION_SIGNATAIRE' => 88, 'GESTION_DEMANDEURS' => 89, 'NUMERO_FOURNISSEUR' => 90, 'TYPE_DELAI' => 91, 'NUM_PROVISOIRE' => 92, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'niveau_lieu' => 1, 'valeur_defaut_pays' => 2, 'valeur_defaut_region' => 3, 'valeur_defaut_province' => 4, 'valeur_par_defaut_commune' => 5, 'mode_affectation_demande' => 6, 'module_entite_lie_lieu' => 7, 'NBR_JOUR_DELAI_TRAITEMENT' => 8, 'OBLIGATION_LIEU_DEMANDE' => 9, 'MODULE_GOOGLE_MAPS' => 10, 'VISIBILITE_CHAMP_LOCALISATION' => 11, 'ECHANGE_WEB_SERVICE' => 12, 'ID_ENTITE' => 13, 'OBLIGATION_NOM_PRENOM_REQUERANT' => 14, 'OBLIGATION_NOM_ORGANISME_REQUERANT' => 15, 'OBLIGATION_REGISTRE_COMMERCE_REQUERANT' => 16, 'OBLIGATION_TELEPHONE_REQUERANT' => 17, 'VISIBILITE_REGISTRE_COMMERCE_REQUERANT' => 18, 'VISIBILITE_IDENTIFIANT_FISCAL' => 19, 'OBLIGATION_IDENTIFIANT_FISCAL' => 20, 'DELAI_CLOTURE_DEMANDE' => 21, 'NOTIFICATION_AVANT_DATE_REPONSE' => 22, 'BORNE_TRAITEMENT_DEMANDE' => 23, 'REGLE_NUMERO_DEMANDE_ENTRANT' => 24, 'REGLE_NUMERO_DEMANDE_SORTANT' => 25, 'REGLE_NUMERO_DEMANDE_INTERNE' => 26, 'VISIBILITE_BLOC_REPONSE_OBLIGATOIRE' => 27, 'VISIBILITE_BLOC_LIEU_CONCERNE' => 28, 'OBLIGATION_MESSAGE_DEMANDE' => 29, 'OBLIGATION_EMAIL_DEMANDEUR' => 30, 'OBLIGATION_SOUS_THEME' => 31, 'VISIBLITIE_CONDITION_UTILISATION' => 32, 'CONDITION_UTILISATION_AR' => 33, 'CONDITION_UTILISATION_FR' => 34, 'GESTION_DEMANDEUR_PAR_ENTITE' => 35, 'VALEUR_DEFAUT_TYPE_DEMANDE' => 36, 'VALEUR_DEFAUT_REPONSE_OBLIGATOIRE' => 37, 'ACCES_EXTRANET' => 38, 'LANGUE_PAR_DEFAUT_EXTRANET' => 39, 'GOOGLE_ANALYTICS' => 40, 'CHIFFREMENT' => 41, 'ID_ENTITE_CENTRALE' => 42, 'SERVICE_NOTIFICATION_SMS' => 43, 'LOGIN_SERVICE_SMS' => 44, 'PASS_SERVICE_SMS' => 45, 'CODE_ENVOI_SMS' => 46, 'URL_SERVICE_SMS' => 47, 'CIRCUIT_VALIDATION' => 48, 'VISIBILITE_MESSAGE_DEMANDE' => 49, 'CODE_SIGNATAIRE_CERTIFICAT' => 50, 'ACCES_STATISTIQUES' => 51, 'WEBSERVICE_DEMANDE' => 52, 'URL_WEBSERVICE_DEMANDE' => 53, 'JETON_WEBSERVICE' => 54, 'IDENTIFIANT_ENTITE_RECEPTION' => 55, 'IDENTIFIANT_SOUS_THEME' => 56, 'SCANNER' => 57, 'ACTIVATION_AUTH_SOCLE' => 58, 'AFFICHAGE_ENREGISTRER_GENERER_NUMERO' => 59, 'JETON_ORG_SERVICE' => 60, 'ONGLET_DEPUIS_1' => 61, 'ONGLET_DEPUIS_2' => 62, 'NOMBRE_REOUVERTURE' => 63, 'CENTRE_APPEL' => 64, 'URL_WS_CA' => 65, 'AUTHENTIFICATION_LDAP' => 66, 'IP_LDAP' => 67, 'BASE_DN_LDAP' => 68, 'USER_LDAP' => 69, 'PASSWORD_LDAP' => 70, 'SCHEMA_LDAP' => 71, 'PORT_LDAP' => 72, 'PROLONGATION' => 73, 'DUREE_PROLONGATION' => 74, 'ORGANISME_PARAMETRAGE' => 75, 'ORGANISME_GESTION_UTILISATEURS' => 76, 'TYPE_GESTION_UTILISATEUR' => 77, 'MULTI_AFFECTATION' => 78, 'TAUX_ECHEANCE' => 79, 'REPONSE_AFFECTATION_EXTERNE' => 80, 'INCREMENT_CONFIDENTIEL' => 81, 'OBLIGATION_EMETTEUR_COURRIER_ENTRANT' => 82, 'OBLIGATION_EMETTEUR_COURRIER_INTERNE' => 83, 'OBLIGATION_DESTINATAIRE_COURRIER_SORTANT' => 84, 'OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT' => 85, 'OBLIGATION_DESTINATAIRE_COURRIER_INTERNE' => 86, 'OBLIGATION_OBJET' => 87, 'OBLIGATION_SIGNATAIRE' => 88, 'GESTION_DEMANDEURS' => 89, 'NUMERO_FOURNISSEUR' => 90, 'TYPE_DELAI' => 91, 'NUM_PROVISOIRE' => 92, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE => array(
            ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE_1,
            ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE_2,
            ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE_3,
        ),
        ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU => array(
            ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU_0,
            ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE => array(
            ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE_0,
            ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE_1,
        ),
        ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS => array(
            ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS_0,
            ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION => array(
            ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION_0,
            ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION_1,
        ),
        ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE => array(
            ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE_0,
            ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT => array(
            ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT_0,
            ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL => array(
            ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL_0,
            ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL => array(
            ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL_0,
            ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE => array(
            ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE_0,
            ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE => array(
            ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE_0,
            ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE => array(
            ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE_0,
            ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR => array(
            ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR_0,
            ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME => array(
            ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME_0,
            ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME_1,
        ),
        ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION => array(
            ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION_0,
            ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION_1,
        ),
        ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE => array(
            ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE_0,
            ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE_1,
        ),
        ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE => array(
            ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE_0,
            ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE_1,
        ),
        ConfigurationOrgansimePeer::ACCES_EXTRANET => array(
            ConfigurationOrgansimePeer::ACCES_EXTRANET_0,
            ConfigurationOrgansimePeer::ACCES_EXTRANET_1,
        ),
        ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET => array(
            ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET_FR,
            ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET_AR,
        ),
        ConfigurationOrgansimePeer::CHIFFREMENT => array(
            ConfigurationOrgansimePeer::CHIFFREMENT_0,
            ConfigurationOrgansimePeer::CHIFFREMENT_1,
        ),
        ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS => array(
            ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS_0,
            ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS_1,
        ),
        ConfigurationOrgansimePeer::CIRCUIT_VALIDATION => array(
            ConfigurationOrgansimePeer::CIRCUIT_VALIDATION_0,
            ConfigurationOrgansimePeer::CIRCUIT_VALIDATION_1,
        ),
        ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE => array(
            ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE_0,
            ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE_1,
        ),
        ConfigurationOrgansimePeer::ACCES_STATISTIQUES => array(
            ConfigurationOrgansimePeer::ACCES_STATISTIQUES_0,
            ConfigurationOrgansimePeer::ACCES_STATISTIQUES_1,
        ),
        ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE => array(
            ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE_0,
            ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE_1,
        ),
        ConfigurationOrgansimePeer::SCANNER => array(
            ConfigurationOrgansimePeer::SCANNER_0,
            ConfigurationOrgansimePeer::SCANNER_1,
        ),
        ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE => array(
            ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE_0,
            ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE_1,
        ),
        ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO => array(
            ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO_0,
            ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO_1,
        ),
        ConfigurationOrgansimePeer::CENTRE_APPEL => array(
            ConfigurationOrgansimePeer::CENTRE_APPEL_0,
            ConfigurationOrgansimePeer::CENTRE_APPEL_1,
        ),
        ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP => array(
            ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP_0,
            ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP_1,
        ),
        ConfigurationOrgansimePeer::PROLONGATION => array(
            ConfigurationOrgansimePeer::PROLONGATION_0,
            ConfigurationOrgansimePeer::PROLONGATION_1,
        ),
        ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR => array(
            ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR_0,
            ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR_1,
        ),
        ConfigurationOrgansimePeer::MULTI_AFFECTATION => array(
            ConfigurationOrgansimePeer::MULTI_AFFECTATION_0,
            ConfigurationOrgansimePeer::MULTI_AFFECTATION_1,
        ),
        ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE => array(
            ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE_0,
            ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE_1,
        ),
        ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL => array(
            ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL_0,
            ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE => array(
            ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE_0,
            ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT => array(
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT_0,
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE => array(
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE_0,
            ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_OBJET => array(
            ConfigurationOrgansimePeer::OBLIGATION_OBJET_0,
            ConfigurationOrgansimePeer::OBLIGATION_OBJET_1,
        ),
        ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE => array(
            ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE_0,
            ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE_1,
        ),
        ConfigurationOrgansimePeer::GESTION_DEMANDEURS => array(
            ConfigurationOrgansimePeer::GESTION_DEMANDEURS_0,
            ConfigurationOrgansimePeer::GESTION_DEMANDEURS_1,
        ),
        ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR => array(
            ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR_0,
            ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR_1,
        ),
        ConfigurationOrgansimePeer::TYPE_DELAI => array(
            ConfigurationOrgansimePeer::TYPE_DELAI_1,
            ConfigurationOrgansimePeer::TYPE_DELAI_2,
        ),
        ConfigurationOrgansimePeer::NUM_PROVISOIRE => array(
            ConfigurationOrgansimePeer::NUM_PROVISOIRE_0,
            ConfigurationOrgansimePeer::NUM_PROVISOIRE_1,
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
        $toNames = ConfigurationOrgansimePeer::getFieldNames($toType);
        $key = isset(ConfigurationOrgansimePeer::$fieldKeys[$fromType][$name]) ? ConfigurationOrgansimePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ConfigurationOrgansimePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ConfigurationOrgansimePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ConfigurationOrgansimePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ConfigurationOrgansimePeer::$enumValueSets;
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
        $valueSets = ConfigurationOrgansimePeer::getValueSets();

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
        $values = ConfigurationOrgansimePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ConfigurationOrgansimePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ConfigurationOrgansimePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ID);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NIVEAU_LIEU);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ID_ENTITE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ACCES_EXTRANET);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::GOOGLE_ANALYTICS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CHIFFREMENT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::PASS_SERVICE_SMS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CODE_ENVOI_SMS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::URL_SERVICE_SMS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CIRCUIT_VALIDATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ACCES_STATISTIQUES);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::JETON_WEBSERVICE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::SCANNER);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::JETON_ORG_SERVICE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::CENTRE_APPEL);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::URL_WS_CA);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::IP_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::BASE_DN_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::USER_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::PASSWORD_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::SCHEMA_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::PORT_LDAP);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::PROLONGATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::DUREE_PROLONGATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::MULTI_AFFECTATION);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::TAUX_ECHEANCE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_OBJET);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::GESTION_DEMANDEURS);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::TYPE_DELAI);
            $criteria->addSelectColumn(ConfigurationOrgansimePeer::NUM_PROVISOIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.niveau_lieu');
            $criteria->addSelectColumn($alias . '.valeur_defaut_pays');
            $criteria->addSelectColumn($alias . '.valeur_defaut_region');
            $criteria->addSelectColumn($alias . '.valeur_defaut_province');
            $criteria->addSelectColumn($alias . '.valeur_par_defaut_commune');
            $criteria->addSelectColumn($alias . '.mode_affectation_demande');
            $criteria->addSelectColumn($alias . '.module_entite_lie_lieu');
            $criteria->addSelectColumn($alias . '.NBR_JOUR_DELAI_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_LIEU_DEMANDE');
            $criteria->addSelectColumn($alias . '.MODULE_GOOGLE_MAPS');
            $criteria->addSelectColumn($alias . '.VISIBILITE_CHAMP_LOCALISATION');
            $criteria->addSelectColumn($alias . '.ECHANGE_WEB_SERVICE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.OBLIGATION_NOM_PRENOM_REQUERANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_NOM_ORGANISME_REQUERANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_REGISTRE_COMMERCE_REQUERANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_TELEPHONE_REQUERANT');
            $criteria->addSelectColumn($alias . '.VISIBILITE_REGISTRE_COMMERCE_REQUERANT');
            $criteria->addSelectColumn($alias . '.VISIBILITE_IDENTIFIANT_FISCAL');
            $criteria->addSelectColumn($alias . '.OBLIGATION_IDENTIFIANT_FISCAL');
            $criteria->addSelectColumn($alias . '.DELAI_CLOTURE_DEMANDE');
            $criteria->addSelectColumn($alias . '.NOTIFICATION_AVANT_DATE_REPONSE');
            $criteria->addSelectColumn($alias . '.BORNE_TRAITEMENT_DEMANDE');
            $criteria->addSelectColumn($alias . '.REGLE_NUMERO_DEMANDE_ENTRANT');
            $criteria->addSelectColumn($alias . '.REGLE_NUMERO_DEMANDE_SORTANT');
            $criteria->addSelectColumn($alias . '.REGLE_NUMERO_DEMANDE_INTERNE');
            $criteria->addSelectColumn($alias . '.VISIBILITE_BLOC_REPONSE_OBLIGATOIRE');
            $criteria->addSelectColumn($alias . '.VISIBILITE_BLOC_LIEU_CONCERNE');
            $criteria->addSelectColumn($alias . '.OBLIGATION_MESSAGE_DEMANDE');
            $criteria->addSelectColumn($alias . '.OBLIGATION_EMAIL_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.OBLIGATION_SOUS_THEME');
            $criteria->addSelectColumn($alias . '.VISIBLITIE_CONDITION_UTILISATION');
            $criteria->addSelectColumn($alias . '.CONDITION_UTILISATION_AR');
            $criteria->addSelectColumn($alias . '.CONDITION_UTILISATION_FR');
            $criteria->addSelectColumn($alias . '.GESTION_DEMANDEUR_PAR_ENTITE');
            $criteria->addSelectColumn($alias . '.VALEUR_DEFAUT_TYPE_DEMANDE');
            $criteria->addSelectColumn($alias . '.VALEUR_DEFAUT_REPONSE_OBLIGATOIRE');
            $criteria->addSelectColumn($alias . '.ACCES_EXTRANET');
            $criteria->addSelectColumn($alias . '.LANGUE_PAR_DEFAUT_EXTRANET');
            $criteria->addSelectColumn($alias . '.GOOGLE_ANALYTICS');
            $criteria->addSelectColumn($alias . '.CHIFFREMENT');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_CENTRALE');
            $criteria->addSelectColumn($alias . '.SERVICE_NOTIFICATION_SMS');
            $criteria->addSelectColumn($alias . '.LOGIN_SERVICE_SMS');
            $criteria->addSelectColumn($alias . '.PASS_SERVICE_SMS');
            $criteria->addSelectColumn($alias . '.CODE_ENVOI_SMS');
            $criteria->addSelectColumn($alias . '.URL_SERVICE_SMS');
            $criteria->addSelectColumn($alias . '.CIRCUIT_VALIDATION');
            $criteria->addSelectColumn($alias . '.VISIBILITE_MESSAGE_DEMANDE');
            $criteria->addSelectColumn($alias . '.CODE_SIGNATAIRE_CERTIFICAT');
            $criteria->addSelectColumn($alias . '.ACCES_STATISTIQUES');
            $criteria->addSelectColumn($alias . '.WEBSERVICE_DEMANDE');
            $criteria->addSelectColumn($alias . '.URL_WEBSERVICE_DEMANDE');
            $criteria->addSelectColumn($alias . '.JETON_WEBSERVICE');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_ENTITE_RECEPTION');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_SOUS_THEME');
            $criteria->addSelectColumn($alias . '.SCANNER');
            $criteria->addSelectColumn($alias . '.ACTIVATION_AUTH_SOCLE');
            $criteria->addSelectColumn($alias . '.AFFICHAGE_ENREGISTRER_GENERER_NUMERO');
            $criteria->addSelectColumn($alias . '.JETON_ORG_SERVICE');
            $criteria->addSelectColumn($alias . '.ONGLET_DEPUIS_1');
            $criteria->addSelectColumn($alias . '.ONGLET_DEPUIS_2');
            $criteria->addSelectColumn($alias . '.NOMBRE_REOUVERTURE');
            $criteria->addSelectColumn($alias . '.CENTRE_APPEL');
            $criteria->addSelectColumn($alias . '.URL_WS_CA');
            $criteria->addSelectColumn($alias . '.AUTHENTIFICATION_LDAP');
            $criteria->addSelectColumn($alias . '.IP_LDAP');
            $criteria->addSelectColumn($alias . '.BASE_DN_LDAP');
            $criteria->addSelectColumn($alias . '.USER_LDAP');
            $criteria->addSelectColumn($alias . '.PASSWORD_LDAP');
            $criteria->addSelectColumn($alias . '.SCHEMA_LDAP');
            $criteria->addSelectColumn($alias . '.PORT_LDAP');
            $criteria->addSelectColumn($alias . '.PROLONGATION');
            $criteria->addSelectColumn($alias . '.DUREE_PROLONGATION');
            $criteria->addSelectColumn($alias . '.ORGANISME_PARAMETRAGE');
            $criteria->addSelectColumn($alias . '.ORGANISME_GESTION_UTILISATEURS');
            $criteria->addSelectColumn($alias . '.TYPE_GESTION_UTILISATEUR');
            $criteria->addSelectColumn($alias . '.MULTI_AFFECTATION');
            $criteria->addSelectColumn($alias . '.TAUX_ECHEANCE');
            $criteria->addSelectColumn($alias . '.REPONSE_AFFECTATION_EXTERNE');
            $criteria->addSelectColumn($alias . '.INCREMENT_CONFIDENTIEL');
            $criteria->addSelectColumn($alias . '.OBLIGATION_EMETTEUR_COURRIER_ENTRANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_EMETTEUR_COURRIER_INTERNE');
            $criteria->addSelectColumn($alias . '.OBLIGATION_DESTINATAIRE_COURRIER_SORTANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT');
            $criteria->addSelectColumn($alias . '.OBLIGATION_DESTINATAIRE_COURRIER_INTERNE');
            $criteria->addSelectColumn($alias . '.OBLIGATION_OBJET');
            $criteria->addSelectColumn($alias . '.OBLIGATION_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.GESTION_DEMANDEURS');
            $criteria->addSelectColumn($alias . '.NUMERO_FOURNISSEUR');
            $criteria->addSelectColumn($alias . '.TYPE_DELAI');
            $criteria->addSelectColumn($alias . '.NUM_PROVISOIRE');
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
        $criteria->setPrimaryTableName(ConfigurationOrgansimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConfigurationOrgansimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ConfigurationOrgansimePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ConfigurationOrgansime
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ConfigurationOrgansimePeer::doSelect($critcopy, $con);
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
        return ConfigurationOrgansimePeer::populateObjects(ConfigurationOrgansimePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ConfigurationOrgansimePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ConfigurationOrgansimePeer::DATABASE_NAME);

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
     * @param      ConfigurationOrgansime $obj A ConfigurationOrgansime object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ConfigurationOrgansimePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ConfigurationOrgansime object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ConfigurationOrgansime) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ConfigurationOrgansime object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ConfigurationOrgansimePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ConfigurationOrgansime Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ConfigurationOrgansimePeer::$instances[$key])) {
                return ConfigurationOrgansimePeer::$instances[$key];
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
        foreach (ConfigurationOrgansimePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ConfigurationOrgansimePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to configuration_organsime
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
        $cls = ConfigurationOrgansimePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ConfigurationOrgansimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ConfigurationOrgansimePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigurationOrgansimePeer::addInstanceToPool($obj, $key);
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
     * @return array (ConfigurationOrgansime object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ConfigurationOrgansimePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ConfigurationOrgansimePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ConfigurationOrgansimePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigurationOrgansimePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ConfigurationOrgansimePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ConfigurationOrgansimePeer::DATABASE_NAME)->getTable(ConfigurationOrgansimePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseConfigurationOrgansimePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseConfigurationOrgansimePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ConfigurationOrgansimeTableMap());
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
        return ConfigurationOrgansimePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ConfigurationOrgansime or Criteria object.
     *
     * @param      mixed $values Criteria or ConfigurationOrgansime object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ConfigurationOrgansime object
        }

        if ($criteria->containsKey(ConfigurationOrgansimePeer::ID) && $criteria->keyContainsValue(ConfigurationOrgansimePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ConfigurationOrgansimePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ConfigurationOrgansimePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ConfigurationOrgansime or Criteria object.
     *
     * @param      mixed $values Criteria or ConfigurationOrgansime object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ConfigurationOrgansimePeer::ID);
            $value = $criteria->remove(ConfigurationOrgansimePeer::ID);
            if ($value) {
                $selectCriteria->add(ConfigurationOrgansimePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ConfigurationOrgansimePeer::TABLE_NAME);
            }

        } else { // $values is ConfigurationOrgansime object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ConfigurationOrgansimePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the configuration_organsime table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ConfigurationOrgansimePeer::TABLE_NAME, $con, ConfigurationOrgansimePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigurationOrgansimePeer::clearInstancePool();
            ConfigurationOrgansimePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigurationOrgansime or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ConfigurationOrgansime object or primary key or array of primary keys
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
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ConfigurationOrgansimePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ConfigurationOrgansime) { // it's a model object
            // invalidate the cache for this single object
            ConfigurationOrgansimePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);
            $criteria->add(ConfigurationOrgansimePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ConfigurationOrgansimePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ConfigurationOrgansimePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            ConfigurationOrgansimePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ConfigurationOrgansime object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ConfigurationOrgansime $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ConfigurationOrgansimePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ConfigurationOrgansimePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ConfigurationOrgansimePeer::DATABASE_NAME, ConfigurationOrgansimePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ConfigurationOrgansime
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ConfigurationOrgansimePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);
        $criteria->add(ConfigurationOrgansimePeer::ID, $pk);

        $v = ConfigurationOrgansimePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ConfigurationOrgansime[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ConfigurationOrgansimePeer::DATABASE_NAME);
            $criteria->add(ConfigurationOrgansimePeer::ID, $pks, Criteria::IN);
            $objs = ConfigurationOrgansimePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseConfigurationOrgansimePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseConfigurationOrgansimePeer::buildTableMap();

